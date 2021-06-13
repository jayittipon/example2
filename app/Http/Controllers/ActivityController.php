<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        //select * from Activity;
        $result = Activity::all();
        // $result = Activity::where('id','=','2')->get();
        // $result = Activity::where('id','!=',null)
        // ->orderBy('id','desc')
        // ->get();

        $data = [
            'items' => $result
        ];
        return view('activity.index', $data);
    }

    public function create($name)
    {
        $activity = new Activity();
        $activity->name = $name;
        $activity->save();
        return redirect('/กิจกรรม');
    }

    public function delete($id)
    {
        //select * from Activity where id = '$id';
        $activity = Activity::find($id);

        //delete from Activity where id = '$id';
        $activity->delete();

        return redirect('/กิจกรรม');
    }
}
