
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <img src="{{asset('Frontend/assets/img/header/toletx_logo.png')}}" alt="..."   class="w-75 logo">
              <div class="card-header" >Search</div>

                <div class="card-body">
		          <div class="card">
                    <div class="card-header"><b>{{ $searchResults->count() }} results found for "{{ request('query') }}"</b></div>

                    <div class="card-body">

                        @foreach($searchResults->groupByType() as $type => $modelSearchResults)
                            <h2>{{ ucfirst($type) }}</h2>

                            @foreach($modelSearchResults as $searchResult)
                                <ul>
                                    <li><a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a></li>
                                </ul>
                            @endforeach
                        @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
