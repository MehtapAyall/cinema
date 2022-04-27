<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/a.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/baglanti.css') }}" type="text/css">
    <title>Biletler</title>
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
 <div>
    <table class="ttasarım">
        <thead>
        <tr>
            <th>Salon</th>
            <th>Koltuk</th>
            <th>Saat</th>
            <th>Ücret</th>
        </tr>
        </thead>
        <tbody>
        @foreach($biletler as $key => $item)
            <tr>                   
                <td>{{$item['salon']}}</td>
                <td>{{$item['koltuk']}}</td>
                <td>{{$item['saat']}}</td>
                <td>{{$item['ucret']}}</td>
            </tr>
        @endforeach
        </tbody>
    </tale>

 </div>
    
</body>
</html>