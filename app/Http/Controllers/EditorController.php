<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            //Upload File
            if(in_array($extension, $fileExtension)) {
                $request->file('upload')->storeAs('uploads/files', $filenametostore);
            }else{   
                if(strpos($filenametostore, 'INTERNAL')){
                    $request->file('upload')->storeAs('uploads/images/aplikasi-internal', $filenametostore);
                }else if(strpos($filenametostore, 'UMUM')){
                    $request->file('upload')->storeAs('uploads/images/aplikasi-umum', $filenametostore);
                }else{
                    $request->file('upload')->storeAs('uploads/images', $filenametostore);
                }
            }
            
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            if(strpos($filenametostore, 'INTERNAL')){
                $url = asset('storage/uploads/images/aplikasi-internal/'.$filenametostore); 
            }else if(strpos($filenametostore, 'UMUM')){
                $url = asset('storage/uploads/images/aplikasi-umum/'.$filenametostore); 
            }else{
                $url = asset('storage/uploads/images/'.$filenametostore); 
            }
            $msg = 'Successfully uploaded'; 
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
              
            // Render HTML output 
            @header('Content-type: text/html; charset=utf-8'); 
            echo $re;
        }
    }
}
