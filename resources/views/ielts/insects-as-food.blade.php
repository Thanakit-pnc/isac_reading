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
            <h3>Insects as food: taboo or tradition?</h3>    
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
                If you think eating insects is gross, you may be in the cultural minority. Throughout history, people have relished and relied on insects as a source of food. Today, many cultures still do. 
                </p>
                <p>
                Ten thousand years ago hunters and gatherers ate bugs to survive. They probably learned what was edible from observing what animals ate, according to Gene DeFoliart, a professor emeritus of entomology at the University of Wisconsin-Madison.  "Eating insects certainly is an old tradition," he said. 
                The ancient Romans and Greeks dined on insects. Pliny, the first-century Roman scholar and author of Historia Naturalis, wrote that Roman aristocrats loved to eat beetle larvae reared on flour and wine. Aristotle, the fourth-century Greek philosopher and scientist, described in his writings the ideal time to harvest cicadas: "The larva of the cicada on attaining full size in the ground becomes a nymph; then it tastes best, before the husk is broken. At first the males are better to eat, but after copulation it’s the females, which are then full of white eggs." 
                </p>
                <p>
                The Old Testament encouraged Christians and Jews to consume locusts, beetles, and grasshoppers. St. John the Baptist is said to have survived on locusts and honey when he lived in the desert. 
                </p>
                <p>
                In the mid-19th century Maj. Howard Egan, a superintendent of the Pony Express in Nevada, observed a Paiute Indian hunting, not for bison or rabbit, but rather the wingless Mormon cricket. Major Egan later described how the Paiute dug a series of large trenches, covered them with straw, then drove hordes of crickets into the excavated trap. The Indians set the straw on fire, burning the crickets alive. Paiute women then gathered baskets of the charred bugs and brought them back to camp to make flour for bread - an important seasonal source of protein. 
                </p>
                <p>
                Many types of insects appear on menus today. Bugs remain a traditional food in many cultures across Africa, Asia, and Latin America. In Ghana during the spring rains, winged termites are collected and fried, roasted, or made into bread. In South Africa the insects are eaten with cornmeal porridge. In China beekeepers are considered virile, because they regularly eat larvae from their beehives. Gourmands in Japan savour aquatic fly larvae sautéed in sugar and soy sauce. De-winged dragonflies boiled in coconut milk with ginger and garlic are a delicacy in Bali. Grubs are savored in New Guinea and aboriginal Australia. In Latin America cicadas, fire-roasted tarantulas, and ants are prevalent in traditional dishes. One of the most famous culinary insects, the agave worm, is eaten on tortillas and placed in bottles of mezcal liquor in Mexico. 
                </p>
                <p>
                But despite its long tradition - and current favour among at least half of the world's peoples - eating insects is still rare, not to mention taboo, in the United States and Europe. One reason, DeFoliart said, is that after Europe became agrarian, insects were seen as destroyers of crops rather than a source of food. 
                "We became invested in livestock, and bugs became the enemy," said David George Gordon, a biologist and the author of The Eat-a-Bug Cookbook. 
                </p>
                <p>
                Manfred Kroger, a professor emeritus of food science at Penn State University in University Park, says what people choose to eat is conditioned by culture. Many Westerners readily consume shrimp and lobster (which, like insects, are arthropods) along with pork and oysters - foods other cultures reject as dirty. "We have 200 to 300 staple foods that we pass down from generation to generation—and trying new foods is always a touchy subject," Kroger said. 
                </p>
                <p>
                Kroger is anything but a lone voice in the wilderness when he argues that there are many nutritional benefits to eating insects. Hamburger, for example, is roughly 18 percent protein and 18 percent fat. Cooked grasshopper, meanwhile, contains up to 60 percent protein with just 6 percent fat. Moreover, like fish, insect fatty acids are unsaturated and thus healthier. 
                </p>
                <p>
                DeFoliart, the Wisconsin entomologist, says that not only are insects nutritious and delicious, they could be an environmentally friendly source of human protein requirements. "In our preoccupation with cattle, we have denuded the planet of vegetation," DeFoliart said. "Insects are much more efficient in converting biomass to protein." 
                </p>
                <p>
                Insect farming is arguably much more efficient than cattle production. Forty-five kilograms of feed produces 4.5 kilograms of beef, while the same amount of feed yields 20 kilograms of cricket. Noting the widespread use of pesticides in industrial agriculture, DeFoliart said, "People are poisoning the planet by ridding it of insects, rather than eating insects and keeping artificial chemicals off plants that we eat."
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
                        <p class="mb-1">1.	People have been eating insects for thousands of years</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q1" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">2.	Roman aristocrats depended on insects to survive.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q2" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">3.	The Paiute Indians preferred to eat insects rather than meat.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q3" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">4.	Roasted insects taste better than uncooked ones.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q4" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">5.	People in Bali eat dragonfly wings boiled in coconut milk.</p>
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
                <p class="mb-0">Classify the following statements according to the person who said this.</p>
                <p class="mb-0">For Questions 6 – 10 select a letter A, B, or C.</p>
                <p>NB You can use any letter more than once.</p>

                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex flex-column">
                            <strong class="font-weight-bold">A.	Professor DeFoliart</strong>
                            <strong class="font-weight-bold">B.	David George Gordon</strong>
                            <strong class="font-weight-bold">C.	Manfred Kroger</strong>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="q6" class="col-form-label">6. People should use fewer pesticides.</label>
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
                            <label for="q7" class="col-form-label">7. Many people are unwilling to try out new foods. </label>
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
                            <label for="q8" class="col-form-label">8. In some cultures people regard insects as their enemy.</label>
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
                            <label for="q9" class="col-form-label">9. Eating insects is healthier than eating meat.</label>
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
                            <label for="q10" class="col-form-label">10. Eating bugs is environmentally friendly.	</label>
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
                    <label for="col-form-label" class="d-flex"><span class="mr-1">11.</span> According to Aristotle, when is the best time to harvest cicadas?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-1" name="q11" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q11-1">a. When the males are full of eggs.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-2" name="q11" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q11-2">b. Once the nymph breaks out of its husk.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-3" name="q11" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q11-3">c. Once the larvae is fully grown.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-4" name="q11" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q11-4">d. Before the females mate with a partner.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">12.</span> Why are insects considered taboo in certain places?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-1" name="q12" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q12-1">a. Insects can make people sick if not cooked properly.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-2" name="q12" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q12-2">b. Insects compete with animals for food.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-3" name="q12" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q12-3">c. Insects are eaten by animals rather than people.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-4" name="q12" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q12-4">d. Insects are less nutritional than animals.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">13.</span> In what way is insect farming more efficient than animal rearing?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-1" name="q13" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q13-1">a. Insects eat less vegetation than animals.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-2" name="q13" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q13-2">b. Eating insects is much healthier than eating animals.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-3" name="q13" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q13-3">c. The planet is being polluted by pesticides.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-4" name="q13" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q13-4">d. People are cutting down forests to rear cattle.</label>
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
            url: "{{ route('store.exam-thirteen') }}",
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