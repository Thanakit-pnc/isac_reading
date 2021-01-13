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
                                    <h4 class="mt-0">SECTION 1 Questions 1 – 14</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height sandbox">
                                        <h5 class="mt-0 mb-3">
                                            Read the text below and answer Questions 1-6.
                                        </h5>
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

                                        <div class="pt-1 bg-dark my-2"></div>

                                        <h5 class="mb-3">Read the text below and answer Questions 7-14.</h5>

                                        <div>
                                            <h5 class="text-center">BELLA VISTA 21<sup>st</sup> BIRTHDAY CELEBRATION!</h5>
                                            <div class="row">
                                                <div class="col-2">
                                                    When:
                                                </div>
                                                <div class="col-10">
                                                    Sunday 17 April from 8.00 am until 7.00 pm
                                                </div>
                                                <div class="col-2">
                                                    Where:
                                                </div>
                                                <div class="col-10">
                                                    On the beach
                                                </div>
                                                <div class="col-2">
                                                    Cost:
                                                </div>
                                                <div class="col-10">
                                                    ABSOLUTELY FREE!
                                                </div>
                                            </div>

                                            <p class="mb-0 mt-3">Programme of events:</p>
                                            <div class="row mb-2">
                                                <div class="col-4">
                                                    8.00 – 10.00 am
                                                </div>
                                                <div class="col">
                                                    Sandcastle competition Open to all children over 5: prizes for best 3 sandcastles.
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-4">
                                                    8.30 – 12 noon
                                                </div>
                                                <div class="col">
                                                    Donkey rides Suitable for children aged 8+ years
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-4">
                                                    10.00 – 12 noon
                                                </div>
                                                <div class="col">
                                                    Treasure Hunt Suitable for the very young (3 – 5 years) plus their parents.
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-4">
                                                    12 noon – 1.00 pm
                                                </div>
                                                <div class="col">
                                                    BBQ LUNCH Sausage sizzle with salads. Burgers and buns Vegetarian food also available.
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-4">
                                                    1.00 – 2.30 pm
                                                </div>
                                                <div class="col">
                                                    Beach soccer Ages: 9 – 12 years, boys and girls mixed teams
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-4">
                                                    3.00 – 5.00
                                                </div>
                                                <div class="col">
                                                    Mini-triathlon: swimming, running and cycling For older children only (12 – 16 years old)
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-4">
                                                    5.00 – 6.00
                                                </div>
                                                <div class="col">
                                                    Prize-giving ceremony, followed by huge FIREWORK DISPLAY
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
                                    <h4 class="mt-0">SECTION 2 Questions 15 – 27</h4>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card-box height sandbox">
                                        <h5 class="mt-0 mb-3">Read the text below and answer Questions 15-20.</h5>
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
                                        
                                        <div class="pt-1 bg-dark my-2"></div>

                                        <h5 class="mb-3">Read the text below and answer Questions 21-27.</h5>
                                        
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="text-center"><u>TERMS OF EMPLOYMENT</u></h4>

                                                <p class="font-weight-bold mb-0">Length of Agreement</p>
                                                <p>
                                                    Your employment will commence on 1<sup>st</sup> Jan 2012 until 31<sup>st</sup> December 2012 There is a probationary period of three calendar months, during which time either party can terminate this agreement by giving at least two weeks’ notice in writing. In the case of giving notice, a clear reason must be stated by either party to this agreement.
                                                </p>

                                                <p class="font-weight-bold mb-0">Remuneration</p>
                                                <p>
                                                    Your monthly income will be <span class="font-weight-bold">$2,100</span> per month gross.
                                                </p>

                                                <p class="font-weight-bold mb-0">Working Month</p>
                                                <p>
                                                    You will be expected to work an average of 87 contact hours per calendar month. Any work-load above the average 87 hours in any one quarter period will be paid at over-time rate of $30 per hour. Overtime payment will be made at the end of each quarter (March, June, September, December)
                                                </p>

                                                <p class="font-weight-bold mb-0">Recreational Leave</p>
                                                <p>
                                                    You will be entitled to <span class="font-weight-bold">15</span> working days paid recreational leave. You are asked to co-ordinate your leave in line with the quieter working periods.
                                                </p>

                                                <p class="font-weight-bold mb-0">Sick Leave</p>
                                                <p>
                                                    You will be entitled to <span class="font-weight-bold">30</span> days paid sick leave. Three or more consecutive days’ absence due to sickness will require a medical certificate. 
                                                </p>

                                                <p class="font-weight-bold mb-0">Legal working status</p>
                                                <p>
                                                    The employer will cover all costs incurred as a result of processes deemed necessary by law to ensure that your working status will be completely legal.
                                                </p>

                                                <p class="font-weight-bold mb-0">Insurance</p>
                                                <p>
                                                The employer will provide group medical insurance from a reputable insurance agency.
                                                </p>
                                                </p>

                                                <p class="font-weight-bold mb-0">Termination</p>
                                                <p class="mb-0">
                                                    <span class="font-weight-bold">[1]</span> You will be required to provide written notice to terminate this contract at least one calendar month prior to termination of your employment.
                                                </p>
                                                <p class="mb-0">
                                                    <span class="font-weight-bold">[2]</span> The employer is required to give you one calendar month’s notice of termination of your employment in writing, except in the case of <span class="font-weight-bold">[4]</span> below.
                                                </p>
                                                <p class="mb-0">
                                                    <span class="font-weight-bold">[3]</span> The employer is required to give you one calendar month’s notice of renewal / non-renewal of your employment in writing prior to the expiry of this agreement.
                                                </p>
                                                <p>
                                                    <span class="font-weight-bold">[4]</span> If you are found guilty of gross professional misconduct or of not maintaining required standards, the employer reserves the right to terminate this agreement immediately with payment being made up to and including the date of dismissal.
                                                </p>
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
                                    <h4 class="mt-0">SECTION 3 Questions 28 – 40</h4>
                                </div>

                                <div class="col-lg-6 ">
                                    <div class="card-box height sandbox">
                                        
                                        <h5 class="mt-0 mb-3">Read the text below and answer Questions 28 – 40.</h5>
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
    // $('.nav-item a[href="#section2"]').tab('show')
    
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