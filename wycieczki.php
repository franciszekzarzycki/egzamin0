<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki po Europie</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <h1>BIURO TURYSTYCZNE</h1>

    </header>
    <section id="blok_z_danymi">
        
        <h3>Wycieczki, na które są wolne miejsca</h3>
        <ul>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "biuro";

                $conn = mysqli_connect($servername, $username, $password, $dbname);

                $sql = "SELECT `id`, `dataWyjazdu`, `cel`, `cena` FROM `wycieczki` WHERE dostepna=1";
                if (!$conn){
                    
                    die("Connection failed") . mysqli_error($conn);

                }
                else{
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_query($conn, $sql)){
                        if (mysqli_num_rows($result)>0){
                            while($rzad = mysqli_fetch_row($result)){
                                echo ' <li> ' . $rzad[0] .'. dnia ' . $rzad[1] . 'jedziemy do ' . $rzad[2] . ',' . 'cena: ' . $rzad[3] . '</li>';

                            };
                        
                        }
                        

                    }
                    
                }
                mysqli_close($conn);

            
            ?>

        </ul>
  
    </section>
    <section id="lewy">
        <h2>Bestselery</h2>
        <table>
            <tr>
                <td>Wenecja</td>
                <td>kwiecień</td>
            </td>
            <tr>
                <td>Londyn</td>
                <td>lipiec</td>
            </td>
            <tr>
                <td>Rzym</td>
                <td>wrzesień</td>
            </td>

        </table>
    
    </section>

    <section id="srodek">
        <h2>Nasze zdjęcia</h2>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "biuro";

        $conn2 = mysqli_connect($servername, $username, $password, $dbname);

        $sql2 = "SELECT `nazwaPliku`, `podpis`  FROM `zdjecia` ORDER BY podpis DESC";
        if (!$conn2){
            
            die("Connection failed") . mysqli_error($conn2);

        }
        else{
            $result2 = mysqli_query($conn2, $sql2);
            if (mysqli_query($conn2, $sql)){
                $i=0;
                if (mysqli_num_rows($result2)>0){
                    while($rzad2 = mysqli_fetch_row($result2)){
                        echo "<img src='$rzad2[0]', alt='$rzad2[1]'>";
                        $i++;
                        if (($i % 3) ==0){
                            echo "<br>";
                        }
                        
                        

                    }
                
                }
                

            }
            
        }
        mysqli_close($conn2);

       
    ?>
    </section>

    <section id="prawy">
        <h2>Skontaktuj się</h2>
        <a href="turysta@wycieczki.pl" name="odnosnik">napisz do nas</a>
        
        <p>telefon: 111222333</p>
    </section>
   
    <footer>
        <p>Stronę wykonał: FZ</p>
    </footer>



    
</body>
</html>