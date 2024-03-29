@extends('layouts._header', ['Games' => app(\App\Models\Games::class)->categories()])


@section('title', '主页')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">个人中心</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>


            <div class="row">
                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
                    <div class="card ">
                        <img class="img-responsive" src="https://cdn.learnku.com/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600" alt="{{ $user->name }}">
                        <div class="card-body">
                            <h5><strong>个人简介</strong></h5>
                            <p>简介你妈个头啊,偷工减料懂吗？</p>
                            <hr>
                            <h5><strong>注册于</strong></h5>
                            <p>2019-1-1</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="card ">
                        <div class="card-body">
                            <h1 class="mb-0" style="font-size:22px;">{{ $user->name }} <small>{{ $user->email }}</small></h1>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->


@stop