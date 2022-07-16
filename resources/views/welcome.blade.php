<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Encurtador de Url</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Scripts and CSS import -->
    @vite

    <style>
        /*Adicionar um dark mode no fundo com fonte branca*/
        body{
            background-color: #343a40;
            color: white;
        }
    </style>
</head>

<body>
    <div id="app">

        <Root-Example></Root-Example>

    </div>

</body>

</html>
