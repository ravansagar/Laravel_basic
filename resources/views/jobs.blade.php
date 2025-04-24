<x-layout>
    <h1>Job Listing</h1>
    <ul>
        @foreach ($job as $j)
        <li><a href="job/{{$j['id']}}" class="text-blue hover:underline"> Job Title : {{ $j['position']}}, Salary : {{ $j['salary'] }} </a></li>
        @endforeach
    </ul>
    
</x-layout>