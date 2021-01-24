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
            <h3>Wayang Kulit: Shadow Plays</h3>    
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
                Wayang is a generic term denoting traditional theatre in Indonesia. There is no evidence that wayang existed before Hinduism came to Southeast Asia sometime in the first century CE, brought in by Indian traders. The first record of a wayang performance is from an inscription dated 930 CE. However, there very well may have been indigenous storytelling traditions that had a profound impact on the development of the traditional puppet theatre. Certainly, from that time till today it seems certain features of traditional puppet theatre have remained.
                </p>
                <p>
                Hinduism arrived in Indonesia from India even before the Christian era, and was slowly adopted as the local belief system. Sanskrit became the literary and court language of Java and later of Bali. The Hindus changed the Wayang (as did the Muslims, later) to assimilate their religion and cultural values into the area, mostly by stories from the Mahabharata or the Ramayana. Later, this mixture of religion and wayang play was praised as harmony between Hinduism and traditional Indonesian culture. On Java, the western part of Sumatra and some smaller islands, traditionalists continued to play the old stories for some time, but the influence of Hinduism prevailed and the traditional stories either fell into oblivion or were integrated into the Hinduistic plays. The figures were painted, flat woodcarvings (a maximum of 5 to 15 mm thick) with movable arms, with the head solidly attached to the body.
                </p>
                <p>
                When Islam began spreading in Indonesia, the display of God or gods in human form was prohibited, and thus this style of painting and shadow play was suppressed. King Raden Patah of Demak, Java, wanted to see the wayang in its traditional form, but failed to obtain permission from the Muslim religious leaders. As an alternative, the religious leaders converted the solid wooden figures into figures made from leather, and displayed only the shadow instead of the figures itself. Instead of the forbidden figures only their shadow picture was displayed, the birth of the <i>wayang kulit</i>.
                </p>
                <p>
                Wayang kulit, shadow puppets prevalent in Java and Bali in Indonesia, are without a doubt the best known of the Indonesian wayang. Kulit means skin, and refers to the leather construction of the puppets that are carefully chiselled with very fine tools and supported with carefully shaped buffalo horn handles and bamboo control rods. Wayang Kulit is a unique form of theatre employing light and shadow. When held up behind a piece of white cloth, with an electric bulb or an oil lamp as the light source, shadows are cast on the screen. Wayang Kulit plays are invariably based on romantic tales, especially adaptations of the classic Indian epics, "The Mahabarata" and "The Ramayana". Some of the plays are also based on local happenings (current issues) or other local secular stories. It is up to the conductor or Dalang to decide his direction. The Dalang is the genius behind the entire performance. It is he who sits behind the screen and narrates the story. With a traditional orchestra in the background to provide a resonant melody and its conventional rhythm, the Dalang modulates his voice to create suspense thus heightening the drama. Invariably, the play climaxes with the triumph of good over evil.
                </p>
                <p>
                There is a family of characters in Javanese wayang called Punakawan; they are sometimes referred to as "clown-servants" because they normally are associated with the story's hero, and provide humorous and philosophical interludes. Semar is the father of Gareng (oldest son), Petruk, and Bagong (youngest son). These characters did not originate in the Hindu epics, but were added later, possibly to introduce mystical aspects of Islam into the Hindu-Javanese stories. They provide something akin to a political cabaret, dealing with gossip and contemporary affairs.
                </p>
                <p>
                The handwork involved in making a wayang kulit figure that is suitable for a performance takes several weeks, with the artists working together in groups. They start from master models (typically on paper) which are traced out onto kulit (skin or parchment), providing the figures with an outline and with indications of any holes that will need to be cut (such as for the mouth or eyes). The figures are then smoothed, usually with a glass bottle, and primed. The structure is inspected and eventually the details are worked through. A further smoothing follows before individual painting, which is undertaken by yet another craftsman. Finally, the movable parts (upper arms, lower arms with hands and the associated sticks for manipulation) are mounted on the body, which has a central staff by which it is held. A crew makes up to ten figures at a time, typically completing that number over the course of a month. The painting of less expensive puppets is handled expediently with a spray technique, using templates, and with a different person handling each color. Less expensive puppets, often sold to children during performances, are usually made of cardboard instead of leather.
                </p>
                <p>
                Wayang today is both the most ancient and most popular form of puppet theatre in the world. Hundreds of people will stay up all night long to watch the superstar performers who command extravagant fees and are international celebrities. 
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-box font-16 text-dark overflow-custom">
                <h4 class="mt-0 mb-1">Questions 1 - 5</h4>
                <p class="mb-0">Do the following statements agree with the information given in the passage?</p>
                <p>For Questions 1-5 select</p>
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
                        <p class="mb-1">1.	Indigenous Indonesian story-telling traditions had an impact on the wayang puppet theatre.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q1" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">2.	Wayang was adapted by both Hindus and Muslims to spread their cultural values in the region.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q2" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">3.	On some islands of Indonesia the old story-telling traditions continued for some time before being integrated into the wayang traditions.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q3" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">4.	Wayang kulit shows were already a dominant feature of the culture before Islam spread to Indonesia.	</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q4" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">5.	Wayang kulit shows are performed on most islands in the Indonesian archipelago. </p>
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
                    <label for="col-form-label" class="d-flex"><span class="mr-1">6.</span> Why were the original wooden figures replaced by figures made of skin?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-1" name="q6" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q6-1">a. Because skin figures were cheaper to produce.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-2" name="q6" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q6-2">b. Because the wooden figures did not cast a clear shadow.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-3" name="q6" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q6-3">c. Because the use of solid wooden figures was not allowed in Islam.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q6-4" name="q6" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q6-4">d. Because King Raden Pahah wanted to see the wayang in its traditional form.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label"><span class="mr-1">7.</span> Why is the role of the <span class="font-weight-bold">dalang</span>?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-1" name="q7" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q7-1">a. He is the one who creates the figures.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-2" name="q7" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q7-2">b. He is the one who moves the figures around on stage.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-3" name="q7" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q7-3">c. He provides the music which is used to accompany the movement of the figures.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q7-4" name="q7" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q7-4">d. He provides the voices used by the figures.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label"><span class="mr-1">8.</span> What do we know about the <span class="font-weight-bold">Punkawan</span>?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-1" name="q8" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q8-1">a. They are the heroes in the story.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-2" name="q8" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q8-2">b. They bring humour to the story.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-3" name="q8" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q8-3">c. They were the original characters in the wayang traditions.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q8-4" name="q8" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q8-4">d. They create a lot of gossip and discuss serious political issues.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">9.</span> In the creation of figures suitable for a wayang kulit performance</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-1" name="q9" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q9-1">a. a team of artists works together for a number of weeks.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-2" name="q9" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q9-2">b. one person is responsible for making the figure from start to finish.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-3" name="q9" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q9-3">c. each individual figure is produced one at a time.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q9-4" name="q9" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q9-4">d. the movable parts are produced by a different team of people.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">10.</span> The wayang models which children can buy at performances are cheaper because</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q10-1" name="q10" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q10-1">a. each colour used for painting the models is handled by a different person.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q10-2" name="q10" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q10-2">b. templates are used to create the puppets.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q10-3" name="q10" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q10-3">c. the models are made using a cheaper alternative to leather.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q10-4" name="q10" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q10-4">d. these models take less time to produce.</label>
                        </div>
                    </div>
                </div>

                
                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 11 - 13</h4>
                <p class="mt-0 mb-1">Complete the statements.</p>
                <p>Type <span class="font-weight-bold">NO MORE THAN TWO WORDS</span> for each answer.</p>
                
                <div class="d-flex align-items-baseline">
                    <span class="mr-2">11.</span>
                    <div class="d-inline-block">
                    Wayang kulit plays are usually based on folklore stories such as the Mahabarata and the Ramayana, both of which originated in <input type="text" class="form-control w-auto d-inline-block m-0" name="q11">.
                    </div>
                </div>

                <div class="d-flex align-items-baseline my-3">
                    <span class="mr-2">12.</span>
                    <div class="d-inline-block">
                    Wayang kulit performances are a dominant form of culture, especially on the islands of Java and <input type="text" class="form-control w-auto d-inline-block m-0" name="q12">
                    </div>
                </div>

                <div class="d-flex align-items-baseline">
                    <span class="mr-2">13.</span>
                    <div class="d-inline-block">
                    Some supplementary figures have been introduced into the stories. These Punkawan are also known as <input type="text" class="form-control w-auto d-inline-block m-0" name="q13"> since their real function is to add humour and cabaret to the story.
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
    // $('input, select').attr('required', 'required');
    $('#form-exam').on('submit', function(e) {
        let timeSt = "{{ $timer }}";
        e.preventDefault();
        let data = $("#form-exam").serialize();
        $.ajax({
            type: "post",
            url: "{{ route('store.exam-twenty') }}",
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