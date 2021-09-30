<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
   
    public function index()
    {
        $tracks=Track::orderBy('id','desc')->paginate(10);
        return view('admin.tracks.index',compact('tracks'));
    }

    public function create()
    {
        return view('admin.tracks.create');
    }

    
    public function store(Request $request)
    {
        
        $rules = [
            'name' => 'required|min:3|max:50',
        ];

        $this->validate($request, $rules);

        if(Track::create($request->all())) {         
            return redirect()->route('track.index')->withStatus(__('Track successfully created.'));
        }else {
            return redirect()->route('track.index')->withStatus(__('Something Wrong, Try again.'));
        }
    }

    
    public function show(Track $track)
    {
        //
    }

    
    public function edit(Track $track)
    {
        
        return view('admin.tracks.edit',compact('track'));
    }

    
    public function update(Request $request, Track $track)
    {
        $rules = [
            'name' => 'required|min:3|max:50',
        ];

        $this->validate($request, $rules);
        // $track->update($request->all());
        // return redirect()->route('track.index')->withStatus(__('Track successfully updated.'));
        
        if($request->has('name')) {
            $track->name = $request->name;
            // $track->update($request->all());
        }
       
        if($track->isDirty()) {
            $track->save();
            
            return redirect()->route('track.index')->withStatus(__('Track successfully updated.'));
        }else {
            return redirect()->route('track.index')->withStatus(__('Nothing Changed.'));
        }
    }

    
    public function destroy(Track $track)
    {
        $track->delete();
        return redirect()->route('track.index')->withStatus(__('track successfully deleted.'));
    }
}
