<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=turnuva", "root", "MustafaDilan0410");
} catch ( PDOException $e ){
    print $e->getMessage();
}
?>