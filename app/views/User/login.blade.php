


<html>
    <head>
    
     <!-- <link rel="stylesheet" type="text/css" href="{{URL::to('public/css/login_stil.css')}}"  > -->
	
		 <style>
        @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: pink;
	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(back.jpg);
	background-size: cover;
	-webkit-filter: blur(5px);
	
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=email]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=submit], .dgme{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=submit]:hover, .dgme:hover{
	opacity: 0.8;
}

.login input[type=submit]:active, .dgme:active {
	opacity: 0.6;
}

.login input[type=email]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}

.dgme a
{
  text-decoration: none;
  color:#9A8D78;
}

    </style>
	
    </head>
     
    <body>
    <div class="body"></div>
        <div class="grad"></div>
            <div class="header">
        
                <div>Login  Form </div>
            </div>
            <br>
		
            <div class="login">
                    <form method="post" action="{{URL::to('login')}}">
						<br>
						<!-- @if($errors)
						{{$errors->first('name'),$errors->first('password'),
						 Input::old('name'), "<mark> wrong username/password </mark>"}}
						@endif -->

						<br>
						<br>
                            <input type="email" placeholder="email" id="email" name="email" value="{{ Input::old('email') }}">
							{{$errors->first('email')}}

							
						
                            <br>
                            <input type="password" placeholder="password" id="password" name="password" value="{{ Input::old('password') }}">
							{{$errors->first('password')}}
							<br> <br> 
                            <input type="submit" id="sub" value="login" name="login">
                          
                    </form>
                <button class="dgme"><a href="{{URL::to('new')}}" target='_blank'>  Or register </a> </button>  
            </div>

     </body>

</html>