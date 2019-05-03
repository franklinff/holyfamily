<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Baptism;
use Yajra\DataTables\DataTables;
use PDF;

class BaptismController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DataTables $datatables, Request $request)
    {
       $columns = [
           ['data' => 'sr_no','name' => 'sr_no','title' => 'Sr no','searchable'=>'false'],
            ['data' => 'fullname','name' => 'fullname','title' => 'Name'],
            ['data' => 'dob','name' => 'dob','title' => 'DOB'],
            ['data' => 'gender','name' => 'gender','title' => 'Gender'],
            ['data' => 'action','name' => 'action','title' => 'Action','searchable'=>'false']
        ];
        $getRequest = $request->all();

        $baptism = Baptism::orderBy('id','desc')->get();

        if ($datatables->getRequest()->ajax()) {
            return $datatables->of($baptism)
                ->editColumn('sr_no', function ($company_details) {
                    static $i = 0;
                    $i++;
                    return $i;
                })
                ->editColumn('fullname', function ($baptism) {
                    return $baptism->newborn_firstname.' '.$baptism->newborn_middlename.' '.$baptism->newborn_surname;
                })
                ->editColumn('dob', function ($baptism) {
                    return $baptism->baptism_date;
                })
                ->editColumn('gender', function ($baptism) {
                    return $baptism->gender   ;
                })

                ->editColumn('action', function ($baptism) {
                    return '<div style="display: flex">
                            <a href="'. route('baptism.edit',$baptism->id).'" class="btn">Edit</a>
                            <a href="'. route('baptism.show', $baptism->id).'" class="btn">View</a>
                            </div>';
                })

                ->rawColumns(['sr_no','dob','fullname','gender','action'])
                ->make(true);
        }

        $html = $datatables->getHtmlBuilder()->columns($columns)->parameters($this->getParameters());
        return view('admin.listbaptismdata', compact('html'));
    }

    public function getParameters() {
        return [
            'serverSide' => true,
            'processing' => true,
            'ordering'   =>'isSorted',
            "pageLength" => 10
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.baptismform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $baptism = $request->toArray();
        Baptism::create($baptism);
        return redirect()->route('baptism.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $individual_data = Baptism::where('id',$id)->first();
       // $data = Baptism::where('id',$id)->get();

       // dd($individual_data->toArray());

        // Send data to the view using loadView function of PDF facade
        $pdf = PDF::loadView('admin.baptismpdfcertificate',compact('individual_data'));
        // If you want to store the generated pdf to the server then you can use the store function
        $pdf->save(storage_path().'_filename.pdf');
        // Finally, you can download the file using download function
        return $pdf->download('baptismpdfcertificate.pdf');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
