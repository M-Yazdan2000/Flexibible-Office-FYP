@extends('layouts.header')

<!-- Your existing HTML code here -->

<div class="col-sm-12 section-t8">
    @if($results->count() > 0)
        @foreach($results as $result)
            <div class="search-result">
                <h3>{{ $result->property_name }}</h3>
                <p>{{ $result->location }}</p>
                <!-- Display other relevant information -->
            </div>
        @endforeach
    @else
        <p>No results found for your search query.</p>
    @endif
</div>

@include('layouts.footer')
