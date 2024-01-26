@extends('back.layouts.page')
@section('pageTitels', isset($pageTitle) ? $pageTitle : 'Create Categorie')
@section('contect')

    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>@yield('pageTitels')</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a href="{{ route('admin.categorie.index') }}">Categorie</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            @yield('pageTitels')
                        </li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <form action="{{ route('admin.categorie.update',['categorie'=>$catogris->id ]) }}" method="POST" enctype="multipart/form-data" id="update">
                @csrf
                @method('PUT')

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>


@endsection
