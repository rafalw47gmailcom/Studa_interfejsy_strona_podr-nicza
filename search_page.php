
<!--
$kind = $_POST["search"];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "interfejsy");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}pt select query execution
$sql = "SELECT * FROM wyjazd WHERE tytul=$kind ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['tytul'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);




<!doctype html>
<html>
  <head>
    <title>Wyniki wyszukiwania wyjazdów w bazie</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <h1>Wyniki wyszukiwania wyjazdów w bazie</h1>
   
  </body>
</html>
-->









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




<div class = "row ownMainPart">
    <div class="col">   

    <h1>Oferty podróży znalezione w bazie:</h1>
  



<?php
      $metoda = $_POST['metoda'];
      $wyrazenie = $_POST['wyrazenie'];
      $wyrazenie = trim($wyrazenie);
      if (!$metoda || !$wyrazenie)
      {
        echo 'Brak parametrów wyszukiwania, wróć do poprzednej strony i spóbuj ponownie!';
        exit;
      }
      if (!get_magic_quotes_gpc())
      {
        $metoda = addslashes($metoda);
        $wyrazenie = addslashes($wyrazenie);
      }
      @ $db = new mysqli('localhost','root','','interfejsy');
      
      if (mysqli_connect_errno())
      {
        echo 'Połączenie z bazą nie powiodło się. Spóbuj ponownie';
        exit;
      }
      $db->query('SET NAMES utf8');
      $db->query('SET CHARACTER_SET utf8_unicode_ci');
      $zapytanie = "select * from wyjazd where ".$metoda. " like '%".$wyrazenie."%'";
      $wynik = $db->query($zapytanie);
      $ile_znaleziono = $wynik->num_rows;
      echo '<p> Liczba znalezionych wyjazdów: '.$ile_znaleziono.'</p>';
?>


      <table class= "table" style="color:rgb(38, 47, 75)">
<tr>
  <th>
  <?php
  echo "<table><tr style= 'color: rgb(100, 89, 53)'>   <th>Tytuł</th>  <th>Dane osobowe</th>  <th>Kraj</th>  <th>Miejscowosc</th>  <th>Data</th>  <th>Opis</th>   <th>Koszt</th>  </tr> ";
      for ($i=0;$i<$ile_znaleziono;$i++)
      {
        $wiersz = $wynik->fetch_assoc();
        /*
        echo '<p><b>'.($i+1).'. Tytuł: '.stripslashes($wiersz['tytul']).'</b><br />';
        echo 'Imie: '.stripslashes($wiersz['imie']).'<br />';
        echo 'Nazwisko: '.stripslashes($wiersz['nazwisko']).'<br />';
        echo 'Kraj: '.stripslashes($wiersz['kraj']).'<br />';
        echo 'Miejscowosc: '.stripslashes($wiersz['miejscowosc']).'<br />';
        echo 'Koszt: '.stripslashes($wiersz['koszt']).'<br />';
        echo 'Data: '.stripslashes($wiersz['data']).'<br />';
        echo 'Opis: '.stripslashes($wiersz['opis']).'<br />';
*/
        // echo "<ul>";
     
             echo "<tr><td>".$wiersz["tytul"]."</td><td>".$wiersz["imie"]." ".$wiersz["nazwisko"]."</td><td>".$wiersz["kraj"]."</td><td>".$wiersz["miejscowosc"]."</td><td>".$wiersz["data"]."</td><td>".$wiersz["opis"]."</td><td>".$wiersz["koszt"].                  "</td></tr>";
          
          
      }
      echo "</table>";
      $wynik->free();
      $db->close();
    ?> 
    </th>
  </tr>
</table>
    </div>
</div>






 




  </body>






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
