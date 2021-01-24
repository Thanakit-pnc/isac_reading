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
            <h3>Comic strips</h3>    
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
                    Long before the comic strip became the fashionable art form it is today, a hotel in Brussels gave complete freedom to cartoonists and artists.  When it changed hands in 1981, its seven storeys were taken over by 130 artists who converted it into a true ‘live-in’ museum.  Each of its 101 rooms was decorated by a different Belgian artist, and its corridors were lined with the works of comic strip artists who painted on the theme of Travel.  Today’s guests can sleep under ceilings crammed with suitcases, riddled with arrows or filled with birds. They can share a room with celebrity stars or find themselves in a room painted as a library.  Room numbers are painted on palettes and paint pots are used as key-holders.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">B</span>
                    <p>
                    The history of the comic strip’s development is so respected in Belgium that it is taught in the local schools, and since the artist Herge created Tintin and his faithful dog Snowy in 1929, over 700 important cartoon artists have emerged from Belgium — more than from any other country in the world.  Every year, Belgian comic strip publishers print over 30 million books, three quarters of which are exported — mostly to France, where they represent more than half that country’s annual comic strip sales.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">C</span>
                    <p>
                    Now known as the ‘ninth art’, the comic strip has come a long way since the days when it was seen as nothing more than an attempt to increase the newspaper sales of the two press magnates who first used them — Joseph Pulitzer and William Randolph Hearst. In 1895, Pulitzer’s New York World publication showed a series of illustrations entitled “At the Circus in Hogan’s Alley”, a squalid lane peopled by homeless people in ragged clothes, philosophical bystanders and bad tempered women.  Amongst these characters stood a mischievous boy in a nightshirt, conspicuous with his shaven head and big flappy ears.  Across his clothing was written a comment, and with the passing of the years, society’s fascination for the ‘Yellow Kid’, as he became known, was so great that his image appeared on biscuit tins, toys, cigarette boxes, post cards and paperweights.  The character inspired the creation of a popular song, a musical comedy and an entire magazine, and brought about the expression, ‘yellow journalism’ or ‘gutter’ press.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">D</span>
                    <p>
                    This single image wasn’t yet the comic strip in the sense we know today. For that, one had to wait until the 18th of October 1896, when the Yellow Kid finally appeared with his message spread through a series of boxes in familiar ‘balloons’.  The ‘funnies’, as such illustrations were called, were extremely successful, especially between World War 1 and the late 1940s when many truths were communicated in images that mirrored the views of millions of people throughout the world.  In Brussels, the comic strip saga began in 1920 with the appearance of the Petit Belge (Young Belgian) named ‘Tintin’, a boy reporter and adventurer. Here the world’s two permanent comic strip archives now reside in the Belgian Centre for Comic Strips. Today, exhibits are housed beneath a bright domed glazed ceiling.  Most of the main floor is given over to the ‘Museum of Imagination’ in which the work of 650 Belgian comic strip artists, representing the art form until the mid-1960s, can be seen.  
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">E</span>
                    <p>
                    Rare films about comics can be viewed in individual booths and the Centre’s Saint-Roch Gallery displays a continuously changing selection of original works by some of the most famous names in comic strip art.  A permanent display explains how a comic strip is born and evolves, while another displays everything there is to know about the making of an animated film. Drawings show how dramatically many famous characters have changed since their conception.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">F</span>
                    <p>
                    Meanwhile, as The Centre’s fame spread, the Deputy Mayor was planning an even more ambitious programme — to bring the comic strip out into the streets of the city by entrusting some of its best masters with the task of transforming grey walls into colourful frescoes.  Thus, in 1991 the first of Brussels’ comic strip murals was introduced to the general public. Twelve more previously characterless Brussels neighbourhoods have since been similarly embellished and plans to create a couple of new murals every year are sure to brighten the city even more. Along a ‘Comic Strip Route’ established by the Brussels Tourist Board, wanderers can meet some of Belgium’s best loved comic strip characters. Comic strips also enliven three of Brussels’ underground stations.  In the Stockel underground, two 135 metre long friezes portraying 140 characters of Herge’s comic strips blaze across the walls.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">G</span>
                    <p>
                    Brussels’ importance as a producer of comic strip art means that it also has more comic bookshops than any other city.  A stone’s throw from Brussels’ flamboyant Grand Place is the ‘Tintin Shop’, where you will find pictures of the boy-adventurer and the rest of the characters all printed on hundreds of articles, from school bags to bath towels.
                    </p>
                </div>
                <div class="d-flex">
                    <span class="font-weight-bold mr-2">H</span>
                    <p>
                    A city so fully dedicated to the comic strip celebrated its centenary with a grand display of related events, all under the patronage of His Majesty King Albert II.  Thirty-nine Belgian towns and villages joined in festivities that were organised in collaboration with museums, art and cultural centres and leisure parks.  There were countless exhibitions, guided tours of subway stations and bookshops, comic strip conferences and week-ends, competitions for budding comic strip artists, dedication sessions and window dressing competitions. Namur province dedicated a centre to the late Willy Wandersteen, a highly celebrated and very productive Flemish cartoonist.  Luxembourg rethought its roadsigns with the help of a cartoonist, and the 1996 Walloon Festival was centred around the comic strip.
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
                            <label for="col-form-label"><span class="mr-1">1.</span> What do we know about the hotel mentioned in the first paragraph?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-1" name="q1" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q1-1">a. It was decorated by over a hundred artists from around the world.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-2" name="q1" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q1-2">b. Some of the rooms are decorated as libraries.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-3" name="q1" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q1-3">c. It changed ownership in the early 1980’s.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q1-4" name="q1" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q1-4">d. Famous celebrities often stay there.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label"><span class="mr-1">2.</span> The first function of comic strip was</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-1" name="q2" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q2-1">a. to express the opinions of many people around the world.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-2" name="q2" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q2-2">b. to help sell more newspapers.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-3" name="q2" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q2-3">c. to make people laugh.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q2-4" name="q2" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q2-4">d. to paint a depressing picture of society.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label"><span class="mr-1">3.</span> The ‘Yellow Kid’ of 1895 was different from modern comic strips because</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-1" name="q3" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q3-1">a. it showed a number of characters living in a dirty street.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-2" name="q3" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q3-2">b. there was only one picture.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-3" name="q3" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q3-3">c. the main character inspired people to write a song about him.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q3-4" name="q3" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q3-4">d. it gave rise to the term ‘gutter’ press.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label"><span class="mr-1">4.</span> Which of the following can you <span class="font-weight-bold">NOT</span> see in the Belgian Centre for Comic Strips?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-1" name="q4" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q4-1">a. Examples of work by Belgian comic strip artists of the late twentieth century.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-2" name="q4" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q4-2">b. Some rare films about comics.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-3" name="q4" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q4-3">c. A display to show how comic strips are created and developed.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q4-4" name="q4" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q4-4">d. A comprehensive display showing how animated movies are produced.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="col-form-label"><span class="mr-1">5.</span> Which of the following did <span class="font-weight-bold">NOT</span> take place in Belgium to celebrate the centenary of Brussels?</label>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-1" name="q5" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="q5-1">a. A large number of exhibitions were held.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-2" name="q5" class="custom-control-input" value="B">
                                    <label class="custom-control-label" for="q5-2">b. Almost forty communities participated in the celebrations.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-3" name="q5" class="custom-control-input" value="C">
                                    <label class="custom-control-label" for="q5-3">c. Various competitions were held to identify future comic strip artists.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q5-4" name="q5" class="custom-control-input" value="D">
                                    <label class="custom-control-label" for="q5-4">d. Cartoon artists redesigned some of the road signs.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 6 - 10</h4>
                <p class="mb-0">Identify the paragraphs which contain the following information.</p>
                <p>For Questions 6-10, select the letters A–H.</p>

                <div class="row justify-content-between align-items-center mb-2">
                    <div class="col-4 offset-8 mb-2 text-center font-weight-bold">
                        Paragraph
                    </div>
                    <div class="col-8">
                        6. Where to purchase a school bag with a picture of Tintin’s pet dog.
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
                        7. The development of comic strips as part of the school curriculum.
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
                        8. An unusual place to stay.
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
                        9. Large paintings on city walls.
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
                        10. Another name for the comic strip.
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
                                <div class="col-md-4">a. cartoon</div>
                                <div class="col-md-4">b. popular</div>
                                <div class="col-md-4">c. depicting</div>
                                <div class="col-md-4">d. illustrations</div>
                                <div class="col-md-4">e. tourists</div>
                                <div class="col-md-4">f. show-time</div>
                                <div class="col-md-4">g. decorate</div>
                                <div class="col-md-4">h. delighted</div>
                            </div>
                        </div>

                        <div class="mt-3" style="line-height: 3rem;">
                        Along a ‘Comic Strip Route’ established by the Brussels Tourist Board, wanderers can meet some of Belgium’s most  <span class="font-weight-bold">11.</span> 
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
                        comic strip characters.  <span class="font-weight-bold">12.</span>
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
                        strips also enliven three of Brussels’ underground stations.  In the Stockel underground, two 135 metre long friezes  <span class="font-weight-bold">13.</span>
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
                        140 characters of Herge’s comic strips <span class="font-weight-bold">14.</span>
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
                        the walls.
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
            url: "{{ route('store.exam-five') }}",
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

                $(`<span class="ml-2 text-success font-weight-bold" style="position: absolute; top: 50%; right: 15px; transform: translateY(-50%);">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
                select.addClass('border border-success');

            } else {

                $(`<span class="ml-2 text-success font-weight-bold" style="position: absolute; top: 50%; right: 15px; transform: translateY(-50%);">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
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