<?php

class ingressos extends cinema {
  $n_ingresso = 30;
  $valor_ingresso = "R$14,90";
  $tipo_ingresso = ["inteira", "meia entrada"];


  public function ingressos{
    echo "Informações sobre os ingresos:";
    echo "$this->n_ingresso";
    echo "$this->valor_ingresso";
    echo "$this->tipo_ingresso[1]";
    
  }
}