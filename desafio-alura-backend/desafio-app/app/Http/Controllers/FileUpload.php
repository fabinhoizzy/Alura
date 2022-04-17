<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileUpload extends Controller
{
    public function createForm()
   {
        return view('file-upload');
   }

    public function fileUpload(Request $request)
    {

        $fileModel = new File();

        if($request->file()) {
            $fileName = time().'-'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = time().'-'.$request->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();

        }

    }

}
