<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\WithPagination;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\StatusAnnouncement;

class RevisorChronologyList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $modalTitle = "Conferma ripristino";
    public $modalBody = "Attenzione! Sei sicuro di voler revisionare nuovamente l'annuncio?";

    protected $announcements;

    protected $listeners = [
        'loadAnnouncements',
    ];

    public function mount()
    {
        $this->loadAnnouncements();
    }

    public function loadAnnouncements()
    {
        $this->announcements = Announcement::where('revisioned_by', auth()->user()->id)->orderBy('updated_at', 'desc')->paginate(10);
    }

    public function getAnnouncements()
    {
        return $this->announcements;
    }

    public function reviewAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(null);
        $announcement->setRevisionedBy(null);

        $this->emitTo('revisor-list', 'loadAnnouncements');
        $this->emitTo('preview-announcement', 'loadFirstAnnouncement');


        //$this->sendEmail($announcement);
    }

    public function sendEmail(Announcement $announcement)
    {
        Mail::to($announcement->user->email)->send(new StatusAnnouncement($announcement));
    }

    public function render()
    {
        $this->loadAnnouncements();

        if (is_null($this->announcements) || $this->announcements->isEmpty()) {
            return <<<'blade'
                <div class="col-12 mx-auto text-center search-msg mt-5">
                    <div class="d-flex">
                        <button wire:click="$emitTo('switch-table', 'switchTable')"><i class="fa-solid fa-repeat"></i></button>
                        <h1>Cronologia annunci revisionati</h1>
                    </div>
                    <p>Non hai ancora revisionato nessun annuncio!</p>
                </div>
            blade;
        }

        return view('livewire.revisor-chronology-list');
    }
}
