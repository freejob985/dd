@if ($article['optradio'] == '1')
    @php
        $img = info_img($article['user_id']);

        $articles = DB::table('articles')
            ->where('user_id', $article['user_id'])
            ->count();
    @endphp
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet"
        id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">
        <div class="row">
            <div class="span4 well">
                <div class="row">

                    <div class="span1"><a href="#" class="thumbnail"><img
                                src="/images/user/{{ $img }}" alt=""></a></div>
                    <div class="span3">

                        <p><strong>
                                @php
                                    info_user($article['user_id']);
                                @endphp
                            </strong></p>
                        <span class=" badge badge-info">عدد المقالات : {{ $articles }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
