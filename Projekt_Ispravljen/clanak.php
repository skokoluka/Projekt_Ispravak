<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Neuspjelo povezivanje s bazom podataka: " . mysqli_connect_error());
}



 

  
    $sql = "SELECT * FROM vijesti ";
    $rezultat = mysqli_query($conn, $sql);

    if ($rezultat && mysqli_num_rows($rezultat) > 0) {
        $clanak = mysqli_fetch_assoc($rezultat);

        
        $naslov = $clanak['naslov'];
        $datum = $clanak['datum'];
        $slika = $clanak['slika'];
        $sadrzaj = $clanak['sadrzaj'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clanak</title>
    
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="obgrli">
    <header class="hedic">
            <nav class="navbar">
                <img src="images/Screenshot 2023-06-18 210642.png" class="slika" alt="">
                <ul>
                    <li class="prvili"><a href="#home">HOME</a></li>
                    <li><a href="unos.html">UNOS VIJESTI</a></li>
                    <li><a href="kategorija.php?kategorija=sport">SPORT</a></li>
                    <li><a href="kategorija.php?kategorija=kultura">KULTURA</a></li>
                    <li><a href="index.php">NEWS</a></li>
                    <li><a href="administrator.php">ADMINISTRATOR</a></li>
                    <li><a href="clanak.php">CLANAK</a></li>
                </ul>
            </nav>
        </header>
        <div class="glavnidio">
            <section class="prvisec-skripta">
                <article id="art-skripta">
                    <h2 class="h2-skripta">
                        <?php echo $naslov ?>
                    </h2>
                    <p class="p1-skripta">
                        <?php echo $datum ?>
                    </p>
                    <?php echo "<img class='slika-skripta' src='images/$slika' alt=''>" ?><br>
                    <p class="p2-skripta">
                        <?php echo $sadrzaj ?>
                    </p>
                </article>
            </section>
        </div>
        <footer class="fotic">
            <p>Copyright 2019 Morgenpost verlag GmBH</p>
        </footer>
    </div>
</body>

</html>

