<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/a.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/baglanti.css') }}" type="text/css">
    <title>Film Ekleme</title>
</head>
<body class="üst">
<div>
    <ul>
    <li><a href="#"><b> X-CİNEMA SALONU </b></a></li>
    <li><a href="/k">Ana Sayfa</a></li>
    <li><a href="/biletler">Biletler</a></li>
    <li><a href="/filmekle">Film Ekle</a></li>
    <li><a href="/cikis">Çıkış</a></li> 
    </ul>
</div>

<div><center><br><br><br>
    <form action='/filmekle' method='post' enctype="multipart/form-data">
    {{ csrf_field() }}
    <table >
        <tr><td>Afiş:</td>  <td><input type="file" name="image" required class="course form-control" style="width: 200px;"> </td>
    <td rowspan="5">
    <h3> Film Türü </h3>
    <input type="checkbox" name="secim1" style="width:100px;"> Aksiyon <br>
    <input type="checkbox" name="secim2" style="width:100px;"> Animasyon  <br>
    <input type="checkbox" name="secim3" style="width:100px;"> Belgesel <br>
    <input type="checkbox" name="secim4" style="width:100px;"> Bilimkurgu <br>
    <input type="checkbox" name="secim5" style="width:100px;"> Fantastik  <br>
    <input type="checkbox" name="secim6" style="width:100px;"> Gerilim  <br>
    <input type="checkbox" name="secim7" style="width:100px;"> Komedi  <br>
    <input type="checkbox" name="secim8" style="width:100px;"> Korku  <br>
    </td></tr>
        <tr> <td>Film Adı:</td>  <td><input type="text" name="fadi"> </td></tr>
        <tr><td>Yapımcı:</td>  <td><input type="text" name="yapimci"> </td></tr>
        <tr><td>Yayın Tarihi:</td>  <td><input type="text" name="tarih"> </td></tr>
        <tr><td>Saat:</td>  <td><input type="text" name="saat"> </td></tr>
        <tr><td></td><td><button name="ekle">Ekle</button></td></tr>
    </table>
    </form></center>
</div>
    
</body>
</html>