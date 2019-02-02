<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePensiunanRequest extends StorePensiunanRequest
{
    public function rules()
    {

        $rules = parent::rules();
        $rules['nama_pensiunan'] = 'required|unique:pensiunans,nama_pensiunan,' . $this->route('pensiunan');
        return $rules;
    }
}
