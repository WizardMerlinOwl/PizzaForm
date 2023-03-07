<!DOCTYPE html>
<html lang="cs-cz">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./css/bootstrap.min.css" />
        <link rel="stylesheet" href="./css/mystyles.css" />
        <script src="./js/bootstrap.bundle.min.js"></script>
        <title>Prestižní Pizzerie</title>
    </head>
    <body class="bg-dark bg-opacity-75">
        <nav class="navbar navbar-expand-lg bg-warning">
            <div class="container-fluid m">
                <a class="navbar-brand" href="#">Prestižní Pizzerie</a>
            </div>
        </nav>
        <div class="bg-light mt-5">
            <div class="bg-warning bg-opacity-75">
                <div class="container text-center">
                    <img src="./obr/pizzalogo.png" alt="logo" width="300" height="300" />
                    <h1 style="font-size: 60px">Prestižní Pizzerie</h1>
                    <h2 style="font-size: 35px; padding-bottom: 5px">To nejlepší z Ostravy a okolí</h2>
                </div>
            </div>
        </div>
        <div class="container bg-dark bg-opacity-50 rounded-4">
            <div class="p-5 my-4 bg-light rounded-3">
                <form class="row g-3" action="./akce.php" method="post">
                    <div class="row g-3 container bg-dark bg-opacity-10 rounded-4 border-bottom border-dark border-end">
                        <h2>Kontakní údaje</h2>
                        <div class="col-md-4">
                            <label for="username" class="form-label">Uživatelské jméno</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="PepikZDepa" required="required" autocomplete="off" />
                        </div>
                        <div class="col-md-4">
                            <label for="name" class="form-label">Jméno</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Karel" required="required" autocomplete="off" />
                        </div>
                        <div class="col-md-4">
                            <label for="surname" class="form-label">Příjmení</label>
                            <input type="text" class="form-control" id="surname" name="surname" placeholder="Novák" required="required" autocomplete="off" />
                        </div>
                        <div class="col-md-8">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="priklad@priklad.com" required="required" autocomplete="off" />
                        </div>
                        <div class="col-md-4">
                            <label for="phone" class="form-label">Telefon</label>
                            <input type="tel" class="form-control mb-4" id="phone" name="phone" placeholder="123456789" required="required" autocomplete="off" />
                        </div>
                    </div>
                    <div class="row g-3 container bg-dark bg-opacity-10 rounded-4 border-bottom border-dark border-end">
                        <h2>Doručovací adresa</h2>
                        <div class="col-md-4">
                            <label for="cityship" class="form-label">Město</label>
                            <input type="text" class="form-control" id="cityship" name="dorcity" placeholder="Ostrava" required="required" autocomplete="off" />
                        </div>
                        <div class="col-md-4">
                            <label for="streetship" class="form-label">Ulice</label>
                            <input type="text" class="form-control" id="streetship" name="dorstreet" placeholder="Příkop" required="required" autocomplete="off" />
                        </div>
                        <div class="col-md-2">
                            <label for="streetnumship" class="form-label">Číslo p.</label>
                            <input type="number" class="form-control" id="streetnumship" name="dorstreetnum" placeholder="1234" required="required" autocomplete="off" />
                        </div>
                        <div class="col-md-2">
                            <label for="zipship" class="form-label">PSČ</label>
                            <input type="number" class="form-control mb-4" id="zipship" name="dorzip" placeholder="42069" required="required" autocomplete="off" />
                        </div>
                    </div>
                    <div class="row g-3 container bg-dark bg-opacity-10 rounded-4 border-bottom border-dark border-end">
                        <h2>Fakturační adresa</h2>
                        <div class="col-md-4">
                            <label for="city" class="form-label">Město</label>
                            <input type="text" class="form-control" id="city" name="fakcity" placeholder="Ostrava" required="required" autocomplete="off" />
                        </div>
                        <div class="col-md-4">
                            <label for="street" class="form-label">Ulice</label>
                            <input type="text" class="form-control" id="street" name="fakstreet" placeholder="Příkop" required="required" autocomplete="off" />
                        </div>
                        <div class="col-md-2">
                            <label for="streetnum" class="form-label">Číslo p.</label>
                            <input type="number" class="form-control" id="streetnum" name="fakstreetnum" placeholder="1234" required="required" autocomplete="off" />
                        </div>
                        <div class="col-md-2">
                            <label for="zip" class="form-label">PSČ</label>
                            <input type="number" class="form-control mb-4" id="zip" name="fakzip" placeholder="42069" required="required" autocomplete="off" />
                        </div>
                    </div>
                    <div class="row g-3 container bg-dark bg-opacity-10 rounded-4 border-bottom border-dark border-end">
                        <div class="col-md-12">
                            <h2>Kam chcete pizzu doručit?</h2>
                            <input type="radio" class="btn-check" name="doruceni" id="radioship1" value="Dorucovaci_adresa" checked />
                            <label class="btn btn-outline-warning mb-4 mt-4" for="radioship1">Doručovací adresa</label>

                            <input type="radio" class="btn-check" name="doruceni" id="radioship2" value="Fakturacni_adresa"/>
                            <label class="btn btn-outline-warning mb-4 mt-4" for="radioship2">Fakturační adresa</label>
                        </div>
                    </div>
                    <div class="row g-3 container bg-dark bg-opacity-10 rounded-4 border-bottom border-dark border-end">
                        <h2>Platební údaje</h2>
                        <div class="col-md-5">
                            <label for="cardnum" class="form-label">Číslo karty</label>
                            <input type="number" class="form-control" id="cardnum" name="cardnumber" placeholder="1234 5678 1234 5678" required="required" autocomplete="off" />
                        </div>
                        <div class="col-md-5">
                            <label for="cardname" class="form-label">Jméno a příjmení držitele</label>
                            <input type="text" class="form-control" id="cardname" name="cardname" placeholder="Karel Novák" required="required" autocomplete="off" />
                        </div>
                        <div class="col-md-2">
                            <label for="cardcvc" class="form-label">CVC</label>
                            <input type="number" class="form-control mb-4" id="cardcvc" name="cardcvc" placeholder="420" required="required" autocomplete="off" />
                        </div>
                    </div>
                    <div class="row g-3 container bg-dark bg-opacity-10 rounded-4 border-bottom border-dark border-end">

                        <h2>Pizza</h2>
                        <?php
                            include "pripoj_se_ty_databaze.php";
                            $conn = DbCon();

                            $sql = "SELECT * FROM pizzeria2.pizza";
                            $res = mysqli_fetch_all(mysqli_query($conn,$sql),MYSQLI_ASSOC);
                            foreach ($res as $item) {
                                echo ('
                                    <div class="input-group-sm mb-3 col-md-4">
                                        <img src="./obr/'.$item["nazev"].'.jpg" alt="'.$item["nazev"].'" class="col-12" />
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="checkbox"  name="pizza[]" value="'.$item["id_pizza"].'" aria-label="Checkbox for following text input" />
                                            <label  class="ml-2">'.ucfirst($item["nazev"]).'</label>
                                        </div>
                                        <input  name="pizzanum[]" type="number" class="form-control" value="" aria-label="Text input with checkbox" placeholder="Počet" autocomplete="off" />
                                    </div>
                                ');
                            }

                        ?>

                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="tos" required="required" />
                            <label class="form-check-label" for="tos">Souhlasím se smluvními podmínkami a přečetl jsem si podmínky používání</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" name="submit" class="btn btn-primary">Objednat</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
