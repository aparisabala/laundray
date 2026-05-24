<?php

namespace App\Http\Requests\Admin\Customer\Crud;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
class ValidateUpdateCustomer extends FormRequest
{
   /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function message() : array
    {
        return [
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules($request,$row): array
    {
        $rules =  [
            'name' => 'required|string|max:253',
            'address' => 'nullable|string|max:253'
        ];
        if($row->isDirty('mobile_number')) {
            $rules['mobile_number'] = 'required|string|max:253|unique:customers,mobile_number';
        }
        if($row->isDirty('whats_app')) {
            $rules['whats_app'] = 'required|string|max:253|unique:customers,whats_app';
        }
        return $rules;
    }

    protected function failedValidation(Validator $validator)
    {
        $response = response()->json([
            'success' => false,
            'errors'  => $validator->errors(),
        ]);
        throw (new ValidationException($validator, $response))->errorBag($this->errorBag);
    }
}
