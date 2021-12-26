<?php

namespace App\Models;

use App\Models\User;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Court extends Model
{
    use HasFactory;
    protected $table = 'court';
    protected $fillable = [
        'name',
        'price',
        'date',
        'time',
        
    ];

    public function user() {
        return $this->belongsToMany(User::class);
        }
}
