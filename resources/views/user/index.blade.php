@extends('user.header_footer')

@section('main')
<section class="about-section">
    <div class="company-logo-container">
        <div class="company-logo-wrapper">
            <div class="gradient right"></div>
            <div class="gradient"></div>
            <div data-w-id="6ee31941-cd11-eadc-5a8f-c363c7ccd4dd" class="company-logo-images">
                <div style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);"
                     class="company-logo-row">
                    @foreach($projects as $logo)
                        <figure class="client-image-wrapper">
                            <img src="img/projects/{{ $logo->project_photo }}" loading="lazy" alt="logo" class="client-image">
                        </figure>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="main-container w-container">
        <div class="about-content-wrapper">
            <div data-w-id="559d9c00-1bd9-8798-8fbe-31d77ed228bc" style="opacity:0" class="about-flex-box">
                <div class="about-flex-left">
                    <div class="about-heading">
                        <h2 class="h2 _600-bold">Hamyonbob va sifatli raqamli mahsulotlar hamda biznes yechimlar</h2>
                    </div>
                </div>
                <div class="about-flex-right">
                    <div class="about-para">
                        <div class="paragraph-v-1 _500-medium">GoldApps LLC jamoasi sigabir vaqtning
                            o'zida 3 unikal funksionalni o'z ichiga oladigan hizmatlarni taklif etadi!
                            <ul>
                                <li>
                                    Hamyonbob
                                </li>
                                <li>
                                    Tez
                                </li>
                                <li>
                                    Sifatli
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-row-1">
                <div data-current="Create your Invoice easily" data-easing="ease" data-duration-in="300"
                     data-duration-out="100" class="tabs-2 w-tabs">
                    <div class="tab-content-2 w-tab-content">
                        <div data-w-tab="Create your Invoice easily" class="tab-panel-2 w-tab-pane w--tab-active">
                            <div class="tab-wrapper hide-element-for-mob">
                                <figure class="feature-tab-left-image feature-image-wrapper">
                                    <div class="feature-animated-image-wrapper">
                                        <div class="feature-animated-image">
                                            <img alt="Tab Image 1" loading="lazy" src="images/illustration-1.png"
                                                 class="feature-tab-image"></div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div data-w-tab="Send a payment request and get paid"
                             class="tab-panel-2 hide-element-on-mob w-tab-pane">
                            <div class="tab-wrapper hide-element-for-mob">
                                <figure class="feature-tab-left-image">
                                    <div class="feature-animated-image-wrapper">
                                        <div class="feature-animated-image"><img alt="Image 2" loading="lazy"
                                                                                 src="images/62daab9565feed09a03fe17e_tab%20image%202.svg"
                                                                                 class="feature-tab-image"></div>
                                    </div>
                                </figure>
                                <div class="feature-tab-text-wrapper"></div>
                            </div>
                        </div>
                        <div data-w-tab="Invoice template system" class="tab-panel-2 hide-element-on-mob w-tab-pane">
                            <div class="tab-wrapper hide-element-for-mob">
                                <figure class="feature-tab-left-image feature-image-wrapper">
                                    <div class="feature-animated-image-wrapper">
                                        <div class="feature-animated-image"><img alt="Tab Image 1" loading="lazy"
                                                                                 src="images/62daab9533d6b3c3aed0ff85_tab%20image%201.svg"
                                                                                 class="feature-tab-image"></div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-menu w-tab-menu">
                        <a data-w-tab="Create your Invoice easily"
                           class="tab-link w-inline-block w-tab-link w--current">
                            <div class="tab-link-image-wrapper">
                                <img alt="pie chart" loading="lazy" src="images/click.png" class="tab-link-image">
                            </div>
                            <div class="tab-link-text">
                                <div class="h5 _600-bold">Web sayt</div>
                                <div class="tab-para">
                                    <p class="paragraph-v-2 _500-medium">O'z biznesingizni rivojlantirmoqchimisiz?
                                        Mahsulotlar sotuvini qanday oshirishni bilmayapsizmi? Bizda bunga yechim bor!
                                        Kompaniyamiz har bir loyiha uchun alohida dasturchilar guruhini bir joyga
                                        jamlaydi.
                                        Brendingiz uchun <b>landing page</b>,<b>murakkab web sayt</b>,
                                        <b>web sayt dizayni</b>, <b>CRM va ERP tizim</b> va boshqa ko'plab qulayliklarga
                                        ega web saytlar tayyorlab beramiz. </p>
                                </div>
                            </div>
                        </a>
                        <a data-w-tab="Send a payment request and get paid" class="tab-link w-inline-block w-tab-link">
                            <div class="tab-link-image-wrapper">
                                <img alt="time line" loading="lazy" src="images/mobileappicon.png"
                                     class="tab-link-image">
                            </div>
                            <div class="tab-link-text">
                                <div class="h5 _600-bold">Mobil ilova</div>
                                <div class="tab-para">
                                    <p class="main-body-text _500-medium">Android va IOS boshqaruv tizimlari
                                        uchun mobil ilova kerakmi? Unda siz uchun GoldApps jamoasi ideal tanlov! Jamoa
                                        har qanday
                                        <b>mobil ilovaning funksional va ijodiy interfeysini</b> yaratishga qodir hamda
                                        bu sohadagi
                                        4 yillik tajribaga ega yetakchi startaperlarni jamlagan</p>
                                </div>
                            </div>
                        </a>
                        <a data-w-tab="Invoice template system" class="tab-link w-inline-block w-tab-link">
                            <div class="tab-link-image-wrapper">
                                <img alt="desktop" loading="lazy" src="images/layers.png" class="tab-link-image">
                            </div>
                            <div class="tab-link-text">
                                <div class="h5 _600-bold">UI&UX dizayn</div>
                                <div class="tab-para">
                                    <p class="main-body-text _500-medium">O'zingiz uchun boshqalarga o'xshamagan unikal
                                        web yoki mobil interfeys dizaynini izlamoqdamisiz? Unda siz uchun GoldApps
                                        jamoasi kreativ va chegirmali g'oyalarni taklif etadi! </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why-seo-section">
    <div class="main-container">
        <div class="why-us-flex">
            <div class="why-us-flex-left">
                <div class="why-us-caption">
                    <div class="h5 _600-bold">Nima uchun GoldApps jamoasi?</div>
                </div>
                <div class="why-us-heading"><h3 class="h2 _600-bold">Sifat, Tezlik va Unikal g'oyalar uchun!</h3></div>
                <div class="why-us-paragraph">
                    <div class="paragraph-v-1 _500-medium">Hozirda GoldApps LLCga <b>30</b>dan
                        ortiq kompaniya va tashkilotlar ishonishadi! Siz esa hali ham hamkor tanlashda o'ylanmoqdamisiz?
                    </div>
                </div>
                <div class="btn-div"><a href="#Contact" class="primary-btn w-button">Bog'lanish</a></div>
            </div>
            <div class="why-us-flex-right">
                <div class="why-us-image-wrapper"><img src="images/62daab9565feed09a03fe17e_tab%20image%202.svg"
                                                       loading="lazy" style="opacity:0"
                                                       data-w-id="6a11ae19-d03a-773f-dfa1-6fd9fcd35649" alt="Image 2"
                                                       class="why-us-image"></div>
            </div>
        </div>
    </div>
    <div id="why-seo" class="anchor-link-space"></div>
