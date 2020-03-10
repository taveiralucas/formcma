<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="pedido_orçamento.php" method="POST">
        <!-- identificação do usuário-->
        <fieldset>
        <legend>Dados de contato</legend>

        <p>
        <label for="nomeUsuario">Nome: </label>
        <input type="text" name="nome" id="nomeUsuario" placeholder="Informe seu nome" autofocus required>
        </p>

        <p>
        <label for="fone">Telefone</label>
        <input type="tel" id="fone" name="telefone" placeholder="Opcional - Informe seu telefone com DDD">
        </p>

        <p>
        <label for="email">E-mail</label>
        <input type="email" id="email" name="mail" required placeholder="Informe seu e-mail para contato" >
        </p>
        
        </fieldset>


        <!--Informações sobre o evento-->
        <fieldset>
        <legend>Informações sobre o evento</legend>

        <h3>Qual o tipo de espaço escolhido para o evento?</h3>
        <p>
        
        <input type="checkbox" value="chacara" id="espacoChacara">
        <label for="espacoChacara">Chacára</label>

        <input type="checkbox" value="salao" id="espacoSalao">
        <label for="espacoSalao">Salão</label>

        </p>

        <p>
        <label for="totalPessoas">Quantidade de pessoas</label>
        <input type="number" value="qntdPessoas" id="totalPessoas">
        </p>

        <p>
        <h3>Quais serviçoes deseja utilizar?</h3>

        <label for="servicoCerimonial">Cerimonial</label>
        <input type="checkbox" value="cerimonial" id="servicoCerimonial">

        <label for="servicoBuffet">Buffet</label>
        <input type="checkbox" value="buffet" id="servicoBuffet">

        <label for="servicoDecoracao">Decoração</label>
        <input type="checkbox" value="decoracao" id="servicoDecoracao">
        </p>

        

        </fieldset>



        <!--Campo para selecionar os espaços do quais deseja informações-->
        <fieldset>
        <legend>Espaços para Eventos</legend>

        <input type="checkbox" value="Sagrada Familia" id="sagradaFamilia">
        <label for="sagradaFamilia">Chacára Sagrada Família</label>
        

        <input type="checkbox" value="Chacara das Flores" id="chacaraDasFlores">
        <label for="chacaraDasFlores">Chacára das Flores</label>

        <input type="checkbox" value="casaDoTrader" id="casaTrader">
        <label for="casaTrader">Casa do Trader</label>
        

        </fieldset>
    </form>
</body>
</html>