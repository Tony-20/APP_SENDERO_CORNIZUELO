<!DOCTYPE html>
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Flora - Sendero Cornizuelo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace">
        <li><a href="{{ url('/') }}"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="{{ url('/servicios') }}">Servicios</a></li>
        <li><a href="{{ url('/contacto') }}">Contacto</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +506 2562 6212</li>
        <li><i class="fa fa-envelope-o"></i> cemede@una.cr</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="{{ url('flora') }}">Flora</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="{{ url('/') }}">Inicio</a></li>
        <li><a class="drop" href="#">Paginas</a>
          <ul>
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ url('servicios') }}">Servicios</a></li>
            <li><a href="{{ url('contacto') }}">Contacto</a></li>
            <li><a href="{{ url('flora') }}">Flora</a></li>
            <li><a href="#">Fauna</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Menú</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
            <li><a href="#">Level 2</a></li>
          </ul>
        </li>
        <li><a href="#">Organización</a></li>
        <li><a href="#">Sistema</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <p>Universidad Nacional Sede Regional Chorotega</p>
      <h3 class="heading">Sendero Cornizuelo</h3>
      <footer>
        <ul class="nospace inline pushright">
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section id="introblocks">
      <div class="sectiontitle">
        <h6 class="heading">Bienvenidos a la Sede Regional Chorotega</h6>
        <p> de la Universidad Nacional de Costa Rica</p>
      </div>
      <ul class="nospace btmspace-80 group">
        <li class="one_third first">
          <article><i class="fa fa-diamond"></i>
            <h6 class="heading font-x1"><a href="#">Feugiat maximus nisi</a></h6>
            <p>Sem volutpat massa sed tristique nisi sem sed est cras pulvinar augue libero&hellip;</p>
          </article>
        </li>
        <li class="one_third">
          <article><i class="fa fa-fort-awesome"></i>
            <h6 class="heading font-x1"><a href="#">Vel imperdiet libero</a></h6>
            <p>Condimentum id donec eu eros quis ligula sollicitudin malesuada scelerisque&hellip;</p>
          </article>
        </li>
        <li class="one_third">
          <article><i class="fa fa-forumbee"></i>
            <h6 class="heading font-x1"><a href="#">Dui nam sed tristique</a></h6>
            <p>Nunc sed ligula viverra egestas tincidunt accumsan porta eget lorem maecenas&hellip;</p>
          </article>
        </li>
      </ul>
    </section>
    <!-- ################################################################################################ -->
    <hr class="btmspace-80">
    <!-- ################################################################################################ -->
    <section>
      <div class="sectiontitle">
        <h6 class="heading">Flora Campus Nicoya</h6>
        <p>La diversidad de flora que se puede encontrar en e resinto</p>
      </div>
      <ul class="nospace group overview">
        <li class="one_third">
          <figure><a href="#"><img src="images/demo/320x240_1.jpg" alt=""></a>
            <figcaption>
              <h6 class="heading">Alpinia purpurata</h6>
              <p>Alpinia purpurata (Monocotyledons / Monocotiledóneas)</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a href="#"><img src="images/demo/320x240_2.jpg" alt=""></a>
            <figcaption>
              <h6 class="heading">Allamanda cathartica</h6>
              <p>Apocynaceae (Magnoliopsida), Allamanda (Magnoliopsida), Allamanda cathartica (Magnoliopsida)</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a href="#"><img src="images/demo/320x240_3.jpg" alt=""></a>
            <figcaption>
              <h6 class="heading">Tabebuia</h6>
              <p>Bignoniaceae (Magnoliopsida), Tabebuia (Magnoliopsida)</p>
            </figcaption>
          </figure>
        </li>
      </ul>
    </section>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section class="hoc container clear testimonials"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Comentarios Recientes</h6>
      <p>Mattis turpis praesent dignissim et libero non luctus vivamus</p>
    </div>
    <ul class="nospace group btmspace-80">
      <li class="one_third first">
        <blockquote>Imperdiet libero ac sapien facilisis ultricies aliquam gravida ligula quis commodo interdum purus felis rutrum velit non tincidunt arcu orci eget nulla etiam laoreet volutpat mollis mauris</blockquote>
        <figure class="clear"><img class="circle" src="images/demo/60x60.png" alt="">
          <figcaption>
            <h6 class="heading">John Doe</h6>
            <em>Consultant</em></figcaption>
        </figure>
      </li>
      <li class="one_third">
        <blockquote>Et tellus nibh nullam sit amet mauris consequat vehicula velit non aliquam erat maecenas egestas dui et velit viverra in tincidunt neque consectetur quisque metus arcu suscipit rutrum euismod</blockquote>
        <figure class="clear"><img class="circle" src="images/demo/60x60.png" alt="">
          <figcaption>
            <h6 class="heading">Jane Doe</h6>
            <em>Director</em></figcaption>
        </figure>
      </li>
      <li class="one_third">
        <blockquote>Consequat venenatis vestibulum enim phasellus id molestie mi nec vulputate massa phasellus ut ligula hendrerit lobortis nibh ac laoreet sapien morbi id sagittis nulla vulputate fringilla felis</blockquote>
        <figure class="clear"><img class="circle" src="images/demo/60x60.png" alt="">
          <figcaption>
            <h6 class="heading">June Doe</h6>
            <em>Marketing</em></figcaption>
        </figure>
      </li>
    </ul>
    <footer><a class="btn" href="#">Ver Más &raquo;</a></footer>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <figure class="hoc container clear clients"> 
    <!-- ################################################################################################ -->
    <figcaption class="sectiontitle">
      <h6 class="heading">Galería Fotografica</h6>
    </figcaption>
    <ul class="nospace group">
      <li class="one_quarter first"><a href="#"><img src="images/demo/222x100_1.jpg" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/222x100_2.jpg" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/222x100_3.jpg" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/222x100_4.jpg" alt=""></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </figure>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Footer Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/03.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row4">
    <footer id="footer" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="one_quarter first">
        <h6 class="heading">Contactenos</h6>
        <ul class="nospace btmspace-30 linklist contact">
          <li><i class="fa fa-map-marker"></i>
            <address>
            Carretera a Sámara, 150, Provincia de Guanacaste, Nicoya
            </address>
          </li>
          <li><i class="fa fa-phone"></i> +506 2562 6212</li>
          <li><i class="fa fa-envelope-o"></i> cemede@una.cr</li>
        </ul>
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      
      <div class="one_quarter">
        <h6 class="heading">Recomendaciones</h6>
        
        <form method="post" action="#">
          <fieldset>
            <legend>Newsletter:</legend>
            <textarea class="btmspace-15" type="" value="" placeholder="Message"></textarea>
            <input class="btmspace-15" type="text" value="" placeholder="Name">
            <input class="btmspace-15" type="text" value="" placeholder="Email">
            <button type="submit" value="submit">Submit</button>
          </fieldset>
        </form>
      </div>
      <!-- ################################################################################################ -->
    </footer>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">Universidad Nacional</a></p>
      
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Footer Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>