</section>
<section class="expertise-section">
    <div class="main-container w-container">
        <div class="expertise-container">
            <div class="expertise-heading"><h3 class="h2 _600-bold">Bizning xizmatlarimiz</h3></div>
            <div class="expertise-sub-para"><p class="paragraph-v-1 _500-medium">Gold Apps kompaniyasi 10dan ortiq IT
                    xizmatlar turlari bilan shug'ullanadi. Xususan kompaniyada 4 yillik tajribaga ega dasturchi, dizayner,
                    marketolog va proyekt menejerlar ishlashadi.</p></div>
            <div class="icon-box-wrapper">
                <div class="iconbox-row"><a href="#" class="icon-card w-inline-block"><img
                            src="images/consultation.png" loading="lazy" alt="Control"
                            class="box-icon"><h4 class="h5 _700-bold">IT konsultatsiya</h4>
                        <p style="font-family: Satoshi, sans-serif;" class="paragraph _500-medium">Biz sizni va sizning xodimlaringizning axborot texnologiyalari
                            sohasida malakasini
                            oshirishimiz. Shu bilan birgalikda kompaniyangiz samaradorligiga ta'sir ko'rsatamiz!</p></a>
                    <a href="#" class="icon-card w-inline-block">
                        <img src="images/click.png" loading="lazy" alt="Control" class="box-icon"><h4
                            class="h5 _700-bold">Web Sayt tayyorlash</h4>
                        <p style="font-family: Satoshi, sans-serif;" class="paragraph _500-medium">Har qanday darajadagi web sayt va vizit saytlari tayyorlab
                            beramiz. Loyihalar
                            tugaganidan so'ng ham dasturchilarimiz tomonidan qo'llab quvvatlash xizmatlari mavjud</p>
                    </a>
                    <a href="#" class="icon-card w-inline-block"><img
                            src="images/layers.png" loading="lazy" alt="Control"
                            class="box-icon"><h4 class="h5 _700-bold">UI&UX dizayn</h4>
                        <p style="font-family: Satoshi, sans-serif;" class="paragraph _500-medium">Zamonaviy ko'rinishdagi dizayn va o'ziga xos funksionalga ega
                            responsiv mobil ilova va web sayt interfeyslarini yaratamiz! Buyurtma berishga
                            shoshiling!</p></a><a href="#" class="icon-card w-inline-block"><img
                            src="images/62dab7652259492d611381c2_Group%2094612.svg" loading="lazy" alt="Control"
                            class="box-icon"><h4 class="h5 _700-bold">SMM xizmatlari</h4>
                        <p style="font-family: Satoshi, sans-serif;" class="paragraph _500-medium">Instagram, Telegram va Youtube kontentlar, xususan kopirayting,
                            smm, mobilografiya
                            va video etiting xizmatlarimiz mavjud bo'lib, barchasi tajribali ekspertlarimiz tomonidan
                            amalga oshiriladi.</p></a><a href="#" class="icon-card w-inline-block"><img
                            src="images/comp_5.png" loading="lazy" alt="Control"
                            class="box-icon1"><h4 class="h5 _700-bold">CRM va ERP tizimlari</h4>
                        <p style="font-family: Satoshi, sans-serif;" class="paragraph _500-medium">Siz uchun qulay vaqtda <br>har qanday murakkablik darajasidagi
                            IT tizimlari.
                            Mustahkam va tez ishlovchi CRM tizimi sizning biznesingizga mos darajada o'rnatilib
                            beriladi.</p></a><a href="/service" class="icon-card w-inline-block"><img
                            src="images/automation.png" loading="lazy" alt="Control"
                            class="box-icon"><h4 class="h5 _700-bold">Avtomatizatsiya</h4>
                        <p style="font-family: Satoshi, sans-serif;" class="paragraph _500-medium">Biznesingizning hisob-kitob ishlari, buyurtma qabul qilish kabi
                            avtomatlashtirishga
                            muxtoj bo'limlarini yuqori darajada avtomatlashtiramiz va korxona infrostrukturasini
                            optimallashtiramiz.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="Sevices" class="anchor-link-space"></div>
