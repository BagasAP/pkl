<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kejuruan;
class KejuruanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->get('cari')){
            $datas = Kejuruan::where("kd_kejuruan", "LIKE", "%{$request->get('cari')}%")->paginate(5);
        }else{
            $datas = Kejuruan::paginate(5);
        }

        $kejuruan= Kejuruan::all();
        return view('kejuruan.index', compact('kejuruan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $kejuruan = kejuruan::all();
        return view('kejuruan.create', compact('kejuruan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $kejuruan = new Kejuruan();
        $kejuruan->kd_kejuruan = $request->kd_kejuruan;
        $kejuruan->nama_kejuruan = $request->nama_kejuruan;
        $kejuruan->keterangan = $request->keterangan;
        $kejuruan->save();
        return redirect()->route('kejuruan.index');
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
        if (!Kejuruan::destroy($id)) return redirect()->back(); 
        return redirect()->route('kejuruan.index');
    }
}
