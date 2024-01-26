@extends('back.layouts.page')
@section('pageTitels',isset($pageTitle)?$pageTitle:'Setting')
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
<div class="pd-20 card-box mb-4 ">
 @livewire('admin-settings')
</div>

@endsection
@push('scripts')
<script>
        $('input[type="file"][name="site_logo"][id="site_logo"]').ijaboViewer([
        preview:'#site_logo_image_preview',
        imageShape: 'rectangular',//set square if is favicon
        allowedExtensions:['png','jpg'],
        onErrorShape:function(message,element){
            alert('message');
        },
        onInvalidType:function(message,element){
            alert('message');
        },
        onSuccess:function(message,element){

        }
        // preview : '#site_logo_image_preview',
        //   setRatio:1,
        //   allowedExtensions: ['jpg', 'jpeg','png'],
        //   buttonsText:['CROP','QUIT'],
        //   buttonsColor:['#30bf7d','#ee5155', -15],
        //   processUrl:'{{route("admin.change-logo")}}',
        //   withCSRF:['_token','{{ csrf_token() }}'],
        //   onSuccess:function(message, element, status){
        //     Livewire.emit('updateAdminSellerHeaderInfo');
        //      toastr.success(message);

        //   },
        //   onError:function(message, element, status){
        //     toastr.error(message);
        //   }

        ]);


        $('#change_site_logo_form').on('submit',function(e){
            e.preventDefault();
            var form =this;
            var formdata =new FormData(form);
            var inputFileVal =$(form)
            .find('input[type="file"][name="site_logo"]').val();

            if(inputFileVal.length > 0){
                $.ajax([
                    url:$(form).attr('action'),
                    method:$(form).attr('method'),
                    data:fotmdata,
                    processData:false,
                    dataType:'json',
                    contentType:false,
                    beforeSend:function(){
                        toastr.remove();
                        $(form).find(span.erorr-text).text('');
                    },
                    success:function(response){
                        if(response.status ==1){
                            toastr.success(response.msg);
                        }else{
                            toastr.erorr(response.msg);
                        }

                    }
                ]);
            }else{
                $(form).find('span.error-text').text('plees');
            }
        });
        ////////////////////////////////////////////////////

        $('input[type="file"][name="site_favicon"][id="site_favicon"]').ijaboViewer([
        preview:'#site_favicon_image_preview',
        imageShape: 'rectangular',//set square if is favicon
        allowedExtensions:['png','jpg'],
        onErrorShape:function(message,element){
            alert('message');
        },
        onInvalidType:function(message,element){
            alert('message');
        },
        onSuccess:function(message,element){

        }


        ]);


        $('#change_site_favicon_form').on('submit',function(e){
            e.preventDefault();
            var form =this;
            var formdata =new FormData(form);
            var inputFileVal =$(form)
            .find('input[type="file"][name="site_favicon"]').val();

            if(inputFileVal.length > 0){
                $.ajax([
                    url:$(form).attr('action'),
                    method:$(form).attr('method'),
                    data:fotmdata,
                    processData:false,
                    dataType:'json',
                    contentType:false,
                    beforeSend:function(){
                        toastr.remove();
                        $(form).find(span.erorr-text).text('');
                    },
                    success:function(response){
                        if(response.status ==1){
                            toastr.success(response.msg);
                        }else{
                            toastr.erorr(response.msg);
                        }

                    }
                ]);
            }else{
                $(form).find('span.error-text').text('plees');
            }
        });

 </script>
@endpush
