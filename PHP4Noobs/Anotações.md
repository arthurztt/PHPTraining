## Introdução ao Curso

Nesse curso de PHP, a gente vai compreender o básico da linguagem, como : O que são operadores, como utilizar funções e as principais operações. 

Utilizando como material de apoio, o repositório do GitHub [PHP4Noobs](https://github.com/DanielHe4rt/php4noobs) .

A ideia do curso é que eu assista primeiramente o curso por completo antes de fuçar nos códigos, para ter um conhecimento prévio antes de partir pra prática em si.



## Instalação de Ambiente

Vá para o navegador e pesquise o site oficial do PHP, e procure o instalador da versão mais recente da linguagem.

Depois de instalado, entre na pasta Dowloads do seu computador, e procure o arquivo `.zip` do php, porém não descompacta ele agora!

Depois disso vai no diretório principal do seu computador (C://), e crie uma pasta chamada "dev", e outra pasta chamda "php" dentro dela.

E então, abra o arquivo `.zip` do php, que exibe a tela do winrar (se tiver), pra assim selecionar todos os arquivos desse `.zip`, e jogar para dentro da pasta "php", no seu diretório principal. 

Agora a gente precisa adicionar esses binários dentro das nossas variáveis de ambiente do nosso computador, pra aí sim o php ser instalado nele.

Pra checar isso, dê `Win+R` e digite "cmd", dentro dessa interface digite `php -v` pra checar se ele retorna alguma versão do php, não retorna? Então não foi instalado ainda!

E então, pra adicionar essa pasta de binários do php na nossa variável de ambiente, vá na aba de pesquisa do windows e digite "ambiente", e assim entre aonde diz "Editar as Variáveis de Ambiente".

Dentro dessa janela, clique no botão "Variáveis de Ambiente", procure pela variável que a gente precisa editar, que é a `path`

Essa variável `path` , ela vai nos locais aonde estão os arquivos executáveis, e procura pelos arquivos `.exe`, então a gente vai criar um novo caminho, clicando em "novo", e digitando `C:\dev\php`, e pronto! Php lindamente instalado na máquina.

## Sintaxe

Nessa aula, tudo o que foi discutido eu já tinha uma noção prévia pelas aulas que tive sobre php, que foram apenas coisas básicas sobre sintaxe, por exemplo :

**Como criar um bloco de código em php :**
`<?php echo "Bloco de código!" ?>`

**Função de Output :**
`<?php 
echo "Uma mensagem aleatória!";
?>`

**Shortcut de Output** *(Não conhecia)*
`<?= "Uma mensagem aleatória!" ?>`

E outra funcionalidade que eu também não conhecia, e não entendia como ele tava fazendo, era rodar os arquivos no cmd diretamente.

Mas é apenas digitar `php NomeDoArquivo.php` na linha de comando, que tudo que estiver no bloco de código php, será reconhecido como código (se não estiver é apenas texto).

## Comentários

Nada demais nessa aula, apenas apresentando como funciona os comentários, e suas funções, que é basicamente documentar algo para que seja visto por mim mesmo ou por outro programador naquele código.

**Para fazer um comentário curto se faz assim :**
`// Digite aqui seu comentário de uma linha`

**Para fazer um comentário de várias linhas é assim :**
`/*
Digite aqui seu comentário de várias linhas
*/`

E importante não utilizar excessivamente esses comentários para manter a compreensão e leitura do código em dia.

## Funções  de Saída

Ness aula foi retratado sobre as funções de saídas do php, que são bem importantes para debugar nosso código, printando informações no console, ver os tipos de dados que estão saindo.

A gente vai aprender duas funções nessa aula, que será a `echo` e a `var_dump` , no qual a primeira função gente já tem um conhecimento, só que da segunda ainda não.

E também aprenderemos sobre uma constante chamda `PHP_EOL` ou PHP EndOfLine, pra nos ajudar a organizar a leitura dos códigos na nossa linha de comandos, fazendo o trabalho de quebrar a linha em que ele esteja inserido.

### Echo

Primeiramente, o `echo` ele vai ser utilizado principalmente pra printar alguns dados  variáveis que a gente precisa ver.

No exemplo utilizado pelo daniel, ele escreve a seguinte linha de código :

```
<?php 

echo 123 . PHP_EOL;

?>
```

>Aqui a gente percebe que ele usou algo que não foi introduzdo ainda, que é um operador de concatenação, que basicamente junta dois elementos do código, por meio desse `.` , assim juntando com a constante `PHP_EOL`, que fez o trabalho de quebra de linha no código.

Importante lembrar que o `echo` ele pode receber alguns tipo de dado, como `string` ou `number`.
### Var_dump

Nessa segunda função, a gente precisa entender que vamos trabalhar com vários tipos de variáveis, dados, constantes, classes, e etc. E por causa disso a gente vai precisar debugar bastante nosso código, e aí que entre o `var_dump`

Como essa **estrutura** :
`var_dump (value: 'Dado de tipo String');`

> Essa função ela espera que você adicione algum valor à ela,independente do tipo de dado que seja, e rodando o código, ela retornará o **tipo de dado** da variável que foi informado.

Retornando assim no **console** :
```
/home/arthur/dev/curso/output.php:1
String(19) 'Dado de tipo String'
```

Obtendo as seguintes informações :
- Diretórios do arquivo .php ;
- Linha do comando utilizado (`output.php:1`);
- Tipo de dado da variável (`String`);
- Quantidade e caracteres (`19`) ;
- Texto que a variável reserva (`Dado de tipo String`);

Agora alguns retornos no **console** de **alguns** 
### Tipos de Dados 
#### Boolean
```
<?php
var_dump(value: true);
?>

-- console --
/home/arthur/dev/curso/output.php:1
bool(true)
```

Obtendo as seguintes informações :
- Diretórios do arquivo .php ;
- Linha do comando utilizado (`output.php:1`);
- Tipo de dado da variável (`bool`);
- Valor da Variável (`true`);

#### Double

```
<?php
var_dump(value: 15.2222);
?>

== console ==
/home/arthur/dev/curso/output.php:1
double(15.2222)
```

Obtendo as seguintes informações :
- Diretórios do arquivo .php ;
- Linha do comando utilizado (`output.php:1`);
- Tipo de dado da variável (`double`);
- Valor da Variável (`15.2222`);

#### Int
```
<?php
var_dump(value: 12);
?>

== console ==
/home/arthur/dev/curso/output.php:1
int(12)
```

Obtendo assim as seguintes informações :
- Diretórios do arquivo .php ;
- Linha do comando utilizado (`output.php:1`);
- Tipo de dado da variável (`int`);
- Valor da Variável (`12`);

#### Vetores

```
<?php
var_dump([1,2,3,4]);
?>

== console ==
/home/arthur/dev/curso/output.php:1
array(4) {
	[0] =>
	int(1)
	
	[1] =>
	int(2)
	
	[2] =>
	int(3)
	
	[3] =>
	int(4)
}
```

Obtendo assim as seguintes informações :
- Diretórios do arquivo .php ;
- Linha do comando utilizado (`output.php:1`);
- Tipo de dado da variável (`array`);
- Quantidade de itens no vetor (`array(4)`);
- Posição de cada item no vetor (`[0]`,`[1]`,`[2]`,`[4]`)
- Tipo e valor dos itens do vetor (`int(1)`, `int(2)` ,  `int(3)` , `int(4)`)


## Tipos de Dados

Nessa aula ele retratou os assuntos que eu já falei nas anotações passadas, sobre cada um dos tipos de dados, String, Number, Boolean, Double e por fim, o tipo que ele focou principalmente o **Array**.

Os arrays são estruturas que servem para **guardar dados**, e **organizá-los**. Seu objetivo é ser um espaço fixo na memória do computador que armazena elementos. Esses elementos podem ser acessados por um tipo de indicação, que chamamos de **índice**.

Ele exemplifica como se cria uma **array**, e alocar **dados** dentro dela.

Para criar uma array, voce precisa utilizar os colchetes para indicar o local que serão alocado os dados de diversos tipos, como neste exemplo :
```
<?php

var_dump(['Arthur Azevedo',17,'Fortaleza'])

?>

-- console --
/home/arthur/dev/curso/output.php:2
array(3) {
	[0] =>
	String(14) 'Arthur Azevedo'
	
	[1] =>
	int(17)
	
	[2] =>
	String(9) 'Fortaleza'
}
```

E em seguida, ele exemplifica, o que já foi dito no começo, que para acessar **campos específicos** da nossa **array**, acessamos eles pelo **índice** da variável que queremos.

Adicionando essa array a uma **variável** no php, podemos **acessar** nosso campo utilizando o `var_dump` :

```
<?php

$dados = ['ArthurAzevedo',17,'Fortaleza'];

var_dump($dados[0])

?>
-- console --
/home/arthur/dev/curso/output.php:1
array(3) {
	[0] =>
	String(14) 'Arthur Azevedo'
}
```
> Nesse exemplo, utilizamos da função `var_dump` para acessar o índice `[0]` da nossa variável `$dados`, que utilizamos o sinal do dólar para criá-la.

No php, nós também conseguimos criar uma variável com **chaves e valores** dentro dela, utilizando o `=>` para indicar.

```
<?php

$dados = ['name' => 'ArthurAzevedo',17,'Fortaleza'];

var_dump($dados[2])

?>
-- console --
/home/arthur/dev/curso/output.php:1
NULL
```
> Como podemos ver, se tentarmos acessar o índice `[2]` dessa variável, o terminal retornará um valor `NULL` , pois a nossa chave criada, ela não pode ser acessada pelo índice, e sim pelo nome declarado à ela.

> [!NOTE]
>  E essa variável acima, retornaria a conter apenas 2 valores, com os índices `[0]` e `[1]`.


Então, para acessar essa chave precisaríamos fazer isso : 
```
<?php

$dados = ['name' => 'ArthurAzevedo',17,'Fortaleza'];

var_dump($dados['name'])

?>
-- console --
/home/arthur/dev/curso/output.php:1
String(14) 'Arthur Azevedo'
```

## Variáveis e Constantes

Nessa aula ele aborda outro assunto que já utilizamos anteriormente, mas não retratado de forma específica, então vamos pro conteúdo. 

Uma **variáveis** elas são conteúdos que irão conter **bloco de códigos**, que podem armazenar algum tipo de **informação** que eu colocar, porém sendo um valor variável.

Para se definir uma variável, pracisamoa usar o **prefixo** `$`, e logo em seguida dar o **nome** à essa variável. Mas quando vamos utilizar o operador de **atribuição** que é o `=`, e em seguida, indique o valor da variável.

`$name = 'Fulano Pereira`

E como esse valor é variável, podemos **alterar** o conteúdo da nossa variável, durante o seguimento do código.

```
<?php

$dados = ['ArthurAzevedo'];

echo $dados[0];

$dados = ['João Silveira Beto']

echo $dados[0];
?>
-- console --
/home/arthur/dev/curso/output.php:2

ArthurAzevedo
João Silveira Beto
—————————————
```

Porém, para uma **legibilidade** melhor do código, é recomendado que se utilize **chaves** e **valores** para acessar um **campo** de uma variável, do que o índice em si, por exemplo:

```
<?php

$dados = [
	name => 'Arthur Azevedo',
	age => 17,'
	city => 'Fortaleza'];

echo $dados['name'] . PHP_EOL;

?>
-- console --
/home/arthur/dev/curso/output.php:1
Arrhur Azevedo
—————————————
```

E para definirmos uma **constante**, nós utilizamos o `define()`, em que essa constante será um **valor fixo**, que não pode se alterar de jeito nenhum, a não ser que haja alteração no código.

```
<?php

define('Channel', 'https://youtube.com/TutovskiChannel');

echo Channel;
?>
-- console --
/home/arthur/dev/curso/output.php:2
https://youtube.com/TutovskiChannel
```

Porém, segundo o professor do curso, não vamos utilizar muito essa função.

## Operadores Aritméticos

Essa aula e a próxima tem dois assuntos que vou tratar em uma anotação individual, pois esses dois assuntos são bastante simples e correlacionados.

Introduzindo os operadores aritméticos, ele exemplica que nós conseguimos fazer vários tipos de contas matemáticas com alguns caracteres específicos, que majoritáriamente bem parecica com a maioria linguagens de programação.

#### 1. Contas Aritméticas em PHP
> Soma de dois valores.
```
<?php

$itemA = 10;
itemB = 5;
itemC = $itemA + $itemB;

echo $itemC;

?>
-- console --
/home/arthur/dev/curso/output.php:1
15
———————————————————————————————————————

```

> Subtração de dois valores
```
> <?php

$itemA = 10;
itemB = 5;
itemC = $itemA - $itemB;

echo $itemC;

?>
-- console --
/home/arthur/dev/curso/output.php:1
5
————————————————————————————————————————
```

> Multiplicação de dois valores
```
<?php

$itemA = 10;
itemB = 5;
itemC = $itemA * $itemB;

echo $itemC;

?>
-- console --
/home/arthur/dev/curso/output.php:1
50
```

> Divisão de dois valores
```
<?php

$itemA = 10;
itemB = 5;
itemC = $itemA / $itemB;

echo $itemC;

?>
-- console --
/home/arthur/dev/curso/output.php:1
2
———————————————————————————————————————
```

> Sobra da divisão de dois Valores
```
<?php

$itemA = 10;
itemB = 5;
itemC = $itemA % $itemB;

echo $itemC;

?>
-- console --
/home/arthur/dev/curso/output.php:1
0,5
———————————————————————————————————————
```


#### 2. Operadores de Atribuição PHP

O principal e mais conhecido operador de atribuição , é o operador `=`, aonde ele atribui valor a uma variável , utilizando o operador após ela.

Esses operadores são também para realizar alguns cálculos matemáticos, porém eles agilizam, por serem meio que "abreviação" de algumas contas matemáticas, como :

> Variável somando em Variável ($var + $valor)
```
<?php

$itemA = 10;
$itemA += 20;

echo $itemA;

?>
-- console --
/home/arthur/dev/curso/output.php:1
30
———————————————————————————————————————
```

> Variável subtraindo em Variável ($var - $valor)
```
<?php

$itemA = 10;
$itemA -= 20;

echo $itemA;

?>
-- console --
/home/arthur/dev/curso/output.php:1
-10
———————————————————————————————————————
```

> Variável multiplicando em Variável ($var * $valor)
```
<?php

$itemA = 10;
itemA *= 20;

echo $itemA;

?>
-- console --
/home/arthur/dev/curso/output.php:1
200
———————————————————————————————————————
```

> Variável dividindo em Variável ($var / $valor
```
<?php

$itemA = 10;
itemA /= 20;

echo $itemA;

?>
-- console --
/home/arthur/dev/curso/output.php:1
0,5
———————————————————————————————————————
```

## Operadores de Comparação

Nessa aula, será falado mais um tipo de operador, o de **comparação**, aonde ele será utilizado em operações **lógicas**, aonde o código faz uma "pergunta" pro interpretador, em uma expressão **booleana**, e ele responderá se é **verdadeiro** ou **falso**

Nós utilizaremos o `var_dump` para ser a forma de testar e utilizar os operadores, retornando os dois valores lógicos citados anteriormente.

Teremos **quatro** tipos de operadores inicialmente, sendo eles :
#### Operadores Lógicos (4)
##### Operador de Igualdade `==`

Esse operador pode ser utilizado de duas formas, para ver se um valor número é igual à outro, ou se uma string dentro de uma variável, contém o conteúdo que você especificar.

Exemplo :
```
<?php

var_dump(value: 1 == 1);
var_dump(value: 1 == 2);

?>
-- console --
/home/arthur/dev/curso/output.php:1
bool(true)
bool(false)
———————————————————————————————————————
```
>
> No primeiro exemplo, ele verifica se o valor do número `1` é igual ao número `1`, e retorna `true`

> E no segundo exemplo, ele verifica se o valor do número `1` igual ao valor de `2`, e retorna `false`, por serem valores diferentes.


> [!NOTE] Importate!
> Caso seja comparado valores numéricos em formatos de `string` , se eles forem **iguais**, ele retornará `true`, pois o operador de igualdade transforma a `string` em `number`, e faz a comparação.

Exemplo :
```
<?php

$password = "senha1234"
var_dump(value: $password == "senha123");

?>
-- console --
/home/arthur/dev/curso/output.php:1
bool(false)
———————————————————————————————————————
```
> Agora nesse exemplo, ele verifica se o valor que contém na variável `$password`, é igual ao valor passado na operação, se for diferente retorna `false`, e se for igual, retorna `true`.
##### Operador de Diferença `!=`

Esse operador, é basicamente a mesma coisa que o último, só que ele verifica se o valor é **diferente** , do o que está sendo comparado.

Exemplo :
```
<?php

var_dump(value: 1 != 1);

?>
-- console --
/home/arthur/dev/curso/output.php:2
bool(false)
———————————————————————————————————————
```
> Nessa operação, ele retornou `false`, pois os dois números comparados são **iguais**, se ele verifica se é diferente, então é `false`!

##### Operador Idêntico `===`

Esse operador ele também trabalha da mesma forma que o primeiro, só que ele leva em consideração mais um fator na **comparação**, além dele verificar o **valor** do dado, ele também verifica o **tipo** desse dado.

Exemplo :
```
<?php

var_dump(value: '1' === 1);

?>
-- console --
/home/arthur/dev/curso/output.php:1
bool(false)
———————————————————————————————————————
```
> Ness operação, mesmo eles tendo o mesmo valor, como um é uma `string` e o outro um `number`, eles não vão ser considerados **idênticos**. 


##### Operador não Indentico `!==`

Esse operador também vai trabalhar exatamente igual o último, só que ele vai verificar se os valores não são idênticos entre eles, tanto de tipo ou de valor.

Exemplo :

```
<?php

var_dump(value: '1' !== 1);
var_dump(value: 1 !== 1);

?>
-- console --
/home/arthur/dev/curso/output.php:1
bool(true)
bool(false)
———————————————————————————————————————
```
> Nesses dois exemplos, é comparado o fato de se os dois números não tiverem o mesmo tipo e valor, retornará `true`, e se tiverem, será `false`.



#### Operadores Aritméticos (4)


> [!NOTE] Aviso!
> Esses operadores são mais utilizados em contas matemáticas.

##### Operador Maior `>`

Esse operador, ele irá comparar se o número que foi descrito primeiro na operação é maior do que ele,

Exemplo :
```
<?php

var_dump(value: 5 > 1);
var_dump(value: 1 > 5);
var_dump(value: 5 > 5);
?>
-- console --
/home/arthur/dev/curso/output.php:1
bool(true)
bool(false)
bool(false)
———————————————————————————————————————
```
> Nessas 3 operações, podemos perceber que quando o número que vem **primeiro**, é maior do que o **outro**, retorna `true`, se contrário, ele retorna `false`, porém, se comparar o numero com ele mesmo, retorna `false` também, pois só estamos considerando se é **maior** ou **não**.

##### Operador Maior ou Igual `>=`

Segue a mesma lógica, só que apenas retornará `false`, quando o número for menor do que o valor principal, pois se comparar os números iguais, ele retorna `true`

```
<?php

var_dump(value: 1 >= 1);
var_dump(value: 1 >= 2);
var_dump(value: 1 >= 0)
?>
-- console --
/home/arthur/dev/curso/output.php:1
bool(true)
bool(true)
bool(false)
———————————————————————————————————————
```

##### Operador Menor `<`

Ness e operador, seguirá o mesmo sentido dos outros, porém comparando se um número é menor ou não do valor principal.

```
<?php

var_dump(value: 1 < 1);
var_dump(value: 1 < 2);

?>
-- console --
/home/arthur/dev/curso/output.php:1
bool(false)
bool(true)
———————————————————————————————————————
```
> Ness exemplo aqui não tem muito oque ser dito, ele retornou `false` na primeira operação, pois o número `1` não é menor que ele mesmo, e retornou `true` na outra, pois o número é menor que dois.


##### Operador Menor ou Igual `<=`

Mesma função do operador anterior, só que ele também faz a função de igualdade

Exemplo :
```
<?php

var_dump(value: 1 <= 1);
var_dump(value: 1 <= 2);

?>
-- console --
/home/arthur/dev/curso/output.php:1
bool(true)
bool(true)
———————————————————————————————————————
```





## Operadores de Array

Nessa aula, a gente vai falar um pouco sobre alguns operadores que se pode trabalhar com os arrays, então vamo pros exemplos.

#### União (`+`)

Com esse operador você consegue unir um ou mais valores de arrays.

```
<?php

$baseStats = [
	'classType' => 'Mage',
	'classUpgrade' => 'Necromancer'
];

$playerInfo = [
	'userName' => 'arthurztt',
	'guildName' => 'furiaGG'
];

$all = $baseStats + $playerInfo;
print_r($all);

?>
-- console --
/home/arthur/dev/curso/output.php:1
Array
{
	[classType] => Mage
	[classUpgrade] => Necromancer
	[userName] => arthurztt
	[guildName] => furiaGG
}
———————————————————————————————————————
```

#### Igualdade (`=`)

Nesse operador ele irá comparar as duas arrays, checando se cada campo tem o mesmo valor, porém não o mesmo tipo.

Ele retornará `1` para verdadeiro, e `0` para falso, por ser uma ação booleana.

```
<?php

$age = [22,18];
$age2 = [22,18];

var_dump($age == $age2);

?>
-- console --
/home/arthur/dev/curso/output.php:1
1
———————————————————————————————————————
```
### Diferença (`!=`) ou (`<>`)

Checa se as duas arrays comparadas tem valores diferentes.

```
<?php

$age = [22,18];
$age2 = [22,36];

var_dump($age !== $age2);

?>
-- console --
/home/arthur/dev/curso/output.php:1
1
———————————————————————————————————————
```
### Idêntico (`===`)

Nesse operador ele compara se as arrays tem valores iguais, e tipos iguais.

```
<?php

$age = [22,18];
$age2 = [22,'18'];

var_dump($age == $age2);

?>
-- console --
/home/arthur/dev/curso/output.php:1
0
———————————————————————————————————————
```


### Não Idêntico (`!==`)

Nesse operador ele checa se os valores do array não são iguais, tanto de tipo quanto de valor.

```
<?php

$age = [22,18];
$age2 = [32,'18'];

var_dump($age == $age2);

?>
-- console --
/home/arthur/dev/curso/output.php:1
1
———————————————————————————————————————
```


## Operadores Lógicos 

Nesse aula, vamos ver os operadores lógicos, que são alguns operadores que comvertem tudo que tem dentro da operação para **booleano** antes dela ser executada.

### Operador 'E' (`AND` ou `&&`)

Esse operador ele trabalha comparando se os dois valores citados são verdadeiros, caso não sejam retorna `false`.

Exemplo:
```
<?php

$employed = true;
$homeOffice = true;

var_dump($employed && $homeOffice);

?>
-- console --
/home/arthur/dev/curso/output.php:1
bool(true)
———————————————————————————————————————
```
### Operador 'OU' (`OR` ou `||`)

Esse operador, ele trabalha comparando se alguns dos dois operadores são verdadeiros, se houver um ao menos um  retorna `true`, ao contrário, retorna `false`.

Exemplo:
```
<?php

$employed = true;
$homeOffice = false;

var_dump($employed || $homeOffice);

?>
-- console --
/home/arthur/dev/curso/output.php:1
bool(true)
———————————————————————————————————————
```

### Operador 'OU EXCLUSIVO' (`XOR` ou `^`)

Esse operador, diferente do anterior, ele presica que **estritamente**, uma das operações sejam verdadeiras, se caso houver duas, retorna `false`.

Exemplo:
```
<?php

$employed = true;
$homeOffice = true;

var_dump($employed ^ $homeOffice);

?>
-- console --
/home/arthur/dev/curso/output.php:1
int(0)
———————————————————————————————————————
```
> int(0) é a mesma coisa que `false`.

### Operador 'Não' (`NOT` ou `!`)

Esse operador retorna o estado contrário do valor citado, se quiser uma variável `true` se torne `false`, é só usar esse operador.


Exemplo:
```
<?php

$employed = true;


var_dump(!$employed);

?>
-- console --
/home/arthur/dev/curso/output.php:1
bool(false)
———————————————————————————————————————
```

## Operador de Execução

Nessa aula, a gente vai ver um pouco sobre o Operador de Execução, que executa um comando a nivel Shell na máquina que for utilizada, parecido com as funções `shell_exec().` , `exec()` e `system()`.


> [!NOTE] ATENÇÃO 
> Cuidado ao utilizar esse operador, use ele com moderação. 

```
<?php

//list source, mosta oq tem no diretório
$output = `ls`;
echo $output;

?>
-- console --
/home/arthur/dev/curso/output.php:1

arithmetics Operators.php arraysOperators.php  
attributionOperators.php
comments.php  
comparisonOperators.php 
dataTypes.php 
executionOperator.php 
logical Operators.php 
output.php 
syntax.php 
variables.php

———————————————————————————————————————
```

> Ess esse operador pode ser perigoso pelo fato de poder rodar QUALQUER comando a nivel shell diretamente no código, como dar u. `shutdown` e desligar o pc direto pelo código, ou instalar algum arquivo dentro do pc.

> Mas por outro lado, ele pode ser utilizado para executar qualquer comando que precise de acesso remoto.

## Estruturas de Controle - Condicionais

Essa aula vai tratar sobre a estrutura de controle condicional, que verifica se um trecho de código deverá se basear em um teste lógico, pra verificar se a resposta desse código é `true` ou `false`, a gente utiliza essas estruturas.

### Condição If/else

 Essa condição trabalhará realizando uma pergunta para o trecho de código que a gente inserir:

```
Se a condição for `true` 
  Execute a `Condição Verdadeira`
Senão
  Execute a `Condição Falsa`
```

E agora algumas demonstrações de usos dessa condição:

#### Maior de Idade

```
<?php
$age = 20;

if($age >= 18){
	echo "Você é maior de idade." 
	// Condição Verdadeira
}else {
	echo "Você não é maior de idade."
	// Condição Falsa
}
?>
—— console ————————————————————————————
/home/arthur/dev/curso/output.php:1
Você é maior de idade.
———————————————————————————————————————
```

#### Checagem de Autenticação
```
<?php
$estouLogado = false;

If($estouLogado){
	echo "Continue navegando."
}else {
	echo "Voltando para pagina de Login."
}
?>
—— console ————————————————————————————
/home/arthur/dev/curso/output.php:1
Voltando para página de login.
———————————————————————————————————————
```



#### Usuário e Senha

```
<?php

$user = 'arthurztt'
$password = 'tutsSenha2727'

If($user == 'arthurztt && $password == 'tutsSenha2727'){
	echo "Seja bem vindo tuts";
} else {
	echo "Usuário ou senha incorretos."
}

?>
—— console ————————————————————————————
/home/arthur/dev/curso/output.php:1
Seja bem vindo tuts.
———————————————————————————————————————
```


### Condição ElseIf

Essa condição é uma extensão da última, porém podendo haver várias condições verdadeiras, ao invés de duas que é o caso do `If/Else`.

Para facilitar a visualização da condição, aqui vai um exemplo:

#### Sistema de Dano RPG

```
<?php

$playerHP = 200;
$dragonDamage = 150;

If($dragonDamage < $playerHP){
	echo "Você não morreu! Sua vida restante foi : " . ($playerHP - $dragonDamage) . "HP.";
} elseif($dragonDamage >= $playerHP){
	echo "Você foi morto pelo dragão! O dano sofrido foi : " . $dragonDamage . "DMG.";
} else {
	echo "Você não foi atacado pelo dragão!";
}


?>
—— console————————————————————————————
/home/arthur/dev/curso/output.php:1
Você não morreu! Sua vida restante foi : 50HP.
———————————————————————————————————————
```



### Condição Switch 

O construtor **switch** parece bastante com a lógica do if/else if, porém há uma estrutura melhor para comportar o que você deseja colocar como valores predefinidos.

A declaração tem como base uma condição e N casos de uso dependendo do valor inserido na condição, e é finalizado após a palavra reservada **break** ser acionada, que pode ser interpretado como o fim de um bloco de código...

Caso não haja nenhuma opção elegível dentro dos casos citados, você pode usar a opção **default** para retornar um valor padrão.

#### Checagem de Classe RPG

```
<?php
$class = 'Mage';

switch($class){
	case 'Mage':
		echo "Sua função é lutar ao lado das tropas de defesa, utilizando sua magia para enfraquecer o inimigo";
		break;
	case 'Archer':
		echo "Sua função é ficar na backline cuidando dos inimigos que vacilarem ao andarem desatentos no campo de batalha, sem se arriscar muito.";
		break;
	case 'Assassin':
		echo "Sua função é ir furtivamente atrás dos inimigos mais vulneráveis e abatelos sem ser visto.";
		break;
	case 'Healer':
		echo "Sua função é curar seu time e a você mesmo se por acaso forem antigidos.";
		break;
	case 'Berserker':
		echo "Sua função é ir na linha de frente lutando freneticamente como um bárbaro, apenas a procura de gente pra matar.";
		break;
	default:
		echo "Você não tem ima classe!"
}


?>
—— console————————————————————————————
/home/arthur/dev/curso/output.php:1
Sua função é lutar ao lado das tropas de defesa, utilizando sua magia para enfraquecer o inimigo
———————————————————————————————————————
```
### Condição Ternário 

O operador ternário ajuda na escrita de condições if/else diminuindo para uma única linha. Ou seja, será algo para ser usado quando você tem uma fácil comparação e um retorno SIMPLES.

O operador ternário leva alguns símbolos para substituir o uso de parênteses e chaves, sendo eles o `?` e `:`

```
<?php
$age = 18;

$undeAge = $age >= 18
	? 'Você é maior de Idade.'
	: 'Você é menor de Idade.';
?>
—— console————————————————————————————
/home/arthur/dev/curso/output.php:1
Você é maior de Idade.
———————————————————————————————————————
```



### Coalescência Nula 

Essa condição ela se dá quando se tem uma variável com valor pré-definido ou inexistente, essa condição ela checa se esse valor for inexistente, caso seja, ele define um valor padrão pra essa variável.

Exemplo:
- Valor pré-definido.
```
<?php

$user = [
	'name' => "arthur",
	'employed' => true
];

echo $user['user'] ?? $user['employed'] ?? "Valor não definido";

?>
—— console————————————————————————————
/home/arthur/dev/curso/output.php:1
arthur
true 

// como os dois valores existem na variável, ele retorna o valor pré-definido.
———————————————————————————————————————
```

Exemplo:
- Valor não definido.
```
<?php

$user = [
	'employed' => true
];

echo $user['user'] ?? $user['employed'] ?? "Valor não definido";


?>
—— console————————————————————————————
/home/arthur/dev/curso/output.php:1
Valor não definido
true 

// como a chave "user" e o valor dela não existem, ela retorna o valor da coalescencia nula.
———————————————————————————————————————
```

E a expressão que se utilizava antes da coalescencia nula era esse Ternário aqui :
```
echo isset($user['name']) ? $user['name'] : "Valor não definido";
```
## Estruturas de Repetição - Loops

As estruturas de controle relacionadas a Loops tendem a ter regras para continuar executando instruções do código até que essa regra seja quebrada.

Em outras palavras, você tem uma condição que é interpretada como um valor lógico que é checada e enquanto ela for verdadeira, o bloco de código é executado até que o valor a ser checado mude para falso.

### Laço For

O laço 
