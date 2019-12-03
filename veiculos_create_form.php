<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CADASTRAR VEÍCULO</title>
        <?php 
        include_once 'estilo.php';
        ?>
    </head>
    <body>
    <div id="header" class="row justify-content-center">
        <h1 class="titulo">Cadastrar Veículo</h1>
    </div>
        <div class="container" id="formulario">
            <div class="row justify-content-center">
                <form method="POST" action="veiculos_create.php">
                    <div class="form-group">
                        <label>ID: </label>
                        <input class="form-control" type="text" name="id">
                    </div>
                    <div class="form-group">
                        <label>FABRICANTE: </label>
                        <input class="form-control" type="text" name="fabricante">
                    </div>
                    <div class="form-group">    
                        <label>COR: </label>
                        <input class="form-control" type="text" name="cor">
                    </div>
                    <div class="form-group">    
                        <label>ANO: </label>
                        <input class="form-control" type="text" name="ano">
                    </div>
                    <div class="form-group">    
                        <label>PORTAS: </label>
                        <input class="form-control" type="text" name="portas">
                    </div>
                    <div class="form-group">    
                        <label>MODELO: </label>
                        <input class="form-control" type="text" name="modelo">
                    </div>
                    <div class="form-group">    
                        <label>SITUAÇÃO: </label>
                        <input type="radio" name="situacao" value="vendido">  Vendido
                        <input type="radio" name="situacao" value="a venda">  À venda
                    </div> 
                    <div class="form-group">   
                        <label>NOVO: </label>
                        <input type="radio" name="novo" value="TRUE">Sim
                        <input type="radio" name="novo" value="FALSE">Não
                    </div>
                    <div class="form-group">    
                        <label>PREÇO: </label>
                        <input class="form-control" type="text" name="preco">
                    </div>
                    <div class="form-group">    
                        <label>PLACA: </label>
                        <input class="form-control" type="text" name="placa">
                    </div>
                    <div class="row justify-content-center">    
                        <input class="btn btn-info" type="submit" value="cadastrar" id="form-button">
                        <a id="form-button" class="btn btn-info" role="button" href="veiculos.php">Voltar</a>
                    </div> 
                </form>
            </div>
        </div>
        <?php include_once 'footer.php'; ?>        
    </body>
</html>