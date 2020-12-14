@extends('layouts.app')

@section('css')
<style>
    .position-absolute {
        position: absolute;
        top: 50px;
        right: 20px;
        z-index: 10000;
    }
</style>
@stop

@section('content')
<form id="form-exam" method="POST">
    <div class="row mt-1">
        <div class="col-md-6">
            <h3>Let’s go fly a kite!</h3>    
        </div>
        <div class="col-md-6">
            @isset($timer)
                @if($timer == 1)
                <h4 class="text-right" id="time"><span class="text-danger">20</span> minutes <span class="text-danger">00</span> seconds</h4>
                @endif
            @endisset
        </div>
        <div class="col-md-6">
            <div class="card-box font-16 text-dark overflow-custom">
                <p>
                It is generally accepted that kites were first developed approximately 2,800 years ago in China, where materials ideal for kite building were readily available: silk fabric for sail material; fine, high-tensile-strength silk for flying line; and resilient bamboo for a strong, lightweight framework. The kite was said to be the invention of the famous 5th century BC Chinese philosophers Mozi and Lu Ban. By at least 549 AD paper kites were being flown, as it was recorded in that year a paper kite was used as a message for a rescue mission.  Ancient and medieval Chinese sources list other uses of kites for measuring distances, testing the wind, lifting men, signalling, and communication for military operations.  The earliest known Chinese kites were flat (not bowed) and often rectangular. Later, tailless kites incorporated a stabilizing bowline. Kites were decorated with mythological motifs and legendary figures; some were fitted with strings and whistles to make musical sounds while flying. 
                </p>
                <p>
                Kites were known throughout Polynesia, as far as New Zealand, with the assumption being that the knowledge diffused from China along with the people. Anthropomorphic kites made from cloth and wood were used in religious ceremonies to send prayers to the gods. Polynesian kite traditions are used by anthropologists to get an idea of early "primitive" Asian traditions that are believed to have at one time existed in Asia. 
                </p>
                <p>
                Kites were late to arrive in Europe, although windsock-like banners are known to have been used by the Romans. Stories of kites were first brought to Europe by Marco Polo towards the end of the 13th century, and kites were brought back by sailors from Japan and Malaysia in the 16th and 17th centuries. Although they were initially regarded as mere curiosities, but by the 18th and 19th centuries kites were being used as vehicles for scientific research. In 1750 in America, Benjamin Franklin published a proposal for an experiment to prove that lightning is electricity by flying a kite in a storm that appeared capable of becoming a lightning storm. It is not known whether Franklin ever performed his experiment, but on May 10, 1752, Thomas-François Dalibard of France conducted a similar experiment (using a 12 m iron rod instead of a kite) and extracted electrical sparks from a cloud. 
                </p>
                <p>
                Kites were also instrumental in the research and development of the Wright brothers when building the first airplane in the late 1800s. Over the next 70 years, many new kite designs were developed, and often patented. These included Eddy's tail-less diamond kite, the tetrahedral kite, the flexible kite, the sled kite, and the parafoil kite, which helped to develop the modern hang-gliders. In fact, the period from 1860 to about 1910 became the "golden age of kiting". Kites started to be used for scientific purposes, especially in meteorology, aeronautics, wireless communications and photography; many different designs of man-lifting kite were developed as well as power kites. Invention of powered airplane diminished interest in kites. World War II saw a limited use of kites for military purposes. Since then they are used mainly for recreation due to a vast improvement in technology.
                </p>
                <p>
                Designs often emulate flying insects, birds, and other beasts, both real and mythical. The finest Chinese kites are made from split bamboo (usually golden bamboo), covered with silk, and hand painted. On larger kites, clever hinges and latches allow the kite to be disassembled and compactly folded for storage or transport. Cheaper mass-produced kites are often made from printed polyester rather than silk. Tails are used for some single-line kite designs to keep the kite's nose pointing into the wind. Spinners and spinsocks can be attached to the flying line for visual effect. There are rotating wind socks which spin like a turbine. On large display kites these tails, spinners and spinsocks can be 15 m long or more. 
                </p>
                <p>
                Kites have been used for military uses in the past for signaling, for delivery of munitions, and for observation, by lifting an observer above the field of battle, and by using kite aerial photography. According to Samguk Sagi, in 637, Kim Yu-sin, a Korean general of Silla rallied his troops to defeat rebels by lofting a kite with a straw man which looked like a burning ball flying to the sky. Kites were also used by Admiral Yi of the Joseon Dynasty (1392-1910) of Korea, who commanded his navy with kites. His kites had specific markings directing his fleet to perform his order. 
                </p>
                <p>
                In more modern times the British Army used kites to haul human lookouts high into the air for observation purposes, using the kites developed by Samuel Franklin Cody. Barrage kites were used to protect shipping during the last Second World War. Kites were also used for anti-aircraft target practice. Kites and kytoons were used for lofting communications antenna. Submarines lofted observers in rotary kites. The Rogallo parawing kite and the Jalbert parafoil kite were used for governable parachutes (free-flying kites) to deliver troops and supplies. 
                </p>
                <p>
                Kites can be used for radio purposes, by kites carrying antennas for MF, LF or VLF-transmitters. This method was used for the reception station of the first transatlantic transmission by Marconi. Captive balloons may be more convenient for such experiments, because kite-carried antennas require a lot of wind, which may be not always possible with heavy equipment and a ground conductor. It must be taken into account during experiments, that a conductor carried by a kite can lead to a high voltage toward ground, which can endanger people and equipment, if suitable precautions (grounding through resistors or a parallel resonant-circuit tuned to transmission frequency) are not taken.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-box font-16 text-dark overflow-custom">
                <h4 class="mt-0 mb-1">Questions 1 - 5</h4>
                <p class="mb-0">Do the following statements agree with the information given in the passage?</p>
                <p class="font-weight-bold">For Questions 1-5 select</p>
                <div class="row">
                    <div class="col-md-3">
                        <div class="d-flex flex-column">
                            <strong class="font-weight-bold">TRUE</strong>
                            <strong class="font-weight-bold">FALSE</strong>
                            <strong class="font-weight-bold">NOT GIVEN</strong>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="d-flex flex-column">
                            <p class="mb-0">if the statement agrees with the information</p>
                            <p class="mb-0">if the statement contradicts the information</p>
                            <p class="mb-0">if there is no information on this</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <p class="mb-1">1. The first kites were made of paper.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q1" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">2. Some kites were decorated with pictures of famous people and creatures to frighten the enemy.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q2" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">3. As Chinese people migrated to other countries, they took their kite flying traditions with them.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q3" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">4. Kites were introduced into Europe by the Romans.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q4" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">5. In his experiment, the Frenchman Thomas-Francois Dalibard used a kite to extract electrical sparks from a cloud.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q5" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 6 - 10</h4>
                <p>Choose the correct letter a, b, c, or d.</p>

                <div class="form-group">
                    <label for="col-form-label"><span class="mr-1">6.</span> For which of the following purposes were kites <i>NOT</i> used in Ancient and Medieval China?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-1" name="q6" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q6-1">a. Working out the distance from one place to another.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-2" name="q6" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q6-2">b. As weapons to fight enemies.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-3" name="q6" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q6-3">c. Sending messages to other people.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-4" name="q6" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q6-4">d. Seeing how strong the wind was blowing.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">7.</span> What do we know about the kites brought back from Japan and Malaysia?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-1" name="q7" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q7-1">a. They were brought by Marco Polo after his travels to those countries.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-2" name="q7" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q7-2">b. They were used for scientific research.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-3" name="q7" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q7-3">c. They initially served no practical purpose.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-4" name="q7" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q7-4">d. They were used by Benjamin Franklin in an experiment.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">8.</span> When did people start to lose interest in the use of kites?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-1" name="q8" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q8-1">a. In the ‘golden age of kiting’.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-2" name="q8" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q8-2">b. When the Wright brothers were developing their first aircraft.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-3" name="q8" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q8-3">c. When a variety of man-lifting kites were developed.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-4" name="q8" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q8-4">d. Once aircraft with engines had been invented.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">9.</span> What was the purpose of the hinges and latches on larger kites?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-1" name="q9" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q9-1">a. They made it easier to transport the kites.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-2" name="q9" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q9-2">b. They reduced the cost of production.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-3" name="q9" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q9-3">c. They helped keep the kite’s nose pointing into the wind.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-4" name="q9" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q9-4">d. They made the kite look nicer.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">10.</span> How did Admiral Yi use kites in battle?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q10-1" name="q10" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q10-1">a. He sent weapons to his troops using kites.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q10-2" name="q10" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q10-2">b. He took photos of the enemy using a camera mounted on a kite.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q10-3" name="q10" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q10-3">c. He gave orders to his men using kites.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q10-4" name="q10" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q10-4">d. He fired burning balls at the enemy from kites high in the air.</label>
                        </div>
                    </div>
                </div>

                
                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-0">Questions 11 - 13</h4>
                <p class="mb-0">Complete the following sentences using words from the passage. </p>
                <p>write NO MORE THAN ONE WORD for each answer.</p>
                
                <div class="d-flex align-items-baseline">
                    <span class="mr-2">11.</span>
                    <div class="d-inline-block">
                    Marconi also used a kite to carry an aerial during his inaugural radio <input type="text" class="form-control w-auto d-inline-block m-0" name="q11"> between the United States and Britain.
                    </div>
                </div>

                <div class="d-flex align-items-baseline my-3">
                    <span class="mr-2">12.</span>
                    <div class="d-inline-block">
                    For this purpose, however, it may be better to use air-filled  <input type="text" class="form-control w-auto d-inline-block m-0" name="q12"> since a kite carrying a heavy antenna needs a lot of wind to keep it in the air.
                    </div>
                </div>

                <div class="d-flex align-items-baseline">
                    <span class="mr-2">13.</span>
                    <div class="d-inline-block">
                    Another risk of using kites in this way is the fact that the ground conductor carried by the kite can send a high <input type="text" class="form-control w-auto d-inline-block m-0" name="q13"> towards the ground, putting the lives of people at risk.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success">Show Answer</button>
            <button type="button" id="reset" class="btn btn-secondary">Reset</button>
            <a href="{{ url('/') }}" type="button" class="btn btn-primary"><i class="fa fa-home"></i> Home</a>
        </div>
    </div>
