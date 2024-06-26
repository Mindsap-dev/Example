<x-layout>
    <br>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{$job['title']}}</h2>
    <p>
        This job pays {{$job['Salary']}} per year.
    </p>
    <p class="mt-6">
        <x-button href="">Edit Job</x-button>
    </p>
</x-layout>
