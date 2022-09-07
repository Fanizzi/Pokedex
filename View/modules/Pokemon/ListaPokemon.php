<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./../../../CSS/forms.css">
    <link rel="stylesheet" href="/CSS/forms.css">
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
        <center>
            <table id="table" class="table table-striped">    
                <tr class="tr-list">
                    <th></th>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Número</th>
                    <th>Imagem</th>
                    <th>Tipo</th>
                    <th>Região</th>
                </tr>

            <?php foreach($model->rows as $item): ?>
                <tr>
                    <td> <a href="/pokemon/delete?id=<?= $item->id ?>">X</a></td>
                    <td> <?= $item->id ?> </td>
                    <td> <a href="/pokemon/form?id=<?= $item->id ?>"> <?= $item->nome ?> </a></td>
                    <td> <?= $item->numero ?> </td>
                    <td> <?= $item->imagem ?> </td>
                    <td> <?= $item->id_Pokemon_Types ?> </td>
                    <td> <?= $item->id_Region ?> </td>
                </tr>
            <?php endforeach ?>
            
            <?php if(count($model->rows) == 0): ?>
                <tr>
                    <td colspan="2">Nenhum registro encontrado...</td>
                </tr>
            <?php endif ?>
            </table>
        </center>
    </main>
    
</body>
</html>