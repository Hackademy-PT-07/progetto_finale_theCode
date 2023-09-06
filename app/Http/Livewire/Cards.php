<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;
use Livewire\WithPagination;

class Cards extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $announcements;
    public $search;
    public $category_id;
    public $where;
    public $param;

    protected $listeners = [
        'loadResearch',
    ];

    public function mount()
    {
        if(is_numeric($this->param)) {
            $this->category_id = $this->param;
        } else { 
            $this->search = $this->param;
        }
        
        $this->loadAnnouncements();
    }

    public function loadResearch($searchRequest, $category_idRequest)
    {
        $this->search = $searchRequest;
        $this->category_id = $category_idRequest;
    }

    public function filterAnnouncements()
    {
        if ($this->category_id == 0 && !$this->search) {
            $this->loadAnnouncements();
        } else {
            if ($this->category_id != 0 && $this->search) {
                $this->announcements = Announcement::search($this->search)->where('category_id', $this->category_id)->where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(15);
            } else {
                if ($this->search) {
                    $this->announcements = Announcement::search($this->search)->where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(15);
                } else {
                    if ($this->category_id != 0) {
                        $this->announcements = Announcement::where('category_id', $this->category_id)->where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(15);
                    }
                }
            }
        }
    }

    public function loadAnnouncements()
    {
        return $this->announcements = Announcement::where('is_accepted', true)->orderBy('id', 'desc')->paginate(15);
    }

    public function loadHomeAnnouncements()
    {
        return $this->announcements = Announcement::where('is_accepted', true)->orderBy('id', 'desc')->get()->take(12);
    }

    public function getAnnouncements()
    {
        return $this->announcements;
    }

    public function getAnnouncementsLinks()
    {
        return $this->announcements->links();
    }

    public function render()
    {
        if ($this->where == 'home') {
            $this->loadHomeAnnouncements();
            return view('livewire.home-cards');
        } else {
            $this->filterAnnouncements();
            return view('livewire.cards');
        }
    }
}
