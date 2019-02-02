<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePengajuan_mutasiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'no_rek_baru'           => 'required',
        'kantor_bayar_baru'     => 'required',
        'alamat_baru'           => 'required',
        'desa_baru'             => 'required',
        'kecamatan_baru'        => 'required',
        'kabupaten_baru'        => 'required',
        'alamat_baru'           => 'required',
        'no_telp_baru'          => 'required',
        'no_rek_lama'           => 'required',
        'kantor_bayar_lama'     => 'required',
        'alamat_lama'           => 'required',
        'no_telp_lama'          => 'required',
        'desa_lama'             => 'required',
        'kecamatan_lama'        => 'required',
        'kabupaten_lama'        => 'required',
        'bulan_id'              => 'required',
        'ktp'                   => 'required|image|mimes:jpg,png,jpeg|max:2048',
        'kartu_keluarga'        => 'required|image|mimes:jpg,png,jpeg|max:2048',
        'sk'                    => 'required|image|mimes:jpg,png,jpeg|max:2048',
        'buku_rekening'         => 'required|image|mimes:jpg,png,jpeg|max:2048'
    ];

    
    }
}
