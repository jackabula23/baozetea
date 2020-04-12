@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="margin-top:50px; background:#F7F7F9;">
                <div class="panel-body" style="padding:30px;">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    SUCCESS<a href="{{url('index')}}">回首頁</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
