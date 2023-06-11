@extends('admin.layouts.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Главная</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-3 col-12">

                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>Методичьки</h3>
                            </div>
                            <div class="icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <a href="{{ route('guides.index') }}" class="small-box-footer">
                                Перейти к списку <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">

                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>
                                    QR-Фрагменты
                                </h3>
                            </div>
                            <div class="icon">
                                <i class="fas fa-file-word"></i>
                            </div>
                            <a href="{{ route('fragments.index') }}" class="small-box-footer">
                                Перейти к списку <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->

@endsection
