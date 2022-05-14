{{-- variables php --}}
@php
    $styleOpenTime = "italics "
@endphp
{{-- end variable php --}}

<div class="flex justify-center space-x-14d container">
    <div class=" text-centers max-w-xl mx-autod text-lg">
        <h2 class="text-blue-900 text-3xl font-black pb-8 uppercase">A propos de nous</h2>
        <p class="">
            L'Ambassade de la République Démocratique du Congo près le Royaume de Belgique, le Royaume des Pays-Bas, le
            Grand Duché de Luxembourg et Mission auprès de l'Union Européenne. Sise 30, rue Marie de Bourgogne,
            1000 Bruxelles (Belgique).
        </p>
    </div>
    <div class="max-w-md shadow-sm bg-gray-100 p-10 mx-auto mt-6 rounded-lg">
        <p class="font-bold text-xl pb-2">
            Heures d'ouverture:
        </p>
        <p class="pb-2">
            Lundi au Vendredi comme suit:
        </p>
        <p>
            <span class="{{ $styleOpenTime }}">Dépôt de documents :</span> 9 H 00 - 12 H 00 <br>
            <span class="{{ $styleOpenTime }}">Retrait de documents :</span> 15 H 00- 16 H 30 <br>
        </p>
        <p class="italics text-red-800 pt-2">
            Lundi-Mercredi-Vendredi, exceptionnellement pour cause de
            Covid-19.
        </p>
    </div>
</div>
