
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MyLogApplication</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   

   
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Mylogs</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="logs.php">All Logs</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <h1>Activty</h1>

   <form action="logact.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="name" class="form-control" name="name"  id="exampleInputEmail1" placeholder="name">
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputEmail1">Lead</label>
    <input type="name" class="form-control" name="lead"  id="exampleInputEmail1" placeholder="lead">
  </div>


<div class="form-group">
    <label for="exampleInputEmail1">Thought</label>
    <input type="name" class="form-control" name="thought"  id="exampleInputEmail1" placeholder="thought">
  </div>


 <div class="form-group">
    <label for="exampleInputEmail1">Emotion</label>
    <input type="name" class="form-control" name="emotion"  id="exampleInputEmail1" placeholder="emotion">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Location</label>
    <input type="name" class="form-control" name="location"  id="exampleInputEmail1" placeholder="location">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Person</label>
    <input type="name" class="form-control" name="person"  id="exampleInputEmail1" placeholder="person">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Weather</label>
    <input type="name" class="form-control" name="weather"  id="exampleInputEmail1" placeholder="weather">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Extra</label>
    <input type="name" class="form-control" name="extra"  id="exampleInputEmail1" placeholder="extra">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="name" class="form-control" name="description"  id="exampleInputEmail1" placeholder="description">
  </div>




  
  <button type="submit" class="btn btn-default">Submit</button>
</form>


    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
