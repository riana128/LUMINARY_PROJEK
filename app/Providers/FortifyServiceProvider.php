<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Hash; // Tambahan untuk Hash::check
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;
use App\Models\User; // Tambahan untuk model User

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {   
        Fortify::registerView(function () {
            return view('auth.register');
        });

        // Mengatur tampilan login
        Fortify::loginView(function () {
            return view('auth.login');
        });

        // Custom authentication logic
        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $request->email)->first();
     
            if ($user && Hash::check($request->password, $user->password)) {
                return $user;
            }

            return null;
        });

        Fortify::requestPasswordResetLinkView(function () {
            return view('auth.forgot-password');
        });

        Fortify::resetPasswordView(function (Request $request) {
            return view('auth.reset-password', ['request' => $request]);
        });

        

        // Mengatur pembuatan pengguna baru (register)
        Fortify::createUsersUsing(CreateNewUser::class);

        // Mengatur pembaruan informasi profil pengguna
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);

        // Mengatur pembaruan kata sandi pengguna
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);

        // Mengatur reset kata sandi pengguna
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        // Membatasi percobaan login (rate limiting)
        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

        // Membatasi percobaan autentikasi dua faktor
        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
