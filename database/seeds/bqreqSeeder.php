<?php

// namespace App;


use Illuminate\Database\Seeder;

use App\Bqreq as bqs;


class bqreqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	bqs::truncate();
/*        bqs::create([
        		'bqcats_id' => 1,
        		'bqcode' => 'P11C1A',
        		'size1' => '1/2',
        		'size2' => NULL,
        		'descr' => 'PIPE SCH10S A312-TP304',
        		'qty' => 15
        	]); 
        bqs::create([
        		'bqcats_id' => 1,
        		'bqcode' => 'P11C1A',
        		'size1' => '1/2',
        		'size2' => NULL,
        		'descr' => 'PIPE SCH10S A312-TP304',
        		'qty' => 5
        	]); 
        bqs::create([
        		'bqcats_id' => 1,
        		'bqcode' => 'P11C1A',
        		'size1' => '1/2',
        		'size2' => NULL,
        		'descr' => 'PIPE SCH10S A312-TP304',
        		'qty' => 10
        	]); 
        bqs::create([
        		'bqcats_id' => 1,
        		'bqcode' => 'P11C1A',
        		'size1' => '1',
        		'size2' => NULL,
        		'descr' => 'PIPE SCH10S A312-TP304',
        		'qty' => 2
        	]); 
        bqs::create([
        		'bqcats_id' => 1,
        		'bqcode' => 'P11C1A',
        		'size1' => '1',
        		'size2' => NULL,
        		'descr' => 'PIPE SCH10S A312-TP304',
        		'qty' => 19
        	]); 
        bqs::create([
        		'bqcats_id' => 1,
        		'bqcode' => 'P11C1A',
        		'size1' => '2',
        		'size2' => NULL,
        		'descr' => 'PIPE SCH10S A312-TP304',
        		'qty' => 15
        	]); */ 
        bqs::create(['bqcats_id' => 1,'bqcode' => 'P04A1A - 4','size1' => '4','size2' => NULL,'descr' => 'PIPE SCH40 A53-GR.B ERW','qty' => 34895]);
        bqs::create(['bqcats_id' => 1,'bqcode' => 'P08A0C - 1','size1' => '1','size2' => NULL,'descr' => 'PIPE SCH80 A106-GR.B SMLS','qty' => 2831]);
        bqs::create(['bqcats_id' => 1,'bqcode' => 'P08A0C - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'PIPE SCH80 A106-GR.B SMLS','qty' => 98847]);
        bqs::create(['bqcats_id' => 1,'bqcode' => 'P08A0C - 3/4','size1' => '3/4','size2' => NULL,'descr' => 'PIPE SCH80 A106-GR.B SMLS','qty' => 2790]);
        bqs::create(['bqcats_id' => 1,'bqcode' => 'P08A0C - 4','size1' => '4','size2' => NULL,'descr' => 'PIPE SCH80 A106-GR.B SMLS','qty' => 23586]);
        bqs::create(['bqcats_id' => 1,'bqcode' => 'P08A1A - 1','size1' => '1','size2' => NULL,'descr' => 'PIPE SCH80 A53-GR.B ERW','qty' => 23081]);
        bqs::create(['bqcats_id' => 1,'bqcode' => 'P08A1A - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'PIPE SCH80 A53-GR.B ERW','qty' => 7372]);
        bqs::create(['bqcats_id' => 1,'bqcode' => 'P08A1B - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'PIPE SCH80 A53-GR.B ERW GALV.','qty' => 5019]);
        bqs::create(['bqcats_id' => 1,'bqcode' => 'P08A1B - 3/4','size1' => '3/4','size2' => NULL,'descr' => 'PIPE SCH80 A53-GR.B ERW GALV.','qty' => 21716]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'CF90SE0A - 1','size1' => '1','size2' => NULL,'descr' => 'FULL COUPLING 3000LB SW A105','qty' => 2]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'CF90SE0A - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'FULL COUPLING 3000LB SW A105','qty' => 4]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'CF90SE0B - 3/4','size1' => '3/4','size2' => NULL,'descr' => 'FULL COUPLING 3000LB SW A105 GALV.','qty' => 1]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'CH90SE0A - 1','size1' => '1','size2' => NULL,'descr' => 'HALF COUPLING 3000LB SW A105','qty' => 1]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'CH90SE0A - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'HALF COUPLING 3000LB SW A105','qty' => 8]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'CH90SE0A - 3/4','size1' => '3/4','size2' => NULL,'descr' => 'HALF COUPLING 3000LB SW A105','qty' => 4]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'EK04BE1A - 4','size1' => '4','size2' => NULL,'descr' => '45 ELBOW SCH40 BW A234-WPB','qty' => 1]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'EK08BE1A - 4','size1' => '4','size2' => NULL,'descr' => '45 ELBOW SCH80 BW A234-WPB','qty' => 1]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'EL04BE1A - 4','size1' => '4','size2' => NULL,'descr' => '90 LR ELBOW SCH40 BW A234-WPB','qty' => 15]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'EL08BE1A - 4','size1' => '4','size2' => NULL,'descr' => '90 LR ELBOW SCH80 BW A234-WPB','qty' => 20]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'EL90SE0A - 1','size1' => '1','size2' => NULL,'descr' => '90 ELBOW 3000LB SW A105','qty' => 13]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'EL90SE0A - 1/2','size1' => '1/2','size2' => NULL,'descr' => '90 ELBOW 3000LB SW A105','qty' => 62]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'EL90SE0A - 3/4','size1' => '3/4','size2' => NULL,'descr' => '90 ELBOW 3000LB SW A105','qty' => 3]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'EL90SE0B - 1/2','size1' => '1/2','size2' => NULL,'descr' => '90 ELBOW 3000LB SW A105 GALV.','qty' => 5]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'EL90SE0B - 3/4','size1' => '3/4','size2' => NULL,'descr' => '90 ELBOW 3000LB SW A105 GALV.','qty' => 8]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'EP90NE0A - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'EXTENSION PIECE PExNPT A105','qty' => 4]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'KA89NE0A - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'CAP 3000LB NPT A105','qty' => 17]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'NQ08NA0C - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'NIPPLE SCH80x75L PExNPT A106-GR.B SMLS','qty' => 17]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'NV90PE0A - 3/4 x 1/2','size1' => '3/4','size2' => '1/2','descr' => 'CON SWAGED NIPPLE 3000LB PExPE A105','qty' => 5]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'RC90SE0A - 1 x 1/2','size1' => '1','size2' => '1/2','descr' => 'CON REDUCER 3000LB SW A105','qty' => 4]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'RC90SE0B - 3/4 x 1/2','size1' => '3/4','size2' => '1/2','descr' => 'CON REDUCER 3000LB SW A105 GALV.','qty' => 1]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'TT04BE1A - 4','size1' => '4','size2' => NULL,'descr' => 'STR TEE SCH40 BW A234-WPB','qty' => 1]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'TT04BE1A - 6 x 4','size1' => '6','size2' => '4','descr' => 'RED TEE SCH40 BW A234-WPB','qty' => 2]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'TT08BE1A - 4','size1' => '4','size2' => NULL,'descr' => 'STR TEE SCH80 BW A234-WPB','qty' => 1]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'TT90SE0A - 1','size1' => '1','size2' => NULL,'descr' => 'STR TEE 3000LB SW A105','qty' => 1]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'TT90SE0A - 1 x 1/2','size1' => '1','size2' => '1/2','descr' => 'RED TEE 3000LB SW A105','qty' => 1]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'TT90SE0A - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'STR TEE 3000LB SW A105','qty' => 23]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'TT90SE0A - 3/4','size1' => '3/4','size2' => NULL,'descr' => 'STR TEE 3000LB SW A105','qty' => 4]);
        bqs::create(['bqcats_id' => 2,'bqcode' => 'TT90SE0B - 3/4','size1' => '3/4','size2' => NULL,'descr' => 'STR TEE 3000LB SW A105 GALV.','qty' => 2]);
        bqs::create(['bqcats_id' => 3,'bqcode' => 'F12K08RE0A - 1','size1' => '1','size2' => NULL,'descr' => 'FLANGE ANSI 150LB-SCH80 SW-RF A105','qty' => 2]);
        bqs::create(['bqcats_id' => 3,'bqcode' => 'F12K08RE0A - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'FLANGE ANSI 150LB-SCH80 SW-RF A105','qty' => 1]);
        bqs::create(['bqcats_id' => 3,'bqcode' => 'F12K08RE0B - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'FLANGE ANSI 150LB-SCH80 SW-RF A105 GALV.','qty' => 1]);
        bqs::create(['bqcats_id' => 3,'bqcode' => 'F12K08RE0B - 3/4','size1' => '3/4','size2' => NULL,'descr' => 'FLANGE ANSI 150LB-SCH80 SW-RF A105 GALV.','qty' => 2]);
        bqs::create(['bqcats_id' => 3,'bqcode' => 'F16W08RE0A - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'FLANGE ANSI 600LB-SCH80 WN-RF A105','qty' => 13]);
        bqs::create(['bqcats_id' => 3,'bqcode' => 'F16W08RE0A - 3/4','size1' => '3/4','size2' => NULL,'descr' => 'FLANGE ANSI 600LB-SCH80 WN-RF A105','qty' => 4]);
        bqs::create(['bqcats_id' => 3,'bqcode' => 'F16W08RE0A - 4','size1' => '4','size2' => NULL,'descr' => 'FLANGE ANSI 600LB-SCH80 WN-RF A105','qty' => 22]);
        bqs::create(['bqcats_id' => 4,'bqcode' => 'G12S1Q11 - 3/4','size1' => '3/4','size2' => NULL,'descr' => 'GASKET ANSI 150LB RF/t1.5 T#1995W','qty' => 1]);
        bqs::create(['bqcats_id' => 4,'bqcode' => 'G12S1Q55 - 1','size1' => '1','size2' => NULL,'descr' => 'GASKET ANSI 150LB RF/t1.5 V#GF300','qty' => 1]);
        bqs::create(['bqcats_id' => 4,'bqcode' => 'G16V6R96 - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'GASKET ANSI 600LB RF/t4.5 V#6596V-EES or EQ','qty' => 10]);
        bqs::create(['bqcats_id' => 4,'bqcode' => 'G16V6R96 - 3/4','size1' => '3/4','size2' => NULL,'descr' => 'GASKET ANSI 600LB RF/t4.5 V#6596V-EES or EQ','qty' => 4]);
        bqs::create(['bqcats_id' => 4,'bqcode' => 'G16V6R96 - 4','size1' => '4','size2' => NULL,'descr' => 'GASKET ANSI 600LB RF/t4.5 V#6596V-EES or EQ','qty' => 26]);
        bqs::create(['bqcats_id' => 5,'bqcode' => 'BSP0C - 1/2 x 65L','size1' => '1/2','size2' => '65L','descr' => 'STUD BOLT & 2-HEAVY HEX. NUTS  1/2-13UNCx65L A193-GR.B7/A194-GR.2H','qty' => 4]);
        bqs::create(['bqcats_id' => 5,'bqcode' => 'BSP0C - 1/2 x 70L','size1' => '1/2','size2' => '70L','descr' => 'STUD BOLT & 2-HEAVY HEX. NUTS  1/2-13UNCx70L A193-GR.B7/A194-GR.2H','qty' => 4]);
        bqs::create(['bqcats_id' => 5,'bqcode' => 'BSP0C - 1/2 x 80L','size1' => '1/2','size2' => '80L','descr' => 'STUD BOLT & 2-HEAVY HEX. NUTS 1/2-13UNCx80L A193-GR.B7 / A194-GR.2H','qty' => 8]);
        bqs::create(['bqcats_id' => 5,'bqcode' => 'BSP0C - 1/2 x 90L','size1' => '1/2','size2' => '90L','descr' => 'STUD BOLT & 2-HEAVY HEX. NUTS 1/2-13UNCx90L A193-GR.B7 / A194-GR.2H','qty' => 16]);
        bqs::create(['bqcats_id' => 5,'bqcode' => 'BSP0C - 5/8 x 100L','size1' => '5/8','size2' => '100L','descr' => 'STUD BOLT & 2-HEAVY HEX. NUTS 5/8-11UNCx100L A193-GR.B7 / A194-GR.2H','qty' => 8]);
        bqs::create(['bqcats_id' => 5,'bqcode' => 'BSP0C - 7/8 x 150L','size1' => '7/8','size2' => '150L','descr' => 'STUD BOLT & 2-HEAVY HEX. NUTS 7/8-9UNCx150L A193-GR.B7 / A194-GR.2H','qty' => 144]);
        bqs::create(['bqcats_id' => 5,'bqcode' => 'BSP0C - 7/8 x 175L','size1' => '7/8','size2' => '175L','descr' => 'STUD BOLT & 2-HEAVY HEX. NUTS 7/8-9UNCx175L A193-GR.B7 / A194-GR.2H','qty' => 32]);
        bqs::create(['bqcats_id' => 6,'bqcode' => 'VC600(D) - 4','size1' => '4','size2' => NULL,'descr' => 'CHECK VALVE ANSI 600LB RF A216-WCB BODY  13 Cr TRIM, STLD D&BST, SWG-BC','qty' => 1]);
        bqs::create(['bqcats_id' => 6,'bqcode' => 'VC800F - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'CHECK VALVE ANSI 800LB SW A105 BODY  13 Cr TRIM, STLD D&BST, HL-BC','qty' => 1]);
        bqs::create(['bqcats_id' => 6,'bqcode' => 'VC800F - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'CHECK VALVE ANSI 800LB SW A105 BODY 13CR TRIM, STLD D&BST, HL-BC','qty' => 1]);
        bqs::create(['bqcats_id' => 6,'bqcode' => 'VC800F - 3/4','size1' => '3/4','size2' => NULL,'descr' => 'CHECK VALVE ANSI 800LB SW A105 BODY  13 Cr TRIM, STLD D&BST, HL-BC','qty' => 1]);
        bqs::create(['bqcats_id' => 6,'bqcode' => 'VG600(D) - 4','size1' => '4','size2' => NULL,'descr' => 'GATE VALVE ANSI 600LB RF A216-WCB BODY  13 Cr TRIM, STLD D&BST, OSY-BB','qty' => 4]);
        bqs::create(['bqcats_id' => 6,'bqcode' => 'VG600F(D)(B) - 4','size1' => '4','size2' => NULL,'descr' => 'GATE VALVE BELLOW SEAL TYPE ANSI 600LB RF A216-WCB BODY  13 Cr TRIM, STLD D&BST, OSY-BB','qty' => 4]);
        bqs::create(['bqcats_id' => 6,'bqcode' => 'VG800F - 1','size1' => '1','size2' => NULL,'descr' => 'GATE VALVE ANSI 800LB SW A105 BODY 13Cr TRIM, STLD D&BST, OSY-BB','qty' => 1]);
        bqs::create(['bqcats_id' => 6,'bqcode' => 'VG800F - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'GATE VALVE ANSI 800LB SW A105 BODY  13 Cr TRIM, STLD D&BST, OSY-BB','qty' => 5]);
        bqs::create(['bqcats_id' => 6,'bqcode' => 'VG800F - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'GATE VALVE ANSI 800LB SW A105 BODY 13CR TRIM, STLD D&BST, OSY-BB','qty' => 1]);
        bqs::create(['bqcats_id' => 6,'bqcode' => 'VG800F - 3/4','size1' => '3/4','size2' => NULL,'descr' => 'GATE VALVE ANSI 800LB SW A105 BODY  13 Cr TRIM, STLD D&BST, OSY-BB','qty' => 1]);
        bqs::create(['bqcats_id' => 6,'bqcode' => 'VG800F - 3/4','size1' => '3/4','size2' => NULL,'descr' => 'GATE VALVE ANSI 800LB SW A105 BODY 13CR TRIM, STLD D&BST, OSY-BB','qty' => 1]);
        bqs::create(['bqcats_id' => 6,'bqcode' => 'VG800F(B) - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'GATE VALVE BELLOW SEAL TYPE ANSI 800LB SW A105 BODY  13 Cr TRIM, STLD D&BST, OSY-BB','qty' => 30]);
        bqs::create(['bqcats_id' => 6,'bqcode' => 'VG800F(B) - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'GATE VALVE BELLOW SEAL TYPE ANSI 800LB SW A105 BODY 13Cr TRIM, STLD D&BST, OSY-BB','qty' => 2]);
        bqs::create(['bqcats_id' => 6,'bqcode' => 'VG800F(B) - 3/4','size1' => '3/4','size2' => NULL,'descr' => 'GATE VALVE BELLOW SEAL TYPE ANSI 800LB SW A105 BODY  13 Cr TRIM, STLD D&BST, OSY-BB','qty' => 2]);
        bqs::create(['bqcats_id' => 6,'bqcode' => 'VO800F(B) - 3/4','size1' => '3/4','size2' => NULL,'descr' => 'GLOBE VALVE BELLOW SEAL TYPE ANSI 800LB SW A105 BODY  13 Cr TRIM, STLD D&BST, OSY-BB','qty' => 4]);
        bqs::create(['bqcats_id' => 7,'bqcode' => 'SP- - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'FIG.8 BLANK ANSI 600LB RF/t6 SS304','qty' => 4]);
        bqs::create(['bqcats_id' => 7,'bqcode' => 'SP- - 3/4','size1' => '3/4','size2' => NULL,'descr' => 'FIG.8 BLANK ANSI 600LB RF/t6 SS304','qty' => 2]);
        bqs::create(['bqcats_id' => 7,'bqcode' => 'SP- - 4','size1' => '4','size2' => NULL,'descr' => 'FIG.8 BLANK ANSI 600LB RF/t20 SS304','qty' => 4]);
        bqs::create(['bqcats_id' => 8,'bqcode' => 'GAUPRE1/2 - 1/2','size1' => '1/2','size2' => NULL,'descr' => 'PG','qty' => 4]);
            
     
    }
}
