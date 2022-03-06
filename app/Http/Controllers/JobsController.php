<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Invoices;
use DB;
use Illuminate\Support\Facades\File;

class jobsController extends Controller
{
    //

    public function showAll(Request $req) {
        $jobsTotal = DB::table('jobOffers')->orderBy('id','desc')->count();;
        
        $jobs = DB::table('jobOffers')->orderBy('id','desc')->paginate(100);
        return view('jobs.index',['jobs'=>$jobs,"totalCount"=>$jobsTotal]);
        
    }

    public function newOffer (Request $req) {
        $categories = DB::table('jobCategories')->orderBy('categoryName','asc')->get();
        return view('jobs.new',['categories'=>$categories]);
    }
    
    public function heplUaJobs (Request $req) {
        return view('helpus');
    }
    public function newOfferDone (Request $req) {
        return view('jobs.newDone');
    }

    public function store(Request $req) {

        DB::table('jobOffers')->insert(
            array(
                'companyId' => $req->companyId,
                'companyName' => $req->companyName,
                'companyContactPhone' => $req->companyContactPhone,
                'companyContactEmail' => $req->companyContactEmail,
                'publishContact' => $req->publishContact,
                'categoryId' => $req->categoryId,
                'publishTime' => $req->publishTime,
                'positionName' => $req->positionName,
                'positionDesc' => $req->positionDesc,
                'positionAddress' => $req->positionAddress,
                'salaryFrom' => $req->salaryFrom,
                'status' => 'waiting_approval',
                'status4employer' => 'not_confirmed',
                'lang' => $req->lang,
                'salaryTo' => $req->salaryTo,
                'jobType' => $req->jobType,
                'ip' => $_SERVER['REMOTE_ADDR'],
                'created_at' => Date("Y-m-d H:i:s"),
            )
        );


        return redirect('/new-offer-done');
    }


}
