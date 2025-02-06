<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stat;
use Brian2694\Toastr\Facades\Toastr;

class StatController extends Controller
{
    public function index()
    {
        $name = 'Stat';
        $title = 'Manage Stat';
        $lists = Stat::latest()->get();
        return view('back-end.landing.stat.index', compact('lists', 'name', 'title'));
    }

    public function create()
    {
        $name = 'Stat';
        $title = 'Add Stat';
        return view('back-end.landing.stat.create', compact('name', 'title'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'number' => 'required',
            'image' => 'required',
        ]);

        $info = new Stat();
        $info->title = $request->title;
        $info->number = $request->number;
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('back-end/stat/'), $fileName);
            $info->image = $fileName;
        }
        $info->save();
        Toastr::success('Data Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('stat.index');
    }

    public function edit($id)
    {
        $name = 'Stat';
        $title = 'Edit Stat';
        $info = Stat::find($id);
        return view('back-end.landing.stat.edit', compact('info', 'name', 'title'));
    }

    public function update(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'number' => 'required',
        ]);

        $info = Stat::find($request->id);
        $info->title = $request->title;
        $info->number = $request->number;
        
        if($request->hasfile('image')){
            $destination = public_path('back-end/stat/').$info->image;
            if(file_exists($destination)){
                @unlink($destination);
            }
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $fileName = time().'.'.$name;
            $file->move(public_path('back-end/stat'),$fileName);
            $info->image = $fileName;
        }

        $info->save();
        Toastr::success('Data Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('stat.index');
    }

    public function delete($id)
    {
        $info = Stat::find($id);
        $destination = public_path('back-end/stat/') . $info->image;
        if (file_exists($destination)) {
            @unlink($destination);
        }
        $info->delete();
        Toastr::success('Data Deleted Successfully', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('stat.index');
    }
}
