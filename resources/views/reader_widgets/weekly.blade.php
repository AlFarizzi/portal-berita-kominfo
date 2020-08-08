    <!--   Weekly-News start -->
    <div class="weekly-news-area pt-50">
        <div class="container">
           <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Weekly Top News</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                            @foreach ($informasi as $inf)
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                        @if ($inf->thumbnail !== 'default.jpg')
                                        <img src="/storage/{{$inf->thumbnail}}" alt="">
                                        @else
                                        <img src="/{{$inf->thumbnail}}" alt="">
                                        @endif
                                    </div>
                                    <div class="weekly-caption">
                                        <span class="color1">{{$inf->info->information}}</span>
                                        <h4><a href="{{route('info.read',$inf)}}">
                                            {{$inf->title}}    
                                        </a></h4>
                                    </div>
                                </div>  
                            @endforeach
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>           
    <!-- End Weekly-News -->