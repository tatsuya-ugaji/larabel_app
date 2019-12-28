<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class BalanceOfPaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == 'actual/register')
        {
            return true;
        } elseif ($this->path() == 'actual/edit/'.$this->id) {
            return true;
        } elseif ($this->path() == 'budget/register') {
            return true;
        } elseif ($this->path() == 'budget/edit/'.$this->id) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required',
            'category' => 'required',
            'actual_date' => 'required|date',
            'bp_flg' => 'boolean',
            'amount' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'actual_date.required' => '発生日は必須項目です。',
            'amount.required' => '金額は必須項目です。'
        ];
    }
}
