<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            1 => "Kemampuan memadukan keberagaman tim sehingga setiap orang dapat berkontribusi dan berpartisipasi",
            2 => "Kemampuan melatih orang lain tentang cara menggabungkan Scrum dengan praktik tambahan ketika diterapkan secara global",
            3 => "Kemampuan memaksimalkan kualitas pekerjaan yang dilakukan oleh tim Scrum melalui inspeksi, eksperimen, dan pembelajaran",
            4 => "Kemampuan membaca release planning yang mempertimbangkan kompleksitas dan dependensi produk ketika dikerjakan oleh tim yang tersebar",
            5 => "Kemampuan membaca product backlog dan cara membuatnya menjadi transparan bagi seluruh tim",
            6 => "Kemampuan membangun kepercayaan sehingga tercipta keterpaduan tim yang tersebar",
            7 => "Kemampuan membedakan perencanaan portofolio agile dan tradisional untuk menangani produk dan sistem yang kompleks",
            8 => "Kemampuan membentuk kerjasama dan koordinasi dengan Scrum Master di lokasi lain",
            9 => "Kemampuan membuat organisasi lebih responsif secara keseluruhan",
            10 => "Kemampuan membuat organisasi memahami dan menerapkan prinsip agile di GSD",
            11 => "Kemampuan membuat tim sadar akan Scrum dengan cara mengajarkannya dan sekaligus menciptakan lingkungan yang mendukung",
            12 => "Kemampuan membuat tim Scrum untuk terus meningkatkan dan memberikan nilai",
            13 => "Kemampuan memfasilitasi event tim menggunakan nilai Scrum/agile sebagai panduan",
            14 => "Kemampuan memfasilitasi kombinasi dari tim Scrum tersebar dan terpusat",
            15 => "Kemampuan memfasilitasi penyusunan Definition of Done (DoD) yang efektif",
            16 => "Kemampuan memfasilitasi tim untuk memahami dan menerapkan nilai dan prinsip Scrum di GSD",
            17 => "Kemampuan mempengaruhi seluruh tim untuk sukses",
            18 => "Kemampuan memperkirakan implikasi perpindahan ke agile",
            19 => "Kemampuan memutuskan kebijakan dan memfasilitasi pemilihan praktik Scrum di GSD",
            20 => "Kemampuan menanggulangi isu dan konflik di dalam tim Scrum yang tersebar",
            21 => "Kemampuan menciptakan lingkungan empiris dalam pengembangan produk",
            22 => "Kemampuan mencirikan cara menyeimbangkan kebutuhan untuk agility dengan realitas yang ada dari struktur organisasi tradisional",
            23 => "Kemampuan mendorong PO dan DT untuk melakukan pengelolaan produk yang tepat dan bernilai tinggi",
            24 => "Kemampuan mendukung Scrum yang disesuaikan dengan alokasi kerja terdistribusi",
            25 => "Kemampuan mengarahkan semua orang untuk bertindak, mengurus kebutuhan tim, memengaruhi tim untuk menjadi yang terbaik",
            26 => "Kemampuan mengarahkan, mendukung, mengawasi dan memelihara proses pengembangan dengan memberikan informasi yang dibutuhkan oleh distributed tim",
            27 => "Kemampuan mengatur jam kerja untuk mendapatkan efisiensi dari konsep Follow the Sun (FTS)",
            28 => "Kemampuan mengatur komunikasi dan kolaborasi dengan tim yang tersebar",
            29 => "Kemampuan mengevaluasi Definition of Done (DoD)",
            30 => "Kemampuan menghilangkan rasa tidak aman dari setiap individu",
            31 => "Kemampuan menghilangkan ketergantungan dari tim Scrum yang tersebar agar dapat dengan mudah merencanakan sprint",
            32 => "Kemampuan mengidentifikasi risiko pengembangan",
            33 => "Kemampuan menguraikan cara membuat instansiasi dan implikasi pemisahan peran dalam self-organization dengan jabatan yang ada atau baru",
            34 => "Kemampuan menguraikan konsep gaya kepemimpinan Scrum Master (servant leader)",
            35 => "Kemampuan menguraikan self-organization dan cara mengenalkannya secara bertahap",
            36 => "Kemampuan meningkatkan keberlanjutan dalam rantai nilai",
            37 => "Kemampuan menjamin bahwa tim Scrum membaik dalam setiap iterasi",
            38 => "Kemampuan menjelaskan definisi structure, culture, design dan pendekatan agile enterprise",
            39 => "Kemampuan menyelidiki dan menghilangkan hambatan kerja, sehingga kinerja anggota tim konsisten dan dapat diandalkan",
            40 => "Kemampuan merinci cara penerapan portofolio agile",

        ];

        $options = [
            1 => [
                [
                    "nama_skill" => "Memfasilitasi diskusi dan retrospektif di mana tim merefleksikan proses mereka, melakukan percobaan dengan pendekatan baru, dan memutuskan praktik mana yang memberikan nilai paling besar",
                    "value" => 1.26
                ],
                [
                    "nama_skill" => "Memberdayakan anggota tim untuk memiliki tanggung jawab terhadap pekerjaan mereka dan menemukan solusi inovatif untuk mengatasi hambatan yang muncul",
                    "value" => 1.14
                ],
                [
                    "nama_skill" => "Terbuka terhadap saran dan wawasan yang dapat meningkatkan kinerja keseluruhan tim",
                    "value" => 1.18
                ],
            ],
            2 => [
                [
                    "nama_skill" => "Scrum master harus mewujudkan nilai dan prinsip-prinsip Scrum, menunjukkan servant-leadership, dan komitmen terhadap improvement berkelanjutan",
                    "value" => 1.18
                ],
                [
                    "nama_skill" => "Mengidentifikasi dan memperkenalkan praktik tambahan yang dapat meningkatkan efisiensi dan keefektifan penggunaan Scrum di lingkungan global",
                    "value" => 1.10
                ],
            ],
            3 => [
                [
                    "nama_skill" => "Memastikan tim dapat mengerti dan memenuhi semua kriteria yang ada pada Definition of Done (DOD)",
                    "value" => 1.22
                ],
                [
                    "nama_skill" => "Melakukan sprint reviews secara berkala untuk memastikan produk sesuai dengan kebutuhan dan ekspektasi customer",
                    "value" => 1.22
                ],
                [
                    "nama_skill" => "Melakukan sprint restospectives secara berkala untuk memastikan tim belajar dari kesuksesan dan kegagalannya sehingga dapat mengimplementasikan perubahan yang meningkatkan kualitas",
                    "value" => 1.18
                ],
                [
                    "nama_skill" => "Memastikan kolaborasi dan komunikasi yang efektif dalam tim",
                    "value" => 1.14
                ],
            ],
            4 => [
                [
                    "nama_skill" => "Memfasilitasi komunikasi yang jelas dan efektif tentang release planning kepada tim",
                    "value" => 1.18
                ],
            ],
            5 => [
                [
                    "nama_skill" => "Memfasilitasi diskusi untuk mengklarifikasi keraguan atau ambiguitas terkait product backlog",
                    "value" => 1.22
                ],
                [
                    "nama_skill" => "Menerapkan tools untuk memvisualisasikan dan mempertahankan transparansi product backlog",
                    "value" => 1.14
                ],
            ],
            6 => [
                [
                    "nama_skill" => "Memfasilitasi komunikasi terbuka antar tim yang memiliki interaksi langsung yang terbatas",
                    "value" => 1.22
                ],
                [
                    "nama_skill" => "Berusaha mendengarkan dengan empati dari sudut pandang orang yang berbicara",
                    "value" => 1.22
                ],
                [
                    "nama_skill" => "Mengumpulkan umpan balik dari anggota tim terkait persepsi mereka tentang kepercayaan dan keterpaduan dalam tim",
                    "value" => 1.18
                ],
            ],
            7 => [
                [
                    "nama_skill" => "Memahami key utama pada setiap perencanaan portoflio baik agile maupun tradisional",
                    "value" => 1.06
                ],
            ],
            8 => [
                [
                    "nama_skill" => "Mempelajari sesuatu dari siapapun yang berhubungan dengan Scrum Master terutama Scrum Master lain",
                    "value" => 1.06
                ],
                [
                    "nama_skill" => "Bertukar informasi baik melalui internal (kolega) maupun eksternal (trainer) untuk sharing pengetahuan dan progress masing-masing tim",
                    "value" => 1.06
                ],
                [
                    "nama_skill" => "Memastikan pemahaman yang sama dan arah yang sejalan dengan Scrum Master lain terkait perencanaan dan tujuan proyek",
                    "value" => 1.14
                ],
            ],
            9 => [
                [
                    "nama_skill" => "Meningkatkan flow-efficiency dari software delivery process. Caranya dengan menghapus kendala dan memaksimalkan kolaborasi antar anggota scrum team dan orang-orang yang berhubungan dengan tim ini",
                    "value" => 1.06
                ],
                [
                    "nama_skill" => "Memberikan coaching kepada pemilik produk terkait penentuan strategi pengembangan produk, pemantauan progres dan peran lainnya yang berkaitan dengan pengembangan produk oleh tim pengembangan",
                    "value" => 1.18
                ],
                [
                    "nama_skill" => "Melakukan fasilitasi diskusi, pengambilan keputusan dan solusi atas konflik yang terjadi di internal scrum team",
                    "value" => 1.18
                ],
            ],
            10 => [
                [
                    "nama_skill" => "Memastikan pemilik produk dan tim pengembangan memahami praktik Agile (metode pengembangan software) dan Agilitas yang berguna dalam meningkatkan nilai dari produk",
                    "value" => 1.26
                ],
                [
                    "nama_skill" => "Memberikan coaching kepada pimpinan perusahaan terkait pentingnya quality driven development ketimbang deadline driven development",
                    "value" => 1.14
                ],
                [
                    "nama_skill" => "Memastikan agar tim pengembangan tidak membuat utang teknikal dengan cara memanfaatkan kemajuan praktik software engineering. Misalnya clean coding, continuous delivery dan lain-lain",
                    "value" => 1.10
                ],
                [
                    "nama_skill" => "Merancang dan mengimplementasikan scrum dan scaling agility di internal perusahaan atau organisasi",
                    "value" => 1.14
                ],
            ],
            11 => [
                [
                    "nama_skill" => "Memiliki pemahaman yang kuat tentang konsep-konsep dan seluruh aspek yang ada pada Scrum",
                    "value" => 1.26
                ],
                [
                    "nama_skill" => "Memastikan bahwa tim merasa nyaman untuk bereksperimen, belajar dari kesalahan, dan berbagi pengetahuan dalam praktik Scrum",
                    "value" => 1.10
                ],
                [
                    "nama_skill" => "Memotivasi anggota tim untuk tetap fokus dan terlibat aktif dalam praktik Scrum",
                    "value" => 1.14
                ],
            ],
            12 => [
                [
                    "nama_skill" => "Membantu untuk menumbuhkan keberanian tim dengan menciptakan lingkungan yang aman bagi anggota tim",
                    "value" => 1.18
                ],
                [
                    "nama_skill" => "Membuat sebuah sistem dimana anggota tim saling memberi dan menerima feedback",
                    "value" => 1.14
                ],
                [
                    "nama_skill" => "Menghilangkan hambatan yang dapat mencegah tim  dalam memberikan nilai",
                    "value" => 1.18
                ],
            ],
            13 => [
                [
                    "nama_skill" => "Mengkomunikasikan tujuan, durasi, dan format acara kepada tim dan para stakeholders",
                    "value" => 1.10
                ],
            ],
            14 => [
                [
                    "nama_skill" => "Mempertimbangkan pengadaan acara pada waktu yang tepat bagi semua orang jika tim tersebar di beberapa zona waktu",
                    "value" => 1.14
                ],
                [
                    "nama_skill" => "Memastikan aktivitas Scrum seperti daily standup, sprint planning, sprint review, dan restrospective memiliki jadwal yang dapat diprediksi",
                    "value" => 1.14
                ],
            ],
            15 => [
                [
                    "nama_skill" => "Membantu tim memahami pentingnya memiliki kriteria yang jelas dalam DoD",
                    "value" => 1.14
                ],
            ],
            16 => [
                [
                    "nama_skill" => "Memfasilitasi aktivitas yang memungkinkan tim untuk memahami dan mengadopsi nilai-nilai Scrum secara efektif",
                    "value" => 1.06
                ],
                [
                    "nama_skill" => "Membantu tim dalam menavigasi tantangan yang unik terkait dengan keterlibatan tim yang tersebar di lokasi geografis yang berbeda",
                    "value" => 1.10
                ],
            ],
            17 => [
                [
                    "nama_skill" => "Menjembatani kesenjangan antara kebutuhan bisnis dan kebutuhan tim dalam proses pengembangan",
                    "value" => 1.18
                ],
                [
                    "nama_skill" => "Memberikan inspirasi dan motivasi kepada anggota tim untuk mencapai tujuan Sprint dan keseluruhan proyek",
                    "value" => 1.18
                ],
            ],
            18 => [
                [
                    "nama_skill" => "Menjelaskan kepada tim dan para stakeholders bagaimana Agile dapat menghasilkan peningkatan pada kualitas produk",
                    "value" => 1.18
                ],
                [
                    "nama_skill" => "Merencanakan langkah-langkah untuk mengurangi resistensi atau hambatan yang mungkin timbul selama transisi",
                    "value" => 1.10
                ],
            ],
            19 => [
                [
                    "nama_skill" => "Memfasilitasi diskusi dan keputusan kolaboratif dalam tim yang tersebar secara global untuk memilih praktik Scrum yang paling efektif dan relevan",
                    "value" => 1.06
                ],
                [
                    "nama_skill" => "Memfasilitasi eksplorasi terhadap praktik-praktik baru yang dapat meningkatkan adaptabilitas",
                    "value" => 1.10
                ],
            ],
            20 => [
                [
                    "nama_skill" => "Mengidentifikasi isu-isu dan akar permasalahan yang muncul dalam tim Scrum yang tersebar",
                    "value" => 1.10
                ],
                [
                    "nama_skill" => "Memberikan dorongan kepada anggota tim untuk berbagi pandangan mereka mengenai situasi yang terjadi dan melihat bagaimana tindakan mereka dapat berdampak pada orang lain",
                    "value" => 1.18
                ],
                [
                    "nama_skill" => "Memfasilitasi komunikasi yang terbuka dan jujur di antara anggota tim",
                    "value" => 1.10
                ],
            ],
            21 => [
                [
                    "nama_skill" => "Memfasilitasi transparansi dalam proses pengembangan produk",
                    "value" => 1.26
                ],
                [
                    "nama_skill" => "Memotivasi tim untuk menguji asumsi, mengumpulkan data, dan melakukan perubahan berdasarkan hasil pengamatan",
                    "value" => 1.14
                ],
                [
                    "nama_skill" => "Mempromosikan inspeksi terus-menerus dan adaptasi dalam pengembangan produk",
                    "value" => 1.22
                ],
                [
                    "nama_skill" => "Menggunakan metrik dan data untuk mendukung pengambilan keputusan dalam pengembangan produk",
                    "value" => 1.14
                ],
            ],
            22 => [
                [
                    "nama_skill" => "Mengintegrasikan prinsip-prinsip Agile ke dalam praktik kerja yang sesuai dengan struktur organisasi yang ada tanpa mengorbankan nilai-nilai inti dari metodologi Agile itu sendiri",
                    "value" => 1.10
                ],
                [
                    "nama_skill" => "Menemukan solusi kreatif untuk menjembatani kesenjangan antara prinsip-prinsip Agile dengan kebutuhan yang ada dalam struktur organisasi tradisional",
                    "value" => 1.18
                ],
                [
                    "nama_skill" => "Mengkomunikasikan nilai dan manfaat fleksibilitas dan kecepatan adaptasi (agility) kepada pihak-pihak terkait dalam struktur organisasi yang cenderung lebih formal dan kaku",
                    "value" => 1.14
                ],
            ],
            23 => [
                [
                    "nama_skill" => "Membimbing Product Owner dan Development Team untuk melakukan evaluasi dan pembelajaran terus menerus dari hasil yang dicapai demi peningkatan produk secara keseluruhan",
                    "value" => 1.14
                ],
                [
                    "nama_skill" => "Memfasilitasi diskusi dan kolaborasi yang konstruktif antara Product Owner dan Development Team untuk memastikan visi produk terwujud dalam setiap tahap pengembangan",
                    "value" => 1.14
                ],
                [
                    "nama_skill" => "Mendorong Product Owner dan Development Team untuk mengadopsi siklus pengembangan iteratif yang memungkinkan adaptasi cepat terhadap perubahan permintaan pasar",
                    "value" => 1.18
                ],
            ],
            24 => [
                [
                    "nama_skill" => "Memastikan bahwa tim yang terdistribusi dapat mengikuti ritme dan disiplin yang diperlukan dalam pelaksanaan sprint dan kegiatan-kegiatan terkait Scrum",
                    "value" => 1.10
                ],
                [
                    "nama_skill" => "Mengadaptasi atau menyesuaikan praktik Scrum agar sesuai dengan kebutuhan tim yang bekerja dari lokasi dan zona waktu yang berbeda",
                    "value" => 1.06
                ],
            ],
            25 => [
                [
                    "nama_skill" => "Menciptakan lingkungan kerja yang mendukung, inklusif, dan memungkinkan pertumbuhan profesional bagi setiap anggota tim",
                    "value" => 1.14
                ],
                [
                    "nama_skill" => "Memastikan bahwa tim bekerja dalam keterbukaan, transparansi, dan kejujuran",
                    "value" => 1.18
                ],
                [
                    "nama_skill" => "Memengaruhi tim untuk mengadopsi praktik terbaik serta berinovasi dalam proses pengembangan produk",
                    "value" => 1.22
                ],
            ],
            26 => [
                [
                    "nama_skill" => "Memastikan transparansi dan keterbukaan informasi yang diperlukan oleh anggota tim yang terdistribusi",
                    "value" => 1.14
                ],
                [
                    "nama_skill" => "Memberikan dukungan yang diperlukan bagi anggota tim yang mungkin mengalami kesulitan akibat lingkungan kerja yang terdistribusi",
                    "value" => 1.18
                ],
            ],
            27 => [
                [
                    "nama_skill" => "Mengelola proses komunikasi dan kolaborasi agar setiap anggota dapat menerima informasi secara real time terkait proses pengembangan",
                    "value" => 0.98
                ],
            ],
            28 => [
                [
                    "nama_skill" => "Memastikan bahwa informasi penting tersedia dan diakses dengan mudah oleh seluruh anggota tim yang tersebar",
                    "value" => 1.10
                ],
            ],
            29 => [
                [
                    "nama_skill" => "Melibatkan semua pihak yang terlibat dalam pengembangan produk untuk meninjau, memahami, dan menerima DoD yang telah ditetapkan",
                    "value" => 1.06
                ],
                [
                    "nama_skill" => "Mengintegrasikan feedback dari anggota tim untuk meningkatkan atau memperbaiki DoD",
                    "value" => 1.06
                ],
            ],
            30 => [
                [
                    "nama_skill" => "Mendukung komunikasi terbuka dan transparan di antara anggota tim, sehingga setiap individu merasa dihargai dan didengarkan",
                    "value" => 1.06
                ],
                [
                    "nama_skill" => "Menciptakan kesempatan untuk pengembangan pribadi, sehingga setiap individu merasa lebih percaya diri dan nyaman dalam memberikan kontribusi",
                    "value" => 1.10
                ],
                [
                    "nama_skill" => "Membangun hubungan yang kuat dengan setiap anggota tim",
                    "value" => 1.10
                ],
            ],
            31 => [
                [
                    "nama_skill" => "Memahami dan mengidentifikasi ketergantungan yang ada antara tim atau proyek untuk manajemen yang efektif",
                    "value" => 1.14
                ],
                [
                    "nama_skill" => "Mendorong pendekatan kolaboratif ketika menyelesaikan permasalahan terkait ketergantungan dibandingkan saling menyalahkan, memupuk budaya penyelesaian masalah secara kolektif",
                    "value" => 1.10
                ],
            ],
            32 => [
                [
                    "nama_skill" => "Melibatkan anggota tim dalam proses identifikasi risiko untuk mendapatkan pandangan yang lebih luas terhadap potensi risiko",
                    "value" => 1.06
                ],
            ],
            33 => [
                [
                    "nama_skill" => "Memberikan bimbingan dan arahan kepada anggota tim dalam memahami batasan dan kebebasan dalam memilih peran mereka serta cara terbaik untuk berkontribusi dalam lingkungan self-organizing",
                    "value" => 1.06
                ],
            ],
            34 => [
                [
                    "nama_skill" => "Mampu mendengarkan dengan baik, memahami, dan merespons permasalahan atau kebutuhan tim",
                    "value" => 1.10
                ],
                [
                    "nama_skill" => "Menghilangkan hambatan atau rintangan yang menghalangi kemajuan tim",
                    "value" => 1.14
                ],
            ],
            35 => [
                [
                    "nama_skill" => "Menjelaskan konsep self-organization kepada anggota tim",
                    "value" => 1.14
                ],
                [
                    "nama_skill" => "Memfasilitasi diskusi dan pengambilan keputusan di antara anggota tim",
                    "value" => 1.06
                ],
                [
                    "nama_skill" => "Mendorong tim untuk mengatasi masalah dan hambatan mereka menggunakan pengalaman dan pengetahuan mereka sendiri",
                    "value" => 1.18
                ],
            ],
            36 => [
                [
                    "nama_skill" => "Mengevaluasi kemajuan, mengumpulkan feedback, dan membuat penyesuaian yang diperlukan untuk inisiatif keberlanjutan",
                    "value" => 1.06
                ],
            ],
            37 => [
                [
                    "nama_skill" => "Mendorong tim untuk melakukan refleksi terhadap kinerja mereka setelah setiap iterasi guna memperbaiki proses dan hasil kerja",
                    "value" => 1.10
                ],
                [
                    "nama_skill" => "Mengidentifikasi dan mengatasi hambatan atau rintangan yang menghambat peningkatan tim dalam setiap siklus pengembangan",
                    "value" => 1.14
                ],
            ],
            38 => [
                [
                    "nama_skill" => "Menjelaskan konsep kunci dari pendekatan agile (seperti iterasi, inspeksi, adaptasi, dan kolaborasi) yang relevan dengan lingkungan perusahaan",
                    "value" => 1.10
                ],
                [
                    "nama_skill" => "Mengkomunikasikan pentingnya peran desain yang adaptif dalam membangun sistem yang responsif terhadap perubahan dalam bisnis",
                    "value" => 1.06
                ],
            ],
            39 => [
                [
                    "nama_skill" => "Meningkatkan transparansi dengan menggunakan visualisasi untuk melihat status hambatan. Misalnya membuat sebuah board dengan status ‘to do, in progress, done’",
                    "value" => 1.10
                ],
                [
                    "nama_skill" => "Memfokuskan upaya pada hambatan yang memiliki dampak paling signifikan terhadap kemajuan tim",
                    "value" => 1.10
                ],
            ],
            40 => [
                [
                    "nama_skill" => "Menjelaskan konsep portofolio Agile kepada tim dan pemangku kepentingan di perusahaan",
                    "value" => 1.14
                ],
            ],
        ];

        foreach ($questions as $order => $question) {
            $question = Question::create([
                "text" => $question,
                "order" => $order,
            ]);

            $q_opt = $options[$order];
            foreach ($q_opt as $option) {
                Option::create([
                    "question_id" => $question->id,
                    "nama_skill" => $option["nama_skill"],
                    "value" => $option["value"],
                ]);
            }
        }
    }
}
