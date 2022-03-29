@extends('layouts.app')

@section('content')






  

        <div class="container-fluid">
                <br>
                <br>
                <div class="row">

                    <div class="col-md-9">
                            <div class="row">
                                    <div class="col-sm-12">
                                        <h1 class="category-headding">مواقع تخصك :</h1>
                                        <div class="headding-border"></div>
                                    </div>
                            
                                </div>
                                <div class="row">
                                    @if(count($sites) > 0)
                                    @foreach ($sites as $site)                  
                                    <div class="col-md-3">
                                        <div class="row space-16">&nbsp;</div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="thumbnail">
                                                    <div class="caption text-center" >
                                                        <div class="position-relative">
                                                            <img src="/images/{{$site->logo_path}}" style="width:176px; height:200px;">
                                                        </div>
                                                       <p> </p>
                                                    </div>
                                                    <div class="caption card-footer text-center">
                                                        <ul class="list-inline">
                                                        <li><i class="glyphicon glyphicon-user light-red lighter bigger-120"></i>&nbsp; <a href="http://{{$site->link}}"> {{$site->title}} </a> </li>
                                                                <li></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">&nbsp;</div>
                                    </div>
                                    @endforeach
                                    @endif
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