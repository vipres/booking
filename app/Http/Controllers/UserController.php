<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables as Datatables;




class UserController extends Controller
{
    public function index()
    {
        //$users = User::all();
        //return view('users.index', compact('users'));

        return view(('users.index'));

    }

    public function dataTable()
    {
       $users = User::select('id', 'email','name', 'username', 'created_at')->get();
        return Datatables::of($users) ->editColumn('created_at', function ($user) {
            return $user->created_at ? with(new Carbon($user->created_at))->format('d/m/Y') : '';
        })
        ->addColumn('action', function ($user) {
            return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
        })
        ->make();
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        User::create($request->only('name', 'username', 'email')
        + [
            'password' => bcrypt($request->input('password'))
        ]
    );
        return redirect()->route('users.index');
    }



}
