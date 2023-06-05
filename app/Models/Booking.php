<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = ['customer', 'location', 'wedding_date', 'number_phone', 'location_wedding', 'status', 'total_payment', 'deleted_at', 'created_at'];

    public function bookingDetail()
    {
        return $this->hasMany(BookingDetail::class, 'booking_id', 'id');
    }

    
}
