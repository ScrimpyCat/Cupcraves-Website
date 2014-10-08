<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Roux Academy: Registration</title>
<link href="{{ asset('_css/main.css') }}" rel="stylesheet" media="screen, projection">
<meta name="viewport" content="initial-scale=1.0" />
</script>
</head>
<body id="blogPage">
<header class="blogHeader pageHeader">
  <h1>Roux Academy of Art and Design<a href="/index.htm" title="home"></a></h1>
   @include('/layouts/nav_main') 
</header>
<div id="contentWrapper">
  <article id="mainContent">
    <h1>Log In</h1>
    <article class="post">
      {{ Form::open(array('url' => 'login')) }}

        {{ Form::label('email', 'Email Address') }}
        {{ Form::text('email') }}

        {{ Form::label('username', 'Username') }}
        {{ Form::text('username') }}

        {{ Form::label('password', 'Password') }}
        {{ Form::text('password') }}

        {{ Form::submit('Log in') }}

      {{ Form::close() }}     
</article>
  </article>
    @include('/layouts/sidebar')
</div>
  @include('/layouts/footer')
</body>
</html>
