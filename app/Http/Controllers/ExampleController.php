<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Models\Testimonial;
use App\Models\Appointment;
use App\Models\ClassModel;
use App\Models\Teacher;

class ExampleController extends Controller
{
    public function admin_homePage()
    {
        return view('admin.firstPage');
    }
    public function home()
    {
        $testimonials = Testimonial::where('published', 1)->get();
        $teachers = Teacher::where('active', 1)->get();
        $classes = ClassModel::where('active', 1)->get();
        return view('test',compact('testimonials','teachers','classes'));
    }
    public function about()
    {
        $teachers = Teacher::get();
        return view('aboutUs',compact('teachers'));
    }

    public function class()
    {
        $testimonials = Testimonial::get();
        $classes = ClassModel::get();
        $teachers = Teacher::get();
        return view('classes',compact('testimonials','classes','teachers'));
    }
    public function contact()
    {
        return view('contact_us');
    }
    public function facilities()
    {
        return view('schoolFacilites');
    }
    public function Teachers()
    {
        $teachers = Teacher::get();
        return view('popularTeachers',compact('teachers'));
    }
    public function becometeacher()
    {
        return view('becomeAteacher');
    }
    public function make_appointment()
    {
        return view('makeAppointment');
    }
    public function call_To_action()
    {
        $testimonials = Testimonial::get();
        return view('testimonial',compact('testimonials'));
    }
    public function error_404()
    {
        return view('error404');
    }
    //send email (ContactUs form)
    public function send_contactUs(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string|max:50',
            'email'=>'required|string',
            'subject' =>'required|string',
            'message' =>'required|string'
        ]);
        Contact::create($data);
        Mail::to( 'linda@gmail.com')->send( 
            new ContactEmail($data)
        );
        return "mail sent!";
    }
    //show list of contacts
    public function index()
    {
        $contacts = Contact::get();
        return view('admin.contacts', compact('contacts'));
    }
    public function show_contact(string $id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.showcontacts', compact('contact'));
    }

    public function create()
    {
        $appointments=Appointment::get();
        return view('Test',compact('appointments'));
    }

    public function store(Request $request)
    {
        $data=$request->validate([
            'gurdian_name'=>'required|string|max:50',
            'gurdian_email'=> 'required|string',
            'child_name' => 'required|string',
            'child_age' =>'required|string',
            'message' =>'required|string',
        ]);
        Appointment::create($data);
        return 'Added Successfully';
    }

    public function appointment_list()
    {
        $appointments=Appointment::get();
        return view('admin.appointments',compact('appointments'));
    }

    public function showAppointment(string $id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('admin.show_appointment',compact('appointment'));
    }
    


    

    
}
