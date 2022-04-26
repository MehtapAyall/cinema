<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/baglanti.css') }}">
    <title></title>
  </head>
  <body class="üst">
    <div class="alan"> <center>
      <h1>X-SİNEMA SİSTEMİ GİRİŞ PANALİ</h1>  
      <form action="{{ route('kayitkontrol') }}" method="post">
            @if(Session::get('fail'))
               <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif  
            @csrf
      <table>
    

         
        <tr> <td> Kullanıcı Adı: </td><th> <input type="text" name="adi" value=""> </th></tr>
        <tr> <td >Şifre: </td><th> <input type="text" name="sifre" value=""> </th></tr>
      </table><br>
      <button type="submit" name="btn_giris" class="btn btn-block btn-primary " onClick="location='/k'" > GİRİŞ YAP</button>
      
           </form>
  </body>
</html>
