<?php
include_once 'Db.class.php';
 
class Cliente extends Conexao{

    private  $id;
    private  $nome;
    private  $cpf;
    private  $endereco;

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
      $result = pg_query($c,"INSERT INTO clientes (id,nome,cpf,endereco) 
                                VALUES ('{$this->id}','{$this->nome}','{$this->cpf}','{$this->endereco}')");                                 
    }
    function atualizar(){
      $con = new Conexao();
      $c = $con->conectar();
      $result = pg_query($c,"UPDATE clientes SET  
            id ='{$this->id}', nome ='{$this->nome}',cpf ='{$this->cpf}',endereco ='{$this->endereco}'  WHERE id ='{$this->id}'");           
    }

    function excluir(){
      $con = new Conexao();
      $c = $con->conectar();
      $result = pg_query($c,"DELETE FROM clientes WHERE id='{$this->id}'");    
    }

    
     

}
?>
