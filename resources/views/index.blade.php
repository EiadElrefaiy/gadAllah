@extends('layouts.app')

@section('content')

<ul class="social social-rounded social-rounded-fixed social-rounded-dark">
          <li><a href="#"><i class="socicon-twitter"></i></a></li>
          <li><a href="#"><i class="socicon-facebook"></i></a></li>
          <li><a href="#"><i class="socicon-googleplus"></i></a></li>
        </ul>


        
        <div class="establised">establised 1991</div>
        <div class="copyright-fixed">&copy; Gadallah 2019.&nbsp; by 7elmak</div>
        <div class="home-piling a-pagepiling full-height">
          <div class="section pp-scrollable slide slide1 slide-dark">
            <div class="slide-container">
              <div class="video-container a-video" data-vimeo-width="640" data-vimeo-height="360">
                <iframe src="https://player.vimeo.com/video/107714608?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1&amp;autopause=0&amp;muted=1&amp;background=1" allowfullscreen></iframe>
              </div>
              <div class="slide-bg">
                <div class="inside"></div>
              </div>
              <div class="slide-video-container slide-container">
                <div class="container">
                  <div class="row slide-content">
                    <div class="col-sm-7">
                      <h1 class="slide-title font-libre"><span class="text-primary">{!! $data['sliders'][0]->label_eng !!}</span></h1>
                      <div class="slide-body">
                        <h3 class="slide-title-sub">{{$data['sliders'][0]->title_eng}}</h3>
                        <div class="slide-descr">{!! $data['sliders'][0]->description_eng !!}</div>
                      </div>
                    </div>
                  </div>
                  <button class="btn-play a-video-play"><i class="icon ion-ios-play"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="section pp-scrollable slide slide2">
            <div class="slide-container">
              <div class="slide-bg slide-bg-circle">
                <div class="inside"></div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="solution-num text-texture">25</div>
                    <div class="solution-num-title">Years<br /> Experience</div>
                  </div>
                  <div class="col-lg-6">
                    <h2 class="slide-title font-libre">Best Products<br /> for Kitchens &amp;<br /> Restaurants </h2>
                    <div class="accordion solution-collapse" id="solutions">
                      <div class="solution-collapse-item">
                        <div class="solution-collapse-item-title font-libre" id="headingOne">
                          <a class="" href="#" data-toggle="collapse" data-target="#solution1" aria-expanded="true" aria-controls="solution1">
                          Service #1
                          <i class="icon-plus"></i>
                          </a>
                        </div>
                        <div id="solution1" class="collapse show" aria-labelledby="headingOne" data-parent="#solutions">
                          <div class="card-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. for more.... <a href="service.html">See more</a>
                          </div>
                        </div>
                      </div>
                      <div class="solution-collapse-item">
                        <div class="solution-collapse-item-title font-libre" id="headingTwo">
                          <a class=" collapsed" href="#" data-toggle="collapse" data-target="#solution2" aria-expanded="false" aria-controls="solution2">
                          Service #2
                          <i class="icon-plus"></i>
                          </a>
                        </div>
                        <div id="solution2" class="collapse" aria-labelledby="headingTwo" data-parent="#solutions">
                          <div class="card-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. for more.... <a href="service.html">See more</a>
                          </div>
                        </div>
                      </div>
                      <div class="solution-collapse-item">
                        <div class="solution-collapse-item-title font-libre" id="headingThree">
                          <a class=" collapsed" href="#" data-toggle="collapse" data-target="#solution3" aria-expanded="false" aria-controls="solution3">
                          Service #3
                          <i class="icon-plus"></i>
                          </a>
                        </div>
                        <div id="solution3" class="collapse" aria-labelledby="headingThree" data-parent="#solutions">
                          <div class="card-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. for more.... <a href="service.html">See more</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="section pp-scrollable slide slide3 slide-dark">
            <div class="slide-container">
              <div class="slide-bg-list">
                <div class="slide-bg active">
                  <div class="inside" style="background-image: url(img/piling-project1.jpg);"></div>
                </div>
                <div class="slide-bg">
                  <div class="inside" style="background-image: url(img/piling-project2.jpg);"></div>
                </div>
                <div class="slide-bg">
                  <div class="inside" style="background-image: url(img/piling-project3.jpg);"></div>
                </div>
                <div class="slide-bg">
                  <div class="inside" style="background-image: url(img/piling-project4.jpg);"></div>
                </div>
                <div class="slide-bg">
                  <div class="inside" style="background-image: url(img/piling-project5.jpg);"></div>
                </div>
              </div>
              <div class="container">
                <div class="piling-project-list-title">Main Categories</div>
                <div class="row piling-project-list">
                  <div class="col-xl-4 col-6 piling-project-item">
                    <h3 class="piling-project-title font-libre"><a href="single-project-mobile-app.html" class="a-change-bg">First<br /> Category</a></h3>
                    <div class="piling-project-detail">Kitchens / Restaurants</div>
                  </div>
                  <div class="col-xl-4 col-6 piling-project-item">
                    <h3 class="piling-project-title font-libre"><a href="single-project-branding.html" class="a-change-bg">Second<br /> Category</a></h3>
                    <div class="piling-project-detail">Kitchens / Restaurants</div>
                  </div>
                  <div class="col-xl-4 col-6 piling-project-item">
                    <h3 class="piling-project-title font-libre"><a href="single-project-branding.html" class="a-change-bg">Third<br /> Category</a></h3>
                    <div class="piling-project-detail">Kitchens / Restaurants</div>
                  </div>
                  <div class="col-xl-4 col-6 piling-project-item">
                    <h3 class="piling-project-title font-libre"><a href="single-project-web-design.html" class="a-change-bg">Fourth<br /> Category</a></h3>
                    <div class="piling-project-detail">Kitchens / Restaurants</div>
                  </div>
                  <div class="col-xl-4 col-6 piling-project-item">
                    <h3 class="piling-project-title font-libre"><a href="single-project-branding.html" class="a-change-bg">Fivth<br /> Category</a></h3>
                    <div class="piling-project-detail">Kitchens / Restaurants</div>
                  </div>
                  <div class="col-xl-4 col-6">
                    <div class="piling-more-total">
                      <!-- <a href="work-metro.html">more<br /> projects</a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="section pp-scrollable slide slide4">
            <div class="slide-container">
              <div class="container">
                <h2 class="slide-title font-libre">Trusted from Clients</h2>
                <div class="slide-descr text-grey">Help business can be optimized profit and improve value of brand is our vision.</div>
                <div class="slide-body">
                  <div class="row no-gutters partner-list partner-bordered">
                    <div class="col partner-item"><span class="inside"><img src="{{URL::asset('assets/site/assets/img/pic12.png')}}" alt="" /></span></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="{{URL::asset('assets/site/assets/img/pic13.png')}}" alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="{{URL::asset('assets/site/assets/img/pic14.png')}}" alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="{{URL::asset('assets/site/assets/img/pic15.png')}}" alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="{{URL::asset('assets/site/assets/img/pic16.png')}}" alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="{{URL::asset('assets/site/assets/img/pic17.png')}}" alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="{{URL::asset('assets/site/assets/img/pic18.png')}}" alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="{{URL::asset('assets/site/assets/img/pic20.png')}}" alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="{{URL::asset('assets/site/assets/img/pic21.png')}}" alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="{{URL::asset('assets/site/assets/img/pic22.png')}}" alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="{{URL::asset('assets/site/assets/img/pic23.png')}}" alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="{{URL::asset('assets/site/assets/img/pic24.png')}}" alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="{{URL::asset('assets/site/assets/img/pic25.png')}}" alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="{{URL::asset('assets/site/assets/img/pic26.png')}}" alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="{{URL::asset('assets/site/assets/img/pic27.png')}}" alt="" /></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="section pp-scrollable slide slide5 slide-dark">
            <div class="slide-container">
              <div class="slide-bg">
                <div class="inside"></div>
              </div>
              <div class="container">
                <div class="h1"><span class="rounded-icon"><i class="icon-quote"></i></span></div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-12">
                    <div class="a-reviews-carousel reviews-carousel-sm owl-carousel owl-theme">
                      <div class="reviews-carousel-item">
                        <div class="inside">
                          <div class="reviews-carousel-text font-libre">I don’t know what else to say. This is something you haven’t been see before. Unique design, lighweight and outstanding support.</div>
                          <div class="reviews-carousel-author">Roberto Firmino</div>
                          <div class="reviews-carousel-author-status">Product Management <span class="text-grey-light">at</span> <em>Invision Inc</em></div>
                        </div>
                      </div>
                      <div class="reviews-carousel-item">
                        <div class="inside">
                          <div class="reviews-carousel-text font-libre">I don’t know what else to say. This is something you haven’t been see before. Unique design, lighweight.</div>
                          <div class="reviews-carousel-author">Roberto Firmino</div>
                          <div class="reviews-carousel-author-status">Product Management <span class="text-grey-light">at</span> <em>Invision Inc</em></div>
                        </div>
                      </div>
                      <div class="reviews-carousel-item">
                        <div class="inside">
                          <div class="reviews-carousel-text font-libre">I don’t know what else to say. This is something you haven’t been see before. Unique design, lighweight and outstanding support.</div>
                          <div class="reviews-carousel-author">Roberto Firmino</div>
                          <div class="reviews-carousel-author-status">Product Management <span class="text-grey-light">at</span> <em>Invision Inc</em></div>
                        </div>
                      </div>
                      <div class="reviews-carousel-item">
                        <div class="inside">
                          <div class="reviews-carousel-text font-libre">I don’t know what else to say. This is something you haven’t been see before. Unique design, lighweight and outstanding support.</div>
                          <div class="reviews-carousel-author">Roberto Firmino</div>
                          <div class="reviews-carousel-author-status">Product Management <span class="text-grey-light">at</span> <em>Invision Inc</em></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8 col-sm-7 col-12">
                    <div class="flash-video-container image mask-skew wow fadeIn" data-wow-offset="250" data-wow-duration="0.2s" data-wow-delay=".3s">
                      <div class="mask wow slideInLeft" data-wow-offset="250" data-wow-duration="1.2s" data-wow-delay=".3s">
                        <div class="inside"></div>
                      </div>
                      <div class="flash-video">
                        <a class="a-show-video" data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0">
                          <img src="{{URL::asset('assets/site/assets/img/pic37.jpg')}}" alt="" />
                          <div class="flash-video-icon"><i class="icon ion-play"></i></div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="section pp-scrollable slide slide6">
            <div class="slide-container">
              <div class="slide-bg">
                <div class="inside"></div>
              </div>
              <div class="slide-bg slide-bg-circle">
                <div class="inside"></div>
              </div>
              <div class="container">
                <div class="row slide-content">
                  <div class="col-sm-6">
                    <h2 class="slide-title font-libre h2"><span class="text-primary">Fivth Installment,</span> Cairo</h2>
                    <div class="slide-body">
                      <div class="slide-contact-address">166 Main Street, Fivth Installment, Cairo</div>
                      <div class="slide-contact-mail"><a href="#" class="underline"><span class="__cf_email__" data-cfemail="#">info@gadallah.com</span></a></div>
                      <div class="slide-contact-phone"><a href="tel:+01234567890 " class="phone-link">01234567890</a></div>
                    </div>
                  </div>
                </div>
                <a class="btn btn-primary btn-rounded mr-4" href="contact.html">Contact us <i class="icon ion-ios-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
@endsection