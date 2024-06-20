<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>

    <ul>
        @foreach ($jobs as  $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}"><strong>{{ $job['title'] }}</strong></a> is being paid {{ $job['salary']}} a month.</li>
        @endforeach</ul>    
    
</x-layout>