</section>
<section class="team-section">
    <div class="main-container w-container">
        <div class="team-container">
            <div class="team-column">
                <div class="team-heading"><h3 class="h2 _600-bold">Bizning jamoa</h3></div>
                <div class="team-block">
                    <div class="team-block-image-wrapper"><img
                            src="images/zuxriddin.jpg" loading="lazy"
                            alt="team member image" class="team-block-image"></div>
                    <div class="team-details-wrapper">
                        <div class="team-details">
                            <div class="team-member-name">
                                <div class="h4 _600-bold">Zuxriddin Ibragimov</div>
                            </div>
                            <div class="team-member-designation">
                                <div style="font-family: Satoshi, sans-serif;" class="paragraph _500-medium font-ravshan">Grafik dizayner. Team lead</div>
                            </div>
                        </div>
                        <a href="mailto:zuhriddin0602uz@gmail.com" class="team-contact-icon-wrapper w-inline-block">
                            <div class="team-contact-icon w-embed">
                                <svg width="19" height="15" viewBox="0 0 19 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="17.3889" height="13.5" stroke="currentColor"
                                          stroke-width="1.5"></rect>
                                    <line x1="1.47467" y1="1.35859" x2="9.97467" y2="9.85859" stroke="currentColor"
                                          stroke-width="1.5"></line>
                                    <line y1="-0.75" x2="12.0208" y2="-0.75"
                                          transform="matrix(-0.707107 0.707107 0.707107 0.707107 17.9443 1.88892)"
                                          stroke="currentColor" stroke-width="1.5"></line>
                                    <title>mail icon</title>
                                </svg>
                            </div>
                        </a></div>
                </div>
                <!--                <div class="team-block">-->
                <!--                    <div class="team-block-image-wrapper"><img-->
                <!--                            src="images/ravshan.JPG" loading="lazy"-->
                <!--                            alt="Team member Icon" class="team-block-image"></div>-->
                <!--                    <div class="team-details-wrapper">-->
                <!--                        <div class="team-details">-->
                <!--                            <div class="team-member-name">-->
                <!--                                <div class="h4 _600-bold">Ravshanbek Isakov</div>-->
                <!--                            </div>-->
                <!--                            <div class="team-member-designation">-->
                <!--                                <div style="font-family: Satoshi, sans-serif;" class="paragraph _500-medium">Web dasturchi. Team lead</div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <a href="mailto:risakov0809@gmail.com" class="team-contact-icon-wrapper w-inline-block">-->
                <!--                            <div class="team-contact-icon w-embed">-->
                <!--                                <svg width="19" height="15" viewBox="0 0 20 15" fill="none"-->
                <!--                                     xmlns="http://www.w3.org/2000/svg">-->
                <!--                                    <rect x="0.75" y="0.75" width="17.3889" height="13.5" stroke="currentColor"-->
                <!--                                          stroke-width="1.5"></rect>-->
                <!--                                    <line x1="1.47467" y1="1.35859" x2="9.97467" y2="9.85859" stroke="currentColor"-->
                <!--                                          stroke-width="1.5"></line>-->
                <!--                                    <line y1="-0.75" x2="12.0208" y2="-0.75"-->
                <!--                                          transform="matrix(-0.707107 0.707107 0.707107 0.707107 17.9443 1.88892)"-->
                <!--                                          stroke="currentColor" stroke-width="1.5"></line>-->
                <!--                                    <title>mail icon</title>-->
                <!--                                </svg>-->
                <!--                            </div>-->
                <!--                        </a></div>-->
                <!--                </div>-->
            </div>
            <div class="team-column">
                <div class="team-block">
                    <div class="team-block-image-wrapper"><img
                            src="images/62dc1b1532dfae8511d2bc5c_Rectangle%202428-1.webp" loading="lazy"
                            alt="Team member Icon" class="team-block-image"></div>
                    <div class="team-details-wrapper">
                        <div class="team-details">
                            <div class="team-member-name">
                                <div class="h4 _600-bold">Samandar Sariboyev</div>
                            </div>
                            <div class="team-member-designation">
                                <div style="font-family: Satoshi, sans-serif;" class="paragraph _500-medium">CEO. Mobile developer</div>
                            </div>
                        </div>
                        <a href="mailto:samandarsariboyev69@gmail.com" class="team-contact-icon-wrapper w-inline-block">
                            <div class="team-contact-icon w-embed">
                                <svg width="19" height="15" viewBox="0 0 19 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="17.3889" height="13.5" stroke="currentColor"
                                          stroke-width="1.5"></rect>
                                    <line x1="1.47467" y1="1.35859" x2="9.97467" y2="9.85859" stroke="currentColor"
                                          stroke-width="1.5"></line>
                                    <line y1="-0.75" x2="12.0208" y2="-0.75"
                                          transform="matrix(-0.707107 0.707107 0.707107 0.707107 17.9443 1.88892)"
                                          stroke="currentColor" stroke-width="1.5"></line>
                                    <title>mail icon</title>
                                </svg>
                            </div>
                        </a></div>
                </div>
                <div class="team-block">
                    <div class="team-block-image-wrapper"><img
                            src="images/ravshan.JPG" loading="lazy"
                            alt="Team member Icon" class="team-block-image"></div>
                    <div class="team-details-wrapper">
                        <div class="team-details">
                            <div class="team-member-name">
                                <div class="h4 _600-bold">Ravshanbek Isakov</div>
                            </div>
                            <div class="team-member-designation">
                                <div style="font-family: Satoshi, sans-serif;" class="paragraph _500-medium">Web developer. Team Lead</div>
                            </div>
                        </div>
                        <a href="mailto:example@mail.com" class="team-contact-icon-wrapper w-inline-block">
                            <div class="team-contact-icon w-embed">
                                <svg width="19" height="15" viewBox="0 0 19 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="17.3889" height="13.5" stroke="currentColor"
                                          stroke-width="1.5"></rect>
                                    <line x1="1.47467" y1="1.35859" x2="9.97467" y2="9.85859" stroke="currentColor"
                                          stroke-width="1.5"></line>
                                    <line y1="-0.75" x2="12.0208" y2="-0.75"
                                          transform="matrix(-0.707107 0.707107 0.707107 0.707107 17.9443 1.88892)"
                                          stroke="currentColor" stroke-width="1.5"></line>
                                    <title>mail icon</title>
                                </svg>
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
    <div id="Team" class="anchor-link-space"></div>
