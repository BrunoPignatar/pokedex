<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de pokemon</title>
    <style>
        label, input { display: block;}
        body{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>
<form action="/pokemon/save" method="post">
        <fieldset>
        <center><legend style="color: BLACK;">CADASTRO DE POKEMON</legend>
            
            <center><input type="hidden" value="<?= $model->id ?>" name="id" />


            <center> <label for="descricao" style="color: black;">Descrição:</label>
            <center><input name="descricao" id="descricao" type="text" value="<?= $model->descricao ?>" style="background:yellow; color:black; height:20px;"/>

            <br>
            <center><button type="submit" style="background-color:yellow ; height:40px; width:70px; font-size:17px;color:black">Enviar</button>

        </fieldset>
    </form>    
    <br>
    <center><a href="/categoria"><button style="height: 85px; width:350px; font-size:25px; background-color:yellow;border: 1 solid black;color:black" >Ver listagem de categorias</button></a></center>

    <a href="/"><button style="height: 85px; width:350px; font-size:25px; background-color:yellow;border: 1 solid black; position: absolute;
    bottom: 0;
    width: 99%;
    height: 100px;    
    text-align: center;
    line-height: 100px;color:black" >Voltar para página inicial</button></a>

<style>
        body{
            background-color: red;
        }
        


    </style>

</body>
</html>