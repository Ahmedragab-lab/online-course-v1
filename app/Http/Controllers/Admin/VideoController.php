<?php

namespace App\Http\Controllers\Admin;

use App\Models\video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    
    public function index()
    {
        
        
        $videos = Video::orderBy('id', 'desc')->paginate(20);
        return view('admin.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|min:5|max:100',
            'link' => 'required|url',
            'course_id' => 'required|integer',
        ];

        $this->validate($request, $rules);

        $video = Video::create($request->all());

        if($video) {
            
            return redirect()->route('video.index')->withStatus(__('video successfully created.'));
        }else {
         
            return redirect()->route('video.index')->withStatus(__('Something Wrong, Try again.'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(video $video)
    {
        return view('admin.videos.show', compact('video'));
    }

    
    public function edit(video $video)
    {
        
        return view('admin.videos.edit', compact('video'));
    }

    
    public function update(Request $request, video $video)
    {
        $rules = [
            'title' => 'required|min:5|max:100',
            'link' => 'required|url',
            'course_id' => 'required|integer',
        ];

        $this->validate($request, $rules);

        if($video->update($request->all())) {
            
            return redirect()->route('video.index')->withStatus(__('video successfully updated.'));
        }else {
            
            return redirect()->route('video.index')->withStatus(__('Something wrong, Try again.'));
        }
    
    }

   
    public function destroy(video $video)
    {
        $video->delete();
        
        return redirect()->route('video.index')->withStatus(__('video successfully deleted.'));
    }
}
