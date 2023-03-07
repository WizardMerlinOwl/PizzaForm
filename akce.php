<?php
    print_r($_POST);
    echo '<br>';
include 'pripoj_se_ty_databaze.php';

//délka údajů
if(mb_strlen($_POST['username']) > 30 || mb_strlen($_POST['name']) > 30 || mb_strlen($_POST['surname']) > 30 || mb_strlen($_POST['email']) > 60 || mb_strlen($_POST['phone']) > 9 || mb_strlen($_POST['cardnumber']) > 16 || mb_strlen($_POST['cardcvc']) > 3 || mb_strlen($_POST['dorcity']) > 45 || mb_strlen($_POST['dorstreet']) > 45 || mb_strlen($_POST['dorstreetnum']) > 8 || mb_strlen($_POST['dorzip']) > 5 || mb_strlen($_POST['fakcity']) > 45 || mb_strlen($_POST['fakstreet']) > 45 || mb_strlen($_POST['fakstreetnum']) > 8 || mb_strlen($_POST['fakzip']) > 5)
{
    echo '<br>'."Údaje jsou příliš dlouhé!";
}

//vložení dat do db
else
{
    $conn = DbCon();

    // FAKTURACE
    // Prohledávání tabulky fakturace se zadanými hodnotami od uživatele
    $sql = "SELECT id_fakturace 
            FROM fakturace 
            WHERE fak_city = '$_POST[fakcity]' 
            AND fak_street = '$_POST[fakstreet]' 
            AND fak_streetnum = '$_POST[fakstreetnum]' 
            AND fak_zip = '$_POST[fakzip]'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) <= 0) {
        // Pokud záznamy neexistují, vytvořím nový záznam
        $sql = "INSERT INTO fakturace (`fak_city`, `fak_street`, `fak_streetnum`, `fak_zip`) VALUES ('$_POST[fakcity]', '$_POST[fakstreet]', '$_POST[fakstreetnum]', '$_POST[fakzip]')";
        mysqli_query($conn, $sql);
        $sql = "SELECT id_fakturace 
            FROM fakturace 
            WHERE fak_city = '$_POST[fakcity]' 
            AND fak_street = '$_POST[fakstreet]' 
            AND fak_streetnum = '$_POST[fakstreetnum]' 
            AND fak_zip = '$_POST[fakzip]'";
        $result = mysqli_query($conn, $sql);
    }

    // Získám id_fakturace
    $row = mysqli_fetch_assoc($result);
    $id_fakturace = $row["id_fakturace"];


    // DORUCENI
    // Prohledávání tabulky doruceni se zadanými hodnotami od uživatele
    $sql = "SELECT id_doruceni 
            FROM doruceni 
            WHERE dor_city = '$_POST[dorcity]' 
            AND dor_street = '$_POST[dorstreet]' 
            AND dor_streetnum = '$_POST[dorstreetnum]' 
            AND dor_zip = '$_POST[dorzip]'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) <= 0) {
        // Pokud záznamy neexistují, vytvoříme nový záznam
        $sql = "INSERT INTO doruceni (`dor_city`, `dor_street`, `dor_streetnum`, `dor_zip`) VALUES ('$_POST[dorcity]', '$_POST[dorstreet]', '$_POST[dorstreetnum]', '$_POST[dorzip]')";
        mysqli_query($conn, $sql);
        $sql = "SELECT id_doruceni 
            FROM doruceni 
            WHERE dor_city = '$_POST[dorcity]' 
            AND dor_street = '$_POST[dorstreet]' 
            AND dor_streetnum = '$_POST[dorstreetnum]' 
            AND dor_zip = '$_POST[dorzip]'";
        $result = mysqli_query($conn, $sql);
    }

    // Získám id_doruceni
    $row = mysqli_fetch_assoc($result);
    $id_doruceni = $row["id_doruceni"];


    // PROPOJOVACI TABULKA OBJEDNAVEK A PIZZ
    $sql = "SELECT `AUTO_INCREMENT`
    FROM  INFORMATION_SCHEMA.TABLES
    WHERE TABLE_SCHEMA = 'pizzeria2'
    AND   TABLE_NAME   = 'uzivatel'";
    $result =  mysqli_query($conn, $sql);

    $idu = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $idu = $row['AUTO_INCREMENT'];
    }

    $sql = "INSERT INTO uzivatel (`ID_DO`, `ID_FA`, `username`, `name`, `surname`, `email`, `phone`, `doruceni`, `card_number`, `card_cvc`) VALUES ('$id_doruceni', '$id_fakturace', '$_POST[username]', '$_POST[name]', '$_POST[surname]', '$_POST[email]', '$_POST[phone]', '$_POST[doruceni]', '$_POST[cardnumber]', '$_POST[cardcvc]' )";
    mysqli_query($conn, $sql);

    foreach ($_POST['pizza'] as $term) {

        $poc = $_POST['pizzanum'][$term-1];
        if (empty($poc)) {
            echo "<br>"."Nevyplněno počet kusů u pizzy s ID: $term". "<br>";
            continue;
        }
        if($poc < 0)
        {
            echo "<br>"."Zadáno záporné číslo u pizzy s ID: $term". "<br>";
            continue;
        }
        $sql = "INSERT INTO piz_uz (ID_U, ID_P,pocet) VALUES ($idu, $term,$poc)";

        echo "<br>Tento příkaz se provedl: ";
        var_dump($sql);
        echo "<br>";
        mysqli_query($conn, $sql);
    }

    echo "Objednáno!". "<br>"."<a href='index.php'>Pojď si objednat zase!</a>";
}