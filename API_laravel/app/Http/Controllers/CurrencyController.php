<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

                                            // Prepare file for have Json response 
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

                                         //  FUNCTION FOR CREATE NEW CURRENCY AND SAVE THIS IN DATABASE
    public function store(Request $request)
    {
        $post = new Currency([
            'name' => $request->input('name'),
            'symbol' => $request->input('symbol')
            
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
                                // FUNCTION FOR SHOW A SPECIFIC DATA
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
                                // FUNCTION FOR UPDATE DATA 
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
                            // FUNCTION FOR DELETE DATA
    public function destroy($id)
    {
        $post = Currency::find($id);
        $post->delete();
        return response()->json('The post successfully deleted');
    }
}
