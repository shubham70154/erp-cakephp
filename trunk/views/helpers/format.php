<?php

class FormatHelper extends Helper {

  function data($valor) {
    $temp = explode('-', $valor);
    return $temp[2] . '/' . $temp[1] . '/' . $temp[0];
  }

  function data_hora($valor) {
    return $this->data(substr($valor, 0, 10)) . substr($valor, -9);
  }

  function texto($valor) {
    return utf8_decode($valor);
  }

  function moeda($valor) {
    return number_format($valor, 2, ',', '.');
  }
}
?>