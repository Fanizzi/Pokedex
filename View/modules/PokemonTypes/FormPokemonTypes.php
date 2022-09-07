<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/Imgs/icon.png">
    <link rel="stylesheet" href="/CSS/forms.css">
    <title>Tipos de Pokémons</title>
</head>
<body>
    <header>
        <nav>
            <a href="/pokedex"> <img class='logo'  src="/Imgs/logo.png"> </a>
            <ul class="nav-list">
                <li> <a href="/pokedex">Início</a> </li>

                <li>
                    <div class="dropdown">
                        <a href="">Pokémons</a>
                        <div class="dropdown-content">
                            <a href="/pokemon/form">Registrar novo(a)</a>
                            <a href="/pokemon">Consulta</a>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="dropdown">
                        <a href="">Tipos de Pokémon</a>
                        <div class="dropdown-content">
                            <a href="/pokemontypes/form">Registrar novo(a)</a>
                            <a href="/pokemontypes">Consulta</a>
                        </div>
                    </div>
                </li>
                
                <li>
                    <div class="dropdown">
                        <a href="">Regiões</a>
                        <div class="dropdown-content">
                            <a href="/regions/form">Registrar novo(a)</a>
                            <a href="/regions">Consulta</a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <form action="/pokemontypes/save" method="post">
            <fieldset>
                <legend>Tipo do Pokemon</legend>
                <div class="input-list">
                    <input type="hidden" value="<?= $model->id ?>" name="id" />

                    <label for="nome">Tipo:</label>
                    <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" /> <br>

                    <br> <button type="submit" class="btn btn-primary">Enviar</button>
                </div> 
            </fieldset>
        </form>
    </main>
</body>
</html>