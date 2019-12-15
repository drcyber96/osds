<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scammer;

class ScammersController extends Controller
{

  public function index()
  {
    return view('Scammers');

  }


    public function submit(Request $request){

      $this->validate($request,[
        'name'=> 'required',
        'phone'=> 'required',
        'email'=> 'required',
        'bank_account'=> 'required',
        'bank_name'=> 'required',
        'platform'=> 'required',
        'product'=> 'required',
        'link'=> 'required'
]);

    //Create New Scammers
    $scammer = new Scammer;
    $scammer-> name = $request->input('name');
    $scammer-> phone = $request->input('phone');
    $scammer-> email = $request->input('email');
    $scammer-> bank_account = $request->input('bank_account');
    $scammer-> bank_name = $request->input('bank_name');
    $scammer-> platform = $request->input('platform');
    $scammer-> product = $request->input('product');
    $scammer-> link = $request->input('link');
    //save Scammers
    $scammer->save();

    //Redirect
    return redirect('/admin')->with('status', 'New Scammer profile is successfully Added');

    }

      public function getScammers(){

        $scammers =Scammer::all();
        return view('scammers')->with('scammers', $scammers);



      }



      public function display()
      {
          $scammers = Scammer::all();
          return view('manage_scammer')->with ('scammers', $scammers);
      }






      public function edit($id)
   {
       $scammers = Scammer::findOrFail($id);
       return view('edit_scammer', compact('scammers'));
   }



   public function update(Request $request, $id)
       {
         $request->validate([
           'name'=> 'required',
           'phone'=> 'required',
           'email'=> 'required',
           'bank_account'=> 'required',
           'bank_name'=> 'required',
           'platform'=> 'required',
           'product'=> 'required',
           'link'=> 'required'
           
               ]);

           $form_scammers = array(

                'name' =>$request->name,
                'phone' =>$request->phone,
                'email' => $request->email,
                'bank_account' => $request->bank_account,
                'bank_name' => $request->bank_name,
                'platform' => $request->platform,
                'product' => $request->product,
                'link' => $request->link

           );
           Scammer::whereId($id)->update($form_scammers);
           return redirect('manage_scammer')->with('success', 'Scammer is successfully updated');
       }





       public function show($id)
       {
           $scammers = Scammer::find($id);
           return view('view_scammers', compact ('scammers'));

       }

   public function destroy($id)
      {
          $scammers = Scammer::find($id);
          $scammers->delete();

          return redirect('manage_scammer')->with('success', 'scammer is successfully deleted');
      }
}
