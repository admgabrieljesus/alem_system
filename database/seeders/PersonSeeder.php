<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $persons = [
            
            ['name' => 'ADRIANH KALIKA ARAÚJO DA SILVA','birth' => '19930323','proposal' => '20151006','acceptance' => '20160218','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'ADRIANO DE OLIVEIRA LEOCÁDIO','birth' => '19890102','proposal' => '20120320','acceptance' => '20131214','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'ALAN VOGEL','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'M','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'ALESSANDRA LIMA DE SOUSA DANTAS','birth' => '19940430','proposal' => '20190319','acceptance' => '18991230','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'ALESSANDRO NUNES SOUZA','birth' => '19760312','proposal' => '20051117','acceptance' => '20110710','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'ALEXANDRE CALDAS COUTO','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'M','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'ALLINE DA MOTA RABELLO ROSENDO','birth' => '19850119','proposal' => '20120427','acceptance' => '20121201','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'ANA LÚCIA SILVA CIRILO','birth' => '19630603','proposal' => '18991230','acceptance' => '19930128','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 2],
            ['name' => 'ANA MARIA BARRETO','birth' => '19661219','proposal' => '20150720','acceptance' => '18991230','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 3],
            ['name' => 'ANA ROSA MIRANDA MUNIZ','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'ANDREAS KARL FUCHS','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'ANDRESSA BRITO DE A. SALLES','birth' => '18991230','proposal' => '18991230','acceptance' => '20201019','category_id' => 9,'gender' => 'F','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'ANTÔNIA MARIA DE AZEVEDO GAMA','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'AURA CÉLIA GONÇALVES CARVALHO','birth' => '19750424','proposal' => '20160106','acceptance' => '20170629','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'AURÉLIO VEA VARGAS','birth' => '18991230','proposal' => '20120928','acceptance' => '20130714','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'AURISE BRANDÃO LOPES','birth' => '19590709','proposal' => '18991230','acceptance' => '19860403','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 3],
            ['name' => 'AURISTÉA C. SOUZA E SILVA','birth' => '19650624','proposal' => '19870405','acceptance' => '19890601','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'BRUNELY RIBEIRO MACHADO','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'CAREN GSCHNEITNER DE LIMA','birth' => '19900105','proposal' => '20171211','acceptance' => '20150925','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'CAROLINA PRATES MORI','birth' => '19840111','proposal' => '20200302','acceptance' => '18991230','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 3],
            ['name' => 'CLÉO BRASIL PADILHA','birth' => '19601222','proposal' => '19900819','acceptance' => '19870220','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'DALVA DEL VIGNA','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 3],
            ['name' => 'DÉBORAH CHRISTINA BESERRA SILVA','birth' => '19890119','proposal' => '18991230','acceptance' => '20161124','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 3],
            ['name' => 'DÉLIO RAUL ARIÑO GARCIA','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'DIEGO MACIEL LOPES','birth' => '19890626','proposal' => '20141113','acceptance' => '20141101','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'DIEGO TIBÉRIO LONDERO MACIEL','birth' => '19860527','proposal' => '20150616','acceptance' => '20150924','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'EDILSON RENZETTI','birth' => '19680413','proposal' => '19870220','acceptance' => '19911210','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'EDINA MARIA OLIVEIRA','birth' => '19611012','proposal' => '20061005','acceptance' => '20070416','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 3],
            ['name' => 'ELIANE BERENDINA LOMAN DE BARROS','birth' => '19710823','proposal' => '20050105','acceptance' => '20051210','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'ELIANE REZENDE DE ARIÑO','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'ELIANE RIERA DE FARIA','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'ELIAS COELHO DE ASSIS','birth' => '19690806','proposal' => '18991230','acceptance' => '19911210','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'ELIAS DA SILVA PEREIRA','birth' => '19730109','proposal' => '20150624','acceptance' => '20150901','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'ELIZABETH ANGELINE ROSEMBACH','birth' => '19830207','proposal' => '20120101','acceptance' => '20120526','category_id' => 4,'gender' => 'F','nationality_id' => 2,'marital_id' => 1],
            ['name' => 'ENOQUE OSÓRIO DE FARIA','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'ETELVINA ALMEIDA GONÇALVES WERNICKE','birth' => '19630204','proposal' => '18991230','acceptance' => '19860403','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'FÁBIO CRISTIANO N. DE BARROS','birth' => '19750905','proposal' => '20050115','acceptance' => '20051210','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'FRANK PEREIRA DANTAS','birth' => '19941217','proposal' => '18991230','acceptance' => '20190319','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'GABRIEL BASTOS GUIMARÃES PEREIRA','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'M','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'GABRIEL DE JESUS FILHO','birth' => '18991230','proposal' => '18991230','acceptance' => '20201002','category_id' => 9,'gender' => 'M','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'GABRIELA PEREIRA DE O. FREITAS','birth' => '18991230','proposal' => '18991230','acceptance' => '20210315','category_id' => 9,'gender' => 'F','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'GABRIELA REGINA SIEGLINDE FUCHS','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'GINO FERREIRA DA SILVA','birth' => '19621105','proposal' => '19870405','acceptance' => '19890601','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'GIOVANNA HELEM L. MENDES','birth' => '18991230','proposal' => '18991230','acceptance' => '20200705','category_id' => 9,'gender' => 'F','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'HADASSA MESTRINHO SYLVESTRE','birth' => '19851124','proposal' => '20190201','acceptance' => '18991230','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 3],
            ['name' => 'HADASSA ZORZETTI','birth' => '19940318','proposal' => '20171205','acceptance' => '20171206','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 3],
            ['name' => 'HÉBER FERNANDES NEGRÃO','birth' => '19820612','proposal' => '20150813','acceptance' => '20131214','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'HELEM ANDRESSA DE OLIVEIRA FOGAÇA','birth' => '19830715','proposal' => '20091003','acceptance' => '20091212','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'HELIANA MARIA DA SILVA','birth' => '18991230','proposal' => '19890731','acceptance' => '19911201','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'IVANILDO CLETO TRENTIN','birth' => '18991230','proposal' => '18991230','acceptance' => '20201104','category_id' => 9,'gender' => 'M','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'JACKSON ROSEMBACH DE OLIVEIRA','birth' => '19810313','proposal' => '20101028','acceptance' => '20120128','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'JACQUELINE DOS SANTOS','birth' => '19660424','proposal' => '20150617','acceptance' => '20150901','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 3],
            ['name' => 'JAIME CASSEB DA SILVA','birth' => '19591017','proposal' => '18991230','acceptance' => '19990921','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'JAQUELINE SOUZA PINHEIRO','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'JESSÉ SILVEIRA FOGAÇA','birth' => '19830917','proposal' => '20091003','acceptance' => '20091212','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'JOACHIM WERNICKE','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'JOÃO MARCOS DE FRANÇA VASCONCELOS','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'JOVANA CHRISTINA COELHO PEREIRA','birth' => '19720817','proposal' => '20150624','acceptance' => '20150901','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'JUDITH BRAUNWARTH COUTO','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'JULIANA BENEDITO PACHECO','birth' => '19730318','proposal' => '20071205','acceptance' => '20071211','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'KEILA VIEIRA DE SOUSA PECHER','birth' => '19750411','proposal' => '20091207','acceptance' => '20091221','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'KÉSIA NINA CAETANO SILVA MARESTEGÃO','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'KIYOSHI ISHIDA','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'KYOKO IGARASHI CASSEB','birth' => '19580802','proposal' => '18991230','acceptance' => '19990921','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'LAERTE ANTONIO ZORZETTI','birth' => '19621203','proposal' => '18991230','acceptance' => '19911210','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'LAUDICÉIA DE MELO SILVA','birth' => '19670620','proposal' => '19900529','acceptance' => '19900815','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'LEIDIANE CHAVES NOGUEIRA','birth' => '19891127','proposal' => '20160731','acceptance' => '20170308','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 3],
            ['name' => 'LENITA DE PAULA SOUZA ASSIS','birth' => '19531117','proposal' => '18991230','acceptance' => '19911210','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'LETÍCIA GONÇALVES MENDES VEA','birth' => '19860929','proposal' => '20130105','acceptance' => '20130714','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'LUANA DE ALENCAR NUNES PAULINO','birth' => '19940109','proposal' => '20160405','acceptance' => '20170308','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'LUCAS JOSÉ PAULINO','birth' => '19850703','proposal' => '20160405','acceptance' => '20170308','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'LUCIANA FRANÇA DE OLIVEIRA','birth' => '19890224','proposal' => '20141113','acceptance' => '20141119','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'LUCIENE PEREIRA DO NASCIMENTO','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'LUDHIANA ELISA MOREIRA SALES E SILVA','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'LUIS DANIEL INFANTE PEÑA','birth' => '18991230','proposal' => '18991230','acceptance' => '20210206','category_id' => 9,'gender' => 'M','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'LUÍZA ROSA LEÃO BEZERRA LEÃO','birth' => '18991230','proposal' => '18991230','acceptance' => '20200705','category_id' => 9,'gender' => 'F','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'LUKAS CHRISTIAN BESERRA SILVA','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'LUSINEIDE MARIA DE MOURA','birth' => '19660525','proposal' => '18991230','acceptance' => '19960215','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'MARCELO PECHER ROSA','birth' => '19741028','proposal' => '20110830','acceptance' => '20120526','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'MARCOS C. GONÇALVES','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 9,'gender' => 'M','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'MARIA EDITE BRITO SANTOS','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'MARIA ROSA MONTE','birth' => '19610203','proposal' => '20011130','acceptance' => '20030120','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 2],
            ['name' => 'MARLI SANTOS OLIVEIRA','birth' => '19670730','proposal' => '20071207','acceptance' => '20071216','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'MASLOVA CONTE RENZETTI','birth' => '19590802','proposal' => '18991230','acceptance' => '19860403','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'MAX HENRIQUE MENUZZO LUCON','birth' => '18991230','proposal' => '18991230','acceptance' => '20201019','category_id' => 9,'gender' => 'M','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'MAYRES OLIVEIRA COSTA','birth' => '18991230','proposal' => '18991230','acceptance' => '20210217','category_id' => 9,'gender' => 'M','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'MEIRE BARBOZA FUENTES','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 3],
            ['name' => 'NATÁLIA G. BARBOSA DE SOUSA','birth' => '18991230','proposal' => '18991230','acceptance' => '20210311','category_id' => 9,'gender' => 'F','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'NELSON ROBERTO SOUZA GUIMARÃES','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'M','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'NORVAL OLIVEIRA DA SILVA','birth' => '19630214','proposal' => '18991230','acceptance' => '19900815','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'ODETE SCHMALZ','birth' => '19421224','proposal' => '20010115','acceptance' => '20031214','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'OSEAS BESERRA DA SILVA','birth' => '19610913','proposal' => '19890603','acceptance' => '19911201','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'PAULO CÉSAR DUARTE DE OLIVEIRA','birth' => '19690715','proposal' => '18991230','acceptance' => '19980306','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'PAULO CÉSAR NUNES DO NASCIMENTO','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'M','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'QUÉZIA MOSTI DE OLIVEIRA','birth' => '19651107','proposal' => '18991230','acceptance' => '19911212','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'RAQUEL PEREIRA DA COSTA PADILHA','birth' => '19541009','proposal' => '19900602','acceptance' => '19900815','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'RAQUEL PEREIRA LIMA NUNES','birth' => '19730905','proposal' => '20110412','acceptance' => '20110710','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'RAQUEL VILELA ALVES','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'REBECA ZORZETTI','birth' => '19890221','proposal' => '20171205','acceptance' => '20171206','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 3],
            ['name' => 'REBECCA FIGUEIRAS AZEVEDO MENDONÇA','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'RENAN TOMAZ BONACORSO','birth' => '18991230','proposal' => '18991230','acceptance' => '20200705','category_id' => 9,'gender' => 'M','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'ROGÉRIO ROSA DA SILVA','birth' => '19750823','proposal' => '20110411','acceptance' => '20120128','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'ROSEANE DOS SANTOS SOUZA','birth' => '19840127','proposal' => '20120904','acceptance' => '20130301','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 3],
            ['name' => 'ROSILENE MARIA ALVES','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'RUTH KELLY ALMEIDA DE CASTRO LEOCÁDIO','birth' => '19900424','proposal' => '20120801','acceptance' => '20131214','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'RUTH WARKENTIN','birth' => '18991230','proposal' => '18991230','acceptance' => '20120328','category_id' => 9,'gender' => 'F','nationality_id' => 3,'marital_id' => 1 ],
            ['name' => 'SAHAH LIMA CIRINO','birth' => '18991230','proposal' => '18991230','acceptance' => '20210312','category_id' => 9,'gender' => 'F','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'SAMUEL SANTOS DE SOUZA','birth' => '19861026','proposal' => '20170308','acceptance' => '20160729','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 3],
            ['name' => 'SEIR CAMACHO TEIXEIRA','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'SHEILA SCHNEIDER SOUSA','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'SOLANGE AMÂNCIO ZORZETTI','birth' => '19640621','proposal' => '18991230','acceptance' => '19911210','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'SOLANGE OLIVEIRA RIOS','birth' => '19680710','proposal' => '20140812','acceptance' => '20151101','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 3],
            ['name' => 'SOPHIA MENEZES VICTALINO NEGRÃO','birth' => '19880312','proposal' => '20131217','acceptance' => '20141121','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'THIAGO ROSENDO DE SOUZA','birth' => '19840326','proposal' => '20120427','acceptance' => '20121201','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'VALDICILENE MARIA DO NASCIMENTO ISHIDA','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'VANN CLEYD DE LUCENA DOMINGUES','birth' => '19890926','proposal' => '18991230','acceptance' => '19991218','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'VICTORIA INFANTE PEÑA','birth' => '19920606','proposal' => '20140422','acceptance' => '20150901','category_id' => 4,'gender' => 'F','nationality_id' => 1,'marital_id' => 3],
            ['name' => 'WILLIAM CÉSAR LOPES DOMINGUES','birth' => '19710710','proposal' => '18991230','acceptance' => '19991218','category_id' => 4,'gender' => 'M','nationality_id' => 1,'marital_id' => 1],
            ['name' => 'WILLIAN ROY PENNING','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 7,'gender' => 'M','nationality_id' => 2,'marital_id' => 3],
            ['name' => 'WINNE SANTOS CARVALHO','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'M','nationality_id' => 1 ,'marital_id' => 1 ],
            ['name' => 'WITOR FELIPE R. MONTEIRO','birth' => '18991230','proposal' => '18991230','acceptance' => '20200414','category_id' => 9,'gender' => 'M','nationality_id' => 1,'marital_id' => 1 ],
            ['name' => 'YARA ALMEIDA DE CAMARGO GUIMARÃES','birth' => '18991230','proposal' => '18991230','acceptance' => '18991230','category_id' => 3,'gender' => 'F','nationality_id' => 1,'marital_id' => 1 ],

        ];

        foreach ($persons as $person) {
           Person::factory(1)->create($person);
        }

    }
}
