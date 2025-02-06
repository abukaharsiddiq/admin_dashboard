<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hero;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class HeroSectionController extends Controller
{
    public function index()
    {
        $name = 'Hero';
        $title = 'Manage Hero';
        $lists = Hero::latest()->get();
        return view('back-end.landing.hero.index', compact('lists', 'name', 'title'));
    }

    public function create()
    {
        $name = 'Hero';
        $title = 'Add Hero';
        return view('back-end.landing.hero.create', compact('name', 'title'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title1' => 'required|string|max:255',
            'title2' => 'required|string|max:255',
            'title3' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'required',
            'button_text' => 'required|string|max:255',
        ]);

        $info = new Hero();
        $info->title1 = $request->title1;
        $info->title2 = $request->title2;
        $info->title3 = $request->title3;
        $info->description = $request->description;
        $info->button_text = $request->button_text;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('back-end/hero/'), $fileName);
            $info->image = $fileName;
        }

        $info->save();
        Toastr::success('Data Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('hero.index');
    }

    public function edit($id)
    {
        $name = 'Hero';
        $title = 'Edit Hero';
        $info = Hero::findOrFail($id);
        return view('back-end.landing.hero.edit', compact('info', 'name', 'title'));
    }

    public function update(Request $request)
    {
        // Validate the request
        // $request->validate([
        //     'title1' => 'required|string|max:255',
        //     'title2' => 'required|string|max:255',
        //     'title3' => 'required|string|max:255',
        //     'description' => 'required|string|max:255',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'button_text' => 'required|string|max:255',
        // ]);

        $info = Hero::findOrFail($request->id);
        $info->title1 = $request->title1;
        $info->title2 = $request->title2;
        $info->title3 = $request->title3;
        $info->description = $request->description;
        $info->button_text = $request->button_text;

        if($request->hasfile('image')){
            $destination = public_path('back-end/hero/').$info->image;
            if(file_exists($destination)){
                @unlink($destination);
            }
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $fileName = time().'.'.$name;
            $file->move(public_path('back-end/hero'),$fileName);
            $info->image = $fileName;
        }

        $info->save();
        Toastr::success('Data Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('hero.index');
    }

    public function delete($id)
    {
        $info = Hero::findOrFail($id);
        $destination = public_path('back-end/hero/').$info->image;
        if(file_exists($destination)){
            @unlink($destination);
        }
        $info->delete();
        Toastr::success('Data Deleted Successfully', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('hero.index');
    }
}
