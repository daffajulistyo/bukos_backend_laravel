<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class FotoKamar extends Model
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
        'bathroom',
        'optional',
    ];

    public function boardingHouses()
    {
        return $this->belongsTo(BoardingHouse::class, 'boardinghouse_id','id');
    }

    
}
