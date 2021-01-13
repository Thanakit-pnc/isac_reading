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
            <h3>Cloning</h3>    
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
                <h4 class="text-center mt-0">CLONING: HAS TECHNOLOGY GONE TOO FAR?</h4>
                <p>
                When Jim Armstrong presented his paper to the congregation of scientists at a meeting in Canada recently, the reaction was a positive round of congratulations; the members of the society even voted to award him the conference's first prize. Every scientist in the conference room applauded Armstrong’s contribution to medical science but nobody seemed keen to pursue the one fact that made this experiment - in which he started with 17 microscopic embryos and multiplied them like magic into 48 - any different from those which preceded it. When the news hit the front pages of the national press, everyone focused on the one aspect that the scientists at the Canadian conference seemed willing to overlook: the cells Armstrong had manipulated came not from plant-life or pigs, rabbits or rats, but from human beings.
                </p>
                <p>
                Once it was out, the news that human embryos had been cloned flew around the world with a speed normally associated with celebrity scandal. Journalists and reporters from all around the globe jammed the switchboard of Armstrong’s university department, where he is director of the in-vitro laboratory. Reaction to the story was varied but always extreme. A spokesman for the Japan Medical Association found it 'unthinkable'; the French President pronounced himself 'horrified'; and moralists all around the globe threatened a life of eternal damnation for anyone foolish enough to tamper with the natural order of things.
                </p>
                <p>
                It was the start of the fiercest scientific debate about medical ethics since the birth of the first test-tube baby 15 years earlier.  A line had been crossed; a taboo had been broken. Ethicists evoked nightmare visions of baby-farming, of clones cannibalised for spare parts. Critics decried the commercialisation of fertility technology, and protesters took to the streets, calling for an immediate ban on human-embryo cloning. In the meantime, scientists steeled themselves against a backlash they feared would obstruct a promising field of research, and close off options to the infertile couples for whom this experiment offered so much hope.
                </p>
                <p>
                The experiment at the centre of the controversy seems, in some ways, unworthy of the mass hysteria created by the publication of the results. It is nothing like the Jurassic Park sort of cloning that many people think of when they hear the story. That sort of cloning, in which genetic material from a mature individual is nurtured and grown into a living replica of the original, is far beyond the reach of today's limited science. There is a vast difference between cloning an embryo that is made up of immature, undifferentiated cells, and cloning adult cells that have already committed themselves to becoming skin, blood or bone. All cells contain within their DNA the information required to reproduce the entire organism, but in adult cells access to parts of that information has somehow been switched off. Scientists have no idea at present how to switch it back on.
                </p>
                <p>
                Nor does the Armstrong experiment involve genetic engineering - the cutting and splicing procedures by which DNA strands within cells are mixed and matched.  In Armstong’s experiment the cells were simply copied with their genes intact - a far simpler process. So simple, in fact, that animal husbandry scientists have used it to clone embryos from cattle, pigs and other animals for more than a decade. 
                </p>
                <p>
                What brought the research into the human arena was the rapidly-developing field of 
                in-vitro fertilisation. In clinics all around the world, couples who have trouble conceiving - either because the woman produces too few eggs or because the man produces too little sperm - can have their eggs and sperm mixed in a Petri dish, and the resulting embryos transferred to the woman's womb. The process, however, is distressingly hit-or-miss, and the odds of a successful pregnancy increase proportionately with the number of embryos used. But some couples cannot produce more than one embryo, perhaps because the man's sperm-count is low, or the woman's ovaries are running out of eggs. A woman with only one embryo has only about a 10% chance of successful impregnation through the in-vitro method. If that single embryo can be cloned and turned into three or four, then the chances of a successful pregnancy would increase significantly. This is the reason Armstrong and his colleagues began experimenting with cloning.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-box font-16 text-dark overflow-custom">
                <h4 class="mt-0 mb-1">Questions 1 - 5</h4>
                <p>Choose the correct letter a, b, c, or d.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">1.</span> What was the most significant difference between Armstrong’s experiment and those that had preceded it?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-1" name="q1" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q1-1">a. The fact that Hall had produced so many embryos.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-2" name="q1" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q1-2">b. The fact that Hall was presenting his findings to a conference of scientists.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-3" name="q1" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q1-3">c. The fact that the results were received so positively.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-4" name="q1" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q1-4">d. The fact that Armstrong had experimented on human embryos.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">2.</span> WWhat was the immediate reaction of the Press when the findings became known?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-1" name="q2" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q2-1">a. They were shocked.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-2" name="q2" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q2-2">b. They flew around the world.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-3" name="q2" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q2-3">c. They didn't think it was true.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-4" name="q2" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q2-4">d. They telephoned Armstrong’s place of work.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">3.</span> Why did protesters criticise Armstrong’s experiment?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-1" name="q3" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q3-1">a. It meant that test-tube babies could now be conceived.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-2" name="q3" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q3-2">b. It meant that babies could now be born on farms without parents.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-3" name="q3" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q3-3">c. It meant that embryos could be reproduced and used for spare parts.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-4" name="q3" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q3-4">d. It meant that human embryo cloning would now be banned.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">4.</span> Why is it impossible to clone mature cells?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-1" name="q4" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q4-1">a. All cells contain the information required to reproduce the entire organism.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-2" name="q4" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q4-2">b. Information required to reproduce mature cells is inaccessible to scientists.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-3" name="q4" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q4-3">c. Immature embryos are made up of undifferentiated cells.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-4" name="q4" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q4-4">d. Genetic material from a mature individual is far beyond the reach of today's limited science.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">5.</span> Why did Armstrong and his colleagues start experimenting with cloning?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-1" name="q5" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q5-1">a. So that they could present their findings to the conference in Canada.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-2" name="q5" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q5-2">b. So that they could improve the chances of successful IVF pregnancies.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-3" name="q5" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q5-3">c. So that they could reproduce a large number of people with similar genes.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-4" name="q5" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q5-4">d. So that they could experiment with genetic engineering.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 6 - 11</h4>
                <p class="mb-0">Do the following statements agree with the information given in the passage?</p>
                <p>For Questions 6 - 11 select</p>

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
                        <p class="mb-1">6. Participants at the conference in Canada responded to Armstrong’s research paper by conducting similar research.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q6" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">7. Armstrong’s research resulted in the conception of the first test-tube baby.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q7" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">8. Following the conference report, embryo research was banned for a period of time.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q8" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">9. In Armstrong’s research, his team were able to genetically modify the embryo cells.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q9" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">10. The chances of successfully producing a test-tube baby are quite low.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q10" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">11. In the majority of cases where the couple cannot produce more than one embryo, it is because the woman’s ovaries do not produce enough eggs.</p>
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
                <p class="mb-0">Complete the following sentences with words from the passage.</p>
                <p>Write <span class="font-weight-bold">NO MORE THAN TWO WORDS</span> for each answer.</p>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex mb-2">
                            <span class="mr-2">12. </span>
                            <p class="mb-0 d-inline-block">
                                Couples who cannot conceive naturally resort to medical assistance using the <input type="text" class="form-control form-control-sm w-auto d-inline-block" name="q12"> fertilization process.
                            </p>
                        </div>
                        <div class="d-flex">
                            <span class="mr-2">13. </span>
                            <p class="mb-0 d-inline-block">
                            In this process, the woman’s eggs and the man’s sperm is mixed together in a  <input type="text" class="form-control form-control-sm w-auto d-inline-block" name="q13"> and for this reason the resulting off-spring are sometimes referred to as ‘test-tube’ babies. 
                            </p>
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
            url: "{{ route('store.exam-ten') }}",
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
            let inputText = $(`input[type="text"][name="${quiz}"]`);
            let radio = $(`input[type="radio"][name="${quiz}"]`);

            if(data.exam[quiz].status == 1) {

                $(select).parent().append(`<span class="text-success mx-2">${data.exam[quiz].rightAnswer}</span>`);
                select.addClass('border border-success');

                $(`<span class="ml-2 text-success font-weight-bold">${data.exam[quiz].rightAnswer}</span>`).insertAfter(inputText);
                inputText.addClass('border border-success');

            } else {

                $(select).parent().append(`<span class="text-success mx-2">${data.exam[quiz].rightAnswer}</span>`);
                select.addClass('border border-danger');

                $(`<span class="ml-2 text-success font-weight-bold">${data.exam[quiz].rightAnswer}</span>`).insertAfter(inputText);
                inputText.addClass('border border-danger');

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