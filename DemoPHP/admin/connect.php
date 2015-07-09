<?php
/**
 * @author Ivan Peev <https://ivanboykovpeev.wordpress.com/>
 * connect with database
 * OOP style version
 */
include '../admin/config.php';


//create connection
$conn = new mysqli($SERVER, $USER , $PASSWORD);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
