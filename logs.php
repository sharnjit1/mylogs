
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
      
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <h1>Logs</h1>
<table class="table table-inverse">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Lead</th>
      <th>Thought</th>
      <th>Emotion</th>
     <th>Location</th>
     <th>Person</th>
     <th>Weather</th>
     <th>Extra</th>
     <th>Description</th>
     <th>Date _ Time</th>




    </tr>
  </thead>
     <?php
$servername = "mysql11.000webhost.com";
$username = "a8484588_s";
$password = "a111111";
$dbname = "a8484588_s";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connectionss
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM logs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>


  <tbody>
    <tr>
      <th scope="row"><?php echo $row["id"]; ?></th>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["lead"]; ?></td>
      <td><?php echo $row["thought"]; ?></td>
      <td><?php echo $row["emotion"]; ?></td>
      <td><?php echo $row["location"]; ?></td>
      <td><?php echo $row["person"]; ?></td>
      <td><?php echo $row["weather"]; ?></td>
      <td><?php echo $row["extra"]; ?></td>
      <td><?php echo $row["description"]; ?></td>
      <td><?php echo date('h:i:s a m/d/Y', strtotime($row['date_time']));
 ?></td>


    </tr>
  
  <?php  }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
 
  </tbody>
</table>   
   


    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
