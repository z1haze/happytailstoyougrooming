<?php
    include('partials/head.php');

    include('partials/topbar.php');

    include('partials/nav.php'); ?>

    <section id="contact" class="blue">
      <div class="row">

        <div class="small-16 columns">
          <h1 class="text-center title">Contact Us</h1>
          <p>If you have a question about scheduling or pricing, please fill out the form below and ask us. We will do our best to reply to you in 24 hours or less. Sometimes, at very busy times of the year, waits may be longer than expected, just please be patient and we will respond as soon as possible.</p>
        </div>

      </div>

      <div class="row">

        <div class="small-16 medium-8 columns">
        	<div id="form-messages" data-alert class="alert-box radius"></div>
          <div id="contact-form">
            <div id="fields">
              <form id="form-contact" action="inc/email.php" method="POST">
                <input type="text" id="name" name="name" value="" title="Your Name" placeholder="Your Name" required />
                <input type="email" id="email" name="email" value="" title="Your E-mail" placeholder="Your E-Mail Address" required />
                <input type="text" id="area" name="area" placeholder="part of town?" style="width: 48%; float:left;" required />
                <select name="existing" id="existing" style="width: 48%; float:right;" required >
                	<option value="" >Client Status</option>
                	<option value="existing">Returning / Existing</option>
                	<option value="new">New Client</option>
                </select>
                <textarea name="message" id="message" title="Your Message" placeholder="Your Message" required></textarea>
                <div class="g-recaptcha" data-sitekey="6LemLhATAAAAADW7PgKaKPCqe4cnbylB3idEP-kj"></div>
                <button type="submit" name="submit" id="submit" class="button radius">Send</button>
              </form>
            </div>
            <div id="note"></div>
          </div><!--contact-form-->
        </div>

        <div class="small-16 medium-7 medium-offset-1 columns">
          <h4>Phone &amp; E-mail</h4>
          <div class="vcard">
            <p>
              +1 513 300 1080 (Karen)<br>
              +1 513 205 9269 (Sarah)
            </p>
          </div>
          <h4>Business Hours</h4>
          <div class="vcard">
            <p>
              MON to FRI: 8 AM to 5 PM<br>
              SAT: Closed<br>
              SUN: Closed
            </p>
          </div>

          <iframe id="map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="350" height="250" src="https://maps.google.com/maps?hl=en&q=Cincinnati, oh&ie=UTF8&t=roadmap&z=10&iwloc=B&output=embed"></iframe>
        </div>
      </div>

        <div class="row">
            <div class="small-16 columns">
                <div class="alert-box warning radius">
                    <p>We understand the occasional missed appointment, but with such high demand for appointments there may be a $25 cancellation charge applied to the accounts of customers that cancel without giving at minimum a 48 hour notice.</p>
                </div>
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

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script>
    	$(function() {
		    // Get the form.
		    var form = $('#form-contact');

		    // Get the messages div.
		    var formMessages = $('#form-messages');

		    // Set up an event listener for the contact form.
			$(form).submit(function(e) {
			    // Stop the browser from submitting the form.
			    e.preventDefault();

			    $('#submit').html('<img src="images/713.GIF" />');

			    $.ajax({
				    type: 'POST',
				    url: $(form).attr('action'),
				    data: $(form).serialize(),
				    success: function(response) {
					    // Make sure that the formMessages div has the 'success' class.
					    $(formMessages).removeClass('alert');
					    $(formMessages).addClass('success');

					    // Set the message text.
					    $(formMessages).text(response);

					    $('#submit').html('Sent!');

					    $(formMessages).fadeIn('fast');

					    // Clear the form.
					    $(form)[0].reset();
					    $('#submit').prop('disabled', true);
					},
					error: function(data) {
					    // Make sure that the formMessages div has the 'alert' class.
					    $(formMessages).removeClass('success');
					    $(formMessages).addClass('alert');

					    $('#submit').html('Send');

					    $(formMessages).fadeIn('fast');

					    // Set the message text.
					    if (data.responseText !== '') {
					        $(formMessages).text(data.responseText);
					    } else {
					        $(formMessages).text('Oops! An error occured and your message could not be sent.');
					    }
					}
				});
			});
		});
    </script>

    <?php include('partials/footer.php'); ?>