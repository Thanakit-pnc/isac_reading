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
    .thead th {
        vertical-align: middle !important;
        font-weight: bold;
    }
    /* @media(max-width: 1280px) {
        input[type=text] {
            width: 75% !important;
        }
    } */
</style>
@stop

@section('content')
<form id="form-exam" method="post">
    <div class="row mt-1">
        <div class="col-md-6">
            <h3>General Training Test 05</h3>
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
                                    <div class="card-box height" id="sandbox">
                                        <h5 class="mt-0 mb-3">
                                            Read the text below and answer Questions 1-6.
                                        </h5>
                                        <div class="border border-dark px-2">
                                            <h4 class="text-center">SPONSORED RUN</h4>
                                            <p class="mb-0">
                                                <span class="font-weight-bold">Coldfield Community Centre </span> is once again holding its annual fund-raising 
                                            </p>
                                            <h4 class="text-center">FUN RUN DAY</h4>
                                            <p>
                                                All proceeds will go to charity. The beneficiary this year will be the Children’s Orphanage. We are hoping to raise sufficient money to build a new sports track for the children. 
                                                <span class="font-weight-bold">Target total: £55,000 </span>
                                            </p>
                                            <p class="text-center">Three different runs available: see flier for further details.</p>
                                            <p class="text-center font-weight-bold">So, come on, sign up today! Let’s see if we can beat last year’s record-breaking total of £49,000</p>
                                        </div>
                                        <br>
                                        <div class="border border-dark px-2">
                                            <h4 class="text-center">FUN RUN</h4>
                                            <div class="row mb-1">
                                                <div class="col-4 font-weight-bold">
                                                    When:	
                                                </div>
                                                <div class="col">
                                                    Sunday 14<sup>th</sup> October
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-4 font-weight-bold">
                                                    Start times:	
                                                </div>
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Marathon:
                                                        </div>
                                                        <div class="col-6">
                                                            06.30 am
                                                        </div>
                                                        <div class="col-6">
                                                            Half-marathon:
                                                        </div>
                                                        <div class="col-6">
                                                            07.00 am
                                                        </div>
                                                        <div class="col-6">
                                                            5 km Fun Run:
                                                        </div>
                                                        <div class="col-6">
                                                            07.30 am
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-4 font-weight-bold">
                                                    Clothing:		
                                                </div>
                                                <div class="col">
                                                    Fun Run <span class="font-weight-bold">T-shirt</span> (sponsored by Union Bank) Appropriate <span class="font-weight-bold font-italic">footwear</span> (well worn-in training shoes in preference to new footwear) Hat (advisable)
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-4 font-weight-bold">
                                                    Route map:	
                                                </div>
                                                <div class="col">
                                                    Refer to attachment. The route will be clearly sign-posted with stewards every 100 metres along route. Water kiosks will be stationed every 200 metres. Medical staff in attendance at checkpoints in case of emergencies. Free buses for half-marathon and Fun Run returning every fifteen minutes (last bus leaves 10 .30 am)
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-4 font-weight-bold">
                                                    Sausage sizzle:	
                                                </div>
                                                <div class="col">
                                                    Enjoy a BBQ after the event. Spectators and families welcome! (Meat sponsored by Mason’s Family Butchers; all drinks provided free by Pearson Mini-Mart)
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <div class="pt-1 bg-dark my-3"></div>

                                        <h5 class="mb-3">Read the following descriptions of new books and answer <br> Questions 7 – 14.</h5>

                                        <div class="border border-dark p-2">
                                            <h4 class="text-center mt-0">NEW BOOKS</h4>
                                            <p class="d-flex">
                                                <span class="mr-2">A.</span> An auto-biography by Jennie Smith, solo yachts-woman as she travelled around the globe from Perth to Southampton. An insight into the trials and tribulations of undertaking such a journey single-handedly.
                                            </p>
                                            <p class="d-flex">
                                                <span class="mr-2">B.</span> A cook book with a difference: how to survive in the outback using Aboriginal skills to find hidden food and water sources. Includes a list of edible and non-edible plants with illustrations.
                                            </p>
                                            <p class="d-flex">
                                                <span class="mr-2">C.</span> A biography of how a famous athlete battled a terminal illness and achieved number one status in his sport.
                                            </p>
                                            <p class="d-flex">
                                                <span class="mr-2">D.</span> A series of inspirational short stories about migrants who arrived in Australia with only the clothes they were wearing and achieved respect and wealth through hard work and their ability to integrate into their new country.
                                            </p>
                                            <p class="d-flex">
                                                <span class="mr-2">E.</span> Ever faced an emergency in the home and not know how to respond? This concise manual describes a number of real-life crises around the house and garden, with suggestions for dealing with them.
                                            </p>
                                            <p class="d-flex">
                                                <span class="mr-2">F.</span> Guidelines for families on a tight budget, including ways to reduce household bills and smart shopping techniques.
                                            </p>
                                            <p class="d-flex">
                                                <span class="mr-2">G.</span> A list of species which have become extinct over the last fifty years and strategies we need to put into place to protect currently endangered species.
                                            </p>
                                            <p class="d-flex">
                                                <span class="mr-2">H.</span> Suggestions for using plants to keep the temperatures around your home at a comfortable level. Includes a list of suitable trees and plants to suit a variety of different growing conditions for all states in Australia. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.general.test05.passage1')
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
                                    <div class="card-box height">
                                        <h5 class="mt-0 mb-3">Read the text below and answer Questions 15 to 21.</h5>
                                        <h4 class="mt-0">Qualities of a good CNA (Certified Nurse’s Assistant)</h4>
                                        <p class="text-justify">
                                            There’s a variety of different types of nurses you can be. The one at the top is a nurse practitioner (NP), which can be obtained with a master’s degree. NP’s are at or close the level of a doctor and can prescribe medicine, with concomitant high remuneration. Then there are registered nurses (RN), who are required to complete nursing school and pass the NCLEX (National Council Licensure Examination). RN’s can administer medication that a doctor prescribes.
                                        </p>
                                        <p class="text-justify">
                                            But if you want to be in the health care field and either don’t have the time or the money to be an NP or an RN, there is the CNA field instead. Being a certified nurse’s assistant can be done without the need of a college degree. All you need is a high school diploma and to be certified. The downside of the job is that it does not pay as well as an RN job would.
                                        </p>
                                        <p class="text-justify">
                                            Certified nurse’s assistants help registered nurses do their job. CNA’s play an important role by allowing doctors and nurses to concentrate on the care of the patient. While hospitals are in need of RN’s the most, there is also a need for qualified CNA’s as well.
                                        </p>
                                        <p class="text-justify">
                                            What does it take to be a good CNA? Do you wonder if you have what it takes? Here are some of the personal qualities that one must have if you would like to pursue a career as a certified nurse’s assistant.
                                        </p>
                                        <ul>
                                            <li>Feels satisfaction when you help someone to do something that they can’t do on their own.</li>
                                            <li>You can treat a patient like you would like to be treated if you were in their position.</li>
                                            <li>Certified Nurse’s Assistants need to have multi tasking and time management skills.</li>
                                            <li>CNA’s should genuinely care about the well-being of their patients.</li>
                                            <li>A CNA works with a nurse, so they should be a good team player.</li>
                                            <li>They should not mind having to clean up bodily fluids, shaving or bathing patients and changing linens.</li>
                                        </ul>
                                        <p class="text-justify">
                                            CNA’s should be prepared to handle all sorts of people, from different ages, genders and personalities. Some hospital guests, including those who’ve gone through a detoxification process (addressing addiction to alcohol, heroin, or prescription drugs) can be especially difficult to deal with. But a CNA needs to be prepared to handle them all, regardless of the circumstances.
                                        </p>

                                        <div class="pt-1 bg-dark my-3"></div>

                                        <div class="row">
                                            <div class="col-12">
                                                <h5 class="mt-0 mb-3">Read the text below and answer Questions 22 to 27.</h5>
                                                <h4 class="mb-0">Minimum Wage</h4>
                                                <p>The National Minimum Wage (NMW) is a minimum amount per hour that most workers in the UK are entitled to be paid. </p>
                                                <h4 class="mb-0">Entitlement to the NMW</h4>
                                                <p>Most workers in the UK over school leaving age are legally entitled to be paid at least the NMW and all employers have to pay it to you if you are entitled to it. It makes no difference:</p>
                                                <ul class="mb-0">
                                                    <li>if you are paid weekly or monthly, by cheque, in cash or in another way</li>
                                                    <li>if you work full time, part time or any other working pattern</li>
                                                    <li>if you work at your employer’s own premises or elsewhere</li>
                                                    <li>what size your employer is</li>
                                                    <li>where you work in the UK</li>
                                                </ul>
                                                <p>
                                                    You are entitled to the NMW even if you sign a contract agreeing to be paid at a lower rate. 
                                                </p>
                                                <h4 class="mb-0">Who is a worker for NMW purposes?</h4>
                                                <p>You will be a worker who is entitled to the NMW if:</p>
                                                <ul class="mb-0">
                                                    <li>you have a contract of employment</li>
                                                    <li>you have a contract to perform work or provide services personally for your employer</li>
                                                    <li>you are not self-employed under the contract</li>
                                                </ul>
                                                <p>The contract does not have to be in writing, it can be oral or implied. </p>
                                                <h4 class="mb-0">People not entitled to the National Minimum Wage</h4>
                                                <p>Below is a list of people who are not entitled to be paid the National Minimum Wage (NMW). </p>
                                                <h4 class="mb-0">Self-employed</h4>
                                                <p>If you are self-employed you are not entitled to receive the National Minimum Wage. If you believe you are a worker but your ‘employer’ says you are self-employed, they are responsible for proving you are self-employed if a National Minimum Wage dispute goes to an Employment Tribunal or civil court.</p>
                                                <h4 class="mb-0">Volunteers</h4>
                                                <p>
                                                    You are likely to be a volunteer if you do not have an employment or worker's contract (e.g. you are not a worker). It doesn’t matter who you volunteer for; it can be anyone, not just voluntary        organisations. Just because you are described as a volunteer does not necessarily mean that you are not entitled to the National Minimum Wage. If the arrangements under which you ‘volunteer’ add up to an employment or worker's contract, you will be entitled to the National Minimum Wage.
                                                </p>
                                                <h4 class="mb-0">Voluntary workers</h4>
                                                <p>
                                                    Voluntary workers are different to volunteers for National Minimum Wage purposes. For National Minimum Wage purposes, to be a voluntary worker you must have an employment contract or contract to perform work or provide services for a charity, voluntary organisation, associated fund raising body or statutory body. You should receive no more than limited expenses and benefits in kind and are not entitled to be paid the National Minimum Wage.
                                                </p>
                                                <h4 class="mb-0">Work experience</h4>
                                                <p>
                                                    If you are a student doing work experience as part of a higher or further education course you are not entitled to the National Minimum Wage if the work experience doesn’t last longer than a year.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.general.test05.passage2')
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
                                    <div class="card-box height">
                                        <h5 class="mt-0 mb-3">Read the text below and answer Questions 28 – 40.</h5>
                                        <h4 class="mt-0">The Dreamtime</h4>
                                        <p class="text-justify">
                                            According to Australian Aboriginal belief, all life as we know it today, human, bird, animal and fish, is part of one unchanging, related network whose origin goes back to what the Aborigines refer to as the Dreamtime. <br>
                                            Many years ago, the world was just a huge flat disc moving around in space.  On this disc, there were no mountains and no rivers, no trees waving their branches in the wind. There was no wind, no bird calls, nothing to break the dead silence. No life existed on the surface of this disc, but beneath the surface there were mysterious creatures moving around. Then, over a long period of time, these mysterious beings started to appear on the surface of the disc. Some of them broke through the surface of the plain, pushing the earth up as they came. Others came down from the sky, or from distant places across the sea. They took the shape of large animals or birds, but they behaved like human beings. They hunted, they fought each other, they lit fires and went on long journeys. The main difference between these creatures and humans was that wherever they stopped, wherever they camped, whatever event took place in their lives, they left behind them features of the landscape which still remain today.
                                            This was the creation time. <br>
                                            As these creatures hunted for food and dug for water, they created the great mountain ranges, the great rivers, the trees, and they brought night and day to the earth. These creatures made the whole world that the Aboriginal people could see. They sent animals wandering over the plain and birds flying in the sky. They introduced fire to the world. <br>
                                            Then one day, when the period of creation was over and the world was a beautiful place,  man wandered onto  the earth. The mysterious creatures returned to their Eternal Dreamtime, taking up places in rocks, trees, waterholes and also in the unborn spirits of all the animals and of the Aboriginal people. Therefore, the spirit of the Aborigine exists even before birth. It leaves the rock, tree or waterhole to enter the body of a woman, where it takes on human form. Since these spirits could also take the form of animals or plants, each human is brought into a relationship with an animal or plant species (called the 'totem') through their own spirit. An individual Aborigine will not normally injure or eat this totem creature since it provides a means of communication with the Ancestors.
                                        </p>
                                        <p class="text-justify">
                                            The Dreamtime is not only the ancient time of creation as happened many years ago. It continues as the 'Dreaming' in the spiritual lives of Aboriginal people today.  Ceremonies which involve dancing, singing and wearing costumes also help to maintain this communication with the Ancestors in order to guarantee the continuation of normal, everyday life: the seasons, the weather, enough food and water, and the prevention of disasters. <br>
                                            Art is also closely linked to such beliefs. For example, the Wandjina paintings in the Kimberleys in Western Australia are large drawings on rock. They are 5 metres in length and symbolize rain, thunder and lightning (the blood of life). The paintings have been kept in good condition ('alive') for thousands of years. If the Aborigines did not do this, then the paintings would disappear, taking with them the rain and fertility.
                                            Rock drawings also had a different function. Aborigines would draw the outline of an animal they wanted to hunt. Then they would beat the drawing with bushes in order to chase out the spirit, which would then take on animal form. The Aborigines could then capture the animal for food. In addition, by drawing the outline of an enemy, the Aborigine could inflict pain or even death on the enemy by chanting a special song. But not all art is linked to religion or magic. Some drawings were specifically for decoration; others were made for record-keeping or for story-telling. However, many of the drawings did not have a clear form and it was difficult to understand what the drawing was meant to be. This is because it was not the image in the drawing which was important so much as the meaning behind the drawing.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.general.test05.passage3')
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
            url: "{{ route('store.gt-test-05') }}",
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