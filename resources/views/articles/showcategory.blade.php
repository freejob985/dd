@extends('layouts.app')

@section('content')
<?php Use App\Article; ?>





  
<div class="container-fluid">
    <br>
    <br>
    <div class="row">
      <div class="col-md-9">
        <div class="row">
     <table class="table table-striped">
    
            {{-- @if(count($articles)>0) --}}
    
           @foreach($articles as $article)
              <tr>
              <td ><a href="/magazines/{{$article->magazine_id}}/articles/{{$article->id}}"><img src="/images/{{$article->article_cover}}" style="width:100px;height:70px;">  &nbsp; {{$article->article_title}} </a></td>
                  
              </tr>
         
          
           
            @endforeach
            {{-- @endif --}}
          </table>
        </div>

      </div>
      <div class="col-md-3 d-none d-md-block">
          <h2 class="category-headding ">الرعاة</h2>
          <div class="headding-border"></div>
      @if (count($latestSponsors) > 0)
      @foreach ($latestSponsors as $sponsor)
      <?php $sponsor = App\Sponsor::findOrFail($sponsor['id']); ?>
      <div class="item sponsor-item mb-1">
          <div class="post-wrapper wow fadeIn" data-wow-duration="1s"><!-- image -->
              <div class="post-thumb">
                  <img class="img-responsive" src="/images/{{$sponsor->logo_path}}" alt="">
              </div>
          </div>
      </div>
          
      @endforeach
      @endif


      
  </div>

    </div>

</div>
        <div style="min-height:250px"></div>

@endsection