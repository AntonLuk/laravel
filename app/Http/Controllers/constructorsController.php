<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\constructors;

class constructorsController extends Controller
{
    //
    public function viewTable()
    {
        $model=\App\constructors::first();
        $records=\App\constructors::all();
        $title="Застройщики";
        $nameModel='constructors';
        //$nameModel='App\\Http\\Providers\\constructors';
        for($i=0;$i<Count($records);$i++)
        {
            $id[$i]=$records[$i]->id;
        }
        return view('view',compact('model','records','title','id','nameModel'));
    }
    public function create(Request $request)
    {
        $record = new constructors;
        $record->Name = $request->Name;
        
        $record->save();
        return redirect('/constructors');
    }
}
