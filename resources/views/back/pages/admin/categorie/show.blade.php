@extends('back.layouts.page')
@section('pageTitels', isset($pageTitle) ? $pageTitle : 'Show Categorie')
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
                            @yield('pageTitels') : {{ $catogris->name }}
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <a href="/admin/categorie/{{ $catogris->id }}/edit" value="submit" class="btn btn-primary "
                    style="margin-left: 80%;">Edit</a>

            </div>
        </div>
    </div>


    {{-- <div class="card-columns mb-12">
        <div class="card card-box">
            <img class="card-img-top" src="{{ asset('images/site') }}/{{ $catogris->picture }}"
                alt="Card image cap"style=" width: 300px;">
            <div class="card-body">
                <h3 class="card-title">Name: {{ $catogris->name }}</h3>
                <p class="card-text">
                    <b> Catogris Sub :</b> <b>{{ App\Models\Categorie::find($catogris->parent_id)->name }}</b>
                </p>

                <label class="form-controll">Description :</label>
                <p class="card-text">
                    <b class="text-muted">{{ $catogris->description }}</b>
                </p>
                <label class="form-controll">Summary :</label>
                <p class="card-text">
                    <b class="text-muted"> {{ $catogris->summary }}</b>
                </p>

                <p class="card-text">
                    <b class="form-controll">Status :</b> <b class="text-muted"> {{ $catogris->status }}</b>
                </p>
                <p class="card-text">
                    <small class="text-muted">Last updated {{ $catogris->updated_at }}</small>
                </p>
            </div>
        </div> --}}



        <div class="blog-wrap" style="direction: rtl;     padding-top: 16px;">
            <div class="container pd-0">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="blog-detail card-box overflow-hidden mb-30"
                            style="text-align: center;     padding-top: 5px;">
                            <h2 class="mb-10">
                                {{ $catogris->name }}
                            </h2>

                            <div class="blog-img">
                                <img src="{{ asset('images/site') }}/{{ $catogris->picture }}" alt="" />
                            </div>
                            <div class="blog-caption" style="direction: rtl;">
                                {{-- <h2 class="mb-10">
                                    {{ $categores->name }}
                                </h2> --}}
                                <b> {{ $catogris->description }}</p>

                                <h5 class="mb-10">

                                </h5>
                                <b> {{ $catogris->summary }}</b>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    @endsection
