<?php
    include('partials/head.php'); 

    include('partials/topbar.php');

    include('partials/nav.php'); ?>

    <section id="services" class="blue">
      <div class="row">
        <div class="small-16 columns">
          <h1 class="text-center title">Services</h1>
          <p>We provide a variety of services and benefits for your pet. Coming to your home helps to relax your pass and to provide a much less stressful environment, as well as a more speedy process.</p>
          <p>We take great pride in the quality of of our work on your pet, and always take great care when grooming them.</p>
        </div>
      </div>
    </section>

    <section id="services-ui-utilities">
      <div class="row">
        <!--lists-->
        <div class="small-16 medium-6 columns">
          <ul class="fa-ul">
            <li><i class="fa-li fa fa-paw fa-2x"></i>Quality breed trim + Bow or bandana &amp; cologne.</li>
            <li><i class="fa-li fa fa-paw fa-2x"></i>Hydro-massage bath with appropriate shampoo &amp; conditioner.</li>
            <li><i class="fa-li fa fa-paw fa-2x"></i>Nails trimmed &amp; Ears plucked, cleaned &amp; deodorized.</li>
            <li><i class="fa-li fa fa-paw fa-2x"></i>Towel dry followed by warm air fluff drying.</li>
            <li><i class="fa-li fa fa-paw fa-2x"></i>Thorough brush-out &amp; De-Shedding for long-lasting shed control.</li>
          </ul>
        </div>
        <!--accordions-->
        <div class="small-16 medium-10 columns">
          <dl class="accordion" data-accordion>
            <dt></dt>
            <dd class="active">
              <a href="#accordion-panel1">Eliminate Stress <i class="fa fa-paw"></i></a>
              <div id="accordion-panel1" class="content active">
                <p>Eliminating the need for long car rides encourages a stress free environment for your pet!</p>
              </div>
            </dd>
            <dd>
              <a href="#accordion-panel2">No Distractions <i class="fa fa-paw"></i></a>
              <div id="accordion-panel2" class="content">
                <p>One-on-one professional care with your pet helps to create a distraction free environment, allowing your pet to relax, and our groomers to do an even better job.</p>
              </div>
            </dd>
            <dd>
              <a href="#accordion-panel3">Cleanliness <i class="fa fa-paw"></i></a>
              <div id="accordion-panel3" class="content">
                <p>Sanitary environment &amp; no long hours spent in a cage. due to cleaning and sanitizing our work stations after each appointment. Also no need for cages because once the appointment is finished, your little friend can come home immediately.</p>
              </div>
            </dd>
            <dd>
              <a href="#accordion-panel4">Top of the line products <i class="fa fa-paw"></i></a>
              <div id="accordion-panel4" class="content">
                <p>We use only the best shampoo products and grooming equipment on your pet.</p>
              </div>
            </dd>
            <dd>
              <a href="#accordion-panel5">Loving, experienced groomers <i class="fa fa-paw"></i></a>
              <div id="accordion-panel5" class="content">
                <p>With more than 30 years cumulative experience, and repeat clients, we build unique bonds with your pet.</p>
              </div>
            </dd>
          </dl>
        </div>
      </div>

      <div class="row">
        <div class="large-16 columns">
          <img src="images/large_sep.png" alt="spliter" class="large-spliter" />
        </div>
      </div>

    </section>

    <section id="contact-callout">
      <div class="row">
        <div class="small-16 medium-10 columns">
          <h1>Have Questions?</h1>
          <p>If there is anything that you cannot find the answer to on our website, please feel free to leave us a voice message at either our 2 phone numbers, as well as submitting a inquiry form via our contact page.</p>
          <p>The easiest way to receive information about scheduling and pricing is to submit a form after clicking the link below. We will respond to your email as soon as possible.</p>

          <a href="contact.php" class="button radius">Contact Us</a>
        </div>
        <div class="medium-6 columns">
          <img src="images/illustrations/barber.png" alt="barber">
        </div>
      </div>
    </section>

    <?php include('partials/footer.php'); ?>