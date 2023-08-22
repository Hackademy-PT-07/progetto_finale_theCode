<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class Cards extends Component
{
    use WithPagination;

    protected $announcements;
    public $categories;
    public $category_id;

    public $search;

    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->loadAnnouncements();
    }

    public function filterAnnouncements()
    {   
        if ($this->category_id == 0 && !$this->search) {
            $this->loadAnnouncements();
        } else {
            if($this->category_id != 0 && $this->search) {
                $this->announcements = Announcement::search($this->search)->orderBy('created_at', 'desc')->where('category_id', $this->category_id)->paginate(4);
            } else {
                if ($this->search) {
                    $this->announcements = Announcement::search($this->search)->orderBy('created_at', 'desc')->paginate(4);
                } else {
                    if ($this->category_id != 0) {
                        $this->announcements = Announcement::orderBy('created_at', 'desc')->where('category_id', $this->category_id)->paginate(4);
                    }
                }
            }
        }
    }

    public function loadAnnouncements()
    {
        return $this->announcements = Announcement::orderBy('id', 'desc')->paginate(4);
    }

    public function getAnnouncementsLinks()
    {
        return $this->announcements->links();
    }

    public function getAnnouncements()
    {
        return $this->announcements;
    }

    public function render()
    {
        $this->filterAnnouncements();

        return view('livewire.cards');
    }
}
