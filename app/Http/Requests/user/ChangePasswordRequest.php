<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
    * @return array<string, mixed>
    */
   public function rules()
   {
      return [
         'new_password' => ['required', 'min:3', 'max:255'],
         'confirm_new_password' => ['required', 'same:new_password'],
         'old_password' => ['required']
      ];
   }
}
