<?php
include_once 'Db.class.php';
 
class Veiculo_cliente extends Conexao{

    private  $id;
    private  $veiculo_id;
    private  $cliente_id;
    private  $funcionario_id;
    private  $vendido_em;

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
      $result = pg_query($c,"INSERT INTO veiculos_clientes (id,veiculo_id,cliente_id,funcionario_id,vendido_em) 
        VALUES ('{$this->id}','{$this->veiculo_id}','{$this->cliente_id}','{$this->funcionario_id}','{$this->vendido_em}')");                                 
    }
    function atualizar(){
      $con = new Conexao();
      $c = $con->conectar();
      $result = pg_query($c,"UPDATE veiculos_clientes SET  
        id ='{$this->id}',veiculo_id ='{$this->veiculo_id}',cliente_id ='{$this->cliente_id}',funcionario_id ='{$this->funcionario_id}',vendido_em ='{$this->vendido_em}'  WHERE id ='{$this->id}'");           
    }

    function excluir(){
      $con = new Conexao();
      $c = $con->conectar();
      $result = pg_query($c,"DELETE FROM veiculos_clientes WHERE id='{$this->id}'");    
    }

}
?>
