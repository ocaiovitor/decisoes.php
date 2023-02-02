<?php

$idade = 23;

echo "Entrada proibida para menores de 18 anos." . PHP_EOL;

if ($idade >= 18) {
  echo "Você tem $idade anos." . PHP_EOL;
  echo 'pode entrar!';
}
else {
  echo "Você tem $idade anos" PHP_EOL;
  echo 'você não pode entrar';
}