<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutasi extends Model
{
    protected $fillable = [
        'user_id','no_rek_baru','kantor_bayar_baru','alamat_baru','desa_baru','kecamatan_baru','kabupaten_baru','alamat_baru','no_telp_baru','status','no_rek_lama','kantor_bayar_lama','alamat_lama','no_telp_lama','desa_lama','kecamatan_lama','kabupaten_lama','bulan_id','komentar','ktp','kartu_keluarga','sk','buku_rekening'];
        public function pensiunan()
    {
        return $this->belongsTo('App\Pensiunan');
    }
    public function bulan()
    {
        return $this->belongsTo('App\Bulan');
    }
        public function user()
    {
        return $this->belongsTo('App\User');
    }
        protected $casts = [
    'status' => 'string'
    ];
    public function scopeReturned($query)
    {
        return $query->where('status', 'Verifikasi');
    }

    public function scopeBorrowed($query)
    {
        return $query->where('status', 'Belum Diverifikasi');
    }
}
