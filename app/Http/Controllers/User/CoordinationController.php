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
        
        $this->validate($request, Coordinations::$rules);
        $coordinations = new Coordinations;
        $form = $request->all();
        
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $coordinations->image_path = basename($path);
        } else {
            $coordinations->image_path = null;
        }
        
        unset($form['_token']);
        unset($form['image']);
        
        $coordinations->fill($form);
        $coordinations->save();
        
        return redirect('user.coordination.create');
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
