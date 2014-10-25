<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cupcraves: Home</title>

  <link href="{{ asset('_css/clearfix.css') }}" rel="stylesheet" media="screen, projection">
  <link href="{{ asset('_css/textbox.css') }}" rel="stylesheet" media="screen, projection">
  <link href="{{ asset('_css/home.css') }}" rel="stylesheet" media="screen, projection">
  <link href="{{ asset('_css/order.css') }}" rel="stylesheet" media="screen, projection">
  <link href="{{ asset('_css/menu.css') }}" rel="stylesheet" media="screen, projection">
  <link href="{{ asset('_css/nav.css') }}" rel="stylesheet" media="screen, projection">
  <script src="{{ asset('_js/jquery-1.11.1.js') }}"></script>
  <script src="{{ asset('_js/menu.js') }}"></script>
  <script src="{{ asset('_js/order.js') }}"></script>
  <meta name="viewport" content="initial-scale=1.0" />
</head>
<body>
  <div id="cart">
    <a href="#">Checkout: $0.00</a>
  </div>

  <header>
    @include('/layouts/logo')
  </header>

  <!-- Body -->
  <article>
    <section>
      <div id="order-info" class="textbox">
        <h2>Please get in touch!</h4>
        <p>Interested in our services? Get in touch with us via the form below or call us and we'll get back to you as soon as possible!</p>

        <h2>ORDER ONLINE!</h2>
        <p>
          Here you can pick your cupcake designs and order the amount you want. Once you have placed your order, further contact will be made to you by us to confirm details.
          <br>
          <strong>If you wish to purchase 50 or more cupcakes, please contact us directly so we can organise a cheaper price for you.</strong>
        </p>

        <p>
          <u>Delivery-we drive the cakes to you!</u>
          <br>
          We offer free delivery to Epping, South Morang, Mill Park, Thomastown, Greensborough, Lalor, Mill Park Lakes, Bundoora, Preston.
          <br>
          A small fee may apply for delivery to areas outiside of these suburbs.
          <br>
          Pick up is also available.
        </p>

        <p>
          <u>Special orders</u>
          <br>
          Cant find what you want? Contact us to see if we can bring your ideas to life!
          <br>
          We also can provide Cupcake stands, wrappers, candles and other decorations. Simply contact us with your theme, and accessory request and we will get back to you with a quoted price.
        </p>
      </div>

      <section id="menu">
      <!-- this should be dynamic, PHP inserting what's available from the DB in here -->
        <ul class="clearfix">
          <li>
            <a class="menu-item">Vanilla $2.50</a>
            <div class="menu-item-description">
              <img src="_images/cupcakes/vanilla-cupcakes-frosting.jpg">
              <p>Classic vanilla cupcake with a beautiful vanilla buttercream icing.</p>
              <p>Decoration such as sprinkles, silver balls, flowers can be added if requested. Add-On price will be subject to request and quoted on enquiry.</p>
              <p>Would you like a decoration on your cake? Add-on prices upon request</p>
              <textarea name="instructions"></textarea>
              Amount: <input type="number" name="amount" min="0" value="0"> <div class="excess-order">* Please Contact Us Directly About This Order</div>
            </div>
          </li>
          <li>
            <a class="menu-item">Chocolate</a>
            <div class="menu-item-description"></div>
          </li>
          <li>
            <a class="menu-item">Red Velvet</a>
            <div class="menu-item-description"></div>
          </li>
          <li>
            <a class="menu-item">Cookies and Cream</a>
            <div class="menu-item-description"></div>
          </li>
          <li>
            <a class="menu-item">Jaffa</a>
            <div class="menu-item-description"></div>
          </li>
          <li>
            <a class="menu-item">Mocha</a>
            <div class="menu-item-description"></div>
          </li>
          <li>
            <a class="menu-item">Rolo</a>
            <div class="menu-item-description"></div>
          </li>
          <li>
            <a class="menu-item">Chocolate Sundae</a>
            <div class="menu-item-description"></div>
          </li>
          <li>
            <a class="menu-item">Graduation</a>
            <div class="menu-item-description"></div>
          </li>
          <li>
            <a class="menu-item">Cookie Monster</a>
            <div class="menu-item-description"></div>
          </li>
          <li>
            <a class="menu-item">Minni Mouse</a>
            <div class="menu-item-description"></div>
          </li>
          <li>
            <a class="menu-item">Rainbow</a>
            <div class="menu-item-description"></div>
          </li>
          <li>
            <a class="menu-item">Turtle</a>
            <div class="menu-item-description"></div>
          </li>
          <li>
            <a class="menu-item">Halloween</a>
            <div class="menu-item-description"></div>
          </li>
          <li>
            <a class="menu-item">Easter</a>
            <div class="menu-item-description"></div>
          </li>
          <li>
            <a class="menu-item">Christmas</a>
            <div class="menu-item-description"></div>
          </li>
          <li>
            <a class="menu-item">Caramel Slice</a>
            <div class="menu-item-description"></div>
          </li>
          <li>
            <a class="menu-item">ShortBread</a>
            <div class="menu-item-description"></div>
          </li>
          <li>
            <a class="menu-item">Lolly Bags</a>
            <div class="menu-item-description"></div>
          </li>
          <li><img src="_images/cupcakes/stylized/cupcake-character-eat.png"></li>
        </ul>
      </section>
    </section>
  </article>
</body>
</html>
