<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('customer') }}">Nerd Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('customer') }}">View All Nerds</a></li>
        <li><a href="{{ URL::to('customer/create') }}">Create a Nerd</a>
    </ul>
</nav>

<h1>Create a Nerd</h1>

   {!! Form::model($customer, array('url' => 'customer/store','method' => 'post'))!!}

        <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', Input::old('name'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', Input::old('email'), array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Create the Nerd!', array('class' => 'btn btn-primary')) !!}
{!! Form::close() !!}

</div>
</body>
</html>