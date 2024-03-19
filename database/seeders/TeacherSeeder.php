<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'name' => 'Azrul Azwan Abdul Rahman',
            'webpage' => 'https://portal.utem.edu.my/iuris/frm_e-cv.asp?search=25E4$2F2E$2BA4$2C55$2880$23FF$2CCC$2B3B$22DC$271A$B40$B20$B00$AE0$AC0$AA0$A80$A60$A40$A20$A00$9E0$9C0$9A0$980$960$940$920$900$8E0$8C0$8A0$880$860$840$820$800$7E0$7C0$7A0$780$760$740$720$700$6E0$6C0$6A0$680$660$640$620$600$5E0$5C0$5A0$580$560$540$520$500$4E0$4C0$4A0$480$460$440$420$400$3E0$3C0$3A0$380$360$340$320$300$2E0$2C0$2A0$280$260$240$220$200$1E0$1C0$1A0$180$160$140$120$100$E0$C0$A0$80$60$40$20',
            'tel' => '06-2702611',
            'email' => 'azrulazwan@utem.edu.my',
            'category' => 1,
            'image' => '/storage/azrul.jpeg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('teachers')->insert([
            'name' => 'Ahmad Faizul Bin Ahmad',
            'tel' => '06-2702641',
            'category' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('teachers')->insert([
            'name' => 'Sahar Bin Salehan',
            'tel' => '06-2704543',
            'category' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
