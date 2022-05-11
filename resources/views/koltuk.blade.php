
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Filmler</title>
</head>

</html><link rel="stylesheet" href="{{ asset('css/a.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/baglanti.css') }}" type="text/css">
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

<div >
    <center>
        

<dialog id="koltuksec" style="width:60%; background-color:rgba(255, 255, 255, 0.932); border:1px dotted black; box-shadow: 0 0 6px 4px rgba(0, 0, 0, 0.404);border-radius: 8%;"  
>
<form method="post" action="{{route('musteri')}}">
        @csrf
<table  style="width:60%;">
    
   
    
<tr>
  <th></th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th>
</tr>

<tr >
<td><h1> A</h1></td>
<td><input class="cek" type="checkbox" id="a1" height="50px" width="50px" value="a1" name="koltuk">A1 </td>
<td><input class="cek" type="checkbox" id="a2" height="50px" width="50px" value="a2" name="koltuk">A2</td>
<td><input class="cek" type="checkbox" id="a3" height="50px" width="50px" value="a3" name="koltuk">A3</td>
<td><input class="cek" type="checkbox" id="a4" height="50px" width="50px" value="a4" name="koltuk">A4</td>
<td><input class="cek" type="checkbox" id="a5" height="50px" width="50px" value="a5" name="koltuk">A5</td>
<td><input class="cek" type="checkbox" id="a6" height="50px" width="50px" value="a6" name="koltuk">A6</td>
<td><input class="cek" type="checkbox" id="a7" height="50px" width="50px" value="a7" name="koltuk">A7</td>
<td><input class="cek" type="checkbox" id="a8" height="50px" width="50px" value="a8" name="koltuk">A8</td>
<td><input class="cek" type="checkbox" id="a9" height="50px" width="50px" value="a9" name="koltuk">A9</td>
<td><input class="cek" type="checkbox" id="a10" height="50px" width="50px" value="a10" name="koltuk">A10</td>
</tr>

<tr>
<td><h1> B</h1></td><td><input class="cek" type="checkbox" id="b1" height="50px" width="50px" select" value="b1" name="koltuk">B1</td>
<td><input class="cek" type="checkbox" name="koltuk" id="b2" height="50px" width="50px" value="b2" onclick="style="background: black"">B2</td>
<td><input class="cek" type="checkbox" name="koltuk" id="b3" height="50px" width="50px" value="b3">B3</td>
<td><input class="cek" type="checkbox" name="koltuk" id="b4" height="50px" width="50px" value="b42">B4</td>
<td><input class="cek" type="checkbox" name="koltuk" id="b5" height="50px" width="50px" value="b5">B5</td>
<td><input class="cek" type="checkbox" name="koltuk" id="b6" height="50px" width="50px" value="b6">B6</td>
<td><input class="cek" type="checkbox" name="koltuk" id="b7" height="50px" width="50px" value="b7">B7</td>
<td><input class="cek" type="checkbox" name="koltuk" id="b8" height="50px" width="50px" value="b8">B8</td>
<td><input class="cek" type="checkbox" name="koltuk" id="b9" height="50px" width="50px" value="b9">B9</td>
<td><input class="cek" type="checkbox" name="koltuk" id="b10" height="50px" width="50px" value="b10">B10</td>
<tr>
<td><h1> C</h1></td><td><input class="cek" type="checkbox" id="c1" height="50px" width="50px" select" value="c1" name="koltuk">C1</td>
<td><input class="cek" type="checkbox" name="koltuk" id="c2" height="50px" width="50px" value="c2" onclick="style="background: black"">C2</td>
<td><input class="cek" type="checkbox" name="koltuk" id="c3" height="50px" width="50px" value="c3">C3</td>
<td><input class="cek" type="checkbox" name="koltuk" id="c4" height="50px" width="50px" value="c4">C4</td>
<td><input class="cek" type="checkbox" name="koltuk" id="c5" height="50px" width="50px" value="c5">C5</td>
<td><input class="cek" type="checkbox" name="koltuk" id="c6" height="50px" width="50px" value="c6">C6</td>
<td><input class="cek" type="checkbox" name="koltuk" id="c7" height="50px" width="50px" value="c7">C7</td>
<td><input class="cek" type="checkbox" name="koltuk" id="c8" height="50px" width="50px" value="c8">C8</td>
<td><input class="cek" type="checkbox" name="koltuk" id="c9" height="50px" width="50px" value="c9">C9</td>
<td><input class="cek" type="checkbox" name="koltuk" id="c10" height="50px" width="50px" value="c10">C10</td>
</tr>
<tr>

<td><h1> D</h1></td><td><input class="cek" type="checkbox" id="d1" height="50px" width="50px" select" value="d1" name="koltuk">D1</td>
<td><input class="cek" type="checkbox" name="koltuk"  id="d2" height="50px" width="50px" value="d2" onclick="style="background: black"">D2</td>
<td><input class="cek" type="checkbox" name="koltuk" id="d3" height="50px" width="50px" value="d3">D3</td>
<td><input class="cek" type="checkbox" name="koltuk" id="d4" height="50px" width="50px" value="d4">D4</td>
<td><input class="cek" type="checkbox" name="koltuk" id="d5" height="50px" width="50px" value="d5">D5</td>
<td><input class="cek" type="checkbox" name="koltuk" id="d6" height="50px" width="50px" value="d6">D6</td>
<td><input class="cek" type="checkbox" name="koltuk" id="d7" height="50px" width="50px" value="d7">D7</td>
<td><input class="cek" type="checkbox" name="koltuk" id="d8" height="50px" width="50px" value="d8">D8</td>
<td><input class="cek" type="checkbox" name="koltuk" id="d9" height="50px" width="50px" value="d9">D9</td>
<td><input class="cek" type="checkbox" name="koltuk" id="d10" height="50px" width="50px" value="d10">D10</td>
</tr>

    <table>
    
   
         
         <tr><td><input type="text" placeholder="filmadı" name="filmid" value="" ></td></tr>
        
    <tr> <td> <input  placeholder=" salon no"  type="text" name="salon" value=""> </td></tr>
   
    <tr> <th> <input placeholder="saat"  type="text" name="saat" value=""> </th></tr>
    <tr> <th> <input placeholder=ücret type="text" name="ucret" value=""> </th></tr>
    
    <tr><td><input type="text" placeholder="e-mail" name="email"></td></tr>
        <tr><td><input type="text" placeholder="ad" name="ad"></td></tr>
        <tr><td><input type="text" placeholder="soyad" name="soyad"></td></tr>

  </table><br>
  
  <button name="btn_giris" class="btn btn-block btn-primary "  >BİLET AL</button>


