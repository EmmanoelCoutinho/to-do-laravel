<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        body {
            width: 100vw;
            height: 100vh;
            color: black;
            font-family: 'Oswald', sans-serif;

            padding-top: 20px;
        }

        h1 {
            font-size: 50px;
            font-weight: 500;
            margin-bottom: 40px;
        }

        a {
            text-decoration: none;
            font-size: 24px;
            font-weight: 500;
        }

        input {
            width: 120px;
            margin: 3px 0;
        }

        .info-div {
            margin: 20px 0;
            border-radius: 5px;
        }
    </style>

    <title>Todo App</title>
</head>

<body class="bg-dark d-flex flex-column justify-content-start align-items-center w-100">
    <h1 class="text-light">Suas tasks</h1>
    <p class="text-light">Caso não apareça nem um por favor adicione mais</p>
    <a href="/todo/create">Adicionar nova task</a>

    @foreach($data as $data)
    <div class="bg-light container info-div d-flex align-items-center">
        <div class="w-50">
            <h2>{{$data->title}}</h2>
            <?php
            if ($data->completed === 0) {
                echo "<p class='text-danger'>Em processo</p>";
            } else {
                echo "<p class='text-success'>Concluida</p>";
            }
            ?>
        </div>
        <div class="d-flex flex-column align-items-end w-50">
            <form action="{{ route('todo.destroy', $data->id)}}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" value="Excluir" class="btn btn-xs btn-danger btn-default">
            </form>
            <form action="{{ route('todo.update', $data->id)}}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="_method" value="PUT">
                <input type="submit" value="Concluir" class="btn btn-xs btn-success btn-default">
            </form>
        </div>
    </div>
    @endforeach

    <!-- Bootstrap -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
