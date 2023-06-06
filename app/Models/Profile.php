<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getWorkNameAttribute()
    {
        $kerja = $this->work_as;
        $data = str_replace("&middot;", ",", $kerja);
        return $data;
    }
}
