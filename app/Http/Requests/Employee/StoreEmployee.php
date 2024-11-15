<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployee extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            "name" => "required",
            "firts_last_name" => "required",
            "second_last_name" => "required",
            "birthdate" => "required",
            "gender" => "required",
            "phone" => "required",

            "type_document" => "required",
            "document_number" => "required",

            "ci_extension_id" => "required",
            "address_1" => "required",
            "start_date" => "required",

            "contract_id" => "required",
            "job_id" => "required",




        ];
    }
}
