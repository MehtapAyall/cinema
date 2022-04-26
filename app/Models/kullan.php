<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Input, Redirect;
use App\Models\admin;
use App\Models\musteri;
use App\Models\bilet;
use App\Models\film;


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
      
      return view('koltuk');

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
}
