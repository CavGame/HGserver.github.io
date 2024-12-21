<?php
// Connetti al database (configura i dettagli del tuo database)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hgservers";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Gestisci la creazione del server
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ip = $_POST["ip"];
    $description = $_POST["description"];

    $sql = "INSERT INTO servers (ip, description) VALUES ('$ip', '$description')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Server creato con successo!";
        header("Location: server_details.php?server_id=" . $conn->insert_id);
    } else {
        echo "Errore: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
