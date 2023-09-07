<?php

namespace App\Http\Livewire;

use App\Jobs\AddWatermark;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class AnnouncementForm extends Component
{
    use WithFileUploads;

    public $announcement;
    public $temporaryImages;
    public $images = [];

    protected $listeners = [
        'edit'
    ];

    protected function rules()
    {
        return [
            'announcement.title' => 'required|max:50',
            'announcement.category_id' => 'required',
            'announcement.price' => 'required',
            'announcement.description' => 'required',
            'temporaryImages.*' => 'image|max:1024',
            'images.*' => 'image|max:1024',
        ];
    }

    protected $messages = [
        'announcement.title.required' => 'Il campo titolo non può essere vuoto.',
        'announcement.title.max:50' => 'Il campo titolo non può contenere più di 50 caratteri',
        'announcement.category_id.required' => 'Il campo categoria non può essere vuoto.',
        'announcement.price.required' => 'Il campo prezzo non può essere vuoto.',
        'announcement.description.required' => 'Il campo descrizione non può essere vuoto.',
    ];

    public function mount()
    {
        $this->newAnnouncement();
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporaryImages.*' => 'image|max:1024',
        ])) {
            foreach ($this->temporaryImages as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function storeAnnouncement()
    {
        $this->validate();

        $this->announcement->user_id = auth()->user()->id;
        $this->announcement->save();

        if (count($this->images)) {
            foreach ($this->images as $image) {
                //$this->announcement->images()->create(['path' => $image->store('imgs', 'public')]);
                $newFileName = "announcements/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create(['path' => $image->store($newFileName, 'public')]);

                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 600, 400),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                ])->dispatch($newImage->id);
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        session()->flash('success', 'Annuncio creato correttamente!');

        $this->newAnnouncement();

        $this->emitTo('announcements-list', 'loadAnnouncements');
    }

    public function newAnnouncement()
    {
        $this->announcement = new Announcement;
        $this->images = [];
        $this->temporaryImages = [];
    }

    public function edit(Announcement $announcementToEdit)
    {
        $this->announcement = $announcementToEdit;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.announcement-form');
    }
}
