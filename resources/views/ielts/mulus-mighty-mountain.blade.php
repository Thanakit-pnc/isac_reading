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
            <h3>Mulu’s Mighty Mountain</h3>    
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
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">A</span>
                    <p>
                    Sarawak’s remote Mulu National Park is a well-established feature on the Borneo tourist map.  Its limestone caves are matchless, and the razor-edged pinnacles of Mount Api are a unique geological curiosity.  With good air links to the coast, the park now hosts more than a hundred visitors a week.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">B</span>
                    <p>
                    But very few of them pit their stamina against the park’s mountain.  Only about a dozen or so per year make the trek and it isn’t hard to see why.  For the tourist on a two week visit to tropical northern Borneo, there is little chance to acclimatize adequately to cope with such a physical challenge.  Also, at least three days are needed to accomplish the climb, and so only dedicated climbers even consider it.  National Park staff and guides are quick to point out the difficulties of the trek and tactfully deter the more speculative enquirers.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">C</span>
                    <p>
                    It isn’t that Mulu is a big mountain.  At a shade under 8,000 feet, its mere statistics would not put off the average weekend hill walker.  But there is more to this mountain than a set of figures.  In the words of a popular guide book: “Mulu National Park may now have an airport and a first-class hotel, but its mountain proves that Borneo is still Borneo.”  Here, there are still frontiers beyond the established tourist trails.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">D</span>
                    <p>
                    For a long time, the mountain was considered unclimbable.  The first recorded attempt was made by Spencer St John in 1857, when he was the British counsel in Brunei.  Refusing to be deterred by a difficult approach journey and marauding bands of headhunters, this redoubtable character reached an altitude of little more than 1,000 feet before lack of water drove him back. 
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">E</span>
                    <p>
                    In the following year, Spencer St John tried again, accompanied this time by Hugh Low, another distinguished British diplomat-explorer.  After much perseverance and hardship, the pair finally gave up at around 3,000 feet.  Both men were seasoned climbers, but the unmapped country was so rugged and the jungle so dense that they failed even to identify the right mountain. 
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">F</span>
                    <p>
                    We now know that in both failed attempts, the men had actually been climbing neighbouring Mt Api by mistake.  The two peaks are linked by a ridgeline which is still considered impassable.  In 1893, another Englishman named Ernest Hose embarked on his quest to conquer Mt Mulu.  By that time, the area had been properly surveyed and Hose at least got the right mountain.  But his 25-day expedition found their route to the summit blocked by sheer cliffs.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">G</span>
                    <p>
                    Mt Mulu had to wait until 1932 to be climbed successfully by a young Briton called Edward Shackleton.  His victory was made possible by the assistance of Tama Nilong, a local hunter who was engaged as the expedition’s guide.  When tracking a rhinoceros a few years before, Nilong had reached the mountain’s southwest ridge at a height of about 5,000 feet.  Nilong almost died in the process.  Shackleton’s attempt followed Nilong’s route to the ridge — from where a way was found clear to the summit.  The summit was finally reached after 13 days of incessant rain, cold nights and inadequate rations.  
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">H</span>
                    <p>
                    Shackleton assumed the explorer’s privilege of naming the summit.  He called it Oxford Peak after his university, but the name never stuck.  However, the route he and Nilong followed is essentially the same one used today — none other has ever been found.  But there are certain differences.  Whereas Shackleton’s party had to navigate and cut a path, today’s climber follows a known route.  And whereas Shackleton’s party had to scramble freeform up near vertical pitches, fixed ropes have been installed for safety and convenience.  There are even some shelter huts left behind by the Royal Geographical Society’s expedition of the late 1970’s.  But the 48 km trail to the top and back is still a grueling 3-day march.  The lower slopes of the mountain are cloaked in some of Borneo’s most impressive rainforest.  Giant, buttress-rooted dipterocarp trees form a 200 feet high canopy alive with raucous rhinoceros hornbills and squawking gibbons.  The leaf litter on the jungle floor embraces a busy leech population, but these creatures are actually more of an irritation than a danger.  
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">I</span>
                    <p>
                    Further up, after crossing two mountain rivers, one enters a very different, rather strange world — the mountain mossy forest. It is an oppressive, but peculiarly fascinating place, where an eerie atmosphere prevails.  Here, the trunks and limbs of twisted, stunted trees are coated with wet moss and the forest floor is spongy underfoot — where it is not knee deep in stagnant pools of dark water.  The atmosphere is like that of a dank cave.  The vegetation is so dense that the sunlight is blocked out, and the soggy trail seems like a long, wet tunnel.  Although unforgettable, the experience of climbing through this tangled obstacle course could never be described as lovely.  And finally, on a clear day, the summit offers views to the South China Sea and a large slice of North Borneo.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">J</span>
                    <p>
                    This is a hard trek, but the rewards and sense of satisfaction are commensurate with the degree of difficulty.  It is a taste of Borneo in the raw; the Borneo which the first European explorers encountered more than a century ago, a place where one is still unlikely to encounter a human footprint on the trail in front of you.
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
                            <label for="col-form-label" class="d-flex"><span class="mr-1">1.</span> ‘Mulu National Park is a well-established feature on the Borneo tourist map’ means</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-1" name="q1" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q1-1">a. Many tourists interested in Borneo are familiar with the Mulu National Park.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-2" name="q1" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q1-2">b. It is easy for tourists to find Mulu National Park on maps of Borneo. </label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-3" name="q1" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q1-3">c. There are good air routes linking the park with other tourist destinations.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-4" name="q1" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q1-4">d. It has unique limestone caves and some difficult mountains.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">2.</span> Why do few visitors climb the mountain?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-1" name="q2" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q2-1">a. Most visitors don’t stay long enough to climb the mountain.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-2" name="q2" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q2-2">b. The difficult climb requires at least three days.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-3" name="q2" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q2-3">c. The mountain is nearly 8000 feet high.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-4" name="q2" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q2-4">d. It takes two weeks to reach the summit.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">3.</span> What do we know about Spencer St John’s first attempt to reach the summit?.</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-1" name="q3" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q3-1">a. He was accompanied by a friend.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-2" name="q3" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q3-2">b. He was attacked by gangs of headhunters.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-3" name="q3" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q3-3">c. He ran out of water to drink.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-4" name="q3" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q3-4">d. He almost reached the summit, falling short by just 1000 feet.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">4.</span> What mistake did Spencer St John and Hugh Low make?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-1" name="q4" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q4-1">a. They were climbing the wrong mountain.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-2" name="q4" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q4-2">b. They came to an impassable ridgeline.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-3" name="q4" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q4-3">c. They stopped climbing at around 3000 feet.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-4" name="q4" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q4-4">d. They hadn’t taken a map with them to show them the way.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">5.</span> How did Shackleton manage to reach the summit while others had failed?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-1" name="q5" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q5-1">a. He was tracking a rhinoceros along the ridge.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-2" name="q5" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q5-2">b. He survived 13 days of heavy rain.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-3" name="q5" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q5-3">c. He had plenty of food and water with him.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-4" name="q5" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q5-4">d. He used a local guide.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 6 - 10</h4>
                <p class="mb-0">Identify the paragraphs which contain the following information.</p>
                <p class="mb-0">For Questions 6 to 10 select the letters A – J.</p>
                <p>N.B. You may use any letter more than once.</p>

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
                                    <td class="align-middle">A description of a dark and damp part of the forest.</td>
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
                                            <option value="J">J</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">7</td>
                                    <td class="align-middle">Attempts by the park staff to discourage tourists from climbing Mulu.</td>
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
                                            <option value="J">J</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">8</td>
                                    <td class="align-middle">The view from the summit.</td>
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
                                            <option value="J">J</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">9</td>
                                    <td class="align-middle">Some geographical features of the park</td>
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
                                            <option value="J">J</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">10</td>
                                    <td class="align-middle">An example of a wild animal found in the park.</td>
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
                                            <option value="J">J</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 11 - 14</h4>
                <p class="mb-0">Complete the following passage using words from the box. </p>
                <p>For Questions 11 – 14, select the letters a – h.</p>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="border">
                            <div class="row p-1">
                                <div class="col-md-4">a. mapped</div>
                                <div class="col-md-4">b. stunning</div>
                                <div class="col-md-4">c. food</div>
                                <div class="col-md-4">d. accommodation</div>
                                <div class="col-md-4">e. wooden</div>
                                <div class="col-md-4">f. tough</div>
                                <div class="col-md-4">g. guide</div>
                                <div class="col-md-4">h. exciting</div>
                            </div>
                        </div>

                        <div class="mt-3 line-height">
                        Shackleton assumed the explorer’s privilege of naming the summit.  He called it Oxford Peak after his university, but the name never stuck.  However, the route he and his  <span class="font-weight-bold">11</span> 
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
                        followed is basically the same as the one tourists follow today.  But there are certain differences.  Whereas Shackleton’s party had to navigate and cut a path, today’s climber follows a  <span class="font-weight-bold">12</span>
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
                        trail.  And whereas Shackleton’s party had to climb near vertical pitches, fixed ropes have been installed for safety and convenience.  There is even some basic  <span class="font-weight-bold">13</span>
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
                        left behind by the Royal Geographical Society’s expedition of the late 1970’s.  But the 48 km trail to the top and back is still a <span class="font-weight-bold">14</span>
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
                        3-day march.  
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
            url: "{{ route('store.exam-seventeen') }}",
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