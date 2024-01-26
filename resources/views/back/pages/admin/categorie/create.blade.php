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
                            Categorie
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
            {{-- <form action=" {{ rouye('admin.') }}"></form> --}}
            <form action="{{ route('admin.categorie.store') }}" method="POST" enctype="multipart/form-data" id="ss">
                @csrf
                <div class="md-6">

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    @error('name')
                        <div class="d-block text-danger" style="margin-top: 0px; margin-bottom: 15px; ">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="md-6">
                    <div class="form-group">
                        <label>Select Categorie :</label>
                        <select name="parent_id" id="parent_id" class="custom-select form-control">
                            <option value="">Select Categorie</option>
                            @foreach (App\Models\Categorie::tree() as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="md-6">
                    <div class="form-group">
                        <label for=""><b>description</b> </label>
                        <textarea cols="4" rows="4" placeholder="  description  ...." name="description" id="description"
                        class="form-control"> </textarea>

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
                        <input type="text" name="summary" id="summary" class="form-control">
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

                <div class="md-6">
                    <div class="form-group">
                        <label for="">picture</label>
                        <input type="file" name="picture" id="picture" class="form-control">
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
        <div class="col-md-6 col-sm-12">




        </div>
    </div>

    </div>
@endsection

