@extends('frontend.layouts.user')
<link rel="stylesheet" href="{{ asset('frontend/css/about.css') }}"/>
@section('title')
    {{ __('About') }}
@endsection

<div class="uwe">
    <p style="height: 5px;"></p>
    <img src="/resources/views/frontend/img2/close.png" style="position: absolute; top: 15; left: 15; width: 30px;" onclick="window.location.href='/h5/index.php/home'">
    <h3 class="title" style="display: flex; justify-content: center; font-size: 20px; color: white;">{{ __('ABOUT') }}</h3>
</div>

@section('content')


<div style="margin-bottom: 10px;"></div>

<div style="display: flex; justify-content: center;">
    
    
    <div class="video-container">
        <video controls>
            <source src="/resources/views/frontend/img2/oree-solar.mp4" type="video/mp4">
            <!-- Diğer video formatları için gerekirse ek source etiketleri ekleyebilirsiniz -->
            Tarayıcınız video elementini desteklemiyor.
        </video>
    </div>
    
</div>

<div style="margin-bottom: 10px;"></div>


 <div style="display: flex; justify-content: center;">
        <h1 style="color: #15FFDF;">About OREE SOLAR
        </h1>
    </div>

<div style="margin-bottom: 10px;"></div>


<div style="display: none;">
    
     <div style="display: flex; justify-content: center;">
        <h3 style="color: #9FABC4;">Lang</h3>
    </div>


      <div class="button-container">
        <button id="otomatikButton" class="button" onclick="changeColor(this);toggleContent('content1')">English</button>
        <button class="button" onclick="changeColor(this);toggleContent('content2')">Azerbaijani</button>
        <button class="button" onclick="changeColor(this);toggleContent('content3')">Turkish</button>
    </div>

    <div class="button-container">
        <button class="button" onclick="changeColor(this);toggleContent('content4')">Spanish</button>
        <button class="button" onclick="changeColor(this);toggleContent('content5')">Chinese</button>
        <button class="button" onclick="changeColor(this);toggleContent('content6')">Arabic</button>
    </div> 
    
    
</div>


    
<div id="content1" class="content">
    
    <p class="bg">
<b class="bgb">Oree Solar</b> is a renewable energy organization established in 2015 with a production capacity of 5GW high-efficiency solar modules. Oree Solar provides professional design, research and development, and production of high-value photovoltaic products, excellent system solutions, and integrated user-friendly services. Constantly introducing industry-leading equipment and processes in production, Oree remains committed to its corporate mission of "Using technology to better serve society," operating deeply in the solar photovoltaic module industry with advanced automated production lines, intelligent control systems, and quality testing technology laboratories.
</p>

<p class="bg">
    The investment system for solar panels recently launched by <b class="bgb">Oree Solar</b> promises a significant opportunity in the future. You can start earning by renting a package that suits your budget from the investment packages. <b class="bgb">Oree Solar</b> includes 3 gaming features for extra earnings.
</p>

<p class="bg">
   <b class="bgbg">1. Earning Method:</b> You can win rewards every day by using gift codes shared on the Telegram channel. Remember to follow the Telegram group; it's crucial.
</p>

<p class="bg">
 <b class="bgbg">2. Earning Method:</b> By logging in daily and clicking the check-in button, you can collect your login rewards.
</p>

<p class="bg">
  <b class="bgbg">3. Earning Method:</b> You can try your luck and potentially earn hundreds of dollars every day by spinning the wheel.
</p>

<p class="bg">
    Additionally, through the team-building feature, one of the most lucrative methods, you can earn commissions from every new investment made by members of your team.
</p>

<p class="bg">
    Don't miss out on this investment opportunity, which combines <b class="bgb">Oree Solar</b>'s technological superiority in production with a robust corporate vision. Take action now!
</p>

    
</div>

<div id="content2" class="content">
    
    <p class="bg">
