@extends('back.layouts.page')
@section('pageTitels',isset($pageTitle)?$pageTitle:'ProFile')

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
                    <li class="breadcrumb-item active" aria-current="page">
                        @yield('pageTitels')
                    </li>
                </ol>
            </nav>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
        <div class="pd-20 card-box height-100-p">

            <div class="profile-photo">
                <a href="javascript:;"  onclick="event.preventDefault();document.getElementById('adminProfilePicturefile').click();" class="edit-avatar">
                <i class="fa fa-pencil"></i></a>
                <img src="{{ $admin->picture }}"  class="avatar-photo" alt="" id="adminProfilePicture">
                <input type="file" name="adminProfilePicturefile" id="adminProfilePicturefile" class="d-none"
                style="opacity: 0;">

            </div>


            <h5 class="text-center h5 mb-0" id="adminProfilName">{{ $admin->name }}</h5>
            <p class="text-center text-muted font-14" id="adminProfilEmail">
                {{ $admin->email }}
            </p>

        </div>
    </div>

    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
        <div class="card-box height-100-p overflow-hidden">
            @livewire('admin-profile-taps')

        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    window.addEventListener('updateAdminInfo',function(event){
        $('#adminProfilName').html(event.detail.adminNmae);
        $('#adminProfilEmail').html(event.detail.adminEmail);
    });

    $('input[type="file"][name="adminProfilePicturefile"][id="adminProfilePicturefile"]').ijaboCropTool({
          preview : '#adminProfilePicture',
          setRatio:1,
          allowedExtensions: ['jpg', 'jpeg','png'],
          buttonsText:['CROP','QUIT'],
          buttonsColor:['#30bf7d','#ee5155', -15],
          processUrl:'{{route("admin.change-profile-picture")}}',
          withCSRF:['_token','{{ csrf_token() }}'],
          onSuccess:function(message, element, status){
            Livewire.emit('updateAdminSellerHeaderInfo');
             toastr.success(message);

          },
          onError:function(message, element, status){
            toastr.error(message);
          }
       });
    </script>

@endpush

