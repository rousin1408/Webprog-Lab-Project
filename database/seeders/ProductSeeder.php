<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // kategori beauty
        // id nya dikomen soalnya udah auto increment
        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'Bioqua 7X Ceramide',
            'detail' => 'SENSASI MENYEGARKAN YANG DISUKAI KULIT BERMINYAK
            Menyegarkan, breathable dan tidak menimbulkan jerawat',
            'price' => '49999',
            'photo' => 'photo/beauty1.jpg',
        ]);
        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'Skintific 5X Ceramide',
            'detail' => 'Pembersih wajah pH balanced (5.5~6) andalan untuk kulit sensitif karena menggunakan 5 tipe Ceramides untuk membersihkan wajah secara keseluruhan tapi tetap menjaga kelembaban dan mengembalikan kesehatan skin barrier.',
            'price' => '87000',
            'photo' => 'photo/beauty2.jpg',
        ]);
        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'Ponds Micellar Water',
            'detail' => 'Mencuci muka saja tidak cukup untuk membersihkan kulitmu. Bersihkan semua sisa makeup dan kotoran dengan cleanser POND S VItamin Micellar Water Brightening Rose. Mengangkat 99% makeup, membersihkan kotoran, dan menutrisi kulit dengan 5 vitamin esensial. Hasilnya: Kulit cerah, bersih, dan bercahaya.',
            'price' => '20000',
            'photo' => 'photo/beauty3.jpg',
        ]);
        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'Garnier Men Acno Fight',
            'detail' => 'Dapat melawan 6 masalah jerawat dan minyak pada wajah serta membersihkannya secara menyeluruh',
            'price' => '47610',
            'photo' => 'photo/beauty4.jpg',
        ]);
        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'Wardah Nature Daily Aloe',
            'detail' => 'Kulit terasa ringan dan melembabkan kulit kering memerah.
            Ektrak Aloe Vera organik yg bisa memberikan efek menenangkan dan melembabkan.',
            'price' => '13110',
            'photo' => 'photo/beauty5.jpg',
        ]);

        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'Acne Creamy Wash 100 gr',
            'detail' => 'Merupakan krim pencuci dan pembersih muka yang mengandung anti bakteri, anti radang serta vitamin sebagai perawatan untuk jenis kulit yang cenderung berjerawat. Mengurangi dan mencegah kemerahan pada kulit akibat jerawat.',
            'price' => '22900',
            'photo' => 'photo/beauty6.jpg',
        ]);
        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'Emina Bright Stuff',
            'detail' => 'Emina Bright Stuff Face Serum merupakan Face serum dengan kandungan concentrated niacinamide dan ekstrak Summer Plum yang khusus diformulasikan untuk melawan 7 masalah kulit kusam!',
            'price' => '30500',
            'photo' => 'photo/beauty7.jpg',
        ]);

        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'Love Beauty & Planet',
            'detail' => 'Hand Cream yang mampu meningkatkan kepercayaan diri dengan Vitamin C dan aroma juicy mandarin yang segar, diperkaya teknologi Moodscentz* yang dapat meningkatkan mood positif.',
            'price' => '90900',
            'photo' => 'photo/beauty8.jpg',
        ]);

        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'BREYLEE Step 1 Blackhead',
            'detail' => 'Membantu mengangkat dan menghilangkan komedoKomedo melekat dengan erat pada kertas masker.Komedo ditarik keluar dari bawah',
            'price' => '35000',
            'photo' => 'photo/beauty9.jpg',
        ]);

        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'The AestheticsSkin',
            'detail' => 'Merupakan pelembab wajah yang mengandung gabungan aloe vera 99,8%, Hyaluronic Acid generasi ke-2 dan Amino Ceremide yang berfungsi untuk mengembalikan serta menjaga kelembaban kulit wajah.',
            'price' => '95000',
            'photo' => 'photo/beauty10.jpg',
        ]);

        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'Alasca Volcano Clay',
            'detail' => 'Clay mask yang membersihkan pori secara mendalam dan menghempaskan komedo. Mengandung partikel halus dari Alaska Volcano Clay yang dapat secara alami mengeksfoliasi dan mendetoks kulit wajah.',
            'price' => '89000',
            'photo' => 'photo/beauty11.jpg',
        ]);
        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'Wash Off Gentle Clarifying',
            'detail' => 'Clay mask yang membersihkan pori secara mendalam dan menghempaskan komedo.',
            'price' => '89000',
            'photo' => 'photo/beauty12.jpg',
        ]);
        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'Avoskin Brighthening Cream',
            'detail' => 'Brightening Cream hadir dengan formula baru yang lebih efektif untuk mencerahkan kulit. Mengandung 3% Alpha Arbutin, 0.5% Actosome Retinol, dan ekstrak Chamomile yang bermanfaat untuk membantu menyamarkan noda hitam, mengatasi kulit kusam, menjaga kelembapan kulit hingga menunda munculnya tanda penuaan dini.',
            'price' => '100000',
            'photo' => 'photo/beauty13.jpg',
        ]);
        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'Garnierr Bright Complete',
            'detail' => 'Garnier Bright Complete Super UV Matte adalah sunscreen dengan Vitamin C dan SPF 50+ untuk melindungimu dari matahari dan noda hitam, serta matte finish.',
            'price' => '195900',
            'photo' => 'photo/beauty14.jpg',
        ]);
        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'Kahf Oil and Acne Care',
            'detail' => 'Kahf Oil and Acne Care Face Wash sabun pembersih wajah dengan kandungan HydroBalance dan Pure Cleanse menjadikan wajah bersih dan lembap secara menyeluruh.',
            'price' => '59250',
            'photo' => 'photo/beauty15.jpg',
        ]);
        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'Everyday Brightening Deo',
            'detail' => 'Everyday Brightening Deo Anti Perspirant , diperkaya dengan Alpha Arbutin, Licorice dan Daisy Extract yang berfungsi untuk: Mencerahkan dan Menghaluskan Ketiak, Mengecilkan pori-pori Ketiak, serta Membantu mengurangi bau badan yang tidak sedap dan Menjaga ketiak agar tetap kering dan wangi sepanjang hari.',
            'price' => '83000',
            'photo' => 'photo/beauty16.jpg',
        ]);

        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'Skintific 5X Ceramide',
            'detail' => 'SKINTIFIC adalah brand skincare yang diformulasikan di Canada berdasarkan scientific research dengan teknologi paten TTE (Triangle Trilogy Effect) yang bekerja secara cepat dan barrier safe.',
            'price' => '55000 ',
            'photo' => 'photo/beauty17.jpg',
        ]);
        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'AcnoFight Wasabi Brightening',
            'detail' => 'Garnier Men Acno Fight Wasabi Anti-Bacteria Brightening Foam adalah sabun cuci muka untuk pria yang diperkaya dengan ekstrak Wasabi dan salicylic acid untuk melawan bakteri penyebab jerawat, membersihkan komedo, dan mencerahkan wajah.',
            'price' => '59000 ',
            'photo' => 'photo/beauty18.jpg',
        ]);
        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'Azarine Cosmetics Oil',
            'detail' => 'Pelembab tanpa minyak untuk pagi dan malam yang berfungsi untuk menutrisi kulit serta menyamarkan bekas jerawat. Pelembab ini dapat digunakan oleh oily dan acne prone skin karena oil dan fragrance free.',
            'price' => '59000 ',
            'photo' => 'photo/beauty19.jpg',
        ]);
        DB::table('product')->insert([
            'category_id' => 1,
            'name' => 'Garnier Men Acno Fight Anti-Acne Scrub',
            'detail' => 'Garnier Men Acno Fight Anti-Acne Scrub In Foam adalah pembersih wajah pria Membantu mengurangi minyak berlebih, timbulnya jerawat, komedo, pori-pori besar, noda jerawat, kulit kasar dan kering, kusam, tekstur tidak merata, dan warna tidak merata',
            'price' => '53000 ',
            'photo' => 'photo/beauty20.jpg',
        ]);

        // kategori kamera

        DB::table('product')->insert([
            // 'id' => 9,
            'category_id' => 2,
            'name' => 'Xiaomi Mi Home',
            'detail' => 'Xiaomi Mi 360° Camera 1080p merupakan kamera yang memiliki tampilan panorama 360° yang bisa diperbesar, digeser, dan dimiringkan untuk memantau area sekeliling tanpa adanya blind spot.',
            'price' => '440000',
            'photo' => 'photo/camera1.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 7,
            'category_id' => 2,
            'name' => 'Sony A7II Body Only',
            'detail' => 'Product Highlight :
            24.3MP Full-Frame Exmor CMOS Sensor
            BIONZ X Image Processor
            5-Axis SteadyShot INSIDE Stabilization
            Enhanced Fast Hybrid AF and 5 fps Burst',
            'price' => '12430300',
            'photo' => 'photo/camera2.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 8,
            'category_id' => 2,
            'name' => 'Sony Alpha A7',
            'detail' => '24.3MP Full-Frame Exmor CMOS Sensor
            BIONZ X Image Processor
            5-Axis SteadyShot INSIDE Stabilization
            Enhanced Fast Hybrid AF and 5 fps Burst
            Full HD XAVC S Video and S-Log2 Gamma
            3.0" 1,228.8k-Dot Tilting LCD Monitor',
            'price' => '12430300',
            'photo' => 'photo/camera3.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 9,
            'category_id' => 2,
            'name' => 'Kamera Mini Anak',
            'detail' => 'Camera karakter khusus yang didesain lucu untuk dipakai anak-anak maupun remaja, dengan kualitas HD 720p membuat gambar terlihat menarik, terdapat dual camera potrait dan selfie serta effect dan mode yang bisa kamu pilih sesuai dengan selera yang kamu inginkan saat mengambil gambar maupun video juga terdapat games yang bisa kamu mainkan dikala bosan.',
            'price' => '159000',
            'photo' => 'photo/camera4.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'SONY DSC H300',
            'detail' => '20.1 MP 1/2.3" Super HAD CCD Sensor
            35x Optical Zoom 4.5-157.5mm Lens
            25-875mm (35mm Equivalent)
            3.0" 461k-Dot Clear Photo LCD Screen
            1280 x 720 HD Video Recording at 30 fps
            Optical SteadyShot Image Stabilization
            ISO Range of 80-3200
            Built-In Flash
            Face Detection, Panorama, & Other Modes
            Runs on 4 AA Batteries',
            'price' => '2350000',
            'photo' => 'photo/camera5.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'Gopro Hero 11 Black Creator',
            'detail' => '5.3K60 + 4K120 video
            HyperSmooth 5.0 stabilization
            Extended battery life
            Enhanced audio capture
            LED lighting
            Cloud connected',
            'price' => '14300000',
            'photo' => 'photo/camera6.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'BRICA B-PRO 5 Aeis Black E1S',
            'detail' => 'CAMERA SENSOR 16 megapixels CMOS sensor
            VIDEO RESOLUTION NTSC
            4K (3840x2160) @30fps
            2.7K (2688x1520) @30fps
            Full HD 1080p (1920x1080) @60fps
            Full HD 1080p (1920x1080) @30fps
            HD 720p (1280x720) @90fps',
            'price' => '850000',
            'photo' => 'photo/camera7.jpg',
        ]);

        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'GoPro Hero 11 Black',
            'detail' => 'Kamera baru dari GoPro Hero 11 Black ini juga memungkinkan pengguna menangkap tangkapan layar 24,7 megapiksel, yang merupakan peningkatan lain dari gambar diam 19 megapiksel pada Hero10.',
            'price' => '7574000',
            'photo' => 'photo/camera8.jpg',
        ]);

        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'DJI Osmo Action 3',
            'detail' => 'Dorong petualangan apa pun di luar batas dengan Osmo Action 3. Dengan desain quick-release untuk pemasangan horizontal dan vertikal yang mudah, dan layar sentuh penuh warna di bagian depan dan belakang untuk kontrol parameter dan pemutaran yang mudah.',
            'price' => '5399000',
            'photo' => 'photo/camera9.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'Fujifilm X-H2 Body',
            'detail' => 'Free:
            - Fujifilm Battery NP-W235 - Senilai Rp 1.099.000 (By Claim-tidak dikirim bersama kamera)
            - Voucher Discount Menginap Ayana Hotel (By Claim)
            ',
            'price' => '32499000',
            'photo' => 'photo/camera10.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'BRICA B-PRO 5',
            'detail' => 'PHOTO RESOLUTION 16.0 Megapixels
            12.0 Megapixels
            8.0 Megapixels
            5.0 Megapixels
            2.0 Megapixels
            FILE FORMAT Video : MP4 H.264
            Video Bitrate : 30MBps
            Photo : JPEG',
            'price' => '850000',
            'photo' => 'photo/camera11.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'Insta360 ONE X3 360',
            'detail' => 'Dengan sensor 1/2" yang ditingkatkan dan layar sentuh yang lebih besar, Kamera Insta360 ONE X3 360° mampu menangkap video berkualitas tinggi 360° dan lensa tunggal dengan satu kamera aksi portabel.',
            'price' => '8499000',
            'photo' => 'photo/camera12.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'SONY Alpha A7 Mark IV',
            'detail' => 'Key Features
            33MP Full-Frame Exmor R CMOS Sensor
            Up to 10 fps Shooting, ISO 100-51200
            4K 60p Video in 10-Bit, S-Cinetone
            3.68m-Dot EVF with 120 fps Refresh Rate
            3" 1.03m-Dot Vari-Angle Touchscreen LCD
            759-Pt. Fast Hybrid AF, Real-time Eye AF
            Focus Breathing Compensation
            5-Axis SteadyShot Im',
            'price' => '43058000',
            'photo' => 'photo/camera13.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'Sony Alpha a7RIIIA',
            'detail' => 'Product Highlight
            42MP Full-Frame Exmor R BSI CMOS Sensor
            BIONZ X Image Processor & Front-End LSI
            399-Point AF System & 10 fps Shooting',
            'price' => '31499000',
            'photo' => 'photo/camera14.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'Action Camera Foyu 4k',
            'detail' => 'Action Camera Foyu 4k Wifi Waterproof Portable DV 1080P Murah
            Action camera ini merupakan kamera digital yang dapat Anda gunakan untuk mengabadikan kegiatan Anda, terutama kegiatan olahraga Anda.',
            'price' => '289000',
            'photo' => 'photo/camera15.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'CANON EOS 1300D',
            'detail' => 'DESKRIPSI :
            18MP APS-C CMOS Sensor & DIGIC 4+ Image Processor
            9-Point AF System
            3.0″ 920k-dot LCD monitor
            Optical pentamirror viewfinder
            Built-in Wi-Fi dengan NFC
            Kompatibel dengan lensa Canon EF dan EF-S-mount
            Scene Intelligent Auto mode
            Basic+ & Creative Auto mode',
            'price' => '3499000',
            'photo' => 'photo/camera16.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'Sony Alpha A7 III ',
            'detail' => '24MP Full-Frame Exmor R BSI CMOS Sensor
            BIONZ X Image Processor & Front-End LSI
            693-Point Hybrid AF System
            UHD 4K30p Video with HLG & S-Log3 Gammas
            2.36m-Dot Tru-Finder OLED EVF
            3.0" 922k-Dot Tilting Touchscreen LCD',
            'price' => '23399100',
            'photo' => 'photo/camera17.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'Brica B-Pro 5 Alpha',
            'detail' => 'Specifications

            CAMERA SENSOR
            Brica CMOS sensor

            VIDEO RESOLUTION
            FHD (1920x1080) @30fps
            HD (1280x720) @60/30fps

            PHOTO RESOLUTION
            16.0 Megapixels

            FILE FORMAT
            Movie : AVI
            Photo : JPEG

            LCD DISPLAY
            2.0" TFT LCD

            OPTICAL ZOOM
            Tidak Ada',
            'price' => '495000',
            'photo' => 'photo/camera18.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'Canon EOS 3000D',
            'detail' => 'GENERAL
            Type DSLR
            Lens Package Body + 18 - 55 mm
            Colour Black
            Image Processor DIGIC 4+ Image Processor
            Camera Resolution 18MP
            Sales Package Camera, Battery, Charger, Wide Strap, Interface Cable, Lens
            Warranty 1 Year',
            'price' => '5799000',
            'photo' => 'photo/camera19.jpg',
        ]);
        DB::table('product')->insert([
            // 'id' => 10,
            'category_id' => 2,
            'name' => 'Sony HDR-CX405',
            'detail' => 'Handycam Sony HDR-CX405 HD, bisa merekam video Full HD 1920×1080 60p, memiliki resolusi 9.2MP, sensor CMOS Exmor R, image prosesor Bionz X, Lensa Zeiss 30x Zoom Optik. ',
            'price' => '3399000',
            'photo' => 'photo/camera20.jpg',
        ]);
    }
}
