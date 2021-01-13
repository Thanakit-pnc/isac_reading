@extends('layouts.app')

@section('css')
<style>
    .height {
        height: 60vh;
        overflow-y: auto;
    }
    .border-custom:not(:last-of-type) {
        border-bottom: 1px solid #777;
    }
</style>
@stop

@section('content')
<form id="form-exam" method="post">
    <div class="row mt-1">
        <div class="col-md-6">
            <h3>Academic Test 03</h3>
        </div>
        <div class="col-md-6">
            @isset($timer)
                @if($timer == 1)
                <h4 class="text-right" id="time"><span class="text-danger">60</span> minutes <span class="text-danger">00</span> seconds</h4>
                @endif
            @endisset
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <div id="wizard">

                    <ul class="nav nav-pills nav-justified form-wizard-header">
                        <li class="nav-item">
                            <a href="#passage1" data-toggle="tab" class="nav-link"> 
                                <span class="number">1</span>
                                <span class="d-none d-sm-inline">Passage 1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#passage2" data-toggle="tab" class="nav-link">
                                <span class="number">2</span>
                                <span class="d-none d-sm-inline">Passage 2</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#passage3" data-toggle="tab" class="nav-link">
                                <span class="number">3</span>
                                <span class="d-none d-sm-inline">Passage 3</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content b-0 font-16 text-dark">

                        <div class="tab-pane" id="passage1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mt-0 mb-0">READING PASSAGE 1</h4>
                                    <p>
                                        You should spend about 20 minutes on <span class="font-weight-bold">Questions 1 - 14</span>, which are based on Reading Passage 1.
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height sandbox">
                                        <h3 class="mt-0">Comic strips</h3>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">A</span>
                                            <span>
                                                Long before the comic strip became the fashionable art form it is today, a hotel in Brussels gave complete freedom to cartoonists and artists.  When it changed hands in 1981, its seven storeys were taken over by 130 artists who converted it into a true ‘live-in’ museum.  Each of its 101 rooms was decorated by a different Belgian artist, and its corridors were lined with the works of comic strip artists who painted on the theme of Travel.  Today’s guests can sleep under ceilings crammed with suitcases, riddled with arrows or filled with birds. They can share a room with celebrity stars or find themselves in a room painted as a library.  Room numbers are painted on palettes and paint pots are used as key-holders.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">B</span>
                                            <span>
                                                The history of the comic strip’s development is so respected in Belgium that it is taught in the local schools, and since the artist Herge created Tintin and his faithful dog Snowy in 1929, over 700 important cartoon artists have emerged from Belgium — more than from any other country in the world.  Every year, Belgian comic strip publishers print over 30 million books, three quarters of which are exported — mostly to France, where they represent more than half that country’s annual comic strip sales.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">C</span>
                                            <span>
                                                Now known as the ‘ninth art’, the comic strip has come a long way since the days when it was seen as nothing more than an attempt to increase the newspaper sales of the two press magnates who first used them — Joseph Pulitzer and William Randolph Hearst. In 1895, Pulitzer’s <strong class="font-weight-bold">New York World</strong> publication showed a series of illustrations entitled “At the Circus in Hogan’s Alley”, a squalid lane peopled by homeless people in ragged clothes, philosophical bystanders and bad tempered women.  Amongst these characters stood a mischievous boy in a nightshirt, conspicuous with his shaven head and big flappy ears.  Across his clothing was written a comment, and with the passing of the years, society’s fascination for the ‘Yellow Kid’, as he became known, was so great that his image appeared on biscuit tins, toys, cigarette boxes, post cards and paperweights.  The character inspired the creation of a popular song, a musical comedy and an entire magazine, and brought about the expression, ‘yellow journalism’ or ‘gutter’ press.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">D</span>
                                            <span>
                                                This single image wasn’t yet the comic strip in the sense we know today. For that, one had to wait until the 18th of October 1896, when the Yellow Kid finally appeared with his message spread through a series of boxes in familiar ‘balloons’.  The ‘funnies’, as such illustrations were called, were extremely successful, especially between World War 1 and the late 1940s when many truths were communicated in images that mirrored the views of millions of people throughout the world.  In Brussels, the comic strip saga began in 1920 with the appearance of the Petit Belge (Young Belgian) named ‘Tintin’, a boy reporter and adventurer. Here the world’s two permanent comic strip archives now reside in the Belgian Centre for Comic Strips. Today, exhibits are housed beneath a bright domed glazed ceiling.  Most of the main floor is given over to the ‘Museum of Imagination’ in which the work of 650 Belgian comic strip artists, representing the art form until the mid-1960s, can be seen.  
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">E</span>
                                            <span>
                                                Rare films about comics can be viewed in individual booths and the Centre’s Saint-Roch Gallery displays a continuously changing selection of original works by some of the most famous names in comic strip art.  A permanent display explains how a comic strip is born and evolves, while another displays everything there is to know about the making of an animated film. Drawings show how dramatically many famous characters have changed since their conception.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">F</span>
                                            <span>
                                                Meanwhile, as The Centre’s fame spread, the Deputy Mayor was planning an even more ambitious programme — to bring the comic strip out into the streets of the city by entrusting some of its best masters with the task of transforming grey walls into colourful frescoes.  Thus in 1991 the first of Brussels’ comic strip murals was introduced to the general public. Twelve more previously characterless Brussels neighbourhoods have since been similarly embellished and plans to create a couple of new murals every year are sure to brighten the city even more. Along a ‘Comic Strip Route’ established by the Brussels Tourist Board, wanderers can meet some of Belgium’s best loved comic strip characters. Comic strips also enliven three of Brussels’ underground stations.  In the Stockel underground, two 135 metre long friezes portraying 140 characters of Herge’s comic strips blaze across the walls.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">G</span>
                                            <span>
                                                Brussels’ importance as a producer of comic strip art means that it also has more comic bookshops than any other city.  A stone’s throw from Brussels’ flamboyant Grand Place is the ‘Tintin Shop’, where you will find pictures of the boy-adventurer and the rest of the characters all printed on hundreds of articles, from school bags to bath towels.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">H</span>
                                            <span>
                                                A city so fully dedicated to the comic strip celebrated its centenary with a grand display of related events, all under the patronage of His Majesty King Albert II.  Thirty-nine Belgian towns and villages joined in festivities that were organised in collaboration with museums, art and cultural centres and leisure parks.  There were countless exhibitions, guided tours of subway stations and bookshops, comic strip conferences and week-ends, competitions for budding comic strip artists, dedication sessions and window dressing competitions. Namur province dedicated a centre to the late Willy Wandersteen, a highly celebrated and very productive Flemish cartoonist.  Luxembourg rethought its roadsigns with the help of a cartoonist, and the 1996 Walloon Festival was centred around the comic strip.
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.academic.test03.passage1')
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="passage2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mt-0 mb-0">READING PASSAGE 2</h4>
                                    <p>
                                    You should spend about 20 minutes on <span class="font-weight-bold">Questions 15 - 27</span> , which are based on Reading Passage 2.
                                    </p>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card-box height sandbox">
                                        <h3 class="mt-0">Face blindness</h3>
                                        <p class="text-justify">
                                        Prosopagnosia is a disorder of face perception where the ability to recognize faces is impaired, while the ability to recognize other objects may be relatively intact. The term originally referred to a condition following acute brain damage, but a congenital form of the disorder has been proposed, which may be inherited by about 2.5% of the population. 
                                        </p>
                                        <p class="text-justify">
                                        Few successful therapies have so far been developed for affected people, although individuals often learn to use 'piecemeal' or 'feature by feature' recognition strategies. This may involve secondary clues such as clothing, posture, hair color, body shape, and voice. Because the face seems to function as an important identifying feature in memory, it can also be difficult for people with this condition to keep track of information about people, and socialize normally with others.
                                        </p>
                                        <p class="text-justify">
                                        The study of prosopagnosia has been crucial in the development of theories of face perception. Because prosopagnosia is not a unitary disorder (i.e. different people may show different types and levels of impairment), it has been argued that face perception involves a number of stages, each of which can be separately damaged. This is reflected not just in the amount of impairment displayed, but also in the qualitative differences in impairment that a person with prosopagnosia may exhibit. Prosopagnosia is usually acquired through extensive neurological damage.
                                        </p>
                                        <p class="text-justify">
                                        This sort of evidence has been crucial in supporting the theory that there may be a specific face perception system in the brain. This is counterintuitive to many people, as not everyone experiences faces as 'special' or perceived in a different way from other objects in the rest of the world.
                                        </p>
                                        <p class="text-justify">
                                        A recent case report described a closely related condition called prosopamnesia, in which the subject, from birth, could perceive faces normally, but had a severely impaired ability to remember them. 
                                        </p>
                                        <p class="text-justify">
                                        Until late in the 20th century, prosopagnosia was thought to be quite rare and solely associated with brain injury or neurological illness affecting specific areas of the brain. However, recently a form of congenital prosopagnosia has been proposed, in which people are born with an impairment in recognizing and perceiving faces, as well as other objects and visual scenes.
                                        </p>
                                        <p class="text-justify">
                                        Dr Jane Whittaker, writing in 1999, described the case of a Mr. C. and referred to other similar cases. The reported cases suggest that this form of the disorder may be heritable and much more common than previously thought (about 2.5% of the population may be affected), although this congenital disorder is commonly accompanied by other forms of visual agnosia, and may not be "pure" prosopagnosia. It has been suggested that very mild cases of face blindness are much more common, perhaps affecting 10% of the population, although there have not been any studies confirming this. The inability to keep track of the identity of characters in movies is a common complaint. 
                                        </p>
                                        <p class="text-justify">
                                        A classic case of a prosopagnosia is presented by "Dr. P." in Oliver Sacks' 1985 book The Man Who Mistook His Wife for a Hat, though this is more properly considered "agnosia." Although Dr. P. could not recognize his wife from her face, he was able to recognize her by her voice. His recognition of pictures of his family and friends appeared to be based on highly specific features, such as his brother's square jaw and big teeth.
                                        </p>
                                        <p class="font-weight-bold mb-0">Associative prosopagnosia</p>
                                        <p class="text-justify">
                                        Associative prosopagnosia is thought to be an impairment to the links between early face perception processes and the semantic information we hold about people in our memories. People with this form of the disorder may be able to say whether photos of people's faces are the same or different and derive the age and gender from a face (suggesting they can make sense of some face information) but may not be able to subsequently identify the person or provide any information about them such as their name, occupation, or when they were last encountered. They may be able to recognize and produce such information based on non-face information such as voice, hair, or even particularly distinctive facial features (such as a distinctive moustache) that do not require the structure of the face to be understood. Typically such people do not report that 'faces make no sense' but simply that they do not look distinctive in any way.
                                        </p>
                                        <p class="font-weight-bold mb-0">Developmental prosopagnosia</p>
                                        <p class="text-justify">
                                        Developmental prosopagnosia (DP) is a face-recognition deficit that is lifelong, manifesting in early childhood, and that cannot be attributed to acquired brain damage. However, a number of studies have found functional deficits in DP both on the basis of EEG measures and MRI. It has been suggested that a genetic factor is responsible for the condition. The term “hereditary prosopagnosia” was introduced if DP affected more than one family member, essentially accenting the possible genetic contribution of this condition. To examine this possible genetic factor, 689 randomly selected students were administered a survey in which seventeen developmental prosopagnosics were quantifiably identified. Family members of fourteen of the DP individuals were interviewed to determine prosopagnosia-like characteristics, and in all fourteen families, at least one other affected family member was found. 
                                        </p>
                                        <p class="text-justify">
                                        There seem to be two categories of DP patients: first, patients who are impaired in basic face processing (age estimation, judgment of facial affect) and also show deficits on other forms of visual processing; and second, patients with pure face-recognition impairments in the presence of intact basic visual processing. The first group of patients fail to obtain view-centered descriptions. According to the Bruce and Young model of face recognition, these are precursors of the more abstract expression-independent descriptions. View-centered descriptions do not seem to be specific for faces, as the patients with impairments of processing the physical aspects of faces also show difficulties in non-facial tasks like object recognition or tests of visuo-spatial abilities. However, there is as yet only limited evidence for a classification into different subtypes.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.academic.test03.passage2')
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="passage3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mt-0 mb-0">READING PASSAGE 3</h4>
                                    <p>
                                    You should spend about 20 minutes on <span class="font-weight-bold">Questions 28 - 40</span>, which are based on Reading Passage 3.
                                    </p>
                                </div>

                                <div class="col-lg-6 ">
                                    <div class="card-box height sandbox">
                                        <h3 class="mt-0">A meal to die for</h3>
                                        <p class="text-justify">
                                        In Japan, eating fugu (blowfish) is the ideal of gourmet dining and the cooking version of Russian roulette. But the fish is a popular delicacy in places outside Japan as well. A Japanese wholesaler exported the first 90 kg of vacuum-packed fugu to Hong Kong in October 1995.  Hong Kong is the second market to import fugu from Japan.  New York, which started importing the fish in 1989, currently sells about 1 tons of fugu every year, according to the wholesaler. Fugu's trade volume is rising because of people's curiosity in eating such fish.      
                                        </p>
                                        <p class="text-justify">
                                        There are nearly 100 kinds of fugu worldwide, 38 of them found in Japan. The ovaries, skin, muscles and, above all, the liver may contain a deadly poison, for which there is no known antidote. Yet fugu has been eaten in China for thousands of years and in Japan for hundreds. Ten thousand tons of fugu are consumed each year in Japan. The small, spotted torafugu, the most dangerous and delicious variety, are caught off the Korean coast in winter. It weighs as much as four pounds and costs one hundred dollars or more at the Tokyo fish market.  Fishermen use this fish, which blows itself up when threatened to make the lanterns that hang outside fugu restaurants. At restaurants displaying this sign, only specially licensed cooks who know exactly how to cut up fugu are allowed to work there.
                                        </p>
                                        <p class="text-justify">
                                        Currently, in order to serve fugu, a chef has to go through a strict certification process. If an unskilled or careless person accidentally pierces the organs or otherwise contaminates the edible flesh of the fish, then the diner may find that meal to be his last. Despite all regulatory precautions, every year there are reports of people getting sick or even dying from fugu poisoning. Recently there was a case in Toyama prefecture, where nine people who partook of fugu at a sushi restaurant were taken ill; of the 2 people who lost consciousness, one is still in a coma. 
                                        </p>
                                        <p class="text-justify">
                                        At the University of Tokyo, professor Hashimoto and his colleague Noguchi showed a small brown vial of puffer poison, known as tetrodoxin. A pinch of the white powder - about the amount found in one prime-sized tiger fugu - is enough to kill more than 30 people. The estimated lethal dose for an adult, a mere one to two milligrams, could be put on a pinhead. Puffer toxin blocks sodium channels in nerve tissues, ultimately paralyzing muscles. Respiratory arrest is the cause of death. There is no proven antidote, perhaps because the toxin has a molecular structure unlike anything previously known to organic chemistry. Because of its potency - it is 1250 times deadlier than cyanide - the toxin is an important tool in modern neurological research. In diluted form it is also used as a painkiller for victims of neuralgia, arthritis and rheumatism.
                                        </p>
                                        <p class="text-justify">
                                        The best season for fugu dishes is during the winter.  Therefore, there is a large difference in prices over the seasons.  Fugu is one of the most expensive foods in Japan.  A single fish can bring $50 to $140.  Cut up and served in a restaurant, it can bring $200.  Yet fugu has become increasingly popular.  At the small Haedomari Market in Shimonoseki, Japan's ‘fugu city’, where 80 percent of Japan's fugu catch is sold,  auctioneers start taking bids for the fish as early as one in the morning. Even at that hour the fishermen have already transferred hundreds of live fish caught as far away as Korea.  From Shimonoseki, they will be tracked or flown throughout the country. Fugu are sold while they are alive; therefore, transportation for fugu is exclusively arranged.  The fugu's mouth are stitched shut because fugu tend to fight with each other in a small space.
                                        </p>
                                        <p class="text-justify">
                                        Despite the danger, demand for puffer dishes is increasing so fast that Japanese fishing grounds are being depleted. Today, Japanese are culturing the fish on aquafarms and there is evidence of success in the artificial cultivation of fugu.  Fishers catch fugu in spring, usually with a hook and net, because it is the spawning season. Then, they cultivate these fish in a cage in the sea. They raise fish until the price goes up and start selling fugu in the fish market in late autumn. Farmed fugu, not feeding on plankton, is not lethal. They feed fugu on fresh fish until they grow up. There is also full-scale farming using artificial insemination. Apart from the supply of fugu fish itself, there is also a shortage of specialized chefs who can prepare the delicacy. A recent decision to relax the strict regulations on certification, so that the training period is reduced, has met with some consumer concern. 
                                        </p>
                                        <p class="text-justify">
                                        Every year from October through March, millions of diners bet their lives on not getting fatally poisoned.  Thanks to strict regulations of restaurants and wholesalers, the number of deaths decreases each year.  But this curious and preposterous fish remains the world's most deadly feast.  Non-lethal fugu may be on its way to our tables, but fugu fans often cite the thrill of possible poisoning/death as part of the appeal of fugu. A few die-hards even like to put a tiny bit of the poison on their fugu, for that numbing, tingling sensation on the lips. 
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.academic.test03.passage3')
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <ul class="list-inline wizard mb-0 d-flex justify-content-between">
                        <li class="previous list-inline-item">
                            <a href="javascript: void(0);" class="btn btn-secondary button-previous">Previous</a>
                        </li>
                        <li class="show list-inline-item">
                            <button type="button" class="btn btn-purple waves-effect waves-light d-none" data-toggle="modal" data-target="#modal-score" id="btn-score"><i class="fas fa-star"></i> Show Result</button>
                         </li>
                        <li class="next list-inline-item float-right">
                            <a href="javascript: void(0);" class="btn btn-secondary button-next">Next</a>
                        </li>
                        <li class="finish list-inline-item float-right">
                            <button type='button' class='btn btn-success' id="finish">Finish</button>
                            <a href="{{ url('/') }}" class="btn btn-primary d-none"><i class="fas fa-home"></i></a>
                         </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</form>

