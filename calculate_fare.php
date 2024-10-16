<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $distance = $_POST['distance_km'];
    $passengerType = $_POST['passenger_type'];

    $baseFare = 13.00; 
    $additionalFarePerKm = 1.75; 
    $discountRate = 0.20; 

    $totalFare = calculateFare($distance, $baseFare, $additionalFarePerKm);

    if ($passengerType == "student/elderly") {
        $totalFare = applyDiscount($totalFare, $discountRate);
    }

    header("Location: jeepney_fare.php?fare=Total Fare: " . $totalFare);
}

function calculateFare($distance, $baseFare, $additionalFarePerKm) {
    if ($distance <= 5) {
        return $baseFare;
    } else {
        $extraKm = $distance - 5;
        return $baseFare + ($extraKm * $additionalFarePerKm);
    }
}

function applyDiscount($fare, $discountRate) {
    return $fare - ($fare * $discountRate);
}
?>