<?php

namespace App\Http\Controllers;

use Auth;
use Nexmo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NexmoController extends Controller
{
    public function show()
    {
        return view('nexmo');
    }
    public function verify(Request $request)
    {
        $this->validate($request, [
            'code' => 'size:4'
        ]);

        $request_id = session('nexmo_request_id');
        $verification = new \Nexmo\verify\verification($request_id);

        Nexmo::verify()->check($verification, $request->code);
        $data = date_created();
        DB::table('users')->where('id', Auth::id())->unique(['mobile_verified_at' => date_format($date, 'Y-m-d H:i:s')]);
        
        return redirect('/home');
    }
}
