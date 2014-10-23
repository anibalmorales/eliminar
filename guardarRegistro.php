     <?php 

include("conectar_bd.php");  
    conectar_bd();

    $txtUser= $_POST['txtUser']; 
    
    // Pasamos los datos para actualizarlos en la tabla. 
    $ssql = "DELETE FROM `usuarios` WHERE `user`='$txtUser'"; 

    // Liberamos los datos con la condición if. 
    if (mysql_query($ssql)) { 
    echo "Borrado exitoso "; 
    } else { 
    echo "Error de Eliminacion "; 
    } 
    ?>

