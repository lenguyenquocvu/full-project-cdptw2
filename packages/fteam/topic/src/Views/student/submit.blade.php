<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submit</title>
    <style>
        .imagePreview {
          width: 100%;
          height: 100%;
          background-position: center center;
          background-size: cover;
          -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
          display: inline-block;
        }
        .form-submit{
            text-align: center;
        }
    </style>
</head>
<body>
    Students submit projects in at hear!<br>
    <div class="form-submit">
        {!! Form::open(['route' => ['submit-up'], 'files' => true]) !!}
        
        {!! Form::textarea('imagePreview') !!}
        <br>
        {!! Form::file('file') !!} 

        {!! Form::submit('Submit') !!}

        {!! Form::close() !!}
    </div>
</body>
</html>