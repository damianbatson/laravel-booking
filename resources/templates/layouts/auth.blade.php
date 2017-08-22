<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap core CSS -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> -->
        <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> -->
        <link rel="stylesheet" type="text/css" href="/css/app.css">

  </head>

  <body>

    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          {!! HTML::link('/', 'Gym Buddy', array('class' => 'navbar-brand')) !!}
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>{!! HTML::link('auth/login', 'Login') !!}</li>
            <li>{!! HTML::link('auth/register', 'Register') !!}</li>
            <li>{!! HTML::link('logout', 'Logout') !!}</li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    

        @yield('content')
    

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
    {!! HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js')!!}
    {!! HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js')!!}
    {!! HTML::script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js')!!}
    {!! HTML::script('app/lib/js/omni.script.json.js')!!}
  </body>
</html>