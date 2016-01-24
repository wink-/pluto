<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Requests;
use App\Models\Part;
use Carbon\Carbon;
use Session;

class PartsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $parts = Part::paginate(15);

        return view('frontend.parts.index', compact('parts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        
        $customers = Customer::lists('CUSTNAME', 'CUSTCODE');
        return view('frontend.parts.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['PARTNUM' => 'required', 'PROCNAME' => 'required', 'CUSTCODE' => 'required', ]);

        Part::create($request->all());

        Session::flash('flash_message', 'Part added!');

        return redirect('parts');
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
        $part = Part::findOrFail($id);

        return view('frontend.parts.show', compact('part'));
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
        $part = Part::findOrFail($id);

        return view('frontend.parts.edit', compact('part'));
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
        $this->validate($request, ['PARTNUM' => 'required', 'PROCNAME' => 'required', 'CUSTCODE' => 'required', ]);

        $part = Part::findOrFail($id);
        $part->update($request->all());

        Session::flash('flash_message', 'Part updated!');

        return redirect('parts');
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
        Part::destroy($id);

        Session::flash('flash_message', 'Part deleted!');

        return redirect('parts');
    }

}
