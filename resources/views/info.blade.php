
@extends('layouts.app')

@section('content')

<style>

body {
	background-image: url("/images/welcome1.jpg");
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

</style>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script>

<div class="container">
      <div class="section-title text-center">

        <h1 class="text-white font-weight-bold">{{__('lang.Latest Posts')}}</h1>
        <p class="separator text-white font-weight-bold">{{__('lang.Tips to Avoid Online Shopping Fraud & What to Do If You Are a Victim')}}</p>
				<div class="fb-share-button" data-href="https://iscam.ala.my/info" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fiscam.ala.my%2Finfo&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>

      </div>
    </div>
    <br><br>

    <div class="container">
      <div class="row">

				<div class="col-md-6 col-lg-4">
					<div class="block-blog text-left text-white font-weight-bold">
						<a href="/Menyamar-Sebagai-Kenalan"><img src={{url('images/menyamar.jpg')}} alt="img" width="350" height="200"></a>
						<div class="content-blog">
							<h4><a href="/Menyamar-Sebagai-Kenalan">{{__('lang.Menyamar Sebagai Kenalan')}}</a></h4>
							<span>25, Oct 2019</span>
							<a class="pull-right readmore" href="/Menyamar-Sebagai-Kenalan">{{__('lang.read more')}}</a>
							<br><br><br>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="block-blog text-left text-white font-weight-bold">
						<a href="/sindiket-kad-atm"><img src={{url('images/atm.jpg')}} alt="img" width="350" height="200"></a>
						<div class="content-blog">
							<h4><a href="/sindiket-kad-atm">{{__('lang.Sindiket Kad ATM')}}</a></h4>
							<span>20, Oct 2019</span>
							<a class="pull-right readmore" href="/sindiket-kad-atm">{{__('lang.read more')}}</a>

						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="block-blog text-left text-white font-weight-bold">
						<a href="/Phone-Scam"><img src={{url('images/phonescam.jpg')}} alt="img" width="350" height="200"></a>
						<div class="content-blog">
							<h4><a href="/Phone-Scam">{{__('lang.Penipuan Dalam Talian')}}</a></h4>
							<span>15, Oct 2019</span>
							<a class="pull-right readmore" href="/Phone-Scam">{{__('lang.read more')}}</a>

						</div>
					</div>
				</div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left text-white font-weight-bold">
            <a href="/Sindiket-Minta-Nombor-TAC-Bank"><img src={{url('images/tacc.jpg')}} alt="img" width="350" height="200"></a>
            <div class="content-blog">
              <h4><a href="/Sindiket-Minta-Nombor-TAC-Bank">{{__('lang.Sindiket Minta Nombor TAC Bank')}}</a></h4>
              <span>10, Oct 2019</span>
              <a class="pull-right readmore" href="/Sindiket-Minta-Nombor-TAC-Bank">{{__('lang.read more')}}</a>
								<br><br><br>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left text-white font-weight-bold">
            <a href="/Sindiket-Pinjaman-Tidak-Wujud"><img src={{url('images/loan.jpg')}} alt="img" width="350" height="200"></a>
            <div class="content-blog">
              <h4><a href="/Sindiket-Pinjaman-Tidak-Wujud">{{__('lang.Sindiket Pinjaman Tidak Wujud')}}</a></h4>
              <span>05, Oct 2019</span>
              <a class="pull-right readmore" href="/Sindiket-Pinjaman-Tidak-Wujud">{{__('lang.read more')}}</a>

            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left text-white font-weight-bold">
            <a href="/Tipu-SMS"><img src={{url('images/nestle.jpg')}} alt="img" width="350" height="200"></a>
            <div class="content-blog">
              <h4><a href="/Tipu-SMS">{{__('lang.Tipu SMS Hadiah NESTLE Dari CELCOM')}}</a></h4>
              <span>30, Sept 2019</span>
              <a class="pull-right readmore" href="/Tipu-SMS	">{{__('lang.read more')}}</a>

            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left text-white font-weight-bold">
            <a href="/Love-Scam"><img src={{url('images/scam8.jpg')}} alt="img" width="350" height="200"></a>
            <div class="content-blog">
              <h4><a href="/Love-Scam">{{__('lang.Modus Operandi- Love SCAM')}}</a></h4>
              <span>25, Sept 2019</span>
              <a class="pull-right readmore" href="/Love-Scam">{{__('lang.read more')}}</a>

							<br><br><br>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left text-white font-weight-bold">
            <a href="/Wang-Palsu"><img src={{url('images/fake.jpg')}} alt="img" width="350" height="200"></a>
            <div class="content-blog">
              <h4><a href="/Wang-Palsu">{{__('lang.Penipuan Menggunakan Wang Palsu')}}</a></h4>
              <span>20, Sept 2019</span>
              <a class="pull-right readmore" href="/Wang-Palsu">{{__('lang.read more')}}</a>

            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left text-white font-weight-bold">
          <a href="/Keldai-Akaun"><img src={{url('images/keldai.jpg')}} alt="img" width="350" height="200"></a>
            <div class="content-blog">
              <h4><a href="/Keldai-Akaun">{{__('lang.Bahaya Keldai Akaun')}}</a></h4>
              <span>15, Sept 2019</span>
              <a class="pull-right readmore" href="/Keldai-Akaun">{{__('lang.read more')}}</a>

            </div>
          </div>
        </div










    </div>
@endsection
