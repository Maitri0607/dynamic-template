<?php include "header.php";
include_once "header-functions.php";
?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
  <div class="container position-relative">
    <div class="row gy-5" data-aos="fade-in">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
        <h2>
          <?php echo $content['feild_type']; ?>
        </h2>
        <p>
          <?php echo $content['feild_description']; ?>
        </p>
        <div class="d-flex justify-content-center justify-content-lg-start">
          <a href="<?php echo $content['btn_link']; ?>" class="btn-get-started">
            <?php echo $content['btn_txt']; ?>
          </a>
          <a href="<?php echo $content['video_txt']; ?>" class="glightbox btn-watch-video d-flex align-items-center"><i
              class="bi bi-play-circle"></i><span>Watch
              Video</span></a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2">
        <img src="assets/img/rk.jpeg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
      </div>
    </div>
  </div>

  <div class="icon-boxes position-relative">
    <div class="container position-relative">
      <div class="row gy-4 mt-5">

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><img src="<?php echo $icon['icon1_img']; ?>"></div>
            <h4 class="title"><a href="" class="stretched-link">
                <?php echo $icontxt['icon1_txt'] ?>
              </a></h4>
          </div>
        </div><!--End Icon Box -->

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><img src="<?php echo $icon['icon2_img']; ?>"></div>
            <h4 class="title"><a href="" class="stretched-link">
                <?php echo $icontxt['icon2_txt'] ?>
              </a></h4>
          </div>
        </div><!--End Icon Box -->

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><img src="<?php echo $icon['icon3_img']; ?>"></div>
            <h4 class="title"><a href="" class="stretched-link">
                <?php echo $icontxt['icon3_txt'] ?>
              </a></h4>
          </div>
        </div><!--End Icon Box -->

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><img src="<?php echo $icon['icon4_img']; ?>"></div>
            <h4 class="title"><a href="" class="stretched-link">
                <?php echo $icontxt['icon4_txt'] ?>
              </a></h4>
          </div>
        </div><!--End Icon Box -->

      </div>
    </div>
  </div>

  </div>
</section>
<!-- End Hero Section -->

