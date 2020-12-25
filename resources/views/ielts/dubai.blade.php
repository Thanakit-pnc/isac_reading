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
            <h3>Dubai</h3>    
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
                    On a hot dusty afternoon, we parked the jeep in a flurry of sand in front of a steel and glass bank.  Even in areas of downtown Dubai, skyscrapers soar out of the desert like hi-tech islands in a sea of sand.  With little in the way of landscaping or pavements linking one multi-national high-rise to another, we squelched through the sand to our destination.  No one walks much in Dubai.  It’s too hot, and anyway, the roads are excellent.  Nevertheless, that afternoon we plunged on foot down narrow alleys only just wide enough to permit the passage of a single donkey into Bastakiya, the heart of old Dubai.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">B</span>
                    <p>
                    What’s left of Dubai’s heritage?  Precious little, you might think.  But determined sightseers can still find ways to experience the rhythms of old Arabia — a goal that is a great deal more addictive and subtle than the usual business, beach and shopping pursuits.  Bastakiya was once an extensive enclave of square courtyard houses in the Bur Dubai area of the city on the bank of Dubai Creek.  What remains of the old coral-built homes originally owned by merchants who traded in spices, incense, gold and textiles is still suffused with an ethereal, riveting ambience.  As recently as the 1950’s, a visitor arriving at Dubai by sea described the city as a forest of skyscrapers, so numerous were the graceful wind-towers of Bastakiya.  Elegant and elegiac they still look today, crowning flat-roofed homes of faded splendour.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">C</span>
                    <p>
                    Rising some 15 metres above the rooftops, wind-towers work by trapping the breezes that stray into vents which face in four directions.  The vents channel the moving air down into the building from where it is circulated through the living areas.  As in so many of the Gulf’s traditional seashore towns, the houses of Bastakiya were built from blocks of coral.  In Dubai, the mortar used is called sarooj, a mixture of red clay, manure and water that washes the walls with a peachy glow.  Date palms provided the beams, and heavy carved wooden doors still bar the way from the street.  These homes do not divulge much to the outside world.  Their windows open onto tree shaded courtyards that allow privacy, security and thermal insulation.  Incised stucco panels, pierced window screens, crenellations and columns topped with lotus-shaped capitals are decorative features which also contribute to the basic structure of the house.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">D</span>
                    <p>
                    Trudging along the twisting, sandy lanes between the wind-towered houses, we reached the Majlis Gallery, a sensitively restored example of the old architectural style.  The former merchant’s home now houses some of the finest examples of Dubai’s arts and crafts.  Visiting the gallery also provides an ideal opportunity to experience the interior of a traditional wind-towered house — with its high ceilings and cool, narrow rooms.  The width of a room was restricted by the mangrove poles used as ceiling beams none of which, it seems could have been longer than about 3.5 metres.  Traditionally, there would be a male <strong class="font-weight-bold">majlis</strong> (reception room) as well as a female <strong class="font-weight-bold">majlis</strong> with separate entrances.  In some of the larger mercantile homes, another public majlis, situated near the main door, would be used to extend hospitality to visiting traders.  
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">E</span>
                    <p>
                    Not for nothing was Dubai once called the City of Merchants.  Like so many other ports of the Gulf, it operated as a highly successful entrepot for thousands of years, importing and exporting goods as far afield as China in the same type of magnificent wooden dhows (a kind of boat) that are still constructed along the coastline.  The region itself has been blessed with three raw materials that have brought continued prosperity to the area.  In antiquity, it was copper, then pearls and now oil.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">F</span>
                    <p>
                    Meanwhile the local coastal people subsist, as non-mercantile classes always have, on the basics of life — boat building, fishing and harvesting dates.  Their rural counterparts, the Bedouin, herded camels, sheep and goats, and still do.  The camels are often bred nowadays for racing — with untold urban wealth up for prize money. The goats may be barbequed under the stars for tourists on a desert safari.  These days the sand dunes echo to the roar of jeeps on ‘wadi-bashing’ expeditions or the swish of the latest craze — sand skiing.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">G</span>
                    <p>
                    Cutting a soft, gleaming swathe through Dubai is The Creek, the highway of a civilisation built on trade. It is one of the few safe anchorages along the region’s southern coast and was a traditional haven for the dhows that plied the waters of the Persian Gulf and beyond. From one of the metal bridges that now span The Creek, one can watch the dhow building trade continuing as it has gone for centuries. Hundreds of these sturdy wooden boats add colour to the Dhow Wharfage. As recently as the 1970’s, dhows carried two-thirds of Dubai’s import/export business. Today, the dhows transport only a fraction of the Emirate’s trade but the sight of the Arabs dressed in their flowing robes is a tangible reminder of the past. Only the goods being loaded have changed, it seems. Gone are the pearls and, of course, the slaves.  Nowadays one dodges around electrical goods and building materials on the wharfs. In family-owned boatyards, dhows are still built in the time-honoured way, with keels of teak and ribs and flanks of acacia wood.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">H</span>
                    <p>
                    The Creek was the nexus of the pearling expeditions on which Dubai’s early fame was built. Now it’s gold that lures visitors to the souks — the traditional market places. During the early part of the century, fortunes were made through the astute trading of gold from Dubai to the Asian subcontinent, and to this day, many of the souk’s customers are from that region.  In glittering shop after glittering shop, three genres of jewellery are marketed.  The first type is aimed at Asians, who tend to buy real gold.  The second caters to the European bargain hunter and the third offers traditional Bedouin-style jewellery.  Unfortunately, virtually none of the latter is antique because Bedouin custom dictates that jewellery which was part of a woman’s dowry must be melted down upon her death.  In any case, genuine Bedouin jewellery was crafted in silver, the taste for gold being relatively recent.
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
                            <label for="col-form-label" class="d-flex"><span class="mr-1">1.</span> Why don’t many people walk around in Dubai?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-1" name="q1" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q1-1">a. The pavements aren’t very good for walking.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-2" name="q1" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q1-2">b. The weather makes walking uncomfortable.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-3" name="q1" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q1-3">c. The quality of the roads makes driving a better option.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-4" name="q1" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q1-4">d. All the above reasons.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">2.</span> What is referred to as the “rhythms of old Arabia”?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-1" name="q2" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q2-1">a. Popular pursuits such as shopping and going to the beach.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-2" name="q2" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q2-2">b. The usual business activities of ancient Dubai.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-3" name="q2" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q2-3">c. The sights and sounds of historic Dubai.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-4" name="q2" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q2-4">d. The music played in the streets of Dubai.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">3.</span> How are the “wind-tower” houses cooled?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-1" name="q3" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q3-1">a. The heat inside the house is released through vents in the tower.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-2" name="q3" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q3-2">b. Any wind is caught and directed down to the living areas. </label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-3" name="q3" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q3-3">c. By catching the cool wind from the direction of the sea.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-4" name="q3" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q3-4">d. By using coral to build the houses.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">4.</span> What do we know about the Majlis Gallery?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-1" name="q4" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q4-1">a. A local merchant lives there.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-2" name="q4" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q4-2">b. It serves as an exhibition centre for local arts and crafts.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-3" name="q4" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q4-3">c. The rooms are wide, cool and spacious.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-4" name="q4" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q4-4">d. The height of the ceiling is restricted by the use of mangrove beams.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">5.</span> Which of the following was not a raw material for increasing Dubai’s economic status?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-1" name="q5" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q5-1">a. dhows</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-2" name="q5" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q5-2">b. oil</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-3" name="q5" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q5-3">c. copper</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-4" name="q5" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q5-4">d. pearls</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 6 - 10</h4>
                <p class="mb-0">Identify the paragraphs which contain the following information.</p>
                <p>For Questions 6 to 10 select the letters A – H.</p>

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
                                    <td class="align-middle">The preferred metal for Bedouin jewellery.</td>
                                    <td class="position-relative">
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
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">7</td>
                                    <td class="align-middle">An impression of the Dubai sky-line when arriving by boat.</td>
                                    <td class="position-relative"> 
                                        <select class="form-control w-100" name="q7">
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
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">8</td>
                                    <td class="align-middle">A comparison of occupations between city and countryside folk.</td>
                                    <td class="position-relative">
                                        <select class="form-control w-100" name="q8">
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
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">9</td>
                                    <td class="align-middle">Why houses in Dubai have a slightly orange appearance.</td>
                                    <td class="position-relative">
                                        <select class="form-control w-100" name="q9">
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
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">10</td>
                                    <td class="align-middle">Different rooms for welcoming men and women into the home.</td>
                                    <td class="position-relative">
                                        <select class="form-control w-100" name="q10">
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
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 11 - 14</h4>
                <p class="mb-0">Complete the following passage using words from the box.</p>
                <p>For Questions 11 – 14, select the letters a – h.</p>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="border">
                            <div class="row p-1">
                                <div class="col-md-4">a. fortunes</div>
                                <div class="col-md-4">b. shopping</div>
                                <div class="col-md-4">c. bargain</div>
                                <div class="col-md-4">d. business</div>
                                <div class="col-md-4">e. souvenir</div>
                                <div class="col-md-4">f. attracted</div>
                                <div class="col-md-4">g. journey</div>
                                <div class="col-md-4">h. kinds</div>
                            </div>
                        </div>

                        <div class="mt-3 line-height">
                        The Creek was the central feature of the pearling trade on which Dubai’s early fame was built. Nowadays visitors are <span class="font-weight-bold">11.</span> 
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
                        to the traditional market places in search of gold. At the turn of the century, people made their <span class="font-weight-bold">12.</span>
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
                        through the skillful trading of gold from Dubai to India, Pakistan and Sri Lanka, and even today, many of the souk’s customers are from that region. In the market stalls, three <span class="font-weight-bold">13.</span>
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
                        of jewellery are marketed. The first is aimed at Asians, who tend to buy real gold.  The second caters to the Europeans looking for a <span class="font-weight-bold">14.</span>
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
                        , and the third offers traditional Bedouin-style jewellery.
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
            url: "{{ route('store.exam-seven') }}",
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

                $(`<span class="ml-2 text-success font-weight-bold" style="position: absolute; top: 50%; right: 30px; transform: translateY(-50%);">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
                select.addClass('border border-success');

            } else {

                $(`<span class="ml-2 text-success font-weight-bold" style="position: absolute; top: 50%; right: 30px; transform: translateY(-50%);">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
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