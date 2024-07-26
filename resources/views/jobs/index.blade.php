<x-layout>
    <br>
    <x-slot:heading>
        Jobs Listing Page
    </x-slot:heading>
    <div class="space-y-4">
        @foreach($jobs as $job)

            <a href="/jobs/{{$job['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">
                    {{$job->employer->name}}
                </div>
                <div>
                    <strong>{{$job['title']}}</strong>: Pays {{$job['salary']}} per year
                </div>
            </a>
        @endforeach
        <div>
            {{$jobs->links()}}
        </div>
    </div>
</x-layout>



{{--*NOTE ---}}
{{--@foreach($mikes as $mike)--}}

{{--    <a href="/jobs/{{$mike['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg">--}}
{{--        <div class="font-bold text-blue-500 text-sm">--}}
{{--            {{$mike->employer->name}}--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <strong>{{$mike['title']}}</strong>: Pays {{$mike['salary']}} per year--}}
{{--        </div>--}}
{{--    </a>--}}
{{--@endforeach--}}
{{--<div>--}}
{{--{{$mike->links()}}--}}
