<?php
    include('partials/head.php'); 

    include('partials/topbar.php');

    include('partials/nav.php'); ?>

    <section id="frontpage-header">
      <div class="row">

        <div class="small-16 large-16 columns">
          <ul id="slider" data-orbit data-options="animation_speed:1500; timer: false; timer_speed: 6000; navigation_arrows: true; slide_number: false; bullets: false; resume_on_mouseout: true;">
            <li>
              <img src="images/slides/slide1.jpg" alt="slide 1" />
              <!--<div class="orbit-caption">
                <p>
                  Happy Thanksgiving from our four-legged friends!<br/>
                  <span><a href="#">Schedule your pup for a seasonal cut today!</a></span>
                </p>
              </div>-->
            </li>
            <li>
              <img src="images/slides/slide2.jpg" alt="slide 2" />
            </li>
            <li>
              <img src="images/slides/slide3.jpg" alt="slide 3" />
            </li>
          </ul>
        </div>
        <!--//slider-->

      </div>
    </section>

    <div class="row">
      <div class="large-16 columns">
        <img src="images/large_sep.png" alt="spliter" class="large-spliter" />
      </div>
    </div>

    <div class="row">
      <div class="small-16 large-8 columns">
        <section id="blog-highlights" class="large-text-left small-text-center">
          <h1>What Customers Say</h1>
          <article>
            <p>"I just wanted to let you know...Sunshine never looked so good!! Sarah did a fantastic job!! And it didn't take 6 hours!!! Thank you Sarah!"</p>
            <p class="author">G.C. - Montfort Heights</p>
          </article>
          <img src="images/small_sep.png" alt="spliter" class="small-spliter" />
          <article>
            <p>"Thank you for the exceptional grooming service you provide to Chloe. We love the convenience of you coming right to our door. Sarah is kind and caring, and greets Chloe each month with warmth and friendliness. She grooms Chloe to perfection each and every time. We couldn’t be happier!"</p>
             <p class="author">D.M. - Montfort Heights</p>
          </article>
        </section>
      </div>

      <div class="small-16 large-7 large-offset-1 columns" id="frontpage-il">
        <h1 class="text-center">Get to Know Us</h1>
        <img src="images/illustrations/tub.png" alt="dogs in tub">
        <a href="about.php" class="button radius">Meet the Team</a>
      </div>
    </div>

    <?php include('partials/footer.php'); ?>