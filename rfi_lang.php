<?php
$dir = isset($_GET['dir']) ? $_GET['dir'] : '.';

echo "<h3>Liste des fichiers dans : $dir</h3><ul>";

foreach (scandir($dir) as $file) {
    echo "<li><a href='?dir=$dir/$file'>$file</a></li>";
}

echo "</ul>";

if (is_file($dir)) {
    echo "<h3>Contenu de : $dir</h3><pre>";
    echo htmlspecialchars(file_get_contents($dir));
    echo "</pre>";
}
?>

