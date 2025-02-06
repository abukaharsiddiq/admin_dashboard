<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhyChoose;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class WhyChooseController extends Controller
{
    public function index()
    {
        $name = 'Why Choose';
        $title = 'Manage Why Choose';
        $lists = WhyChoose::latest()->get();
        return view('back-end.landing.whychoose.index', compact('lists', 'name', 'title'));
    }

    public function create()
    {
        $name = 'Why Choose';
        $title = 'Add Why Choose';
        return view('back-end.landing.whychoose.create', compact('name', 'title'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required',
        ]);

        $info = new WhyChoose();
        $info->title = $request->title;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('back-end/whychoose/'), $fileName);
            $info->image = $fileName;
        }

        $info->save();
        Toastr::success('Data Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('whychoose.index');
    }

    public function edit($id)
    {
        $name = 'Why Choose';
        $title = 'Edit Why Choose';
        $info = WhyChoose::find($id);
        return view('back-end.landing.whychoose.edit', compact('info', 'name', 'title'));
    }

    public function update(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $info = WhyChoose::find($request->id);
        $info->title = $request->title;

        if($request->hasfile('image')){
            $destination = public_path('back-end/whychoose/').$info->image;
            if(file_exists($destination)){
                @unlink($destination);
            }
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $fileName = time().'.'.$name;
            $file->move(public_path('back-end/whychoose'),$fileName);
            $info->image = $fileName;
        }

        $info->save();
        Toastr::success('Data Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('whychoose.index');
    }

    public function delete($id)
    {
        $info = WhyChoose::find($id);
        $destination = public_path('back-end/whychoose/') . $info->image;
        if (file_exists($destination)) {
            @unlink($destination);
        }
        $info->delete();
        Toastr::success('Data Deleted Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('whychoose.index');
    }
}
