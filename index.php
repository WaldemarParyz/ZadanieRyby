<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <main>
            <h2>Ryby zamieszkujące rzeki</h2>
            <?php
                $polaczenie = mysqli_connect('localhost', 'root', '', 'wedkowanie');
                $zapytanie = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby JOIN lowisko ON ryby.id = lowisko.Ryby_id WHERE lowisko.rodzaj = 3";
                $wynik = mysqli_query($polaczenie, $zapytanie);
                while ($wiersz = mysqli_fetch_assoc($wynik)) {
                    echo "<li>".$wiersz['nazwa'].','.$wiersz['akwen'].','.$wiersz['wojewodztwo']."</li>";
                }
                ?>
    </main>
    <nav>
    </nav>
    <aside>
        <h2>Ryby drapieżne naszych wód</h2>
    </aside>
    <footer>
        <p>Stronę wykonał: Waldemar</p>
    </footer>
</body>
</html>