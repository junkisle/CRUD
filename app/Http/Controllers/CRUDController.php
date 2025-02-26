<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\User;

class CRUDController extends Controller
{
    public function index()
    {   
        $greet = "Hello, World!";
        return view('welcome', compact('greet'));
    }

    public function classDashboard()
    {
        $userinfo = DB::table('tbl_user')->get();

        return view('dashboard', [
            'tbl_user' => $userinfo,
        ]);
    }
    public function openForm()
    {
        return view('form');
    }

    public function insertData(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        $insert[] = [
            'name' => $request->name,
            'address' => $request->address,
        ];

        if ($insert){
            DB::table('tbl_user')->insert($insert);
            return back()->with('success', 'Data inserted successfully!');
        } else {
            return back()->with('error', 'Failed to insert data!');
        }
    }
    public function deleteData($id)
    {
        $userinfo = DB::table('tbl_user')->where('id', $id)->first();

        if ($userinfo){
            DB::table('tbl_user')->where('id', $id)->delete();
            return back()->with('success', 'Data deleted successfully!');
        } else {
            return back()->with('error', 'Failed to delete data!');
        }
    }

    public function editData($id)
    {
        $userinfo = DB::table('tbl_user')->where('id', $id)->first();

        return view('editForm', [
            'user' => $userinfo,
        ]);
    }

    public function updateData(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        $update = DB::table('tbl_user')->where('id', $id)->update([
            'name' => $validated['name'],
            'address' => $validated['address'],
        ]);

        if ($update){

            return redirect()->route('dashboard')->with('success', 'Data updated successfully!');
        } else {
            return back()->with('error', 'Failed to update data!');
        }
    }


}