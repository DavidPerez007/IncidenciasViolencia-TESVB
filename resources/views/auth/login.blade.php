<x-guest-layout>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="card text-center">
                        <div class="card-header">
                           Login
                        </div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus >
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Example textarea</label>
                            <input type="password"  id="password" class="form-control" type="password" name="password" required autocomplete="current-password" >
                        </div>

                        <div class="form-check">
                            <input type="checkbox"  class="form-check-input" id="remember_me" name="remember" />
                            <label for="remember_me" class="form-check-label">
                                <span >{{ __('Remember me') }}</span>
                            </label>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success"> {{ __('Log in') }}  </button>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="btn btn-primary" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif



                    </form>
                        </div>
                    </div>
                </div>
            </div>


</x-guest-layout>
