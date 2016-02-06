<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Contact;
use App\Http\Requests;
use Carbon\Carbon;
use Session;

class ContactsController extends Controller
{

    /**
     * Show the form for creating a new contact for a specific customer.
     *
     * @return Response
     */
    
    public function createFromCustomer()
    {

        $customers = Customer::lists('CUSTNAME', 'CUSTCODE');
        return view('frontend.contacts.create', compact('customers'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
        $contacts = Contact::paginate(15);
        return view('frontend.contacts.index', compact('contacts'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    
    public function create(Request $request)
    {


        $default = $request->customer_code;
        $customers = Customer::lists('CUSTNAME', 'CUSTCODE');
        
        return view('frontend.contacts.create', compact('customers', 'default'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Contact::create($request->all());

        Session::flash('flash_message', 'Contact added!');

        return redirect('contacts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);

        return view('frontend.contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        $customers = Customer::lists('CUSTNAME', 'CUSTCODE');
        return view('frontend.contacts.edit', compact('contact', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());

        Session::flash('flash_message', 'Contact updated!');

        return redirect('contacts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        Contact::destroy($id);

        Session::flash('flash_message', 'Contact deleted!');

        return redirect('contacts');
    }

}
