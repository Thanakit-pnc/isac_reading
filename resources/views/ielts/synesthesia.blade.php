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
            <h3>Synesthesia</h3>    
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
                <span class="font-weight-bold">A</span>
                Synesthesia is a neurological condition in which stimulation of one sensory or cognitive pathway leads to automatic, involuntary experiences in a second sensory or cognitive pathway. People who report such experiences are known as synesthetes. Recently, difficulties have been recognized in finding an adequate definition of synesthesia, as many different phenomena have been covered by this term and in many cases the term synesthesia seems to be a misnomer. A more accurate term for the phenomenon may be ideasthesia.
                </p>
                <p>
                <span class="font-weight-bold">B</span>
                Synesthesia can occur between nearly any two senses or perceptual modes, and at least one synesthete experienced synesthesia that linked all five senses. Given the large number of forms of synesthesia, researchers have adopted a convention of indicating the type of synesthesia by using the following notation x → y, where x is the "inducer" or trigger experience, and y is the "concurrent" or additional experience. For example, perceiving letters and numbers (collectively called graphemes) as coloured would be indicated as grapheme → colour synesthesia. Similarly, when synesthetes see colours and movement as a result of hearing musical tones, it would be indicated as tone → (colour, movement) synesthesia.
                </p>
                <p>
                <span class="font-weight-bold">C</span>
                In one common form of synesthesia, known as grapheme →  colour synesthesia or colour-graphemic synesthesia, letters or numbers are perceived as inherently coloured, while in ordinal linguistic personification, numbers, days of the week and months of the year evoke personalities. In spatial-sequence, or number form synesthesia, numbers, months of the year, and/or days of the week elicit precise locations in space (for example, 1980 may be "farther away" than 1990), or may have a (three-dimensional) view of a year as a map (clockwise or counterclockwise). Yet another recently identified type, visual motion → sound synesthesia, involves hearing sounds in response to visual motion and flicker. Over 60 types of synesthesia have been reported, but only a fraction have been evaluated by scientific research. Even within one type, synesthetic perceptions vary in intensity and people vary in awareness of their synesthetic perceptions. 
                </p>
                <p>
                <span class="font-weight-bold">D</span>
                While cross-sensory metaphors (e.g., "loud shirt," "bitter wind" or "prickly laugh") are sometimes described as "synesthetic", true neurological synesthesia is involuntary. It is estimated that synesthesia could possibly be as prevalent as 1 in 23 persons across its range of variants. Synesthesia runs strongly in families, but the precise mode of inheritance has yet to be ascertained. Synesthesia is also sometimes reported by individuals under the influence of psychedelic drugs, after a stroke, during a temporal lobe epilepsy seizure, or as a result of blindness or deafness. Synesthesia that arises from such non-genetic events is referred to as "adventitious synesthesia" to distinguish it from the more common congenital forms of synesthesia. Adventitious synesthesia involving drugs or stroke (but not blindness or deafness) apparently only involves sensory linkings such as sound - vision or touch - hearing; there are few, if any, reported cases involving culture-based, learned sets such as graphemes, lexemes, days of the week, or months of the year.
                </p>
                <p>
                <span class="font-weight-bold">E</span>
                Although synesthesia was the topic of intensive scientific investigation in the late 19th century and early 20th century, it was largely abandoned by scientific research in the mid-20th century, and has only recently been rediscovered by modern researchers. Psychological research has demonstrated that synesthetic experiences can have measurable behavioural consequences, while functional neuroimaging studies have identified differences in patterns of brain activation. Many people with synesthesia use their experiences to aid in their creative process, and many non-synesthetes have attempted to create works of art that may capture what it is like to experience synesthesia. Psychologists and neuroscientists study synesthesia not only for its inherent interest, but also for the insights it may give into cognitive and perceptual processes that occur in synesthetes and non-synesthetes alike.
                </p>
                <p>
                <span class="font-weight-bold">F</span>
                It was once assumed that synesthetic experiences were entirely different from synesthete to synesthete, but recent research has shown that there are underlying similarities that can be observed when large numbers of synesthetes are examined together. For example, sound-colour synesthetes, as a group, tend to see lighter colours for higher sounds and grapheme-colour synesthetes, as a group, share significant preferences for the colour of each letter (e.g., A tends to be red; O tends to be white or black; S tends to be yellow etc.). Nonetheless, there are a great number of types of synesthesia, and within each type, individuals can report differing triggers for their sensations, and differing intensities of experiences. This variety means that defining synesthesia in an individual is difficult, and the majority of synesthetes are completely unaware that their experiences have a name. However, despite the differences between individuals, there are a few common elements that define a true synesthetic experience.
                </p>
                <p>
                <span class="font-weight-bold">G</span>
                Synesthetes often report that they were unaware their experiences were unusual until they realized other people did not have them, while others report feeling as if they had been keeping a secret their entire lives, as has been documented in interviews with synesthetes on how they discovered synesthesia in their childhood. The automatic and ineffable nature of a synesthetic experience means that the pairing may not seem out of the ordinary. This involuntary and consistent nature helps define synesthesia as a real experience. Most synesthetes report that their experiences are pleasant or neutral, although, in rare cases, synesthetes report that their experiences can lead to a degree of sensory overload.  
                </p>
                <p>
                <span class="font-weight-bold">H</span>
                Though often stereotyped in the popular media as a medical condition or neurological aberration, many synesthetes themselves do not perceive their synesthetic experiences as a handicap. To the contrary, most report it as a gift—an additional "hidden" sense—something they would not want to miss. Most synesthetes become aware of their "hidden" and different way of perceiving in their childhood. Some have learned how to apply this gift in daily life and work. Synesthetes have used their gift in memorizing names and telephone numbers, mental arithmetic, but also in more complex creative activities like producing visual art, music, and theater.
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
                        <p class="mb-1">1.	A clear definition of the condition known as synesthesia is not yet available.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q1" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">2.	A number of people have experienced synesthesia involving three or more senses.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q2" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">3.	In ordinal linguistic personification, days of the week and months are represented by colours.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q3" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">4.	Although there are more than 60 different types of synesthesia, only a small proportion have been adequately researched.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q4" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">5.	Synesthetes often use metaphors to describe their experiences.</p>
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

                <h4 class="mt-0 mb-1">Questions 6 - 9</h4>
                <p>Choose the correct letter a, b, c, or d.</p>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">6.</span> What do we know about ‘adventitious synesthesia?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-1" name="q6" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q6-1">a. It is mostly inherited from family.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-2" name="q6" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q6-2">b. As many as 1 in 23 people are affected by it.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-3" name="q6" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q6-3">c. It often involves culture-based concepts such as days of the week and numbers.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-4" name="q6" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q6-4">d. It can sometimes occur through the use of mind-altering drugs.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label"><span class="mr-1">7.</span> Why was scientific research into synesthesia largely abandoned in the mid-20th century?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-1" name="q7" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q7-1">a. Because research showed that synesthetic experiences can have measurable consequences.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-2" name="q7" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q7-2">b. Because sufferers used their experiences to help them create works of art.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-3" name="q7" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q7-3">c. Because psychologists studied synesthesia only for its inherent interest value.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-4" name="q7" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q7-4">d. No specific reason is given.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label"><span class="mr-1">8.</span> Why is it difficult to define synesthesia in an individual?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-1" name="q8" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q8-1">a. Because scientists once believed that each synesthete experienced things individually.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-2" name="q8" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q8-2">b. Because similarities can be identified when large numbers of synesthestes are examined together.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-3" name="q8" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q8-3">c. Because sufferers report differing levels of intensity and varying trigger factors.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-4" name="q8" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q8-4">d. Because most synesthetes are unaware that their experiences have a name.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">9.</span> How might synesthetes describe their condition?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-1" name="q9" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q9-1">a. Helpful but sometimes tiring.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-2" name="q9" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q9-2">b. Always pleasant and enjoyable.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-3" name="q9" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q9-3">c. Unpleasant and difficult to define.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-4" name="q9" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q9-4">d. Unusual and secretive.</label>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 10 - 13</h4>
                <p class="mt-0 mb-1">Complete the statements.</p>
                <p>Type <span class="font-weight-bold">NO MORE THAN ONE WORD AND/OR A NUMBER</span> for each answer.</p>
                
                <div class="d-flex align-items-baseline">
                    <span class="mr-2">10.</span>
                    <div class="d-inline-block">
                    People with the medical condition known as ‘synesthesia’ are usually referred to as <input type="text" class="form-control w-auto d-inline-block m-0" name="q10">.
                    </div>
                </div>

                <div class="d-flex align-items-baseline my-3">
                    <span class="mr-2">11.</span>
                    <div class="d-inline-block">
                    The term ‘synesthesia’ is hard to define accurately and some researchers believe the term is a  <input type="text" class="form-control w-auto d-inline-block m-0" name="q11"> and should perhaps be replaced by the term ‘ideasthesia’.
                    </div>
                </div>

                <div class="d-flex align-items-baseline my-3">
                    <span class="mr-2">12.</span>
                    <div class="d-inline-block">
                    Researchers identify the different types of synesthesia by using symbols: x → y, where ‘x’ is the trigger or <input type="text" class="form-control w-auto d-inline-block m-0" name="q12"> experience, and ‘y’ is the additional experience.
                    </div>
                </div>

                <div class="d-flex align-items-baseline">
                    <span class="mr-2">13.</span>
                    <div class="d-inline-block">
                    Although some people describe cross-sensory <input type="text" class="form-control w-auto d-inline-block m-0" name="q13"> such as ‘loud shirt’ or ‘bitter wind’ as synesthetic, this not quite accurate.
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
    // $('input, select').attr('required', 'required');
    $('#form-exam').on('submit', function(e) {
        let timeSt = "{{ $timer }}";
        e.preventDefault();
        let data = $("#form-exam").serialize();
        $.ajax({
            type: "post",
            url: "{{ route('store.exam-twentyfour') }}",
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