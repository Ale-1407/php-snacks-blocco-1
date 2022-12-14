<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un 
nuovo paragrafo. -->

<?php

$paragrafo = "Dashing through the snow
in a one-horse open sleigh,
over the fields we go, laughing all the way.
Bells on bobtail ring, making spirits bright
What fun it is to ride and sing a sleighing song tonight.
Jingle bells, jingle bells, jingle all the way.
O, what fun it is to ride in a one-horse open sleigh.
Jingle bells, jingle bells, jingle all the way.";

$arrayParagrafi = explode('.', $paragrafo);

for($i=0; $i < count($arrayParagrafi); $i++){
    echo "<p>";
    echo $arrayParagrafi[$i];
    echo "</p>";
}

?>