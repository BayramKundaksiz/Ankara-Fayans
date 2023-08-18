<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Fayans;

use App\Models\Seramik;

use App\Models\Tuvalet;

use App\Models\Banyo;

use App\Models\Referanslar;

use App\Models\GelenMesaj;



class AnasayfaController extends Controller
{
    public function anasayfa()
    {
        return view('theme.master');
    }

    public function yaptigimisler()
    {
        $fayansgetir = Fayans::all();
        $seramikgetir = Seramik::all();
        $banyogetir = Banyo::all();
        $tuvaletgetir = Tuvalet::all();
        return view('layouts.portfolio', compact('fayansgetir','seramikgetir','banyogetir','tuvaletgetir'));
    }

    public function hakkimda()
    {
        return view('layouts.about');
    }

    public function iletisim()
    {
        return view('layouts.contact');
    }

    public function referanslar()
    {
        $referanslar = Referanslar::all();
        return view('layouts.references', compact('referanslar'));
    }



    public function girisekrani()
    {
        if ( Auth::check() && Auth::user()->kullanici_turu == 1 )
            {
                return redirect()->route('yonet');
            }
            else
            {
                return view('auth.login');
            }

    }

    public function yonet()
    {
        $kullanici_turu = Auth::user()->kullanici_turu;

        if($kullanici_turu=='1')
        {
            $mesaj = GelenMesaj::all();

            return view('admin.home', compact('mesaj'));

        }

        else
        {
            return redirect()->route('anasayfa');
        }
    }

    public function gelenmesaj(Request $gelenmesaj)
    {
        $mesaj = new GelenMesaj;

        $mesaj->gonderici_adi=$gelenmesaj->gonderici_adi;

        $mesaj->gonderici_soyadi=$gelenmesaj->gonderici_soyadi;

        $mesaj->gonderici_email=$gelenmesaj->gonderici_email;

        $mesaj->gonderici_mesaji=$gelenmesaj->gonderici_mesaji;

        if($gelenmesaj->hasFile('gonderici_gorseli')){
            $gonderici_gorseli = $gelenmesaj->file('gonderici_gorseli');
            $gondericigorselismi = $gonderici_gorseli->getClientOriginalName();
            $gonderici_gorseli->move('images/gondericigorselleri', $gondericigorselismi);
            $mesaj->gonderici_gorseli = $gondericigorselismi;
        }

        $mesaj->save();

        return redirect()->back()->with('message','Görsel Başarıyla Eklendi');
    }

}
