<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roomtype;

class RoomtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Roomtype::all();
        return view('roomtype.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roomtype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Roomtype;
        $data->title=$request->title;
        $data->detail=$request->detail;
        $data->save();

        return redirect('admin/roomtype/create')->with('success','Data has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Roomtype::find($id);
        return view('roomtype.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $data=Roomtype::find($id);
        return view('roomtype.edit',['data'=>$data]);

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
        $data=Roomtype::find($id);
        $data->title=$request->title;
        $data->detail=$request->detail;
        $data->save();
      
        $data=Roomtype::find($id);
        return view('roomtype.edit',['data'=>$data]);
        return redirect('admin/roomtype/'.$id.'/edit')->with('success','Data has been Updated Successifully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Roomtype::where('id',$id)->delete();
        return redirect('admin/roomtype')->with('success','Data has been deleted Successifully.');
    }
}
