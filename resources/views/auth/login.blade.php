<!doctype html>
<html lang="ar" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">

    <title>Inicio de sesion en Laravel</title>
  </head>
  <body>
    
    <div class="container mt-5">
        <div class="row">
            <h2 class="text-center mt-4">Inicia sesion</h2>
            
            <div class="p-5 bg-white rounded shadow-lg">
                <form method='post' action="/login">
                    @csrf
                    <div class="form-group mb-2">
                        <input type="text" placeholder="Username / Email" class="form-control" name="username">
                    </div>

                    <div class="form-group mb-2">
                        <input type="password" placeholder="Password" class="form-control" name="password">
                    </div>

                    <div class="d-grid mt-3">
                        <input type="submit" value="Iniciar Sesion" class="btn btn-primary">
                    </div>
                </form>
                <div class="d-grid mt-3">
                        <h8>¿No has te has registrado?  <a href="/register">Registrate aquí</a></h8>
                    </div>


            </div>




        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>