<b class="bgb">Oree Solar</b>, 2015-ci ildə təsis edilmiş, 5GW yüksək verimli güneş modulu istehsal kapasitetinə sahib bir yenilənən energetika təşkilatıdır. Oree Solar, peşəkar dizayn, tədqiqat və inkişaf, və istehsal olunmuş fotovoltaik məhsullar üçün yüksək əlavə dəyərli, mükəmməl sistem həlləri və inteqrasiya olunmuş faydalı xidmətlər təklif edir. Oree Solar, istehsaldakı səmt lideri avadanlıqları və proseslərini müvəqqəti olaraq təqdim etməkdə davam edir. Oree, "Texnologiyi daha yaxşı xidmət üçün istifadə etmək" korporativ missiyasına sadiq qalmaqla, güneş fotovoltaik modulu sənayesində geniş miqyaslı fəaliyyət göstərmək üçün müasir avtomatlaşdırılmış istehsal xətləri, ağıllı nəzarət sistemləri və keyfiyyət test texnologiya laboratoriyalarına sahibdir.
</p>

<p class="bg">
    <b class="bgb">Oree Solar</b>'ın təqdim etdiyi gələcəkdə böyük bir imkan olan solar panel yatırım sistemi, həmin an münasibət qazanmağa başlaya biləcəyiniz investisiya paketlərindən birini kiralayaraq mümkündür. <b class="bgb">Oree Solar</b>, 3 oyun xüsusiyyəti ilə əlavə qazanc əldə etmək məqsədiylə təşkil olunmuşdur.
</p>

<p class="bg">
   <b class="bgbg">1. Qazanc üsulu:</b> Hər gün Telegram kanalında paylaşılan hədiyyə kodları ilə mükafatlar qazana bilərsiniz. Unutmayın ki, Telegram qrupunu izləmək vacibdir.
</p>

<p class="bg">
 <b class="bgbg">2. Qazanc üsulu:</b> Hər gün daxil olaraq, check-in düyməsinə basaraq giriş mükafatlarınızı ala bilərsiniz.
</p>

<p class="bg">
  <b class="bgbg">3. Qazanc üsulu:</b> Hər gün şansınıza bağlı olaraq yüz dollarlar əldə etmək imkanını sına bilərsiniz.
</p>

<p class="bg">
    Bundan əlavə, komanda qurma imkanını əhatə edən ən mənfəətli üsullardan biri olan, öz komandanızı yaradaraq, komandanıza qoşulan hər yeni investisiyadan komissiyalar qazana bilərsiniz.
</p>

<p class="bg">
    <b  class="bgb">Oree Solar</b>'ın istehsal sahəsindəki texnoloji üstünlüyü və möhkəm korporativ vizyonu ilə birləşən bu investisiya imkanını itirməmək üçün tezliklə hərəkətə keçin!
</p>

    
</div>

<div id="content3" class="content">
    
<p class="bg">
<b class="bgb">Oree Solar</b>, 2015 yılında kurulmuş, 5GW yüksek verimli güneş modülü üretim kapasitesine sahip bir yenilenebilir enerji kuruluşudur. Profesyonel tasarım, araştırma-geliştirme ve üretim ile katma değeri yüksek fotovoltaik ürünler, mükemmel sistem çözümleri ve entegre kullanışlı hizmetler sunan Oree Solar, üretimde sürekli olarak sektör lideri ekipman ve süreçleri tanıtmaktadır. Oree, "Topluma daha iyi hizmet etmek için teknolojiyi kullanma" kurumsal misyonuna bağlı kalarak, gelişmiş otomatik üretim hatlarıyla güneş fotovoltaik modülü endüstrisi alanında derin bir şekilde faaliyet göstermektedir, akıllı kontrol sistemleri ve kalite test teknolojisi laboratuvarlarına sahiptir.
</p>

<p class="bg">
    <b class="bgb">Oree Solar</b>'ın yeni başlattığı solar panellere yatırım sistemi, gelecekte önemli bir fırsat sunmaktadır. Hemen siz de yatırım paketlerinden bütçenize uygun bir paketi kiralayarak kazanmaya başlayabilirsiniz. <b class="bgb">Oree Solar</b>, ekstra kazanç sağlamak amacıyla 3 adet oyun özelliği içermektedir.
</p>
<p class="bg">
   <b class="bgbg">1. Kazanç Yöntemi:</b> Her gün Telegram kanalında paylaşılan gift kodları ile ödüller kazanabilirsiniz. Unutmayın, Telegram grubunu takip etmek önemlidir.
</p>

<p class="bg">
 <b class="bgbg">2. Kazanç Yöntemi:</b> Günlük olarak giriş yaparak, check-in butonuna tıklayarak giriş ödüllerinizi alabilirsiniz.  
</p>