</form>

<!-- Modal Show Score -->
<div class="modal fade" id="modal-score" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header py-1 bg-primary">
                <h4 class="modal-title text-white" id="myCenterModalLabel">Score result</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <h3 id="score" class="text-center"></h3>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
@isset($timer)
    @if($timer == 1)
    <script src="{{ asset('public/js/timer.js') }}"></script>
    @endif
@endisset
<script>
    $('input, select').attr('required', 'required');
    $('#form-exam').on('submit', function(e) {
        let timeSt = "{{ $timer }}";
        e.preventDefault();
        let data = $("#form-exam").serialize();
        $.ajax({
            type: "post",
            url: "{{ route('store.exam-fifteen') }}",
            data: {_token: "{{ csrf_token() }}", data},
            dataType: "json",
            success: function(data) {
                if(data.message == 'success') {
                    showAnswer(data.results);
                    $('button[type="submit"]').hide();
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
        $('#modal-score').modal('show');
        $('#modal-score').find('#score').text(data.total);

        for(let quiz in data.exam) {

            let select = $(`select[name="${quiz}"]`);
            let inpuText = $(`input[type="text"][name="${quiz}"]`)
            let radio = $(`input[type="radio"][name="${quiz}"]`);

            if(data.exam[quiz].status == 1) {
                $(`<span class="ml-2 text-success font-weight-bold">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
                select.addClass('border border-success');

                $(`<span class="ml-2 text-success font-weight-bold">${data.exam[quiz].rightAnswer}</span>`).insertAfter(inpuText);
                inpuText.addClass('border border-success');
            } else {
                $(`<span class="ml-2 text-success font-weight-bold">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
                select.addClass('border border-danger');

                $(`<span class="ml-2 text-success font-weight-bold">${data.exam[quiz].rightAnswer}</span>`).insertAfter(inpuText);
                inpuText.addClass('border border-danger');
            }

            radio.each((idx, item) => {
                if ($(item).is(":checked")) {
                    if($(item).val() == data.exam[quiz].rightAnswer) {
                        $(item).next().addClass('text-success');
                    } else {
                        $(item).next().addClass('text-danger');
                    }
                } else {
                    if($(item).val() == data.exam[quiz].rightAnswer) {
                        $(item).next().addClass('text-success');
                    } 
                }   
            });
        }
    }
</script>
@stop