</section>
<section class="pricing-section">
    <div class="main-container pricing-plan-container">
        <div class="pricing-container">
            <div class="pricng-heading"><h4 class="h2 _600-bold">Buyurtma bermoqchimisiz?</h4></div>
            <div class="pricing-para">
                <div class="paragraph-v-1 _500-medium">Bizning xizmatlarimizning taxminiy narxlari bilan tanishib
                    chiqing!
                </div>
            </div>
            <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100"
                 class="pricng-tab w-tabs">
                <div class="tabs-content w-tab-content">
                    <div data-w-tab="Tab 1" class="tab-pane-tab-1 w-tab-pane w--tab-active">
                        <div class="pricing-blocks-wrapper">
                            <div class="pricng-card">
                                <div class="plan-title">
                                    <div class="h5 _600-bold">Web sayt</div>
                                </div>
                                <div class="price-details">
                                    <div><span class="dollar">$ </span><span class="pricing">299</span><span
                                            class="per-month">dan boshlanadi</span></div>
                                </div>
                                <div class="pricing-list">
                                    <div class="pricing-list-wrapper">
                                        <div class="pricing-list-row">
                                            <figure class="pricing-icon-wrapper"><img alt="check mark icon"
                                                                                      loading="lazy"
                                                                                      src="images/62dd30e3a727202b54f0ec0e_checkmark%20green.svg"
                                                                                      class="check-icon"></figure>
                                            <div class="paragraph-v-2 _500-medium">Landing page</div>
                                        </div>
                                        <div class="pricing-list-row">
                                            <figure class="pricing-icon-wrapper"><img alt="check mark icon"
                                                                                      loading="lazy"
                                                                                      src="images/62dd30e3a727202b54f0ec0e_checkmark%20green.svg"
                                                                                      class="check-icon"></figure>
                                            <div class="paragraph-v-2 _500-medium">Yangiliklar vebsayti</div>
                                        </div>
                                        <div class="pricing-list-row">
                                            <figure class="pricing-icon-wrapper"><img alt="check mark icon"
                                                                                      loading="lazy"
                                                                                      src="images/62dd30e3a727202b54f0ec0e_checkmark%20green.svg"
                                                                                      class="check-icon"></figure>
                                            <div class="paragraph-v-2 _500-medium">Dinamik vebsaytlar</div>
                                        </div>
                                        <div class="pricing-list-row">
                                            <figure class="pricing-icon-wrapper"><img alt="check mark icon"
                                                                                      loading="lazy"
                                                                                      src="images/62dd30e3a727202b54f0ec0e_checkmark%20green.svg"
                                                                                      class="check-icon"></figure>
                                            <div class="paragraph-v-2 _500-medium">KMS vebsaytlar</div>
                                        </div>
                                        <div class="pricing-list-row">
                                            <figure class="pricing-icon-wrapper"><img alt="check mark icon"
                                                                                      loading="lazy"
                                                                                      src="images/62dd30e3a727202b54f0ec0e_checkmark%20green.svg"
                                                                                      class="check-icon"></figure>
                                            <div class="paragraph-v-2 _500-medium">Brend uchun vebsaytlar</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing-btn"><a href="#Contact"
                                                            class="primary-btn w-button">To'liq ma'lumot</a></div>
                            </div>
                            <div class="pricng-card">
                                <div class="plan-title">
                                    <div class="h5 _600-bold">CRM va ERP tizimlar</div>
                                </div>
                                <div class="price-details more-bottom-margin">
                                    <div><span class="dollar">$ </span><span class="pricing">699</span><span
                                            class="per-month">dan boshlanadi</span></div>
                                </div>
                                <div class="pricing-list">
                                    <div class="pricing-list-wrapper">
                                        <div class="pricing-list-row">
                                            <figure class="pricing-icon-wrapper"><img alt="check mark icon"
                                                                                      loading="lazy"
                                                                                      src="images/62dd30e3a727202b54f0ec0e_checkmark%20green.svg"
                                                                                      class="check-icon"></figure>
                                            <div class="paragraph-v-2 _500-medium">CRM tizim</div>
                                        </div>
                                        <div class="pricing-list-row">
                                            <figure class="pricing-icon-wrapper"><img alt="check mark icon"
                                                                                      loading="lazy"
                                                                                      src="images/62dd30e3a727202b54f0ec0e_checkmark%20green.svg"
                                                                                      class="check-icon"></figure>
                                            <div class="paragraph-v-2 _500-medium">Tez va sifatli</div>
                                        </div>
                                        <div class="pricing-list-row">
                                            <figure class="pricing-icon-wrapper"><img alt="check mark icon"
                                                                                      loading="lazy"
                                                                                      src="images/62dd30e3a727202b54f0ec0e_checkmark%20green.svg"
                                                                                      class="check-icon"></figure>
                                            <div class="paragraph-v-2 _500-medium">To'lov tizimlari bilan integratsiya
                                            </div>
                                        </div>
                                        <div class="pricing-list-row">
                                            <figure class="pricing-icon-wrapper"><img alt="check mark icon"
                                                                                      loading="lazy"
                                                                                      src="images/62dd30e3a727202b54f0ec0e_checkmark%20green.svg"
                                                                                      class="check-icon"></figure>
                                            <div class="paragraph-v-2 _500-medium">Avtomatlashtirish</div>
                                        </div>
                                        <div class="pricing-list-row">
                                            <figure class="pricing-icon-wrapper"><img alt="check mark icon"
                                                                                      loading="lazy"
                                                                                      src="images/62dd30e3a727202b54f0ec0e_checkmark%20green.svg"
                                                                                      class="check-icon"></figure>
                                            <div class="paragraph-v-2 _500-medium">Internet do'konlar</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href=#Contact" class="primary-btn w-button">To'liq ma'lumot</a>
                                </div>
                            </div>
                            <div class="pricng-card">
                                <div class="plan-title">
                                    <div class="h5 _600-bold">Mobil ilovalar</div>
                                </div>
                                <div class="price-details">
                                    <div><span class="dollar">$ </span><span class="pricing">599</span><span
                                            class="per-month">dan boshlanadi</span></div>
                                </div>
                                <div class="pricing-list">
                                    <div class="pricing-list-wrapper">
                                        <div class="pricing-list-row">
                                            <figure class="pricing-icon-wrapper"><img alt="check mark icon"
                                                                                      loading="lazy"
                                                                                      src="images/62dd30e3a727202b54f0ec0e_checkmark%20green.svg"
                                                                                      class="check-icon"></figure>
                                            <div class="paragraph-v-2 _500-medium">To'lov tizimlari bilan integratsiya
                                            </div>
                                        </div>
                                        <div class="pricing-list-row">
                                            <figure class="pricing-icon-wrapper"><img alt="check mark icon"
                                                                                      loading="lazy"
                                                                                      src="images/62dd30e3a727202b54f0ec0e_checkmark%20green.svg"
                                                                                      class="check-icon"></figure>
                                            <div class="paragraph-v-2 _500-medium">Har qanday qiyinchilikdagi ilova
                                            </div>
                                        </div>
                                        <div class="pricing-list-row">
                                            <figure class="pricing-icon-wrapper"><img alt="check mark icon"
                                                                                      loading="lazy"
                                                                                      src="images/62dd30e3a727202b54f0ec0e_checkmark%20green.svg"
                                                                                      class="check-icon"></figure>
                                            <div class="paragraph-v-2 _500-medium">IOS operatsion tizimiga</div>
                                        </div>
                                        <div class="pricing-list-row">
                                            <figure class="pricing-icon-wrapper"><img alt="check mark icon"
                                                                                      loading="lazy"
                                                                                      src="images/62dd30e3a727202b54f0ec0e_checkmark%20green.svg"
                                                                                      class="check-icon"></figure>
                                            <div class="paragraph-v-2 _500-medium">Funksional interfeys</div>
                                        </div>
                                        <div class="pricing-list-row">
                                            <figure class="pricing-icon-wrapper"><img alt="check mark icon"
                                                                                      loading="lazy"
                                                                                      src="images/62dd30e3a727202b54f0ec0e_checkmark%20green.svg"
                                                                                      class="check-icon"></figure>
                                            <div class="paragraph-v-2 _500-medium">Android operatsion tizimiga</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing-btn"><a href="#Contact"
                                                            class="primary-btn w-button">To'liq ma'lumot</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="Pricing" class="anchor-link-space"></div>
