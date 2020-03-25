<?php

    $requerente = $_GET['requerente'];
    $matricula = $_GET['matricula'];
    $data_nascimento = $_GET['data_nascimento'];
    $naturalidade = $_GET['naturalidade'];
    $filiacao = $_GET['filiacao'];
    $curso = $_GET['curso'];
    $periodo = $_GET['periodo'];
    $turno = $_GET['turno'];
    $telefone1 = $_GET['telefone1'];
    $telefone2 = $_GET['telefone2'];
    $email = $_GET['email'];

    $opcao = $_GET['opcao'];

    $especificar = $_GET['especificar'];
    $justificar = $_GET['justificar'];

    $declaro = $_GET['declaro'];

    $coordenacao = $_GET['coordenacao'];
    $chaves = $_GET['chaves'];
    $biblioteca = $_GET['biblioteca'];
    $livros = $_GET['livros'];

    $motivo = '';
    if($opcao == 1){
        $motivo = "2° Via (especificar) - CCA";
    }else if($opcao == 2){
        $motivo = "Aproveitamento de Disciplina (anexar histórico escolar e programa da disciplina) - Coordenação de Curso";
    }else if($opcao == 3){
        $motivo = "Matrícula fora do prazo (justificar) - CCA";
    }else if($opcao == 4){
        $motivo = "Cancelamento da Matrícula - CCA";
    }else if($opcao == 5){
        $motivo = "Colação de Grau / Colação Especial (justificar) - CCA";
    }else if($opcao == 6){
        $motivo = "Declaração (especificar) - CCA";
    }else if($opcao == 7){
        $motivo = "Diploma (especificar) - CCA";
    }else if($opcao == 8){
        $motivo = "Histórico Escolar - CCA";
    }else if($opcao == 9){
        $motivo = "Reabertura de Matrícula - CCA";
    }else if($opcao == 10){
        $motivo = "Segunda Chamada (anexar justificativa e especificar) - Coordenação de Curso";
    }else if($opcao == 11){
        $motivo = "Reingresso - CCA";
    }else if($opcao == 12){
        $motivo = "Trancamento de Disciplina (Especificar) - Coordenação de Curso";
    }else if($opcao == 13){
        $motivo = "Trancamento de Matrícula (anexar documentação comprobatória) - Coordenação de Pedagógica";
    }else if($opcao == 14){
        $motivo = "Transferência para outra instituição - CCA";
    }else if($opcao == 15){
        $motivo = "Validação de Conhecimento (especificar) - Coordenação de Curso";
    }else if($opcao == 16){
        $motivo = "Reajuste - CCA";
    }else if($opcao == 17){
        $motivo = "Recorreção de Prova - Coordenação de Curso";
    }else if($opcao == 18){
        $motivo = "AUXÍLIO - Transporte - Serviço Social";
    }else if($opcao == 19){
        $motivo = "AUXÍLIO - Moradia - Serviço Social";
    }else if($opcao == 20){
        $motivo = "AUXÍLIO - Óculos - Serviço Social";
    }else if($opcao == 21){
        $motivo = "AUXÍLIO - Pais e Mães - Serviço Social";
    }else if($opcao == 22){
        $motivo = "Outros";
    }

    $descricao_coordenacao = '';

    if($coordenacao == 1){
        $descricao_coordenacao = "O requerente NÃO deve chave de armário";
    }else if($coordenacao == 2){
        $descricao_coordenacao = "O requerente deve chave de armário";
    }

    $descricao_biblioteca = '';

    if($biblioteca == 1){
        $descricao_biblioteca = "O requerente NÃO deve livros na Biblioteca";
    }else if($coordenacao == 2){
        $descricao_biblioteca = "O requerente deve livros na Biblioteca";
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <title>Requerimento IFCE</title>

</head>
    <body class="central">
        <div class="box-central">
            <div class="card" style="margin-top: 20px; border-bottom: 3px solid #008000">
                <div class="card-body">
                    <img src="../ifce.png" />
                    <!-- <div class="name-titulo">
                        <h5 class="card-title"><strong>Guia de Requerimento</strong></h5>
                    </div> -->
                </div>
            </div>
            <div class="card" style="margin-top: 20px; margin-top: 20px; border-bottom: 3px solid #008000;">
                <h5 class="card-header info-color white-text text-center py-4" style="color: #008000;">
                    Requerimento gerado com Sucesso
                </h5>
                <div class="container">
                    <form id="contact-form" class="form" action="" method="" role="form">
                       
                        <div class="row">
                            <div class="col-md-3 col-lg-3">         
                                <div class="form-group">
                                    <label class="form-label" for="protocolo">Protocolo</label>
                                    <input type="text" class="form-control" id="protocolo" name="protocolo" value="<?php echo rand() ?>" disabled>
                                </div>
                            </div> 
                        </div>

                        <h6 class="info-color white-text">
                            Dados Pessoais
                        </h6>

                        <div class="row linha1">

                        </div> 

                        <div class="row">
                            <div class="col-md-6 col-lg-6">         
                                <div class="form-group">
                                    <label class="form-label" for="requerente">Requerente</label>
                                    <input type="text" class="form-control" id="requerente" name="requerente" value="<?php echo $requerente ?>" disabled>
                                </div>
                            </div> 
                            <div class="col-md-3 col-lg-3">
                                <div class="form-group"> 
                                    <label class="form-label" for="matricula">Matricula</label>
                                    <input type="text" class="form-control" id="matricula" name="matricula" value="<?php echo $matricula ?>" disabled>
                                </div> 
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <div class="form-group"> 
                                    <label class="form-label" for="data">Data de Nascimento</label>
                                    <input type="data" class="form-control" id="data_nascimento" name="data_nascimento" value="<?php echo $data_nascimento ?>" disabled>
                                </div> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 col-lg-3">
                                <div class="form-group"> 
                                    <label class="form-label" for="naturalidade">Naturalidade</label>
                                    <input type="text" class="form-control" id="naturalidade" name="naturalidade" value="<?php echo $naturalidade ?>" disabled>
                                </div> 
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group"> 
                                    <label class="form-label" for="filiacao">Filiação</label>
                                    <input type="text" class="form-control" id="filiacao" name="filiacao" value="<?php echo $filiacao ?>" disabled>
                                </div> 
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group"> 
                                    <label class="form-label" for="curso">Curso</label>
                                    <select class="form-control" id="curso" name="curso" disabled>
                                        <option selected value="<?php echo $curso ?>"><?php echo $curso ?></option>
                                    </select>
                                </div> 
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <div class="form-group"> 
                                    <label class="form-label" for="periodo">Período</label>
                                    <input type="text" class="form-control" id="periodo" name="periodo" value="<?php echo $periodo ?>" disabled>
                                </div> 
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <div class="form-group"> 
                                    <label class="form-label" for="turno">Turno</label>
                                    <select class="form-control" id="turno" name="turno" disabled>
                                        <option selected value="<?php echo $turno ?>"><?php echo $turno ?></option>
                                    </select>
                                </div> 
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-3 col-lg-3">         
                                <div class="form-group">
                                    <label class="form-label" for="telefone1">Telefone</label>
                                    <input type="text" class="form-control" id="telefone1" name="telefone1" value="<?php echo $telefone1 ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3">         
                                <div class="form-group">
                                    <label class="form-label" for="telefone2">Telefone 2</label>
                                    <input type="text" class="form-control" id="telefone2" name="telefone2" value="<?php echo $telefone2 ?>" disabled>
                                </div>
                            </div> 
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group"> 
                                    <label class="form-label" for="email">E-mail</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>" disabled>
                                </div> 
                            </div>
                        </div>

                        <h6 class="info-color white-text">
                            Assinale
                        </h6>

                        <div class="row linha2">

                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12" style="margin-bottom: 20px; ">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio" name="opcao" class="custom-control-input" value="<?php $opcao; ?>" checked disabled>
                                    <label class="custom-control-label" for="customRadio"><?php echo $motivo; ?></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group"> 
                                    <label class="form-label" for="especificar">Especificar</label>
                                    <textarea class="form-control" aria-label="especificar" id="especificar" name="especificar" disabled><?php echo $especificar; ?></textarea>
                                </div> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group"> 
                                    <label class="form-label" for="justificar">Justificar</label>
                                    <textarea class="form-control" aria-label="justificar" id="justificar" name="justificar" disabled><?php echo $justificar; ?></textarea>
                                </div> 
                            </div>
                        </div>
                        <h6 class="info-color white-text">
                            Profissionais IF
                        </h6>

                        <div class="row linha1">
                            
                        </div>

                        <div class="row" style="margin-left: 10px">
                            <div class="col">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="declaro" id="declaro" value="1" checked disabled>
                                    <label class="custom-control-label" for="declaro">DECLARO CONHECER O REGIMENTO DESTA IFE, BEM COMO O PRAZO NECESSÁRIO À TRAMITAÇÃO DO PROCESSO</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-5 col-md-5" style="margin-left: 20px">
                                <p>Visto (Coordenação de Assuntos Estudantis)</p>
                                <div class="custom-control custom-radio radio-sem">
                                    <input type="radio" id="coordenacao1" name="coordenacao" class="custom-control-input" value="<?php $coordenacao; ?>" disabled checked>
                                    <label class="custom-control-label" for="coordenacao1"><?php echo $descricao_coordenacao; ?></label>
                                </div>
                                <div class="form-group"> 
                                    <input type="text" class="form-control" id="chaves" name="chaves" value="<?php echo $chaves; ?>" disabled>
                                </div> 
                            </div>
                            <div class="col-lg-5 col-md-5" style="margin-left: 20px">
                                <p>Visto (Biblioteca)</p>
                                <div class="custom-control custom-radio radio-sem">
                                    <input type="radio" id="biblioteca1" name="biblioteca" class="custom-control-input" value="<?php $biblioteca; ?>" disabled checked>
                                    <label class="custom-control-label" for="biblioteca1"><?php echo $descricao_biblioteca; ?></label>
                                </div>
                                <div class="form-group"> 
                                    <input type="text" class="form-control" id="livros" name="livros" value="<?php echo $livros ?>" disabled>
                                </div> 
                            </div>
                        </div>

                        <div class="row" style="margin-top: 20px;">

                        </div>

                    </form>
                </div>
            </div>
            <div class="card bg-success" style="margin-top: 20px;">
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-0 col-md-0">

                        </div>
                        <div class="col" style="margin-top: 15px;">
                            <p class="text-center" style="color: #FFF;">&copy Todos os direitors reservados a Ingride Lima - IFCE - Campus Cedro</p>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </body>
</html>