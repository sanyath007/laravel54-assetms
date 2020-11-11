@extends('layouts.main')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            เพิ่มกลุ่มย่อยครุภัณฑ์
            <!-- <small>preview of simple tables</small> -->
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
            <li class="breadcrumb-item active">เพิ่มกลุ่มย่อยครุภัณฑ์</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content" ng-controller="assetClassCtrl">

        <div class="row">
            <div class="col-md-12">

                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">ฟอร์มเพิ่มกลุ่มย่อยครุภัณฑ์</h3>
                    </div>

                    <form
                        id="frmNewAssetClass"
                        name="frmNewAssetClass"
                        method="post"
                        action="{{ url('/asset-class/store') }}"
                        role="form"
                    >
                        <input type="hidden" id="user" name="user" value="{{ Auth::user()->person_id }}">
                        {{ csrf_field() }}
                        
                        <div class="box-body">
                            <div class="col-md-8">

                                <div class="form-group" ng-class="{'has-error has-feedback': checkValidate(assetClass, 'group_id')}">
                                    <label class="control-label">กลุ่มครุภัณฑ์ :</label>
                                    <select id="group_id"
                                            name="group_id"
                                            ng-model="assetClass.group_id"
                                            ng-change="getClassNo(assetClass.group_id)"
                                            class="form-control select2" 
                                            style="width: 100%; font-size: 12px;">
                                            
                                        <option value="" selected="selected">-- กรุณาเลือก --</option>

                                        @foreach($groups as $group)

                                            <option value="{{ $group->group_id }}">
                                                {{ $group->group_no.'-'.$group->group_name }}
                                            </option>

                                        @endforeach
                                        
                                    </select>
                                    <span class="glyphicon glyphicon-remove form-control-feedback" ng-show="checkValidate(assetClass, 'group_id')"></span>
                                    <span class="help-block" ng-show="checkValidate(assetClass, 'group_id')">กรุณาเลือกกลุ่มครุภัณฑ์</span>
                                </div>

                                <div class="form-group" ng-class="{'has-error has-feedback': checkValidate(assetClass, 'class_no')}">
                                    <label class="control-label">รหัสกลุ่มย่อยครุภัณฑ์ :</label>
                                    <input
                                        type="text"
                                        id="class_no"
                                        name="class_no"
                                        ng-model="assetClass.class_no"
                                        class="form-control">
                                    <span class="glyphicon glyphicon-remove form-control-feedback" ng-show="checkValidate(assetClass, 'class_no')"></span>
                                    <span class="help-block" ng-show="checkValidate(assetClass, 'class_no')">กรุณากรอกรหัสกลุ่มย่อยครุภัณฑ์ก่อน</span>
                                </div> 

                                <div class="form-group" ng-class="{'has-error has-feedback': checkValidate(assetClass, 'class_name')}">
                                    <label class="control-label">ชื่อกลุ่มย่อยครุภัณฑ์ :</label>
                                    <input
                                        type="text"
                                        id="class_name"
                                        name="class_name"
                                        ng-model="assetClass.class_name"
                                        class="form-control">
                                    <span class="glyphicon glyphicon-remove form-control-feedback" ng-show="checkValidate(assetClass, 'class_name')"></span>
                                    <span class="help-block" ng-show="checkValidate(assetClass, 'class_name')">กรุณากรอกชื่อกลุ่มย่อยครุภัณฑ์ก่อน</span>
                                </div>

                            </div><!-- /.col-md-8 -->
                        </div><!-- /.box-body -->
                  
                        <div class="box-footer clearfix">
                            <button
                                ng-click="formValidate($event, '/asset-class/validate', assetClass, 'frmNewAssetClass', add)"
                                class="btn btn-success pull-right"
                            >
                                บันทึก
                            </button>
                        </div><!-- /.box-footer -->
                    </form>

                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->

    </section>

    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()
        });
    </script>

@endsection