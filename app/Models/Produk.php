<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';

    public function merk(): BelongsTo
    {
        return $this->belongsTo(Merk::class);
    }

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    protected $fillable = [
        'nama_produk',
        'harga',
        'merk_id',
        'kategori_id'
    ];
}
