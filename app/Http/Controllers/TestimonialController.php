<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Traits\Common;

class TestimonialController extends Controller
{
    use Common;
    // private $columns = ['clientName',
    // 'position',
    // 'image',
    // 'published',
    // 'content'];
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $testimonials = Testimonial::get();
        $testimonials = Testimonial::paginate(3);
        return view('admin.testimonials', compact('testimonials'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.InsertTestimonials');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
                'clientName'=>'required|string|max:50',
                'position'=> 'required|string',
                'image' => 'required|mimes:png,jpg,jpeg|max:2048',
                'content' =>'required|string'
            ]);
        $data['published']=isset($request->published);
        $fileName = $this->uploadFile($request->image, 'assets/images');    
        $data['image'] = $fileName;
        Testimonial::create($data);
        return redirect('admin/testimonials');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.show_testimonial',compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.update_testimonial',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'clientName'=>'required|string|max:50',
            'position'=> 'required|string',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'content' =>'required|string'
        ]);
        if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'assets/images');    
            $data['image'] = $fileName;

        }
        $data['published']=isset($request->published);
        Testimonial:: where('id',$id)->update($data);
        return redirect('admin/testimonials');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::where('id', $id)->delete();
        return redirect('admin/testimonials');
        
    }
        //trashed
        public function trashed()
        {
            $testimonials=Testimonial::onlyTrashed()->get();
            return view('admin.trash_testimonial',compact('testimonials'));
            
        }
        //force_delete
        public function forceDelete(string $id)
        {
            Testimonial::where('id', $id)->forceDelete();
            return redirect('admin/testimonials');
            
        }
        public function restore_testimonial(string $id) {
            
            Testimonial::where('id', $id)->restore();
            return redirect('admin/testimonials');
            
        }
}
