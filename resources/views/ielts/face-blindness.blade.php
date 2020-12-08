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
            <h3>Face blindness</h3>    
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
                Prosopagnosia is a disorder of face perception where the ability to recognize faces is impaired, while the ability to recognize other objects may be relatively intact. The term originally referred to a condition following acute brain damage, but a congenital form of the disorder has been proposed, which may be inherited by about 2.5% of the population. 
                </p>
                <p>
                Few successful therapies have so far been developed for affected people, although individuals often learn to use 'piecemeal' or 'feature by feature' recognition strategies. This may involve secondary clues such as clothing, posture, hair color, body shape, and voice. Because the face seems to function as an important identifying feature in memory, it can also be difficult for people with this condition to keep track of information about people, and socialize normally with others.
                </p>
                <p>
                The study of prosopagnosia has been crucial in the development of theories of face perception. Because prosopagnosia is not a unitary disorder (i.e. different people may show different types and levels of impairment), it has been argued that face perception involves a number of stages, each of which can be separately damaged. This is reflected not just in the amount of impairment displayed, but also in the qualitative differences in impairment that a person with prosopagnosia may exhibit. Prosopagnosia is usually acquired through extensive neurological damage.
                </p>
                <p>
                This sort of evidence has been crucial in supporting the theory that there may be a specific face perception system in the brain. This is counterintuitive to many people, as not everyone experiences faces as 'special' or perceived in a different way from other objects in the rest of the world.
                </p>
                <p>
                A recent case report described a closely related condition called prosopamnesia, in which the subject, from birth, could perceive faces normally, but had a severely impaired ability to remember them. 
                </p>
                <p>
                Until late in the 20th century, prosopagnosia was thought to be quite rare and solely associated with brain injury or neurological illness affecting specific areas of the brain. However, recently a form of congenital prosopagnosia has been proposed, in which people are born with an impairment in recognizing and perceiving faces, as well as other objects and visual scenes.
                </p>
                <p>
                Dr Jane Whittaker, writing in 1999, described the case of a Mr. C. and referred to other similar cases. The reported cases suggest that this form of the disorder may be heritable and much more common than previously thought (about 2.5% of the population may be affected), although this congenital disorder is commonly accompanied by other forms of visual agnosia, and may not be "pure" prosopagnosia. It has been suggested that very mild cases of face blindness are much more common, perhaps affecting 10% of the population, although there have not been any studies confirming this. The inability to keep track of the identity of characters in movies is a common complaint. 
                </p>
                <p>
                A classic case of a prosopagnosia is presented by "Dr. P." in Oliver Sacks' 1985 book The Man Who Mistook His Wife for a Hat, though this is more properly considered "agnosia." Although Dr. P. could not recognize his wife from her face, he was able to recognize her by her voice. His recognition of pictures of his family and friends appeared to be based on highly specific features, such as his brother's square jaw and big teeth.
                </p>
                <p class="font-weight-bold mb-0">Associative prosopagnosia</p>
                <p>
                Associative prosopagnosia is thought to be an impairment to the links between early face perception processes and the semantic information we hold about people in our memories. People with this form of the disorder may be able to say whether photos of people's faces are the same or different and derive the age and gender from a face (suggesting they can make sense of some face information) but may not be able to subsequently identify the person or provide any information about them such as their name, occupation, or when they were last encountered. They may be able to recognize and produce such information based on non-face information such as voice, hair, or even particularly distinctive facial features (such as a distinctive moustache) that do not require the structure of the face to be understood. Typically such people do not report that 'faces make no sense' but simply that they do not look distinctive in any wa
                </p>
                <p class="font-weight-bold mb-0">Developmental prosopagnosia</p>
                <p>
                Developmental prosopagnosia (DP) is a face-recognition deficit that is lifelong, manifesting in early childhood, and that cannot be attributed to acquired brain damage. However, a number of studies have found functional deficits in DP both on the basis of EEG measures and MRI. It has been suggested that a genetic factor is responsible for the condition. The term “hereditary prosopagnosia” was introduced if DP affected more than one family member, essentially accenting the possible genetic contribution of this condition. To examine this possible genetic factor, 689 randomly selected students were administered a survey in which seventeen developmental prosopagnosics were quantifiably identified. Family members of fourteen of the DP individuals were interviewed to determine prosopagnosia-like characteristics, and in all fourteen families, at least one other affected family member was found.
                </p>
                <p>
                There seem to be two categories of DP patients: first, patients who are impaired in basic face processing (age estimation, judgment of facial affect) and also show deficits on other forms of visual processing; and second, patients with pure face-recognition impairments in the presence of intact basic visual processing. The first group of patients fail to obtain view-centered descriptions. According to the Bruce and Young model of face recognition, these are precursors of the more abstract expression-independent descriptions. View-centered descriptions do not seem to be specific for faces, as the patients with impairments of processing the physical aspects of faces also show difficulties in non-facial tasks like object recognition or tests of visuo-spatial abilities. However, there is as yet only limited evidence for a classification into different subtypes.
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
                        <p class="mb-1">1. Prosopagnosia is usually the result of some brain injury.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q1" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">2. People who suffer from this condition may have difficulty in their relationships with other people.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q2" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">3. Studies have shown that one in ten people are affected by a mild form of the condition.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q3" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">4. Not much was known about the condition until the end of the 20<sup>th</sup> century.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q4" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">5. In the case of Dr P., the patient had recently had a brain injury, leading to the condition.</p>
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
                <p class="mb-0">Classify the following statements as referring to the medical condition.</p>
                <p>For Questions 6 – 10 select a letter, A, B, or C.</p>

                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex flex-column">
                            <strong class="font-weight-bold">A. Associative prosopagnosia</strong>
                            <strong class="font-weight-bold">B. Developmental prosopagnosia</strong>
                            <strong class="font-weight-bold">C. Both A and B</strong>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="q6" class="col-form-label">6. People show symptoms early in life.</label>
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
                            <label for="q7" class="col-form-label">7. May be passed on from family members.</label>
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
                            <label for="q8" class="col-form-label">8. Can identify certain characteristics from pictures of faces.</label>
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
                            <label for="q9" class="col-form-label">9. Not necessarily the result of brain damage.</label>
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
                            <label for="q10" class="col-form-label">10. Use aspects such as facial hair to identify people.</label>
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
                <p class="mb-0">Complete the sentences.</p>
                <p>Write <span class="font-weight-bold">NO MORE THAN ONE WORD</span> for each answer.</p>
                
                <div class="form-group d-inline-flex">
                    <span class="mr-2">11. </span>
                    <div class="d-inline-block">
                    People suffering from prosopagnosia often manage to survive by adopting <input type="text" class="form-control w-auto d-inline-block" name="q11"> recognition strategies.
                    </div>
                </div>
                <div class="form-group d-inline-flex">
                    <span class="mr-2">12. </span>
                    <div class="d-inline-block">
                    The condition is not a <input type="text" class="form-control w-auto d-inline-block" name="q12"> disorder, which means that different people exhibit different types and level of impairment.
                    </div>
                </div>
                <div class="form-group d-inline-flex">
                    <span class="mr-2">13. </span>
                    <div class="d-inline-block">
                    People suffering from a related condition, known as <input type="text" class="form-control w-auto d-inline-block" name="q13">, could see faces normally, but were unable to recall them.
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
            url: "{{ route('store.exam-eight') }}",
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
            let input = $(`input[name="${quiz}"]`);

            if(data.exam[quiz].status == 1) {
                $(`<span class="ml-2 text-success font-weight-bold">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
                select.addClass('border border-success');

                $(`<span class="mx-2 text-success font-weight-bold">${data.exam[quiz].rightAnswer}</span>`).insertAfter(input);
                input.addClass('border border-success');
            } else {
                $(`<span class="ml-2 text-success font-weight-bold">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
                select.addClass('border border-danger');

                $(`<span class="mx-2 text-success font-weight-bold">${data.exam[quiz].rightAnswer}</span>`).insertAfter(input);
                input.addClass('border border-danger');
            }

        }
    }
</script>
@stop