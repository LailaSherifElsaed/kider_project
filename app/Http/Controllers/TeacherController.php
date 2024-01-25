<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Traits\Common;

class TeacherController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers=Teacher::get();
        return view('admin.teachers',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_teacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'position'=> 'required|string',
            'teacherName'=>'required|string|max:50',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'facebook' =>'required|string',
            'twiter' =>'required|string',
            'instagram' =>'required|string',
        ]);
        $data['active']=isset($request->active);
        $fileName = $this->uploadFile($request->image, 'assets/images');    
        $data['image'] = $fileName;
        Teacher::create($data);
        return redirect('admin/teachers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher=Teacher::findOrFail($id);
        return view('admin.updateTeacher',compact('teacher'));
    }
    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'position'=> 'required|string',
            'teacherName'=>'required|string|max:50',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'facebook' =>'required|string',
            'twiter' =>'required|string',
            'instagram' =>'required|string',
        ]);
        if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'assets/images');    
            $data['image'] = $fileName;
        }
        $data['active']=isset($request->active);
        Teacher:: where('id',$id)->update($data);
        return redirect('admin/teachers');
    }

    public function destroy(string $id)
    {
        Teacher::where('id', $id)->delete();
        return redirect('admin/teachers');
        
    }
    //trashed
    public function trashed()
    {
        $teachers=Teacher::onlyTrashed()->get();
        return view('admin.trash_teacher',compact('teachers'));
        
    }
    //force_delete
    public function forceDelete(string $id)
    {
        Teacher::where('id', $id)->forceDelete();
        return redirect('admin/teachers');
        
    }
    public function restore_teacher(string $id) {
            
        Teacher::where('id', $id)->restore();
        return redirect('admin/teachers');
        
    }
   
}
