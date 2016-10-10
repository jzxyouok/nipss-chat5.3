<!-- BEGIN OFFCANVAS LEFT -->
		<div class="offcanvas">
		</div>
		<!--end .offcanvas-->
		<!-- END OFFCANVAS LEFT -->
		
		<div id="menubar" class="menubar-default">
			<div class="menubar-fixed-panel">
				<div>
					<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
						<i class="fa fa-bars"></i>
					</a>
				</div>
				<div class="expanded">
					<a href="../../html/dashboards/dashboard.html">
						<span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
					</a>
				</div>
			</div>
			<div class="menubar-scroll-panel">

				<!-- BEGIN MAIN MENU -->
				<ul id="main-menu" class="gui-controls">
					<div class="offcanvas-head">
						<header class="text-primary">Active Members</header>
					</div>
					<div class="offcanvas-body no-padding">
						<ul class="list ">
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text"><strong>A</strong></div>
								</div>
							</li>
							@foreach($participants as $participant)
								<li class="tile">
									<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
										<div class="tile-icon">
<<<<<<< HEAD
										
=======
											<img src="assets/img/avatar52dba.jpg" alt="" />
>>>>>>> 26797666d5230ed16e610fe330d2e487ed423617
										</div>
										<div class="tile-text">
											{{ $participant->name }}
											<small>{{ $participant->username }} </small>
										</div>
									</a>
								</li>
								<hr />
							@endforeach
						</ul>
					</div>
				</ul>
				<!-- END MAIN MENU -->
				
				<div class="menubar-foot-panel">
					<small class="no-linebreak hidden-folded">
							<span class="opacity-75">Copyright &copy; 2016</span> <strong>nHubNigeria</strong>
						</small>
				</div>
			</div>
			<!--end .menubar-scroll-panel-->
		</div>