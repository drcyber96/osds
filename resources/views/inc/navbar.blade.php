


<div class="w3-top">
  <div class="w3-bar" id="myNavbar">

    <a class="w3-bar-item w3-button w3-hover-red w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="/" class="w3-left w3-bar-item w3-padding-small w3-yellow w3-xlarge w3-wide  w3-animate-opacity "><strong>iSCAM</strong></a>
    <a href="/home" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><i class="fa fa-home"></i>{{ __('navbar.Home') }}</a>
    <a href="/about" class="w3-bar-item w3-button w3-hide-small w3-hover-yellow"><i class="fa fa-info-circle"></i> {{ __('navbar.About') }}</a>
    <a href="/customsearch" class="w3-bar-item w3-button w3-hide-small w3-hover-yellow"><i class="fa fa-search"></i>{{ __('navbar.Search Scammers') }}</a>
    <a href="/info" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><i class="fa fa-book"></i> {{ __('navbar.Info') }}</a>
    <a href="/posts" class="w3-bar-item w3-button w3-hide-small w3-hover-yellow"><i class="fa fa-commenting"></i>{{ __('navbar.Post Feedback') }} </a>
    <a href="/reportscam" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><i class="fa fa-exclamation-triangle"></i>{{ __('navbar.Reports') }} </a>







    @guest



      <a class=" w3-bar-item w3-button w3-hide-small w3-right" href="{{ route('login') }}"> <i class="fa fa-user"></i>  {{ __('navbar.Login') }}</a>
      <a class=" w3-hide-small w3-right" href="{{ url('locale/mly') }}" >  Malay</a>
      <a class=" w3-hide-small w3-right" href="{{ url('locale/en') }}" > English|</a>

    @else

    <a id="navbarDropdown" class="w3-bar-item w3-button w3-hide-small nav-link navbar-right dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <i class="fa fa-user"></i> Login As:{{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <a class=" w3-hide-small w3-right" href="{{ url('locale/mly') }}" >  Malay</a>
    <a class=" w3-hide-small w3-right" href="{{ url('locale/en') }}" > English|</a> 

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('user.edit') }}">
             {{ __('navbar.Update Profile') }}</a>

  <a class="dropdown-item" href="{{ route('logout') }}"
  onclick="event.preventDefault();
  document.getElementById('logout-form').submit();">
        {{ __('navbar.Logout') }}</a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
  </div>
  </div>
@endguest
</div>

   <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-red w3-hide w3-hide-large w3-hide-medium">
    <br><br>
      <a href="/home" class="w3-bar-item w3-button w3-hover-blue" onclick="toggleFunction()">{{ __('navbar.Home') }}</a>
    <a href="/customsearch" class="w3-bar-item w3-button w3-hover-blue" onclick="toggleFunction()">{{ __('navbar.Search Scammers') }}</a>
    <a href="/info" class="w3-bar-item w3-button w3-hover-yellow" onclick="toggleFunction()">{{ __('navbar.Info') }}</a>
    <a href="/posts" class="w3-bar-item w3-button w3-hover-blue" onclick="toggleFunction()">{{ __('navbar.Post Feedback') }}</a>
	<a href="/reportscam" class="w3-bar-item w3-button w3-hover-yellow" onclick="toggleFunction()">{{ __('navbar.Reports') }}</a>
	<a href="{{ url('locale/en') }}"  onclick="toggleFunction()"><i class="fa fa-language"></i>EN</a>
	<a href="{{ url('locale/mly') }}"  onclick="toggleFunction()"><i class="fa fa-language"></i> MLY</a>


  </div>

</div>
