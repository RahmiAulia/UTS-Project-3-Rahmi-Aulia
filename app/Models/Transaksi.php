<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis';

    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'id_pengguna',
        'tanggal_transaksi',
        'total_harga',
    ];

    protected $attributes = [
        'total_harga' => 0, // Tentukan nilai default untuk total_harga
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }

    public function shipping()
    {
        return $this->belongsTo(Shipping::class, 'id_shipping');
    }

    public function detailTransaksi()
    {
        return $this->hasMany(Detail_transaksi::class, 'id_transaksi');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'id_transaksi');
    }

    public function hitungTotalHarga()
    {
        return $this->detailTransaksi->sum('subtotal');
    }
}
