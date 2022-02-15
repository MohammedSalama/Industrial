<!--=====  Start App Screen Section  =====-->
<div id="app-screen" class="app-screen__container">
    <div class="container">
        <div class="app-screen row">
            <div class="col-md-3 col-xs-12">
                <div class="app-screen__header">
                    <h2>{{ $screen -> title }}</h2>
                    <p>{{ $screen -> description }}} </p>
                </div>
            </div>
            <div class="col-md-9 col-xs-12">
                <div class="owl-carousel" dir="ltr">
                    <div><img src=" {{ URL::asset('website/assets/images/الحرفيين التقسييمه التانيه – 1.png') }} " class="screen-img" alt=""></div>
                    <div><img src=" {{ URL::asset('website/assets/images/تعديل كلمة المرور – 2.png') }} " class="screen-img" alt=""></div>
                    <div><img src=" {{ URL::asset('website/assets/images/الحرفيين التقسييمه التانيه – 1.png') }} " class="screen-img" alt=""></div>
                    <div><img src=" {{ URL::asset('website/assets/images/تعديل الحساب الشخصى.png') }} " class="screen-img" alt=""></div>
                    <div><img src=" {{ URL::asset('website/assets/images/تعديل الحساب الشخصى.png') }} " class="screen-img" alt=""></div>
                </div>
                <div class="mobile__frame">
                    <img src=" {{ URL::asset('website/assets/images/phone-frame2.png') }} " alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====  End App Screen Section  =====-->
