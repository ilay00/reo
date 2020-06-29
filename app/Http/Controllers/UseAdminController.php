<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use Illuminate\Http\Request;
use  Illuminate \ Routing \ Redirector ;
use App\User;
use App\Http\Requests\CreateUseadminRequest; 
use Auth;
use resources\views\home;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;



class UseAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
             //Вывод формы
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\CreateUseadminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


          //



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
   /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //$users=User::findOrFail($id);
           $users = User::findOrFail($id);
        return view('public.UsePRofil.edit', ['users'=> $users]);

        

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

    
               $users= User::findOrFail(Auth::user()->id);

            $users->fill($request->all());
             $request->has('family');

               if ($users != null) {
       
             $users= User::findOrFail(Auth::user()->id);
             $users->fill($request->all());
             $request->has('password');

             $users->password = bcrypt($users->password);
        
         
             // update password
        
             if (!$users->save()) {
                 return redirect()->back()->withErrors('Update error');
             }
             return redirect('home');
         }
          else {
          
        $users = User::create([
                      
                     ['family' => 'family'],
                       ['phone' => 'phone']
                    ]);

                     if (!$users->save()) {
                 return redirect()->back()->withErrors('Update error');
             }
             return redirect('home');
         
     // Session::flash('footer_message', "CREATED");
     
     }
 }
                
            

   
         
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $users= User::findOrFail($id);
           if(!$users->delete()){
            return redirect()->back()->withErrors('Delete error');
        }
        session()->flash('flash_message','Post deleted');
              return redirect('/');
 
                       }

                           
    
}
