    
<section class="home-slider-loop-false  inner-page owl-carousel">
  <div class="slider-item" style="background-image: url('<?=base_url()?>res/img/contacto.jpg');">    
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-md-8 text-center col-sm-12 element-animate">
          <h1>Contáctanos</h1>
        </div>
      </div>
    </div>
  </div>  
</section>

<section class="section element-animate" id="contacto">
  <div class="clearfix mb-5 pb-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center heading-wrap">
          <h2>Escribenos</h2>
          <span class="back-text">Contacto</span>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <form action="<?=base_url()?>web/mail" method="post">
          <div class="row">
            <div class="col-md-6 form-group">
              <label for="name">Nombre</label>
              <input type="text" id="name" name="nombre" class="form-control" required>
            </div>
            <div class="col-md-6 form-group">
              <label for="phone">Telefono</label>
              <input type="text" id="phone" name="tel" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">

            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="message">Mensaje</label>
              <textarea name="message" id="message" name="mensaje" class="form-control " cols="30" rows="8" required></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 form-group">
              <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-6 pl-2 pl-lg-5">

        <div class="col-md-8 mx-auto contact-form-contact-info">
          <h4 class="mb-5">Detalles de contacto</h4>
          <p class="d-flex">
            <span class="ion-ios-location icon mr-5"></span>
            <span>Boulevard Bernardo Quintana 2481 Parque Advance, Bodega 9</span>
          </p>

          <p class="d-flex">
            <span class="ion-ios-telephone icon mr-5"></span>
            <span>442 642 5724 y 442 642 5725</span>
          </p>

          <p class="d-flex">
            <span class="ion-android-mail icon mr-5"></span>
            <span>contacto@specialchem.com.mx</span>
          </p>
        </div>

      </div>
    </div>
  </div>
  
</section>