<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User_crud extends Model
{
    use HasFactory;

    protected static $user;

    public static function saveUserData($request)
    {
        self::$user = new User_crud();
        self::$user->name     = $request->name;
        self::$user->email    = $request->email;
        self::$user->password = Hash::make($request->password);
        self::$user->dob      = $request->dob;
        self::$user->city     = $request->city;
        self::$user->status   = $request->status;
        self::$user->save();
    }

    public static function updateData($request)
    {
        self::$user = User_crud::find($request->user_id);

        self::$user->name     = $request->name;
        self::$user->email    = $request->email;
        self::$user->password = Hash::make($request->password);
        self::$user->dob      = $request->dob;
        self::$user->city     = $request->city;
        self::$user->status   = $request->status;

        self::$user->save();
    }
}
