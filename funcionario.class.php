<?php
include_once 'Db.class.php';
 
class Funcionario extends Conexao{

    private  $id;
    private  $nome;
    private  $cpf;
    private  $endereco;
    private  $setor;

    function __get($propriedade){
        return $this->$propriedade;
    }

    function __set($propriedade,$valor){
       $this->$propriedade = $valor;
    }

    function salvar()
    {
      $con = new Conexao();
      $c = $con->conectar();
      $result = pg_query($c,"INSERT INTO funcionarios (id,nome,cpf,endereco,setor) 
                                VALUES ('{$this->id}','{$this->nome}','{$this->cpf}','{$this->endereco}','{$this->setor}')");                                 
    }
    function atualizar(){
      $con = new Conexao();
      $c = $con->conectar();
      $result = pg_query($c,"UPDATE funcionarios SET  
            id ='{$this->id}', nome ='{$this->nome}',cpf ='{$this->cpf}',endereco ='{$this->endereco}',setor='{$this->setor}'  WHERE id ='{$this->id}'");           
    }

    function excluir(){
      $con = new Conexao();
      $c = $con->conectar();
      $result = pg_query($c,"DELETE FROM funcionarios WHERE id='{$this->id}'");    
    }    

}
?>