<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS File -->
    <link rel="stylesheet" type="text/css" href="../css/Register.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rhodium+Libre&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">

    <title>Register</title>

  </head>
  <body>
    
    <!--Navigation bar-->
    <?php include('NavBar.php'); ?>


      <div class="wrapper">
        <div class="title">
          Register
        </div>
        <div class="form">
          <div class="inputfield">
            <label>First Name</label>
            <input type="text" class="input">
          </div>  
          <div class="inputfield">
            <label>Last Name</label>
            <input type="text" class="input">
          </div>  
          <div class="inputfield">
            <label>Password</label>
            <input type="password" class="input">
          </div>  
          <div class="inputfield">
            <label>Confirm Password</label>
            <input type="password" class="input">
          </div> 
          <div class="inputfield">
            <label>Account Type</label>
            <div class="custom_select">
                <select>
                  <option value="">Select</option>
                  <option value="student">Student</option>
                  <option value="Teacher">Teacher</option>
                </select>
              </div>
            </div> 
            <div class="inputfield">
              <label>Email Address</label>
              <input type="text" class="input">
            </div> 
            <div class="inputfield">
              <input type="submit" value="Register" class="btn">
            </div>
        </div>
      </div>  

      <div class="footer">
        <img src="../img/footer_img.png">
      </div>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/Register.js"></script>

    
  </body>
</html>