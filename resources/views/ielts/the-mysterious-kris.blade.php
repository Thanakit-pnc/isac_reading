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
            <h3>The Mysterious Kris</h3>    
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
                    With its razor-sharp, usually wavy blade, the kris was once the favourite weapon of Malay royalty and commoners alike.  In the hands of a skilful exponent of pancak silat, the Malay art of self-defence, it was, and can still be, a deadly weapon in close combat.  Until as recently as the early 20th century, few men felt secure leaving home without a kris tucked into their waistband.  Although stories from the Indonesian archipelago — where the kris is believed to have originated — suggest that the knife existed before recorded history in the area, it is known to have become especially prominent both as a weapon and a status symbol during the Majapahit Empire in the 13th century and later featured at the Malaccan royal court through the exploits of its legendary fighters, Hang Tuah, Hang Jebat and their companions.  The kris was also chosen by the famous Bruneian warrior, Bendahara Sakam, and his men when they drove off the Spanish invaders from the country in 1578.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">B</span>
                    <p>
                    To this day no one is sure about when the first kris came into being, but many fantastic tales exist describing its origins and exploits.  One story concerns a father who gave each of his two sons a bamboo staff and a crude blade to carry on their journey into the world.  Each of these items possessed supernatural powers and could be transformed into whatever its owner wished.  One day the brothers encountered a beautiful girl weaving cloth on a bamboo loom.  Wanting to know more about her, the first brother commanded his staff to turn into a bird.  With similar intentions, the second brother willed his blade to become a tiny snake that promptly entered the loom and bit the girl, causing her to fall into a deep sleep.  Now the girl was the beloved child of a king who, in desperation, finally proclaimed that he would give his daughter in marriage to the man who could revive her.  Being the only one with the antidote to the serpent’s venom, the brother who owned the blade-turned-snake succeeded in saving the princess and thus became her husband.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">C</span>
                    <p>
                    According to the story, a craftsman of the time was inspired by these events to fashion a weapon with a sinuous blade like a snake in motion.  The hilt was given the form of a bird’s head and the sheath that of the loom into which the snake slithered before delivering its coma-inducing bite.  Thus the kris was born.   Like their mythical predecessor, the earliest known krises were also supposed to possess mysterious powers endowed by the sorcerers or craftsmen who fashioned them.  These powers varied from one kris to another and were dependent upon the requirements of the person who had the weapon forged.  Hence numerous stories abound concerning what such krises could do for their owners — making them invisible or warning them of approaching danger and even flying out under cover of darkness to seek and destroy the owners’ enemies.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">D</span>
                    <p>
                    The blades of most krises possess lok or waves, the sum total of which is traditionally an odd number.  The blades of weapons, such as the Kris Sula, however, which was used in the old royal courts to execute wrong-doers, are devoid of lok.  Also commonly found on the widest part of the blade just below the hilt is a small ornamentation in the form of an elephant’s trunk, a snakes’ tongue or other symbol relevant to a particular kris-maker.  The blade is normally covered by a damascened pattern called pamur or kurau depending on the composition of the metal used to fabricate the pattern.  Historically, kris-makers believed that the pattern strengthened the blade and made it more lethal.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">E</span>
                    <p>
                    Crafting a superb kris requires great skill that can only come from years of learning and practice.  The knowledge of fashioning such a weapon was once a closely guarded secret passed on from one generation to another by a few selected family members.  An expert in making kris and other weapons was known as Pandi Besi.  A section of Brunei’s sprawling, centuries-old Kampong Ayer (Water Village) is known as Kampong Pandi Besi, obviously the area in which the country’s ironsmiths once lived and plied their trade.  Nowadays, the blade, hilt and sheath of a kris are usually created separately by three different craftsmen.  Although not unknown, individuals with the ability to competently fashion all three sections have always been rare.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">F</span>
                    <p>
                    The procedure of making the kris is basically the same today as it was in the past, the only difference arising from availability of modern tools.  A piece of metal is repeatedly heated and hammered until it is flat.  The next step involves shaping, sharpening, filing and polishing.  During the process, the shank-pin onto which the hilt will be fitted is eventually drawn out and traces of impurities are removed from the blade.  The finished blade is then immersed in homemade vinegar for at least 24 hours to enhance the engraved pattern. The hilt and sheath are usually fashioned from hard, fine-grained wood that is both durable and attractive.  In Brunei Darussalam, the two types of wood popularly used are obtained from Kulinpapa and Hasana trees.  In the old days, horn and ivory were also occasionally utilized.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">G</span>
                    <p>
                    The historic art of kris-making is being perpetuated in Brunei Darussalam where young men and women apprentices can choose to undertake a three year course in the skill of fashioning these decorative weapons.  The captivating kris may no longer be seen inside a man’s waistband, except perhaps during official ceremonies, but the legendary dagger continues to enthrall all who encounter the fascinating stories of its heritage.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-box font-16 text-dark overflow-custom">
                <h4 class="mt-0 mb-1">Questions 1 - 5</h4>
                <p>Choose the best answer for each question from the given options.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">1.</span> Apart from being a weapon, a kris was also</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-1" name="q1" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q1-1">a. a royal insignia worn only at Court.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-2" name="q1" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q1-2">b. a religious symbol.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-3" name="q1" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q1-3">c. a reminder of Hang Tuah and other famous warriors.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-4" name="q1" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q1-4">d. an indicator of a person's position in society.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">2.</span> In the story about the origins of the kris, why did the king choose the second 	brother to be his daughter’s husband?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-1" name="q2" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q2-1">a. Because the second brother’s snake had bitten his daughter.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-2" name="q2" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q2-2">b. Because the second brother was able to bring the girl back to life.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-3" name="q2" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q2-3">c. Because the first brother had caused the girl to fall into a deep sleep.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-4" name="q2" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q2-4">d. Because the first brother had changed his staff into a bird.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">3.</span> The mystical powers which each kris possessed depended on</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-1" name="q3" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q3-1">a. the shape of the blade.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-2" name="q3" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q3-2">b. the design of the hilt.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-3" name="q3" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q3-3">c. the needs of the owner.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-4" name="q3" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q3-4">d. the powers of the person who created the kris.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">4.</span> How could you tell who had made a particular kris?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-1" name="q4" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q4-1">a. From the type of elephant’s trunk shown.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-2" name="q4" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q4-2">b. From the type of snake’s tongue.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-3" name="q4" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q4-3">c. From the decoration on the blade.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-4" name="q4" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q4-4">d. From the decoration on the hilt.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">5.</span> The blade usually had a pattern because people thought</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-1" name="q5" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q5-1">a. it made it more dangerous.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-2" name="q5" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q5-2">b. it made it more attractive.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-3" name="q5" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q5-3">c. it made it unlike any other kris.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-4" name="q5" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q5-4">d. it gave it magical powers.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 6 - 10</h4>
                <p>Identify the paragraphs which contain the following information. <br> For Questions 6-10, select the letters A–G</p>

                <div class="row justify-content-between align-items-center mb-2">
                    <div class="col-4 offset-8 mb-2 text-center font-weight-bold">
                        Paragraph
                    </div>
                    <div class="col-8">
                        6. Attempts to keep the skill of kris-making alive.
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
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mb-2">
                    <div class="col-8">
                        7. Materials used for making a kris.
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
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mb-2">
                    <div class="col-8">
                        8. The kris as the first choice of famous fighters.
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
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mb-2">
                    <div class="col-8">
                        9. Designs seen on the blade.
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
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mb-2">
                    <div class="col-8">
                        10. Some secret powers believed to be offered by the kris.
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
                            </select>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 11 - 14</h4>
                <p>Complete the following passage using words from the box. <br>
                    For Questions 11-14, select the letters a-h.
                </p>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="border">
                            <div class="row p-1">
                                <div class="col-md-4">a. design</div>
                                <div class="col-md-4">b. former</div>
                                <div class="col-md-4">c. previously</div>
                                <div class="col-md-4">d. equipment</div>
                                <div class="col-md-4">e. materials</div>
                                <div class="col-md-4">f. handle</div>
                                <div class="col-md-4">g. crafted</div>
                                <div class="col-md-4">h. sharpened</div>
                            </div>
                        </div>

                        <div class="mt-3" style="line-height: 2.3rem;">
                        The procedure of making the kris is much the same today as it was in the past, the only difference being the different <span class="font-weight-bold">11.</span> 
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
                        available today. A piece of metal is repeatedly heated and hammered until it is flat.  After this the blade is shaped, <span class="font-weight-bold">12.</span>
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
                        , filed and polished, and any impurities are removed from the blade.  The finished blade is then placed in vinegar for at least 24 hours to enhance the engraved <span class="font-weight-bold">13.</span>
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
                        .  The handle and cover are usually made from hard, fine-grained wood that both looks good and lasts a long time. In <span class="font-weight-bold">14.</span>
                        <div class="d-inline-block position-relative">
                            <select name="q14" class="form-control">
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
                        days, horn and ivory were also occasionally utilized.
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
            url: "{{ route('store.exam-four') }}",
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

                $(`<span class="text-success font-weight-bold" style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
                select.addClass('border border-success');

            } else {

                $(`<span class="text-success font-weight-bold" style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
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