<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class EditAnnouncementForm extends Component
{
    public $announcement;
    public $isDisabled = true;

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

        $this->isDisabled = true;

        session()->flash('success', 'Annuncio modificato correttamente!');

        $this->newAnnouncement();

        $this->emitTo('announcements-list', 'loadAnnouncements');
    }

    public function newAnnouncement()
    {
        $this->announcement = new Announcement;
    }

    public function edit(Announcement $announcementToEdit)
    {
        $this->isDisabled = true;
        $this->announcement = $announcementToEdit;
        $this->isDisabled = !$this->isDisabled;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function refresh()
    {  
        $this->isDisabled = true;      
    }

    public function render()
    {
        return view('livewire.edit-announcement-form');
    }
}