<?php


require_once('vendor/autoload.php');
use App\src\Exac\Form;
use App\src\Archer;
use App\src\Personnage;


/* $merlen = new Personnage('toure');
$harry = new Personnage('harry');

$archer = new Archer('Archer');
*/

//harry attaque marlen

/* $harry->attaque($merlen);
$harry->attaque($merlen); */


/* $archer->attaque($merlen);
$archer->attaque($merlen);
$archer->attaque($merlen);


$merlen->vieNOtZero();

$mort = $merlen->mort();
*/
/* if ($mort) {
echo " Merlen est Mort\n";
} else {
echo " il a encor de vie \n";
} */
/*
$form1 = new Form();
$form1->input('text', 'username');
$form2 = new Form();
$form2->input('password', 'password');
$form->submit(); */
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
    <form action="" method="POST">
        <?php
        $form1 = new Form();
        $form1->input('text', 'username');
        echo " \n";
        $form2 = new Form();
        echo $form2->input('password', 'mots-de-pass');
        Form::submit();

        ?>


    </form>
</body>

</html>