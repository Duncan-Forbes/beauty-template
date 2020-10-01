<?php
/*
 * Template Name: Beauty Template
 */

$image_data = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full' );
$image_url = $image_data[0]; /* Gets the URL of the featured image and is passed in as the background below */

get_header();
?>


<div id="primary" class="content-area">

  <?php if ($how_it_works = get_field('how_it_works')): ?>

    <section id="how-it-works">

      <div class="container">

        <div class="row">

          <div class="col">

            <div class="hiw-write-up">

              <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#hiw-text" aria-expanded="false" aria-controls="hiw-text">
                Click here for more information
              </button>

              <?php while ( have_posts() ) : the_post(); ?>

                <div class="collapse" id="hiw-text">
                  <?php the_content(); ?>

                  <?php if ($technologies = get_field('technologies')): ?>

                    <div class="tech-heading">
                      <h2>Technologies Used:</h2>
                    </div>

                      <?php foreach ($technologies as $t): ?>

                        <div class="row justify-content-center">

                          <?php if($t['html']): ?>
                            <div class="tech-item">
                              <span class="fab fa-html5"></span>
                              <p>HTML</p>
                            </div>
                          <?php endif; ?>

                          <?php if($t['css']): ?>
                            <div class="tech-item">
                              <span class="fab fa-css3-alt"></span>
                              <p>CSS</p>
                            </div>
                          <?php endif; ?>

                          <?php if($t['javascript']): ?>
                            <div class="tech-item">
                              <span class="fab fa-js-square"></span>
                              <p>JavaScript jQuery</p>
                            </div>
                          <?php endif; ?>

                          <?php if($t['php']): ?>
                            <div class="tech-item">
                              <span class="fab fa-php"></span>
                              <p>PHP</p>
                            </div>
                          <?php endif; ?>

                        </div>

                      <?php endforeach; ?>

                  <?php endif; ?>

                </div>

              <?php endwhile; wp_reset_query(); ?>

            </div>

          </div>

        </div>

      </div>

    </section>

  <?php endif; ?>

  <main id="main" class="site-main" style="position: relative; scroll-behavior: smooth;height: 1000px; margin: 2em;border: solid 4px #fff;border-radius: 2em;overflow: scroll; box-shadow: 0px 0px 20px -5px #0f0f0f;">

    <section id="beauty-template-hm-hero" style="background:url('<?= $image_url ?>');">

      <div class="bubble" style="height: <?=rand(15,25) ?>px ; width: <?=rand(15,25) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
      <div class="bubble" style="height: <?=rand(15,25) ?>px ; width: <?=rand(15,25) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
      <div class="bubble" style="height: <?=rand(25,35) ?>px ; width: <?=rand(25,35) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
      <div class="bubble" style="height: <?=rand(25,35) ?>px ; width: <?=rand(25,35) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
      <div class="bubble" style="height: <?=rand(15,20) ?>px ; width: <?=rand(15,20) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
      <div class="bubble" style="height: <?=rand(15,20) ?>px ; width: <?=rand(15,20) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
      <div class="bubble" style="height: <?=rand(30,40) ?>px ; width: <?=rand(30,40) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
      <div class="bubble" style="height: <?=rand(30,40) ?>px ; width: <?=rand(30,40) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
      <div class="bubble" style="height: <?=rand(30,40) ?>px ; width: <?=rand(30,40) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
      <div class="bubble" style="height: <?=rand(30,40) ?>px ; width: <?=rand(30,40) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>

      <div class="container">

        <div class="row align-content-center">

          <div class="hero-content">

            <span class="hero-pre-text">Welcome to Jean Yacob</span>
            <h1 class="hero-heading">Hair & Beauty</h1>
            <span class="hero-sub-text">Turning your <strong>dream</strong> day to reality</span>

            <a href="#beauty-template-about-us"><div class="btn btn-contact">Learn More</div></a>

          </div>

        </div>

        <div class="row">

          <div class="beauty-template-scrolling-numbers">

            <script>

              setTimeout(function(){
                odometer.innerHTML = '34';
                odometer1.innerHTML = '9267';
                odometer2.innerHTML = '33';
                odometer3.innerHTML = '782';
              }, 100);

            </script>

            <div class="work-numbers">

              <span id="odometer" class="odometer"></span>

              <p>Weddings</p>

            </div>

            <div class="work-numbers">

              <span id="odometer1" class="odometer"></span>

              <p>Hairclips Lost</p>

            </div>

            <div class="work-numbers">

              <span id="odometer2" class="odometer"></span>

              <p>Staff Members</p>

            </div>

            <div class="work-numbers">

              <span id="odometer3" class="odometer"></span>

              <p>YouTube Subscribers</p>

            </div>

          </div>

        </div>


      </div>

    </section>

    <?php if ($about_cards = get_field('about_cards')): ?>

      <section id="beauty-template-about-us">

        <div class="container">

          <div class="row">

            <?php foreach ($about_cards as $a): ?>

              <div class="col-md-6 col-lg-3">

                  <div class="about-us-card">

                    <span class="<?= $a['about_card_icon'] ?>"></span>
                    <h2><?= $a['about_card_title'] ?></h2>
                    <p><?= $a['about_card_text'] ?></p>

                  </div>

              </div>

            <?php endforeach; ?>

          </div>

        </div>

      </section>

    <?php endif; ?>


    <?php if ($service_details = get_field('service_details')): ?>

      <section id="beauty-template-our-work">

        <div class="container">

          <div class="row">

            <div class="col-md-6">

                <div class="our-work-content">

                  <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <?php foreach ($service_details as $tab): ?>
                        <a class="nav-item nav-link <?php echo ($tab['tab_id'] == '1') ? "active" : ""; ?>" id="nav-<?= $tab['tab_id']?>-tab" data-toggle="tab" href="#nav-<?= $tab['tab_id']?>" role="tab" aria-controls="nav-<?= $tab['tab_id']?>" aria-selected="true"><?= $tab['tab_name']?></a>
                      <?php endforeach; ?>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <?php foreach ($service_details as $tab): ?>
                      <div class="tab-pane fade show <?php echo ($tab['tab_id'] == '1') ? "active" : ""; ?>" id="nav-<?= $tab['tab_id']?>" role="tabpanel" aria-labelledby="nav-<?= $tab['tab_id']?>-tab"><?= $tab['tab_content']?></div>
                    <?php endforeach; ?>
                  </div>

              </div>

            </div>

            <div class="col-md-6">

              <div class="our-work-image-1">
                <img src="https://images.pexels.com/photos/6393/red-woman-girl-brown.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
              </div>

            </div>

            <?php if ($step_section = get_field('step_section')): ?>

              <div class="step-bar">

                <?php foreach ($step_section as $steps): ?>

                  <div class="step">

                    <div class="step-number">Step<span><?= $steps['step_number'] ?></span></div>

                    <div class="step-content"><?= $steps['step_content'] ?></div>

                  </div>

                <?php endforeach; ?>

              </div>

            <?php endif; ?>

          </div>

        </div>

      </section>

    <?php endif; ?>

    <?php if($gallery = get_field('gallery')): ?>

      <section id="beauty-template-portfolio" style="background: url('<?= the_field('bg_texture') ?>')">

        <div class="bubble" style="height: <?=rand(15,25) ?>px ; width: <?=rand(15,25) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
          <div class="bubble" style="height: <?=rand(15,25) ?>px ; width: <?=rand(15,25) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
          <div class="bubble" style="height: <?=rand(25,35) ?>px ; width: <?=rand(25,35) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
          <div class="bubble" style="height: <?=rand(25,35) ?>px ; width: <?=rand(25,35) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
          <div class="bubble" style="height: <?=rand(15,20) ?>px ; width: <?=rand(15,20) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
          <div class="bubble" style="height: <?=rand(15,20) ?>px ; width: <?=rand(15,20) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
          <div class="bubble" style="height: <?=rand(30,40) ?>px ; width: <?=rand(30,40) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
          <div class="bubble" style="height: <?=rand(30,40) ?>px ; width: <?=rand(30,40) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
          <div class="bubble" style="height: <?=rand(30,40) ?>px ; width: <?=rand(30,40) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
        <div class="bubble" style="height: <?=rand(30,40) ?>px ; width: <?=rand(30,40) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>


        <div class="container">

          <div class="row">

            <div class="col-md-6">

              <h2><?= the_field('about_title') ?></h2>

              <p><?= the_field('about_text') ?></p>

            </div>

            <div class="col-md-6">

              <div class="slider-container">

                <div class="slider">

                  <?php foreach ($gallery as $image): ?>

                    <div class="slider-img">

                      <img src="<?= $image['gallery-image']; ?>" alt="">

                    </div>

                  <?php endforeach; ?>

                </div>

                <div class="social-button"><span class="fab fa-instagram"></span> Follow my Instagram</div>

              </div>

            </div>

          </div>

        </div>

      </section>

    <?php endif; ?>


    <?php if($testimonials = get_field('testimonials')): ?>

      <section id="beauty-template-testimonials">

          <h2>Testimonials</h2>

            <div class="slider">

              <?php foreach ($testimonials as $t): ?>

                <div class="slider-img">

                  <span class="fas fa-quote-right"></span>
                  <p class="testimonial-main"><?= $t['testimonial'] ?></p>
                  <p class="testimonial-author"><?= $t['author'] ?></p>

                </div>

              <?php endforeach; ?>

            </div>

            <div class="newsletter">

                <div class="newsletter-cta">

                  <div class="newsletter-heading">Join Our Newsletter</div>

                  <div class="newsletter-sub-text">Enter your email, we promise not to spam your inbox! ( Wink, wink. Nudge, Nudge &#129322; )</div>

                </div>

                <div class="newsletter-email">

                  <input type="text" placeholder="Enter your email">
                  <button class="newsletter-button" type="button" name="button"><span class="fal fa-mailbox"></span></button>

                </div>

            </div>

      </section>

    <?php endif; ?>


    <section id="beauty-template-contact">

      <div class="bubble" style="height: <?=rand(15,25) ?>px ; width: <?=rand(15,25) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
        <div class="bubble" style="height: <?=rand(15,25) ?>px ; width: <?=rand(15,25) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
        <div class="bubble" style="height: <?=rand(25,35) ?>px ; width: <?=rand(25,35) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
        <div class="bubble" style="height: <?=rand(25,35) ?>px ; width: <?=rand(25,35) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
        <div class="bubble" style="height: <?=rand(15,20) ?>px ; width: <?=rand(15,20) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
        <div class="bubble" style="height: <?=rand(15,20) ?>px ; width: <?=rand(15,20) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
        <div class="bubble" style="height: <?=rand(30,40) ?>px ; width: <?=rand(30,40) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
        <div class="bubble" style="height: <?=rand(30,40) ?>px ; width: <?=rand(30,40) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
        <div class="bubble" style="height: <?=rand(30,40) ?>px ; width: <?=rand(30,40) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>
      <div class="bubble" style="height: <?=rand(30,40) ?>px ; width: <?=rand(30,40) ?>px ;animation-delay: <?=rand(0,20) ?>s ;bottom: <?=rand(-20,-1) ?>em; left: <?=rand(-50,50) ?>em;border-radius: <?=rand(40,80) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,70) ?>% / <?=rand(40,70) ?>% <?=rand(40,60) ?>% <?=rand(40,60) ?>% <?=rand(40,95) ?>%;"></div>


      <div class="container">

        <div class="row">

          <div class="col-md-6">

            <div class="contact-info">

              <h2>Get in Touch</h2>

              <div class="contact-phone"><span class="fal fa-phone"></span>01827 901823</div>

              <div class="contact-address"><span class="fal fa-home"></span>Jean Yacob, 1 Local Heim, Mersmit HI5 5NA</div>

              <div class="contact-social">
                <p class="contact-social-follow">Follow Me</p>
                <span class="fab fa-facebook-f"></span>
                <span class="fab fa-twitter"></span>
                <span class="fab fa-instagram"></span>
              </div>


            </div>

          </div>

          <div class="col-md-6">

            <div class="contact-form">

              <div class="row">

                <div class="col-md-12"><input type="text" placeholder="Name" name="name"></div>
                <div class="col-md-12"><input type="text" placeholder="Email" name="email"></div>
                <div class="col-md-12"><input type="text" placeholder="Phone Number" name="phone"></div>
                <div class="col-md-12"><textarea placeholder="Message" name="message"></textarea></div>
                <button>Send Message<span class="fal fa-paper-plane"></span></button>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

  </main><!-- #main -->

  <div class="modal">

    <div class="modal-content">

      <span class="close">&times;</span>
      <p>Hi. It looks like you've just clicked on Instagram link. I hate to burst your bubble but there isn't an Instagram page. But you knew that anyway and you still clicked. Just clicking on things like a maniac. I like you. You're hired.</p>

    </div>

  </div>

</div><!-- #primary -->

<?php
get_footer();
