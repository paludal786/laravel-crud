<?php

namespace App\Http\Controllers\WebControllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $title = 'All User Details';
        // $user = User::orderBy('created_at', 'desc')->get();
        $user = User::orderBy('created_at', 'desc')->paginate(2);
        $data = array(
            'title' => $title,
            'users' => $user
        );
        return view('users.index')->with($data);
    }

    public function addUser()
    {
        $title = 'Add User';
        return view('users.add')->with('title', $title);
    }

    public function editUser($id)
    {
        $editUser = User::find($id);
        return view('users.edit')->with('edituser', $editUser);
    }

    public function storeUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'number' => 'required|integer',
            'address' => 'required',
            'dob' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response($validator->errors(), 422);
        }

        $user = new User();
        $user->name = $request->name;
        $user->number = $request->number;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->dob = $request->dob;

        $user->save();

        return redirect('/user')->with('success', 'Data saved!');
    }

    public function updateUser(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'number' => 'required|integer',
            'address' => 'required',
            'dob' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response($validator->errors(), 422);
        }

        $user = User::find($id);
        $user->name = $request->name;
        $user->number = $request->number;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->dob = $request->dob;

        $user->save();

        return redirect('/user')->with('success', 'Data saved!');
    }

    public function deleteUser($id)
    {
        $deleteUser = User::find($id);

        $deleteUser->delete();

        return redirect('/user')->with('success', 'Data Deleted!');
    }
}
