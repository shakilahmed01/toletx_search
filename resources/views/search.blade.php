@include('frontend.header')
<head>
  <title>ToletX Search</title>
<style>
#p6 {background-color:rgba(255,0,255,0.3);}
</style>
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <!-- <img src="{{asset('Frontend/assets/img/header/toletx_logo.png')}}" alt="..."   class="w-75 logo"> -->
              <div class="card-header" >ToletX Search Results</div>

                <div class="card-body">
		          <div class="card">
                    <div class="card-header"><b>{{ $searchResults->count() }} results found for "{{ request('query') }}"</b></div>

                    <div class="card-body">

                        @foreach($searchResults->groupByType() as $type => $modelSearchResults)
                            <h2>{{ ucfirst($type) }}</h2>
                            <br>

                            @foreach($modelSearchResults as $searchResult)
                                <ul>
                                    <li><a class="test1" id="p6" href="{{ $searchResult->url }}" >{{ $searchResult->title }}</a></li>
                                    <br>
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

  @include('frontend.footer')
