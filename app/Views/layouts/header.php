<nav class="navbar navbar-expand navbar-light bg-light fixed-top">
    <div class="container">
      <div class="collapse navbar-collapse">
        <a class="navbar-brand" href="/">Bin's Store</a>
      </div>
      <div class="" id="navbarsExample02">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link <?php if($opened == "about") echo 'active'; ?>" aria-current="page" href="/home/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($opened == "contact") echo 'active'; ?>" href="/home/contact ">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>