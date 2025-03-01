@extends('layouts.app')
@section('title', $blog['title'] . ' - Bark & Lounge')
@section('meta_description', $blog['meta_description'])
@section('meta_keywords', $blog['meta_keywords'])
@section('content')
    <div style="background-image: url('{{ $blog['image'] }}')" class="bg-cover bg-center relative">
        <div class="absolute inset-0 bg-black opacity-50 z-2"></div>
        <div class="container mx-auto md:py-24 py-16 relative z-10">
            <div class="flex flex-col justify-center h-full">
                <h1
                    class="text-white md:text-4xl text-2xl leading-snug font-bold font-serif [text-shadow:0_0_10px_rgba(0,0,0,0.5)] md:pr-60 pr-0">
                    {{ $blog['title'] }}
                </h1>
                <div class="flex flex-row items-center gap-2 mt-8">
                    <span class="text-pet-700 font-bold text-lg">
                        <div class="flex flex-row items-center gap-2 w-full font-serif">
                            <div class="h-10 w-10 rounded-full bg-pet-100 flex items-center justify-center">
                                <span class="text-pet-700 font-bold text-lg">
                                    {{ $blog['author'][0] }}
                                </span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-white font-bold text-lg leading-tight">
                                    {{ $blog['author'] }}
                                </span>
                                <span class="text-gray-400 text-sm">
                                    {{ $blog['date'] }}
                                </span>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="w-full py-10">
            <div class="flex flex-col gap-4">
                @if ($blog['id'] === 1)
                    <p class="text-black text-lg">
                        Evcil hayvanlarımız bizim için birer aile üyesidir ve onların bakımı büyük bir özen gerektirir.
                        Özellikle tüy bakımı ve tıraş gibi işlemler, profesyonel bir pet kuaför tarafından yapıldığında daha
                        sağlıklı ve konforlu bir sonuç elde edilir.
                    </p>
                    <p class="text-black text-lg">
                        <strong>1) Hijyen ve Temizlik</strong><br>
                        Pet kuaförün temiz ve hijyenik olması büyük önem taşır. Bark&Lounge ailesi olarak kullandığımız tüm
                        malzemeleri düzenli olarak UV cihazıyla arındırıyoruz ve çalışma alanımızı özel ürünlerle dezenfekte
                        ediyoruz. Temiz bir ortam, köpeğinizin sağlığını korumanın en önemli adımıdır.
                    </p>
                    <p class="text-black text-lg">
                        <strong>2) Deneyim ve Profesyonellik</strong><br>
                        Kuaförünüzün deneyimli ve eğitimli olup olmadığına dikkat edin. Evcil hayvan tıraşı özel bir
                        uzmanlık ve
                        eğitim gerektirir.
                    </p>
                    <p class="text-black text-lg">
                        <strong>3) Kullanılan Ürünler</strong><br>
                        Kullanılan şampuanlar, sprey ve diğer bakım ürünlerinin kaliteli ve zararsız olması gerekir.
                        Kullanılan
                        ürünlerin köpeklere özel üretilmiş olması büyük önem taşır. Kimyasal içeriği yüksek veya kalitesiz
                        ürünler, evcil hayvanınızın cildinde tahrişe veya alerjik reaksiyonlara neden olabilir. Doğal ve
                        hipoalerjenik ürünler tercih edilmelidir. Bizler sizlere en iyi deneyimleri yaşatabilmek için
                        köpeklere
                        özel üretilmiş kaliteli şampuanlarımız ve maskelerimizle profesyonel bir hizmet sunuyoruz.
                    </p>
                    <p class="text-black text-lg">
                        <strong>4) Evcil Hayvana Yaklaşım</strong><br>
                        Sabırlı, sevgi dolu ve nazik bir yaklaşım, minik dostlarımızın stres yaşamadan keyifli bir bakım
                        süreci
                        geçirmesini sağlar. Özellikle ilk tıraşlar çok önemlidir.
                    </p>
                    <p class="text-black text-lg">
                        <strong>5) Hizmet Çeşitliliği</strong><br>
                        Bark&Lounge ailesi olarak yalnızca tıraş hizmeti sunmuyoruz, banyo, tırnak kesimi, kulaktaki ölü
                        tüylerin alınması, keratin bakımı gibi ek hizmetler de sunuyoruz. Pet kuaför seçimi, evcil
                        dostunuzun
                        sağlığı ve konforu için oldukça önemlidir. Hijyen, profesyonellik, kullanılan ürünler ve müşteri
                        yorumları gibi faktörleri değerlendirerek en iyi kuaförü seçebilirsiniz. Unutmayın, iyi bir bakım
                        hizmeti sayesinde dostunuz daha sağlıklı, mutlu ve rahatlamış hissedecektir!
                    </p>
                @elseif ($blog['id'] === 2)
                    <p class="text-black text-lg">
                        Minik dostlarımız, özellikle köpekler, düzenli bakıma ihtiyaç duyar. Bu bakımın en önemli
                        parçalarından biri de tıraştır. Köpek tıraşı sadece estetik bir ihtiyaç değil, aynı zamanda sağlık
                        ve konfor açısından da büyük önem taşıyor.
                    </p>
                    <p class="text-black text-lg">
                        <strong>1) Sağlıklı Bir Tüy Yapısı İçin</strong><br>
                        Evcil dostlarımızın tüyleri zamanla kir, toz ve ölü tüylerle dolabilir. Düzenli tıraş ve bakım, bu
                        kalıntıların temizlenmesini sağlayarak tüylerin daha sağlıklı ve parlak olmasına yardımcı olur.
                        Ayrıca, düğümlenmiş ve keçeleşmiş tüyler köpeğin cildini tahriş edebilir, bu nedenle düzenli kesim
                        gereklidir. Ayrıyeten keçeleşmiş tüyler için banyo sonrası fön çekerek minik dostlarımızın canını
                        acıtmadan keçeleri açıyoruz ve tıraşa hazır hale getiriyoruz. Köpeklere özel üretilmiş kaliteli
                        şampuanlarımız ve maskelerimizle profesyonel bir hizmet sunuyoruz.
                    </p>
                    <p class="text-black text-lg">
                        <strong>2) Cilt Hastalıklarını Önler</strong><br>
                        Ölü tüylerin birikmesi, köpeğinizin cildinin hava almasını engelleyebilir ve çeşitli deri
                        hastalıklarına yol açabilir. Düzenli tıraş, ciltte meydana gelebilecek tahriş, egzama ve mantar gibi
                        problemleri önlemeye yardımcı olur.
                    </p>
                    <p class="text-black text-lg">
                        <strong>3) Yaz Aylarında Serin Kalmasını Sağlar</strong><br>
                        Özellikle sıcak havalarda kalın ve uzun tüyler köpeğinizin vücut ısısını yükseltebilir. Düzenli
                        tıraş, köpeğinizin daha serin kalmasına ve sıcak çarpması gibi sorunların önüne geçilmesine yardımcı
                        olur.
                    </p>
                    <p class="text-black text-lg">
                        <strong>4) Hijyen ve Temizlik İçin Önemlidir</strong><br>
                        Köpeklerin tüyleri uzun kaldığında toz, çamur ve hatta parazitlerin kolayca barınabileceği bir ortam
                        haline gelebilir. Özellikle aktif köpeklerde tüyler daha çabuk kirlenir. Düzenli hijyen tıraşı,
                        köpeğinizin genital bölge temizliği ve sağlığı için büyük önem taşır ve hijyenin korunmasına, kötü
                        kokuların önlenmesine yardımcı olur.
                    </p>
                    <p class="text-black text-lg">
                        <strong>5) Görüş ve Hareket Kabiliyetini Artırır</strong><br>
                        Bazı köpek ırklarında tüyler, gözlerin önüne düşerek görüş alanını kısıtlayabilir. Ayrıca uzun
                        tüyler pati aralarına girerek yürüme zorluğuna neden olabilir. Düzenli tıraş, köpeğinizin daha rahat
                        hareket etmesini ve çevresini daha iyi görmesini sağlar.
                    </p>
                    <p class="text-black text-lg">
                        <strong>6) Profesyonel Bakım ile Daha Mutlu Köpekler</strong><br>
                        Birçok köpek sahibi, evde tıraş yapmayı denese de profesyonel bir pet kuaför tarafından yapılan
                        tıraş, köpeğinizin konforu için en iyi sonucu verir. Uzmanlar, köpeğinizin tüy yapısına ve ırkına
                        uygun kesimi yaparak hem estetik hem de sağlık açısından en iyi sonucu elde etmenizi sağlar.
                    </p>
                @elseif ($blog['id'] === 3)
                    <p class="text-black text-lg">
                        Tatile çıkarken veya uzun süreli seyahatlerde dostlarınızı Bark&Lounge ailesi olarak gönül rahatlığı
                        ile bize emanet edebilirsiniz. Sevimli dostlarımızın kendilerini rahat ve konforlu hissetmesini
                        sağlıyoruz ve güvenli bir ortamda vakit geçirmesini sağlayarak profesyonel bakım ve gözetim hizmeti
                        sunuyoruz. Ayrıca sizlere günlük olarak patili dostlarımızın nasıl vakit geçirdiğini görsel ve
                        videolarla göndererek güven sağlıyoruz :heart:
                    </p>
                    <p class="text-black text-lg">
                        <strong>Pet Otelimizin Avantajları</strong><br>
                        Hijyenik ve düzenli bir ortamda konaklamanın yanı sıra günlük bakımlarıyla ilgilenerek beslenme
                        düzenlerini takip ediyoruz, ihtiyaç duyulduğunda kuaför kısmımızda tüy bakımı, banyo hizmeti
                        sunuyoruz.
                    </p>
                    <ul class="pl-4">
                        <li>
                            <strong>Sosyalleşme ve Egzersiz</strong><br>
                            Pet otelimizde minik dostlar, diğer dostlarıyla sosyalleşerek keyifli vakit geçirir. Oyun
                            saatleri ve açık alan etkinlikleri sayesinde enerjilerini atabilir, eğlenceli bir konaklama
                            deneyimi yaşayabilirler.
                        </li>
                    </ul>
                    <p class="text-black text-lg">
                        <strong>Pet Otel Seçerken Nelere Dikkat Edilmeli?</strong><br>
                    <ul>
                        <li>
                            <strong>Hijyen ve Temizlik:</strong> Otelimiz düzenli olarak temizleniyor ve genel hijyen
                            kurallarına uygunluk
                            sağlanıyor.
                        </li>
                        <li>
                            <strong>Oyun ve Dinlenme Alanları:</strong> Evcil dostunuzun keyifli vakit geçirebileceği
                            alanlar oluşturup sıkılmasını engelliyoruz ve bu sayede sizlerden uzak olduklarında strese
                            girmelerini engelliyoruz.
                        </li>
                        <li>
                            <strong>Veteriner Hizmeti:</strong> Acil durumlar için 7/24 açık veteriner anlaşmamız olup
                            herhangi
                            ihmale ihtimal vermiyoruz.
                        </li>
                    </ul>
                    <p class="text-black text-lg">
                        Pet otel, sahipler için büyük bir kolaylık sağlarken, dostlarımızın mutluluğunu ve sağlığını korumak
                        için de harika bir seçenektir. Eğer siz de seyahate çıkarken evcil dostunuzu güvenilir bir yere
                        emanet etmek istiyorsanız, Bark&Lounge ailesine emanet ederek onun konforlu ve keyifli bir konaklama
                        deneyimi yaşamasını sağlayabilirsiniız.
                    </p>
                    </p>
                @endif
                <div class="h-[1px] w-full bg-gray-200 my-4"></div>
                <div class="flex flex-row items-center gap-2">
                    <div class="flex flex-col md:flex-row items-center md:gap-2 gap-4 w-full">
                        <div class="font-serif text-lg font-medium flex-1">Sosyal Medya'da Paylaş</div>
                        <div class="flex flex-row items-center md:gap-3 gap-5">
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                class="h-10 w-10 rounded-full bg-[#1877F2] flex items-center justify-center">
                                <i class="fa-brands fa-facebook-f text-white"></i>
                            </a>
                            <a target="_blank" href="https://wa.me/?text={{ url()->current() }}"
                                class="h-10 w-10 rounded-full bg-[#25D366] flex items-center justify-center">
                                <i class="fa-brands fa-whatsapp text-white"></i>
                            </a>
                            <a target="_blank" href="https://t.me/share/url?url={{ url()->current() }}"
                                class="h-10 w-10 rounded-full bg-[#37AEE2] flex items-center justify-center">
                                <i class="fa-brands fa-telegram text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
