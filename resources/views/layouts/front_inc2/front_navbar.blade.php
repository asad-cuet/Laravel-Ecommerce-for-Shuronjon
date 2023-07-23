<section id="header">
  <a href="#"><img src="{{asset('frontend/img/logo.jpg')}}" alt="logo" class="logo"></a>
  <p class="name">R 	&#38;M SHOP</p>
  <div>
    
    <ul id="navbar">
        <li>
          <a class="{{Request::is('/') ? 'active':'' }}" href="{{route('frontend2.index')}}">Home</a>
        </li>

        <li>
          <a class="{{Request::is('/shop') ? 'active':'' }}" href="{{route('frontend2.shop.view')}}">shop</a>
        </li>

        {{-- <li>
          <a class="{{Request::is('/blog') ? 'active':'' }}" href="blog.html">blog</a>
        </li>

        <li>
          <a class="{{Request::is('/about') ? 'active':'' }}" href="about.html">About</a>
        </li>

        <li>
          <a class="{{Request::is('/contact') ? 'active':'' }}" href="contact.html">Contact</a>
        </li> --}}

        <li>
          <a class="{{Request::is('/sign-in') ? 'active':'' }}" href="{{route('frontend2.signin')}}">sign in</a>
        </li>

        <li>
          <a class="{{Request::is('/sign-up') ? 'active':'' }}" href="{{route('frontend2.signup')}}">sign up</a>
        </li>

        <li>
          <a class="{{Request::is('/cart') ? 'active':'' }}" href="{{route('frontend2.cart.view')}}">
            <i class="far fa-shopping-bag"></i>
          </a>
        </li>

    </ul>
   </div>

</section>








