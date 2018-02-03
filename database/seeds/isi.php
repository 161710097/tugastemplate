<?php

use Illuminate\Database\Seeder;

class isi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
        	['nis'=>'00012','nama_siswa'=>'udin','tempat_lahir'=>'Bandung','tanggal_lahir'=>'1998-02-12','alamat'=>'Junti','cita_cita'=>'TNI','hobi'=>'Lari','gambar'=>'ha.jpg']
        ];
        DB::table('siswas')->insert($data);
    }
}
