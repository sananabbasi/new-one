<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pintrest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet"    src="css/css1.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <style>
      .carousel .carousel-indicators{
        top: 0;
        margin-top: 180px;
      
      }
.carousel .carousel-indicators button {
    width: 10px;
   height: 10px;
   border-radius: 100%;
   
   
 }
 .animate__animated.animate__backOutUp{
  --animate-duration: 5s;
}

</style>
</head>
<body>


<!--------- Top Nav Bar -------------->

    <nav class="navbar navbar-expand-lg navbar-light " style="padding:19px;color:#FFFFFF">
        <div class="container-fluid " style="margin 20px;">
          <a class="navbar-brand "  href="#" style="color:#CC0000; font-weight:600">
            
             <svg class="logo.1" height="32" width="32" viewBox="0 0 24 24" aria-label="Pinterest" role="img" >
                <path fill="#E60023" d="M0 12c0 5.123 3.211 9.497 7.73 11.218-.11-.937-.227-2.482.025-3.566.217-.932 1.401-5.938 1.401-5.938s-.357-.715-.357-1.774c0-1.66.962-2.9 2.161-2.9 1.02 0 1.512.765 1.512 1.682 0 1.025-.653 2.557-.99 3.978-.281 1.189.597 2.159 1.769 2.159 2.123 0 3.756-2.239 3.756-5.471 0-2.861-2.056-4.86-4.991-4.86-3.398 0-5.393 2.549-5.393 5.184 0 1.027.395 2.127.889 2.726a.36.36 0 0 1 .083.343c-.091.378-.293 1.189-.332 1.355-.053.218-.173.265-.4.159-1.492-.694-2.424-2.875-2.424-4.627 0-3.769 2.737-7.229 7.892-7.229 4.144 0 7.365 2.953 7.365 6.899 0 4.117-2.595 7.431-6.199 7.431-1.211 0-2.348-.63-2.738-1.373 0 0-.599 2.282-.744 2.84-.282 1.084-1.064 2.456-1.549 3.235C9.584 23.815 10.77 24 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12"></path>
            </svg>
            Pintrest
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>



          <div class="collapse navbar-collapse justify-content-end" id="navbarNav" >
            <ul class="navbar-nav">
              <li class="nav-item " style="padding:0px 10px; font-weight:600; color:#111111">
                <a class="nav-link " style="font-weight:600; color: #111111;" aria-current="page" href="#">About</a>
              </li>
              <li class="nav-item "style="padding:0px 10px; font-weight:600; color:#111111;font-size: 16px">
                <a class="nav-link" href="#" style="font-weight:600; color: #111111; ">Bussines</a>
              </li>
              <li class="nav-item"style="padding:0px 10px; font-weight:600; color:#111111">
                <a class="nav-link" href="#" style="font-weight:600; color: #111111; ">Blog</a>
              </li>
              <a class="btn btn-danger rounded-pill " style="margin:0px 5px;background-color:#E60023; font-weight:600">Log in </a>
              <a class="btn btn-secondary rounded-pill" style="margin:0px 5px; background-color:#EFEFEF;color:#111111; font-weight:600"> Sign up</a>
            </ul>
          </div>



        </div>
      </nav>
      

<!-------2nd nav bar---->
<h5 style="font-size: 60px; font-weight: 600;" class="text-center">Get your next</h5>
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators" style="color:#030303">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="images/sliders/slide1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-dark" style="top: 0; margin-top: 10px; font-size: 60px; font-weight: 600; color:#C28B00; ">
        
        <p class="animate__animated animate__backOutUp" style="color: green;">Weekend Dinner Idea</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/sliders/slide2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-dark" style="top: 0; margin-top: 100px; font-size: 60px; font-weight: 600; color: #800020; ">
  
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/sliders/slide3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-dark" style="top: 0; margin-top: 100px; ">
      
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
</body>
</html>