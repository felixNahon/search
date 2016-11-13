<?php

// remarque sur les flux

// dans le dossier search créez un fichier data.txt et un fichier remarque_flux.php

// dans remarque_flux.php

$handle = fopen('data.txt', 'r+'); // pointeur sur fichier
echo $handle;

// dans la console dans le dossier search vous tapez php remarque_flux.php

while($line = fgets($handle)) echo $line;

fwrite($handle, '****');


fclose($handle);

echo $handle;

fwrite($handle, '****'); // pointeur fermé sur le fichier on ne peut plus écrire dedans