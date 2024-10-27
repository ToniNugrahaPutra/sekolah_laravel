@extends('layouts.Frontend.app')
@section('title')
    Sekolahku
@endsection

@section('content')

    {{-- Slider --}}
    @section('slider')
        @include('frontend.content.slider')
    @endsection

    {{-- About --}}
    @section('about')
        @include('frontend.content.about')
    @endsection

    {{-- Video --}}
    @section('video')
        @include('frontend.content.video')
    @endsection

    {{-- visimisi --}}
    @section('visimisi')
        @include('frontend.content.visimisidashboard')
    @endsection

    {{-- profilesekolah --}}
    @section('profilesekolah')
        @include('frontend.content.profilesekolahdashboard')
    @endsection

    {{-- Guru --}}
    @section('guru')
        @include('frontend.content.guru')
    @endsection


     {{-- Berita & Event --}}
     @section('beritaEvent')
        @include('frontend.content.beritaEvent')
    @endsection
@endsection
