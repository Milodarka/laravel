
<html>
    <head>
       
    <!-- <link href="{{asset('app/views/User/todoSt.css')}}" type="text/css" rel="stylesheet"> -->

        <style>
            
* {
  box-sizing: border-box;
}


.container{
  width: 30%;
  height: 70%;
	text-align: center;
	color: 	#FA9268;
	background: #FFF8DC;
	border: 2px solid #FA9268;
  border-radius: 10px;
  float:left;
  z-index:9999px;
  margin-top: 20px;
  margin-left: 70px;
  box-sizing: border-box;
 
}

form p {
	color: red;
  margin: 0px;
  text-align: center;
}
.input_form, form {
  padding:20px 20px 20px 70px;
	width: 50%;
	height: 15px; 

}
.btn {
	height: 39px;
	background: #FFF8DC;
	color: 	#FA9268;
	border: 2px solid #FA9268;
	border-radius: 5px; 
	padding: 5px 20px;
}

table {
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    float:right;
    border: 2px solid #FA9268;
    
}

tr {
	border-bottom: 1px solid #cbcbcb;
}

th {
	font-size: 20px;
  color:#FA9268;
  margin:50px 50px;
  border: 2px solid #FA9268;
  border-radius: 5px; 
}

th, td{
	
  height: 30px;
  padding: 7px 3px 7px 3px;
  border: 1px solid #FA9268;
  text-align: center;
}

tr:hover {
  background: #E9E9E9;
}

.task {
	text-align: left;
}

.delete{
	text-align: center;
}
.delete a{
  color: rgb(245, 2, 2);
  background-color: #e7caca;
	padding: 1px 6px;
	border-radius: 3px;
	text-decoration: none;
}
button.form-btn.dx1 {
	
	
	border-radius: 0 0 5px 0;
	background-color: rgb(250, 146, 104);
  color: #fff;
  position:relative;
	top:0px;
	left:0px;
	width:30%;
	height:40px;
}
.back_btn a
{
  text-decoration: none;
  color:#FFFFF7;
}
.task_list
{
  margin-right: 90px;
}
.searchL
{
  float:right;
  margin-top:-25px;
  margin-right:120px;
  
}


.check a
{
  text-decoration: none;
  color: rgb(250, 146, 104);
}
.check a:visited
{
  color:green;
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
   
    
    
}
   

        </style>
     
    </head>

    <body>
        <div class="wrapper">
            <a href="{{URL::to('info')}}"><center> Back </center></a>
        </div> 
            <form method="post" action="{{URL::to('todo')}}" class="input_form"> 
               
                
                <label for="task_name"> Task name: </label>
                        <input type="text" id="myInput" class="task_name" name="task_name" 
                        placeholder="Task name" required>
                        <br> <br>
                        

                    <label for="date"> Date(today): </label>
                        <select class="date" type="date" name="today">
                            <option> <?php echo date('d/m/Y');?> </option>
                    </select>
                        <br> <br>
                        
                    <label> Expiry task date: </label>
                    <input  id="date" 
                    type="date" name="task_expire" required>

                        <br> <br>
                        

                    <label for="desc"> Description </label>
                        <textarea class="desc" name="description"
                         placeholder="Descibe your task" reqired> 
                        </textarea>
                        <br> <br>

                        <label for="done">Done </label>
                        <input type="checkbox" name="done" value="true">
                        <label for="done">Not done </label>
                        <input type="checkbox" name="done" value="false"checked>
                
                         <br> <br>
                         
                      
                    <?php $ses_id=User::find(base64_decode(Session::get('user_id_hash')));
                      $todo=To_do::where('user_id',$ses_id->id)->get();
                    ?>
                    
                   <input type="number" name="user_id" value={{$ses_id->id}}  hidden>
                    <br> <br>


		        <button class="btn" type="submit" name="submit" ><a href="{{URL::to('todo')}}"> Add Task </button></a>
            </form>
        </div>
    </div>
        
<div class='todoList'>
<table>
            <thead>
                <th>Task Name </th>
                <th>Date </th>
                <th>Expiry date</th>
                <th>Description </th>
                <th>Done/Not Done </th>
                
                <th> # </th>
            </thead>
          

            <tbody>
            
            @foreach ($info as $key=>$v)
                <tr>
                    <td>{{$v->task_name}} </td>
                    <td>{{$v->today}} </td>
                    <td>{{$v->task_expire}} </td>
                    <td>{{$v->description}} </td>
                    <td>{{$v->done}} </td>
                   
                    <td> <a href="{{URL::route('deleteTask',array($v->id))}}">DELETE </a></td>
                </tr>
            @endforeach
          
            </tbody>
        </table>
</div>
   



