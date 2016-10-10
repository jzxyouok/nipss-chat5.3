@extends('groups.master')

@section('content')
    <style type="text/css">
        
        body {
  margin: 0;
  font-family: 'Roboto';
  font-size: 14px;
  /*background: #455A64;*/
}

h3 {
  color: #fff;
  font-size: 24px;
  text-align: center;
  margin-top: 30px;
  padding-bottom: 30px;
  border-bottom: 1px solid #eee;
  margin-bottom: 30px;
  font-weight: 300;
}

.container {
  max-width: 970px;
}

div[class*='col-'] {
  padding: 0 30px;
}

.wrap {
  box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
  border-radius: 4px;
}

a:focus,
a:hover,
a:active {
  outline: 0;
  text-decoration: none;
}

.panel {
  border-width: 0 0 1px 0;
  border-style: solid;
  border-color: #fff;
  background: none;
  box-shadow: none;
}

.panel:last-child {
  border-bottom: none;
}

.panel-group > .panel:first-child .panel-heading {
  border-radius: 4px 4px 0 0;
}

.panel-group .panel {
  border-radius: 0;
}

.panel-group .panel + .panel {
  margin-top: 0;
}

.panel-heading {
  background-color: #009688;
  border-radius: 0;
  border: none;
  color: #fff;
  padding: 0;
}

.panel-title a {
  display: block;
  color: #fff;
  padding: 15px;
  position: relative;
  font-size: 16px;
  font-weight: 400;
}

.panel-body {
  background: #fff;
}

.panel:last-child .panel-body {
  border-radius: 0 0 4px 4px;
}

.panel:last-child .panel-heading {
  border-radius: 0 0 4px 4px;
  transition: border-radius 0.3s linear 0.2s;
}

.panel:last-child .panel-heading.active {
  border-radius: 0;
  transition: border-radius linear 0s;
}
/* #bs-collapse icon scale option */

.panel-heading a:before {
  content: '\e146';
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  font-size: 24px;
  transition: all 0.5s;
  transform: scale(1);
}

.panel-heading.active a:before {
  content: ' ';
  transition: all 0.5s;
  transform: scale(0);
}

#bs-collapse .panel-heading a:after {
  content: ' ';
  font-size: 24px;
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  transform: scale(0);
  transition: all 0.5s;
}

#bs-collapse .panel-heading.active a:after {
  content: '\e909';
  transform: scale(1);
  transition: all 0.5s;
}
/* #accordion rotate icon option */

#accordion .panel-heading a:before {
  content: '\e316';
  font-size: 24px;
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  transform: rotate(180deg);
  transition: all 0.5s;
}

#accordion .panel-heading.active a:before {
  transform: rotate(0deg);
  transition: all 0.5s;
}
    </style>

<!-- BEGIN BLANK SECTION -->
	<section>
		<div class="section-header">
		   
			<ol class="breadcrumb">
				<li><a href="#">Chatroom</a></li>
				<li class="active"><a href="#">Groups</a></li>
			</ol>
		</div>
		<!--end .section-header -->
		<div class="section-body">
			<!-- BEGIN OFFCANVAS CHAT -->
			<div class="container clearfix">
                <div style="width:100%" class="chat">
                    <div class="chat-header clearfix">
                        <div class="col-md-2">
                            <img class="img-circle img-responsive" src="assets/img/avatar52dba.jpg" alt="avatar" />
                        </div>
                        <div class="col-md-9"></div>
                        <div class="chat-about">
                            <div class="chat-with">Chat with:   </div>
                            <div class="chat-num-messages"> {{ Auth::user()->group_name }} </div>
                        </div>
                        <i class="fa fa-star"></i>
                    </div> <!-- end chat-header -->
                    
                    <div class="chat-history">
                        <!-- <div class="container"> -->
                            <div class="col-md-12 col-sm-12">
                                <!-- <h3>Accordion collapse with rotating icon</h3> -->
                                <div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">
                                  
                                  <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                      <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Group #1
                                    </a>
                                  </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                      <div class="panel-body">
                                        <ul>
                                            @foreach($participants as $participant)
                                                <li>{{$participant->name}}</li>
                                            @endforeach
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- end of panel -->

                                  
                                  <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                      <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Group #2
                                    </a>
                                  </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                      <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                      </div>
                                    </div>
                                  </div>
                                  <!-- end of panel -->

                                  <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                      <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      Group #3
                                    </a>
                                  </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                      <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                      </div>
                                    </div>
                                  </div>
                                  <!-- end of panel -->

                                  <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                      <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                      Group #4
                                    </a>
                                  </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                      <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                      </div>
                                    </div>
                                  </div>
                                  <!-- end of panel -->

                                </div>
                                <!-- end of #accordion -->

                              </div>
                              <!-- end of wrap -->

                            <!-- </div> -->
                            <!-- end of container -->
                    </div> <!-- end chat-history -->
                    <div class="chat-message clearfix">
                     

                    </div> <!-- end chat-message -->
                </div> <!-- end chat -->
            </div>
			<!--end .offcanvas-pane -->
		</div>
		<!--end .section-body -->
	</section>
	<!-- BEGIN BLANK SECTION -->

    <script type="text/javascript">
        
        $(document).ready(function() {
          $('.collapse.in').prev('.panel-heading').addClass('active');
          $('#accordion, #bs-collapse')
            .on('show.bs.collapse', function(a) {
              $(a.target).prev('.panel-heading').addClass('active');
            })
            .on('hide.bs.collapse', function(a) {
              $(a.target).prev('.panel-heading').removeClass('active');
            });
        });

    </script>

@endsection