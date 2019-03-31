@extends('layout')

@section('template_title', 'Weboldal készítés')

@section('content')
    <h1>Villámgyors weboldal <span class="typed" id="typed"></span><small>Amit nem tudsz megoldani, azt bízd rám</small></h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-4 offset-lg-2">
                <div class="box bg-red">
                    <h3>Neked agyrém</h3>
                    <p>Nem tudod átírni, átszínezni, átrendezni...</p>
                    <p>Jó lenne bele egy olyan funkció...</p>
                    <p>Tegnap még jó volt...</p>
                </div>
                <div class="box border-red">
                    <h3>Nekem rejtvény</h3>
                    <p>12 év tapasztalat, naprakész tudás</p>
                    <p>Villámgyors munka, sikerdíjas elszámolás</p>
                    <p>Akár teljesen egyedi fejlesztések</p>
                </div>
                <div class="box bg-red write-to-me text-center">
                    Írd le mi a probléma
                    <span class="arrow down bounce"></span>
                </div>
            </div>
            <div class="d-none d-lg-flex col-lg-4 offset-lg-2 ich align-items-end">
                <img class="gergo" src="/img/gergo.svg">
            </div>
        </div>        
    </div>

    <div class="bg-black" id="kapcsolat">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-1">
                    <form id="contact-form">
                        @csrf
                        <h2>Miben segíthetek?</h2>
                        <input name="email" type="email" required placeholder="E-mail" />
                        <textarea name="text" placeholder="Üzenet"></textarea>
                        <input type="submit" class="btn-red" value="Küldés">
                        <p class="email-success d-none">Köszönöm, hamarosan válaszolok!</p>
                    </form>
                </div>

                <div class="col-12 col-lg-4 offset-lg-1">
                    <h2>Gergő vagyok,</h2>
                    <p>weboldalakat készítek, javítok, alakítok át.</p>

                    <p>A legkisebb módosításoktól kezdve, egy egyszerű bemutatkozó oldalon keresztül, a teljesen egyedi ügyviteli rendszerek készítéséig bármivel megkereshetsz.</p>
                    <div class="hashtags">
                        #laravel #wordpress #joomla #webshop #woocommerce
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="questions" id="arak">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1">

                    <h2>Mennyi?</h2>
                    <p>A szerkesztés és javítás óradíja 15.000 Ft, a weboldal készítésre minden esetben egyedi projekt árat adok.</p>

                    <h2>Meddig tart?</h2>
                    <p>Ez mindig az adott feladattól függ.<br>
                        Van, hogy 15 perc alatt kész egy szerkesztés, de van, hogy órákig tart. <br>
                        Egyedi oldalakra tól-ig határt adok, wordpress oldalak van hogy néhány óra alatt elkészülnek.
                    </p>

                    <h2>Mi az a sikerdíjas elszámolás?</h2>
                    <p>Azt jelenti, hogy csak akkor kell fizetned, ha sikerül megcsinálnom amit kértél.<br>
                        Ez hibajavításokra és az oldalad szerkesztésére vonatkozik, hisz én sem tudom előre, meddig fog tartani,<br>
                        illetve ki tudom-e javítani az adott hibát. Ha nem jártam sikerrel, nem kell fizetned egy forintot sem.<br>
                        A sikerdíjas elszámolás weboldal készítésre nem vonatkozik, olyankor előleg megfizetése szükséges.
                    </p>

                    <h2>Tárhelyet is tudok bérelni?</h2>
                    <p>Igen, külön szerződést köthetünk üzemeltetésről, mely tartalmazza a tárhelyet, havi karbantartást, biztonsági mentéseket. Sokan nem is tudják, hogy a weboldalak zöme mögött lévő PHP 5.6-os verziója van a tárhelyén, aminek támogatása már lejárt, így biztonsági kockázatot jelenthet. Ez egyben azt is magával vonja, hogy az új Wordpress, Joomla, Laravel rendszerek új verziói nem fogják támogatni a régi PHP 5.6-ot, így a saját rendszereket sem lehet majd frissen tartani. Ilyen és hasonló dolgok mind beletartoznak az üzemeltetésbe.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="technology" id="technologia">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1">

                    <h2>Mit használsz?</h2>
                    <p>Amikor valaki csak azért szeretne egy honlapot, hogy általa szerkeszthető módon fent legyenek pályázati anyagok, vagy cikkek, és nincs mögötte semmi bonyolult működés, akkor általában <b>Wordpress</b>t szoktam javasolni. Választunk egy ingyenes vagy prémium sablont, és ha megvan a tartalom amiből el lehet készíteni a szerkezetet, akár egy nap alatt kész a weboldal.</p>
                    <p>Főállásban a veszprémi Pannon Egyetemen vagyok programozó, ott <b>Joomla</b> tartalomkezelő rendszert használunk. Ugyanúgy mindent meg lehet csinálni benne, mint Wordpressben, én akkor szoktam javasolni, ha sok felhasználónak kell hozzáférést adni az admin felülethez, és össze-vissza állítgatni, hogy ki milyen funkciókhoz fér hozzá.</p>
                    <p>Végül a kedvencem, az egyedi ügyviteli oldalak fejlesztése, ahol nem kell túlcsicsázni a dolgokat, sokkal inkább fontosabb az, ahogyan az általam készített weboldal megkönnyíti a mindennapi munkát. Ehhez <b>Laravel</b> keretrendszert használok, és még nem találkoztam olyan feladattal, amire ne lett volna alkalmas.</p>

                    <h2>Pár dolog amit kiemelnél?</h2>
                    <p>A <b>bankkártyás fizetés</b> ma már relatív egyszerűen megvalósítható, ha az ember nem bankkal szerződik, hanem például a Barion szolgáltatóval. Ez egy elektronikus pénztárca, nagyon biztonságos, és ugyanúgy könyvelhető, mint egy hagyományos bankszámla.</p>
                    <p>Ritkán van rá szükség, de előfordul, hogy <b>LDAP</b> adatbázist is használnia kell egy ügyfélnek, és ennek segítségével valósítanak meg központi beléptetést és azonosítást. Az egyetemen többek között ilyesmihez fejlesztettem rendszereket, itt jöttem rá, hogy nemigazán van olyan, amit ne tudnék megcsinálni.</p>

                    <h2>Drága...</h2>
                    <p>Soknak tűnik az órabér? Múltkor kint volt a gázszerelő, 5 perc alatt megmondta, hogy 3 alkatrész romolhatott el, kezdjük a legolcsóbbal a cserét. Ez volt 4.500 kiszállás és 5 perc "hiba megállapítás". Megjött az alkatrész 1 hét múlva, megint kijött, 10 perc alatt kicserélte: 3.000 Ft kiszállás 14.000 Ft munkadíj. A számlán nem órabér szerepel, hanem szerelés 1 db. Nálam 10 perc 1.500 Ft.</p>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer-scripts')
<script type="text/javascript">
   $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#contact-form').on('submit', function(e){
      e.preventDefault();
      $.ajax({
        url: '{{ route('contact.send') }}' ,
        type: "POST",
        data: $('#contact-form').serialize(),
        success: function( response ) {
          $('.email-success').show()
        }
      });
    });
</script>
@endsection
