<?php

namespace DimasPndw\WonogiriArea\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayahSeeder extends Seeder
{
    public function run(): void
    {
        $wilayah = [
            "Baturetno"     => ['Balepanjang','Baturetno','Belikurip','Boto','Gambiranom','Glesungrejo','Kedungombo','Saradan','Sendangrejo','Setrorejo','Talunombo','Temon','Watuagung'],
            "Batuwarno"     => ['Batuwarno','Kudi','Ronggojati','Sendangsari','Sumberagung','Sumberejo','Tegiri','Selopuro'],
            "Bulukerto"     => ['Bulurejo','Conto','Domas','Geneng','Krandegan','Nadi','Ngaglik','Sugihan','Tanjung','Bulukerto'],
            "Eromoko"       => ['Basuhan','Baleharjo','Eromoko','Minggarharjo','Ngandong','Ngunggahan','Panekan','Pasekan','Pucung','Sindukarto','Sumberharjo','Tegalharjo','Tempurharjo','Ngadirejo','Puloharjo'],
            "Girimarto"     => ['Bubakan','Doho','Girimarto','Giriwarno','Jatirejo','Jendi','Nungkulan','Sanan','Selorejo','Semagarduwur','Tambakmerang','Waleng','Gemawang','Sidokarto'],
            "Giritontro"    => ['Jatirejo','Ngargoharjo','Pucanganom','Tlogoharjo','Tlogosari','Bayemharjo','Giritontro'],
            "Giriwoyo"      => ['Bulurejo','Bumiharjo','Gedongrejo','Guwotirto','Ngancar','Platarejo','Pidekso','Sejati','Selomarto','Sendangagung','Sirnoboyo','Tawangharjo','Tirtosuworo','Tukulrejo','Girikikis','Giriwoyo'],
            "Jatipurno"     => ['Girimulyo','Giriyoso','Jatipurwo','Jeporo','Kembang','Kopen','Mangunharjo','Slogoretno','Tawangrejo','Balepanjang','Jatipurno'],
            "Jatiroto"      => ['Boto','Brenggolo','Cangkring','Dawungan','Duren','Guno','Jatirejo','Mojopuro','Ngelo','Pengkol','Pesido','Pingkuk','Sugihan','Jatiroto','Sanggrong'],
            "Jatisrono"     => ['Gondangsari','Gunungsari','Jatisari','Jatisrono','Ngrompak','Pandeyan','Pule','Rejosari','Sambirejo','Semen','Sidorejo','Sumberejo','Tanggulangin','Tasikhargo','Watangsono','Pelem','Tanjungsari'],
            "Karangtengah"  => ['Jeblogan','Karangtengah','Ngambarsari','Purwoharjo','Temboro'],
            "Kismantoro"    => ['Bugelan','Gambiranom','Gedawung','Lemahbang','Miri','Ngroto','Plosorejo','Pucung','Gesing','Kismantoro'],
            "Manyaran"      => ['Bero','Gunungan','Karanglor','Kepuhsari','Pijiharjo','Pagutan','Punduhsari'],
            "Ngadirojo"     => ['Gedong','Gemawang','Jatimarto','Kerjo Kidul','Kerjo Lor','Mlokomanis Wetan','Ngadirojo Kidul','Ngadirojo Lor','Pondok','Kasihan','Mlokomanis Kulon'],
            "Nguntoronadi"  => ['Bulurejo','Bumiharjo','Gebang','Kulurejo','Pondoksari','Ngadipiro','Ngadiroyo','Semin','Wonoharjo','Beji','Kedungrejo'],
            "Paranggupito"  => ['Gendayakan','Gudangharjo','Gunturharjo','Johunut','Ketos','Paranggupito','Sambiharjo','Songbledeg'],
            "Pracimantoro"  => ['Banaran','Gambirmanis','Gebangharjo','Glinggang','Jimbar','Joho','Lebak','Petirsari','Pracimantoro','Sambiroto','Sedayu','Suci','Sumberagung','Trukan','Tubokarto','Watangrejo','Wonodadi','Gedong'],
            "Puhpelem"      => ['Golo','Nguneng','Puhpelem','Sukorejo','Tengger','Giriharjo'],
            "Purwantoro"    => ['Bakalan','Bangsri','Biting','Gondang','Joho','Kenteng','Kepyar','Miricinde','Ploso','Sendang','Sukomangu','Sumber','Talesan','Purwantoro','Tegalrejo'],
            "Selogiri"      => ['Gemantar','Jaten','Jendi','Keloran','Kepatihan','Nambangan','Pare','Pule','Sendangijo','Singodutan','Kaliancar'],
            "Sidoharjo"     => ['Jatinom','Kebonagung','Kedunggupit','Mojoreno','Ngabeyan','Sembukan','Sempukerep','Tempursari','Tremes','Widoro','Kayuloko','Sidoharjo'],
            "Slogohimo"     => ['Gunan','Klunggen','Made','Padarangin','Pandan','Randusari','Sambirejo','Sedayu','Setren','Slogohimo','Soco','Sokoboyo','Tunggur','Waru','Watusomo','Bulusari','Karang'],
            "Tirtomoyo"     => ['Banyakprodo','Dlepih','Genengharjo','Girirejo','Hargantoro','Hargorejo','Hargosari','Sendangmulyo','Sidorejo','Sukoharjo','Tanjungsari','Wiroko','Ngarjosari','Tirtomoyo'],
            "Wonogiri"      => ['Bulusulur','Manjung','Pokoh Kidul','Purworejo','Purwosari','Sendang','Sonoharjo','Wonoharjo','Wonokerto','Giripurwo','Giritirto','Giriwono','Wonoboyo','Wonokarto','Wuryorejo'],
            "Wuryantoro"    => ['Genukharjo','Gumiwang Lor','Mlopoharjo','Pulutan Kulon','Pulutan Wetan','Sumberejo','Mojopuro','Wuryantoro'],
        ];

        foreach ($wilayah as $kecamatan => $desas) {
            $kecamatanId = DB::table('kecamatans')->insertGetId([
                'nama'       => $kecamatan,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $rows = array_map(fn($nama) => [
                'kecamatan_id'=> $kecamatanId,
                'nama'         => $nama,
                'created_at'   => now(),
                'updated_at'   => now(),
            ], $desas);

            DB::table('desas')->insert($rows);
        }
    }
}
