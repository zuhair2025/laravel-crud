<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CRUD</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            {!! Form::open(['route'=>'crud.store','style'=>'margin-top:20px']) !!}
                {{Form::label('name','NAME:',[])}}
                {{Form::text('name',null,['class'=>'form-control'])}}
                {{Form::label('mobile','MOBILE:')}}
                {{Form::text('mobile',null,['class'=>'form-control'])}}
                {{Form::label('email','Email:')}}
                {{Form::email('email',null,['class'=>'form-control'])}}
                <br>
                {{Form::submit('SUBMIT',['class'=>'btn btn-success'])}}
                
            {!! Form::close() !!}
            </div>
            <div class="col-md-8" style="margin-top: 10px">
                <table class="table">
                    <thead>
                    <tr>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
     </body>
</html>