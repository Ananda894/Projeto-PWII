<?php 
include_once 'Db.class.php';
    class Menu extends Conexao{
        private $id;
        private $nome;
        private $url;

        function __get($propriedade){
            return $this->$propriedade;
        }
    
        function __set($propriedade,$valor){
          $this->$propriedade = $valor;
        }
        function salvar(){
            $con = new Conexao();
            $c = $con->conectar();
            $result = pg_query($c,"INSERT INTO menu (id,nome,url) 
                                        VALUES ('{$this->id}','{$this->nome}','{$this->url}'");                                 
        }
        function atualizar(){
            $con = new Conexao();
            $c = $con->conectar();
            $result = pg_query($c,"UPDATE menu SET  
                    id ='{$this->id}',nome ='{$this->nome}',url ='{$this->url}'  WHERE id = '{$this->id}'");    
        }

        function excluir(){
            $con = new Conexao();
            $c = $con->conectar();
            $result = pg_query($c,"DELETE FROM menu WHERE id='{$this->id}'");    
        }

        function getTodos(){
            $con = new Conexao();
            $c = $con->conectar();
            $result = pg_query($c,"SELECT * FROM menu");
            if($row = pg_fetch_all($result)){
                echo "<div id='menu'>";
                foreach($row as $i)
                    {
                        echo "<a href='{$i['url']}'>{$i['nome']}</a>";
                    }
                echo "</div>";
            }
            else{
                echo "tabela vazia";
            }
        }
    }
?>