<?php
namespace App\Http\Controllers\Frontend;

use Storage;
use Session;
use Carbon\Carbon;
use App\Http\Requests;
use App\Models\Workorder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\DiscrepantMaterialReport as DMR;

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
        $dmrs = DMR::orderBy('id', 'DESC')->paginate(15);

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
        
        


        $dmr = $request->all();
        
        if ($request->hasFile('uploaded_report')) {
            $reportPath = 'discrepant_material/reports/' . date("Y", time()) .'/';
            // Set the filename to the workorder_customer_process_time()
            $reportFilename = $request->workorder .'_' . $request->customer . '_' . 
                        $request->process . '_' .  time() . '.' . 
                        $request->file('uploaded_report')->getClientOriginalExtension();
            // add three attributes to the array
            $dmr['report_path'] = $reportPath;
            $dmr['report_filename'] = $reportFilename;
            $dmr['report_mime'] = $request->file('uploaded_report')->getClientMimeType();

            // move the file to the proper location with its new name
            $request->file('uploaded_report')->move($reportPath, $reportFilename);

        } 
        if ($request->hasFile('uploaded_image')) {
            $imagePath = 'discrepant_material/images/' . date("Y", time()) .'/';
            // Set the filename to the workorder_customer_process_time()
            $imageFilename = $request->workorder .'_' . $request->customer . '_' . 
                        $request->process . '_' .  time() . '.' . 
                        $request->file('uploaded_image')->getClientOriginalExtension();
            // add three attributes to the array
            $dmr['image_path'] = $imagePath;
            $dmr['image_filename'] = $imageFilename;
            $dmr['image_mime'] = $request->file('uploaded_image')->getClientMimeType();

            // move the file to the proper location with its new name
            $request->file('uploaded_image')->move($imagePath, $imageFilename);

        }


        DMR::create($dmr);

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
        $dmr = DMR::findOrFail($id);

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
        $dmr = DMR::findOrFail($id);

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
        
        $dmr = DMR::findOrFail($id);
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
        DMR::destroy($id);

        Session::flash('flash_message', 'Discrepant Material Report deleted!');

        return redirect('dmrs');
    }

}
