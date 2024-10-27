    <div class="profile-area">
        <div class="container">
            @if ($profile)
            <h2 class="title-default-left">Profile Sekolah</h2>
                <div style="margin-top: 5%; margin-bottom:3%">
                    <img src="{{asset('storage/images/profileSekolah/' .$profile->image)}}" class="img-responsive" style="max-height:500px; width:100%; object-fit:cover">
                </div>
                <h2 class="title-center">{{$profile->title}}</h2>
                <p class="sub-title-full-width">{{$profile->content}}</p>
            @else
               <h2 class="title-default-left">Profile Sekolah</h2>
            @endif
        </div>
    </div>

