<?php
session_start();

if (!isset($_SESSION['username'])){
    header("location: index.php");
}
?>
<html>
<head>
    <title>PC4U</title>
    <script src="java.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body onload="onloadbody()">
<div class="header">
    <a href="#" title="PC FOR YOU"><img src="Afbeeldingen/Groote_Logo.png" id="headerimg">
    </a>
</div>

<div class="topnav" id="myTopnav">
    <a href="#welkom" id="header1">PC FOR YOU</a>
    <a href="#onsbedrijf">Ons bedrijf</a>
    <a href="#producten">Onze producten</a>
    <a href="#evenementen">evenementen</a>
    <a href="#medewerkers">Onze medewerkers</a>
    <div id="navLinkMenuBoven"><a href="#">welkom <?php echo $_SESSION['username'];?>!</a></div>
    <div id="navLinkMenuOnder"><a href="logout.php">Log uit</a></div>
    <div class="navLinkRechts"><a href="logout.php">Log uit</a></div>
    <div class="navLinkLinks"><a href="#">welkom <?php echo $_SESSION['username'];?>!</a></div>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="navigationMobiel()">&#9776;</a>
</div>

</body></html>
<div class="content">

    <div class="witregel"></div>

    <div class="tijd">Onze winkel is 7 dagen per week open.<br>De openings tijden zijn:<br><br>
        <div class="tijdinside">
            maandag: 13:00-18:00<br>
            dinsdag-zondag 9:00-18:00<br><br>

            Tel: 0181 750300<br>
            Mail: raberkhout@novacollege.nl
        </div>
    </div>

    <div class="witregel"></div>

    <div class="welkom" id="welkom">
        <h2>Welkom</h2>
        <p id="welkomsText">Welkom op de website van PC4U.<br> De specialist in het verkopen en repareren van laptops en tablets van uiteenlopende merken en waar deskundig advies centraal staat.<br> Wij wensen u veel plezier op onze website.<br><br>Met vriendelijke groet,<br>Ramon Berkhout <br> Directeur PC4U.
        </p>
    </div>

    <div class="witregel"></div>

    <div class="onsBedrijf" id="onsbedrijf">
        <h2>Ons bedrijf</h2>
        <p>PC4U is een jong en dynamisch bedrijf dat in 2014 is opgericht door directeur Ramon Berkhout. <br> Het bedrijf beschikt over een innovatief reparatiecentrum.<br> Daar repareren wij laptops en tablets van uiteenlopende merken. <br> In de winkel treft u een uitgebreid assortiment van laptops en tablets en waar deskundig advies centraal staat. </p>

    </div>

    <div class="witregel"></div>

    <div class="producten" id="producten">
        <div class="productengroot">
            <h2>Onze producten</h2>
            <p>
            <table style="width:100%">
                <tr>
                    <td align="center" valign="middle">Toshiba Laptop Scharnier rechts &#8364; 29,00<br>
                        <img src="Afbeeldingen/product1.jpg" alt="Toshiba Laptop Scharnier" style="width:304px;height:228px;"><br>
                    </td>

                    <td align="center" valign="middle">LCD scharnieren voor Asus X7 serie voor &#8364 25,00<br>
                        <img src="Afbeeldingen/product2.jpg" alt="Toshiba Laptop Scharnier" style="width:304px;height:228px;"><br>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle">Spire Koelpasta voor CPU/GPU SilverGrease voor  &#8364 4,00<br>
                        <img src="Afbeeldingen/product3.jpg" alt="Toshiba Laptop Scharnier" style="width:304px;height:228px;"><br>
                    </td>

                    <td align="center" valign="middle">Laptop AC Adapter 90W voor Asus, Medion, Packard Bell, Toshiba &#8364 29,95<br>
                        <img src="Afbeeldingen/product4.jpg" alt="Toshiba Laptop Scharnier" style="width:304px;height:228px;"><br>
                    </td>
                </tr>

            </table>
            </p>
        </div>
        <div class="productenklein">
            <h2>Onze producten</h2>
            <p>
            <table style="width:100%">
                <tr>
                    <td align="center" valign="middle">Toshiba Laptop Scharnier rechts &#8364; 29,00<br>
                        <img src="Afbeeldingen/product1.jpg" alt="Toshiba Laptop Scharnier" style="width:304px;height:228px;"><br>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle">LCD scharnieren voor Asus X7 serie voor &#8364 25,00<br>
                        <img src="Afbeeldingen/product2.jpg" alt="Toshiba Laptop Scharnier" style="width:304px;height:228px;"><br>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle">Spire Koelpasta voor CPU/GPU SilverGrease voor  &#8364 4,00<br>
                        <img src="Afbeeldingen/product3.jpg" alt="Toshiba Laptop Scharnier" style="width:304px;height:228px;"><br>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle">Laptop AC Adapter 90W voor Asus, Medion, Packard Bell, Toshiba &#8364 29,95<br>
                        <img src="Afbeeldingen/product4.jpg" alt="Toshiba Laptop Scharnier" style="width:304px;height:228px;"><br>
                    </td>
                </tr>

            </table>
            </p>
        </div>
    </div>

    <div class="witregel"></div>

    <div class="evenementen" id="evenementen">
        <h2>Evenementen</h2>
        <p> <b>Retro Gamebeurs Tilburg</b><br>
            De grootste gamebeurs van Nederland op het gebied retrogames.<br>
            Sporthal Dongewijk<br>
            van 17 juli t/m 20 juli 2017 van 10:00 – 17:00<br>
            Tarief: 10,00 euro p.p.<br>
            Neem contact met ons op voor tickets.<br>
        </p>

        <p> <b>Campzone </b><br>
            Tijdelijke camping waar retrogames worden gespeeld.<br>
            Kronenberg, Limburg<br>
            van 5 augustus t/m 15 augustus 2017 van 10:00 – 17:00<br>
            Neem contact met ons op voor meer informatie.<br>
        </p>
    </div>

    <div class="witregel"></div>

    <div class="medewerkers" id="medewerkers">
        <h2>Onze medewerkers</h2>
        <p> Ramon Berkhout - directeur <br>
            Kees van Dijk - medewerker inkoop<br>
            Michiel vanderAA - medewerker verkoop<br>
            Chantal Hoekstra - administratie / medewerker inkoop<br>
            Mohammed el Massou - medewerker verkoop
        </p>
    </div>

    <div class="witregel"></div>

    <div id="google-maps" class="maps">
        <iframe frameborder="0" height="300" src="https://goo.gl/J8ZTpi"  width="100%"></iframe>
    </div>

    <div class="witregel"></div>




</div>
</html>

