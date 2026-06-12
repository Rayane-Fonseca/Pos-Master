<?php

namespace Database\Factories;

use App\Models\Manufacturer;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccessoryFactory extends Factory
{
    public function definition(): array
    {
        $type = $this->faker->randomElement(['Cabo', 'Capa', 'Fone', 'Carregador', 'Outro']);

        $namesByType = [
            'Cabo' => ['Cabo USB-C', 'Cabo Lightning', 'Cabo Micro USB', 'Cabo HDMI', 'Cabo P2'],
            'Capa' => ['Capa Silicone', 'Capa Couro', 'Capa Anti-Impacto', 'Capa Transparente', 'Capa Carteira'],
            'Fone' => ['Fone Bluetooth', 'Fone com Fio', 'Fone Intra-auricular', 'Headset Gamer', 'EarPods'],
            'Carregador' => ['Carregador Turbo', 'Carregador Veicular', 'Carregador sem Fio', 'Fonte 20W', 'Power Bank'],
            'Outro' => ['Suporte Veicular', 'Película de Vidro', 'Adaptador OTG', 'Pop Socket', 'Caneta Touch'],
        ];

        $models = [
            'iPhone 13', 'iPhone 14', 'iPhone 15', 'iPhone 15 Pro Max',
            'Samsung Galaxy S23', 'Samsung Galaxy S24', 'Samsung Galaxy A54',
            'Motorola Edge 40', 'Xiaomi Redmi Note 13', 'Notebook USB-C',
            'Universal',
        ];

        $colors = ['Preto', 'Branco', 'Azul', 'Vermelho', 'Cinza', 'Rosa', 'Transparente', 'Verde', 'Dourado'];

        $materials = ['Silicone', 'Couro', 'Plástico Rígido', 'Metal', 'Tecido', 'Outro'];

        $hasWarranty = $this->faker->boolean(40);

        return [
            'name' => $this->faker->randomElement($namesByType[$type]),
            'code' => strtoupper(
                substr($type, 0, 3) . '-' . $this->faker->unique()->bothify('???-####')
            ),
            'manufacturer_id' => Manufacturer::inRandomOrder()->first()?->id
                ?? Manufacturer::factory(),
            'price' => $this->faker->randomFloat(2, 9.90, 399.90),
            'quantity' => $this->faker->numberBetween(0, 80),
            'type' => $type,
            'compatible_model' => $this->faker->randomElement($models),
            'color' => $this->faker->randomElement($colors),
            'material' => $this->faker->randomElement($materials),
            'has_extended_warranty' => $hasWarranty,
            'warranty_months' => $hasWarranty
                ? $this->faker->randomElement([3, 6, 12, 24])
                : null,
        ];
    }
}