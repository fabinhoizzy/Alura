<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Desafio Alura Backend #3</title>
</head>
<body>
    <div class="container">
        <h1>{{ $titulo }}</h1>
        <form action="/uploadArquivo" method="POST" class="row align-items-center" >
            <br>
            <div class="mb-3">
                <input class="form-control" type="file" id="arquivo" name="arquivo">
            </div>
        </form>
        <button class="btn btn-primary">Importar</button>
    </div>
</body>
</html>

