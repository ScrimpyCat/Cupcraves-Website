<!-- Side Bar -->
  <aside>
    <section class="info">
      <div class="widget">
        <ul>
          <li><a href="/register"  title="register">Register</a></li>   
          <li><a href="login"  title="login">Login</a></li>   
          @if(Auth::user())
            <li><a href="logout"  title="login">Logout</a></li> 
          @endif
        </ul>
      </div>

      <div class="widget">
        <h2>Latest Specials</h2>
        <ul>
          <li><a href="#">Chocolate Cupcake</a></li>
          <li><a href="#">Vanilla Cupcake</a></li>
          <li><a href="#">Strawberry Cupcake</a></li>
        </ul>
      </div>
      <div class="widget">
        <h2>New Cupcakes</h2>
        <ul>
          <li><a href="#">Bannana Cupcakes</a></li>
          <li><a href="#">Lemonade Cupcakes</a></li>
          <li><a href="#">Baby Cupcakes</a></li>
          <li><a href="#">Scones</a></li>
        </ul>
      </div>

       <div class="widget">
        <h2>Search</h2>
        <form>
          <input type="search" id="searchField" placeholder="Enter keyword(s)" />
          <input type="submit" name="search" id="search" value="">
        </form>
      </div>

    </section>
  </aside>
