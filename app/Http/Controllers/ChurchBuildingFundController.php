<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChurchBuildingFund;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use PDF;
//use Illuminate\Support\Facades\Session;

class ChurchBuildingFundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DataTables $datatables)
    {
/*        dd(Session::all());
        dd(Auth::user()->name);*/
        $columns = [
            ['data' => 'sr_no','name' => 'sr_no','title' => 'Sr no','searchable'=>'false'],
            ['data' => 'fullname','name' => 'fullname','title' => 'Name'],
            ['data' => 'pan','name' => 'pan','title' => 'PAN'],
            ['data' => 'payment_date','name' => 'payment_date','title' => 'Donation date'],
            ['data' => 'amount','name' => 'amount','title' => 'Amount(INR)'],
            ['data' => 'action','name' => 'action','title' => 'Action']
        ];

        $baptism = ChurchBuildingFund::orderBy('id','desc')->get();

        $baptism_count = count($baptism);

        if ($datatables->getRequest()->ajax()) {
            return $datatables->of($baptism)
                ->editColumn('sr_no', function ($company_details) {
                    static $i = 0;
                    $i++;
                    return '<span style="width: 133px;">'.$i.'</span>';
                })
                ->editColumn('fullname', function ($baptism) {
                    return $baptism->donor_name;
                })
                ->editColumn('pan', function ($baptism) {
                    return '<span style="width: 133px;">'.$baptism->pannumber.'</span>';
                })
                ->editColumn('payment_date', function ($baptism) {
                    return '<span style="width: 133px;">'.$baptism->donation_date.'</span>';
                })

                ->editColumn('amount', function ($baptism) {
                    return '<span style="width: 133px;">'.$baptism->donation_amount.'</span>';
                })

                ->editColumn('action', function ($baptism) {
                    return '<div style="display: flex"><a href="'. route('churchbuidingfund.edit',$baptism->id).'" class="btn">Edit</a>
                            <a href="'. route('churchbuidingfund.show',$baptism->id).'" target="_blank" title="View PR Number" class="btn btn-primary btn-xs btn-rounded">View</a></div>';
                })

                ->rawColumns(['sr_no','fullname','pan','payment_date','amount','action'])
                ->make(true);
        }

        $html = $datatables->getHtmlBuilder()->columns($columns)->parameters($this->getParameters());
        return view('admin.list_churchbuildfund', compact('html','baptism_count'));
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
       return view('admin/add_churchbuildfund');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {




      if($request->mode_payment != ''){

          if($request->mode_payment == 'cheque'){

              $form_data = array(
                  'donor_name'=>$request->donor_name,
                  'donor_address'=>$request->donor_address,
                  'pannumber'=>$request->pannumber,
                  'donation_date'=>$request->donation_date,
                  'payment_mode'=>$request->mode_payment,
                  'donation_amount'=>$request->donation_amount_cheque,
                  'bank_name'=>$request->bank_name,
                  'bank_branch'=>$request->bank_branch,
                  'bn_account_no'=>$request->bn_account_no,
                  'cheque_number'=>$request->cheque_number,
                  'donation_amount'=>$request->donation_amount_cheque,
                  'cq_issue_date'=>$request->cq_issue_date,
                  'receivername'=>$request->receivername,
                  'created_at' => date('Y-m-d H-i-s')
              );

              ChurchBuildingFund::insert($form_data);
              return redirect()->route('churchbuidingfund.index')->with('success','Thank you for the donation.');

          }elseif($request->mode_payment == 'cash'){

              $form_data = array(
                  'donor_name'=>$request->donor_name,
                  'donor_address'=>$request->donor_address,
                  'pannumber'=>$request->pannumber,
                  'donation_date'=>$request->donation_date,
                  'payment_mode'=>$request->mode_payment,
                  'donation_amount'=>$request->donation_amount_cash,
                  'receivername'=>$request->receivername,
                  'created_at' => date('Y-m-d H-i-s')
              );

              ChurchBuildingFund::insert($form_data);
              return redirect()->route('churchbuidingfund.index')->with('success','Thank you for the donation.');
          }
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donation_details = ChurchBuildingFund::select('*')->where('id',$id)->first();
        $pdf = PDF::loadView('admin/pdf_donation', compact('donation_details'));
        return $pdf->download($donation_details->donor_name.date('Y_m_d').'.pdf');
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

    }


}
