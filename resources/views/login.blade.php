<!doctype html>
<html>

<head>
    <title>Login</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css' />
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/materialadmin.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/material-design-iconic-font.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/toastr.css" />
    <link href="assets/css/ncss.css" rel="stylesheet">
    <style>
        .profile-info small{
            color: darkgreen!important;
            font-weight: bold;
            opacity: 1!important
        }
        .active .gui-icon {
            background-color:darkgreen!important;
            color: white!important
        }.active .gui-icon i{
            color: white!important;
            background-color: darkgreen!important                
        }
        .gui-controls li.active > a .title {
            color: darkgreen!important
        }
        a .title:hover{
            color: darkgreen!important
        }
        .breadcrumb .active{
            color: black
        }
        .text-primary{
            color: darkgreen!important
        }
        i:hover{
            color: darkgreen!important;
        }
    </style>
</head>
<body>
    <div id="container" class="container-fluid">
        <div class="row-fluid">
            <div id="full" class="col-md-6 col-md-offset-1 col-xs-12 col-sm-12">
                <div class="col-md-3 col-xs-3">
                    <img class="img-responsive" src="assets/img/nipss.png">
                </div>
                <div class="col-md-5 col-xs-5">
                    <h2 style="color:darkgreen;padding-top:10%"><b>NATIONAL INSTITUTE FOR POLICY AND STRATEGIC STUDIES, KURU</b></h2>
                </div>
                           
                <div class="col-md-12 col-xs-12">
                    <h1 id="pre" style="color:white;font-family: GillSans, Calibri, Trebuchet, sans-serif">
                    <p id="pre">
                        To bring together all kinds of Nigerians via workshop, seminars and other action orientated courses, studies and conferences to analyze and exchange views as to long-term national goals.
                    </p>
                    </h1>
                </div>
                            
            </div>
            <div id="form" class="col-md-4 col-xs-12 col-sm-12">
                <div class="col-md-12">
                    <div style="color:darkgreen" id="err"></div>
                    <div style="background-color:#cdcdcd;border: 2px solid #c4c4c4c4" class="jumbotron">
                        <h2 style="color:darkgreen">Login</h2>
                        <form class="form" role="form" action="{{ route('getFuckingIn') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group floating-label">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user fa-lg"></span></span>
                                    <div class="input-group-content{{ $errors->has('email') ? ' has-error' : '' }}">
                                        
                                        <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email">
                                        <label for="email">Username</label>
                                        
                                        @if ($errors->has('email'))
                                            <div class="card-panel">
                                                <span class="red-text text-darken-2">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            </div>
                                            
                                        @endif
                                        
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group floating-label">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock fa-lg"></span></span>
                                    <div class="input-group-content{{ $errors->has('password') ? ' has-error' : '' }}">
                                        
                                        <input type="password" name="password" class="form-control" id="password">
                                        <label for="password">Password</label>
                                        
                                        @if ($errors->has('password'))
                                            <div class="card-panel">
                                                <span class="red-text text-darken-2">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            </div>
                                        @endif 
                                    </div>
                                </div>
                            </div>
                 
                            <div id="a" class="md-form form-group" style="width:100%">
                                <button class="btn btn-default btn-rounded">Login</button> 
                                
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                
                                <a style="color: darkgreen; vertical-align: middle; margin-left: 1%" href="#">
                                    forgot password?
                                </a>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-1.11.2.min.js"></script>
    <script src="assets/js/toastr.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/spin.min.js"></script>
    <script src="assets/js/jquery.autosize.min.js"></script>
    <script src="assets/js/jquery.nanoscroller.min.js"></script>
    <script src="assets/js/App.js"></script>
    <script src="assets/js/AppNavigation.js"></script>
    <script src="assets/js/AppOffcanvas.js"></script>
    <script src="assets/js/AppCard.js"></script>
    <script src="assets/js/AppForm.js"></script>
    <script src="assets/js/AppNavSearch.js"></script>
    <script src="assets/js/AppVendor.js"></script>
    <script src="assets/js/Demo.js"></script>
</body>

</html>