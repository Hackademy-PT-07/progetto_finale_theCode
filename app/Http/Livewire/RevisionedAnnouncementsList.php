<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\WithPagination;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\StatusAnnouncement;

class RevisionedAnnouncementsList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $modalTitle = "Conferma ripristino";
    public $modalBody = "Attenzione! Sei sicuro di voler revisionare nuovamente l'annuncio?";

    protected $announcements;

    public function mount()
    {
        $this->loadAnnouncements();
    }

    public function loadAnnouncements()
    {
        $this->announcements = Announcement::orderBy('updated_at', 'desc')->whereNotNull('is_accepted')->paginate(10);
    }

    public function getAnnouncements()
    {
        return $this->announcements;
    }

    public function reviewAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(null);

        $this->sendEmail($announcement);
    }

    public function sendEmail(Announcement $announcement)
    {
        Mail::to($announcement->user->email)->send(new StatusAnnouncement($announcement));
    }

    public function render()
    {
        $this->loadAnnouncements();

        return view('livewire.revisioned-announcements-list');
    }
}
