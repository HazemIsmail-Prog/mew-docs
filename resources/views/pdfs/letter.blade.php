<html lang="en" dir="rtl">
    <head>
        <title>Letter</title>
        <script src="https://cdn.tailwindcss.com"></script>
        @vite(['resources/css/app.css'])

        <style>

            .table-header-empty-space{
                height: 180px !important;
                background-color: white !important;
                border: 1px solid white !important;
            }

            .table-footer-empty-space{
                height: 110px !important;
                background-color: white !important;
                border: 1px solid white !important;
            }

            .sultan-bold{
                font-family: 'Sultan bold', sans-serif;
                font-weight: normal;
            }

            .sultan-normal{
                font-family: 'Sultan normal', sans-serif;
                font-weight: normal;
            }

            ol{
                list-style-type: decimal !important;
                list-style-position: inside !important;
                margin-right: 14px !important;
            }

            ul{
                list-style-type: disc !important;
                list-style-position: inside !important;
                margin-right: 14px !important;
            }

            table  tbody tr td{
                min-height: calc((297mm - 293px) * 1) !important;
                padding: 0 60px !important;
                display: flex;
                flex-direction: column;
                justify-content: start;
                align-items: start;
                font-size: 20px;
                line-height: {{$letter->line_height ?? 1.9}};
            }

        </style>
    </head>
    <body>        

        @if($withCover)
            <img style="position: absolute; top: 0; left: 0; width: 100%" src="{{$headerImage}}" alt="Header">
            <img style="position: absolute; bottom: 0; left: 0; width: 100%" src="{{$footerImage}}" alt="Header">
        @endif

        <table>
            <thead><tr><th class="table-header-empty-space"></th></tr></thead>

            <tbody>
                <tr>
                    <td>
                        <div class="flex-1 flex flex-col w-full">
                            @if($letter->internal)
                                <div class="sultan-bold text-center mb-2 leading-[1.5]">مذكرة داخلية</div>
                            @endif

                            <div class="sultan-bold flex justify-between gap-1 text-[26px] pe-10 leading-[1.5]">
                                <span>{{$letter->prefix}}</span>
                                <span>/</span>
                                <span>{{$letter->receiver}}</span>
                                <div class="flex-1"></div>
                                <span>{{$letter->prefix === 'السيد' ? 'المحترم' : 'المحترمين'}}</span>
                            </div>
                            
                            @if($letter->address)
                                <div class="sultan-normal text-[16px] leading-[1.3] whitespace-pre-line ms-4">{{$letter->address}}</div>
                            @endif
                            @if($letter->official)
                                <div class="sultan-bold leading-[1.5] ms-4">بالطريق الرسمي</div>
                            @endif

                            <div class="sultan-bold leading-[1.5] ms-4">تحية طيبة وبعد،،،</div>
                            <div class="sultan-bold !font-bold text-center whitespace-pre-line border-b border-black max-w-[80%] mx-auto mt-4 pb-2">{{$letter->subject}}</div>
                            <div class="sultan-normal text-justify mt-4">{!! $letter->body !!}</div>
                            <div class="sultan-bold text-center mt-4">وتفضلوا بقبول وافر الاحترام والتقدير</div>
                            <div class="sultan-bold text-center w-1/3 ms-auto mt-4 text-[26px] leading-[1.5]">{{$letter->sender}}</div>

                            <div class="leading-[1.2] sultan-normal text-[14px] mt-auto">
                                @if($letter->code)
                                    <div>كود ترميز القطاع (15000)</div>
                                @endif
    
                                @if($letter->has_attachments)
                                    <div>المرفقات كما ورد أعلاه</div>
                                @endif
    
                                @if(!$withCover)
                                    <div>نسخة لكل من</div>
                                    <div class="ms-5">
                                        <div class="whitespace-pre-line">{{$letter->copy_to}}</div>
                                        <div>الملف - {{$letter->id}}</div>
                                    </div>
                                @endif
                            </div>

                        </div>
                    </td>
                </tr>
            </tbody>

            <tfoot><tr><th class="table-footer-empty-space"></th></tr></tfoot>    
        </table>
        
    </body>
</html>