<p class="bg">
  <b class="bgbg">3. Kazanç Yöntemi:</b> Her gün çarkı çevirerek şansınıza bağlı olarak yüzlerce dolar kazanma fırsatını deneyebilirsiniz. 
</p>

<p class="bg">
    Ayrıca, en kazançlı yöntemlerden biri olan takım kurma özelliği sayesinde, kendi takımınızı oluşturarak takımınıza katılan her yeni yatırımdan komisyonlar kazanabilirsiniz.
</p>

<p class="bg">
    <b  class="bgb">Oree Solar</b>'ın üretimdeki teknolojik üstünlüğü ve güçlü kurumsal vizyonu ile birleşen bu yatırım fırsatını kaçırmamak için hemen harekete geçin!
</p>

    
</div>

<div id="content4" class="content">

<p class="bg">
<b class="bgb">Oree Solar</b> es una organización de energía renovable fundada en 2015, con una capacidad de producción de módulos solares de alta eficiencia de 5GW. Oree Solar ofrece productos fotovoltaicos de alto valor añadido, soluciones de sistema excelentes y servicios integrados y útiles a través de un diseño profesional, investigación y desarrollo, y producción. Oree Solar continúa presentando constantemente equipos y procesos líderes en la industria en la producción. Comprometida con la misión corporativa de "Utilizar la tecnología para servir mejor a la sociedad", Oree Solar opera de manera profunda en la industria de módulos fotovoltaicos solares con líneas de producción automatizadas avanzadas, sistemas de control inteligentes y laboratorios de tecnología de prueba de calidad.
</p>

<p class="bg">
    El sistema de inversión en paneles solares recientemente lanzado por <b class="bgb">Oree Solar</b> promete ser una oportunidad significativa en el futuro. Puede comenzar a ganar alquilando un paquete que se ajuste a su presupuesto entre las opciones de paquetes de inversión. <b class="bgb">Oree Solar</b> incluye 3 características de juego para obtener ingresos adicionales.
</p>

<p class="bg">
   <b class="bgbg">1. Método de Ganancia:</b> Puede ganar premios todos los días utilizando los códigos de regalo compartidos en el canal de Telegram. Recuerde seguir el grupo de Telegram; es crucial.
</p>

<p class="bg">
 <b class="bgbg">2. Método de Ganancia:</b> Ingresando diariamente y haciendo clic en el botón de check-in, puede recoger sus recompensas de inicio de sesión.
</p>

<p class="bg">
  <b class="bgbg">3. Método de Ganancia:</b> Puede probar su suerte y potencialmente ganar cientos de dólares todos los días girando la ruleta.
</p>

<p class="bg">
    Además, a través de la función de formación de equipos, que es uno de los métodos más rentables, puede ganar comisiones por cada nueva inversión realizada por miembros de su equipo al formar su propio equipo.
</p>

<p class="bg">
    ¡No se pierda esta oportunidad de inversión que combina la superioridad tecnológica de <b class="bgb">Oree Solar</b> en la producción con una sólida visión corporativa! ¡Actúe ahora mismo!
</p>

    
</div>

<div id="content5" class="content">
    
    <p class="bg">
<b class="bgb">Oree Solar</b>，成立于2015年，是一家可再生能源公司，拥有5GW高效太阳能电池板生产能力。 Oree Solar通过专业设计，研发和生产，提供高附加值的光伏产品，出色的系统解决方案和集成实用服务，并在生产中不断引入行业领先的设备和流程。 Oree秉承“利用技术更好地服务社会”的企业使命，通过先进的自动生产线，在太阳能光伏模块行业深入开展业务，拥有智能控制系统和质量测试技术实验室。
</p>

<p class="bg">
    <b class="bgb">Oree Solar</b>最近推出的太阳能电池板投资系统为未来提供了重要机会。通过立即租用符合预算的投资包，您可以立即开始赚钱。 <b class="bgb">Oree Solar</b>包含3种游戏特色，以获取额外收入。
</p>

<p class="bg">
   <b class="bgbg">1. 赚钱方法：</b> 您可以每天使用在Telegram频道共享的礼品代码赢取奖励。请记住，关注Telegram群是重要的。
</p>

<p class="bg">
 <b class="bgbg">2. 赚钱方法：</b> 每天登录，点击签到按钮，即可领取登录奖励。
