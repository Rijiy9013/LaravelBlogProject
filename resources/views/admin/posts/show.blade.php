@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0 mr-2">{{ $post->title }}</h1>
                    <a href="{{ route('post.edit', $post->id) }}" class="text-success"><i class="fas fa-pen"></i></a>
                    <form action="{{ route('post.delete', $post->id) }}"
                          method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent">

                            <i class="fas fa-trash text-danger" role="button"></i>
                        </button>
                    </form>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('main.index')}}">Домой</a></li>
                        <li class="breadcrumb-item active">Блог v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div>
                <div class="col-10">
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $post->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Название</td>
                                        <td>{{ $post->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Содержимое</td>
                                        <td><textarea id="summernote" name="content">{{ $post->content }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Фото превью</td>
                                        <td><img src="{{ Storage::url($post->preview_image) }}" alt="$post->preview_image" class="w-50"></td>
                                    </tr>
                                    <tr>
                                        <td>Фото основное</td>
                                        <td><img src="{{ Storage::url($post->main_image) }}" alt="$post->main_image" class="w-50"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
            <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
