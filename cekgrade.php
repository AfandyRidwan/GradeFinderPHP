<?php
    class Grade {
        var $nama;
        var $nilai;

        function setNama($nl) {
            $this->nilai = $nl;
        }


        function getNilai() {
            if ($this->nilai <= 100 && $this->nilai >=80) {
                $jumlah = "<div class='col-sm-6'>
                <div class='card bg-light mb-3' style='margin-right: 30%; margin-top: 10%;'>
                <div class='card border-warning'>
                <div class='card-body'>
                <img src='a.png' style='width: 180px; margin-left: 75px; margin-bottom: 10px;'>
                <p>Grade kamu adalah A</p><br>
                <p>Selamat kamu mendapat nilai sempurna! pertahankan nilai ini dengan giat belajar!</p>
                </div></div>
                </div></div>";
            } elseif ($this->nilai <= 79 && $this->nilai >= 70) {
                $jumlah = "<div class='col-sm-6'>
                <div class='card bg-light mb-3' style='margin-right: 30%; margin-top: 10%;'>
                <div class='card border-warning'>
                <div class='card-body'>
                <img src='b.png' style='width: 180px; margin-left: 75px; margin-bottom: 10px;'>
                <p>Grade kamu adalah B</p><br>
                <p>Tingkatkan lagi intensitas belajar kamu agar mendapat nilai yang sempurna!</p>
                </div></div>
                </div></div>";
            } elseif ($this->nilai <= 69 && $this->nilai >= 60) {
                $jumlah = "<div class='col-sm-6'>
                <div class='card bg-light mb-3' style='margin-right: 30%; margin-top: 10%;'>
                <div class='card border-warning'>
                <div class='card-body'>
                <img src='c.png' style='width: 180px; margin-left: 75px; margin-bottom: 10px;'>
                <p>Grade kamu adalah C</p><br>
                <p>Ayo kamu bisa mendapat nilai yang lebih baik!</p>
                </div></div>
                </div></div>";
            } elseif ($this->nilai <= 59 && $this->nilai >= 50) {
                $jumlah = "<div class='col-sm-6'>
                <div class='card bg-light mb-3' style='margin-right: 30%; margin-top: 10%;'>
                <div class='card border-warning'>
                <div class='card-body'>
                <img src='d.png' style='width: 180px; margin-left: 75px; margin-bottom: 10px;'>
                <p>Grade kamu adalah D</p><br>
                <p>Ayo lebih giat dalam belajar agar mendapat nilai lebih baik!</p>
                </div></div>
                </div></div>"; 
            } else {
                $jumlah = "<div class='col-sm-6'>
                <div class='card bg-light mb-3' style='margin-right: 30%; margin-top: 10%;'>
                <div class='card border-warning'>
                <div class='card-body'>
                <img src='e.png' style='width: 180px; margin-left: 75px; margin-bottom: 10px;'>
                <p>Grade kamu adalah E</p><br>
                <p>Tingkatkan keseriusanmu dalam belajar! Nilai kamu sangat rendah! </p>
                </div></div>
                </div></div>"; 
            }

            return $jumlah;
        }
} 

?>

<?php
    $grade = new Grade;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Grade Nilai</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body background="black.jpg">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card bg-light mb-3" style="max-width: 18rem; margin-left: 30%; margin-top: 10%;">
                    <div class="card">
                        <div class="card-header">
                            <p style="height: 10px;">Silahkan memasukan nilai</p>
                        </div>
                            <div class="card-body">
                                <form action="" method="GET">
                                    <input type="text" name="nilai" placeholder="Masukan Nilai" required=""> 
                                    <input class="btn btn-info" type="submit" style="margin-top: 5px;" name="cek" value="Cek">
                                </form>
                            </div>
                    </div>
                </div>
            </div>

            <?php
                if (isset($_GET["cek"])) {
                    $punten = $grade->setNama($_GET["nilai"]);
                    echo $grade->getNilai();
                }
            ?> 
            
        </div>
    </div>
</body>
</html>