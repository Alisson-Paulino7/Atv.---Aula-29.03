<?php

class abstract cinema {

  protected $funcionarios = 15;

  abstract protected function filmes();
  abstract protected function ingressos();
  abstract protected function salas();
  abstract protected function cliente();
}

