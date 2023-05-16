<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de Piel</title>
</head>
<body>
    <fieldset>
        <legend> Test de Tipo de Piel</legend>
        <form action="pielt.php" method="post">
            <p>1.-¿Tu piel en primer contacto se siente?</p>
            <p>Untuosa <input type="radio" name="r1" value="5"></p>
            <p>Brillante en zonas como la barbilla o la nariz <input type="radio" name="r1" value="3"></p>
            <p>Fina y Suave <input type="radio" name="r1" value="2"></p>

            <p>2.-Un par de horas después de lavar e hidratar tu cara, ¿cómo te la notas?</p>
            <p>Seca y áspera, como si no hubiera aplicado la crema<input type="radio" name="r2" value="5"></p>
            <p>Muy brillante <input type="radio" name="r2" value="3"></p>
            <p>Normal, quizás hay zonas más hidratadas que otras <input type="radio" name="r2" value="2"></p>

            <p>3.-Los poros de tu piel son.../p>
            <p>Totalmente invisibles <input type="radio" name="r3" value="5"></p>
            <p>En unas zonas más visibles que en otras <input type="radio" name="r3" value="3"></p>
            <p>Abiertos y visibles <input type="radio" name="r3" value="2"></p>

            <p>4.-Debido a los cambios de temperatura o a otros agentes externos, ¿tu piel se irrita o enrojece con facilidad?</p>
            <p>Puntualmente, sobre todo en la zona de las mejillas <input type="radio" name="r4" value="5"></p>
            <p>Nunca <input type="radio" name="r4" value="3"></p>
            <p>Sí, más a menudo de lo que me gustaría <input type="radio" name="r4" value="2"></p>
           
            <p>5.-¿Son habituales las imperfecciones o los brotes de acné en tu rostro?</p>
            <p>Sí, la verdad que no consigo evitarlo <input type="radio" name="r5" value="5"></p>
            <p>No, tengo suerte con ello <input type="radio" name="r5" value="3"></p>
            <p>De vez en cuando, sobre todo en épocas de mayor ajetreo o estrés <input type="radio" name="r5" value="2"></p> 

            <p>6.-¿Notas (de forma constante) sequedad o tirantez en tu rostro?</p>
            <p>Sí, habitualmente mi piel tiene un aspecto descamado <input type="radio" name="r6" value="5"></p>
            <p>De forma puntual y sobre todo en épocas de frío y en la zona de las mejillas <input type="radio" name="r6" value="3"></p>
            <p>No, la verdad que mi piel siempre está brillante y tensa <input type="radio" name="r6" value="2"></p>

            <p>7.-¿Tienes arrugas en tu rostro?</p>
            <p>Ninguna, la verdad que no se aprecian en mi piel <input type="radio" name="r7" value="5"></p>
            <p>Lamentablemente sí, sobre todo en la zona de los ojos <input type="radio" name="r7" value="3"></p>
            <p>Sí, pero son muy poco visibles <input type="radio" name="r7" value="2"></p>

            <p>8.-A la hora de tomar el sol...</p>
            <p>Mi piel suele enrojecerse pero finalmente se ve bronceada <input type="radio" name="r8" value="5"></p>
            <p>Debo tener especial cuidado para que no se irrite demasiado <input type="radio" name="r8" value="3"></p>
            <p>Agarro rápidamente color <input type="radio" name="r8" value="2"></p>

            <p>9.-¿Cuántas veces al día lavas tu cara?</p>
            <p>Muy poco, realmente no creo que lo necesitei <input type="radio" name="r9" value="5"></p>
            <p>2 o 3 veces, depende del día quizás menos <input type="radio" name="r9" value="3"></p>
            <p>Continuamente, mi piel lo necesita <input type="radio" name="r9" value="2"></p>

            <p>10.-Si pudieras pedir un deseo sobre tu piel seria...</p>
            <p>Acabar con la sensación áspera de mi piel <input type="radio" name="r10" value="5"></p>
            <p>Buscaría la clave para unificar las zonas de mi rostro <input type="radio" name="r10" value="3"></p>
            <p>Optaría por eliminar los brillos constantes <input type="radio" name="r10" value="2"></p>



            <p><input type="submit"  value="Enviar"></p>

        </form>
        <?php
        if($_POST){
            $r1 = $_POST["r1"];
            $r2 = $_POST["r2"];
            $r3 = $_POST["r3"];
            $r4 = $_POST["r4"];
            $r4 = $_POST["r5"];
            $r4 = $_POST["r6"];
            $r4 = $_POST["r7"];
            $r4 = $_POST["r8"];
            $r4 = $_POST["r9"];
            $r4 = $_POST["r10"];
        }
        ?>
    </fieldset>
</body>
</html>