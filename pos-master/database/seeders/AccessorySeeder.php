<?php

namespace Database\Seeders;

use App\Models\Accessory;
use App\Models\Manufacturer;
use Illuminate\Database\Seeder;

class AccessorySeeder extends Seeder
{
    public function run(): void
    {
        // Fabricantes/Fornecedores
        $apple = Manufacturer::create([
            'name' => 'Apple',
            'contact' => 'comercial@apple-distribuidor.com',
        ]);

        $samsung = Manufacturer::create([
            'name' => 'Samsung',
            'contact' => 'vendas@samsung-distribuidor.com',
        ]);

        $jbl = Manufacturer::create([
            'name' => 'JBL',
            'contact' => 'contato@jbl-distribuidor.com',
        ]);

        $genericTech = Manufacturer::create([
            'name' => 'Tech Import LTDA',
            'contact' => '(51) 99999-1234',
        ]);

        $multilaser = Manufacturer::create([
            'name' => 'Multilaser',
            'contact' => 'sac@multilaser.com.br',
        ]);

        // Acessórios
        Accessory::create([
            'name' => 'Cabo Lightning USB-C 1m',
            'code' => 'CAB-APL-001',
            'manufacturer_id' => $apple->id,
            'price' => 89.90,
            'quantity' => 35,
            'type' => 'Cabo',
            'compatible_model' => 'iPhone 8 até iPhone 14',
            'color' => 'Branco',
            'material' => 'Plástico Rígido',
            'has_extended_warranty' => true,
            'warranty_months' => 12,
        ]);

        Accessory::create([
            'name' => 'Cabo USB-C para USB-C 2m',
            'code' => 'CAB-SAM-002',
            'manufacturer_id' => $samsung->id,
            'price' => 49.90,
            'quantity' => 60,
            'type' => 'Cabo',
            'compatible_model' => 'Samsung Galaxy S20 ao S24, USB-C universal',
            'color' => 'Preto',
            'material' => 'Tecido',
            'has_extended_warranty' => false,
            'warranty_months' => null,
        ]);

        Accessory::create([
            'name' => 'Cabo Micro USB Reforçado',
            'code' => 'CAB-GEN-003',
            'manufacturer_id' => $genericTech->id,
            'price' => 19.90,
            'quantity' => 4,
            'type' => 'Cabo',
            'compatible_model' => 'Aparelhos com entrada Micro USB',
            'color' => 'Preto',
            'material' => 'Tecido',
            'has_extended_warranty' => false,
            'warranty_months' => null,
        ]);

        Accessory::create([
            'name' => 'Capa Silicone iPhone 15',
            'code' => 'CAP-APL-004',
            'manufacturer_id' => $apple->id,
            'price' => 129.90,
            'quantity' => 18,
            'type' => 'Capa',
            'compatible_model' => 'iPhone 15',
            'color' => 'Azul Meia-Noite',
            'material' => 'Silicone',
            'has_extended_warranty' => false,
            'warranty_months' => null,
        ]);

        Accessory::create([
            'name' => 'Capa Couro Galaxy S24',
            'code' => 'CAP-SAM-005',
            'manufacturer_id' => $samsung->id,
            'price' => 99.90,
            'quantity' => 22,
            'type' => 'Capa',
            'compatible_model' => 'Samsung Galaxy S24',
            'color' => 'Marrom',
            'material' => 'Couro',
            'has_extended_warranty' => false,
            'warranty_months' => null,
        ]);

        Accessory::create([
            'name' => 'Capa Anti-Impacto Universal',
            'code' => 'CAP-GEN-006',
            'manufacturer_id' => $genericTech->id,
            'price' => 39.90,
            'quantity' => 50,
            'type' => 'Capa',
            'compatible_model' => 'Modelos 6.1" a 6.7" (genérico)',
            'color' => 'Transparente',
            'material' => 'Plástico Rígido',
            'has_extended_warranty' => false,
            'warranty_months' => null,
        ]);

        Accessory::create([
            'name' => 'Fone de Ouvido Bluetooth JBL Tune 510BT',
            'code' => 'FON-JBL-007',
            'manufacturer_id' => $jbl->id,
            'price' => 249.90,
            'quantity' => 12,
            'type' => 'Fone',
            'compatible_model' => 'Universal (Bluetooth 5.0)',
            'color' => 'Preto',
            'material' => 'Plástico Rígido',
            'has_extended_warranty' => true,
            'warranty_months' => 12,
        ]);

        Accessory::create([
            'name' => 'EarPods com Conector Lightning',
            'code' => 'FON-APL-008',
            'manufacturer_id' => $apple->id,
            'price' => 199.90,
            'quantity' => 8,
            'type' => 'Fone',
            'compatible_model' => 'iPhone com entrada Lightning',
            'color' => 'Branco',
            'material' => 'Plástico Rígido',
            'has_extended_warranty' => true,
            'warranty_months' => 6,
        ]);

        Accessory::create([
            'name' => 'Fone Intra-auricular P2',
            'code' => 'FON-MUL-009',
            'manufacturer_id' => $multilaser->id,
            'price' => 24.90,
            'quantity' => 3,
            'type' => 'Fone',
            'compatible_model' => 'Aparelhos com entrada P2 (3.5mm)',
            'color' => 'Preto',
            'material' => 'Plástico Rígido',
            'has_extended_warranty' => false,
            'warranty_months' => null,
        ]);

        Accessory::create([
            'name' => 'Carregador Turbo 20W USB-C',
            'code' => 'CAR-APL-010',
            'manufacturer_id' => $apple->id,
            'price' => 149.90,
            'quantity' => 25,
            'type' => 'Carregador',
            'compatible_model' => 'iPhone 12 ou superior',
            'color' => 'Branco',
            'material' => 'Plástico Rígido',
            'has_extended_warranty' => true,
            'warranty_months' => 12,
        ]);

        Accessory::create([
            'name' => 'Carregador Veicular Duplo USB',
            'code' => 'CAR-MUL-011',
            'manufacturer_id' => $multilaser->id,
            'price' => 34.90,
            'quantity' => 40,
            'type' => 'Carregador',
            'compatible_model' => 'Universal (Saída USB-A)',
            'color' => 'Preto',
            'material' => 'Plástico Rígido',
            'has_extended_warranty' => false,
            'warranty_months' => null,
        ]);

        Accessory::create([
            'name' => 'Suporte de Carro para Celular',
            'code' => 'OUT-GEN-012',
            'manufacturer_id' => $genericTech->id,
            'price' => 29.90,
            'quantity' => 15,
            'type' => 'Outro',
            'compatible_model' => 'Universal',
            'color' => 'Preto',
            'material' => 'Metal',
            'has_extended_warranty' => false,
            'warranty_months' => null,
        ]);
    }
}