<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use RealRashid\SweetAlert\Facades\Alert;
class LaporanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        Alert::warning('Input Tidak Valid', 'Perikasa Kembali Input Data Kamu !');
        return [
            "report_id" => ['required'],
            "title" => ['required'],
            "body" => ['required'],
            "file" => ['mimes:pdf,docx,xls'],
            "thumbnail" => ['mimes:jpg,jpeg,png']
        ];
    }


}
