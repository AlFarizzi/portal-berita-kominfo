    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Trending now</strong>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    @for ($i = 0; $i < 6; $i++)
                                        <li class="news-item">{{$berita[$i]['title']}}.</li>
                                    @endfor
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="single-item">
                                @for ($i = 0; $i < 4; $i++)
                                    <div class="trend-top-img">
                                        <picture>
                                            @if ($berita[$i]['thumbnail'] !== 'default.jpg')
                                                <source type="image/jpeg" data-srcset="/storage/{{$berita[$i]['thumbnail']}}">
                                                <img style="border-radius: 5%;" type="image/jpeg" data-src="/storage/{{$berita[$i]['thumbnail']}}"  class="lazyload">
                                            @else
                                                <source type="image/jpeg" data-srcset="/{{$berita[$i]['thumbnail']}}">
                                                <img style="border-radius: 5%;" type="image/jpeg" data-src="/{{$berita[$i]['thumbnail']}}"  class="lazyload">
                                            @endif   
                                        </picture>
                                        <div class="trend-top-cap">
                                            <span>{{$berita[$i]->new->new}}</span>
                                            <h4 class="text-white"><a href="{{route('berita.read',$berita[$i])}}">{{$berita[$i]['title']}}</a></h4>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                @for ($i = 3; $i < 6; $i++)
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <picture>
                                                    @if ($berita[$i]['thumbnail'] !== 'default.jpg')
                                                        <source type="image/jpeg" data-srcset="/storage/{{$berita[$i]['thumbnail']}}">
                                                        <img style="border-radius: 5%;" type="image/jpeg" data-src="/storage/{{$berita[$i]['thumbnail']}}"  class="lazyload">
                                                    @else
                                                        <source type="image/jpeg" data-srcset="/{{$berita[$i]['thumbnail']}}">
                                                        <img style="border-radius: 5%;" type="image/jpeg" data-src="/{{$berita[$i]['thumbnail']}}"  class="lazyload">
                                                    @endif   
                                                </picture>
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color{{$i}}">{{$berita[$i]->new->new}}</span>
                                                <h4><a href="{{route('berita.read',$berita[$i])}}">  {{Str::limit($berita[$i]->title,76,'.')}}  </a></h4>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-md-4">
                        @for ($i = 0; $i < 2; $i++)
                            <div class="trand-right-single d-flex" style="display: block !important">
                                <div class="trand-right-img">
                                    <picture>
                                        @if ($berita[$i]['thumbnail'] !== 'default.jpg')
                                            <source type="image/jpeg" data-srcset="/storage/{{$berita[$i]['thumbnail']}}">
                                            <img style="border-radius: 5%;" type="image/jpeg" data-src="/storage/{{$berita[$i]['thumbnail']}}"  class="img-thumbnail w-75  lazyload">
                                        @else
                                            <source type="image/jpeg" data-srcset="/{{$berita[$i]['thumbnail']}}">
                                            <img style="border-radius: 5%;" type="image/jpeg" data-src="/{{$berita[$i]['thumbnail']}}"  class="img-thumbnail w-75  lazyload">
                                        @endif   
                                    </picture>
                                </div> 
                                <div class="trand-right-cap mt-2">
                                    <span class="color1">{{$berita[$i]->new->new}}</span>
                                    <h4><a href="{{route('berita.read',$berita[$i])}}">{{$berita[$i]['title']}}</a></h4>
                                </div>
                            </div>                     
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->