<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Services\UserService;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;

    }

    public function register(UserRequest $request)
    {
        $user =$this->userService->register($request);

        Return response()->json(['message' => 'Usuario registrado con éxito','user' => $user,], 
        Response::HTTP_CREATED);
    }

    public function index()
    {
        $user = $this->userService->index();

        return response()->json(['message' => 'Lista de usuarios','users' => $user,], 
        Response::HTTP_OK);
    }

    public function show_user($show_user){
       
        $user = $this->userService->show_user($show_user);
        if (!$user){
            return response()->json(['message' => 'Usuario no encontrado',], 
            Response::HTTP_NOT_FOUND);
        }
        return response()->json(['message' => 'Usuario encontrado','user' => $user,], 
        Response::HTTP_OK);
    }

    public function destroy($user){
        $user = $this->userService->destroy($user);
        if(!$user)
        {
            return response()->json(['message' => 'Usuario no encontrado',], 
            Response::HTTP_NOT_FOUND);
        }
        return response()->json(['message' => 'Usuario eliminado con éxito','user' => $user,], 
        Response::HTTP_OK);
    }
}
