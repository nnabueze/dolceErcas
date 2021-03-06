<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Modern Business - Start Bootstrap Template</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">


        <!-- Custom CSS -->
        <link href="{{ asset('css/modern-business.css')}}" rel="stylesheet">
        <link href="{{ asset('css/style1.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body class="body-colour">
        
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src='{{ asset('image/logo.png')}}' height="80" width="120" /></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{action('RegisterController@index')}}">Home</a>
                        </li>
                        <li>
                            <a href="services.html">About</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                        <?php if(Session::get('key')):?>
                        <li>
                            <a href="{{action('RegisterController@logout')}}">Logout</a>
                        </li>
                        <?php else:?>
                        <li>
                            <a href="{{action('RegisterController@show')}}">Register</a>
                        </li>
                        <?php endif;?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    <!-- Page Content -->
    <div style="height: 50px;"></div>
        <!-- Header Carousel -->
        <div class="container body-colour1">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Form
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Form</li>
                </ol>
            </div>
        </div>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1 class="text-center">Registration Form</h1>
    </div>
</div><!----End of 1st div --->
<br />
<div class="row">
    <div class="col-md-12">
        @include('errors.error')
        @include('include.message')
        @if( ! Session::has('message'))
    </div>
</div>
<br />
<div class="row">
    {!! Form::open(['action'=>'RegisterController@store','role'=>'form']) !!}
    <div class="col-md-6 ">
        <div class="form-group">
            {!! Form::label('surname','Surname:')!!}
            {!! Form::text('surname',null,['class'=>'form-control','placeholder'=>'Please enter surname']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('first_name','First Name:')!!}
            {!! Form::text('first_name',null,['class'=>'form-control','placeholder'=>'Please enter first name']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('date of birth','Date of Birth:')!!}
            {!! Form::text('date_of_birth',null,['class'=>'form-control','placeholder'=>'Year/Month/Day']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('place_of_birth','Place of Birth:')!!}
            {!! Form::text('place_of_birth',null,['class'=>'form-control','placeholder'=>'Please enter place of birth']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('state_of_birth','State of Origin:')!!}
            <select name="state_of_birth" class="form-control">
                <option>Select State of Origin</option>
                <option value="ABUJA FCT">ABUJA FCT</option>
                <option value="ABIA">ABIA</option>
                <option value="ADAMAWA">ADAMAWA</option>
                <option value="AKWA IBOM">AKWA IBOM</option>
                <option value="ANAMBRA">ANAMBRA</option>
                <option value="BAUCHI">BAUCHI</option>
                <option value="BAYELSA">BAYELSA</option>
                <option value="BENUE">BENUE</option>
                <option value="BORNO">BORNO</option>
                <option value="CROSS RIVER">CROSS RIVER</option>
                <option value="DELTA">DELTA</option>
                <option value="EBONYI">EBONYI</option>
                <option value="EDO">EDO</option>
                <option value="EKITI">EKITI</option>
                <option value="ENUGU">ENUGU</option>
                <option value="GOMBE">GOMBE</option>
                <option value="IMO">IMO</option>
                <option value="JIGAWA">JIGAWA</option>
                <option value="KADUNA">KADUNA</option>
                <option value="KANO">KANO</option>
                <option value="KATSINA">KATSINA</option>
                <option value="KEBBI">KEBBI</option>
                <option value="KOGI">KOGI</option>
                <option value="KWARA">KWARA</option>
                <option value="LAGOS">LAGOS</option>
                <option value="NASSARAWA">NASSARAWA</option>
                <option value="NIGER">NIGER</option>
                <option value="OGUN">OGUN</option>
                <option value="ONDO">ONDO</option>
                <option value="OSUN">OSUN</option>
                <option value="OYO">OYO</option>
                <option value="PLATEAU">PLATEAU</option>
                <option value="RIVERS">RIVERS</option>
                <option value="SOKOTO">SOKOTO</option>
                <option value="TARABA">TARABA</option>
                <option value="YOBE">YOBE</option>
                <option value="ZAMFARA">ZAMFARA</option>
            </select>
        </div>

        <div class="form-group">
            {!! Form::label('contact_address','Contact Address:')!!}
            {!! Form::textarea('contact_address',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Email Address:')!!}
            {!! Form::email('email',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('contact_phone','Contact Phone:')!!}
            {!! Form::text('contact_phone',null,['class'=>'form-control','']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('BBM_pin','BBM pin:')!!}
            {!! Form::text('BBM_pin',null,['class'=>'form-control','']) !!}
        </div><!--- end of part 1--->



        <div class="form-group">
            {!! Form::label('complexion','Complexion:')!!}
            {!! Form::text('complexion',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('hair_colour','Hair Colour:')!!}
            {!! Form::text('hair_colour',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('eye_colour','Eye Colour:')!!}
            {!! Form::text('eye_colour',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('height','Height:')!!}
            {!! Form::text('height',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('weight','Weight:')!!}
            {!! Form::text('weight',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('burst','Burst:')!!}
            {!! Form::text('burst',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('waist','Waist:')!!}
            {!! Form::text('waist',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('hips','Hips:')!!}
            {!! Form::text('hips',null,['class'=>'form-control','']) !!}
        </div><!--- End of part 2--->




        <div class="form-group">
            {!! Form::label('occupation','Occupation:')!!}
            {!! Form::text('occupation',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('student','If Student, Where?:')!!}
            {!! Form::text('student',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('course_of_study','Course of Study, Dept/Level:')!!}
            {!! Form::text('course_of_study',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('working_as','Working As:')!!}
            {!! Form::text('working_as',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('religion','Religion:')!!}
            {!! Form::text('religion',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('language_speaking','Language Speaking:')!!}
            <select name="language_speaking" class="form-control">
                <option>Select language speaking</option>
                <option value="English">English</option>
                <option value="Igbo">Igbo</option>
                <option value="Yoruba">Yoruba</option>
                <option value="Hausa">Hausa</option>
            </select>
        </div><!--- end of part 3 --->

        <div class="form-group">
            {!! Form::label('describe_yourself','Briefly Describe Yourself:') !!}
            {!! Form::textarea('describe_yourself',null,['class'=>'form-control','']) !!}
        </div>





    </div>
    <!----- end of first part of the form--->


    <div class="col-md-6 ">
        <div class="form-group">
            {!! Form::label('pagent','Have you participated in any beauty pagent? if yes, State pagent and year:')!!}
            {!! Form::text('pagent',null,['class'=>'form-control','']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('hobbies','Hobbies:')!!}
            {!! Form::text('hobbies',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('best_dish','Best Dish:')!!}
            {!! Form::text('best_dish',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role_model','Who is your Role Model:')!!}
            {!! Form::text('role_model',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('why_model','Why?:')!!}
            {!! Form::text('why_model',null,['class'=>'form-control','']) !!}
        </div><!--- end of part 4--->

        <div class="form-group">
            {!! Form::label('favourite_colour','Favourite Colour:')!!}
            {!! Form::text('favourite_colour',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('favourite_outfit','Favourite Outfit:')!!}
            {!! Form::text('favourite_outfit',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('favourite_book','Favourite Book:')!!}
            {!! Form::text('favourite_book',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('favourite_author','Favourite Author:')!!}
            {!! Form::text('favourite_author',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('favourite_movie','Favourite Movie:')!!}
            {!! Form::text('favourite_movie',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('favourite_actor','Favourite Actor/Actress:')!!}
            {!! Form::text('favourite_actor',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('favourite_music','Favourite Type of Music:')!!}
            {!! Form::text('favourite_music',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('favourite_musician','Favourite Musician:')!!}
            {!! Form::text('favourite_musician',null,['class'=>'form-control','']) !!}
        </div><!--- end of part 5--->


        <div class="form-group">
            {!! Form::label('pagent_reason','Why did you enter for this pagent?:')!!}
            {!! Form::textarea('pagent_reason',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('contestant','If you ara a judge, what will you ask the contestant:')!!}
            {!! Form::text('contestant',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('win_pagent','Why do you think you can win this pagent?:')!!}
            {!! Form::textarea('win_pagent',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('hiv','What is your opinion about people leaving with HIV/AIDS?:')!!}
            {!! Form::textarea('hiv',null,['class'=>'form-control','']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('child_abuse','What is your opinion about Child labour, Woman trafficking and Child abuse?:')!!}
            {!! Form::textarea('child_abuse',null,['class'=>'form-control','']) !!}
        </div><!--- end of part 6---->
        <button type="submit" name="submit" class="btn btn-default">Register</button>

    </div><!----- end of second part of the form--->
    {!! Form::close()!!}
</div><!--- End of second row -->
@endif
 <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
