<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        * {
          box-sizing: border-box;
        }
        
        input[type=text], select, textarea {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          resize: vertical;
        }
        
        label {
          padding: 12px 12px 12px 0;
          display: inline-block;
        }
        
        input[type=submit] {
          background-color: #4CAF50;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          float: right;
        }
        
        input[type=submit]:hover {
          background-color: #45a049;
        }
        
        .container {
          border-radius: 5px;
          background-color: beige;
          padding: 20px;
        }
        
        .col-25 {
          float: left;
          width: 25%;
          margin-top: 6px;
        }
        
        .col-75 {
          float: left;
          width: 75%;
          margin-top: 6px;
        }
        
        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        
        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
          }
        }


        input[type=button] {
          background-color: #4CAF50;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          float: right;
        }
        input[type=button2] {
          background-color: rgb(38, 47, 75);
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          float: right;
        }

        </style>
        
  <title>Twoja strona o podróżach !</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css">
 <style>
 
  </style>

</head>
<body>

<!--


-->



<nav class="navbar navbar-expand-sm navbar-dark ownNav">
        <a class="navbar-brand" href="index.php">Twójpodróżnik.pl</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
          
            <li class="nav-item">
              <a class="nav-link" href="oferty.php">Oferty</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dodaj_oferte.php">Dodaj wyprawę</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="kontakt.php">Kontakt</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="otworcy.php">O twórcy</a>
            </li>    
            
             
            </nav>
          </ul>
        </div>  
      </nav>




      <header class="jumbotron text-center" style="margin-bottom:0">
          <div id="title">
            <h2>Twójpodróżnik.pl</h2>
            </div>
        </header>

<?php



$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$title = $_POST["title"];
$country = $_POST["country"];
$place= $_POST["place"];
$date = $_POST["date"];
$description = $_POST["description"];
$koszt = $_POST["koszt"];
$picture = $_POST["picture"];

//$sql = "INSERT INTO wyjazd(imie, nazwisko, tytul, kraj, 
//miejscowosc, data, opis, koszt, zdjecie) VALUES (''); ";
//mysqli_query($conn, $sql);






echo<<<END


<h2 style="text-align: center">Podsumowanie zgłoszenia</h2>
<p style="text-align: center">Sprawdź poprawność podanych danych</p>


<div class="container">
  <form action="action_strona.php">

  <div class="row">
    <div class="col-25">
      <label for="fname">Imię</label>
      </div>
      <div class="col-25">
        <label for="fname"> $firstname </label>
      </div>

    </div>

 



  <div class="row">
    <div class="col-25">
      <label for="lname">Nazwisko</label>
    </div>
    <div class="col-25">
      <label for="lname">  $lastname </label>
    </div>
    
  </div>



  <div class="row">
      <div class="col-25">
        <label for="ftitle">Tytuł</label>
      </div>
      <div class="col-25">
      <label for="ftitle">  $title </label>
        </div>
    </div>


  <div class="row">
    <div class="col-25">
      <label for="country">Kraj</label>
    </div>
    <div class="col-25">
    <label for="country">  $country </label>
      </div>
   
  </div>



  <div class="row">
      <div class="col-25">
        <label for="fplace">Miejscowość</label>
      </div>
      <div class="col-25">
      <label for="fplace">  $place </label>
        </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="fdate">Data</label>
      </div>
      <div class="col-25">
      <label for="fdate">  $date </label>
        </div>
    </div>




  <div class="row">
    <div class="col-25">
      <label for="fsubject">Opis</label>
    </div>
    <div class="col-25">
      <label for="fsubject">  $description </label>
        </div>
  </div>

  
  <div class="row">
  <div class="col-25">
    <label for="fprice">Koszt</label>
  </div>
  <div class="col-25">
  <label for="fprice">  $koszt </label>
    </div>
</div>

  <div class="row">
      <div class="col-25">
        <label for="fpicture">Dodaj zdjęcie</label>
      </div>
      <div class="col-25">
      <label for="lpicture">   $picture </label>
        </div>
    </div>



    <div class="row">
    <div class="col-25">
    <input type="button2" value="Powrót do formularza" id="btn2">
    </div>

    <div class="col-25">
    <input type="button" value="Potwierdź poprawność danych" id="btn1" name="save">
      </div>

  </div>
  
  </form>
</div>


END;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interfejsy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>



<?php




$sql = "INSERT INTO interfejsy.wyjazd (imie, nazwisko, tytul, kraj,miejscowosc,data,opis,koszt,zdjecie)VALUES ('$firstname', '$lastname', '$title','$country','$place','$date','$description','$koszt','$picture')";




if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>






<footer class="cos" >

<p>&copy Wszelkie prawa zastrzeżone, 2019 <br /> Wykonane przez: Rafał Walasek
</p>
</footer>
<script>

 $(document).ready(function(){
  $("#btn1").click(function(){
   alert("Twoje zgłoszenie zostało dodane do bazy danych" + $("#test").text());
   //window.open("oferty.php"); 
   window.location.replace("oferty.php");
 });

 $("#btn2").click(function(){
   
   //window.open("oferty.php"); 
   window.location.replace("dodaj_oferte.php");
 });
   
});
  </script>



</body>
</html>
