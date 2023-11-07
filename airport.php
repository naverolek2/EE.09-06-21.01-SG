<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header>
        <div id = "lewy">
            <h2>Odloty z lotniska</h2>
        </div>
        <div id = "prawy">
            <img src="zad6.png" alt="logotyp">
        </div>
    </header>
    <main>
    <h4>tabela odlotów</h4>
    <table>
        <tr>
            <th>lp</th>
            <th>numer rejsu</th>
            <th>czas</th>
            <th>kierunek</th>
            <th>status</th>
        </tr>
        <?php 
            $db = new mysqli ('localhost', 'root', '', 'egzamin');
            $q = "SELECT odloty.id, odloty.nr_rejsu, odloty.czas, odloty.kierunek, odloty.status_lotu FROM odloty ORDER BY odloty.czas DESC";
            $result = $db->query($q);
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nr_rejsu'] . "</td>";
                echo "<td>" . $row['czas'] . "</td>";
                echo "<td>" . $row['kierunek'] . "</td>";
                echo "<td>" . $row['status_lotu'] . "</td>";
                echo "</tr>";
            }


            $db->close();
        ?>
        
    </table>
    </main>
    <header>
        <div id="lewydol">
            <a href="kw1.jpg" download target="blank">Pobierz obraz</a>
        </div>
        <div id="gorasrodek">
            <?php 
            if(isset($_COOKIE["zmiana_tekstu"])) {
                echo "<p> Miło nam, że nas znowu odwiedziłeś </p>";

            }
            else {
                echo "<p> Dzień dobry. Sprawdź regulamin naszej strony </p>";
                setcookie("zmiana_tekstu", "initialized", time() + 3600);


            }
                
            ?>
    </div>
        <div id="prawydol">
            <p id="parag">Autor: Sebastian Skiba</p>
        </div>

    </header>
</body>
</html>