<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\ApiController;

use Illuminate\Http\Request;

class ScraperController extends Controller
{
   // public function __construct(){
        
    //     $this->middleware('can:admin.users.index')->only('index');
    //     $this->middleware('can:admin.users.edit')->only('edit,update');

    // }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $dats = ApiController::scrape($request);
       return response()->json($request);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(User $user)
    // {

    //     $roles = Role::all();

    //     return view('admin.users.edit', compact('user', 'roles'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request,User $user)
    // {
    //     $user->roles()->sync($request->roles);

    //     return redirect()->route('admin.users.edit', $user)->with('info', 'Roles asignados');
    // }
}
