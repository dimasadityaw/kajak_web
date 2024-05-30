<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tembung;

class TembungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create main tembung
        Tembung::create([
            'name' => 'Tembung Lingga',
            'description' => 'tembung lingga yaiku tembung sing durung owah saka asal e (kata asal). Ing tembung lingga sing uninane mung sakecapan diaranani tembung Wod.
            \n (tembung lingga adalah sebuah kata yang belum diubah dari kata aslinya (kata asal). Dalam tembung lingga ada yang hanya disuarakan satu kata disebut tembung Wod)
            \n Tuladha tembung lingga : adus, mangan, cokot, turu, tandur, mlayu, dll
            \n Tuladha tembung wod : ler, lur, tul, nul, tik, dll'
        ]);
        Tembung::create([
            'name' => 'Tembung Andhahan',
            'description' => 'tembung andhahan kui tembung sing wus owah saka linggane amarga kawuwuhi imbuhan, utawa tembung lingga kang wus dirimbang. Enten 4 jenis e tembung andhahan yaiku : ater-ater, seselan, penambang lan gabungan.
            \n (tembung andhahan adalah kata yang yang berasal dari kata asli lalu ditambahkan imbuhan atau kata asli yang sudah berimbuhan. Terdapat 4 jenis tembung andhahan diantaranya : ater-ater,seselan,penambangan dan gabungan)\n'
        ]);
        Tembung::create([
            'name' => 'Tembung Rangkep',
            'description' => 'Tembung rangkep yaiku sakabehing tembung sing diwaca kaping pindho, bisa sakabehing tembung utawa mung sawanda bae. Tembung rangkep ana telung warna, yaiku: Dwilingga, Dwupurwa, lan Dwiwasana.
            \n (Tembung Rangkep adalah semua kata yang dibaca dua kali, bisa seluruh kata atau sebagian saja. Tembung rangkep mempunyai jenis, yaitu: Dwilingga, Dwupurwa, dan Dwiwasana)'
        ]);
        Tembung::create([
            'name' => 'Tembung Camboran',
            'description' => 'Tembung camboran yaitu tembung loro utawa luwih sing dirangkep dadi siji. Manut tegese tembung camboran bisa kaperang dadi loro, yaiku: Camboran tunggal lan Camboran wudhar.
            \n (Tembung camboran adalah dua kata atau lebih yang digabungkan menjadi satu (kata majemuk). Tembung camboran dibedakan menjadi dua, yaitu: Camboran tunggal dan Camboran wudhar.)'
        ]);
        Tembung::create([
            'name' => 'Tembung Tanduk',
            'description' => 'Tembung tanduk yaiku tembung lingga sing oleh ater-ater hanus-wara (m-, n-, lan ny-). Dene warna-warnane tembung tanduk ana telu yaiku : tanduk Kriya wantah, tanduk i - Kriya, tanduk ke - kriya.
            \n ( Tembung tanduk adalah tembung lingga yang mendapatkan awalan hanus-wara (m-, n-, dan ny-). Terdapat 3 jenis Tembung ini, yaitu: Tanduk Kriya Wantah, Tanduk i - Kriya, Tanduk ke - Kriya)'
        ]);
        Tembung::create([
            'name' => 'Tembung Tanggap',
            'description' => 'Tembung tanggap yaiku tembung lingga sing oleh ater-ater tripurusa (dak-, ko-, lan di-) lan seselan -in. Warna-warnane tembung tanggap ana papat, yaiku : Tanggap Tripurusa, Tanggap Na, Tanggap Tarung, Tanggap Ka.
            \n (Tembung tanggap adalah tembung Lingga yang mendapatkan imbuhan Ater-ater Tripurusa (dak-,ko-,lan di-) serta imbuhan -in.  Dalam jenisnya tembung tanggap terdapat 4 jenis, diantaranya : Tanggap Tripurusa, Tanggap Na, Tanggap Tarung dan Tanggap Ka)'
        ]);
        Tembung::create([
            'name' => 'Ayahane Tembung',
            'description' => 'Ayahane tembung utawa lungguhing tembung ing basa Indonesia diarani "jabatan kalimat". Ngudhal ukara manut ayahane tembung ateges nggoleki perangane ukara sing diarani jejer, wasesa, lesan lan katrangan (Ind: subyek, predikat, obyek lan katerangan).
            \n (Bapak Kata atau kata utama dalam bahasa indonesia disebut sebagai "jabatan kalimat" . Memiliki tujuan untuk menulis kalimat menurut urutan kata dengan kata lain mencari bagian-bagian kalimat yang disebut jejer,wasesa, lesan dan katrangan (Ind: subjek, predikat, objek dan deskripsi).
            \n Tuladha :
            \n Robin mangan roti bengi mau
            \n Robin = jejer
            \n mangan = wasesa
            \n roti = lesan
            \n bengi mau = katrangan (wayah)'
        ]);
        Tembung::create([
            'name' => 'Silah-slilahing Tembung',
            'description' => 'Silah-silahing tembung yaiku gunggunge tembung kang kaperang dadi pirang-pirang golongan. Gunggungipun wonten 10 jinis tembung : aran, kriya,ganti,wilangan, sipat/kaanan,katrangan, seru/pangguwuh, sandhangan, panyambung, pangarep.
            \n (silah-silahing tembung adalah sebuah penggolongan kata-kata yang dibagi menjadi beberapa golongan. ada total 10 jenis golongan tembung diantaranya : aran, kriya,ganti,wilangan, sipat/kaanan,katrangan, seru/pangguwuh, sandhangan, panyambung, pangarep.)'
        ]);
        Tembung::create([
            'name' => 'Silah-silahing Ukara',
            'description' => 'Silah-silahing Ukara yaiku golongan jinis kalimat. Silah-silahing ukara enten 6 warna : Kandha, Crita, Tindak, Tanggap, Pakon, Panjaluk.
            \n (Silah-silahing Ukara adalah sebuah penggolongan jenis kalimat. Terdapt 6 jenis silah-silahing Ukara : Kandha, Crita, Tindak, Tanggap, Pakon, Panjaluk)'
        ]);
        Tembung::create([
            'name' => 'Tembung Andhahan Ater-Ater',
            'description' => 'tembung andhahan Ater-ater iki kang dumunung ing wiwitaning ukara. Enten 3 jenis e ater-ater iki yaiku : hanuswara, tripurusa, liyane.
            \n ing hanuswara awujud e : m-,n-,ng- lan ny-, yen ing tripurusa awujud e : dak-,kok, lan di-, lan ing liyane iki awujud e njobo e hanuswara lan tripurusa kaya a-,ma-,ka- lan liyane.
            \n (tembung ini terletak pada awal kalimat. Ada 3 jenis awalan: hanuswara, tripurusa, dan lain-lain.)
            \n (dalam bentuk hanuswaranya: m-,n-,ng- dan ny-, jika dalam bentuk tripurusanya: dak-,kok, dan di-, dan dalam bentuk liyane apa yang ada di luar hanuswara dan tripurusa seperti a-,ma- , ka- dan lain-lain.)
            \n Tuladha :
            \n M + pupus dadi mupus (ater-ater hanuswara)
            \n dak + pangan dadi dakpangan (ater-ater tripurusa)
            \n pi + tutur dadi pitutur (ater-ater liyane)',
            'parent_id' => 2
        ]);
        Tembung::create([
            'name' => 'Tembung Andhahan Seselan',
            'description' => 'tembung andhahan seselan iki kang dilebokake ing tengahing tembung. Awujudan e enten : -um,-in,-el, lan -er-.
            \n (tembung andhahan seselan ini dimasukkan ke dalam tengah kata. Wujudnya diantaranya : -um,-in,-el dan -er-)
            \n Tuladha :
            \n (-um) + guyu dadi gumuyu
            \n (-in) + serat dadi sinerat
            \n (-el) + dewer dadi delewer',
            'parent_id' => 2
        ]);
        Tembung::create([
            'name' => 'Tembung Andhahan Penambang',
            'description' => 'tembung andhahan penambang iki kang biasa e diseselaken ing akhiran tembung. Awujud e ana : -I, -ake, -e, -ke, -a, -ana, -na, -ku, -mu, lan -en.
            \n ( tembung penambang ini biasanya dimasukkan pada akhiran tembung(kata). Bentuknya ada: -I, -ake, -e, -ke, -a, -ana, -na, -ku, -mu, dan -en.)
            \n Tuladha :
            \n turut + -I dadi turuti
            \n jupuk + ake dadi jupukake
            \n bapak + e dadi bapake',
            'parent_id' => 2
        ]);
        Tembung::create([
            'name' => 'Tembung Andhahan Gabungan',
            'description' => 'tembung adhahan gabungan iki yaiku tembung kang digabung saka tembung andhahan liyane lan dirangkep dadi siji.
            \n (tembung andhahan gabungan ini adalah tembung yang digabung dari tembung andhahan lainnya dan dibuat dalam satu kata)
            \n Tuladha :
            \n Di + jupuk + ake = Dijupuake
            \n (-m) + buwang + I = Mbuwangi
            \n Di + gawa + ake = Digawaake',
            'parent_id' => 2
        ]);
        Tembung::create([
            'name' => 'Tembung Rangkep Dwilingga',
            'description' => 'tembung-tembung sing diwaca kaping pindho kabeh linggane. Tembung iki ana 3 warna muruk tekan panggucapan e, yaiku : Dwilingga padha swara, Dwilingga salin swara, Dwilingga semu.
            \n (tembung yang dibaca dua kali semuanya berbentuk sama dengan kata sebelumnya. Kata ini mempunyai 3 jenis yang berbeda jika dilafalkan, yaitu: Dwilingga padha swara, Dwilingga salin swara, Dwilingga semu.)
            \n Tuladha :
            \n guru-guru (Dwilingga padha swara)
            \n mrana-mrene (Dwilingga salin swara)
            \n ondhe-ondhe (Dwilingga semu)',
            'parent_id' => 3
        ]);
        Tembung::create([
            'name' => 'Tembung Rangkep Dwupurwa',
            'description' => 'tembung-tembung sing diwaca kaping pindho mung wanda sing ngarep.
            \n (Tembung yang dibaca dua kali hanyalah kata pertamanya saja)
            \n Tuladha :
            \n Dedunung
            \n jejupuk
            \n lelumpuk',
            'parent_id' => 3
        ]);
        Tembung::create([
            'name' => 'Tembung Rangkep Dwiwasana',
            'description' => 'tembung-tembung sing diwaca kaping pindho mung wanda sing mburi.
            \n (tembung yang dibaca dua kali namun, hanyalah bentuk kata terakhir)
            \n Tuladha :
            \n Cekakak
            \n Cengigis
            \n Celuluk',
            'parent_id' => 3
        ]);
        Tembung::create([
            'name' => 'Tembung Camboran Tunggal',
            'description' => 'Tembung Camboran Tunggal yaiku tembung kang didadekake purwakanthi kang banjur dirangkep dadi siji, nanging tembung siji ora bisa dipisahake karo tembung liyane amarga wis mujudake teges anyar.
            \n (Tembung camboran tunggal adalah kata yang digunakan sebagai kata ganti yang kemudian digabung menjadi satu, tetapi antara kata satu dengan yang lainnya tidak dapat dipisahkan karena sudah membentuk makna baru.)
            \n Tuladha :
            \n Ulerkembang
            \n Semarmendem
            \n Nagasari',
            'parent_id' => 4
        ]);
        Tembung::create([
            'name' => 'Tembung Camboran Wudhar',
            'description' => 'Tembung camboran wudhar menika kalebet tembung kalih ingkang dirangkep dados setunggal, ananging saben tembung panyusunan e taksih gadhah teges dhewe-dhewe.
            \n (Tembung Camboran Wudhar adalah dua kata yang digabung menjadi satu, tetapi setiap kata pembentuknya masih memiliki arti masing-masing)
            \n Tuladha :
            \n Meja tulis
            \n Goreng tahu
            \n Chilik dhawa',
            'parent_id' => 4
        ]);
        Tembung::create([
            'name' => 'Tembung Tanduk Wantah',
            'description' => 'Tembung sing ora oleh panambang.
            \n (Tembung yang tidak mendapatkan penambahan kata)
            \n Tuladha :
            \n Maju
            \n Ngadeg
            \n Ndeleh',
            'parent_id' => 5
        ]);
        Tembung::create([
            'name' => 'Tembung Tanduk I-Kriya',
            'description' => 'tembung tanduk sing oleh panambang I.
            \n (Tembung tanduk yang mendapatkan penambahan -I )
            \n Tuladha :
            \n Menthungi
            \n Nulungi
            \n Nyaponi',
            'parent_id' => 5
        ]);
        Tembung::create([
            'name' => 'Tembung Tanduk Ke-Kriya',
            'description' => 'tembung tanduk sing oleh panambang ke utawa ake.
            \n (tembung tanduk yang mendapatkan penambahan ke atau ake)
            \n Tuladha :
            \n Mbalangake
            \n Ngalungkake
            \n Nduduhake',
            'parent_id' => 5
        ]);
        Tembung::create([
            'name' => 'Tembung Tanggap Tripurusa',
            'description' => 'tembung lingga sing oleh ater-ater tripurusa.
            \n (tembung lingga yang mendapatkan awalan tripurusa)
            \n Tuladha :
            \n Dakpangan
            \n Kokjupuk
            \n Dibalangi',
            'parent_id' => 6
        ]);
        Tembung::create([
            'name' => 'Tembung Tanggap Na',
            'description' => 'tembung  lingga sing oleh seselan -I.
            \n (tembung lingga yang mendapatkan imbuhan -i)
            \n Tuladha :
            \n Tinubruk
            \n Tinulis
            \n Sinengekake',
            'parent_id' => 6
        ]);
        Tembung::create([
            'name' => 'Tembung Tanggap Tarung',
            'description' => 'tembung dwilingga sing oleh seselan -in tripurusa.
            \n (tembung dwilingga yang mendapatkan imbuhan -in tripurusa)
            \n Tuladha :
            \n Sawang-sinawang
            \n Cokot-cinokot
            \n Serat-sinerat',
            'parent_id' => 6
        ]);
        Tembung::create([
            'name' => 'Tembung Tanggap Ka',
            'description' => 'tembung lingga sing oleh ater-ater Ka-.
            \n (tembung lingga yang mendapatka imbuhan Ka-)
            \n Tuladha :
            \n Kaobong
            \n Kagendhong
            \n Kapangan',
            'parent_id' => 6
        ]);
        Tembung::create([
            'name' => 'Tembung Aran',
            'description' => 'tembung aran iki kanggo njelaskake tembung barang/benda.
            \n (tembung aran ini digunakan untuk menjelaskan kata benda/barang)
            \n Tuladha :
            \n Meja
            \n Kursi
            \n Dipan',
            'parent_id' => 8
        ]);
        Tembung::create([
            'name' => 'Tembung Kriya',
            'description' => 'tembung kriya iki kanggo njelaskake tembung kriya/kerja.
            \n (tembung kriya ini digunakan untuk menjelaskan kata kerja)
            \n Tuladha :
            \n Mangan
            \n Nulis
            \n Maca',
            'parent_id' => 8
        ]);
        Tembung::create([
            'name' => 'Tembung Ganti',
            'description' => 'tembung ganti iki kanggo njelaskake tembung ganti/lelakon.
            \n (tembung ganti ini digunakan untuk menjelaskan kata ganti atau pelaku dalam kalimat).
            \n Tuladha :
            \n Aku
            \n Ibu
            \n Awakmu',
            'parent_id' => 8
        ]);
        Tembung::create([
            'name' => 'Tembung Wilangan',
            'description' => 'tembung  wilangan iki kanggo njelaskake tembung wilangan/bilangan.
            \n (tembung wilangan ini digunakan untuk menjelaskan kata bilangan atau angka).
            \n Tuladha :
            \n Siji
            \n Telu
            \n Setengah',
            'parent_id' => 8
        ]); 
        Tembung::create([
            'name' => 'Tembung Sipat/Kaanan',
            'description' => 'tembung sipat/kaanan iki kanggo njelaskake tembung sipat/kaanan ing kalimat.
            \n (tembung sipat/kaanan ini digunakan untuk menjelaskan kata sifat suatu kalimat).
            \n Tuladha :
            \n Apik
            \n Elek
            \n Abang',
            'parent_id' => 8
        ]);
        Tembung::create([
            'name' => 'Tembung Katrangan',
            'description' => 'Tembung Katrangan iki kanggo njelaskake katrangan ing tembung.
            \n (tembung katrangan ini digunakan untuk menjelaskan keterangan dalam kalimat).
            \n Tuladha :
            \n Tengah
            \n Ngisor
            \n Kulon',
            'parent_id' => 8
        ]); 
        Tembung::create([
            'name' => 'Tembung Seru/Pangguwuh',
            'description' => 'Tembung Seru/Pangguwuh iki kanggo njelaskake tembung seru biasan e di ngo ekspresi kaget.
            \n (tembung seru/pangguwuh ini digunakan untuk menjelaskan kalimat seru biasanya digunakan dalam ekspresi kaget).
            \n Tuladha :
            \n Wah
            \n Adhuh
            \n Loh',
            'parent_id' => 8
        ]);
        Tembung::create([
            'name' => 'Tembung Sandhangan',
            'description' => 'Tembung Sandhangan iki kanggo njelaskake jabatan tekan subjek/wong kang kasebut ing ukara/tembung.
            \n (tembung sandhangan ini digunakan untuk menjelasakan jabatan dari sebuah subjek/orang yang disebutkan dalam kalimat/kata).
            \n Tuladha :
            \n Sang
            \n Hyang
            \n Raden',
            'parent_id' => 8
        ]);
        Tembung::create([
            'name' => 'Tembung Panyambung',
            'description' => 'Tembung Panyambung iki kanggo nyambungkake tembung saka tembung liyo.
            \n (tembung penaymbung ini digunakan untuk menyambung kata dari kata lainnya).
            \n Tuladha :
            \n Sarta
            \n Lan
            \n Wusana',
            'parent_id' => 8
        ]);
        Tembung::create([
            'name' => 'Tembung Pangarep',
            'description' => 'Tembung Pangarep iki tembung kanggo panggarepan saka tembung.
            \n (tembung pangarep ini digunakan sebagai awalan kata/kalimat).
            \n Tuladha :
            \n Saka
            \n Ing
            \n Mung',
            'parent_id' => 8
        ]);
        Tembung::create([
            'name' => 'Silah-Silahing Ukara Kandha',
            'description' => 'Silah-Silahing Ukara Kandha kui ukara kang ngekekake parintah.
            \n (Silah-silahing Ukara Kandha adalah sebuah kalimat yang digunakan untuk memberikan perintah).
            \n Tuladha :
            \n "Kowe kudu e blajar matematika" ndawuhe bapak
            \n Pak supri ngejak arjo "ayo mene nag jakarta"',
            'parent_id' => 9
        ]);
        Tembung::create([
            'name' => 'Silah-Silahing Ukara Crita',
            'description' => 'Silah-Silahing Ukara Crita iki walikan e saka silah-silahing ukara kandha lan digunakake ngo ukara ora langsung.
            \n (Silah-silahing ukara crita ini adalah kebalikan dari silah-silahing ukara kandha dan digunakan sebagai kalimat tidak langsung).
            \n Tuladha :
            \n bapak ngomongi nag adhik lek yen kudu sinau matematika.
            \n winggi budi ditakoni menyang nag endi.',
            'parent_id' => 9
        ]);
        Tembung::create([
            'name' => 'Silah-Silahing Ukara Tindak',
            'description' => 'Silah-Silahing Ukara Tindak iki kanggo ngunakake ngutarakake ukara kang dilakoni sakniki.
            \n (Silah-silahing ukara tindak ini digunakan untuk menjelaskan kalimat yang sedang dilakukan saat ini).
            \n Tuladha :
            \n ibu saiki nag pasar.
            \n beno sak niki njupuk sepeda nag omah.',
            'parent_id' => 9
        ]);
        Tembung::create([
            'name' => 'Silah-Silahing Ukara Tanggap',
            'description' => 'Silah-Silahing Ukara Tanggap iki kanggo ngunakake ngutarakae seng dilakkoni sebelum e kae jejer.
            \n (Silah-silahing ukara tanggap ini digunakan untuk menjelaskan tenang apa yang dilakukan sebelumnya olah subjek).
            \n Tuladha :
            \n bakso e dikutahno kucing.
            \n jajan winggi dikeknno nag tamu.',
            'parent_id' => 9
        ]); 
        Tembung::create([
            'name' => 'Silah-Silahing Ukara Pakon',
            'description' => 'Silah-Silahing Ukara Pakon iki biasane kanggo njelasno saka parintah tekan jejer.
            \n (Silah-silahing ukara pakon ini biasanya digunakan untuk menjelaskan dari perintah yang diutarakan oleh subjek).
            \n Tuladha :
            \n mene mrene o kae ngowo klambi anyarmu.
            \n njupukno pelem iku yo nag omah e pak mantri.',
            'parent_id' => 9
        ]);
        Tembung::create([
            'name' => 'Silah-Silahing Ukara Panjaluk',
            'description' => 'Silah-Silahing Ukara Panjaluk iki biasa e kanggo njelasno panjalukkan nag lawan ngomong e subjek.
            \n (silah-silahing ukara panjaluk ini biasanya digunakan untuk menjelaskan permintaan kepada lawan bicara subjek).
            \n Tuladha :
            \n tulung jupukno sepeda e mardi nag omah e.
            \n coba mene mrene o maneh.',
            'parent_id' => 9
        ]); 
    }
}
