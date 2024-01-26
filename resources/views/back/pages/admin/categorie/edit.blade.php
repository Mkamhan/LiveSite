@extends('back.layouts.page')
@section('pageTitels', isset($pageTitle) ? $pageTitle : 'Edit Categorie')
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
                            @yield('pageTitels') : {{ $catogris->name  }}
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
                <div class="md-4">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" value="{{ $catogris->name }}" name="name" id="name"
                            class="form-control">
                    </div>
                    @error('name')
                        <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="md-4">
                    <div class="form-group">
                        <label>Select Categorie : {{ $catogris->parent_id }}</label>
                        <select name="parent_id" id="parent_id" class="custom-select form-control">
                            <option value="">Select Categorie</option>
                            @foreach (App\Models\Categorie::treeAll() as $categorie)
                                @if ($catogris->parent_id == $categorie->id)
                                    <option value="{{ $categorie->id }}" selected>{{ $categorie->name }}</option>
                                @else
                                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="md-6">
                    <div class="form-group">
                        <label for=""><b>description</b> </label>
                        <textarea style="text-align: right" cols="4" rows="4"  placeholder="  description  ...." name="description" id="description"
                        class="form-control" required autofocus > {{{ old('description',$categorie->description)}}}
                    </textarea>

                        @error("description")
                                 <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                                     {{ $message }}
                                </div>
                            @enderror
                    </div>
                </div>
                <div class="md-6">

                    <div class="form-group">
                        <label for="">summary</label>
                        <textarea style="text-align: right" cols="4" rows="4"  placeholder="  summary  ...." name="summary"
                         id="summary"
                        class="form-control" required autofocus > {{{ old('summary',$categorie->summary)}}}
                    </textarea>
                    </div>
                    @error('summary')
                        <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Select status :</label>
                        <select  name="status" id="status" class="custom-select form-control">
                            <option value="active">active</option>
                            <option value="inactive">inactive</option>
                        </select>
                        @error("status")
                        <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                            {{ $message }}
                       </div>
                   @enderror
                    </div>
                </div>
                <div class="md-4">
                    <div class="form-group">
                        <label for="">picture</label>
                        <img wire:ignore src="/images/site/{{ $catogris->picture }}" class="img-thumbnail"
                            data-ijabo-default-img="/images/site/{{ $catogris->picture }}">

                        <input type="file" name="picture" id="picture" class="form-control">
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>


@endsection
