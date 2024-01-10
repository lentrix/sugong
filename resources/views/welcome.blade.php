@extends('page')

@section('content')

{{-- <div class="mechanics">
    <ul>
        <li>Grab this opportunity to become part of Clarin's rich history</li>
        <li>Open to all current residents of Clarin, Bohol</li>
        <li>
            All you have to do is design the logo of the "Sugong Festival" with the
            following requirements:
            <ol class="list-disc ms-8">
                <li>Must be in SVG format</li>
                <li>Having an aspect ratio of 1:1</li>
                <li>Must contain the following visual elements: Sugong, Kaw-it</li>
                <li>Must contain the textual element "Sugong Festival" and "est. 2024"</li>
            </ol>
        </li>
        <li>Only one entry per individual</li>
        <li>
            The winning entry will receive 3,000.00 pesos
        </li>
        <li>Current Number of Entries: {{$entries}}</li>
    </ul>
</div> --}}

<div class="p-10 rounded-lg bg-white max-w-[800px]">
    <h1 class="text-4xl">Congratulations!!!</h1>
    <h2 class="text-4xl" style="text-decoration:underline">Ms. Christine Joy Monterde</h2>
    <p class="text-xl font-bold">of Poblacion Sur, Clarin, Bohol</p>

    <p class="mt-4 text-xl italic">
        for creating the winning piece in the recently concluded
        "Sugong Festival" Logo making contest!!!
    </p>

    <img src="https://sugong.lentrix-dev.com/uploads/inbound2348919199681547968.jpg" alt="">
</div>

@endsection
