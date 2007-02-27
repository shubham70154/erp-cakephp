<?php

class FormatHelper extends Helper {

  function data($valor) {
    $temp = explode('-', $valor);
    return $temp[2] . '/' . $temp[1] . '/' . $temp[0];
  }

  function data_hora($valor) {
    return $this->data(substr($valor, 0, 10)) . substr($valor, -9);
  }

  function moeda($valor) {
    return number_format($valor, 2, ',', '.');
  }

  function listarCategorias($vetor, $nivel = 0) {
    if (is_array($vetor)) {
      foreach($vetor as $valor) {
        echo $this->__espacar($nivel) . ' ' . ($valor['tipo'] == 'entrada' ? '+' : '-') . ' ' . $valor['nome'] . "<br />\n";
        $this->listarCategorias($valor['subs'], $nivel + 1);
      }
    }
  }

  function __espacar($qnt, $tipo = '&nbsp;&nbsp;&nbsp;&nbsp;') {
    $espaco = '';
    for ($qnt; $qnt > 0; $qnt--) {
      $espaco .= $tipo;
    }
    return $espaco;
  }
}
?>