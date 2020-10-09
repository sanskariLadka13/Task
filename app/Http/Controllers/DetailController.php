<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    //
    public function create(Request $request){
        $detail = new Detail();
        $detail->title = $request->title;
        $detail->content = $request->content;
        $detail->rating = $request->rating;
        $detail->cast = $request->cast;
        $detail->theatres_n_time = $request->theatres_n_time;
        $detail->story  = $request->story;

        $detail->save();
        return redirect('/');
    }

    public function view($id){

        $detail  = Detail::findOrFail($id);

        return view('details',[
            'detail' => $detail
        ]);

        }
}
