<?php
include_once 'Db.class.php';
 
class Usuario extends Conexao{

    private  $id;
    private  $funcionario_id;
    private  $username;
    private  $senha;

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
      $result = pg_query($c,"INSERT INTO usuarios (id,funcionario_id,username,senha) 
        VALUES ('{$this->id}','{$this->funcionario_id}','{$this->username}','{$this->senha}')");                                 
    }
    function atualizar(){
      $con = new Conexao();
      $c = $con->conectar();
      $result = pg_query($c,"UPDATE usuarios SET  
        id ='{$this->id}',funcionario_id ='{$this->funcionario_id}',username ='{$this->username}', senha ='{$this->senha}'  WHERE id ='{$this->id}'");           
    }

    function excluir(){
      $con = new Conexao();
      $c = $con->conectar();
      $result = pg_query($c,"DELETE FROM usuarios WHERE id='{$this->id}'");    
    }

}
?>
