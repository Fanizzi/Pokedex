<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./../../../CSS/forms.css">
    <link rel="icon" type="image/x-icon" href="/Imgs/icon.png">    
    <title>Pokémons</title>
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
        <form id="form" method="post" action="/pokemon/save">
            <fieldset>
                <legend>Pokémon</legend>
                <div class="input-list">
                    <input type="hidden" value="<?= $model->id ?>" name="id" />

                    <label for="nome">Nome:</label> <br>
                    <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" /> <br />

                    <label for="numero">Numero:</label> <br>
                    <input id="numero" name="numero" value="<?= $model->numero ?>" type="text" /> <br />

                    <label for="pokemontype">Tipo:</label>
                    <br>
                    <select name="id_Pokemon_Types">
                        <?php foreach ($model->pokemontypes as $pokemontypes):?>
                            <option value="<?= $pokemontypes->id ?>">
                                <?= $pokemontypes->nome ?>
                            </option> 
                        <?php endforeach?>
                    </select> <br>
                        
                    <label for="region">Região: </label> 
                    <br>
                    <select name="id_Region">
                        <?php foreach ($model->region as $region):?>
                            <option value="<?= $region->id ?>">
                                <?= $region->nome ?>
                            </option> 
                        <?php endforeach?>
                    </select> <br>
                        
                    <label for="imagem">Escolha a Imagem do Pokémon: </label> <br>
                    <input type="file" name="imagem" id="imagem" value="<?= $model->imagem ?>"> <br>
                        
                    <br> <button type="submit" class="btn btn-primary">Enviar</button>
                </div>                      
            </fieldset>
        </form>
    </main>
    
</body>
</html>