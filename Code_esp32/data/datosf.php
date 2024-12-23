<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kaguya";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $device_id = $_POST['id'];
    $temperature = $_POST['temperature'];
    $humidity = $_POST['humidity'];
    $status = $_POST['status_read_sensor_dht11'];
    $date_time = $_POST['date_time'];

    $sql = "INSERT INTO dht11_data (device_id, temperature, humidity, status_read_sensor_dht11, date_time) 
            VALUES ('$device_id', '$temperature', '$humidity', '$status', '$date_time')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
