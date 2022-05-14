{{-- variables php --}}
@php
    $styleOpenTime = "italics "
@endphp
{{-- end variable php --}}

<div class="container">
    <h2 class="text-blue-900 text-3xl font-black pb-8 uppercase">A propos de nous</h2>
    <div class=" grid grid-cols-4 gap-8 ">
        @include('partials.cards._cardHome')
    </div>
</div>
