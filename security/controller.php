<?php
    require_once "conexao.php";
    require "model.php";
    require "service.php";
    
    if( $acao == 'setDevocional' ) {

        $devocional = new Devocional();
        $devocional->__set('titulo', $_POST['titulo']);
        $devocional->__set('palavra', $_POST['palavra']);
        $devocional->__set('versiculo', $_POST['versiculo']);
        $devocional->__set('versiculoBiblia', $_POST['versiculoBiblia']);
        $devocional->__set('audio', $_POST['audio']);

        $conexao = new Conexao();

        $devocionalService = new DevocionalService($conexao, $devocional);
    } else if( $acao == 'getDevocional' ) {
        $devocional = new Devocional();
        $conexao = new Conexao();

        $devocionalService = new DevocionalService($conexao, $devocional);
        $getDevocional = $devocionalService->getDevocional();
    }
    
?>