<?php
    $nome = $_POST['nome']; //variavel local recebendo a informção que veio do outro form $senha=$ GET ['senha'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    if ((empty($nome)) or (empty($senha)) or (empty($sexo)) or (empty($idade)) or (empty($cep)) or (empty($rua)) or (empty($bairro)) or (empty($cidade)) or (empty($cpf)) or (empty($telefone)) or (empty($email))) 
    {
        header("location:criptografando.html"); //se as caixas estiverem vazias ele retorna pra iniciar
    } 
    else 
    {
        //echo "O texto antes de criptografar: $texto<p>";
        //Usando a função base64 encode() para criptografar o texto
        $nomecript = base64_encode($nome);
        $senhacript = base64_encode($senha);
        $sexocript = base64_encode($sexo);
        $idadecript = base64_encode($idade);
        $cepcript = base64_encode($cep);
        $ruacript = base64_encode($rua);
        $bairrocript = base64_encode($bairro);
        $cidadecript = base64_encode($cidade);
        $cpfcript = base64_encode($cpf);
        $telefonecript = base64_encode($telefone);
        $emailcript = base64_encode($email);

        echo "O nome depois de criptografar: $nomecript</p>";
        echo "O senha depois de criptografar: $senhacript</p>";
        echo "O sexo depois de criptografar: $sexocript</p>";
        echo "O idade depois de criptografar: $idadecript</p>";
        echo "O cep depois de criptografar: $cepcript</p>";
        echo "O rua depois de criptografar: $ruacript</p>";
        echo "O bairro depois de criptografar: $bairrocript</p>";
        echo "O cidade depois de criptografar: $cidadecript</p>";
        echo "O cpf depois de criptografar: $cpfcript</p>";
        echo "O telefone depois de criptografar: $telefonecript</p>";
        echo "O email depois de criptografar: $emailcript</p>";

        //echo "<a href=\"cript_decode.php?var1=$varl&var2=$var2\">Clique aqui para descriptografa 
        echo "<a href=\"descriptografando.php?nomecript=$nomecript&senhacript=$senhacript&sexocript=$sexocript&idadecript=$idadecript&cepcript=$cepcript&ruacript=$ruacript&bairrocript=$bairrocript&cidadecript=$cidadecript&cpfcript=$cpfcript&telefonecript=$telefonecript&emailcript=$emailcript\"> 
                Clique aqui para decriptografar o nome e senha</a></p>";
    }
