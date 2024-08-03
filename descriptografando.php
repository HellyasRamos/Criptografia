<?php
//Recebe a variável $texto enviada pelo link
$nome = $_GET['nomecript']; //variavel local que recebe o valor do outro form em php pelo metodo GET $senha=$_GET['senhacript');
$senha = $_GET['senhacript'];
$sexo = $_GET['sexocript'];
$idade = $_GET['idadecript'];
$cep = $_GET['cepcript'];
$rua = $_GET['ruacript'];
$bairro = $_GET['bairrocript'];
$cidade = $_GET['cidadecript'];
$cpf = $_GET['cpfcript'];
$telefone = $_GET['idadecript'];
$email = $_GET['emailcript'];

echo "Nome criptografado: $nome<p>";
echo "Senha criptografada: $senha<p>";
echo "Sexo criptografada: $sexo<p>";
echo "Idade criptografada: $idade<p>";
echo "CEP criptografada: $cep<p>";
echo "Rua criptografada: $rua<p>";
echo "Bairro criptografada: $bairro<p>";
echo "Cidade criptografada: $cidade<p>";
echo "CPF criptografada: $cpf<p>";
echo "Telefone criptografada: $telefone<p>";
echo "Email criptografada: $email<p>";

//Usando a função base64 decode() para descriptografar o texto $nomedescriptografado base64_decode($nome); $senhadescriptografado = base64 decode ($senha);
$nomedescriptografado = base64_decode($nome);
$senhadescriptografado = base64_decode($senha);
$sexodescriptografado = base64_decode($sexo);
$idadedescriptografado = base64_decode($idade);
$cepdescriptografado = base64_decode($cep);
$ruadescriptografado = base64_decode($rua);
$bairrodescriptografado = base64_decode($bairro);
$cidadedescriptografado = base64_decode($cidade);
$cpfdescriptografado = base64_decode($cpf);
$telefonedescriptografado = base64_decode($telefone);
$emaildescriptografado = base64_decode($email);


echo "Nome depois de descriptografar: $nomedescriptografado</p>";
echo "Senha depois de descriptografar: $senhadescriptografado</p>";
echo "Sexo depois de descriptografar: $sexodescriptografado</p>";
echo "Idade depois de descriptografar: $idadedescriptografado</p>";
echo "CEP depois de descriptografar: $cepdescriptografado</p>";
echo "Rua depois de descriptografar: $ruadescriptografado</p>";
echo "Bairro depois de descriptografar: $bairrodescriptografado</p>";
echo "Cidade depois de descriptografar: $cidadedescriptografado</p>";
echo "CPF depois de descriptografar: $cpfdescriptografado</p>";
echo "Telefone depois de descriptografar: $telefonedescriptografado</p>";
echo "Email depois de descriptografar: $emaildescriptografado</p>";
