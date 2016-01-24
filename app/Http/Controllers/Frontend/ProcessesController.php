<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Process;
use App\Http\Requests;
use Carbon\Carbon;
use Session;

class ProcessesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $process = Process::paginate(15);

        return view('frontend.processes.index', compact('process'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('frontend.processes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['DESCRIPT' => 'required', ]);

        Process::create($request->all());

        Session::flash('flash_message', 'Process added!');

        return redirect('processes');
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
        $process = Process::findOrFail($id);

        return view('frontend.processes.show', compact('process'));
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
        $process = Process::findOrFail($id);

        return view('frontend.processes.edit', compact('process'));
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
        $this->validate($request, ['DESCRIPT' => 'required', ]);

        $process = Process::findOrFail($id);
        $process->update($request->all());

        Session::flash('flash_message', 'Process updated!');

        return redirect('processes');
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
        Process::destroy($id);

        Session::flash('flash_message', 'Process deleted!');

        return redirect('processes');
    }

}
