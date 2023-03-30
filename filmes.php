<?php

class filmes extends cinema {
  protected $filme1 = "John Wick";
  protected $dur_filme1 = "03:00:00";
  protected $filme2 = "O homem que desafiou o diabo";
  protected $dur_filme2 = "01:30:00";
  protected $filme3 = "Vingadores - The Return";
  protected $dur_filme3 = "04:00:00";

  public function filmes() {
    echo "Filmes disponíveis: ";
    echo "filme 1:  $this->filme1";
    echo "Duração: $this->dur_filme1";
    echo "filme 2:  $this->filme2";
    echo "Duração: $this->dur_filme2";
    echo "filme 3:  $this->filme2";
    echo "Duração: $this->dur_filme2";
  }
}