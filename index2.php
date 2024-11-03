<?php
    $trenutnoVreme = date("H:i:s");
    $sati = date("H");
    echo "Trenutno vreme: $trenutnoVreme <br>";
    
    if($sati >= 5 && $sati < 12)
    {
        echo "Sada je jutro";
    }
    else if($sati >= 12 && $sati < 20)
    {
        echo "Sada je podne.";
    }
    else
    {
        echo "Sada je noc.";
    }
?>