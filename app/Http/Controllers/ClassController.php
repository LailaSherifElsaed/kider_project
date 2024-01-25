<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Traits\Common;

class ClassController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers=Teacher::get();
        $classes=ClassModel::with('teacher')->get();
        return view('admin.classes',compact('classes','teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers=Teacher::get();
        return view('admin.addClass',compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'className' => 'required|string',
            'teacherId' => 'required|string',
            'fromAge' => 'required|integer|min:3|max:5',
            'toAge' => 'required|integer|gt:fromAge|max:5',
            'fromTime' => 'required',
            'toTime' => 'required',
            'class_image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'capacity' => 'required|integer', // Add this line
            'price' => 'required|numeric', // Add this line
        ]);
    
        $data['active'] = isset($request->active);
        $fileName = $this->uploadFile($request->class_image, 'assets/images');    
        $data['class_image'] = $fileName;
    
        ClassModel::create($data);
        
        return redirect('admin/classesList');
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
        $class = ClassModel::findOrFail($id);
        $teachers=Teacher::get();
        $currentTeacherId = $class->teacherId;
        return view ('admin.updateClasses',compact('teachers','class','currentTeacherId'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'className' => 'required|string',
            'teacherId' => 'required|string',
            'fromAge' => 'required|integer|min:1|max:6',
            'toAge' => 'required|integer|gt:fromAge|max:6',
            'fromTime' => 'required',
            'toTime' => 'required',
            'class_image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'capacity' => 'required|integer', // Add this line
            'price' => 'required|numeric', // Add this line
        ]);
        if($request->hasFile('class_image')){
            $fileName = $this->uploadFile($request->class_image, 'assets/images');    
            $data['class_image'] = $fileName;
        }
        $data['active'] = isset($request->active);
        ClassModel::where('id',$id)->update($data);      
        return redirect('admin/classesList');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ClassModel::where('id', $id)->delete();
        return redirect('admin/classesList');
    }
    public function trashed()
    {
        $classes=ClassModel::onlyTrashed()->get();
        return view('admin.trashedClasses',compact('classes'));
        
    }
    public function forceDelete(string $id)
    {
        ClassModel::where('id', $id)->forceDelete();
        return redirect('admin/classesList');
        
    }
    public function restore_class(string $id) {
            
        ClassModel::where('id', $id)->restore();
        return redirect('admin/classesList');
        
    }
}
