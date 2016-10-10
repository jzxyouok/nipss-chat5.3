@extends('participants.master')

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
<<<<<<< HEAD
                            
=======
                            <img class="img-circle img-responsive" src="assets/img/avatar52dba.jpg" alt="avatar" />
>>>>>>> 26797666d5230ed16e610fe330d2e487ed423617
                        </div>
                        <div class="col-md-9"></div>
                        <div class="chat-about">
                            <div class="chat-with">Chat with:  email </div>
                            <div class="chat-num-messages"> groupname </div>
                        </div>
                        <i class="fa fa-star"></i>
                    </div> <!-- end chat-header -->
                    
                    <div class="chat-history">
                        <ul>
                            
                                <li class="clearfix">
                                    <div class="message-data align-right">
                                        <span class="message-data-time" >10:10 AM, Today</span> &nbsp; &nbsp;
                                        <span class="message-data-name" >name</span> 
                                        <i class="fa fa-circle me"></i>
                                    </div>
                                    <div class="message other-message float-right">
                                        body
                                    </div>
                                </li>
                            
                            <li>
                                <div class="message-data">
                                    <span class="message-data-name">
                                        <i class="fa fa-circle online"></i> Vincent
                                    </span>
                                    <span class="message-data-time">10:12 AM, Today</span>
                                </div>
                                <div class="message my-message">
                                    Are we meeting today? Project has been already finished and I have results to show you.
                                </div>
                            </li>
                            
                         
                        </ul>
                    </div> <!-- end chat-history -->
                    <div class="chat-message clearfix">
                    <form name="form1" action="{{ route('massenger') }}" method="post">
                        
                        {{ csrf_field() }}

                        <textarea name="message" id="message-to-send" placeholder ="Type your message" rows="3"></textarea>
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