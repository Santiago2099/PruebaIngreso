<!DOCTYPE html>
<html lang="en">
<head>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Programador</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/programadores/create">Crear</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <br>
        <div class="container-fluid">
            @php if ($error == 1): @endphp
            <div class="alert alert-danger" role="alert">
                A ocurrido un error
            </div>
            @php endif @endphp
            <form action="/programadores/store" method="post">
                @csrf
                <div class="form-group">
                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre">
                            @error('nombre')
                                <br>
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label>Apellido</label>
                            <input type="text" class="form-control" name="apellido" placeholder="Ingrese su apellido">
                            @error('apellido')
                                <br>
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                                <br>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label>Cedula</label>
                            <input type="number" class="form-control" name="cedula" placeholder="Ingrese su cedula">
                            @error('cedula')
                                <br>
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                                <br>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <label>Correo</label>
                            <input type="email" class="form-control" name="correo" placeholder="Ingrese su correo">
                            @error('correo')
                                <br>
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                                <br>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label>Lenguaje</label>
                            <input type="text" class="form-control" name="lenguaje" placeholder="Ingrese su lenguaje">
                            @error('lenguaje')
                                <br>
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                                <br>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
</body>
</html>
