<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    //
    use HasFactory;

    protected $tabel = 'buku';

    protected $fillable = [
        'judul',
        'idpengarang',
        'idkategori',
        'tahun_terbit',
        'sinopsis',
        'cover'
    ];

    public function kategori()
    {
        return $this -> belongsTo(Category::class);
    }
}
