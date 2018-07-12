
@extends('backend.layouts.app')
@section('head')

    @include('UEditor::head');
@stop
@section('content')

    <div class="col-12">
        {{ html()->form('PUT', '/post')->open() }}
        {{html()->text()->name('title')}}
        {{html()->textarea()->id('container')}}
        {{html()->button()->type('submit')->text('提交')}}
        {{html()->form()->close()}}
    </div>

@stop


@section('scripts')

    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container', {
            initialFrameWidth: null,//动态宽度显示
            iframeCssUrl: '/laravel-u-editor/themes/iframe.css',//自定义样式
            initialFrameHeight:400
        });
    </script>
@stop