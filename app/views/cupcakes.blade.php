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
      <h1> Cupcakes</h1>
      <article class="post">
      
      </article>
    </article>
  
    <!-- Sidebar --> 
    @include('/layouts/sidebar')

  <!-- Close div body -->
  </div>
      
    </article>
  </article>


  <!-- Footer -->
  @include('/layouts/footer')
</body>
</html>
