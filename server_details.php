<?php
// Connetti al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hgservers";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$server_id = $_GET["server_id"];
$sql = "SELECT * FROM servers WHERE id = $server_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $server = $result->fetch_assoc();
    echo "<h1>Dettagli del Server</h1>";
    echo "<p>IP: " . $server["ip"] . "</p>";
    echo "<p>Descrizione: " . $server["description"] . "</p>";
    // Aggiungi altre funzionalità come avviare/arrestare il server
} else {
    echo "Server non trovato.";
}

$conn->close();
?>
