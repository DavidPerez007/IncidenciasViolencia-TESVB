<x-guest-layout>
   
    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif

<div class="row justify-content-center">
    <div class="col-6">
            <h4>¿Olvidó su contraseña?</h4>
                <span>No hay problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace de restablecimiento de contraseña que le permitirá elegir una nueva.</span>
       
        <div class="">

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mt-4">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus placeholder="Correo electrónico">
                  </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="btn btn-primary btn-sm btn-block font-weight-bold rounded-pill">
                    {{ __('Enviar') }}
                </button>
            </div>
            
        </form>
        </div>
    </div>
</div>
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</x-guest-layout>
