<x-guest-layout>

    <script type="text/javascript">
        function mostrarPassword(){
                var cambio = document.getElementById("password");
                if(cambio.type == "password"){
                    cambio.type = "text";
                    $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
                }else{
                    cambio.type = "password";
                    $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
                }
            } 
            
            $(document).ready(function () {
            //CheckBox mostrar contraseña
            $('#ShowPassword').click(function () {
                $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
            });
        });
        </script>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header alert alert-primary text-center font-weight-bold">
                           Iniciar sesión
                        </div>
                        <div class="card-body">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="">
                            {{-- <label for="email" class="form-label"></label>  --}}
                            <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus placeholder="Correo electrónico">
                        </div>
                        <div class="mt-4">
                            {{-- <label for="password" class="form-label"></label> --}}
                            <div class="input-group">
                            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Contraseña">
                            <div class="input-group-append">
                                <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                              </div>
                        </div>
                        </div>

                        <div class="form-check mt-2">
                            <input type="checkbox"  class="form-check-input" id="remember_me" name="remember" />
                            <label for="remember_me" class="form-check-label">
                                <span>{{ __('Recordar contraseña') }}</span>
                            </label>
                        </div>
                        <div class="mt-1 p-2">
                            <button class="btn btn-primary btn-sm btn-block font-weight-bold rounded-pill"> {{ __('Entrar') }}  </button>
                        </div>
                        <div class="d-flex justify-content-center links mb-2">
                            ¿No tiene una cuenta? <a class="font-weight-bold" href="{{ route('register') }}" class="ml-2">&nbsp;Registrarse</a>
                        </div>
                        <div class="d-flex justify-content-center links">
                        @if (Route::has('password.request'))
                            <a class="font-weight-bold" href="{{ route('password.request') }}">
                              ¿Olvidó su contraseña?
                            </a>
                        @endif
                        </div>



                    </form>
                        </div>
                    </div>
                </div>
            </div>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</x-guest-layout>
