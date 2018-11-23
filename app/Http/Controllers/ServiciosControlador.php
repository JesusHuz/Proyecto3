<?php

namespace App\Http\Controllers;
use App\Servicio;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ServiciosControlador extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');//que siempre verifique que este autorizado
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'Informacion de servicios';
        $servicios = Servicio::where('user_id', auth()->user()->id)
        ->where('id',1)
        ->first();

       // $servicios = $servicios->orderBy('nombre', 'desc')->paginate(5);//paginado viene 15 pro defecto(numero)
        //$propietarios= Propietario::orderBy('nombre','desc')->get()->paginate();

        return view('servicios.index', compact('servicios','title'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $servicio = new Servicio($request->all());

        $servicio->telefono  = $request->get('telefono');
        $servicio->internet  = $request->get('internet');
        $servicio->cable  = $request->get('cable');

        $tlf  = $request->get('telefono');
        $inter  = $request->get('internet');
        $cab  = $request->get('cable');

        	//----------------internetc------------------
			if ($inter == 256) {$interc = 10;} 
            if($inter == 512) {$interc = 20;}
            if($inter == 1024) {$interc = 30;}
			//----------------telefonoc------------------	
			if ($tlf == 200) {$tlfc = 2;} 
            if ($tlf == 400) {$tlfc = 4;}
            if ($tlf == 600) {$tlfc = 6;}
			//----------------cablec--------------------
			if ($cab == "paja") {$cabc = 15;} 
			if($cab == "madera") {$cabc = 25;} 
            if($cab == "ladrillo") {$cabc =35;}
            
            //-------------------------------------------
            
        $servicio->ctelefono  = $tlfc;
        $servicio->cinternet  = $interc;
        $servicio->ccable  = $cabc;
        $servicio->total  = $cabc+$interc+$tlfc;
        $servicio->user_id = auth()->user()->id;

        $servicio->save();

        return redirect()->route('servicios.show', $servicio);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio = Servicio::where('user_id', auth()->user()->id)
        ->where('id',$id)
        ->first();

        return view('servicios.show',compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicios = Servicio::where('user_id', auth()->user()->id)
            ->where('id', $id)
            ->first();

        return view('servicios.edit', compact('servicios'));
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
        $servicio = Servicio::where('user_id', auth()->user()->id)
        ->where('id', $id)
        ->first();

        $servicio->telefono  = $request->get('telefono');
        $servicio->internet  = $request->get('internet');
        $servicio->cable  = $request->get('cable');

        $tlf  = $request->get('telefono');
        $inter  = $request->get('internet');
        $cab  = $request->get('cable');

        	//----------------internetc------------------
			if ($inter == 256) {$interc = 10;} 
            if($inter == 512) {$interc = 20;}
            if($inter == 1024) {$interc = 30;}
			//----------------telefonoc------------------	
			if ($tlf == 200) {$tlfc = 2;} 
            if ($tlf == 400) {$tlfc = 4;}
            if ($tlf == 600) {$tlfc = 6;}
			//----------------cablec--------------------
			if ($cab == "paja") {$cabc = 15;} 
			if($cab == "madera") {$cabc = 25;} 
            if($cab == "ladrillo") {$cabc =35;}
            
            //-------------------------------------------
            
        $servicio->ctelefono  = $tlfc;
        $servicio->cinternet  = $interc;
        $servicio->ccable  = $cabc;
        $servicio->total  = $cabc+$interc+$tlfc;
        $servicio->user_id = auth()->user()->id;

        // Guarda en la base de datos
        $servicio->save();

        return redirect()->route('servicios.show', $servicio);
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
}
