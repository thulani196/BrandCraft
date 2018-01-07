<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;
use App\Requests;
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
            return redirect('home/requests/archived')->with('success','Request Un-archived!');
        }
    }

    public function archived(){
        $requests = DB::table('requests')->whereArchived(1)->get();
        return view('dashboard/archived_requests',['requests'=>$requests]);
    }

    
}
