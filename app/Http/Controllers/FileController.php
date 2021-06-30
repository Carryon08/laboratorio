<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($id)
    {
        $UserFiles= File::where('user_id',$id)->get();
        return view('files.IndexFiles',compact('UserFiles','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($id)
    {
        return view('files.CreateFile',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $file = new File();
        $file->user_id= $request->id;
        $file->description= $request->description;
        $name = Str::random(32) . '.pdf';
        $file->name = 'results/' . $name;
        Storage::disk('public')->putFileAs('results/', $request->name, $name);
        $file->save();
        $id = $request->id;
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $file = File::find($id);
        return view('files.ShowFile',compact('file'));
    }

    public function download($file)
    {
        $down = public_path().$file;
        return Response::download($down,'Resultados.pdf');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $file = File::findOrFail($id);
        $file->delete();
        return redirect()->back();
    }
}