</section>
<div id="Blog" class="blog-section">
    <div class="main-container">
        <div class="blog-container">
            <div class="blog-heading"><h5 class="h2 _600-bold">So'nggi yangiliklar</h5></div>
            <div class="blog-para">
                <div class="paragraph-v-1 _500-medium">GoldApps IT outsours kompaniyasidagi so'ngi yangiliklar va o'zgarishlar
                </div>
            </div>
            <div class="blog-collection-list w-dyn-list " style="display: none" id="news-card">
                <div role="list" class="blog-list w-dyn-items">

                    @foreach($news as $item)
                        <div id="news" role="listitem" class="blog-item w-dyn-item">
                            <div class="blog-card">
                                <a href="../read-post/{{ $item->id }}" class="blog-card-image-wrapper w-inline-block">
                                    <img alt="Blog post image" loading="lazy"
                                         src="../img/news/{{ $item->news_photo }}"
                                         sizes="(max-width: 479px) 100vw, (max-width: 767px) 330px, (max-width: 991px) 43vw, (max-width: 1279px) 30vw, 330px"
                                         class="blog-card-image">
                                </a>
                                <div class="blog-card-text-wrapper">
                                    <a href="../read-post/{{ $item->id }}" class="blog-card-heading w-inline-block">
                                        <div>{{ $item->news_topic }}</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div id="nonews" class="blog-heading"><h5 class="h2 _600-bold">Yangiliklar mavjud emas</h5></div>
            <div class="blog-btn"><a  class="btn w-button" onclick="morenews()">See all posts</a></div>
        </div>
    </div>
