<?php

namespace App\Http\Controllers;

use App\Models\adminabout;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Validator;

class AdminaboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $about = Adminabout::latest()->paginate();
         return view('admins.adminabout.index',compact('about'));
    }
    public function ADindex()
    {
         $about = Adminabout::latest()->paginate();
         return view('admins.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about = adminabout::all();
        return view('admins.adminabout.create',compact('about'));
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Job_title' => 'required',
        'Birthday' =>'required',
        'Age' => 'required',
        'Website' => 'required',
        'Degree' => 'required',
        'Phone' => 'required',
        'City' => 'required',
        'Freelance' => 'required',
        'image' => 'required',
        'content' => 'required'
        ]);

          // Upload image
          $ex = $request->file('image')->getClientOriginalExtension();
          $new_img_name = 'final_project_' .time() . '.' . $ex;
          $request->file('image')->move(public_path('uploads'),$new_img_name);
        // Add value
        adminabout::create([
        'Job_title' => $request->Job_title,
        'Birthday' =>$request->Birthday,
        'Age' => $request->Age,
        'Website' => $request->Website,
        'Degree' => $request->Degree,
        'Phone' => $request->Phone,
        'City' => $request->City,
        'Freelance' => $request->Freelance,
        'image' => $new_img_name,
        'content' => $request->content
    ]);

    return redirect()->route('about.index')
    ->with('success', 'About Addedd Successfully');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\adminabout  $adminabout
     * @return \Illuminate\Http\Response
     */
    public function show(adminabout $adminabout)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adminabout  $adminabout
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abouts = adminabout::find($id);
        return view('admins.adminabout.edit',compact('abouts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\adminabout  $adminabout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Job_title' => 'required',
        'Birthday' =>'required',
        'Age' => 'required',
        'Website' => 'required',
        'Degree' => 'required',
        'Phone' => 'required',
        'City' => 'required',
        'Freelance' => 'required',
        'image' => 'required',
        'content' => 'required'
        ]);
        $ex = $request->file('image')->getClientOriginalExtension();
        $new_img_name = 'final_project_' .time() . '.' . $ex;
        $request->file('image')->move(public_path('uploads'),$new_img_name);

        adminabout::find($id)->update([
            'Job_title' => $request->Job_title,
        'Birthday' =>$request->Birthday,
        'Age' => $request->Age,
        'Website' => $request->Website,
        'Degree' => $request->Degree,
        'Phone' => $request->Phone,
        'City' => $request->City,
        'Freelance' => $request->Freelance,
        'image' => $new_img_name,
        'content' => $request->content
        ]);

        return redirect()->route('about.index')->with('success', 'About Updated Successfully')->with('type', 'success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\adminabout  $adminabout
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        adminabout::find($id)->delete();
        return redirect()->route('about.index')
        ->with('success', 'About Deleted Successfully')->with('type', 'success');
    }
}
