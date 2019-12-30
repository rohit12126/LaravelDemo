@extends('layouts.layout')

@section('content')
    <!-- section intro -->
    <section id="intro">
      <div class="intro-content">
        <h2>Welcome to Remember!</h2>
        <h3>Lorem ipsum dolor sit amet, elit persecuti efficiendi</h3>
        <div>
          <a href="#content" class="btn-get-started scrollto">Get Started</a>
        </div>
      </div>
    </section>
    <!-- /section intro -->

    <section id="content">
      <div class="container">

        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span3">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-info badge-circled">1</span>
                    <i class="ico icon-dropbox icon-5x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Out of the box</strong></h4>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am anumat lib persum sea facilisis.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>

              <div class="span3">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-success badge-circled">2</span>
                    <i class="ico icon-bitbucket icon-5x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>New taste</strong></h4>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-warning badge-circled">3</span>
                    <i class="ico icon-rocket icon-5x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Faster load</strong></h4>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-important badge-circled">4</span>
                    <i class="ico icon-cut icon-5x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Cut your times</strong></h4>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="span12">
            <div class="cta-box">
              <div class="row">
                <div class="span8">
                  <div class="cta-text">
                    <h2>Special price in very <span>limited</span> times</h2>
                  </div>
                </div>
                <div class="span4">
                  <div class="cta-btn">
                    <a href="#" class="btn btn-color">Call Action <i class="icon-caret-right"></i></a>
                  </div>
                </div>

              </div>


            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="offer">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span12">
                <div class="aligncenter">
                  <h3>Our features and pricing</h3>
                  <blockquote>
                    Lorem ipsum dolor sit amet, labores dolorum scriptorem eum an, te quodsi sanctus neglegentur eam, et lorem persecuti conclusionemque mei.
                  </blockquote>
                </div>
              </div>
            </div>

            <div class="row">

              <div class="span3">
                <h5>Choose package and start grow</h5>
                <p>
                  Per an putent audiam adolescens, mel ceteros fierent democritum te. No ubique malorum euismod usu.
                </p>
                <p>
                  Movet facilis democritum ea quo. Est ei illum consulatu accommodare, nam dicta expetenda suavitate ad.
                </p>
              </div>

              <div class="span3">
                <div class="pricing-box-plain">
                  <div class="heading">
                    <h4>Standard</h4>
                    <span>$9 / Month</span>
                  </div>
                  <div class="desc">
                    <ul>
                      <li>For 1 Application</li>
                      <li>Free one year support</li>
                      <li>Unlimited disk spaces</li>
                    </ul>
                  </div>
                  <div class="action">
                    <a href="#" class="btn btn-inverse">Sign Up</a>
                  </div>
                </div>
              </div>

              <div class="span3">
                <div class="pricing-box-plain">
                  <div class="heading">
                    <h4>Medium</h4>
                    <span>$29 / Month</span>
                  </div>
                  <div class="desc">
                    <ul>
                      <li>For 10 Applications</li>
                      <li>Free life time support</li>
                      <li>Unlimited disk spaces</li>
                    </ul>
                  </div>
                  <div class="action">
                    <a href="#" class="btn btn-inverse">Sign Up</a>
                  </div>
                </div>
              </div>

              <div class="span3">
                <div class="pricing-box-plain">
                  <div class="heading">
                    <h4>Elite</h4>
                    <span>$59 / Month</span>
                  </div>
                  <div class="desc">
                    <ul>
                      <li>For unlimited appliacations</li>
                      <li>Free life time support</li>
                      <li>Unlimited disk spaces</li>
                    </ul>
                  </div>
                  <div class="action">
                    <a href="#" class="btn btn-color">Sign Up</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

    <section id="works">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h3>Recent works</h3>
            <div class="row">

              <div class="grid cs-style-3">
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="{{ url('frontend') }}/img/dummies/works/1.jpg" alt=""></div>
                      <figcaption>
                        <h3>Portfolio name</h3>
                        <p>
                          <a href="{{ url('frontend') }}/img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                          <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                        </p>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="{{ url('frontend') }}/img/dummies/works/2.jpg" alt=""></div>
                      <figcaption>
                        <h3>Portfolio name</h3>
                        <p>
                          <a href="{{ url('frontend') }}/img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                          <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                        </p>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="{{ url('frontend') }}/img/dummies/works/3.jpg" alt=""></div>
                      <figcaption>
                        <h3>Portfolio name</h3>
                        <p>
                          <a href="{{ url('frontend') }}/img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                          <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                        </p>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="{{ url('frontend') }}/img/dummies/works/4.jpg" alt=""></div>
                      <figcaption>
                        <h3>Portfolio name</h3>
                        <p>
                          <a href="{{ url('frontend') }}/img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                          <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                        </p>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
