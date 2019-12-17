<?php
$servername = "localhost";
$username = "root";
$password = "";
//$dbname = "soal_tes_flip";


// Create connection
$con = new mysqli($servername, $username, $password);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS `flip_db`;";
if ($con->query($sql) === TRUE) {
    echo "\n Database created successfully";
} else {
    echo "\n Error creating database: " . $conn->error;
}

$con->close();

$conn = new mysqli($servername, $username, $password, "flip_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1 = "CREATE TABLE IF NOT EXISTS `disburs` (`id` int(11) NOT NULL AUTO_INCREMENT, `time_served` char(50) DEFAULT NULL, `id_disburs` char(50) DEFAULT NULL, `receipt` varchar(250) DEFAULT NULL, `status_disburs` varchar(250) DEFAULT NULL, `response` text, `request` text, `api` varchar(200) DEFAULT NULL, `created_at` datetime DEFAULT NULL, `updated_at` datetime DEFAULT NULL, PRIMARY KEY (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

if ($conn->query($sql1) === TRUE) {
    echo "\n Table created successfully";
} else {
    echo "\n Error creating Table: " . $conn->error;
}

$sql2 = "INSERT INTO `disburs` (`id`, `time_served`, `id_disburs`, `receipt`, `status_disburs`, `response`, `request`, `api`, `created_at`, `updated_at`) VALUES (1, '2019-12-17 08:12:42', '7841750579', 'https://flip-receipt.oss-ap-southeast-5.aliyuncs.com/debit_receipt/126316_3d07f9fef9612c7275b3c36f7e1e5762.jpg', 'SUCCESS', '{\"id\":7841750579,\"amount\":10000,\"status\":\"SUCCESS\",\"timestamp\":\"2019-12-17 08:03:42\",\"bank_code\":\"bni\",\"account_number\":\"1234567890\",\"beneficiary_name\":\"PT FLIP\",\"remark\":\"sample remark\",\"receipt\":\"https://flip-receipt.oss-ap-southeast-5.aliyuncs.com/debit_receipt/126316_3d07f9fef9612c7275b3c36f7e1e5762.jpg\",\"time_served\":\"2019-12-17 08:12:42\",\"fee\":4000}', '{\"account_number\":\"1234567890\",\"bank_code\":\"bbc\",\"amount\":\"90000\",\"remark\":\"bsample remarkni\"}', 'https://nextar.flip.id/disburse', '2019-12-17 07:57:23', '2019-12-17 08:13:39');";

if ($conn->query($sql2) === TRUE) {
    echo "\n Insert table successfully";
} else {
    echo "\n Error Insert Table: " . $conn->error;
}

$conn->close();
?>