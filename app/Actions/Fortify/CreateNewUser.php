<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'linkedin' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required','string','min:11','max:15'],
            'address' => ['required', 'string', 'max:255'],
            'password' => $this->passwordRules(),
            'new_password' => ['required|same:password'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'linkedin' => $input['linkedin'],
            'phone' => $input['phone'],
            'address' => $input['address'],
            'photo' => strtoupper(substr($input['name'],0,1)).'.png',
            'password' => Hash::make($input['password']),
        ]);
    }
}
