<!DOCTYPE html>
<html lang="en">
<head>
  <title>Twoja strona o podróżach !</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css">
  <style>
      * {
        box-sizing: border-box;
      }
 
      #myInput {
        background-image: url('/css/searchicon.png');
        background-position: 10px 12px;
        background-repeat: no-repeat;
        width: 40%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;

      }
      #myInputpart2 {
    
        background-color: #4CAF50;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          
      }
      

     

      #myUL {
        list-style-type: none;
        padding: 0;
        margin: 0;
      }
      
      #myUL li a {
        border: 1px solid #ddd;
        margin-top: -1px; /* Prevent double borders */
        background-color: #f6f6f6;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        color: black;
        display: block
      }
      
      #myUL li a:hover:not(.header) {
        background-color: #eee;
      }
      </style>

</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark ownNav">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
          

          <li class="nav-item">
              <a class="nav-link" href="index.php">Twójpodróżnik.pl</a>
            </li>
        
            <li class="nav-item active">
              <a class="navbar-brand" href="oferty.php" >Oferty</a>
              
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
   $metoda = "tytul";
   $wyrazenie = "muzeum";

?>


<div class="ownMainPart" style="padding: 50px; margin: 80px;"  >
    <div class="row">
      <div class="col">
<form  method="post" action="search_page.php">


<h2 style="text-align: center">Wyszukiwarka ofert</h2>
Wyszukaj według:
      <select name="metoda">
      <option value="tytul">Tytuł
      <option value="imie">Imie
       <option value="nazwisko">Nazwisko 
       <option value="kraj">Kraj
       <option value="miejscowosc">Miejscowosc
       <option value="data">Data
       <option value="opis">Opis
       <option value="koszt">Koszt
      </select>
      <br /><br />
  Szukane wyrażenie:
      <input type="text" placeholder="Szukaj ofert.."   id="myInput" name="wyrazenie"/>
      <input type="submit" name="wyszukaj" id="myInputpart2"/>
</form>
</div>
</div> 
</div>
   




</body>


<!--

<form method="get" action=" ">
    <input type="text" name="search_term" title="Search…" value="Search...">
    <input type="submit" name="search" title="Search Now!
    "value="Search" class="searchbutton" />
</form>




$query = "SELECT * FROM wyjazd ORDER BY id DESC";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result))
{
  echo '
  <tr>
  <td>
  <img src = "data:image/jpeg; base64,'.base64_encode($row['zdjecie']).'"/>
  </td>
  </tr>
  ';
}

<table class= "table table-bordered">
<tr>
  <th>Wyjazd</th>
</tr>



<ul id="myUL">

    <li><a href="#"> $row["tytul"].</a></li>
    <li><a href="#">Szanghaj</a></li>
  
    <li><a href="#">Barcelona</a></li>
    <li><a href="#">Nevada</a></li>
  
    <li><a href="#">Caracas</a></li>
    <li><a href="#">Mahajanga</a></li>
    <li><a href="#">Nairobi</a></li>
  </ul>

-->








<?php
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

$sql = "SELECT id, imie, nazwisko,tytul, kraj, miejscowosc, data, opis, koszt, zdjecie FROM wyjazd";
$result = $conn->query($sql);



?>




<div class = "row ownMainPart">
  <div class="col">   

<table class= "table" style="color:rgb(38, 47, 75)">
<tr>
  <th>

<?php
if ($result->num_rows > 0) {
    // output data of each row

    echo "<table><tr style= 'color: rgb(100, 89, 53)'>   <th>Tytuł</th>  <th>Dane osobowe</th>  <th>Kraj</th>  <th>Miejscowosc</th>  <th>Data</th>  <th>Opis</th>   <th>Koszt</th>  </tr> ";
   // echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["tytul"]."</td><td>".$row["imie"]." ".$row["nazwisko"]."</td><td>".$row["kraj"]."</td><td>".$row["miejscowosc"]."</td><td>".$row["data"]."</td><td>".$row["opis"]."</td><td>".$row["koszt"].                  "</td></tr>";
      }
      echo "</table>";
      //echo "</ul>";
} else {
    echo "0 results";
}
$conn->close();
?>
</th>
  </tr>
</table>


    </div>
</div>




<!--
<table class="table table-bordered ownMainPart" style="padding: 0px; margin: 0px; border-radius:0px;  text-align: left;">  
<?php  
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
              $sql = "SELECT id, imie, nazwisko,tytul, kraj, miejscowosc, data, opis, koszt, zdjecie FROM wyjazd";
              $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) 
                {  
                  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['zdjecie'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>  
</table>
-->

<footer class="cos" >
    <p>&copy Wszelkie prawa zastrzeżone, 2019 <br /> Wykonane przez: Rafał Walasek
    </p>
</footer>

<!--
<script>
    function myFunction() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
    </script>

    onkeyup="myFunction()" 
    -->
</body>
</html>
