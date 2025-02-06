<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Brian2694\Toastr\Facades\Toastr;

class ClientController extends Controller
{
    public function index()
    {
        $name = 'Client';
        $title = 'Manage Client';
        $lists = Client::latest()->get();
        return view('back-end.landing.client.index', compact('lists', 'name', 'title'));
    }

    public function create()
    {
        $name = 'Client';
        $title = 'Add Client';
        return view('back-end.landing.client.create', compact('name', 'title'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'image' => 'required',
        ]);

        $info = new Client();
        $info->link = $request->link;
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('back-end/client/'), $fileName);
            $info->image = $fileName;
        }
        $info->save();
        Toastr::success('Data Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('client.index');
    }

    public function edit($id)
    {
        $name = 'Client';
        $title = 'Edit Client';
        $info = Client::find($id);
        return view('back-end.landing.client.edit', compact('info', 'name', 'title'));
    }

    public function update(Request $request)
    {
        // Validate the request
        // $request->validate([
        //     'image' => 'required',
        // ]);

        $info = Client::find($request->id);
        $info->link = $request->link;
        
        if($request->hasfile('image')){
            $destination = public_path('back-end/client/').$info->image;
            if(file_exists($destination)){
                @unlink($destination);
            }
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $fileName = time().'.'.$name;
            $file->move(public_path('back-end/client'),$fileName);
            $info->image = $fileName;
        }


        $info->save();
        Toastr::success('Data Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('client.index');
    }

    public function delete($id)
    {
        $info = Client::find($id);
        $destination = public_path('back-end/client/') . $info->image;
        if (file_exists($destination)) {
            @unlink($destination);
        }
        $info->delete();
        Toastr::success('Data Deleted Successfully', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('client.index');
    }
}
