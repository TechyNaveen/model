<?php

namespace App\Http\Controllers;

use App\Models\CurdModel;
use Illuminate\Http\Request;

class Curd extends Controller
{
    public function insert(Request $request)
    {

        $mod = new CurdModel();
        $mod->name = $request->input('name');

        $mod->save();

        return redirect('/');
    }


    public function edit($id)
    {

        $data = CurdModel::find($id);

        return view('update', ['datas' => $data]);
    }


    public function update(Request $request, $id)
    {

        $data = CurdModel::find($id);
        $data->name = $request->input('name');
        $data->save();

        return redirect('/');
    }

    public function delete($id)
    {

        CurdModel::find($id)->delete();

        return redirect('/');
    }


}
