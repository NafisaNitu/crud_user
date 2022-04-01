<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_crud;

class UsersController extends Controller
{
    public function addUser()
    {
        return view('admin.user.add');
    }

    public function newUser(Request $request)
    {
        User_crud::saveUserData($request);
        return redirect()->back()->with('message', 'User Added Successfully');
    }

    public function manageUser()
    {
        return view('admin.user.manage', [
            'users' => User_crud::all(),
        ]);
    }

    public function changeStatus($id)
    {
        $this->user = User_crud::find($id);
        if($this->user->status == 1)
        {
            $this->user->status = 0;
        }
        elseif ($this->user->status == 0)
        {
            $this->user->status = 1;
        }
        $this->user->save();
        return redirect()->back()->with('message', 'Changed Status Successfully');
    }

    public function deleteUser($id)
    {
        $this->user = User_crud::findOrFail($id);
        $this->user->delete();
        return redirect()->back()->with('message', 'User Deleted Successfully');
    }

    public function edit($id)
    {
        return view('admin.user.edit', [
            'user' => User_crud::find($id),
        ]);
    }

    public function updateUser(Request $request)
    {
        User_crud::updateData($request);
        return redirect('manage-user')->with('message', 'User Updated successfully');
    }
}
