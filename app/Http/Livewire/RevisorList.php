<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Announcement;

class RevisorList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

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
        $this->announcements = Announcement::where('user_id','!=', auth()->user()->id)->where('is_accepted', null)->orderBy('updated_at', 'asc')->Paginate(10);
    }

    public function showAnnouncement(Announcement $announcementToShow)
    {
        $this->emitTo('preview-announcement', 'loadAnnouncementToShow', $announcementToShow);
    }

    public function getAnnouncements()
    {
        return $this->announcements;
    }

    public function render()
    {
        $this->loadAnnouncements();

        if (is_null($this->announcements) || $this->announcements->isEmpty()) {
            return <<<'blade'
                <div class="mx-auto mt-5">
                    <div class="revisor-titleBox">
                        <button wire:click="$emitTo('switch-table', 'switchTable')" class="switchBtn shadow floatingItem"><i class="fa-solid fa-repeat"></i></button>
                        <div class="col-8 search-msg">
                            <p>{{__('revisor_area.noAdds')}}</p>
                            <p>{{__('revisor_area.backHome')}}</p>
                            <a href="{{route('home')}}" class="btn-home">Home</a>
                        </div>
                    </div>
                </div>
            blade;
        }

        return view('livewire.revisor-list');
    }
}