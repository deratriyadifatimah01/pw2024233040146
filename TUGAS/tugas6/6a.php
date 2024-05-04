<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 6a</title>
    <style>
        .kotak {
            width: 60px;
            height: 60px;
            border: 1px solid black;
            color: black;
            display: flex;
            margin: 2.5px;
        }

        .kotak h2 {
            margin: auto;
        }


        .row {
            display: flex;
        }

        .row1 {
            .kotak {
                background-color: white;
            }
        }

        .row2 {
            .kotak {
                background-color: lightblue;
            }
        }
    </style>
</head>
<body>
    <?php if(!isset($_GET["angka"])) : ?>
        <h1>Variable angka belum dimasukan di dalam url</h1>
    <?php else : ?>
        <?php for ($x = $_GET["angka"]; $x >= 1; $x--) : ?>
            <?php if($x % 2 === 0) : ?>
                <div class="row row1">
            <?php else : ?>
                <div class="row row2">
            <?php endif; ?>
                <?php for ($y = 1; $y <= $x; $y++) : ?>
                    <div class="kotak"><h2><?= "$x" ?></h2></div>
                <?php endfor ; ?>
                    <br>            
        </div>
        <?php endfor ; ?>
    <?php endif; ?>
</body>
</html>