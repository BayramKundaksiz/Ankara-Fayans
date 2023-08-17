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
        return view('auth.login');
    }

    public function yonet()
    {
        $kullanici_turu = Auth::user()->kullanici_turu;

        if($kullanici_turu=='1')
        {
            return view('admin.home');
        }

        else
        {
            return view('theme.master');
        }
    }

}
