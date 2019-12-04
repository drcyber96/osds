<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reportscam;

class reportscamController extends Controller
{

  public function index()
  {
    return view('reportscam');

  }

  public function store(Request $request){

    $this->validate($request,[
      'name'=> 'required',
      'phone'=> 'required',
      'email'=> 'required',
      'bank_account'=> 'required',
      'bank_name'=> 'required',
      'platform'=> 'required',
      'product'=> 'required',
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',

    ]);

    $reportscam = new reportscam();
    $reportscam-> name = $request->input('name');
    $reportscam-> phone = $request->input('phone');
    $reportscam-> email = $request->input('email');
    $reportscam-> bank_account = $request->input('bank_account');
    $reportscam-> bank_name = $request->input('bank_name');
    $reportscam-> platform = $request->input('platform');
    $reportscam-> product = $request->input('product');

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('uploads/reportscam/', $filename);
            $reportscam->image = $filename;
            $reportscam->save();

          return redirect('/home')->with('status', 'Reports Sent');

        }
}
public function display()
{
    $reportscam = reportscam::all();
    return view('manage_report')->with ('reportscam', $reportscam);
}

public function show($id)
{
    $reportscam = reportscam::find($id);
    return view('view_reportscam', compact ('reportscam'));

}

public function destroy($id)
   {
       $reportscam = reportscam::find($id);
       $reportscam->delete();

       return redirect('manage_report')->with('success', 'Report is successfully deleted');
   }

}
