{{-- style for firstletter --}}
<?php $styled="text-orange-500 font-light";?>
{{-- end of style firstletter --}}

<div class="h-screen bg-cover bg-fixed bg-center bg-no-repeat pt-[30vh]d"
    style="background-image: url('{{ asset('img/fatshi.jpeg') }}')">
    {{-- /* overlay div */ --}}
    <div class="absolute left-0 right-0 top-0 bottom-0 opacity-80 bg-gradient-to-r from-[#0008ff] to-[#ffba42]"></div>
    {{-- /* paragraph */ --}}
    <div class="container relative  flex justify-center items-center flex-col text-white h-screen">
        <p class="text-8xl font-black">
            Ambassade R.D.C
        </p>
        <p class="text-4xl pt-6 font-bold text-blue-200 "><span class={{ $styled }}>J</span>ustice - <span
                class={{ $styled }}>P</span>aix -
            <span class={{ $styled }}>T</span>ravail</p>
    </div>
</div>
