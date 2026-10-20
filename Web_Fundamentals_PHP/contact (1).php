
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>




<body>



<?php if(isset($_GET["nom"]) && !empty($_GET["nom"]) 
&& isset($_GET["prenom"]) && !empty($_GET["prenom"]) 
&& isset($_GET["adresse"]) && !empty($_GET["adresse"])
 && isset($_GET["email"]) && !empty($_GET["email"]) 
 && isset($_GET["tel"]) && !empty($_GET["tel"])
 && isset($_GET["codeP"]) && !empty($_GET["codeP"])  ){?>

<table border="1" align="center" >
    <tr>
<th>name</th>
<th>prénom</th>
<th>adresse</th>
<th>email</th>
<th>tel</th>
<th>Code Postal</th>
    </tr>

    <tr>                                                                      
        <td> 
        <?php echo $_GET['nom']; ?>
        </td>

        <td> <?php 
        echo $_GET['prenom'];?>
        
</td>

<td> <?php 
        echo $_GET['adresse'];?>
        
</td>
<td> <?php 
        echo $_GET['email'];?>
        
</td>
<td> <?php 
        echo $_GET['tel'];?>
        
</td>
<td> <?php 
        echo $_GET['codeP'];?>
        
</td>

 
    </tr>


</table>
<?php } else {echo "champ manquants"; }?>


</body>
</html>
