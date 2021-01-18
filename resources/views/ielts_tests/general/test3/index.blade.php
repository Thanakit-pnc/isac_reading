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
            <h3>General Training Test 3</h3>
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
                                        <h5 class="mt-0 mb-3">
                                            Read the text below and answer Questions 1-6.
                                        </h5>
                                        <h4 class="mt-0 text-center font-16">WELCOME TO Kingsway Shopping Mall: the Future of Shopping!</h4>
                                        <h5 class="text-center">Take a look at some of the shops in the Mall:</h5>

                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <div class="border px-1">
                                                    <h5 class="font-italic text-center"><u>PINKIE’S PLACE</u></h5>
                                                    <p class="text-center mb-0">
                                                        You can choose any colour – AS LONG AS IT’S <u class="font-weight-bold font-italic">PINK</u>!!
                                                    </p>
                                                    <ul>
                                                        <li>Ladies’ accessories for all occasions.</li>
                                                        <li>Soft toys and collectors’ dollst</li>
                                                        <li>Children’s clothes</li>
                                                    </ul>
                                                    <p class="font-weight-bold text-center">50% Discount till the end of the month</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="border px-1">
                                                    <h5 class="font-italic text-center"><u>BAKER’S DELIGHT</u></h5>
                                                    <ul>
                                                        <li>Freshly baked cakes and bread</li>
                                                        <li>Birthday cakes our specialty</li>
                                                        <li>Outside functions catered for</li>
                                                        <li>Take-away or eat here</li>
                                                    </ul>
                                                    <p class="font-weight-bold text-center">FRESH COFFEE AVAILABLE - free top ups</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-lg-6 align-self-center">
                                                <div class="border px-1">
                                                    <h5 class="font-italic text-center"><u>Diamonds are forever!</u></h5>
                                                    <ul>
                                                        <li>Finest costume jewellery</li>
                                                        <li>Engagement rings</li>
                                                        <li>Wedding rings</li>
                                                        <li>Gold is our specialty</li>
                                                    </ul>
                                                    <p class="font-weight-bold text-center">Body piercing done on-site</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="border px-1">
                                                    <h5 class="font-italic text-center mb-1"><u>DEVI’S</u></h5>
                                                    <p class="font-weight-bold text-center mb-1">You looking for the best prices on mobile phones and note-books?</p>
                                                    <ul>
                                                        <li>Desktop computers</li>
                                                        <li>Laptops</li>
                                                        <li>Notebooks</li>
                                                        <li>Tablets</li>
                                                        <li>All makes of phones</li>
                                                        <li>Cameras</li>
                                                    </ul>
                                                    <p class="font-weight-bold text-center">We also do repairs: 24-hour service.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-lg-6">
                                                <div class="border px-1">
                                                    <h5 class="font-italic text-center"><u>ELTONS REAL ESTATE</u></h5>
                                                    <ul>
                                                        <li>Largest selection of properties for rent or sale </li>
                                                        <li>Local or out of town</li>
                                                        <li>Personal service assured</li>
                                                    </ul>
                                                    <p>Moving abroad?  Want to rent out your property? Pop inside for an obligation-free chat with our agents.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="border px-1">
                                                    <h5 class="font-italic text-center"><u>Ned’s News</u></h5>
                                                    <ul>
                                                        <li>Wide range of newspapers and magazines</li>
                                                        <li>Home delivery available</li>
                                                        <li>Large selection of stationery items</li>
                                                        <li>Post Office services : (stamps and money orders)</li>
                                                        <li>Internet corner</li>
                                                    </ul>
                                                    <p class="font-weight-bold text-center">Open 7 days a week</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pt-1 bg-dark my-2"></div>

                                        <h5 class="mb-3">Read the text below and answer Questions 7-14.</h5>
                                        <div>
                                            <h5 class="text-center">KINGSWAY SHOPPING MALL OPENING CELEBRATION!</h5>
                                            <div class="row">
                                                <div class="col-2">
                                                    When:
                                                </div>
                                                <div class="col-10">
                                                    SATURDAY 23 JULY (doors open 10.00 am)
                                                </div>
                                                <div class="col-2">
                                                    Where:
                                                </div>
                                                <div class="col-10">
                                                    Kingsway Shopping Mall
                                                </div>
                                            </div>

                                            <p class="mb-0 mt-3">Programme of events:</p>
                                            <div class="row mb-2">
                                                <div class="col-4">
                                                    10.00 – 11.00 am
                                                </div>
                                                <div class="col">
                                                    <span class="font-weight-bold">Crazy Sale</span> <br> Everything in the Fashion Mall at 50% Discount.
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-4">
                                                    11.00
                                                </div>
                                                <div class="col">
                                                    Opening speech by the Lord Mayor of Kingsway
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-4">
                                                    11.15 – 12.30
                                                </div>
                                                <div class="col">
                                                    <span class="font-weight-bold">Talent Competition</span> <br>
                                                    For children aged  5 – 10 years old <br>
                                                    <span class="font-weight-bold">TO BE RECORDED LIVE ON KINGSWAY TV</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-4">
                                                    12.30 – 1.30 pm
                                                </div>
                                                <div class="col">
                                                    <span class="font-weight-bold">BUFFET LUNCH</span> <br>
                                                    A wide selection prepared by the Mall’s food outlets including
                                                    <ul class="mb-0">
                                                        <li>Curry dishes</li>
                                                        <li>Fish and chips</li>
                                                        <li>Pizza and spaghetti</li>
                                                        <li>Puddings and desserts</li>
                                                        <li>Vegetarian food also available.</li>
                                                        <li>Just $5.00 per person – children under 10 free.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-4">
                                                    1.30 – 2.30 pm
                                                </div>
                                                <div class="col">
                                                    <span class="font-weight-bold">3 on 1 Basketball Tournament</span> <br>
                                                    Ages: 12 – 16 years, boys and girls mixed teams
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-4">
                                                    2.30 – 4.00
                                                </div>
                                                <div class="col">
                                                    <span class="font-weight-bold">Fashion Show</span> <br>
                                                    Cat-walk models show off some of the Mall’s high fashion followed <br>
                                                    By Young Model of the Year competition
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-4">
                                                    4.00 – 6.00
                                                </div>
                                                <div class="col">
                                                    <span class="font-weight-bold">Pet Show</span> <br>
                                                    All animals welcome <br>
                                                    Prizes for top 3 pets
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-4">
                                                    6.00 – 9.00	
                                                </div>
                                                <div class="col">
                                                    <span class="font-weight-bold">SHOP TILL YOU DROP!</span> <br>
                                                    Fabulous discounts on all items in all stores
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-4">
                                                    9.00 – 10.00 pm
                                                </div>
                                                <div class="col">
                                                    <span class="font-weight-bold">FIREWORKS DISPLAY</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.general.test3.passage1')
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
                                                        <li>Selling brand name fashions in the ladies’ clothing department</li>
                                                        <li>Stocking shelves</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Working hours:</p>
                                                    <ul>
                                                        <li>Tues-Sun: 10.00 am – 9.00 pm</li>
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
                                                        <span>$300 per week</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <div class="border p-1">
                                                    <h5 class="font-italic text-center"><u>Job 3: DENTAL ASSISTANT</u></h5>
                                                    <p class="font-weight-bold mb-0">Job  description:</p>
                                                    <ul>
                                                        <li>Assisting dentist in surgery</li>
                                                        <li>Conducting clerical work e.g. patient registration</li>
                                                        <li>Cleaning and scaling teeth</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Working hours:</p>
                                                    <ul>
                                                        <li>Mon - Fri: 10.00 am  – 8.00 pm</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Academic Qualifications</p>
                                                    <ul>
                                                        <li>Graduate (any subject)</li>
                                                    </ul>
                                                    <p class="mb-0">
                                                        <span class="font-weight-bold">Salary:</span>
                                                        <span>$20,000 p.a.</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="border p-1">
                                                    <h5 class="font-italic text-center"><u>Job 4: JUNIOR REPORTER</u></h5>
                                                    <p class="font-weight-bold mb-0">Job  description:</p>
                                                    <ul>
                                                        <li>Writing reports for local newspaper</li>
                                                        <li>Conducting interviews</li>
                                                        <li>Editing and proofing reports</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Working hours:</p>
                                                    <ul>
                                                        <li>Mon – Sat 40 hrs/week (flexi)</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Qualifications</p>
                                                    <ul>
                                                        <li>Degree in any language</li>
                                                        <li>Excellent communication skills</li>
                                                    </ul>
                                                    <p class="mb-0">
                                                        <span class="font-weight-bold">Salary:</span>
                                                        <span>$15,000 p.a.</span>
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
                                                        <li>Selling educational books</li>
                                                        <li>Conducting writing workshops </li>
                                                        <li>Teacher training</li>
                                                        <li>Car provided</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Working hours:</p>
                                                    <ul>
                                                        <li>Mon – Sat, 10.00 am – 10.00 pm</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Academic Qualifications</p>
                                                    <ul>
                                                        <li>Degree in any subject</li>
                                                        <li>Post-grad cert (desirable)</li>
                                                    </ul>
                                                    <p class="mb-0">
                                                        <span class="font-weight-bold">Salary:</span>
                                                        <span>$15,000 p.a. + performance-related bonus
                                                    </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="border p-1">
                                                    <h5 class="font-italic text-center"><u>Job 6: TOUR GUIDE</u></h5>
                                                    <p class="font-weight-bold mb-0">Job  description:</p>
                                                    <ul>
                                                        <li>Driving tourist bus</li>
                                                        <li>Giving guided tours</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Working hours:</p>
                                                    <ul>
                                                        <li>Sat + Sun 08.00 am – 9.00 pm</li>
                                                    </ul>
                                                    <p class="font-weight-bold mb-0">Academic Qualifications</p>
                                                    <ul>
                                                        <li>Diploma in tourism and hotel management</li>
                                                        <li>Clean driver’s licence essential</li>
                                                        <li>Knowledge of other languages desirable</li>
                                                    </ul>
                                                    <p class="mb-0">
                                                        <span class="font-weight-bold">Salary:</span>
                                                        <span>$2,000 per month p.a.</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="pt-1 bg-dark my-2"></div>

                                        <div class="row">
                                            <div class="col-12">
                                                <h5 class="mb-3">Read the text below and answer Questions 21-27.</h5>
                                        
                                                <div class="border p-2 font-13">
                                                    <h4 class="text-center mt-0">Curriculum Vitae</h4>
                                                    <div class="row">
                                                        <div class="col-4 font-weight-bold">Name:</div>
                                                        <div class="col">
                                                            Pauline Jones
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4 font-weight-bold">d.o.b.:</div>
                                                        <div class="col">
                                                            19 February 1989
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4 font-weight-bold">Address:</div>
                                                        <div class="col">
                                                            17 Madison Square, Clevedon, Perth, 6148 Western Australia
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4 font-weight-bold">Contact number:</div>
                                                        <div class="col">
                                                            085 983426 (evenings only)
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4 font-weight-bold">e-mail:</div>
                                                        <div class="col">
                                                            pauline.jones@kmail.net
                                                        </div>
                                                    </div>
                                        
                                                    <br>
                                        
                                                    <div class="row">
                                                        <div class="col-4 font-weight-bold">Education:</div>
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col-4">2006 – 2010</div>
                                                                <div class="col">Clevedon High School</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-4">2011</div>
                                                                <div class="col">Vocational College Diploma in IT (computer programming)</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        
                                                    <br>
                                        
                                                    <div class="row">
                                                        <div class="col-4 font-weight-bold">Work experience:</div>
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col-4">2012 – now </div>
                                                                <div class="col">Austech IT Services Assistant programmer</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-4">2008 – 2010</div>
                                                                <div class="col">Selley’s Catering Services Waitress (Part-time)</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-4">2006 – 2008</div>
                                                                <div class="col">Clevedon Post Office Counter assistant (Evenings and weekends)</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        
                                                    <br>
                                        
                                                    <div class="row">
                                                        <div class="col-4 font-weight-bold">Other skills:</div>
                                                        <div class="col">
                                                            High degree of IT proficiency <br>
                                                            Confident and hard-working <br>
                                                            Able to work effectively as part of a team <br>
                                                            Flexible work hours <br>
                                                            Willing to work in any location
                                                        </div>
                                                    </div>
                                        
                                                    <br>
                                        
                                                    <div class="row">
                                                        <div class="col-4 font-weight-bold">Hobbies:</div>
                                                        <div class="col">
                                                            Swimming <br>
                                                            Reading fiction <br>
                                                            Playing guitar 
                                                        </div>
                                                    </div>
                                        
                                                    <br>
                                        
                                                    <div class="row">
                                                        <div class="col-4 font-weight-bold">Referees:</div>
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                                    Ms Justine Thyme <br>
                                                                    Clevedon Post Office <br>
                                                                    High Street <br>
                                                                    Clevedon <br>
                                                                    j.thyme@yahoo .com
                                                                </div>
                                                                <div class="col">
                                                                    Peter Jones <br>
                                                                    CEO Austech IT Services <br>
                                                                    The Mall <br>
                                                                    Shenton <br>
                                                                    peter@austech.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <p class="mb-0">I am available for interview at any time.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.general.test3.passage2')
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
                                        <h4>Calcutta</h4>
                                        <p class="text-justify">
                                            <span class="mr-2 font-weight-bold">A</span>
                                            Calcutta, the world’s fourth largest city, inhabited by over fifteen million people of radically different backgrounds, religions and beliefs, is  a hotbed of literature and the arts, of culture and fiercely defended political causes; it leaves no-one indifferent, this crowded, noisy melting-pot in which extreme poverty and a show of great wealth are but a hair’s breadth apart
                                        </p>
                                        <p class="text-justify">
                                            <span class="mr-2 font-weight-bold">B</span>
                                            Misunderstood, maligned and defended in turns, Calcutta is swamped by the fall-out of India’s population explosion, much of this being accounted for by urban migration, the search for opportunities in the large city.  Yet rather than being a drain on the country’s resources, this, the biggest city in India, is a huge, grimy, sweaty dynamo, its industrial, port and rail workers toiling away so that the Indian economy can flourish.  One of the chief commercial nerve centres of the country, it groans under a cloud of factory pollution, reverberates to the noise of steamer horns and, as the starting-point of two great rail networks, recovers twice daily after a rush-hour in which 1.6 million people pass through the chaos of the main railway station.
                                        </p>
                                        <p class="text-justify">
                                            <span class="mr-2 font-weight-bold">C</span>
                                            On the streets of Calcutta, one is besieged not just by beggars, but by shoe-shine boys, hawkers and salesmen of all descriptions.  Rich in the heart of it all, on the Esplanade, the late 19th century buildings such as the Oberoi Grand, the Indian Museum and a whole collection of once majestic public buildings, symbolise Calcutta’s faded grandeur.  They overlook the Maidan, a vast two-mile long and one-mile wide park, with the second largest cricket stadium and the only Ladies Golf Club in the world.  But describing the Maidan in terms of its monuments and sports facilities gives no indication as to how lively it is.  In the 19th century, fervent Bengali nationalists organised great fairs on the Maidan, with music, dance, theatre and lectures.  It was here that India’s first Nobel Laureate, the great Bengali literary figure Rabindranath Tagore, made his public debut, aged fifteen.
                                        </p>
                                        <p class="text-justify">
                                            <span class="mr-2 font-weight-bold">D</span>
                                            Nowadays the Maidan is still a twenty-four hour show, where Calcutta hangs out, exercises and relaxes.  Executive joggers make their sunrise appearance on the Maidan stage first, along with early morning, de-stressing yoga enthusiasts.  The West Bengal Mounted Police ride their horses here, the Army does a few morning drills, goats and sheep act as lawn mowers at the Calcutta Golf Club.  Cricket and football take over during the course of the day; and then in the evening couples and families promenade respectably, seeing and being seen in the Square opposite the Victoria Memorial.  At night Hindu sandhus or holy men and all kinds of musicians gather audiences near the Gandhi statue.
                                        </p>
                                        <p class="text-justify">
                                            <span class="mr-2 font-weight-bold">E</span>
                                            Calcutta, unlike Delhi and Agra, is not a historical city in the conventional sense of the word.  In fact it’s one of the world’s youngest major cities, rising from humble rural beginnings to be a major centre of the British Empire, over the course of 150 years.  Yet little more than three centuries ago, neither the British nor any other empire ruled this region; indeed the banks of the Hooghly River were the site of three fishing villages of mud huts, one of which was Kalikata, from which the name Calcutta emerged.  The city’s historic oblivion changed in 1690 when Job Charnock, an agent from the British East India Company, stopped at another of the three villages, Sutanati, the home of the traditional Bengali weavers and of  the Seths, the “merchant-bankers” of the day, who controlled the local textile trade.
                                        </p>
                                        <p class="text-justify">
                                            <span class="mr-2 font-weight-bold">F</span>
                                            Job Charnock and the British came to India as traders, at a time when the Mughals were supreme rulers.  They were concerned with securing raw materials and future markets.  Bengal was particularly attractive because of its legendary wealth of textiles, especially silk and cotton, though the Company also had its eye on the sugar, rice and salt.  It was almost by accident, or greed — in order to protect its investment that by the 1850s, almost the whole of the sub-continent had come under British control, with Calcutta  as headquarters.  They chose the three tranquil villages as the site of a port and settlement, at first renting them from the Mughal emperor Aurangzeb. Ships were the beginning of Calcutta’s entry into history, the Hooghly River the key to its fortunes.  The East Indiamen boats and clippers made way for motorised cargo vessels and in 1773 the British capital was transferred from Madras to Calcutta.
                                        </p>
                                        <p class="text-justify">
                                            <span class="mr-2 font-weight-bold">G</span>
                                            The people of Calcutta are hungry for the wonderful poetry, theatre, films, music and visual arts created there.  At two annual book-fairs, more than forty-five million Rupees worth of books are sold and there are over 500 stalls for second-hand books.  Around 60 quality films are made a year, whose emphasis is on stark realism, rather than the mythical romances of Bollywood.  Satyajit Ray earned international acclaim, as have Arpana Sen and several others, in turn influencing Bombay’s movie industry. Calcutta also has a cutting-edge theatrical movement and many temporary exhibitions of modern art galleries and the lively Academy of Fine Arts, as well as excellent permanent collections of traditional and modern art.  The Academy also displays fine examples of antique Bengali and other Indian textiles, for the sake of which one could say that an Empire was founded.  The solid colour, hand-woven silk sarees of West Bengal, with their rich borders are particularly coveted for marriage ceremonies.
                                        </p>
                                        <p class="text-justify">
                                            <span class="mr-2 font-weight-bold">H</span>
                                            The adventurous Bengalis have created at least two indigenous styles of cuisine, one rumoured to have strayed from the kitchens of the Nawabs, called Mughlai.  It is best sampled at the modest restaurants around the Nakhoda Mosque.  The other is the Bengali version of “food of the Sahib”, a delicious combination of two diverse worlds — of indigenous inspiration and that of the British Memsahibs.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.general.test3.passage3')
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
            url: "{{ route('store.gt-test-03') }}",
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