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
            <h3>Body piercing : an act of self-mutilation?</h3>    
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
                Body piercing, a form of body modification, is the practice of puncturing or cutting a part of the human body, creating an opening in which jewellery may be worn. Although the history of body piercing is obscured by popular misinformation and by a lack of scholarly reference, ample evidence exists to document that it has been practised in various forms by both sexes since ancient times throughout the world.
                </p>
                <p>
                Ear piercing and nose piercing have been particularly widespread and are well represented in historical records and among items found in burial grounds. The oldest mummified remains ever discovered were wearing earrings, attesting to the existence of the practice more than 5,000 years ago. Nose piercing is documented as far back as 1500 BC. Piercings of these types have been documented globally, while lip and tongue piercings were historically found in African and American tribal cultures. Nipple and genital piercing have also been practised by various cultures, with nipple piercing dating back at least to Ancient Rome while genital piercing is described in Ancient India between 320 and 550. The history of navel piercing is less clear. The practice of body piercing has waxed and waned in Western culture, but it has experienced an increase of popularity since World War II, with sites other than the ears gaining subcultural popularity in the 1970s and spreading to mainstream in the 1990s.
                </p>
                <p>
                The reasons for piercing or not piercing are varied. Some people pierce for religious or spiritual reasons, while others pierce for self-expression, for aesthetic value, for sexual pleasure, to conform to their culture or to rebel against it. Some forms of piercing remain controversial, particularly when applied to youth. The display or placement of piercings have been restricted by schools, employers and religious groups. In spite of the controversy, some people have practised extreme forms of body piercing.
                </p>
                <p>
                Contemporary body piercing practices emphasize the use of safe body piercing materials, frequently utilizing specialized tools developed for the purpose. Body piercing is an invasive procedure with some risks, including allergic reaction, infection, excessive scarring and unanticipated physical injuries, but such precautions as sanitary piercing procedures and careful aftercare are emphasized to minimize the likelihood of encountering serious problems. The healing time required for a body piercing may vary widely according to placement, from as little as a month for some genital piercings to as much as two full years for the navel.
                </p>
                <p>
                Ear piercing has been practiced all over the world since ancient times. There is considerable written and archaeological evidence of the practice. Among the Tlingit of the Pacific Northwest of America, earrings were a sign of nobility and wealth, as the placement of each earring on a child had to be purchased at an expensive potlatch. Earrings were common in the Eighteenth dynasty of Egypt (1550–1292), generally taking the form of a dangling, gold hoop. Gem-studded, golden earrings shaped like asps seem to have been reserved for nobility. The ancient Greeks wore paste pendant earrings shaped like sacred birds or demigods, while the women of ancient Rome wore precious gemstones in their ears. 
                </p>
                <p>
                In Europe, earrings for women fell from fashion generally between the 4th and 16th centuries, as styles in clothing and hair tended to obscure the ears, but they gradually thereafter came back into vogue in Italy, Spain, England and France—spreading as well to North America—until after World War I when piercing fell from favor and the newly invented Clip-on earring became fashionable. According to some reports, earrings were even more common among men of the 16th century than women. Evidently originating in Spain, the practice of ear piercing among European men spread to the court of Henry III of France and then to Elizabethan era England, where earrings (typically worn in one ear only) were sported by notables and common men alike. From the European Middle Ages, a superstitious belief that piercing one ear improved long-distance vision led to the practice among sailors and explorers. 
                </p>
                <p>
                Nose piercing also has a long history. In the 16th century, the Vedas refer to Lakshmi's nose piercings, but modern practice in India is believed to have spread from the Middle Eastern nomadic tribes by route of the Mughal emperors in the 16th century. It remains customary for Indian Hindu women of childbearing age to wear a nose stud, usually in the left nostril, due to the nostril's association with the female reproductive organs in Ayurvedic medicine. This piercing is sometimes done the night before the woman marries. 
                </p>
                <p>
                Lip piercing and lip stretching were historically found in African and American tribal cultures. Pierced adornments of the lip, or labrets, were sported by the Tlingit as well as peoples of Papua New Guinea and Amazonia. Aztecs and Mayans also wore labrets, while the Dogon people of Mali and the Nuba of Ethiopia wore rings. The practice of stretching the lips by piercing them and inserting plates or plugs was found throughout Pre-Columbian Mesoamerica and South America as well as among some of the tribes of the Pacific Northwest and Africa. In some parts of Malawi, it was quite common for women to adorn their lips with a lip disc called a "pelele" that by means of gradual enlargement from childhood could reach several inches of diameter and would eventually alter the occlusion of the jaw. Such lip stretching is still practiced in some places. Women of the Mursi of Ethiopia wear lip rings on occasion that may reach 15 centimetres in diameter. 
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
                        <p class="mb-1">1. There has been a lot of academic research into body piercing.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q1" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">2. Ear and nose piercing are generally believed to have been more widespread than other forms of piercing.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q2" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">3. There are few records available about navel piercing.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q3" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">4. Navel piercing has becoming one of the most popular forms of body piercing in the last few decades.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q4" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">5. Body piercing is more popular with the younger generations than with older people. </p>
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
                <p class="mb-0">Classify the following statements as referring to different body piercing.</p>
                <p class="mb-0">For Questions 6 – 10 select a letter, A, B, C, or D.</p>
                <p>NB You may use each letter more than once.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex flex-column">
                            <strong class="font-weight-bold">A. Ear piercing</strong>
                            <strong class="font-weight-bold">B. Nose piercing</strong>
                            <strong class="font-weight-bold">C. Lip piercing</strong>
                            <strong class="font-weight-bold">D. All the above</strong>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="q6" class="col-form-label">6. This form of body piercing goes back a long way in history.</label>
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
                            <label for="q7" class="col-form-label">7. This was sometimes done on the eve of a bride’s wedding.</label>
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
                            <label for="q8" class="col-form-label">8. This kind of decoration can alter the shape of the face.</label>
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
                            <label for="q9" class="col-form-label">9. This form of decoration was common in medieval European men.</label>
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
                            <label for="q10" class="col-form-label">10. The decoration was removed at regular intervals and replaced by a larger piece.</label>
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
                <p>Choose the correct letter, a, b, c, or d</p>
                
                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">11.</span> Why are some forms of body piercing controversial?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-1" name="q11" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q11-1">a. It prevents young people from learning properly.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-2" name="q11" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q11-2">b. People who have their bodies pierced perform less well in the work-place.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-3" name="q11" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q11-3">c. Some people like to pierce their bodies in extreme places.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-4" name="q11" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q11-4">d. The exact reason is not given.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">12.</span> Why did some seamen and discoverers wear ear-rings?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-1" name="q12" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q12-1">a. Because it made them look better.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-2" name="q12" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q12-2">b. Because they were of noble blood.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-3" name="q12" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q12-3">c. Because they believed it helped them in their travels.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-4" name="q12" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q12-4">d. Because most men in the Middle Ages liked to wear ear-rings.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">13.</span> Why do some Indian women wear a nose stud in the left nostril?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-1" name="q13" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q13-1">a. That part of the body is associated with the woman’s reproductive organs.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-2" name="q13" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q13-2">b. This practice spread from Middle Eastern nomadic tribes as they migrated to India.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-3" name="q13" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q13-3">c. It indicates that they are going to be married the following morning.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-4" name="q13" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q13-4">d. It is done for medicinal purposes so that the woman does not fall ill.</label>
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
            url: "{{ route('store.exam-two') }}",
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