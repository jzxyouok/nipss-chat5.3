@extends('mail.master_mail')

@section('content')

<!-- BEGIN BLANK SECTION -->
	<section>
		<div class="section-header">
		   
			
		</div>
		<!--end .section-header -->
		<div class="section-body">
			<!-- BEGIN OFFCANVAS CHAT -->
			<div class="container clearfix">
                <div style="width:100%" class="chat">
                    <div class="chat-header clearfix">
                        <!-- <div class="col-md-9"></div> -->
                        <div class="chat-about">
                            <div class="chat-with">Compose Mail </div>
                            <div class="chat-num-messages">  </div>
                        </div>
                        <i class="fa fa-star"></i>
                    </div> <!-- end chat-header -->
                    <div class="chat-message clearfix">
                    
                    <form name="form1" action="{{ route('sendMail') }}" method="post">
                        
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