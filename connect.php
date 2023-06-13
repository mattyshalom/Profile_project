<?php
$username = filter_input(INPUT_POST, 'username');
$Months = filter_input(INPUT_POST, 'Months');
$date = filter_input(INPUT_POST, 'date');
$Attendance_status = filter_input(INPUT_POST, 'Attendance_status');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Attendance";

//to connect to db
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_errno() .')'
    . mysqli_connect_error());
}
else{
    $sql = "INSERT INTO account ("username, Months, date, Attendance_status")
    values ('$username', '$Months', '$date', '$Attendance_status')";
    if ($conn->query($sql)){
        echo "New record is inserted successfully";
    }
    else{
        echo "Error: ".$sql ."<br>". $conn->error;
    }
    $conn->close();
}


if (!empty($username)){

}
else{
    echo "Names should not be empty";
    die();
}
if (!empty($Months)){

}
else{
    echo "select a month";
    die();
}
if (!empty($date)){

}
else{
    echo "select a date";
    die();
}
if (!empty($Attendance_status)){

}
else{
    echo "Select a status";
    die();
}

?>