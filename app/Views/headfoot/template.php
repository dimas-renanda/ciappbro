<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      /* link caroselcss style offline */



      /* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  padding-bottom: 3rem;
  color: #5a5a5a;
}


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
  overflow: hidden;
     /*disables white flash*/
     -webkit-transition: -webkit-transform 2s ease-in-out;
   -o-transition: -o-transform 2s ease-in-out;
   transition: transform 2s ease-in-out;

}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 21rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  /* height: 50rem; */
  height: 95vh;
  overflow: hidden;
     /*disables white flash*/


}

/* fix lag? carosuel */

carousel-item-next{
  transition: transform 1s ease-in-out;
}

.carousel-item-prev{
    transition: transform 1s ease-in-out;
}
.carousel-item-left {
    transform: translateX(-100%);
}
.carousel-item-right {
    transform: translateX(100%);
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
/* rtl:begin:ignore */
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}
/* rtl:end:ignore */


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
/* rtl:begin:remove */
.featurette-heading {
  letter-spacing: -.05rem;
}

/* rtl:end:remove */

/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}
    </style>

</head>

  <body>

  <header>
  <nav class="navbar navbar-expand-md navbar-grey bg-grey">
    <div class="container-fluid">
    <a class="" href="#">
    <img class="navbar-brand" height="60px" src="<?= base_url('/Assets/img/logo.png'); ?>" alt="KOST SODA2A">
    </a>
      <!-- <a class="navbar-brand" href="#">KOST SODA2A</a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a 

            <?php 
            if ($isactive == 'home')
            {
                echo 'class="nav-link active"';
            } 
            else
            {
                echo 'class="nav-link "';
            }
            ?> aria-current="page" href="<?= base_url('/Home'); ?>">

<i class="fa fa-home" aria-hidden="true"></i> Home
        </a>
          </li>
          <li class="nav-item">
            <a <?php 
                        if ($isactive == 'room')
                        {
                            echo 'class="nav-link active"';
                        } 
                        else
                        {
                            echo 'class="nav-link "';
                        }
                ?>
              href="<?= base_url('/Room'); ?>">
              <i class="fa fa-building" aria-hidden="true"></i> Room
            </a>
          </li>
          <li class="nav-item">
            <a 
            <?php 
                        if ($isactive == 'about')
                        {
                            echo 'class="nav-link active"';
                        } 
                        else
                        {
                            echo 'class="nav-link "';
                        }
                ?>
             href="<?= base_url('/About'); ?>">
             <i class="fa fa-info-circle" aria-hidden="true"></i>  About us
            </a>
          </li>
          <li class="nav-item">
            <a 
            <?php 
                        if ($isactive == 'review')
                        {
                            echo 'class="nav-link active"';
                        } 
                        else
                        {
                            echo 'class="nav-link "';
                        }
                ?>
             href="https://g.co/kgs/G4phHb">
             <i class="fa fa-star" aria-hidden="true"></i>  Review us on Google
            </a>
          </li>
        </ul>
        <form class="d-flex" >
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-users" aria-hidden="true"></i> Resident Area</a>
          </li>
          </ul>
        </form>
      </div>
    </div>
  </nav>
</header>



<?= $this->renderSection('isikonten'); ?>

  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="text-center mb-3 mb-md-0 text-muted">© 2022 Kost Soda, Site</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="https://wa.me/6281222299105?text=Halo,%20apa%20masih%20ada%20kamar%20kost%20tersedia?"><i class="fa fa-whatsapp fa-2x"></i></a></li>
      <li class="ms-3"><a class="text-muted" href="https://www.google.com/maps/place/KOST+SODA2A+sukodami+3%2F2a/@-7.277582,112.763437,16z/data=!4m13!1m7!3m6!1s0x2dd7fbcd32692ba1:0x7caa4d4cf3458207!2sJl.+Sukodami+III+No.2a,+Manyar+Sabrangan,+Kec.+Mulyorejo,+Kota+SBY,+Jawa+Timur+60116,+Indonesia!3b1!8m2!3d-7.2777591!4d112.7626375!3m4!1s0x2dd7fb2e4ca3b1a7:0xf346e252c4f6edd9!8m2!3d-7.2777624!4d112.7626222?hl=en"><i class="fa fa-map-o fa-2x"></i></a></li>
      <li class="ms-3"><a class="text-muted" href="tel:081222299105"><i class="fa fa-phone fa-2x"></i></a></li>
    </ul>
  </footer>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>