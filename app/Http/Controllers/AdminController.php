<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $datauser = user::all();

        return view ('Admin',compact('datauser'));
    }

    public function edit($id)
    {
        $sis = user::findorfail($id);
        return view ('Edit',compact('sis'));
    }
    public function update(Request $request, $id)
    {
        $sis = user::findorfail($id);
        $sis->update($request->all());

        return redirect('/admin')->with('toast_succes','Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $sis = user::findorfail($id);
        $sis->delete();
        return back(); 
    }
}
