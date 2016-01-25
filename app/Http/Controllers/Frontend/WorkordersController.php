<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Workorder;
use App\Http\Requests;
use Carbon\Carbon;
use Session;

class WorkordersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $workorders = Workorder::orderBy('WORKORDR', 'ASC')->paginate(15);

        return view('frontend.workorders.index', compact('workorders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('frontend.workorders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['CUSTCODE' => 'required', 'PARTNUM' => 'required', 'PROCNAME' => 'required', ]);

        Workorder::create($request->all());

        Session::flash('flash_message', 'Workorder added!');

        return redirect('workorders');
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
        $workorder = Workorder::findOrFail($id);

        return view('frontend.workorders.show', compact('workorder'));
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
        $workorder = Workorder::findOrFail($id);

        return view('frontend.workorders.edit', compact('workorder'));
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
        $this->validate($request, ['CUSTCODE' => 'required', 'PARTNUM' => 'required', 'PROCNAME' => 'required', ]);

        $workorder = Workorder::findOrFail($id);
        $workorder->update($request->all());

        Session::flash('flash_message', 'Workorder updated!');

        return redirect('workorders');
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
        Workorder::destroy($id);

        Session::flash('flash_message', 'Workorder deleted!');

        return redirect('workorders');
    }

}
