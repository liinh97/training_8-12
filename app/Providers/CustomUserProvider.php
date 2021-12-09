<?php

namespace App\Providers;

use App\Helpers\OpenEncryptHelper;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;

class CustomUserProvider extends EloquentUserProvider
{

    /**
     * Validate a user against the given credentials.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  array  $credentials
     * @return bool
     */
    public function validateCredentials(UserContract $user, array $credentials)
    {
        $plain = $credentials['password'];
        $hashedValue = $user->getAuthPassword();
        return (self::encrypt($plain) == $hashedValue);
    }

    public static function encrypt($plaintext, $key = ''): string
    {
        $key = empty($key) ? config('system.encrypt_key') : $key;
        return openssl_encrypt($plaintext, "AES-128-ECB", $key);
    }
}
