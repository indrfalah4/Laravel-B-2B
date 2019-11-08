<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Myuser;

class MyuserController extends Controller
{
    public function Tampil(){
        $myusers = Myuser::all();
        return view('users.show',[
            'myusers' => $myusers
        ]);
    }

    public function Simpan(Request $request){

        $myuser = new Myuser(); //membuat object dari model Myuser.php

        $myuser->fname = $request->fname;
        $myuser->lname = $request->lname;
        $myuser->email = $request->email;
        $myuser->phone = $request->phone;
        $myuser->message = $request->message;

        $myuser->save(); //simpan ke database
        return redirect()->route('show');
    }

    public function Hapus($id) {
        $myuser = Myuser::find($id);
        $myuser->delete();
        return redirect()->route('show');
    }
}
