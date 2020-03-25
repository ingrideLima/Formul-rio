<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <title>Requerimento IFCE</title>

    <?php
        $dia = date("d");
        $mes = date("n");
        $ano = date("Y");
        $data_completa = '';

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

        //erros
        $erro_requerente = $_GET['erro_requerente'];
        $erro_matricula = $_GET['erro_matricula'];
        $erro_data_nascimento = $_GET['erro_data_nascimento'];
        $erro_naturalidade = $_GET['erro_naturalidade'];
        $erro_filiacao = $_GET['erro_filiacao'];
        $erro_curso = $_GET['erro_curso'];
        $erro_periodo = $_GET['erro_periodo'];
        $erro_turno = $_GET['erro_turno'];
        $erro_telefone = $_GET['erro_telefone'];
        $erro_email = $_GET['erro_email'];
        $erro_opcao = $_GET['erro_opcao'];
        $erro_especificar = $_GET['erro_especificar'];
        $erro_justificar = $_GET['erro_justificar'];
        $erro_declaro = $_GET['erro_declaro'];
        $erro_coordenacao = $_GET['erro_coordenacao'];
        $erro_chaves = $_GET['erro_chaves'];
        $erro_biblioteca = $_GET['erro_biblioteca'];
        $erro_livros = $_GET['erro_livros'];

        if($mes == 1){
            $data_completa = "CEDRO - CE, $dia de Janeiro de $ano";
        }else if($mes == 2){
            $data_completa = "CEDRO - CE, $dia de Fevereiro de $ano";
        }else if($mes == 3){
           $data_completa = "CEDRO - CE, $dia de Março de $ano";
        }else if($mes == 4){
            $data_completa = "CEDRO - CE, $dia de Abril de $ano";
        }else if($mes == 5){
            $data_completa = "CEDRO - CE, $dia de Maio de $ano";
        }else if($mes == 6){
            $data_completa = "CEDRO - CE, $dia de Junho de $ano";
        }else if($mes == 7){
            $data_completa = "CEDRO - CE, $dia de Julho de $ano";
        }else if($mes == 8){
            $data_completa = "CEDRO - CE, $dia de Agosto de $ano";
        }else if($mes == 9){
            $data_completa = "CEDRO - CE, $dia de Setembro de $ano";
        }else if($mes == 10){
            $data_completa = "CEDRO - CE, $dia de Outubro de $ano";
        }else if($mes == 11){
            $data_completa = "CEDRO - CE, $dia de Novembro de $ano";
        }else if($mes == 12){
            $data_completa = "CEDRO - CE, $dia de Dezembro de $ano";
        }
        
    ?>

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
                <h5 class="card-header info-color white-text text-center py-4 bg-success">
                    Guia de Requerimento
                </h5>
                <div class="container">
                    <form id="contact-form" class="form" action="validar.php" method="POST" role="form">

                        <h6 class="info-color white-text">
                            Dados Pessoais
                        </h6>

                        <div class="row linha1">

                        </div> 

                        <div class="row">
                            <div class="col-md-6 col-lg-6">         
                                <div class="form-group">
                                    <label class="form-label" for="requerente">Requerente</label>
                                    <input type="text" class="form-control" id="requerente" name="requerente" value="<?php echo $requerente; ?>">
                                    <?php 
                                        if($erro_requerente != ""){
                                            echo "<p style='color: red'>";
                                                    echo $erro_requerente; 
                                            echo "</p>";
                                        }
                                    ?>
                                </div>
                                
                            </div> 
                            <div class="col-md-3 col-lg-3">
                                <div class="form-group"> 
                                    <label class="form-label" for="matricula">Matricula</label>
                                    <input type="text" class="form-control" id="matricula" name="matricula" value="<?php echo $matricula; ?>">
                                    <?php 
                                        if($erro_matricula != ""){
                                            echo "<p style='color: red'>";
                                                    echo $erro_matricula; 
                                            echo "</p>";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <div class="form-group"> 
                                    <label class="form-label" for="data">Data de Nascimento</label>
                                    <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?php echo $data_nascimento; ?>">
                                    <?php 
                                        if($erro_data_nascimento != ""){
                                            echo "<p style='color: red'>";
                                                    echo $erro_data_nascimento; 
                                            echo "</p>";
                                        }
                                    ?>
                                </div> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 col-lg-3">
                                <div class="form-group"> 
                                    <label class="form-label" for="naturalidade">Naturalidade</label>
                                    <input type="text" class="form-control" id="naturalidade" name="naturalidade" value="<?php echo $naturalidade ?>">
                                    <?php 
                                        if($erro_naturalidade != ""){
                                            echo "<p style='color: red'>";
                                                    echo $erro_naturalidade; 
                                            echo "</p>";
                                        }
                                    ?>
                                </div> 
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group"> 
                                    <label class="form-label" for="filiacao">Filiação</label>
                                    <input type="text" class="form-control" id="filiacao" name="filiacao" value="<?php echo $filiacao ?>">
                                    <?php 
                                        if($erro_filiacao != ""){
                                            echo "<p style='color: red'>";
                                                    echo $erro_filiacao; 
                                            echo "</p>";
                                        }
                                    ?>
                                </div> 
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group"> 
                                    <label class="form-label" for="curso">Curso</label>
                                    <select class="form-control" id="curso" name="curso">
                                        <?php
                                            if($curso == ""){
                                                echo "<option selected value=''>Curso</option>";
                                                echo "<option value='fisica'>Física</option>";
                                                echo "<option value='matematica'>Matemática</option>";
                                                echo "<option value='mecatronica'>Mecatrônica</option>";
                                                echo "<option value='sistemas de informacao'>Sistemas de Informação</option>";
                                            }else if($curso == "fisica"){
                                                echo "<option selected value='fisica'>Física</option>";
                                                echo "<option value='matematica'>Matemática</option>";
                                                echo "<option value='mecatronica'>Mecatrônica</option>";
                                                echo "<option value='sistemas de informacao'>Sistemas de Informação</option>";
                                            }else if($curso == "matematica"){
                                                echo "<option value='fisica'>Física</option>";
                                                echo "<option selected value='matematica'>Matemática</option>";
                                                echo "<option value='mecatronica'>Mecatrônica</option>";
                                                echo "<option value='sistemas de informacao'>Sistemas de Informação</option>";
                                            }else if($curso == "mecatronica"){
                                                echo "<option value='fisica'>Física</option>";
                                                echo "<option value='matematica'>Matemática</option>";
                                                echo "<option selected value='mecatronica'>Mecatrônica</option>";
                                                echo "<option value='sistemas de informacao'>Sistemas de Informação</option>";
                                            }else if($curso == "sistemas de informacao"){
                                                echo "<option value='fisica'>Física</option>";
                                                echo "<option value='matematica'>Matemática</option>";
                                                echo "<option value='mecatronica'>Mecatrônica</option>";
                                                echo "<option selected value='sistemas de informacao'>Sistemas de Informação</option>";
                                            }
                                        ?>
                                    </select>
                                    <?php
                                        if($erro_curso != ""){
                                            echo "<p style='color: red'>";
                                                    echo $erro_curso; 
                                            echo "</p>";
                                        }
                                    ?>
                                </div> 
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <div class="form-group"> 
                                    <label class="form-label" for="periodo">Período</label>
                                    <input type="text" class="form-control" id="periodo" name="periodo" value="<?php echo $periodo ?>">
                                    <?php
                                        if($erro_periodo != ""){
                                            echo "<p style='color: red'>";
                                                    echo $erro_periodo; 
                                            echo "</p>";
                                        }
                                    ?>
                                </div> 
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <div class="form-group"> 
                                    <label class="form-label" for="turno">Turno</label>
                                    <select class="form-control" id="turno" name="turno">
                                    <?php 
                                        if($turno == ""){
                                            echo "<option selected value=''>Escolha o Turno</option>";
                                            echo "<option value='manha'>Manhã</option>";
                                            echo "<option value='tarde'>Tarde</option>";
                                            echo "<option value='noite'>Noite</option>";
                                        }else if($turno == "manha"){
                                            echo "<option selected value='manha'>Manhã</option>";
                                            echo "<option value='tarde'>Tarde</option>";
                                            echo "<option value='noite'>Noite</option>";
                                        }else if($turno == "tarde"){
                                            echo "<option value='manha'>Manhã</option>";
                                            echo "<option selected value='tarde'>Tarde</option>";
                                            echo "<option value='noite'>Noite</option>";
                                        }else if($turno == "noite"){
                                            echo "<option value='manha'>Manhã</option>";
                                            echo "<option value='tarde'>Tarde</option>";
                                            echo "<option selected value='noite'>Noite</option>";
                                        }
                                    ?>
                                    </select>
                                    <?php
                                        if($erro_turno != ""){
                                            echo "<p style='color: red'>";
                                                    echo $erro_turno; 
                                            echo "</p>";
                                        }
                                    ?>
                                </div> 
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-3 col-lg-3">         
                                <div class="form-group">
                                    <label class="form-label" for="telefone1">Telefone</label>
                                    <input type="text" class="form-control" id="telefone1" name="telefone1" value="<?php echo $telefone1; ?>">
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3">         
                                <div class="form-group">
                                    <label class="form-label" for="telefone2">Telefone 2</label>
                                    <input type="text" class="form-control" id="telefone2" name="telefone2" value=<?php echo $telefone2; ?>>
                                </div>
                            </div> 
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group"> 
                                    <label class="form-label" for="email">E-mail</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <?php
                                    if($erro_telefone != ""){
                                        echo "<p style='color: red'>";
                                                echo $erro_telefone; 
                                        echo "</p>";
                                    }
                                ?>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <?php
                                    if($erro_email != ""){
                                        echo "<p style='color: red'>";
                                                echo $erro_email; 
                                        echo "</p>";
                                    }
                                ?>
                            </div>
                        </div> 


                        <h6 class="info-color white-text">
                            Assinale
                        </h6>

                        <div class="row linha2">

                        </div>
                        
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <?php
                                    if($erro_opcao != ""){
                                        echo "<p style='color: red'>";
                                                echo $erro_opcao; 
                                        echo "</p>";
                                    }else{
                                        echo "<p style='color: blue'>";
                                                echo "Assinale novemente a opção: $opcao"; 
                                        echo "</p>";
                                    }
                                ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="opcao" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="customRadio1">2° Via (especificar) - <strong>CCA</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="opcao" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="customRadio2">Aproveitamento de Disciplina (anexar histórico escolar e programa da disciplina) - <strong>Coordenação de Curso</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="opcao" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="customRadio3">Matrícula fora do prazo (justificar) - <strong>CCA</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio4" name="opcao" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="customRadio4">Cancelamento da Matrícula - <strong>CCA</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio5" name="opcao" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="customRadio5">Colação de Grau / Colação Especial (justificar) - <strong>CCA</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio6" name="opcao" class="custom-control-input" value="6">
                                    <label class="custom-control-label" for="customRadio6">Declaração (especificar) - <strong>CCA</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio7" name="opcao" class="custom-control-input" value="7">
                                    <label class="custom-control-label" for="customRadio7">Diploma (especificar) - <strong>CCA</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio8" name="opcao" class="custom-control-input" value="8">
                                    <label class="custom-control-label" for="customRadio8">Histórico Escolar - <strong>CCA</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio9" name="opcao" class="custom-control-input" value="9">
                                    <label class="custom-control-label" for="customRadio9">Reabertura de Matrícula - <strong>CCA</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio10" name="opcao" class="custom-control-input" value="10">
                                    <label class="custom-control-label" for="customRadio10">Segunda Chamada (anexar justificativa e especificar) - <strong>Coordenação de Curso</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio11" name="opcao" class="custom-control-input" value="11">
                                    <label class="custom-control-label" for="customRadio11">Reingresso - <strong>CCA</strong></label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio12" name="opcao" class="custom-control-input" value="12">
                                    <label class="custom-control-label" for="customRadio12">Trancamento de Disciplina (Especificar) - <strong>Coordenação de Curso</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio13" name="opcao" class="custom-control-input" value="13">
                                    <label class="custom-control-label" for="customRadio13">Trancamento de Matrícula (anexar documentação comprobatória) - <strong>Coordenação de Pedagógica</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio14" name="opcao" class="custom-control-input" value="14">
                                    <label class="custom-control-label" for="customRadio14">Transferência para outra instituição - <strong>CCA</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio15" name="opcao" class="custom-control-input" value="15">
                                    <label class="custom-control-label" for="customRadio15">Validação de Conhecimento (especificar) - <strong>Coordenação de Curso</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio16" name="opcao" class="custom-control-input" value="16">
                                    <label class="custom-control-label" for="customRadio16">Reajuste - <strong>CCA</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio17" name="opcao" class="custom-control-input" value="17">
                                    <label class="custom-control-label" for="customRadio17">Recorreção de Prova - <strong>Coordenação de Curso</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio18" name="opcao" class="custom-control-input" value="18">
                                    <label class="custom-control-label" for="customRadio18">AUXÍLIO - Transporte - <strong>Serviço Social</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio19" name="opcao" class="custom-control-input" value="19">
                                    <label class="custom-control-label" for="customRadio19">AUXÍLIO - Moradia - <strong>Serviço Social</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio20" name="opcao" class="custom-control-input" value="20">
                                    <label class="custom-control-label" for="customRadio20">AUXÍLIO - Óculos - <strong>Serviço Social</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio21" name="opcao" class="custom-control-input" value="21">
                                    <label class="custom-control-label" for="customRadio21">AUXÍLIO - Pais e Mães - <strong>Serviço Social</strong></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio22" name="opcao" class="custom-control-input" value="22">
                                    <label class="custom-control-label" for="customRadio22">Outros</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group"> 
                                    <label class="form-label" for="especificar">Especificar</label>
                                    <textarea class="form-control" aria-label="especificar" id="especificar" name="especificar"><?php echo $especificar ?></textarea>
                                    <?php
                                        if($erro_especificar != ""){
                                            echo "<p style='color: red'>";
                                                    echo $erro_especificar; 
                                            echo "</p>";
                                        }
                                    ?>
                                </div> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group"> 
                                    <label class="form-label" for="justificar">Justificar</label>
                                    <textarea class="form-control" aria-label="justificar" id="justificar" name="justificar"><?php echo $justificar ?></textarea>
                                    <?php
                                        if($erro_justificar != ""){
                                            echo "<p style='color: red'>";
                                                    echo $erro_justificar; 
                                            echo "</p>";
                                        }
                                    ?>
                                </div> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <center><p><strong><?php echo $data_completa; ?></strong></p></center>
                            </div>
                            <div class="col-lg-3 col-md-3">
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
                                    <?php
                                        if($declaro == 0){
                                            echo "<input type='checkbox' class='custom-control-input' name='declaro' id='declaro' value='1'>";
                                            echo "<label class='custom-control-label' for='declaro'>DECLARO CONHECER O REGIMENTO DESTA IFE, BEM COMO O PRAZO NECESSÁRIO À TRAMITAÇÃO DO PROCESSO</label>";
                                            
                                            if($erro_declaro != ""){
                                                echo "<p style='color: red'>";
                                                        echo $erro_declaro; 
                                                echo "</p>";
                                            }
                                        }else{
                                            echo "<input type='checkbox' class='custom-control-input' name='declaro' id='declaro' value='1' checked>";
                                            echo "<label class='custom-control-label' for='declaro'>DECLARO CONHECER O REGIMENTO DESTA IFE, BEM COMO O PRAZO NECESSÁRIO À TRAMITAÇÃO DO PROCESSO</label>";
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-5 col-md-5" style="margin-left: 20px">
                                <p>Visto (Coordenação de Assuntos Estudantis)</p>
                                <?php
                                    if($coordenacao == ''){
                                        echo "<div class='custom-control custom-radio radio-sem'>";
                                            echo "<input type='radio' id='coordenacao1' name='coordenacao' class='custom-control-input' value='1'>";
                                            echo "<label class='custom-control-label' for='coordenacao1'>O requerente NÃO deve chave de ármario</label>";
                                        echo "</div>";

                                        echo "<div class='custom-control custom-radio radio-sem'>";
                                            echo "<input type='radio' id='coordenacao2' name='coordenacao' class='custom-control-input' value='2'>";
                                            echo "<label class='custom-control-label' for='biblioteca2'>O requerente deve chave de ármario</label>";
                                            if($erro_coordenacao != ""){
                                                echo "<p style='color: red'>";
                                                        echo $erro_coordenacao; 
                                                echo "</p>";
                                            }
                                        echo "</div>";
                                    }
                                    if($coordenacao == 1){
                                        echo "<div class='custom-control custom-radio radio-sem'>";
                                            echo "<input type='radio' id='coordenacao1' name='coordenacao' class='custom-control-input' value='1' checked>";
                                            echo "<label class='custom-control-label' for='coordenacao1'>O requerente NÃO deve chave de ármario</label>";
                                        echo "</div>";

                                        echo "<div class='custom-control custom-radio radio-sem'>";
                                            echo "<input type='radio' id='coordenacao2' name='coordenacao' class='custom-control-input' value='2'>";
                                            echo "<label class='custom-control-label' for='coordenacao2'>O requerente deve chave de ármario</label>";
                                        echo "</div>";
                                    }else if($coordenacao == 2){
                                        echo "<div class='custom-control custom-radio radio-sem'>";
                                            echo "<input type='radio' id='coordenacao1' name='coordenacao' class='custom-control-input' value='1'>";
                                            echo "<label class='custom-control-label' for='coordenacao1'>O requerente NÃO deve chave de ármario</label>";
                                        echo "</div>";

                                        echo "<div class='custom-control custom-radio radio-sem'>";
                                            echo "<input type='radio' id='coordenacao2' name='coordenacao' class='custom-control-input' value='2' checked>";
                                            echo "<label class='custom-control-label' for='coordenacao2'>O requerente deve chave de ármario</label>";
                                        echo "</div>";
                                    }   
                                ?>
                                <div class="form-group"> 
                                    <input type="text" class="form-control" id="chaves" name="chaves" value="<?php echo $chaves; ?>">
                                    <?php
                                        if($erro_chaves != ""){
                                            echo "<p style='color: red'>";
                                                    echo $erro_chaves; 
                                            echo "</p>";
                                        }
                                    ?>
                                </div> 
                            </div>
                            <div class="col-lg-5 col-md-5" style="margin-left: 20px">
                                <p>Visto (Biblioteca)</p>
                                <?php
                                    if($biblioteca == ''){
                                        echo "<div class='custom-control custom-radio radio-sem'>";
                                            echo "<input type='radio' id='biblioteca1' name='biblioteca' class='custom-control-input' value='1'>";
                                            echo "<label class='custom-control-label' for='biblioteca1'>O requerente NÃO deve livros na biblioteca</label>";
                                        echo "</div>";

                                        echo "<div class='custom-control custom-radio radio-sem'>";
                                            echo "<input type='radio' id='biblioteca2' name='biblioteca' class='custom-control-input' value='2'>";
                                            echo "<label class='custom-control-label' for='biblioteca2'>O requerente deve livros na biblioteca</label>";
                                            if($erro_biblioteca != ""){
                                                echo "<p style='color: red'>";
                                                        echo $erro_biblioteca; 
                                                echo "</p>";
                                            }
                                        echo "</div>";
                                    }
                                    if($biblioteca == 1){
                                        echo "<div class='custom-control custom-radio radio-sem'>";
                                            echo "<input type='radio' id='biblioteca1' name='biblioteca' class='custom-control-input' value='1' checked>";
                                            echo "<label class='custom-control-label' for='biblioteca1'>O requerente NÃO deve livros na biblioteca</label>";
                                        echo "</div>";

                                        echo "<div class='custom-control custom-radio radio-sem'>";
                                            echo "<input type='radio' id='biblioteca2' name='biblioteca' class='custom-control-input' value='2'>";
                                            echo "<label class='custom-control-label' for='biblioteca2'>O requerente deve livros na biblioteca</label>";
                                        echo "</div>";
                                    }else if($biblioteca == 2){
                                        echo "<div class='custom-control custom-radio radio-sem'>";
                                            echo "<input type='radio' id='biblioteca1' name='biblioteca' class='custom-control-input' value='1'>";
                                            echo "<label class='custom-control-label' for='biblioteca1'>O requerente NÃO deve livros na biblioteca</label>";
                                        echo "</div>";

                                        echo "<div class='custom-control custom-radio radio-sem'>";
                                            echo "<input type='radio' id='biblioteca2' name='biblioteca' class='custom-control-input' value='2' checked>";
                                            echo "<label class='custom-control-label' for='biblioteca2'>O requerente deve livros na biblioteca</label>";
                                        echo "</div>";
                                    }   
                                ?>
                                <div class="form-group"> 
                                    <input type="text" class="form-control" id="livros" name="livros" value="<?php echo $livros ?>">
                                    <?php
                                        if($erro_livros != ""){
                                            echo "<p style='color: red'>";
                                                    echo $erro_livros; 
                                            echo "</p>";
                                        }
                                    ?>
                                </div> 
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit" style="margin-left: 20px;">Enviar</button>
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