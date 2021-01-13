@extends('layouts.app')

@section('css')
<style>
    .height {
        height: 60vh;
        overflow-y: auto;
    }
    .border-custom:not(:last-of-type) {
        border-bottom: 1px solid #777;
    }
    @media(max-width: 1280px) {
        input[type=text] {
            width: 75% !important;
        }
    }
</style>
@stop

@section('content')
<form id="form-exam" method="post">
    <div class="row mt-1">
        <div class="col-md-6">
            <h3>General Training Test 02</h3>
        </div>
        <div class="col-md-6">
            @isset($timer)
                @if($timer == 1)
                <h4 class="text-right" id="time"><span class="text-danger">60</span> minutes <span class="text-danger">00</span> seconds</h4>
                @endif
            @endisset
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <div id="wizard">

                    <ul class="nav nav-pills nav-justified form-wizard-header">
                        <li class="nav-item">
                            <a href="#section1" data-toggle="tab" class="nav-link"> 
                                <span class="number">1</span>
                                <span class="d-none d-sm-inline">Section 1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#section2" data-toggle="tab" class="nav-link">
                                <span class="number">2</span>
                                <span class="d-none d-sm-inline">Section 2</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#section3" data-toggle="tab" class="nav-link">
                                <span class="number">3</span>
                                <span class="d-none d-sm-inline">Section 3</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content b-0 font-14 text-dark">

                        <div class="tab-pane" id="section1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mt-0">SECTION 1 Questions 1 – 14</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height sandbox">

                                        <div class="row">
                                            
                                            <div class="col-12">
                                                <h5 class="mt-0 mb-3">
                                                    Read the text below and answer Questions 1-6.
                                                </h5>
                                            </div>
                                            <div class="col-lg-6">
                                                <h4 class="mt-0"><i>A</i></h4>
                                                <div class="border px-1">
                                                    <h5 class="text-center">BULLY’S STEAK-HOUSE</h5>
                                                    <p class="font-weight-bold text-center">
                                                        American style steaks, freshly <br> barbecued at your table.
                                                    </p>
                                                    <ul>
                                                        <li>Huge selection of steaks and burgers</li>
                                                        <li>Live music on weekends</li>
                                                        <li>Function room available</li>
                                                        <li>Fully air-conditioned</li>
                                                        <li>Licensed bar</li>
                                                    </ul>
                                                    <p class="font-weight-bold text-center">Open: Tues – Sun 5 pm - midnight</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <h4 class="mt-0"><i>B</i></h4>
                                                <div class="border px-1">
                                                    <h5 class="text-center">THE WHARF</h5>
                                                    <p class="font-weight-bold text-center">
                                                        Seafood restaurant: Catch your own <br> food from the restaurant fish-pond
                                                    </p>
                                                    <ul>
                                                        <li>Choose from a range of sauces</li>
                                                        <li>BYOB: no corkage fee charged</li>
                                                        <li>Playground for the kids</li>
                                                        <li>7 large TV screens: WATCH THE FOOTIE WHILE YOU EAT</li>
                                                        <li>Very reasonable prices</li>
                                                    </ul>
                                                    <small>Hours: 11.00 am until 9.00 pm</small>
                                                    <p class="font-weight-bold">CLOSED: Wednesdays</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-lg-12">
                                                <h4 class="mt-0"><i>C</i></h4>
                                                <div class="border px-1">
                                                    <h5 class="font-italic text-center">BOMBAY HOUSE</h5>
                                                    <p>
                                                        DELICIOUS SPICY CURRIES FROM INDIA; FREE BEVERAGE WITH EVERY ORDER; OPEN 7 DAYS A WEEK INCLUDING PUBLIC HOLIDAYS; LARGE PARTIES CATERED FOR; TAKE-AWAY SERVICE AVAILABLE (Tel: 089 365 2108); LARGE PARKING AREA; FULLY AIR-CONDITIONED COMFORT; FULLY LICENSED
                                                    </p>
                                                    <h5 class="text-center">GET A TASTE OF THE REAL INDIA!</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-lg-12">
                                                <h4 class="mt-0"><i>D</i></h4>
                                                <div class="border px-1">
                                                    <h5 class="font-italic text-center">THE JOLLY FROG: authentic French cuisine in a romantic setting</h5>
                                                    <ul>
                                                        <li>5-star AWARD WINNING food: not particularly cheap but the very best there is</li>
                                                        <li>Sample a range of dishes from all over France</li>
                                                        <li>Wide selection of fine wines from France’s best vineyards</li>
                                                        <li>The finest service: valet parking available</li>
                                                        <li>RESERVATION RECOMMENDED</li>
                                                    </ul>
                                                    <h6 class="text-center">OPEN: Thurs – Sunday 7.00 pm till 1.00 am</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pt-1 bg-dark my-2"></div>

                                        <h5 class="mb-3">Read the text below and answer Questions 7-14.</h5>
                                        <div>
                                            <h4 class="text-center">CHIGWELL COMMUNITY CENTRE</h4>
                                            <h5 class="text-center"><i>New evening courses for this semester</i></h5>
                                            <div class="row">
                                                <div class="col-auto font-weight-bold">a.</div>
                                                <div class="col">
                                                    <span class="font-weight-bold">Embroidery class (20 hrs:  Fridays 6 – 8 pm)</span> <br>
                                                    For people who enjoy making the most of their creative talents, this course will start with the basics of embroidery. Participants will learn a variety of embroidery styles and patterns. Cost: $120 (includes the cost of all materials)
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-auto font-weight-bold">b.</div>
                                                <div class="col">
                                                    <span class="font-weight-bold">Baking for beginners	(40 hrs: Mon + Thurs 6 - 8 pm)</span> <br>
                                                    Participants will learn the techniques for baking a variety of breads and cakes to suit all tastes. No previous experience necessary but a sweet tooth would be an advantage!	Cost: $150 (maximum 12 participants)
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-auto font-weight-bold">c.</div>
                                                <div class="col">
                                                    <span class="font-weight-bold">Advanced guitar (80 hrs: Wed + Fri 7 – 9 pm)</span> <br>
                                                    Develop your musical skills with the guitar. This course follows on from the 2 previous courses: Beginners Guitar, and Intermediate Guitar. All styles of music presented for both acoustic and electric guitars. A must for those who wish to turn professional.	Cost: $200 (own instruments required)
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-auto font-weight-bold">d.</div>
                                                <div class="col">
                                                    <span class="font-weight-bold">Choral Society (40 hrs: Tues + Thurs 5 – 7 pm)</span> <br>
                                                    Here’s your chance to take part in a semi-professional choir and give choral recitals at various events around the city. The choral society has been performing together for 5 years and is looking to increase its numbers. All welcome to attend a pre-course audition on 29 June. Cost: Free 
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-auto font-weight-bold">e.</div>
                                                <div class="col">
                                                    <span class="font-weight-bold">Public speaking (20 hrs: Wednesdays 5 – 7.30 pm)</span> <br>
                                                    For those people who find speaking in public an ordeal, this course will help develop the confidence to speak in public. You’ll have a chance to listen to guest speakers as well as the chance to practise your own speech delivery techniques. Cost: $100 (to cover the cost of hiring guest speakers)
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-auto font-weight-bold">f.</div>
                                                <div class="col">
                                                    <span class="font-weight-bold">Web design (60 hrs: Mon + Wed + Fri 7 – 9 pm)</span> <br>
                                                    For people keen to develop professionally, this course provides the opportunity to develop IT skills to a high level. The course takes in all aspects of effective web design and multimedia creation. A solid background in the use of computers is desirable for participants. Cost: $250 (includes end of course test and certificate)
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-auto font-weight-bold">g.</div>
                                                <div class="col">
                                                    <span class="font-weight-bold">Aspects of literature (60 hrs: Thurs 6-9 pm)</span> <br>
                                                    Ever feel you’d like to know more about English writers? Well this may suit you. The course examines some of the works of some of the best known authors from the UK and the USA. Not only fiction but poetry and drama too are covered in this voyage of discovery into the world of literature. Cost: $100 (includes the use of the Centre’s extensive library resources)
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-auto font-weight-bold">h.</div>
                                                <div class="col">
                                                    <span class="font-weight-bold">Indonesian for beginners	(90 hrs: Mon + Wed + Fri 6.30 – 8.30 pm)</span> <br>
                                                    This course provides an insight into Indonesian culture and language. Not only will you learn the basics of the language but you’ll also be given a brief account of the history and culture of this huge archipelago, including some hand-on cooking demonstrations using authentic Indonesian recipes and ingredients. 
                                                    Cost: $200 (includes course-book and all costs related to the cookery demonstrations).            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.general.test02.passage1')
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="section2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mt-0">SECTION 2 Questions 15 – 27</h4>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card-box height sandbox">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h5 class="mt-0 mb-3">Read the text below and answer Questions 15-20.</h5>
                                                <div class="border px-1">
                                                    <h4 class="text-center mb-2">Westway Industrials Co. Ltd.</h4>
                                                    <h5 class="mb-1">Welcome to Westways!</h5>
                                                    <p>
                                                        Here at Westways it’s important for workers to feel happy and at home. Apart from offering top of the range salaries, the company also takes into account the physical and social well-being of its employees. It’s important for all out workers to feel good about being part of this team. To this end the management provides a number of recreational activities for its employees to enjoy free of charge.
                                                    </p>

                                                    <h5 class="mb-1">Physical pursuits</h5>
                                                    <p>
                                                        <span class="font-weight-bold">Gymnasium: </span> there is a fully-equipped fitness centre on the sixth floor. All employees can take advantage of the facilities offered. There is a range of apparatus including exercise bicycles, tread-mills and a full set of weight-lifting equipment. In addition, the centre runs aerobics sessions from 6 – 8 pm. <br>
                                                        <span class="font-weight-bold">Opening times: 6.00 am – 9.00 pm daily</span>
                                                    </p>

                                                    <p>
                                                        <span class="font-weight-bold">Running track: </span> if you prefer outdoor exercise, there is a 400-metres running track located just a short distance from the factory. A shuttle bus from the factory to the track is available free of charge. It leaves the factory gates on the hour and at 15-minute intervals.<br>
                                                        <span class="font-weight-bold">Opening times: 6.00 am – 9.00 pm Mon-Fri (closed weekends for competitions)</span>
                                                    </p>

                                                    <p>
                                                        <span class="font-weight-bold">Soccer field: </span> for those of you with an abundance of energy, the company runs two football teams: the regular team, open to all ages, and the veterans team, open to players over the age of 40. Training takes place twice a week on Tuesday and Thursday evening from 6-9 pm. New members are always welcome. Weekend matches against other clubs take place Sunday mornings starting at 10.00 am. Free team kit and transport to the match venue provided.
                                                    </p>
                                                    
                                                    <p>
                                                        <span class="font-weight-bold">Swimming pool: </span> located right next to the running track, the Olympic-size swimming pool offers the chance to cool down after the vigorous track exercise. There’s also a 10-metre diving board. A life-guard is on duty at all times to ensure your safety.<br>
                                                        <span class="font-weight-bold">Opening times: 6.00 am – 10.00 pm Mon-Sat (closed Sun for cleaning and maintenance)</span>
                                                    </p>

                                                    <h5 class="mb-1">Social pursuits</h5>
                                                    <p>
                                                        <span class="font-weight-bold">Clubhouse: </span> The clubhouse is popular with employees of all ages. Apart from providing a place to relax or meet colleagues in a social environment, there are also a number of organized activities:
                                                    </p>
                                                    
                                                    
                                                    <p class="d-flex">
                                                        <span class="font-weight-bold mr-2" style="flex: 0 0 15%;">Quiz night:</span> 
                                                        <span>every Wednesday, starts at 7.30 pm. Teams of 4-6 compete for a weekly prize of $100.</span> 
                                                    </p>
                                                    <p class="d-flex">
                                                        <span class="font-weight-bold mr-2" style="flex: 0 0 15%;">Scrabble:</span>  
                                                        <span>test your word power with the weekly Scrabble competition. Takes place every Monday from 8.00 pm onwards.</span>
                                                    </p>
                                                    <p class="d-flex">
                                                        <span class="font-weight-bold mr-2" style="flex: 0 0 15%;">Disco:</span> 
                                                        <span>dance to the sounds of the 80’s as DJ Dave keeps you swinging every Friday from 9.00 pm till closing time (midnight). </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.general.test02.passage2')
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="section3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mt-0 mb-0">SECTION 3 Questions 28 – 40</h4>
                                </div>

                                <div class="col-lg-6 ">
                                    <div class="card-box height sandbox">
                                        <h5 class="mt-0 mb-3">Read the text below and answer Questions 28 – 40.</h5>
                                        <h4>Marianne’s Visions</h4>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">A.</span>
                                            <span>Marianne North was an artist who travelled the world and visited Sarawak in the late 19th century, to paint plants and flowers as part of a global record of flora — a project she dedicated half her life to.  Her work, consisting of 832 paintings at the Marianne North Gallery at the Royal Botanic Gardens, Kew in London, is a unique collection and a fascinating historical curiosity.</span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">B.</span>
                                            <span>Being a solo world traveller was very unusual for a middle-aged 19th century English woman, but Marianne North was no ordinary woman.  Nor has she left an ordinary legacy.  For 15 years, between 1871 and 1886, she toured the Americas, Australia, Africa and Asia, visited Borneo twice and devoted herself to painting the world’s exotic plants and flowers in their natural settings.  It became a quest and a life’s work, in an age and society when the horizons of most English women were determined by the home, the family and the restrictive notions of social respectability that did not include adventure.</span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">C.</span>
                                            <span>North designed the building herself, in the style of an ancient Greek temple, and the pictures are still mounted floor-to-ceiling where she first hung them in 1882.  The effect is of a huge botanical postage-stamp album, a blaze of dazzling colours.</span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">D.</span>
                                            <span>The collection is a testament to the peculiar life of an eccentric.  But in 1882, with photography only in its infancy and recreational travel the preserve of the privileged few, the gallery gave tens of thousands of visitors their first chance to appreciate exotic flora in ‘living’ colour.  In this way, Londoners were introduced to the durian, rambutan, nipah palm and pitcher plants.  For the first time those who had read of the ‘mystic east’ could put colourful images to writers’ words.  </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">E.</span>
                                            <span>All this colour and beauty came about through grief.  North never married and devoted her life to caring for her father.  When he died, she was nearly 40 years old, reasonably wealthy and heartbroken.  To assuage her grief she travelled and painted. </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">F.</span>
                                            <span>Her journeys brought her to Kuching, the capital of Sarawak on the north coast of Borneo, a country where until relatively recently, head-hunting had been common. She stayed in the Astana (palace) as a guest of the White Raja.  She was also an avid diarist, and wrote in a laconic style that made light of the difficulties of travelling alone in some of the world’s wildest corners.</span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">G.</span>
                                            <span>Most of what she wrote is a straightforward, businesslike record of what she saw and discovered.  On several trips to the interior of Sarawak, she experienced the dangers and discomfort of the rainforest, but thought only of its beauty and diversity.  At a loss for where to start, she first concentrated on painting the two forms of flora still strongly associated in the visitor’s mind with Borneo — orchids and pitcher plants.</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.general.test02.passage3')
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <ul class="list-inline wizard mb-0 d-flex justify-content-between">
                        <li class="previous list-inline-item">
                            <a href="javascript: void(0);" class="btn btn-secondary button-previous">Previous</a>
                        </li>
                        <li class="show list-inline-item">
                            <button type="button" class="btn btn-purple waves-effect waves-light d-none" data-toggle="modal" data-target="#modal-score" id="btn-score"><i class="fas fa-star"></i> Show Result</button>
                         </li>
                        <li class="next list-inline-item float-right">
                            <a href="javascript: void(0);" class="btn btn-secondary button-next">Next</a>
                        </li>
                        <li class="finish list-inline-item float-right">
                            <button type='button' class='btn btn-success' id="finish">Finish</button>
                            <a href="{{ url('/') }}" class="btn btn-primary d-none"><i class="fas fa-home"></i></a>
                         </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</form>

