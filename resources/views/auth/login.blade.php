<x-guest-layout>

    <div class="cls-content-sm panel">
        <div class="panel-body">
            <div class="mar-ver pad-btm">
                <h3 class="h4 mar-no">Sign Into Your Account</h3>
            </div>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')"
                        required autofocus placeholder="Email" />
                </div>
                <div class="form-group">
                    <x-text-input id="password" class="form-control" type="password" name="password" required
                        autocomplete="current-password" placeholder="Password" />
                </div>
                <div class="checkbox pad-btm text-left">
                    <input id="remember_me" type="checkbox" class="magic-checkbox" name="remember">
                    <label for="demo-form-checkbox">{{ __('Remember me') }}</label>
                </div>
                <x-primary-button class="btn btn-primary btn-lg btn-block">
                    {{ __('Sign in') }}
                </x-primary-button>
            </form>
        </div>

        <div class="pad-all">
            @if (Route::has('password.request'))
                <a class="btn-link mar-rgt float-left" href="{{ route('password.request') }}"
                    style="display: block;width:120px;float:left;">
                    {{ __('Forgot password?') }}
                </a>
            @endif
            <a class="btn-link mar-lft  float-right" href="{{ route('register') }}"
                style="display: block;width:120px;float:right">
                {{ __('Create New Account') }}
            </a>
            <br />

        </div>
    </div>



</x-guest-layout>
