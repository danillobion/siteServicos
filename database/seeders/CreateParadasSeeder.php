<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Parada;

class CreateParadasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'rua'=>'Rua Sargento Evandro Marcílo',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Duque de Caxias',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Francisco Gueiros',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Pedro Cavalcante',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Av. Rui Barbosa',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Praça Tavares Correia',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Av. Júlio Brasileiro',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua XV de Novembro',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Dantas Barreto',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Barão do Rio Branco',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Praça Irmãos Miranda',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Nilo Peçanha',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Dr. José Mariano',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua 4',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Ernesto Nazareno',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Ataufo Alves',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Iomam Ferreira da Silva',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua 5',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Euclides da Cunha',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Carlos Chagas',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Vital Brasil',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua São João',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Saloá',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Bom Conselho',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'PE 177',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'BR 423',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Av. Simoa Gomes',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Av. Caruaru',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Av. Cel. Antônio Souto',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Praça Tiradentes',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Av. Santo Antônio',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Afonso Pena',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Caetés',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Senador Nilo Coelho',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Altemar Dutra',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Mário Lira',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Cecília Rodrigues',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Av. Padre Agobar Valença',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Francisco Braga',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Av. Irga',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Ebenezer Furtado Gueiros',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Francisco Paes de Melo',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Manoel Pessoa Juvenal',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Av. Agobar Valença',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Manoel Cipriano da Cruz',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Abilio Camilo Valença',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Amilcar Monte Negro',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Oliveira Lima',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Cel. Antônio Victor',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Lidice',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Diário de Pernambuco',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Sebastião Paes de Melo',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Projetada',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Joaquim Sampaio de Melo',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua João Pedro da Silva',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Dilson Funaro',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Mario Andreazza',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua José Cardoso',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Mauro Gonçalves Zacarias',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Travessa Santa Quitéria',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Chico Mendes',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Cristovão Colombo',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Bráz Cubas',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Mauro de Souza Lima',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Filipe Camarão',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Augustinho Branco',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Felipe Camarão',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Mario Andreza',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Manoel A. Machado',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Deolinda Silvestre Valença',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua São Miguel',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Praça Dom Pedro II',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Dom José',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Melo Peixoto',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Av. José Leitão',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Av. Dr. Luís Lessa',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Av. Sul',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Antônio M. Correia',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Florêncio Rodrigues de Melo',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Pedro Araujo Lima',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Altinho',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Ulisses Guimarães',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Manoel Alves Souto',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Paraguai',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Condomínio Antônio Cordeiro',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Radialista Flauberto Elias',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Mario Souto Maior',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Monsenhor Tarcisio Falcão',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Jonas Sena Rodrigues',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Frei Damião',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'BR 424',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Av. Sátiro Ivo',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Dacy Madeiros',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Julião Cavalcante',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua 7 de Setembro',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Pascoal Lopes',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Anibal Paes Lira',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Sebastião Moura Filho',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Moacir Santos Paes',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Maria Antônio de Moraes',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Dolores Duran',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Cantora Marinez',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua José Viera de Vasconcelos',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Jânio Quadros',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Eliane Campos Siqueira',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Voluntários da Pátria',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Av. Liberdade',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Ernesto Dourado',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Getúlio Vargas',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Euclides Dourado',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Castelo Branco',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Mario Andreaza',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Oscar Francisco da Silva',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua da Tábua',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Serra Branca',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Santa Teresinha',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Projetada 14',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Edival Muniz Barreto',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Estrada de São Pedro',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua José Armando Machado',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Monsenhor Arruda Câmara',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Duarte Coelho',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Capitão Valdemar Viana',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Osvaldo Cruz',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Luis Roldão de Araújo',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Coronel Antônio Vitor',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Praça Dom Moura',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Jornalista Almir Alves',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Canhotinho',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua São Vicente',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Getúlio Zoby Júnior',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Terminal Cohab 1',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Av. Djalma Dutra',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Gonçalves Maia',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua A',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Ioman Ferreira da Silva',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Luíz Burgos',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua José Tenório Vaz',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua das Tabocas',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Av. Bom Pastor',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Princesa Isabel',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Ismael Tinô e Silva',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Constancio Medeiros',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Alípio Madeiros',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Profa. Júlia Brasileiro Vila Nova',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua do Ipiranga',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Capitão João Leite',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Júlio de Melo',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Estácio de Sá',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Francisca Amaral Tinô',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua José do Patrocínio',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Farrapos',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Sgt. José Petrúcio',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua dos Mascates',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Coelho Neto',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Agostinho Branco',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Marin do Caetés',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua dos Operários',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua do Oriente',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua São Domingos',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Barão de Nazaré',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Conselheiro João Alfredo',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Monsenhor Callou',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Praça Mosteiro São Bento',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Padre Agobar Valença',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua David Jorge Rodrigues',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua do Condomínio',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua José Bento Ângelo A. Junior',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Av. Manoel Camelo',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Prof. Ivaldo Almeida',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Valdir Mansur',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua João Tiago Filho',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Capitão Pedro Rodrigues',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Av. Santa Rosa',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Dr. José Mariana',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Terminal Brasília',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Praça Mestre Dominguinhos',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Terminal Centro',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Terminal Liberdade',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Maceió',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Florianópolis',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Rua Cuiaba',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
            [
               'rua'=>'Terminal João da Mata',
               'numero' =>"",
               'latitude'=>0,
               'longitude'=>0,
            ],
        ];
  
        foreach ($user as $key => $value) {
            Parada::create($value);
        }
    }
}
