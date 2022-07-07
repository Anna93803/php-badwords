<!-- 
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte -->

<?php
$text = "Lorem ipsum dolor sit amet,consectetur adipiscing elit. Etiam nec leo arcu. In hac habitasse platea dictumst. ";
$hide = $_GET["hide"];
$textHide = str_ireplace($hide, "***", $text);

echo $text;
echo "<br>";
echo "<strong>La lunghezza del testo è:</strong>" . strlen($text);
echo "<br>";
echo $textHide;
echo "<br>";
echo "<strong>La lunghezza del testo con la parola nascosta è:</strong>" . strlen($textHide);

?>