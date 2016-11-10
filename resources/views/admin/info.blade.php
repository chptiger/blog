@extends('layouts.admin')
@section('content')
    <!--Breadcrumbs start-->
    <div class="crumb_warp">
        <i class="fa fa-home"></i> <a href="{{url('/admin/info')}}">Home</a> &raquo; System Information
    </div>
    <!--Breadcrumbs end-->

    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">
        <div class="result_title">
            <h3>Shortcuts</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="#"><i class="fa fa-plus"></i>Add article</a>
                <a href="#"><i class="fa fa-recycle"></i>Batch delete</a>
                <a href="#"><i class="fa fa-refresh"></i>Update sort</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->


    <div class="result_wrap">
        <div class="result_title">
            <h3>System Information</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>Operation System</label><span>{{PHP_OS}}</span>
                </li>
                <li>
                    <label>Running Environment</label><span>{{$_SERVER['SERVER_SOFTWARE']}}</span>
                </li>
                <li>
                    <label>Version</label><span>v-1.0</span>
                </li>
                <li>
                    <label>Upload Restriction</label><span><?php echo get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"LIMIT EXCEEDED"; ?></span>
                </li>
                <li>
                    <label>Time</label><span><?php echo date('Y-m-d H:i:s')?></span>
                </li>
                <li>
                    <label>Server/IP</label><span>{{$_SERVER['SERVER_NAME']}} / [ {{$_SERVER['SERVER_ADDR']}} ]</span>
                </li>
                <li>
                    <label>Host</label><span>{{$_SERVER['SERVER_ADDR']}}</span>
                </li>
            </ul>
        </div>
    </div>


    <div class="result_wrap">
        <div class="result_title">
            <h3>Help</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>GitHub：</label><span><a href="https://github.com/chptiger">https://github.com/chptiger/blog</a></span>
                </li>
                <li>
                    <label>Demo：</label><span><a href="#"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png"></a></span>
                </li>
            </ul>
        </div>
    </div>
    <!--结果集列表组件 结束-->
@endsection
