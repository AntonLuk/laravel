<?php

namespace App\Http\Controllers;

use App\constructors;
use Illuminate\Http\Request;
use App\Positions;

class PositionsController extends Controller
{
    //
    public function create(Request $request)
    {
        $record = new Positions;
        $record->Name = $request->Name;
        $record->Salary = $request->Salary;
        $record->save();
        return redirect('/Positions');
    }
    public function viewTable()
    {
        $model=Positions::first();
        $records=Positions::all();
        $title='Должности';
        $nameModel='Positions';
        $id=array();
        for($i=0;$i<Count($records);$i++)
        {
            $id[$i]=$records[$i]->id;
        }
        return view('view',compact('model','records','title','id','nameModel'));
    }
    public function delete($nameModel,$id)
    {
        $classname='App\\'.$nameModel;;
        $model=new $classname;
        $record= $model::find($id);

        $record->delete();
        return redirect('/Positions');

    }
    public function editrecord(Request $request)
    {
        $id=$request->input('id');
        $name=$request->input('Name');
        $salary=$request->input('Salary');
        $record= Positions::find($id);
        $record->Name=$name;
       $record->Salary=$salary;
       $record->save();
       return redirect('/Positions');
        //return $name;
    }
    public function viewrecord($nameModel,$id)
    {
        $classname='App\\'.$nameModel;
        $model=new $classname();
        $record=$model::find($id);
        $title='Редактирование';
       return view("Record".$nameModel."",compact('record','title'));


    }
    public function addRecord($nameModel)
    {
        $title="Должности";

        return view('Record'.$nameModel,compact('title'));

    }
}
