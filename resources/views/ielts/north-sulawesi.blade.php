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
            <h3>North Sulawesi</h3>    
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
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">A</span>
                    <p>
                    Northern Sulawesi is the equatorial top end of that bizarrely shaped island, formerly known as the Celebes, just three hours flying time from Jakarta.  It’s an island that’s home to a multitude of different indigenous peoples, all separated by a rugged, mountainous terrain, spawning a wealth of cultural individuality.  For over 500 years Northern Sulawesi was dominated by European spice-hungry colonialists, such as the Portuguese, the Spanish and the Dutch, who, along with the Polynesians from the nearby Pacific Ocean, all managed to contribute to the area’s culture.  It’s this unique blend of influences, coupled with an agriculturally rich, volcano-studded landscape and lush coastline, that Indonesian tourism authorities are betting will be their next great Bali-style tourism success.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">B</span>
                    <p>
                    After all the two places have a great deal in common.  Bali and North Sulawesi enjoy a volcanic island landscape and a tropical climate that has inspired intensive agricultural cultivation.  The people of both islands have strong living cultural traditions and values, remaining fiercely independent in their relations with the central government in Jakarta.  Indonesian tourism officials believe that when tourists finally lose their taste for the well-trodden allure of Bali, Manado has the stuff to pick up the slack.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">C</span>
                    <p>
                    Their confidence is evidenced by the opening of lavish, five-star hotels and resorts situated on the banks of the city’s tranquil harbour.  Hoteliers hope to capitalise on the area’s growing reputation as an international diving, sailing and water sports centre, as well as on the natural beauty provided by the dense jungle offered by the National Park — the protected home of the world’s smallest primate, the wide-eyed Tarsius monkey.  
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">D</span>
                    <p>
                    Manado beach looks across the bay to the world-famous sea gardens of Bunakan.  In the shadow of an extinct volcano, it’s a natural underwater extravaganza of corals, rare tropical fish, and an occasional visit by schools of dolphins and pilot whales.  Among the international diving fraternity, Bunakan is known for its exciting deep coral walls that plummet to the dark sea bottom.  On most reefs the coral ceases to grow at around 30 or 40 feet, but here the coral still grows at 120 feet.  The sea-water is rich in nutrients, and in a way, the clarity of the water helps the coral to grow.  
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">E</span>
                    <p>
                    The light-skinned Minahasa people are North Sulawesi’s dominant ethnic group, but their origins still remain a mystery to this day.  “Our history is a bit confused,” explains a local resident.  “Some say the Minahasa came from Formosa; some think they came from Vietnam or more to the north, but nobody knows exactly.”  The pre-Christian Minahasa are generally still a mystery, but just outside the harbour capital of Manado, are iron-age remnants of their ancient culture that tend to create more questions than they answer.  They come in the form of thick, elaborately carved stone tombs, called <span class="font-weight-bold">warugas</span>.  The dead were buried in a sitting position along with their most prized household possessions, jewellery, and even antique Ming porcelain.  They were often buried next to their homes and venerated by their surviving relatives.  Because of the valuables added to the tombs, however, most have since been plundered not only of their contents, but also of their secrets.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">F</span>
                    <p>
                    Minahasa Culture is, however, alive and well in their unique traditional architecture.  The <span class="font-weight-bold font-italic">adat</span> or traditional house is still the first choice of the Minahasa, but they needn’t be ancient to qualify as traditional.  It just needs to be slightly elevated, of wooden construction, and conforming to the design concepts passed down by centuries of home building. Visiting the cool hill country behind Manado is like returning to a less complicated period of time.  The hill country town of Tomahon still bustles with the sound of horses’ hooves — the <span class="font-weight-bold font-italic">bendis</span> or horse carts that have been banned from Manado in an effort to keep the streets clean.  But they still take their place in Tomohon’s traffic alongside the lorries and <span class="font-weight-bold font-italic">bemos</span> and ox carts that are still used to transport produce to the market.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">G</span>
                    <p>
                    The surprising orchestral music flowing from inside one of the Tomohon’s many Christian churches takes the place of usual organ hymns.  The source is an entire orchestra of local uniformed musicians, all playing homemade musical instruments. Great tubas and French horns are predominant because of their size, but a closer look shows bamboo xylophones and brass cornets and flutes — all designed and built in the villages.  It is another example of how the Minahasa have taken a European tradition and made it part of their own culture. Tomahon is also the gateway to Lake Tandano, the massive highland freshwater lake.  Small resorts, hot springs, and homestay-style hostels circle the spectacular lake surrounded by forested hills and volcanoes.  Rolling thunderstorms tumble over the lake, while fishermen hovering around the lush shoreline check their fish traps.  Others batten down the shutters on their tiny homes that are precariously balanced on bamboo stilts over the water.  
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">H</span>
                    <p>
                    Unlike many Asian countries, North Sulawesi has an uncluttered, low-density lifestyle where the quality of life seems to take precedence over the accumulation of material wealth.  But nevertheless the wealth is there.  Just take a walk down any Manado street around sunset and see the locals enjoying their grand promenade along the harbour.  Few sights on a traveller’s agenda could ever claim to be as rich.  
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-box font-16 text-dark overflow-custom">
                <h4 class="mt-0 mb-1">Questions 1 - 4</h4>
                <p>Choose the correct letter a, b, c, or d.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">1.</span> What do all the people of Sulawesi all have in common?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-1" name="q1" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q1-1">a. They share the same cultural background.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-2" name="q1" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q1-2">b. They have European ancestors.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-3" name="q1" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q1-3">c. They speak the same language.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-4" name="q1" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q1-4">d. They are separated by difficult terrain.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" ><span class="mr-1">2.</span> What common characteristics do Bali and Sulawesi <span class="font-weight-bold">NOT</span> share?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-1" name="q2" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q2-1">a. They are both well-known tourist destinations.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-2" name="q2" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q2-2">b. They both have similar climates and landscapes.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-3" name="q2" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q2-3">c. They both have successful agricultural sectors.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-4" name="q2" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q2-4">d.They both enjoy a strong cultural heritage.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">3.</span> Most warugas have no secrets to reveal because</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-1" name="q3" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q3-1">a. most of them were buried in the sitting position.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-2" name="q3" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q3-2">b. the European settlers erased any trace of their culture.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-3" name="q3" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q3-3">c. any such items have been stolen along with their valuable possessions.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-4" name="q3" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q3-4">d. they were venerated by their surviving family members.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">4.</span> Manado has no horse carts because</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-1" name="q4" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q4-1">a. the people dislike the sound of the hooves.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-2" name="q4" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q4-2">b. the streets are too narrow.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-3" name="q4" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q4-3">c. the animals would pollute the streets.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-4" name="q4" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q4-4">d. there is no market there.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 5 - 10</h4>
                <p class="mb-0">Identify the paragraphs which contain the following information.</p>
                <p>For Questions 5-10, select the letters A–H.</p>

                <div class="row justify-content-between align-items-center mb-2">
                    <div class="col-4 offset-8 mb-2 text-center font-weight-bold">
                        Paragraph
                    </div>
                    <div class="col-8">
                        5. Characteristics of traditional homes on Sulawesi.
                    </div>
                    <div class="col-4">
                        <div class="position-relative">
                            <select class="form-control" name="q5">
                                <option value="">Select Answer</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mb-2">
                    <div class="col-8">
                        6. A comparison between two Indonesian islands.
                    </div>
                    <div class="col-4">
                        <div class="position-relative">
                            <select class="form-control" name="q6">
                                <option value="">Select Answer</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mb-2">
                    <div class="col-8">
                        7. A description of a popular evening pastime in Manado.
                    </div>
                    <div class="col-4">
                        <div class="position-relative">
                            <select class="form-control" name="q7">
                                <option value="">Select Answer</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mb-2">
                    <div class="col-8">
                        8. An example of how European settlers have influenced current traditions.
                    </div>
                    <div class="col-4">
                        <div class="position-relative">
                            <select class="form-control" name="q8">
                                <option value="">Select Answer</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mb-2">
                    <div class="col-8">
                        9. An example of an endangered species living there.
                    </div>
                    <div class="col-4">
                        <div class="position-relative">
                            <select class="form-control" name="q9">
                                <option value="">Select Answer</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mb-2">
                    <div class="col-8">
                        10. A list of creatures visiting the waters around Manado.
                    </div>
                    <div class="col-4">
                        <div class="position-relative">
                            <select class="form-control" name="q10">
                                <option value="">Select Answer</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 11 - 14</h4>
                <p class="mb-0">Complete the following passage using words from the box. </p>
                <p>For Questions 11–14, select the letters a–h.</p>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="border">
                            <div class="row p-1">
                                <div class="col-md-4">a. ancestral</div>
                                <div class="col-md-4">b. stolen</div>
                                <div class="col-md-4">c. venerated</div>
                                <div class="col-md-4">d. ceramic</div>
                                <div class="col-md-4">e. coastal</div>
                                <div class="col-md-4">f. heritage</div>
                                <div class="col-md-4">g. disappeared</div>
                                <div class="col-md-4">h. deceased</div>
                            </div>
                        </div>

                        <div class="mt-3" style="line-height: 2rem;">
                        The origins of the Minahasa remain a mystery. However, just outside the  <span class="font-weight-bold">11.</span> 
                        <div class="d-inline-block position-relative">
                            <select name="q11" class="form-control">
                                <option value="">Select Answer</option>
                                <option value="A">a</option>
                                <option value="B">b</option>
                                <option value="C">c</option>
                                <option value="D">d</option>
                                <option value="E">e</option>
                                <option value="F">f</option>
                                <option value="G">g</option>
                                <option value="H">h</option>
                            </select>
                        </div>
                        capital of Manado, iron-age remains of their ancient culture are in evidence; unfortunately, they tend to create more questions than they answer.  They come in the form of thick, elaborately carved stone tombs, known locally as warugas.  The <span class="font-weight-bold">12.</span>
                        <div class="d-inline-block position-relative">
                            <select name="q12" class="form-control w-auto">
                                <option value="">Select Answer</option>
                                <option value="A">a</option>
                                <option value="B">b</option>
                                <option value="C">c</option>
                                <option value="D">d</option>
                                <option value="E">e</option>
                                <option value="F">f</option>
                                <option value="G">g</option>
                                <option value="H">h</option>
                            </select>
                        </div>
                        were buried in a sitting position along with their most prized possessions, jewellery, and even examples of antique <span class="font-weight-bold">13.</span>
                        <div class="d-inline-block position-relative">
                            <select name="q13" class="form-control w-auto">
                                <option value="">Select Answer</option>
                                <option value="A">a</option>
                                <option value="B">b</option>
                                <option value="C">c</option>
                                <option value="D">d</option>
                                <option value="E">e</option>
                                <option value="F">f</option>
                                <option value="G">g</option>
                                <option value="H">h</option>
                            </select>
                        </div>
                        crafts.  They were often buried next to their homes and worshipped by the rest of the family.  Because of the valuables added to the tombs, however, most have since been  <span class="font-weight-bold">14.</span>
                        <div class="d-inline-block position-relative">
                            <select name="q14" class="form-control w-auto">
                                <option value="">Select Answer</option>
                                <option value="A">a</option>
                                <option value="B">b</option>
                                <option value="C">c</option>
                                <option value="D">d</option>
                                <option value="E">e</option>
                                <option value="F">f</option>
                                <option value="G">g</option>
                                <option value="H">h</option>
                            </select>
                        </div>
                        not only of their contents, but also of their secrets.  
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
            url: "{{ route('store.exam-eighteen') }}",
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

                $(`<span class="ml-2 text-success font-weight-bold" style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
                select.addClass('border border-success');

            } else {

                $(`<span class="ml-2 text-success font-weight-bold" style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
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