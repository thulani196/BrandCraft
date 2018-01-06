<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advert;
class AdvertsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $adverts = Advert::all();
        $adverts = Advert::paginate(12);  
        return view('dashboard.adverts',['adverts' => $adverts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/advert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'cover_photo' => 'max:1999',
            'details' => 'required',
        ]);

        if($request->hasFile('cover_photo')) {

            $fileWithExt = $request->file('cover_photo')->getClientOriginalName();
            $fileName = pathinfo($fileWithExt, PATHINFO_FILENAME);
            $ext = $request->file('cover_photo')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$ext;

            $path = $request->file('cover_photo')->storeAs('public/cover_images',$fileNameToStore);
        } else {
            $fileNameToStore = 'image.jpg';
        }

        $advert = new Advert;
        $advert->image = $fileNameToStore;
        $advert->title = $request->input('product_name');
        $advert->description = $request->input('details');

        $advert->save();

        return redirect('home/adverts')->with('success','Added!');
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
        $advert = Advert::find($id);
        return view('dashboard/edit_advert',['advert'=>$advert]);
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
        $this->validate($request, [
            'product_name' => 'required',
            'cover_photo' => 'max:1999',
            'details' => 'required',
        ]);

        if($request->hasFile('cover_photo')) {

            $fileWithExt = $request->file('cover_photo')->getClientOriginalName();
            $fileName = pathinfo($fileWithExt, PATHINFO_FILENAME);
            $ext = $request->file('cover_photo')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$ext;

            $path = $request->file('cover_photo')->storeAs('public/cover_images',$fileNameToStore);
        } else {
            $fileNameToStore = 'image.jpg';
        }

        $advert = Advert::find($id);
        $advert->image = $fileNameToStore;
        $advert->title = $request->input('product_name');
        $advert->description = $request->input('details');

        $advert->save();

        return redirect('home/adverts')->with('success','Product successfully edited!');
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
