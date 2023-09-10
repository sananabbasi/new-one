<!DOCTYPE html>
<html class="en fp-enabled" lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pintrest</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
  <link rel="stylesheet" src="css/css1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .carousel .carousel-indicators {
      top: 0;
      margin-top: 180px;

    }

    .carousel .carousel-indicators button {
      width: 10px;
      height: 10px;
      border-radius: 100%;


    }

    .animate__animated.animate__backOutUp {
      --animate-duration: 8s;
    }

    .my-btn-red {
      margin: 0px 5px;
      color: #fff;
      background-color: #E60023;
      font-weight: 600;
    }

    .my-btn-red:hover {
      background-color: #ad081b;
    }

    .my-btn-gray {
      margin: 0px 5px;
      background-color: #EFEFEF;
      color: #111111;
      font-weight: 600;
      "

    }

    .my-btn-gray:hover {
      background-color: #d0d0d0;
      color: #111111;
    }

    .idea-btn {
      background-color: #C31952;
      color: #FFFD92;
      font-weight: 700;
      border-radius: 20px;
    }

    .vertical-center {
      margin: 0;
      position: absolute;
      top: 50%;
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    .slide1img {
      position: absolute;
      top: 0;
      left: 0;
      border-radius: 23%;
    }

    .bgimage {
      height: 800px;
      width: 100vw;
      background: black;
      overflow: hidden;
      background: #C33764;
      /* fallback colour. Make sure this is just one solid colour. */
      background: -webkit-linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("images/slide2/Example.png");
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("images/slide2/Example.png");
      /* The least supported option. */
    }

    img {
      object-fit: cover;
    }

    .loginpage {
      font-size: 70px;
      font-weight: 600px;
      color: #FFFFFF;
      text-align: center;
      padding-top: 200px;
    }

    .btn-cont {
      margin: 0px 5px;
      color: #fff;
      background-color: #E60023;
      font-weight: 600;
      size: 500;

    }

    .btn-cont:hover {
      background-color: #ad081b;
    }

    .btn-facbook {
      margin: 0px 5px;
      color: #fff;
      background-color: #1877F2;
      font-weight: 600;
      size: 500;

    }

    .btn-facbook:hover {
      background-color: #1877F2;

    }

    .btn-google:hover {
      background-color: rgb(240 248 255);

    }

    .input-icons i {
      position: absolute;
      margin-left: 60px;
      margin-top: 8px;
      color: #fff;
      font-size: 22px;
    }

    .input-iconsgoogle i {
      position: absolute;
      margin-left: 60px;
      margin-top: 8px;
      font-size: 22px;
      background: conic-gradient(from -45deg, #ea4335 110deg, #4285f4 90deg 180deg, #34a853 180deg 270deg, #fbbc05 270deg) 73% 55%/150% 150% no-repeat;
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      -webkit-text-fill-color: transparent;

    }
  </style>
</head>

<body>


  <!--------- Top Nav Bar -------------->

  <nav class="navbar fixed-top navbar-expand-lg navbar-light "
    style="padding:20px;color:#FFFFFF; background-color:#fff;">
    <div class="container-fluid " style="margin 20px;">
      <a class="navbar-brand " href="#" style="color:#CC0000; font-weight:600">

        <svg class="logo.1" height="32" width="32" viewBox="0 0 24 24" aria-label="Pinterest" role="img">
          <path fill="#E60023"
            d="M0 12c0 5.123 3.211 9.497 7.73 11.218-.11-.937-.227-2.482.025-3.566.217-.932 1.401-5.938 1.401-5.938s-.357-.715-.357-1.774c0-1.66.962-2.9 2.161-2.9 1.02 0 1.512.765 1.512 1.682 0 1.025-.653 2.557-.99 3.978-.281 1.189.597 2.159 1.769 2.159 2.123 0 3.756-2.239 3.756-5.471 0-2.861-2.056-4.86-4.991-4.86-3.398 0-5.393 2.549-5.393 5.184 0 1.027.395 2.127.889 2.726a.36.36 0 0 1 .083.343c-.091.378-.293 1.189-.332 1.355-.053.218-.173.265-.4.159-1.492-.694-2.424-2.875-2.424-4.627 0-3.769 2.737-7.229 7.892-7.229 4.144 0 7.365 2.953 7.365 6.899 0 4.117-2.595 7.431-6.199 7.431-1.211 0-2.348-.63-2.738-1.373 0 0-.599 2.282-.744 2.84-.282 1.084-1.064 2.456-1.549 3.235C9.584 23.815 10.77 24 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12">
          </path>
        </svg>
        Pintrest
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>



      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item " style="padding:0px 10px; font-weight:600; color:#111111">
            <a class="nav-link " style="font-weight:600; color: #111111;" aria-current="page" href="#">About</a>
          </li>
          <li class="nav-item " style="padding:0px 10px; font-weight:600; color:#111111;font-size: 16px">
            <a class="nav-link" href="#" style="font-weight:600; color: #111111; ">Bussines</a>
          </li>
          <li class="nav-item" style="padding:0px 10px; font-weight:600; color:#111111">
            <a class="nav-link" href="#" style="font-weight:600; color: #111111; ">Blog</a>
          </li>
          <a class="btn rounded-pill my-btn-red">Log in </a>
          <a class="btn  rounded-pill my-btn-gray"> Sign up</a>
        </ul>
      </div>



    </div>
  </nav>


  <!-------2nd nav bar---->
  <h5 style="font-size: 60px; font-weight: 600;padding-top:100px;margin-top:150px" class="text-center">Get your next
  </h5>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators" style="color:#030303">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="images/sliders/slide1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-dark"
          style="top: 0; margin-top: 10px; font-size: 70px; font-weight: 600; color:#C28B00; ">

          <p class="animate__animated animate__backOutUp" style="color: #C28B00;">Weeknight Dinner Idea</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/sliders/slide.2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-dark"
          style="top: 0; margin-top: 10px; font-size: 70px; font-weight: 600; color: #800020; ">

          <p class="animate__animated animate__backOutUp" style="color: #618C7B;">home decor idea</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/sliders/slide.3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-dark"
          style="top: 0; margin-top: 10px;  font-size: 70px; font-weight: 600; ">

          <p class="animate__animated animate__backOutUp" style="color:#0076D3">new look outfit</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!------------slide2------->


  <div class="yellow-div" style="background-color:#FFFD92; height:100vh; position: relative;">
    <div class="row ">
      <div class="col-md-7">
        <div class="imgwraper" style="position: relative">
          <img src="images/slide2/download.jpg"
            style="right: 210px;top:100px; position:absolute; height:218px; width:178px; border-radius: 25%;">
          <img src="images/slide2/download (1).jpg"
            style="right: 540px;top:260px; position:absolute; height:285px; width:204px; border-radius: 25%;">
          <img src="images/slide2/download (2).jpg"
            style="right: 210px;top:470px; position:absolute; height:258px; width:164px; border-radius: 25%;">

          <img src="images/slide2/download (3).jpg"
            style="right:300px;top:200px; position:absolute; height:456px; width:298px; border-radius: 15%;">
        </div>

        <h5 class="dinner">easy chicken dinner</h5>

      </div>
      <div class="col-md-5">
        <div class="text-center vertical-center">
          <h1 style="font-size:60px; font-weight:700; color:#C31952;">Your Ideas Await</h1>
          <p style="font-size:24px; font-weight: 400; color:#C31952">What do you want to try next? Think<br> of
            something you’re into—like “easy<br> chicken dinner”—and see what you<br> find.</p>
          <a type="button" class="btn idea-btn">Explore </a>
          
        </div>
      </div>

    </div>
  </div>
  <!-- Background image -->

  <div class="bgimage">
    <div class="row">
      <div class="col-md-6">
        <h1 class="loginpage">Become a<br>part of the<br>world of<br>ideas</h1>
      </div>


      <div class="col-md-6 " align="center">

        <div>


          <!---form----->
          <form action="submitform.php" class=""
            style="background-color:#fff; padding:10px 50px 5px 50px;margin-top:10px; border-top-left-radius:25px; border-top-right-radius:25px;	 width:480px; text-align: left; ">


            <div class="text-center">
              <img class="text-center" src="images/logo/logo.jpg" style="height: 39px; width:39px; margin-top: 15px;">
              <h2 style="font-size: 32px;font-weigt: 600;margin-top:20px;">Welcome to Pinterest </h2>
              <p class="text-center">Find new ideas to try</p>
            </div>



            <div class="container">
              <div class="row">

                <div class="">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control"
                      style="border-radius:15px;border:2px solid #ccc; height:48px;" placeholder="Email"
                      id="exampleInputEmail1" aria-describedby="emailHelp">

                  </div>


                </div>

                <div class="" style="position:relative">
                  <div class="mb-1">
                    <label for="inputPassword5" class="form-label">Password</label>
                    <input type="password" id="inputPassword5" class="form-control"
                      style="border-radius:15px;border:2px solid #ccc; height:48px;" placeholder="Password"
                      aria-describedby="passwordHelpBlock" id="passwordHelpBlock" class="form-text">

                    <i class="fa-solid fa-eye" data-toggle="tooltip" data-placement="right" title="Show password" style="position:absolute; top:58%; right:10%; cursor: pointer;"
                      id="onclickbtn"></i>

                  </div>
                </div>
                <script>
                  $(document).ready(function () {


                    $("#onclickbtn").click(function () {
                      var x = document.getElementById("inputPassword5");
                      if (x.type === "password") {
                        x.type = "text";
                        $("#onclickbtn").removeClass("fa-solid fa-eye").addClass("fa-regular fa-eye-slash");
                        $("#onclickbtn").attr({
                          "title" : "Hide password"
                          
                        });

                      } else {
                        x.type = "password";
                        $("#onclickbtn").removeClass("fa-regular fa-eye-slash").addClass("fa-solid fa-eye");

                      }
                    });


                  });


                </script>
                <script>
                    $(function() {
                      $('#onclickbtn').tooltip();
                    });
                    </script>

              </div>
              <div class="row">
                <div class=" ">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date of Birth</label>
                    <i class="fa-solid fa-circle-info" id="mybtn" data-toggle="tooltip" data-placement="right" title="Sample tooltip text"></i>
                    <script>
                    $(function() {
                      $('#mybtn').tooltip();
                    });
                    </script>
                    <input name="date1" type="date" class="form-control"
                      style="border-radius:15px;border:2px solid #ccc; height:48px;" id="exampleInputEmail1"
                      aria-describedby="emailHelp">

                  </div>
                </div>
              </div>




              <div style="margin-bottom:5px;">

                <input type="submit" class="btn rounded-pill d-grid gap-2 col-9 mx-auto btn btn-cont" value="Continue">
              </div>


              <p class="text-center" style="font-size: 14px; font-weight:700;">OR</p>

              <div class="input-icons">
                <i class="fa-brands fa-facebook "></i>
                <input type="submit" class="btn rounded-pill d-grid gap-2 col-9 mx-auto btn btn-facbook"
                  value="Continue with Facebook">

              </div>

              <div style="margin-top:10px" class="input-iconsgoogle">
                <i class="fa-brands fa-google"></i>
                <input type="submit" class="btn rounded-pill d-grid gap-2 col-9 mx-auto btn btn-google border"
                  value="Continue with Google">
              </div>

              <!-----continue-->

              <div style="margin-top:10px;">
                <p class="text-center" style="font-size: 12px; font-weight:400;">By continuing, you agree to
                  pintrest's<br>
                  Term of Services and acknowledge you'ev read our<br>
                  privacy police. notice at collection</p>
                <p class="text-center" style="font-size: 12px; font-weight:400;">Already a member? <a class="text-dark"
                    href="#">Log in</a></p>
              </div>



          </form>
        </div>


        <div style="width:480px;">
          <footer class=" text-white"
            style="background-color: #fff;border-bottom-right-radius:20px;border-bottom-left-radius:20px;">
            <!-- Grid container -->

            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3"
              style="background-color: rgba(0, 0, 0, 0.2);border-bottom-right-radius:20px;border-bottom-left-radius:20px;">
              <a class="text-dark" style="text-decoration:none; font-weight:600;" href="https://mdbootstrap.com/">Creat
                a free bussines account</a>
            </div>
            <!-- Copyright -->
          </footer>
        </div>




      </div>

    </div>
  </div>


</body>

</html>