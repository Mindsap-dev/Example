<x-layout>
    <br>
    <x-slot:heading>
        Contact info
    </x-slot:heading>
<h2 class="font-bold text-lg">{{$job['name']}}</h2>
    <p>
        has an email address, {{$job['email']}} , and a phone number {{$job['phone']}} ,  and is or is not stupid = {{$job['is_stupid']}}
    </p>
</x-layout>

