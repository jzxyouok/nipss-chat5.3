@extends('general.master')

@section('content')

<!-- BEGIN BLANK SECTION -->
	<section>
		<div class="section-header">
		   
			<ol class="breadcrumb">
				<li><a href="#">NIPSS</a></li>
				<li class="active"><a href="#">Welcome</a></li>
			</ol>
		</div>
		<!--end .section-header -->
		<div class="section-body">
			<!-- BEGIN OFFCANVAS CHAT -->
			<div class="container clearfix">
                <div style="width:100%" class="chat">
                    <div class="chat-header clearfix">
                        <div class="chat-about">
                            <div class="chat-with">All Members </div>
                            <!-- <div class="chat-num-messages"> groupname </div> -->
                        </div>
                        <i class="fa fa-star"></i>
                    </div> <!-- end chat-header -->
                    
                    <div class="chat-history">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email Address</th>
                                    <th>Phone</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($participants as $participant)            
                                
                                <tr>
                                    <th scope="row">*</th>
                                    <td>{{ $participant->name }}</td>
                                    <td>{{ $participant->username }}</td>
                                    <td>0000</td>
                                    
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div> <!-- end chat-history -->
                    
                </div> <!-- end chat -->
            </div>
			<!--end .offcanvas-pane -->
		</div>
		<!--end .section-body -->
	</section>
	<!-- BEGIN BLANK SECTION -->
@endsection