<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    use HasFactory;
    protected $table = 'booking_detail';
    protected $fillable = ['booking_id', 'product_id'];

    public function product()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }

}
