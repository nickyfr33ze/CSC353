<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uploads = Upload::all();
        return view('upload.index', compact('uploads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('upload.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        Upload::create($validated);

        return redirect('/upload');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Upload $upload
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
        return view('upload.show', compact('upload'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(Upload $upload)
    {
        return view('upload.edit', compact('upload'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upload $upload)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $upload->title = $request->title;
        $upload->description = $request->description;
        $upload->save();
        redirect('/upload/'.$upload->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Upload $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upload$upload)
    {
       $upload->delete();
        redirect('/upload');
    }
}
