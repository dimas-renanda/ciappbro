<?= $this->extend('headfoot/template'); ?>

<?= $this->section('isikonten'); ?>
<style>
    .filterimg {
        -webkit-filter: grayscale(50%); /* Safari 6.0 - 9.0 */
  filter: grayscale(50%) drop-shadow(8px 8px 10px gray) contrast(60%);


}
</style>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel"  data-bs-interval="1200">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active carousel-item-start">
      <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg> -->
      <img class="bd-placeholder-img filterimg" width="100%" height="100%" src="<?= base_url('/Assets/img/front.jpg'); ?>" alt="">
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>KOST SODA2A</h1>
          <p>JL.Sukodami III no 2A</p>
          <p><a class="btn btn-lg btn-primary" href="https://wa.me/6281222299105?text=Halo,%20apa%20masih%20ada%20kamar%20kost%20tersedia?"><i class="material-icons"  style="font-size: 25px" >holiday_village </i> <br> Be our guest !</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item carousel-item-next carousel-item-start">
      <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg> -->
<img class="bd-placeholder-img filterimg" width="100%" height="100%" src="<?= base_url('/Assets/img/dalam.jpg'); ?>" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>KOST SODA2A</h1>
          <p>JL.Sukodami III no 2A - 081222299105           <i>Experience feels like home anytime.</i></p>
          <br>
          <i><a class="btn btn-lg btn-primary" href="https://wa.me/6281222299105?text=Halo,%20apa%20masih%20ada%20kamar%20kost%20tersedia?">
          <i class="material-icons"  style="font-size: 25px" >quiz </i> <br>Get More Info</a></i>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg> -->
      
      <img class="bd-placeholder-img filterimg" width="100%" height="100%" src="<?= base_url('/Assets/img/main_gate.jpg'); ?>" alt="">
      <div class="container">
        <div class="carousel-caption text-end">
          <h1>Your security is our priority</h1>
          <p>Our goal is to keep you safe and in control of your privacy</p>
          <p><a class="btn btn-lg btn-primary" href="#"><i class="material-icons"  style="font-size: 25px" >lock_person </i> <br> Room & Services</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <!-- <div class="row">
    <div class="col-lg-4">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

      <h2 class="fw-normal">Heading</h2>
      <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
      <p><a class="btn btn-secondary" href="#">View details »</a></p>
    </div>
    <div class="col-lg-4">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

      <h2 class="fw-normal">Heading</h2>
      <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
      <p><a class="btn btn-secondary" href="#">View details »</a></p>
    </div>
    <div class="col-lg-4">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

      <h2 class="fw-normal">Heading</h2>
      <p>And lastly this, the third column of representative placeholder content.</p>
      <p><a class="btn btn-secondary" href="#">View details »</a></p>
    </div>
  </div> -->
  <!-- /.row -->


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">Lokasi Strategis<span class="text-muted"></span></h2>
      <p class="lead">Dekat dengan kampus, kantor tengah kota dan banyak tempat makan, hiburan, dan perbelanjaan.</p>
      <h3>Review us on <br> Google </h3>
      <p>We’re looking to make our services better from our best guest like you.</p>
      <i><a class="btn btn-lg btn-primary" href="https://g.co/kgs/G4phHb">
          <i class="material-icons"  style="font-size: 25px" >reviews </i> <br>&nbsp; &nbsp; Review us  &nbsp;&nbsp;</a></i>
    </div>
    <div class="col-md-5">
      <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
      <div style="width: 100%"><iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=500&amp;hl=en&amp;q=jalan%20sukodami%20III%202a+(KOST%20SODA2A)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a></iframe></div>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
    <!-- <a href="google.com"> <span class="float-element tooltip-left">
      <i class="material-icons" style="font-size: 36px">weekend
      </i></a> -->
      <h2 class="featurette-heading fw-normal lh-1">Lingkungan Nyaman <span class="text-muted"></span></h2>
      <p class="lead">Masuk dalam kompleks luas, dengan lingkungan yang tenang, disamping jalan raya.</p>

    </div>
    <div class="col-md-5 order-md-1">
      <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
      <img class="bd-placeholder-img " width="500" height="500" src="<?= base_url('/Assets/img/street.jpg'); ?>" alt="">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">Parkir Aman <span class="text-muted"> </span></h2>
      <p class="lead">Kami menyediakan parkiran luas dengan akses CCTV & RFID kartu akses gerbang 24 jam.</p>
    </div>
    <div class="col-md-5">
      <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
      <img class="filterimg bd-placeholder-img " width="500" height="500" src="<?= base_url('/Assets/img/parking.jpg'); ?>" alt="">
    </div>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

</div><!-- /.container -->

<?= $this->endSection(); ?>
<!-- FOOTER -->

