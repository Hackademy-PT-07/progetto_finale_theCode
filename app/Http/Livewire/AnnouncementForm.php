<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;
use App\Models\Category;

class AnnouncementForm extends Component
{

    public $title;
    public $category;
    public $price;
    public $description;

    protected function rules()
    {
        return [
            'title' => 'required|max:50',
            'category' => 'required',
            'price' => 'required',
            'description' => 'required',
        ];
    }

    protected $messages = [
        'title.required' => 'Il campo titolo non può essere vuoto.',
        'title.max:50' => 'Il campo titolo non può contenere più di 50 caratteri',
        'category.required' => 'Il campo categoria non può essere vuoto.',
        'price.required' => 'Il campo prezzo non può essere vuoto.',
        'description.required' => 'Il campo descrizione non può essere vuoto.',
    ];

    public function storeAnnouncement()
    {

        $this->validate();

        Announcement::create([
            'title' => $this->title,
            'user_id' => auth()->user()->id,
            'category_id' => $this->category,
            'price' => $this->price,
            'description' => $this->description,
        ]);

        $this->emitTo('cards', 'loadAnnouncements');
        
        session()->flash('success','Annuncio creato correttamente');

        $this->clearForm();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function clearForm () {
        $this->title = '';
        $this->category = '';
        $this->price = '';
        $this->description = '';
    }

    public function render()
    {
        return view('livewire.announcement-form');
    }

}
