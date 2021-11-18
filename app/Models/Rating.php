<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'clean_r',
        
    ];

    public function boardingHouses()
    {
        return $this->hasMany(BoardingHouse::class, 'rating_id','id');
    }
}
