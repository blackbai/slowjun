@extends('admin.layouts.app')

@section('content')
    <div class="content">
        <div class="container-padding">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">

                        <div class="panel-title">
                            站点设置
                            <ul class="panel-tools">
                                <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                                <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                                <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
                            </ul>
                        </div>

                        <div class="panel-body">
                            <form class="form-horizontal"  method="post" action="{{route('admin.setting')}}">
                                <div class="form-group">
                                    <label for="input002" class="col-sm-2 control-label form-label">站点名称</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input002" name="site_title" value="{{$setting->site_title}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input002" class="col-sm-2 control-label form-label">站点邮箱</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input002" name="site_email" value="{{$setting->site_email}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input002" class="col-sm-2 control-label form-label">备案信息</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input002" name="site_info" value="{{$setting->site_info}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input002" class="col-sm-2 control-label form-label">站长名称</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input002" name="site_name" value="{{$setting->site_name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input002" class="col-sm-2 control-label form-label">站长电话</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input002" name="site_phone" value="{{$setting->site_phone}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input002" class="col-sm-2 control-label form-label">icon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input002" name="site_icon" value="{{$setting->site_icon}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input002" class="col-sm-2 control-label form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="submit" class="btn btn-default" value="提交" />
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>

            </div>
            <!-- End Row -->
        </div>
@endsection
