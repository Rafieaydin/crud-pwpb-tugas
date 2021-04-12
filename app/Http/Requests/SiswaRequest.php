<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
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
        return [
            'nipd' => 'required|min:8',
            'nama_siswa' =>'required',
            'kelas' => 'required',
            'jenis_kelamin' =>'required',
            'alamat' =>'required'
        ];
    }
    public function messages(){
        return [
            'nipd.required' => 'Nipd tidak boleh kosong',
            'nama_siswa.required' => 'Nama siswa tidak boleh kosong',
            'kelas.required' => 'Kelas tidak boleh kosong',
            'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong'
        ];
    }
}
