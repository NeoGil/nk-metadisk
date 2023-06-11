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
                <h3 class="card-title">Список QR-Фрагментов</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="{{ route('fragments.create') }}" class="btn btn-primary mb-3">Добавить
                    QR-Фрагмент</a>
                @if (count($fragments))
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th style="width: 30px">#</th>
                                <th>Наименование</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($fragments as $fragment)
                                <tr>
                                    <td>{{ $fragment->id }}</td>
                                    <td>{{ $fragment->title }}</td>
                                    <td>
                                        <a href="{{ route('fragments.edit', ['fragment' => $fragment->id]) }}" class="btn btn-info btn-sm float-left mr-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="http://qrcoder.ru/code/?http://{{ request()->getHttpHost() }}/{{ $fragment->id }}&4&0" download target="_blank" class="btn btn-success btn-sm float-left mr-1">
                                            <i class="fas fa-download"></i>
                                        </a>

                                        <form action="{{ route('fragments.destroy', ['fragment' => $fragment->id]) }}" method="post" class="float-left">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Подтвердите удаление')">
                                                <i
                                                    class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p>Методичек пока нет...</p>
                @endif
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                {{ $fragments->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->

@endsection
