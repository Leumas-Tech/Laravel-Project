@extends('frontend.pages.index')
<img src="/resources/views/frontend/img2/back.png" alt="Türkiye bayrağı" style="position: fixed; top: 10px; left: 10px; width: 40px; z-index: 9999;" onclick="window.location.href='/signup.html';">
@section('title')
    {{ $data['title'] }}
@endsection
@section('meta_keywords')
    {{ $data['meta_keywords'] }}
@endsection
@section('meta_description')
    {{ $data['meta_description'] }}
@endsection
@section('page-content')

    <!--Privacy Policy Section-->
    <section class="section-style">
        
        <div class="custom-div">
    <p style="font-size: 13px; color: white;">We do not collect or store any information from your social account, nor do we sell any information to advertisers or other operators.</p>
    <p style="font-size: 13px; color: white;">Personal Information</p>
    <p style="font-size: 13px; color: white;">When sharing information through social accounts, you may be asked to enter your account and password, but this information is managed by the system. The application does not store or collect your account and password in any form, or collect and store personal information in any form on your social account.</p>
    <p style="font-size: 13px; color: white;">Privacy Policy Terms</p>
    <p style="font-size: 13px; color: white;">By using this application, you agree to the terms and conditions of this Privacy Policy. If you do not agree with this policy, please do not use this application. We reserve the right to change, modify, add, or delete any part of this policy at any time. Check this page for changes. By continuing to use our application, you accept any changes to these terms that may be made in the future.</p>
    <p style="font-size: 13px; color: white;">E-Mail: oree-solar@gmail.com</p>
</div>

        
        
        <style>
    .custom-div {
        width: 100%;
        margin: 0 auto; /* Sayfanın ortasına hizalamak için kullanılır */
        padding: 15px;
        margin-top: -50px;
    }
</style>


    </section>
    <!--Privacy Policy Section End-->
    
    
    
    

    
    

@endsection
