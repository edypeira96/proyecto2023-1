<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de tono de Piel</title>
</head>
<body>
    <fieldset>
        <legend> Test de Tipo de tono de piel</legend>
        <form action="tonopiel.php" method="post">
            <p>1.-¿De que color son las venas de tu muñeca?</p>
            <p>Azules <input type="radio" name="r1" value="Si"></p>
            <p>Verdosas <input type="radio" name="r1" value="No"></p>
            <p>Ambas <input type="radio" name="r1" value="No"></p>

            <p>2.-Coloca una hoja blanca a lado de tu rostro limpio y con luz natural, ¿como notas tu rostro?</p>
            <p>Anaranjado/Amarillo <input type="radio" name="r2" value="Si"></p>
            <p>Rosado <input type="radio" name="r2" value="No"></p>
            <p>Ambos <input type="radio" name="r2" value="No"></p>

            <p>3.-Busca un par de joyas en color plateado y dorado y ponlas a lado de tu rostro una por una ¿cual se te ve mejor?</p>
            <p>Plateada <input type="radio" name="r3" value="Si"></p>
            <p>Dorada <input type="radio" name="r3" value="No"></p>
            <p>Ambas <input type="radio" name="r3" value="No"></p>


            <p><input type="submit"  value="Enviar"></p>

        </form>
        <?php
        if($_POST){
            $r1 = $_POST["r1"];
            $r2 = $_POST["r2"];
            $r3 = $_POST["r3"];
            
        }
        ?>
    </fieldset>
</body>
</html>