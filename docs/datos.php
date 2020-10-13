<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <style>
         html{
            font-size: 62.5%;
        }
        body{
            margin: 0%;
            padding: 0%;
            background-image: url('img/fondo3.jpg');
            background-position:  center center;
            background-size: cover;
            opacity: 1;
            
            font-size: 1.9rem;
            color: white;
            
            
        }
        .form{
            width: 55rem;
            height: 50rem;
            margin: 6% auto;
            background-color: rgba(17, 16, 16, 0.774);
            
        }
        .form h1{
            font-size: 3rem;
        }
        .tab{
            margin: 0 5rem;
           
        }
        a{
            background: rgba(31, 17, 110, 0.65);
            color: white;
            text-decoration: none;
            padding:1rem 5rem;
            margin-left: 38%;
        }
        a:hover{
            color:black;
            background-color: rgba(202, 201, 207, 0.74);
        }
        
    </style>
</head>
    <body>
        <div  class="form" >
            <h1 style="text-align: center;" >Sus Datos</h1>
            <div class="tab">
                <p>Su Nombre completo: <?php echo $_POST['nombre'],' ',$_POST['apellidoP'],' ',$_POST['apellidoM'] ;?></p>
                <p>Su Nombre de usuario: <?php echo $_POST['usuario']; ?></p>
                <p>Su Contraseña: <?php echo $_POST['pass'] ;?></p>
                <p>Su Genero: <?php echo $_POST['sexo']; ?></p>
                <p>Su Fecha de nacimiento es el: <?php echo $_POST['fecha'] ;?>  </p>
                <p>Su Numero de Telefono: <?php echo $_POST['telefono']; ?></p>
                <p>Su Direccion de E-mail es: <?php echo $_POST['email'] ;?></p>
                <p>Su Ciudad de origen: <?php echo $_POST['ciudad']; ?></p>
            </div>
            <a href="index.html">volver</a>
        </div>
    </body>
</html>
