<?php
 
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
 
class ContactController extends Controller
{
    public function create(Request $request)
    {
        return view('contact');
    }
 
    public function store(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
         ]);

        //  Store data in database
        Contact::create($request->all());

        return redirect('/contact'); // méthode pour rediriger vers une autre url (en get par défaut)
    }
    
}