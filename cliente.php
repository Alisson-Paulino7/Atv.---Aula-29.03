<?php

class cliente extends cinema {
  
  protected $idade_cliente = 20;
  protected $quant_ingressos = 50;
  protected $paga_meia = ["Verdadeiro", "Falso"];

  public function dados_cl {
    echo "Idade do cliente 1: $this->idade_cliente";
    echo "Qtd. de ingressos vendidos: $this->quant_ingressos";
    echo "Cliente 1 pagou inteira ou meia: $this->paga_meia[1]";
  }

  
}