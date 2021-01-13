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
            <h3>Academic Test 01</h3>
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
                                        <h3 class="mt-0">Calcutta</h3>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">A</span>
                                            <span>
                                                Calcutta, the world’s fourth largest city, inhabited by over fifteen million people of radically different backgrounds, religions and beliefs, is  a hotbed of literature and the arts, of culture and fiercely defended political causes, it leaves no-one indifferent, this crowded, noisy melting-pot in which extreme poverty and a show of great wealth are but a hair’s breadth apart.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">B</span>
                                            <span>
                                                Misunderstood, maligned and defended in turns, Calcutta is swamped by the fall-out of India’s population explosion, much of this being accounted for by urban migration, the search for opportunities in the large city.  Yet rather than being a drain on the country’s resources, this, the biggest city in India, is a huge, grimy, sweaty dynamo, its industrial, port and rail workers toiling away so that the Indian economy can flourish.  One of the chief commercial nerve centres of the country, it groans under a cloud of factory pollution, reverberates to the noise of steamer horns and, as the starting-point of two great rail networks, recovers twice daily after a rush-hour in which 1.6 million people pass through the chaos of the main railway station.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">C</span>
                                            <span>
                                                On the streets of Calcutta, one is besieged not just by beggars, but by shoe-shine boys, hawkers and salesmen of all descriptions.  Rich in the heart of it all, on the Esplanade, the late 19th century buildings such as the Oberoi Grand, the Indian Museum and a whole collection of once majestic public buildings, symbolise Calcutta’s faded grandeur.  They overlook the Maidan, a vast two-mile long and one-mile wide park, with the second largest cricket stadium and the only Ladies Golf Club in the world.  But describing the Maidan in terms of its monuments and sports facilities gives no indication as to how lively it is.  In the 19th century, fervent Bengali nationalists organised great fairs on the Maidan, with music, dance, theatre and lectures.  It was here that India’s first Nobel Laureate, the great Bengali literary figure Rabindranath Tagore, made his public debut, aged fifteen.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">D</span>
                                            <span>
                                            Nowadays the Maidan is still a twenty-four hour show, where Calcutta hangs out, exercises and relaxes.  Executive joggers make their sunrise appearance on the Maidan stage first, along with early morning, de-stressing yoga enthusiasts.  The West Bengal Mounted Police ride their horses here, the Army does a few morning drills, goats and sheep act as lawn mowers at the Calcutta Golf Club.  Cricket and football take over during the course of the day; and then in the evening couples and families promenade respectably, seeing and being seen in the Square opposite the Victoria Memorial.  At night Hindu sandhus or holy men and all kinds of musicians gather audiences near the Gandhi statue.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">E</span>
                                            <span>
                                            Calcutta, unlike Delhi and Agra, is not a historical city in the conventional sense of the word.  In fact it’s one of the world’s youngest major cities, rising from humble rural beginnings to be a major centre of the British Empire, over the course of 150 years.  Yet little more than three centuries ago, neither the British nor any other empire ruled this region; indeed the banks of the Hooghly River were the site of three fishing villages of mud huts, one of which was Kalikata, from which the name Calcutta emerged.  The city’s historic oblivion changed in 1690 when Job Charnock, an agent from the British East India Company, stopped at another of the three villages, Sutanati, the home of the traditional Bengali weavers and of the Seths, the “merchant-bankers” of the day, who controlled the local textile trade.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">F</span>
                                            <span>
                                            Job Charnock and the British came to India as traders, at a time when the Mughals were supreme rulers.  They were concerned with securing raw materials and future markets.  Bengal was particularly attractive because of its legendary wealth of textiles, especially silk and cotton, though the Company also had its eye on the sugar, rice and salt.  It was almost by accident, or greed — in order to protect its investment that by the 1850s, almost the whole of the sub-continent had come under British control, with Calcutta as headquarters.  They chose the three tranquil villages as the site of a port and settlement, at first renting them from the Mughal emperor Aurangzeb. Ships were the beginning of Calcutta’s entry into history, the Hooghly River the key to its fortunes.  The East Indiamen boats and clippers made way for motorised cargo vessels and in 1773 the British capital was transferred from Madras to Calcutta.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">G</span>
                                            <span>
                                            The people of Calcutta are hungry for the wonderful poetry, theatre, films, music and visual arts created there.  At two annual book-fairs, more than forty-five million Rupees worth of books are sold and there are over 500 stalls for second-hand books.  Around 60 quality films are made a year, whose emphasis is on stark realism, rather than the mythical romances of Bollywood.  Satyajit Ray earned international acclaim, as have Arpana Sen and several others, in turn influencing Bombay’s movie industry. Calcutta also has a cutting-edge theatrical movement and many temporary exhibitions of modern art galleries and the lively Academy of Fine Arts, as well as excellent permanent collections of traditional and modern art.  The Academy also displays fine examples of antique Bengali and other Indian textiles, for the sake of which one could say that an Empire was founded.  The solid colour, hand-woven silk sarees of West Bengal, with their rich borders are particularly coveted for marriage ceremonies.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">H</span>
                                            <span>
                                            The adventurous Bengalis have created at least two indigenous styles of cuisine, one rumoured to have strayed from the kitchens of the Nawabs, called Mughlai.  It is best sampled at the modest restaurants around the Nakhoda Mosque.  The other is the Bengali version of “food of the Sahib”, a delicious combination of two diverse worlds — of indigenous inspiration and that of the British Memsahibs.
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.academic.test01.passage1')
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
                                        <h3 class="mt-0">How animals communicate</h3>
                                        <p class="text-justify">
                                        Have you ever heard a fish talk? Have you ever seen monkeys speaking to each other? Well, perhaps not, but animals do ‘talk’ to each other. It’s just that they don’t use words and sentences like people do. Animals show their feelings and give out information in different ways. They use their senses to do this.
                                        </p>
                                        <p class="text-justify">
                                        Olfactory communication, or using the sense of smell, is a commonly used means of communicating: to tell enemies to go away, to sense danger and to find partners. Many mammals, in particular, have glands that generate distinctive and long-lasting smells, and have corresponding behaviours that leave these smells in places where they have been. Often the scented substance is introduced into urine or faeces. Sometimes it is distributed through sweat, though this does not leave a semi-permanent mark as scents deposited on the ground do. Some animals have glands on their bodies whose sole function appears to be to deposit scent marks: for example gerbils have a scent gland on their stomachs, and a characteristic ventral rubbing action that deposits scent from it. Golden hamsters and cats have scent glands on their flanks, and deposit scent by rubbing their sides against objects; cats also have scent glands on their foreheads. Bees carry with them a pouch of material from the hive which they release as they re-enter, the smell of which indicates that they are a part of the hive and grants their safe entry. Ants use pheromones to create scent trails to food as well as for alarm calls, mate attraction and to distinguish between colonies. Some male butterflies have such a strong sense that they can smell a female more than three kilometres away.
                                        </p>
                                        <p class="text-justify">
                                        Other animals use sound to send out messages. Communication through vocalization is essential for many tasks including mating rituals, warning calls, conveying location of food sources, and social learning. Whales seem to be best at this. They sing ‘songs’ which other whales can hear many kilometres away. No one is quite sure what the message means but there is no doubt that the whales use these songs to communicate. When it comes to acoustic communication, not every member of a species is just alike. Animals in different regions have often been overhead sounding off in different dialects. For example, one study found that blue whales produce different patterns of pulses, tones and pitches depending on where they're from. Some bird species are the same way. And what about those birds that live on the border between territories of differing songsters? They often become bilingual, so to speak, and able to communicate in the singing parlance favored by each of their groups of neighbors.
                                        </p>
                                        <p class="text-justify">
                                        However, as noise pollution interferes with animal communication all across the globe, many animals' ability to communicate effectively comes under fire. Increased shipping traffic over the last century has dramatically affected the transfer of whale song around the ocean basin. Studies have found that songbirds, too, suffer from noisy urban environments. Some species have had to modify their singing styles, producing songs that are louder and shriller, in order to be heard above the noise. Increased volume usually leads to simpler and somewhat inferior styles of singing that female birds seem to find decidedly less attractive.
                                        </p>
                                        <p class="text-justify">
                                        Body language is another way animals talk to each other. Signs of anger, fear and happiness send messages to other animals. Many animals show anger through body language. Dogs will show their teeth (often accompanied by an alarming growling sound); cats will raise their tail and monkeys raise their eyes to show their anger. Gorillas stick out their tongues to show anger, and beat their chests as a warning sign to intruders.
                                        </p>
                                        <p class="text-justify">
                                        Body language is also common in humans, too. We show feelings on our face. We also show our feelings with our hands and arms; for example, when we shake hands or hold someone close. Monkeys will also hold each other and kiss when they meet. Chimpanzees greet each other by touching hands. Big cats will hold their face close to each other and elephants will hold each other’s trunk to show friendship.
                                        </p>
                                        <p class="text-justify">
                                        Communication between species can play important roles as well. One study suggested that the reason Madagascan spiny-tailed iguanas have well-developed ears - despite the fact that they don't communicate vocally - is so they can hear the warning calls of the Madagascan paradise flycatcher. The two species have nothing in common except for the fact that they share a general habitat and birds of prey like to feed on them. So when an iguana hears a bird raise the alarm among other birds, it likely knows to be on alert for incoming predators, too.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.academic.test01.passage2')
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
                                        <h3 class="mt-0">Water, Water Everywhere</h3>
                                        <p class="text-justify">
                                        Most of our planet is covered by water. There is so much of it that if all the mountains of the world were levelled and their debris dumped into the oceans, then the surface of the globe would be entirely submerged beneath water to a depth of several thousand metres. The great basins between the continents, in which all this water lies, are themselves more varied, topographically, than the surface of the land. The highest terrestrial mountain, Mount Everest, would fit into the deepest part of the ocean with its peak a kilometre beneath the surface. On the other hand, the biggest mountains in the sea are so high that they rise above the surface of the waters to form chains of islands. Mauna Kea, the highest of the Hawaiian volcanoes, measured from its base on the ocean floor, is more than 10,000 metres high and so can claim to be the highest mountain on the planet. 
                                        </p>
                                        <p class="text-center">
                                            <img src="{{ asset('public/assets/images/test01-1.png') }}" alt="Olympus" width="500px">
                                        </p>
                                        <p class="text-justify">
                                        The seas first formed when the earth began to cool soon after its birth and hot water vapour condensed on its surface. They were further fed by water gushing through volcanic vents from the interior of the earth. The water of these young seas was not pure, like rainwater, but contained significant quantities of chlorine, bromide, iodine and nitrogen, as well as traces of other substances. Since then, other ingredients have been added. As continental rocks weather and erode, they produce salts which are carried in solution down to the sea by the rivers.  So, over the millenia, the sea has been getting saltier and saltier.
                                        </p>
                                        <p class="text-justify">
                                        Life first appeared in this chemically rich water some 3,500 million years ago. We know from fossils that the first organisms were simple, single-cell bacteria and algae. Organisms like them still exist in the sea today. They are the basis of all marine life. Indeed, if it were not for these algae, the seas would still be completely sterile and the land uncolonised. The biggest of these creatures is about a millimetre across, the smallest about one-fiftieth that size. Their tiny bodies are encased in delicate shells, some of calcium carbonate, some of glassy silica. They have a multitude of exquisite shapes made up of prongs and spears with radiating spines and delicate lattices. They exist in immense numbers - a cubic metre of sea water may contain 200,000 - and since they do not propel themselves through the water but drift, they are called phytoplankton, a word which is derived from Greek meaning simply, wandering plants.
                                        </p>
                                        <p class="text-center">
                                            <img src="{{ asset('public/assets/images/test01-2.png') }}" alt="Zooplankton">
                                        </p>
                                        <p class="text-justify">
                                        Among them float vast numbers of small animals called zooplankton. A large proportion of these are single-celled, like the floating algae, and differ from them primarily in the fact that they lack chlorophyll and so cannot photosynthesise for themselves. Instead, they eat those that do. There are other bigger creatures too, of many different kinds - transparent worms studded with phosphorescent lights, small jellyfish, swimming crabs and vast numbers of small shrimps. All these creatures are permanent members of the community. Others are temporary visitors such as the larvae of crabs, starfish, worms and molluscs. These immature forms bear no resemblance to their adult forms but are merely transparent globes. All these varied creatures feed voraciously on the floating algae or on one another, and the entire group, known more commonly simply as plankton, forms a living soup which is the staple diet of a multitude of other bigger creatures. Plankton feeders in shallow waters can fix themselves to the sea floor and rely on the tides and currents to bring food to them. In mid-ocean, however, the floor is below the reach of the sunlight and so out beyond the domain of the plankton. Plankton feeders, therefore, cannot remain attached to the bottom here, but must be active swimmers. 
                                        </p>
                                        <p class="text-justify">
                                        They need not, however, swim very fast. Indeed, speed may be a waste of energy since there is a limit to the rate at which a really large collecting net can profitably pass through the water. Faster than that, a pressure ridge builds up in front of the net which deflects the oncoming water. But though plankton feeders do not move very swiftly, their diet is so nourishing that they sometimes grow to enormous size. The manta-ray, for example, grows to a width of 6 metres. It has a pair of flipper-like wings on either side of its head which channel the water into its vast rectangular mouth. The water leaves its throat through slits on either side of its head. The slits are lined with combs which catch the plankton. A distant cousin of the ray, the basking shark, uses the same sort of apparatus to gather the same food. It grows even bigger than the manta, to a length of 12 metres and a weight of 4 tonnes, and it can process 1000 tonnes of water in an hour. Its top speed is around 5 kilometres an hour, so slow that people encountering it thought it was merely lazing in the sunlit waters, even though in reality it was just collecting its food.  
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.academic.test01.passage3')
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
            url: "{{ route('store.ac-test-01') }}",
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