<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

use App\Sample;

class PagesController extends Controller
{
    //
    public function home()
    {
        return view('index');
    }

    public function test()
    {
        return getapi();
    }

    public function about()
    {
        $judul = "App Gitar Jreng";
        return view('about', ['judul' => $judul]);
    }

    public function stem()
    {
        return view('stem');
    }

    public function upload_stem()
    {
        return view('upload_stem');
    }

    public function insert_stem(Request $request)
    {
        //validate post data
        $this->validate($request, [
            'label' => 'required',
            'variasi' => 'required',
        ]);
    
        //get post data
        $postData = $request->all();
        $postData['file'] = 'none';
        $postData['user_id'] = Auth::user()->id;
    
        if ($request->gambar != null) {
            $this->validate($request, [
                'file' => 'required|file|mimes:audio/mpeg,mpga,mp3,wav,aac'
            ]);
            $image = $request->file('file');
            $namaewa = $request->input('label') ." ".$request->input('variasi')." by ". Auth::user()->id;
            $imageName=str_replace("_", " ", $namaewa).'_'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/file_upload/file_tune/');
            $image->move($destinationPath, $imageName);
    
            $postData['file'] = $imageName;
        }
        //insert post data
        Sample::create($postData);
    
        //store status message
        Session::flash('success_msg', 'Terima kasih telah berpartisipasi!');
    
        return redirect()->route('stem/add');
    }
}