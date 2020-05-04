<?php

namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Coordinations;

class CoordinationController extends Controller
{
    public function add()
    {
        return view('user.coordination.create');
    }
    
    
    public function create(Request $request)
    {
        //Validation
        $this->validate($request, Coordinations::$rules);
        $coordinations = new Coordinations;
        $form = $request->all();
        
        if (isset($form['img_upload_file'])) {
            $path = $request->file('img_upload_file')->store('public/image');
            $coordinations->image_path = basename($path);
        } else {
            $coordinations->image_path = null;
        }
        
        unset($form['_token']);
        unset($form['img_upload_file']);
        
        $coordinations->fill($form);
        $coordinations->save();
        
        return redirect('user/coordination/create');
    }
    
    
    
    
    public function upload()
    {
        return view('user.coordination.upload');
    }
    
    
    public function edit()
    {
        return view('user.coordination.edit');
    }
    
    public function update()
    {
        return redirect('user.coordination.edit');
    }

}
