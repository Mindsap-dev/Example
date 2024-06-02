<x-layout>
    <br>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
{{--    <h1><strong>{{$greeting}} Mutha Fucka!! My name is {{$name}}</strong></h1>--}}

@foreach($jobs as $job)
<li><strong>
    {{$job['title']}}: Pays {{$job['salary']}} per year
    </strong></li>
@endforeach

</x-layout>
