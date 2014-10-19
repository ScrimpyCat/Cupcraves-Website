<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cupcraves: Home</title>

  <link href="{{ asset('_css/clearfix.css') }}" rel="stylesheet" media="screen, projection">
  <link href="{{ asset('_css/textbox.css') }}" rel="stylesheet" media="screen, projection">
  <link href="{{ asset('_css/home.css') }}" rel="stylesheet" media="screen, projection">
  <link href="{{ asset('_css/nav.css') }}" rel="stylesheet" media="screen, projection">
  <link href="{{ asset('_css/gallery.css') }}" rel="stylesheet" media="screen, projection">
  <link href="{{ asset('_css/menu.css') }}" rel="stylesheet" media="screen, projection">
  <link href="{{ asset('_css/testimonials.css') }}" rel="stylesheet" media="screen, projection">
  <script src="{{ asset('_js/jquery-1.11.1.js') }}"></script>
  <script src="{{ asset('_js/gallery.js') }}"></script>
  <meta name="viewport" content="initial-scale=1.0" />
</head>
<body>
  <header>
    @include('/layouts/logo')
  </header>

  <!-- Body -->
  <article>
    <section id="intro" class="clearfix">
      <div class="textbox">
        <h2>Welcome!</h2>
        <p>CupCraves is focused on providing high-quality cupcakes, service and customer satisfaction - I will do everything I can to meet your expectations.</p>

        <p>With a variety of offerings to choose from, I'm sure you'll find the cupcake to suit your occasion, event or craving! If you dont see what you are looking for, send me an email or call to see if your idea can be brought to life. Have a look around the website and if you have any further comments or questions, please feel free to contact us.</p>

        <p>We hope to see you again! Check back later for new updates to our website. There's much more to come!</p>
      </div>
      <img src="_images/cupcakes/stylized/cupcake-character.png">
    </section>
    <section id="gallery">
      <img src="_images/cupcakes/vanilla-pink.jpg">
    </section>
    <div class="frost-underline"></div>
    <section id="menu">
    <!-- this should be dynamic, PHP inserting what's available from the DB in here -->
      <ul class="clearfix">
        <li><a href="#">Vanilla</a></li>
        <li><a href="#">Chocolate</a></li>
        <li><a href="#">Red Velvet</a></li>
        <li><a href="#">Cookies and Cream</a></li>
        <li><a href="#">Jaffa</a></li>
        <li><a href="#">Mocha</a></li>
        <li><a href="#">Rolo</a></li>
        <li><a href="#">Chocolate Sundae</a></li>
        <li><a href="#">Graduation</a></li>
        <li><a href="#">Cookie Monster</a></li>
        <li><a href="#">Minni Mouse</a></li>
        <li><a href="#">Rainbow</a></li>
        <li><a href="#">Turtle</a></li>
        <li><a href="#">Halloween</a></li>
        <li><a href="#">Easter</a></li>
        <li><a href="#">Christmas</a></li>
        <li><a href="#">Caramel Slice</a></li>
        <li><a href="#">ShortBread</a></li>
        <li><a href="#">Lolly Bags</a></li>
        <li><img src="_images/cupcakes/stylized/cupcake-character-eat.png"></li>
      </ul>
    </section>
    <div class="frost-underline"></div>
    <section id="testimonials" class="clearfix">
      <div class="textbox">
        <p>"I hired Cupcraves (Jessica) for a duel birthday cake and cupcakes on the side, the cake was moist and looked fantastic, and the cupcake had rolos on top and were so velvety smooth, they were barely staying on the table until cake time. Very professional and at her low cost price I would highly recommend her to anyone. Thank you so much Jessica."</p>
        <p>-Janice Hanson.</p>
      </div>
      <img src="_images/cupcakes/stylized/cupcake-character-point.png">
    </section>
  </article>
</body>
</html>
