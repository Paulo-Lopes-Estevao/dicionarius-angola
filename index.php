<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require_once 'commons/meta-charsets.php'; ?>
    <title>Dicionarus - Calão e Gírias Angolanas</title>
</head>

<body>
    <div class="navbar navbar-expand-sm navbar-dark" id="topo">
        <h2>Dicionarius Angola</h2>
    </div>

    <?php require_once 'commons/navbar.php'; ?>

    <div class="container mt-5">
        <h3 class="text-center mt-2 mb-2">O que você procurar?</h3>
        <center>
            <input class="pes" type="text" placeholder="Mete uma palavra Camone (amigo)" />
                <span id="box_icone_busca">
                    <i id="icone_busca" class="fa fa-search"></i>
                </span>
        </center>
    </div>

    <div class="container mt-5">
        <div class="row" id="centro"></div>
    </div>

    <script src="./js/main.js"></script>
</body>

</html>