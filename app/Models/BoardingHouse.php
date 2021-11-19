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
        'pengelola_id',
        'years',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'boardinghouse_id' , 'id');
    }

    public function jenis()
    {
        return $this->hasMany(Jenis::class, 'boardinghouse_id' , 'id');
    }

    public function type()
    {
        return $this->hasMany(Type::class, 'boardinghouse_id' , 'id');
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'boardinghouse_id' , 'id');
    }

    public function chats()
    {
        return $this->hasMany(Chat::class, 'boardinghouse_id' , 'id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'boardinghouse_id' , 'id');
    }

    public function pengelola()
    {
        return $this->hasOne(Pengelola::class, 'boardinghouse_id' , 'id');
    }

    public function fotoKos()
    {
        return $this->hasMany(FotoKos::class, 'boardinghouse_id' , 'id');
    }

    public function fotoKamars()
    {
        return $this->hasMany(FotoKamar::class, 'boardinghouse_id' , 'id');
    }

    public function fasilitas()
    {
        return $this->hasMany(Fasilitas::class, 'boardinghouse_id' , 'id');
    }

    public function peraturans()
    {
        return $this->hasMany(Peraturan::class, 'boardinghouse_id' , 'id');
    }


    // public function transaction()
    // {
    //     return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    // }

    // public function pengelola()
    // {
    //     return $this->hasOne(Pengelola::class,'id', 'pengelola_id');
    // }

    // public function rating()
    // {
    //     return $this->belongsTo(Rating::class, 'rating_id' , 'id');
    // }

    // public function fotoKoss()
    // {
    //     return $this->hasMany(FotoKos::class, 'id', 'fotokos_id');
    // }

    // public function fotoKamars()
    // {
    //     return $this->hasMany(FotoKamar::class,'id', 'fotokamar_id');
    // }

    // public function fasilitass()
    // {
    //     return $this->hasMany(Fasilitas::class, 'id' , 'fasilitas_id');
    // }

    // public function peraturans()
    // {
    //     return $this->hasMany(Peraturan::class, 'id', 'peraturan_id');
    // }

    // public function chats()
    // {
    //     return $this->hasMany(Chat::class, 'id', 'chat_id');
    // }





    // public function 
}
