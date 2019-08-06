<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GiftExchange;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class GiftExchangeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $GiftExchange = auth()->user()->showMyGE();
    
        return view('ge.index', compact('GiftExchange'));
    }

    public function empty(GiftExchange $ge){

        return view('ge.empty', compact('ge'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ge.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['clave_privada' => Crypt::encryptString($request->input('clave_privada'))]);
        $ge = auth()->user()->giftExchange()->create($this->validateRequest());
    
        return redirect('/ge'.$ge->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(GiftExchange $ge)
    {
        
        return view('ge.show', compact('ge'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function unlock(GiftExchange $ge, Request $request)
    {
        return $this->comparePass(
            $request->input('pass'),
            $ge
        );
        
    }

    protected function validateRequest()
    {
        return request()->validate([
            'name' => 'sometimes|required', 
            'clave_privada' => 'sometimes|required',
        ]);
    }

    public function decrytpField(Request $request){
        $tmp = $request->input('clave_privada');
        $tmp = Crypt::decryptString($tmp);
        return $tmp;
    }

    protected function comparePass($pass,$ge){
        $tmp = Crypt::decryptString($ge->clave_privada);
        $matchError = 'Las Claves no coinciden';
            if($pass==$tmp){
            return view('ge.unlock', compact('ge'));
        }else{
            return view('ge.show', compact('ge','matchError'));
        }
    }
}
