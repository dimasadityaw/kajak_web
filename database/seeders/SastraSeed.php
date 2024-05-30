<?php

namespace Database\Seeders;

use App\Models\Sastra;
use Illuminate\Database\Seeder;

class SastraSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sastra::create([ // id 11
            'name' => 'Opo Niku Paribasan',
            'description' => 'Paribasan yaiku unen-unen ing basa Jawa kang nduweni teges kias, tetep, nanging ora ngemot tembung kangulang, ing basa Jawa umum e ana telung jinis yaiku paribasan, yaiku paribasan, bebasan, lan saloka.
            \n (Paribasan adalah suatu ungkapan dalam bahasa Jawa yang memiliki arti kiasan, bersifat tetap, namun tidak terdapat ungkapan pengandaian. Di dalam bahasa Jawa, secara umum terdapat tiga macam peribahasa, di antaranya adalah paribasan, bebasan, dan saloka.)',
            'image' => 'paribasan.jpg'
        ]);
        Sastra::create([
            'name' => 'Contohing paribasan'
        ]);

        Sastra::create([
            'name' => 'Opo Niku Tembang',
            'description' => 'Tembang macapat yaiku tembang utawa puisi gagrag lawas sing kaiket paugeran tartamtu kayata guru gatra, guru wilangan, lan guru lagune.
            \n (Tembang macapat adalah puisi Jawa tradisional yang terikat oleh aturan-aturan tertentu,mulai dari guru gatra, guru wilangan, dan guru lagu.)
            \n Tembang ing Jawa ada telu warna : Tembang Macapat, Tembang Tengahan, Tembang Gedhe
            \n (Tembang di jawa ada 3 jenis yaitu : Tembang macapat, Tembang tengahan, Tembang besar)
            \n Tembang Macapat ana 11 pupuh :
            \n 1. Asmaradana			    7. Megatruh
            \n 2. Dhandhang Gula			8. Mijil
            \n 3. Durma			            9. Pangkur
            \n 4. Gambuh			        10. Pucung
            \n 5. Kinanthi			        11. Sinom
            \n 6. Maskumambang            
            \n
            \n Tembang Tengahan enten 4 warna :
            \n 1. Balabak			3. Jurudemung
            \n 2. Girisa			4. Wirangrong
            \n 
            \n Tembang gedhe enten 4 warna :
            \n 1. Citramengeng			3. Mintajiwa
            \n 2. Kusumastuti			4. Pamularsih',
            'image' => 'tembang.jpg'
        ]);
        Sastra::create([
            'name' => 'Guru Gatra ing Tembang',
            'description' => 'Guru gatra yaiku cacahing larik saben sapada. 
            \n (guru gatra adalah banyaknya jumlah baris dalam satu bait.)'
        ]);
        Sastra::create([
            'name' => 'Guru Wilangan ing Tembang',
            'description' => 'Guru wilangan yaiku cacahing wanda utawa kecap saben sagatra. 
            \n (guru wilangan adalah banyaknya jumlah suku kata dalam setiap baris.)'
        ]);
        Sastra::create([
            'name' => 'Guru Lagu ing Tembang',
            'description' => 'Guru lagu yaiku tibane swara ing pungkasaning gatra. 
            \n (guru lagu adalah persamaan bunyi sajak pada akhir kata dalam setiap baris.)'
        ]);
        Sastra::create([
            'name' => 'Contohing Tembang'
        ]);

        Sastra::create([
            'name' => 'Opo Niku Parikan',
            'description' => 'Unen-unen kang dumadi saka rong ukara. Ukara sepisanan kanggo narik kawigaten, lan ukara kapindho minangka isi.
            \n (Sebuah Kata-kata yang dibuat menjadi 2 kalimat. kalimat pertama berfungsi sebagai penarik perhatian, sementara kalimat ke dua menjadi isi pokok yang ingin diutarakan)
            \n
            \n Parikan enten 2 macem : Pitutur : Ngunakake ngaturake piweling, pitutur, utawa amanat. lan Paseman : Ngunakake ngaturake hiburan lan ngemot guyonan utawa sindiran.
            \n (Parikan ada 2 macam : Pitutur : mengutarakan penyampaian pengingat, nasihat dan amanah. Dan Paseman : mengutarakan penyampaian hiburan, bersendau-gurau ataupun sindiran)',
            'image' => 'parikan.png'
        ]);
        Sastra::create([
            'name' => 'Contohing Parikan'
        ]);

        Sastra::create([
            'name' => 'Tembang Macapat Mijil',
            'description' => ' Guru Gatra : 6 
            \n Guru Wilangan : 10,6,10,10,6,6 
            \n Guru Lagu : I,o,e,I,I,u.
            \n Tuladha :
            \n Poma kaki padha dipuneling 
            \n Ing pitutur ingong 
            \n Sira uga satriya arane
            \n Kudu anteng jatmika ing budi
            \n Ruruh sarta wasis
            \n Samubarangipun
            \n
            \n (Wahai anakku selalu ingatlah atas nasihat yang kuberikan
            \n dirimu juga seorang satria
            \n harus tenang dan berbudi luhur
            \n sabar serta ahli
            \n dalam segala hal)',
            'parent_id' => 7
        ]);
        Sastra::create([
            'name' => 'Tembang Macapat Asmaradana',
            'description' => ' Guru Gatra : 7 
            \n Guru Wilangan : 8,8,8,8,7,8,8 
            \n Guru Lagu : a,I,e,a,a,u,a.
            \n Tuladha :
            \n Gegaraning wong akrami 
            \n Dudu bandha dudu rupa 
            \n Amung ati pawitane
            \n Luput pisan kena pisan
            \n Yen ta gampang luwih gampang
            \n Yen angel angel kalangkung
            \n Tan kena tinumbas arta
            \n
            \n (Modal dalam pernikahan
            \n Bukan harta atau rupa
            \n Hanya hati modal utamanya
            \n Sekali jadi, jadi selamanya
            \n Jika mudah, semakin gampang
            \n Jika sulit, sulitnya bukan main
            \n Tak bisa ditebus dengan harta)',
            'parent_id' => 7
        ]);
        Sastra::create([
            'name' => 'Tembang Macapat Dhandhang Gula',
            'description' => ' Guru Gatra : 10 
            \n Guru Wilangan : 10,10,8,7,9,7,6,8,12,7 
            \n Guru Lagu : i,a,e,u,i,a,u,a,i,a.
            \n Tuladha :
            \n Menawa sira meguru kaki
            \n Amiliha manungsa kang nyata
            \n Ingkang becik tumindake
            \n Sarta kang wruh ing kukum 
            \n Kang ngibadah lan kang ngirangi 
            \n Sukur entuk wong tapa
            \n Ingkang wus amungkul 
            \n Tan mikir pawewehingliyan 
            \n Iku pantes sira guronana kaki 
            \n Mulane kawruhana 
            \n
            \n (Jika kamu ingin berguru kepada seseorang 
            \n Pilihlah guru yang sungguh nyata 
            \n Yaitu baik perilakunya 
            \n Serta mengetahui akan hukum 
            \n Juga harus pandai beribadah 
            \n Sungguh beruntung apabila kamu mendapatkan seorang pertapa 
            \n Yang tekun dan sungguh-sungguh
            \n Yang tidak lagi mengharapkan pemberian orang lain 
            \n Seperti itulah manusia yang pantas kamu pilih menjadi guru 
            \n Maka ketahuilah)',
            'parent_id' => 7
        ]);
        Sastra::create([
            'name' => 'Tembang Macapat Durma',
            'description' => ' Guru Gatra : 7 
            \n Guru Wilangan : 12,7,6,7,8,5,7 
            \n Guru Lagu : a,i,a,a,i,a,i.
            \n Tuladha :
            \n Bener luput ala becik lawan beja 
            \n Cilaka mapan saking
            \n Ing badan priyangga 
            \n Dudu saking wong liya 
            \n Pramila den ngati ati 
            \n Sakeh durgama
            \n Singgahana den aglis
            \n
            \n ( Benar, salah atau kebenaran melawan kejahatan
            \n Celaka bersemayam dari 
            \n Dalam dirinya sendiri 
            \n Bukan dari orang lain 
            \n karena itu barhati- hatilah 
            \n dari banyaknya bahaya 
            \n Lekas menyingkirlah)',
            'parent_id' => 7
        ]);
        Sastra::create([
            'name' => 'Tembang Macapat Gambuh',
            'description' => ' Guru Gatra : 5 
            \n Guru Wilangan : 7,10,12,8,8 
            \n Guru Lagu : u,u,i,u,o.
            \n Tuladha :
            \n Sekar gambuh ping catur 
            \n Kang cinatur polah kang kalantur 
            \n Tanpa tutur katula-tula katali 
            \n Kadaluwarsa kapatuh 
            \n Kapatuh pan dadi awon.
            \n
            \n ( Tembang gambuh keempat 
            \n Yang dibicarakan tentang perilaku yang kebablasan 
            \n Tanpa nasihat terjerat penderitaan 
            \n Terlanjur menjadi kebiasaan 
            \n Kebiasaan bisa berakibat buruk)',
            'parent_id' => 7
        ]);
        Sastra::create([
            'name' => 'Tembang Macapat kinanthi',
            'description' => ' Guru Gatra : 6
            \n Guru Wilangan : 8,8,8,8,8,8
            \n Guru Lagu : u,i,a,i,a,i
            \n Tuladha :
            \n Nadyan asor wijilipun 
            \n Yen kalakuane becik 
            \n Utawa sugih carita 
            \n Caraita kang dadi misil 
            \n Iku pantes raketana 
            \n Darapin mundhak kang budi
            \n 
            \n (Meski lahir dari kalangan orang bawah
            \n jika kelakuannya baik
            \n dan banyak pengalaman hidup
            \n Pengalaman yang bisa jadi pelajaran
            \n Itu pantas didekati
            \n Harapannya dapat memperbaiki budi pekerti (kita))',
            'parent_id' => 7
        ]);
        Sastra::create([
            'name' => 'Tembang Macapat Maskumambang',
            'description' => ' Guru Gatra : 4
            \n Guru Wilangan : 12,6,8,8
            \n Guru Lagu : i,a,i,a
            \n Tuladha :
            \n Iku pantes yen sira tiruwa kaki 
            \n Miwah bapa biyung 
            \n Amuruk watek kang becik 
            \n Wajib kaki estokena
            \n 
            \n (Itu pantas jika kamu teladani 
            \n Begitu juga kedua orang tua 
            \n Yang mengajarkan watak yang baik
            \n Wajib kamu turuti)',
            'parent_id' => 7
        ]);
        Sastra::create([
            'name' => 'Tembang Macapat megatruh',
            'description' => ' Guru Gatra : 5
            \n Guru Wilangan : 12, 8, 8, 8,8
            \n Guru Lagu : u,i,u,i,o
            \n Tuladha :
            \n Aja sipat tan pegat siyang myang dalu
            \n Amuwun ing ngarsa mami
            \n Nora pajar kang kinayun
            \n Lah mara sira den aglis
            \n Tutura mringjeneng ingong
            \n 
            \n ( Jangan memiliki keinginan memisahkan siang dan malam
            \n Menangislah dihadapan saya
            \n Tidak jelas yang diinginkan
            \n Segeralah datang dia dengan cepat
            \n Berkatalah dengan namaku)',
            'parent_id' => 7
        ]);
        Sastra::create([
            'name' => 'Tembang Macapat Pangkur',
            'description' => ' Guru Gatra : 7
            \n Guru Wilangan : 8,11,8,7,12,8,8
            \n Guru Lagu : a,i,u,a,u,a,i
            \n Tuladha :
            \n Sekar Pangkur kang Winarna
            \n Lelabuhan kang kangge wong aurip
            \n Ala lan becik punika
            \n Prayoga kawruhana
            \n Adat waton punika dipun kadulu
            \n Miwah ingkang tatakrama
            \n Den kaesthi siyang ratri
            \n 
            \n (Tembang Pangkur yang diceritakan
            \n Pengabdian yang berguna untuk orang hidup
            \n Jelek dan baik itu
            \n Sebaiknya kamu ketahui
            \n Adat istiadat itu hendaknya dilaksanakan
            \n Juga yang berupa tata krama
            \n Dilaksanakan siang dan malam)',
            'parent_id' => 7
        ]);
        Sastra::create([
            'name' => 'Tembang Macapat Pucung',
            'description' => ' Guru Gatra : 4
            \n Guru Wilangan : 12,6,8,12
            \n Guru Lagu : u,a,i,a
            \n Tuladha :
            \n Ana weling saka bapa kalih biyung
            \n Aja seneng lunga
            \n Jomeneh lungane wengi
            \n Yen dilanggar cah ayu iku bebaya
            \n 
            \n (Ada nasihat dari bapak dan ibu
            \n Jangan suka main keluar
            \n Apalagi jika perginya malam
            \n Kalau dilanggar ini bisa sangat berbahaya bagi anak perempuan)',
            'parent_id' => 7
        ]);
        Sastra::create([
            'name' => 'Tembang Macapat Sinom',
            'description' => ' Guru Gatra : 9
            \n Guru Wilangan : 8,8,8,8,7,8,7,8,12
            \n Guru Lagu : a,i,a,i,i,u,a,i,a
            \n Tuladha :
            \n Nuladha laku utama
            \n Tumraping wong tanah Jawi
            \n Wong agung ing Ngeksiganda
            \n Panembahan Senapati
            \n Kepati amarsudi
            \n Sudane hawa lan nepsu
            \n Pinesu tapa brata
            \n Tanapi ing siyang ratri
            \n Amemangun karyenak tyas ing sasama.
            \n 
            \n (Contohlah perilaku utama
            \n Bagi kalangan orang Jawa (Nusantara)
            \n Penguasa dari Ngeksiganda (Mataram)
            \n Panembahan Senopati
            \n Yang selalu tekun
            \n Mengurangi hawa nafsu
            \n Dengan jalan prihatin (bertapa)
            \n Baik siang maupun malam
            \n Selalu berkarya membuat tenteram bagi sesama)',
            'parent_id' => 7
        ]);
        Sastra::create([
            'name' => 'Tembang Tengahan balabak',
            'description' => ' Guru Gatra : 4
            \n Guru Wilangan : 10,9,10,8
            \n Guru Lagu : I,a,I,a
            \n Tuladha :
            \n Balabak ayu kumambang budi
            \n Punapa sami sami sirna
            \n Rini wit angung rahayu nangi
            \n Rini wit kang gatipira. 
            \n 
            \n (Indah tertumpah di permukaan hati
            \n Namun mengapa semuanya lenyap
            \n Rini, engkau mengangkat kebahagiaanmu
            \n Rini yang menjadi tempat persinggahan.)',
            'parent_id' => 7
        ]);
        Sastra::create([
            'name' => 'Tembang Tengahan Girisa',
            'description' => ' Guru Gatra :  4
            \n Guru Wilangan : 10,9,12,11
            \n Guru Lagu : a,a,u,a
            \n Tuladha :
            \n Girisa ragapadha wus ana
            \n Anglir mendhung luh mah gitara
            \n Isinipun anget isinipun biru
            \n Pirang-pirang wong suka mring wusira.
            \n 
            \n (Hutan pun kini telah ada
            \n Air mengalir jernih bak gitara
            \n Dinginnya membuat hati hangat dan tenang
            \n Banyak orang senang datang padamu) ',
            'parent_id' => 7
        ]);
        Sastra::create([
            'name' => 'Tembang Tengahan Jurudemung',
            'description' => ' Guru Gatra : 4 
            \n Guru Wilangan : 8,8,8,8
            \n Guru Lagu : i,i,i,i
            \n Tuladha :
            \n Jurudemung kang pinilih
            \n Yen katonipun mung milih
            \n Silih lan budi pinilih
            \n Aja raso bilih-bilih
            \n 
            \n (Berbagai macam pilihan
            \n Jika dipikir hanya memilih
            \n Pilihlah dengan hati dan budi
            \n Jangan ragu-ragu memilih) ',
            'parent_id' => 7
        ]);
        Sastra::create([
            'name' => 'Tembang Tengahan Wirangrong',
            'description' => ' Guru Gatra :  6
            \n Guru Wilangan : 8,8,10,6,7,8
            \n Guru Lagu : I,o,u,I,a,a
            \n Tuladha :(Didik Supriadi (Unnes))
            \n Den samya marsudeng budi
            \n Wiweka dipunwaspaos
            \n Aja-dumeh-dumeh bisa muwus
            \n Yen tan pantes ugi
            \n Sanadyan mung sakecap
            \n Yen tan pantes prenahira
            \n 
            \n (Ketika semua dipenuhi dengan kebijaksanaan
            \n Keberanian menjadi terinspirasi
            \n Janganlah terlalu sombong
            \n Jika tidak pantas juga
            \n Meskipun hanya sekejap
            \n Jika tidak pantas disakiti.) ',
            'parent_id' => 7
        ]);
        Sastra::create([
            'name' => 'Tembang Gedhe Citramengeng',
            'description' => ' Guru Gatra : 4
            \n Guru Wilangan : 10,8,9,9
            \n Guru Lagu : I,a,I,u
            \n Tuladha :
            \n Pangestu wicaksanaing
            \n Gusti Citra mung jagading rasa
            \n Pangrasane wewaton ati
            \n Karya sajroning budi luhur
            \n 
            \n (Pujian bagi kebijaksanaan
            \n Tuhan dunia perasaan
            \n Perasaan yang menghiasi hati
            \n Karya yang mulia dari budi luhur) ',
            'parent_id' => 7
        ]);
        Sastra::create([
            'name' => 'Tembang Gedhe MintaJiwa',
            'description' => ' Guru Gatra : 4
            \n Guru Wilangan : 10,10,9,9
            \n Guru Lagu : a,I,a,I 
            \n Tuladha :
            \n Pangembara atine manungsa
            \n Kahananipun rataning jati
            \n Salira wicara pangrasa
            \n Kawruhing marang jagad sami
            \n 
            \n (Pengembara jiwa manusia
            \n Penguat dasar kebenaran
            \n Berkata sejalan dengan perasaan
            \n Pengetahuan tentang seluruh alam semesta) ',
            'parent_id' => 7
        ]);
        Sastra::create([
            'name' => 'Tembang Gedhe Kusumastuti',
            'description' => ' Guru Gatra : 6
            \n Guru Wilangan : 8,8,7,7,8,8
            \n Guru Lagu : e,u,i,u,u,i
            \n Tuladha :
            \n Kusumastuti ring kesed
            \n Guru yekti satya luhur
            \n Cahya lir ilmu budi
            \n Ngilma sinunggal druhur
            \n Pancaramu jaman belur
            \n Lukat sira tanpa bathi
            \n 
            \n (Puji-pujian bagi ketidakmalasan
            \n Guru yang benar dan mulia
            \n Cahaya ilmu dan budi
            \n Menyinari di atas segalanya
            \n Bersinar sepanjang waktu
            \n Sinarmu tak pernah pudar.)',
            'parent_id' => 7
        ]);
        Sastra::create([
            'name' => 'Tembang Gedhe Pamularsih',
            'description' => ' Guru Gatra : 4 
            \n Guru Wilangan : 8,7,7,6
            \n Guru Lagu : a,a,a,a
            \n Tuladha :
            \n Dharma sifatira tirta
            \n Layuning para wira
            \n Tan kawruhaning dasta
            \n Kamulyaning wruha
            \n 
            \n (Membiasakan diri dengan kebajikan
            \n Tujuan para pahlawan
            \n Kepengetahuan yang berharusan
            \n Kemuliaan pengetahuan)',
            'parent_id' => 7
        ]);
    }
}
