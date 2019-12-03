<?php
include_once 'Db.class.php';
 
class Veiculo extends Conexao{

    private  $id;
    private  $fabricante;
    private  $cor;
    private  $ano;
    private  $portas;
    private  $modelo;
    private  $situacao;
    private  $novo;
    private  $preco;
    private  $placa;

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
      $result = pg_query($c,"INSERT INTO veiculos (id,fabricante,cor,ano,portas,modelo,situacao,novo,preco,placa) 
                                VALUES ('{$this->id}','{$this->fabricante}','{$this->cor}','{$this->ano}',
                                '{$this->portas}','{$this->modelo}','{$this->situacao}','{$this->novo}',
                                '{$this->preco}','{$this->placa}')");                                 
    }
    function atualizar(){
      $con = new Conexao();
      $c = $con->conectar();
      $result = pg_query($c,"UPDATE veiculos SET  
            id ='{$this->id}',fabricante ='{$this->fabricante}',cor ='{$this->cor}',ano ='{$this->ano}',
            portas ='{$this->portas}',modelo ='{$this->modelo}',situacao ='{$this->situacao}',novo ='{$this->novo}',
            preco ='{$this->preco}',placa ='{$this->placa}' WHERE id ='{$this->id}'");           
    }

    function excluir(){
      $con = new Conexao();
      $c = $con->conectar();
      $result = pg_query($c,"DELETE FROM veiculos WHERE id='{$this->id}'");    
    }

    
     

}
?>
