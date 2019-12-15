
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">

    <a class="w3-bar-item w3-button w3-hover-red w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <h1> <a class="navbar-brand1 logo1" href="/admin">iSCAM</a></h1>
    <a href="/admin" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><i class="fa fa-home"></i>Home</a>
    <a href="/manage_scammer" class="w3-bar-item w3-button w3-hide-small w3-hover-yellow"><i class="fa fa-th"></i>Manage Scammers</a>
    <a href="/posts/admin-index" class="w3-bar-item w3-button w3-hide-small w3-hover-yellow"><i class="fa fa-commenting"></i> Manage Feedback</a>
    <a href="/manage_report" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><i class="fa fa-exclamation-triangle"></i> Manage Reports</a>


    @guest
      <a class=" w3-bar-item w3-button w3-hide-small w3-right" href="{{ route('admin.login.submit') }}">
    @else
    <a id="navbarDropdown" class="w3-bar-item w3-button w3-hide-small nav-link navbar-right dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <i class="fa fa-user"></i>  {{ Auth::user()->name }} <span class="caret"></span>
    </a>
    <a class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
       document.getElementById('logout-form').submit();">
             {{ __('Logout') }}</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
  </div>

@endguest

</div>

   <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-red w3-hide w3-hide-large w3-hide-medium">
      <a href="/admin" class="w3-bar-item w3-button w3-hover-blue" onclick="toggleFunction()">Home</a>
    <a href="/manage_scammer" class="w3-bar-item w3-button w3-hover-blue" onclick="toggleFunction()">Manage Scammers</a>
	<a href="/posts/admin-index" class="w3-bar-item w3-button w3-hover-yellow" onclick="toggleFunction()">Manage Feedback</a>
	<a href="/manage_report" class="w3-bar-item w3-button w3-hover-blue" onclick="toggleFunction()"> Manage Reports</a>



  </div>

</div>
