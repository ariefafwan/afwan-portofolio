<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['skill_kategori'];

    public function skill_kategori()
    {
        return $this->belongsTo(SkillKategori::class);
    }
}
