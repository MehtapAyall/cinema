<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Input, Redirect;
use App\Models\admin;
use App\Models\musteri;
use App\Models\bilet;
use App\Models\film;
use App\Models\tur;


class kullan extends Controller
{
    function kontrol(Request $request){
        //Validate requests
    $validator = Validator::make($request->all(), [
          'adi'=>'required|adi|unique:admins',
          'sifre'=>'required|sifre|min:4|max:12',

        ]);

        $userInfo = admin::where('adi','=', $request->adi)->first();

        if(!$userInfo){
            return back()->with('fail','Numaraya kayıtlı admin yok');
        }else{
            //check password
            if(admin::where($request->sifre, $userInfo->sifre)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('k');

            }else{
                return back()->with('fail','sifre Yanlıs');
            }
        }
    }
    public function alma (Request $req)
    {
      $kullani = new musteri();
      $kullani->ad=$req->ad;
      $kullani->soyad=$req->soyad;
      $kullani->email=$req->email;
      $kullani->filmid=$req->filmid;
      $kullani->biletid=$req->biletid;     
      $kullani->salon=$req->salon;
      $kullani->koltuk=$req->koltuk;
      $kullani->saat=$req->saat;
      $kullani->save(); 
      
      return back();

    }
    public function koltuk (Request $req)
    {
      
      
     
      return back();


    }
    public function goster()
    {
       $film=DB::table('films')->get();            
       return view('koltuk',['film'=> $film]);
    }
    public function filmadi($id)
    {
        /*$filmadi=film::where('id','=',$id)->get('filmadi');
        $data=film::find($id);
        return view('koltuk',$filmadi);*/
        $data = ['filmid'=>film::where('id','=', $id)->first()];
       
        
        return view('koltuk', $data);
    }

    public function ekle()
    {
        return view('filmekle');
    }
    public function ekle_post(Request $req)
    {
        $deger = new film;
    
        $deger->filmadi = $req->input('fadi');
        $deger->yapimci = $req->input('yapimci');
        $deger->yayinTarihi = $req->input('tarih');
        $deger->saat = $req->input('saat');
        if($req->hasfile('image'))
              {
                  $file = $req->file('image');
                  $extenstion = $file->getClientOriginalExtension();
                  $filename =$req->input('fadi').'.'.$extenstion;
                  $file->move('public/', $filename);
                  $deger->image = $filename;
              }
        $deger->save();
        
        if(isset($_POST['secim1']))
        {
            $deger2 = new tur;
            $deger2->filmid = $req->input('fadi');
            $deger2->tur = "Aksiyon";
            $deger2->save();
        }
        if(isset($_POST['secim2']))
        {
            $deger3 = new tur;
            $deger3->filmid = $req->input('fadi');
            $deger3->tur = "Animasyon";
            $deger3->save();
        }
        if(isset($_POST['secim3']))
        {
            $deger4 = new tur;
            $deger4->filmid = $req->input('fadi');
            $deger4->tur = "Belgesel";
            $deger4->save();
        }
        if(isset($_POST['seci4']))
        {
            $deger5 = new tur;
            $deger5->filmid = $req->input('fadi');
            $deger5->tur = "Bilimkurgu";
            $deger5->save();
        }
        if(isset($_POST['secim5']))
        {
            $deger6 = new tur;
            $deger6->filmid = $req->input('fadi');
            $deger6->tur = "Fantastik";
            $deger6->save();
        }
        if(isset($_POST['secim6']))
        {
            $deger7 = new tur;
            $deger7->filmid = $req->input('fadi');
            $deger7->tur = "Gerilim";
            $deger7->save();
        }
        if(isset($_POST['secim7']))
        {
            $deger8 = new tur;
            $deger8->filmid = $req->input('fadi');
            $deger8->tur = "Komedi";
            $deger8->save();
        }
        if(isset($_POST['secim8']))
        {
            $deger9 = new tur;
            $deger9->filmid = $req->input('fadi');
            $deger9->tur = "Korku";
            $deger9->save();
        }
        
        return redirect('filmekle');
    }
}
