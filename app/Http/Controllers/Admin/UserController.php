<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::where('admin', 0)->orderBy('id', 'desc')->paginate(15);
        return view('admin.users.index',compact('users'));
    }

    
    public function create()
    {
        return view('admin.users.create');
    }

    
    public function store( Request $request, User $model)
    {   
        $rules = [
            'name'     => 'required|string|min:5|max:30',
            'email'    => 'required|email',
            'password' => 'nullable|min:6|confirmed',
            'phone'    => 'required|min:11|numeric',
            'address'  => 'required|string|min:3',
        ];

        $this->validate($request, $rules);
        $model->create($request->merge(['password' => Hash::make($request->get('password'))])->all());

        return redirect()->route('user.index')->withStatus(__('User successfully created.'));
    }

    
    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    
    public function update(Request $request, User $user)
    {
        $rules = [
            'name'     => 'required|string|min:5|max:30',
            'email'    => 'required|email',
            'password' => 'nullable|min:6|confirmed',
            'phone'    => 'required|min:11|numeric',
            'address'  => 'required|string|min:3',
        ];

        $this->validate($request, $rules);

        $user->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$request->get('password') ? '' : 'password']
        ));

        return redirect()->route('user.index')->withStatus(__('User successfully updated.'));
    }

    
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->withStatus(__('User successfully deleted.'));
    }
}
