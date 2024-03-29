@extends('page')


@section('content')

<div class="w-full rounded-lg bg-white shadow-lg p-10">
    <h2 class="text-2xl font-bold">Gallery of Entries</h2>
    <div class="mt-4 gallery">
        @foreach($entries as $entry)
            <div class="border border-gray-300">
                <img src="{{asset('uploads/' . $entry->file)}}" alt="Entry of {{$entry->fname}}" class="entry">
                <div class="bg-green-800 text-white p-4">
                    {{$entry->lname}}, {{$entry->fname}} <br>
                    <span class="italic text-sm">{{$entry->address}}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
