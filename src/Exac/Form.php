<?php
namespace App\src\Exac;

class Form
{

    public function input($type, $name)
    {

        echo '<input type="' . $type . '" name="' . $name . '"placeholder="' . $name . '">';

    }

    public static function submit()
    {
        echo '<button type="submit" > Envoyer </button>';
    }

}