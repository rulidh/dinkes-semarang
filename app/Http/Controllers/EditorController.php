<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class EditorController extends Controller
{
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
       
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
       
            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();
       
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
       
            $fileExtension= ['zip', 'pdf', 'rar'];
            
            // Compressing Image
            $image= Image::make($request->file('upload'))
            ->resize(400, null, function ($constraint) { $constraint->aspectRatio(); } )
            ->encode("$extension", 100);

            //Upload File
            if(in_array($extension, $fileExtension)) {
                $request->file('upload')->storeAs('uploads/files', $filenametostore);
            }else{
                if(strpos($filenametostore, 'INTERNAL')){
                    Storage::disk('public')->put('uploads/images/aplikasi-internal/' . $filenametostore , $image);
                }else if(strpos($filenametostore, 'UMUM')){
                    Storage::disk('public')->put('uploads/images/aplikasi-umum/' . $filenametostore , $image);
                }else{
                    Storage::disk('public')->put('uploads/images/' . $filenametostore , $image);
                }
            }
            
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            if(strpos($filenametostore, 'INTERNAL')){
                $url = url(asset('storage/uploads/images/aplikasi-internal/'.$filenametostore)); 
            }else if(strpos($filenametostore, 'UMUM')){
                $url = url(asset('storage/uploads/images/aplikasi-umum/'.$filenametostore)); 
            }else{
                $url = url(asset('storage/uploads/images/'.$filenametostore)); 
            }
            $msg = 'Successfully uploaded'; 
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
              
            // Render HTML output 
            @header('Content-type: text/html; charset=utf-8'); 
            echo $re;
        }
    }
}