</div>
<section id="Contact" class="contact-section">
    <div class="main-container w-container">
        <div class="contact-container">
            <div class="contact-form-wrapper">
                <div class="contact-form-heading"><h6 class="h2 _600-bold">Biz bilan bog'lanish<br></h6></div>
                <div class="contact-para"><p class="paragraph-v-1 _500-medium">Javob kelmadimi? bizga yozing!
                        <a href="mailto:goldapps2022@gmail.com" class="contact-mail-list">goldapps2022@gmail.com</a></p>
                </div>
                <div class="form-block w-form">
                    <form id="wf-form-Home-Page-Contact-Form" name="wf-form-Home-Page-Contact-Form"
                          data-name="Home Page Contact Form" method="get" class="contact-form-block"
                          data-wf-page-id="62d564959d641a74cf38ccca"
                          data-wf-element-id="cee92b15-2722-34aa-b6fe-f7b6d531f3f3">
                        <div class="form-row fixed-height">
                            <input class="text-field _50 with-icon w-input" maxlength="256" name="Name-2"
                                   data-name="Name 2" placeholder="Ismingiz" type="text" id="Name-2" required=""><input
                                class="text-field _50 with-icon-2 w-input" maxlength="256" name="Phone-Number-2"
                                data-name="Phone Number 2" placeholder="Telefon raqamingiz" type="tel"
                                id="Phone-Number-2"
                                required=""></div>
                        <div class="form-row"><input class="text-field with-icon w-input" maxlength="256" name="Email-2"
                                                     data-name="Email 2" placeholder="Emailingiz" type="email"
                                                     id="Email-2">
                        </div>
                        <select id="field-2" name="field-2" data-name="Field 2" class="text-field w-select">
                            <option value="">Xizmat turini tanlang</option>
                            <option value="First">Mobil ilova</option>
                            <option value="Second">Web sayt</option>
                            <option value="Third">Telegram bot</option>
                            <option value="Third">Web dizayn</option>
                            <option value="Third">CRM tizim</option>
                            <option value="Third">Grafik dizayn va video montaj</option>
                        </select>
                        <div class="form-row">
                            <textarea placeholder="Xabaringiz" maxlength="5000" id="Message-2" name="Message-2" data-name="Message 2" class="message-box w-input"></textarea>
                        </div>
                        <div class="submit-btn-wrapper">
                            <input type="submit" data-wait="Iltimos kuting..." class="submit-btn-green w-button" value="Xabarni yuborish">
                        </div>
                    </form>
                    <div class="w-form-done">
                        <div>Xabaringiz yuborildi. Rahmat!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Xabar uzatishda xatolik!</div>
                    </div>
                </div>
            </div>
            <div class="contact-blocks-wrapper">
                <div class="contact-block"><img src="images/62dd44d9a3dc2c6e578e1c25_Phone%20Ringing%2002.svg"
                                                loading="lazy" alt="" class="contact-block-icon">
                    <div class="contact-block-text-wrapper">
                        <div class="contact-block-titile"><h4 class="h5 _700-bold">Bog'lanish uchun kontaktlar</h4>
                        </div>
                        <a href="tel:1800-123-1234" class="contact-link w-inline-block">
                            <div class="paragraph-v-2 _500-medium">+998(99) 566 71 55</div>
                        </a><a href="tel:+16221233000" class="contact-link w-inline-block">
                            <div class="paragraph-v-2 _500-medium">+998(91) 024 80 24</div>
                        </a></div>
                </div>
                <div class="contact-block"><img src="images/62dd452df9ac897952e1e592_Message.svg" loading="lazy" alt=""
                                                class="contact-block-icon">
                    <div class="contact-block-text-wrapper">
                        <div class="contact-block-titile"><h4 class="h5 _700-bold">Email</h4></div>
                        <a href="mailto:goldapps2022@gmail.com" class="contact-link w-inline-block">
                            <div class="paragraph-v-2 _500-medium">goldapps2022@gmail.com</div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const newsdata = <?= json_encode($news) ?>;
    const newscard = document.getElementById('news-card');
    const nonews = document.getElementById('nonews');
    const newsItems = document.querySelectorAll('.blog-item');

    if (newsdata.length === 0) {
        nonews.style.display = 'block';
    } else {
        newscard.style.display = 'block';
        nonews.style.display = 'none';

        // Initially, display the first three news items
        showNewsItems(0, 3);
    }

    function showNewsItems(startIndex, count) {
        for (let i = startIndex; i < startIndex + count; i++) {
            if (newsItems[i]) {
                newsItems[i].style.display = 'block';
            }
        }
    }

    function morenews() {
        const visibleNewsCount = document.querySelectorAll('.blog-item:visible').length;

        // Calculate the index to start showing the next batch of news items
        const startIndex = visibleNewsCount;
        const itemsToShow = 3;

        // Display the next batch of news items
        showNewsItems(startIndex, itemsToShow);

        // If all news items are displayed, hide the "See all posts" button
        if (startIndex + itemsToShow >= newsdata.length) {
            document.querySelector('.blog-btn').style.display = 'none';
        }
    }
</script>

@endsection
