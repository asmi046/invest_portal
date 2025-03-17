<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Facades\Storage;

class InvestDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_doc = [
            [
                'title' => "Закон Курской области от 12.08.2004 N 37-ЗКО «Об инвестиционной деятельности в Курской области»",
                'title_en' => 'The Law of the Kursk region dated 08/12/2004 No. 37-WKO "On investment activities in the Kursk region"',
                'subtype' => "Законы Курской области",
                'subtype_en' => "Laws of the Kursk region",
                'file' => '1.-Zakon-Kurskoj-oblasti-ot-12.08.2004-N-37-ZKO-red.-ot-19.12..pdf'
            ],

            [
                'title' => "Закон Курской области от 22.06.2015 № 58-ЗКО «Об установлении критериев, которым должны соответствовать объекты социально-культурного и коммунально-бытового назначения, масштабные инвестиционные проекты, для размещения (реализации) которых допускается предоставление земельных участков в аренду без проведения торгов»",
                'title_en' => 'The Law of the Kursk region dated 06/22/2015 No. 58-West Kazakhstan Region "On the establishment of criteria to be met by objects of socio-cultural and communal purposes, large-scale investment projects, for the placement (implementation) of which it is allowed to lease land plots without bidding"',
                'subtype' => "Законы Курской области",
                'subtype_en' => "Laws of the Kursk region",
                'file' => '2.-Zakon-Kurskoj-oblasti-ot-22.06.2015-N-58-ZKO-red.-ot-29.11..pdf'
            ],

            [
                'title' => "Закон Курской области от 29.10.2013 № 101-ЗКО «Об инвестиционном фонде Курской области»",
                'title_en' => 'The Law of the Kursk region dated 29.10.2013 No. 101-WKO "On the Investment Fund of the Kursk region"',
                'subtype' => "Законы Курской области",
                'subtype_en' => "Laws of the Kursk region",
                'file' => '3.-Zakon-Kurskoj-oblasti-ot-29.10.2013-N-101-ZKO-red.-ot-10.11.pdf'
            ],
            [
                'title' => "Закон Курской области от 14.12.2010 № 112-ЗКО «О понижении налоговой ставки налога на прибыль организаций, подлежащего зачислению в областной бюджет, для отдельных категорий налогоплательщиков»",
                'title_en' => 'The Law of the Kursk region dated 12/14/2010 No. 112-West Kazakhstan Region "On lowering the tax rate of corporate income tax payable to the regional budget for certain categories of taxpayers"',
                'subtype' => "Законы Курской области",
                'subtype_en' => "Laws of the Kursk region",
                'file' => '4.-Zakon-Kurskoj-oblasti-ot-14.12.2010-N-112-ZKO-red.-ot-07.12.pdf'
            ],
            [
                'title' => "Закон Курской области от 17.07.2008 № 36-ЗКО «О залоговом фонде Курской области»",
                'title_en' => 'The Law of the Kursk region dated 07/17/2008 No. 36-WKO "On the pledge fund of the Kursk region"',
                'subtype' => "Законы Курской области",
                'subtype_en' => "Laws of the Kursk region",
                'file' => '5.-Zakon-Kurskoj-oblasti-ot-17.07.2008-N-36-ZKO-red.-ot-29.11..pdf'
            ],
            [
                'title' => "Закон Курской области от 26.11.2003 № 57-ЗКО  «О налоге на имущество организаций»",
                'title_en' => 'The Law of the Kursk region dated 11/26/2003 No. 57-West Kazakhstan Region "On Corporate Property Tax"',
                'subtype' => "Законы Курской области",
                'subtype_en' => "Laws of the Kursk region",
                'file' => '6.-Zakon-Kurskoj-oblasti-ot-26.11.2003-N-57-ZKO-red.-ot-16.03..pdf'
            ],
            [
                'title' => "Закон Курской области от 11.12.2019 № 129-ЗКО «Об инвестиционном налоговом вычете по налогу на прибыль организаций на территории Курской области»",
                'title_en' => 'The Law of the Kursk region dated 11.12.2019 No. 129-WKO "On investment tax deduction for corporate income tax in the territory of the Kursk region"',
                'subtype' => "Законы Курской области",
                'subtype_en' => "Laws of the Kursk region",
                'file' => '7.-Zakon-Kurskoj-oblasti-ot-11.12.2019-N-129-ZKO-red.-ot-23.12.pdf'
            ],
            [
                'title' => "Закон Курской области от 14.12.2020 № 112-ЗКО «Об отдельных вопросах реализации региональных инвестиционных проектов в Курской области»",
                'title_en' => 'The Law of the Kursk region dated 12/14/2020 No. 112-WKO "On certain issues of the implementation of regional investment projects in the Kursk region"',
                'subtype' => "Законы Курской области",
                'subtype_en' => "Laws of the Kursk region",
                'file' => '8.-112-ZKO-ot-14.12.2020.pdf'
            ],





            [
                'title' => "Постановление Администрации Курской области от 03.04.2017 № 282-па «Об утверждении Правил предоставления за счет бюджетных ассигнований Инвестиционного фонда Курской области субсидий бюджетам муниципальных образований Курской области на софинансирование капитальных вложений в объекты муниципальной собственности»",
                'title_en' => 'Resolution of the Administration of the Kursk Region dated 04/03/2017 No. 282-pa "On Approval of the Rules for Granting Subsidies to the Budgets of Municipalities of the Kursk Region for Co-financing capital Investments in Municipal Property Objects at the expense of Budgetary Allocations of the Investment Fund of the Kursk Region"',
                'subtype' => "Постановления",
                'subtype_en' => "Resolutions",
                'file' => '1.-Postanovlenie-Administracii-Kurskoj-oblasti-ot-03.04.2017-N282-pa.pdf'
            ],
            [
                'title' => "Постановление Губернатора Курской области от 21.06.2017 № 192-пг «О мерах по реализации закона Курской области от 22.06.2015 № 58-ЗКО «Об установлении критериев, которым должны соответствовать объекты социально-культурного и коммунально-бытового назначения, масштабные инвестиционные проекты, для размещения (реализации) которых допускается предоставление земельных участков в аренду без проведения торгов»",
                'title_en' => 'Resolution of the Governor of the Kursk Region dated 06/21/2017 No. 192-pg "On measures to implement the Law of the Kursk Region dated 06/22/2015 No. 58-WKO "On establishing criteria to be met by objects of socio-cultural and communal purposes, large-scale investment projects, for the placement (implementation) of which it is allowed to lease land without holding bidding"',
                'subtype' => "Постановления",
                'subtype_en' => "Resolutions",
                'file' => '2.-Postanovlenie-Gubernatora-Kurskoj-oblasti-ot-21.06.2017-N-192-pg.pdf'
            ],
            [
                'title' => "Постановление Администрации Курской области от 11.02.2016 № 62-па «Об уполномоченном органе исполнительной власти Курской области»",
                'title_en' => 'Resolution of the Administration of the Kursk region dated 02/11/2016 No. 62-pa "On the authorized body of the executive power of the Kursk region"',
                'subtype' => "Постановления",
                'subtype_en' => "Resolutions",
                'file' => '62-pa.docx'
            ],
            [
                'title' => "Постановление Администрации Курской области от 21.05.2014 № 324-па «Об утверждении Регламента комплексного сопровождения инвестиционных проектов (инвесторов) по принципу «одного окна»",
                'title_en' => 'Resolution of the Administration of the Kursk Region dated 05/21/2014 No. 324-pa "On approval of the Regulations for Comprehensive Support of investment Projects (investors) on the principle of "one window"',
                'subtype' => "Постановления",
                'subtype_en' => "Resolutions",
                'file' => '324-pa-Odno-Okno.docx'
            ],
            [
                'title' => "Постановление Администрации Курской области от 27.05.2014 N 338-па «Об утверждении Положения об условиях и порядке создания индустриальных (промышленных) парков»",
                'title_en' => 'Resolution of the Administration of the Kursk Region dated 05/27/2014 No. 338-pa "On approval of the Regulations on the conditions and procedure for the creation of industrial (industrial) parks"',
                'subtype' => "Постановления",
                'subtype_en' => "Resolutions",
                'file' => '338-pa.pdf'
            ],
            [
                'title' => "Постановление Губернатора Курской области от 02.12.2014 № 527-пг «Об утверждении Инвестиционной стратегии Курской области до 2025 года»",
                'title_en' => 'Resolution of the Governor of the Kursk Region dated 02.12.2014 No. 527-pg "On approval of the Investment Strategy of the Kursk Region until 2025"',
                'subtype' => "Постановления",
                'subtype_en' => "Resolutions",
                'file' => '6.-Postanovlenie-Gubernatora-Kurskoj-oblasti-ot-02_12_2014-N-527-pg.pdf'
            ],
            [
                'title' => "Постановление Администрации Курской области от 08.12.2014 № 799-па «Об утверждении Порядка формирования и использования бюджетных ассигнований Инвестиционного фонда Курской области»",
                'title_en' => 'Resolution of the Administration of the Kursk Region dated 08.12.2014 No. 799-pa "On approval of the Procedure for the formation and use of budgetary allocations of the Investment Fund of the Kursk region"',
                'subtype' => "Постановления",
                'subtype_en' => "Resolutions",
                'file' => '7.-Postanovlenie-Administracii-Kurskoj-oblasti-ot-08_12_2014-N-799-pa.pdf'
            ],
            [
                'title' => "Постановление Администрации Курской области от 29.03.2013 № 175-па «О порядке проведения оценки регулирующего воздействия проектов нормативных правовых актов»",
                'title_en' => 'Resolution of the Administration of the Kursk Region dated 03/29/2013 No. 175-pa "On the procedure for assessing the regulatory impact of draft regulatory legal acts"',
                'subtype' => "Постановления",
                'subtype_en' => "Resolutions",
                'file' => '8.-Postanovlenie-Administracii-Kurskoj-oblasti-ot-29_03_2013-N-175-pa.pdf'
            ],
            [
                'title' => "Постановление Администрации Курской области от 28.04.2012 № 411-па «О создании открытого акционерного общества «Агентство по привлечению инвестиций Курской области»",
                'title_en' => 'Resolution of the Administration of the Kursk Region dated 04/28/2012 No. 411-pa "On the establishment of an open joint stock company "Agency for Attracting Investments of the Kursk Region"',
                'subtype' => "Постановления",
                'subtype_en' => "Resolutions",
                'file' => '9.-Postanovlenie-Administracii-Kurskoj-oblasti-ot-28_04_2012-N-411-pa.pdf'
            ],
            [
                'title' => "Постановление Администрации Курской области от 22.07.2011 № 324-па «Об утверждении Порядка предоставления субсидий из областного бюджета инвесторам на возмещение части затрат на уплату процентов по кредитам, привлекаемым в кредитных организациях на реализацию инвестиционных проектов, инвесторам-лизингополучателям на возмещение части затрат на уплату процентов по кредитам, привлекаемым на уплату лизинговых платежей, или на возмещение лизингополучателю части затрат на уплату лизинговых платежей»",
                'title_en' => 'Resolution of the Administration of the Kursk Region dated 07/22/2011 No. 324-pa "On Approval of the Procedure for Granting Subsidies from the regional Budget to Investors for Reimbursement of Part of the Cost of Paying Interest on Loans Attracted from Credit Institutions for the Implementation of Investment Projects, to Lessee Investors for reimbursement of part of the cost of Paying interest on loans attracted for the Payment of Lease Payments, or for reimbursement to the lessee of a part of the cost of paying lease payments"',
                'subtype' => "Постановления",
                'subtype_en' => "Resolutions",
                'file' => '10_Postanovlenie_Administracii_Kurskoj_oblasti_ot_22_07_2011_N_324.pdf'
            ],
            [
                'title' => "Постановление Губернатора Курской области от 09.07.2021 № 315-пг «О создании Совета по улучшению инвестиционного климата, взаимодействию с инвесторами, поддержке и развитию экспорта при Губернаторе Курской области»",
                'title_en' => 'Resolution of the Governor of the Kursk Region dated 07/09/2021 No. 315-pg "On the establishment of the Council for Improving the Investment Climate, Interaction with Investors, support and development of exports under the Governor of the Kursk Region"',
                'subtype' => "Постановления",
                'subtype_en' => "Resolutions",
                'file' => '11_Postanovlenie_Gubernatora_Kurskoj_oblasti_ot_09_07_2021_N_315.pdf'
            ],
            [
                'title' => "Постановление Администрации Курской области от 20.10.2008 № 324 «Об утверждении Положения о порядке и правилах предоставления имущества Курской области в залог»",
                'title_en' => 'Resolution of the Administration of the Kursk Region dated 10/20/2008 No. 324 "On approval of the Regulations on the procedure and Rules for the provision of property of the Kursk region as collateral"',
                'subtype' => "Постановления",
                'subtype_en' => "Resolutions",
                'file' => '324-pa-zalog.docx'
            ],
            [
                'title' => "Постановление Губернатора Курской области от 29.02.2008 № 102-пг «О мерах по реализации статьи 10.1 Закона Курской области «Об инвестиционной деятельности в Курской области»",
                'title_en' => 'Resolution of the Governor of the Kursk Region dated 02/29/2008 No. 102-pg "On measures to implement Article 10.1 of the Law of the Kursk Region "On Investment Activities in the Kursk Region"',
                'subtype' => "Постановления",
                'subtype_en' => "Resolutions",
                'file' => '102-pg.docx'
            ],
            [
                'title' => "Постановление Губернатора Курской области от 11.08.2005 № 590 «Вопросы организации и проведения конкурсного отбора наиболее эффективных инвестиционных проектов»",
                'title_en' => 'Resolution of the Governor of the Kursk Region dated 08/11/2005 No. 590 "Issues of organizing and conducting competitive selection of the most effective investment projects"',
                'subtype' => "Постановления",
                'subtype_en' => "Resolutions",
                'file' => '14.-Postanovlenie-Gubernatora-Kurskoj-oblasti-ot-11_08_2005-N-590.pdf'
            ],
            [
                'title' => "Постановление Администрации Курской области от 01.12.2021 № 1263-па «Об утверждении Правил предоставления субсидии из областного бюджета юридическим лицам, являющимся хозяйственными обществами, 100 процентов акций (долей) которых находится в государственной собственности Курской области, способствующим развитию инвестиционной деятельности, в форме безвозмездного денежного вклада Курской области в имущество, не увеличивающего уставный капитал общества и не изменяющего номинальную стоимость акций»",
                'title_en' => 'Resolution of the Administration of the Kursk Region dated 12/01/2021 No. 1263-pa "On approval of the Rules for Granting Subsidies from the regional budget to Legal Entities that are Business Entities, 100 percent of shares (shares) which is in the state ownership of the Kursk region, contributing to the development of investment activities, in the form of a gratuitous monetary contribution of the Kursk region to the property, which does not increase the authorized capital of the company and does not change the nominal value of shares"',
                'subtype' => "Постановления",
                'subtype_en' => "Resolutions",
                'file' => '15.-1263-pa-ot-01.12.2021.pdf'
            ],
            [
                'title' => "Постановление Администрации Курской области от 22.07.2011 № 324-па «Об утверждении порядка предоставления субсидий из областного бюджета инвесторам на возмещение части затрат на уплату процентов по кредитам, привлекаемым в кредитных организациях на реализацию инвестиционных проектов, инвесторам — лизингополучателям на возмещение части затрат на уплату процентов по кредитам, или на возмещение лизингополучателю части затрат на уплату лизинговых платежей»",
                'title_en' => 'Resolution of the Administration of the Kursk Region dated 07/10/2020 No. 692-pa "On approval of the procedure for approval by the Commission for Evaluating the Effectiveness of Investment Projects of organizations entitled to apply the investment tax deduction for corporate income tax"',
                'subtype' => "Постановления",
                'subtype_en' => "Resolutions",
                'file' => '16.-Postanovlenie-Administracii-Kurskoj-oblasti-ot-22_07_2011-N-324-pa.pdf'
            ],
            [
                'title' => "Постановление Администрации Курской области от 10.07.2020 г. № 692-па «Об утверждении порядка одобрения инвестиционных проектов организаций, имеющих право на применение инвестиционного налогового вычета по налогу на прибыль организаций, комиссией по оценке эффективности инвестиционных проектов»",
                'title_en' => 'Resolution of the Administration of the Kursk Region dated 07/10/2020 No. 692-pa "On approval of the procedure for approving investment Projects of Organizations Entitled to Apply an investment tax deduction for Corporate Income Tax by the Commission for Evaluating the Effectiveness of investment projects"',
                'subtype' => "Постановления",
                'subtype_en' => "Resolutions",
                'file' => '17.-Postanovlenie-Administracii-Kurskoj-oblasti-ot-10_07_2020-N-692-pa.pdf'
            ],




            [
                'title' => "Распоряжение Правительства Курской области от 8 февраля 2008 г. N 53-р",
                'title_en' => "Order of the Government of the Kursk region dated February 8, 2008 No. 53-r",
                'subtype' => "Примерная форма бизнес-плана инвестиционного проекта",
                'subtype_en' => "The approximate form of the business plan of the investment project",
                'file' => 'O-PRIMERNOJ-FORME-BIZNES-PLANA.docx'
            ],

            [
                'title' => "Приказ комитета по экономике и развитию Курской области от 22.08.2017 № 74-о «Об утверждении методики расчета показателей абсолютной и относительной финансовой устойчивости, которым должны соответствовать коммерческие организации, желающие участвовать в реализации проектов, имеющих региональное значение, с использованием бюджетных ассигнований Инвестиционного фонда Курской области»",
                'title_en' => 'Order of the Committee for Economics and Development of the Kursk Region dated 08/22/2017 No. 74-o "On approval of the methodology for calculating indicators of absolute and relative financial stability, which must be met by commercial organizations wishing to participate in the implementation of projects of regional importance using budget allocations of the Investment Fund of the Kursk Region"',
                'subtype' => "Приказы",
                'subtype_en' => "Orders",
                'file' => 'Prikaz-74-o.pdf'
            ],
            [
                'title' => "Приказ комитета по экономике и развитию Курской области от 22.08.2017 № 75-о «Об утверждении методики расчета показателей и применения критериев эффективности региональных инвестиционных проектов, претендующих на получение государственной поддержки за счет бюджетных ассигнований Инвестиционного фонда Курской области»",
                'title_en' => 'Order of the Committee for Economics and Development of the Kursk Region dated 08/22/2017 No. 75-o "On approval of the methodology for calculating indicators and applying criteria for the effectiveness of regional investment projects applying for state support from budget allocations of the Investment Fund of the Kursk Region"',
                'subtype' => "Приказы",
                'subtype_en' => "Orders",
                'file' => 'Prikaz-75-o.pdf'
            ],
            [
                'title' => "Приказ комитета по экономике и развитию Курской области от 21.04.2015 № 8-а «Об утверждении методики расчета показателей абсолютной и относительной финансовой устойчивости, которым должны соответствовать коммерческие организации, претендующие на предоставление государственной поддержки в соответствии с Законом Курской области от 12.08.2004 г. № 37-ЗКО «Об инвестиционной деятельности Курской области»",
                'title_en' => 'Order of the Committee for Economics and Development of the Kursk Region dated 04/21/2015 No. 8-a "On approval of the methodology for calculating indicators of absolute and relative financial stability, which must be met by commercial organizations applying for State support in accordance with the Law of the Kursk Region dated 08/12/2004 No. 37-WKO "On Investment Activities of the Kursk region"',
                'subtype' => "Приказы",
                'subtype_en' => "Orders",
                'file' => 'Prikaz-8-a.docx'
            ],
            [
                'title' => "Приказ комитета по экономике и развитию Курской области от 20.10.2015 № 75-о «Об утверждении форм документов, предоставляемых инвесторами на вхождение в режим наибольшего благоприятствования или реализующих инвестиционные проекты в режиме наибольшего благоприятствования»",
                'title_en' => 'Order of the Committee for Economics and Development of the Kursk Region dated 10/20/2015 No. 75-o "On approval of forms of documents provided by investors for entry into the most favored Nation regime or implementing investment projects in the most favored nation regime"',
                'subtype' => "Приказы",
                'subtype_en' => "Orders",
                'file' => '2.Prikaz-komiteta-po-ekonomike-i-razvitiju-Kurskoi-oblasti-ot-20.10.2015-75-o.docx'
            ],
            [
                'title' => "Приказ комитета по экономике и развитию Курской области от 25.12.2012 № 55-а «Об утверждении Положения о порядке ведения реестра инвестиционных проектов Курской области»",
                'title_en' => 'Order of the Committee for Economics and Development of the Kursk Region dated 12/25/2012 No. 55-a "On approval of the Regulations on the procedure for maintaining the Register of investment projects of the Kursk region"',
                'subtype' => "Приказы",
                'subtype_en' => "Orders",
                'file' => '1.Prikaz-komiteta-po-ekonomike-i-razvitiju-Kurskoi-oblasti-ot-25.12.2012-55-a.doc'
            ],
            [
                'title' => "Приказ комитета по экономике и развитию Курской области от 27.07.2012 № 18-а/1 «Об утверждении примерной формы бизнес-плана инвестиционного проекта и рекомендаций по его разработке»",
                'title_en' => 'Order of the Committee for Economics and Development of the Kursk Region dated 07/27/2012 No. 18-a/1 "On approval of the approximate form of the business plan of the investment project and recommendations for its development"',
                'subtype' => "Приказы",
                'subtype_en' => "Orders",
                'file' => 'Prikaz-18-a1.pdf'
            ]

        ];

        foreach ($data_doc as $item) {
            Storage::disk('public')->put("portal_documents/".$item['file'], file_get_contents(public_path('old_data/zakon_document/'.$item['file'])), 'public');

            DB::table("invest_documents")->insert(
                [
                        'title' => $item['title'],
                        'title_en' => $item['title_en'],
                        'subtype' => $item['subtype'],
                        'subtype_en' => $item['subtype_en'],
                        'file' => "portal_documents/".$item['file'],
                ]

            );
        }


    }
}
