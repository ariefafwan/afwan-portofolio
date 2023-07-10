<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ['kategori_blog'];

    public function kategori_blog()
    {
        return $this->belongsTo(KategoriBlog::class);
    }

    public function blog()
    {
        return $this->belongsToMany(Tag::class);
    }
}
