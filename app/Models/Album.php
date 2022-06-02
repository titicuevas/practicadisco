<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

    protected $table = 'albumes';


    use HasFactory;


    public function temas() {

        return $this->belongsToMany(Tema::class);
    }
}