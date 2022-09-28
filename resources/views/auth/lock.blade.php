<x-guest-layout>
    <div class="cls-content-sm panel">
        <div class="panel-body">
            <div class="mar-ver pad-btm">
                <h3 class="h4 mar-no">{{ auth()->user()->name }}</h3>
                <span class="text-muted">are you here?</span>
            </div>
            <div class="pad-btm mar-btm">
                <img alt="Profile Picture" class="img-lg img-circle img-border-light" src="{{ Vite::asset('resources/img/profile-photos/1.png') }}">
            </div>
            <p>Please enter your password to unlock the screen!</p>
            <form action="{{ route('login.unlock') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <div class="form-group text-right">
                    <x-primary-button class="btn btn-block btn-success">
                        {{ __('Unlock') }}
                    </x-primary-button>
                </div>
            </form>
            <div class="pad-ver">
                <a href="{{ route('login') }}" class="btn-link mar-rgt">Sign in using different account</a>
            </div>
        </div>
    </div>


</x-guest-layout>
