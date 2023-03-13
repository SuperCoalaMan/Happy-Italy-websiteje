<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Css/Info.css">
    <link rel="shortcut icon" type="image/x-icon" href="../belangrijkeimages/pictogram.png">
    <title>Welkom - Happy Italy</title>
  </head>
  <body>
    <div class="fixed-header">
      <div class="container">
        <nav id="nav">
          <a href="#">bestellen</a>
          <a href="#">menu</a>
          <a href="../index.html">Home</a>
          <?php if (isset($_SESSION['user_id'])) { ?>
            <a href="../profile/profile.php">Profiel</a>
            <h1>Welkom terug, <?php echo $_SESSION['user_id']; ?>!</h1>
        <?php } else { ?>
          <a href="../AccountGegevens/login.html">Login</a>
        <?php } ?>

        </nav>
      </div>
    </div>
    <!--Main body en inhoud-->
    <div class="bg-image"></div>

<div class="bg-text">
  <div class="left">
    <h2>Locaties</h2>
    <div class="scroll">
      <div onclick="locatie('Alkmaar')" class="locatie"><h2>Happy Italy Alkmaar</h2><p>Alkmaar, 1823 CX</p><p>Noorderkade 1049</p><p>0727440181</p></div>
      <div onclick="locatie('Almere')" class="locatie"><h2>Happy Italy Almere</h2><p>Almere, 1315 JG</p><p>Grote Markt 20</p><p>0367440000</p></div>
      <div onclick="locatie('Amsterdam')" class="locatie"><h2>Happy Italy Amsterdam</h2><p>Amsterdam, 1079 RP</p><p>Zuidelkijke Wandelweg 78</p><p>0202625426</p></div>
      <div onclick="locatie('Arnhem')" class="locatie"><h2>Happy Italy Arnhem</h2><p>Arnhem, 6811</p><p>Oude Stationsstraat 14</p><p>0267440251</p></div>
      <div onclick="locatie('Breda')" class="locatie"><h2>Happy Italy Breda</h2><p>Breda, 4817 ZX</p><p>Bavelseparklaan 13</p><p>0767660529</p></div>
      <div onclick="locatie('Den-Bosch')" class="locatie"><h2>Happy Italy Den Bosch</h2><p>Den Bocsh, 5223 MX</p><p>Bordeslaan 500</p><p>0737440157</p></div>
      <div onclick="locatie('Eindhoven')" class="locatie"><h2>Happy Italy Eindhoven</h2><p>Eindhoven, 5611 DE</p><p>Catharinaplein 25</p><p>0407440347</p></div>
      <div onclick="locatie('Enschede')" class="locatie"><h2>Happy Italy Enchede</h2><p>Enchede, 7511 PP</p><p>Willem Wilminkplein 31</p><p>0537440520</p></div>
      <div onclick="locatie('Groningen')" class="locatie"><h2>Happy Italy Groningen</h2><p>Groningen, 9711 NX</p><p>Oosterstraat 56</p><p>0507440178</p></div>
      <div onclick="locatie('Hendrik')" class="locatie"><h2>Happy Italy Hendrik-Ido-Ambacht</h2><p>Hendrik-Ido-Ambacht, 3342 GP</p><p>Rossenburgpad 10</p><p>+31786822876</p></div>
      <div onclick="locatie('Kerkrade')" class="locatie"><h2>Happy Italy Kerkrade</h2><p>Kerkrade, 6466 NH</p><p>Roda J.C. Ring 2P</p><p>0457440083</p></div>
      <div onclick="locatie('Nieuwegein')" class="locatie"><h2>Happy Italy Nieuwegein</h2><p>Nieuwegein, 3433 KK</p><p>Arsenaalsdok 5 (Foodcourt, A27)</p></div>
      <div onclick="locatie('Roermond')" class="locatie"><h2>Happy Italy Roermond</h2><p>Roermond, 6041 EM</p><p>Markt 27</p><p>0475 260 190</p></div>
      <div onclick="locatie('Rotterdam-bergweg')" class="locatie"><h2>Happy Italy Rotterdam (Bergweg)</h2><p>Rotterdam, 3037 EP</p><p>Bergweg 335</p><p>0107420628</p></div>
      <div onclick="locatie('Rotterdam-binnerotte')" class="locatie"><h2>Happy Italy Rotterdam (Binnenrotte)</h2><p>Rotterdam, 3011 HC</p><p>Binnenrotte 102</p><p>0102140836</p></div>
      <div onclick="locatie('Rotterdam de kuip')" class="locatie"><h2>Happy Italy Rotterdam (de Kuip)</h2><p>Rotterdam, 3077 MK</p><p>Cor Kieboomplein 120</p><p>0107420251</p></div>
      <div onclick="locatie('Rotterdam kop van zuid')" class="locatie"><h2>Happy Italy Rotterdam (Kop van Zuid)</h2><p>Rotterdam, 3072 AP</p><p>Wilhelminakade 123</p><p>0107420911</p></div>
      <div onclick="locatie('Schiedam')" class="locatie"><h2>Happy Italy Schiedam</h2><p>Schiedam, 3119 XX</p><p>Noorderweg 16</p><p>0107420919</p></div>
      <div onclick="locatie('Spijkernisse')" class="locatie"><h2>Happy Italy Spijkernisse</h2><p>Spijkernisse, 3201 CZ</p><p>Markt 42</p><p>0181744097</p></div>
      <div onclick="locatie('Tilburg')" class="locatie"><h2>Happy Italy Tilburg</h2><p>Tilburg, 5038 AH</p><p>Heuvelstraat 126</p><p>0137370300</p></div>
      <div onclick="locatie('Venlo')" class="locatie"><h2>Happy Italy Venlo</h2><p>Venlo, 5911</p><p>Maasstraat 22</p><p>0777440015</p></div>
      <div onclick="locatie('Zoetermeer')" class="locatie"><h2>Happy Italy Zoetermeer</h2><p>Zoetermeer, 2711 EC</p><p>Stadhuisplein 21</p><p>0797440233</p></div>
    </div>

  </div>
  <div class="right">
  </div>
  <div class="bottom">
    <h2>Kaart</h2>
    <iframe class="map" id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2389.065904131254!2d6.568361651769602!3d53.21666667985366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c9cd56ebc09f0f%3A0x7175dd8863e6ba65!2sHappy%20Italy%20Groningen!5e0!3m2!1snl!2snl!4v1678366845937!5m2!1snl!2snl" width="650" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
    <!--------------------------->
    <div class="fixed-footer">
      <div class="container"></div>
    </div>
    <div id="mySidebar" class="sidebar">
        <div class="side-header">
          <h2 id="sideHeaderText"></h2>
          <a href="javascript:void(0)" class="closebtn" onclick="closeSidebar()">&times;</a>
        </div>
        <div class="banner"><img class="banner" src="../belangrijkeimages/sidebar.jpeg"></div>
        <div class="side1"><p>Invalide Toilet Aanwezig</p></div>
        <div class="side1"><p>Welkom op het terras</p></div>
        <div class="openingstijden">
          <h2>Openingstijden</h2>
          <p>Ma t/m vr 16:00u – 22:00u, Za en zo 12:00u – 22:00u. Let op:<br> 
            de keuken sluit om 21:30 uur</p>
            <h2>Pakeergelegenheid</h2>
            <p>-<p>
        </div>
    </div>
    <script src="JS/Info.js"></script>
  </body>
</html>
