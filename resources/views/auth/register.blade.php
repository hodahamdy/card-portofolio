<link href="{{ asset('dashboard_assets/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Name</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="text-input" name="name_en" placeholder="write name in english" class="form-control">
                <span class="text-danger">{{ $errors->first('name_en') }}</span>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Email</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="text-input" name="email" placeholder="write Email" class="form-control">
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label"> Password</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="text-input" name="password" placeholder="enter your password" class="form-control">
                <span class="text-danger">{{ $errors->first('password') }}</span>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label"> confirm Password</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="text-input" name="password_confirmation" placeholder="confirm your password" class="form-control">
                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
            </div>
        </div>
        
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
