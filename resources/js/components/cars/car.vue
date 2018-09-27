<template>
    <main>
        <section class="claim">
            <div>
                <h1 class="mainTitle">Nissan Leaf</h1>
                <h3 class="subTitle">New Nissan Leaf. Zero Emission.</h3>
            </div>
        </section>
        <div class="wrapper">
            <section class="info">
                <img class="image" src="/images/cars/nissanleaf.jpg">
            </section>
            <section class="description">
                <h1 class="mainTitle">Nissan Leaf</h1>
                <div class="text">

                    <h5 class="subtitle">Chińska Venucia e30</h5>
                    <p>Prototyp auta został oparty na platformie Nissana Tiidy (Nissan Versa w USA i Kanadzie).
                    Zaprezentowano go 26 lipca 2009. Tydzień później przedstawiono wersję produkcyjną.

                    <p>Po raz pierwszy został zaprezentowany jako auto koncepcyjne na targach motoryzacyjnych Tokyo Motor
                    Show 9 października 2009 roku. Wersja produkcyjna zadebiutowała 16 grudnia 2010 roku. Magazyn
                    Time uznał auto za jeden z 50 najlepszych wynalazków roku 2009. Cena auta w 2010 roku wynosiła ok.
                    30 tys. euro. Samochód produkowany jest w japońskich zakładach w Oppama, od stycznia 2013 roku w
                    amerykańskich zakładach w Smyrna w stanie Tennessee, a od marca 2013 roku również w Sunderland w
                    Wielkiej Brytanii. Do sierpnia 2017 roku Nissan sprzedał na świecie 283 tys. egzemplarzy.</p>

                    <h5 class="subtitle">Silnik</h5>
                    <p>Leaf jest napędzany silnikiem elektrycznym o mocy 80 kW/109 KM w zakresie 2730-9800 obr/min i
                    momencie obrotowym 280 Nm w zakresie 0-2730 obr/min. Zasięg samochodu wynosi 160 km, masa ok. 1540
                    kg. Auto w wersji Eu rozwija prędkość ograniczoną do 145 km/h. Przyspieszenie 0-100 km/h trwa 11,9
                    s, choć w praktyce często trwa to krócej o 1 s i wynosi około 10,5 s. W I połowie 2013 roku nieco
                    zmodernizowano napęd, mniejszy moment obrotowy 254 Nm jest osiągany w zakresie 0-3000 obr/min, moc
                    109 KM dostępna jest w zakresie 3000-10000 obr/min, przyspieszenie do 100 km/h wynosi 10,8 s, nieco
                        zwiększono zasięg (do ok. 200 km).</p>

                    <h5 class="subtitle">Nagrody</h5>
                    <p>Nissan Leaf zdobył dwie prestiżowe nagrody. Model został ogłoszony Światowym Samochodem Roku 2011
                    oraz zwyciężył także w europejskim konkursie Car Of The Year, będąc tym samym pierwszym samochodem
                        elektrycznym, który otrzymał ten tytuł.</p>

                    <h5 class="subtitle">Modernizacja</h5>
                    <p>Około 2 lata po wprowadzeniu na rynek Leaf przechodzi facelifting, który obejmuje szereg ulepszeń.
                    Według producenta druga generacja wozu, to ponad 100 modyfikacji w stosunku do wcześniejszego
                    modelu. Udoskonalenia obejmują technologie zapewniające większy realny zasięg, wyższy poziom
                    zdatności do recyklingu, więcej przestrzeni w kabinie, wyższą efektywność ładowania, lepsze
                    wyposażenie oraz trzy dostępne wersje i większy wybór opcji modelu. Zmiany stylistyczne są subtelne,
                    ale dzięki delikatnemu przestylizowaniu przodu auta, obniżono jego i tak niską sprawność
                    aerodynamiczną. Najważniejsza zmiana to nowy, lżejszy elektryczny układ napędowy oraz
                        wprowadzenie nowej wersji "S", bardziej przystępnej cenowo.</p>

                    <p>Zmieniony Leaf został zaprezentowany w Japonii, ale podobne uaktualnienia pojawią się w
                    północnoamerykańskiej odmianie, która dodatkowo już nie będzie importowana z Japonii, ale będzie
                    budowana w fabryce w miejscowości Smyrna w stanie Tennessee. Produkcja rozpoczęła się w styczniu
                        2013 r., a do sprzedaży trafił w marcu 2013 roku.</p>

                    <p>Elektryczny układ napędowy dostał nowe lub przeprojektowane elementy zaczynając od nowego silnika
                    elektrycznego. Ten będzie w przyszłości montowany w hybrydowych i elektrycznych samochodach spółki
                    Renault-Nissan. Według Nissana, bardziej przyjazny dla środowiska silnik zmniejsza wykorzystanie
                    dysprozu (Dy), metalu ziem rzadkich (RE) o 40% w porównaniu do konwencjonalnego silnika EV. Japoński
                    producent mówi również, że nowy zintegrowany silnik elektryczny i konwerter DC/DC spowodowały
                    10-procentową redukcję masy i 30-procentową redukcję objętości. Dzięki wykorzystaniu usprawnionego
                    modułu baterii i jeszcze kilku lekkich elementów nowy Leaf jest lżejszy o 80 kg. Dodatkowo Nissan
                    przeniósł urządzenie do ładowania akumulatorów z tylnej do przedniej części auta. Dzięki temu
                    zwiększyła się przestrzeń bagażowa z 330 do 370 litrów. Inne zmiany obejmują mniejsze zużycie
                    energii, bardziej efektywne regeneracyjne hamulce, zwiększenie zasięgu do 228 km z 142 według
                    japońskiego trybu JC08. Dodano również takie funkcje jak Hill Start Assist, nowy energooszczędny
                    system audio firmy Bose, poprawione wykończenie wnętrza, pojawią się nowe kolory nadwozia: Metal
                        Dark Gray, Brilliant White Pearl i białe i nowe wzory felg aluminiowych.</p>
                </div>
            </section>
        </div>
    </main>
</template>

<script>
    export default {
        name: "car"
    }
</script>

<style lang="scss" scoped>
    .claim {
        background-image: linear-gradient(rgba(226, 62, 76, 0.4), rgba(226, 48, 60, 0.4)), url("/images/advertisementsHome.jpg");
        background-attachment: fixed;
        background-size: cover;
        background-position: 50%;
        height: 50vh;
        display: flex;
        align-items: center;
        color: white;
        font-weight: 500;
        font-family: "Roboto", sans-serif;
        padding-top: 5%;
        padding-left: 8%;

        .mainTitle {
            font-size: 64px;
            @media(max-width: 476px) {
                font-size: 52px;
            }
        }

        .subTitle {
            color: #dddddd;
        }
    }

    .wrapper {

        @media(min-width: 768px) {
            display: flex;
        }

        padding: 5%;
        font-family: "Roboto", sans-serif;
        position: relative;

        @media(min-width: 476px) {
            padding: 7%;
        }

        .info {
            box-shadow: 0px 1px 2px #b9bbbe;

            @media(max-width: 768px) {
                margin-bottom: 30px;
            }

            @media(min-width: 1000px) {
                width: 33%
            }

            .image {
                width: 100%;
            }
        }

        .description {
            box-shadow: 0px 1px 2px #b9bbbe;
            padding: 2.5%;

            @media(min-width: 1000px) {
                width: 66%
            }

            .mainTitle {
                color: #602a29;
                font-weight: 500;
                font-size: 42px;
                padding-bottom: 10px;
            }

            .text {

                .subtitle {
                    color: #602a29;
                    padding-top: 5px;
                }
            }

        }
    }
</style>