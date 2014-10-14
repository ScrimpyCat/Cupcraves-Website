<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cupcraves: Home</title>
  <link href="{{ asset('_css/main.css') }}" rel="stylesheet" media="screen, projection">
  <meta name="viewport" content="initial-scale=1.0" />
  </script>
</head>
<body id="blogPage">
  <header class="blogHeader pageHeader">
  <h1>Cupcraves<a href="/index.htm" title="home"></a></h1>
  
  <!-- Navagation Menu --> 
    @include('/layouts/nav_main') 
  </header>

  <!-- Body -->
   <div id="contentWrapper">
    <article id="mainContent">
      <h1>Cupcraves</h1>
      <article class="post">
        <section id="intro">
          <h2>Welcome!</h2>
          <p>CupCraves is focused on providing high-quality cupcakes, service and customer satisfaction - I will do everything I can to meet your expectations.</p>

          <p>With a variety of offerings to choose from, I'm sure you'll find the cupcake to suit your occasion, event or craving! If you dont see what you are looking for, send me an email or call to see if your idea can be brought to life. Have a look around the website and if you have any further comments or questions, please feel free to contact us.</p>

          <p>We hope to see you again! Check back later for new updates to our website. There's much more to come!</p>
        </section>
        <section id="gallery">
          
        </section>
        <section id="menu">
        <!-- this should be dynamic, PHP inserting what's available from the DB in here -->
        </section>
        <section id="testimonials">
          <section>
            <p>"I hired Cupcraves (Jessica) for a duel birthday cake and cupcakes on the side, the cake was moist and looked fantastic, and the cupcake had rolos on top and were so velvety smooth, they were barely staying on the table until cake time. Very professional and at her low cost price I would highly recommend her to anyone. Thank you so much Jessica."</p>
            <p>-Janice Hanson.</p>
          </section>
        </section>
      </article>
    </article>
    <!-- Sidebar --> 
  @include('/layouts/sidebar')
  <!-- Close div body -->
  </div>
  <!-- Footer -->
  @include('/layouts/footer')
</body>
</html>
