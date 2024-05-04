<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6b</title>
    <style>
        .kotak {
            display: flex;
            width: 50px;
            height: 50px;
            color : white;
            border : 1px solid black;
            border-radius : 2px;
            margin : 2px;
        }

        .kotak h2 {
            margin : auto;

        }

        .row {
            display : flex;
        }

        .row-1 {
            .kotak {
                background-color: plum
            }
        }

        .row-2 {
            .kotak{
                background-color: lightskyblue;
            }
        }

        form {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="angka">Masukkan Angka :</label>
        <input type="text" name="jumlah_angka" id="angka">
        <input type="submit">
    </form>

    <?php if (!isset($_POST["jumlah_angka"])) : ?>
        <h2>Masukkan variabel angka</h2>
    <?php else : ?>
        <?php for ($i = $_POST["jumlah_angka"]; $i >= 1; $i--) : ?>
            <?php if($i % 2 === 0) : ?>
                <div class="row row-1">
            <?php else : ?>
                <div class="row row-2">
            <?php endif; ?>
                <?php for ($j = 1; $j <= $i; $j++) : ?>
                    <div class="kotak"><h2><?= "$i" ?></h2></div>
                <?php endfor; ?>
                    <br>
                </div>
            <?php endfor; ?>
        <?php endif; ?>
</body>
</html>