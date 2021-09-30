<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __constract(){
        $this->middleware('auth');
    }
    public function index(){
        $user = auth()->user();
        // $user= User::all();
        return view('students.profile',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user=auth()->user();
        $rules = [
            'name'     => 'required|string|min:5|max:30',
            'email'    => 'required|email',
            'phone'    => 'required|min:11|numeric',
            'address'  => 'required|string|min:3',          
        ];
        $this->validate($request, $rules);
        $user->update($request->all());
        return redirect()->route('show-profile')->withStatus(__('User successfully updated.'));
        // return 'hello';
    }
    // public function profilephoto(Request $request, User $user)
    // {
    //     $user=auth()->user();
    //     $user->update($request->all());
    //     if($file = $request->file('image')) {

    //         $filename = $file->getClientOriginalName();
    //         $fileextension = $file->getClientOriginalExtension();
    //         $file_to_store = time() . '_' . explode('.', $filename)[0] . '_.'.$fileextension;

    //         if($file->move('code30\images', $file_to_store)) {
    //             if($user->photo) {
    //                 $photo = $user->photo;

    //                 // remove the old image

    //                 $filename = $photo->filename;
    //                 unlink('code30/images/'.$filename);

    //                 $photo->filename = $file_to_store;
    //                 $photo->save();
    //             }else {
    //                 Photo::create([
    //                     'filename' => $file_to_store,
    //                     'photoable_id' => $user->id,
    //                     'photoable_type' => 'App\Models\User',
    //                 ]);
    //             }
    //         }
    //     }
    //     return redirect()->route('show-profile')->withStatus(__('User successfully updated.'));
       
    // }
    public function profilephoto(Request $request, User $user)
    {
            $user=auth()->user();
            
    }
       
    
}
