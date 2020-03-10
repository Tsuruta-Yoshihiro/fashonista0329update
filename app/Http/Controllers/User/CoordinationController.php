<?php

namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoordinationController extends Controller
{
    public function add()
    {
        return view('user.coordination.create');
    }
    
    public function create()
    {
        return redirect('user.coordination.create');
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
