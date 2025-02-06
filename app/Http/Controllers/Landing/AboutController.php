<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;


class AboutController extends Controller
{
    public function index()
    {
        $name = 'About';
        $title = 'Manage About';
        $lists = About::latest()->get();
        return view('back-end.landing.about.index', compact('lists', 'name', 'title'));
    }

    public function create()
    {
        $name = 'About';
        $title = 'Add About';
        return view('back-end.landing.about.create', compact('name', 'title'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'required',
            'button_text' => 'required|string|max:255',
        ]);

        $info = new About();
        $info->title = $request->title;
        $info->description = $request->description;
        $info->button_text = $request->button_text;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('back-end/about/'), $fileName);
            $info->image = $fileName;
        }

        $info->save();
        Toastr::success('Data Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('about.index');
    }

    public function edit($id)
    {
        $name = 'About';
        $title = 'Edit About';
        $info = About::find($id);
        return view('back-end.landing.about.edit', compact('info', 'name', 'title'));
    }

    public function update(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'button_text' => 'required|string|max:255',
        ]);

        $info = About::find($request->id);
        $info->title = $request->title;
        $info->description = $request->description;
        $info->button_text = $request->button_text;

        if($request->hasfile('image')){
            $destination = public_path('back-end/about/').$info->image;
            if(file_exists($destination)){
                @unlink($destination);
            }
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $fileName = time().'.'.$name;
            $file->move(public_path('back-end/about'),$fileName);
            $info->image = $fileName;
        }

        $info->save();
        Toastr::success('Data Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('about.index');
    }

    public function delete($id)
    {
        $info = About::find($id);
        $destination = public_path('back-end/about/').$info->image;
        if(file_exists($destination)){
            @unlink($destination);
        }
        $info->delete();
        Toastr::success('Data Deleted Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('about.index');
    }
}
