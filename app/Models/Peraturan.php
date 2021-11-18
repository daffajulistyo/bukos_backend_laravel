<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
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

    public function boardingHouse()
    {
        return $this->belongsTo(BoardingHouse::class, 'peraturan_id' , 'id');
    }
}
