<?php
    // Limpar dados para evitar possíveis scripts
    function __e($input) {
        $input = trim($input); // tira os espaços
        $input = stripslashes($input); // escapa as barras
        $input = htmlspecialchars($input); // converte os caracteres especiais
        return $input;
    }
    function limparVetor($varPost) {
        $arrayLimpo = [];
        foreach ($varPost as $indice => $valor) {
            $arrayLimpo[$indice] = __e($valor);
        }
        return $arrayLimpo;
    }

    // Verificar se o formulário foi enviado
    function formEnviado($postArray) {
        global $dados;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Limpar post
            $dados = limparVetor($postArray);
            return true;
        } else {
            header('Location: ../index.php');
            die();
        }
    }

    function gerarMensagensErro($postArray) {
        global $mensagem_erro;

        if ($postArray["requerente"] == "") {
            $mensagem_erro["requerente_error"] = "Necessario preencher o campo requerente";
        }
        if ($postArray["matricula"] == "") {
            $mensagem_erro["matricula_error"] = "Necessario preencher o campo matrícula";
        }
        if ($postArray["data_nascimento"] == "") {
            $mensagem_erro["data_nascimento_error"] = "Necessario preencher o campo data de nascimento";
        }
        if ($postArray["naturalidade"] == "") {
            $mensagem_erro["naturalidade_error"] = "Necessario preencher o campo naturalidade";
        }
        if ($postArray["filiacao"] == "") {
            $mensagem_erro["filiacao_error"] = "Necessario Preencher o campo filiação";
        }
        if ($postArray["curso"] == "") {
            $mensagem_erro["curso_error"] = "Necessario preencher o campo curso";
        }
        if ($postArray["periodo"] == "") {
            $mensagem_erro["periodo_error"] = "Necessario preencher o campo período";
        }
        if ($postArray["turno"] == "") {
            $mensagem_erro["turno_error"] = "Necessario preencher o campo turno";
        }
        if ($postArray["telefone1"] == "" && $postArray["telefone2"] == "") {
            $mensagem_erro["telefones_error"] = "Obrigatorio ter um telefone";
        }
        if ($postArray["email"] == "") {
            $mensagem_erro["email_error"] = "Necessario preencher o campo email";
        }
        if(!($postArray["opcao"])) {
            $mensagem_erro["opcao_error"] = "Assinale uma opção para o pedido do requerimento";
        }
        if($postArray["opcao"]==1 || $postArray["opcao"]==6 || $postArray["opcao"]==7 || $postArray["opcao"]==10 || $postArray["opcao"]==12 || $postArray["opcao"]==15 || $postArray["opcao"]==22) {
            if($postArray['especificar'] == "") {
                $mensagem_erro["especificar_error"] = "Precisa preencher o campo especificar";
            }
        }
        if($postArray["opcao"]==3 || $postArray["opcao"]==5 || $postArray["opcao"]==10 || $postArray["opcao"]==22) {
            if($postArray['justificar'] == "") {
                $mensagem_erro["justificar_error"] = "Precisa preencher o campo justificar";
            }
        }
        if ($postArray["declaro"] == "") {
            $mensagem_erro["declaro_error"] = "Necessario confirma o campo declaração de confirmação";
        }
        if(!($postArray["coordenacao"]) ) {
            $mensagem_erro["coordenacao_error"] = "O visto da Coordenação de Assusntos Estudantis é Obrigatoria";
        }
        if($postArray["coordenacao"] == 2 && $postArray["chaves"] == "") {
            $mensagem_erro["chaves_error"] = "Necessario indicar a numeração da chaves";
        }
        if($postArray["coordenacao"] == 1 && $postArray["chaves"] != "") {
            $mensagem_erro["chaves_error"] = "O campo chaves devidas tem que ser apagado";
        }
        if( !($postArray["biblioteca"]) ) {
            $mensagem_erro["biblioteca_error"] = "O visto da Biblioteca é Obrigatoria";
        }
        if($postArray["biblioteca"] == 2 && $postArray["livros"] == "") {
            $mensagem_erro["livros_error"] = "Necessario indicar os livros";
        }
        if($postArray["biblioteca"] == 1 && $postArray["livros"] != "") {
            $mensagem_erro["livros_error"] = "O campo livros devidos tem que ser apagado";
        }

        return $mensagem_erro;
    }
?>