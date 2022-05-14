@extends('layout.app')
@section("content")
{{-- about section --}}
<div class=" pb-24">
    @include('partials.home._home-section-about')
</div>

{{-- services section --}}
<div class="py-28 bg-blue-50">
    @include('partials.home._home-section-services')
</div>


@endsection
