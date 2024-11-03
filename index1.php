<?php

    $tacnoIme = "administrator";
    $tacnaLozinka = "mojaSifraJeSigurna";

    $ime = "ADminiStrAtor";
    $lozinka = "mojaSifraJeSigurna";

    $imeMalaSlova = strtolower($ime);

    if($imeMalaSlova == $tacnoIme && $lozinka == $tacnaLozinka)
    {
        echo "Dobrodosao administratore!";
    }

?>