<div id="modal-score" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title text-white" id="myModalLabel"><i class="fas fa-star"></i> Show Result</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
@isset($timer)
    @if($timer == 1)
    <script src="{{ asset('public/js/timer_ielts.js') }}"></script>
    @endif
@endisset
<!-- Plugins js-->
<script src="{{ asset('public/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
<!-- Init js-->
<script src="{{ asset('public/assets/js/pages/form-wizard.init.js') }}"></script>
<script src="{{ asset('public/assets/js/wizard.js') }}"></script>
<script>
    // $('.nav-item a[href="#passage3"]').tab('show')
    
    $('#finish').on('click', function() {
        Swal({
            type: 'warning',
            title: 'Are you sure.',
            text: 'you want to submit?',
            showCancelButton: true,
            allowOutsideClick: false
        }).then((result) => {
            if(result.value) {
                $('#form-exam').submit();
            } 
            return false;
        })
    })
    
    $('#form-exam').on('submit', function(e) {
        let timeSt = "{{ $timer }}";
        e.preventDefault();
        let data = $("#form-exam").serialize();
        $.ajax({
            type: "post",
            url: "{{ route('store.ac-test-03') }}",
            data: {_token: "{{ csrf_token() }}", data},
            dataType: "json",
            success: function(data) {
                if(data.message == 'success') {
                    showAnswer(data.results);
                    $('.finish #finish').hide();
                    $('.finish a').removeClass('d-none')
                    $('.show button').removeClass('d-none');
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
        let results = Object.keys(data.exam).map(key => data.exam[key])
    
        $('#modal-score .modal-body').append(`
            <div class="text-right">
                <h4 class="mt-0">${data.total}</h4>
            </div>
            <div class="row text-dark">
                <div class="col-md-6 p-0 box-1 border border-dark"></div>
                <div class="col-md-6 p-0 box-2 border border-dark border-left-0"></div>
            </div>
        `)

        results.forEach((result, idx) => {
            if(idx < 20) {
                $('.box-1').append(`
                    <div class="d-flex p-1 border-custom">
                        <span class="font-weight-bold" style="flex: 50%;">${idx + 1}. ${result.stdAnswer == '' ? 'No answer' : result.stdAnswer}</span>
                        <div style="flex: 50%;">
                            <span class="mr-1">${ result.status == 'R' ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'}</span>
                            <span class="text-success font-weight-bold">${result.rightAnswer}</span>
                        </div>
                    </div>
                `)
            } else {
                $('.box-2').append(`
                    <div class="d-flex p-1 border-custom">
                        <span class="font-weight-bold" style="flex: 50%;">${idx + 1}. ${result.stdAnswer == '' ? 'No answer' : result.stdAnswer}</span>
                        <div style="flex: 50%;">
                            <span class="mr-1">${ result.status == 'R' ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'}</span>
                            <span class="text-success font-weight-bold">${result.rightAnswer}</span>
                        </div>
                    </div>
                `)
            }
        })

        $('#modal-score').modal('show')
    }
</script>
@endsection