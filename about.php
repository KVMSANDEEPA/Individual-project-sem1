<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Assets/css/about.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
         .d-lg-flex {
        justify-content: space-between;
    }
    .about-sec{
    display: flex;
    justify-content: space-evenly;
    background-color: azure;
    
}
.about{
    /* margin-top: 5%; */
    /* height: 200px; */
    flex-basis: 50%;
    /* overflow: auto; */
    border-radius: 20px;
    /* margin-bottom: 5%; */
    box-sizing: border-box;
    padding: 20px 12px;
    /* height: 800px;  */
}
.about h1{
    font-size: 48px;
    color:#0c071f ;
    padding-top: 10px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    margin-bottom: 15px;
}
.about h3{
    color: #071851;
    position: relative;
    padding-bottom: 12px;
    font-size: 18px;
    font-family: 'Montserrat', sans-serif;
}
.about h3::before {
    content: '';
    position: absolute;
    width: 70px;
    height: 4px;
    background-color: #ffc600;
    bottom: 0;
    left: 0;
}
.about-cont{
    font-size: 19px;
    /* font-weight: 400; */
    line-height: 30px;
    color: #2e2626;
    /* text-shadow: 3px 3px 2px rgb(30, 30, 30); */
    margin: 0px;
    text-align: left;
    margin-bottom: 20px;
}
.btn2{
    margin-top: 20px;
    display:inline-block;
    border: 1px solid #ffc600;
    padding: 0 35px;
    font-size: 16px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    line-height: 50px;
    border-radius: 5px;
    color: #07294d;
    background-color: #ffc600;
}
.lmore{
    text-decoration: none;
}
.col-md-7 , .col-md-5{
  display: flex;
  flex-direction: column;
}
.col-md-7{
  padding-left: 300px;
}
/* .row featurette{
  background-color: bisque;
} */
.footer{
  background-color: darkkhaki;
}
.bg{
  background-image: url(assets/img/hndit.jpg);
  background-attachment: fixed;
    background-repeat: repeat;
    background-size: cover;
    padding: 100px 92px;
}
.bg h3{
  color: floralwhite;
  text-align: center;
}
#cont{
  justify-content: space-evenly;
  display: flex;
}
    </style>
</head>
  <body>
  <?php include_once ("assets/includes/header.php") ?>
      <main>
        <section class="bg">
          <h3>About Us</h3>
        </section>

            <section class="about-sec">
              <div class="about">
                <h3><a name="about">About Us</a></h3><br><br>
                <h1>About SLIATE</h1>
                <br><br>
                <p class="about-cont">The Sri Lanka Institute of Advanced Technological Education (also known as SLIATE) is a statutory body
                  in Sri Lanka coming under the purview of the Higher Education Ministry and offering Higher National Diploma courses.
                  At present, it manages and supervises eighteen provincial Advanced Technological Institutes throughout the island.
                  The institute is traditionally known for its education in the accountancy and engineering.
                  <br><br>
                  As per the recommendations of the Committee appointed by Prof. Wiswa Waranapala, 
                  Deputy Minister of Higher Education in 1994, the Sri Lanka Institute of Advanced Technical Education (SLIATE)
                  was formed in 1995, under the Sri Lanka Institute of Advanced Technical Education Act No. 29 of 1995.
                   In 2001, the name of the institution was amended as Sri Lanka Institute of Advanced Technological Education (SLIATE).
                  </p>
                  <br>
                  <br>
                  <a href="http://www.sliate.ac.lk/about/overview" class="lmore" target="_blank"><p class="btn2">Learn More</p></a>
              </div>
            </section>
            <section class="about">
    <div class="row featurette" id="vision">
      <div class="col-md-5">
        <h2 class="featurette-heading fw-normal lh-1"><img src="assets/img/binoculars.png" width="50px">&nbsp;Our Vision</h2>
        <p class="lead">To Become the Centre of Excellence in Technological Education in Sri Lanka</p>
      </div>
      <div class="col-md-5">
        <img src="assets/img/s-04.jpg" class="img" width="700" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1"><img src="assets/img/mission.png" width="50px">Our mission</h2>
        <p class="lead">Creating Excellent Higher National and National Diplomates with Modern Technology for Sustainable Development</p>
      </div>
      <div class="col-md-5 order-md0">
        <img src="assets/img/4.jpg" class="img" width="700" height="500">

      </div>
    </div>   
</section>
      </main>
      
      <div class="container-fluid" id="Contact" style="background-color: rgb(0, 0, 50); padding-top: 30px;">
        <div class="row" id="cont">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="footer-widget mb-50">
                    
                    <div class="footer-text">
                      <div class="fw-title mb-35">
                        <h5 style="color: white;">Contact</h5>
                    </div>
                        <div class="footer-contact">
                            <ul>
                                <li class="text-white"><i class="fas fa-map-marker-alt"></i> <span>Address : </span>Siridamma Mw, Labuduwa, Akmeemana.</li>
                                <li class="text-white"><i class="fas fa-headphones"></i> <span>Phone : </span> <a href="tel:+94912246179">0912246179</a> <a href="tel:+94912246180">0912246180</a> <a href="tel:+94912227880">  0912227880</a></li>
                                <li class="text-white"><i class="fa fa-fax" aria-hidden="true"></i> <span>Fax : </span><a href="#" target="_blank">0912246182</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-6">
                <div class="footer-widget mb-50">
                    <div class="fw-title">
                        <h5 class="text-white">Quick Links</h5>
                    </div>
                    <div class="fw-link">
                        <ul>
                            <li><a href="index.html" class="text-white">Home </a></li>
                            <li><a href="about.html" class="text-white">About Us</a></li>
                            <li><a href="courses.html" class="text-white">Courses</a></li>
                            <li><a href="contact.html" class="text-white">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

  </body>
</html>