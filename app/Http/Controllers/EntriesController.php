<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entries;
use App\User;
use DB;
class EntriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     /**
     * This function ensures that You have to be logged in to view any of the pages
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }
    public function index()
    {
        //$entries=Entries::all();
        $entries= Entries::OrderBy('id', 'asc')->paginate(10);
        
      return view('entries.index')->with('entries',$entries);
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('entries.create');
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
            'title'=>'required',
            'body' =>'required'
      ]);
      $post =new Entries;
      $post->title= $request->input('title');
      $post->body= $request->input('body');
      $post->user_id = auth()->user()->id;
      $post->save();

      return redirect('/posts')->with('success' ,'post created');

     // return('nyee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entries= Entries::where('id',$id)->get();
        return view('entries.show')->with('entries', $entries);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $entries= Entries::where('id',$id)->get();
         //$user=Entries::find('user_id');


        /* if(auth()->user()->id !==$user){

           *return redirect('/posts')->with('error', 'Mind ya business'); 
        * }*/
        return view('entries.edit')->with('entries', $entries);  
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
         $this->validate($request,[
            'title'=>'required',
            'body' =>'required'
      ]);
      $post = Entries::find($id);
      $post->title= $request->input('title');
      $post->body= $request->input('body');
      $post->save();

      return redirect('/posts')->with('success' ,'post edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $post = Entries::find($id);
         $post->delete();
        return redirect('/posts')->with('success' ,'Entry Deleted');


    }
}