<main id="main">

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>About Us</h2>
        <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis
          omnis tiledo stran delop</p>
      </div>

      <div class="row gy-4">
        <div class="col-lg-6">
          <h3>Voluptatem dignissimos provident quasi corporis</h3>
          <img src="<?php echo $about1['about1']; ?>" class="img-fluid rounded-4 mb-4">
          <p><a href="">
              <?php echo $about2['about1']; ?>
            </a></p>
          <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel.
            Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore
            doloribus debitis explicabo similique sit. Accusantium sed ut omnis beatae neque deleniti repellendus.</p>
        </div>
        <div class="col-lg-6">
          <div class="content ps-0 ps-lg-5">
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
              </li>
              <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
                pariatur.</li>
            </ul>
            <p><a href="">
                <?php echo $about2['about2']; ?>
              </a></p>

            <div class="position-relative mt-4">
              <img src="<?php echo $about1['about2']; ?>" class="img-fluid rounded-4" alt="">
              <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> -->
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="zoom-out">

      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="<?php echo $slides['slide1']; ?>" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo $slides['slide2']; ?>" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo $slides['slide3']; ?>" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo $slides['slide4']; ?>" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo $slides['slide5']; ?>" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo $slides['slide6']; ?>" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo $slides['slide7']; ?>" class="img-fluid" alt=""></div>
          <!-- <div class="swiper-slide"><img src="<?php echo $slides['slide8']; ?>" class="img-fluid" alt=""></div> -->
        </div>
      </div>

    </div>
  </section><!-- End Clients Section -->

  <!-- ======= Stats Counter Section ======= -->
  <section id="stats-counter" class="stats-counter">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4 align-items-center">

        <div class="col-lg-6">
          <img src="<?php echo $counter['image']; ?>" alt="" class="img-fluid">
        </div>

        <div class="col-lg-6">

          <div class="stats-item d-flex align-items-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
              class="purecounter"></span>
            <p><strong>Happy Clients</strong>
              <?php echo $counter['txt1']; ?>
            </p>
          </div><!-- End Stats Item -->

          <div class="stats-item d-flex align-items-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
              class="purecounter"></span>
            <p><strong>Projects</strong>
              <?php echo $counter['txt2']; ?>
            </p>
          </div><!-- End Stats Item -->

          <div class="stats-item d-flex align-items-center">
            <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1"
              class="purecounter"></span>
            <p><strong>Hours Of Support</strong>
              <?php echo $counter['txt3']; ?>
            </p>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </div>
  </section><!-- End Stats Counter Section -->

  <!-- ======= Call To Action Section ======= -->
  <section id="call-to-action" class="call-to-action">
    <div class="container text-center" data-aos="zoom-out"
      style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) , url('<?php echo $action['bg_img']; ?>')  center center ;">
      <a href="<?php echo $action['video']; ?>" class="glightbox play-btn"></a>
      <h3>
        <?php echo $action['video_txt1']; ?>
      </h3>
      <p>
        <?php echo $action['video_txt2']; ?>
      </p>
      <a class="cta-btn" href="<?php echo $action['btn_link']; ?>">
        <?php echo $action['btn_txt']; ?>
      </a>
    </div>
  </section><!-- End Call To Action Section -->

  <!-- ======= Our Services Section ======= -->
  <section id="services" class="services sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Services</h2>
        <p>
          <?php echo $services['decs']; ?>
        </p>
      </div>

      <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-4 col-md-6">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="bi bi-activity"></i>
            </div>
            <h3>
              <?php echo $services['icon1_txt1']; ?>
            </h3>
            <p>
              <?php echo $services['icon1_txt2']; ?>
            </p>
            <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-broadcast"></i>
            </div>
            <h3>
              <?php echo $services['icon2_txt1']; ?>
            </h3>
            <p>
              <?php echo $services['icon2_txt2']; ?>
            </p>
            <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-easel"></i>
            </div>
            <h3>
              <?php echo $services['icon3_txt1']; ?>
            </h3>
            <p>
              <?php echo $services['icon3_txt2']; ?>
            </p>
            <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-bounding-box-circles"></i>
            </div>
            <h3>
              <?php echo $services['icon4_txt1']; ?>
            </h3>
            <p>
              <?php echo $services['icon4_txt2']; ?>
            </p>
            <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-calendar4-week"></i>
            </div>
            <h3>
              <?php echo $services['icon5_txt1']; ?>
            </h3>
            <p>
              <?php echo $services['icon5_txt2']; ?>
            </p>
            <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-chat-square-text"></i>
            </div>
            <h3>
              <?php echo $services['icon6_txt1']; ?>
            </h3>
            <p>
              <?php echo $services['icon6_txt2']; ?>
            </p>
            <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>
  </section><!-- End Our Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Portfolio</h2>
        <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia
          reprehenderit sunt deleniti</p>
      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
        data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

        <div>
          <ul class="portfolio-flters">
            <li data-filter="*" class="filter-active"><?php echo $pnav['all']; ?></li>
            <li data-filter=".filter-app"><?php echo $pnav['woman']; ?></li>
            <li data-filter=".filter-product"><?php echo $pnav['man']; ?></li>
            <li data-filter=".filter-branding"><?php echo $pnav['kids']; ?></li>
            <li data-filter=".filter-books"><?php echo $pnav['perfumes']; ?></li>
          </ul><!-- End Portfolio Filters -->
        </div>

        <div class="row gy-4 portfolio-container">

          <div class="col-xl-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="<?php echo $pimg['img1']; ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="<?php echo $pimg['img1']; ?>" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details"><?php echo $pname['name1']; ?></a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <a href="<?php echo $pimg['img2']; ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="<?php echo $pimg['img2']; ?>" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details"><?php echo $pname['name2']; ?></a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
            <div class="portfolio-wrap">
              <a href="<?php echo $pimg['img3']; ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="<?php echo $pimg['img3']; ?>" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details"><?php echo $pname['name3'];?></a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-books">
            <div class="portfolio-wrap">
              <a href="<?php echo $pimg['img4']; ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="<?php echo $pimg['img4']; ?>" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details"><?php echo $pname['name4'];?></a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="<?php echo $pimg['img5']; ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="<?php echo $pimg['img5']; ?>" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details"><?php echo $pname['name5'];?></a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <a href="<?php echo $pimg['img6']; ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="<?php echo $pimg['img6']; ?>" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details"><?php echo $pname['name6'];?></a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
            <div class="portfolio-wrap">
              <a href="<?php echo $pimg['img7']; ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="<?php echo $pimg['img7']; ?>" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details"><?php echo $pname['name7'];?></a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-books">
            <div class="portfolio-wrap">
              <a href="<?php echo $pimg['img8']; ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="<?php echo $pimg['img8']; ?>" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details"><?php echo $pname['name8'];?></a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="<?php echo $pimg['img9']; ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="<?php echo $pimg['img9']; ?>" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details"><?php echo $pname['name9'];?></a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <a href="<?php echo $pimg['img10']; ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="<?php echo $pimg['img10']; ?>" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details"><?php echo $pname['name10'];?></a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
            <div class="portfolio-wrap">
              <a href="<?php echo $pimg['img11']; ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="<?php echo $pimg['img11']; ?>" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details"><?php echo $pname['name11'];?></a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-books">
            <div class="portfolio-wrap">
              <a href="<?php echo $pimg['img12']; ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="<?php echo $pimg['img12']; ?>" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details"><?php echo $pname['name12'];?></a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

        </div><!-- End Portfolio Container -->

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Team</h2>
        <p><?php echo $team['desc']; ?></p>
      </div>

      <div class="row gy-4">

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <img src="<?php echo $team['emp1_img']; ?>" class="img-fluid" alt="">
            <h4><?php echo $team['emp1_name']; ?></h4>
            <span><?php echo $team['emp1_desig']; ?></span>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <img src="<?php echo $team['emp2_img']; ?>" class="img-fluid" alt="">
            <h4><?php echo $team['emp2_name']; ?></h4>
            <span><?php echo $team['emp2_desig']; ?></span>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <img src="<?php echo $team['emp3_img']; ?>" class="img-fluid" alt="">
            <h4><?php echo $team['emp3_name']; ?></h4>
            <span><?php echo $team['emp3_desig']; ?></span>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
          <div class="member">
            <img src="<?php echo $team['emp4_img']; ?>" class="img-fluid" alt="">
            <h4><?php echo $team['emp4_name']; ?></h4>
            <span><?php echo $team['emp4_desig'];?></span>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>
  </section><!-- End Our Team Section -->

  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2><?php echo $category['title'];?></h2>
        <p><?php echo $category['desc'];?></p>
      </div>

      <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

        <div class="col-lg-4">
          <div class="pricing-item">
            <h3>Free Plan</h3>
            <div class="icon">
              
              <!-- <i class="bi bi-box"></i> -->
            </div>
            <h4><sup>$</sup>0<span> / month</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
              <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4">
          <div class="pricing-item featured">
            <h3>Business Plan</h3>
            <div class="icon">
              <i class="bi bi-airplane"></i>
            </div>

            <h4><sup>$</sup>29<span> / month</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4">
          <div class="pricing-item">
            <h3>Developer Plan</h3>
            <div class="icon">
              <i class="bi bi-send"></i>
            </div>
            <h4><sup>$</sup>49<span> / month</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
          </div>
        </div><!-- End Pricing Item -->

      </div>

    </div>
  </section><!-- End Pricing Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-4">
          <div class="content px-xl-5">
            <h3>Frequently Asked <strong>Questions</strong></h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Duis aute irure dolor in reprehenderit
            </p>
          </div>
        </div>

        <div class="col-lg-8">

          <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq-content-1">
                  <span class="num">1.</span>
                  Non consectetur a erat nam at lectus urna duis?
                </button>
              </h3>
              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur
                  gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq-content-2">
                  <span class="num">2.</span>
                  Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                </button>
              </h3>
              <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
                  donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit
                  ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq-content-3">
                  <span class="num">3.</span>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                </button>
              </h3>
              <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum
                  integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt.
                  Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi
                  quis
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq-content-4">
                  <span class="num">4.</span>
                  Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                </button>
              </h3>
              <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
                  donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit
                  ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq-content-5">
                  <span class="num">5.</span>
                  Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                </button>
              </h3>
              <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc
                  vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus
                  gravida quis blandit turpis cursus in
                </div>
              </div>
            </div><!-- # Faq item-->

          </div>

        </div>
      </div>

    </div>
  </section><!-- End Frequently Asked Questions Section -->

  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="recent-posts" class="recent-posts sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Recent Blog Posts</h2>
        <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus
          fugit aut qui distinctio</p>
      </div>

      <div class="row gy-4">

        <div class="col-xl-4 col-md-6">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Politics</p>

            <h2 class="title">
              <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
            </h2>

            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author">Maria Doe</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Jan 1, 2022</time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->

        <div class="col-xl-4 col-md-6">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Sports</p>

            <h2 class="title">
              <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
            </h2>

            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author">Allisa Mayer</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Jun 5, 2022</time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->

        <div class="col-xl-4 col-md-6">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Entertainment</p>

            <h2 class="title">
              <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
            </h2>

            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author">Mark Dower</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Jun 22, 2022</time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->

      </div><!-- End recent posts list -->

    </div>
  </section><!-- End Recent Blog Posts Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Contact</h2>
        <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem
          dolore earum</p>
      </div>

      <div class="row gx-lg-0 gy-4">

        <div class="col-lg-4">

          <div class="info-container d-flex flex-column align-items-center justify-content-center">
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-clock flex-shrink-0"></i>
              <div>
                <h4>Open Hours:</h4>
                <p>Mon-Sat: 11AM - 23PM</p>
              </div>
            </div><!-- End Info Item -->
          </div>

        </div>

        <div class="col-lg-8">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->

<?php include "./forms/footer.php"; ?>