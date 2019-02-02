<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMemberRequest extends StoreMemberRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
        $rules = parent::rules();
        $rules['pensiunan_id'] = 'required|unique:users,pensiunan_id,' . $this->route('member'); 
        return $rules;    
    }
}
