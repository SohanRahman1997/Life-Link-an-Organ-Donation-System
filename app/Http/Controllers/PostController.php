<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
   * Create a new controller instance.
   *
   * @return void
   */
    /**public function __construct()
    {
    $this->middleware('auth');
  } */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->toArray();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name'    =>  'required',
            'last_name'     =>  'required',
            'email'         =>  'required',
            'contact_no'    =>  'required',
            'address1'      =>  'required',
            'address2'      =>  'required',
            'donor_id'      =>  'required',
            'organ_id'      =>  'required',
            'city'          =>  'required',
            'area'          =>  'required',
            'zip'           =>  'required',
            'organ_type'    =>  'required',
            'blood_type'    =>  'required',
            'dob'           =>  'required',
        ]);
        $post = new Post ([
            'first_name'    =>  $request->get('first_name'),
            'last_name'     =>  $request->get('last_name'),
            'email'         =>  $request->get('email'),
            'contact_no'    =>  $request->get('contact_no'),
            'address1'      =>  $request->get('address1'),
            'address2'      =>  $request->get('address2'),
            'donor_id'      =>  $request->get('donor_id'),
            'organ_id'      =>  $request->get('organ_id'),
            'city'          =>  $request->get('city'),
            'area'          =>  $request->get('area'),
            'zip'           =>  $request->get('zip'),
            'organ_type'    =>  $request->get('organ_type'),
            'blood_type'    =>  $request->get('blood_type'),
            'dob'           =>  $request->get('dob'),
        ]);
        $post->save();
        return redirect()->route('post.index')->with('success', 'Data Added');
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
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
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
        $this->validate($request, [
            'first_name'   =>  'required',
            'last_name'    =>  'required',
            'email'        =>  'required',
            'contact_no'   =>  'required',
            'address1'     =>  'required',
            'address2'     =>  'required',
            'donor_id'     =>  'required',
            'organ_id'     =>  'required',
            'city'         =>  'required',
            'area'         =>  'required',
            'zip'          =>  'required',
            'organ_type'   =>  'required',
            'blood_type'   =>  'required',
            'dob'          =>  'required',
        ]);
        $post = Post::findOrFail($id);
        $post->first_name    =  $request->input('first_name');
        $post->last_name     =  $request->input('last_name');
        $post->email         =  $request->input('email');
        $post->contact_no    =  $request->input('contact_no');
        $post->address1      =  $request->input('address1');
        $post->address2      =  $request->input('address2');
        $post->donor_id      =  $request->input('donor_id');
        $post->organ_id      =  $request->input('organ_id');
        $post->city          =  $request->input('city');
        $post->area          =  $request->input('area');
        $post->zip           =  $request->input('zip');
        $post->organ_type    =  $request->input('organ_type');
        $post->blood_type    =  $request->input('blood_type');
        $post->dob           =  $request->input('dob');
        $post->save();
        return redirect()->route('post.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post.index')->with('success', 'Data Deleted');
    }
}