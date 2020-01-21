<html>
    <head>
    </head>



    <body>
    {{ Form::open (['route'=>'sessions.store'])}}
    <div>
        {{ Form::label('name', 'Name:')}}
        {{ Form::text('name')}}
    </div>
    <div>
        {{ Form::label('password', 'Password:')}}
        {{ Form::password('password')}}
    </div>
    {{ Form::close()}}

    </body>



</html>