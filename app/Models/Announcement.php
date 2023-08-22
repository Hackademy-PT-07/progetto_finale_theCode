<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Announcement extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['user_id', 'category_id', 'title', 'price', 'description'];


    public function toSearchableArray()
    {
        $category = $this->category;
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category' => $category,
        ];
        return $array;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function toBeRevisionedCount()
    {
        return Announcement::where('is_accepted', null)->count();
    }
    public function setAccepted($value)
    {
        $this->is_accepted = $value;
        $this->save();
        return true;
    }
}