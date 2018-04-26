<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('convert');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function convert(Request $request)
    {
        $input = $request->input('input');
        $dropdown = $request->input('dropdown');
        $dropdown1 = $request->input('dropdown1');

        switch($dropdown1){
            case 'EUR': $rate = 1.00000;break;
            case 'USD': $rate = 1.23873;break;
            case 'JPY': $rate = 132.709;break;
            case 'BGN': $rate = 1.95583;break;
            case 'CZK': $rate = 25.3076;break;
            case 'DKK': $rate = 7.44828;break;
            case 'GBP': $rate = 0.869701;break;
            case 'HUF': $rate = 310.192;break;
            case 'PLN': $rate = 4.16154;break;
            case 'RON': $rate = 4.65392;break;
            case 'SEK': $rate = 10.3880;break;
            case 'CHF': $rate = 1.19727;break;
            case 'ISK': $rate = 123.278;break;
            case 'NOK': $rate = 9.59447;break;
            case 'HRK': $rate = 7.41092;break;
            case 'RUB': $rate = 75.7040;break;
            case 'TRY': $rate = 4.98515;break;
            case 'AUD': $rate = 1.58918;break;
            case 'BRL': $rate = 4.18400;break;
            case 'CAD': $rate = 1.55978;break;
            case 'CNY': $rate = 7.76492;break;
            case 'HKD': $rate = 9.71722;break;
            case 'IDR': $rate = 17052.74;break;
            case 'ILS': $rate = 4.35293;break;
            case 'INR': $rate = 81.4195;break;
            case 'KRW': $rate = 1315.20;break;
            case 'MXN': $rate = 22.7721;break;
            case 'MYN': $rate = 4.78966;break;
            case 'NZD': $rate = 1.70523;break;
            case 'PHP': $rate = 64.0939;break;
            case 'SGD': $rate = 1.61613;break;
            case 'THB': $rate = 38.5163;break;
            case 'ZAR': $rate = 14.8327;break;
            default: $rate = "";break;
        }

        if ($dropdown1 == 'IDR' ||$dropdown1 = 'KRW'){
            $result = number_format(($input * $rate), 2);
        } else {
            $result = $input * $rate;
        }

        $to = $request->input('dropdown1');
        
        return view('convert')->with([
            'result' => $result,
            'amount' => $input,
            'from' => $dropdown,
            'to' => $to
        ]);
    }
}
