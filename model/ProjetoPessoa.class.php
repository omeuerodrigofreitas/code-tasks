<?php


class ProjetoPessoa
{

  private $id;
  private $id_projeto;
  private $id_pessoa;
  private $url_hospedagem;
  private $url_github;

  //Propriedade(s) de junção(ões)
  private $nome;
  
  public function __construct() { }

  public function __get($chave) 
  {
    return $this->$chave;
  }

  public function __set($chave, $valor) 
  {
      $this->$chave = $valor;
  }

}

?>