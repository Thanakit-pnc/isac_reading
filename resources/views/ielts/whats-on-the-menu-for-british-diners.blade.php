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
            <h3>What’s on the menu for British diners?</h3>    
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
                Western diners should get used to the idea of eating insects because by 2020 it is "inevitable" they will form an important part of our diet, according to the entomologist who heads up the world's first university centre focusing on insects as a food source.
                </p>
                <p>
                He argues that consumers who have traditionally turned their noses up at six-legged food may have to change their minds as conventional meat becomes more expensive and scarce.
                </p>
                <p>
                In an interview with Wired magazine, Prof Marcel Dicke of Wageningen University said: "The most important thing is getting people prepared, getting used to the idea. Because from 2020 onwards, there won't be much of a choice for us." He wants to persuade people to ditch prejudices about insects, and to persuade manufacturers and suppliers to come up with products that can be sold in "a reassuring and attractive manner". Dicke heads a Netherlands-based four-year programme aiming to produce a scientific and business plan to bring insects to western tables.
                </p>
                <p>
                More than 1,000 insect species are eaten around the world in 80% of countries – mostly in the tropics. The UN's Food and Agriculture Organisation says insects are vital to meeting the nutritional needs of the world's growing population, but they hardly feature in the diets of many rich nations.
                </p>
                <p>
                For centuries insects have been part of the daily diet of humans throughout the world, from the ants and larvae eaten as part of their subsistence diet by the tribes of Africa and Australia to the popular crispy-fried locust and beetle delicacies enjoyed in Thailand.
                </p>
                <p>
                Insects as food (known as entomophagy) are increasingly being promoted as an alternative which are more healthy, nutritious and sustainable than mainstream staples such as chicken, beef and fish.
                </p>
                <p>
                The starting point for the research programme at Wageningen University – led by a team of 70 researchers – is the notion that 80% of the world's population, knowingly or unknowingly, is already consuming insects. Ground insects are already found in common foods such as canned tomatoes and peanut butter, for example.
                </p>
                <p>
                As well as being low in cholesterol and high in protein, insects produce less waste, Dicke points out, as we typically throw away three-quarters of a chicken, but can eat the same percentage of a locust. Insects also win on the "conversion factor" or ration of feed ingested by the animal to the meat produced by it – known as ECI. Beef cattle has an ECI rate of 10 while the cockroach trumps with 44. The carbon emissions associated with growing insects is also far lower than those linked to conventional livestock.
                </p>
                <p>
                In the UK, the sale of insects for human consumption is part of what is still a niche food sector centred largely around novelty snacks. The specialist supplier Edible sells a range of delicacies ranging from Thai Curry crickets to BBQ worm crisps which are stocked by some of the best known High Street retailers. Tanya McMullen, grocery buying manager at Selfridges, said: "The Edible brand grows year after year. Our customers like it because it is so unusual. You don't find oven-baked tarantula and scorpion lollies in many places so it's a product most customers won't have seen before. It is difficult to say whether it's a current trend as it has always been a successful range for Selfridges but there is definitely an increasing number of discerning customers who are more and more willing to try something out of the ordinary. Sales are currently very strong having grown 20% in the last 12 months."
                </p>
                <p>
                In the UK, chefs report some success in encouraging their diners to eat creepy-crawlies. Daniel Creedon, head chef and manager of Archipelago restaurant in central London, buys frozen cricket and locusts in bulk from a supplier on the Isle of Wight. He says: "They are very popular and not just because of their quirkiness. I think our diners are genuinely interested in sustainability and diminishing food supplies. I bake them in the oven until they are crisp and then toss them in a wok with chilli and ginger as in my experience customers tend to be squeamish about anything that is soft and squidgy."
                </p>
                <h4 class="font-wegiht-bold">The most commonly eaten insect species on the planet</h4>
                <ol>
                    <li>Beetles and cockroaches</li>
                    <li>Flies</li>
                    <li>Lice and coccidia</li>
                    <li>Cicadas</li>
                    <li>Wasps, bees and ants</li>
                    <li>Termites</li>
                    <li>Butterflies and moths</li>
                    <li>Dragonflies</li>
                    <li>Crickets and grasshoppers</li>
                    <li>Mantises</li>
                </ol>
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
                        <p class="mb-1">1.	Researchers believe that people in Europe will be eating insects on a regular basis within the next few decades.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q1" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">2.	Insects form part of the diet in the majority of countries around the world.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q2" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">3.	People in Thailand eat locusts and beetles in order to survive.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q3" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">4.	Sales of insect food are increasing in the UK.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q4" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">5.	The Isle of Wight exports its insects because people living there don’t want to eat them.</p>
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
                    <label for="col-form-label"><span class="mr-1">6.</span> What do we know about Professor Marcel Dicke?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-1" name="q6" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q6-1">a. He is a reporter with ‘Wired’ magazine.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-2" name="q6" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q6-2">b. He is an insect snack manufacturer.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-3" name="q6" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q6-3">c. He is a chef who specialises in preparing insect meals.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-4" name="q6" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q6-4">d. He is in charge of a university department in Holland.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">7.</span> Why does Professor Dicke believe that insects will become a regular part of the western diet?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-1" name="q7" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q7-1">a. Because he heads the world’s first university centre focusing on insect consumption.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-2" name="q7" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q7-2">b. Because consumers have traditionally turned their noses up at eating insects.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-3" name="q7" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q7-3">c. Because traditional meats are getting more expensive and less abundant.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-4" name="q7" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q7-4">d. Because he believes people will get used to the idea of eating insects.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">8.</span> What forms the basis of the Wageningen University research programme?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-1" name="q8" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q8-1">a. The fact that most people in the world currently eat insects or insect products.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-2" name="q8" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q8-2">b. The fact that insects are more nutritional and environmentally friendly than traditional staples.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-3" name="q8" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q8-3">c. The fact that insects contain a lot less cholesterol and a lot more protein than other meats.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-4" name="q8" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q8-4">d. The fact that insects are in abundant supply and can be farmed more easily than conventional livestock.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">9.</span> In what way is eating insects less wasteful than eating meat?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-1" name="q9" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q9-1">a. A large proportion of the insect can be eaten.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-2" name="q9" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q9-2">b. A large percentage of insects cannot be eaten.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-3" name="q9" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q9-3">c. Insects contain much less cholesterol than meat products.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-4" name="q9" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q9-4">d. There is much more protein in an insect than there is in a chicken.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">10.</span> According to Daniel Creedon, why are British people keen to eat insects?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q10-1" name="q10" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q10-1">a. They like the way Daniel prepares the insects.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q10-2" name="q10" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q10-2">b. Insects are an environmentally friendly food source.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q10-3" name="q10" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q10-3">c. British diners tend to be quite quirky.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q10-4" name="q10" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q10-4">d. People tend not to like food which is soft and squidgy.</label>
                        </div>
                    </div>
                </div>

                
                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-0">Questions 11 - 13</h4>
                <p class="mb-0">Complete the sentences.</p>
                <p>Write <span class="font-weight-bold">NO MORE THAN ONE WORD AND/OR A NUMBER</span> for each answer.</p>
                
                <div class="d-flex align-items-baseline">
                    <span class="mr-2">11.</span>
                    <div class="d-inline-block">
                    The science which studies the use of insects as food is known as <input type="text" class="form-control w-auto d-inline-block m-0" name="q11"> 
                    </div>
                </div>

                <div class="d-flex align-items-baseline my-3">
                    <span class="mr-2">12.</span>
                    <div class="d-inline-block">
                    Apart from eating whole insects, either uncooked or roasted, most people have eaten insects which are  <input type="text" class="form-control w-auto d-inline-block m-0" name="q12"> up and added to other foodstuffs such as canned tomatoes and peanut butter.
                    </div>
                </div>

                <div class="d-flex align-items-baseline">
                    <span class="mr-2">13.</span>
                    <div class="d-inline-block">
                    Insect snacks are becoming so popular in the UK that sales increased by <input type="text" class="form-control w-auto d-inline-block m-0" name="q13"> over the last year.
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
            url: "{{ route('store.exam-nineteen') }}",
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