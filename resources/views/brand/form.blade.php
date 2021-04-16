@extends('master')
@section('page')
<h1> Hello Madafaka</h1>



<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Modal AJAX Signup Form with Validations</title>
    <meta name="description" content="Signup form in Boostrap Modal Popup with jQuery validations and AJAX form submit that returns JSON response." />

    <!-- Bootstrap CSS -->
    <link href="{{asset('modal')}}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('modal')}}/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{asset('modal')}}/css/custom.css" rel="stylesheet" />
	<link href="{{asset('modal')}}/css/open-iconic-bootstrap.min.css" rel="stylesheet" />
	<link href="{{asset('modal')}}/css/styles.css" rel="stylesheet" />
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-47923629-1', 'gigagit.com');
      ga('send', 'pageview');

    </script>
</head>
<body>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Modal AJAX Signup Form with Validations</h1>
            <p class="lead">Signup form in Bootstrap Modal Popup with jQuery validations and AJAX form submit that returns JSON response.</p>
            <hr class="my-4" />
            <p>It uses Bootstrap 4 framework for responsive layout, modal popup, jQuery validations, submits form using AJAX callback method.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="https://www.gigagit.com/item/bootstrap-modal-popup-signup-form-with-validations" role="button">Learn more</a>
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 text-center align-self-center">
                <p>Click on 'SIGNUP' to open signup popup form.</p>
                <!-- Toggle button to open Modal Signup Popup Form -->
                <a href="#_" class="btn btn-primary" data-toggle="modal" data-target="#modal_signup">SIGNUP</a>
            </div>
            <div class="col-sm-6 text-center align-self-center">
                <h6>Result</h6>
                <div id="modal_signup_result">
                    <div class="alert">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Modal Signup Popup Form -->
    <div class="modal fade" id="modal_signup" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form id="modal_form_signup" novalidate="novalidate">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <i class="fa fa-lock mr-1"></i>SIGNUP
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="modal_signup_firstname">First Name</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input type="text" id="modal_signup_firstname" name="modal_signup_firstname" class="form-control" placeholder="First Name" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="modal_signup_lastname">Last Name</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input type="text" id="modal_signup_lastname" name="modal_signup_lastname" class="form-control" placeholder="Last Name" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="modal_signup_email">Email address</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <input type="email" id="modal_signup_email" name="modal_signup_email" class="form-control" placeholder="Enter email" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="modal_signup_password">Password</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-unlock-alt"></i>
                                </span>
                                <input type="password" id="modal_signup_password" name="modal_signup_password" class="form-control" placeholder="Password" />
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="modal_signup_confirm_password">Confirm Password</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-unlock-alt"></i>
                                </span>
                                <input type="password" id="modal_signup_confirm_password" name="modal_signup_confirm_password" class="form-control" placeholder="Confirm Password" />
                            </div>
                        </div>    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-primary">SIGN-UP</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <footer class="footer">
        <div class="container">
            &copy; 2019 <a href="https://www.gigagit.com">gigagit.com</a>. All rights reserved.
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('modal')}}/js/jquery-3.2.1.min.js"></script>
    <script src="{{asset('modal')}}/js/popper.min.js"></script>
    <script src="{{asset('modal')}}/js/bootstrap.min.js"></script>
	<script src="{{asset('modal')}}/js/plugins/jquery-validation/jquery.validate.min.js"></script>
	<script src="{{asset('modal')}}/js/app.js"></script>
</body>
</html>




@stop