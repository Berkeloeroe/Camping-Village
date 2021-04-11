<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Acme&family=Londrina+Solid:wght@300&display=swap" rel="stylesheet">
  <link rel="icon" href="../foto's/tent.png">
  <title>Camping Village</title>
</head>
<body>
  <div class="navbar">
    <a class="logo"> <img src="../foto's/logo.png" alt="logo"></a>
    <ul class="nav">
      <li><a href="#home">Home</a></li>
      <li><a href="#activiteiten">Activiteiten</a></li>
      <li><a href="#reserveren">Reserveren</a></li>
      <li><a href="#inloggen">Inloggen</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </div>

  <section class="banner-area" id="home">
    <div id="slider">
      <figure>
        <img src="https://cdn-cms.bookingexperts.nl/media/234/7/preprocessed.jpeg" alt="Foto">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4ubdX7JxzvaMMCWSQpelTDJsJI9-IMExBVw&usqp=CAU" alt="Foto">
        <img src="https://www.capfun.nl/photo/STOETENSLAGH/Web/grandes/01.jpg" alt="Foto">
        <img src="https://www.ardechecamping.fr/camping-sud-ardeche-location-mobil-home/uploads/2020/02/piscine-pataugeoire-espace-aquatique-camping.jpg" alt="Foto">
        <img src="https://cdn-cms.bookingexperts.nl/media/234/7/preprocessed.jpeg" alt="Foto">
      </figure>
        <div class="slidertext"><h3>Welkom op de <br> Camping Village</h3></div>
    </div>
  </section>

  <section class="activiteiten" id="activiteiten">
    <div class="text-part">
      <h1>
        Activiteiten</h1>
      <h2>
        Mountainbiken</h2>
      <p>
        Zie jij een vakantie waarbij je naar hartelust kunt mountainbiken wel zitten? Camping Village is de perfecte
        plek voor een mountainbike vakantie in Nederland. De omgeving van deze mountainbike camping in is zeer
        geschikt voor mountainbikers: het Nationaal Park de Sallandse Heuvelrug is namelijk vlakbij. Tijdens je vakantie
        of mountainbike weekend in Overijssel loop je vanaf de camping zó dit prachtige natuurpark in. Mountainbiken,
        hardlopen, fietsen of wandelen: het kan allemaal in dit verrassende gebied!</p><br>
        <img src="https://i.pinimg.com/originals/13/6b/d5/136bd5a0e078954a711f21d125f077e5.jpg" alt="mountainbike">

      <h2>
        Knutselen</h2>
      <p>
        Ben je creatief? Dan is knutselen misschien iets voor jouw.</p><br>
        <img src="https://meervoormamas.nl/storage/resize/knutselen-met-kleuters-281-600x450.jpg" alt="knutselen">

      <h2>
        Jeu de Boele wedstijd</h2>
      <p>
        Het Jeu de Boules spel is een heerlijke ontspannen bezigheid voor op vakantie. Bij Recreatiepark pittoreske Otterlo kun
        je ook menig uurtjes vertoeven op onze Jeu de Boules banen. Onze camping heeft totaal 12 Jeu de Boules banen welke
        aaneengesloten naast de receptie en aan de dierenweide liggen. Heb je geen eigen setje Jeu de Boules ballen dan kan je
        bij de receptie een setje lenen.</p><br>
        <img src="https://images0.persgroep.net/rcs/b0GqzVV_ohcqkNlOL1DkQnrKbP0/diocontent/127964502/_fitwidth/694/?appId=21791a8992982cd8da851550a453bd7f&quality=0.8" alt="jeu">

      <h2>
        Water Aerobics</h2>
      <p>
        Niets is leuker dan trainen op het ritme van muziek in een zwembad omgeven door groen en daarom organiseren we veel
        activiteiten in het zwembad in pittoreske Otterlo.
        
        Aquagym, Aquarobics en Aquazumba en nog veel meer wachten op u bij het zwembad in str.13, gemakkelijk bereikbaar vanaf
        elke plek op de camping.</p><br>
        <img src="https://media.istockphoto.com/photos/water-aerobics-group-picture-id157732856" alt="">

      <h1>
        Aanmelden</h1>
      <form action="action.php">
        <label for="fname">Voornaam:</label><br>
        <input type="text" id="fname" name="fname" value=""><br>
        <label for="activiteiten">Keuze activiteit:</label><br>
        <select name="activiteiten" id="activiteiten">
          <option value="volvo">Mountainbiken</option>
          <option value="saab">Knutselen</option>
          <option value="opel">Jeu de Boele wedstijd</option>
          <option value="audi">Water Aerobics</option>
        </select>
        <br>
        <input type="submit" value="submit">
      </form>
    </div>
  </section>

  <section class="reserveren" id="reserveren">
    <div class="text-part">
      <h1>
        Reserveren</h1>
      <p>
        Vanwege het corona virus en hierbij horende protocollen is het tijdelijk alleen mogelijk om telefonisch bij ons
        te reserveren.</p>
        
      <form action="action.php">
        <label for="fname">Voor en Achternaam:</label><br>
        <input type="text" id="fname" name="fname" value=""><br>
        <label for="lname">Adres:</label><br>
        <input type="text" id="lname" name="lname" value=""><br><br>
        <label for="lname">Datum voor reservering:</label><br>
        <input type="text" id="lname" name="lname" value=""><br><br>
        <label for="lname">Duur vakantie:</label><br>
        <input type="text" id="lname" name="lname" value=""><br><br>
        <label for="activiteiten">Tent of caravan:</label><br>
        <select name="activiteiten" id="activiteiten">
          <option value="volvo">Tent</option>
          <option value="saab">Caravan</option>
        </select>
        <br>
        <label for="lname">Aantal personen:</label><br>
        <input type="text" id="lname" name="lname" value=""><br><br>
        <input type="submit" value="submit">
      </form>
    </div>
  </section>

  <section class="inloggen" id="inloggen">
    <div class="text-part">
      <h1>
        Inloggen</h1>
        <form class="box" action="action.php" method="post">
          <input type="text" name="" placeholder="Gebruikersnaam">
          <input type="password" name="" placeholder="Wachtwoord">
          <input type="submit" name="" value="Login">
        </form> 
    </div>
  </section>
  <section class="contact" id="contact">
    <div class="text-part">
      <h1>
        Contact opnemen?</h1>
      <p>
        Telefoon: 0611957243<br>
        Mail: campingvillage@talnet.nl<br>
        Adres: Campweg 6969 KK Otterlo</p><br><br>
        <center>
        <div class="c">
          <p>
          © 2021 Camping Village. All Rights Reserved</p>
        </div>
        </center>
  </section>

  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) { slideIndex = 1 }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 5000);
    }
  </script>
</body>
</html>