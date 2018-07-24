<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <i class="fa fa-shopping-bag fa-1x"></i>&nbsp;&nbsp;
  <a class="navbar-brand" href="{{ route('home') }}">ECommerce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('products.index') }}">Product</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a class="nav-link"><i class="fa fa-cart-plus"></i> Cart</a></li>
      <li><a class="nav-link" href="{{ route('member.index') }}">Member</a></li>
      <li>
    @auth
      <form class="form-inline my-2 my-lg-0" method="post" action="{{ route('auth.logout') }}">
        @csrf
        <button class="btn btn-primary my-2 my-sm-0" type="submit">Logout</button>
      </form>
    @endauth
  </div>
</nav>	