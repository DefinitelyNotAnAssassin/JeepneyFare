<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeepney Fare Calculator</title>
</head>
<body>

<h2>Jeepney Fare Calculator</h2>

<form method="POST" action="calculate_fare.php">
    <label for="distance_km">Enter Distance in km:</label>
    <input type="number" name="distance_km" step="0.1" min="0" required>
    <br><br>

    <label for="passenger_category">Select Passenger Type:</label>
    <select name="passenger_category" required>
        <option value="regular">Regular</option>
        <option value="student/elderly">Student/Elderly</option>
    </select><br><br>
    <input type="submit" value="Submit">
</form>

<?php 
if(isset($_GET["fare"])){
?>
    <h3><?php echo $_GET["fare"]; ?></h3>
<?php 
}
?>

</body>
</html>
