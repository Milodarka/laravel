<html>
    <head>
        <style>
          @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #ffc185;
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
	top: calc(30% - 75px);
	left: calc(40% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
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

.login input[type=password],.login input[type=email], .login input[type=number]{
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



.wrapper a
{
  text-decoration: none;
  color:grey;
  font-size: 18px;
}
.wrapper 
{
    background-color: white;
    padding:10px;
    margin:30px;
    float:left;
    
    
}
   
  
        </style>
    </head>


    <body>
    <div class="login">
         <div class="wrapper">
            <a href="{{URL::to('info')}}"><center> Back </center></a>
        </div> 
    <form action="{{URL::to('save')}}" method="post">
        <table>
        <tr>
           <td>
           Name
           </td>
           <td>
                <input type="text" name="name" id="name" required>
				
           </td>
        </tr>
        <tr>
           <td>
           Email
           </td>
           <td>
                <input type="email" name="email" id="email" required >
				
           </td>
        </tr>
        <tr>
           <td>
           Password
           </td>
           <td>
                <input type="text" name="password" id="password"required >
				
           </td>
        </tr>
   
         <tr>
            
           <td>
                <input type="hidden" value="1" name="confirmed" id="confirmed">
           </td>
        </tr>
        <tr>
           
           <td>
                <input type="hidden" value="1" name="role_id" id="role_id">
           </td>
        </tr>


        </table>
               <input type="submit" value="save">
     </div>
     </form>

    </body>


</html>