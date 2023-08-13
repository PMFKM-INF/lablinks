<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'name', 'email', 'phone_number', 'description'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }


}
