<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\WithPagination;
use Livewire\Component;

class AnnouncementsList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $announcements;
    public $modalTitle = "Conferma Cancellazione";
    public $modalBody = "Attenzione! Sei sicuro di voler eliminare definitivamente l'annuncio?";

    protected $listeners = [
        'loadAnnouncements',
    ];

    public function mount()
    {
        $this->loadAnnouncements();
    }

    public function loadAnnouncements()
    {
        $this->announcements = Announcement::where('user_id', auth()->user()->id)->orderBy('updated_at', 'desc')->paginate(10);
    }

    public function getAnnouncements()
    {
        return $this->announcements;
    }

    public function editAnnouncement(Announcement $announcementToEdit)
    {        
        $this->emitTo('edit-announcement-form', 'edit', $announcementToEdit);
    }

    public function deleteAnnouncement(Announcement $announcementToDelete)
    {
        $announcementToDelete->delete();
        
        $this->loadAnnouncements();

        session()->flash('success', 'Annuncio eliminato correttamente!');
    }

    public function render()
    {
        $this->loadAnnouncements();

        return view('livewire.announcements-list');
    }
}
