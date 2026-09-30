<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Placowka {
            protected $adres;
            protected $rok;
            protected $dane;
            protected $haslo;

            public function __construct($adres, $rok, $dane, $haslo) {
                $this->adres = $adres;
                $this->rok = $rok;
                $this->dane = $dane;
                $this->haslo = $haslo;
            }

            public function getAdress() {
                return $this->adres;
            }

            public function getYear() {
                return $this->rok;
            }

            public function getData() {
                return $this->dane;
            }

            public function getPassword($login) {
                if ($login == "admin") {
                    return $this->haslo;
                }
            }

            public function setAdress($adres) {
                $this->adres = $adres;
            }

            public function setYear($rok) {
                $this->rok = $rok;
            }

            public function setData($dane) {
                $this->dane = $dane;
            }

            public function setPassword($haslo) {
                $this->haslo = $haslo;
            }

            public function __destruct() {
                $this->adres = "";
                $this->rok = 0;
                $this->dane = "";
                $this->haslo = "";
            }
        }

        $teb = new Placowka("xd", 2020, "Sciany ze styropianu", "mamy_sciany_ze_styropianu");
        echo $teb->getPassword("admin");
    ?>
</body>
</html>
