<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Layout 1 Kolom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>

    <header class="container bg-primary text-white">
        <div class="row">
            <div class="col-12 py-4 text-center">
                <h1 class="display-1">Pesona Alam</h1>
                <p class="lead">Ketenganan Dalam Arus Kehidupan</p>
            </div>
        </div>
    </header>

    <main class="container border">
        <div class="row">
            <div class="col-md-8 py-5">
                <h3>Sungai</h3>
                <p>Sungai adalah sungguh anugerah alam yang memukau dengan keindahan dan manfaatnya yang tak ternilai. Aliran air yang mengalir tenang dan gemericiknya yang menenangkan menjadi daya tarik bagi jiwa yang gelisah. Tema pesona alam sungai adalah "Ketenangan dalam Arus Kehidupan." Seperti sungai yang terus bergerak, hidup juga penuh perjalanan dan perubahan. Namun, kita dapat menemukan ketenangan di tengah-tengah arus kehidupan ini, menghadapi tantangan dengan keberanian dan menjalani setiap momen dengan penuh kesadaran. Sungai mengajarkan kita untuk mengalir dengan alamnya, menerima apa yang datang, dan bersyukur atas anugerah kehidupan yang tak tergantikan.</p>
            </div>
            <div class="col-md-4 py-5">
            
                <img src="<?php echo base_url('assets/img/sungai.jpg') ?>" class="d-block w-100" alt="...">

            </div>
        </div>
    </main>

    <footer class="container bg-primary text-white">
        <div class="row">
            <div class="col-12 py-4">
                &copy; 2021 Tutorial Bootstrap
            </div>
        </div>
    </footer>

</body>

</html>