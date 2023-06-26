<?php
require_once ('config.php');
?>
<?php
if(isset($_POST)){
    $firstName  = $_POST['firstName'];
    $lastName   = $_POST['lastName'];
    $course     = $_POST['course'];
    $classes      = $_POST['classes'];
    $Attendance_status     = $_POST['Attendance_status'];

    $sql = "INSERT INTO register(firstName, lastName, course, classes, Attendance_status) VALUES(?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$firstName, $lastName, $course, $classes, $Attendance_status]);
    if ($result){
        echo 'Date successfully inserted.';
    } else {
        echo 'Error inserting data.';
    }
}
?>