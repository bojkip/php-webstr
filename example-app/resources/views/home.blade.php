@extends('layouts.app')

@section('content')

<!--
<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rouded-lg">
        Home
    </div>
</div>
-->


<div>
</h1>
    <h1 class="font-sans text-4xl font-medium text-center  pb-[4.5rem]">Manduco<span class="text-blue-400">Mare</span></h1>
</div>
<div class="grid grid-cols-3 gap-4 place-items-center h-56 ">
  <img src="https://cdn.pixabay.com/photo/2020/08/27/07/31/restaurant-5521372_960_720.jpg" alt="" class="object-cover h-48 w-96 rounded-lg ">
  <img src="https://cdn.pixabay.com/photo/2017/06/04/16/17/prawns-2371440_960_720.jpg" alt="" class="object-cover h-48 w-96 rounded-lg ">
  <img src="https://cdn.pixabay.com/photo/2016/03/05/19/58/appetite-1238569__340.jpg" alt="" class="object-cover h-48 w-96 rounded-lg ">
</div>
<div class=" container mx-auto whitespace-normal">
    <h2 class="font-sans text-2xl font-medium text-center text-blue-400 p-[2.5rem]">Dobrodošli</h2>
    <p class="font-sans text-xl font-normal  text-center p-[0.2rem] whitespace-normal ">Dobrodošli u naš restoran, oaza mira i uživanja u morskoj hrani. Smješten je u srcu grada, uz more, te pruža prekrasan pogled na more i zalaske sunca.</p>
    <p class="font-sans text-xl font-normal  text-center p-[0.2rem] whitespace-normal">U našem restoranu cijenimo svježinu i kvalitetu namirnica, te se trudimo da svaki dan pripremimo nešto novo i ukusno za naše goste.</p>
    <p  class="font-sans text-xl font-normal  text-center p-[0.2rem] whitespace-normal"> Naša široka ponuda morskih jela uključuje ribe, morske plodove i lignje, a svaki dan pripremamo i razne specijalitete.</p>
    <p class="font-sans text-xl font-normal  text-center p-[0.2rem] ">Naš stručno osoblje će vam rado pomoći da odaberete nešto što će vam se svidjeti, te će se potruditi da vaše iskustvo u našem restoranu bude što ugodnije.</p>
    <p class="font-sans text-xl font-normal  text-center p-[0.2rem] ">Uživajte u prekrasnom ambijentu i nezaboravnom pogledu na more dok uživate u nekom od naših izvrsnih jela. Veselimo se vašem dolasku!</p>
</div>
<div class="container mx-auto whitespace-normal">
    <h2 class="font-sans text-2xl font-medium text-center text-blue-400 p-[2.5rem]">Specijaliteti</h2>

    <div class="overflow-x-auto relative pb-[2.5rem]">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Naziv specijaliteta
                </th>
                <th scope="col" class="py-3 px-6">
                    Cijena
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Grilirani jastog
                </th>
                <td class="py-4 px-6">
                    25€
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Tijesto sa škampima
                </th>
                <td class="py-4 px-6">
                    20€
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Rižoto sa lignjama
                </th>
                <td class="py-4 px-6">
                    22€
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="flex justify-center ">
<a href="{{route('menu')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
    Menu
</a>
</div>
<h2 class="font-sans text-2xl font-medium text-center text-blue-400 p-[2.5rem]">Kontaktiraj nas</h2>
<div class="flex justify-around p-[2.5rem]">
    <div class="flex space-x-4">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="w-5 h-5">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
    </svg>
    <h2 class="font-medium">+385915907214</h2>
    </div>
    <div class="flex space-x-4">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
    </svg>
    <h2 class="font-medium">Ulica Sunčana obala, 23000 Zadar, Hrvatska</h2>
    </div>

</div>





@endsection

