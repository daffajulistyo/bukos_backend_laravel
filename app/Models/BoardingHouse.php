<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardingHouse extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'location',
        'description',
        'price',
        'discount',
        'rating_id',
        'jenis_id',
        'type_id',
        'kelas_id',
        'peraturan_id',
        'pengelola_id',
        'fotokos_id',
        'fotokamar_id',
        'fasilitas_id',
        'chat_id',
        'years',
    ];
}
