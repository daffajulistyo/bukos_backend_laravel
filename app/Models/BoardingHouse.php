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
        'transaction_id',
        'kelas_id',
        'peraturan_id',
        'pengelola_id',
        'fotokos_id',
        'fotokamar_id',
        'fasilitas_id',
        'chat_id',
        'years',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }

    public function pengelola()
    {
        return $this->hasOne(Pengelola::class,'id', 'pengelola_id');
    }

    public function rating()
    {
        return $this->belongsTo(Rating::class, 'rating_id' , 'id');
    }

    public function fotoKoss()
    {
        return $this->hasMany(FotoKos::class, 'id', 'fotokos_id');
    }

    public function fotoKamars()
    {
        return $this->hasMany(FotoKamar::class,'id', 'fotokamar_id');
    }

    public function fasilitass()
    {
        return $this->hasMany(Fasilitas::class, 'id' , 'fasilitas_id');
    }

    public function peraturans()
    {
        return $this->hasMany(Peraturan::class, 'id', 'peraturan_id');
    }

    public function chats()
    {
        return $this->hasMany(Chat::class, 'id', 'chat_id');
    }



    // public function 
}
