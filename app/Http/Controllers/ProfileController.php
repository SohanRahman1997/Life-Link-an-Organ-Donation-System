<?php

namespace App\Http\Controllers;

use App\Models\Profile;

use Illuminate\Http\Request;

class ProfileController extends Controller
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
        $profiles = Profile::all()->toArray();
        return view('profile.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
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
            'image'       => 'required',
            'first_name'  => 'required',
            'last_name'   => 'required',
            'email'       => 'required',
            'contact_no'  => 'required',
            'address1'    => 'required',
            'address2'    => 'required',
            'city'        => 'required',
            'area'        => 'required',
            'zip'         => 'required',
            'dob'         => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public');

            $profile = new Profile([
                'image'        => $imagePath,
                'first_name'   => $request->get('first_name'),
                'last_name'    => $request->get('last_name'),
                'email'        => $request->get('email'),
                'contact_no'   => $request->get('contact_no'),
                'address1'     => $request->get('address1'),
                'address2'     => $request->get('address2'),
                'city'         => $request->get('city'),
                'area'         => $request->get('area'),
                'zip'          => $request->get('zip'),
                'dob'          => $request->get('dob'),
            ]);

            $profile->save();
            return redirect()->route('profile.index')->with('success', 'Data Added');
        }

        return redirect()->back()->with('error', 'Image upload failed.');
    }


   /**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    $profile = Profile::findOrFail($id);
    return view('profile.edit', compact('profile'));
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
        'first_name'  => 'required',
        'last_name'   => 'required',
        'email'       => 'required',
        'contact_no'  => 'required',
        'address1'    => 'required',
        'address2'    => 'required',
        'city'        => 'required',
        'area'        => 'required',
        'zip'         => 'required',
        'dob'         => 'required',
    ]);

    $profile = Profile::findOrFail($id);
    $profile->first_name = $request->input('first_name');
    $profile->last_name = $request->input('last_name');
    $profile->email = $request->input('email');
    $profile->contact_no = $request->input('contact_no');
    $profile->address1 = $request->input('address1');
    $profile->address2 = $request->input('address2');
    $profile->city = $request->input('city');
    $profile->area = $request->input('area');
    $profile->zip = $request->input('zip');
    $profile->dob = $request->input('dob');
    $profile->save();

    return redirect()->route('profile.index')->with('success', 'Profile updated successfully');
}
    public function destroy($id)
    {
        $post = Profile::find($id);
        $post->delete();
        return redirect()->route('profile.index')->with('success', 'Data Deleted');
    }
}