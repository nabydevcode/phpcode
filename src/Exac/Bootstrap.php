<?php
namespace App\src\Exac;
use App\src\Exac\Form;


class Bootstrap extends Form
{




    public function input($type, $name)
    {

        echo '<input type="' . $type . '" name="' . $name . '"placeholder="' . $name . '" class="form-control mb-1">';

    }
    /*  public static function submit()
     {
         echo '<button type="submit"  class="btn btn-primary"> Envoyer </button>';
     } */
    public static function submit()
    {
        echo '<button type="submit" class="btn btn-primary">Envoyer</button>';
    }


}