<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Service extends Model
{
    use HasFactory;
    protected $fillable=['Title','Price','Description'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
