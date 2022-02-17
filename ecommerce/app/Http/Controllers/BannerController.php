<?php

namespace App\Http\Controllers;
use App\Models\Banner;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners= Banner::all(); 
        return view('admin.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner=new Banner;
        $banner->id= $request->banner;
        $banner->title= $request->title;
        $banner->heading= $request->heading;
        $banner->description= $request->description;
        $banner->image= $request->image->store('banner');
        $banner->save();
         return redirect()->back()->with('message','New Banner Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status(Banner $banner)
    {
        if($banner->status==1){
            $banner->update(['status'=>0]);
        }else{
            $banner->update(['status'=>1]);
        }
        return redirect()->back()->with('message','Status changed successfully');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
         return view('admin.banner.edit',compact('banner')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $update=$banner->update([
            'title'=>$request->title,
            'heading'=>$request->heading,
            'description'=>$request->description,
            'image'=>$request->file('image')->store('banner')
        ]);
        if($update){
            return redirect('/banners')->with('message','New banner updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Banner $banner)
    {
        unlink(storage_path('app/public/'.$banner->image));
        $delete=$banner->delete();
        if($delete){
            return redirect()->back()->with('message','Banner deleted successfully');
        }
    }
}
