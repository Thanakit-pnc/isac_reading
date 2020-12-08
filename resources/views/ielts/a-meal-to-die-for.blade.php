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
                The Aral Sea was a lake that lay between Kazakhstan in the north and Karakalpakstan, an autonomous region of Uzbekistan, in the south. The name roughly translates as "Sea of Islands", referring to more than 1,534 islands that once dotted its waters.
                </p>
                <p>
                Formerly one of the four largest lakes in the world with an area of 68,000 square kilometres, the Aral Sea has been steadily shrinking since the 1960s after the rivers that fed it were diverted by Soviet irrigation projects. By 2007, it had declined to 10% of its original size, splitting into four lakes – the North Aral Sea, the eastern and western basins of the once far larger South Aral Sea and one smaller lake between North and South Aral Seas. By 2009, the southeastern lake had disappeared and the southwestern lake retreated to a thin strip at the extreme west of the former southern sea. The maximum depth of the North Aral Sea is 42 m (as of 2008). 
                </p>
                <p>
                The shrinking of the Aral Sea has been called "one of the planet's worst environmental disasters". The region's once prosperous fishing industry has been essentially destroyed, bringing unemployment and economic hardship. The Aral Sea region is also heavily polluted, with consequent serious public health problems. The retreat of the sea has reportedly also caused local climate change, with summers becoming hotter and drier, and winters colder and longer. 
                </p>
                <p>
                In the early 1960s the Soviet government decided the two rivers that fed the Aral Sea, the Amu Darya in the south and the Syr Darya in the northeast, would be diverted to irrigate the desert, in an attempt to grow rice, melons, cereals, and cotton. This was part of the Soviet plan for cotton, or "white gold", to become a major export. This eventually succeeded, and today Uzbekistan is one of the world's largest exporters of cotton.
                </p>
                <p>
                The construction of irrigation canals began on a large scale in the 1940s. Many of the canals were poorly built, allowing water to leak or evaporate. From the Qaraqum Canal, the largest in Central Asia, perhaps 30 to 75% of the water went to waste. Today, only 12% of Uzbekistan's irrigation canal length is waterproofed. By 1960, between 20 and 60 cubic kilometres of water were going each year to the land instead of the sea. Most of the sea's water supply had been diverted, and in the 1960s, the Aral Sea began to shrink. From 1961 to 1970, the Aral's sea level fell at an average of 20 cm a year; in the 1970s, the average rate nearly tripled to 50–60 centimetres per year, and by the 1980s it continued to drop, now with a mean of 80–90 centimetres each year. The rate of water usage for irrigation continued to increase: the amount of water taken from the rivers doubled between 1960 and 2000, and cotton production nearly doubled in the same period.
                </p>
                <p>
                From 1960 to 1998, the sea's surface area shrank by approximately 60%, and its volume by 80%. In 1960, the Aral Sea had been the world's fourth-largest lake, with an area of approximately 68,000 square kilometres and a volume of 1,100 cubic kilometres; by 1998, it had dropped to 28,687 square kilometres, and eighth-largest. Over the same time period, its salinity increased from about 10 g/L to about 45 g/L. In 1987, the continuing shrinkage split the lake into two separate bodies of water, the North Aral Sea (the Lesser Sea, or Small Aral Sea) and the South Aral Sea (the Greater Sea, or Large Aral Sea).
                </p>
                <p>
                By summer 2003, the South Aral Sea was vanishing faster than predicted. In the deepest parts of the sea, the bottom waters were saltier than the top, and not mixing. Thus, only the top of the sea was heated in the summer, and it evaporated faster than would otherwise be expected. In 2003, the South Aral further divided into eastern and western basins.
                </p>
                <p>
                In 2004, the Aral Sea's surface area was only 17,160 km2, 25% of its original size, and a nearly five-fold increase in salinity had killed most of its natural flora and fauna. By 2007, the sea's area had further shrunk to 10% of its original size, and the salinity of the remains of the South Aral had increased to levels in excess of 100 g/L (grams per litre); by comparison, the salinity of ordinary seawater is typically around 35 g/L; the Dead Sea's salinity varies between 300 and 350 g/L. The decline of the North Aral has now been partially reversed following construction of a dam in 2005, but the remnants of the South Aral continued to disappear and its drastic shrinkage has created the Aralkum, a desert on the former lake bed.
                </p>
                <p>
                The inflow of groundwater discharge into the South Aral Sea will not in itself be able to stop the desiccation. This inflow of about 4 cubic kilometres per year is larger than previously estimated. This groundwater originates in the Pamirs and Tian Shan mountains and finds its way through geological layers to a fracture zone at the bottom of the Aral.
                </p>
                <p>
                In spite of ongoing efforts to save and replenish the North Aral Sea, the outlook for the remnants of the South Aral Sea remains bleak.
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
                        <p class="mb-1">1. There are more than fifteen hundred islands in the Aral Sea.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q1" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">2. The Aral Sea now consists of just 4 small lakes.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q2" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">3. The region’s fishing industry used to be the largest in the world.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q3" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">4. Uzbekistan’s cotton industry has become very successful.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q4" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">5. More than one hundred irrigation canals were built to provide water for the crops.</p>
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
                <p class="mb-0">Classify the following statements as referring to the different years.</p>
                <p class="mb-0">For Questions 6 – 10 select a letter, A, B, C, or D.</p>
                <p>NB You may use each letter more than once.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex flex-column">
                            <strong class="font-weight-bold">A. 1960</strong>
                            <strong class="font-weight-bold">B. 1980’s</strong>
                            <strong class="font-weight-bold">C. 1990’s</strong>
                            <strong class="font-weight-bold">D. 2005</strong>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="q6" class="col-form-label">6. A dam was built to prevent the sea from shrinking further.</label>
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
                            <label for="q7" class="col-form-label">7. The Aral Sea was the fourth largest lake in the world.</label>
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
                            <label for="q8" class="col-form-label">8. The Aral Sea was the eighth largest lake in the world.</label>
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
                            <label for="q9" class="col-form-label">9. The Aral Sea split into two bodies of water.</label>
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
                            <label for="q10" class="col-form-label">10. The sea level fell by almost one metre per year.</label>
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
                <p>For Questions 11 - 13, select a, b, c, or d</p>
                
                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">11.</span> Why did so much of the water which was meant for irrigation go to waste?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-1" name="q11" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q11-1">a. The sea was not large enough to provide water for the crops.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-2" name="q11" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q11-2">b. The crops which were chosen were not suitable for conditions in the desert.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-3" name="q11" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q11-3">c. The water from the Aral Sea contained too much salinity.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-4" name="q11" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q11-4">d. The irrigation canals were not waterproofed.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">12.</span> In the early twentieth century, why did the water evaporate faster than expected?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-1" name="q12" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q12-1">a. Because the sea had split into 4 smaller lakes.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-2" name="q12" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q12-2">b. Because the surface area had shrunk dramatically.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-3" name="q12" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q12-3">c. Because the water at the bottom was saltier than water at the top.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-4" name="q12" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q12-4">d. Because the salinity increased from about 10 g/L to approximately 45 g/L.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">13.</span> What effect did the construction of a dam have?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-1" name="q13" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q13-1">a. Water levels increased in the North Aral Sea.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-2" name="q13" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q13-2">b. There was an increase in salinity which caused much of the flora and fauna to die.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-3" name="q13" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q13-3">c. The South Aral Sea continued to shrink and the outlook remains bleak.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-4" name="q13" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q13-4">d. A desert on the former sea-bed, called the Aralkum, has been created.</label>
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
            url: "{{ route('store.exam-one') }}",
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