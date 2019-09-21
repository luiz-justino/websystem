<?php

use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('clientes')->insert(['nome' => 'João Augusto', 'email' => 'ja@hotmail.com', 'idade' => '21', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Alameda', 'numero' => '283', 'bairro' => 'Prado', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Marcos', 'email' => 'mcsales@gmail.com', 'idade' => '19', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Esmeraldas', 'numero' => '87055', 'bairro' => 'Castelo', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Laura', 'email' => 'laurast@hotmail.com', 'idade' => '18', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. João César', 'numero' => '3', 'bairro' => 'Savassi', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Aline', 'email' => 'alinest@gmail.com', 'idade' => '22', 'estado_civil' => 'Casado(a)', 'endereco' => 'Av. Rio Comprido', 'numero' => '3', 'bairro' => 'Centro', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Marta', 'email' => 'marta.fernandes@gmail.com', 'idade' => '28', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Olegário Maciel', 'numero' => '1625', 'bairro' => 'Buritis', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Tamara', 'email' => 'tamara@gmail.com', 'idade' => '34', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Augusto de Lima', 'numero' => '36', 'bairro' => 'Raja', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Michelle', 'email' => 'michelle.amanda@bol.com', 'idade' => '32', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Pérola', 'numero' => '78042', 'bairro' => 'Santa Luzia', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Luiz Augusto', 'email' => 'luiz.augusto@gmail.com', 'idade' => '48', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Francisco Sales', 'numero' => '147', 'bairro' => 'Nossa Senhora de Fátima', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'João Augusto', 'email' => 'ja@hotmail.com', 'idade' => '21', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Almeida', 'numero' => '57398', 'bairro' => 'Centro', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Marcos', 'email' => 'mcsales@gmail.com', 'idade' => '19', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Alameda', 'numero' => '283', 'bairro' => 'Riacho', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Laura', 'email' => 'laurast@hotmail.com', 'idade' => '18', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Esmeraldas', 'numero' => '87055', 'bairro' => 'Esmeraldas', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Aline', 'email' => 'alinest@gmail.com', 'idade' => '22', 'estado_civil' => 'Casado(a)', 'endereco' => 'Av. João César', 'numero' => '3', 'bairro' => 'Colonial', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Marta', 'email' => 'marta.fernandes@gmail.com', 'idade' => '28', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Rio Comprido', 'numero' => '3', 'bairro' => 'Chácaras Del Rei', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Tamara', 'email' => 'tamara@gmail.com', 'idade' => '34', 'estado_civil' => 'Casado(a)', 'endereco' => 'Av. Olegário Maciel', 'numero' => '1625', 'bairro' => 'Centro', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Michelle', 'email' => 'michelle.amanda@bol.com', 'idade' => '32', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Augusto de Lima', 'numero' => '36', 'bairro' => 'Centro', 'cidade' => 'São Paulo', 'estado' => 'SP', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Luiz Augusto', 'email' => 'luiz.augusto@gmail.com', 'idade' => '48', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Pérola', 'numero' => '78042', 'bairro' => 'Moca', 'cidade' => 'São Paulo', 'estado' => 'SP', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'João Augusto', 'email' => 'ja@hotmail.com', 'idade' => '17', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Francisco Sales', 'numero' => '147', 'bairro' => 'Centro', 'cidade' => 'Valinhos', 'estado' => 'SP', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Marcos', 'email' => 'mcsales@gmail.com', 'idade' => '18', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Alameda', 'numero' => '283', 'bairro' => 'Centro', 'cidade' => 'Campinas', 'estado' => 'SP', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Laura', 'email' => 'laurast@hotmail.com', 'idade' => '19', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Esmeraldas', 'numero' => '87055', 'bairro' => 'Centro', 'cidade' => 'Araraquara', 'estado' => 'SP', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Aline', 'email' => 'alinest@gmail.com', 'idade' => '20', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. João César', 'numero' => '3', 'bairro' => 'Centro', 'cidade' => 'São Paulo', 'estado' => 'SP', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Marta', 'email' => 'marta.fernandes@gmail.com', 'idade' => '21', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Rio Comprido', 'numero' => '3', 'bairro' => 'Moca', 'cidade' => 'São Paulo', 'estado' => 'SP', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Tamara', 'email' => 'tamara@gmail.com', 'idade' => '22', 'estado_civil' => 'Casado(a)', 'endereco' => 'Av. Olegário Maciel', 'numero' => '1625', 'bairro' => 'Centro', 'cidade' => 'Valinhos', 'estado' => 'SP', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Michelle', 'email' => 'michelle.amanda@bol.com', 'idade' => '23', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Augusto de Lima', 'numero' => '36', 'bairro' => 'Centro', 'cidade' => 'Campinas', 'estado' => 'SP', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Luiz Augusto', 'email' => 'luiz.augusto@gmail.com', 'idade' => '24', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Pérola', 'numero' => '78042', 'bairro' => 'Centro', 'cidade' => 'Araraquara', 'estado' => 'SP', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Selma', 'email' => 'selma.santos@gmail.com', 'idade' => '25', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Francisco Sales', 'numero' => '147', 'bairro' => 'Centro', 'cidade' => 'Rio de Janeiro', 'estado' => 'SP', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Ricardo', 'email' => 'ricardostm@gmail.com', 'idade' => '26', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Alameda', 'numero' => '283', 'bairro' => 'Ipanema', 'cidade' => 'Niterói', 'estado' => 'RJ', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Murilo', 'email' => 'murilo.silva@gmail.com', 'idade' => '27', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Esmeraldas', 'numero' => '87055', 'bairro' => 'Centro', 'cidade' => 'Cabo Frio', 'estado' => 'RJ', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Graciane', 'email' => 'graciane.barbosa@gmail.com', 'idade' => '28', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. João César', 'numero' => '3', 'bairro' => 'Centro', 'cidade' => 'Petrópolis', 'estado' => 'RJ', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Cristina', 'email' => 'cristina.sales@gmail.com', 'idade' => '29', 'estado_civil' => 'Casado(a)', 'endereco' => 'Av. Rio Comprido', 'numero' => '3', 'bairro' => 'Centro', 'cidade' => 'Valença', 'estado' => 'RJ', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Ana Maria', 'email' => 'ana.maria@gmail.com', 'idade' => '30', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Olegário Maciel', 'numero' => '1625', 'bairro' => 'Centro', 'cidade' => 'Rio Bonito', 'estado' => 'RJ', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Patrícia', 'email' => 'patricia.mg@gmail.com', 'idade' => '31', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Augusto de Lima', 'numero' => '36', 'bairro' => 'Prado', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'João Augusto', 'email' => 'ja@hotmail.com', 'idade' => '32', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Pérola', 'numero' => '78042', 'bairro' => 'Castelo', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Marcos', 'email' => 'mcsales@gmail.com', 'idade' => '33', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Francisco Sales', 'numero' => '147', 'bairro' => 'Savassi', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Laura', 'email' => 'laurast@hotmail.com', 'idade' => '34', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Alameda', 'numero' => '283', 'bairro' => 'Centro', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Aline', 'email' => 'alinest@gmail.com', 'idade' => '35', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Esmeraldas', 'numero' => '87055', 'bairro' => 'Buritis', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Marta', 'email' => 'marta.fernandes@gmail.com', 'idade' => '36', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. João César', 'numero' => '3', 'bairro' => 'Raja', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Tamara', 'email' => 'tamara@gmail.com', 'idade' => '37', 'estado_civil' => 'Casado(a)', 'endereco' => 'Av. Rio Comprido', 'numero' => '3', 'bairro' => 'Santa Luzia', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Michelle', 'email' => 'michelle.amanda@bol.com', 'idade' => '38', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Olegário Maciel', 'numero' => '1625', 'bairro' => 'Nossa Senhora de Fátima', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Luiz Augusto', 'email' => 'luiz.augusto@gmail.com', 'idade' => '39', 'estado_civil' => 'Casado(a)', 'endereco' => 'Av. Augusto de Lima', 'numero' => '36', 'bairro' => 'Centro', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'João Augusto', 'email' => 'ja@hotmail.com', 'idade' => '40', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Alameda', 'numero' => '283', 'bairro' => 'Riacho', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Marcos', 'email' => 'mcsales@gmail.com', 'idade' => '41', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Esmeraldas', 'numero' => '87055', 'bairro' => 'Esmeraldas', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Laura', 'email' => 'laurast@hotmail.com', 'idade' => '42', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. João César', 'numero' => '3', 'bairro' => 'Colonial', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Aline', 'email' => 'alinest@gmail.com', 'idade' => '43', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Rio Comprido', 'numero' => '3', 'bairro' => 'Chácaras Del Rei', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Marta', 'email' => 'marta.fernandes@gmail.com', 'idade' => '44', 'estado_civil' => 'Casado(a)', 'endereco' => 'Av. Olegário Maciel', 'numero' => '1625', 'bairro' => 'Centro', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Tamara', 'email' => 'tamara@gmail.com', 'idade' => '45', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Augusto de Lima', 'numero' => '36', 'bairro' => 'Centro', 'cidade' => 'São Paulo', 'estado' => 'SP', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Michelle', 'email' => 'michelle.amanda@bol.com', 'idade' => '46', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Alameda', 'numero' => '283', 'bairro' => 'Moca', 'cidade' => 'São Paulo', 'estado' => 'SP', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Luiz Augusto', 'email' => 'luiz.augusto@gmail.com', 'idade' => '47', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Esmeraldas', 'numero' => '87055', 'bairro' => 'Centro', 'cidade' => 'Valinhos', 'estado' => 'SP', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'João Augusto', 'email' => 'ja@hotmail.com', 'idade' => '48', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. João César', 'numero' => '3', 'bairro' => 'Centro', 'cidade' => 'Campinas', 'estado' => 'SP', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Marcos', 'email' => 'mcsales@gmail.com', 'idade' => '49', 'estado_civil' => 'Casado(a)', 'endereco' => 'Av. Rio Comprido', 'numero' => '3', 'bairro' => 'Centro', 'cidade' => 'Araraquara', 'estado' => 'SP', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Laura', 'email' => 'laurast@hotmail.com', 'idade' => '50', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Olegário Maciel', 'numero' => '1625', 'bairro' => 'Centro', 'cidade' => 'São Paulo', 'estado' => 'SP', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Aline', 'email' => 'alinest@gmail.com', 'idade' => '51', 'estado_civil' => 'Casado(a)', 'endereco' => 'Av. Augusto de Lima', 'numero' => '36', 'bairro' => 'Moca', 'cidade' => 'São Paulo', 'estado' => 'SP', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Marta', 'email' => 'marta.fernandes@gmail.com', 'idade' => '52', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Pérola', 'numero' => '78042', 'bairro' => 'Centro', 'cidade' => 'Valinhos', 'estado' => 'SP', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Tamara', 'email' => 'tamara@gmail.com', 'idade' => '53', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Francisco Sales', 'numero' => '147', 'bairro' => 'Centro', 'cidade' => 'Campinas', 'estado' => 'SP', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Michelle', 'email' => 'michelle.amanda@bol.com', 'idade' => '54', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Almeida', 'numero' => '57398', 'bairro' => 'Centro', 'cidade' => 'Araraquara', 'estado' => 'SP', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Luiz Augusto', 'email' => 'luiz.augusto@gmail.com', 'idade' => '55', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Alameda', 'numero' => '283', 'bairro' => 'Centro', 'cidade' => 'Rio de Janeiro', 'estado' => 'SP', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Selma', 'email' => 'selma.santos@gmail.com', 'idade' => '56', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Esmeraldas', 'numero' => '87055', 'bairro' => 'Ipanema', 'cidade' => 'Niterói', 'estado' => 'RJ', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Ricardo', 'email' => 'ricardostm@gmail.com', 'idade' => '57', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. João César', 'numero' => '3', 'bairro' => 'Centro', 'cidade' => 'Cabo Frio', 'estado' => 'RJ', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Murilo', 'email' => 'murilo.silva@gmail.com', 'idade' => '58', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Rio Comprido', 'numero' => '3', 'bairro' => 'Centro', 'cidade' => 'Petrópolis', 'estado' => 'RJ', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Graciane', 'email' => 'graciane.barbosa@gmail.com', 'idade' => '59', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Olegário Maciel', 'numero' => '1625', 'bairro' => 'Centro', 'cidade' => 'Valença', 'estado' => 'RJ', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Cristina', 'email' => 'cristina.sales@gmail.com', 'idade' => '60', 'estado_civil' => 'Casado(a)', 'endereco' => 'Av. Augusto de Lima', 'numero' => '36', 'bairro' => 'Prado', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Ana Maria', 'email' => 'ana.maria@gmail.com', 'idade' => '61', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Pérola', 'numero' => '78042', 'bairro' => 'Castelo', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Patrícia', 'email' => 'patricia.mg@gmail.com', 'idade' => '62', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Francisco Sales', 'numero' => '147', 'bairro' => 'Savassi', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Miriam', 'email' => 'mirim.ms@hotmail.com', 'idade' => '63', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Almeida', 'numero' => '57398', 'bairro' => 'Centro', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Carlos', 'email' => 'carlos.jm@gmail.com', 'idade' => '64', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Alameda', 'numero' => '283', 'bairro' => 'Buritis', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Letícia', 'email' => 'leticia.bela@gmail.com', 'idade' => '65', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Esmeraldas', 'numero' => '87055', 'bairro' => 'Raja', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Bruna', 'email' => 'bruna.sm@hotmail.com', 'idade' => '66', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. João César', 'numero' => '3', 'bairro' => 'Santa Luzia', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Gabriela', 'email' => 'gaby.lm@hotmail.com', 'idade' => '67', 'estado_civil' => 'Casado(a)', 'endereco' => 'Av. Rio Comprido', 'numero' => '3', 'bairro' => 'Nossa Senhora de Fátima', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Vanessa', 'email' => 'vanessa.msl@hotmail.com', 'idade' => '68', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Olegário Maciel', 'numero' => '1625', 'bairro' => 'Centro', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Ágata', 'email' => 'agata.ramos@hotmail.com', 'idade' => '69', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Augusto de Lima', 'numero' => '36', 'bairro' => 'Riacho', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Julia', 'email' => 'julia.ramos@hotmail.com', 'idade' => '70', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Pérola', 'numero' => '78042', 'bairro' => 'Esmeraldas', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Michelle', 'email' => 'michelle.amanda@bol.com', 'idade' => '71', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Francisco Sales', 'numero' => '147', 'bairro' => 'Colonial', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Luiz Augusto', 'email' => 'luiz.augusto@gmail.com', 'idade' => '72', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Almeida', 'numero' => '57398', 'bairro' => 'Chácaras Del Rei', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Selma', 'email' => 'selma.santos@gmail.com', 'idade' => '73', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Alameda', 'numero' => '283', 'bairro' => 'Centro', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Ricardo', 'email' => 'ricardostm@gmail.com', 'idade' => '74', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Esmeraldas', 'numero' => '87055', 'bairro' => 'Centro', 'cidade' => 'São Paulo', 'estado' => 'SP', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Murilo', 'email' => 'murilo.silva@gmail.com', 'idade' => '75', 'estado_civil' => 'Casado(a)', 'endereco' => 'Av. João César', 'numero' => '3', 'bairro' => 'Moca', 'cidade' => 'São Paulo', 'estado' => 'SP', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Graciane', 'email' => 'graciane.barbosa@gmail.com', 'idade' => '76', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Rio Comprido', 'numero' => '3', 'bairro' => 'Centro', 'cidade' => 'Valinhos', 'estado' => 'SP', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Cristina', 'email' => 'cristina.sales@gmail.com', 'idade' => '77', 'estado_civil' => 'Casado(a)', 'endereco' => 'Av. Olegário Maciel', 'numero' => '1625', 'bairro' => 'Centro', 'cidade' => 'Campinas', 'estado' => 'SP', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Ana Maria', 'email' => 'ana.maria@gmail.com', 'idade' => '78', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Augusto de Lima', 'numero' => '36', 'bairro' => 'Centro', 'cidade' => 'Araraquara', 'estado' => 'SP', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Patrícia', 'email' => 'patricia.mg@gmail.com', 'idade' => '79', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Pérola', 'numero' => '78042', 'bairro' => 'Centro', 'cidade' => 'São Paulo', 'estado' => 'SP', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Miriam', 'email' => 'mirim.ms@hotmail.com', 'idade' => '80', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Francisco Sales', 'numero' => '147', 'bairro' => 'Moca', 'cidade' => 'São Paulo', 'estado' => 'SP', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Carlos', 'email' => 'carlos.jm@gmail.com', 'idade' => '81', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Alameda', 'numero' => '283', 'bairro' => 'Centro', 'cidade' => 'Valinhos', 'estado' => 'SP', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Letícia', 'email' => 'leticia.bela@gmail.com', 'idade' => '82', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Esmeraldas', 'numero' => '87055', 'bairro' => 'Centro', 'cidade' => 'Campinas', 'estado' => 'SP', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Bruna', 'email' => 'bruna.sm@hotmail.com', 'idade' => '83', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. João César', 'numero' => '3', 'bairro' => 'Centro', 'cidade' => 'Araraquara', 'estado' => 'SP', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Gabriela', 'email' => 'gaby.lm@hotmail.com', 'idade' => '84', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Rio Comprido', 'numero' => '3', 'bairro' => 'Centro', 'cidade' => 'Rio de Janeiro', 'estado' => 'SP', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Vanessa', 'email' => 'vanessa.msl@hotmail.com', 'idade' => '85', 'estado_civil' => 'Casado(a)', 'endereco' => 'Av. Olegário Maciel', 'numero' => '1625', 'bairro' => 'Ipanema', 'cidade' => 'Niterói', 'estado' => 'RJ', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Ágata', 'email' => 'agata.ramos@hotmail.com', 'idade' => '86', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Augusto de Lima', 'numero' => '36', 'bairro' => 'Centro', 'cidade' => 'Cabo Frio', 'estado' => 'RJ', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Michelle', 'email' => 'michelle.amanda@bol.com', 'idade' => '87', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Pérola', 'numero' => '78042', 'bairro' => 'Centro', 'cidade' => 'Petrópolis', 'estado' => 'RJ', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Luiz Augusto', 'email' => 'luiz.augusto@gmail.com', 'idade' => '88', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Francisco Sales', 'numero' => '147', 'bairro' => 'Centro', 'cidade' => 'Valença', 'estado' => 'RJ', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Selma', 'email' => 'selma.santos@gmail.com', 'idade' => '89', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Alameda', 'numero' => '283', 'bairro' => 'Prado', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Ricardo', 'email' => 'ricardostm@gmail.com', 'idade' => '90', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Esmeraldas', 'numero' => '87055', 'bairro' => 'Castelo', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Murilo', 'email' => 'murilo.silva@gmail.com', 'idade' => '91', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. João César', 'numero' => '3', 'bairro' => 'Savassi', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Graciane', 'email' => 'graciane.barbosa@gmail.com', 'idade' => '92', 'estado_civil' => 'Casado(a)', 'endereco' => 'Av. Rio Comprido', 'numero' => '3', 'bairro' => 'Centro', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Cristina', 'email' => 'cristina.sales@gmail.com', 'idade' => '93', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Olegário Maciel', 'numero' => '1625', 'bairro' => 'Buritis', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Ana Maria', 'email' => 'ana.maria@gmail.com', 'idade' => '94', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. Augusto de Lima', 'numero' => '36', 'bairro' => 'Raja', 'cidade' => 'Belo Horizonte', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Patrícia', 'email' => 'patricia.mg@gmail.com', 'idade' => '95', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Pérola', 'numero' => '78042', 'bairro' => 'Santa Luzia', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Miriam', 'email' => 'mirim.ms@hotmail.com', 'idade' => '96', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Francisco Sales', 'numero' => '147', 'bairro' => 'Nossa Senhora de Fátima', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Carlos', 'email' => 'carlos.jm@gmail.com', 'idade' => '97', 'estado_civil' => 'Casado(a)', 'endereco' => 'Rua Alameda', 'numero' => '283', 'bairro' => 'Centro', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '1']);
        DB::table('clientes')->insert(['nome' => 'Letícia', 'email' => 'leticia.bela@gmail.com', 'idade' => '98', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Rua Esmeraldas', 'numero' => '87055', 'bairro' => 'Riacho', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Bruna', 'email' => 'bruna.sm@hotmail.com', 'idade' => '99', 'estado_civil' => 'Solteiro(a)', 'endereco' => 'Av. João César', 'numero' => '3', 'bairro' => 'Esmeraldas', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '0']);
        DB::table('clientes')->insert(['nome' => 'Gabriela', 'email' => 'gaby.lm@hotmail.com', 'idade' => '100', 'estado_civil' => 'Casado(a)', 'endereco' => 'Av. Rio Comprido', 'numero' => '3', 'bairro' => 'Colonial', 'cidade' => 'Contagem', 'estado' => 'MG', 'ativo' => '1']);
    }

}
