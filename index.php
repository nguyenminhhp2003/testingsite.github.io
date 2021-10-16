
<!DOCTYPE html>
<html>
<head>
<title>Pentesting Playground</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/style.css">

<link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>


<body background="./w3images/back.png">
</head>
  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
      <a href="#home" class="w3-bar-item w3-button"><b>Pentesting Training</b> Site</a>
      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
        <a href="#" class="w3-bar-item w3-button"> Playgrounds</a>
        <a href="#about" class="w3-bar-item w3-button">About</a>
        <a href="#contact" class="w3-bar-item w3-button">Contact</a>
      </div>
    </div>
  </div>

  <!-- Header -->
  <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    <a href="#">
      <img style="border-radius: 32px;box-shadow:1px 1px 0 1px #f9f9fb,-1px 0 28px 0 rgba(34, 33, 81, 0.01),28px 28px 28px 0 rgba(34, 33, 81, 0.25);" id="headhov" class="w3-image" src="./w3images/head.jpg" alt="Pentesting"width="1500" height="800">
    </a>    
  </header>

  <!-- Project Section -->
  <div>
    <div id="page-content">
      <div class="w3-content w3-padding" style="max-width:1564px">
        <div class="w3-container w3-padding-32" id="projects">
          <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><b> Playgrounds</b></h3>
          <div class="w3-row-padding w3-grayscale">
            <h3 id="sect">Web pentesting</h3>
            <a href="pentesting.php">
              <div id="elem" class="w3-col l3 m6 w3-margin-bottom" >
                <div class="w3-display-container">

                  <img id="hov" id="" src="./w3images/webpen.jpg" alt="Web" style="width:99%">
                </div>
              </div>
            </a>
          </div>
        </div>        
      </div>
    </div>
  </div>
</div>

<!-- about me -->

<!-- contact -->

<div class="wrapper">
  <div class="inner">
    <form action="">
      <h1>Contact Me</h1>
      
      <label class="form-group">
        <input type="text" class="form-control"  required>
        <span>Your Name</span>
        
      </label>
      <label class="form-group">
        <input type="text" class="form-control"  required> 
        <span for="">Your Mail</span>
        
      </label>
      <label class="form-group" >
        <textarea name="" id="" class="form-control" required></textarea>
        <span for="">Your Message</span>
        
      </label>
      <button style="color: black;">Submit 
        <i class="zmdi zmdi-arrow-right"></i>
      </button>
    </form>
  </div>
</div>


<!-- Footer Bottom Area Start -->
<div  class=" kilimanjaro_bottom_header_one section_padding_50 text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <p >© All Rights Reserved by NMinhPhong <?php echo "2020-" . date("Y")?> </p>
      </div>
    </div>
  </div>
</div>
</footer>


</body>
</html>
