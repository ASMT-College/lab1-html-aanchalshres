<?php
if (isset($_GET['q'])) {
    $query = urlencode($_GET['q']);
    header("Location: https://www.google.com/search?q=" . $query);
    exit();
} else {
    echo "No search query provided.";
}
?>