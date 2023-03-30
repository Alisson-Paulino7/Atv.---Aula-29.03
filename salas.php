<?php

class salas extends cinema {

  protected $n_sala = 5;
  protected $ingressos = 150;
  
  public function inf_salas {
    echo "Há um total de $this->n_sala salas com um total de $this->ingressos ingressos disponíveis";
  }
  
}