<x-guest-layout>

    <div class="cls-content-lg panel">
        <div class="panel-body">
            <div class="mar-ver pad-btm">
                <h3 class="h4 mar-no">Create a New Account</h3>
            </div>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <x-text-input id="name" class="form-control" placeholder="Full name" type="text"
                                name="name" :value="old('name')" required autofocus />

                        </div>
                        <div class="form-group">
                            <x-text-input id="email" class="form-control" placeholder="E-mail" type="email"
                            name="email" :value="old('email')" required />

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <x-text-input id="password" class="form-control" placeholder="Password" type="password"
                            name="password" required autocomplete="new-password" />
                        </div>
                        <div class="form-group">
                            <x-text-input id="password_confirmation" class="form-control" placeholder="Confirm Password"
                                type="password" name="password_confirmation" required />
                        </div>
                    </div>
                </div>
                <div class="checkbox pad-btm text-left">
                    <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
                    <label for="demo-form-checkbox">I agree with the <a href="#" class="btn-link">Terms and
                            Conditions</a></label>
                </div>
                <x-primary-button class="btn btn-primary btn-block">
                    {{ __('Register') }}
                </x-primary-button>
            </form>
        </div>
        <div class="pad-all">
            Already have an account ? <a href="{{ route('login') }}" class="btn-link mar-rgt">Sign In</a>

        </div>
    </div>
</x-guest-layout>
