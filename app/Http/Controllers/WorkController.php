<?php

namespace App\Http\Controllers;

use App\Models\work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $work= work ::latest()->paginate(2);
       return view('admins.MyWorks.index',compact('work'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $works= work::all();
        return view('admins.MyWorks.create',compact('works'));
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
            'Created_by' => 'required|unique:works|max:255',
            'Completed_on' => 'required',
            'Skills' => 'required',
            'image' => 'required',
            'content' => 'required'
        ]);
          // Upload image
          $ex = $request->file('image')->getClientOriginalExtension();
          $new_img_name = 'final_project_' .time() . '.' . $ex;
          $request->file('image')->move(public_path('uploads'),$new_img_name);

        work::create([
            'Created_by' => $request->Created_by,
            'Completed_on' => $request->Completed_on,
            'Skills' => $request->Skills,
            'image' =>$new_img_name,
            'content' => $request->content 
        ]);

        return redirect()->route('works.index')->with('success', 'Education added succeffuly')
        ->with('type', 'warning');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(work $work)
    {
        return view('admins.MyWorks.edit', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, work $work)
    {
        $request->validate([
            'Created_by' => 'required|unique:works|max:255',
            'Completed_on' => 'required',
            'Skills' => 'required',
            'image' => 'required',
            'content' => 'required'
        ]);
    
        $ex = $request->file('image')->getClientOriginalExtension();
        $new_img_name='final_project_' .time() . '.' . $ex;
        $request->file('image')->move(public_path('uploads'),$new_img_name);

        $work->update([
            'Created_by' => $request->Created_by,
            'Completed_on' => $request->Completed_on,
            'Skills' => $request->Skills,
            'image' =>$new_img_name,
            'content' => $request->content 
        ]);
        return redirect()->route('works.index')->
        with('success', 'Category Update succeffuly')->with('type', 'warning');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(work $work)
    {
        $work->delete();
        return redirect()->route('works.index')
        ->with('success', 'About Deleted Successfully')->with('type', 'warning');
    }
}