<div id="modal-score" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title text-white" id="myModalLabel"><i class="fas fa-star"></i> Show Result</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
@isset($timer)
    @if($timer == 1)
    <script src="{{ asset('public/js/timer_ielts.js') }}"></script>
    @endif
@endisset
<!-- Plugins js-->
<script src="{{ asset('public/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
<!-- Init js-->
<script src="{{ asset('public/assets/js/pages/form-wizard.init.js') }}"></script>
<script src="{{ asset('public/assets/js/wizard.js') }}"></script>
<script>
    // $('.nav-item a[href="#section3"]').tab('show')
    
    $('#finish').on('click', function() {
        Swal({
            type: 'warning',
            title: 'Are you sure.',
            text: 'you want to submit?',
            showCancelButton: true,
            allowOutsideClick: false
        }).then((result) => {
            if(result.value) {
                $('#form-exam').submit();
            } 
            return false;
        })
    })
    
    $('#form-exam').on('submit', function(e) {
        let timeSt = "{{ $timer }}";
        e.preventDefault();
        let data = $("#form-exam").serialize();
        $.ajax({
            type: "post",
            url: "{{ route('store.gt-test-02') }}",
            data: {_token: "{{ csrf_token() }}", data},
            dataType: "json",
            success: function(data) {
                if(data.message == 'success') {
                    showAnswer(data.results);
                    $('.finish #finish').hide();
                    $('.finish a').removeClass('d-none')
                    $('.show button').removeClass('d-none');
                    $('input, select').attr('disabled', 'disabled');
                }
                if(timeSt == '1') {
                    stopTime();
                }
            },
            error: function(error) {
                console.log('error');
            }
        });
    });
 
    function showAnswer(data) {
        let results = Object.keys(data.exam).map(key => data.exam[key])
    
        $('#modal-score .modal-body').append(`
            <div class="text-right">
                <h4 class="mt-0">${data.total}</h4>
            </div>
            <div class="row text-dark">
                <div class="col-md-6 p-0 box-1 border border-dark"></div>
                <div class="col-md-6 p-0 box-2 border border-dark border-left-0"></div>
            </div>
        `)

        results.forEach((result, idx) => {
            if(idx < 20) {
                $('.box-1').append(`
                    <div class="d-flex p-1 border-custom">
                        <span class="font-weight-bold" style="flex: 50%;">${idx + 1}. ${result.stdAnswer == '' ? 'No answer' : result.stdAnswer}</span>
                        <div style="flex: 50%;">
                            <span class="mr-1">${ result.status == 'R' ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'}</span>
                            <span class="text-success font-weight-bold">${result.rightAnswer}</span>
                        </div>
                    </div>
                `)
            } else {
                $('.box-2').append(`
                    <div class="d-flex p-1 border-custom">
                        <span class="font-weight-bold" style="flex: 50%;">${idx + 1}. ${result.stdAnswer == '' ? 'No answer' : result.stdAnswer}</span>
                        <div style="flex: 50%;">
                            <span class="mr-1">${ result.status == 'R' ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'}</span>
                            <span class="text-success font-weight-bold">${result.rightAnswer}</span>
                        </div>
                    </div>
                `)
            }
        })

        $('#modal-score').modal('show')
    }
</script>
@endsection