<!doctype html>
<head>
<link rel="stylesheet" href="vuurwerkshop.css">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
<header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">HYP3</span> Vuurwerk SHOP</h1>
        </div>
        <nav>
          <ul>
            <li> <a><a href="vuurwerkshop.php">home</a></a></li>
            <li> <a><a href="vuurwerkshopsiervuurwerk.php">siervuurwerk</a> </a></li>
            <li><a><a href="vuurwerkshopknalvuurwerk.php">knalvuurwerk</a></a></li>
            <li><a> over ons</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="newsletter">
      <div class="container">
        <h1>ons assortiment aan vuurwerk</h1>
        <form>
        </form>
      </div>
    </section>
<?php
// Auteur: martijn kooiman klas 1G
try {
		// Initialisatie
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vuurwerk";
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$result = $conn -> query("SELECT * from product");
		$result->setFetchMode(PDO::FETCH_ASSOC);
		
    }
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
echo'<div class="vuurwerk">'; 
while ($row = $result->fetch()) {
	echo'<div class="image">' . "<img src=".$row['url_afbeelding'] . " >" . '</div>';
	echo '<div class="text">';
	 echo $row['naam'] . "<br>";
	 echo $row['url_afbeelding'] . "<br>";
	 echo "<br>"; 
	 echo $row['prijs'] ." euro" .  "<br>";
	echo'</div>';
	echo'<div class="knop">';
	 echo 'bestel' . "<br>";
	 echo'</div>';
	echo "<br>";
}
echo '</div>';
?>
<footer>
      <p>HYP3 Techniek College Rotterdam 1G , Copyright &copy; 2019/2020</p>
    </footer>
</body>
</html>