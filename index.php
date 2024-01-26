<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spa Zeineb</title>
    <link rel="shortcut icon" type="x-icon" href="spa-solid.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/697f7d2aae.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
   <?php include("./lib/nav.php") ?>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-inner">
          <div class="carousel-item active bg-1">
            <div class="carousel-caption">
                <h5 class="animated fadeInDown" style="animation-delay: 1ms;">Cure <span class="text-success"> <i class="fa-solid fa-spa"></i>Paisible</span></h5>
                <p class="animated fadeInUp" style="animation-delay: 1ms;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, dolores.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
          </div>
          <div class="carousel-item bg-2">
            <div class="carousel-caption">
                <h5 class="animated fadeInDown" style="animation-delay:1ms;">Healthy <span class="text-success"> <i class="fa-solid fa-heart-pulse"></i> LifeStyle</span></h5>
                <p class="animated fadeInUp" style="animation-delay: 1ms;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, dolores.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
          </div>
          <div class="carousel-item bg-3">
            <div class="carousel-caption">
                <h5 class="animated fadeInDown" style="animation-delay:1ms;">Increased <span class="text-success"> <i class="fa-solid fa-person-running"></i>Flexibility</span></h5>
                <p class="animated fadeInUp" style="animation-delay: 1ms;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, dolores.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
          </div>
        </div>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                <img src="image/12.png" alt="" class="d-block w-100 img-fluid">
            </button>

            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">
                <img src="image/13.png" alt="" class="d-block w-100 img-fluid">

            </button>

            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                <img src="image/14.png" alt="" class="d-block w-100 img-fluid">

            </button>
          </div>
      </div>

      <div class="about section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header text-center">
                        <h2>About <span>Us</span></h2>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 col-sm-12">
                    <div class="ab-img">
                        <img src="image/11.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <div class="about-text">
                        <h4>Welcome to ZeinebSpa</h4>
                        <h2>Better Life with Perfect Body</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque, distinctio exercitationem perferendis enim praesentium, nulla deserunt, ut eaque atque rem sit repellendus doloribus! Qui tenetur itaque esse tempora distinctio voluptatibus labore quo. Laudantium tempore culpa velit non fugiat atque alias, totam magnam pariatur eveniet quae ullam consectetur, ducimus aliquam sequi.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="stats section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-number text-center">
                        <i class="fa-solid fa-calendar-days"></i>
                        <h2>1500+</h2>
                        <p>Spa conducted</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-number text-center">
                        <i class="fa-solid fa-heart"></i>
                        <h2>80+</h2>
                        <p>Spa classes</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-number text-center">
                        <i class="fa-solid fa-clock"></i>
                        <h2>15+</h2>
                        <p>Years of Experiences</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-number text-center">
                        <i class="fa-solid fa-users"></i>
                        <h2>5280+</h2>
                        <p>Happy customers</p>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="services section-padding" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header text-center">
                        <h2>Our <span>Services</span></h2>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-service text-center">
                        <i class="fa-solid fa-hand-holding-heart"></i>
                        <h2>Anxiety Reliel</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem accusamus illum voluptatibus ducimus totam nemo dicta fuga dolores veniam nulla.</p>
                        <a href="#">Learn more</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-service text-center">
                        <i class="fa-solid fa-face-grin-hearts"></i>
                        <h2>Reduce Stress</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem accusamus illum voluptatibus ducimus totam nemo dicta fuga dolores veniam nulla.</p>
                        <a href="#">Learn more</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-service text-center">
                        <i class="fa-solid fa-scale-unbalanced-flip"></i>
                        <h2>Life Balancing</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem accusamus illum voluptatibus ducimus totam nemo dicta fuga dolores veniam nulla.</p>
                        <a href="#">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="testimontal section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header text-center">
                        <h2>Client's<span> Opinion</span></h2>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-sm-12">
                    <div class="testi-slider">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                               <div class="carousel-caption text-center">
                                <div class="testi-img">
                                    <img src="image/testi-1.jpg" alt="">
                                </div>
                                <blockquote>
                                    " Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur nisi iste corrupti rerum enim itaque! "
                                </blockquote>
                                <h4>Megan Doe</h4>
                                <h5>CTO, proma</h5>
                               </div>
                              </div>
                              <div class="carousel-item">
                                <div class="carousel-caption text-center">
                                    <div class="testi-img">
                                        <img src="image/testi-2.jpg" alt="">
                                    </div>
                                    <blockquote>
                                        " Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur nisi iste corrupti rerum enim itaque! "
                                    </blockquote>
                                    <h4>Claire Chedd</h4>
                                    <h5>Officer, petra</h5>
                                   </div>
                              </div>
                              <div class="carousel-item">
                                <div class="carousel-caption text-center">
                                    <div class="testi-img">
                                        <img src="image/testi-3.jpg" alt="">
                                    </div>
                                    <blockquote>
                                        " Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur nisi iste corrupti rerum enim itaque! "
                                    </blockquote>
                                    <h4>Patricia Jones</h4>
                                    <h5>CTO, persona</h5>
                                   </div>
                              </div>
                            </div>
                          </div>
                    </div>

                </div>
            </div>

        </div>
      </div>
      <div class="trainer section-padding" id="trainer"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-header text-center">
                    <h2>our <span>Trainers</span></h2>
                    <p>lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="single-trainer text-center">
                <div class="card">
                    <img src="1.jpg" alt=""  class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Jane Davis</h5>
                        <p class="card-text">zeineb faouel te3bet w theb todkhel dawech w roha tal3et w khwaterha daret w thewb tetaka tarteh</p>
                        <p class="Socials">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-linkedin"></i>
                            <i class="fa fa-instagram"></i>                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="single-trainer text-center">
                <div class="card">
                    <img src="2.jpg" alt=""  class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Jane Davis</h5>
                        <p class="card-text">zeineb faouel te3bet w theb todkhel dawech w roha tal3et w khwaterha daret w thewb tetaka tarteh</p>
                        <p class="Socials">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-linkedin"></i>
                            <i class="fa fa-instagram"></i>                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="single-trainer text-center">
                <div class="card">
                    <img src="3.jpg" alt=""  class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Jane Davis</h5>
                        <p class="card-text">zeineb faouel te3bet w theb todkhel dawech w roha tal3et w khwaterha daret w thewb tetaka tarteh</p>
                        <p class="Socials">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-linkedin"></i>
                            <i class="fa fa-instagram"></i>                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header text-center">
                        <h2>our <span>Posts</span></h2>
                        <p>lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-blog text-center">
                        <div class="card">
                            <img src="1.jpg" alt=""  class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Treat body as temple</h5>
                                <p class="card-text">zeineb faouel te3bet w theb todkhel dawech w roha tal3et w khwaterha daret w thewb tetaka tarteh</p>
                                  <a href="#">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-blog text-center">
                        <div class="card">
                            <img src="2.jpg" alt=""  class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Treat body as temple</h5>
                                <p class="card-text">zeineb faouel te3bet w theb todkhel dawech w roha tal3et w khwaterha daret w thewb tetaka tarteh</p>
                                  <a href="#">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-blog text-center">
                        <div class="card">
                            <img src="3.jpg" alt=""  class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Treat body as temple</h5>
                                <p class="card-text">zeineb faouel te3bet w theb todkhel dawech w roha tal3et w khwaterha daret w thewb tetaka tarteh</p>
                                  <a href="#">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div>

    <div class="quote section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <single-quote class="text-center">
                        <p>
                            <i class="fa-solid fa-quote-left"></i>
                            Spa Enhances Your Life . It Will Take You To The <br> Present Moment Where Exists.
                            <i class="fa-solid fa-quote-right"></i>
                            <h5>- Someone Famous</h5> 
                        </p>
                    </single-quote>
                </div>
            </div>
        </div>
    </div>

    <div class="contact section-padding" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header text-center">
                        <h2>Contact<span> Us</span></h2>
                        <p>lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-sm-12">
                    <div class="left-contact">
                    <h3>Location</h3>
                    <p>raisidence zawi , Sousse</p>
                    <h3>Email :</h3>
                    <p>Zeinebspa@gmail.com</p>
                    <h3>Call Us</h3>
                    <p>55747471</p>
                </div>
           </div>
            <div class="col-lg-6 offset-lg-1 col-sm-12">
                <form action="">
                    <label for="">Your Name</label>
                    <input type="text" class="form-control" placeholder="Your Name" required>
                    <label for="">Your Email</label>
                    <input type="email" class="form-control" placeholder="Your Email" required>
                    <label for="">Your Message</label>
                    <textarea class="form-control" placeholder="Your Message"></textarea>
                    <button class="btn"  type="submit">Submit Form</button>
    
                </form>
            </div>
     </div>
        </div>
    </div>
    















<?php include("./lib/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>