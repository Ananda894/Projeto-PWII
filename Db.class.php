<?php
  class Conexao{
    public function conectar(){
      try{
        $stringConn = "host=motty.db.elephantsql.com port=5432 dbname=lmvqqmsq user=lmvqqmsq password=SOOrsuGGuD06x-dIDWE698GID6hLtQKf";
        $conn = pg_connect($stringConn);
      }
      catch(Exception $e){
        echo $e->getMessage();
      }
      return $conn;
    }
  }
  ?>