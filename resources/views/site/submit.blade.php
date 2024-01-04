@extends('page')

@section('content')

<div class="bg-red-200 max-w-[400px] p-4 rounded-lg shadow-lg">
    <h2 class="text-xl font-bold">Contest Entry Form</h2>
    <div class="text-sm italic">* All fields are required.</div>
    @include('flash')
    <form action="{{url('/submit')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="my-3">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" class="block w-full p-2 rounded">
        </div>
        <div class="my-3">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" class="block w-full p-2 rounded">
        </div>
        <div class="my-3">
            <label for="address">Address</label>
            <textarea name="address" id="address" rows="3" class="block w-full rounded p-2"></textarea>
        </div>
        <div class="my-3">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="block w-full p-2 rounded">
        </div>
        <div class="my-3">
            <label for="description">Short Description (max 255 characters)</label>
            <textarea name="description" id="description" maxlength="255" rows="3" class="block w-full rounded p-2"></textarea>
        </div>
        <hr>
        <div class="my-3">
            <label for="file">Upload Entry File</label>
            <input type="file" name="file" class="block" accept="image/svg+xml">
        </div>
        <hr>
        <div class="mt-3">
            By clicking on the submit button, I agree to the <a href="{{url('/terms')}}" class="text-green-800" target="_blank">Terms and Conditions</a> of this contest.
        </div>
        <button type="submit" class="bg-green-700 text-white hover:bg-green-600 duration-300 px-8 py-2 rounded-lg shadow mt-3 shadow-lg font-bold">Submit</button>
    </form>
</div>

@endsection
