<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectReestrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_reesrt = [
            [
                'state' => "Планируемый",
                'location' => "Курская область",
                'title' =>"Создание биотехнологического комплекса по глубокой переработке пшеницы",
                'title_en' =>"Creation of a biotechnological complex for deep processing of wheat",
                'period' =>"2,5 года с начала финансирования (предварительно 2024 год)",
                'period_en' =>"2.5 years from the start of financing (pre-2024)",
                'price' =>"17 985",
                'investor' => "АО «ИннПромБиотех»",
                'investor_en' => "JSC «InnPromBiotech»",
                //'work_places' =>"",
                'description' => "ru_planned_1.html",
                'description_en' =>"en_planned_1.html",
                //'img' =>"",
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Планируемый",
                'location' => "Курская область",
                'title' =>"Строительство завода по глубокой переработке желтого гороха",
                'title_en' =>"Construction of a plant for deep processing of yellow peas",
                'period' =>"2023-2026",
                'period_en' =>"2023-2026",
                'price' =>"9282",
                'investor' => "ООО «Терра тех»",
                'investor_en' => "LLC «Terra Tech»",
                //'work_places' =>"",
                'description' => "ru_planned_2.html",
                'description_en' =>"en_planned_2.html",
                //'img' =>"",
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Планируемый",
                'location' => "Курская область",
                'title' =>"Строительство гостиничного комплекса «Здоровье» при ОБУЗ «КОНКЦ имени Г.Е. Островерхова»",
                'title_en' =>"Construction of the «Health» hotel complex at the Regional Educational Institution «Konkts” named after G.E. Ostroverkhova»",
                'period' =>"2019-2024",
                'period_en' =>"2019-2024",
                'price' =>"420",
                'investor' => "ООО «Гостиница «Здоровье»",
                'investor_en' => "LLC «Hotel Zdorovye»",
                //'work_places' =>"",
                'description' => "ru_planned_3.html",
                'description_en' =>"en_planned_3.html",
                //'img' =>"",
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализованный",
                //'location' => "",
                'title' =>"Строительство цеха по производству сыров твердых сортов и творога.",
                'title_en' =>"Construction of a workshop for the production of hard cheeses and cottage cheese.",
                'period' =>"2015-2020",
                'period_en' =>"2015-2020",
                'price' =>"320",
                'investor' => 'ООО «Курское молоко»',
                'investor_en' => 'LLC «Kurskoye Milk»',
                //'work_places' =>"",
                'description' => "ru_realized_1.html",
                'description_en' =>"en_realized_1.html",
                //'img' =>"",
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализованный",
                //'location' => "",
                'title' =>"Строительство цеха по производству сыров твердых сортов и творога.",
                'title_en' =>"Construction of a workshop for the production of hard cheeses and cottage cheese.",
                'period' =>"2018-2020",
                'period_en' =>"2018-2020",
                'price' =>"920",
                'investor' => 'ООО «Грейнрус Агро»',
                'investor_en' => 'LLC "Grainrus Agro"',
                //'work_places' =>"",
                'description' => "ru_realized_2.html",
                'description_en' =>"en_realized_2.html",
                //'img' =>"",
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализованный",
                //'location' => "",
                'title' =>"Строительство свиноводческих комплексо",
                'title_en' =>"Construction of pig-breeding complexes",
                'period' =>"2017-2024",
                'period_en' =>"2017-2024",
                'price' =>"94000",
                'investor' => 'ООО «Мираторг-Курск»',
                'investor_en' => 'Miratorg-Kursk LLC',
                //'work_places' =>"",
                'description' => "ru_realized_3.html",
                'description_en' =>"en_realized_3.html",
                //'img' =>"",
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализованный",
                //'location' => "",
                'title' =>"Замещение импортируемого желатина и коллагена",
                'title_en' =>"Replacement of imported gelatin and collagen",
                'period' =>"2021-2023",
                'period_en' =>"2021-2023",
                'price' =>"5780",
                'investor' => 'ООО «АПХ Мираторг» и ООО «Мираторг-Желатин»',
                'investor_en' => 'APH Miratorg LLC and Miratorg-Gelatin LLC',
                //'work_places' =>"",
                'description' => "ru_realized_4.html",
                'description_en' =>"en_realized_4.html",
                //'img' =>"",
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализованный",
                //'location' => "",
                'title' =>"Производство начальной формы фармацевтического гепарина и кормового концентрированного протеина путем глубокой переработки побочной продукции свиноводства",
                'title_en' =>"Production of the initial form of pharmaceutical heparin and concentrated feed protein through deep processing of pig by-products",
                'period' =>"2021-2023",
                'period_en' =>"2021-2023",
                'price' =>"1850",
                'investor' => 'ООО «АПХ Мираторг» и ООО «Гепаринус»',
                'investor_en' => 'APH Miratorg LLC and Heparinus LLC',
                //'work_places' =>"",
                'description' => "ru_realized_5.html",
                'description_en' =>"en_realized_5.html",
                //'img' =>"",
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализованный",
                'location' => "Курский район",
                'title' =>"Селекционно-семеноводческий центр по производству семян сельскохозяйственных культур",
                'title_en' =>"Selection and seed production center for the production of seeds of agricultural crops",
                'period' =>"2022-2023",
                'period_en' =>"2022-2023",
                'price' =>"850",
                'investor' => 'ООО «Мираторг-Курск»',
                'investor_en' => 'Miratorg-Kursk LLC',
                //'work_places' =>"",
                'description' => "ru_realized_6.html",
                'description_en' =>"en_realized_6.html",
                //'img' =>"",
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализованный",
                //'location' => "",
                'title' =>"Строительство производственно-логистического комплекса «Курскагротерминал»",
                'title_en' =>'Construction of the production and logistics complex "Kurskagroterminal"',
                'period' =>"2019-2023",
                'period_en' =>"2019-2023",
                'price' =>"38600",
                'investor' => 'ООО «Курскагротерминал»',
                'investor_en' => 'LLC "Kurskagroterminal"',
                //'work_places' =>"",
                'description' => "ru_realized_7.html",
                'description_en' =>"en_realized_7.html",
                //'img' =>"",
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализованный",
                //'location' => "",
                'title' =>"Закладка сада интенсивного типа и реконструкция фруктохранилища",
                'title_en' =>'Establishment of an intensive garden and reconstruction of a fruit storage facility',
                'period' =>"2016-2022",
                'period_en' =>"2016-2022",
                'price' =>"229",
                'investor' => 'ООО «Зоринский сад»',
                'investor_en' => 'LLC "Zorinsky Garden"',
                //'work_places' =>"",
                'description' => "ru_realized_8.html",
                'description_en' =>"en_realized_8.html",
                //'img' =>"",
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализованный",
                //'location' => "",
                'title' =>"Реконструкция комбикормового завода",
                'title_en' =>'Reconstruction of a feed mill',
                'period' =>"2016-2020",
                'period_en' =>"2016-2020",
                'price' =>"315",
                'investor' => 'ООО «Щигровский КХП»',
                'investor_en' => 'LLC "Shchigrovsky KHP"',
                //'work_places' =>"",
                'description' => "ru_realized_9.html",
                'description_en' =>"en_realized_9.html",
                //'img' =>"",
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализованный",
                'location' => "Железногорский район",
                'title' =>"Строительство в Железногорском районе животноводческого комплекса молочного направления",
                'title_en' =>'Construction of a livestock dairy complex in the Zheleznogorsk region',
                'period' =>"2020-2021",
                'period_en' =>"2020-2021",
                'price' =>"4507",
                'investor' => 'ООО «Агропромкомплектация Курск»',
                'investor_en' => 'LLC "Agropromkomplektatsiya Kursk"',
                //'work_places' =>"",
                'description' => "ru_realized_10.html",
                'description_en' =>"en_realized_10.html",
                //'img' =>"",
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализованный",
                'location' => "Дмитриевский район",
                'title' =>"Строительство в Дмитриевском районе животноводческого комплекса молочного направления",
                'title_en' =>'Construction of a dairy livestock complex in the Dmitrievsky district',
                'period' =>"2020-2021",
                'period_en' =>"2020-2021",
                'price' =>"8550",
                'investor' => 'ООО «Агропромкомплектация Курск»',
                'investor_en' => 'LLC "Agropromkomplektatsiya Kursk"',
                //'work_places' =>"",
                'description' => "ru_realized_11.html",
                'description_en' =>"en_realized_11.html",
                //'img' =>"",
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализованный",
                'location' => "Железногорский район",
                'title' =>"Строительство в Железногорском районе специализированной фермы",
                'title_en' =>'Construction of a specialized farm in the Zheleznogorsk region',
                'period' =>"2020-2021",
                'period_en' =>"2020-2021",
                'price' =>"1028",
                'investor' => 'ООО «Агропромкомплектация Курск»',
                'investor_en' => 'LLC "Agropromkomplektatsiya Kursk"',
                //'work_places' =>"",
                'description' => "ru_realized_12.html",
                'description_en' =>"en_realized_12.html",
                //'img' =>"",
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализованный",
                'location' => "Курская область",
                'title' =>"Реконструкция и модернизация имеющихся производственных площадок",
                'title_en' =>'Reconstruction and modernization of existing production sites',
                'period' =>"2020-2021",
                'period_en' =>"2020-2021",
                'price' =>"2608",
                'investor' => 'ООО «Агропромкомплектация Курск»',
                'investor_en' => 'LLC "Agropromkomplektatsiya Kursk"',
                //'work_places' =>"",
                'description' => "ru_realized_13.html",
                'description_en' =>"en_realized_13.html",
                //'img' =>"",
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализованный",
                //'location' => "",
                'title' =>"Развитие свиноводства",
                'title_en' =>'Development of pig farming',
                'period' =>"2022-2023",
                'period_en' =>"2022-2023",
                'price' =>"2868",
                'investor' => 'ООО «Агропромкомплектация Курск»',
                'investor_en' => 'LLC "Agropromkomplektatsiya Kursk"',
                //'work_places' =>"",
                'description' => "ru_realized_14.html",
                'description_en' =>"en_realized_14.html",
                //'img' =>"",
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализованный",
                //'location' => "",
                'title' =>"Строительство комплекса по производству культивируемых грибов шампиньонов на собственном компосте",
                'title_en' =>'Construction of a complex for the production of cultivated champignon mushrooms using our own compost',
                'period' =>"2019-2023",
                'period_en' =>"2019-2023",
                'price' =>"9800",
                'investor' => 'ООО «Грибная радуга»',
                'investor_en' => 'LLC "Mushroom Rainbow"',
                //'work_places' =>"",
                'description' => "ru_realized_15.html",
                'description_en' =>"en_realized_15.html",
                //'img' =>"",
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализуемые",
                'location' => "Город Железногорск",
                'title' =>"Строительство завода по производству горячебрикетированного железа",
                'title_en' =>'Construction of a plant for the production of hot briquetted iron',
                'period' =>"2020-2024",
                'period_en' =>"2020-2024",
                'price' =>"47 567",
                'investor' => 'ООО «Михайловский ГБЖ»',
                'investor_en' => 'LLC "Mikhailovsky HBI"',
                'work_places' => "391",
                'description' => "ru_preparing_1.html",
                'description_en' =>"en_preparing_1.html",
                'img' =>["preparing_img_1.webp"],
                'presentation' => "preparing_presentation_1.pdf",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализуемые",
                'location' => "Город Железногорск",
                'title' =>"Строительство дробильно-конвейерного комплекса на северо-восточном и юго-восточном борту карьера",
                'title_en' =>'Construction of a crushing and conveyor complex on the northeastern and southeastern sides of the quarry',
                'period' =>"2014-2024",
                'period_en' =>"2014-2024",
                'price' =>"14 712",
                'investor' => 'АО «Михайловский ГОК им. А.В. Варичева',
                'investor_en' => 'JSC Mikhailovsky Mining and Processing Plant named after. A.V. Varicheva',
                'work_places' => "267",
                'description' => "ru_preparing_2.html",
                'description_en' =>"en_preparing_2.html",
                'img' =>["preparing_img_2_1.jpg","preparing_img_2_2.jpg","preparing_img_2_3.jpg","preparing_img_2_4.jpg"],
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализуемые",
                'location' => "Город Курчатов",
                'title' =>"Строительство Курской АЭС-2 (станция замещения Курской АЭС). Энергоблоки N 1 и N 2",
                'title_en' =>'Construction of Kursk NPP-2 (replacement station for Kursk NPP). Power units N 1 and N 2',
                'period' =>"2012-2027",
                'period_en' =>"2012-2027",
                'price' =>"508 697",
                'investor' => 'Филиал АО «Концерн Росэнергоатом «Курская АЭС»',
                'investor_en' => 'Branch of Rosenergoatom Concern JSC Kursk NPP',
                'work_places' => "1359",
                'description' => "ru_preparing_3.html",
                'description_en' =>"en_preparing_3.html",
                'img' =>["preparing_img_3_1.webp","preparing_img_3_2.webp"],
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализуемые",
                'location' => "Город Курчатов",
                'title' =>"Комплекс переработки радиоактивных отходов Курской АЭС",
                'title_en' =>'Radioactive waste processing complex at Kursk NPP',
                'period' =>"2016-2024",
                'period_en' =>"2016-2024",
                'price' =>"25 062,01",
                'investor' => 'Филиал АО «Концерн Росэнергоатом «Курская АЭС»',
                'investor_en' => 'Branch of Rosenergoatom Concern JSC Kursk NPP',
                'work_places' => "598",
                'description' => "ru_preparing_4.html",
                'description_en' =>"en_preparing_4.html",
                'img' =>["preparing_img_4.webp"],
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализуемые",
                'location' => "Город Курск",
                'title' =>"Реконструкция систем биологической очистки городских очистных сооружений",
                'title_en' =>'Radioactive waste processing complex at Kursk NPP',
                'period' =>"2019-2024",
                'period_en' =>"2019-2024",
                'price' =>"2838,465",
                'investor' => 'МУП «Курскводоканал»',
                'investor_en' => 'MUP "Kurskvodokanal"',
                //'work_places' => "",
                'description' => "ru_preparing_5.html",
                'description_en' =>"en_preparing_5.html",
                'img' =>["preparing_img_5_1.jpg", "preparing_img_5_2.jpg"],
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализуемые",
                'location' => "Курская область",
                'title' =>"Реализация долгосрочной инвестиционной программы",
                'title_en' =>'Implementation of a long-term investment program',
                'period' =>"2018-2024",
                'period_en' =>"2018-2024",
                'price' =>"4 208",
                'investor' => 'Филиал ПАО «Россети Центр» — «Курскэнерго»',
                'investor_en' => 'Branch of PJSC "Rosseti Center" - "Kurskenergo"',
                //'work_places' => "",
                'description' => "ru_preparing_6.html",
                'description_en' =>"en_preparing_6.html",
                'img' =>["preparing_img_6_1.webp", "preparing_img_6_2.webp", "preparing_img_6_3.webp"],
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализуемые",
                'location' => "Курская область",
                'title' =>"Строительство 3х складских помещений, жомосушилки и свеклоподраздела емкостью 150 тыс. тонн свеклы",
                'title_en' =>'Construction of 3 warehouses, a pulp dryer and a beet subsection with a capacity of 150 thousand tons of beets',
                'period' =>"2016-2025",
                'period_en' =>"2016-2025",
                'price' =>"2 183,3",
                'investor' => 'ООО «КурскСахарПром» — филиал «Золотухинский»',
                'investor_en' => 'KurskSakharProm LLC - Zolotukhinsky branch"',
                'work_places' => "20",
                'description' => "ru_preparing_7.html",
                'description_en' =>"en_preparing_7.html",
                'img' =>["preparing_img_7.webp"],
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализуемые",
                'location' => "Курская область",
                'title' =>"Строительство селекционно-семеноводческого центра по созданию гибридов кукурузы, по производству семян родительских форм гибридов кукурузы, по производству семян кукурузы F1 в п. Камыши",
                'title_en' =>'Construction of a breeding and seed-growing center for the creation of corn hybrids, for the production of seeds of parental forms of corn hybrids, for the production of F1 corn seeds in the village of Kamyshi',
                'period' =>"2023-2026",
                'period_en' =>"2023-2026",
                'price' =>"2 792",
                'investor' => 'ООО «КурскАгроАктив»',
                'investor_en' => 'LLC "KurskAgroActive"',
                'work_places' => "106",
                'description' => "ru_preparing_8.html",
                'description_en' =>"en_preparing_8.html",
                'img' =>["preparing_img_8.webp"],
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализуемые",
                'location' => "Беловский район",
                'title' =>"Закладка промышленного интенсивного безопорного яблоневого сада на 150 га",
                'title_en' =>'Construction of an industrial intensive unsupported apple orchard on 150 hectares',
                'period' =>"2016-2024",
                'period_en' =>"2016-2024",
                'price' =>"226",
                'investor' => 'ООО «Псельское»',
                'investor_en' => 'LLC "Pselskoe"',
                'work_places' => "137",
                'description' => "ru_preparing_9.html",
                'description_en' =>"en_preparing_9.html",
                'img' =>["preparing_img_9.webp"],
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализуемые",
                'location' => "Беловский район",
                'title' =>"Строительство плодохранилища на 5000 тонн в Беловском районе Курской области на территории Малосолдатского сельсовета",
                'title_en' =>'Construction of a fruit storage facility for 5,000 tons in the Belovsky district of the Kursk region on the territory of the Malosoldatsky village council',
                'period' =>"2022-2024",
                'period_en' =>"2022-2024",
                'price' =>"563",
                'investor' => 'ООО «Псельское»',
                'investor_en' => 'LLC "Pselskoe"',
                'work_places' => "27",
                'description' => "ru_preparing_10.html",
                'description_en' =>"en_preparing_10.html",
                'img' =>["preparing_img_10.webp"],
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализуемые",
                'location' => "Мантуровский район",
                'title' =>"Строительство плодохранилища",
                'title_en' =>'Construction of a fruit storage facility',
                'period' =>"2019-2024",
                'period_en' =>"2019-2024",
                'price' =>"620",
                'investor' => 'ООО «Луч»',
                'investor_en' => 'LLC "Luch"',
                'work_places' => "57",
                'description' => "ru_preparing_11.html",
                'description_en' =>"en_preparing_11.html",
                'img' =>["preparing_img_11_1.webp", "preparing_img_11_2.webp"],
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализуемые",
                'location' => "Мантуровский район",
                'title' =>"Строительство молочно-товарной фермы на 2500 фуражных коров беспривязного содержания",
                'title_en' =>'Construction of a commercial dairy farm for 2,500 free-stall forage cows',
                'period' =>"2020-2024",
                'period_en' =>"2020-2024",
                'price' =>"1 455",
                'investor' => 'ООО «Луч»',
                'investor_en' => 'LLC "Luch"',
                'work_places' => "110",
                'description' => "ru_preparing_12.html",
                'description_en' =>"en_preparing_12.html",
                'img' =>["preparing_img_12_1.webp", "preparing_img_12_2.webp"],
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализуемые",
                'location' => "Мантуровский район",
                'title' =>"Реконструкция молочно-товарной фермы на 1700 фуражных коров",
                'title_en' =>'Reconstruction of a dairy farm for 1,700 feed cows',
                'period' =>"2020-2024",
                'period_en' =>"2020-2024",
                'price' =>"153",
                'investor' => 'ООО «Луч»',
                'investor_en' => 'LLC "Luch"',
                'work_places' => "100",
                'description' => "ru_preparing_13.html",
                'description_en' =>"en_preparing_13.html",
                'img' =>["preparing_img_13_1.webp", "preparing_img_13_2.webp"],
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализуемые",
                'location' => "Город Щигры",
                'title' =>"Строительство новых мощностей и реконструкция действующих, предназначенных для приемки, подработки, хранения и отгрузки зерна",
                'title_en' =>'Construction of new facilities and reconstruction of existing ones intended for acceptance, part-time work, storage and shipment of grain',
                'period' =>"2017-2024",
                'period_en' =>"2017-2024",
                'price' =>"3 500",
                'investor' => 'АО «Щигровский КХП»',
                'investor_en' => 'Shchigrovsky KHP JSC',
                'work_places' => "74",
                'description' => "ru_preparing_14.html",
                'description_en' =>"en_preparing_14.html",
                'img' =>["preparing_img_14.webp"],
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализуемые",
                'location' => "Город Курск",
                'title' =>"Реконструкция склада бестарного хранения муки",
                'title_en' =>'Reconstruction of the bulk flour storage warehouse',
                'period' =>"2021-2025",
                'period_en' =>"2021-2025",
                'price' =>"80",
                'investor' => 'ОАО «Курскхлеб»',
                'investor_en' => 'JSC "Kurskkhleb"',
                //'work_places' => "",
                'description' => "ru_preparing_15.html",
                'description_en' =>"en_preparing_15.html",
                'img' =>["preparing_img_15.webp"],
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],

            [
                'state' => "Реализуемые",
                'location' => "Деревня Ворошнево, Курская область",
                'title' =>"Строительство селекционно-семеноводческого центра по производству различных видов семян сельскохозяйственных культур мощностью 43,5 тыс. тонн в год",
                'title_en' =>'Construction of a seed breeding center for the production of various types of agricultural seeds with a capacity of 43.5 thousand tons per year',
                'period' =>"2022-2024",
                'period_en' =>"2022-2024",
                'price' =>"3 500",
                'investor' => 'ООО «Мираторг-Курск»',
                'investor_en' => '"Miratorg-Kursk LLC"',
                'work_places' => "27",
                'description' => "ru_preparing_16.html",
                'description_en' =>"en_preparing_16.html",
                'img' =>["preparing_img_16.webp"],
                //'presentation' => "",
                //'seo_title' => "",
                //'seo_description' => ""
            ],
        ];

        foreach ($data_reesrt as $item) {

            $directory = "planed";

            if ($item['state'] === "Реализуемые") $directory = "preparing";
            if ($item['state'] === "Реализованный") $directory = "realiz";

            $item['slug'] = Str::slug($item['title']);

            if (isset($item['img']) && !empty($item['img'])) {
                Storage::disk('public')->put("project_reestr/".$item['img'][0], file_get_contents(public_path('old_data/reestr_info/img_reestr/'.$item['img'][0])), 'public');
                $item['img'] = $item['img'][0];
            }

            $item['description'] = file_get_contents(public_path('old_data/reestr_info/'.$directory.'/'.$item['description']));
            $item['description_en'] = file_get_contents(public_path('old_data/reestr_info/'.$directory.'/'.$item['description_en']));

            DB::table("project_reestrs")->insert(
                $item
            );
        }
    }
}
