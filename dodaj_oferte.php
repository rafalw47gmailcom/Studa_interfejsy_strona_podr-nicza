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
          .error 
          {color: #FF0000;}
        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
          }
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




<nav class="navbar navbar-expand-sm navbar-dark ownNav">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            
          <li class="nav-item">
              <a class="nav-link" href="index.php">Twójpodróżnik.pl</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="oferty.php">Oferty</a>
            </li>
            <li class="nav-item active">
                <a class="navbar-brand" href="dodaj_oferte.php">Dodaj wyprawę</a>
             
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







  




<h2 style="text-align: center">Dodaj własną wyprawę</h2>
<p style="text-align: center">Szukasz znajomych do wspólnej podrózy ? Nic trudnego ! Dodaj własną propozycję i czekaj na zgłoszenia.</p>

<div class="container" >
  <form method="post" action="action_strona.php">

  <div class="row ">
    <div class="col-25">
      <label for="fname">Imię</label>


    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Twoję imię.." class="form-control">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Nazwisko</label>
 
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Twoje nazwisko.." class="form-control">
    </div>
  </div>


  <div class="row">
      <div class="col-25">
        <label for="ftitle">Tytuł</label>
  
      </div>
      <div class="col-75">
        <input type="text" id="ftitle" name="title" placeholder="Podaj tytuł wyjazdu.." class="form-control">
        
      </div>
    </div>


  <div class="row">
    <div class="col-25">
      <label for="country">Kraj</label>
    </div>
    <div class="col-75">
      <select id="country" name="country" class="form-control">
          <option value="Litwa">Litwa</option>
          <option value="Łotwa">Łotwa</option>
          <option value="Estonia">Estonia</option>
          <option value="Niemcy">Niemcy</option>
   <option value="Czechy">Czechy</option>
          <option value="Austira">Austira</option>
          <option value="Węgry">Węgry</option>
          <option value="Szwajcaria">Szwajcaria</option>
   <option value="Rosja">Rosja</option>
          <option value="Białoruś">Białoruś</option>
          <option value="Ukraina">Ukraina</option>
          <option value="Kazachstan">Kazachstan</option>
   <option value="Chiny">chiny</option>
          <option value="Japonia">Japonia</option>
          <option value="Korea">Korea</option>
          <option value="Wietnam">Wietnam</option>
   <option value="Chorwacja">Chorwacja</option>
          <option value="Hiszpania">Hiszpania</option>
          <option value="Portugialia">Portugialia</option>
          <option value="USA">USA</option>
          <option value="Polska">Polska</option>
      </select>
    </div>
  </div>



  <div class="row">
      <div class="col-25">
        <label for="fplace">Miejscowość</label>
      </div>
      <div class="col-75">
        <input type="text" id="fplace" name="place" placeholder="Dodaj miejsce pobytu.." class="form-control">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="fdate">Data wyjazdu</label>
      
      </div>
      <div class="col-75">
        <input type="text" id="fdate" name="date" placeholder="Dodaj datę pobytu.." class="form-control">
        
      </div>
    </div>

  <div class="row">
    <div class="col-25">
      <label for="description">Opis</label>
    </div>
    <div class="col-75">
      
      <input type="text" id="fdescription" name="description" placeholder="Dodaj swój opis.."  class="form-control" >
    </div>
  </div>

  <div class="row">
      <div class="col-25">
      <label for="koszt">Koszt</label>

      </div>
      <div class="col-75">
        <input type="text" id="fprice" name="koszt" placeholder="Podaj koszt.." class="form-control">
      </div>
    </div>

  <div class="row">
      <div class="col-25">
        <label for="fpicture">Dodaj zdjęcie</label>
      </div>
      <div class="col-75">
        <input type="file" id="fpicture" name="picture" placeholder="Dodaj zdjecie..">
      </div>
    </div>


  <div class="row">
    <input type="submit" value="Potwierdź zgłoszenie">
  </div>


  </form>
</div>









<footer class="cos" >
    <p>&copy Wszelkie prawa zastrzeżone, 2019 <br /> Wykonane przez: Rafał Walasek
    </p>
</footer>
<!--
<script>
$(document).ready(function(){
$('#insert').click(function(){
  var picture_name = $('picture').val();
  if(picture_name == '')
  {
    alert("Wybierz zdjecie");
    return false;
  }
  else
  {
    var extension = $('picture').val().split('.').pop().toLowerCase();
    if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
    {
      alert('Zly format danych');
      $('picture').val('');
      return false;
    }
  }
});
}
)
</script>
-->
</body>
</html>