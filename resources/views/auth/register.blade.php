<!doctype html>
<html lang="ar" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">

    <title>Registro en Laravel</title>
  </head>
  <body>
    
    <div class="container mt-5">
        <div class="row">
            <h2 class="text-center mt-4">Registrate aquí</h2>
            
            <div class="p-5 bg-white rounded shadow-lg">
                <form method='post' action="/register">
                    @csrf
                    <div class="form-group mb-2">
                        <input type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
                        @error('name')
                            <span class="invalid-feedback">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-2">
                        <input type="text" placeholder="Username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{old('username')}}">
                        @error('username')
                            <span class="invalid-feedback">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-2">
                        <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"  value="{{old('email')}}">
                        @error('email')
                            <span class="invalid-feedback">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-2">
                        <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{old('password')}}">
                        @error('password')
                            <span class="invalid-feedback">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <input type="password" placeholder="Confirm Password"  class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{old('password_confirmation')}}">
                        @error('password')
                            <span class="invalid-feedback">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div>
                        <h8>¿Ya tienes cuenta? <a href="/login">Inicia sesion</a></h8>
                    </div>


                    <div class="d-grid mt-3">
                        <input type="submit" value="Registrarse" class="btn btn-primary">
                    </div>
                </form>


            </div>




        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>