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
                    {{ Form::open(['route' => 'sendmail', 'method' => 'post']) }}
                        {{ csrf_field() }}
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
                            
                            <script type="text/javascript">
                                // Listen for click on toggle checkbox
                                function make_select(){

                                    var checkboxes = document.getElementsByName('approve[]');
                                    var button = document.getElementById('toggle');

                                    if(button.value == 'select'){
                                        for (var i in checkboxes){
                                            checkboxes[i].checked = 'FALSE';
                                        }
                                        button.value = 'deselect'
                                    }else{
                                        for (var i in checkboxes){
                                            checkboxes[i].checked = '';
                                        }
                                        button.value = 'select';
                                    }
                                }

                            </script>
                                <!-- Tab panels -->
                            <div class="tab-content card">
                                <!--Panel 1-->
                                <div class="tab-pane fade in active" id="panel1" role="tabpanel">
                                    <br>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>
                                                    <fieldset class="form-group">                                                        
                                                        <input type="button" id="toggle" value="select all" onClick="make_select()" />
                                                        <!-- <label for="checkbox1">Select All</label> -->
                                                    </fieldset>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($participants as $participant)
                                                <tr>                                            
                                                    <td></td>
                                                    <td></td>
                                                    <td>{{ $participant->name }}</td>
                                                    <td>{{ $participant->username }}</td>
                                                    <td>
                                                        <fieldset class="form-group">
                                                            <!-- <input type="checkbox" name="part_mail" id="part_mail" value=""> -->
                                                            <input type="checkbox" name="approve[]" value="{{$participant->
                                                            username}}" />

                                                            <label for="part_mail"></label>
                                                        </fieldset>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- <button>Next >></button> -->
                                <!--/.Panel 1-->

                                <!--Panel 2-->
                                <div class="tab-pane fade" id="panel2" role="tabpanel">
                                    <br>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Group Name</th>
                                                <th>
                                                    <fieldset class="form-group">
                                                        <input type="checkbox" id="checkbox1">
                                                        <label for="checkbox1">Select All</label>
                                                    </fieldset>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($groups as $group)
                                                <tr>                                            
                                                    <td></td>
                                                    <td></td>
                                                    <td>{{ $group->group_name }}</td>
                                                    <td>
                                                        <fieldset class="form-group">
                                                            <input type="checkbox" id="checkbox1">
                                                            <label for="checkbox1"></label>
                                                        </fieldset>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
                                
                                <!--/.Panel 3-->

                            </div>
                        </div> <!-- end chat-history -->
                        <div class="chat-message clearfix">
                            <input name="subject" id="subject-to-send" placeholder ="Subject" style="width: 100%; border: none; padding: 10px 20px; font: 14px/22px "Lato", Arial, sans-serif; margin-bottom: 10px; border-radius: 5px; resize: none;" />

                            <textarea name="message" id="message-to-send" placeholder ="Type your message" rows="8" style="margin-top: 20px;"></textarea>
                            <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-file-image-o"></i>
                        
                            <button>Send</button>                     
                        
                    
                        </div> <!-- end chat-message -->
                    {!! Form::close() !!}
                </div> <!-- end chat -->
            </div>
			<!--end .offcanvas-pane -->
		</div>
		<!--end .section-body -->
	</section>
	<!-- BEGIN BLANK SECTION -->
@endsection