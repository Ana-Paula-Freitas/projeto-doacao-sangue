<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Doador</title>
</head>

<body>
    <form action="{{ route('doadores.store')}}" method="POST">
        @csrf
        <div hidden>
            <label for="status">Status</label>
            <input type="text" id="status" name="status" value="ativo">
        </div>
        <div>
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome">
        </div>
        <div>
            <label for="cpf">CPF</label>
            <input type="text" id="nome" name="cpf">
        </div>
        <div>
            <label for="rg">RG</label>
            <input type="text" id="rg" name="rg">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha">
        </div>
        <div>
            <label for="cidade">Cidade</label>
            <input type="text" id="cidade" name="cidade">
        </div>
        <div>
            <label for="uf">UF</label>
            <input type="text" id="uf" name="uf">
        </div>
        <div>
            <label for="cep">CEP</label>
            <input type="text" id="cep" name="cep">
        </div>
        <div>
            <label for="logradouro">Logradouro</label>
            <input type="text" id="logradouro" name="logradouro">
        </div>
        <div>
            <label for="numero">Numero</label>
            <input type="number" id="numero" name="numero">
        </div>
        <div>
            <label for="bairro">bairro</label>
            <input type="text" id="bairro" name="bairro">
        </div>
        <div>
            <label for="telefone">telefone</label>
            <input type="text" id="telefone" name="telefone">
        </div>
        <div>
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" id="data_nascimento" name="data_nascimento">
        </div>
        <div>
            <label for="peso">Peso</label>
            <input type="text" id="peso" name="peso">
        </div>
        <div>
            <label for="tipo_sanguineo">Tipo Sanguineo</label>
            <input type="text" id="tipo_sanguineo" name="tipo_sanguineo">
        </div>
        <div>
            <label for="profissao">Profissao</label>
            <input type="text" id="profissao" name="profissao">
        </div>
        <div>
            <label for="sexo">Sexo</label>
            <input type="text" id="sexo" name="sexo">
        </div>
        <button type="submit">Cadastrar Doador</button>
    </form>
</body>

</html>