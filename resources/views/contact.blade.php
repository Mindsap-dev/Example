<x-layout>
    <br>
    <x-slot:heading>
        Contact Page
    </x-slot:heading>
    <h1><strong>Hello contact page</strong></h1>

    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/contacts/{{$job['id']}}" class="text-blue-500 hover:underline">
                    {{$job['name']}}: Email {{$job['email']}} : Phone {{$job['phone'] }}: Is Stupid {{$job['is_stupid']}}
            </li>
        @endforeach
    </ul>
</x-layout>
