<div class="visimisi-area">
    <div class="container">
        @if ($visimisi)
            <div class="about-page1-inner" style="margin-top: 5%">
                <h2 class="title-default-left">VISI & MISI</h2>
                <div class="row">
                    <div class="about-page-content-holder">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="content-box">
                                <h3>VISI</h3>
                                <p>{{$visimisi->visi}}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="content-box">
                                <h3>MISI</h3>
                                <p>{{$visimisi->misi}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="about-page-img-holder">
                        <img src="{{asset('storage/images/visimisi/' .$visimisi->image)}}" class="img-responsive" alt="visimisi">
                    </div>
                </div>
            </div>
        @else
            <h2 class="title-default-left">Visi & Misi</h2>
        @endif
    </div>
</div>
