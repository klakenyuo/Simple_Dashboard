<?php
session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=s_dash', 'root', '');

extract($_POST);
$req1 = $bdd->prepare('INSERT INTO user( mail, pass_word) VALUES(:mail, :pass_word)');
$req1->execute(array(
    'mail' => $mail,
    'pass_word' => $pass_word ,));
     $SESSION['e']= "toastr.success('User add')";
    header('location:index.php');
/*if(isset($confirm) && !empty($confirm)) {
    
        $req = $bdd->prepare('SELECT * FROM user WHERE mail=?');
        $req->execute(array($mail)); 
        $nb = $req->rowCount();
        echo $nb;
      /*  if ($nb>0){
            echo " <font color='red'> L'utilisateur existe déja</font> ";
        }
        else{ 
           
            $req1 = $bdd->prepare('INSERT INTO user( mail, pass_word) VALUES(:mail, :pass_word)');
            try {
            $req1->execute(array(
                'mail' => $mail,
                'pass_word' => $pass_word ,
            ));
            } catch (PDOException $e) {
                echo "Erreur !: " . $e->getMessage() . "<br/>";
                die();
            }
            echo " Ajout effectué avec succès ";
            header('location:index.php');
        };
   
        
    };*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $nb; ?>
</body>
</html>