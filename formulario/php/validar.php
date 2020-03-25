<?php

    require_once ( "variaveis.php" );
    require_once ( "funcoes.php" );
    
    $requerente = $_POST['requerente'];
    $matricula = $_POST['matricula'];
    $data_nascimento = $_POST['data_nascimento'];
    $naturalidade = $_POST['naturalidade'];
    $filiacao = $_POST['filiacao'];
    $curso = $_POST['curso'];
    $periodo = $_POST['periodo'];
    $turno = $_POST['turno'];
    $telefone1 = $_POST['telefone1'];
    $telefone2 = $_POST['telefone2'];
    $email = $_POST['email'];

    $opcao = $_POST['opcao'];

    $especificar = $_POST['especificar'];
    $justificar = $_POST['justificar'];

    $declaro = $_POST['declaro'];

    $coordenacao = $_POST['coordenacao'];
    $chaves = $_POST['chaves'];
    $biblioteca = $_POST['biblioteca'];
    $livros = $_POST['livros'];

    if(formEnviado($_POST)) {
        // retorna erros
        $vet_erros = gerarMensagensErro($dados);

        $erro_requerente = $vet_erros['requerente_error'];
        $erro_matricula = $vet_erros['matricula_error'];
        $erro_data_nascimento = $vet_erros['data_nascimento_error'];
        $erro_naturalidade = $vet_erros['naturalidade_error'];
        $erro_filiacao = $vet_erros['filiacao_error'];
        $erro_curso = $vet_erros['curso_error'];
        $erro_periodo = $vet_erros['periodo_error'];
        $erro_turno = $vet_erros['turno_error'];
        $erro_telefone = $vet_erros['telefones_error'];
        $erro_email = $vet_erros['email_error'];
        $erro_opcao = $vet_erros['opcao_error'];
        $erro_especificar = $vet_erros['especificar_error'];
        $erro_justificar = $vet_erros['justificar_error'];
        $erro_declaro = $vet_erros['declaro_error'];
        $erro_coordenacao = $vet_erros['coordenacao_error'];
        $erro_chaves = $vet_erros['chaves_error'];
        $erro_biblioteca = $vet_erros['biblioteca_error'];
        $erro_livros = $vet_erros['livros_error'];

        if(empty($vet_erros)) {  
            header('Location: mostrar.php?requerente='.$requerente.'&matricula='.$matricula.'&data_nascimento='.$data_nascimento.'&naturalidade='.$naturalidade.'&filiacao='.$filiacao.'&curso='.$curso.'&periodo='.$periodo.'&turno='.$turno.'&telefone1='.$telefone1.'&telefone2='.$telefone2.'&email='.$email.'&opcao='.$opcao.'&especificar='.$especificar.'&justificar='.$justificar.'&declaro='.$declaro.'&coordenacao='.$coordenacao.'&chaves='.$chaves.'&biblioteca='.$biblioteca.'&livros='.$livros);
        } else {
            header('Location: mostrar-error.php?requerente='.$requerente.'&matricula='.$matricula.'&data_nascimento='.$data_nascimento.'&naturalidade='.$naturalidade.'&filiacao='.$filiacao.'&curso='.$curso.'&periodo='.$periodo.'&turno='.$turno.'&telefone1='.$telefone1.'&telefone2='.$telefone2.'&email='.$email.'&opcao='.$opcao.'&especificar='.$especificar.'&justificar='.$justificar.'&declaro='.$declaro.'&coordenacao='.$coordenacao.'&chaves='.$chaves.'&biblioteca='.$biblioteca.'&livros='.$livros.'&erro_requerente='.$erro_requerente.'&erro_matricula='.$erro_matricula.'&erro_data_nascimento='.$erro_data_nascimento.'&erro_naturalidade='.$erro_naturalidade.'&erro_filiacao='.$erro_filiacao.'&erro_curso='.$erro_curso.'&erro_periodo='.$erro_periodo.'&erro_turno='.$erro_turno.'&erro_telefone='.$erro_telefone.'&erro_email='.$erro_email.'&erro_opcao='.$erro_opcao.'&erro_especificar='.$erro_especificar.'&erro_justificar='.$erro_justificar.'&erro_declaro='.$erro_declaro.'&erro_coordenacao='.$erro_coordenacao.'&erro_chaves='.$erro_chaves.'&erro_biblioteca='.$erro_biblioteca.'&erro_livros='.$erro_livros);
        }
    }
?>