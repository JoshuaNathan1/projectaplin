@extends('template')
@section('isi')
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-281903f7 elementor-section-height-full elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
        data-id="281903f7" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;https:\/\/2020.era.com.sg\/wp-content\/uploads\/2020\/12\/ONEERA-Background_optimize.mp4&quot;,&quot;background_play_on_mobile&quot;:&quot;yes&quot;}">
        <div class="elementor-background-video-container">
            <video id="bg-video" autoplay muted loop>
                <source src="{{ asset('videos/Home_Worth_production_story.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container">
                <div class="elementor-container-child">
                    <h2 class="section_title">welcome to</h2>
                    <p class="section_subtitle">
                        <span class="redtext">Project</span>
                        <span class="whitetext">Aplin</span>
                    </p>

                    <div class="section_content">
                        <div>
                            <span class="hash">#</span>
                            <span class="uno">2</span>
                        </div>
                        <div style="position:relative;" class="headline hide animated">
                            <span>Property Agent</span><br>
                            <span>
                            </span>
                            <p style="height:10px">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none">
                                    <path d="M7.7,145.6C109,125,299.9,116.2,401,121.3c42.1,2.2,87.6,11.8,87.3,25.7"></path>
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-widget-container">
                <div class="elementor-icon-wrapper">
                    <a class="elementor-icon" href="#premium">
                        <i aria-hidden="true" class="fas fa-chevron-down"></i> </a>
                </div>
            </div>
        </div>
        <style>
            .elementor-background-video-container {
                position: relative;
                width: 100vw;
                height: 100%;
                overflow: hidden;
            }

            #bg-video {
                position: absolute;
                width: 100vw;
                min-height: 100%;
                height: auto;
                z-index: -1;
            }
        </style>
    </section>

    <style type="text/css">
        .bg-prop-search-image {
            background-image: linear-gradient(to right, #464BB6, #272262);
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
        }
    </style>

    <div class="bg-prop-search-content bg-prop-search-image progressive replace">
        <div style="width: 100%;max-width: 700px;">
            <div class="visible-lg">
                <h3 style="color:#fff;font-family:Poppins;text-align:center;font-weight:100">Cari Properti Impian Anda</h3>
            </div>

        </div>
    </div>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            $(".search-province").on("change", function() {
                var selected = $(this).val();
                $(".search-city option").css("display", "none");
                $(".search-city option[province='" + selected + "']").css('display', '');
                $(".search-city").val("");
            });
        });
    </script>
    <div class="d-none d-sm-block">
        <style>
            .property-type a span {
                color: #fff;
                position: absolute;
                top: 0;
                left: 0;
                padding: 10px;
                font-family: 'Poppins';
                /* opacity: 1; */
                z-index: 1;
            }

            .property-type a img {
                opacity: 0.8;
            }

            .property-type a:hover img {
                opacity: 1;
            }
        </style>
        <section class="property-type" style="text-align: center;padding-top:20px;padding-bottom:20px;" id="premium">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <a href="./search?type=apertemen">
                            <div style="width:100%;height:200px;background:#000;position: relative;">
                                <span>Apartemen</span>
                                <img src="https://eraindonesia.com/property_type/apartment.jpg"
                                    style="width:100%;height:200px">
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <a href="https://eraindonesia.com/property?proptype=RMH">
                            <div style="width:100%;height:200px;background:#000;position: relative;">
                                <span>Rumah</span>
                                <img src="https://eraindonesia.com/property_type/rumah.jpg" style="width:100%;height:200px">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <a onclick="loadProperti('RK')">
                            <div style="width:100%;height:200px;background:#000;position: relative;">
                                <span>RK</span>
                                <img src="https://eraindonesia.com/property_type/ruko.jpg" style="width:100%;height:200px">
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <a href="https://eraindonesia.com/property?proptype=OFC">
                            <div style="width:100%;height:200px;background:#000;position: relative;">
                                <span>Kantor</span>
                                <img src="https://eraindonesia.com/property_type/kantor.jpg"
                                    style="width:100%;height:200px">
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <a href="https://eraindonesia.com/property?proptype=TNH">
                            <div style="width:100%;height:200px;background:#000;position: relative;">
                                <span>Tanah</span>
                                <img src="https://eraindonesia.com/property_type/tanah.jpg" style="width:100%;height:200px">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @csrf


    <div class="container">
        <div class="row" id="props"></div>
    </div>

    <section class="home-property" style="text-align: center" id="premium">
        {{-- <div class="section-title-box">
        <div class="section-title-text">
            Featured Listings
        </div>
    </div> --}}
        <div class="premium-container">
            <style type="text/css">
                .nav-link.active a {
                    color: white;
                }
            </style>
            <div class="page-content">
                <div class="d-none d-sm-block">
                    <div class="container">
                        <div class="property-slider owl-carousel ftco-animate-unused owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"></div>
                            </div>
                            <div class="owl-nav disabled"><button role="presentation" class="owl-prev"><span
                                        aria-label="prev">‹</span></button><button role="presentation"
                                    class="owl-next"><span aria-label="next">›</span></button></div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
                <div class="d-block d-sm-none">
                    <div class="container">
                        <div class="property-slider owl-carousel ftco-animate-unused owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"></div>
                            </div>
                            <div class="owl-nav disabled"><button role="presentation" class="owl-prev"><span
                                        aria-label="prev">‹</span></button><button role="presentation"
                                    class="owl-next"><span aria-label="next">›</span></button></div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content" style="text-align: center;display: none">
                <br>
                <a href="https://eraindonesia.com/property" class="btn btn-sm btn-block btn-filter"
                    style="    background-color: #7E153F;

            margin: 0 auto;
            margin-top: 15px;
            color: white;
            font-weight: bold;
            border-radius: 25px;
            width: 200px;
            font-size: 13pt;">VIEW
                    ALL</a>
            </div>
        </div>
    </section>
    <!-- <section class="home-banks">
                     <a href="partners.php">
                      <div class="lazy banks-background" data-bg="url('https://eraindonesia.com/images/our_partners_03.jpg')">
                       <img src="https://eraindonesia.com/images/our_partners_blur.jpg">
                      </div>
                     </a>
                    </section> -->


    <script>
        // const token = $("input[name='_token']").val();
        $(document).ready(function() {
            loadProperti("");
        })

        function loadProperti(param) {
            $.ajax({
                url: "{{ route('loadProperti') }}",
                method: "get",
                data: {
                    // _token: token,
                    type: param
                },
                success: function(response) {
                    $("#props").html(response);
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.status + ': ' + xhr.statusText;
                    console.log('Error - ' + errorMessage);
                }
            });
        }
    </script>
@endsection
