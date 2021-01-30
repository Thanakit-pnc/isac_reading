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
            <h3>The wealth of happiness</h3>    
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
                <p>
                It comes as no surprise to learn from a study published this week that, although Britons are twice as rich as they were in 1987, they are no happier.
                </p>
                <p>
                The lack of relationship between wealth and happiness has long been common knowledge, and the knowledge itself has long been a source of happiness to moralisers who like the fact that money is not life's answer. There are, though, two confusions involved in the idea that anything significant can be discovered by looking for a correlation between wealth and happiness. One concerns the nature of happiness, the other the nature of wealth. If you could arrange for Britain's population to make a sudden return to 1987 levels of income and possessions, almost everybody would be unhappy. As wealth increases, so do expectations, and so does being accustomed to the lifestyle that the new level of wealth brings. For most people it is likely that wealth has to improve in order for their happiness level to remain constant; if their wealth were to decline, so would their happiness.
                </p>
                <p>
                The important point here is that the concept of ''happiness'' is too vague and intangible a notion to be truly helpful. Instead of talking about happiness, one should talk about satisfaction, achievement, interest, engagement, enjoyment, growth and the constant opening of fresh possibilities. Very often the activities that yield these things are challenging, even effortful. A person in the midst of doing something objectively worthwhile might not describe himself as happy - usually he will be too absorbed to notice - and only later will realise that what it is to be happy is to be absorbed in something worthwhile.
                </p>
                <p>
                If mere happiness were the point, we could easily achieve it for everyone by suitably medicating the water supply with ‘happy drugs’. Such a state of induced, temporary happiness, however, is not the same as a conscious feeling of well-being. And once the effects wear off, the euphoria is reversed and depression sets in. But it has often been well said that the surest way to unhappiness is to seek happiness directly. Instead, happiness comes as a sideline of other endeavours that in themselves bring satisfaction and a sense of achievement. It is like the dot of light in a dark room that one cannot see when looking directly at it, but notices out of the corner of one's eye on looking away. 
                </p>
                <p>
                The other confusion concerns wealth. If a person has a million pounds in the bank and never touches a penny of it, or a huge mansion and never occupies it, it is the same as if he had neither the money nor the house. What this shows is that wealth is not so much what one has, but what one does with it.  A man who has a thousand pounds and spends it on a wonderful trip to the Galapagos Islands is a rich man indeed: the experiences, the things learnt, the differences wrought in him by both, are true wealth. 
                </p>
                <p>
                If you would like to know how rich a person is, you need to ask not how much money he has, but how much he has spent. This idea is associated with the wise teaching that the philosophers and poets of antiquity never tired of repeating: that a rich person is he who has enough. If his needs are modest and his habits frugal, then so long as his resources provide enough to meet both, he is rich.
                </p>
                <p>
                But the man is poor who, despite owning millions, restlessly yearns for more because he feels he cannot have enough, and in particular who lacks the things money cannot buy - ah yes, for these unpurchasable treasures can never be left out of the picture: friendship, love, a sound digestion and a reliable, natural ability to sleep at nights, are indispensable to the possibility of happiness, if not directly supplying it.
                </p>
                <p>
                In thinking about happiness and wealth, one should avoid using the words ''happiness' and ''wealth'', and think instead of more accurate and more substantial words that denote what one truly thinks these things are. To mention satisfaction and achievement is to suggest activity of some kind - doing and making, helping, learning, changing - which might seem obvious to most, but is chosen by surprisingly few. Ruskin tellingly remarked ''a man wrapped up in himself makes a very small parcel'', and this, alas, characterises too many people. The limited surface area of such parcels does not attract much of the golden dust of satisfaction. 
                </p>
                <p>
                The true equation between happiness and wealth is this: that happiness is wealth. Unlike wealth in the form of money and possessions, such happiness can never be quantified, only felt; and if one has it, it does not matter if the level of it always stays the same.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-box font-16 text-dark overflow-custom">
                <h4 class="mt-0 mb-1">Questions 1 - 5</h4>
                <p class="mb-0">Do the following statements agree with the information given in the passage?</p>
                <p>For Questions 1-5, select</p>
                <div class="row justify-content-center">
                    <div class="col-md-auto">
                        <div class="d-flex flex-column">
                            <strong class="font-weight-bold">TRUE</strong>
                            <strong class="font-weight-bold">FALSE</strong>
                            <strong class="font-weight-bold">NOT GIVEN</strong>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="d-flex flex-column">
                            <p class="mb-0">if the statement agrees with the information</p>
                            <p class="mb-0">if the statement contradicts the information</p>
                            <p class="mb-0">if there is no information on this</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <p class="mb-1">1. Britons are unhappier now than they were in 1987.	</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q1" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">2. The fact that there is no correlation between money and happiness has only recently been discovered.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q2" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">3.	If Britons turned back the clock to 1987 levels of wealth, most people would not be happy.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q3" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">4.	In general, happiness does not result from inactivity.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q4" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">5.	People who try hard to be happy are usually unhappy.</p>
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
                    <label for="col-form-label" class="d-flex"><span class="mr-1">6.</span> According to the writer, which of the following brings true happiness?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-1" name="q6" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q6-1">a. Owning a large house and not living in it.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-2" name="q6" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q6-2">b. Having a lot of money in the bank and not spending it.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-3" name="q6" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q6-3">c. Going on a long trip to a foreign country and spending all your money.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-4" name="q6" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q6-4">d. Spending money and using the positive experiences gained.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">7.</span> According to the wise men in history, which of these statements best defines wealth?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-1" name="q7" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q7-1">a. Having so much money that you never need to worry about it.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-2" name="q7" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q7-2">b. Spending as much money as you can without saving it for later.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-3" name="q7" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q7-3">c. Not needing to spend more than you have.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-4" name="q7" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q7-4">d. Spending more money than you have in the bank.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">8.</span> According to the writer, why do rich people often feel unhappy?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-1" name="q8" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q8-1">a. Because they can’t buy enough things to make them happy.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-2" name="q8" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q8-2">b. Because things that make people happy cannot usually be bought.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-3" name="q8" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q8-3">c. Because they worry about their money all the time and this makes them unhappy.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-4" name="q8" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q8-4">d. Because they don’t feel that they have enough money to buy happiness.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">9.</span> Why is it difficult to define happiness and wealth using the words ‘happiness’ and ‘wealth’?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-1" name="q9" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q9-1">a. Because those terms are vague and difficult to define.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-2" name="q9" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q9-2">b. Because most people would rather use words such as ‘satisfaction’ and ‘achievement’.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-3" name="q9" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q9-3">c. Because Ruskin believes people are too wrapped up in themselves.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-4" name="q9" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q9-4">d. Because people who think in those terms are usually not very happy themselves.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">10.</span> Which statement best summarises the final paragraph?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q10-1" name="q10" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q10-1">a. If one is very happy, it’s important to maintain that level of happiness.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q10-2" name="q10" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q10-2">b. Happiness cannot be measured so it’s important to have possessions.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q10-3" name="q10" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q10-3">c. As long as one is happy, it doesn’t matter if the degree of 
		                    happiness fluctuates.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q10-4" name="q10" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q10-4">d. People who are happy do not usually realize that they have true 
		                    wealth.</label>
                        </div>
                    </div>
                </div>

                
                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 11 - 13</h4>
                <p class="mt-0 mb-0">Complete the statements.</p>
                <p>For Questions 11-13, write <span class="font-weight-bold">NO MORE THAN ONE WORD</span> for each answer.</p>
                
                <div class="d-flex align-items-baseline">
                    <span class="mr-2">11.</span>
                    <div class="d-inline-block">
                    If a feeling of well-being is <input type="text" class="form-control w-auto d-inline-block m-0" name="q11"> through the use of mind-altering drugs, the feeling is short-lived and can result in an even stronger feeling of unhappiness.
                    </div>
                </div>

                <div class="d-flex align-items-baseline my-3">
                    <span class="mr-2">12.</span>
                    <div class="d-inline-block">
                    In the old days, poets and <input type="text" class="form-control w-auto d-inline-block m-0" name="q12"> often stated that a person with modest needs and frugal habits, and enough money to provide for these, was truly happy.
                    </div>
                </div>

                <div class="d-flex align-items-baseline">
                    <span class="mr-2">13.</span>
                    <div class="d-inline-block">
                    Ruskin describes people who are wrapped up in themselves as very small  <input type="text" class="form-control w-auto d-inline-block m-0" name="q13"> with a limited surface area and incapable of attracting much happiness.
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
                <h4 class="modal-title text-white" id="myCenterModalLabel">Scores result</h4>
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
            url: "{{ route('store.exam-fourteen') }}",
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