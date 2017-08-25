<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maras0830\Pay2Go\Pay2Go;

class CashController extends Controller
{
    public function index()
    {
        return view('cash.index');
    }

    public function store(Request $request)
    {
        $form = $request->except('_token');

        // 建立商店
        $pay2go = new Pay2Go(env('CASH_STORE_ID'), env('CASH_STORE_HashKey'), env('CASH_STORE_HashIV'));

        // 商品資訊
        $order = $pay2go->setOrder($form['MerchantOrderNo'], $form['Amt'], $form['ItemDesc'], $form['Email'])->submitOrder();


        // 將資訊回傳至自定義 view javascript auto submit
        return view('cash.submit')->with(compact('order'));
    }
}
