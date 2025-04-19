<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function register(UserRequest $request)
    {
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $validation['name'],
            'email' => $validation['email'],
            'password' => bcrypt($validation['password']),
        ]);

        Return response()->json([
            'message' => 'Usuario registrado con éxito',
            'user' => $user,
        ], Response::HTTP_CREATED);
    }

    public function index()
    {
        $user = User::all();
        return response()->json([
            'message' => 'Lista de usuarios',
            'users' => $user,
        ], Response::HTTP_OK);
    }

    public function show_user($show_user){
       
        try{
            $user = User::findOrFail($show_user);

        return response()->json([
            'message' => 'Usuario encontrado',
            'user' => $user,
        ], Response::HTTP_OK);
        }
        catch(\Exception $e){
            return response()->json([
                'message' => 'Error al buscar el usuario',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function destroy($user){
        try{
            $user = User::findOrFail($user);
            $user->delete();

            return response()->json([
                'message' => 'Usuario eliminado con éxito',
            ], Response::HTTP_OK);
        }
        catch(\Exception $e){
            return response()->json([
                'message' => 'Error al eliminar el usuario',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
