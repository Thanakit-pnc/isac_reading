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
</style>
@stop

@section('content')
<form id="form-exam" method="post">
    <div class="row mt-1">
        <div class="col-md-6">
            <h3>General Training Test 01</h3>
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

                    <div class="tab-content b-0 font-16 text-dark">

                        <div class="tab-pane" id="section1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mt-0 mb-0">SECTION 1 Questions 1 – 14</h4>
                                    <p>
                                        Read the text below and answer Questions 1-6.
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height" id="sandbox">
                                        <h3 class="mt-0 text-center">WELCOME TO BELLA VISTA HOLIDAY RESORT</h3>
                                        <h4 class="text-center">Choose from our wide range of holiday accommodation:</h4>

                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <div class="border px-1">
                                                    <h5 class="font-italic text-center"><u>BEACH DORM</u></h5>
                                                    <p class="font-weight-bold mb-0">Description:</p>
                                                    <ul>
                                                        <li>Multi-bed dormitory</li>
                                                        <li>Shared bathroom/toilet</li>
                                                        <li>Bedding and towels <span class="font-weight-bold font-italic"><u>NOT</u></span> provided</li>
                                                        <li>Ideal for groups who like a roof over their heads</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Cost:</p>
                                                    <ul>
                                                        <li>$5.00 per person per night</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="border px-1">
                                                    <h5 class="font-italic text-center"><u>FOREST RETREAT</u></h5>
                                                    <p class="font-weight-bold mb-0">Description:</p>
                                                    <ul>
                                                        <li>Jungle huts for nature lovers</li>
                                                        <li>Mosquito nets available</li>
                                                        <li>Attached bathroom</li>
                                                        <li>Bedding and towels provided</li>
                                                        <li>Watch the wild-life from your own balcony</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Cost:</p>
                                                    <ul>
                                                        <li>$20.00 per hut per night</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-lg-6">
                                                <div class="border px-1">
                                                    <h5 class="font-italic text-center"><u>CAMPSITE</u></h5>
                                                    <p class="font-weight-bold mb-0">Description:</p>
                                                    <ul>
                                                        <li>Multi-bed dormitory</li>
                                                        <li>Toilet and showers on site</li>
                                                        <li>Bedding and towels <span class="font-weight-bold font-italic"><u>NOT</u></span> provided</li>
                                                        <li>Sleeping bags for hire</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Cost:</p>
                                                    <ul>
                                                        <li>$10.00 per tent per night</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="border px-1">
                                                    <h5 class="font-italic text-center"><u>KING BUNGALOW</u></h5>
                                                    <p class="font-weight-bold mb-0">Description:</p>
                                                    <ul>
                                                        <li>Luxurious, spacious chalet with en-suite bathroom</li>
                                                        <li>TV and internet access in own room</li>
                                                        <li>All bedding and linen provided</li>
                                                        <li>Ideal for couples without children</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Cost:</p>
                                                    <ul>
                                                        <li>$200.00 per bungalow per night</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-lg-6">
                                                <div class="border px-1">
                                                    <h5 class="font-italic text-center"><u>FLATLET</u></h5>
                                                    <p class="font-weight-bold mb-0">Description:</p>
                                                    <ul>
                                                        <li>Compact apartments in multi-storey block</li>
                                                        <li>Shared bathroom</li>
                                                        <li>Bedding and towels provided</li>
                                                        <li>Cooking facilities available</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Cost:</p>
                                                    <ul>
                                                        <li>$50.00 per apartment per night</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="border px-1">
                                                    <h5 class="font-italic text-center"><u>DOUBLE-DECKER</u></h5>
                                                    <p class="font-weight-bold mb-0">Description:</p>
                                                    <ul>
                                                        <li>Two-storey chalets</li>
                                                        <li>Bathroom on each floor</li>
                                                        <li>Bedding and towels provided</li>
                                                        <li>Can accommodate 6-10 people</li>
                                                        <li>TV in each chalet</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Cost:</p>
                                                    <ul>
                                                        <li>$500.00 per chalet per night</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.general.test01.passage1')
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="section2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mt-0 mb-0">SECTION 2 Questions 15 – 27</h4>
                                    <p>Read the text below and answer Questions 15-20.
                                    </p>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        <h3 class="mt-0 text-center">JOB SEARCH</h3>
                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <div class="border p-1">
                                                    <h5 class="font-italic text-center"><u>Job 1: SALES ASSISTANT</u></h5>
                                                    <p class="font-weight-bold mb-0">Job  description:</p>
                                                    <ul>
                                                        <li>Selling cosmetics in the perfume department</li>
                                                        <li>Applying make-up for customers</li>
                                                        <li>Stocking shelves</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Working hours:</p>
                                                    <ul>
                                                        <li>Wed-Sun: 10.00 am – 9.00 pm</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Academic Qualifications</p>
                                                    <ul>
                                                        <li>Minimum high school certificate</li>
                                                    </ul>
                                                    <p class="mb-0">
                                                        <span class="font-weight-bold">Salary:</span>
                                                        <span>$10.00 per hour</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="border p-1">
                                                    <h5 class="font-italic text-center"><u>Job 2: SECURITY GUARD</u></h5>
                                                    <p class="font-weight-bold mb-0">Job  description:</p>
                                                    <ul>
                                                        <li>Taking care of warehouse</li>
                                                        <li>Patrolling perimeter fence</li>
                                                        <li>Dog training (as required)</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Working hours:</p>
                                                    <ul>
                                                        <li>Mon - Sat: 10.00 pm – 8.00 am</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Academic Qualifications</p>
                                                    <ul>
                                                        <li>None required</li>
                                                    </ul>
                                                    <p class="mb-0">
                                                        <span class="font-weight-bold">Salary:</span>
                                                        <span>$1,500 per month</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <div class="border p-1">
                                                    <h5 class="font-italic text-center"><u>Job 3: TEACHERS’ HELP</u></h5>
                                                    <p class="font-weight-bold mb-0">Job  description:</p>
                                                    <ul>
                                                        <li>Assisting teacher in classroom</li>
                                                        <li>Conducting extra-curricular activities e.g. sports and games</li>
                                                        <li>Preparing teaching materials</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Working hours:</p>
                                                    <ul>
                                                        <li>Mon - Fri: 8.00 am  – 4.00 pm</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Academic Qualifications</p>
                                                    <ul>
                                                        <li>Graduate (any subject)</li>
                                                    </ul>
                                                    <p class="mb-0">
                                                        <span class="font-weight-bold">Salary:</span>
                                                        <span>$23,000 p.a.</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="border p-1">
                                                    <h5 class="font-italic text-center"><u>Job 4: TELE-MARKETER</u></h5>
                                                    <p class="font-weight-bold mb-0">Job  description:</p>
                                                    <ul>
                                                        <li>Conducting market surveys (phone)</li>
                                                        <li>Interviewing consumers</li>
                                                        <li>On-line research</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Working hours:</p>
                                                    <ul>
                                                        <li>50 hrs/week (flexi)</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Qualifications</p>
                                                    <ul>
                                                        <li>Degree in business field</li>
                                                        <li>Must have pleasant telephone manner</li>
                                                    </ul>
                                                    <p class="mb-0">
                                                        <span class="font-weight-bold">Salary:</span>
                                                        <span>$20,000 p.a.</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>  

                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <div class="border p-1">
                                                    <h5 class="font-italic text-center"><u>Job 5: SALES REP</u></h5>
                                                    <p class="font-weight-bold mb-0">Job  description:</p>
                                                    <ul>
                                                        <li>Selling computer software</li>
                                                        <li>Conducting presentations </li>
                                                        <li>Staff training</li>
                                                        <li>Computer maintenance</li>
                                                        <li>Car provided</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Working hours:</p>
                                                    <ul>
                                                        <li>Mon – Sat, 10.00 am – 10.00 pm</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Academic Qualifications</p>
                                                    <ul>
                                                        <li>Minimum high school certificate</li>
                                                        <li>IT training certificate</li>
                                                    </ul>
                                                    <p class="mb-0">
                                                        <span class="font-weight-bold">Salary:</span>
                                                        <span>$12,000 p.a. + performance-related bonus</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="border p-1">
                                                    <h5 class="font-italic text-center"><u>Job 6: GRAPHIC DESIGNER</u></h5>
                                                    <p class="font-weight-bold mb-0">Job  description:</p>
                                                    <ul>
                                                        <li>Web-site design</li>
                                                        <li>Creating posters and brochures</li>
                                                        <li>Advertising campaigns</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Working hours:</p>
                                                    <ul>
                                                        <li>Mon - Fri: 10.00 am – 9.00 pm</li>
                                                        <li>Some weekend work (negotiable)</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Academic Qualifications</p>
                                                    <ul>
                                                        <li>Degree in any field</li>
                                                    </ul>
                                                    <p class="mb-0">
                                                        <span class="font-weight-bold">Salary:</span>
                                                        <span>$18,000 p.a. + overtime</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.general.test01.passage2')
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="section3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mt-0 mb-0">SECTION 3 Questions 28 – 40</h4>
                                    <p>Read the text below and answer Questions 28 – 40.
                                    </p>
                                </div>

                                <div class="col-lg-6 ">
                                    <div class="card-box height">
                                        <p class="d-flex">
                                            <span class="font-weight-bold mr-2">A.</span>
                                            <span class="text-justify">By the year 2020, an estimated two billion people – more than a third of the world's population - will speak English. For some 500 million people, the majority of whom are living in the United States and the United Kingdom, English will be their first language. But for another 1.5 billion, English will be a second or even third language, essential to both their professional and their personal lives.</span>
                                        </p>
                                        <p class="d-flex">
                                            <span class="font-weight-bold mr-2">B.</span>
                                            <span class="text-justify">English is increasingly becoming entrenched as the language of choice for business, science and popular culture. Three-quarters of the world's mail, for example, is currently written in English, as is up to 80% of the electronic mail on the Internet. Soon, more people will speak English as a foreign language than speak it as their mother tongue. </span>
                                        </p>
                                        <p class="d-flex">
                                            <span class="font-weight-bold mr-2">C.</span>
                                            <span class="text-justify">'There has never been a language spoken by so many people in so many places,' says Professor David Crystal, author of the Cambridge Encyclopedia of the English Language.  But why is English rising so far above the world's other tongues?</span>
                                        </p>
                                        <p class="d-flex">
                                            <span class="font-weight-bold mr-2">D.</span>
                                            <span class="text-justify">There are no clear linguistic reasons for English's global dominance. The grammar is complicated, the pronunciation is eccentric and the spelling is peculiar. But, as Crystal points out, logic does not necessarily apply when building a lingua franca.</span>
                                        </p>
                                        <p class="d-flex">
                                            <span class="font-weight-bold mr-2">E.</span>
                                            <span class="text-justify">'A language becomes powerful when a nation becomes powerful,' he says. 'This power may be military or cultural or economic - or, in the case of the United States, all of the above. 'Wave dollar notes in front of someone, and they will learn complicated spellings and grammar.'</span>
                                        </p>
                                        <p class="d-flex">
                                            <span class="font-weight-bold mr-2">F.</span>
                                            <span class="text-justify">Another key factor is flexibility. According to Crystal, 'English is a kind of vacuum cleaner - it sucks in vocabulary from any language it can get.' Crystal estimates that there are now words from more than 150 other languages incorporated into standard English. Spelling and pronunciation are so capricious - and so frustrating for non-native speakers - precisely because the language has been quick to take on these foreign influences. This flexibility has less to do with English itself, says Crystal, than it does with the attitudes and temperaments of English-speakers.</span>
                                        </p>
                                        <p class="d-flex">
                                            <span class="font-weight-bold mr-2">G.</span>
                                            <span class="text-justify">But English may yet be suckered by its own success. As the language spreads among non-native speakers, it will invariably be transformed, even subverted, to suit regional needs. Local vocabulary, slang and pronunciation will displace existing British and American usages. English could fragment into mutually unintelligible spoken forms, the way Latin fragmented into French, Italian, Spanish and other languages some 1,500 years ago. A more likely scenario, Crystal believes, is the emergence of a regionally neutral conversational English for international use, with each country retaining its own national variations.</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.general.test01.passage3')
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
            url: "{{ route('store.gt-test-01') }}",
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