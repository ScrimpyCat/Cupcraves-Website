<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Cupcraves: thanks for registering</title>
<link href="{{ asset('_css/main.css') }}" rel="stylesheet" media="screen, projection">
<meta name="viewport" content="initial-scale=1.0" />
</script>
</head>
<body id="blogPage">
<header class="blogHeader pageHeader">
  <h1>Cupcraves: Loged in<a href="/index.htm" title="home"></a></h1>
    <!-- Navagation Menu --> 
    @include('/layouts/nav_main') 
</header>
<div id="contentWrapper">
  <article id="mainContent">
    <h1>You Signed Up!</h1>
    <article class="post">
      <h2>Thanks for registering</h2>
      <p>You've registered {{ $theEmail }}.</p>
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

