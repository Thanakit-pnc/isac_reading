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
            <h3>Diamonds</h3>    
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
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">A</span>
                    <p>
                    The attraction of diamonds is difficult to beat. Their brilliance has inspired the rich and famous as well as being legendary for centuries and they remain an enduring symbol of love and tradition. The history of diamonds abounds with tales of superstition and mystery. One well-known example is the Koh-i-Noor, or Mountain of Light. First recorded in 1804 this 186-carat gem is said to bring “the power to rule the world” to whoever owned it. Passed down through the centuries from its first owner, an Indian prince, to its present owner, the British Royal family, the stone has been reduced to 109 carats. It is believed to bring luck to women wearers, but ill-fortune to men.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">B</span>
                    <p>
                    The diamond remains the world’s most popular gemstone, accessible to an international public extending beyond the privileged royal collections of centuries past. Today the gem accounts for an average 85 percent of total US gemstone sales by dollar volume. Most jewelers admit their clients are partial to diamonds. In substance as well as interest, diamonds endure. Diamond is the hardest of all gems and a stone of the simplest composition, being of pure crystallised carbon. Very few rough diamonds from the ground are beautiful; most must be cut and polished. Costly and difficult to mine, diamonds tend to be found in remote and unforgiving environments. The world’s largest mines are in Australia and South Africa. Others are in Zaire, Botswana and Russia.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">C</span>
                    <p>
                    To produce one carat of diamond, miners need to remove and process approximately 250 tons of ore. Even then, only 20 percent of all diamonds mined throughout the world are of gem quality. Due to colour or flaws, the remaining stones are suitable only for industrial purposes. Diamonds are measured in carats, corresponding to one fifth of a gram. The word “carat” is derived from the carob, used by Middle East traders because its seeds were so uniform in weight, assuring an accurate gauge on ancient scales. The carat, corresponding to the weight of one carob seed, was used as a standard measure until the 1900s when the metric system was introduced. Today, the carat is the measure of weight for most gems, except pearls; one carat is divided into 100 points.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">D</span>
                    <p>
                    Nearly half of a diamond’s weight is lost in the cutting process. A rough cut one-carat diamond rarely produces more than one-half carat polished stone.  When a master cutter examines a rough stone, he decides which form it should be given. The most popular shape for engagement rings remains the round brilliant cut.  When the original diamond does not best lend itself for this shape, it will be considered for “fancy cutting” as a marquise, oval, pear, emerald or heart shaped cut. The round brilliant, oval, marquise and pear classics are consistently cut and polished into 58 facets, or faces, each. It is the shape of these facets, which differ from one cutting to another, that determine the intensity of the diamond’s brilliance and “flame”.  No other gem can match its sparkle. 
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">E</span>
                    <p>
                    A method long used in faceting diamonds is cleaving. After studying the internal structure of a diamond carefully, the master cutter calculates where the diamond will divide cleanly and evenly if properly struck. He marks this point on the diamond, makes a thin groove and inserts his cleaving knife, then taps the knife with his hammer. If his calculations are correct, the diamond will divide accordingly; if not, the gem will fragment into thousands of pieces. Today, laser technology has allowed creation of different shapes, such as flowers, stars or animals, offering an alternative to the classic shapes. Each has its own particular appeal and one shape is not inherently better than the other.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">F</span>
                    <p>
                    The overall value of a diamond is determined by its 4c’s — clarity, colour, carat weight and cut; whereas its quality is determined by its ‘fire’. The Gemological Institute of America (GIA) has established a strict scale of standards to define the qualities most desirable in a diamond. More than any other gemstone, diamonds represent romance, wealth and elegance. No other adornment could claim such a durable distinction.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-box font-16 text-dark overflow-custom">
                <h4 class="mt-0 mb-1">Questions 1 - 5</h4>
                <p>Choose the correct letter a, b, c, or d.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">1.</span> One superstition associated with the Koh-I-Noor diamond is</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-1" name="q1" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q1-1">a. it brings good luck to women wearers and bad luck to men.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-2" name="q1" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q1-2">b. its name translates into ‘Mountain of Light’.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-3" name="q1" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q1-3">c. it will only be owned by kings and queens.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-4" name="q1" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q1-4">d. it will be passed down through the centuries.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">2.</span> Why do you think diamonds are so expensive to buy?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-1" name="q2" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q2-1">a. because diamond is the hardest of all gem-stones.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-2" name="q2" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q2-2">b. because they have a very simple composition</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-3" name="q2" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q2-3">c. because extracting them from the ground costs a lot of money.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-4" name="q2" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q2-4">d. because the world’s largest mines are found in Australia and South Africa.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">3.</span> Not all diamonds are suited for use as jewellery because</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-1" name="q3" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q3-1">a. some are not processed properly.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-2" name="q3" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q3-2">b. some are for industrial processes.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-3" name="q3" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q3-3">c. some have defects.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-4" name="q3" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q3-4">d. some are not coloured.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">4.</span> Why was the carob seed chosen as a unit of weight for the diamond?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-1" name="q4" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q4-1">a. Because the seeds were plentiful in places where diamonds were mined.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-2" name="q4" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q4-2">b. Because the seeds all weighed the same and were used to check old scales.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-3" name="q4" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q4-3">c. Because the seeds all looked the same and could be used on ancient scales.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-4" name="q4" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q4-4">d. Because the seeds all weighed the same which guaranteed accurate measurement.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">5.</span> What may cause the gem to fragment into thousands of pieces?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-1" name="q5" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q5-1">a. When the cutter miscalculates the place to strike the diamond.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-2" name="q5" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q5-2">b. When the groove made is too thin.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-3" name="q5" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q5-3">c. When the cutter strikes the diamond with his hammer.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-4" name="q5" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q5-4">d. When the cutter forgets to mark the point on the diamond.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 6 - 10</h4>
                <p class="mb-0">Identify the paragraphs which contain the following information.</p>
                <p>For Questions 6 to 10 select the letters A – F.</p>

                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-sm text-dark">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th class="font-weight-bold text-center">Paragraph</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">6</td>
                                    <td class="align-middle">The benefits of using modern technology in shaping diamonds.</td>
                                    <td class="position-relative">
                                        <select class="form-control" name="q6">
                                            <option value="">Select Answer</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">7</td>
                                    <td class="align-middle">A large amount of raw material is needed to produce a diamond</td>
                                    <td class="position-relative"> 
                                        <select class="form-control w-100" name="q7">
                                            <option value="">Select Answer</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">8</td>
                                    <td class="align-middle">An example of a famous diamond.</td>
                                    <td class="position-relative">
                                        <select class="form-control w-100" name="q8">
                                            <option value="">Select Answer</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">9</td>
                                    <td class="align-middle">A formal attempt to set standards in diamond quality.</td>
                                    <td class="position-relative">
                                        <select class="form-control w-100" name="q9">
                                            <option value="">Select Answer</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">10</td>
                                    <td class="align-middle">Examples of places where diamonds can be found underground.</td>
                                    <td class="position-relative">
                                        <select class="form-control w-100" name="q10">
                                            <option value="">Select Answer</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 11 - 14</h4>
                <p class="mb-0">Complete the following sentences.</p>
                <p>Write NO MORE THAN THREE WORDS for each answer.</p>
                
                <div class="row">
                    <div class="col-md-12">

                        <div class="line-height">
                        A ‘carat’ was exactly the same weight as  
                        <span class="font-weight-bold">11</span> 
                        <div class="d-inline-block">
                            <input type="text" class="form-control form-control-sm w-100" name="q11">
                        </div>
                        and was used as a standard measure until the introduction of
                        <span class="font-weight-bold">12</span>
                        <div class="d-inline-block">
                            <input type="text" name="q12" class="form-control form-control-sm w-auto">
                        </div>
                        in the twentieth century. Currently, the carat is the unit of measurement of weight for all gems with the exception of  
                        <span class="font-weight-bold">13</span>
                        <div class="d-inline-block">
                            <input type="text" name="q13" class="form-control form-control-sm w-auto">
                        </div>
                        .  Each carat is sub-divided into smaller measurements known as 
                        <span class="font-weight-bold">14</span>
                        <div class="d-inline-block">
                            <input type="text" name="q14" class="form-control form-control-sm w-auto">
                        </div>
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
            url: "{{ route('store.exam-six') }}",
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

                $(`<span class="ml-2 text-success font-weight-bold" style="position: absolute; top: 50%; right: 30px; transform: translateY(-50%);">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
                select.addClass('border border-success');

                $(`<span class="ml-2 text-success font-weight-bold">${data.exam[quiz].rightAnswer}</span>`).insertAfter(inputText.parent());
                inputText.addClass('border border-success');

            } else {

                $(`<span class="ml-2 text-success font-weight-bold" style="position: absolute; top: 50%; right: 30px; transform: translateY(-50%);">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
                select.addClass('border border-danger');

                $(`<span class="ml-2 text-success font-weight-bold">${data.exam[quiz].rightAnswer}</span>`).insertAfter(inputText.parent());
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