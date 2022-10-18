<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Email;
use App\Models\Person;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emails = [
           ['url' => 'adrianh_silva@wycliffe.org.br', 'emailable_id' => 1],         
            ['url' => 'adriano_leocadio@wycliffe.org.br', 'emailable_id' => 2],         
            ['url' => 'alan_vogel@sil.org', 'emailable_id' => 3],           
            ['url' => 'alessandra_dantas@wycliffe.org.br', 'emailable_id' => 4],            
            ['url' => 'alessandro_nunes@wycliffe.org.br', 'emailable_id' => 5], ['url' => 'alessandrons@hotmail.com', 'emailable_id' => 5], ['url' => 'alessandro_nunes@pngbta.org', 'emailable_id' => 5],  
            ['url' => 'alexandre_couto@sil.org', 'emailable_id' => 6],          
            ['url' => 'alline_rosendo@wycliffe.org.br', 'emailable_id' => 7],   ['url' => 'allineradical2@hotmail.com', 'emailable_id' => 7],       
            ['url' => 'ana-lucia_cirilo@wycliffe.org.br', 'emailable_id' => 8], ['url' => 'anacirilo@hotmail.com', 'emailable_id' => 8],        
            ['url' => 'ana_barreto@wycliffe.org.br', 'emailable_id' => 9],  ['url' => 'anamaria.barreto.66@gmail.com', 'emailable_id' => 9],        
            ['url' => 'ana-rosa_muniz@wycliffe.org.br', 'emailable_id' => 10],  ['url' => 'anamuniz48@hotmail.com', 'emailable_id' => 10],      
            ['url' => 'familyfuchsag@gmail.com', 'emailable_id' => 11],         
                        
            ['url' => 'gama.antonia@yahoo.com.br', 'emailable_id' => 13],           
            ['url' => 'aura_carvalho@wycliffe.org.br', 'emailable_id' => 14],   ['url' => 'auragoncalves1975@hotmail.com', 'emailable_id' => 14],       
            ['url' => 'aurelio_vargas@wycliffe.org.br', 'emailable_id' => 15],          
            ['url' => 'aurise_lopes@wycliffe.org.br', 'emailable_id' => 16],    ['url' => 'auriseyuhup@gmail.com', 'emailable_id' => 16],       
            ['url' => 'tate_silva@wycliffe.org.br', 'emailable_id' => 17],  ['url' => 'gino-tate_silva@wycliffe.org.br', 'emailable_id' => 17],     
            ['url' => 'brunely_machado@wycliffe.org.br', 'emailable_id' => 18], ['url' => 'brunelymachado@gmail.com', 'emailable_id' => 18],        
            ['url' => 'caren_lima@wycliffe.org.br', 'emailable_id' => 19],          
            ['url' => 'carol_mori@wycliffe.org.br', 'emailable_id' => 20],  ['url' => 'carolinapratesmori@gmail.com', 'emailable_id' => 20],        
            ['url' => 'cleo_padilha@wycliffe.org.br', 'emailable_id' => 21],    ['url' => 'cpadilha09@gmail.com', 'emailable_id' => 21],        
            ['url' => 'ddvigna@yahoo.com.br', 'emailable_id' => 22],    ['url' => 'dvigna@gmail.com', 'emailable_id' => 22],        
            ['url' => 'deborah_silva@wycliffe.org.br', 'emailable_id' => 23],   ['url' => 'dedemuri@gmail.com', 'emailable_id' => 23],      
            ['url' => 'delioeliane@gmail.com', 'emailable_id' => 24],           
            ['url' => 'diego_lopes@wycliffe.org.br', 'emailable_id' => 25], ['url' => 'lopes2025@hotmail.com', 'emailable_id' => 25],       
            ['url' => 'diego_maciel@wycliffe.org.br', 'emailable_id' => 26],    ['url' => 'tiberio.diego@gmail.com', 'emailable_id' => 26],     
            ['url' => 'eddie_renzetti@sall.com', 'emailable_id' => 27],         
            ['url' => 'edina_oliveira@wycliffe.org.br', 'emailable_id' => 28],  ['url' => 'miss.edina@yahoo.com.br', 'emailable_id' => 28],     
            ['url' => 'eliane_barros@wycliffe.org.br', 'emailable_id' => 29],   ['url' => 'família_barros@wycliffe.org.br', 'emailable_id' => 29],      
            ['url' => 'delioeliane@gmail.com', 'emailable_id' => 30],           
            ['url' => 'elianeriera@gmail.com', 'emailable_id' => 31],           
            ['url' => 'elias_assis@wycliffe.org.br', 'emailable_id' => 32],         
            ['url' => 'elias_pereira@wycliffe.org.br', 'emailable_id' => 33],           
            ['url' => 'angie_de_oliveira@wycliffe.org', 'emailable_id' => 34],          
            ['url' => 'enoqueelianefaria@gmail.com', 'emailable_id' => 35],         
            ['url' => 'etelvina_goncalves@wycliffe.org.br', 'emailable_id' => 36],  ['url' => 'etelvinagvc@hotmail.com', 'emailable_id' => 36],     
            ['url' => 'cristiano_barros@wycliffe.org.br', 'emailable_id' => 37],    ['url' => 'familia_barros@wycliffe.org.br', 'emailable_id' => 37],  ['url' => 'fcristianonb@yahoo.com.br', 'emailable_id' => 37],   
            ['url' => 'frank_dantas@wycliffe.org.br', 'emailable_id' => 38],            
            ['url' => 'brunobgp91@gmail.com', 'emailable_id' => 39],            
                        
                        
            ['url' => 'gabriela_fuchs@wycliffe.org.br', 'emailable_id' => 42],          
            ['url' => 'gino_silva@wycliffe.org.br', 'emailable_id' => 43],  ['url' => 'ginotate@hotmail.com', 'emailable_id' => 43],        
                        
            ['url' => 'hadassa_sylvestre@wycliffe.org.br', 'emailable_id' => 45],           
            ['url' => 'hadassa_zorzetti@wycliffe.org.br', 'emailable_id' => 46],    ['url' => 'hadassazorzetti@gmail.com', 'emailable_id' => 46],       
            ['url' => 'heber_negrao@wycliffe.org.br', 'emailable_id' => 47],    ['url' => 'heber-sophia_negrao@wycliffe.org.br', 'emailable_id' => 47], ['url' => 'heberneg@yahoo.com.br', 'emailable_id' => 47],   
            ['url' => 'helem_fogaca@wycliffe.org.br', 'emailable_id' => 48],            
            ['url' => 'heliana_silva@wycliffe.org.br', 'emailable_id' => 49],   ['url' => 'oshe_silva@yahoo.com.br', 'emailable_id' => 49],     
                        
            ['url' => 'jackson_rosembach@wycliffe.org.br', 'emailable_id' => 51],   ['url' => 'ja13ckson@hotmail.com', 'emailable_id' => 51],       
            ['url' => 'jacqueline_santos@wycliffe.org.br', 'emailable_id' => 52],           
            ['url' => 'jaime_casseb@sil.org', 'emailable_id' => 53],            
            ['url' => 'jaqline.pinheiro@gmail.com', 'emailable_id' => 54],          
            ['url' => 'jesse_fogaca@wycliffe.org.br', 'emailable_id' => 55],            
            ['url' => 'joachim_wernicke@wycliffe.org.br', 'emailable_id' => 56],            
            ['url' => 'joao_vasconcelos@wycliffe.org.br', 'emailable_id' => 57],            
            ['url' => 'jovana_pereira@wycliffe.org.br', 'emailable_id' => 58],          
            ['url' => 'judite_couto@sil.org', 'emailable_id' => 59],            
            ['url' => 'juliana_pacheco@wycliffe.org.br', 'emailable_id' => 60], ['url' => 'julianapacheco2003@yahoo.com.br', 'emailable_id' => 60],     
            ['url' => 'keila_pecher@wycliffe.org.br', 'emailable_id' => 61],    ['url' => 'keilajuvep2005@hotmail.com', 'emailable_id' => 61],      
            ['url' => 'kesia-nina_marestegao@wycliffe.org.br', 'emailable_id' => 62],   ['url' => 'kesia-c@hotmail.com', 'emailable_id' => 62],     
            ['url' => 'k_ishida@wycliffe.org.br', 'emailable_id' => 63],    ['url' => 'k.ishida@uol.com.br', 'emailable_id' => 63],     
            ['url' => 'kyoko_casseb@sil.org', 'emailable_id' => 64],            
            ['url' => 'laerte_zorzetti@sil.org', 'emailable_id' => 65],         
            ['url' => 'lau_silva@wycliffe.org.br', 'emailable_id' => 66],           
            ['url' => 'leidi_nogueira@wycliffe.org.br', 'emailable_id' => 67],  ['url' => 'nogueira.leidi@gmail.com', 'emailable_id' => 67],        
            ['url' => 'lenita_assis@wycliffe.org.br', 'emailable_id' => 68],    ['url' => 'assis_lenita@hotmail.com', 'emailable_id' => 68],        
            ['url' => 'leticia_vea@wycliffe.org.br', 'emailable_id' => 69],         
            ['url' => 'luana_paulino@wycliffe.org.br', 'emailable_id' => 70],           
            ['url' => 'lucas_paulino@wycliffe.org.br', 'emailable_id' => 71],   ['url' => 'lucasaeiou@hotmail.com', 'emailable_id' => 71],      
            ['url' => 'luciana_lopes@wycliffe.org.br', 'emailable_id' => 72],   ['url' => 'lu2025@hotmail.com', 'emailable_id' => 72],      
            ['url' => 'paulo_cesar.nascimento@gmail.com', 'emailable_id' => 73],            
            ['url' => 'ludhiana_silva@wycliffe.org.br', 'emailable_id' => 74],          
                        
                        
            ['url' => 'lukas_christian@wycliffe.org.br', 'emailable_id' => 77], ['url' => 'lukas.christian.bs@gmail.com', 'emailable_id' => 77],        
            ['url' => 'neide_moura@wycliffe.org.br', 'emailable_id' => 78], ['url' => 'warua@hotmail.com', 'emailable_id' => 78],       
            ['url' => 'marcelo_pecher@wycliffe.org.br', 'emailable_id' => 79],  ['url' => 'marcelo.keila.br@hotmail.com', 'emailable_id' => 79],        
                        
            ['url' => 'edite_brito@wycliffe.org.br', 'emailable_id' => 81], ['url' => 'miss.editebrito@yahoo.com.br', 'emailable_id' => 81],        
            ['url' => 'rosa_monte@wycliffe.org.br', 'emailable_id' => 82],  ['url' => 'missrosinha@hotmail.com', 'emailable_id' => 82],     
            ['url' => 'marli_oliveira@wycliffe.org.br', 'emailable_id' => 83],          
            ['url' => 'maslovaconte@hotmail.com', 'emailable_id' => 84],    ['url' => 'maslovaconte@yahoo.com.br', 'emailable_id' => 84],       
                        
                        
            ['url' => 'meire_fuentes@wycliffe.org.br', 'emailable_id' => 87],           
                        
                        
            ['url' => 'norval_silva@wycliffe.org.br', 'emailable_id' => 90],            
            ['url' => 'odete_schmalz@wycliffe.org.br', 'emailable_id' => 91],   ['url' => 'odeteschmalz@ig.com.br', 'emailable_id' => 91],      
            ['url' => 'oseas_tiuwiri@wycliffe.org.br', 'emailable_id' => 92],   ['url' => 'tiuwiri@yahoo.com.br', 'emailable_id' => 92],        
            ['url' => 'paulo_oliveira@wycliffe.org.br', 'emailable_id' => 93],  ['url' => 'pauloquezia@gmail.com', 'emailable_id' => 93],       
            ['url' => 'paulo_cesar.nascimento@gmail.com', 'emailable_id' => 94],            
            ['url' => 'quezia_oliveira@wycliffe.org.br', 'emailable_id' => 95],         
            ['url' => 'raquel_padilha@wycliffe.org.br', 'emailable_id' => 96],          
            ['url' => 'raquel_nunes@pngbta.org', 'emailable_id' => 97],         
            ['url' => 'raquel_villela@wycliffe.org.br', 'emailable_id' => 98],  ['url' => 'raquelvillelaalves@gmail.com', 'emailable_id' => 98],        
            ['url' => 'rebeca_zorzetti@wycliffe.org.br', 'emailable_id' => 99], ['url' => 'becaz@yahoo.com.br', 'emailable_id' => 99],      
            ['url' => 'rebecca_filgueiras@wycliffe.org.br', 'emailable_id' => 100],         
                        
            ['url' => 'rogerio_rosa@wycliffe.org.br', 'emailable_id' => 102],   ['url' => 'rogeriorosa23@yahoo.co.uk', 'emailable_id' => 102],      
            ['url' => 'roseane_souza@wycliffe.org.br', 'emailable_id' => 103],          
            ['url' => 'leninharma@ig.com.br', 'emailable_id' => 104],   ['url' => 'udkawai@hotmail.com', 'emailable_id' => 104],        
            ['url' => 'ruth_leocadio@wycliffe.org.br', 'emailable_id' => 105],  ['url' => 'ruthkelly.castro@hotmail.com', 'emailable_id' => 105],       
                        
                        
            ['url' => 'samuel_souza@wycliffe.org.br', 'emailable_id' => 108],   ['url' => 'samuelll-souza@hotmail.com', 'emailable_id' => 108],     
            ['url' => 'seir_vasconcelos@wycliffe.org.br', 'emailable_id' => 109],           
            ['url' => 'sheila_mmm@wycliffe.org.br', 'emailable_id' => 110],         
            ['url' => 'solange_zorzetti@sil.org', 'emailable_id' => 111],           
            ['url' => 'solange_rios@wycliffe.org.br', 'emailable_id' => 112],   ['url' => 'solange.oliveirarios@gmail.com', 'emailable_id' => 112],     
            ['url' => 'sophia_negrao@wycliffe.org.br', 'emailable_id' => 113],  ['url' => 'sophia_victalino@hotmail.com', 'emailable_id' => 113],       
            ['url' => 'thiago_rosendo@wycliffe.org.br', 'emailable_id' => 114], ['url' => 'chuvanodeserto@hotmail.com', 'emailable_id' => 114],     
            ['url' => 'valdicilene_nascimento@wycliffe.org.br', 'emailable_id' => 115],         
            ['url' => 'Vann_domingues@wycliffe.org.br', 'emailable_id' => 116], ['url' => 'vann_cleyd@hotmail.com', 'emailable_id' => 116], ['url' => 'vanncleyd@yahoo.com.br', 'emailable_id' => 116], 
            ['url' => 'victoria_infante@wycliffe.org.br', 'emailable_id' => 117],           
            ['url' => 'william_domingues@wycliffe.org.br', 'emailable_id' => 118],  ['url' => 'uwira@hotmail.com', 'emailable_id' => 118],      
            ['url' => 'bill_penning@sil.org', 'emailable_id' => 119],           
            ['url' => 'winne.carvalho@gmail.com', 'emailable_id' => 120],           
            
                  
                        
                               
            
        ];

        foreach ($emails as $email) {
           $email['emailable_type'] = Person::class;
           Email::factory(1)->create($email);
        }
    }
}
