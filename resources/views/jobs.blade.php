<x-layout>
    <br>
    <x-slot:heading>
        Jobs Listing Page
    </x-slot:heading>
    <ul>
    @foreach($jobs as $job)
        <li>
                <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
                {{$job['title']}}: Pays {{$job['salary']}} per year
            </li>
    @endforeach
    </ul>
</x-layout>

