<?php
namespace App\Http\Controllers\Frontend;

use App\Models\DiscrepantMaterialReport;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Workorder;
use App\Http\Requests;
use Carbon\Carbon;
use Session;

class DiscrepantMaterialReportsController extends Controller
{

    /**
     * Lookup a workorder to create a DMR from and load the create page
     * @param  Request $request
     * @return reponse
     */
    public function createDmrFromWorkorder(Request $request)
    {

        $workorder = Workorder::where('WORKORDR', $request->WORKORDR)
            ->firstOrFail();

        return view('frontend.dmrs.create', compact('workorder'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $dmrs = DiscrepantMaterialReport::paginate(15);

        return view('frontend.dmrs.index', compact('dmrs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('frontend.dmrs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $destinationPath = 'discrepant_material/reports/' . date("Y", time()) .'/';


        $dmr = $request->all();
        
        if ($request->hasFile('uploaded_file')) {
            // Set the filename to the workorder_customer_process_time()
            $filename = $request->workorder .'_' . $request->customer . '_' . 
                        $request->process . '_' .  time() . '.' . 
                        $request->file('uploaded_file')->getClientOriginalExtension();
            // add three attributes to the array
            $dmr['path'] = $destinationPath;
            $dmr['filename'] = $filename;
            $dmr['mime'] = $request->file('uploaded_file')->getClientMimeType();

            // move the file to the proper location with its new name
            $request->file('uploaded_file')->move($destinationPath, $filename);
        } 



        DiscrepantMaterialReport::create($dmr);

        Session::flash('flash_message', 'Discrepant Material Report added!');

        return redirect('dmrs');
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
        $dmr = DiscrepantMaterialReport::findOrFail($id);

        return view('frontend.dmrs.show', compact('dmr'));
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
        $dmr = DiscrepantMaterialReport::findOrFail($id);

        return view('frontend.dmrs.edit', compact('dmr'));
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
        
        $dmr = DiscrepantMaterialReport::findOrFail($id);
        $dmr->update($request->all());

        Session::flash('flash_message', 'Discrepant Material Report updated!');

        return redirect('dmrs');
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
        DiscrepantMaterialReport::destroy($id);

        Session::flash('flash_message', 'Discrepant Material Report deleted!');

        return redirect('dmrs');
    }

}
