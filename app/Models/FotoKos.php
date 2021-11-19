<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoKos extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'front',
        'inside',
        'from_street',
        
    ];

    public function boardingHouses()
    {
        return $this->belongsTo(BoardingHouse::class, 'boardinghouse_id','id');
    }
}
