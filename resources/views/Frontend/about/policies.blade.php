<x-frontend.layout>
    {{-- Breadcrumb --}}
    <div class="bg-gray-50 border-b border-gray-100 mt-1">
        <div class="max-w-6xl mx-auto py-4 px-4">
            <ul class="flex items-center gap-2 text-sm">
                <li><a class="text-gray-400 hover:underline decoration-gray-400" href="{{ route('home') }}">Home</a></li>
                <li class="text-gray-400">/</li>
                <li class="text-[var(--secondary-color)]">Policies/Certifications</li>
            </ul>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-8 md:py-10">

        {{-- Top Two Banners --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
            <div class="bg-[#4a3f8f] text-white flex items-end p-6 md:p-8 min-h-[120px] md:min-h-[160px]">
                <h1 class="text-2xl md:text-3xl font-bold tracking-wide uppercase">Quality Policy</h1>
            </div>
            <div
                class="bg-[#4a3f8f] text-white flex items-end justify-start sm:justify-end p-6 md:p-8 min-h-[120px] md:min-h-[160px]">
                <h1 class="text-2xl md:text-3xl font-bold"
                    style="font-family: 'Noto Nastaliq Urdu', serif; direction: rtl;">
                    کوالٹی پالیسی
                </h1>
            </div>
        </div>

        {{-- Description Row --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
            <div class="text-gray-600 text-sm leading-7 text-justify">
                The Searle Company Limited is committed to manufacture and market pharmaceutical
                and consumer products of highest quality standard. We are committed to assure end
                product quality, purity, efficacy and safety for its end users at affordable price, both locally
                and internationally.
            </div>
            <div class="text-gray-600 text-sm leading-8 text-right"
                style="direction: rtl; font-family: 'Noto Nastaliq Urdu', serif;">
                سرل کمپنی اعلی معیار کی ادویات اور کنزیومر مصنوعات کی مینوفیکچرنگ اور مارکیٹنگ کے لیے پر عزم ہے۔
                ہم اپنی مصنوعات کی کوالٹی، شفافیت، افادیت اور سلامتی برقرار رکھتے ہوئے، انہیں اپنے اندرونی
                اور بیرونی ملک صارفین تک مناسب قیمت میں پہنچانے میں یقین رکھتے ہیں۔
            </div>
        </div>

        {{-- Commitment Boxes --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            {{-- English --}}
            <div class="border border-gray-200 p-6">
                <h2 class="text-lg text-gray-700 mb-4">To achieve our commitment, we</h2>
                <ul class="space-y-3">
                    <li class="flex items-start gap-2 text-sm text-gray-600 leading-6">
                        <span class="text-[#4a3f8f] mt-1">&#9658;</span>
                        Maintain an effective Quality Management System.
                    </li>
                    <li class="flex items-start gap-2 text-sm text-gray-600 leading-6">
                        <span class="text-[#4a3f8f] mt-1">&#9658;</span>
                        Provide pharmaceutical and consumer products to our customers and other
                        stakeholders whilst remaining true and consistent to our principles of Quality in
                        operations, products and services.
                    </li>
                    <li class="flex items-start gap-2 text-sm text-gray-600 leading-6">
                        <span class="text-[#4a3f8f] mt-1">&#9658;</span>
                        Achieve employees and stakeholders' satisfaction by setting objectives and continually
                        reviewing and improving the effectiveness of the Quality Management System.
                    </li>
                    <li class="flex items-start gap-2 text-sm text-gray-600 leading-6">
                        <span class="text-[#4a3f8f] mt-1">&#9658;</span>
                        Comply with all applicable regulatory and other requirements.
                    </li>
                    <li class="flex items-start gap-2 text-sm text-gray-600 leading-6">
                        <span class="text-[#4a3f8f] mt-1">&#9658;</span>
                        Educate, train and motivate employees to conduct activities in a responsible manner
                        and as per the company's Quality Policy.
                    </li>
                </ul>
                <div class="mt-8 pt-4">
                    <div class="text-2xl font-signature text-gray-700 mb-1"
                        style="font-family: 'Dancing Script', cursive;">&#x2767;</div>
                    <p class="text-xs text-gray-500">Chief Executive Officer</p>
                </div>
            </div>

            {{-- Urdu --}}
            <div class="border border-gray-200 p-6" style="direction: rtl; font-family: 'Noto Nastaliq Urdu', serif;">
                <h2 class="text-lg text-gray-700 mb-4">اس عہد کی تکمیل کے لئے</h2>
                <ul class="space-y-3">
                    <li class="flex items-start gap-2 text-sm text-gray-600 leading-8">
                        <span class="text-[#4a3f8f] mt-1">&#9658;</span>
                        ہم کوالٹی کا ایک موثر اور میدانی انتظامی نظام برقرار رکھتے ہیں۔
                    </li>
                    <li class="flex items-start gap-2 text-sm text-gray-600 leading-8">
                        <span class="text-[#4a3f8f] mt-1">&#9658;</span>
                        ہم کوالٹی کے حقیقی وعدہ اصولوں پر کاربند رہتے ہوئے ادویات و اشیاء کے صرف اپنے صارفین
                        اور دیگر دلچسپی رکھنے والے اداروں کو فراہم کرتے ہیں۔
                    </li>
                    <li class="flex items-start gap-2 text-sm text-gray-600 leading-8">
                        <span class="text-[#4a3f8f] mt-1">&#9658;</span>
                        ہم اپنے اہداف کا تعین کرتے ہیں اور اپنے مربوط انتظامی نظام میں مسلسل بہتری لاتے ہوئے،
                        ملازمین اور کسٹمرز کا اطمینان حاصل کرتے ہیں۔
                    </li>
                    <li class="flex items-start gap-2 text-sm text-gray-600 leading-8">
                        <span class="text-[#4a3f8f] mt-1">&#9658;</span>
                        ہم تمام نافذ العمل ہونے والے قوانین پر عمل اور دیگر تقاضوں کو پورا کرتے ہیں۔
                    </li>
                    <li class="flex items-start gap-2 text-sm text-gray-600 leading-8">
                        <span class="text-[#4a3f8f] mt-1">&#9658;</span>
                        ہم اپنے ملازمین کو پیشہ ورانہ عبادت اور ذمہ داری سے انجام دینے کے لیے تربیت فراہم کرتے ہیں۔
                    </li>
                </ul>
                <div class="mt-8 pt-4 text-right">
                    <div class="text-2xl text-gray-700 mb-1">&#x2767;</div>
                    <p class="text-xs text-gray-500">چیف ایگزیکٹو آفیسر</p>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-8 md:py-10 space-y-10 md:space-y-16">

        {{-- ===================== SECTION 1: QUALITY POLICY ===================== --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

            {{-- English Card --}}
            <div class="border border-gray-200 shadow-sm">
                <div class="px-6 pt-5 pb-3">
                    <p class="text-[#0057a8] text-2xl font-bold tracking-widest">SEARLE</p>
                </div>
                <div
                    class="flex flex-wrap text-xs text-gray-500 border-t border-b border-gray-200 divide-x divide-gray-200">
                    <span class="px-3 py-2 flex-1 min-w-0">Doc. Ref: IMS/IV/0025</span>
                    <span class="px-3 py-2 flex-1 min-w-0">Revision No: 02</span>
                    <span class="px-3 py-2 flex-1 min-w-0">Issue Date: 01-11-2019</span>
                </div>
                <div class="bg-[#4a3f8f] text-white px-6 py-8 mt-4">
                    <h2 class="text-xl md:text-2xl font-bold uppercase tracking-wide">Quality Policy</h2>
                </div>
                <div class="px-6 py-5 text-sm text-gray-600 leading-7 text-justify">
                    Nextar Pharma Private Limited is committed to manufacture and market Biopharmaceutical
                    Products of highest quality standard. We are committed to assure product quality, purity,
                    efficacy and safety for its end users at affordable price, both locally and internationally.
                </div>
                <div class="mx-6 border border-gray-300 p-4 text-sm text-gray-600">
                    <p class="mb-3 text-gray-700">To achieve our commitment, we</p>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-2 leading-6">
                            <span class="text-[#4a3f8f] mt-0.5">&#9658;</span>
                            Maintain an effective Quality Management System.
                        </li>
                        <li class="flex items-start gap-2 leading-6">
                            <span class="text-[#4a3f8f] mt-0.5">&#9658;</span>
                            Provide Biopharmaceutical products to our customers and other interested parties whilst
                            remaining true and consistent to our principles of Quality in operations, products and
                            services.
                        </li>
                        <li class="flex items-start gap-2 leading-6">
                            <span class="text-[#4a3f8f] mt-0.5">&#9658;</span>
                            Achieve employees and other interested parties satisfaction by setting objectives and
                            continually reviewing and improving the effectiveness of the Quality Management System.
                        </li>
                        <li class="flex items-start gap-2 leading-6">
                            <span class="text-[#4a3f8f] mt-0.5">&#9658;</span>
                            Comply with all applicable regulatory and other requirements.
                        </li>
                        <li class="flex items-start gap-2 leading-6">
                            <span class="text-[#4a3f8f] mt-0.5">&#9658;</span>
                            Educate, train and motivate employees and other interested parties to conduct activities
                            in a responsible manner and as per the company's Quality Policy.
                        </li>
                    </ul>
                </div>
                <div class="px-6 py-5">
                    <p class="text-2xl text-gray-600" style="font-family: 'Dancing Script', cursive;">✍</p>
                    <p class="text-xs text-gray-500 mt-1">Chief Executive Officer</p>
                    <p class="text-xs text-gray-400">Nextar Pharma Private Limited</p>
                </div>
                <div class="flex justify-between items-center px-6 pb-4">
                    <div class="text-right">
                        <p class="text-[#1a6fb5] text-lg font-bold tracking-wide">NEXTAR</p>
                        <p class="text-[#1a6fb5] text-xs tracking-widest">PHARMA</p>
                    </div>
                </div>
                <div class="flex flex-wrap text-xs text-gray-500 border-t border-gray-200 divide-x divide-gray-200">
                    <span class="px-3 py-2 flex-1 min-w-0">Doc. Ref: MSM-F004-01</span>
                    <span class="px-3 py-2 flex-1 min-w-0">Version No: 01</span>
                    <span class="px-3 py-2 flex-1 min-w-0">Effective Date: 01-01-2020</span>
                </div>
            </div>

            {{-- Urdu Card --}}
            <div class="border border-gray-200 shadow-sm"
                style="direction: rtl; font-family: 'Noto Nastaliq Urdu', serif;">
                <div class="px-6 pt-5 pb-3">
                    <p class="text-[#0057a8] text-2xl font-bold tracking-widest" style="direction:ltr;">SEARLE</p>
                </div>
                <div class="flex flex-wrap text-xs text-gray-500 border-t border-b border-gray-200 divide-x divide-gray-200"
                    style="direction:ltr;">
                    <span class="px-3 py-2 flex-1 min-w-0">Doc. Ref: IMS/IV/0025</span>
                    <span class="px-3 py-2 flex-1 min-w-0">Revision No: 02</span>
                    <span class="px-3 py-2 flex-1 min-w-0">Issue Date: 01-11-2019</span>
                </div>
                <div class="bg-[#4a3f8f] text-white px-6 py-8 mt-4 text-right">
                    <h2 class="text-xl md:text-2xl font-bold">کوالٹی پالیسی</h2>
                </div>
                <div class="px-6 py-5 text-sm text-gray-600 leading-8 text-right">
                    سرل کمپنی اعلی معیار کی ادویات اور کنزیومر مصنوعات کی مینوفیکچرنگ اور مارکیٹنگ کے لیے پر عزم ہے۔
                    ہم اپنی مصنوعات کی کوالٹی، شفافیت، افادیت اور سلامتی برقرار رکھتے ہوئے، انہیں اپنے اندرونی
                    اور بیرونی ملک صارفین تک مناسب قیمت میں پہنچانے میں یقین رکھتے ہیں۔
                </div>
                <div class="mx-6 border border-gray-300 p-4 text-sm text-gray-600">
                    <p class="mb-3 text-gray-700 text-right">اس عہد کی تکمیل کے لئے</p>
                    <ul class="space-y-3 text-right">
                        <li class="flex items-start gap-2 leading-8 flex-row-reverse">
                            <span class="text-[#4a3f8f] mt-1">&#9658;</span>
                            ہم کوالٹی کا ایک موثر اور میدانی انتظامی نظام برقرار رکھتے ہیں۔
                        </li>
                        <li class="flex items-start gap-2 leading-8 flex-row-reverse">
                            <span class="text-[#4a3f8f] mt-1">&#9658;</span>
                            ہم کوالٹی کے حقیقی وعدہ اصولوں پر کاربند رہتے ہوئے ادویات و اشیاء کے صرف اپنے صارفین اور
                            دیگر دلچسپی رکھنے والے اداروں کو فراہم کرتے ہیں۔
                        </li>
                        <li class="flex items-start gap-2 leading-8 flex-row-reverse">
                            <span class="text-[#4a3f8f] mt-1">&#9658;</span>
                            ہم اپنے اہداف کا تعین کرتے ہیں اور اپنے مربوط انتظامی نظام میں مسلسل بہتری لاتے ہوئے
                            ملازمین اور کسٹمرز کا اطمینان حاصل کرتے ہیں۔
                        </li>
                        <li class="flex items-start gap-2 leading-8 flex-row-reverse">
                            <span class="text-[#4a3f8f] mt-1">&#9658;</span>
                            ہم تمام نافذ العمل ہونے والے قوانین پر عمل اور دیگر تقاضوں کو پورا کرتے ہیں۔
                        </li>
                        <li class="flex items-start gap-2 leading-8 flex-row-reverse">
                            <span class="text-[#4a3f8f] mt-1">&#9658;</span>
                            ہم اپنے ملازمین کو پیشہ ورانہ عبادت اور ذمہ داری سے انجام دینے کے لیے تربیت فراہم کرتے ہیں۔
                        </li>
                    </ul>
                </div>
                <div class="px-6 py-5 text-right">
                    <p class="text-2xl text-gray-600">✍</p>
                    <p class="text-xs text-gray-500 mt-1">چیف ایگزیکٹو آفیسر</p>
                    <p class="text-xs text-gray-400">نیکسٹار فارما پرائیویٹ لمیٹڈ</p>
                </div>
                <div class="flex justify-start px-6 pb-4">
                    <div class="text-left">
                        <p class="text-[#1a6fb5] text-lg font-bold tracking-wide">NEXTAR</p>
                        <p class="text-[#1a6fb5] text-xs tracking-widest">PHARMA</p>
                    </div>
                </div>
                <div class="flex flex-wrap text-xs text-gray-500 border-t border-gray-200 divide-x divide-gray-200"
                    style="direction:ltr;">
                    <span class="px-3 py-2 flex-1 min-w-0">Doc. Ref: MSM-F004-01</span>
                    <span class="px-3 py-2 flex-1 min-w-0">Version No: 01</span>
                    <span class="px-3 py-2 flex-1 min-w-0">Effective Date: 01-01-2020</span>
                </div>
            </div>
        </div>


        {{-- ===================== SECTION 2: OCCUPATIONAL HEALTH & SAFETY ===================== --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

            {{-- English Card --}}
            <div class="border border-gray-200 shadow-sm">
                <div class="px-6 pt-5 pb-3">
                    <p class="text-[#0057a8] text-2xl font-bold tracking-widest">SEARLE</p>
                </div>
                <div
                    class="flex flex-wrap text-xs text-gray-500 border-t border-b border-gray-200 divide-x divide-gray-200">
                    <span class="px-3 py-2 flex-1 min-w-0">Doc. Ref: IMS/IV/0025</span>
                    <span class="px-3 py-2 flex-1 min-w-0">Revision No: 02</span>
                    <span class="px-3 py-2 flex-1 min-w-0">Issue Date: 01-11-2019</span>
                </div>
                <div class="bg-[#1a6fb5] text-white px-6 py-8 md:py-10 mt-4">
                    <h2 class="text-xl md:text-2xl font-bold uppercase tracking-wide leading-snug">Occupational Health
                        &<br>Safety Policy</h2>
                </div>
                <div class="px-6 py-5 text-sm text-gray-600 leading-7 text-justify">
                    Nextar Pharma Private Limited Occupational Health & Safety is fundamental to the success of our
                    business.
                </div>
                <div class="mx-6 border border-gray-300 p-4 text-sm text-gray-600">
                    <p class="mb-3 text-[#1a6fb5]">We believe that:</p>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-2 leading-6">
                            <span class="text-[#1a6fb5] mt-0.5">&#9658;</span>
                            All accidents and injuries are unacceptable and we will strive to eliminate all such
                            occurrences.
                        </li>
                        <li class="flex items-start gap-2 leading-6">
                            <span class="text-[#1a6fb5] mt-0.5">&#9658;</span>
                            Safety and health improvement is an individual responsibility of all team members.
                        </li>
                        <li class="flex items-start gap-2 leading-6">
                            <span class="text-[#1a6fb5] mt-0.5">&#9658;</span>
                            Each of us must be dedicated to conducting all activities with the highest concern for
                            occupational Health and Safety.
                        </li>
                    </ul>
                </div>
                <div class="px-6 py-5">
                    <p class="text-2xl text-gray-600">✍</p>
                    <p class="text-xs text-gray-500 mt-1">Chief Executive Officer</p>
                    <p class="text-xs text-gray-400">Nextar Pharma Private Limited</p>
                </div>
                <div class="flex justify-end px-6 pb-4">
                    <div class="text-right">
                        <p class="text-[#1a6fb5] text-lg font-bold tracking-wide">NEXTAR</p>
                        <p class="text-[#1a6fb5] text-xs tracking-widest">PHARMA</p>
                    </div>
                </div>
                <div class="flex flex-wrap text-xs text-gray-500 border-t border-gray-200 divide-x divide-gray-200">
                    <span class="px-3 py-2 flex-1 min-w-0">Doc. Ref: MSM-F005-01</span>
                    <span class="px-3 py-2 flex-1 min-w-0">Version No: 01</span>
                    <span class="px-3 py-2 flex-1 min-w-0">Effective Date: 01-01-2020</span>
                </div>
            </div>

            {{-- Urdu Card --}}
            <div class="border border-gray-200 shadow-sm"
                style="direction: rtl; font-family: 'Noto Nastaliq Urdu', serif;">
                <div class="px-6 pt-5 pb-3">
                    <p class="text-[#0057a8] text-2xl font-bold tracking-widest" style="direction:ltr;">SEARLE</p>
                </div>
                <div class="flex flex-wrap text-xs text-gray-500 border-t border-b border-gray-200 divide-x divide-gray-200"
                    style="direction:ltr;">
                    <span class="px-3 py-2 flex-1 min-w-0">Doc. Ref: IMS/IV/0025</span>
                    <span class="px-3 py-2 flex-1 min-w-0">Revision No: 02</span>
                    <span class="px-3 py-2 flex-1 min-w-0">Issue Date: 01-11-2019</span>
                </div>
                <div class="bg-[#1a6fb5] text-white px-6 py-8 md:py-10 mt-4 text-right">
                    <h2 class="text-xl md:text-2xl font-bold leading-loose">پیشہ ورانہ صحت اور<br>حفاظتی پالیسی</h2>
                </div>
                <div class="px-6 py-5 text-sm text-gray-600 leading-8 text-right">
                    پیشہ ورانہ صحت اور حفاظت ہمارے کاروبار کی کامیابی کی بنیاد ہے۔
                </div>
                <div class="mx-6 border border-gray-300 p-4 text-sm text-gray-600 text-right">
                    <p class="mb-3 text-[#1a6fb5]">ہم یقین رکھتے ہیں:</p>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-2 leading-8 flex-row-reverse">
                            <span class="text-[#1a6fb5] mt-1">&#9658;</span>
                            تمام حادثات اور چوٹیں ناقابل قبول ہیں اور ہم ان کو ختم کرنے کی بھرپور کوشش کریں گے۔
                        </li>
                        <li class="flex items-start gap-2 leading-8 flex-row-reverse">
                            <span class="text-[#1a6fb5] mt-1">&#9658;</span>
                            صحت اور حفاظت میں بہتری تمام ٹیم ممبرز کی انفرادی ذمہ داری ہے۔
                        </li>
                        <li class="flex items-start gap-2 leading-8 flex-row-reverse">
                            <span class="text-[#1a6fb5] mt-1">&#9658;</span>
                            ہم میں سے ہر ایک کو پیشہ ورانہ صحت اور حفاظت کے اعلیٰ معیار کے ساتھ تمام سرگرمیاں انجام دینی
                            چاہئیں۔
                        </li>
                    </ul>
                </div>
                <div class="px-6 py-5 text-right">
                    <p class="text-2xl text-gray-600">✍</p>
                    <p class="text-xs text-gray-500 mt-1">چیف ایگزیکٹو آفیسر</p>
                    <p class="text-xs text-gray-400">نیکسٹار فارما پرائیویٹ لمیٹڈ</p>
                </div>
                <div class="flex justify-start px-6 pb-4">
                    <div>
                        <p class="text-[#1a6fb5] text-lg font-bold tracking-wide">NEXTAR</p>
                        <p class="text-[#1a6fb5] text-xs tracking-widest">PHARMA</p>
                    </div>
                </div>
                <div class="flex flex-wrap text-xs text-gray-500 border-t border-gray-200 divide-x divide-gray-200"
                    style="direction:ltr;">
                    <span class="px-3 py-2 flex-1 min-w-0">Doc. Ref: MSM-F005-01</span>
                    <span class="px-3 py-2 flex-1 min-w-0">Version No: 01</span>
                    <span class="px-3 py-2 flex-1 min-w-0">Effective Date: 01-01-2020</span>
                </div>
            </div>
        </div>


        {{-- ===================== SECTION 3: ISOQAR CERTIFICATES ===================== --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

            {{-- Certificate 1: ISO 14001 --}}
            <div class="border border-gray-200 shadow-sm p-6 md:p-8">
                <div class="flex items-center gap-2 mb-6">
                    <div class="text-[#1a6fb5]">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                            <path d="M18 2L4 9v10c0 8.3 5.9 16 14 18 8.1-2 14-9.7 14-18V9L18 2z" fill="#e8f0fe"
                                stroke="#1a6fb5" stroke-width="1.5" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 leading-tight">Alcumus</p>
                        <p class="text-2xl font-black text-[#1a6fb5] leading-tight tracking-tight">ISOQAR</p>
                    </div>
                </div>

                <h3 class="text-2xl md:text-3xl text-gray-300 font-light mb-6">Certificate of Registration</h3>

                <div class="flex gap-4 items-start">
                    <div class="text-gray-300 mt-1 shrink-0">
                        <svg width="32" height="40" viewBox="0 0 32 40" fill="none">
                            <path d="M16 2L3 9v13c0 9 5.8 17.4 13 19.8C23.2 39.4 29 31 29 22V9L16 2z" fill="#f0f0f0"
                                stroke="#d0d0d0" stroke-width="1" />
                        </svg>
                    </div>
                    <div class="text-sm text-gray-600 space-y-2">
                        <p>This is to certify that the Management System of:</p>
                        <p class="font-bold text-gray-800">THE SEARLE COMPANY LIMITED</p>
                        <p class="text-gray-500">F-319, SITE Karachi - Pakistan</p>
                        <p>has been approved by Alcumus ISOQAR and is compliant with the requirements of:</p>
                        <p class="font-bold text-gray-800">ISO 14001:2015</p>
                    </div>
                </div>

                <div
                    class="mt-6 border border-gray-200 p-4 flex flex-col sm:flex-row gap-4 sm:gap-6 items-start sm:items-center">
                    <div
                        class="w-16 h-16 shrink-0 rounded-full border-2 border-[#1a6fb5] flex items-center justify-center
                            text-[#1a6fb5] text-xs font-bold text-center leading-tight">
                        UKAS<br>MGT
                    </div>
                    <div class="text-sm space-y-1">
                        <div class="flex flex-wrap gap-1 sm:gap-2">
                            <span class="text-gray-500">Certificate Number:</span>
                            <span class="text-[#1a6fb5] font-medium">25181-EMS-001</span>
                        </div>
                        <div class="flex flex-wrap gap-1 sm:gap-2">
                            <span class="text-gray-500">Initial Registration Date:</span>
                            <span class="text-gray-700">13 December 2024</span>
                        </div>
                        <div class="flex flex-wrap gap-1 sm:gap-2">
                            <span class="text-gray-500">Current Expiry Date:</span>
                            <span class="text-gray-700">13 December 2027</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Certificate 2: ISO 45001 --}}
            <div class="border border-gray-200 shadow-sm p-6 md:p-8">
                <div class="flex items-center gap-2 mb-6">
                    <div class="text-[#1a6fb5]">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                            <path d="M18 2L4 9v10c0 8.3 5.9 16 14 18 8.1-2 14-9.7 14-18V9L18 2z" fill="#e8f0fe"
                                stroke="#1a6fb5" stroke-width="1.5" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 leading-tight">Alcumus</p>
                        <p class="text-2xl font-black text-[#1a6fb5] leading-tight tracking-tight">ISOQAR</p>
                    </div>
                </div>

                <h3 class="text-2xl md:text-3xl text-gray-300 font-light mb-6">Certificate of Registration</h3>

                <div class="flex gap-4 items-start">
                    <div class="text-gray-300 mt-1 shrink-0">
                        <svg width="32" height="40" viewBox="0 0 32 40" fill="none">
                            <path d="M16 2L3 9v13c0 9 5.8 17.4 13 19.8C23.2 39.4 29 31 29 22V9L16 2z" fill="#f0f0f0"
                                stroke="#d0d0d0" stroke-width="1" />
                        </svg>
                    </div>
                    <div class="text-sm text-gray-600 space-y-2">
                        <p>This is to certify that the Management System of:</p>
                        <p class="font-bold text-gray-800">THE SEARLE COMPANY LIMITED</p>
                        <p class="text-gray-500">F-319, SITE Karachi - Pakistan</p>
                        <p>has been approved by Alcumus ISOQAR and is compliant with the requirements of:</p>
                        <p class="font-bold text-gray-800">ISO 45001:2018</p>
                    </div>
                </div>

                <div
                    class="mt-6 border border-gray-200 p-4 flex flex-col sm:flex-row gap-4 sm:gap-6 items-start sm:items-center">
                    <div
                        class="w-16 h-16 shrink-0 rounded-full border-2 border-[#1a6fb5] flex items-center justify-center
                            text-[#1a6fb5] text-xs font-bold text-center leading-tight">
                        UKAS<br>MGT
                    </div>
                    <div class="text-sm space-y-1">
                        <div class="flex flex-wrap gap-1 sm:gap-2">
                            <span class="text-gray-500">Certificate Number:</span>
                            <span class="text-[#1a6fb5] font-medium">25181-OHS-001</span>
                        </div>
                        <div class="flex flex-wrap gap-1 sm:gap-2">
                            <span class="text-gray-500">Initial Registration Date:</span>
                            <span class="text-gray-700">13 December 2024</span>
                        </div>
                        <div class="flex flex-wrap gap-1 sm:gap-2">
                            <span class="text-gray-500">Current Expiry Date:</span>
                            <span class="text-gray-700">13 December 2027</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</x-frontend.layout>
