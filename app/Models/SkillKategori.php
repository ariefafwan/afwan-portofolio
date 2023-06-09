<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillKategori extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function skill()
    {
        return $this->hasMany(Skill::class);
    }
}
