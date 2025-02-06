<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;


class ServiceController extends Controller
{
    public function index()
    {
        $name = 'Service';
        $title = 'Manage Service';
        $lists = Service::latest()->get();
        return view('back-end.landing.service.index', compact('lists', 'name', 'title'));
    }

    public function create()
    {
        $name = 'Service';
        $title = 'Add Service';
        return view('back-end.landing.service.create', compact('name', 'title'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required',
            'image' => 'required',
        ]);

        $info = new Service();
        $info->title = $request->title;
        $info->slug = strtolower(str_replace(' ', '-', $request->title));
        $info->short_description = $request->short_description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('back-end/service/'), $fileName);
            $info->image = $fileName;
        }
        $info->save();
        Toastr::success('Data Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('service.index');
    }

    public function edit($id)
    {
        $name = 'Service';
        $title = 'Edit Service';
        $info = Service::find($id);
        return view('back-end.landing.service.edit', compact('info', 'name', 'title'));
    }

    public function update(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required',

        ]);

        $info = Service::find($request->id);
        $info->title = $request->title;
        $info->slug = strtolower(str_replace(' ', '-', $request->title));
        $info->short_description = $request->short_description;
        if($request->hasfile('image')){
            $destination = public_path('back-end/service/').$info->image;
            if(file_exists($destination)){
                @unlink($destination);
            }
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $fileName = time().'.'.$name;
            $file->move(public_path('back-end/service'),$fileName);
            $info->image = $fileName;
        }
        $info->save();
        Toastr::success('Data Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('service.index');
    }

    public function delete($id)
    {
        $info = Service::find($id);
        $destination = public_path('back-end/service/').$info->image;
        if(file_exists($destination)){
            @unlink($destination);
        }
        $info->delete();
        Toastr::success('Data Deleted Successfully', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('service.index');
    }


}
