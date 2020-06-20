<?php

// Radio ecuatorial de la Tierra en Km
define("RADIO_ECUATORIAL", 6378.1);

// Radio polar de la Tierra en Km
define("RADIO_POLAR", 6356.8);

// Radio medio de la Tierra en Km
define("RADIO_MEDIO", 6371);

// Unidad Astronómica (Distancia media entre la Tierra y el Sol en Km)
define("UA", 149597870.7);

echo "El radio medio de la Tierra es de " . "<b>" . RADIO_MEDIO . "</b>" . " Km";
echo "<br>";
echo "La distancia media entre la Tierra y el Sol es de " . "<b>" . UA . "</b>" . " Km";



?>