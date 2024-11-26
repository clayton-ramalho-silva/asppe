<?php

namespace Database\Factories;

use App\Models\Applicant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Applicant>
 */
class ApplicantFactory extends Factory
{

    protected $model = Applicant::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::factory()->create(); // Cria um novo usuário

        return [
            'nome' => $user->firstName,
            'sombrenome' => $user->lastName,
            'data_nascimento' => fake()->date(),
            'estado_civil' => fake()->randomElement(['solteiro', 'casado', 'divorciado', 'viuvo']),
            'tem_filhos' => fake()->boolean,
            'genero' => fake()->randomElement(['homem', 'mulher', 'prefiro_nao_opnar']),
            'reservista' => fake()->boolean,
            'reservista_description' => null,
            'rg' => fake()->numerify("#########"),
            'cpf' => fake()->numerify("############"),
            'logradouro' => fake()->streetName,
            'numero' => fake()->buildingNumber,
            'complemento' => fake()->optional()->sentence,
            'bairro' => fake()->word,
            'cidade' => fake()->city,
            'estado' => fake()->state,
            'pais' => 'Brasil',
            'email' => $user->email,
            'telefone_residencial' => fake()->tollFreePhoneNumber(),
            'telefone_celular' => fake()->tollFreePhoneNumber(),
            'vagas_interesse' => null,  // fake()->randomElement(['Copa & Cozinha', 'Administrativo', 'Camareiro', 'Recepcionista']),
            'experiencia_profissional' => null, //fake()->randomElement(['Copa & Cozinha', 'Administrativo', 'Camareiro', 'Recepcionista']),
            'escolaridade' => fake()->randomElement(['Ensino Médio Completo', 'Ensino Médio Completo']),
            'participou_selecao' => fake()->randomElement(['Sim, já fui chamado(a) para 1ª fase de um Processo Seletivo.', 'Sim, já fui encaminhado(a) para teste na Empresa parceira.', 'Enviei currículo mas não fui chamado(a).']),
            'jovem_aprendiz' => fake()->randomElement(['Sim, da ASPPE', 'Sim, de Outra Qualificadora', 'Não']),
            'informatica' => fake()->randomElement(['Básico', 'Intermediário', 'Avançado', 'Nenhum']),
            'ingles' => fake()->randomElement(['Básico', 'Intermediário', 'Avançado', 'Nenhum']),
            'tamanho_uniforme' => fake()->randomElement(['Feminino: Baby Look P', 'Masculino: P', 'Feminino: M', 'Masculino: G']),
            'curriculo' => fake()->word . '.pdf',
            'user_id' => $user->id
        ];
    }
}
