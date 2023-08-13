<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'post_id','order_id','service_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
