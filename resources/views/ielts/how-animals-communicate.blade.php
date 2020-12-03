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
            <h3>How animals communicate</h3>    
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
                Have you ever heard a fish talk? Have you ever seen monkeys speaking to each other? Well, perhaps not, but animals do ‘talk’ to each other. It’s just that they don’t use words and sentences like people do. Animals show their feelings and give out information in different ways. They use their senses to do this.
                </p>
                <p>
                Olfactory communication, or using the sense of smell, is a commonly used means of communicating: to tell enemies to go away, to sense danger and to find partners. Many mammals, in particular, have glands that generate distinctive and long-lasting smells, and have corresponding behaviours that leave these smells in places where they have been. Often the scented substance is introduced into urine or faeces. Sometimes it is distributed through sweat, though this does not leave a semi-permanent mark as scents deposited on the ground do. Some animals have glands on their bodies whose sole function appears to be to deposit scent marks: for example gerbils have a scent gland on their stomachs, and a characteristic ventral rubbing action that deposits scent from it. Golden hamsters and cats have scent glands on their flanks, and deposit scent by rubbing their sides against objects; cats also have scent glands on their foreheads. Bees carry with them a pouch of material from the hive which they release as they re-enter, the smell of which indicates that they are a part of the hive and grants their safe entry. Ants use pheromones to create scent trails to food as well as for alarm calls, mate attraction and to distinguish between colonies. Some male butterflies have such a strong sense that they can smell a female more than three kilometres away.
                </p>
                <p>
                Other animals use sound to send out messages. Communication through vocalization is essential for many tasks including mating rituals, warning calls, conveying location of food sources, and social learning. Whales seem to be best at this. They sing ‘songs’ which other whales can hear many kilometres away. No one is quite sure what the message means but there is no doubt that the whales use these songs to communicate. When it comes to acoustic communication, not every member of a species is just alike. Animals in different regions have often been overhead sounding off in different dialects. For example, one study found that blue whales produce different patterns of pulses, tones and pitches depending on where they're from. Some bird species are the same way. And what about those birds that live on the border between territories of differing songsters? They often become bilingual, so to speak, and able to communicate in the singing parlance favored by each of their groups of neighbors.
                </p>
                <p>
                However, as noise pollution interferes with animal communication all across the globe, many animals' ability to communicate effectively comes under fire. Increased shipping traffic over the last century has dramatically affected the transfer of whale song around the ocean basin. Studies have found that songbirds, too, suffer from noisy urban environments. Some species have had to modify their singing styles, producing songs that are louder and shriller, in order to be heard above the noise. Increased volume usually leads to simpler and somewhat inferior styles of singing that female birds seem to find decidedly less attractive.
                </p>
                <p>
                Body language is another way animals talk to each other. Signs of anger, fear and happiness send messages to other animals. Many animals show anger through body language. Dogs will show their teeth (often accompanied by an alarming growling sound); cats will raise their tail and monkeys raise their eyes to show their anger. Gorillas stick out their tongues to show anger, and beat their chests as a warning sign to intruders.
                </p>
                <p>
                Body language is also common in humans, too. We show feelings on our face. We also show our feelings with our hands and arms; for example, when we shake hands or hold someone close. Monkeys will also hold each other and kiss when they meet. Chimpanzees greet each other by touching hands. Big cats will hold their face close to each other and elephants will hold each other’s trunk to show friendship. 
                </p>
                <p>
                Communication between species can play important roles as well. One study suggested that the reason Madagascan spiny-tailed iguanas have well-developed ears - despite the fact that they don't communicate vocally - is so they can hear the warning calls of the Madagascan paradise flycatcher. The two species have nothing in common except for the fact that they share a general habitat and birds of prey like to feed on them. So when an iguana hears a bird raise the alarm among other birds, it likely knows to be on alert for incoming predators, too.
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
                        <p class="mb-1">1. Of all the different senses used for communicating, animals use the sense of sound most of all.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q1" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">2. Scents deposited through urine and faeces are more long-lasting than those produced by sweat glands.	</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q2" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">3. Scientists have been able to discover the meaning of whale songs.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q3" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">4. Noise pollution has had an impact on animal communication.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q4" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">5. The Madagascan paradise flycatcher and the spiny-tailed iguanas share a number of common characteristics.</p>
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
                <p>For Questions 6 – 10 select a letter, A, B, C, or D</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex flex-column">
                            <strong class="font-weight-bold">A. Smell</strong>
                            <strong class="font-weight-bold">B. Sound</strong>
                            <strong class="font-weight-bold">C. Body language</strong>
                            <strong class="font-weight-bold">D. A combination of the above</strong>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="q6" class="col-form-label">6. Dogs show that they are angry.</label>
                            <div class="d-flex align-items-center mb-2">
                                <select name="q6" class="form-control w-auto ml-2">
                                    <option value="">Select Answer</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="q7" class="col-form-label">7. This form of whale communication depends on where they come from.</label>
                            <div class="d-flex align-items-center mb-2">
                                <select name="q7" class="form-control w-auto ml-2">
                                    <option value="">Select Answer</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="q8" class="col-form-label">8. Bees gain safe entry into their hive.</label>
                            <div class="d-flex align-items-center mb-2">
                                <select name="q8" class="form-control w-auto ml-2">
                                    <option value="">Select Answer</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="q9" class="col-form-label">9. Iguanas stay safe by using other animals’ warnings.</label>
                            <div class="d-flex align-items-center mb-2">
                                <select name="q9" class="form-control w-auto ml-2">
                                    <option value="">Select Answer</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="q10" class="col-form-label">10. Elephants show they are friends with other elephants.</label>
                            <div class="d-flex align-items-center mb-2">
                                <select name="q10" class="form-control w-auto ml-2">
                                    <option value="">Select Answer</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 11 - 13</h4>
                <p class="mb-0">Choose the correct answer from the given options.</p>
                <p>For Questions 11-13, select a, b, c, or d</p>
                
                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">11.</span> <span>Which of the following messages is <b><i><u>NOT</u></i></b> usually communicated by the sense of smell?</span></label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-1" name="q11" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q11-1">a. Stay away; I’m dangerous!</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-2" name="q11" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q11-2">b. There’s food at the end of the trail.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-3" name="q11" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q11-3">c. You don’t belong here!</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-4" name="q11" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q11-4">d. I’m extremely happy.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">12.</span> Some birds become ‘bilingual’. What does that mean?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-1" name="q12" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q12-1">a. They can communicate with animals on the other side of the world.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-2" name="q12" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q12-2">b. Birds can now communicate with other animals such as whales.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-3" name="q12" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q12-3">c. They understand the different ‘languages’ spoken by birds in neighbouring districts.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-4" name="q12" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q12-4">d. They have difficulty communicating with other birds in their region.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">13.</span> What effect has noise pollution had on animal communication?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-1" name="q13" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q13-1">a. Whales have stopped using songs as a means of communication.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-2" name="q13" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q13-2">b. Animals now have to raise the volume of their call.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-3" name="q13" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q13-3">c. Female birds find the increase in noise more attractive.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-4" name="q13" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q13-4">d. Female birds will no longer mate with their male counterparts.</label>
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
<script>
    $('input, select').attr('required', 'required');
    $('#form-exam').on('submit', function(e) {

        e.preventDefault();
        let data = $("#form-exam").serialize();
        $.ajax({
            type: "post",
            url: "{{ route('store.exam-three') }}",
            data: {_token: "{{ csrf_token() }}", data},
            dataType: "json",
            success: function(data) {
                if(data.message == 'success') {
                    showAnswer(data.results);
                    $('button[type="submit"]').hide();
                    $('input, select').attr('disabled', 'disabled');
                }
                stopTime();
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