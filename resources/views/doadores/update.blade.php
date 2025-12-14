<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doadores {{$doadores->nome}} </title>
</head>

<body>
    <form action="{{ route('doadores.update')}}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="{{$doador->nome}}">
        </div>
        <div>
            <label for="cpf">CPF</label>
            <input type="text" id="nome" name="cpf" value="{{$doador->cpf}}">
        </div>
        <div>
            <label for="rg">RG</label>
            <input type="text" id="rg" name="rg" value="{{$doador->rg}}">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{$doador->email}}">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" value="{{$doador->senha}}">
        </div>
        <div>
            <label for="cidade">Cidade</label>
            <input type="checkbox" id="cidade" name="cidade" value="{{$doador->cidade}}">
        </div>
        <div>
            <label for="uf">UF</label>
            <input type="text" id="uf" name="uf" value="{{$doador->uf}}">
        </div>
        <div>
            <label for="cep">CEP</label>
            <input type="text" id="cep" name="cep" value="{{$doador->cep}}">
        </div>
        <div>
            <label for="logradouro">Logradouro</label>
            <input type="text" id="logradouro" name="logradouro" value="{{$doador->logradouro}}">
        </div>
        <div>
            <label for="numero">Numero</label>
            <input type="number" id="numero" name="numero" value="{{$doador->numero}}">
        </div>
        <div>
            <label for="bairro">bairro</label>
            <input type="text" id="bairro" name="bairro" value="{{$doador->bairro}}">
        </div>
        <div>
            <label for="telefone">telefone</label>
            <input type="text" id="telefone" name="telefone" value="{{$doador->telefone}}">
        </div>
        <div>
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="text" id="data_nascimento" name="data_nascimento" value="{{$doador->data_nascimento}}">
        </div>
        <div>
            <label for="peso">Peso</label>
            <input type="text" id="peso" name="peso" value="{{$doador->peso}}">
        </div>
        <div>
            <label for="tipo_sanguineo">Tipo Sanguineo</label>
            <input type="text" id="tipo_sanguineo" name="tipo_sanguineo" value="{{$doador->tipo_sanguineo}}">
        </div>
        <div>
            <label for="profissao">Profissao</label>
            <input type="text" id="profissao" name="profissao" value="{{$doador->profissao}}">
        </div>
        <div>
            <label for="sexo">Sexo</label>
            <input type="text" id="sexo" name="sexo" value="{{$doador->sexo}}">
        </div>
        <button type="submit">Cadastrar Doador</button>
    </form>
</body>

</html>