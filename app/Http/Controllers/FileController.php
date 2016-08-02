<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Folder;
use App\File;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        return view('filebrowser.index');
    }

    public function getFolders($parent_id = null)
    {
        if($parent_id == 0){ $parent_id = null; };
        $folders = Folder::where('parent_id', '=', $parent_id)
            ->orderBy('name', 'asc')
            ->get()
            ->toJson();
        return $folders;
    }

    public function getFiles($folder_id = null)
    {
        if($folder_id == 0){ $folder_id = null; };
        $files = File::where('folder_id', '=', $folder_id)
            ->orderBy('name', 'asc')
            ->get()
            ->toJson();
        return $files;
    }

    public function createFile(Request $request)
    {
        // todo: Validation

        $requestFile = $request->file('file');
        $name = time() . '_' . $requestFile->getClientOriginalName();
        $folder = Folder::find($request->folder_id);
        if(!$folder)
        {
            $folder_id = null;
            $folder_path = 'upload/';
        } else
        {
            $folder_id = $folder->id;
            $folder_path = $folder->path;
        }

        if($requestFile->move($folder_path, $name))
        {
            $file = new File();

            $file->name = $requestFile->getClientOriginalName();
            $file->file_name = $name;
            $file->type = $requestFile->getClientMimeType();
            $file->extension = $requestFile->getClientOriginalExtension();
            $file->path = $folder_path.$name;
            $file->size = $requestFile->getClientSize();
            $file->folder_id = $folder_id;

            $file->save();

            return 'success';
        }
        return 'error';
    }
    
    public function createFolder(Request $request)
    {
        // todo: Validation

        $parent_id = ($request->folder_id != 0) ? $request->folder_id : null;
        $name = time() . '_' . $request->folder_name;
        $path = ($parent_id)
            ? Folder::find($parent_id)->path.'/'.$name
            : 'upload/'.$name ;
        if(\Illuminate\Support\Facades\File::makeDirectory(public_path().'/'.$path , 0777, true))
        {
            $folder = new Folder;

            $folder->name = $request->folder_name;
            $folder->folder_name = $name;
            $folder->path = $path;
            $folder->parent_id = $parent_id;

            $folder->save();
        }
    }
    
    public function renameItem(Request $request)
    {
        // todo: Validation
        $item = $request->item[0];
        if(
            array_key_exists('type', $item) &&
            array_key_exists('file_name', $item) &&
            array_key_exists('extension', $item)
        ){
            $file = File::find($item['id']);
            $file->name = $request->new_name;
            $file->save();
        }else{
            $folder = Folder::find($item['id']);
            $folder->name = $request->new_name;
            $folder->save();
        }
    }

    public function deleteBundle(Request $request)
    {
        // todo: Validation
        $deleted_items = array();
        foreach ($request->items as $item)
        {
            if(
                array_key_exists('type', $item) &&
                array_key_exists('file_name', $item) &&
                array_key_exists('extension', $item)
            ){
                $file = File::find($item['id']);
                $file->delete();
                if($file->trashed())
                {
//                    \Illuminate\Support\Facades\File::delete($file_path);
                    $deleted_items[] .= $file;
                }
            }else{
                $folder = Folder::find($item['id']);
                $folder->delete();
                if($folder->trashed())
                {
//                    \Illuminate\Support\Facades\File::deleteDirectory($folder_path);
                    $deleted_items[] .= $folder;
                }
            }
        }
        return $deleted_items;
    }

    public function listTrash()
    {

    }

    public function restoreTrashed(Request $request)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
