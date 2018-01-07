<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requests;
use DB;
class HandleRequests extends Controller
{
    public function archiveRequest($id) {
        if(isset($id) && !empty($id)) {
            $sql = DB::table('requests')
                    ->whereId($id)
                    ->update(['archived'=>1]);
            return redirect('home/requests')->with('success','Request Archived!');
        }
    }

    public function deleteRequest($id) {
        if(isset($id) && !empty($id)) {
            $sql = DB::table('requests')
                    ->whereId($id)
                    ->delete();
            return redirect('home/requests')->with('success','Request Deleted!');
        }
    }

    public function restoreRequest($id) {
        if(isset($id) && !empty($id)) {
            $sql = DB::table('requests')
                    ->whereId($id)
                    ->update(['archived'=>0]);
            return redirect('home/requests')->with('success','Request Un-archived!');
        }
    }

    
}
