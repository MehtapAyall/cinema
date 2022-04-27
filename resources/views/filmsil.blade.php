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
    <li><a href="/filmsil">Film Sil</a></li>
    <li><a href="/cikis">Çıkış</a></li> 
    </ul>
</div>

<div><center><br><br><br>
<center>
<table>
    <tr><td>
        <table>
        @foreach($data as $key => $fil)
            <tr><td name="film[]"><img src="public/{{$fil->image}}" height="300px" width="200px"></td><td>
           <div class="bilgi">
                <h4>{{$fil->filmadi}}</h4>
                <h4>{{$fil->saat}}</h4>
                <h4>{{$fil->id}}</h4>
               
                    <input type="hidden" value="{{$fil->id}}" name="id">
                <a href="delete/{{ $fil->id }}"><button>Filmi sil</button> </a>
            </div></td>
        </tr>
        @endforeach
        

                </table>
</div>
    
</body>
</html>