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
            <h3>Academic Test 2</h3>
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
                                        <h3 class="mt-0">The Mysterious Kris</h3>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">A</span>
                                            <span>
                                                With its razor-sharp, usually wavy blade, the kris was once the favourite weapon of Malay royalty and commoners alike.  In the hands of a skilful exponent of pancak silat, the Malay art of self-defence, it was, and can still be, a deadly weapon in close combat.  Until as recently as the early 20th century, few men felt secure leaving home without a kris tucked into their waistband.  Although stories from the Indonesian archipelago — where the kris is believed to have originated — suggest that the knife existed before recorded history in the area, it is known to have become especially prominent both as a weapon and a status symbol during the Majapahit Empire in the 13th century and later featured at the Malaccan royal court through the exploits of its legendary fighters, Hang Tuah, Hang Jebat and their companions.  The kris was also chosen by the famous Bruneian warrior, Bendahara Sakam, and his men when they drove off the Spanish invaders from the country in 1578.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">B</span>
                                            <span>
                                                To this day no one is sure about when the first kris came into being, but many fantastic tales exist describing its origins and exploits.  One story concerns a father who gave each of his two sons a bamboo staff and a crude blade to carry on their journey into the world.  Each of these items possessed supernatural powers and could be transformed into whatever its owner wished.  One day the brothers encountered a beautiful girl weaving cloth on a bamboo loom.  Wanting to know more about her, the first brother commanded his staff to turn into a bird.  With similar intentions, the second brother willed his blade to become a tiny snake that promptly entered the loom and bit the girl, causing her to fall into a deep sleep.  Now the girl was the beloved child of a king who, in desperation, finally proclaimed that he would give his daughter in marriage to the man who could revive her.  Being the only one with the antidote to the serpent’s venom, the brother who owned the blade-turned-snake succeeded in saving the princess and thus became her husband.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">C</span>
                                            <span>
                                                According to the story, a craftsman of the time was inspired by these events to fashion a weapon with a sinuous blade like a snake in motion.  The hilt was given the form of a bird’s head and the sheath that of the loom into which the snake slithered before delivering its coma-inducing bite.  Thus the kris was born.   Like their mythical predecessor, the earliest known krises were also supposed to possess mysterious powers endowed by the sorcerers or craftsmen who fashioned them.  These powers varied from one kris to another and were dependent upon the requirements of the person who had the weapon forged.  Hence numerous stories abound concerning what such krises could do for their owners — making them invisible or warning them of approaching danger and even flying out under cover of darkness to seek and destroy the owners’ enemies.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">D</span>
                                            <span>
                                                The blades of most krises possess <strong class="font-weight-bold"><i>lok</i></strong> or waves, the sum total of which is traditionally an odd number.  The blades of weapons, such as the Kris Sula, however, which was used in the old royal courts to execute wrong-doers, are devoid of <strong class="font-weight-bold"><i>lok</i></strong> .  Also commonly found on the widest part of the blade just below the hilt is a small ornamentation in the form of an elephant’s trunk, a snakes’ tongue or other symbol relevant to a particular kris-maker.  The blade is normally covered by a damascened pattern called <strong class="font-weight-bold"><i>pamur</i></strong> or <strong class="font-weight-bold"><i>kurau</i></strong> depending on the composition of the metal used to fabricate the pattern.  Historically, kris-makers believed that the pattern strengthened the blade and made it more lethal.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">E</span>
                                            <span>
                                                Crafting a superb kris requires great skill that can only come from years of learning and practice.  The knowledge of fashioning such a weapon was once a closely guarded secret passed on from one generation to another by a few selected family members.  An expert in making kris and other weapons was known as Pandi Besi.  A section of Brunei’s sprawling, centuries-old Kampong Ayer (Water Village) is known as Kampong Pandi Besi, obviously the area in which the country’s ironsmiths once lived and plied their trade.  Nowadays, the blade, hilt and sheath of a kris are usually created separately by three different craftsmen.  Although not unknown, individuals with the ability to competently fashion all three sections have always been rare.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">F</span>
                                            <span>
                                                The procedure of making the kris is basically the same today as it was in the past, the only difference arising from availability of modern tools.  A piece of metal is repeatedly heated and hammered until it is flat.  The next step involves shaping, sharpening, filing and polishing.  During the process, the shank-pin onto which the hilt will be fitted is eventually drawn out and traces of impurities are removed from the blade.  The finished blade is then immersed in homemade vinegar for at least 24 hours to enhance the engraved pattern. The hilt and sheath are usually fashioned from hard, fine-grained wood that is both durable and attractive.  In Brunei Darussalam, the two types of wood popularly used are obtained from Kulinpapa and Hasana trees.  In the old days, horn and ivory were also occasionally utilized.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">G</span>
                                            <span>
                                                The historic art of kris-making is being perpetuated in Brunei Darussalam where young men and women apprentices can choose to undertake a three year course in the skill of fashioning these decorative weapons.  The captivating kris may no longer be seen inside a man’s waistband, except perhaps during official ceremonies, but the legendary dagger continues to enthrall all who encounter the fascinating stories of its heritage.
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.academic.test2.passage1')
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="passage2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mt-0 mb-0">READING PASSAGE 2</h4>
                                    <p>
                                    You should spend about 20 minutes on <span class="font-weight-bold">Questions 15 - 27</span>, which are based on Reading Passage 2.
                                    </p>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card-box height sandbox">
                                        <h3 class="mt-0">An environmental disaster</h3>
                                        <p class="text-justify">
                                        The Aral Sea was a lake that lay between Kazakhstan in the north and Karakalpakstan, an autonomous region of Uzbekistan, in the south. The name roughly translates as "Sea of Islands", referring to more than 1,534 islands that once dotted its waters.
                                        </p>
                                        <p class="text-justify">
                                        Formerly one of the four largest lakes in the world with an area of 68,000 square kilometres, the Aral Sea has been steadily shrinking since the 1960s after the rivers that fed it were diverted by Soviet irrigation projects. By 2007, it had declined to 10% of its original size, splitting into four lakes – the North Aral Sea, the eastern and western basins of the once far larger South Aral Sea and one smaller lake between North and South Aral Seas. By 2009, the southeastern lake had disappeared and the southwestern lake retreated to a thin strip at the extreme west of the former southern sea. The maximum depth of the North Aral Sea is 42 m (as of 2008). 
                                        </p>
                                        <p class="text-justify">
                                        The shrinking of the Aral Sea has been called "one of the planet's worst environmental disasters". The region's once prosperous fishing industry has been essentially destroyed, bringing unemployment and economic hardship. The Aral Sea region is also heavily polluted, with consequent serious public health problems. The retreat of the sea has reportedly also caused local climate change, with summers becoming hotter and drier, and winters colder and longer. 
                                        </p>
                                        <p class="text-justify">
                                        In the early 1960s the Soviet government decided the two rivers that fed the Aral Sea, the Amu Darya in the south and the Syr Darya in the northeast, would be diverted to irrigate the desert, in an attempt to grow rice, melons, cereals, and cotton. This was part of the Soviet plan for cotton, or "white gold", to become a major export. This eventually succeeded, and today Uzbekistan is one of the world's largest exporters of cotton.
                                        </p>
                                        <p class="text-justify">
                                        The construction of irrigation canals began on a large scale in the 1940s. Many of the canals were poorly built, allowing water to leak or evaporate. From the Qaraqum Canal, the largest in Central Asia, perhaps 30 to 75% of the water went to waste. Today, only 12% of Uzbekistan's irrigation canal length is waterproofed. By 1960, between 20 and 60 cubic kilometres of water were going each year to the land instead of the sea. Most of the sea's water supply had been diverted, and in the 1960s, the Aral Sea began to shrink. From 1961 to 1970, the Aral's sea level fell at an average of 20 cm a year; in the 1970s, the average rate nearly tripled to 50–60 centimetres per year, and by the 1980s it continued to drop, now with a mean of 80–90 centimetres each year. The rate of water usage for irrigation continued to increase: the amount of water taken from the rivers doubled between 1960 and 2000, and cotton production nearly doubled in the same period.
                                        </p>
                                        <p class="text-justify">
                                        From 1960 to 1998, the sea's surface area shrank by approximately 60%, and its volume by 80%. In 1960, the Aral Sea had been the world's fourth-largest lake, with an area of approximately 68,000 square kilometres and a volume of 1,100 cubic kilometres; by 1998, it had dropped to 28,687 square kilometres, and eighth-largest. Over the same time period, its salinity increased from about 10 g/L to about 45 g/L. In 1987, the continuing shrinkage split the lake into two separate bodies of water, the North Aral Sea (the Lesser Sea, or Small Aral Sea) and the South Aral Sea (the Greater Sea, or Large Aral Sea).
                                        </p>
                                        <p class="text-justify">
                                        By summer 2003, the South Aral Sea was vanishing faster than predicted. In the deepest parts of the sea, the bottom waters were saltier than the top, and not mixing. Thus, only the top of the sea was heated in the summer, and it evaporated faster than would otherwise be expected. In 2003, the South Aral further divided into eastern and western basins.
                                        </p>
                                        <p class="text-justify">
                                        In 2004, the Aral Sea's surface area was only 17,160 km2, 25% of its original size, and a nearly five-fold increase in salinity had killed most of its natural flora and fauna. By 2007, the sea's area had further shrunk to 10% of its original size, and the salinity of the remains of the South Aral had increased to levels in excess of 100 g/L (grams per litre); by comparison, the salinity of ordinary seawater is typically around 35 g/L; the Dead Sea's salinity varies between 300 and 350 g/L. The decline of the North Aral has now been partially reversed following construction of a dam in 2005, but the remnants of the South Aral continued to disappear and its drastic shrinkage has created the Aralkum, a desert on the former lake bed.
                                        </p>
                                        <p class="text-justify">
                                        The inflow of groundwater discharge into the South Aral Sea will not in itself be able to stop the desiccation. This inflow of about 4 cubic kilometres per year is larger than previously estimated. This groundwater originates in the Pamirs and Tian Shan mountains and finds its way through geological layers to a fracture zone at the bottom of the Aral.
                                        </p>
                                        <p class="text-justify">
                                        In spite of ongoing efforts to save and replenish the North Aral Sea, the outlook for the remnants of the South Aral Sea remains bleak.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.academic.test2.passage2')
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
                                        <h3 class="mt-0">Body piercing: an act of self-mutilation?</h3>
                                        <p class="text-justify">
                                        Body piercing, a form of body modification, is the practice of puncturing or cutting a part of the human body, creating an opening in which jewellery may be worn. Although the history of body piercing is obscured by popular misinformation and by a lack of scholarly reference, ample evidence exists to document that it has been practised in various forms by both sexes since ancient times throughout the world. 
                                        </p>
                                        <p class="text-justify">
                                        Ear piercing and nose piercing have been particularly widespread and are well represented in historical records and among items found in burial grounds. The oldest mummified remains ever discovered were wearing earrings, attesting to the existence of the practice more than 5,000 years ago. Nose piercing is documented as far back as 1500 BC. Piercings of these types have been documented globally, while lip and tongue piercings were historically found in African and American tribal cultures. Nipple and genital piercing have also been practised by various cultures, with nipple piercing dating back at least to Ancient Rome while genital piercing is described in Ancient India between 320 and 550. The history of navel piercing is less clear. The practice of body piercing has waxed and waned in Western culture, but it has experienced an increase of popularity since World War II, with sites other than the ears gaining subcultural popularity in the 1970s and spreading to mainstream in the 1990s.
                                        </p>
                                        <p class="text-justify">
                                        The reasons for piercing or not piercing are varied. Some people pierce for religious or spiritual reasons, while others pierce for self-expression, for aesthetic value, for sexual pleasure, to conform to their culture or to rebel against it. Some forms of piercing remain controversial, particularly when applied to youth. The display or placement of piercings have been restricted by schools, employers and religious groups. In spite of the controversy, some people have practised extreme forms of body piercing.
                                        </p>
                                        <p class="text-justify">
                                        Contemporary body piercing practices emphasize the use of safe body piercing materials, frequently utilizing specialized tools developed for the purpose. Body piercing is an invasive procedure with some risks, including allergic reaction, infection, excessive scarring and unanticipated physical injuries, but such precautions as sanitary piercing procedures and careful aftercare are emphasized to minimize the likelihood of encountering serious problems. The healing time required for a body piercing may vary widely according to placement, from as little as a month for some genital piercings to as much as two full years for the navel.
                                        </p>
                                        <p class="text-justify">
                                        Ear piercing has been practiced all over the world since ancient times. There is considerable written and archaeological evidence of the practice. Among the Tlingit of the Pacific Northwest of America, earrings were a sign of nobility and wealth, as the placement of each earring on a child had to be purchased at an expensive potlatch. Earrings were common in the Eighteenth dynasty of Egypt (1550–1292), generally taking the form of a dangling, gold hoop. Gem-studded, golden earrings shaped like asps seem to have been reserved for nobility. The ancient Greeks wore paste pendant earrings shaped like sacred birds or demigods, while the women of ancient Rome wore precious gemstones in their ears.  
                                        </p>
                                        <p class="text-justify">
                                        In Europe, earrings for women fell from fashion generally between the 4th and 16th centuries, as styles in clothing and hair tended to obscure the ears, but they gradually thereafter came back into vogue in Italy, Spain, England and France—spreading as well to North America—until after World War I when piercing fell from favor and the newly invented Clip-on earring became fashionable. According to some reports, earrings were even more common among men of the 16th century than women. Evidently originating in Spain, the practice of ear piercing among European men spread to the court of Henry III of France and then to Elizabethan era England, where earrings (typically worn in one ear only) were sported by notables and common men alike. From the European Middle Ages, a superstitious belief that piercing one ear improved long-distance vision led to the practice among sailors and explorers. 
                                        </p>
                                        <p class="text-justify">
                                        Nose piercing also has a long history. In the 16th century, the Vedas refer to Lakshmi's nose piercings, but modern practice in India is believed to have spread from the Middle Eastern nomadic tribes by route of the Mughal emperors in the 16th century. It remains customary for Indian Hindu women of childbearing age to wear a nose stud, usually in the left nostril, due to the nostril's association with the female reproductive organs in Ayurvedic medicine. This piercing is sometimes done the night before the woman marries. 
                                        </p>
                                        <p class="text-justify">
                                        Lip piercing and lip stretching were historically found in African and American tribal cultures. Pierced adornments of the lip, or labrets, were sported by the Tlingit as well as peoples of Papua New Guinea and Amazonia. Aztecs and Mayans also wore labrets, while the Dogon people of Mali and the Nuba of Ethiopia wore rings. The practice of stretching the lips by piercing them and inserting plates or plugs was found throughout Pre-Columbian Mesoamerica and South America as well as among some of the tribes of the Pacific Northwest and Africa. In some parts of Malawi, it was quite common for women to adorn their lips with a lip disc called a "pelele" that by means of gradual enlargement from childhood could reach several inches of diameter and would eventually alter the occlusion of the jaw. Such lip stretching is still practiced in some places. Women of the Mursi of Ethiopia wear lip rings on occasion that may reach 15 centimetres in diameter. 
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.academic.test2.passage3')
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
            url: "{{ route('store.ac-test-02') }}",
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