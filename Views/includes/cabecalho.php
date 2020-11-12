<?php
try {

    //$caminho_base = dirname(__FILE__);

   /* $caminho = ;

    var_dump(is_file($caminho));

    echo $caminho;*/


   //include_once PATH_DAO . 'MySQL.php';

    $mysql = new MySQL();

    $stmt = $mysql->prepare("SELECT nome FROM usuarios WHERE id=:marcador_id ");
    $stmt->execute(array('marcador_id' => $_SESSION['usuario_logado']));

    $dados_do_usuario = $stmt->fetchObject();

} catch(Exception $e) {

    echo $e->getMessage();
}

?>

<header>
    <h1>
        SISGEN
        <small>Sistema de Gestão</small>
    </h1>

    <fieldset>
        <legend>Dados do usuário</legend>
        Bem-vindo <strong> <?= $dados_do_usuario->nome ?> </strong> | <a href="index.php?sair=true">Sair</a>
    </fieldset>

    <nav>
        <ul>
        <li> <a href="/"> Tela Inicial </a> </li>

            <li> <a href="/categoria/cadastrar"> Cadastrar Categoria </a> </li>
            <li> <a href="/categoria"> Listar Categoria </a> </li>

            <li> <a href="#"> Cadastrar Marca </a> </li>
            <li> <a href="#"> Listar Marca </a> </li>

            <li> <a href="/produto/cadastrar"> Cadastrar Produto </a> </li>
            <li> <a href="/produto"> Listar Produto </a> </li>
        </ul>
    </nav>
    <hr />
</header>