<?php
  //Saudações.
  echo "Seja muito bem-vindo jogador! Esse é um jogo de cara ou coroa." . PHP_EOL;

  $nomeJogador = readline("Então, indentifique-se : ");

  //casting de numeros inteiros, para não inserir strings nesse readline.
  do{
  $escolhaJogador = (int) readline("Então " . $nomeJogador . ", digite 0 para CARA ou 1 para COROA: ");
} while ($escolhaJogador !== 0 && $escolhaJogador !== 1 );

  $sorteio = rand(0,1);

  if($escolhaJogador === $sorteio){
    echo "Parabéns, você venceu!";
  }
  else{
    echo "Que pena...você perdeu!";
  }
?>