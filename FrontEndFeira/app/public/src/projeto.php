<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos da Feira Tecnológica</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/projeto.css">
    <?php
        include('../assets/components/head.php');
    ?>
</head>
<body>
    <?php
        include('../assets/components/header.php');
    ?>
     
    <div class="header">
        <h1 class="H1">Projetos da Feira Tecnológica</h1>
    </div>         

    <div class="search-container">
        <input type="text" placeholder="Pesquisar projeto..." class="search-bar">
    </div>

    <div class="filter-container">
        <button class="filter-button" id="openFilter">Filtro</button> 
        <div class="filter-modal" id="filterModal" style="display: none;">
            <h4>Curso</h4>
            <div class="btn-group" id="curso">
                <button>Administração</button>
                <button>Logística</button>
                <button>Recursos Humanos</button>
                <button>Informática</button>
                <button>Contabilidade</button>
                <button>Química</button>
            </div>

            <h4>Série</h4>
            <div class="btn-group" id="serie">
                <button>1º Ano</button>
                <button>2º Ano</button>
                <button>3º Ano</button>
                <button>1º Módulo</button>
                <button>2º Módulo</button>
                <button>3º Módulo</button>
            </div>

            <div class="filter-buttons">
                <button class="apply-button">Aplicar</button>
                <button class="clear-button">Limpar</button>
            </div>
        </div>
    </div>

    <script src="../assets/js/projeto.js"></script>
</body>
</html>
