<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cupcraves: Home</title>

  <link href="{{ asset('_css/clearfix.css') }}" rel="stylesheet" media="screen, projection">
  <link href="{{ asset('_css/textbox.css') }}" rel="stylesheet" media="screen, projection">
  <link href="{{ asset('_css/home.css') }}" rel="stylesheet" media="screen, projection">
  <link href="{{ asset('_css/contact.css') }}" rel="stylesheet" media="screen, projection">
  <link href="{{ asset('_css/nav.css') }}" rel="stylesheet" media="screen, projection">
  <meta name="viewport" content="initial-scale=1.0" />
</head>
<body>
  <header>
    @include('/layouts/logo')
  </header>

  <!-- Body -->
  <article>
    <section>
      <div id="contact-form" class="textbox">
        <h2>Please get in touch!</h4>
        <p>Interested in our services? Get in touch with us via the form below or call us and we'll get back to you as soon as possible!</p>

        <form>
          Name: <br> <input type="text" name="name"> <br> <br>
          Email: <br> <input type="text" name="email"> <br> <br>
          Message: <br> <textarea name="message"></textarea> <br> <br>
          <input type="submit" value="Send">
        </form>
      </div>

      <div id="contact-info" class="textbox">
        <h2>CupCraves Contact Information </h4>
        <p>
          <strong>Jessica Castuera</strong> <br>
          Phone: 0468 378 721 <br>
          Email: cupcraves@outlook.com
        </p>

        <p>
          <strong>Hours of Operation</strong> <br>
          Open 24/7.
        </p>

        <p>
          <strong>Address</strong> <br>
          33 Fitzjohns Drive <br>
          Bundoora, 3083 <br>
          Victoria, Australia
        </p>
      </div>
    </section>
  </article>
</body>
</html>
