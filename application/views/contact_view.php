  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.248654886152!2d-100.45758958559941!3d20.618719107026703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d3506f3ea7432d%3A0x4904ad06363588a!2sBP+Sendero!5e0!3m2!1ses-419!2smx!4v1561156961145!5m2!1ses-419!2smx" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

  <section id="contact-page">
    <div class="container">
      <div class="center">
        <h2>Mandanos un mensaje</h2>
        <p class="lead">Mandanos tu mensaje y nos podremos en contacto contigo lo antes posible.</p>
      </div>
      <div class="row contact-wrap">
        <div class="col-sm-8 col-sm-offset-2">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
                data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email"
                data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
                data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>

            <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Send Message</button></div>
          </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->