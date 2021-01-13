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
            <h3>Hot Air Ballooning</h3>    
        </div>
        <div class="col-md-6">
            @isset($timer)
                @if($timer == 1)
                <h4 class="text-right" id="time"><span class="text-danger">20</span> minutes <span class="text-danger">00</span> seconds</h4>
                @endif
            @endisset
        </div>
        <div class="col-md-6">
            <div class="card-box font-16 text-dark overflow-custom sandbox">
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">A</span>
                    <p>
                    Rising before the alarm clock (set at an unfriendly 5:00 a.m.) was activated, we washed and dressed, listening in silent anticipation to the awakening forest.  Our torch beams probed the darkness as we walked from our tent to the balloon launch site.  Extreme caution was required on the short journey because the path we were following was often used by hippos returning from a night’s foraging and the odd Cape Buffalo out for a nocturnal stroll.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">B</span>
                    <p>
                    Finally we emerged into a huge, mist shrouded clearing and there before us lay three gigantic balloons.  Dawn brushed the treetops with the first light of day and our sense of expectation and excitement climbed with the morning sun. Suddenly the clatter of petrol engines obliterated the early hush.  The engines were necessary to power the huge fans used to force large amounts of air into the balloons’ envelopes.  This was just the first stage in the balloon-inflation process and while the fans were running, the ground crews and pilots meticulously checked all the lines and rigging — a reassuring sight for us prospective passengers!
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">C</span>
                    <p>
                    After about 10 minutes of inflation, the balloons began to take shape.  The welcome silence following the fans being shut down was suddenly filled by a whoosh of gas.  Then came a glorious burst of flame as the gas was ignited. Adrenaline shot through my body.  I had chosen to position myself inside one of the balloons’ envelopes in order to capture on film the dramatic colours of the burner’s incoming flame. After a few quick shots, I indicated to the pilot my desire not to be barbecued and made a quick exit.  By this time, the balloon was approaching its classical vertical position.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">D</span>
                    <p>
                    At last! The moment we’d all been waiting for!  The pilot instructed the excited passengers — congregated here from every corner of the globe — to climb into the balloon’s wicker basket. Part of a group of ten passengers, we listened intently to our pilot’s briefing.  There was no seat belt and no-smoking sign to observe, and the operation of mobile phones and CD players would not affect the technology of this particular aircraft.  Landing was to be the big thing.  We were instructed, quite sternly, that as the balloon descended, we must crouch down facing backwards — and HANG ON.  We were obliged to actually practise this procedure so that those who understood little or no English would be left in no doubt as to what was required.  At that stage, none of us could foresee just how exciting our landing would be.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">E</span>
                    <p>
                    A few final bursts of colourful flame brought the balloon — and us — to the point of lift-off.  Our hearts thumped with excitement at the spectacular sight of the other balloons rising — and then it was our turn.  The wicker basket scuffed along the ground until suddenly we were drawn upward towards the waiting heavens. There are no words to describe the feeling of those first few moments of flight.  As we rose into the warmth of the sun, we were gently gathered up by the wind and carried towards the romance of the vast African Plains.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">F</span>
                    <p>
                    Only an intermittent burst of flame interrupted the profound silence as the pilot adjusted the temperature of the air inside the balloon.   The basics of balloon flight are easy — hotter air to climb, cooler air to descend.  It takes great skill and practice, however, to anticipate what is required.  Wind alone was our propulsion, and we were fortunate to be wafting along with a gentle current that allowed us time to absorb all the magnificence around us.  The Serengeti and Masai Masai ecological systems are fascinating enough to behold from a car, but from a balloon’s vantage point, they are truly awe-inspiring.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">G</span>
                    <p>
                    Little could escape the eagle-eyed onslaught of ten pairs of eyes.  We had already seen elephants, buffaloes, giraffes and various antelopes, and even a pack of Branded Mongooses was pointed out when we were not so high up. Lions!  Yes!  There they were below, moving in our direction towards the forest.  We glided over the meandering Mara River, home to the greatest concentration of hippopotamus in the world.  Viewed from above, the thick riverine forest was a stunning sight, and we watched colourful canopy-dwelling birds rarely seen from ground level dart from cover to cover.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">H</span>
                    <p>
                    Eventually all things come to an end — alas, even good things.  Up ahead loomed the plains where we would make our touchdown. Skilfully manoeuvring the balloon only a metre above the ground, its huge shadow cast westwards, the pilot instructed us to prepare for the landing.  The wind had picked up since early morning and we were now travelling at a fast jogging pace.  The pilot rounded off the order to prepare for landing as instructed with a warning that we may well bounce a few times before finally coming to rest. 
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">I</span>
                    <p>
                    We did as we had been told.  We crouched down, we hung on ... and we bounced several times.  Lying on my back, taking photos upside down, I watched the pilot determinedly pull the ripcord to release the hot air.  The balloon envelope collapsed.  A mix of grass, dust and the odd stone flew into the basket as we were dragged across the ground.  Eventually we slowed down and came to a halt.  The tension of those last few moments was suddenly released in a torrent of cheering and laughter.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-box font-16 text-dark overflow-custom">
                <h4 class="mt-0 mb-1">Questions 1 - 5</h4>
                <p>Choose the correct letter a, b, c, or d.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">1.</span> What possible dangers were there on the way to the balloon site?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-1" name="q1" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q1-1">a. The fact they needed torches to find their way.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-2" name="q1" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q1-2">b. It was very early in the morning and they hadn’t had enough sleep.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-3" name="q1" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q1-3">c. The fact they were staying in a tent.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-4" name="q1" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q1-4">d. The risk of meeting wild animals.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">2.</span> Why do you think the passengers needed to be reassured?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-1" name="q2" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q2-1">a. They were worried that something might go wrong with the equipment on the balloon.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-2" name="q2" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q2-2">b. They were worried about the balloon-inflation process.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-3" name="q2" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q2-3">c. They were worried about the weather.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-4" name="q2" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q2-4">d. They were worried about the gas.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">3.</span> Why did they light the gas?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-1" name="q3" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q3-1">a. It was for a barbecue breakfast after the flight.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-2" name="q3" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q3-2">b. Gas was used to heat the air and so raise the balloon.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-3" name="q3" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q3-3">c. The morning was cold and so it kept them warm.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-4" name="q3" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q3-4">d. So that they had more light in order to take photographs.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">4.</span> Explain what the writer means by ‘after a few quick shots’?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-1" name="q4" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q4-1">a. After shooting some of the wildlife.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-2" name="q4" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q4-2">b. After a few bursts of flame from the gas.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-3" name="q4" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q4-3">c. After throwing something onto the gas fire.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-4" name="q4" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q4-4">d. After quickly taking some photographs.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">5.</span> What do we know about the passengers?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-1" name="q5" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q5-1">a. They all spoke English well.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-2" name="q5" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q5-2">b. There was a mix of nationalities.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-3" name="q5" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q5-3">c. Some of them listened to the pilot’s briefing.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-4" name="q5" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q5-4">d. They all knew each other.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 6 - 10</h4>
                <p class="mb-0">Identify the paragraphs which contain the following information.</p>
                <p>For Questions 6 to 10 select the letters A – I.</p>

                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-sm text-dark">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th class="font-weight-bold text-center">Paragraph</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">6</td>
                                    <td class="align-middle">To contrast a flight in an aeroplane.</td>
                                    <td class="position-relative">
                                        <select class="form-control" name="q6">
                                            <option value="">Select Answer</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="G">G</option>
                                            <option value="H">H</option>
                                            <option value="I">I</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">7</td>
                                    <td class="align-middle">Examples of animals they saw.</td>
                                    <td class="position-relative"> 
                                        <select class="form-control w-100" name="q7">
                                            <option value="">Select Answer</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="G">G</option>
                                            <option value="H">H</option>
                                            <option value="I">I</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">8</td>
                                    <td class="align-middle">The emotions of the passengers as they left the ground.</td>
                                    <td class="position-relative">
                                        <select class="form-control w-100" name="q8">
                                            <option value="">Select Answer</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="G">G</option>
                                            <option value="H">H</option>
                                            <option value="I">I</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">9</td>
                                    <td class="align-middle">A bumpy landing.</td>
                                    <td class="position-relative">
                                        <select class="form-control w-100" name="q9">
                                            <option value="">Select Answer</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="G">G</option>
                                            <option value="H">H</option>
                                            <option value="I">I</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">10</td>
                                    <td class="align-middle">People making preparations for the flight.</td>
                                    <td class="position-relative">
                                        <select class="form-control w-100" name="q10">
                                            <option value="">Select Answer</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="G">G</option>
                                            <option value="H">H</option>
                                            <option value="I">I</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 11 - 14</h4>
                <p class="mb-0">Complete the following passage using words from the box.</p>
                <p>For Questions 11 – 14, select the letters a – h.</p>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="border">
                            <div class="row p-1">
                                <div class="col-md-4">a. stopped</div>
                                <div class="col-md-4">b. worried</div>
                                <div class="col-md-4">c. landing</div>
                                <div class="col-md-4">d. disappeared</div>
                                <div class="col-md-4">e. ready</div>
                                <div class="col-md-4">f. warned</div>
                                <div class="col-md-4">g. increased</div>
                                <div class="col-md-4">h. grounding</div>
                            </div>
                        </div>

                        <div class="mt-3 line-height">
                        Eventually all things come to an end.  In front of us we saw the flat area where we would make our <span class="font-weight-bold">11</span> 
                        <div class="d-inline-block position-relative">
                            <select name="q11" class="form-control">
                                <option value="">Select Answer</option>
                                <option value="A">a</option>
                                <option value="B">b</option>
                                <option value="C">c</option>
                                <option value="D">d</option>
                                <option value="E">e</option>
                                <option value="F">f</option>
                                <option value="G">g</option>
                                <option value="H">h</option>
                            </select>
                        </div>
                        . With the balloon hovering just one metre above the ground, the pilot instructed us to get  <span class="font-weight-bold">12</span>
                        <div class="d-inline-block position-relative">
                            <select name="q12" class="form-control w-auto">
                                <option value="">Select Answer</option>
                                <option value="A">a</option>
                                <option value="B">b</option>
                                <option value="C">c</option>
                                <option value="D">d</option>
                                <option value="E">e</option>
                                <option value="F">f</option>
                                <option value="G">g</option>
                                <option value="H">h</option>
                            </select>
                        </div>
                        for the landing.  The wind had <span class="font-weight-bold">13</span>
                        <div class="d-inline-block position-relative">
                            <select name="q13" class="form-control w-auto">
                                <option value="">Select Answer</option>
                                <option value="A">a</option>
                                <option value="B">b</option>
                                <option value="C">c</option>
                                <option value="D">d</option>
                                <option value="E">e</option>
                                <option value="F">f</option>
                                <option value="G">g</option>
                                <option value="H">h</option>
                            </select>
                        </div>
                        since early morning and we were now travelling at a fast running pace.  Just before we landed, the pilot <span class="font-weight-bold">14</span>
                        <div class="d-inline-block position-relative">
                            <select name="q14" class="form-control w-auto">
                                <option value="">Select Answer</option>
                                <option value="A">a</option>
                                <option value="B">b</option>
                                <option value="C">c</option>
                                <option value="D">d</option>
                                <option value="E">e</option>
                                <option value="F">f</option>
                                <option value="G">g</option>
                                <option value="H">h</option>
                            </select>
                        </div>
                        the passengers that we may well bounce a few times before finally coming to rest. He wasn’t wrong!
                        </div>
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
            url: "{{ route('store.exam-twelve') }}",
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
            let radio = $(`input[name="${quiz}"]`);

            if(data.exam[quiz].status == 1) {

                $(`<span class="ml-2 text-success font-weight-bold" style="position: absolute; top: 50%; right: 30px; transform: translateY(-50%);">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
                select.addClass('border border-success');

            } else {

                $(`<span class="ml-2 text-success font-weight-bold" style="position: absolute; top: 50%; right: 30px; transform: translateY(-50%);">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
                select.addClass('border border-danger');

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