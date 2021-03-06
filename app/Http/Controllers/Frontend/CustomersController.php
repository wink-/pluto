<?php
namespace App\Http\Controllers\Frontend;

use Session;
use Carbon\Carbon;
use App\Http\Requests;
use App\Models\Contact;
use App\Models\Customer;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Html\Builder;
use App\Http\Controllers\Controller;


class CustomersController extends Controller
{

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(Customer::select('*'))
        ->addColumn('action', function ($customer) {
            return
            '<a href="' . url('customers', $customer->ID) . '"><button type="submit" class="btn btn-info btn-xs">View</button></a>';
        })        
        ->make(true);
    }

    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('frontend.customers.index');
    }



    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $customers = Customer::orderBy('CUSTCODE', 'ASC')->paginate(15);


        return view('frontend.customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('frontend.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['CUSTNAME' => 'required', ]);

        Customer::create($request->all());

        Session::flash('flash_message', 'Customer added!');

        return redirect('customers');
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
        $customer = Customer::findOrFail($id);
        return view('frontend.customers.show', compact('customer'));
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
        $customer = Customer::findOrFail($id);

        return view('frontend.customers.edit', compact('customer'));
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
        $this->validate($request, ['CUSTNAME' => 'required', ]);

        $customer = Customer::findOrFail($id);
        $customer->update($request->all());

        
        Session::flash('flash_message', 'Customer updated!');
 

        return redirect('customers');
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
        Customer::destroy($id);

        Session::flash('flash_message', 'Customer deleted!');

        return redirect('customers');
    }

}
