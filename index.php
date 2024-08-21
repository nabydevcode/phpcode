<?php



require_once('vendor/autoload.php');
use App\src\Exac\Form;
use App\src\Exac\Bootstrap;
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
require_once('elements/header.php');
?>




<div class="container mt-2">
    <h1>Formulaire dynamique </h1>
    <form action="" method="POST">
        <?php
        $form1 = new Bootstrap();
        $form1->input('text', 'username');
        echo " \n";
        $form2 = new Bootstrap();
        echo $form2->input('password', 'mots-de-pass');
        Form::submit();

        ?>


    </form>
</div>
<?php require_once('elements/header.php'); ?>