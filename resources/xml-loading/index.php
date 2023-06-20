<?php

$conn = mysqli_connect("localhost", "root", "", "pizza");

$affectedRow = 0;

$xml = simplexml_load_file("pizza_toppings.xml")
        or die("Error: Cannot create object");

foreach ($xml->children() as $row) {
    $topping_id = $row->topping_id;
    $topping_name = $row->topping_name;


    $sql = "INSERT INTO pizza_toppings VALUES ('". $topping_id . "','". $topping_name . "')";

    $result = mysqli_query($conn, $sql);

    if (! empty($result)) {
        $affectedRow ++;
    } else {
        $error_message = mysqli_error($conn) . "\n";
    }
}
?>

<center><h2>INSERT XML TO MYSQL USING PHP</h2></center>
<center><h2>XML Data storing in Database</h2></center>

<?php
if ($affectedRow > 0) {
    $message = $affectedRow . "records inserted";
} else {
    $message = "No records inserted";
}
?>

<style>
    body {
        max-width: 550px;
        font-family: Arial;
    }
    .affected-row {
        background: #cae4ca;
        padding: 10px;
        margin-bottom: 20px;
        border: #bdd6bd 1px solid;
        border-radius: 2px;
        color: #6e716e;
    }
    .error-message {
        background: #eac0c0;
        padding: 10px;
        margin-bottom: 20px;
        border: #dab2b2 1px solid;
        border-radius: 2px;
        color: #5d5b5b;
    }
</style>

<div class="affected-row">
    <?php echo $message; ?>
</div>

<?php if (! empty($error_message)) { ?>

<div class="error-message">
    <?php echo nl2br($error_message); ?>
</div>
<?php } ?>