</p>

<p class="bg">
  <b class="bgbg">3. 赚钱方法：</b> 您可以每天旋转轮盘，根据运气有机会赚取数百美元。
</p>

<p class="bg">
    此外，通过团队建设功能，这是最赚钱的方法之一，您可以通过创建自己的团队并从团队成员的每笔新投资中获得佣金。
</p>

<p class="bg">
    别错过将 <b class="bgb">Oree Solar</b> 的生产技术优势和强大的企业愿景结合的这一投资机会！立即行动起来！
</p>

    
</div>

<div id="content6" class="content">
    
    <p class="bg">
<b class="bgb">Oree Solar</b>، تأسست في عام 2015، وهي منشأة للطاقة المتجددة تمتلك قدرة إنتاج وحدات الطاقة الشمسية بكفاءة عالية تبلغ 5 جيجا واط. تقدم Oree Solar منتجات فوتوفولتائية ذات قيمة مضافة عالية، وحلول نظام ممتازة، وخدمات متكاملة وعملية من خلال تصميم محترف والبحث والتطوير والإنتاج. Oree Solar تقدم باستمرار في الإنتاج معدات وعمليات تعتبر رائدة في الصناعة. Oree، وفي إطار رسالتها الشركية "استخدام التكنولوجيا لخدمة المجتمع بشكل أفضل"، تشارك عميقًا في صناعة الوحدات الشمسية الفوتوفولتائية بخطوط إنتاج آلية متقدمة وأنظمة تحكم ذكية ومختبرات تكنولوجيا اختبار الجودة.
</p>

<p class="bg">
    نظام الاستثمار في لوحات الطاقة الشمسية الذي أطلقته <b class="bgb">Oree Solar</b> مؤخرًا يعد فرصة مهمة في المستقبل. يمكنك البدء في الربح عن طريق استئجار حزمة تناسب ميزانيتك من بين خيارات حزم الاستثمار. <b class="bgb">Oree Solar</b> تتضمن 3 ميزات للألعاب لتحقيق دخل إضافي.
</p>

<p class="bg">
   <b class="bgbg">1. طريقة الربح:</b> يمكنك الفوز بجوائز يومية باستخدام رموز الهدايا المشاركة يوميًا في قناة Telegram. لا تنسَ متابعة مجموعة Telegram؛ فهي مهمة.
</p>

<p class="bg">
 <b class="bgbg">2. طريقة الربح:</b> يمكنك جمع مكافآت تسجيل الدخول عند الدخول اليومي والنقر على زر التحقق.
</p>

<p class="bg">
  <b class="bgbg">3. طريقة الربح:</b> يمكنك تجربة فرصة الربح بمئات الدولارات يوميًا عند تدوير العجلة يوميًا بناءً على حظك.
</p>

<p class="bg">
    بالإضافة إلى ذلك، يمكنك من خلال ميزة بناء الفريق، التي تعد واحدة من أكثر الطرق ربحًا، الربح من عمولات كل استثمار جديد ينضم إلى فريقك بإنشاء فريقك الخاص.
</p>

<p class="bg">
    لا تفوت فرصة الاستثمار هذه التي تجمع بين التفوق التكنولوجي في الإنتاج لدى <b class="bgb">Oree Solar</b> ورؤية الشركة القوية! اتخذ الإجراء الآن!
</p>

    
</div>

<script>
    // Sayfa yüklendiğinde belirli bir butona otomatik tıklama
    document.addEventListener('DOMContentLoaded', function () {
        var otomatikButton = document.getElementById('otomatikButton');
        otomatikButton.click(); // Otomatik tıklama
    });
</script>

<script>
    function toggleContent(contentId) {
        var content = document.getElementById(contentId);

        // Tüm div'leri gizle
        var allContents = document.querySelectorAll('.content');
        allContents.forEach(function (item) {
            item.style.display = 'none';
        });

        // Seçilen div'i göster
        content.style.display = (content.style.display === 'none') ? 'block' : 'none';
    }
</script>
    



<script>
        var currentButton = null;

        function changeColor(button) {
            if (currentButton) {
                currentButton.style.backgroundColor = '';
                currentButton.style.color = '';
            }

            button.style.backgroundColor = '#15FFDF';
            button.style.color = '#0E0E0E';

            currentButton = button;
        }
    </script>



    




@endsection