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
            <h3>Stone Fortress of Brunei</h3>    
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
                    This man-made island, which is three kilometres from the capital and located in an area called Kota Batu, rises above the waterline, surrounded by mangrove trees and teeming with wildlife. Its appearance gives no clue to its historical significance.  Terindak Island is a visible remnant of a lost city — the old capital of the Brunei sultanate during its “golden age” in the 15th and 16th centuries.  Kota Batu was the commercial and political centre of an empire that comprised northern Borneo and the southern Philippines.  A busy port with strong maritime trading links to the rest of Southeast Asia and China, it was a place of wealth and power. Probably built as a combination of fortress, custom house and harbour-master’s office, Terindak Island had stout retaining walls of nibong palm trunks and was connected to the mainland by a bridge or causeway.  Its dock or anchorage was an adjacent tidal flat.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">B</span>
                    <p>
                    The earliest references to Brunei are found in 6th century Chinese sources.  Archaeologists have carbon-dated woodwork preserved in the clay soil to the 12th century when international trade was well established.  An inspector of Chinese maritime trade, writing in 1225, listed Brunei as one of the main destinations for ships from Fukien province.  These links endured for a long time.  In 1371 Brunei’s first Islamic ruler sent an envoy to China, and the second sultan, Abdul Majid Hassan, was buried at Nanking in 1408.  The Chinese came to trade for camphor, a medicinal substance derived from the tree of the same name and a highly valued commodity abundant in Brunei.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">C</span>
                    <p>
                    Kota Batu became pre-eminent by the 14th century.  A good site for a city and port, it was sheltered from monsoon winds by surrounding hills and the wide river gave sailing vessels room to manoeuvre.  It was fairly secure thanks to an artificial sand bar at the river mouth which prevented large ships from entering.  Presumably, the ocean-going junks of the Chinese anchored in the bay and sent their trade goods to Terindak harbour in smaller craft.  Chinese masons built a defensive stone wall around the city for the fourth sultan, Sharif Ali, around 1430.  This is the origin of the name, since Kota Batu means stone fortress in Malay.  Fortifications were also built on Chermin Island at the mouth of the river.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">D</span>
                    <p>
                    Three generations later, the pattern of commerce in Asia began to change irrevocably with the arrival of Europeans determined to seize control of the lucrative spice trade.  At first, this ran to Brunei’s favour.  The great port of Malacca, a key bastion of the western approaches to the Malay archipelago, fell to the Portuguese in 1511 and many of its Muslim traders and nobility moved east to Brunei, which took on Malacca’s mantle as the premier trading centre in the region.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">E</span>
                    <p>
                    When Antonio Pigafetta arrived in Brunei with Magellan’s Spanish fleet in 1521, he recorded his famous description of Kota Batu, a city of 25,000 houses, mostly built on stilts over water in the time-honoured fashion still visible today.  Though most historians believe his figure was exaggerated, no one doubts the evidence of a prosperous, well-ordered city — possibly the finest in the archipelago at that time.  The Spaniards were clearly impressed by Brunei’s wealth and wary of its military power.  Pigafetta’s account dwells on the number of armed men in the royal bodyguard, the city’s strong fortifications and the number of boats in the sultan’s flotilla.  It was the arrival of the latter in Brunei Bay which panicked the Spaniards and caused them to flee, cutting loose a precious anchor to speed their departure.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">F</span>
                    <p>
                    Nevertheless, by 1600, Kota Batu had become a city in decline as people moved up river.  The catalyst was probably the Spanish attack of 1578.  At the time, Spain was trying to exert control over the southern Philippines, which were under nominal Bruneian sovereignty.  The inevitable clash came when the Spanish sailed to Brunei, defeated the sultan’s fleet and occupied Kota Batu.  They withdrew soon afterwards when sickness and attrition had depleted their ranks — but not before sacking the city and burning the mosque reputed to be one of the most splendid in Asia.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">G</span>
                    <p>
                    Dutch mariners who arrived in 1600 related that those who fled up river during the Spanish assault never returned.  They found a city of 300 houses and provided the first record of people living further inland, a population drift to what must have seemed a safer haven.  By the late 17th century, the capital was firmly established further north and upstream — roughly where Bandar Seri Begawan is today.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">H</span>
                    <p>
                    Kota Batu’s stone wall has gone, but archaeologists continue the painstaking work of uncovering and investigating the buried remnants of the old city.  Now the name of a suburb of the present-day capital, Bandar Seri Begawan, Kota Batu refers to both a Malay village near Terindak island and to the whole of the northern bank of the Brunei River. Two of the sultans who reigned over Kota Batu in its golden age are buried there and their tombs overlook the river near the Brunei Museum.  Like Terindak Island, they are reminders of Brunei’s lost city - the heart of a golden age and the capital of an empire which drew trade from the four corners of Asia.
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
                            <label for="col-form-label" class="d-flex"><span class="mr-1">1.</span> What do we know about the old city of Kota Batu?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-1" name="q1" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q1-1">a. It was located at the centre of northern Borneo and the southern Philippines.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-2" name="q1" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q1-2">b. It was an island about three kilometers from the capital.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-3" name="q1" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q1-3">c. It was a busy trading and administrative centre.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-4" name="q1" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q1-4">d. It was connected to the mainland by a bridge.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">2.</span> Why did the Chinese traders come to Brunei?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-1" name="q2" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q2-1">a. Because Brunei was listed as one of the main destinations for ships from Fukien province.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-2" name="q2" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q2-2">b. Because the Brunei ruler sent an envoy to China.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-3" name="q2" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q2-3">c. Because the second sultan of Brunei was buried in China.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-4" name="q2" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q2-4">d. Because they wanted to buy a certain kind of wood which was plentiful in Brunei.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">3.</span> Why was Kota Batu a good place for a city and port?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-1" name="q3" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q3-1">a. It was sheltered from the strong monsoon winds.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-2" name="q3" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q3-2">b. The river was wide enough for ships to manoeuvre easily.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-3" name="q3" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q3-3">c. An artificial sand bar provided protection from unwanted visitors.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-4" name="q3" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q3-4">d. All the above reasons.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">4.</span> What caused Brunei to become an important trading centre?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-1" name="q4" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q4-1">a. European settlers seized control of Brunei.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-2" name="q4" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q4-2">b. Many traders relocated from the Malay peninsula to Brunei</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-3" name="q4" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q4-3">c. Brunei controlled the spice trade.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-4" name="q4" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q4-4">d. Portuguese forces invaded Malacca in 1511.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">5.</span> What caused the Spanish to panic and flee?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-1" name="q5" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q5-1">a. The number of armed men in the sultan’s bodyguard.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-2" name="q5" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q5-2">b. The city’s strong fortifications.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-3" name="q5" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q5-3">c. Brunei’s wealth.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-4" name="q5" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q5-4">d. The arrival of the sultan’s navy.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-0">Questions 6 - 10</h4>
                <p class="mt-0 mb-0">Identify the paragraphs which contain the following information.</p>
                <p class="mt-0 mb-0">For Questions 6-10, select the letters A–H.</p>
                <p><span class="font-weight-bold">NB</span> You may use any letter more than once.</p>

                <div class="row justify-content-between align-items-center mb-2">
                    <div class="col-4 offset-8 mb-2 text-center font-weight-bold">
                        Paragraph
                    </div>
                    <div class="col-8">
                        6. Details of where two of Brunei’s rulers are buried.
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
                        7. The reason why Kota Batu decreased in importance.
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
                        8. Historical accounts of the origins of Brunei.
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
                        9. First impressions of a European visitor.
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
                        10. Geographical reasons why Kota Batu grew in importance.
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

                <h4 class="mt-0 mb-0">Questions 11 - 14</h4>
                <p class="mt-0 mb-0">Complete the following sentences.</p>
                <p>Select <span class="font-weight-bold">NO MORE THAN THREE WORDS AND/OR A NUMBER</span> for each answer.</p>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="border">
                            <div class="row p-1">
                                <div class="col-md-4">a. sultan</div>
                                <div class="col-md-4">b. illness</div>
                                <div class="col-md-4">c. war</div>
                                <div class="col-md-4">d. rule</div>
                                <div class="col-md-4">e. island</div>
                                <div class="col-md-4">f. sailors</div>
                                <div class="col-md-4">g. river</div>
                                <div class="col-md-4">h. attacked</div>
                            </div>
                        </div>

                        <div class="mt-3 line-height">
                        In 1578, Spain was trying to exert control over the southern Philippines, which were under Bruneian  <span class="font-weight-bold">11.</span> 
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
                        . When the Spanish sailed to Brunei, they defeated the royal flotilla and took control of Kota Batu.  They later withdrew after large numbers of their soldiers were stricken with  <span class="font-weight-bold">12.</span>
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
                        but not before destroying the city and burning the splendid mosque. When Dutch  <span class="font-weight-bold">13.</span>
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
                        arrived in 1600, they related that those who had escaped during the Spanish invasion never returned.  Inland, they found a city of 300 houses providing the first record of people living away from the <span class="font-weight-bold">14.</span>
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
                        </div>, a population drift to what must have seemed a safer haven.  
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
            url: "{{ route('store.exam-twentythree') }}",
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