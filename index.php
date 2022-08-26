<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios de Fixação PHP</title> 
</head>
<body>
    <h1>O início de tudo.</h1>
    <p>Descubra como as coisas se desenvolvem em PHP.</p>
    <h2>Exercício 1.</h2>
    <p>Faça o cálculo a área de uma sala, sendo que os comprimentos das paredes (L e C) são fornecidos pelo usuário. Apresente a áreadepois de calculada.</p>
        <form action="exercicio1.php" method="get">
            <h3>Gostaria de saber a área da sua sala?</h3>
            <p>Insira o comprimento: <input type="text" name="comp"></p>
            <p>Insira a largura: <input type="text" name="larg"></p>
            <input type="submit" value="Calcular">
        </form>
<br>
<hr>

    <h1>Acrescentando mais um elemento.</h1>
    <h2>Exercício 2.</h2>
    <p>Faça o cálculo da área e do perímetro de uma sala, sendo que os comprimentos (L e C) são fornecidos pelo usuário. Apresente a área e o perímetro depois de calculados.</p>
        <form action="exercicio2.php" method="get">
            <h3>Gostaria de saber o perímetro do seu cômodo?</h3>
            <p>Insira o comprimento: <input type="text" name="comp"></p>
            <p>Insira a largura: <input type="text" name="larg"></p>
            <input type="submit" value="Calcular">            
        </form>
<br>
<hr>
    <h1>Aulas de economia? Temos também.</h1>
    <h2>Exercício 3.</h2>
    <p>Calcule o valor monetário do desconto (D), sendo que o preço do produto (PR) é fornecido pelo usuário e o desconto é de 5%. Apresentar o valor do desconto.</p>
        <form action="exercicio3.php" method="get">
            <h3>Para quem não é bom de conta, realmente é útil.</h3>
            <p>Digite o valor do produto: <input type="text" name="valor"></p>
            <input type="submit" value="Desconto de 5%">
        </form>
<br>
<hr>
    <h1>Temos mais novidade sobre o mercado pra você.</h1>
    <h2>Exercício 4.</h2>
    <p>Calcule o quanto será pago por um produto (PAG), sendo que o preço do produto (PR) e o desconto (D) são fornecidos pelo usuário. Apresentar o valor a ser pago pelo produto.</p>
        <form action="exercicio4.php" method="get">
            <h3>O anterior não foi suficiente? Então toma.</h3>
            <p>Insira o valor do produto: <input type="text" name="valor"></p>
            <p>Insira o valor do desconto que deseja calcular: <input type="text" name="desconto"></p>
            <input type="submit" value="Resultado">
        </form>
<br>
<hr>
    <h1>Vou descobrir uma coisa sobre um fato.</h1>
    <h2>Exercício 5.</h2>
    <p>Calcule qual foi a porcentagem de desconto dada em um determinado produto (DESC), sabendo-se o preço original do produto (PRECO) e o preço que foi cobrado por ele depois do desconto (PRECOF).</p>
        <form action="exercicio5.php" method="get">
            <h3>Agora a coisa vai começar a complicar.</h3>
            <p>Qual é o preço original do produto? <input type="text" name="preco"></p>
            <p>Informe qual é o preço já com o desconto: <input type="text" name="precof"></p>
            <input type="submit" value="Descobrir">
        </form>
<br>
<hr>
    <h1>Quantos anos será que você tem?</h1>
    <h2>Exercício 6.</h2>
    <p>Calcule a idade de uma pessoa, sendo que o ano atual (AA) e o ano do nascimento da pessoa (AN) são fornecidos pelo usuário. (considere que a pessoa já fez aniversário nesse ano). Apresentar a idade da pessoa depois de calculada.</p>
        <form action="exercicio6.php" method="get">
            <h3>Você será descoberto.</h3>
            <p>Quando é o seu ano de nascimento? <input type="text" name="anoinicial"></p>
            <p>Quando é o ano atual? <input type="text" name="anoatual"></p>
            <input type="submit" value="Descubra sua idade atual.">
        </form>
<br>
<hr>
</body>
</html>