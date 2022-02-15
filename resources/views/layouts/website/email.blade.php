<!--=====  Start Email Section  =====-->
<div class="email__container">
    <div class="container">
        <div class="email__content">
            <h2>القائمه البريديه</h2>
            <p>اشترك في النشرة الإخبارية لدينا ولا تفوت الوافدين الجدد وآخر التحديثات والعروض الخاصة من الصناعية المتكاملة </p>
            @include('message')
            <form action="{{ URL::route('industrial.store') }}" method="POST">
                @method('POST')
                @csrf
                <input class="email__inp" type="text" name="email" placeholder="بريدك الإلكترونى">
                <input class="btn__submit" type="submit" value="إشتراك">
            </form>
            <div class="email__content-img">
                <img src=" {{ URL::asset('website/assets/images/02.png') }} " alt="">
            </div>
        </div>
    </div>
</div>
<!--=====  End Email Section  =====-->
