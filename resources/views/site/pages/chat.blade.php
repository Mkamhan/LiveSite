@include('site.layouts.header')


<!--==============================
=            Investors           =
===============================-->
<style>
    .section {
        padding: 5px 0;
    }

    .section-title {
        text-align: center;
        margin-bottom: 50px;
    }

    .block {
        background-color: #02020208;
        padding-bottom: 13px;
        border-bottom-right-radius: 12px;
        border-bottom-left-radius: 12px;
    }

    ul.social-links li a i {

        color: #f5f4f4;
    }
</style>
<section class="section investors">
    <div class="container">
        <div class="row">
            <!-- #region -->
            <div class="col-12">
                <div class="section-title" style="background: url({{ asset('images/site') }}/2.jpg)
                 ">
                    <h2 style="color: #fff;">شحن وتسديد الاشتراكات التطبيقات والمواقع بانواعها.</h2>
                    <p style="color: #fff;">شحن وتسديد الاشتراكات التطبيقات والمواقع بانواعها.شحن وتسديد
                        الاشتراكات التطبيقات والمواقع بانواعها.شحن وتسديد الاشتراكات التطبيقات والمواقع بانواعها. </p>
                </div>
            </div>



        </div>
    </div>
</section>


{{-- ===============================--> --}}
<section class="section investors">
    <div class="container">
        <div class="row">

            @foreach ($chates as $chat)
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="block text-center">
                    <!-- Investor Image -->
                    <div class="image shadow hover-zoom">
                        <img class="img-fluid" src="{{ asset('images/site') }}/{{ $chat->picture }}" alt="investor">
                    </div>
                    <h3> {{ $chat->name }}</h3>
                    <!--  -->
                    {{-- <p> {{ $chat->name }} </p> --}}
                </div>
            </div>
            @endforeach


        </div>
    </div>

</section>















@include('site.layouts.footer')
