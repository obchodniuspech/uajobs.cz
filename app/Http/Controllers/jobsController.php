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
        $invoice = "";
        return view('jobs.index',['invoice'=>$invoice]);
    }

    public function newOffer (Request $req) {
        $categories = DB::table('jobCategories')->orderBy('categoryName','asc')->get();
        return view('jobs.new',['categories'=>$categories]);
    }
    public function newOfferDone (Request $req) {
        return view('jobs.newDone');
    }

    public function store(Request $req) {

        DB::table('jobOffers')->insert(
            array(
                'companyId' => $req->companyId,
                'companyContactPhone' => $req->companyContactPhone,
                'companyContactEmail' => $req->companyContactEmail,
                'publishContact' => $req->publishContact,
                'publishTime' => $req->publishTime,
                'positionName' => $req->positionName,
                'positionDesc' => $req->positionDesc,
                'positionAddress' => $req->positionAddress,
                'salaryFrom' => $req->salaryFrom,
                'salaryTo' => $req->salaryTo,
                'jobType' => $req->jobType,
                'ip' => $_SERVER['REMOTE_ADDR'],
                'created_at' => Date("Y-m-d H:i:s"),
            )
        );


        return redirect('/new-offer-done');
    }


}
