<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Rates;
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
        $currencies = Currency::all();
        return $currencies->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Currency([
            'name' => $request->input('name'),
            'symbol' => $request->input('symbol'),
            'start_id' => $request->input('start_id'),
            'end_id' => $request->input('end_id')
        ]);

        $post->save();
        return response()->json('The post successfully added');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $post = Currency::find($id);
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $post = Currency::find($id);
        $post->update($request->all());
        return response()->json('The post successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Currency::find($id);
        $post->delete();
        return response()->json('The post successfully deleted');
    }
}
