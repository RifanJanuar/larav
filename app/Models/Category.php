<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    //
    use HasFactory;

    protected $table = 'kategori_tabel';

    protected $fillable = [
        'nama',
        'deskripsi'
    ];

    public function buku()
    {
        return $this ->hasMany(buku::class);
    }

}
