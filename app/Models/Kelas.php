<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'banner',
        
    ];

    public function boardingHouse()
    {
        return $this->belongsTo(BoardingHouse::class, 'kelas_id', 'id');
    }
}
