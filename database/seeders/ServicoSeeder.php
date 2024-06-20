<?php

use Illuminate\Database\Capsule\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("pt-BR");


        DB::table('servicos')->insert([
            [
                "titulo" => "Reparo de Smartphone",
                "descricao" => "Serviço de conserto rápido e eficiente.",
                "valor" => 50.00,
                "qtde_votos" => 10,
                "total_votos" => 20,
                "telefone" => "14988712345",
                "celular" => "19988888888",
                "endereco" => "Avenida Brasil",
                "numero" => "200",
                "bairro" => "Jardim América",
                "cidade" => "Bauru",
                "estado" => "sp",
                "cep" => "17000000",
                "usuario_id" => rand(1, 10),
                "categoria_id" => rand(1, 6)
            ],
            [
                "titulo" => "Instalação de Software",
                "descricao" => "Instalação de programas e antivírus.",
                "valor" => 40.00,
                "qtde_votos" => 8,
                "total_votos" => 15,
                "telefone" => "14987654321",
                "celular" => "19987777777",
                "endereco" => "Rua São Paulo",
                "numero" => "300",
                "bairro" => "Centro",
                "cidade" => "Campinas",
                "estado" => "sp",
                "cep" => "13000000",
                "usuario_id" => rand(1, 10),
                "categoria_id" => rand(1, 6)
            ],
            [
                "titulo" => "Manutenção de Notebook",
                "descricao" => "Serviço especializado em notebooks.",
                "valor" => 70.00,
                "qtde_votos" => 15,
                "total_votos" => 30,
                "telefone" => "14987651234",
                "celular" => "19986666666",
                "endereco" => "Rua das Flores",
                "numero" => "50",
                "bairro" => "Vila Nova",
                "cidade" => "Ribeirão Preto",
                "estado" => "sp",
                "cep" => "14000000",
                "usuario_id" => rand(1, 10),
                "categoria_id" => rand(1, 6)
            ],
            [
                "titulo" => "Troca de Tela",
                "descricao" => "Substituição de telas quebradas.",
                "valor" => 120.00,
                "qtde_votos" => 20,
                "total_votos" => 40,
                "telefone" => "14986543210",
                "celular" => "19985555555",
                "endereco" => "Rua XV de Novembro",
                "numero" => "75",
                "bairro" => "Centro",
                "cidade" => "Piracicaba",
                "estado" => "sp",
                "cep" => "13400000",
                "usuario_id" => rand(1, 10),
                "categoria_id" => rand(1, 6)
            ],
            [
                "titulo" => "Configuração de Rede",
                "descricao" => "Configuração de redes domésticas e empresariais.",
                "valor" => 80.00,
                "qtde_votos" => 5,
                "total_votos" => 10,
                "telefone" => "14985432109",
                "celular" => "19984444444",
                "endereco" => "Rua da Glória",
                "numero" => "100",
                "bairro" => "Jardim Glória",
                "cidade" => "Sorocaba",
                "estado" => "sp",
                "cep" => "18000000",
                "usuario_id" => rand(1, 10),
                "categoria_id" => rand(1, 6)
            ],
            [
                "titulo" => "Remoção de Vírus",
                "descricao" => "Limpeza completa de vírus e malware.",
                "valor" => 35.00,
                "qtde_votos" => 12,
                "total_votos" => 25,
                "telefone" => "14984321098",
                "celular" => "19983333333",
                "endereco" => "Rua Amazonas",
                "numero" => "120",
                "bairro" => "Vila Brasil",
                "cidade" => "São José do Rio Preto",
                "estado" => "sp",
                "cep" => "15000000",
                "usuario_id" => rand(1, 10),
                "categoria_id" => rand(1, 6)
            ],
            [
                "titulo" => "Atualização de Sistema",
                "descricao" => "Atualização de sistemas operacionais e aplicativos.",
                "valor" => 45.00,
                "qtde_votos" => 7,
                "total_votos" => 14,
                "telefone" => "14983210987",
                "celular" => "19982222222",
                "endereco" => "Rua Bahia",
                "numero" => "150",
                "bairro" => "Jardim Paulista",
                "cidade" => "Santos",
                "estado" => "sp",
                "cep" => "11000000",
                "usuario_id" => rand(1, 10),
                "categoria_id" => rand(1, 6)
            ],
            [
                "titulo" => "Backup de Dados",
                "descricao" => "Serviço de backup e recuperação de dados.",
                "valor" => 60.00,
                "qtde_votos" => 9,
                "total_votos" => 18,
                "telefone" => "14982109876",
                "celular" => "19981111111",
                "endereco" => "Rua Ceará",
                "numero" => "180",
                "bairro" => "Boa Vista",
                "cidade" => "São Paulo",
                "estado" => "sp",
                "cep" => "01000000",
                "usuario_id" => rand(1, 10),
                "categoria_id" => rand(1, 6)
            ],
            [
                "titulo" => "Configuração de Servidor",
                "descricao" => "Configuração e manutenção de servidores.",
                "valor" => 150.00,
                "qtde_votos" => 18,
                "total_votos" => 35,
                "telefone" => "14981098765",
                "celular" => "19980000000",
                "endereco" => "Rua Espírito Santo",
                "numero" => "200",
                "bairro" => "Centro",
                "cidade" => "Araraquara",
                "estado" => "sp",
                "cep" => "14800000",
                "usuario_id" => rand(1, 10),
                "categoria_id" => rand(1, 6)
            ],
            [
                "titulo" => "Suporte Técnico Remoto",
                "descricao" => "Suporte técnico por acesso remoto.",
                "valor" => 25.00,
                "qtde_votos" => 6,
                "total_votos" => 12,
                "telefone" => "14980987654",
                "celular" => "19979999999",
                "endereco" => "Rua Rio de Janeiro",
                "numero" => "220",
                "bairro" => "Centro",
                "cidade" => "Presidente Prudente",
                "estado" => "sp",
                "cep" => "19000000",
                "usuario_id" => rand(1, 10),
                "categoria_id" => rand(1, 6)
            ]
        ]);
    }
}
