@extends('layouts.app')

@section('content')


<h1 class="font-sans text-4xl font-medium text-center  pb-[4.5rem]">Me<span class="text-blue-400">nu</span></h1>

<div class="overflow-x-auto relative container mx-auto whitespace-normal pb-[4rem]">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Naziv jela
                </th>
                <th scope="col" class="py-3 px-6">
                    Kategorija
                </th>
                <th scope="col" class="py-3 px-6">
                    Cijena
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Morska riba s povrćem i rižom
                </th>
                <td class="py-4 px-6  text-blue-400">
                    Glavno jelo
                </td>
                <td class="py-4 px-6">
                    15€
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Pljeskavica s ražnja i krumpirima
                </th>
                <td class="py-4 px-6 text-blue-400">
                    Glavno jelo
                </td>
                <td class="py-4 px-6">
                    10€
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Piletina s roštilja i povrćem
                </th>
                <td class="py-4 px-6 text-blue-400">
                    Glavno jelo
                </td>
                <td class="py-4 px-6">
                    12€
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Riblji file s limunom i maslinama
                </th>
                <td class="py-4 px-6 text-blue-400">
                    Glavno jelo
                </td>
                <td class="py-4 px-6">
                    18€
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Tjestenina s morskim plodovima
                </th>
                <td class="py-4 px-6 text-blue-400">
                    Glavno jelo
                </td>
                <td class="py-4 px-6">
                    14€
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Juha od kamena i morskih plodova
                </th>
                <td class="py-4 px-6 text-blue-400">
                    Predjelo
                </td>
                <td class="py-4 px-6">
                    7€
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Salata od morskih plodova i maslinama
                </th>
                <td class="py-4 px-6 text-blue-400">
                    Predjelo
                </td>
                <td class="py-4 px-6">
                    8€
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Sladoled od ribe
                </th>
                <td class="py-4 px-6 text-blue-400">
                    Desert
                </td>
                <td class="py-4 px-6">
                    5€
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Sushi s morskim plodovima
                </th>
                <td class="py-4 px-6 text-blue-400">
                    Glavno jelo
                </td>
                <td class="py-4 px-6">
                    16€
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Morski plodovi na žaru s povrćem
                </th>
                <td class="py-4 px-6 text-blue-400">
                    Glavno jelo
                </td>
                <td class="py-4 px-6">
                    20€
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Morska hrana na špagi
                </th>
                <td class="py-4 px-6 text-blue-400">
                    Glavno jelo
                </td>
                <td class="py-4 px-6">
                    18€
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Paella s morskim plodovima i rižom
                </th>
                <td class="py-4 px-6 text-blue-400">
                    Glavno jelo
                </td>
                <td class="py-4 px-6">
                    20€
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Voda (obična ili mineralna)
                </th>
                <td class="py-4 px-6 text-blue-400">
                Bezalkoholno piće
                </td>
                <td class="py-4 px-6">
                2
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Soka od voća
                </th>
                <td class="py-4 px-6 text-blue-400">
                Bezalkoholno piće
                </td>
                <td class="py-4 px-6">
                2.5€ 
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Bezalkoholna piva
                </th>
                <td class="py-4 px-6 text-blue-400">
                Bezalkoholno piće
                </td>
                <td class="py-4 px-6">
                    2.5€
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Kava
                </th>
                <td class="py-4 px-6 text-blue-400">
                Bezalkoholno piće
                </td>
                <td class="py-4 px-6">
                2€
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Čaj
                </th>
                <td class="py-4 px-6 text-blue-400">
                Bezalkoholno piće
                </td>
                <td class="py-4 px-6">
                2€ 
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Kombucha
                </th>
                <td class="py-4 px-6 text-blue-400">
                Bezalkoholno piće
                </td>
                <td class="py-4 px-6">
                 3.5€
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Nektar od voća
                </th>
                <td class="py-4 px-6 text-blue-400">
                Bezalkoholno piće
                </td>
                <td class="py-4 px-6">
                    2€
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Piva
                </th>
                <td class="py-4 px-6 text-blue-400">
                Alkoholno piće
                </td>
                <td class="py-4 px-6">
                3€
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Vina
                </th>
                <td class="py-4 px-6 text-blue-400">
                Alkoholno piće
                </td>
                <td class="py-4 px-6">
                    4€ 
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Šampanjac
                </th>
                <td class="py-4 px-6 text-blue-400">
                Alkoholno piće
                </td>
                <td class="py-4 px-6">
                    8€ 
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Kokteli
                </th>
                <td class="py-4 px-6 text-blue-400">
                Alkoholno piće
                </td>
                <td class="py-4 px-6">
                 5€
                </td>
            </tr>
        </tbody>
    </table>
</div>

</div>

@endsection

