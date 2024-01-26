@extends('back.layouts.page')
@section('pageTitels',isset($pageTitle)?$pageTitle:'Categorie')
@section('contect')

@push('stayles')
<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('back') }}/src/plugins/datatables/css/dataTables.bootstrap4.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('back') }}/src/plugins/datatables/css/responsive.bootstrap4.min.css"
		/>
@endpush
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
                    <li class="breadcrumb-item active" aria-current="page">
                        @yield('pageTitels')
                    </li>
                </ol>
            </nav>
        </div>

        <div class="col-md-6 col-sm-12 text-right">
            <a href="{{ route("admin.categorie.create") }}" value="submit" class="btn btn-primary " style="margin-left: 80%;">Create</a>

        </div>

    </div>
</div>

<!-- Simple Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Table Simple</h4>
        {{-- <button type="submit" class="btn btn-primary" ></button> --}}
    </div>

    <div class="pb-20">
        <table class="data-table table stripe hover nowrap " id="categorie_datatable">
            <thead>
                <tr>

                    <th class="table-plus datatable-nosort">ID </th>
                    <th>Name</th>
                    <th>parent_id</th>
                    <th>status</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>


                </tr>

            </tbody>
        </table>
    </div>
</div>


{{--<a href="#" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button">
                                dddddddddddd</a>
                                 <div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">
                <h5 class="card-title">catogris name : {{ $catogris->name }}</h5>
            </h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                ×
            </button>
        </div>
        <div class="modal-body">
            <p>  catogris sub : {{ catogris::find($catogris->parent_id)->name }}</p>
            <img src="{{ asset('images/site') }}/{{ $catogris->picture }}" alt="modal" />
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                Close
            </button>

        </div>
    </div>
</div>
</div> --}}
{{-- <td>
    <div class="dropdown">
        <a
            class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
            href="#"
            role="button"
            data-toggle="dropdown"
        >
            <i class="dw dw-more"></i>
        </a>
        <div
            class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
        >
            <a class="dropdown-item" href="#"
                ><i class="dw dw-eye"></i> View</a
            >
            <a class="dropdown-item" href="#"
                ><i class="dw dw-edit2"></i> Edit</a
            >
            <a class="dropdown-item" href="#"
                ><i class="dw dw-delete-3"></i> Delete</a
            >
        </div>
    </div>
</td> --}}


@push('scripts')
<script type="text/javascript">

    $(document).ready(function() {
        $('#categorie_datatable').DataTable({
          processing: true,
          serverSide: true,

          ajax: "{{ route('admin.categorie.index') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'name', name: 'name'},
              {data: 'parent_id', name: 'parent_id'},
              {data: 'status', name: 'status'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
} );



  </script>
		<script src="{{ asset('back') }}/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="{{ asset('back') }}/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="{{ asset('back') }}/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="{{ asset('back') }}/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<!-- buttons for Export datatable -->
		<script src="{{ asset('back') }}/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
		<script src="{{ asset('back') }}/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
		<script src="{{ asset('back') }}/src/plugins/datatables/js/buttons.print.min.js"></script>
		<script src="{{ asset('back') }}/src/plugins/datatables/js/buttons.html5.min.js"></script>
		<script src="{{ asset('back') }}/src/plugins/datatables/js/buttons.flash.min.js"></script>
		<script src="{{ asset('back') }}/src/plugins/datatables/js/pdfmake.min.js"></script>
		<script src="{{ asset('back') }}/src/plugins/datatables/js/vfs_fonts.js"></script>
		<!-- Datatable Setting js -->
		<script src="{{ asset('back') }}/vendors/scripts/datatable-setting.js"></script>
        @endpush

@endsection
