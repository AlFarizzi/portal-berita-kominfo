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
                            <div class="trend-top-img">
                                <img src="/asset_reader/assets/img/trending/trending_top.jpg" alt="">
                                <div class="trend-top-cap">
                                    <span>Appetizers</span>
                                    <h2><a href="details.html">Welcome To The Best Model Winner<br> Contest At Look of the year</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                @for ($i = 3; $i < 6; $i++)
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                @if ($berita[$i]['thumbnail'] !== 'default.jpg')
                                                <img src="/storage/{{$berita[$i]['thumbnail']}}" alt="">
                                                @else
                                                <img src="/{{$berita[$i]['thumbnail']}}" alt="">
                                                @endif
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color3">Travels</span>
                                                <h4><a href="details.html"> Welcome To The Best Model Winner Contest</a></h4>
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
                                    @if ($berita[$i]['thumbnail'] !== 'default.jpg')
                                    <img class="img-thumbnail w-75 rounded" src="/storage/{{$berita[$i]['thumbnail']}}" alt="">
                                    @else
                                    <img class="img-thumbnail w-75 rounded" src="/{{$berita[$i]['thumbnail']}}" alt="">
                                    @endif
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