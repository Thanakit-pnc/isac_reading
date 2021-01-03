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
            <h3>Academic Test 05</h3>
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
                                    <div class="card-box height" id="sandbox">
                                        <h3 class="mt-0">Dubai</h3>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">A</span>
                                            <span>
                                            On a hot dusty afternoon, we parked the jeep in a flurry of sand in front of a steel and glass bank.  Even in areas of downtown Dubai, skyscrapers soar out of the desert like hi-tech islands in a sea of sand.  With little in the way of landscaping or pavements linking one multi-national high-rise to another, we squelched through the sand to our destination.  No one walks much in Dubai.  It’s too hot, and anyway, the roads are excellent.  Nevertheless, that afternoon we plunged on foot down narrow alleys only just wide enough to permit the passage of a single donkey into Bastakiya, the heart of old Dubai.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">B</span>
                                            <span>
                                            What’s left of Dubai’s heritage?  Precious little, you might think.  But determined sightseers can still find ways to experience the rhythms of old Arabia — a goal that is a great deal more addictive and subtle than the usual business, beach and shopping pursuits.  Bastakiya was once an extensive enclave of square courtyard houses in the Bur Dubai area of the city on the bank of Dubai Creek.  What remains of the old coral-built homes originally owned by merchants who traded in spices, incense, gold and textiles is still suffused with an ethereal, riveting ambience.  As recently as the 1950’s, a visitor arriving at Dubai by sea described the city as a forest of skyscrapers, so numerous were the graceful wind-towers of Bastakiya.  Elegant and elegiac they still look today, crowning flat-roofed homes of faded splendour.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">C</span>
                                            <span>
                                            Rising some 15 metres above the rooftops, wind-towers work by trapping the breezes that stray into vents which face in four directions.  The vents channel the moving air down into the building from where it is circulated through the living areas.  As in so many of the Gulf’s traditional seashore towns, the houses of Bastakiya were built from blocks of coral.  In Dubai, the mortar used is called sarooj, a mixture of red clay, manure and water that washes the walls with a peachy glow.  Date palms provided the beams, and heavy carved wooden doors still bar the way from the street.  These homes do not divulge much to the outside world.  Their windows open onto tree shaded courtyards that allow privacy, security and thermal insulation.  Incised stucco panels, pierced window screens, crenellations and columns topped with lotus-shaped capitals are decorative features which also contribute to the basic structure of the house.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">D</span>
                                            <span>
                                            Trudging along the twisting, sandy lanes between the wind-towered houses, we reached the Majlis Gallery, a sensitively restored example of the old architectural style.  The former merchant’s home now houses some of the finest examples of Dubai’s arts and crafts.  Visiting the gallery also provides an ideal opportunity to experience the interior of a traditional wind-towered house — with its high ceilings and cool, narrow rooms.  The width of a room was restricted by the mangrove poles used as ceiling beams none of which, it seems could have been longer than about 3.5 metres.  Traditionally, there would be a male <strong class="font-weight-bold"><i>majlis</i></strong> (reception room) as well as a female <strong class="font-weight-bold"><i>majlis</i></strong>  with separate entrances.  In some of the larger mercantile homes, another public majlis, situated near the main door, would be used to extend hospitality to visiting traders.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">E</span>
                                            <span>
                                            Not for nothing was Dubai once called the City of Merchants.  Like so many other ports of the Gulf, it operated as a highly successful entrepot for thousands of years, importing and exporting goods as far afield as China in the same type of magnificent wooden dhows (a kind of boat) that are still constructed along the coastline.  The region itself has been blessed with three raw materials that have brought continued prosperity to the area.  In antiquity, it was copper, then pearls and now oil.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">F</span>
                                            <span>
                                            Meanwhile the local coastal people subsist, as non-mercantile classes always have, on the basics of life — boat building, fishing and harvesting dates.  Their rural counterparts, the Bedouin, herded camels, sheep and goats, and still do.  The camels are often bred nowadays for racing — with untold urban wealth up for prize money. The goats may be barbequed under the stars for tourists on a desert safari.  These days the sand dunes echo to the roar of jeeps on ‘wadi-bashing’ expeditions or the swish of the latest craze — sand skiing.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">G</span>
                                            <span>
                                            Cutting a soft, gleaming swathe through Dubai is The Creek, the highway of a civilisation built on trade. It is one of the few safe anchorages along the region’s southern coast and was a traditional haven for the dhows that plied the waters of the Persian Gulf and beyond. From one of the metal bridges that now span The Creek, one can watch the dhow building trade continuing as it has gone for centuries. Hundreds of these sturdy wooden boats add colour to the Dhow Wharfage. As recently as the 1970’s, dhows carried two-thirds of Dubai’s import/export business. Today, the dhows transport only a fraction of the Emirate’s trade but the sight of the Arabs dressed in their flowing robes is a tangible reminder of the past. Only the goods being loaded have changed, it seems. Gone are the pearls and, of course, the slaves.  Nowadays one dodges around electrical goods and building materials on the wharfs. In family-owned boatyards, dhows are still built in the time-honoured way, with keels of teak and ribs and flanks of acacia wood.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">H</span>
                                            <span>
                                            The Creek was the nexus of the pearling expeditions on which Dubai’s early fame was built. Now it’s gold that lures visitors to the souks — the traditional market places. During the early part of the century, fortunes were made through the astute trading of gold from Dubai to the Asian subcontinent, and to this day, many of the souk’s customers are from that region.  In glittering shop after glittering shop, three genres of jewellery are marketed.  The first type is aimed at Asians, who tend to buy real gold.  The second caters to the European bargain hunter and the third offers traditional Bedouin-style jewellery.  Unfortunately, virtually none of the latter is antique because Bedouin custom dictates that jewellery which was part of a woman’s dowry must be melted down upon her death.  In any case, genuine Bedouin jewellery was crafted in silver, the taste for gold being relatively recent.
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.academic.test05.passage1')
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
                                    <div class="card-box height">
                                        <h3 class="mt-0">Insects as food: taboo or tradition?</h3>
                                        <p class="text-justify">
                                        If you think eating insects is gross, you may be in the cultural minority. Throughout history, people have relished and relied on insects as a source of food. Today, many cultures still do.
                                        </p>
                                        <p class="text-justify">
                                        Ten thousand years ago hunters and gatherers ate bugs to survive. They probably learned what was edible from observing what animals ate, according to Gene DeFoliart, a professor emeritus of entomology at the University of Wisconsin-Madison.  "Eating insects certainly is an old tradition," he said. 
                                        The ancient Romans and Greeks dined on insects. Pliny, the first-century Roman scholar and author of Historia Naturalis, wrote that Roman aristocrats loved to eat beetle larvae reared on flour and wine. Aristotle, the fourth-century Greek philosopher and scientist, described in his writings the ideal time to harvest cicadas: "The larva of the cicada on attaining full size in the ground becomes a nymph; then it tastes best, before the husk is broken. At first the males are better to eat, but after copulation it’s the females, which are then full of white eggs." 
                                        </p>
                                        <p class="text-justify">
                                        The Old Testament encouraged Christians and Jews to consume locusts, beetles, and grasshoppers. St. John the Baptist is said to have survived on locusts and honey when he lived in the desert. 
                                        </p>
                                        <p class="text-justify">
                                        In the mid-19th century Maj. Howard Egan, a superintendent of the Pony Express in Nevada, observed a Paiute Indian hunting, not for bison or rabbit, but rather the wingless Mormon cricket. Major Egan later described how the Paiute dug a series of large trenches, covered them with straw, then drove hordes of crickets into the excavated trap. The Indians set the straw on fire, burning the crickets alive. Paiute women then gathered baskets of the charred bugs and brought them back to camp to make flour for bread - an important seasonal source of protein. 
                                        </p>
                                        <p class="text-justify">
                                        Many types of insects appear on menus today. Bugs remain a traditional food in many cultures across Africa, Asia, and Latin America. In Ghana during the spring rains, winged termites are collected and fried, roasted, or made into bread. In South Africa the insects are eaten with cornmeal porridge. In China beekeepers are considered virile, because they regularly eat larvae from their beehives. Gourmands in Japan savour aquatic fly larvae sautéed in sugar and soy sauce. De-winged dragonflies boiled in coconut milk with ginger and garlic are a delicacy in Bali. Grubs are savored in New Guinea and aboriginal Australia. In Latin America cicadas, fire-roasted tarantulas, and ants are prevalent in traditional dishes. One of the most famous culinary insects, the agave worm, is eaten on tortillas and placed in bottles of mezcal liquor in Mexico. 
                                        </p>
                                        <p class="text-justify">
                                        But despite its long tradition - and current favour among at least half of the world's peoples - eating insects is still rare, not to mention taboo, in the United States and Europe. One reason, DeFoliart said, is that after Europe became agrarian, insects were seen as destroyers of crops rather than a source of food. 
                                        "We became invested in livestock, and bugs became the enemy," said David George Gordon, a biologist and the author of <i>The Eat-a-Bug Cookbook</i>.
                                        </p>
                                        <p class="text-justify">
                                        Manfred Kroger, a professor emeritus of food science at Penn State University in University Park, says what people choose to eat is conditioned by culture. Many Westerners readily consume shrimp and lobster (which, like insects, are arthropods) along with pork and oysters - foods other cultures reject as dirty. "We have 200 to 300 staple foods that we pass down from generation to generation—and trying new foods is always a touchy subject," Kroger said.  
                                        </p>
                                        <p class="text-justify">
                                        Kroger is anything but a lone voice in the wilderness when he argues that there are many nutritional benefits to eating insects. Hamburger, for example, is roughly 18 percent protein and 18 percent fat. Cooked grasshopper, meanwhile, contains up to 60 percent protein with just 6 percent fat. Moreover, like fish, insect fatty acids are unsaturated and thus healthier. 
                                        </p>
                                        <p class="text-justify">
                                        DeFoliart, the Wisconsin entomologist, says that not only are insects nutritious and delicious, they could be an environmentally friendly source of human protein requirements. "In our preoccupation with cattle, we have denuded the planet of vegetation," DeFoliart said. "Insects are much more efficient in converting biomass to protein." 
                                        </p>
                                        <p class="text-justify">
                                        Insect farming is arguably much more efficient than cattle production. Forty-five kilograms of feed produces 4.5 kilograms of beef, while the same amount of feed yields 20 kilograms of cricket. Noting the widespread use of pesticides in industrial agriculture, DeFoliart said, "People are poisoning the planet by ridding it of insects, rather than eating insects and keeping artificial chemicals off plants that we eat."
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.academic.test05.passage2')
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
                                    <div class="card-box height">
                                        <h3 class="mt-0">Synesthesia</h3>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">A</span>
                                            <span>
                                            Synesthesia is a neurological condition in which stimulation of one sensory or cognitive pathway leads to automatic, involuntary experiences in a second sensory or cognitive pathway. People who report such experiences are known as synesthetes. Recently, difficulties have been recognized in finding an adequate definition of synesthesia, as many different phenomena have been covered by this term and in many cases the term synesthesia seems to be a misnomer. A more accurate term for the phenomenon may be ideasthesia.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">B</span>
                                            <span>
                                            Synesthesia can occur between nearly any two senses or perceptual modes, and at least one synesthete experienced synesthesia that linked all five senses. Given the large number of forms of synesthesia, researchers have adopted a convention of indicating the type of synesthesia by using the following notation x → y, where x is the "inducer" or trigger experience, and y is the "concurrent" or additional experience. For example, perceiving letters and numbers (collectively called graphemes) as coloured would be indicated as grapheme → colour synesthesia. Similarly, when synesthetes see colours and movement as a result of hearing musical tones, it would be indicated as tone → (colour, movement) synesthesia.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">C</span>
                                            <span>
                                            In one common form of synesthesia, known as grapheme →  colour synesthesia or colour-graphemic synesthesia, letters or numbers are perceived as inherently coloured, while in ordinal linguistic personification, numbers, days of the week and months of the year evoke personalities. In spatial-sequence, or number form synesthesia, numbers, months of the year, and/or days of the week elicit precise locations in space (for example, 1980 may be "farther away" than 1990), or may have a (three-dimensional) view of a year as a map (clockwise or counterclockwise). Yet another recently identified type, visual motion → sound synesthesia, involves hearing sounds in response to visual motion and flicker. Over 60 types of synesthesia have been reported, but only a fraction have been evaluated by scientific research. Even within one type, synesthetic perceptions vary in intensity and people vary in awareness of their synesthetic perceptions. 
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">D</span>
                                            <span>
                                            While cross-sensory metaphors (e.g., "loud shirt", "bitter wind" or "prickly laugh") are sometimes described as "synesthetic", true neurological synesthesia is involuntary. It is estimated that synesthesia could possibly be as prevalent as 1 in 23 persons across its range of variants. Synesthesia runs strongly in families, but the precise mode of inheritance has yet to be ascertained. Synesthesia is also sometimes reported by individuals under the influence of psychedelic drugs, after a stroke, during a temporal lobe epilepsy seizure, or as a result of blindness or deafness. Synesthesia that arises from such non-genetic events is referred to as "adventitious synesthesia" to distinguish it from the more common congenital forms of synesthesia. Adventitious synesthesia involving drugs or stroke (but not blindness or deafness) apparently only involves sensory linkings such as sound - vision or touch - hearing; there are few, if any, reported cases involving culture-based, learned sets such as graphemes, lexemes, days of the week, or months of the year.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">E</span>
                                            <span>
                                            Although synesthesia was the topic of intensive scientific investigation in the late 19th century and early 20th century, it was largely abandoned by scientific research in the mid-20th century, and has only recently been rediscovered by modern researchers. Psychological research has demonstrated that synesthetic experiences can have measurable behavioural consequences, while functional neuroimaging studies have identified differences in patterns of brain activation. Many people with synesthesia use their experiences to aid in their creative process, and many non-synesthetes have attempted to create works of art that may capture what it is like to experience synesthesia. Psychologists and neuroscientists study synesthesia not only for its inherent interest, but also for the insights it may give into cognitive and perceptual processes that occur in synesthetes and non-synesthetes alike.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">F</span>
                                            <span>
                                            It was once assumed that synesthetic experiences were entirely different from synesthete to synesthete, but recent research has shown that there are underlying similarities that can be observed when large numbers of synesthetes are examined together. For example, sound-colour synesthetes, as a group, tend to see lighter colours for higher sounds and grapheme-colour synesthetes, as a group, share significant preferences for the colour of each letter (e.g., A tends to be red; O tends to be white or black; S tends to be yellow etc.). Nonetheless, there are a great number of types of synesthesia, and within each type, individuals can report differing triggers for their sensations, and differing intensities of experiences. This variety means that defining synesthesia in an individual is difficult, and the majority of synesthetes are completely unaware that their experiences have a name. However, despite the differences between individuals, there are a few common elements that define a true synesthetic experience.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">G</span>
                                            <span>
                                            Synesthetes often report that they were unaware their experiences were unusual until they realized other people did not have them, while others report feeling as if they had been keeping a secret their entire lives, as has been documented in interviews with synesthetes on how they discovered synesthesia in their childhood. The automatic and ineffable nature of a synesthetic experience means that the pairing may not seem out of the ordinary. This involuntary and consistent nature helps define synesthesia as a real experience. Most synesthetes report that their experiences are pleasant or neutral, although, in rare cases, synesthetes report that their experiences can lead to a degree of sensory overload. 
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">H</span>
                                            <span>
                                            Though often stereotyped in the popular media as a medical condition or neurological aberration, many synesthetes themselves do not perceive their synesthetic experiences as a handicap. To the contrary, most report it as a gift—an additional "hidden" sense—something they would not want to miss. Most synesthetes become aware of their "hidden" and different way of perceiving in their childhood. Some have learned how to apply this gift in daily life and work. Synesthetes have used their gift in memorizing names and telephone numbers, mental arithmetic, but also in more complex creative activities like producing visual art, music, and theater.
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.academic.test05.passage3')
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
            url: "{{ route('store.ac-test-05') }}",
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