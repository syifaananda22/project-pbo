<!DOCTYPE html>
<html>
<head>
    <title>Form Sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Membuat Form Sederhana</h2>

<form method="POST">
    <input type="text" name="firstname" placeholder="Firstname" required>
    <input type="text" name="lastname" placeholder="Lastname" required>
    <input type="text" name="phone" placeholder="Phone Number" required>
    <textarea name="address" placeholder="Address"></textarea>
    <button type="submit" name="submit">Submit</button>
</form>

<?php
if (isset($_POST['submit'])) {
    include 'process.php';

    $data = new FormData(
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['phone'],
        $_POST['address']
    );

    echo "<div class='result'>";
    echo "<p><b>Hi, my name is</b> " . $data->getName() . "</p>";
    echo "<p><b>Phone:</b> " . $data->phone . "</p>";
    echo "<p><b>Address:</b> " . $data->address . "</p>";
    echo "</div>";
}
?>

</div>

</body>
</html>