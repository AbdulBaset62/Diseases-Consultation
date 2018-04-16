<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search');
    }
    

    public function diseasesGuide(Request $request){

        $diseaseName = $request->input('searchItem');

        $this->validate($request,[
            'searchItem' => 'required|string',
        ]);
        $rs = DB::table('diseases')->where('diseaseName',  $diseaseName)->get();

       // $rs = DB::table('diseases')->where('diseaseName', 'LIKE', "%$diseaseName%")->get();


        return view('diseases',['info'=>$rs]);
    }
    public function addDisease(){
        return view('admin.addDisease');
    }


    public function categoryAdd(Request $request){
        $title=$request->title;
        $content=$request->content;


        DB::table('diseases')->insertGetId(
            ['diseaseName' => $title, 'procedure' => $content]
        );


        return back()->with('success','Content added successfully!');
    }

}
