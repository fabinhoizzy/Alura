
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Importar Transações</title>
    <style>
        .container
        max-width: 500px;

        dl, ol, ul
        margin: 0;
        padding: 0;
        list-style: none;

    </style>
</head>

<body>

<div class="container mt-5">
    <h3 class="text-center mb-5">Importar transações</h3>
    <form action="{{ route('fileUpload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" placeholder="Selecionar arquivo">

        <button type="submit" class="btn btn-primary btn-block mt-4">
            Enviar arquivo
        </button>
    </form>
</div>


</body>
</html>
