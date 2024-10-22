<?php

    include "conexiones.php";

    $consulta_sql = "SELECT * FROM alumno";

    $resultado = $conexion->query($consulta_sql);

    $count = mysqli_num_rows($resultado);

    echo "<table>";

        echo "<tr>";

            echo "<th>Alumnos</th>";
        
        echo "</tr>";   

    if($count>0){
        while($row = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
                echo "<td>".$row['nombre_usuario']."</td>";
                echo "<td>".$row['carrera']."</td>";
                echo "<td>".$row['no_cuenta']."</td>";
                echo "<td>".$row['direccion']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['telefono']."</td>";
                echo "<td>".$row['fecha_registro']."</td>";
            echo "</tr>";

        }

    }


 ?>