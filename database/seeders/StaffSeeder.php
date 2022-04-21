<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = DB::table('users')->insertGetId(['name' => "OTHMAN BIN JAIS", 'email' => 'othmanjais.kl@utm.my', 'password' => Hash::make('750602085631')]);
        DB::table('staff')->insert(['name' => "OTHMAN BIN JAIS", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SR. TS.YUSMADY BIN MD.JUNUS", 'email' => 'yusmady.kl@utm.my', 'password' => Hash::make('780403035049')]);
        DB::table('staff')->insert(['name' => "SR. TS.YUSMADY BIN MD.JUNUS", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AHMAD ZAFRI BIN ZAINUDIN", 'email' => 'zafri@fkm.utm.my', 'password' => Hash::make('621026085105')]);
        DB::table('staff')->insert(['name' => "AHMAD ZAFRI BIN ZAINUDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "DR. EBI SHAHRIN BIN SULEIMAN", 'email' => 'm_sahrin@utm.my', 'password' => Hash::make('660119016231')]);
        DB::table('staff')->insert(['name' => "DR. EBI SHAHRIN BIN SULEIMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMAD SHAFIE BIN ABDUL RASHID", 'email' => 'shafiear.kl@utm.my', 'password' => Hash::make('661204105399')]);
        DB::table('staff')->insert(['name' => "MOHAMAD SHAFIE BIN ABDUL RASHID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "WAN MOHD KAMIL BIN WAN AHMAD", 'email' => 'kamil.kl@utm.my', 'password' => Hash::make('720307035597')]);
        DB::table('staff')->insert(['name' => "WAN MOHD KAMIL BIN WAN AHMAD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NAJEB BIN JAMALUDDIN", 'email' => 'najed@utm.my', 'password' => Hash::make('800606075169')]);
        DB::table('staff')->insert(['name' => "NAJEB BIN JAMALUDDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ROSLLI BIN NOOR MOHAMED", 'email' => 'roslli@utm.my', 'password' => Hash::make('740708016029')]);
        DB::table('staff')->insert(['name' => "ROSLLI BIN NOOR MOHAMED", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ENGKU MOHAMMAD NAZIM BIN ENGKU ABU BAKAR", 'email' => 'nazim@utm.my', 'password' => Hash::make('630123115171')]);
        DB::table('staff')->insert(['name' => "ENGKU MOHAMMAD NAZIM BIN ENGKU ABU BAKAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "DR. ZALMIYAH BINTI ZAKARIA", 'email' => 'zalmiyah@utm.my', 'password' => Hash::make('750429015882')]);
        DB::table('staff')->insert(['name' => "DR. ZALMIYAH BINTI ZAKARIA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "DR. ABD HALIM BIN HAMZAH", 'email' => 'halimhamzah@utm.my', 'password' => Hash::make('740606015607')]);
        DB::table('staff')->insert(['name' => "DR. ABD HALIM BIN HAMZAH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "KAMARUZZAMAN BIN ABDUL RAHIM", 'email' => 'kam_ar2001@yahoo.com', 'password' => Hash::make('690720715065')]);
        DB::table('staff')->insert(['name' => "KAMARUZZAMAN BIN ABDUL RAHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "DR. SHAHDAN BIN SUDIN", 'email' => 'shahdan@fke.utm.my', 'password' => Hash::make('671027045389')]);
        DB::table('staff')->insert(['name' => "DR. SHAHDAN BIN SUDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "DR.MOHAMMAD AHMAD BIN DRS. NASRUL", 'email' => 'mahmad.kl@utm.my', 'password' => Hash::make('711031715043')]);
        DB::table('staff')->insert(['name' => "DR.MOHAMMAD AHMAD BIN DRS. NASRUL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "TS. DR. SAHNIUS BINTI USMAN", 'email' => 'sahnius.kl@utm.my', 'password' => Hash::make('781018105914')]);
        DB::table('staff')->insert(['name' => "TS. DR. SAHNIUS BINTI USMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORHASLINDA BINTI HARUN", 'email' => 'norhaslinda.kl@utm.my', 'password' => Hash::make('781020115396')]);
        DB::table('staff')->insert(['name' => "NORHASLINDA BINTI HARUN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD HAIRI ALMOKHLIS", 'email' => 'hairi@spacecollege.edu.my', 'password' => Hash::make('911026145249')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD HAIRI ALMOKHLIS", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "IZZATI BINTI IBRAHIM", 'email' => 'izzatiberahim@yahoo.com', 'password' => Hash::make('900204016690')]);
        DB::table('staff')->insert(['name' => "IZZATI BINTI IBRAHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD AMIRUL ASHRAF BIN MADALI", 'email' => 'ashrafmohd51@yahoo.com', 'password' => Hash::make('910322065097')]);
        DB::table('staff')->insert(['name' => "MOHD AMIRUL ASHRAF BIN MADALI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "INTAN SANIA BINTI MOHD RAMLAN", 'email' => 'intansmr@gmail.com', 'password' => Hash::make('840830055468')]);
        DB::table('staff')->insert(['name' => "INTAN SANIA BINTI MOHD RAMLAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI AISHA NATASHA BINTI ABD RASHID", 'email' => 'sitiaishanatasha@yahoo.com', 'password' => Hash::make('900904025678')]);
        DB::table('staff')->insert(['name' => "SITI AISHA NATASHA BINTI ABD RASHID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD HAIRUL IZWAN BIN SALIM", 'email' => 'mhairulizwan@yahoo.com', 'password' => Hash::make('820925105191')]);
        DB::table('staff')->insert(['name' => "MOHD HAIRUL IZWAN BIN SALIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR HANIS BINTI AHMAD TARMIZI", 'email' => 'angah113tw@yahoo.com', 'password' => Hash::make('920712025446')]);
        DB::table('staff')->insert(['name' => "NUR HANIS BINTI AHMAD TARMIZI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AHMAD ZAKWAN BIN AZIZUL FATA", 'email' => 'zakwan.fata@gmail.com', 'password' => Hash::make('880501085099')]);
        DB::table('staff')->insert(['name' => "AHMAD ZAKWAN BIN AZIZUL FATA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD RIKHZAN AMIR BIN ABD TALIB", 'email' => 'blackhope_92@yahoo.com.my', 'password' => Hash::make('920919105759')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD RIKHZAN AMIR BIN ABD TALIB", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOR SOFIA BINTI ALI", 'email' => 'sofia_funky91@yahoo.com.my', 'password' => Hash::make('910429015778')]);
        DB::table('staff')->insert(['name' => "NOR SOFIA BINTI ALI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI FATIMAH BINTI MD TAHRIN", 'email' => 'sfatimah889@gmail.com', 'password' => Hash::make('930309015632')]);
        DB::table('staff')->insert(['name' => "SITI FATIMAH BINTI MD TAHRIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMAD HAKIMI BIN IBRAHIM", 'email' => 'mhakimi_92@yahoo.com', 'password' => Hash::make('920219035171')]);
        DB::table('staff')->insert(['name' => "MUHAMAD HAKIMI BIN IBRAHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "KHAIRUL AZWAN BIN MOHAMED DAUD", 'email' => 'k.azwandaud@gamil.com', 'password' => Hash::make('920811086429')]);
        DB::table('staff')->insert(['name' => "KHAIRUL AZWAN BIN MOHAMED DAUD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMAD SHAZMI ARIFF BIN MOHAMAD ADZMI", 'email' => 'knowledgeshazmi@gmail.com', 'password' => Hash::make('000715011775')]);
        DB::table('staff')->insert(['name' => "MOHAMAD SHAZMI ARIFF BIN MOHAMAD ADZMI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "DANIA QISTINA BINTI RIZMAN", 'email' => 'daniaqistinarizman@gmail.com', 'password' => Hash::make('000514100480')]);
        DB::table('staff')->insert(['name' => "DANIA QISTINA BINTI RIZMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "TAN KUAN HOONG", 'email' => 'tkuanhoong@gmail.com', 'password' => Hash::make('011229011095')]);
        DB::table('staff')->insert(['name' => "TAN KUAN HOONG", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ABDUL HALIM BIN ABDUL RAOF", 'email' => 'abdulhalim@utmspace.edu.my', 'password' => Hash::make('620618115297')]);
        DB::table('staff')->insert(['name' => "ABDUL HALIM BIN ABDUL RAOF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD ZULKIFLI BIN MOHD YUNUS", 'email' => 'mzul@utmspace.edu.my', 'password' => Hash::make('630715106455')]);
        DB::table('staff')->insert(['name' => "MOHD ZULKIFLI BIN MOHD YUNUS", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SALLEH BIN KASSIM                                 ", 'email' => 'salleh@utmspace.edu.my', 'password' => Hash::make('660927016029')]);
        DB::table('staff')->insert(['name' => "SALLEH BIN KASSIM                                 ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOOR AZIDAH BINTI AHMAD", 'email' => 'azidah@utmspace.edu.my', 'password' => Hash::make('751111016310')]);
        DB::table('staff')->insert(['name' => "NOOR AZIDAH BINTI AHMAD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ZULKIFLI BIN OSMAN", 'email' => 'zulkifli@utmspace.edu.my', 'password' => Hash::make('670131045405')]);
        DB::table('staff')->insert(['name' => "ZULKIFLI BIN OSMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ROZAFRINA BINTI ABDUL RAHMAN", 'email' => 'rozafrina@utmspace.edu.my', 'password' => Hash::make('690123065308')]);
        DB::table('staff')->insert(['name' => "ROZAFRINA BINTI ABDUL RAHMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "RAHIZA HASZIAN BINTI ABDUL RAHIM", 'email' => 'rahiza@utmspace.edu.my', 'password' => Hash::make('751111016812')]);
        DB::table('staff')->insert(['name' => "RAHIZA HASZIAN BINTI ABDUL RAHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL AIN BINTI AHMAD LUTFI", 'email' => 'nurulain@utmspace.edu.my', 'password' => Hash::make('800226145508')]);
        DB::table('staff')->insert(['name' => "NURUL AIN BINTI AHMAD LUTFI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "RAIHANA BINTI YUSOFF", 'email' => 'raihana@utmspace.edu.my', 'password' => Hash::make('800108015876')]);
        DB::table('staff')->insert(['name' => "RAIHANA BINTI YUSOFF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SUHAILI BINTI MAZLAN HUZAIRI", 'email' => 'suhaili@utmspace.edu.my', 'password' => Hash::make('741220145390')]);
        DB::table('staff')->insert(['name' => "SUHAILI BINTI MAZLAN HUZAIRI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "KARTIKA ISTA BINTI MOHAMED SHAH", 'email' => 'kartika@utmspace.edu.my', 'password' => Hash::make('730514016144')]);
        DB::table('staff')->insert(['name' => "KARTIKA ISTA BINTI MOHAMED SHAH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ROSNIZAM BIN MAAROF", 'email' => 'rosnizam@utmspace.edu.my', 'password' => Hash::make('821021045039')]);
        DB::table('staff')->insert(['name' => "ROSNIZAM BIN MAAROF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MARIA BINTI AHMAD", 'email' => 'maria@utmspace.edu.my', 'password' => Hash::make('800421015004')]);
        DB::table('staff')->insert(['name' => "MARIA BINTI AHMAD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AZREENA BINTI ZAINAL ABIDIN", 'email' => 'azreena@utmspace.edu.my', 'password' => Hash::make('810228015212')]);
        DB::table('staff')->insert(['name' => "AZREENA BINTI ZAINAL ABIDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SHAHLILAWATI BINTI WAHID", 'email' => 'shahlilawati@spaceutm.edu.my', 'password' => Hash::make('760519016060')]);
        DB::table('staff')->insert(['name' => "SHAHLILAWATI BINTI WAHID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR HUSNA BINTI ZULKEPLI", 'email' => 'husna@utmspace.edu.my', 'password' => Hash::make('901015016434')]);
        DB::table('staff')->insert(['name' => "NUR HUSNA BINTI ZULKEPLI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "FAIDAH BINTI AB GHANI", 'email' => 'faidah@utmspace.edu.my', 'password' => Hash::make('800709035792')]);
        DB::table('staff')->insert(['name' => "FAIDAH BINTI AB GHANI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "BAZLIN BINTI BURHAN", 'email' => 'bazlin@utmspace.edu.my', 'password' => Hash::make('751222065158')]);
        DB::table('staff')->insert(['name' => "BAZLIN BINTI BURHAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "HARYATI BINTI HASHIM", 'email' => 'HARYATI@UTMSPACE.EDU.MY', 'password' => Hash::make('751006015586')]);
        DB::table('staff')->insert(['name' => "HARYATI BINTI HASHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "S.SHAZARIMA BT M.SAKDON", 'email' => 'rima@utmspace.edu.my', 'password' => Hash::make('790714015730')]);
        DB::table('staff')->insert(['name' => "S.SHAZARIMA BT M.SAKDON", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORIDA BT HASHIM", 'email' => 'NORIDA@UTMSPACE.EDU.MY', 'password' => Hash::make('780911015140')]);
        DB::table('staff')->insert(['name' => "NORIDA BT HASHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD IHSAN BIN ISMAIL", 'email' => 'ihsan@utmspace.edu.my', 'password' => Hash::make('840528015553')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD IHSAN BIN ISMAIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MAIZATUL SUNNAH BINTI MAULUD ISHAK", 'email' => 'maizatul@utmspace.edu.my', 'password' => Hash::make('780525016022')]);
        DB::table('staff')->insert(['name' => "MAIZATUL SUNNAH BINTI MAULUD ISHAK", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "HARNANI BT SHUMSUDIN", 'email' => 'harnani@utmspace.edu.my', 'password' => Hash::make('830301145274')]);
        DB::table('staff')->insert(['name' => "HARNANI BT SHUMSUDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOOR AISHAH BINTI MD YUSOF", 'email' => 'aishah@spaceutm.edu.my, sp-noor_aishah@ic.utm.my', 'password' => Hash::make('640223106650')]);
        DB::table('staff')->insert(['name' => "NOOR AISHAH BINTI MD YUSOF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ROSHAIZA BINTI GHAZALI", 'email' => 'roshaiza@spaceutm.edu.my', 'password' => Hash::make('760128035838')]);
        DB::table('staff')->insert(['name' => "ROSHAIZA BINTI GHAZALI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL SYUHADA BINTI IBRAHIM", 'email' => 'syuhada@utmspace.edu.my', 'password' => Hash::make('790825065474')]);
        DB::table('staff')->insert(['name' => "NURUL SYUHADA BINTI IBRAHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL SYAHIDA BINTI SEBERI", 'email' => 'syahid83@ic.utm.my', 'password' => Hash::make('830808065206')]);
        DB::table('staff')->insert(['name' => "NURUL SYAHIDA BINTI SEBERI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD NORAZLAN MOHD NAZARI", 'email' => 'norazlan@utmspace.edu.my', 'password' => Hash::make('881222065401')]);
        DB::table('staff')->insert(['name' => "MOHD NORAZLAN MOHD NAZARI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORHIDAYAH BINTI MOHD NOOR HUSSAIN", 'email' => 'norhidayah@utmspace.edu.my', 'password' => Hash::make('831025015848')]);
        DB::table('staff')->insert(['name' => "NORHIDAYAH BINTI MOHD NOOR HUSSAIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORULHUDA BINTI ZAKARIA", 'email' => 'norulhuda@utmspace.edu.my', 'password' => Hash::make('821221035580')]);
        DB::table('staff')->insert(['name' => "NORULHUDA BINTI ZAKARIA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD FU\'AD BIN MOHD KAMSO", 'email' => 'fuad@utmspace.edu.my', 'password' => Hash::make('830414015433')]);
        DB::table('staff')->insert(['name' => "MOHD FU\'AD BIN MOHD KAMSO", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORIMALIZA BINTI MAMAT", 'email' => 'norimaliza@utmspace.edu.my', 'password' => Hash::make('810304065618')]);
        DB::table('staff')->insert(['name' => "NORIMALIZA BINTI MAMAT", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOORMALANI BINTI CHE HUSSIN", 'email' => 'noormalani@utmspace.edu.my', 'password' => Hash::make('810528035944')]);
        DB::table('staff')->insert(['name' => "NOORMALANI BINTI CHE HUSSIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "HAMIZAH BINTI ABDUL HAMID ", 'email' => 'hamizah@utmspace.edu.my', 'password' => Hash::make('660309085852')]);
        DB::table('staff')->insert(['name' => "HAMIZAH BINTI ABDUL HAMID ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SHAMSHUL HELMY BIN ZAMBAHARI ", 'email' => 'shamsul@utmspace.edu.my', 'password' => Hash::make('621024107809')]);
        DB::table('staff')->insert(['name' => "SHAMSHUL HELMY BIN ZAMBAHARI ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SARAZMIN BIN ABD. RAZAK", 'email' => 'sarazmin@utmspace.edu.my', 'password' => Hash::make('790715016305')]);
        DB::table('staff')->insert(['name' => "SARAZMIN BIN ABD. RAZAK", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SHAHILAH BINTI HAMDAN", 'email' => 'shahilah@utmspace.edu.my', 'password' => Hash::make('721018065348')]);
        DB::table('staff')->insert(['name' => "SHAHILAH BINTI HAMDAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ADZLIN BINTI NAWI", 'email' => 'adzlin@utmspace.edu.my', 'password' => Hash::make('740314035358')]);
        DB::table('staff')->insert(['name' => "ADZLIN BINTI NAWI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ISNAINI IZZATI BINTI ROSLAN", 'email' => 'isnaini@spaceutm.edu.my', 'password' => Hash::make('850616125030')]);
        DB::table('staff')->insert(['name' => "ISNAINI IZZATI BINTI ROSLAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORFARHAWA BINTI KHAIRI", 'email' => 'hawa@utmspace.edu.my', 'password' => Hash::make('840703085090')]);
        DB::table('staff')->insert(['name' => "NORFARHAWA BINTI KHAIRI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORISAH SHAHRINA BINTI MOHD NORDIN", 'email' => 'norisah@utmspace.edu.my', 'password' => Hash::make('820625015290')]);
        DB::table('staff')->insert(['name' => "NORISAH SHAHRINA BINTI MOHD NORDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORHAIZAL BIN RAMLEY", 'email' => 'haizal@utmspace.edu.my', 'password' => Hash::make('810703075469')]);
        DB::table('staff')->insert(['name' => "NORHAIZAL BIN RAMLEY", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "KHAIRIEL IDZHAM BIN NORDIN", 'email' => 'khairiel@utmspace.edu.my', 'password' => Hash::make('860926496821')]);
        DB::table('staff')->insert(['name' => "KHAIRIEL IDZHAM BIN NORDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOR AZLIANA BINTI RAMALI", 'email' => 'azliana@utmspace.edu.my', 'password' => Hash::make('830604115822')]);
        DB::table('staff')->insert(['name' => "NOR AZLIANA BINTI RAMALI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD IZWAN BIN SALLEH", 'email' => 'izwan@utmspace.edu.my', 'password' => Hash::make('820502015725')]);
        DB::table('staff')->insert(['name' => "MOHD IZWAN BIN SALLEH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SAMEER SYAUQY BIN MANSOR ", 'email' => 'sameer@spaceutm@edu.my', 'password' => Hash::make('850113025361')]);
        DB::table('staff')->insert(['name' => "SAMEER SYAUQY BIN MANSOR ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD SYAM BIN MD JAMAL", 'email' => 'm.syam@utmspace.edu.my', 'password' => Hash::make('860720237007')]);
        DB::table('staff')->insert(['name' => "MOHD SYAM BIN MD JAMAL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AZHAN ZULFADHLI BIN HANDERI                       ", 'email' => 'azhan@utmspace.edu.my', 'password' => Hash::make('771110135797')]);
        DB::table('staff')->insert(['name' => "AZHAN ZULFADHLI BIN HANDERI                       ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "HANIM BT A. HAMID", 'email' => 'hanim@utmspace.edu.my', 'password' => Hash::make('860705235476')]);
        DB::table('staff')->insert(['name' => "HANIM BT A. HAMID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD NOOR FAIROS BIN MOHD NAWAWI", 'email' => 'fairos@utmspace.edu.my', 'password' => Hash::make('800316075179')]);
        DB::table('staff')->insert(['name' => "MOHD NOOR FAIROS BIN MOHD NAWAWI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "FANIZA BINTI MUSTAFA", 'email' => 'faniza@utmspace.edu.my', 'password' => Hash::make('800409115432')]);
        DB::table('staff')->insert(['name' => "FANIZA BINTI MUSTAFA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "FARAH BINTI SIMAN", 'email' => 'farah@spaceutm.edu.my', 'password' => Hash::make('830402016148')]);
        DB::table('staff')->insert(['name' => "FARAH BINTI SIMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "KHAIRUL HAFEZ BIN ZAINUDIN ", 'email' => 'hafez@utmspace.edu.my', 'password' => Hash::make('810430065547')]);
        DB::table('staff')->insert(['name' => "KHAIRUL HAFEZ BIN ZAINUDIN ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "KHAIRUL AZRY BIN AHMAD", 'email' => 'azry@utmspace.edu.my', 'password' => Hash::make('740824015517')]);
        DB::table('staff')->insert(['name' => "KHAIRUL AZRY BIN AHMAD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORAFIKA BINTI M.NOR", 'email' => 'norafika@utmspace.edu.my', 'password' => Hash::make('860207015366')]);
        DB::table('staff')->insert(['name' => "NORAFIKA BINTI M.NOR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "DALIZASURIYANI BINTI MD DAUT", 'email' => 'daliza@spaceutm.edu.my', 'password' => Hash::make('860904236762')]);
        DB::table('staff')->insert(['name' => "DALIZASURIYANI BINTI MD DAUT", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOR AIDAWATI BINTI NOR AZMAN ", 'email' => 'aidawati@utmspace.edu.my', 'password' => Hash::make('831007145526')]);
        DB::table('staff')->insert(['name' => "NOR AIDAWATI BINTI NOR AZMAN ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "KHAIRUL AZHAR BIN ARIFIN", 'email' => 'azhar@utmspace.edu.my', 'password' => Hash::make('811116065981')]);
        DB::table('staff')->insert(['name' => "KHAIRUL AZHAR BIN ARIFIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL \'IZZATI BINTI MOHD HASHIM", 'email' => 'izzati@utmspace.edu.my', 'password' => Hash::make('851006017088')]);
        DB::table('staff')->insert(['name' => "NURUL \'IZZATI BINTI MOHD HASHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURAFIDAH BINTI MOHD NOOR", 'email' => 'nurafidah@utmspace.edu.my', 'password' => Hash::make('830130016514')]);
        DB::table('staff')->insert(['name' => "NURAFIDAH BINTI MOHD NOOR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMAD NAZRI BIN SAYUTI", 'email' => 'nazrisayuti@utmspace.edu.my', 'password' => Hash::make('801218015927')]);
        DB::table('staff')->insert(['name' => "MOHAMAD NAZRI BIN SAYUTI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD ZAINI BIN AZIZAN", 'email' => 'zaini@utmspace.edu.my', 'password' => Hash::make('860111025535')]);
        DB::table('staff')->insert(['name' => "MOHD ZAINI BIN AZIZAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AZUAN FAREES BIN SAHIL", 'email' => 'azuan@utmspace.edu.my', 'password' => Hash::make('780430145083')]);
        DB::table('staff')->insert(['name' => "AZUAN FAREES BIN SAHIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "HANIN BINTI ALI MUSLIM", 'email' => 'hanin@utmspace.edu.my', 'password' => Hash::make('800420065202')]);
        DB::table('staff')->insert(['name' => "HANIN BINTI ALI MUSLIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ABDUL RASHID BIN ZAILAN", 'email' => 'rashid@utmspace.edu.my', 'password' => Hash::make('870415015749')]);
        DB::table('staff')->insert(['name' => "ABDUL RASHID BIN ZAILAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL AZREEN BINTI MOHD KHEIR", 'email' => 'azreen@utmspace.edu.my', 'password' => Hash::make('850110086716')]);
        DB::table('staff')->insert(['name' => "NURUL AZREEN BINTI MOHD KHEIR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORAIN BINTI SAMSUDIN", 'email' => 'nrain@utmspace.edu.my', 'password' => Hash::make('860401236592')]);
        DB::table('staff')->insert(['name' => "NORAIN BINTI SAMSUDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "TUAN MOHD ZAIDI BIN TUAN JUSOH ", 'email' => 'tuanzaidi@utmspace.edu.my', 'password' => Hash::make('821204035423')]);
        DB::table('staff')->insert(['name' => "TUAN MOHD ZAIDI BIN TUAN JUSOH ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "CHE RAHAIDA BINTI TAHIR", 'email' => 'rahaida@utmspace.edu.my', 'password' => Hash::make('690805115026')]);
        DB::table('staff')->insert(['name' => "CHE RAHAIDA BINTI TAHIR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MARIANI BINTI ALI", 'email' => 'mariani@utmspace.edu.my', 'password' => Hash::make('760220035152')]);
        DB::table('staff')->insert(['name' => "MARIANI BINTI ALI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD NAZRI BIN AHMAD", 'email' => 'nazri@utmspace.edu.my', 'password' => Hash::make('850710016025')]);
        DB::table('staff')->insert(['name' => "MOHD NAZRI BIN AHMAD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "HUZAIMAH BINTI JAMAL", 'email' => 'huzaimah@utmspace.edu.my', 'password' => Hash::make('820221015390')]);
        DB::table('staff')->insert(['name' => "HUZAIMAH BINTI JAMAL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI RUHANA BINTI MD SALIH", 'email' => 'ruhana@utmspace.edu.my', 'password' => Hash::make('831230015214')]);
        DB::table('staff')->insert(['name' => "SITI RUHANA BINTI MD SALIH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NASLIANA BINTI SHAARIN", 'email' => 'nasliana@utmspace.edu.my', 'password' => Hash::make('841015065234')]);
        DB::table('staff')->insert(['name' => "NASLIANA BINTI SHAARIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NADIAHTUL AKMAL BINTI SALEHUDDIN", 'email' => 'nadiahtul@utmspace.edu.my', 'password' => Hash::make('821110016838')]);
        DB::table('staff')->insert(['name' => "NADIAHTUL AKMAL BINTI SALEHUDDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOR SHAHIDAH BINTI MOHAYADI", 'email' => 'norshahidah@utmspace.edu.my', 'password' => Hash::make('850420015198')]);
        DB::table('staff')->insert(['name' => "NOR SHAHIDAH BINTI MOHAYADI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD IDHAM BIN JEMAIN", 'email' => 'idham@utmspace.edu.my', 'password' => Hash::make('840929015263')]);
        DB::table('staff')->insert(['name' => "MOHD IDHAM BIN JEMAIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOREE BINTI MOHD RUDZITA", 'email' => 'noree@utmspace.edu.my', 'password' => Hash::make('840207015130')]);
        DB::table('staff')->insert(['name' => "NOREE BINTI MOHD RUDZITA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAZAM BIN MOKHTAR", 'email' => 'mohazam@utmspace.edu.my', 'password' => Hash::make('730530015205')]);
        DB::table('staff')->insert(['name' => "MOHAZAM BIN MOKHTAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "FAZILAH BINTI OTHMAN", 'email' => 'fazilah@utmspace.edu.my', 'password' => Hash::make('750831145554')]);
        DB::table('staff')->insert(['name' => "FAZILAH BINTI OTHMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ZAKHIRAH BINTI MUDA", 'email' => 'zakhirah@utmspace.edu.my', 'password' => Hash::make('830617116138')]);
        DB::table('staff')->insert(['name' => "ZAKHIRAH BINTI MUDA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORHASLINDA BINTI ABU BAKAR", 'email' => 'norhaslinda@utmspace.edu.my', 'password' => Hash::make('820803065566')]);
        DB::table('staff')->insert(['name' => "NORHASLINDA BINTI ABU BAKAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOOR FAEZAH BINTI OSMAN", 'email' => 'faezah@utmspace.edu.my', 'password' => Hash::make('870621305026')]);
        DB::table('staff')->insert(['name' => "NOOR FAEZAH BINTI OSMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOR RAFIDAH BINTI KHALID", 'email' => 'rafidah@utmspace.edu.my', 'password' => Hash::make('810720016540')]);
        DB::table('staff')->insert(['name' => "NOR RAFIDAH BINTI KHALID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORTINESHA BINTI ABDULLAH", 'email' => 'nortinesha@utmspace.edu.my', 'password' => Hash::make('810101015872')]);
        DB::table('staff')->insert(['name' => "NORTINESHA BINTI ABDULLAH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOORAFIDAH BINTI DEMAN", 'email' => 'noorafidah@utmspace.edu.my', 'password' => Hash::make('880717235172')]);
        DB::table('staff')->insert(['name' => "NOORAFIDAH BINTI DEMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI NURHAZWANI BT ABDUL KAHAR", 'email' => 'hazwani@spaceutm.edu.my', 'password' => Hash::make('851016146430')]);
        DB::table('staff')->insert(['name' => "SITI NURHAZWANI BT ABDUL KAHAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NIK HUZAIRA BINTI HUSIN", 'email' => 'huzaira@utmspace.edu.my', 'password' => Hash::make('810825065672')]);
        DB::table('staff')->insert(['name' => "NIK HUZAIRA BINTI HUSIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMAD FAHMI BIN AMAT EASAN", 'email' => 'fahmi@utmspace.edu.my', 'password' => Hash::make('760514715153')]);
        DB::table('staff')->insert(['name' => "MOHAMAD FAHMI BIN AMAT EASAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURMASYELA BINTI AB MALEK", 'email' => 'nurmasyela@utmspace.edu.my', 'password' => Hash::make('860604236234')]);
        DB::table('staff')->insert(['name' => "NURMASYELA BINTI AB MALEK", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD NAJIB BIN MUHAMMAD", 'email' => 'najib@utmspace.edu.my', 'password' => Hash::make('820130105331')]);
        DB::table('staff')->insert(['name' => "MOHD NAJIB BIN MUHAMMAD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ELYANI BINTI MOHD TAJAR ", 'email' => 'elyani@utmspace.edu.my', 'password' => Hash::make('840107015432')]);
        DB::table('staff')->insert(['name' => "ELYANI BINTI MOHD TAJAR ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "RABIYATUL DALILA BINTI ROSLI", 'email' => 'rabiyatul@utmspace.edu.my', 'password' => Hash::make('901228016278')]);
        DB::table('staff')->insert(['name' => "RABIYATUL DALILA BINTI ROSLI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOREHAN BINTI REJALI ", 'email' => 'norehan@utmspace.edu.my', 'password' => Hash::make('850216025540')]);
        DB::table('staff')->insert(['name' => "NOREHAN BINTI REJALI ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SUZELAWATI BINTI DJONI @ JOHAN", 'email' => 'suzelawati@utmspace.edu.my', 'password' => Hash::make('811005016036')]);
        DB::table('staff')->insert(['name' => "SUZELAWATI BINTI DJONI @ JOHAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOOR FAZILLAH BT ABD JAMAL", 'email' => 'azie@spaceutm.edu.my', 'password' => Hash::make('880313235416')]);
        DB::table('staff')->insert(['name' => "NOOR FAZILLAH BT ABD JAMAL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "HAZMARIDAH BINTI MOHD NOOR", 'email' => 'hazmaridah@utmspace.edu.my', 'password' => Hash::make('870830015690')]);
        DB::table('staff')->insert(['name' => "HAZMARIDAH BINTI MOHD NOOR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI NOR A\'IN BINTI SUPARLAN", 'email' => 'nor.ain@spaceutm.edu.my', 'password' => Hash::make('871129236406')]);
        DB::table('staff')->insert(['name' => "SITI NOR A\'IN BINTI SUPARLAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR ADMIN BINTI MOHAD @ MOHAMMED", 'email' => 'nuradmin@utmspace.edu.my', 'password' => Hash::make('850415015804')]);
        DB::table('staff')->insert(['name' => "NUR ADMIN BINTI MOHAD @ MOHAMMED", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORAINI BT MOHD ZAIN", 'email' => 'noraini@utmspace.edu.my', 'password' => Hash::make('890929115032')]);
        DB::table('staff')->insert(['name' => "NORAINI BT MOHD ZAIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOOR FAEZAH BINTI ABDULLAH", 'email' => 'nfaezah@utmspace.edu.my', 'password' => Hash::make('861211236342')]);
        DB::table('staff')->insert(['name' => "NOOR FAEZAH BINTI ABDULLAH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "RAFIDAH BT MOHD YACOB", 'email' => 'rafidahy@utmspace.edu.my', 'password' => Hash::make('860822236590')]);
        DB::table('staff')->insert(['name' => "RAFIDAH BT MOHD YACOB", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ZASMIZA BINTI MAT ZAHARI", 'email' => 'zasmiza@utmspace.edu.my', 'password' => Hash::make('800904065006')]);
        DB::table('staff')->insert(['name' => "ZASMIZA BINTI MAT ZAHARI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "PUTERI NURAIN BINTI MAD RAIS", 'email' => 'nurain@utmspace.edu.my', 'password' => Hash::make('851128146398')]);
        DB::table('staff')->insert(['name' => "PUTERI NURAIN BINTI MAD RAIS", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AZINOR AFANDI BIN AB AZIZ                         ", 'email' => 'afandi@utmspace.edu.my', 'password' => Hash::make('830627036035')]);
        DB::table('staff')->insert(['name' => "AZINOR AFANDI BIN AB AZIZ                         ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ASRULSANI BIN SUKAJAT", 'email' => 'asrul@utmspace.edu.my', 'password' => Hash::make('890511025769')]);
        DB::table('staff')->insert(['name' => "ASRULSANI BIN SUKAJAT", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORSHAHINA BINTI SELAMAT", 'email' => 'shahina@utmspace.edu.my', 'password' => Hash::make('831120015790')]);
        DB::table('staff')->insert(['name' => "NORSHAHINA BINTI SELAMAT", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOR FATIHA BINTI MD NOH", 'email' => 'fatiha@utmspace.edu.my', 'password' => Hash::make('881116016294')]);
        DB::table('staff')->insert(['name' => "NOR FATIHA BINTI MD NOH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ROSMAWATI BINTI IBRAHIM", 'email' => 'rosmawati@utmspace.edu.my', 'password' => Hash::make('840404065364')]);
        DB::table('staff')->insert(['name' => "ROSMAWATI BINTI IBRAHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AZWIN BINTI ZAKARIA @ HAMDAN", 'email' => 'azwin@utmspace.edu.my', 'password' => Hash::make('840913016050')]);
        DB::table('staff')->insert(['name' => "AZWIN BINTI ZAKARIA @ HAMDAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "KHALILAH BT NOORDIN", 'email' => 'khalilah@utmspace.edu.my', 'password' => Hash::make('870401565408')]);
        DB::table('staff')->insert(['name' => "KHALILAH BT NOORDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MAZIAH BINTI IBRAHIM", 'email' => 'maziah@utmspace.edu.my', 'password' => Hash::make('810916016542')]);
        DB::table('staff')->insert(['name' => "MAZIAH BINTI IBRAHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR FARADIANA BINTI RUHAZAT", 'email' => 'faradiana@utmspace.edu.my', 'password' => Hash::make('860901236572')]);
        DB::table('staff')->insert(['name' => "NUR FARADIANA BINTI RUHAZAT", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SALMIAH BINTI SARMAN", 'email' => 'salmiah@utmspace.edu.my', 'password' => Hash::make('750513015586')]);
        DB::table('staff')->insert(['name' => "SALMIAH BINTI SARMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD ZAKI BIN ABDULLAH ", 'email' => 'zaki@utmspace.edu.my', 'password' => Hash::make('881116065221')]);
        DB::table('staff')->insert(['name' => "MOHD ZAKI BIN ABDULLAH ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MARIAM BT JAMALUDIN", 'email' => 'mariam@utmspace.edu.my', 'password' => Hash::make('890130235404')]);
        DB::table('staff')->insert(['name' => "MARIAM BT JAMALUDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURAZLIN BINTI AZAN", 'email' => 'nurazlin@utmspace.edu.my', 'password' => Hash::make('890329665022')]);
        DB::table('staff')->insert(['name' => "NURAZLIN BINTI AZAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMAD KHALIDI BIN KHAIRUL ANUAR", 'email' => 'khalidi@utmspace.edu.my', 'password' => Hash::make('890921015117')]);
        DB::table('staff')->insert(['name' => "MUHAMAD KHALIDI BIN KHAIRUL ANUAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ABD HAFIZ BIN ABD AZIZ", 'email' => 'hafiz@utmspace.edu.my', 'password' => Hash::make('841219105461')]);
        DB::table('staff')->insert(['name' => "ABD HAFIZ BIN ABD AZIZ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SYED MUHAMMAD BIN SYED MANSOR", 'email' => 's.muhammad@utmspace.edu.my', 'password' => Hash::make('860530235625')]);
        DB::table('staff')->insert(['name' => "SYED MUHAMMAD BIN SYED MANSOR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ARIFFUDDIN BIN YUSOFF ", 'email' => 'ariffuddin@utmspace.edu.my', 'password' => Hash::make('840212035179')]);
        DB::table('staff')->insert(['name' => "ARIFFUDDIN BIN YUSOFF ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "JEFFRI SEM BIN MOHAMAD SALLEH", 'email' => 'jeffrims@utmspace.edu.my', 'password' => Hash::make('751111145235')]);
        DB::table('staff')->insert(['name' => "JEFFRI SEM BIN MOHAMAD SALLEH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMAD NAZRI BIN OSMAN ", 'email' => 'mnazri@utmspace.edu.my', 'password' => Hash::make('830414145529')]);
        DB::table('staff')->insert(['name' => "MOHAMAD NAZRI BIN OSMAN ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD HASMANUDDIN BIN ISMAIL ", 'email' => ' hasmanuddin@utmspace.edu.my', 'password' => Hash::make('870520065107')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD HASMANUDDIN BIN ISMAIL ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD RAHIMAN BIN JUNOH @ YUNUS", 'email' => 'rahiman@utmspace.edu.my', 'password' => Hash::make('860718295435')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD RAHIMAN BIN JUNOH @ YUNUS", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOOR SURIATI BINTI MAMAT ", 'email' => 'nsuriati@utmspace.edu.my', 'password' => Hash::make('850922115324')]);
        DB::table('staff')->insert(['name' => "NOOR SURIATI BINTI MAMAT ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SUZANA BT HAMZAH", 'email' => 'suzana@utmspace.edu.my', 'password' => Hash::make('711111055516')]);
        DB::table('staff')->insert(['name' => "SUZANA BT HAMZAH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "FURIZAN BIN ADNAN ", 'email' => 'furizan@utmspace.edu.my', 'password' => Hash::make('830925025609')]);
        DB::table('staff')->insert(['name' => "FURIZAN BIN ADNAN ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "FAHMI BIN AB AZIZ", 'email' => 'fahmiaziz@utmspace.edu.my', 'password' => Hash::make('841007045073')]);
        DB::table('staff')->insert(['name' => "FAHMI BIN AB AZIZ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "Norhayati Bt Alias", 'email' => 'norhayati@spaceutm.edu.my', 'password' => Hash::make('620318055130')]);
        DB::table('staff')->insert(['name' => "Norhayati Bt Alias", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "FADHLINA ILYANI BINTI OMAR ", 'email' => ' ilyani@utmspace.edu.my', 'password' => Hash::make('830812015586')]);
        DB::table('staff')->insert(['name' => "FADHLINA ILYANI BINTI OMAR ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "HARLINA BINTI ABDULLAH @ ABD. HALIM ", 'email' => 'lina@utmspace.edu.my', 'password' => Hash::make('810406115102')]);
        DB::table('staff')->insert(['name' => "HARLINA BINTI ABDULLAH @ ABD. HALIM ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD ARIZAN BIN MD. BAKRI ", 'email' => 'arizan.kl@utm.my', 'password' => Hash::make('810920036095')]);
        DB::table('staff')->insert(['name' => "MOHD ARIZAN BIN MD. BAKRI ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD AZRI BIN IBRAHIM ", 'email' => 'mazri.kl@utm.my', 'password' => Hash::make('820110145723')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD AZRI BIN IBRAHIM ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "RAFIZAH BINTI RAUF", 'email' => 'fiza@ic.utm.my', 'password' => Hash::make('851103015148')]);
        DB::table('staff')->insert(['name' => "RAFIZAH BINTI RAUF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SHAMSUYANI BINTI MISNAM ", 'email' => 'shamsuyani@ic.utm.my', 'password' => Hash::make('780401016434')]);
        DB::table('staff')->insert(['name' => "SHAMSUYANI BINTI MISNAM ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMAD AZRAI BIN MOHAMAD JUNID ", 'email' => ' m.azrai@utmspace.edu.my', 'password' => Hash::make('850105145291')]);
        DB::table('staff')->insert(['name' => "MOHAMAD AZRAI BIN MOHAMAD JUNID ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD KHAIRUL LUFTI BIN AMAT MUSTAJAB", 'email' => 'mklufti@utmspace.edu.my', 'password' => Hash::make('801105145039')]);
        DB::table('staff')->insert(['name' => "MOHD KHAIRUL LUFTI BIN AMAT MUSTAJAB", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SAIFUL RAHMAN BIN ABDUL RAZAK ", 'email' => 'srahman.kl@utm.my', 'password' => Hash::make('820731086121')]);
        DB::table('staff')->insert(['name' => "SAIFUL RAHMAN BIN ABDUL RAZAK ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SHAMIR NAWAWI BIN NASARUDDIN ", 'email' => ' shamir@utmspace.edu.my', 'password' => Hash::make('820924145511')]);
        DB::table('staff')->insert(['name' => "SHAMIR NAWAWI BIN NASARUDDIN ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "HASIBAH BINTI YUSOF", 'email' => 'hasibah.kl@utm.my', 'password' => Hash::make('690904105042')]);
        DB::table('staff')->insert(['name' => "HASIBAH BINTI YUSOF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORHASHIMAH BINTI AWANG", 'email' => 'norhashimah@ic.utm.my', 'password' => Hash::make('621209085706')]);
        DB::table('staff')->insert(['name' => "NORHASHIMAH BINTI AWANG", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL ZAHILA BINTI MOHD AJI", 'email' => 'zahila@ic.utm.my', 'password' => Hash::make('801007055048')]);
        DB::table('staff')->insert(['name' => "NURUL ZAHILA BINTI MOHD AJI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SARAH BINTI MOHD ALI ", 'email' => 'sarah.kl@utm.my', 'password' => Hash::make('791030085986')]);
        DB::table('staff')->insert(['name' => "SARAH BINTI MOHD ALI ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SUZZIANA BINTI JOHARI", 'email' => 'suzziana.kl@utm.my', 'password' => Hash::make('800916015436')]);
        DB::table('staff')->insert(['name' => "SUZZIANA BINTI JOHARI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ROSFADILAH BINTI OTHMAN", 'email' => 'rosfadilah@utmspace.edu.my', 'password' => Hash::make('870607035568')]);
        DB::table('staff')->insert(['name' => "ROSFADILAH BINTI OTHMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "HAZLY BIN JA\'APAR ", 'email' => 'hazly.kl@utm.my', 'password' => Hash::make('771119016137')]);
        DB::table('staff')->insert(['name' => "HAZLY BIN JA\'APAR ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORHAYATI BINTI KAMALUDIN ", 'email' => 'norhayatik.kl@utm.my', 'password' => Hash::make('860722335698')]);
        DB::table('staff')->insert(['name' => "NORHAYATI BINTI KAMALUDIN ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "RIDUAN BIN ABDUL RASHID ", 'email' => 'riduan.kl@utm.my', 'password' => Hash::make('820624145827')]);
        DB::table('staff')->insert(['name' => "RIDUAN BIN ABDUL RASHID ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SHAZULI AZROEL BIN SAPINGI ", 'email' => 'shazuli.kl@utm.my', 'password' => Hash::make('830512145469')]);
        DB::table('staff')->insert(['name' => "SHAZULI AZROEL BIN SAPINGI ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "Siti Ummul Zalikha Binti Mohd Zali", 'email' => 'zalikhaz@utmspace.edu.my', 'password' => Hash::make('871029565464')]);
        DB::table('staff')->insert(['name' => "Siti Ummul Zalikha Binti Mohd Zali", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI ZALEHA BINTI MUSTAPA ", 'email' => 'zaleha@ic.utm.my', 'password' => Hash::make('781008065410')]);
        DB::table('staff')->insert(['name' => "SITI ZALEHA BINTI MUSTAPA ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ZAILIS BIN ABU BAKAR", 'email' => 'zailis@ic.utm.my', 'password' => Hash::make('800921055133')]);
        DB::table('staff')->insert(['name' => "ZAILIS BIN ABU BAKAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ZURIK AZAHAM BIN ARIS ", 'email' => 'zurik@ic.utm.my', 'password' => Hash::make('750107036365')]);
        DB::table('staff')->insert(['name' => "ZURIK AZAHAM BIN ARIS ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL NADIA BINTI AZEHA", 'email' => 'nadia@utmspace.edu.my', 'password' => Hash::make('900811015446')]);
        DB::table('staff')->insert(['name' => "NURUL NADIA BINTI AZEHA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI HABIBAH BINTI SA'ABAN", 'email' => 'habibah@utmspace.edu.my', 'password' => Hash::make('860814236398')]);
        DB::table('staff')->insert(['name' => "SITI HABIBAH BINTI SA'ABAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR FADHILAH BINTI MD SALLEH", 'email' => 'nfadhilah@utmspace.edu.my', 'password' => Hash::make('870617015544')]);
        DB::table('staff')->insert(['name' => "NUR FADHILAH BINTI MD SALLEH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "UNGKU AMIRAH BINTI UNGKU MOHAMAD", 'email' => 'amirah@utmspace.edu.my', 'password' => Hash::make('880220235206')]);
        DB::table('staff')->insert(['name' => "UNGKU AMIRAH BINTI UNGKU MOHAMAD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD ROSLYZAM BIN ABD. RAFI", 'email' => 'mroslyzam@utmspace.edu.my', 'password' => Hash::make('761121016719')]);
        DB::table('staff')->insert(['name' => "MOHD ROSLYZAM BIN ABD. RAFI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ABDULLAH SHAAKIR BIN ABDUL HALIM", 'email' => 'shaakir@utmspace.edu.my', 'password' => Hash::make('861226915065')]);
        DB::table('staff')->insert(['name' => "ABDULLAH SHAAKIR BIN ABDUL HALIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MARIA BINTI AB HAMID", 'email' => 'mariahamid@utmspace.edu.my', 'password' => Hash::make('700527015020')]);
        DB::table('staff')->insert(['name' => "MARIA BINTI AB HAMID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR HIDAYAH BINTI RUSLAN", 'email' => 'hidayah@utmspace.edu.my', 'password' => Hash::make('880517045040')]);
        DB::table('staff')->insert(['name' => "NUR HIDAYAH BINTI RUSLAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI NURASYIKIN BINTI ABDUL JALIL", 'email' => 'nurasyikin@utmspace.edu.my', 'password' => Hash::make('880621235434')]);
        DB::table('staff')->insert(['name' => "SITI NURASYIKIN BINTI ABDUL JALIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD AMARUDDIN B. HASSAN", 'email' => 'amarudin@utmspace.edu.my', 'password' => Hash::make('890626015827')]);
        DB::table('staff')->insert(['name' => "MOHD AMARUDDIN B. HASSAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR FATIEHA BT ABDUL RAHMAN", 'email' => 'nurfatieha@utmspace.edu.my', 'password' => Hash::make('860903236568')]);
        DB::table('staff')->insert(['name' => "NUR FATIEHA BT ABDUL RAHMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "UMMI SYAHIDAH BINTI MANAF", 'email' => 'ummi@utmspace.edu.my', 'password' => Hash::make('820926035172')]);
        DB::table('staff')->insert(['name' => "UMMI SYAHIDAH BINTI MANAF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SHARIFAH AJLAA BINTI SD. ZULKIFLI", 'email' => 'ajlaa@utmspace.edu.my', 'password' => Hash::make('850623065208')]);
        DB::table('staff')->insert(['name' => "SHARIFAH AJLAA BINTI SD. ZULKIFLI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD NOOR AZLIZAN BIN SENIN", 'email' => 'azlizan@utmspace.edu.my', 'password' => Hash::make('840623015711')]);
        DB::table('staff')->insert(['name' => "MOHD NOOR AZLIZAN BIN SENIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD FAZLI BIN MOHD ISA", 'email' => 'mfazli@utmspace.edu.my', 'password' => Hash::make('891212015995')]);
        DB::table('staff')->insert(['name' => "MOHD FAZLI BIN MOHD ISA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD KAMALUDIN BIN MOHD AREAF", 'email' => 'kamaludin@utmspace.edu.my', 'password' => Hash::make('850213086081')]);
        DB::table('staff')->insert(['name' => "MOHD KAMALUDIN BIN MOHD AREAF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MASHANIDA BINTI MOHAMAD MAZALAN", 'email' => 'mashanida@utmspace.edu.my', 'password' => Hash::make('780219016120')]);
        DB::table('staff')->insert(['name' => "MASHANIDA BINTI MOHAMAD MAZALAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "TENGKU SYAZA BINTI TENGKU ABD. HALIM", 'email' => 'syaza@utmspace.edu.my', 'password' => Hash::make('900115016728')]);
        DB::table('staff')->insert(['name' => "TENGKU SYAZA BINTI TENGKU ABD. HALIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD SAIFUL AL AHADI BIN ROSLI ", 'email' => 'saiful@spaceutm.edu.my', 'password' => Hash::make('900408016529')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD SAIFUL AL AHADI BIN ROSLI ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ZULRAWANDIE BIN ZULKIFLI", 'email' => 'zulrawandie@utmspace.edu.my', 'password' => Hash::make('851201035185')]);
        DB::table('staff')->insert(['name' => "ZULRAWANDIE BIN ZULKIFLI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "WAN NURUL ILLIANA BINTI ZULKAFLI", 'email' => 'wnilliana@gmail.com', 'password' => Hash::make('870310065694')]);
        DB::table('staff')->insert(['name' => "WAN NURUL ILLIANA BINTI ZULKAFLI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SUHANA BINTI ISMAIL ", 'email' => 'suhana@utmspace.edu.my', 'password' => Hash::make('850330105288')]);
        DB::table('staff')->insert(['name' => "SUHANA BINTI ISMAIL ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MADIHAH BINTI MD FADIL", 'email' => 'madihah@utmspace.edu.my', 'password' => Hash::make('800828065126')]);
        DB::table('staff')->insert(['name' => "MADIHAH BINTI MD FADIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "KARIMAH BINTI MD FADIL", 'email' => 'karimah@utmspace.edu.my', 'password' => Hash::make('800828065118')]);
        DB::table('staff')->insert(['name' => "KARIMAH BINTI MD FADIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD FIRDAUS BIN HAMIS ", 'email' => 'm_firdaus@utmspace.edu.my', 'password' => Hash::make('820617145263')]);
        DB::table('staff')->insert(['name' => "MOHD FIRDAUS BIN HAMIS ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "RATI RADIYANA BINTI RAZALI", 'email' => 'radiyana@utmspace.edu.my', 'password' => Hash::make('840501105268')]);
        DB::table('staff')->insert(['name' => "RATI RADIYANA BINTI RAZALI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORSHIDAH BINTI MOHAMAD", 'email' => 'norshidah@utmspace.edu.my', 'password' => Hash::make('840918015540')]);
        DB::table('staff')->insert(['name' => "NORSHIDAH BINTI MOHAMAD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ROZLINDA BINTI MOHD RUSLAN", 'email' => 'rozlinda@utmspace.edu.my', 'password' => Hash::make('841121145502')]);
        DB::table('staff')->insert(['name' => "ROZLINDA BINTI MOHD RUSLAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMAD HAFIZ BIN ISMAIL", 'email' => 'hafiz.ismail@utmspace.edu.my', 'password' => Hash::make('890710075339')]);
        DB::table('staff')->insert(['name' => "MUHAMAD HAFIZ BIN ISMAIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR LIYANA NAJWA BINTI NOR AZMAN", 'email' => 'najwa@utmspace.edu.my', 'password' => Hash::make('890626145226')]);
        DB::table('staff')->insert(['name' => "NUR LIYANA NAJWA BINTI NOR AZMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SALINA BINTI RAMLI", 'email' => 'salinaramli@utmspace.edu.my', 'password' => Hash::make('820610145148')]);
        DB::table('staff')->insert(['name' => "SALINA BINTI RAMLI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "HASLIZA BINTI HUSIN @ AWI", 'email' => 'hasliza@utmspace.edu.my', 'password' => Hash::make('790813115454')]);
        DB::table('staff')->insert(['name' => "HASLIZA BINTI HUSIN @ AWI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "TS. RAJA PUTRI MELISSA BINTI RAJA MUSTAFFA", 'email' => 'melissa@utmspace.edu.my', 'password' => Hash::make('830811105950')]);
        DB::table('staff')->insert(['name' => "TS. RAJA PUTRI MELISSA BINTI RAJA MUSTAFFA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "DIYANA NABILAH BINTI MD. BURHAN", 'email' => 'diyana@utmspace.edu.my', 'password' => Hash::make('871216145764')]);
        DB::table('staff')->insert(['name' => "DIYANA NABILAH BINTI MD. BURHAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOORAZIZI BIN ABU BAKAR", 'email' => 'azizi@utmspace.edu.my', 'password' => Hash::make('890518045017')]);
        DB::table('staff')->insert(['name' => "NOORAZIZI BIN ABU BAKAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "TS. ROSMIZA BINTI AWANG NOH", 'email' => 'rosmiza@utmspace.edu.my', 'password' => Hash::make('790308035242')]);
        DB::table('staff')->insert(['name' => "TS. ROSMIZA BINTI AWANG NOH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SAYANI BINTI SABRAN", 'email' => 'sayani@utmspace.edu.my', 'password' => Hash::make('820227015578')]);
        DB::table('staff')->insert(['name' => "SAYANI BINTI SABRAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURSAFINAZ BINTI JOHANI", 'email' => 'safinaz@utmspace.edu.my', 'password' => Hash::make('910320016056')]);
        DB::table('staff')->insert(['name' => "NURSAFINAZ BINTI JOHANI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR AIN SYAHIDA BINTI MOHD SAUTI", 'email' => 'nsyahida@utmspace.edu.my', 'password' => Hash::make('871018295470')]);
        DB::table('staff')->insert(['name' => "NUR AIN SYAHIDA BINTI MOHD SAUTI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMAD HELMIE BIN SAAPEE ", 'email' => 'helmie@utmspace.edu.my', 'password' => Hash::make('880229015189')]);
        DB::table('staff')->insert(['name' => "MUHAMAD HELMIE BIN SAAPEE ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "FARASDIANNA BINTI IBRAHIM ", 'email' => 'diana@utmspace.edu.my', 'password' => Hash::make('850711035586')]);
        DB::table('staff')->insert(['name' => "FARASDIANNA BINTI IBRAHIM ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD SHUKRI BIN BAKAR", 'email' => 'shukri@utmspace.edu.my', 'password' => Hash::make('690222025109')]);
        DB::table('staff')->insert(['name' => "MOHD SHUKRI BIN BAKAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "IDRIS BIN MAT ZAIN ", 'email' => ' idris@utmspace.edu.my', 'password' => Hash::make('700903075685')]);
        DB::table('staff')->insert(['name' => "IDRIS BIN MAT ZAIN ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ROOSLAN BIN YUSUF ", 'email' => 'rooslan@utmspace.edu.my', 'password' => Hash::make('680731086533')]);
        DB::table('staff')->insert(['name' => "ROOSLAN BIN YUSUF ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "DR. INTAN AFIDA BINTI MOHAMAD AMIN", 'email' => 'afida@utmspace.edu.my', 'password' => Hash::make('830225715158')]);
        DB::table('staff')->insert(['name' => "DR. INTAN AFIDA BINTI MOHAMAD AMIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "HAMZAH BIN SAIDBUN", 'email' => 'hamzah@utmspace.edu.my', 'password' => Hash::make('690912025851')]);
        DB::table('staff')->insert(['name' => "HAMZAH BIN SAIDBUN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOOR ASMA BINTI HUSAIN", 'email' => 'noorasma@utmspace.edu.my', 'password' => Hash::make('860830235248')]);
        DB::table('staff')->insert(['name' => "NOOR ASMA BINTI HUSAIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NABILAH BINTI YUSOFF", 'email' => 'nabilah@utmspace.edu.my', 'password' => Hash::make('880904355540')]);
        DB::table('staff')->insert(['name' => "NABILAH BINTI YUSOFF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "REDZUAN BIN ABDUL RAHMAN", 'email' => 'redzuan@utmspace.edu.my', 'password' => Hash::make('720923025341')]);
        DB::table('staff')->insert(['name' => "REDZUAN BIN ABDUL RAHMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOR SYAZIANA BINTI MOHD RADZI", 'email' => 'norsyaziana@utmspace.edu.my', 'password' => Hash::make('840811146110')]);
        DB::table('staff')->insert(['name' => "NOR SYAZIANA BINTI MOHD RADZI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD DANIAL ANUAR BIN SULAIMAN ", 'email' => 'anuar@utmspace.edu.my', 'password' => Hash::make('870807385095')]);
        DB::table('staff')->insert(['name' => "MOHD DANIAL ANUAR BIN SULAIMAN ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "TS. ERNI SYUHADA BINTI MAZWIL ISHAN", 'email' => 'erni@utmspace.edu.my / esyuhada@utm.my', 'password' => Hash::make('860709385666')]);
        DB::table('staff')->insert(['name' => "TS. ERNI SYUHADA BINTI MAZWIL ISHAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "KAMARUL ISYAK BIN MD TALIB", 'email' => 'isyak@utmspace.edu.my', 'password' => Hash::make('840411015533')]);
        DB::table('staff')->insert(['name' => "KAMARUL ISYAK BIN MD TALIB", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NAJMI BIN MOHAMED", 'email' => 'najmi@utmspace.edu.my', 'password' => Hash::make('850116015249')]);
        DB::table('staff')->insert(['name' => "NAJMI BIN MOHAMED", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD AIZI BIN ALI @ MOHD SURA ", 'email' => 'aizi@utmspace.edu.my', 'password' => Hash::make('711002015603')]);
        DB::table('staff')->insert(['name' => "MOHD AIZI BIN ALI @ MOHD SURA ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "TS. RAFIZA BINTI MOHAMED", 'email' => 'rafiza@utmspace.edu.my', 'password' => Hash::make('751214015572')]);
        DB::table('staff')->insert(['name' => "TS. RAFIZA BINTI MOHAMED", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD FARID BIN HAIRUZAMAN", 'email' => 'farid@utmspace.edu.my', 'password' => Hash::make('920904016729')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD FARID BIN HAIRUZAMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD AMAR ADLI BIN MOHAMAD SHOFFIAN ", 'email' => 'adli@utmspace.edu.my', 'password' => Hash::make('900509065565')]);
        DB::table('staff')->insert(['name' => "MOHD AMAR ADLI BIN MOHAMAD SHOFFIAN ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL HAMIZA BINTI KHIR SANI", 'email' => 'hamiza@utmspace.edu.my', 'password' => Hash::make('881023105394')]);
        DB::table('staff')->insert(['name' => "NURUL HAMIZA BINTI KHIR SANI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SHAFAWI BIN ADNAN", 'email' => 'shafawi@utmspace.edu.my', 'password' => Hash::make('690518086437')]);
        DB::table('staff')->insert(['name' => "SHAFAWI BIN ADNAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "YUSRI BIN BABA ", 'email' => 'yusri@utmspace.edu.my', 'password' => Hash::make('690317045225')]);
        DB::table('staff')->insert(['name' => "YUSRI BIN BABA ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ABD HAKKAM BIN MASRAWAN", 'email' => 'hakkam@utmspace.edu.my', 'password' => Hash::make('850617085835')]);
        DB::table('staff')->insert(['name' => "ABD HAKKAM BIN MASRAWAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR SHAMINA BINTI SAHRUDDIN ", 'email' => 'shamina@utmspace.edu.my', 'password' => Hash::make('900716145402')]);
        DB::table('staff')->insert(['name' => "NUR SHAMINA BINTI SAHRUDDIN ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SHAFILA HANI BINTI HAMDAN", 'email' => 'shafila@utmspace.edu.my', 'password' => Hash::make('860203235994')]);
        DB::table('staff')->insert(['name' => "SHAFILA HANI BINTI HAMDAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AMIRUL HUSNI BIN SHAARIN", 'email' => 'amirul@utmspace.edu.my', 'password' => Hash::make('930817016885')]);
        DB::table('staff')->insert(['name' => "AMIRUL HUSNI BIN SHAARIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR FASEHA BINTI MOHD KADIM ", 'email' => 'faseha@utmspace.edu.my', 'password' => Hash::make('880603085276')]);
        DB::table('staff')->insert(['name' => "NUR FASEHA BINTI MOHD KADIM ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ZAITON BINTI ABDUL MANAF", 'email' => 'zaiton@utmspace.edu.my', 'password' => Hash::make('650701107172')]);
        DB::table('staff')->insert(['name' => "ZAITON BINTI ABDUL MANAF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORSHARINI BINTI MOHAMAD NOH", 'email' => 'norsharini@utmspace.edu.my', 'password' => Hash::make('810711025250')]);
        DB::table('staff')->insert(['name' => "NORSHARINI BINTI MOHAMAD NOH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AZNITA HAZLINA BINTI MANSOR ", 'email' => 'aznita@utmspace.edu.my', 'password' => Hash::make('801006025170')]);
        DB::table('staff')->insert(['name' => "AZNITA HAZLINA BINTI MANSOR ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD FARHAN BIN DARUS", 'email' => 'farhan@utmspace.edu.my', 'password' => Hash::make('900801025587')]);
        DB::table('staff')->insert(['name' => "MOHD FARHAN BIN DARUS", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD FAHIM BIN ALI", 'email' => 'fahim@utmspace.edu.my', 'password' => Hash::make('921111016547')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD FAHIM BIN ALI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "INTAN DIANA BINTI SIDIK", 'email' => ' intan@utmspace.edu.my', 'password' => Hash::make('871211295384')]);
        DB::table('staff')->insert(['name' => "INTAN DIANA BINTI SIDIK", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL NADHIRAH BINTI ABU BAKAR", 'email' => ' nadhirah@utmspace.edu.my', 'password' => Hash::make('870801145568')]);
        DB::table('staff')->insert(['name' => "NURUL NADHIRAH BINTI ABU BAKAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "Rosniza Binti Mohd Rozali", 'email' => 'rosenyza88@yahoo.com', 'password' => Hash::make('880126065554')]);
        DB::table('staff')->insert(['name' => "Rosniza Binti Mohd Rozali", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SYED MUZAFAR BIN SYED ISMAIL", 'email' => 'muzafar@utmspace.edu.my', 'password' => Hash::make('781118086087')]);
        DB::table('staff')->insert(['name' => "SYED MUZAFAR BIN SYED ISMAIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURHIDAYAH BINTI SAID", 'email' => 'nurhidayah.said@utmspace.edu.my', 'password' => Hash::make('870629065186')]);
        DB::table('staff')->insert(['name' => "NURHIDAYAH BINTI SAID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI NURSHALLI BINTI SUAIDI", 'email' => 'nurshalli@utmspace.edu.my', 'password' => Hash::make('880607565314')]);
        DB::table('staff')->insert(['name' => "SITI NURSHALLI BINTI SUAIDI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORSHIDAH BINTI ABDUL RASHID", 'email' => 'shidah@utmspace.edu.my', 'password' => Hash::make('731020086198')]);
        DB::table('staff')->insert(['name' => "NORSHIDAH BINTI ABDUL RASHID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ANIS SYAHEEDA BINTI SHUKRAN", 'email' => 'anis@utmspace.com.my', 'password' => Hash::make('840405145972')]);
        DB::table('staff')->insert(['name' => "ANIS SYAHEEDA BINTI SHUKRAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORALVINA BINTI NAZRI", 'email' => 'noralvina@utmspace.edu.my', 'password' => Hash::make('870308075068')]);
        DB::table('staff')->insert(['name' => "NORALVINA BINTI NAZRI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI FATIMAH ILANI BINTI BILYAMIN", 'email' => 'ilani@utmspace.edu.my', 'password' => Hash::make('870225295110')]);
        DB::table('staff')->insert(['name' => "SITI FATIMAH ILANI BINTI BILYAMIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MAREEAM MUNEERA BINTI MOHAMMED KASSIM", 'email' => 'mareeam@utmspace.edu.my', 'password' => Hash::make('830127145032')]);
        DB::table('staff')->insert(['name' => "MAREEAM MUNEERA BINTI MOHAMMED KASSIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "IZHARUDIN BIN JAAFAR", 'email' => 'izhar@utmspace.edu.my', 'password' => Hash::make('870511025349')]);
        DB::table('staff')->insert(['name' => "IZHARUDIN BIN JAAFAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD NAZRI BIN NORDIN", 'email' => 'mohdnazri@utmspace.edu.my', 'password' => Hash::make('890305015033')]);
        DB::table('staff')->insert(['name' => "MOHD NAZRI BIN NORDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOR IZZATI MAISARAH BINTI MOHD ZULKIFLI", 'email' => 'izzatimaisarah@utmspace.edu.my', 'password' => Hash::make('890715875036')]);
        DB::table('staff')->insert(['name' => "NOR IZZATI MAISARAH BINTI MOHD ZULKIFLI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ZALI BIN AB RAHIM ", 'email' => 'zali@utmspace.edu.my', 'password' => Hash::make('840919016609')]);
        DB::table('staff')->insert(['name' => "ZALI BIN AB RAHIM ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUNIRATUL HIDAYAH BINTI MALIKI ", 'email' => 'muniratul@utmspace.edu.my', 'password' => Hash::make('850829145254')]);
        DB::table('staff')->insert(['name' => "MUNIRATUL HIDAYAH BINTI MALIKI ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ROSNADHIRAH BINTI RAMLI", 'email' => 'rosnadhirah@utmspace.edu.my', 'password' => Hash::make('871021115370')]);
        DB::table('staff')->insert(['name' => "ROSNADHIRAH BINTI RAMLI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMMAD DZUL AZRIE BIN MOHD RUSLAN", 'email' => 'dzul@utmspace.edu.my', 'password' => Hash::make('900113085519')]);
        DB::table('staff')->insert(['name' => "MOHAMMAD DZUL AZRIE BIN MOHD RUSLAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD SASMAN BIN SAMURI", 'email' => 'msasman@utmspace.edu.my', 'password' => Hash::make('790706016573')]);
        DB::table('staff')->insert(['name' => "MOHD SASMAN BIN SAMURI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMED NAZRI BIN MAHMOOD", 'email' => 'nazrim@utmspace.edu.my', 'password' => Hash::make('851215016719')]);
        DB::table('staff')->insert(['name' => "MOHAMED NAZRI BIN MAHMOOD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMMAD HAMALI BIN ROSLAN", 'email' => 'mhamali@utmspace.edu.my', 'password' => Hash::make('911218115001')]);
        DB::table('staff')->insert(['name' => "MOHAMMAD HAMALI BIN ROSLAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AHMAD TARMIZI BIN JAAFAR", 'email' => 'tarmizi@utmspace.edu.my', 'password' => Hash::make('810310115159')]);
        DB::table('staff')->insert(['name' => "AHMAD TARMIZI BIN JAAFAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR RABBANI NADIRAH BINTI ISMAIL", 'email' => 'rabbani@utmspace.edu.my', 'password' => Hash::make('910715145880')]);
        DB::table('staff')->insert(['name' => "NUR RABBANI NADIRAH BINTI ISMAIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MAHMMOD BIN MHD AYUB", 'email' => 'mahmmod@utmspace.edu.my', 'password' => Hash::make('840426015405')]);
        DB::table('staff')->insert(['name' => "MAHMMOD BIN MHD AYUB", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI ZULIDA BINTI MOKHTER", 'email' => 'zulida@utmspace.edu.my', 'password' => Hash::make('820820105072')]);
        DB::table('staff')->insert(['name' => "SITI ZULIDA BINTI MOKHTER", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL NAZIHAH BTE AHMAD", 'email' => 'nazihah@utmspace.edu.my', 'password' => Hash::make('890126015046')]);
        DB::table('staff')->insert(['name' => "NURUL NAZIHAH BTE AHMAD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SHAHRULNIZAM BIN MOHAMAD ALI", 'email' => 'shah@utmspace.edu.my', 'password' => Hash::make('850405015245')]);
        DB::table('staff')->insert(['name' => "SHAHRULNIZAM BIN MOHAMAD ALI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMAD IZWAN BIN ISMAIL", 'email' => 'izwan.ismail@utmspace.edu.my', 'password' => Hash::make('921116016423')]);
        DB::table('staff')->insert(['name' => "MUHAMAD IZWAN BIN ISMAIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "BAHARUNIZAM BIN BAHARIN", 'email' => 'baha@utmspace.edu.my', 'password' => Hash::make('920214015921')]);
        DB::table('staff')->insert(['name' => "BAHARUNIZAM BIN BAHARIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "HASLINA BINTI DAYAN", 'email' => 'haslina@utmspace.edu.my', 'password' => Hash::make('921201086282')]);
        DB::table('staff')->insert(['name' => "HASLINA BINTI DAYAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD HAFIZ BIN SELAMAN @ SULAIMAN", 'email' => 'mohdhafiz@utmspace.edu.my', 'password' => Hash::make('861203335033')]);
        DB::table('staff')->insert(['name' => "MOHD HAFIZ BIN SELAMAN @ SULAIMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SHARUL AZLAN BIN BAHARUDDIN", 'email' => 'sharul_azlan@hotmail.com', 'password' => Hash::make('880116145569')]);
        DB::table('staff')->insert(['name' => "SHARUL AZLAN BIN BAHARUDDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD SYAFIQ BIN ABDUL MAJID", 'email' => 'msyafiq@utmspace.edu.my', 'password' => Hash::make('870524565635')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD SYAFIQ BIN ABDUL MAJID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "FATIN EDDAYU BINTI AZHAN", 'email' => 'fatineddayu@utmspace.edu.my', 'password' => Hash::make('910523025374')]);
        DB::table('staff')->insert(['name' => "FATIN EDDAYU BINTI AZHAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ENNY EZRIANA BINTI IHSAN", 'email' => 'enny@utmspace.edu.my', 'password' => Hash::make('851212075166')]);
        DB::table('staff')->insert(['name' => "ENNY EZRIANA BINTI IHSAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "IRA IRIANI BINTI MAWARDI", 'email' => 'ira@utmspace.edu.my', 'password' => Hash::make('880531565296')]);
        DB::table('staff')->insert(['name' => "IRA IRIANI BINTI MAWARDI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD FIRDAUS BIN MOHD GHAZALI", 'email' => 'mfirdaus@utmspace.edu.my', 'password' => Hash::make('850107086723')]);
        DB::table('staff')->insert(['name' => "MOHD FIRDAUS BIN MOHD GHAZALI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "KHAIRIL AZUAN BIN KHAIRUDDIN", 'email' => 'khairilazuan@utmspace.edu.my', 'password' => Hash::make('840510145691')]);
        DB::table('staff')->insert(['name' => "KHAIRIL AZUAN BIN KHAIRUDDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMAD IZWANDY BIN MD NOOR", 'email' => 'izwandy@utmspace.edu.my', 'password' => Hash::make('931126015917')]);
        DB::table('staff')->insert(['name' => "MOHAMAD IZWANDY BIN MD NOOR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD HAIRI BIN ALMOKHLIS", 'email' => ' hairi@utmspace.edu.my', 'password' => Hash::make('911026145249')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD HAIRI BIN ALMOKHLIS", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ISKANDAR ZULKARNAIN BIN NORIZAN", 'email' => ' iskandar@utmspace.edu.my', 'password' => Hash::make('921114145299')]);
        DB::table('staff')->insert(['name' => "ISKANDAR ZULKARNAIN BIN NORIZAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SUHAILA BINTI MAHMUD", 'email' => 'suhaila@utmspace.edu.my', 'password' => Hash::make('890304015904')]);
        DB::table('staff')->insert(['name' => "SUHAILA BINTI MAHMUD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MEOR MOHD FADZLI BIN ZAHID", 'email' => 'meor@utmspace.edu.my', 'password' => Hash::make('800202085475')]);
        DB::table('staff')->insert(['name' => "MEOR MOHD FADZLI BIN ZAHID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "RUZANA BINTI ISHAK ", 'email' => 'ruzana@utmspace.edu.my', 'password' => Hash::make('690321095014')]);
        DB::table('staff')->insert(['name' => "RUZANA BINTI ISHAK ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SYED MUHAMMAD HILMI BIN SYED YAHYA", 'email' => 'syed@utmspace.edu.my', 'password' => Hash::make('910303045023')]);
        DB::table('staff')->insert(['name' => "SYED MUHAMMAD HILMI BIN SYED YAHYA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "FARHAN KHAIR BIN FAWAZUL KHAIR", 'email' => 'fkhair@utmspace.edu.my', 'password' => Hash::make('860929915059')]);
        DB::table('staff')->insert(['name' => "FARHAN KHAIR BIN FAWAZUL KHAIR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD SHUIB BIN ABDUL RAZAK", 'email' => 'shuib@utmspace.edu.my', 'password' => Hash::make('830429025829')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD SHUIB BIN ABDUL RAZAK", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "LIYANA 'ADILAH BINTI MUHAMAD SAAD", 'email' => 'liyana@utmspace.edu.my', 'password' => Hash::make('910507015950')]);
        DB::table('staff')->insert(['name' => "LIYANA 'ADILAH BINTI MUHAMAD SAAD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMAD HAFIIDH BIN ZAITON@ZAINAL", 'email' => 'hafiidh@utmspace.edu.my', 'password' => Hash::make('910927146463')]);
        DB::table('staff')->insert(['name' => "MOHAMAD HAFIIDH BIN ZAITON@ZAINAL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MAZUIN BINTI HAMZAH", 'email' => ' mazuin@utmspace.edu.my', 'password' => Hash::make('820107115080')]);
        DB::table('staff')->insert(['name' => "MAZUIN BINTI HAMZAH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHD SAZLIE BIN IBRAHIM", 'email' => 'sazlie@utmspace.edu.my', 'password' => Hash::make('850112036077')]);
        DB::table('staff')->insert(['name' => "MUHD SAZLIE BIN IBRAHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI MUSLEHA BINTI AHSAN", 'email' => ' musleha@utmspace.edu.my', 'password' => Hash::make('841126146088')]);
        DB::table('staff')->insert(['name' => "SITI MUSLEHA BINTI AHSAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AHMAD SYAHIR BIN AMINUDIN", 'email' => ' syahir@utmspace.edu.my', 'password' => Hash::make('880112145801')]);
        DB::table('staff')->insert(['name' => "AHMAD SYAHIR BIN AMINUDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ISKANDAR ZULKHEEDIR BIN NORIZAN", 'email' => 'zool_kheedir@yahoo.com', 'password' => Hash::make('931001146251')]);
        DB::table('staff')->insert(['name' => "ISKANDAR ZULKHEEDIR BIN NORIZAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOOR SUHAIDA BINTI AB JALAL", 'email' => ' suhaida@utmspace.edu.my', 'password' => Hash::make('831213115344')]);
        DB::table('staff')->insert(['name' => "NOOR SUHAIDA BINTI AB JALAL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL ASIKIN BINTI JAAFAR", 'email' => 'nurulasikin@utmspace.edu.my', 'password' => Hash::make('880312065478')]);
        DB::table('staff')->insert(['name' => "NURUL ASIKIN BINTI JAAFAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD SHAHRUL FAZREN BIN MISLAN", 'email' => ' fazren@utmspace.edu.my', 'password' => Hash::make('920124086689')]);
        DB::table('staff')->insert(['name' => "MOHD SHAHRUL FAZREN BIN MISLAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOOR ATHIRAH BINTI MD ARIFF", 'email' => 'nathirah@utmspace.edu.my', 'password' => Hash::make('910412085622')]);
        DB::table('staff')->insert(['name' => "NOOR ATHIRAH BINTI MD ARIFF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "HASRUL HAFEEZ BIN HASIM", 'email' => ' hasrul@utmspace.edu.my', 'password' => Hash::make('851002105427')]);
        DB::table('staff')->insert(['name' => "HASRUL HAFEEZ BIN HASIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOR FARHANI BINTI SAIDINA", 'email' => 'norfarhani@utmspace.edu.my', 'password' => Hash::make('920915016708')]);
        DB::table('staff')->insert(['name' => "NOR FARHANI BINTI SAIDINA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AMIRA RABBIYATUL ADAWIYAH BINTI MOKHTAR", 'email' => ' rabbiyatul@utmspace.edu.my', 'password' => Hash::make('920815115186')]);
        DB::table('staff')->insert(['name' => "AMIRA RABBIYATUL ADAWIYAH BINTI MOKHTAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD FAIZAL BIN MOHD YUSOF", 'email' => ' mohdfaizal@utmspace.edu.my', 'password' => Hash::make('830202015685')]);
        DB::table('staff')->insert(['name' => "MOHD FAIZAL BIN MOHD YUSOF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD SAUFI BIN RAMLI", 'email' => 'saufi@utmspace.edu.my', 'password' => Hash::make('860814236531')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD SAUFI BIN RAMLI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR HASYILA BINTI HASHIM ", 'email' => 'hasyila@ic.utm.my', 'password' => Hash::make('750104036474')]);
        DB::table('staff')->insert(['name' => "NUR HASYILA BINTI HASHIM ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MARSYIANA BINTI AHMAD MURAD", 'email' => 'marsyiana@utmspace.edu.my', 'password' => Hash::make('750422125704')]);
        DB::table('staff')->insert(['name' => "MARSYIANA BINTI AHMAD MURAD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD YUSOF BIN JAMIL", 'email' => ' muhammadyusof@utmspace.edu.my', 'password' => Hash::make('890424146415')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD YUSOF BIN JAMIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ABDUL AZIM BIN MOHAMED HASHIM", 'email' => ' abdulazim@utmspace.edu.my', 'password' => Hash::make('831207075729')]);
        DB::table('staff')->insert(['name' => "ABDUL AZIM BIN MOHAMED HASHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AHMAD KAMAL BIN MASDOI", 'email' => 'kamal@utmspace.edu.my', 'password' => Hash::make('780116085895')]);
        DB::table('staff')->insert(['name' => "AHMAD KAMAL BIN MASDOI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "KHAIRUNISHA SAFWANA BINTI JUMAA ROSIDI", 'email' => 'khairunisha@utmspace.edu.my', 'password' => Hash::make('890721015892')]);
        DB::table('staff')->insert(['name' => "KHAIRUNISHA SAFWANA BINTI JUMAA ROSIDI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMMAD FAKHRUL SYAH BIN FAIDZIL", 'email' => 'fakhrul@utmspace.edu.my', 'password' => Hash::make('930207015949')]);
        DB::table('staff')->insert(['name' => "MOHAMMAD FAKHRUL SYAH BIN FAIDZIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL AMIRA BINTI BAHRI", 'email' => 'mirabahri08@gmail.com', 'password' => Hash::make('900821015538')]);
        DB::table('staff')->insert(['name' => "NURUL AMIRA BINTI BAHRI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ZAIMI ERAWAN BIN BUJANG", 'email' => 'zaimi@utmspace.edu.my', 'password' => Hash::make('910831016787')]);
        DB::table('staff')->insert(['name' => "ZAIMI ERAWAN BIN BUJANG", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD FAZREN FARHAN BIN ABD AZIZ", 'email' => 'fazrenfarhan@utmspace.edu.my', 'password' => Hash::make('911102665167')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD FAZREN FARHAN BIN ABD AZIZ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI AZYRIMAH BINTI ABD RAHIM", 'email' => 'azyrimah@utmspace.edu.my', 'password' => Hash::make('870302015048')]);
        DB::table('staff')->insert(['name' => "SITI AZYRIMAH BINTI ABD RAHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "FATHULLAH ZAIM BIN ABDUL SALIM", 'email' => ' fathullah@utmspace.edu.my', 'password' => Hash::make('890608146145')]);
        DB::table('staff')->insert(['name' => "FATHULLAH ZAIM BIN ABDUL SALIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD HANAFI BIN SURATMAN", 'email' => 'hanafi.suratman@utmspace.edu.my', 'password' => Hash::make('810501015011')]);
        DB::table('staff')->insert(['name' => "MOHD HANAFI BIN SURATMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ZAMRIN BIN HJ MD SAID", 'email' => 'zamrin@utmspace.edu.my', 'password' => Hash::make('720323045015')]);
        DB::table('staff')->insert(['name' => "ZAMRIN BIN HJ MD SAID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD IZHAM FAHMIE BIN OTHMAN", 'email' => 'izham@utmspace.edu.my', 'password' => Hash::make('850619146187')]);
        DB::table('staff')->insert(['name' => "MOHD IZHAM FAHMIE BIN OTHMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ABD HADI FAHIMI BIN MOHAMED", 'email' => 'hadi@utmspace.edu.my', 'password' => Hash::make('790604035263')]);
        DB::table('staff')->insert(['name' => "ABD HADI FAHIMI BIN MOHAMED", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD SHAH HARIZAN BIN MOHD SAAT ", 'email' => 'harizan@utmspace.edu.my', 'password' => Hash::make('860903385125')]);
        DB::table('staff')->insert(['name' => "MOHD SHAH HARIZAN BIN MOHD SAAT ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD RIDZA BIN MUHAMMAD ", 'email' => ' ridza@utmspace.edu.my', 'password' => Hash::make('810225145943')]);
        DB::table('staff')->insert(['name' => "MOHD RIDZA BIN MUHAMMAD ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD AZRIL BIN KADIR ", 'email' => 'azril@utmspace.edu.my', 'password' => Hash::make('830228145795')]);
        DB::table('staff')->insert(['name' => "MOHD AZRIL BIN KADIR ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD AZIZUL HADI BIN ABDUL AZIZ", 'email' => 'azizul@utmspace.edu.my', 'password' => Hash::make('820912145493')]);
        DB::table('staff')->insert(['name' => "MOHD AZIZUL HADI BIN ABDUL AZIZ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD SABRI BIN ISMAIL ", 'email' => ' sabri@utmspace.edu.my', 'password' => Hash::make('900327145185')]);
        DB::table('staff')->insert(['name' => "MOHD SABRI BIN ISMAIL ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ELLI SHUHADA BINTI SABRI", 'email' => 'elli@utmspace.edu.my', 'password' => Hash::make('760331065346')]);
        DB::table('staff')->insert(['name' => "ELLI SHUHADA BINTI SABRI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD DAUD BIN HASSAN ", 'email' => 'daud@utmspace.edu', 'password' => Hash::make('920127145381')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD DAUD BIN HASSAN ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD FADZIR BIN ABDUL MANAN ", 'email' => 'fadzir@utmspace.edu.my', 'password' => Hash::make('891012145293')]);
        DB::table('staff')->insert(['name' => "MOHD FADZIR BIN ABDUL MANAN ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORDIANA BINTI RAFIE", 'email' => 'nordiana@utmspace.edu.my', 'password' => Hash::make('930923086078')]);
        DB::table('staff')->insert(['name' => "NORDIANA BINTI RAFIE", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ABD RAZAK BIN ABD MAJID", 'email' => 'razak@utmspace.edu.my', 'password' => Hash::make('891103015785')]);
        DB::table('staff')->insert(['name' => "ABD RAZAK BIN ABD MAJID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "FAHMIE BIN YAZID", 'email' => 'fahmie@utmspace.edu.my', 'password' => Hash::make('891001016269')]);
        DB::table('staff')->insert(['name' => "FAHMIE BIN YAZID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "IZWAYDA BINTI MD NOOR", 'email' => 'izwayda@utmspace.edu.my', 'password' => Hash::make('880626235564')]);
        DB::table('staff')->insert(['name' => "IZWAYDA BINTI MD NOOR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL SHAHIDA LAILY BINTI MAHMUD ", 'email' => 'nurul.shahida@utmspace.edu.my', 'password' => Hash::make('840809105782')]);
        DB::table('staff')->insert(['name' => "NURUL SHAHIDA LAILY BINTI MAHMUD ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "HASZRI BIN JAMALUDIN", 'email' => 'haszrijamaludin@yahoo.com', 'password' => Hash::make('880405065047')]);
        DB::table('staff')->insert(['name' => "HASZRI BIN JAMALUDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMAD IDHAM BIN ISMAIL", 'email' => 'idham.ismail@utmspace.edu.my', 'password' => Hash::make('880702045085')]);
        DB::table('staff')->insert(['name' => "MOHAMAD IDHAM BIN ISMAIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURAINI BINTI ABDUL HANIT", 'email' => 'nuraini.hanit@utmspace.edu.my', 'password' => Hash::make('911228115398')]);
        DB::table('staff')->insert(['name' => "NURAINI BINTI ABDUL HANIT", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMAD HAFIZ BIN HASHIM", 'email' => 'hafiz.hashim@utmspace.edu', 'password' => Hash::make('891210065921')]);
        DB::table('staff')->insert(['name' => "MOHAMAD HAFIZ BIN HASHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL NADIA BINTI MOHD KASIM", 'email' => 'nurul.nadia@utmspace.edu.my', 'password' => Hash::make('880722105508')]);
        DB::table('staff')->insert(['name' => "NURUL NADIA BINTI MOHD KASIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "FAEIZ ARIFTH BIN AZIZI", 'email' => 'faeiz.arifth@utmspace.edu.my', 'password' => Hash::make('880211145137')]);
        DB::table('staff')->insert(['name' => "FAEIZ ARIFTH BIN AZIZI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "IZIAN HALAH BINTI MOHD@MUDA", 'email' => 'izian.halah@utmspace.edu.my', 'password' => Hash::make('900414115654')]);
        DB::table('staff')->insert(['name' => "IZIAN HALAH BINTI MOHD@MUDA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOR SUHADA BINTI AZID", 'email' => 'nor.suhada@utmspace.edu.my', 'password' => Hash::make('890828035076')]);
        DB::table('staff')->insert(['name' => "NOR SUHADA BINTI AZID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR FADZLINA AINI BINTI MOHMAD LEHAN", 'email' => 'fadzlina.aini@utmspace.edu.my', 'password' => Hash::make('860712295442')]);
        DB::table('staff')->insert(['name' => "NUR FADZLINA AINI BINTI MOHMAD LEHAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR AULIA BINTI ROSNI", 'email' => 'nuraulia9@gmail.com', 'password' => Hash::make('880319265114')]);
        DB::table('staff')->insert(['name' => "NUR AULIA BINTI ROSNI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AINAA NAWWARAH BINTI IBRAHIM", 'email' => 'ainaa@utmspace.edu.my', 'password' => Hash::make('880531565368')]);
        DB::table('staff')->insert(['name' => "AINAA NAWWARAH BINTI IBRAHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "CHO YUN JEONG", 'email' => 'yunjeong@utmspace.edu.my', 'password' => Hash::make('M91752976')]);
        DB::table('staff')->insert(['name' => "CHO YUN JEONG", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD FAIZAL BIN MOHD YUSOF", 'email' => 'mohdfaizal@utmspace.edu.my', 'password' => Hash::make('830202015685')]);
        DB::table('staff')->insert(['name' => "MOHD FAIZAL BIN MOHD YUSOF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NAZATHULSHIMA BTE KHASIRAN", 'email' => 'nazathulshima@utmspace.edu.my', 'password' => Hash::make('910922015886')]);
        DB::table('staff')->insert(['name' => "NAZATHULSHIMA BTE KHASIRAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL HAMIZAH BINTI BAHARUDIN", 'email' => 'nurul.hamizah@utmspace.edu.my', 'password' => Hash::make('920221016316')]);
        DB::table('staff')->insert(['name' => "NURUL HAMIZAH BINTI BAHARUDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "FATIEN NAZIERA BINTI MUHAMMAD", 'email' => 'fatien@utmspace.edu.my', 'password' => Hash::make('891020035238')]);
        DB::table('staff')->insert(['name' => "FATIEN NAZIERA BINTI MUHAMMAD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NATASHA SYAFINAZ BINTI ZAKARIA", 'email' => 'Natasha@utmspace.edu.my', 'password' => Hash::make('910329015754')]);
        DB::table('staff')->insert(['name' => "NATASHA SYAFINAZ BINTI ZAKARIA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD SAMIR BIN NORDIN", 'email' => 'samir@utmspace.edu.my', 'password' => Hash::make('900201145673')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD SAMIR BIN NORDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ZAYANEE BINTI ZAINAL ABIDEN", 'email' => 'zayanee@utmspace.edu.my', 'password' => Hash::make('920702015090')]);
        DB::table('staff')->insert(['name' => "ZAYANEE BINTI ZAINAL ABIDEN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "PROF. DR. MOHD FUAAD BIN HJ. RAHMAT", 'email' => 'fuaad@utmspace.edu.my', 'password' => Hash::make('660414016461')]);
        DB::table('staff')->insert(['name' => "PROF. DR. MOHD FUAAD BIN HJ. RAHMAT", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOOR AFIQAH BINTI RUJANI", 'email' => 'noor.afiqah@utmspace.edu.my', 'password' => Hash::make('921114105828')]);
        DB::table('staff')->insert(['name' => "NOOR AFIQAH BINTI RUJANI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "PROF.MADYA SR. DR. ZAKARIA BIN MOHD YUSOF", 'email' => 'zakaria@utmspace.edu.my', 'password' => Hash::make('630403115395')]);
        DB::table('staff')->insert(['name' => "PROF.MADYA SR. DR. ZAKARIA BIN MOHD YUSOF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "TS. NIK MARIA BINTI NIK MAHAMOOD", 'email' => 'nik.maria@utmspace.edu.my', 'password' => Hash::make('720922035716')]);
        DB::table('staff')->insert(['name' => "TS. NIK MARIA BINTI NIK MAHAMOOD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR FATIN BINTI MOHD YUSOF", 'email' => 'nur.fatin@utmspace.edu.my', 'password' => Hash::make('920114145112')]);
        DB::table('staff')->insert(['name' => "NUR FATIN BINTI MOHD YUSOF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD. NUR FIRDAUS BIN JAMALUDIN", 'email' => 'firdausjamal91@gmail.com', 'password' => Hash::make('910915015239')]);
        DB::table('staff')->insert(['name' => "MOHD. NUR FIRDAUS BIN JAMALUDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD SHAFAZRIL BIN MOHD MAZLAN", 'email' => ' shafazril@utmspace.edu.my', 'password' => Hash::make('900417086529')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD SHAFAZRIL BIN MOHD MAZLAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMAD HASLIL BIN ABDUL HALIL", 'email' => 'haslil@utmspace.edu.my', 'password' => Hash::make('710701085139')]);
        DB::table('staff')->insert(['name' => "MOHAMAD HASLIL BIN ABDUL HALIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NABILAH SYAFIQAH BINTI ABDUL RAHMAN", 'email' => 'nabilahsyafiqah@utmspace.edu.my', 'password' => Hash::make('900417145592')]);
        DB::table('staff')->insert(['name' => "NABILAH SYAFIQAH BINTI ABDUL RAHMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMMAD NOR KHAIRUL ANUAR BIN OMAR", 'email' => 'norkhairul@utmspace.edu.my', 'password' => Hash::make('911001035123')]);
        DB::table('staff')->insert(['name' => "MOHAMMAD NOR KHAIRUL ANUAR BIN OMAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD HAMZAH BIN NORIZAN", 'email' => 'muhammad.hamzah@utmspace.edu.my', 'password' => Hash::make('871009405009')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD HAMZAH BIN NORIZAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD HAFIZ BIN MAT ISA", 'email' => 'mhafiz@utmspace.edu.my', 'password' => Hash::make('861005565487')]);
        DB::table('staff')->insert(['name' => "MOHD HAFIZ BIN MAT ISA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR AQIDAH BINTI MOHD FAUZI", 'email' => 'aqidah@utmspace.edu.my', 'password' => Hash::make('911210016068')]);
        DB::table('staff')->insert(['name' => "NUR AQIDAH BINTI MOHD FAUZI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "KAMARUL BIN KADRI", 'email' => 'kamarul@utmspace.edu.my', 'password' => Hash::make('620205716123')]);
        DB::table('staff')->insert(['name' => "KAMARUL BIN KADRI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR AYUNI BINTI OTHMAN", 'email' => 'ayuni@utmspace.edu.my', 'password' => Hash::make('910222026170')]);
        DB::table('staff')->insert(['name' => "NUR AYUNI BINTI OTHMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURMAHIRAH BINTI ITHNIN", 'email' => 'nurmahirah@utmspace.edu.my', 'password' => Hash::make('890329015548')]);
        DB::table('staff')->insert(['name' => "NURMAHIRAH BINTI ITHNIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD IZZUDDIN BIN IBRAHIM", 'email' => 'izzuddin@utmspace.edu.my', 'password' => Hash::make('910420015069')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD IZZUDDIN BIN IBRAHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ULFATUNNISAK BINTI ALWI ", 'email' => 'ulfatunnisak@utmspace.edu.my', 'password' => Hash::make('940531145744')]);
        DB::table('staff')->insert(['name' => "ULFATUNNISAK BINTI ALWI ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD FAUZAN BIN JALIL", 'email' => 'FAUZAN@UTMSPACE.EDU.MY', 'password' => Hash::make('900118015691')]);
        DB::table('staff')->insert(['name' => "MOHD FAUZAN BIN JALIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AZMI BIN AWANG TERISNO", 'email' => 'azmi@utmspace.edu.my', 'password' => Hash::make('920219126735')]);
        DB::table('staff')->insert(['name' => "AZMI BIN AWANG TERISNO", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD ROSYDI BIN ABDULLAH", 'email' => 'rosydi@utmspace.edu.my', 'password' => Hash::make('890327025873')]);
        DB::table('staff')->insert(['name' => "MOHD ROSYDI BIN ABDULLAH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD IZZUDDIN BIN KAMARUDDIN", 'email' => 'izzuddin.kamaruddin@utmspace.edu.my', 'password' => Hash::make('930924145631')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD IZZUDDIN BIN KAMARUDDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "KHAIRUL IZDIHAR BIN ABD BASIR", 'email' => 'izdihar@utmspace.edu.my', 'password' => Hash::make('910105035959')]);
        DB::table('staff')->insert(['name' => "KHAIRUL IZDIHAR BIN ABD BASIR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD REDZUAN BIN HAMID", 'email' => 'mredzuan@utmspace.edu.my', 'password' => Hash::make('890217016001')]);
        DB::table('staff')->insert(['name' => "MOHD REDZUAN BIN HAMID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "TS. MICHELLE ZAINAB BAIRD", 'email' => ' michelle@utmspace.edu.my', 'password' => Hash::make('820301715178')]);
        DB::table('staff')->insert(['name' => "TS. MICHELLE ZAINAB BAIRD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "TS. DR. NURUL ALIFAH BINTI JATARONA", 'email' => ' alifah@utmspace.edu.my', 'password' => Hash::make('820705145300')]);
        DB::table('staff')->insert(['name' => "TS. DR. NURUL ALIFAH BINTI JATARONA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ABDUL QAYYUM BIN NAZRI", 'email' => 'qayyum@utmspace.edu.my', 'password' => Hash::make('880825086397')]);
        DB::table('staff')->insert(['name' => "ABDUL QAYYUM BIN NAZRI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AMIRA ADIBAH BINTI AMIR SHAFAR RUDEEN", 'email' => 'amiraadibah@utmspace.edu.my', 'password' => Hash::make('960810145710')]);
        DB::table('staff')->insert(['name' => "AMIRA ADIBAH BINTI AMIR SHAFAR RUDEEN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL SHUAIDA BINTI MOHD SOFIAN ", 'email' => 'shuaida@utmspace.edu.my', 'password' => Hash::make('930909015660')]);
        DB::table('staff')->insert(['name' => "NURUL SHUAIDA BINTI MOHD SOFIAN ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "PROF. MADYA MAZLAN BIN MOHAMAD ABDUL HAMED", 'email' => 'tda@utmspace.edu.my', 'password' => Hash::make('630922075065')]);
        DB::table('staff')->insert(['name' => "PROF. MADYA MAZLAN BIN MOHAMAD ABDUL HAMED", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR ATIKAH BINTI MOHD YUSOF", 'email' => 'atikah@utmspace.edu.my', 'password' => Hash::make('940909145480')]);
        DB::table('staff')->insert(['name' => "NUR ATIKAH BINTI MOHD YUSOF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR SYAHIRAH BINTI ABD AJIS", 'email' => 'syahirah@utmspace.edu.my', 'password' => Hash::make('960124145948')]);
        DB::table('staff')->insert(['name' => "NUR SYAHIRAH BINTI ABD AJIS", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOR FATIN AZREEN BINTI ZAKARIA", 'email' => 'fatinazreen@utmspace.edu.my', 'password' => Hash::make('921015035342')]);
        DB::table('staff')->insert(['name' => "NOR FATIN AZREEN BINTI ZAKARIA", 'user_id' => $id]);

        $id = DB::table('users')->insertGetId(['name' => "PROF. MADYA TS GS SR DR. MOHD ZULKIFLI BIN MOHD YUNUS", 'email' => 'timbdekan@utmspace.edu.my', 'password' => Hash::make('630715106455')]);
        DB::table('staff')->insert(['name' => "PROF. MADYA TS GS SR DR. MOHD ZULKIFLI BIN MOHD YUNUS", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "WAN 'ATIKAH BINTI WAN IBRISAM FIKRY", 'email' => 'wan.atikah@utmspace.edu.my', 'password' => Hash::make('920314035460')]);
        DB::table('staff')->insert(['name' => "WAN 'ATIKAH BINTI WAN IBRISAM FIKRY", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NABILAH SYAFIQAH BINTI ABDUL RAHMAN", 'email' => 'nabilahsyafiqah@utmspace.edu.my	', 'password' => Hash::make('900417145592')]);
        DB::table('staff')->insert(['name' => "NABILAH SYAFIQAH BINTI ABDUL RAHMAN", 'user_id' => $id]);
                                                                        
        $id = DB::table('users')->insertGetId(['name' => "POK WEI FUN", 'email' => 'angela.pok@utmspace.edu.my', 'password' => Hash::make('651013055596')]);
        DB::table('staff')->insert(['name' => "POK WEI FUN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD NAQIB BIN HALIM", 'email' => 'naqib@utmspace.edu.my', 'password' => Hash::make('890525105049')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD NAQIB BIN HALIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "DR. DORIA BINTI ABDULLAH", 'email' => 'doria@utmspace.edu.my', 'password' => Hash::make('860801526206')]);
        DB::table('staff')->insert(['name' => "DR. DORIA BINTI ABDULLAH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD ZAKI BIN BAHRUDIN", 'email' => 'mohd.zaki@utmspace.edu.my', 'password' => Hash::make('910207015465')]);
        DB::table('staff')->insert(['name' => "MOHD ZAKI BIN BAHRUDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOORAZLIZA BINTI SUDAR ", 'email' => 'noorazliza@utmspace.edu.my', 'password' => Hash::make('880822565528')]);
        DB::table('staff')->insert(['name' => "NOORAZLIZA BINTI SUDAR ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI ZAMILAH BINTI ABD HAMID", 'email' => 'zamilah@utmspace.edu.my', 'password' => Hash::make('900125016326')]);
        DB::table('staff')->insert(['name' => "SITI ZAMILAH BINTI ABD HAMID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ROZANA BINTI ISMAIL", 'email' => 'rozana@utmspace.edu.my', 'password' => Hash::make('790521015590')]);
        DB::table('staff')->insert(['name' => "ROZANA BINTI ISMAIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "HUSNA HAFIZA BINTI R.AZAMI", 'email' => 'husna.hafiza@utmspace.edu.my', 'password' => Hash::make('860519465024')]);
        DB::table('staff')->insert(['name' => "HUSNA HAFIZA BINTI R.AZAMI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SARAH ERINA BINTI ROSELEY ", 'email' => 'sarah.erina@utmspace.edu.my', 'password' => Hash::make('910316105574')]);
        DB::table('staff')->insert(['name' => "SARAH ERINA BINTI ROSELEY ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NABILAH HANIM BINTI MOHD ANUAR", 'email' => 'nabilah.hanim@utmspace.edu.my', 'password' => Hash::make('921229146718')]);
        DB::table('staff')->insert(['name' => "NABILAH HANIM BINTI MOHD ANUAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "WAFA' BINTI HASSAN@KAMARUDDIN", 'email' => 'wafa@utmspace.edu.my', 'password' => Hash::make('880927565946')]);
        DB::table('staff')->insert(['name' => "WAFA' BINTI HASSAN@KAMARUDDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOOR IZAETY BINTI AZHAR", 'email' => 'noor.izaety@utmspace.edu.my', 'password' => Hash::make('910602085260')]);
        DB::table('staff')->insert(['name' => "NOOR IZAETY BINTI AZHAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "YUSLINDA BINTI MAT YUNUS", 'email' => 'yuslinda@utmspace.edu.my', 'password' => Hash::make('930820135340')]);
        DB::table('staff')->insert(['name' => "YUSLINDA BINTI MAT YUNUS", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ALIFAH BINTI TARMIDI", 'email' => 'alifah.tarmidi@utmspace.edu.my', 'password' => Hash::make('920806146546')]);
        DB::table('staff')->insert(['name' => "ALIFAH BINTI TARMIDI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ZAKI BIN JAMAL", 'email' => 'zaki.jamal@utmspace.edu.my', 'password' => Hash::make('910613016383')]);
        DB::table('staff')->insert(['name' => "ZAKI BIN JAMAL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ASHRAF BIN ZAINAL MOKHTAR", 'email' => 'ashraf@utmspace.edu.my', 'password' => Hash::make('770324055683')]);
        DB::table('staff')->insert(['name' => "ASHRAF BIN ZAINAL MOKHTAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ROSLI BIN IBRAHIM", 'email' => 'rosli.ibrahim@utmspace.edu.my', 'password' => Hash::make('640728045187')]);
        DB::table('staff')->insert(['name' => "ROSLI BIN IBRAHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ULAIYA BINTI MD SATAR", 'email' => 'ulaiya@utmspace.edu.my', 'password' => Hash::make('820705715174')]);
        DB::table('staff')->insert(['name' => "ULAIYA BINTI MD SATAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD AMIRUL ASYRAF BIN MOHD ZULKIFLI", 'email' => 'amirul.asyraf@utmspace.edu.my', 'password' => Hash::make('960819065143')]);
        DB::table('staff')->insert(['name' => "MOHD AMIRUL ASYRAF BIN MOHD ZULKIFLI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "DR. LOW HOCK HENG", 'email' => 'h2low@utmspace.edu.my', 'password' => Hash::make('631130015755')]);
        DB::table('staff')->insert(['name' => "DR. LOW HOCK HENG", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD HILMI BIN HUSSAIN", 'email' => 'hilmi@utmspace.edu.my', 'password' => Hash::make('951220146153')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD HILMI BIN HUSSAIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "DR. LIEW WAI LOAN", 'email' => 'liew@utmspace.edu.my', 'password' => Hash::make('860712565465')]);
        DB::table('staff')->insert(['name' => "DR. LIEW WAI LOAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "DR. NURUL HUDA BINTI BAHARUDDIN", 'email' => 'huda@utmspace.edu.my', 'password' => Hash::make('841004145706')]);
        DB::table('staff')->insert(['name' => "DR. NURUL HUDA BINTI BAHARUDDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMAD HAKIMI BIN IBRAHIM", 'email' => 'hakimi@utmspace.edu.my', 'password' => Hash::make('920219035171')]);
        DB::table('staff')->insert(['name' => "MUHAMAD HAKIMI BIN IBRAHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD AJWAD BIN ABDUL HALIM", 'email' => 'ajwad@utmspace.edu.my', 'password' => Hash::make('941011146457')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD AJWAD BIN ABDUL HALIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR HAYATI BINTI AMILODI", 'email' => 'hayati@utmspace.edu.my', 'password' => Hash::make('940308016050')]);
        DB::table('staff')->insert(['name' => "NUR HAYATI BINTI AMILODI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ZAFRY HAFIZ BIN ZAINAL ARIFFIN", 'email' => 'zafry@utmspace.edu.my', 'password' => Hash::make('920314145547')]);
        DB::table('staff')->insert(['name' => "ZAFRY HAFIZ BIN ZAINAL ARIFFIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD FAIZUL BIN MOHD HANIFFA", 'email' => 'faizul@utmspace.edu.my', 'password' => Hash::make('940413075829')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD FAIZUL BIN MOHD HANIFFA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI FASIHAH BINTI MIRON", 'email' => 'fasihah@utmspace.edu.my', 'password' => Hash::make('890221235100')]);
        DB::table('staff')->insert(['name' => "SITI FASIHAH BINTI MIRON", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL NADIRAH BINTI MAZLAN@ MASLAR", 'email' => 'nadirah@utmspace.edu.my', 'password' => Hash::make('910121146376')]);
        DB::table('staff')->insert(['name' => "NURUL NADIRAH BINTI MAZLAN@ MASLAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "DR. SYA AZMEELA BINTI SHARIFF", 'email' => 'azmeela@utmspace.edu.my', 'password' => Hash::make('780719055054')]);
        DB::table('staff')->insert(['name' => "DR. SYA AZMEELA BINTI SHARIFF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI NORFAZILA BINTI MOHAMAD REPAIE", 'email' => 'siti.norfazila@utmspace.edu.my', 'password' => Hash::make('900516016884')]);
        DB::table('staff')->insert(['name' => "SITI NORFAZILA BINTI MOHAMAD REPAIE", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AINA MARDZIAH BINTI AHMAD RIFA'I", 'email' => 'aina@utmspace.edu.my', 'password' => Hash::make('861125235036')]);
        DB::table('staff')->insert(['name' => "AINA MARDZIAH BINTI AHMAD RIFA'I", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOR FATHIN BINTI AHAMAD", 'email' => 'fathin@utmspace.edu.my', 'password' => Hash::make('910405075282')]);
        DB::table('staff')->insert(['name' => "NOR FATHIN BINTI AHAMAD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL ATHMA BINTI MOHD SHUKRY", 'email' => 'athma@utmspace.edu.my', 'password' => Hash::make('911014035448')]);
        DB::table('staff')->insert(['name' => "NURUL ATHMA BINTI MOHD SHUKRY", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "TAN GEOK PIN", 'email' => 'elvin@utmspace.edu.my', 'password' => Hash::make('691027085207')]);
        DB::table('staff')->insert(['name' => "TAN GEOK PIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD RIDZUAN BIN ABD RAZAK", 'email' => 'ridzuan@utmspace.edu.my', 'password' => Hash::make('911204015827')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD RIDZUAN BIN ABD RAZAK", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "WAN MUHAMAD ALIF BIN WAN RAZALI", 'email' => 'alif@utmspace.edu.my', 'password' => Hash::make('941020145595')]);
        DB::table('staff')->insert(['name' => "WAN MUHAMAD ALIF BIN WAN RAZALI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURULAIN BINTI MISMAN", 'email' => 'nurulainmisman@utmspace.edu.my', 'password' => Hash::make('901114016560')]);
        DB::table('staff')->insert(['name' => "NURULAIN BINTI MISMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MAT ZAIN BIN MAT", 'email' => 'gmppk@utmspace.edu.my', 'password' => Hash::make('650227035641')]);
        DB::table('staff')->insert(['name' => "MAT ZAIN BIN MAT", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR ADILAH BINTI MOHAMED ISA", 'email' => 'nuradilah@utmspace.edu.my', 'password' => Hash::make('970326015876')]);
        DB::table('staff')->insert(['name' => "NUR ADILAH BINTI MOHAMED ISA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD AMIRUL HAKIM BIN MAZLAN", 'email' => 'mdamirulhakim@utmspace.edu.my', 'password' => Hash::make('940928016481')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD AMIRUL HAKIM BIN MAZLAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AIN HASMIZA BINTI SUFFIAN", 'email' => 'ainhasmiza@utmspace.edu.my', 'password' => Hash::make('910428055348')]);
        DB::table('staff')->insert(['name' => "AIN HASMIZA BINTI SUFFIAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MIMI AZURA BINTI NGATMIN", 'email' => 'mimiazura@utmspace.edu.my', 'password' => Hash::make('840414055274')]);
        DB::table('staff')->insert(['name' => "MIMI AZURA BINTI NGATMIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ATIKAH BINTI RAZALI", 'email' => 'atikahrazali@utmspace.edu.my', 'password' => Hash::make('830104065152')]);
        DB::table('staff')->insert(['name' => "ATIKAH BINTI RAZALI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD AMIRUL HAKIM BIN ZAMRI", 'email' => 'amirulhakim@utmspace.edu.my', 'password' => Hash::make('881005045201')]);
        DB::table('staff')->insert(['name' => "MOHD AMIRUL HAKIM BIN ZAMRI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AMIRAH BINTI MOHAMED SHAHIRI", 'email' => 'amirahshahiri@utmspace.edu.my', 'password' => Hash::make('870312435126')]);
        DB::table('staff')->insert(['name' => "AMIRAH BINTI MOHAMED SHAHIRI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURULFATEHA RAIHAN BINTI MOHD RADZI", 'email' => 'nurulfateha@utmspace.edu.my', 'password' => Hash::make('870819145208')]);
        DB::table('staff')->insert(['name' => "NURULFATEHA RAIHAN BINTI MOHD RADZI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "TS. HAMDI BIN ISMAIL", 'email' => 'hamdi@utmspace.edu.my', 'password' => Hash::make('840318075419')]);
        DB::table('staff')->insert(['name' => "TS. HAMDI BIN ISMAIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "JAIDA RUHAYA BINTI JAMARUS", 'email' => 'jaidaruhaya@utmspace.edu.my', 'password' => Hash::make('971217565056')]);
        DB::table('staff')->insert(['name' => "JAIDA RUHAYA BINTI JAMARUS", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD NASRUDDIN BIN MUSTAFA", 'email' => 'mnasruddin@utmspace.edu.my', 'password' => Hash::make('940101146325')]);
        DB::table('staff')->insert(['name' => "MOHD NASRUDDIN BIN MUSTAFA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AMALINA BINTI AHMAD KAMAL", 'email' => 'amalina@utmspace.edu.my', 'password' => Hash::make('960913145350')]);
        DB::table('staff')->insert(['name' => "AMALINA BINTI AHMAD KAMAL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORZAHARAWANI BINTI BUSU", 'email' => 'norzaharawani@utmspace.edu.my', 'password' => Hash::make('800802065208')]);
        DB::table('staff')->insert(['name' => "NORZAHARAWANI BINTI BUSU", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD IZUDDIN BIN AHMAD", 'email' => 'izuddinahmad@utmspace.edu.my', 'password' => Hash::make('881019565929')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD IZUDDIN BIN AHMAD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD YUSUF BIN MOHD NOOR", 'email' => 'yusuf@utmspace.edu.my', 'password' => Hash::make('970805017561')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD YUSUF BIN MOHD NOOR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SHAHRUL NIZAM BIN MOHAMMAD", 'email' => 'snizam@utmspace.edu.my', 'password' => Hash::make('930118016309')]);
        DB::table('staff')->insert(['name' => "SHAHRUL NIZAM BIN MOHAMMAD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMAD NAZREN BIN ZAINAL ABIDIN", 'email' => 'mnazren@utmspace.edu.my', 'password' => Hash::make('910131016081')]);
        DB::table('staff')->insert(['name' => "MOHAMAD NAZREN BIN ZAINAL ABIDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SYAZWANI BINTI SAFAR", 'email' => 'syazwani@utmspace.edu.my', 'password' => Hash::make('921110016342')]);
        DB::table('staff')->insert(['name' => "SYAZWANI BINTI SAFAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORIZAN BINTI ABU BAKAR", 'email' => 'norizan@utmspace.edu.my', 'password' => Hash::make('890413015612')]);
        DB::table('staff')->insert(['name' => "NORIZAN BINTI ABU BAKAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NIK NADIAH SYAHIRAH BINTI NIK ANUAY", 'email' => 'niknadiah@utmspace.edu.my', 'password' => Hash::make('920514145736')]);
        DB::table('staff')->insert(['name' => "NIK NADIAH SYAHIRAH BINTI NIK ANUAY", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SYARIFAH RABIYAH AL ADAWIAH BT SYED BADRUL HISHAM", 'email' => 'rabiyah@utmspace.edu.my', 'password' => Hash::make('890724035434')]);
        DB::table('staff')->insert(['name' => "SYARIFAH RABIYAH AL ADAWIAH BT SYED BADRUL HISHAM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NASSYUHA ASSYILLAH BINTI ABDUL SAMAD", 'email' => 'nassyuha@utmspace.edu.my', 'password' => Hash::make('940208016598')]);
        DB::table('staff')->insert(['name' => "NASSYUHA ASSYILLAH BINTI ABDUL SAMAD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD ABDUL RAUF BIN ABDULLAH SANI", 'email' => 'rauf@utmspace.edu.my', 'password' => Hash::make('960418146153')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD ABDUL RAUF BIN ABDULLAH SANI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NEEHANDRA BINTI MOHD TAHIR", 'email' => 'neehandra@utmspace.edu.my', 'password' => Hash::make('850831125308')]);
        DB::table('staff')->insert(['name' => "NEEHANDRA BINTI MOHD TAHIR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NADHIRAH BINTI NORHALIM", 'email' => 'nadhirah@utmspace.edu.my', 'password' => Hash::make('890119145950')]);
        DB::table('staff')->insert(['name' => "NADHIRAH BINTI NORHALIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "CHE ALIAH NOR HAFIZAH BT CHE ZAINAL ABIDIN", 'email' => 'aliah@utmspace.edu.my', 'password' => Hash::make('951111015920')]);
        DB::table('staff')->insert(['name' => "CHE ALIAH NOR HAFIZAH BT CHE ZAINAL ABIDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD ZUHAIRI ASYRAF BIN KHALID", 'email' => 'zuhairi@utmspace.edu.my', 'password' => Hash::make('920222015147')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD ZUHAIRI ASYRAF BIN KHALID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NAWAL BINTI SHAHARUDDIN", 'email' => 'nawal@utmspace.edu.my', 'password' => Hash::make('881226835020')]);
        DB::table('staff')->insert(['name' => "NAWAL BINTI SHAHARUDDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "DEEPA A/P ALAGAPPAN", 'email' => 'deepa@utmspace.edu.my', 'password' => Hash::make('920511015274')]);
        DB::table('staff')->insert(['name' => "DEEPA A/P ALAGAPPAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD KAMAL BIN YUSOFF", 'email' => 'mkamal@utmspace.edu.my', 'password' => Hash::make('840311015317')]);
        DB::table('staff')->insert(['name' => "MOHD KAMAL BIN YUSOFF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "LING SHEAU JING", 'email' => 'sheau.jing@utmspace.edu.my', 'password' => Hash::make('900124136326')]);
        DB::table('staff')->insert(['name' => "LING SHEAU JING", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD AFIFI BIN IDRIS", 'email' => 'afifi@utmspace.edu.my', 'password' => Hash::make('940320015587')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD AFIFI BIN IDRIS", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AHMAD WIDAD BIN MD FADIL", 'email' => 'ahmadwidad@utmspace.edu.my', 'password' => Hash::make('920715145169')]);
        DB::table('staff')->insert(['name' => "AHMAD WIDAD BIN MD FADIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD IZYAN ZUHAILI BIN ZAINUDIN", 'email' => 'mohd_izyan@utmspace.edu.my', 'password' => Hash::make('870327015183')]);
        DB::table('staff')->insert(['name' => "MOHD IZYAN ZUHAILI BIN ZAINUDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD AKMAL HIJAZ BIN SAHARUDIN", 'email' => 'akmal@utmspace.edu.my', 'password' => Hash::make('940728015759')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD AKMAL HIJAZ BIN SAHARUDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL ADIBA BINTI KHAIRUDDIN", 'email' => 'nuruladiba@utmspace.edu.my', 'password' => Hash::make('941231015256')]);
        DB::table('staff')->insert(['name' => "NURUL ADIBA BINTI KHAIRUDDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AMIRUL AIMAN BIN A RASHID", 'email' => 'aiman@utmspace.edu.my', 'password' => Hash::make('901206145247')]);
        DB::table('staff')->insert(['name' => "AMIRUL AIMAN BIN A RASHID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ADRIAN SYAH BIN HALIFI", 'email' => 'adriansyah@utmspace.edu.my', 'password' => Hash::make('861104565853')]);
        DB::table('staff')->insert(['name' => "ADRIAN SYAH BIN HALIFI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ROSIDAYU BINTI SHAI BUDING", 'email' => 'rosidayu@utmspace.edu.my', 'password' => Hash::make('920516035354')]);
        DB::table('staff')->insert(['name' => "ROSIDAYU BINTI SHAI BUDING", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SR. GS. AMIR HAMZAH BIN OTHMAN ", 'email' => 'amirhamzah@utmspace.edu.my', 'password' => Hash::make('890805115559')]);
        DB::table('staff')->insert(['name' => "SR. GS. AMIR HAMZAH BIN OTHMAN ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMAD AMEER ASHRAF BIN MOHAMAD YOSRI", 'email' => 'ameer@utmspace.edu.my', 'password' => Hash::make('930104065281')]);
        DB::table('staff')->insert(['name' => "MOHAMAD AMEER ASHRAF BIN MOHAMAD YOSRI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR AISHAH DIANAH BINTI MOHD SHAMSUDIN", 'email' => 'aishahdianah@utmspace.edu.my', 'password' => Hash::make('920812015956')]);
        DB::table('staff')->insert(['name' => "NUR AISHAH DIANAH BINTI MOHD SHAMSUDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD NUR QAWIM BIN HIZIL", 'email' => 'qawim@utmspace.edu.my', 'password' => Hash::make('940605017025')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD NUR QAWIM BIN HIZIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD AZWAD BIN ZAKARIA", 'email' => 'azwad@utmspace.edu.my', 'password' => Hash::make('950812015339')]);
        DB::table('staff')->insert(['name' => "MOHD AZWAD BIN ZAKARIA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMAD RAQIF BIN SAAT", 'email' => 'raqif@utmspace.edu.my', 'password' => Hash::make('940908016679')]);
        DB::table('staff')->insert(['name' => "MOHAMAD RAQIF BIN SAAT", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR' ADILAH BINTI ADNAN", 'email' => 'adilah@utmspace.edu.my', 'password' => Hash::make('961104015964')]);
        DB::table('staff')->insert(['name' => "NUR' ADILAH BINTI ADNAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR FATIHAH BINTI ROSLAN", 'email' => 'nurfatihah@utmspace.edu.my', 'password' => Hash::make('971112035796')]);
        DB::table('staff')->insert(['name' => "NUR FATIHAH BINTI ROSLAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHAMAD HAZRAFISZ BIN MAARIF", 'email' => 'hazrafisz@utmspace.edu.my', 'password' => Hash::make('920808055445')]);
        DB::table('staff')->insert(['name' => "MOHAMAD HAZRAFISZ BIN MAARIF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD IKRAAM BIN IDRIS", 'email' => 'ikraam@utmspace.edu.my', 'password' => Hash::make('931228065173')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD IKRAAM BIN IDRIS", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL HUSNA BINTI MUHAIMIN", 'email' => 'nurulhusna@utmspace.edu.my', 'password' => Hash::make('931205015392')]);
        DB::table('staff')->insert(['name' => "NURUL HUSNA BINTI MUHAIMIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOOR SYUHAIDA BINTI IBRAHIM", 'email' => 'noorsyuhaida@utmspace.edu.my', 'password' => Hash::make('901226035694')]);
        DB::table('staff')->insert(['name' => "NOOR SYUHAIDA BINTI IBRAHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR SHUHAIDA BINTI ABDUL MAJID", 'email' => 'nurshuhaida@utmspace.edu.my', 'password' => Hash::make('960330015204')]);
        DB::table('staff')->insert(['name' => "NUR SHUHAIDA BINTI ABDUL MAJID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "FATIMAH BINTI PA'WAN", 'email' => 'fatimah@utmspace.edu.my', 'password' => Hash::make('730609115356')]);
        DB::table('staff')->insert(['name' => "FATIMAH BINTI PA'WAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMAD SYAZWI BIN MOHAMED SARUNI", 'email' => 'syazwi@utmspace.edu.my', 'password' => Hash::make('830625075401')]);
        DB::table('staff')->insert(['name' => "MUHAMAD SYAZWI BIN MOHAMED SARUNI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI NUR SHAHIDA BINTI AB RAHIM", 'email' => 'shahida@utmspace.edu.my', 'password' => Hash::make('801021035748')]);
        DB::table('staff')->insert(['name' => "SITI NUR SHAHIDA BINTI AB RAHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "DR. SITI MUNIRA BINTI JAMIL", 'email' => 'sitimunira@utmspace.edu.my', 'password' => Hash::make('850312025778')]);
        DB::table('staff')->insert(['name' => "DR. SITI MUNIRA BINTI JAMIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD MUNZIR BIN MOHAMMAD NAZRI", 'email' => 'munzir@utmspace.edu.my', 'password' => Hash::make('910122025357')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD MUNZIR BIN MOHAMMAD NAZRI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR UMAIRAH BINTI MUHAMAD ", 'email' => 'umairah@utmspace.edu.my', 'password' => Hash::make('920210015828')]);
        DB::table('staff')->insert(['name' => "NUR UMAIRAH BINTI MUHAMAD ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AMMAR HAKIM BIN ZAMZURI", 'email' => 'ammar@utmspace.edu.my', 'password' => Hash::make('951004016899')]);
        DB::table('staff')->insert(['name' => "AMMAR HAKIM BIN ZAMZURI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL HIDAYAH BINTI MD OTHMAN", 'email' => 'nurulhidayah@utmspace.edu.my', 'password' => Hash::make('930801015220')]);
        DB::table('staff')->insert(['name' => "NURUL HIDAYAH BINTI MD OTHMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORSHAFIKAH BT MOHD AZIZAN", 'email' => 'norshafikah@utmspace.edu.my', 'password' => Hash::make('960103146490')]);
        DB::table('staff')->insert(['name' => "NORSHAFIKAH BT MOHD AZIZAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD NABIL SHAH BIN MOHD NOH", 'email' => 'nabil@utmspace.edu.my', 'password' => Hash::make('900411145129')]);
        DB::table('staff')->insert(['name' => "MOHD NABIL SHAH BIN MOHD NOH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORSYUHADA BINTI ABDUL RAHMAN", 'email' => 'norsyuhada@utmspace.edu.my', 'password' => Hash::make('921127025034')]);
        DB::table('staff')->insert(['name' => "NORSYUHADA BINTI ABDUL RAHMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURLIZA BINTI ABDUL AZIZ", 'email' => 'nurliza@utmspace.edu.my', 'password' => Hash::make('930702145708')]);
        DB::table('staff')->insert(['name' => "NURLIZA BINTI ABDUL AZIZ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "JULIEANAH BINTI MOHAMAD JAMIL", 'email' => 'julieanah@utmspace.edu.my', 'password' => Hash::make('820704125308')]);
        DB::table('staff')->insert(['name' => "JULIEANAH BINTI MOHAMAD JAMIL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOR HAZLIN BINTI HUSNI", 'email' => 'norhazlin@utmspace.edu.my', 'password' => Hash::make('890731145834')]);
        DB::table('staff')->insert(['name' => "NOR HAZLIN BINTI HUSNI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD FIRDAUS BIN MANSOR", 'email' => 'firdaus@utmspace.edu.my', 'password' => Hash::make('930307145599')]);
        DB::table('staff')->insert(['name' => "MOHD FIRDAUS BIN MANSOR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ANURFITRI BINTI ANWAR", 'email' => 'anurfitri@utmspace.edu.my', 'password' => Hash::make('970211145080')]);
        DB::table('staff')->insert(['name' => "ANURFITRI BINTI ANWAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR ATEKAH ULFAH BINTI YAAKOB", 'email' => 'nur_atekah@utmspace.edu.my', 'password' => Hash::make('911004106636')]);
        DB::table('staff')->insert(['name' => "NUR ATEKAH ULFAH BINTI YAAKOB", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD IKHWAN BIN RAZALI", 'email' => 'ikhwan@utmspace.edu.my', 'password' => Hash::make('960610145003')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD IKHWAN BIN RAZALI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD SUFFIAN BIN JAAFAR", 'email' => 'suffian@utmspace.edu.my', 'password' => Hash::make('930802017105')]);
        DB::table('staff')->insert(['name' => "MOHD SUFFIAN BIN JAAFAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "FARAH ADILAH BINTI MOHD NOOR", 'email' => 'farah@utmspace.edu.my', 'password' => Hash::make('911023015078')]);
        DB::table('staff')->insert(['name' => "FARAH ADILAH BINTI MOHD NOOR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR FATIN NABILAH BINTI AHMAD FAUZI", 'email' => 'nurfatin@utmspace.edu.my', 'password' => Hash::make('941205875068')]);
        DB::table('staff')->insert(['name' => "NUR FATIN NABILAH BINTI AHMAD FAUZI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "BHAIHAQI BIN HERMAN", 'email' => 'bhaihaqi@utmspace.edu.my', 'password' => Hash::make('920918105255')]);
        DB::table('staff')->insert(['name' => "BHAIHAQI BIN HERMAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SALINA BINTI SADELI", 'email' => 'salina@utmspace.edu.my', 'password' => Hash::make('850425145776')]);
        DB::table('staff')->insert(['name' => "SALINA BINTI SADELI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ZIYAN BINTI RAZALLI", 'email' => 'ziyan@utmspace.edu.my', 'password' => Hash::make('910308146448')]);
        DB::table('staff')->insert(['name' => "ZIYAN BINTI RAZALLI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "UMIJAH BINTI MADZEN", 'email' => 'umijah@utmspace.edu.my', 'password' => Hash::make('950514145194')]);
        DB::table('staff')->insert(['name' => "UMIJAH BINTI MADZEN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR SYAHIRA AMIRA BINTI MOHD AZHARI", 'email' => 'nursyahira@utmspace.edu.my', 'password' => Hash::make('940517105594')]);
        DB::table('staff')->insert(['name' => "NUR SYAHIRA AMIRA BINTI MOHD AZHARI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOR SYAFIQAH BINTI ROSLI", 'email' => 'norsyafiqah@utmspace.edu.my', 'password' => Hash::make('911030085322')]);
        DB::table('staff')->insert(['name' => "NOR SYAFIQAH BINTI ROSLI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "WAN MUHAMMAD ABDUL AZIM BIN WAN IBRAHIM", 'email' => 'azim@utmspace.edu.my', 'password' => Hash::make('950302035727')]);
        DB::table('staff')->insert(['name' => "WAN MUHAMMAD ABDUL AZIM BIN WAN IBRAHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR IZZATI BINTI MOHD ISA", 'email' => 'nurizzati@utmspace.edu.my', 'password' => Hash::make('920815145190')]);
        DB::table('staff')->insert(['name' => "NUR IZZATI BINTI MOHD ISA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "PROF. MADYA SR.DR. SARAJUL FIKRI BIN MOHAMED", 'email' => 'sarajul@utmspace.edu.my', 'password' => Hash::make('771105036073')]);
        DB::table('staff')->insert(['name' => "PROF. MADYA SR.DR. SARAJUL FIKRI BIN MOHAMED", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AZLAN SYAH BIN KARIB", 'email' => 'azlan_syah@utmspace.edu.my', 'password' => Hash::make('940415015205')]);
        DB::table('staff')->insert(['name' => "AZLAN SYAH BIN KARIB", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AINA NABILA BT JAPREE", 'email' => 'aina_nabila@utmspace.edu.my', 'password' => Hash::make('981106017646')]);
        DB::table('staff')->insert(['name' => "AINA NABILA BT JAPREE", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMAD AMIR RASYID BIN KAMARUDIN", 'email' => 'amir@utmspace.edu.my', 'password' => Hash::make('930615016385')]);
        DB::table('staff')->insert(['name' => "MUHAMAD AMIR RASYID BIN KAMARUDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR ILI NAZIHAH BINTI ROSLAN", 'email' => 'ili_nazihah@utmspace.edu.my', 'password' => Hash::make('970409015484')]);
        DB::table('staff')->insert(['name' => "NUR ILI NAZIHAH BINTI ROSLAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMAD HARZAN IKHWANURDDIN BIN ZAINAL", 'email' => 'harzan@utmspace.edu.my', 'password' => Hash::make('970930017077')]);
        DB::table('staff')->insert(['name' => "MUHAMAD HARZAN IKHWANURDDIN BIN ZAINAL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "KHAIRUL RIJAL BIN RAZALI", 'email' => 'rijal@utmspace.edu.my', 'password' => Hash::make('920823016479')]);
        DB::table('staff')->insert(['name' => "KHAIRUL RIJAL BIN RAZALI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI MUSLEHA BINTI AB MUTALIB", 'email' => 'sitimusleha@utmspace.edu.my', 'password' => Hash::make('880807235440')]);
        DB::table('staff')->insert(['name' => "SITI MUSLEHA BINTI AB MUTALIB", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOOR HAYATI BINTI MOHD ZAIN", 'email' => 'noorhayati@utmspace.edu.my', 'password' => Hash::make('870605115038')]);
        DB::table('staff')->insert(['name' => "NOOR HAYATI BINTI MOHD ZAIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOOR ASMA BINTI HUSAIN", 'email' => 'asma@utmspace.edu.my', 'password' => Hash::make('860830235248')]);
        DB::table('staff')->insert(['name' => "NOOR ASMA BINTI HUSAIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL IZZATY BINTI MOHD.YUNUS", 'email' => 'izzaty@utmspace.edu.my', 'password' => Hash::make('901027055174')]);
        DB::table('staff')->insert(['name' => "NURUL IZZATY BINTI MOHD.YUNUS", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NADZIRAH HUSNA BT MOHD TAIB", 'email' => 'nadzirah@utmspace.edu.my', 'password' => Hash::make('890303595484')]);
        DB::table('staff')->insert(['name' => "NADZIRAH HUSNA BT MOHD TAIB", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "CHAN YEW MUN", 'email' => 'ymchan@utmspace.edu.my', 'password' => Hash::make('931117085761')]);
        DB::table('staff')->insert(['name' => "CHAN YEW MUN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ZAREENA BINTI OMAR", 'email' => 'zareena@utmspace.edu.my', 'password' => Hash::make('720108015294')]);
        DB::table('staff')->insert(['name' => "ZAREENA BINTI OMAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "DR. MOHAMAD KAMAL BIN MOHAMAD DASUKI", 'email' => 'mohamadkamal@utmspace.edu.my', 'password' => Hash::make('780210106285')]);
        DB::table('staff')->insert(['name' => "DR. MOHAMAD KAMAL BIN MOHAMAD DASUKI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ATIKA BINTI M APID", 'email' => 'atika@utmspace.edu.my', 'password' => Hash::make('980519105762')]);
        DB::table('staff')->insert(['name' => "ATIKA BINTI M APID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "'AAISHAH RADZIAH BINTI JAMALUDIN", 'email' => 'aaishah@utmspace.edu.my', 'password' => Hash::make('850304025946')]);
        DB::table('staff')->insert(['name' => "'AAISHAH RADZIAH BINTI JAMALUDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AIDA KHALISAH BINTI SAMRI", 'email' => 'aida@utmspace.edu.my', 'password' => Hash::make('971220015522')]);
        DB::table('staff')->insert(['name' => "AIDA KHALISAH BINTI SAMRI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI KHATIJAH BINTI HAMZAH", 'email' => 'khatijah@utmspace.edu.my', 'password' => Hash::make('750224055020')]);
        DB::table('staff')->insert(['name' => "SITI KHATIJAH BINTI HAMZAH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL MUNIRAH BT SAFIAN", 'email' => 'munirah@utmspace.edu.my', 'password' => Hash::make('880803435736')]);
        DB::table('staff')->insert(['name' => "NURUL MUNIRAH BT SAFIAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI ZHAFIRAH BINTI ZAINAL", 'email' => 'zhafirah@utmspace.edu.my', 'password' => Hash::make('881213025504')]);
        DB::table('staff')->insert(['name' => "SITI ZHAFIRAH BINTI ZAINAL", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR SYAFIQAH BINTI ABD HAMID", 'email' => 'syafiqah@utmspace.edu.my', 'password' => Hash::make('920703015658')]);
        DB::table('staff')->insert(['name' => "NUR SYAFIQAH BINTI ABD HAMID", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL NAZLIN BINTI ISA", 'email' => 'nazlin@utmspace.edu.my', 'password' => Hash::make('981109017174')]);
        DB::table('staff')->insert(['name' => "NURUL NAZLIN BINTI ISA", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AHMAD ZAKI BIN ABDLLAH SANI", 'email' => 'ahmad_zaki@utmspace.edu.my', 'password' => Hash::make('940203015633')]);
        DB::table('staff')->insert(['name' => "AHMAD ZAKI BIN ABDLLAH SANI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD AZRI BIN JOHAN", 'email' => 'm_azri@utmspace.edu.my', 'password' => Hash::make('911206015193')]);
        DB::table('staff')->insert(['name' => "MOHD AZRI BIN JOHAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "IZZAT SYAMIR BIN MOHAMAD NOOR", 'email' => 'izzat@utmspace.edu.my', 'password' => Hash::make('900731016115')]);
        DB::table('staff')->insert(['name' => "IZZAT SYAMIR BIN MOHAMAD NOOR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOORZANA BINTI KHAMIS", 'email' => 'noorzanasaleh@gmail.com', 'password' => Hash::make('840403016376')]);
        DB::table('staff')->insert(['name' => "NOORZANA BINTI KHAMIS", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR 'AIN NAJIHAH BT MAAROF", 'email' => 'nurain_najihah@utmspace.edu.my', 'password' => Hash::make('951217115014')]);
        DB::table('staff')->insert(['name' => "NUR 'AIN NAJIHAH BT MAAROF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NADIA DIANA BINTI MOHD RUSDI", 'email' => 'ndiana@utmspace.edu.my', 'password' => Hash::make('921108146594')]);
        DB::table('staff')->insert(['name' => "NADIA DIANA BINTI MOHD RUSDI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL AIN SHAMILA BINTI NORDIN", 'email' => 'shamila@utmspace.edu.my', 'password' => Hash::make('891109146110')]);
        DB::table('staff')->insert(['name' => "NURUL AIN SHAMILA BINTI NORDIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI NUR ZAHARA BINTI HAMZAH", 'email' => 'zahara@utmspace.edu.my', 'password' => Hash::make('851001015956')]);
        DB::table('staff')->insert(['name' => "SITI NUR ZAHARA BINTI HAMZAH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MURUGADASS A/L GANATHIPAN", 'email' => 'murugadass@utmspace.edu.my', 'password' => Hash::make('900905145575')]);
        DB::table('staff')->insert(['name' => "MURUGADASS A/L GANATHIPAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR SOLEHAH BINTI SHAM", 'email' => 'NSolehah@utmspace.edu.my', 'password' => Hash::make('941028045118')]);
        DB::table('staff')->insert(['name' => "NUR SOLEHAH BINTI SHAM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "FATIN SHAQIRA BINTI ABDUL HADI", 'email' => 'fatin@utmspace.edu.my', 'password' => Hash::make('930927035964')]);
        DB::table('staff')->insert(['name' => "FATIN SHAQIRA BINTI ABDUL HADI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NOR NAIMAH BINTI SHAARI", 'email' => 'nornaimah@utmspace.edu.my', 'password' => Hash::make('920423115646')]);
        DB::table('staff')->insert(['name' => "NOR NAIMAH BINTI SHAARI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "UMMU HABIBAH BINTI AHMAD", 'email' => 'uhabibah@utmspace.edu.my', 'password' => Hash::make('921018086452')]);
        DB::table('staff')->insert(['name' => "UMMU HABIBAH BINTI AHMAD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR IZZAH BINTI HAMZAH", 'email' => 'izzah@utmspace.edu.my', 'password' => Hash::make('911127016294')]);
        DB::table('staff')->insert(['name' => "NUR IZZAH BINTI HAMZAH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI FASIHAH BINTI ABDUL FATAH", 'email' => 'sitifasihah@utmspace.edu.my', 'password' => Hash::make('921025035290')]);
        DB::table('staff')->insert(['name' => "SITI FASIHAH BINTI ABDUL FATAH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI NURFATIN BINTI IMRAN", 'email' => 'sitinurfatin@utmspace.edu.my', 'password' => Hash::make('890520595376')]);
        DB::table('staff')->insert(['name' => "SITI NURFATIN BINTI IMRAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AINAA FARHANA BINTI RAMLI", 'email' => 'ainaafarhana@utmspace.edu.my', 'password' => Hash::make('861117236338')]);
        DB::table('staff')->insert(['name' => "AINAA FARHANA BINTI RAMLI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR AISYAH BINTI AZMI", 'email' => 'nuraisyah@utmspace.edu.my', 'password' => Hash::make('960110065314')]);
        DB::table('staff')->insert(['name' => "NUR AISYAH BINTI AZMI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "PROF. DR NAZRI BIN ALI ", 'email' => 'nazriali@utmspace.edu.my', 'password' => Hash::make('701108015709')]);
        DB::table('staff')->insert(['name' => "PROF. DR NAZRI BIN ALI ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI MARLIZA BINTI IBRAHIM", 'email' => 'marliza@utmspace.edu.my', 'password' => Hash::make('871011025582')]);
        DB::table('staff')->insert(['name' => "SITI MARLIZA BINTI IBRAHIM", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI NORHASANAH BINTI SANIMU", 'email' => 'siti.hasanah@utmspace.edu.my', 'password' => Hash::make('971027045260')]);
        DB::table('staff')->insert(['name' => "SITI NORHASANAH BINTI SANIMU", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI FATIMAH BTE MOHAMAD AYOP", 'email' => 'sitifatimah@utmspace.edu.my', 'password' => Hash::make('941209055622')]);
        DB::table('staff')->insert(['name' => "SITI FATIMAH BTE MOHAMAD AYOP", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMAD HAIQAL BIN SHAHRIN", 'email' => 'mhaiqal@utmspace.edu.my', 'password' => Hash::make('940408146477')]);
        DB::table('staff')->insert(['name' => "MUHAMAD HAIQAL BIN SHAHRIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ANNURAIN BINTI ABU", 'email' => 'annurain@utmspace.edu.my', 'password' => Hash::make('890311085580')]);
        DB::table('staff')->insert(['name' => "ANNURAIN BINTI ABU", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SR. AZLINA BINTI MUSTAFAR", 'email' => 'azlina@utmspace.edu.my', 'password' => Hash::make('910930115668')]);
        DB::table('staff')->insert(['name' => "SR. AZLINA BINTI MUSTAFAR", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "TS. NORHASLINDA BINTI HARUN", 'email' => 'norhaslinda.kl@utm.my/norhaslindaharun@utmspace.edu.my', 'password' => Hash::make('781020115396')]);
        DB::table('staff')->insert(['name' => "TS. NORHASLINDA BINTI HARUN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "TS WAN MOHD KAMIL BIN WAN AHMAD", 'email' => 'kamil.kl@utm.my / wankamil@utmspace.edu.my', 'password' => Hash::make('720307035597')]);
        DB::table('staff')->insert(['name' => "TS WAN MOHD KAMIL BIN WAN AHMAD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ADILAH BINTI DARSANI", 'email' => 'adilahdarsani@utmspace.edu.my', 'password' => Hash::make('941130015046')]);
        DB::table('staff')->insert(['name' => "ADILAH BINTI DARSANI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "BURHANUDDIN BIN SARJI", 'email' => 'burhanuddin@utmspace.edu.my', 'password' => Hash::make('851003016549')]);
        DB::table('staff')->insert(['name' => "BURHANUDDIN BIN SARJI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AFIQ SYAHMI BIN ADANAN", 'email' => 'afiq@utmspace.edu.my', 'password' => Hash::make('921024016469')]);
        DB::table('staff')->insert(['name' => "AFIQ SYAHMI BIN ADANAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "CHIA YAW KWAN", 'email' => 'kwan@utmspace.edu.my', 'password' => Hash::make('880924495217')]);
        DB::table('staff')->insert(['name' => "CHIA YAW KWAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SHABITAH BINTI RAMLEY", 'email' => 'shabitah@utmspace.edu.my', 'password' => Hash::make('910126115480')]);
        DB::table('staff')->insert(['name' => "SHABITAH BINTI RAMLEY", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR SURIANIE BINTI CHE YASSIN", 'email' => 'surianie@utmspace.edu.my', 'password' => Hash::make('951205115164')]);
        DB::table('staff')->insert(['name' => "NUR SURIANIE BINTI CHE YASSIN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "PROF. MADYA DR. ROSLLI BIN NOOR MOHAMED", 'email' => 'roslli@utmspace.edu.my', 'password' => Hash::make('740708016029')]);
        DB::table('staff')->insert(['name' => "PROF. MADYA DR. ROSLLI BIN NOOR MOHAMED", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMMAD KHAIRUL NIZAM BIN MAN", 'email' => 'khairul@utmspace.edu.my', 'password' => Hash::make('990906066299')]);
        DB::table('staff')->insert(['name' => "MUHAMMAD KHAIRUL NIZAM BIN MAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AHMAD SYUKRAN BIN RUSLI", 'email' => 'syukran@utmspace.edu.my', 'password' => Hash::make('940511036487')]);
        DB::table('staff')->insert(['name' => "AHMAD SYUKRAN BIN RUSLI", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL HIDAYAH BINTI MASHOD", 'email' => 'n_hidayah@utmspace.edu.my', 'password' => Hash::make('950901016392')]);
        DB::table('staff')->insert(['name' => "NURUL HIDAYAH BINTI MASHOD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SITI FARIZA BINTI FARIS @ PARIS", 'email' => 'fariza@utmspace.edu.my', 'password' => Hash::make('870207105272')]);
        DB::table('staff')->insert(['name' => "SITI FARIZA BINTI FARIS @ PARIS", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MUHAMAD ISKANDAR BIN KELLANAH", 'email' => 'm.iskandar@utmspace.edu.my', 'password' => Hash::make('931027016455')]);
        DB::table('staff')->insert(['name' => "MUHAMAD ISKANDAR BIN KELLANAH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NURUL HYDAYAH BINTI ABDULLAH", 'email' => 'hydayah@kolejspace.edu.my', 'password' => Hash::make('880213435242')]);
        DB::table('staff')->insert(['name' => "NURUL HYDAYAH BINTI ABDULLAH", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MOHD SHAFIZAN BIN ABD HALIM ", 'email' => 'shafizan@spacecollege.edu,my', 'password' => Hash::make('770803016649')]);
        DB::table('staff')->insert(['name' => "MOHD SHAFIZAN BIN ABD HALIM ", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "SAIFUL ADILIN BIN ABD LATIF", 'email' => 'saifuladilin@kolejspace.edu.my', 'password' => Hash::make('901205125543')]);
        DB::table('staff')->insert(['name' => "SAIFUL ADILIN BIN ABD LATIF", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "HERMAN LAYABO", 'email' => 'herman@kolejspace.edu.my', 'password' => Hash::make('831217125259')]);
        DB::table('staff')->insert(['name' => "HERMAN LAYABO", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "MASTURA BINTI MOHD BASRI BAHARAN", 'email' => 'mastura@kolejspace.edu.my', 'password' => Hash::make('890821055058')]);
        DB::table('staff')->insert(['name' => "MASTURA BINTI MOHD BASRI BAHARAN", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "ASNUL DAHAR BIN MINGHAT", 'email' => 'asnul@kolejspace.edu.my', 'password' => Hash::make('690114045073')]);
        DB::table('staff')->insert(['name' => "ASNUL DAHAR BIN MINGHAT", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "AIMAN BIN AHMAD", 'email' => 'aiman@kolejspace.edu.my', 'password' => Hash::make('910606075369')]);
        DB::table('staff')->insert(['name' => "AIMAN BIN AHMAD", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NUR AYUNI BINTI ABU TALIB", 'email' => 'ayuni@kolejspace.edu.my', 'password' => Hash::make('850105145822')]);
        DB::table('staff')->insert(['name' => "NUR AYUNI BINTI ABU TALIB", 'user_id' => $id]);
                                                                            
        $id = DB::table('users')->insertGetId(['name' => "NORMARIANA BINTI JAFFAR", 'email' => 'maria@kolejspace.edu.my', 'password' => Hash::make('880106015402')]);
        DB::table('staff')->insert(['name' => "NORMARIANA BINTI JAFFAR", 'user_id' => $id]);
    }
}
