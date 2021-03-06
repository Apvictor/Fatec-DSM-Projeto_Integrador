<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.js">
    <title>DoctorOn - Senha</title>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="images/LOGO.svg" id="icon" />
            </div>


            <div style="margin: 0 20px">
                <p>Inserir email e a nova senha para resetar.</p>
            </div>

            <!-- Login Form -->
            <form action="{{ route('reset.store') }}" method="POST">
                @csrf
                <input type="text" class="fadeIn second" name="email" placeholder="E-mail">
                <input type="text" class="fadeIn third" name="password" placeholder="Nova Senha">
                <input type="submit" class="fadeIn fourth" value="Atualizar Senha">
            </form>

            <div>
                @if (@isset($msg))
                    <p>{{ $msg }}</p>
                @endif
            </div>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="{{ route('login') }}">Voltar</a>
            </div>

        </div>
    </div>
</body>

</html>
