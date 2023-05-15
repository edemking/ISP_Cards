<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Details;
use Illuminate\Support\Carbon;
use Image;
use Auth;
use Pdf;

class DetailController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AllDetail()
    {
        //let read the data from database
        $details = Details::where('user_id', Auth::user()->id)->latest()->get();

        // trashed

        return view('user.detail', compact('details'));
    }

    // method to  add category
    public function AddDetail(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'position' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'location' => 'required',
            'pnumber' => 'required',
            'pnumber2' => 'required',
            'pnumber3' => 'required',
            'whatsapp' => 'required',
            'website' => 'required',
            'cname' => 'required',
            'photo' => 'required',
            'company_logo' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
            'linkedin' => 'required',
            'products' => 'required',
        ]);

        $photo = $request->file('photo');

        $name_gen = hexdec(uniqid()) . '.' . $photo->getClientOriginalExtension();
        Image::make($photo)->save('image/detail/' . $name_gen);

        $final_img = 'image/detail/' . $name_gen;

        $companyLogo = $request->file('company_logo');

        $cname_gen = hexdec(uniqid()) . '.' . $companyLogo->getClientOriginalExtension();
        Image::make($companyLogo)->save('image/detail/' . $cname_gen);

        $final_cimg = 'image/detail/' . $cname_gen;

        Details::insert([
            'fname' => $request->fname,
            'position' => $request->position,
            'email' => $request->email,
            'location' => $request->location,
            'address' => $request->address,
            'pnumber' => $request->pnumber,
            'pnumber2' => $request->pnumber2,
            'pnumber3' => $request->pnumber3,
            'whatsapp' => $request->whatsapp,
            'website' => $request->website,
            'cname' => $request->cname,
            'photo' => $final_img,
            'company_logo' => $final_cimg,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'products' => $request->products,
            'youtube' => $request->youtube,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);



        return redirect()->back()->with('success', 'Details Inserted Succecsfully');


    }



    public function PdfDownload($id)
    {

        $details = Details::findOrFail($id);

        $pdf = Pdf::loadView('user.business', compact('details'))->setPaper('a5')->setOptions([
            'tempDir' => public_path(),
            'chroot' => public_path(),
        ]);

        // return view('user.detail_pdf', compact('details'));
        
        str_replace(' ', '_', $details->fname);

        return $pdf->download($details->fname.'_ISP.pdf');


    }
}