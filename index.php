<html>

<head>
    <meta charset="UTF-8">
    <title> Criptografando</title>
</head>

<body>
    <form name="f1" action="criptografando.php" method="Post"> <!-- Comenta em Html -->
        <h1> Criptografando Nome e Senha</h1>
        Nome: <input type="text" required name="nome" size="100" maxlength="100"> <br><br>
        Senha: <input type="text" required name="senha" size="50" maxlength="50"> <br><br>
        Sexo: <input type="text" required name="sexo" size="50" maxlength="50"> <br><br>
        Idade: <input type="number" required name="idade" size="50" maxlength="50"> <br><br>
        CEP: <input type="text" required name="cep" size="50" maxlength="50"> <br><br>
        Rua: <input type="text" required name="rua" size="50" maxlength="50"> <br><br>
        Bairro: <input type="text" required name="bairro" size="50" maxlength="50"> <br><br>
        Cidade: <input type="text" required name="cidade" size="50" maxlength="50"> <br><br>
        CPF: <input type="text" required name="cpf" size="50" maxlength="50"> <br><br>
        Telefone: <input type="text" required name="telefone" size="50" maxlength="50"> <br><br>
        Email: <input type="email" required name="email" size="50" maxlength="50"> <br><br>

        Selecione: <input type="submit" value="Criptografar">
        <input type="reset" value="Limpar">
    </form>
</body>

</html>