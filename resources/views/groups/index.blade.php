@extends('groups.master')

@section('content')

<!-- BEGIN BLANK SECTION -->
	<section>
		<div class="section-header">
		   
			<ol class="breadcrumb">
				<li><a href="#">User</a></li>
				<li class="active"><a href="#">Chatroom</a></li>
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
                            <div class="chat-with">Chat with:  username </div>
                            <div class="chat-num-messages"> category </div>
                        </div>
                        <i class="fa fa-star"></i>
                    </div> <!-- end chat-header -->
                    
                    <div class="chat-history">
                        <ul>
                            <li class="clearfix">
                                <div class="message-data align-right">
                                    <span class="message-data-time" >10:10 AM, Today</span> &nbsp; &nbsp;
                                    <span class="message-data-name" >Olia</span> 
                                    <i class="fa fa-circle me"></i>
                                </div>
                                <div class="message other-message float-right">
                                    Hi Vincent, how are you? How is the project coming along?
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
                            <li class="clearfix">
                                <div class="message-data align-right">
                                    <span class="message-data-time" >10:14 AM, Today</span> &nbsp; &nbsp;
                                    <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
                                </div>
                                <div class="message other-message float-right">
                                    Well I am not sure. The rest of the team is not here yet. Maybe in an hour or so? Have you faced any problems at the last phase of the project?
                                </div>
                            </li>
                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
                                    <span class="message-data-time">10:20 AM, Today</span>
                                </div>
                                <div class="message my-message">
                                    Actually everything was fine. I'm very excited to show this to our team.
                                </div>
                            </li>
                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
                                    <span class="message-data-time">10:31 AM, Today</span>
                                </div>
                                <i class="fa fa-circle online"></i>
                                <i class="fa fa-circle online" style="color: #AED2A6"></i>
                                <i class="fa fa-circle online" style="color:#DAE9DA"></i>
                            </li>
                        </ul>
                    </div> <!-- end chat-history -->
                    <div class="chat-message clearfix">
                    <form name="form1" action="#" method="post">
                        <textarea name="message" id="message-to-send" placeholder ="Type your message" rows="3"></textarea>
                        <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
                        <i class="fa fa-file-image-o"></i>
                        
                        <button>Send</button>
                      
                      {{ csrf_field() }}
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