<?php
include_once 'Db.class.php';
 
class Veiculo_caracteristica extends Conexao{

    private  $id;
    private  $veiculo_id;
    private  $descricao;
    private  $gasolina;
    private  $alcool;
    private  $diesel;
    private  $flex;
    private  $ar_condicionado;
    private  $airbag;
    private  $blindagem;

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
      $result = pg_query($c,"INSERT INTO veiculos_caracteristicas (id,veiculo_id,descricao,gasolina,alcool,diesel,flex,ar_condicionado,airbag,blindagem) VALUES ('{$this->id}','{$this->veiculo_id}','{$this->descricao}','{$this->gasolina}','{$this->alcool}','{$this->diesel}','{$this->flex}','{$this->ar_condicionado}','{$this->airbag}','{$this->blindagem}')");                                 
    }
    function atualizar(){
      $con = new Conexao();
      $c = $con->conectar();
      $result = pg_query($c,"UPDATE veiculos_caracteristicas SET id ='{$this->id}',veiculo_id ='{$this->veiculo_id}',descricao ='{$this->descricao}',gasolina ='{$this->gasolina}',alcool ='{$this->alcool}',diesel ='{$this->diesel}',flex ='{$this->flex}',ar_condicionado ='{$this->ar_condicionado}',airbag ='{$this->airbag}',blindagem ='{$this->blindagem}' WHERE id ='{$this->id}'");           
    }

    function excluir(){
      $con = new Conexao();
      $c = $con->conectar();
      $result = pg_query($c,"DELETE FROM veiculos_caracteristicas WHERE id ='{$this->id}'");    
    }

}
?>
