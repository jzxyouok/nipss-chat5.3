
	<!-- BEGIN HEADER-->
	<header id="header">
		<div class="headerbar">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="headerbar-left">
				<ul class="header-nav header-nav-options">
					<li class="header-nav-brand">
						<div class="brand-holder">
							<a href="/home">
								<div id="a1">
									<span class="text-lg text-bold text-primary"><img src="{{ asset('assets/img/nipss.png') }}"><h5 style="color:darkgreen; display:inline; width:10%;"><p style="color:darkgreen; display:inline;"><b>NIPSS, KURU</b></p></h5></span>
								</div>
								<div id="a2">
									<span class="text-lg text-bold text-primary"><img src="{{ asset('assets/img/nipss.png') }}"><h5 style="color:darkgreen; display:inline; width:10%;"><p style="color:darkgreen; display:inline;"><b>NATIONAL INSTITUTE FOR POLICY AND STRATEGIC STUDIES, KURU</b></p></h5></span>
								</div>
							</a>
						</div>
					</li>
					<li>
						<a id="a1" class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="headerbar-right">
				<ul class="header-nav header-nav-options">
					<li class="dropdown hidden-xs">
						<button href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown" style="margin-right:10px;">
							Groups
						</button>
						<ul class="dropdown-menu animation-expand">
							<li class="dropdown-header">Select a Group</li>
							<li>
								<a class="alert alert-callout alert-info" href="/group/1">
									<!--<img class="pull-right img-circle dropdown-avatar" src="{{ asset('assets/img/avatar52dba.jpg') }}" alt="" />-->
									<strong>Chat Group One</strong>
									<br/>
									<!--<small>Testing functionality...</small>-->
								</a>
							</li>
							<li>
								<a class="alert alert-callout alert-info" href="/group/2">
									<!--<img class="pull-right img-circle dropdown-avatar" src="../../assets/img/avatar3.jpg?1404026799" alt="" />-->
									<strong>Chat Group Two</strong>
									<br/>
									<!--<small>Reviewing last changes...</small>-->
								</a>
							</li>
							
							<li>
								<a class="alert alert-callout alert-info" href="/group/3">
									<!--<img class="pull-right img-circle dropdown-avatar" src="../../assets/img/avatar3.jpg?1404026799" alt="" />-->
									<strong>Chat Group Three</strong>
									<br/>
									<!--<small>Reviewing last changes...</small>-->
								</a>
							</li>
							<li>
								<a class="alert alert-callout alert-info" href="/group/4">
									<!--<img class="pull-right img-circle dropdown-avatar" src="../../assets/img/avatar3.jpg?1404026799" alt="" />-->
									<strong> Chat Group Four</strong>
									<br/>
									<!--<small>Reviewing last changes...</small>-->
								</a>
							</li>
							<li>
								<a class="alert alert-callout alert-info" href="/group/5">
									<!--<img class="pull-right img-circle dropdown-avatar" src="../../assets/img/avatar3.jpg?1404026799" alt="" />-->
									<strong> Chat Group Five </strong>
									<br/>
									<!--<small>Reviewing last changes...</small>-->
								</a>
							</li>
							<li class="dropdown-header">Options</li>
							<li><a href="#">View all Chat Groups <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
							<!--<li><a href="../../html/pages/login.html">Mark as read <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>-->
						</ul>
						<!--end .dropdown-menu -->
					</li>
				</ul>
				<!--end .header-nav-options -->
				<ul class="header-nav header-nav-profile">
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
							<img src="{{ asset('assets/img/avatar52dba.jpg') }}" alt="" />
							<span class="profile-info">
								email
								<small>name</small>
							</span>
						</a>
						<ul class="dropdown-menu animation-dock">
							<li class="dropdown-header">Config</li>
							<li><a href="/profile">My profile</a></li>
							<li><a href="#">Inbox <span class="badge style-danger pull-right">16</span></a></li>
							<li><a href="/mail/create-mail">Send an E-Mail <span class="badge style-danger pull-right">5</span></a></li>
							<li class="divider"></li>
							<!--<li><a href="../../html/pages/locked.html"><i class="fa fa-fw fa-lock"></i> Lock</a></li>-->
							<li>
								<!--<a href="/logout"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a>-->
								<a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
									<i class="fa fa-fw fa-power-off text-danger"></i>
                                        Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
							</li>
						</ul>
						<!--end .dropdown-menu -->
					</li>
					<!--end .dropdown -->
				</ul>
				<!--end .header-nav-toggle -->
			</div>
			<!--end #header-navbar-collapse -->
		</div>
	</header>
	<!-- END HEADER-->
