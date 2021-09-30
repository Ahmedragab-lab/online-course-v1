<?php
namespace App\Http\Controllers\Admin; # IT MUST BE FIRST THING IN CONTROLLER BIG NOTE

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminAddRequest;
use App\Models\Photo;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $admins) # MODEL USER ASSIGNED TO ADMINS VARIABLE
    {
        # AUTH ADMIN IS ALLREADY SINGED IN
        $currentAdminId = Auth::user()->id;

        # GET ID FOR PAGE OWNER
        $ownerId = $admins->whereEmail(OWNER)->get()->first()->id;

        # GET ID FOR PAGE PROGRAMMER
        // $programmerId = $admins->whereEmail(PROGRAMMER)->get()->first()->id;

        # GET ALL ADMINS FROM DATAS EXCEPTION PROGRAMMER AND OWNER AND CURRENT AUTH
        // $admins =$admins->whereNotIn('id', [$currentAdminId, $ownerId, $programmerId])->orderBy('id', 'desc')->get();
        // $admins =$admins->whereNotIn('id', [$currentAdminId, $ownerId])->orderBy('id', 'desc')->get();
        $admins =$admins->all();

        # RETURNING VIEW INDEX FOR ADMINS
        return view('admin.admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admins.create');
    }


    public function store(Request $request, User $admin)
    {
        
        
        // return redirect()->route('admin.index')->withStatus(__('Admin successfully created.'));
        $rules = [
            'name'     => 'required|string|min:5|max:30',
            'email'    => 'required|email',
            'password' => 'nullable|min:6|confirmed',
            'phone'    => 'required|min:11|numeric',
            'address'  => 'required|string|min:3',
        ];

        $this->validate($request, $rules);
        $admin->create($request->merge(['password' => Hash::make($request->get('password'))])->all());
        if($admin) {

            if($file = $request->file('image')) {

                $filename = $file->getClientOriginalName();
                $fileextension = $file->getClientOriginalExtension();
                $file_to_store = time() . '_' . explode('.', $filename)[0] . '_.'.$fileextension;

                if($file->move('code30\images', $file_to_store)) {
                    Photo::create([
                        'filename' => $file_to_store,
                        'photoable_id' => $admin->id,
                        'photoable_type' => 'App\Models\User',
                    ]);
                }
            }
          
            return redirect()->route('admin.index')->withStatus(__('Admin Successfully Created.'));
        }
    }


    public function show($id)
    {
        //
    }


    public function edit(User $admin)
    {
        return view('admin.admins.edit',compact('admin'));
    }


    public function update(Request $request, User $admin)
    {
        $rules = [
            'name'     => 'required|string|min:5|max:30',
            'email'    => 'required|email',
            'password' => 'nullable|min:6|confirmed',
            'phone'    => 'required|min:11|numeric',
            // 'phone' => 'required|regex:/(01)[0-9]{9}/',
            'address'  => 'required|string|min:3',
        ];

        $this->validate($request, $rules);

        $admin->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$request->get('password') ? '' : 'password']
        ));
        if($file = $request->file('image')) {

            $filename = $file->getClientOriginalName();
            $fileextension = $file->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $filename)[0] . '_.'.$fileextension;

            if($file->move('code30\images', $file_to_store)) {
                if($admin->photo) {
                    $photo = $admin->photo;

                    // remove the old image

                    $filename = $photo->filename;
                    unlink('code30/images/'.$filename);

                    $photo->filename = $file_to_store;
                    $photo->save();
                }else {
                    Photo::create([
                        'filename' => $file_to_store,
                        'photoable_id' => $admin->id,
                        'photoable_type' => 'App\Models\User',
                    ]);
                }
            }
        }


        return redirect()->route('admin.index')->withStatus(__('Admin successfully updated.'));
    }


    public function destroy(User $admin)
    {
        $admin->delete();

        return redirect()->route('admin.index')->withStatus(__('Admin successfully deleted.'));
    }
}
