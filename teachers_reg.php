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
          <h2 class="head-title">Teacher Information Form
              <div class="sub-heading">
                  For internal use 
              </div>  
          </h2>
        </nav>
      </header>  <!-- Navbar End -->
    <section id="reg-form">
        <div class="reg-table">
            <form action="#" name="StudentRegistration" onSubmit="return(validate());">

                <table cellpadding="5" cellspacing="10">
                    
                    <tr>
                        <td>Full Name</td>
                        <td><input type=text name=textnames id="textname" size="30"></td>
                    </tr>
                    
                    <tr>
                        <td>Postal Address</td>
                        <td><input type="text" name="paddress" id="paddress" size="30"></td>
                    </tr>
                    
                    <tr>
                        <td>Personal Address</td>
                        <td><input type="text" name="personaladdress"
                        id="personaladdress" size="30"></td>
                    </tr>
                    
                    <tr>
                        <td>Sex</td>
                        <td><input type="radio" name="sex" value="male" size="10">Male
                        <input type="radio" name="sex" value="Female" size="10">Female</td>
                    </tr>
                    
                    <tr>
                        <td>City</td>
                        <td><select name="City">
                            <option value="-1" selected>select..</option>
                            <option value="Lagos">LAGOS</option>
                            <option value="Ibadan">IBADAN</option>
                            <option value="Abuja">ABUJA</option>
                            <option value="Benin-city">BENIN CITY</option>
                        </select></td>
                    </tr>
                    
                    <tr>
                        <td>Profession</td>
                        <td><select name="Course">
                            <option value="-1" selected>select..</option>
                            <option value="English">ENGLISH</option>
                            <option value="Python">PYTHON</option>
                            <option value="Javascript">JAVASCRIPT</option>
                            <option value="html/Css">HTML/CSS</option>
                        </select></td>
                    </tr>
                    
                    <tr>
                        <td>State of Origin</td>
                        <td><select Name="State">
                            <option value="-1" selected>select..</option>
                            <option value="Delta">DELTA</option>
                            <option value="Abia">ABIA</option>
                            <option value="Osun">OSUN</option>
                            <option value="Lagos">LAGOS</option>
                        </select></td>
                    </tr>

                    <tr>
                        <td>Email Id</td>
                        <td><input type="text" name="emailid" id="emailid" size="30"></td>
                    </tr>
                    
                    <tr>
                        <td>DOB</td>
                        <td><input type="text" name="dob" id="dob" size="30"></td>
                    </tr>
                    
                    <tr>
                        <td>Mobile No</td>
                        <td><input type="text" name="mobileno" id="mobileno" size="30"></td>
                    </tr>

                    <tr>
                        <td><input type="reset"></td>
                        <td colspan="2"><input type="submit" value="Submit Form" /></td>
                    </tr>
                </table>
            </form> 
        </div>
    </section>
</body>
</html>