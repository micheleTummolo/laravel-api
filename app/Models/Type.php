<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Type extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'slug'];

    public function projects(){
        return $this->hasMany(Projects::calss);
    }

    public static function generateSlug($type){
        return Str::slug($type, '-');
    }
}
