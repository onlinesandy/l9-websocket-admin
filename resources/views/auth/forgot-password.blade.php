<x-guest-layout>

    <div class="cls-content">
        <div class="cls-content-sm panel">
            <div class="panel-body">
                <div class="pad-ver">
                    <i class="pli-mail icon-3x"></i>
                </div>
                <p class="text-muted pad-btm">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </p>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group">
                        <x-text-input id="email" class="form-control" placeholder="Email" type="email" name="email" :value="old('email')" required
                        autofocus />
                    </div>
                    <div class="form-group text-right">
                        <x-primary-button class="btn btn-success btn-block">
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </div>
                </form>
                <div class="pad-top">
                    <a href="{{ route('login') }}" class="btn-link mar-rgt">Back to Login</a>
                </div>
            </div>
        </div>
    </div>



</x-guest-layout>
