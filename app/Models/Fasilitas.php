<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        
    ];

    public function boardingHouses()
    {
        return $this->belongsTo(BoardingHouse::class, 'boardinghouse_id','id');
    }

    
}
