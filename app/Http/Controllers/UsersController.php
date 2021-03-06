<?php

namespace App\Http\Controllers;
use App\User as User;
use App\Priviledge as Priviledge;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private $path = 'users';

    public function index()
    {
        // //Traemos todos los registros de los usuarios.
        // $data = User::all();
        // //Enviamos esos registros a la vista.
        // return view($this->path . '.index', compact('data'));
        $users = DB::table('users')
            ->join('priviledges', 'users.id', '=', 'users.priviledge_id')
            ->select('users.*', 'priviledge.name as p')
            ->get();
            return view('users.index')->with('users',$users);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        Session::flash('flash_message', 'El Doctor ha sido eliminado exitosamente!');
        return redirect()->back();
    }
}
