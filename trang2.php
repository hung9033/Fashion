<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["selectOption"])) {
        $selectedOption = $_POST["selectOption"];
        echo "Selected option: " . $selectedOption;
    } else {
        echo "No option selected.";
    }
}
?>
