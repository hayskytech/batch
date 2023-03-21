<?php

$conn = new mysqli("localhost", "root", "", "mydb2");


$sql = "INSERT INTO student (student,father,phone) VALUES ('HEllo','Hai','9849849')";


$conn->query($sql);

