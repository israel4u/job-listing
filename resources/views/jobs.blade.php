<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as  $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="text-blue-500 font-bold">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title'] }}</strong> Pays {{ $job['salary']}} per year.
                </div>
            </a>
        @endforeach    
    </div>
</x-layout>