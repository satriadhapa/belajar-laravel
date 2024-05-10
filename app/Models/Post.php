<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //protected $fillable = ['title','author','excerpt','body']; // boleh diisi

    protected $guarded = ['id']; // tidak boleh di isi
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
