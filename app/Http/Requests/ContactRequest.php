<?php

namespace App\Http\Requests;

class ContactRequest extends Request
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
            'name' => 'required|max:50',
            'email' => 'required|email',
            'message' => 'required|max:250'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Your name is required',
            'name.max' => 'Your name should not exceed 50 characters',
            'email.required' => 'Your email address is required',
            'email.email' => 'Enter a valid email address',
            'message.required' => 'The message is required',
            'message.max' => 'Maximum characters are 250'
        ];
    }


}
