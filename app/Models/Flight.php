<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'flight_number',
        'departure_city',
        'arrival_city',
        'departure_date',
        'departure_time',
        'arrival_date',
        'arrival_time',
        'available_seats',
        'price',
    ];

    /**
     * Get the bookings for the flight.
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}