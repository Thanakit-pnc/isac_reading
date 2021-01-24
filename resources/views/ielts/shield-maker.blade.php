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
            <h3>Shield Maker</h3>    
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
                    Jenggi Buma sits, silent and contemplative amidst his plants and flowers, on his veranda.  Abruptly, body tensing, he draws on a hidden source of inner energy, and begins drawing.  Each mark he makes is spontaneous, but accomplished with utter sureness.  Flowing magical shapes emerge from his darting pencil.  Animal and plant forms dance across the hitherto bare surface of the wooden shield.  A stylized parrot motif takes shape, though with the clenched teeth of a dragon.  He draws designs which are uniquely Iban in their form and meaning.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">B</span>
                    <p>
                    The Iban, one of the indigenous peoples of Borneo, create art forms full of the sinuous, twined shapes of jungle creepers and tendrils, and the strange, stylized forms of birds, animals and mythic creatures.  Amazingly, Jenggi has completed half the symmetrical shield design in merely five minutes.  Long ago, these shields were used for war as well as ceremony.  Their designs were vitally important to the warrior.  If sufficiently powerful, they could weaken his adversary’s fighting spirit.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">C</span>
                    <p>
                    Jenggi, a quiet, dignified man in his mid-40s, no longer expects his shields to be used in acts of carnage.  Nevertheless, though now used exclusively for ceremony, they still possess the raw symbolic power of their battle-stained predecessors.  He explains the source of his powerful imagery in unpretentious terms: “I just see a bird or animal in my mind’s eye.”
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">D</span>
                    <p>
                    His designs, drawn freehand, are fired by his fertile imagination — and something more.  He tells me of a dream he had when he was 24: “I saw an old man who took me up a nearby hill where there was a large tree stump, on which I sat.  The old man went on further.  Then he came back and asked me, ‘Why are you doing nothing?  Follow me!’  So I hurried after the old man.  I found him making a wonderful design from rattan, which I tried to copy, but couldn’t.  So I thought, I’ve got to copy this design somehow; I’d better try drawing!”  Upon waking up the next morning, Jenggi for the first time in his life began obsessively to draw the beautiful designs that he saw — and remembered clearly — in his dream.  Then he painted the complex, interwoven forms onto his first shield.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">E</span>
                    <p>
                    The old man appeared to him again in a dream the next night and told Jenggi, “I came back to give you this special stone.”  When he awoke, Jenggi found a stone on his tongue which he has kept ever since as a charm to safeguard his talent.  Jenggi’s first shield was designed and painted in a manner very characteristic of his grandfather’s work, according to people who knew them both.  His grandfather had been a woodcarver, his father an axe- maker.  Jenggi, however, says adamantly that he never saw any of his grandfather’s designs, and indeed had never been schooled in the traditional arts.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">F</span>
                    <p>
                    The designs, he says, are rooted in his experience.  He has never derived any ideas from the work of other artists.  The bird motifs, though typically Iban, are based on different kinds of forest birds, especially hornbills.  If, for example, an image of an owl comes to him in those brief moments of meditation before he begins his work, an owl form rapidly appears on the shield.  Indeed an owl design was the first one he ever completed.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">G</span>
                    <p>
                    Very often his designs show, below the almost abstract owl eyes, a dragon’s mouth with its teeth clenched in a grin.  Jenggi creates motifs which other Ibans see as dangerous.  Indeed, he says he was sick after completing his first shield, which contained the owl motif.  The use of certain designs is severely restricted.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">H</span>
                    <p>
                    Dragons have a fearsome image in Iban folklore, and must always be used with care on any artifact.  Such a motif, if drawn without the appropriate ceremony and by the wrong person, can bring great misfortune.  Strict rules must be followed in the use of the dragon form.  If the dragon is looking down toward the bottom of the design, it is unlikely to cause harm to the artist.  However, if it is looking up, it must have food in the form of an animal placed before its jaws, otherwise it will hunt its hapless creator.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">I</span>
                    <p>
                    The powerful human motif must also be treated with great respect.  It is often used on coffins, especially those of deceased village chiefs.  However, the human form can also be used during other ceremonies if created with care by the artist.  Jenggi’s murals often contain human forms.  Crafted with due respect, they are used for ceremonies and festivals.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">J</span>
                    <p>
                    Ancient art must be able to adapt to the present to remain relevant.  Jenggi’s designs, although traditional in character, still manage to integrate the old with the new.  In the old days, tree bark was used.  Now Jenggi is likely to employ hardboard as a surface on which to paint or incise shapes.  He may use his own special paint pigments, and will sometimes even work in copper.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">K</span>
                    <p>
                    A little tousle-haired boy listens attentively as we talk in the lengthening shadows of the veranda.  Surrounded by shields and murals crammed with exotic shapes, their colours made lurid by the light of dusk, Jenggi’s son is at ease amongst the fruits of his father’s creative labours.  Already he has spent a lifetime with fantastic creatures of the imagination as company.  Before too long, fired by such imagery, he may soon help his father in realising a cherished dream.
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
                            <label for="col-form-label" class="d-flex"><span class="mr-1">1.</span> How does Iban art reflect the place where Ibans traditionally live?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-1" name="q1" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q1-1">a. The shields have symmetrical designs.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-2" name="q1" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q1-2">b. It shows mythic creatures.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-3" name="q1" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q1-3">c. It uses the shapes of plants and animals found in the jungle.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-4" name="q1" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q1-4">d. It shows designs that were important to warriors.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">2.</span> What is the main difference between shields today and shields in the past?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-1" name="q2" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q2-1">a. In the past they were important to the people who carried them.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-2" name="q2" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q2-2">b. In the past they were more powerful than today.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-3" name="q2" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q2-3">c. In the past they were used for ceremony and war; today they are used only for ceremony.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-4" name="q2" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q2-4">d. In the past they had different patterns which could weaken an enemy’s fighting spirit.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">3.</span> Why does Jenggi keep the stone he found on his tongue?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-1" name="q3" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q3-1">a. So that he remembers the old man.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-2" name="q3" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q3-2">b. So that he remembers the dream</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-3" name="q3" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q3-3">c. So that he can use it to draw his patterns.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-4" name="q3" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q3-4">d. So that he doesn’t lose his drawing skills.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">4.</span> Which of the following is usually avoided on Iban designs?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-1" name="q4" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q4-1">a. Hornbills</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-2" name="q4" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q4-2">b. Dragons</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-3" name="q4" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q4-3">c. People</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-4" name="q4" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q4-4">d. Owls</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label" class="d-flex"><span class="mr-1">5.</span> Which of the following materials is Jenggi NOT likely to use in his work today?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-1" name="q5" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q5-1">a. Tree bark.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-2" name="q5" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q5-2">b. Hardboard.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-3" name="q5" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q5-3">c. Special paint pigments.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-4" name="q5" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q5-4">d. Metal.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-0">Questions 6 - 10</h4>
                <p class="mt-0 mb-0">Identify the paragraphs which contain the following information.</p>
                <p class="mb-0">For Questions 6-10, select the letters A–K.</p>
                <p><span class="font-weight-bold">NB</span> You may use any letter more than once.</p>

                <div class="row justify-content-between align-items-center mb-2">
                    <div class="col-4 offset-8 mb-2 text-center font-weight-bold">
                        Paragraph
                    </div>
                    <div class="col-8">
                        6. Designs used to decorate the coffins of important people.
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
                                <option value="I">I</option>
                                <option value="J">J</option>
                                <option value="K">K</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mb-2">
                    <div class="col-8">
                        7. The possibility of this art form being continued into the future.
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
                                <option value="I">I</option>
                                <option value="J">J</option>
                                <option value="K">K</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mb-2">
                    <div class="col-8">
                        8. His father’s and grandfather’s occupations.
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
                                <option value="I">I</option>
                                <option value="J">J</option>
                                <option value="K">K</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mb-2">
                    <div class="col-8">
                        9. Examples of when dragon motifs can be safely used.
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
                                <option value="I">I</option>
                                <option value="J">J</option>
                                <option value="K">K</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mb-2">
                    <div class="col-8">
                        10. Details of Jenggi’s personality.
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
                                <option value="I">I</option>
                                <option value="J">J</option>
                                <option value="K">K</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-0">Questions 11 - 14</h4>
                <p class="mt-0 mb-0">Complete the following passage using words from the box. </p>
                <p>For Questions 11–14, select the letters a–h.</p>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="border">
                            <div class="row p-1">
                                <div class="col-md-4">a. meditates</div>
                                <div class="col-md-4">b. danger</div>
                                <div class="col-md-4">c. motif</div>
                                <div class="col-md-4">d. dreams</div>
                                <div class="col-md-4">e. warfare</div>
                                <div class="col-md-4">f. originate</div>
                                <div class="col-md-4">g. forbidden</div>
                                <div class="col-md-4">h. controlled</div>
                            </div>
                        </div>

                        <div class="mt-3 line-height">
                        Jenggi says that the designs <span class="font-weight-bold">11.</span> 
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
                        from his own experience.  He has never copied the work of other artists.  The bird designs, though typically Iban, are based on different kinds of forest birds.  Before he starts his work he usually  <span class="font-weight-bold">12.</span>
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
                        for a short time. If, for example, an image of an owl comes to him in those brief moments, an owl form rapidly appears on the shield.  The first design he ever completed was an owl motif. Jenggi’s designs contain an element of <span class="font-weight-bold">13.</span>
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
                        according to Iban beliefs.  Indeed, he says he was sick after completing his first shield, which contained the owl motif.  The use of certain designs is severely <span class="font-weight-bold">14.</span>
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
                        </div>.
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
            url: "{{ route('store.exam-twentyone') }}",
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