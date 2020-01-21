<html>
    <head>
        <style>
            @import 'https://fonts.googleapis.com/css?family=Dosis|Roboto:300,400';
* {
	margin: 10;
	padding: 5;
}

body {
	background: #ffc185;
}

 a
{
  text-decoration: none;
  color:#9A8D78;
}
.dgme 
{
    background-color: white;
}

        
        </style>
    </head>


    <body>
         <div class="container">
    
            <div class="wrapper">
                <a class="dgme" href="{{URL::to('new')}}"> New user </a>
            </div>
            <div>
            <a class="dgme" href="{{URL::to('edit')}}"> Edit user </a>
            </div>
            <table>
                <thead>
                    <th>id </th>
                    <th>name </th>
                    <th>email</th>
                    <th>password </th>
                    <th>confirmed </th>
                    <th>role id </th>
                    <th>   </th>
                    <th> </th>
                </thead>
            

                <tbody>
            
                @foreach ($info as $key=>$v)
                    <tr>
                        <td>{{$v->id}} </td>
                        <td>{{$v->name}} </td>
                        <td>{{$v->email}} </td>
                        <td>{{$v->password}} </td>
                        <td>{{$v->confirmed}} </td>
                        <td>{{$v->role_id}} </td>
                        <td> <a href="{{URL::route('delete',array($v->id))}}">DELETE </a>    </td>
                        <td> <a href="{{URL::route('edit',array($v->id))}}"> EDIT </a> </td>
                        
                    </tr>
                @endforeach
                
                </tbody>
            </table>
            
            <a class="dgme" href="{{URL::to('todo')}}"> List of obligations </a>
                <br>
                <hr>
            <button><a class="dgme" href="{{URL::to('logout')}}"> Logout </a></button>
        </div>
    </body>


</html>