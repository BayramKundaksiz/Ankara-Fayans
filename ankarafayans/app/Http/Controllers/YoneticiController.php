<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Fayans;

use App\Models\Seramik;

use App\Models\Banyo;

use App\Models\Tuvalet;

use App\Models\Referanslar;

use App\Models\GelenMesaj;

class YoneticiController extends Controller
{

    function giris()
    {

        if ( Auth::check() && Auth::user()->kullanici_turu == 1 )
            {
                $gelenmesajlar = GelenMesaj::all();
                return view('admin.home', compact('gelenmesajlar'));
            }
            else
            {
                return redirect()->route('anasayfa');
            }
    }

    function fayansekleme()
    {
        if ( Auth::check() && Auth::user()->kullanici_turu == 1 )
        {
            return view('admin.fayansekle');
        }
        else
        {
            return redirect()->route('anasayfa');
        }

    }

    function seramikekleme()
    {
        if ( Auth::check() && Auth::user()->kullanici_turu == 1 )
        {
            return view('admin.seramikekle');
        }
        else
        {
            return redirect()->route('anasayfa');
        }
    }

    function banyoekleme()
    {
        if ( Auth::check() && Auth::user()->kullanici_turu == 1 )
        {
            return view('admin.banyoekle');
        }
        else
        {
            return redirect()->route('anasayfa');
        }
    }

    function tuvaletekleme()
    {
        if ( Auth::check() && Auth::user()->kullanici_turu == 1 )
        {
            return view('admin.tuvaletekle');
        }
        else
        {
            return redirect()->route('anasayfa');
        }
    }

    function referansekleme()
    {
        if ( Auth::check() && Auth::user()->kullanici_turu == 1 )
        {
            return view('admin.referansekle');
        }
        else
        {
            return redirect()->route('anasayfa');
        }
    }


    public function fayanseklendi(Request $fayansbilgileri)
    {
        $fayans = new Fayans;

        $fayans->fayans_baslik=$fayansbilgileri->fayans_baslik;

        $fayans->fayans_aciklama=$fayansbilgileri->fayans_aciklama;

        if($fayansbilgileri->hasFile('fayans_gorseli')){
            $fayans_gorseli = $fayansbilgileri->file('fayans_gorseli');
            $fayansgorselismi = $fayans_gorseli->getClientOriginalName();
            $fayans_gorseli->move('images/fayans', $fayansgorselismi);
            $fayans->fayans_gorseli = $fayansgorselismi;
        }

        $fayans->save();

        return redirect()->back()->with('message','Görsel Başarıyla Eklendi');
    }

    public function seramikeklendi(Request $seramikbilgileri)
    {
        $seramik = new Seramik;

        $seramik->seramik_baslik=$seramikbilgileri->seramik_baslik;

        $seramik->seramik_aciklama=$seramikbilgileri->seramik_aciklama;

        if($seramikbilgileri->hasFile('seramik_gorseli')){
            $seramik_gorseli = $seramikbilgileri->file('seramik_gorseli');
            $seramikgorselismi = $seramik_gorseli->getClientOriginalName();
            $seramik_gorseli->move('images/seramik', $seramikgorselismi);
            $seramik->seramik_gorseli = $seramikgorselismi;
        }

        $seramik->save();

        return redirect()->back()->with('message','Görsel Başarıyla Eklendi');
    }

    public function banyoeklendi(Request $banyobilgileri)
    {
        $banyo = new Banyo;

        $banyo->banyo_baslik=$banyobilgileri->banyo_baslik;

        $banyo->banyo_aciklama=$banyobilgileri->banyo_aciklama;

        if($banyobilgileri->hasFile('banyo_gorseli')){
            $banyo_gorseli = $banyobilgileri->file('banyo_gorseli');
            $banyogorselismi = $banyo_gorseli->getClientOriginalName();
            $banyo_gorseli->move('images/banyo', $banyogorselismi);
            $banyo->banyo_gorseli = $banyogorselismi;
        }

        $banyo->save();

        return redirect()->back()->with('message','Görsel Başarıyla Eklendi');
    }

    public function tuvaleteklendi(Request $tuvaletbilgileri)
    {
        $tuvalet = new Tuvalet;

        $tuvalet->tuvalet_baslik=$tuvaletbilgileri->tuvalet_baslik;

        $tuvalet->tuvalet_aciklama=$tuvaletbilgileri->tuvalet_aciklama;

        if($tuvaletbilgileri->hasFile('tuvalet_gorseli')){
            $tuvalet_gorseli = $tuvaletbilgileri->file('tuvalet_gorseli');
            $tuvaletgorselismi = $tuvalet_gorseli->getClientOriginalName();
            $tuvalet_gorseli->move('images/tuvalet', $tuvaletgorselismi);
            $tuvalet->tuvalet_gorseli = $tuvaletgorselismi;
        }

        $tuvalet->save();

        return redirect()->back()->with('message','Görsel Başarıyla Eklendi');
    }

    public function referanseklendi(Request $referansbilgileri)
    {
        $referans = new Referanslar;

        $referans->referans_ismi=$referansbilgileri->referans_ismi;

        if($referansbilgileri->hasFile('referans_gorseli')){
            $referans_gorseli = $referansbilgileri->file('referans_gorseli');
            $referansgorselismi = $referans_gorseli->getClientOriginalName();
            $referans_gorseli->move('images/referans', $referansgorselismi);
            $referans->referans_gorseli = $referansgorselismi;
        }

        $referans->save();

        return redirect()->back()->with('message','Görsel Başarıyla Eklendi');
    }


}
