<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePensiunanRequest extends FormRequest
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
        'nip'                   => 'numeric|unique:pensiunans,nip',
        'nama_pensiunan'        => 'required|unique:pensiunans,nama_pensiunan',
        'tmpt_lahir'            => 'required',
        'tgl_lahir'             => 'date',
        'agama'                 => 'required',
        'jenis_kelamin'         => 'required',
        'golongan_darah'        => 'required',
        'status_pernikahan'     => 'required',
        'status_kepegawaian'    => 'required',
        'tgl_kenaikan_pangkat'  => 'date',
        'tgl_kenaikan_gaji'     => 'date',
        'alamat'                => 'required',
        'no_telp'               => 'numeric',
        'email'                 => 'required',
        'foto'                  => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ];
    }
}
