@extends('layouts.app')

@section('css')
<style>
    .position-absolute {
        position: absolute;
        top: 50px;
        right: 20px;
        z-index: 10000;
    }
    
    select.example:disabled {
        background-color: #ccc !important;
    }
</style>
@stop

@section('content')
<form id="form-exam" method="POST">
    <div class="row mt-1">
        <div class="col-md-6">
            <h3>Coping with change</h3>    
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
                    <span class="font-weight-bold mr-2">A.</span>
                    <p>
                    Changes are never far from our door, whether it's breaking up with a partner, relocating to another area for any reason, having a best friend move away, the death of a relative, the loss of a job or a demotion or something that once meant a great deal to you but that has not turned out the way you hoped it would. Being prepared involves flexibility, strength of self-purpose and belief in one's own worth. Here are some ideas to help you. 
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">B.</span>
                    <p>
                    Life is full of unexpected surprises; don't let this be a lesson you refuse to learn. Death, loss, and unfamiliar situations will be a part of your life, no matter how much you may try to shelter or protect yourself from it. The major key to coping with change is to accept it as part of the reality of change and its inevitability.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">C.</span>
                    <p>
                    Once you have accepted the reality that you cannot change others and that the only way they can change you is if you let them, then you suddenly find yourself empowered. Empowerment is a key element of change acceptance and change management. When you feel empowered, you will roll with changes as a whale rolls through the ocean waves, commanding and unbothered by events but conscious of a need to roll. 
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">D.</span>
                    <p>
                    If you are grieving after a death, be it a person or a pet, do not let anyone tell you how long to grieve for. That decision is yours. It does make sense to make a decision in your own mind about what grieving you need to do, as your life cannot meander in sorrow forever. However, it is most clear that those who avoid grieving end up worse off and can experience break-downs and inability to cope at unexpected times. With grief for death, there will always be a piece of your heart missing but if you accept this and you are willing to carry the memories as lively as can be for the rest of your life, this will help you reach some acceptance of what has happened. If it is a job loss or some other personal loss that is not death, you still need mourning time to assuage your sadness and grief over a loss of something that once filled a large part of your life. Perhaps a small ending ceremony of some sort will help to give you a sense of closure and allow you to move forward. 
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">E.</span>
                    <p>
                    Change occurs but you do not need to be buffeted by it. Have a purpose in life, no matter what it is, that serves as your own personal anchor. Set personal goals and growth targets. While it is important to be open to change and to be flexible as to the possibilities that change opens up for you, it is also important to remain true to yourself and the dreams that you hold in life. This self-belief and your dreams are your anchor. Whatever else life throws in your way, these are the barometers by which you can measure your progress in the world and how you are reacting to change. Be prepared to question your methods of getting to where you wish to go but be less prepared to change your destination if it means dismantling the person you are inside.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">F.</span>
                    <p>
                    Remember the adage Every cloud has a silver lining. There is a reason for this saying - wise humans of the past knew well that change could herald both fear and opportunity. Once the fog of shock, despair and anger pass, look for the opportunities that exist in the change. There may be an amazing find, such as memoirs written by a lost one that were uncovered when his or her house was emptied out and these recall many wonderful times of all family members. Or the fact that there is a gain in time for those who have lost employment, time in which to reanalyze one's life and direction and make fruitful changes to oneself and one's sense of direction. If it's loss of employment, ask yourself if you enjoyed that job or were hanging on just to survive and keep things going. Job loss is often a springboard for people to dust off their dreams and find a new occupation that makes them happier. Look for the opportunities that you can make use of rather than continuously viewing the change as a deep loss from which time nothing will ever be the same.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">G.</span>
                    <p>
                    When a change thrusts you into complaining, it can be understandable for a short period of time. Friends and family will rally at the beginning of a misfortune. However, as time progresses, constant complaining turns you into your family's and friend's misfortune and does absolutely nothing to improve your state of affairs. Rather, you may alienate the very people who would be happy to support you through your hardships if you turn into a grouch and someone who feels permanently victimized and scolds the entire world for your troubles. A little ranting is fine at the beginning; a sourpuss for life is someone who becomes increasingly isolated. Do not allow this to happen to you. Learn How to Be an Optimist.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">H.</span>
                    <p>
                    You cannot remain rooted in the current or a past situation. It may feel comfortable and returning to a habit is always the simpler path of least resistance. Yet, change requires change from you as well and you will need to learn to resist turning back to the past and trying to recreate what once was. Forge on into the future and stand proud. Use what you have learned but don't let it use you.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-box font-16 text-dark overflow-custom">

                <h4 class="mt-0 mb-1">Questions 1 - 7</h4>
                <p class="mb-0">Match the summaries with the paragraphs.</p>
                <p class="font-weight-bold">Select the correct letter B – H.</p>

                <h5>Example</h5>

                <div class="d-flex justify-content-between">
                    <span>Some examples of change</span>
                    <span class="font-weight-bold d-flex">Paragraph 
                        <select class="form-control form-control-sm w-auto ml-2 example" disabled>
                            <option selected>A</option>
                        </select>
                    </span>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <span>1. Move on.</span>
                    <span class="font-weight-bold d-flex align-items-center">Paragraph 
                        <select name="q1" class="form-control form-control-sm w-auto ml-1">
                            <option value="">Select Answer</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                        </select>
                    </span>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <span>2. Be purposeful.</span>
                    <span class="font-weight-bold d-flex align-items-center">Paragraph 
                        <select name="q2" class="form-control form-control-sm w-auto ml-1">
                            <option value="">Select Answer</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                        </select>
                    </span>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <span>3. Be prepared.</span>
                    <span class="font-weight-bold d-flex align-items-center">Paragraph 
                        <select name="q3" class="form-control form-control-sm w-auto ml-1">
                            <option value="">Select Answer</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                        </select>
                    </span>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <span>4. Leave harping on behind you.</span>
                    <span class="font-weight-bold d-flex align-items-center">Paragraph 
                        <select name="q4" class="form-control form-control-sm w-auto ml-1">
                            <option value="">Select Answer</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                        </select>
                    </span>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <span>5. Take time to recoup.</span>
                    <span class="font-weight-bold d-flex align-items-center">Paragraph 
                        <select name="q5" class="form-control form-control-sm w-auto ml-1">
                            <option value="">Select Answer</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                        </select>
                    </span>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <span>6. Take control.</span>
                    <span class="font-weight-bold d-flex align-items-center">Paragraph 
                        <select name="q6" class="form-control form-control-sm w-auto ml-1">
                            <option value="">Select Answer</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                        </select>
                    </span>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <span>7. Look for the positives.</span>
                    <span class="font-weight-bold d-flex align-items-center">Paragraph 
                        <select name="q7" class="form-control form-control-sm w-auto ml-1">
                            <option value="">Select Answer</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                        </select>
                    </span>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 8 - 11</h4>
                <p class="mb-0">Do the following statements agree with the information given in the passage?</p>
                <p class="font-weight-bold">For Questions 8-11 select</p>
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
                        <p class="mb-1">8. Change is inevitable.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q8" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">9. Inner-strength is an important aspect in coping with change.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q9" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">10.	Grieving after a death in the family should be avoided.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q10" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">11.	The period of mourning after the death of a pet is usually less than that needed following the death of a family member.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q11" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 12 - 13</h4>
                <p>Choose the correct letter a, b, c, or d.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">12.</span> When setting personal goals to cope with change it is important</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q12-1" name="q12" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q12-1">a. to frequently change those goals to cope with change more easily.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q12-2" name="q12" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q12-2">b. not to question methods used to reach your targets.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q12-3" name="q12" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q12-3">c. keep your targets clearly in focus.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q12-4" name="q12" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q12-4">d. immerse yourself in a dream-world to cope with change.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">13.</span> Following the loss of a job, which of the following is the best strategy?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q13-1" name="q13" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q13-1">a. Find a new job as quickly as possible to avoid feeling depressed.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q13-2" name="q13" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q13-2">b. Take some time to evaluate the previous job before moving on.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q13-3" name="q13" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q13-3">c. Change your career to increase levels of happiness.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q13-4" name="q13" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q13-4">d. Don’t look for a new job but rather follow your dreams.</label>
                                </div>
                            </div>
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
            url: "{{ route('store.exam-eleven') }}",
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
            let radio = $(`input[type="radio"][name="${quiz}"]`);

            if(data.exam[quiz].status == 1) {
                $(`<span class="ml-2 text-success font-weight-bold">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
                select.addClass('border border-success');
            } else {

                $(`<span class="ml-2 text-success font-weight-bold">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
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