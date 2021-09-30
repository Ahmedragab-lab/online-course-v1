<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Photo;

class CourseController extends Controller
{

    public function index()
    {
        $courses=Course::orderBy('id','desc')->paginate(10);
        return view('admin.courses.index',compact('courses'));
    }


    public function create()
    {
        return view('admin.courses.create');
    }


    public function store(Request $request)
    {
        $rules = [
            'status'      => 'required|integer|in:0,1',
            'title'       => 'required|min:3|max:150',
            // 'description' => 'required|min:20|max:150',
            'link'        => 'required|url',
            'track_id'    => 'required|integer',
        ];

        $this->validate($request, $rules);
        # CREATEING SLUG REPLACING SPACE WITH -
        $request['slug'] = strtolower(str_replace(' ','-',$request->title));
        $course = Course::create($request->all());

        if($course) {

            if($file = $request->file('image')) {

                $filename = $file->getClientOriginalName();
                $fileextension = $file->getClientOriginalExtension();
                $file_to_store = time() . '_' . explode('.', $filename)[0] . '_.'.$fileextension;

                if($file->move('code30\images', $file_to_store)) {
                    Photo::create([
                        'filename' => $file_to_store,
                        'photoable_id' => $course->id,
                        'photoable_type' => 'App\Models\Course',
                    ]);
                }
            }
            return redirect()->route('course.index')->withStatus(__('course successfully created.'));
        }



    }


    public function show(Course $course)
    {
        //
    }


    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }


    public function update(Request $request, Course $course)
    {
        $rules = [
            'status'      => 'required|integer|in:0,1',
            'title'       => 'required|min:3|max:150',
            // 'description' => 'required|min:20|max:150',
            'link'        => 'required|url',
            'track_id'    => 'required|integer',
        ];

        $this->validate($request, $rules);
        $course->update($request->all());
        if($file = $request->file('image')) {

            $filename = $file->getClientOriginalName();
            $fileextension = $file->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $filename)[0] . '_.'.$fileextension;

            if($file->move('code30\images', $file_to_store)) {
                if($course->photo) {
                    $photo = $course->photo;

                    // remove the old image

                    $filename = $photo->filename;
                    unlink('code30/images/'.$filename);

                    $photo->filename = $file_to_store;
                    $photo->save();
                }else {
                    Photo::create([
                        'filename' => $file_to_store,
                        'photoable_id' => $course->id,
                        'photoable_type' => 'App\Models\Course',
                    ]);
                }
            }
        }
        return redirect()->route('course.index')->withStatus(__('course successfully updated.'));

    }


    public function destroy(Course $course)
    {
       $course->delete();
       return redirect()->route('course.index')->withStatus(__('course successfully deleted.'));
    }
}
