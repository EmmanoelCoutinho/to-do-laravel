<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        body {
            width: 100vw;
            height: 100vh;

            color: whitesmoke;
            font-family: 'Oswald', sans-serif;
        }

        h1 {
            font-size: 50px;
            font-weight: 500;
        }

        body input {
            width: 250px;
            height: 40px;

            outline: none;
            border-radius: 5px;
            border: none;

            padding-left: 5px;
            margin-right: 5px;

            font-size: 16px;
            font-weight: 500;
        }

        body a {
            text-decoration: none;
            font-size: 16px;
            color: whitesmoke;
            font-weight: 500;
        }

        .link-div {
            margin-top: 10px;
            width: 350px;
        }
    </style>

    <title>Todo App - Adicionar nova task</title>
</head>

<body class='bg-dark d-flex flex-column justify-content-center align-items-center'>
    <h1>Adicione uma nova tarefa!</h1>
    <form action="/todo" method="POST" class="d-flex align-items-center">
        @csrf
        <input placeholder="Sua tarefa" name="title">
        <button type="submit" class="btn-success btn">Salvar!</button>
    </form>
    <div class="d-flex justify-content-center link-div">
        <a href="/todo">Minhas Tasks</a>
    </div>

    <!-- Bootstrap -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
