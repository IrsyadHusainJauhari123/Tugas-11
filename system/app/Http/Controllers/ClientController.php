<?php

namespace App\Http\Controllers;

use App\Models\produk;

class ClientController extends Controller
{
    function showabout()
    {
        return view('fontend.about');
    }

    function showlogin()
    {
        return view('fontend.login');
    }


    function showcart()
    {
        return view('fontend.cart');
    }


    function showcheckout()
    {
        return view('fontend.checkout');
    }


    function showsingle()
    {
        return view('fontend.single');
    }

    function showcontact()
    {
        return view('fontend.contact');
    }


    function showhome()
    {
        return view('fontend.home');
    }

    function showshop()
    {
        $data['list_produk'] = Produk::all();

        $data['list_produk'] = Produk::paginate(8);

        return view('fontend.shop', $data);
    }

    function sortBy()
    {
        $list_produk = Produk::all();
        $list_produk = $list_produk->sortBy('harga');
        $data['list'] = $list_produk;

        return view('fontend.shop', $data);
    }
}
