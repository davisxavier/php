<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Primeiro Exemplo PHP</title>
  <style>
      h2 {
        color: #80a2ff;
        text-shadow: 1px 1px 1px black;
      }
  </style>
</head>
<body>
<h1>Testando PHP</h1>
    <?php
        echo "<h2>Ola, <br/> Mundo!</h2>";
    ?>
<h3>Teste de operadores e concatenação</h3> 
<p>
    <h4>Variáveis</h4>
    Nome = Cidadão X <br>
    Idade = 19 <br>
    Dias vida = idade x 365 <br>
</p>   
    <?php 
        echo "<h3> Tipos de dados</h3>";
        $nome="Cidadão X";
        $idade= 19;
        $dias_vida= $idade*365;
        echo "Olá, ".$nome."<br>";
        echo "O total de dias vividos é: ". $dias_vida;
        echo"<br><br>";
        var_dump($idade); 
        echo"<br>";
        var_dump($nome);
    ?>
<h3>em html simples</h3>
<p>
    olá, <?php echo $nome;?> <br>
    O total de dias vividos é: <?php echo $dias_vida;?>
</p>
<h3>novos testes</h3>
<p>
    <h4>Variáveis</h4>
    n1 = 3 <br>
    n2 = 2 <br>
    m = (n1+n2)/2 <br>
</p> 
      <?php
        $n1 = 3;
        $n2 = 2;
        $m = ($n1 + $n2) / 2;
        echo "A soma vale ". ($n1 + $n2);
        echo "<br/>A subracao vale ". ($n1-$n2);
        echo "<br/>A multiplicacao vale ". ($n1*$n2);
        echo "<br/>A divisao vale ". ($n1/$n2);
        echo "<br/>O modulo vale ". ($n1%$n2);
        echo "<br/>A media vale $m";
      ?>
<h3>novos testes 2</h3>
<p>
    <h4>Variáveis</h4>
    n1 recebendo "a" e n2 recebendo "b" digitadas na URL<br>
    ex: http://localhost:8080/index.php<b>?a=10&b=2</b><br>
    m = (n1+n2)/2 <br>
</p> 
      <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "Valores recebidos: $n1 e $n2";
        $m = ($n1 + $n2) / 2;
        echo "A soma vale ". ($n1 + $n2);
        echo "<br/>A subracao vale ". ($n1-$n2);
        echo "<br/>A multiplicacao vale ". ($n1*$n2);
        echo "<br/>A divisao vale ". ($n1/$n2);
        echo "<br/>O modulo vale ". ($n1%$n2);
        echo "<br/>A media vale $m";
      ?>
      <h3>novos testes</h3>
<p>
    <h4>funções</h4>
    v1 recebendo "x" e v2 recebendo "y" digitadas na URL<br>
    ex: http://localhost:8080/index.php?a=10&b=2<b>&x=8&y=3.999</b><br>
    m = (n1+n2)/2 <br>
</p> 
<?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "Valores recebidos:<b> $v1</b> e <b>$v2</b><br>";
        echo "O valor absoluto de $v2 e " . abs($v2);
        echo "<br/>O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2);
        echo "<br/>A raiz de $v1 e " . sqrt($v1);
        echo "<br/>O valor de $v2 arredondado e " . round($v2);
        echo "<br/>O valor de $v2 arredondado e " . ceil($v2);
        echo "<br/>O valor de $v2 arredondado e " . floor($v2);
        echo "<br/>A parte inteira de $v2 e " . intval($v2);
        echo "<br/>O valor de $v1 em moeda e R$" . number_format($v1,2,",", "."); //(variável,número de casas decimais,separador decimal,separador de milhares)
?>
<p>
<h4>Atribuição</h4>
preco recebendo um valor diretamente na URL <br>
ex: http://localhost:8080/index.php?a=10&b=2&x=8&y=3.999<b>&p=100</b><br>
p = preco <br>
</p> 
<?php
    $preco = $_GET["p"];
    echo " O preço do produto é R$ ". number_format($preco,2,",",".");
    $preco = $preco + ($preco*10/100);
    echo "<br> O preço com atribuição de 10% é de R$ ".number_format($preco,2,",",".");
    $preco = $_GET["p"];
    $preco += ($preco*10/100);
    echo "<br>usando concatenação:";
    echo "<br> O preço com atribuição de 10% é de R$ ".number_format($preco,2,",",".");
    $preco = $_GET["p"];
    $preco -= ($preco*10/100);
    echo "<br>usando concatenação:";
    echo "<br> O preço com desconto de 10% é de R$ ".number_format($preco,2,",",".");
?>
<p>
<h4>Atribuição de decremento</h4>
O ano digitado diretamente na URL como aa sofrerá as seguites alterações descritas durante os testes <br>
ex: http://localhost:8080/index.php?a=10&b=2&x=8&y=3.999&p=100<b>&aa=xxxx</b><br>
aa = atual <br>
</p> 
<?php
    $atual = $_GET["aa"];
    echo "O ano digitado foi $atual";
    echo "<br> Observando um erro comum: ";
    echo "<br> se a fórmula for digitada atual-- o valor do ano anterior será: ";
    echo "<br> 1º mostrada " . $atual--." e depois decrementada $atual";
    echo "<br> Para que isso não aconteça, a formula deve ser -- e depois a variável :";
    $atual = $_GET["aa"];
    echo "<br> Então o ano anterior ao digitado é: ". --$atual;
    echo 'OBS: Os métodos não estão errados, o importante é saber utilizalos para seu objetivo final. Se com pré ou pôs incremento ou decremento.<br>
    ex: <br>
    echo "--(variável)";, <b>decrementa a variável</b> antes e mostra depois;<br>
    echo "(variável)--";, <b>mostra a variável</b> e depois guarda o valor decremetado.'   
?>
<p>
<h4>variável referenciadas</h4>
$a = 3; - variável a recebe 3 <br>
$b = $a; - variável b recebe a que é 3 <br>
$b += 5; - variável b que é 3 soma 5 e se torna 8 <br>
echo $a; - mostrará 3 <br>
echo $b; - mostrará 8 <br>
</p> 
<?php
    $a = 3;
    $b = $a;
    $b += 5;
    echo "a é $a e <br>
    b é $b";      
?>
<p>
<h4>porém se:</h4>
$a = 3; - variável a recebe 3 <br>
$b = <b>&</b>$a; - variável b recebe a que é 3 <br>
$b += 5; - variável b que é 3 soma 5 e se torna 8 <br>
echo $a; - mostrará 8 <br>
echo $b; - mostrará 8 <br>
Porque o <b>a</b> estará referenciado em <b>b</b>.
</p> 
<?php
    $a = 3;
    $b = &$a;
    $b += 5;
    echo "a é $a e <br>
    b é $b";      
?>
<p>
<h4>Veriáveis de variáveis</h4>
$nome = (fulano); - variável nome recebe fulano <br>
$$nome = (codinome_fulano) - variável fulano recebe codinome_fulano <br>
echo $nome; - mostrará fulano <br>
echo $fulano; - mostrará codinome_fulano <br>
Isto porque fulano se tornou uma variável de uma variável.
</p> 
<?php
    $nome = "fulano";
    $$nome = "metido a besta";
    echo "A variável nome contém: <b>$nome</b> e <br>";
    echo "a variável Fulano contém:<b> $fulano</b>";      
?>
</body>
</html>