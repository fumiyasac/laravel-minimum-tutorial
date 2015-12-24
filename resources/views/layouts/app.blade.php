<!DOCTYPE HTML>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>My Christmas Dinner List</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body style="padding-top:50px;" role="document">
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">    
      <div class="navbar-header">
        <a class="navbar-brand" href="/">My Christmas Dinner List</a>
      </div>
    </div>
  </div>  
  <div class="container">
    @yield('content')
  </div>
  <hr>
    <footer class="footer">
      <div class="container">
        <p>Copyright &copy; 2015 just1factory All Rights Reserverd.</p>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
