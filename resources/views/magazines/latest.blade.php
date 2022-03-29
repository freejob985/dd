@extends('layouts.app')

@section('content')






  

        <div class="container-fluid">
                <br>
                <br>
                <div class="row">
                    <div class="col-md-9">

                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="category-headding">كلمة العدد :</h1>
                                <div class="headding-border"></div>
                            </div>
                    
                        </div>
                        <div class="row">
                                         
                            <div class="col-md-6">
                                <div class="row space-16">&nbsp;</div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumbnail">
                                            <div class="caption text-center" >
                                                <div class="position-relative">
                                                    {{-- <img src="/images/{{$magazine->img_path}}" style="width:176px;height:235px;"> --}}
                                                </div>
                                            <p><i class="glyphicon glyphicon-user light-red lighter bigger-120" ></i> اللاصدار الحالى: <span style=" font-size: larger;font-weight: bolder;">{{$magazine->title}} </span></p>
                                            </div>
                                            <div >
                                             <ul>
                                                 <?php foreach($articles as $article){
                                                      foreach($article->category()->get() as $category)
                                                      {
                                                          $category_array[]=$category->category_name  ;
                                                      }
        
                                                 }
                                           

                                              ?>
        
                                          
                                             </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">&nbsp;</div>
                            </div>
                     
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