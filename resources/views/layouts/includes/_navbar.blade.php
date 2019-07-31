  <nav class="navbar navbar-expand-xl navbar-light bg-light" >
    <a class="navbar-brand" href="/dashboard"><img style="width:340;height:70px;" src="/images/LogoOrph.png"/></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link"  href="#" style="color: #42CCB7"><b>Profil</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="#" style="color: #42CCB7"><b>Kunjung & Undang</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: #42CCB7"><b>Relawan</b></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/karya" style="color: #42CCB7"><b>Karya </b></a>
        </li>
      
    </div>
    <ul class="nav navbar-nav navbar-right">
    	<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #42CCB7"><span>Assalamu'alaikum, {{auth()->user()->name}}</span> </a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						
	</ul>
  </nav>