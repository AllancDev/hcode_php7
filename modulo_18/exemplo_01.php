
<?php
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $cmd = escapeshellcmd($_POST["cmd"]);


    var_dump($cmd);
    echo "<pre>";
    $command = system("dir c:", $cmd);

    echo "</pre>";
}

?>

<form method = "POST">
    <input type = "text" name = "cmd" />
    <button type = "submit">Enviar</button>

</form>