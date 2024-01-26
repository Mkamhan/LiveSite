@if(Session::has('success'))
<div class="alert alert-success alert-blok" role="alert">
  <button type="button" class="close" data-dismiss="alert"> x</button>
  {{-- <strong>{{$request->session()->get('message') }}</strong> --}}
  <strong> Success</strong>
</div>

@endif
@if($meassage =Session::get('error'))
<div class="alert alert-danger alert-blok" role="alert">
  <button type="button" class="close" data-dismiss="alert"> x</button>
  {{-- <strong>{{ $message }}</strong> --}}
  <strong> Error</strong>
</div>
@endif
@if($meassage =Session::get('warning'))
<div class="alert alert-warning alert-blok" role="alert">
  <button type="button" class="close" data-dismiss="alert"> x</button>
  <strong>{{ $message }}</strong>
</div>
@endif
@if($meassage =Session::get('info'))
<div class="alert alert-info alert-blok" role="alert">
  <button type="button" class="close" data-dismiss="alert"> x</button>
  <strong>{{ $message }}</strong>
</div>
@endif


