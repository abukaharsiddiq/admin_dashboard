<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Social;

class SocialController extends Controller
{
   public function create(){
	    $info = Social::first();
	    return view('back-end.landing.social.create', [
	        'action' => $info ? route('social.update', $info->id) : route('social.store'), 
	        'method' => $info ? 'PATCH' : 'POST', 
	        'create' => $info ? 'Edit social' : 'Create social',
	        'btn_name' => $info ? 'Update' : 'Submit',
	        'info' => $info
	    ]);
	}


	  public function store(Request $request){

	    $info = new Social();
	    $info->facebook = $request->facebook;
	    $info->twitter = $request->twitter;
	    $info->linkedin = $request->linkedin;
	    $info->instagram = $request->instagram;
	    $info->youtube = $request->youtube;
	    $info->save();
	    return redirect()->route('social.create');
	}

	public function edit($id){
	    $info = Social::findOrFail($id);
	    return view('back-end.landing.social.create', [
	        'info' => $info, 
	        'action' => route('social.update', $info->id), 
	        'method' => 'PATCH', 
	        'create' => 'Edit Social',
	        'btn_name' => 'Update',
	    ]);
	}


	public function update(Request $request, $id){

	    $info = Social::findOrFail($id);
	    $info->facebook = $request->facebook;
	    $info->twitter = $request->twitter;
	    $info->linkedin = $request->linkedin;
	    $info->instagram = $request->instagram;
	    $info->youtube = $request->youtube;
	    $info->save();
	    return redirect()->route('social.create');
	} 
}