</form>

<form action="" method="get">
        @csrf
<button id="hide" >Pencereyi Kapat</button></form>
</dialog>

</body>
</center>

 
<center>
<table>
    <tr><td>
        <table>
        @foreach($film as $key => $fil)
            <tr><td name="film[]"><img src="public/{{$fil->image}}" height="300px" width="200px"></td><td>
           <div class="bilgi">
                <h4>{{$fil->filmadi}}</h4>
                <h4>{{$fil->saat}}</h4>
                <p>{{$fil->yayinTarihi}}</p>
                <p>{{$fil->yapimci}}</p>
                <button id="{{$key}}"  href="{{url('filmadi',$fil->id)}}">İçeriği Göster</button>
            </div></td>
        </tr>
        @endforeach
        
        <tr><form action="{{route('bilet')}}" method="get">
@csrf        
<button type="submit">GÜNCELLE</button></form></tr>
                </table>
</table>

</body>

<script src=""></script>
<script type="text/JavaScript">
(function() {
    var dialog = document.getElementById('koltuksec');
    document.getElementById('0').onclick = function() {
        dialog.show();
    };
    var dialog = document.getElementById('koltuksec');
    document.getElementById('1').onclick = function() {
        dialog.show();
    };
    var dialog = document.getElementById('koltuksec');
    document.getElementById('2').onclick = function() {
        dialog.show();
    };
    var dialog = document.getElementById('koltuksec');
    document.getElementById('3').onclick = function() {
        dialog.show();
    };
    var dialog = document.getElementById('koltuksec');
    document.getElementById('4').onclick = function() {
        dialog.show();
    };
    var dialog = document.getElementById('koltuksec');
    document.getElementById('5').onclick = function() {
        dialog.show();
    };
    var dialog = document.getElementById('koltuksec');
    document.getElementById('6').onclick = function() {
        dialog.show();
    };
    var dialog = document.getElementById('koltuksec');
    document.getElementById('7').onclick = function() {
        dialog.show();
    };
    document.getElementById('hide').onclick = function() {
        dialog.close();
    };
   
var a1=document.querySelector("#a1");

    a1.onclick=function(){
            this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
            this.style.border="red 5px solid";

             
                }
    var a2=document.querySelector("#a2");
    a2.onclick=function(){
            this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
            this.style.border="red 5px solid";
             
                }
        var a3=document.querySelector("#a3");
        a3.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var a4=document.querySelector("#a4");
        a4.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var a5=document.querySelector("#a5");
        a5.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var a6=document.querySelector("#a6");
        a6.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var a7=document.querySelector("#a7");
        a7.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var a8=document.querySelector("#a8");
        a8.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var a9=document.querySelector("#a9");
        a9.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var a9=document.querySelector("#a10");
        a10.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
    

var b1=document.querySelector("#b1");
    b1.onclick=function(){
            this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
            this.style.border="red 5px solid";
             
                }
    var b2=document.querySelector("#b2");
    b2.onclick=function(){
            this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
            this.style.border="red 5px solid";
             
                }
        var b3=document.querySelector("#b3");
        b3.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var b4=document.querySelector("#b4");
        b4.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var b5=document.querySelector("#b5");
        b5.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var b6=document.querySelector("#b6");
        b6.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var b7=document.querySelector("#b7");
        b7.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var b8=document.querySelector("#b8");
        b8.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var b9=document.querySelector("#b9");
        b9.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var b9=document.querySelector("#b10");
        b10.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }    
            
var c1=document.querySelector("#c1");
    c1.onclick=function(){
            this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
            this.style.border="red 5px solid";
             
                }
        var c2=document.querySelector("#c2");
        c2.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
             
                }
        var c3=document.querySelector("#c3");
        c3.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var c4=document.querySelector("#c4");
        c4.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var c5=document.querySelector("#c5");
        c5.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var c6=document.querySelector("#c6");
        c6.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var c7=document.querySelector("#c7");
        c7.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var c8=document.querySelector("#c8");
        c8.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var c9=document.querySelector("#c9");
        c9.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }  
                var c10=document.querySelector("#c10");
        c10.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                } 


                var d1=document.querySelector("#d1");
    d1.onclick=function(){
            this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
            this.style.border="red 5px solid";
             
                }
        var d2=document.querySelector("#d2");
        d2.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
             
                }
        var d3=document.querySelector("#d3");
        d3.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var d4=document.querySelector("#d4");
        d4.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var d5=document.querySelector("#d5");
        d5.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var d6=document.querySelector("#d6");
        d6.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var d7=document.querySelector("#d7");
        d7.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var d8=document.querySelector("#d8");
        d8.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }
        var d9=document.querySelector("#d9");
        d9.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                }  
                var d10=document.querySelector("#d10");
        d10.onclick=function(){
                this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
                this.style.border="red 5px solid";
                
                } 
 })();
</script>