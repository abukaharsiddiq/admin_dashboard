<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technology;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class TechnologyController extends Controller
{
    public function index()
    {
        $name = 'Technology';
        $title = 'Manage Technology';
        $lists = Technology::latest()->get();
        return view('back-end.landing.technology.index', compact('lists', 'name', 'title'));
    }

    public function create()
    {
        $name = 'Technology';
        $title = 'Add Technology';
        return view('back-end.landing.technology.create', compact('name', 'title'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required',
        ]);

        $info = new Technology();
        $info->title = $request->title;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('back-end/technology/'), $fileName);
            $info->image = $fileName;
        }
        $info->save();
        Toastr::success('Data Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('technology.index');
    }

    public function edit($id)
    {
        $name = 'Technology';
        $title = 'Edit Technology';
        $info = Technology::find($id);
        return view('back-end.landing.technology.edit', compact('info', 'name', 'title'));
    }

    public function update(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $info = Technology::find($request->id);
        $info->title = $request->title;

        if($request->hasfile('image')){
            $destination = public_path('back-end/technology/').$info->image;
            if(file_exists($destination)){
                @unlink($destination);
            }
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $fileName = time().'.'.$name;
            $file->move(public_path('back-end/technology'),$fileName);
            $info->image = $fileName;
        }

        $info->save();
        Toastr::success('Data Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('technology.index');
    }

  
    public function delete($id)
    {
        $info = Technology::find($id);
        $destination = public_path('back-end/technology/') . $info->image;
        if (file_exists($destination)) {
            @unlink($destination);
        }
        $info->delete();
        Toastr::success('Data Deleted Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('technology.index');
    }
}
