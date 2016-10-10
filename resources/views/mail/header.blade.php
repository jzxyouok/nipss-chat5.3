
	<!-- BEGIN HEADER-->
	<header id="header">
		<div class="headerbar">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="headerbar-left">
				<ul class="header-nav header-nav-options">
					<li class="header-nav-brand">
						<div class="brand-holder">
							<a href="{{ route('home') }}">
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
					<li>
						<!-- Search form -->
						<form class="navbar-search" role="search">
							<div class="form-group">
								<input type="text" class="form-control" name="headerSearch" placeholder="Enter your keyword">
							</div>
							<button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
						</form>
					</li>
					<li class="dropdown hidden-xs">
						<button href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown" style="margin-right:10px;">
							Groups
						</button>
						<ul class="dropdown-menu animation-expand">
							<li class="dropdown-header">Select a Group</li>
							@foreach($groups as $group)
								<li>
									<a class="alert alert-callout alert-info" href="{{route('selectedgroup',['id' => $group->id])}}">
										<strong>{{ $group->group_name }}</strong>
										<br/>
										<!--<small>Testing functionality...</small>-->
									</a>
								</li>
							@endforeach
						</ul>
						<!--end .dropdown-menu -->
					</li>
				</ul>
				<!--end .header-nav-options -->
				<ul class="header-nav header-nav-profile">
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
							
							<span class="profile-info">
								{{ Auth::user()->username }}
								<small>{{ Auth::user()->name }}</small>
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
