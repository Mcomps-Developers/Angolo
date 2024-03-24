<?php

namespace App\Actions\Fortify;

use App\Models\ExpertProfile;
use App\Models\Social;
use App\Models\User;
use App\Models\Wallet;
use App\Notifications\Welcome;
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
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number' => ['required', 'string', 'size:12', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'utype' => 'byr',
            'phone_number' => $input['phone_number'],
            'password' => Hash::make($input['password']),
        ]);
        // Create associated profile based on utype
        if ($input['utype'] === 'slr') {
            // Create parent profile
            ExpertProfile::create([
                'user_id' => $user->id,
            ]);
            Wallet::create([
                'user_id' => $user->id,
            ]);
            Social::create([
                'user_id' => $user->id,
            ]);
        } elseif ($input['utype'] === 'byr') {
            // Create teacher profile
            Wallet::create([
                'user_id' => $user->id,
            ]);
        }
        $user->notify(new Welcome($user));
        return $user;
    }
}
