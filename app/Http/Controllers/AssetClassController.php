<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AssetClass;
use App\Models\AssetGroup;

class AssetClassController extends Controller
{
    public function formValidate (Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'class_no' => 'required',
            'class_name' => 'required'
        ]);

        if ($validator->fails()) {
            return [
                'success' => 0,
                'errors' => $validator->getMessageBag()->toArray(),
            ];
        } else {
            return [
                'success' => 1,
                'errors' => $validator->getMessageBag()->toArray(),
            ];
        }
    }

    public function index()
    {
    	return view('asset-classes.list');
    }

    public function search($searchKey)
    {
        if($searchKey == '0') {
            $classes = AssetClass::orderBy('class_no')->paginate(20);
        } else {
            $classes = AssetClass::where('class_name', 'like', '%'.$searchKey.'%')->orderBy('class_no')->paginate(20);
        }

        return [
            'classes' => $classes,
        ];
    }

    public function getAll()
    {
        return [
            'classes' => AssetClass::all(),
        ];
    }

    public function getById($classId)
    {
        return [
            'class' => AssetClass::find($classId),
        ];
    }

    public function getNo($groupId)
    {
        $class = AssetClass::where('group_id', '=', $groupId)
                        ->orderBy('class_no', 'DESC')
                        ->first();

        if($class) {
            $classNo = $class->class_no;
        } else {
            $group = AssetGroup::find($groupId);
            $classNo = $group->group_no.'00';
        }
        
        return [
            'classNo' => $classNo
        ];
    }

    private function generateAutoId()
    {
        $cate = \DB::table('asset_classes')
                        ->select('class_no')
                        ->orderBy('class_no', 'DESC')
                        ->first();

        $tmpLastNo =  ((int)($cate->class_no)) + 1;
        $lastNo = sprintf("%'.05d", $tmpLastNo);

        return $lastId;
    }

    public function add()
    {
    	return view('asset-classes.add', [
            'groups' => AssetGroup::orderBy('group_no')->get(),
    	]);
    }

    public function store(Request $req)
    {
        $class = new AssetClass();
        // $class->class_id = $this->generateAutoId();
        $class->class_no = $req['class_no'];
        $class->class_name = $req['class_name'];
        $class->group_id = $req['group_id'];

        if($class->save()) {
            return [
                "status" => "success",
                "message" => "Insert success.",
            ];
        } else {
            return [
                "status" => "error",
                "message" => "Insert failed.",
            ];
        }
    }

    public function edit($classId)
    {
        return view('asset-classes.edit', [
            'type' => AssetClass::find($classId),
            'cates' => \DB::table('asset_categories')->select('*')->get(),
        ]);
    }

    public function update(Request $req)
    {
        $class = AssetClass::find($req['class_id']);

        $class->class_id = $req['class_id'];
        $class->class_name = $req['class_name'];
        $class->group_id = $req['group_id'];

        if($class->save()) {
            return [
                "status" => "success",
                "message" => "Update success.",
            ];
        } else {
            return [
                "status" => "error",
                "message" => "Update failed.",
            ];
        }
    }

    public function delete($classId)
    {
        $class = AssetClass::find($classId);

        if($class->delete()) {
            return [
                "status" => "success",
                "message" => "Delete success.",
            ];
        } else {
            return [
                "status" => "error",
                "message" => "Delete failed.",
            ];
        }
    }
}
