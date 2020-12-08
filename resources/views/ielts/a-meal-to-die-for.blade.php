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
            <h3>A meal to die for</h3>    
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
                In Japan, eating fugu (blowfish) is the ideal of gourmet dining and the cooking version of Russian roulette. But the fish is a popular delicacy in places outside Japan as well. A Japanese wholesaler exported the first 90 kg of vacuum-packed fugu to Hong Kong in October 1995.  Hong Kong is the second market to import fugu from Japan.  New York, which started importing the fish in 1989, currently sells about 1 tons of fugu every year, according to the wholesaler. Fugu's trade volume is rising because of people's curiosity in eating such fish. 
                </p>
                <p>
                There are nearly 100 kinds of fugu worldwide, 38 of them found in Japan. The ovaries, skin, muscles and, above all, the liver may contain a deadly poison, for which there is no known antidote. Yet fugu has been eaten in China for thousands of years and in Japan for hundreds. Ten thousand tons of fugu are consumed each year in Japan. The small, spotted torafugu, the most dangerous and delicious variety, are caught off the Korean coast in winter. It weighs as much as four pounds and costs one hundred dollars or more at the Tokyo fish market.  Fishermen use this fish, which blows itself up when threatened to make the lanterns that hang outside fugu restaurants. At restaurants displaying this sign, only specially licensed cooks who know exactly how to cut up fugu are allowed to work there. 
                </p>
                <p>
                Currently, in order to serve fugu, a chef has to go through a strict certification process. If an unskilled or careless person accidentally pierces the organs or otherwise contaminates the edible flesh of the fish, then the diner may find that meal to be his last. Despite all regulatory precautions, every year there are reports of people getting sick or even dying from fugu poisoning. Recently there was a case in Toyama prefecture, where nine people who partook of fugu at a sushi restaurant were taken ill; of the 2 people who lost consciousness, one is still in a coma.
                </p>
                <p>
                At the University of Tokyo, professor Hashimoto and his colleague Noguchi showed a small brown vial of puffer poison, known as tetrodoxin. A pinch of the white powder - about the amount found in one prime-sized tiger fugu - is enough to kill more than 30 people. The estimated lethal dose for an adult, a mere one to two milligrams, could be put on a pinhead. Puffer toxin blocks sodium channels in nerve tissues, ultimately paralyzing muscles. Respiratory arrest is the cause of death. There is no proven antidote, perhaps because the toxin has a molecular structure unlike anything previously known to organic chemistry. Because of its potency - it is 1250 times deadlier than cyanide - the toxin is an important tool in modern neurological research. In diluted form it is also used as a painkiller for victims of neuralgia, arthritis and rheumatism.
                </p>
                <p>
                The best season for fugu dishes is during the winter.  Therefore, there is a large difference in prices over the seasons.  Fugu is one of the most expensive foods in Japan.  A single fish can bring $50 to $140.  Cut up and served in a restaurant, it can bring $200.  Yet fugu has become increasingly popular.  At the small Haedomari Market in Shimonoseki, Japan's ‘fugu city’, where 80 percent of Japan's fugu catch is sold,  auctioneers start taking bids for the fish as early as one in the morning. Even at that hour the fishermen have already transferred hundreds of live fish caught as far away as Korea.  From Shimonoseki, they will be tracked or flown throughout the country. Fugu are sold while they are alive; therefore, transportation for fugu is exclusively arranged.  The fugu's mouth are stitched shut because fugu tend to fight with each other in a small space.
                </p>
                <p>
                Despite the danger, demand for puffer dishes is increasing so fast that Japanese fishing grounds are being depleted. Today, Japanese are culturing the fish on aquafarms and there is evidence of success in the artificial cultivation of fugu.  Fishers catch fugu in spring, usually with a hook and net, because it is the spawning season. Then, they cultivate these fish in a cage in the sea. They raise fish until the price goes up and start selling fugu in the fish market in late autumn. Farmed fugu, not feeding on plankton, is not lethal. They feed fugu on fresh fish until they grow up. There is also full-scale farming using artificial insemination. Apart from the supply of fugu fish itself, there is also a shortage of specialized chefs who can prepare the delicacy. A recent decision to relax the strict regulations on certification, so that the training period is reduced, has met with some consumer concern. 
                </p>
                <p>
                Every year from October through March, millions of diners bet their lives on not getting fatally poisoned.  Thanks to strict regulations of restaurants and wholesalers, the number of deaths decreases each year.  But this curious and preposterous fish remains the world's most deadly feast.  Non-lethal fugu may be on its way to our tables, but fugu fans often cite the thrill of possible poisoning/death as part of the appeal of fugu. A few die-hards even like to put a tiny bit of the poison on their fugu, for that numbing, tingling sensation on the lips. 
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
                        <p class="mb-1">1. The Chinese consume more fugu fish than the Japanese.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q1" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">2. Most of the different kinds of fugu are found in Japan.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q2" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">3. The fact that only specialized chefs can prepare fugu means that there are no longer any fatalities.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q3" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">4. Just a very small amount of fugu poison can kill a person.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q4" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">5. Fugu from fish farms is more expensive than fugu caught at sea.</p>
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
                <p class="mb-0">Classify the following statements as referring to the senses.</p>
                <p class="mb-0">For Questions 6 – 10 select a letter, A, B, C, or D.</p>

                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex flex-column">
                            <strong class="font-weight-bold">A. Fugu caught at sea</strong>
                            <strong class="font-weight-bold">B. Fugu from aquafarms</strong>
                            <strong class="font-weight-bold">C. Both A and B</strong>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="q6" class="col-form-label">6. Its skin is used to make lanterns to hang outside restaurants.</label>
                            <div class="d-flex align-items-center mb-2">
                                <select name="q6" class="form-control w-auto ml-2">
                                    <option value="">Select Answer</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="q7" class="col-form-label">7. They feed on fresh fish.</label>
                            <div class="d-flex align-items-center mb-2">
                                <select name="q7" class="form-control w-auto ml-2">
                                    <option value="">Select Answer</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="q8" class="col-form-label">8. They spend some of their lives in a cage in the ocean.</label>
                            <div class="d-flex align-items-center mb-2">
                                <select name="q8" class="form-control w-auto ml-2">
                                    <option value="">Select Answer</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="q9" class="col-form-label">9. The fish are transported live.</label>
                            <div class="d-flex align-items-center mb-2">
                                <select name="q9" class="form-control w-auto ml-2">
                                    <option value="">Select Answer</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="q10" class="col-form-label">10. It is used in medical research.</label>
                            <div class="d-flex align-items-center mb-2">
                                <select name="q10" class="form-control w-auto ml-2">
                                    <option value="">Select Answer</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 11 - 13</h4>
                <p>Choose the correct letter a, b, c, or d.</p>
                
                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">11.</span> Which country started eating fugu fish first?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-1" name="q11" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q11-1">a. China</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-2" name="q11" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q11-2">b. Japan</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-3" name="q11" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q11-3">c. Hong Kong</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-4" name="q11" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q11-4">d. The USA</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">12.</span> What do we know about the case of poisoning in Toyama prefecture?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-1" name="q12" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q12-1">a. Nine people died.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-2" name="q12" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q12-2">b. Three people fell unconscious.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-3" name="q12" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q12-3">c. The chef made a mistake in the preparation of the fish.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-4" name="q12" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q12-4">d. The restaurant has had to close as a result of the accident.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">13.</span> In what way does the fugu poison benefit society?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-1" name="q13" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q13-1">a. There is no known antidote for the poison.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-2" name="q13" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q13-2">b. It is used for people who suffer from certain diseases.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-3" name="q13" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q13-3">c. Because the toxin is much more powerful than cyanide.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-4" name="q13" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q13-4">d. Because the toxin has a very unusual molecular structure.</label>
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
            url: "{{ route('store.exam-nine') }}",
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