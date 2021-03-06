<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- NavigationBar CSS File -->
    <link rel="stylesheet" type="text/css" href="..\css\NavBar.css">
    <!-- LaessonPage Css File -->
    <link rel="stylesheet" type="text/css" href="..\css\Lesson.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="//code.jquery.com/jquery.min.js"></script>
   
    <title>Lesson Page</title>

  </head>
  <body class="mx-auto">
    
    <!--Navigation bar-->
    
     <?php include('NavBar.php'); ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="..\js\NavBar.js"></script>
    <script type="text/javascript" src="..\js\lesson.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <!--_________________________________________________end of nav bar-->
    
    <div  class="container" >

      <!-- row 0 -->
      <div class="row">
        <div class="col-mx-4  col-sm-2">
          <!-- circle -->
          <img class="p1  "  src="..\img\book.png"  >
        </div>  
          
        </div>
      <div id="bd"></div>
        <!-- ________________________________________________ -->

        <!-- _____________________________________________subject 1 -->
        <div class="row">
          <div class="col-12 center">
            <div class="rule"><h2>SCIENCE</h2></div>
          </div>
        </div>

        <!-- summery -->
        <div class="row">
          <div class="col-8">
            <p>the intellectual and practical activity encompassing the systematic study of the structure and behavior of the physical and natural world through observation and experiment.
            </p>
          </div>
          <div class="col-4 col-xsm-2">
            <div class="s1 position-relative"><img class="pi1" src="..\img\science.png"></div>
          </div>
        </div> 
        <!-- button -->
        <div class="row">
          <div class="col-12 col-sm-6">
            <ul class="bt">
          
              <li class="btn">
                <button type="button" class="btn_cus" onclick="Biology()">Biology</button>
              </li>
               
              <li class="btn">
                <button type="button" class="btn_cus" onclick="Chemistry()">Chemistry</button>
              </li>
              <li class="btn">
                <button type="button" class="btn_cus" onclick="Physics()">Physics</button>
              </li>
            </ul>
          </div>
        </div>    
        <!--_____________________________________________ subject 2 -->
        <div class="row">
          <div class="col-12 center">
            <div class="rule"><h2>CONBINED MATHS</h2></div>
          </div>
        </div>

        <!-- summery -->
        <div class="row">
          <div class="col-4 col-xsm-2">
            <div class="s1 "><img class="pi1" src="..\img\science.png"></div>
          </div>
          <div class="col-8">
            <p>Mathematics is the science that deals with the logic of shape, quantity, and arrangement. Math is all around us, in everything we do. It is the building block for everything in our daily lives, including mobile devices, computers, software, architecture (ancient and modern), art, money, engineering, and even sports.
            </p>
          </div>
          
        </div> 
        <!-- button -->
        <div class="row">
          <div class="col-12 col-sm-2"></div>
          <div class="col-12 ">
            <ul class="btr">
          
              <li class="btn">
                <button type="button" class="btn_cus" onclick="Mathematics()">Mathematics</button>
              </li>
               
              <li class="btn">
                <button type="button" class="btn_cus" onclick="Chemistry()">Chemistry</button>
              </li>
              <li class="btn">
                <button type="button" class="btn_cus" onclick="Physics()">Physics</button>
              </li>
            </ul>
          </div>
        </div> 
         <!-- _____________________________________________subject 3 -->
        <div class="row">
          <div class="col-12 center">
            <div class="rule"><h2>COMMERCE</h2></div>
          </div>
        </div>

        <!-- summery -->
        <div class="row">
          <div class="col-8">
            <p>Commerce is defined as the exchange of goods and services among individuals and business entities. In academics, Commerce is considered to be one of the most popular streams of education along with Science and Arts. Commerce deals with the various aspects of business, trade, accounting, financial information/transactions, and merchandising. 
            </p>
          </div>
          <div class="col-4 col-xsm-2">
            <div class="s1 position-relative"><img class="pi1" src="..\img\science.png"></div>
          </div>
        </div> 
        <!-- button -->
        <div class="row">
          <div class="col-12 col-sm-6">
            <ul class="bt">
          
              <li class="btn">
                <button type="button" class="btn_cus" onclick="Accounts()">Accounts</button>
              </li>
               
              <li class="btn">
                <button type="button" class="btn_cus" onclick="Economics()">Economics</button>
              </li>
              <li class="btn">
                <button type="button" class="btn_cus" onclick="Business()">Business Studies</button>
              </li>
            </ul>
          </div>
        </div>    
        <!--_____________________________________________ subject 4 -->
        <div class="row">
          <div class="col-12 center">
            <div class="rule"><h2>TECHNOLOGY</h2></div>
          </div>
        </div>

        <!-- summery -->
        <div class="row">
          <div class="col-4 col-xsm-2">
            <div class="s1 "><img class="pi1" src="..\img\science.png"></div>
          </div>
          <div class="col-8">
            <p>A course devoted to a practical study, such as engineering, technology, design, business, or other workforce-related subject; a technical aspect of a wider field of study, such as art or music.
            </p>
          </div>
          
        </div> 
        <!-- button -->
        <div class="row">
          <div class="col-12 col-sm-2"></div>
          <div class="col-12 ">
            <ul class="btr">
          
              <li class="btn">
                <button type="button" class="btn_cus" onclick="SFT()">Science for Technology</button>
              </li>
               
              <li class="btn">
                <button type="button" class="btn_cus" onclick="ET()">Engineering Technology</button>
              </li>
              <li class="btn">
                <button type="button" class="btn_cus" onclick="BST()">Bio System Technology</button>
              </li>
              <li class="btn">
                <button type="button" class="btn_cus" onclick="ICT()">Information & Communication Technology</button>
              </li>
            </ul>
          </div>
        </div> 
      <!-- _____________________________________________subject 5 -->
        <div class="row">
          <div class="col-12 center">
            <div class="rule"><h2>ARTS</h2></div>
          </div>
        </div>

        <!-- summery -->
        <div class="row">
          <div class="col-8">
            <p>In general, the subject may be thought of as the "what" in a piece of art: the topic, focus, or image. The most common subjects of art include people (portraiture), arrangements of objects (still-life), the natural world (landscape), and abstractions (non-objective).
            </p>
          </div>
          <div class="col-4 col-xsm-2">
            <div class="s1 position-relative"><img class="pi1" src="..\img\science.png"></div>
          </div>
        </div> 
        <!-- button -->
        <div class="row">
          <div class="col-12 col-sm-6">
            <ul class="bt">
          
              <li class="btn">
                <button type="button" class="btn_cus" onclick="Logistics()">Logistics</button>
              </li>
               
              <li class="btn">
                <button type="button" class="btn_cus" onclick="Political()">Political Science</button>
              </li>
              <li class="btn">
                <button type="button" class="btn_cus" onclick="Geogrophy()">Geogrophy</button>
              </li>
              <li class="btn">
                <button type="button" class="btn_cus" onclick="Media()">Media</button>
              </li>
            </ul>
          </div>
        </div>  
     </div>  
     <!--footer-->
    
     <?php include('footer.html'); ?>    
  </body>
</html>