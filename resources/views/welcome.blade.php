<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Invite up to 5 people</h1>
            <form action="" method="POST" accept-charset="utf-8">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label class="control-label" for="email-1">Email:</label>
                    <input type="text" id="email-1" class="form-control" name="email[]" value="{{ old('email.0') }}">
                    @if ($errors->has('email.0'))
                    <span class="help-block">{{ $errors->first('email.0') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="email-2">Email:</label>
                    <input type="text" id="email-2" class="form-control" name="email[]" value="{{ old('email.1') }}">
                    @if ($errors->has('email.0'))
                    <span class="help-block">{{ $errors->first('email.1') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="email-3">Email:</label>
                    <input type="text" id="email-3" class="form-control" name="email[]" value="{{ old('email.3') }}">
                    @if ($errors->has('email.0'))
                    <span class="help-block">{{ $errors->first('email.2') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>
