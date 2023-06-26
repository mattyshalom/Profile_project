<?php
require_once ('config1.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
     <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar Start -->
    <header>    
        <a href="index.html" class="logo">
            <i class="bi bi-book-half"></i>
        </a>
        <nav class="Navbar">
          <h2 class="head-title">Student Information Form
              <div class="sub-heading">
                  For internal use 
              </div>  
          </h2>
        </nav>
    </header><!----- Navbar End -->
    <div>
    <?php
        if(isset($_POST["submit"])){
            $firstName              = $_POST['firstName'];
            $lastName               = $_POST['lastName'];
            $email                  = $_POST['email'];
            $phone_number           = $_POST['phone_number'];
            $permanent_address      = $_POST['permanent_address'];
            $residence_address      = $_POST['residence_address'];
            $parent_info            = $_POST['parent_info'];
            $parent_numb            = $_POST['parent_numb'];
            $parent_address         = $_POST['parent_address'];
            $input_course           = $_POST['input_course'];
            $input_id               = $_POST['input_id'];
            $input_entry            = $_POST['input_entry'];
            $inputCity              = $_POST['inputCity'];
            $inputState             = $_POST['inputState'];
            $birthday               = $_POST['birthday'];
            $input_gender           = $_POST['input_gender'];

            $sql = "INSERT INTO reg_form(firstName, lastName, email, phone_number, permanent_address, residence_address, parent_info, parent_numb, parent_address, input_course, input_id, input_entry, inputCity, inputState, birthday, input_gender) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$firstName, $lastName, $email, $phone_number, $permanent_address, $residence_address, $parent_info, $parent_numb, $parent_address, $input_course, $input_id, $input_entry, $inputCity, $inputState, $birthday, $input_gender]);
            if ($result){
                echo "successfully created";
            }else{
                echo 'there were errors while saving the data';
            }
        };
        ?>
    </div>

    <section id="reg-form">
        <form action="student_reg.php" method="post" id="student_reg">
            <br>
            <div class="container mt-5">
                <div class="row g-3 mt-3">
                    <div class="col-md-6">
                        <label for="firstName" class="form-label"><b>First Name</b></label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label"><b>Last Name</b></label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label"><b>Email</b></label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone_number" class="form-label"><b>Phone Number</b></label>
                        <input type="phone_number" class="form-control" id="phone_number" name="phone_number" required>
                    </div>
                    <div class="col-12">
                        <label for="permanent_address" class="form-label"><b>Permanent Address</b></label>
                        <input type="text" class="form-control" id="permanent_address" placeholder="1234 Main St" name="permanent_address" required>
                    </div>
                    <div class="col-12">
                        <label for="residence_address" class="form-label"><b>Resident Address</b></label>
                        <input type="text" class="form-control" id="residence_address" placeholder="Apartment, studio, or floor" name="residence_address" required>
                    </div>
                    <div class="col-md-6">
                        <label for="parent_info" class="form-label"><b>Parent/Guardian Name</b></label>
                        <input type="text" class="form-control" id="parent_info" name="parent_info" required>
                    </div>
                    <div class="col-md-6">
                        <label for="parent_numb" class="form-label"><b>Parent/Guardian Phone-Number</b></label>
                        <input type="parent_numb" class="form-control" id="parent_numb" name="parent_numb" required>
                    </div>
                    <div class="col-12">
                        <label for="parent_address" class="form-label"><b>Parent/Guardian Address</b></label>
                        <input type="text" class="form-control" id="parent_address" placeholder="1234 Main St" name="parent_address" required>
                    </div>
                    <div class="col-md-4">
                        <label for="input_course" class="form-label"><b>Course of Study</b></label>
                        <input type="text" class="form-control" id="input_course" name="input_course" required>
                    </div>
                    <div class="col-md-4">
                        <label for="input_id" class="form-label"><b>Student Id</b></label>
                        <input type="text" class="form-control" id="input_id" name="input_id" required>
                    </div>
                    <div class="col-md-4">
                        <label for="input_entry" class="form-label"><b>Year of Entry</b></label>
                        <input type="text" class="form-control" id="input_entry" name="input_entry" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label"><b>City</b></label>
                        <input type="text" class="form-control" id="inputCity" name="inputCity" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label"><b>State of Origin</b></label>
                        <select id="inputState" class="form-select" name="inputState" required>
                        <option selected>Choose...</option>
                        <option name="inputState">Lagos</option>
                        <option name="inputState">Abuja</option>
                        <option name="inputState">Kano</option>
                        <option name="inputState">Zaria</option>
                        <option name="inputState">Ogun</option>
                        <option name="inputState">Abia</option>
                        <option name="inputState">Delta</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="birthday" class="form-label"><b>DOB</b></label>
                        <input type="dates" class="form-control" id="birthday" placeholder="2023-02-23" name="birthday" required>
                    </div>

                    <div class="col-md-4">
                        <label for="input_gender" class="form-label"><b>Gender</b></label>
                        <select id="input_gender" class="form-select" name="input_gender" required>
                        <option selected>Choose...</option>
                        <option name="input_gender">Prefer Not To Answer</option>
                        <option name="inputState">Female</option>
                        <option name="inputState">Male</option>
                        <option name="inputState">Gender Neutral</option>
                        <option name="inputState">Others</option>
                        </select>
                    </div>
            
                    <div class="col-12">
                    <input class="btn btn-primary" type="submit" id="reg" name="submit" value="Submit Form" />
                    </div>
                </div>
            </div>
        </form>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(function() {
            $('#reg').click(function(){

                var valid = this.form.checkValidity();
                if (valid) {

                var firstName           = $('#firstName').val();
                var lastName            = $('#lastName').val();
                var email               = $('#email').val();
                var phone_number        = $('#phone_number').val();
                var permanent_address   = $('#permanent_address').val();
                var residence_address   = $('#residence_address').val();
                var parent_info         = $('#parent_info').val();
                var parent_numb         = $('#parent_numb').val();
                var parent_address      = $('#parent_address').val();
                var input_course        = $('#input_course').val();
                var input_id            = $('#input_id').val();
                var input_entry         = $('#input_entry').val();
                var inputCity           = $('#inputCity').val();
                var inputState          = $('#inputState').val();
                var birthday            = $('#birthday').val();
                var input_genders       = $('input_gender').val();

                    e.preventDefault();

                    $.ajax({
                        type: "POST",
                        url: 'process1.php',
                        data: {firstName: firstName,lastName: lastName,email: email,phone_number: phone_number,permanent_address :permanent_address,residence_address: residence_address,parent_info :parent_info,parent_numb: parent_numb,parent_address: parent_address,input_course: input_course,input_id: input_id,input_entry: input_entry,inputCity: inputCity,inputState: inputState,birthday: birthday,input_gender: input_gender},
                        success: function(data) {
                        swal.fire({
                            'title': 'successful',
                            'text' : 'entered successfully',
                            'type': 'success'
                            })

                        },
                        error: function(data) {
                        swal.fire({
                            'title': 'Error',
                            'text' : 'there was error saving data',
                            'type': 'error'
                            })
                        },

                    });
                    
                } else {
                    
                }           
            });
           
        });   
    </script>
</body>
</html>