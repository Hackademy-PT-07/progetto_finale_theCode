<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\Image;
use Livewire\Component;

class EditAnnouncementForm extends Component
{
    public $announcement;
    public $isDisabled = true;
    protected $announcementImages;
    public $announcement_id;

    protected $listeners = [
        'edit',
        'delete'
    ];

    protected function rules()
    {
        return [
            'announcement.title' => 'required|max:50',
            'announcement.category_id' => 'required',
            'announcement.price' => 'required',
            'announcement.description' => 'required',
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

    public function storeAnnouncement()
    {
        $this->validate();

        $this->announcement->user_id = auth()->user()->id;
        $this->announcement->is_accepted = null;
        $this->announcement->save();

        $this->announcement_id = null;
        $this->refresh();

        session()->flash('success', 'Annuncio modificato correttamente!');

        $this->newAnnouncement();

        $this->emitTo('announcements-list', 'loadAnnouncements');
    }

    public function newAnnouncement()
    {
        $this->announcement = new Announcement;
    }

    public function edit(Announcement $announcementToEdit, $announcement_id)
    {
        $this->refresh();
        $this->announcement = $announcementToEdit;
        $this->announcement_id = $announcement_id;
        $this->loadImages($announcement_id);
        $this->isDisabled = !$this->isDisabled;
    }

    public function delete(Announcement $announcementToDelete)
    {
        $this->refresh();
        $this->announcement = null;
        $announcementToDelete->delete();
        
        $this->emitTo('announcements-list', 'loadAnnouncements'); 
               
        session()->flash('success', 'Annuncio eliminato correttamente!');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function loadImages($announcement_id)
    {
        $announcement = Announcement::find($announcement_id);
        $this->announcementImages = $announcement->images()->get();
    }

    public function getImages()
    {
        return $this->announcementImages;
    }

    public function deleteImage($image_id, Announcement $announcement)
    {
        $image = Image::find($image_id);
        $image->delete();
        $this->loadImages($announcement->id);
    }

    public function refresh()
    {  
        $this->isDisabled = true;      
    }

    public function render()
    {
        if(is_numeric($this->announcement_id)) {
            $this->loadImages($this->announcement_id);
        }

        return view('livewire.edit-announcement-form');
    }
}