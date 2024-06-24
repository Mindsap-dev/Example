<x-layout>
    <br>
    <x-slot:heading>
        Contact Page
    </x-slot:heading>
    <h1><strong>Contacts</strong></h1>

    <div>
        @foreach($jobs as $job)
            <div>
                <a href="/contacts/{{$job['id']}}" class="block px-6 py-3 border border-gray-200 rounded-lg">
                  <strong>{{$job['name']}}</strong>: Email {{$job['email']}} : Phone {{$job['phone'] }}: Is Stupid {{$job['is_stupid']}}
                </a>
            </div>
        @endforeach
    </div>
    {{$jobs->links()}}
</x-layout>



