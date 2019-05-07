<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\CarouselnGallery;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;


class CarouselnGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DataTables $datatables, Request $request)
    {

        //dd(storage_path());

        $carousel_imgs = CarouselnGallery::where('type','carousel')->get();
        $columns = [
            ['data' => 'sr_no','name' => 'sr_no','title' => 'Sr No.','searchable' => false],
            ['data' => 'imagename','name' => 'imagename','title' => 'Image','searchable' => false],
            ['data' => 'status','name' => 'status','title' => 'Status','searchable' => false],
            ['data' => 'action','name' => 'action','title' => 'Action','searchable' => false],
            ['data' => 'uploaded_on','name' => 'uploaded_on','title' => 'Uploaded on']
        ];

        if ($datatables->getRequest()->ajax()) {
            return $datatables->of($carousel_imgs)
                ->editColumn('sr_no', function ($carousel_imgs) {
                    static $i = 0;
                    $i++;
                    return $i;
                })
                ->editColumn('imagename', function ($carousel_imgs) {

                    $x = asset('storage/gallryncarousl/'.$carousel_imgs->imagename);
                    return '<img src= '.$x.'  alt="" width="150" height="120">';
                })
                ->editColumn('status', function ($carousel_imgs) {
                    return $carousel_imgs->status;
                })
                ->editColumn('action', function ($carousel_imgs) {
                    return $carousel_imgs->id;
                })
                ->editColumn('uploaded_on', function ($carousel_imgs) {
                    return $carousel_imgs->created_at;
                })
                ->rawColumns(['sr_no','imagename','status','uploaded_on','action'])
                ->make(true);
        }

        $html = $datatables->getHtmlBuilder()->columns($columns)->parameters($this->getParameters());
        return view('admin.gallerycarousel.listcarousel', compact('html'));
    }


    protected function getParameters() {

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
        return view('admin.gallerycarousel.addcarousel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'imagename'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $filename = rand().$request->imagename->getClientOriginalName();

        $image_data = [
            'imagename' => $filename,
            'status' => $request->status,
            'type' => $request->type,
            'remark' => $request->remark,
            'created_at' => Carbon::now()
        ];

        CarouselnGallery::insert($image_data);

        Storage::putFileAs('public/gallryncarousl', $request->file('imagename'), $filename);

       // $request->imagename->storeAs('gallryncarousl',$filename);
        return redirect()->route('carousngalry.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
