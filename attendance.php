<?php
require_once ('config.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

     <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    
</head>
<body>
   
    <!-- Navbar End -->
    
    <header>    
        <a href="index.html" class="logo">
            <i class="bi bi-book-half"></i>
        </a>
        <nav class="Navbar">
          <h2 class="head-title">Attendance Form
              <div class="sub-heading">
                  For internal use 
              </div>  
          </h2>
        </nav>
    </header>

    <div>
        <form action="attendance.php" method="post" id="attendance">
            <div class="container">
                <div class="row mt-3">
                    <div class="col-sm-8">
                        <br>
                        <p class="mt-5"><b>Fill up the Form with the required info.</b></p>
                        <hr class="mb-3">
                        <label for="firstName"><b>First Name</b></label>
                        <input class="form-control" id="firstName" type="text" name="firstName" required>

                        <label for="lastName"><b>Last Name</b></label>
                        <input class="form-control" id="lastName" type="text" name="lastName" required>

                        <label for="course"><b>Course of Study</b></label>
                        <input class="form-control" id="course" type="text" name="course" required>

                        <label for="classes"><b>Class</b></label>
                        <input class="form-control" id="classes" type="text" name="classes" required>

                      <!---  <label for="date"><b>Date</b></label>
                        <input class="form-control" type="date" name="date" required>---->

                        <label for="status"><b>Status</b></label>
                        <input type="radio" id="Attendance_status" name="Attendance_status" value="attended" size="10">Attended
                        <input type="radio" id="Attendance_status" name="Attendance_status" value="Skipped" size="10">Skipped
                        <hr class="mb-3">
                        <input class="btn btn-primary" type="reset">
                        <input class="btn btn-primary" type="submit" id="reg" name="submit" value="Submit Form" />
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(function(){
            $('#reg').click(function(e){

                var valid = this.form.checkValidity();

                if(valid) {

                var firstName = $('#firstName').val();
                var lastName = $('#lastName').val();
                var course = $('#course').val();
                var classes = $('#classes').val();
                var Attendance_status = $('#Attendance_status').val();

                    e.preventDefault();

                    $.ajax({
                        type: "POST",
                        url: 'process.php',
                        data: {firstName: firstName, lastName: lastName, course: course, classes: classes, Attendance_status: Attendance_status},
                        success: function(data) {
                            //a pop-up notification for form submission
                            Swal.fire({
                                'title': 'Successful',
                                'text': data,
                                'type': 'success'
                            })
                        },
                        error: function(data){
                            //a pop-up notification for form submission
                            Swal.fire({
                                'title': 'Errors',
                                'text': 'There was an error submitting the data. Please try again',
                                'type': 'error'
                            })
                        }                      
                    });                   
                }else {                    
                }              
            })
        });            
    </script>
</body>
</html>