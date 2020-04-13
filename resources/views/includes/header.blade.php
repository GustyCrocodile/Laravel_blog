<header class="masthead" style=" background-image: url('@yield('background')') ">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1>
            @yield('heading')
          </h1>
          <h2 class="subheading">
            @yield('description')
          </h2>
          <span class="meta">
            @yield('post-date')  
          </span>
        </div>
      </div>
    </div>
  </div>
</header>