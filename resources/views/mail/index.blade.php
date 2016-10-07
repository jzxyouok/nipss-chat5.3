@extends('mail.master')

@section('content')

<!-- BEGIN BLANK SECTION -->
	<section>
		<div class="section-header">
		   
			<ol class="breadcrumb">
				<li><a href="#">Chatroom</a></li>
				<li class="active"><a href="#">room</a></li>
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
                            <div class="chat-with">Chat with:  email </div>
                            <div class="chat-num-messages"> groupname </div>
                        </div>
                        <i class="fa fa-star"></i>
                    </div> <!-- end chat-header -->
                    
                    <div class="chat-history" style="height: 300px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tabs-3 red" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">To All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">To Group</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">To Selected</a>
                            </li>
                        </ul>

                        <!-- Tab panels -->
                        <div class="tab-content card">

                            <!--Panel 1-->
                            <div class="tab-pane fade in active" id="panel1" role="tabpanel">
                                <br>
                                @foreach ($participants as $participant)
                                    <p>{{ $participant->username }}</p>
                                @endforeach
                            </div>
                            <!-- <button>Next >></button> -->
                            <!--/.Panel 1-->

                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel2" role="tabpanel">
                                <br>

                                <p>
                                    @foreach ($groups as $group)
                                        <fieldset class="form-group">
                                            <label for="group">{{ $group->group_name }}</label>
                                            <input type="checkbox" id="group">
                                        </fieldset>
                                    @endforeach
                                </p>

                            </div>
                            <!-- <button>Next >></button> -->
                            <!--/.Panel 2-->

                            <!--Panel 3-->
                            <div class="tab-pane fade" id="panel3" role="tabpanel">
                                <br>

                                <p>
                                    @foreach ($participants as $participant)
                                        <fieldset class="form-group">
                                            <label for="checkbox1">{{ $participant->username }}</label>
                                            <input type="checkbox" id="checkbox1">
                                        </fieldset>
                                    @endforeach
                                </p>

                            </div>
                            <!-- <a href="{{ route('create-mail') }}" >Next >></a> -->
                            <!--/.Panel 3-->

                        </div>
                    </div> <!-- end chat-history -->
                    <div class="chat-message clearfix">
                    <form name="form1" action="#" method="post">
                        
                        {{ csrf_field() }}

                        <input name="subject" id="subject-to-send" placeholder ="Subject" style="width: 100%; border: none; padding: 10px 20px; font: 14px/22px "Lato", Arial, sans-serif; margin-bottom: 10px; border-radius: 5px; resize: none;" />

                        <textarea name="message" id="message-to-send" placeholder ="Type your message" rows="8" style="margin-top: 20px;"></textarea>
                        <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
                        <i class="fa fa-file-image-o"></i>
                        
                        <button>Send</button>                     
                        
                    </form>
                    </div> <!-- end chat-message -->
                </div> <!-- end chat -->
            </div>
			<!--end .offcanvas-pane -->
		</div>
		<!--end .section-body -->
	</section>
	<!-- BEGIN BLANK SECTION -->
@endsection