<?php

return [

    // 1. Bienestar
    1 => [
        'id' => 1,
        'name' => 'Ashwagandha Premium',
        'description' => 'Extracto concentrado de ashwagandha KSM-66 para reducir el estrés y mejorar el bienestar general.',
        'price' => 18.90,
        'category_id' => 1, // Bienestar
        'offer_id' => 3,    // Ofertas de Enero
        'brand' => 'Sesanus',
        'model' => 'Ashwagandha KSM-66',
        'stock' => 45,
        'image' => 'ashwagandha.png',
    ],

    // 2. Sueño
    2 => [
        'id' => 2,
        'name' => 'Melatonina Plus 1.9mg',
        'description' => 'Melatonina con pasiflora y valeriana para favorecer un descanso profundo y natural.',
        'price' => 12.50,
        'category_id' => 2, // Sueño
        'offer_id' => null, // No tiene oferta
        'brand' => 'Sesanus',
        'model' => 'Melatonina 1.9mg',
        'stock' => 60,
        'image' => 'melatonina.png',
    ],

    // 3. Deporte y Rendimiento
    3 => [
        'id' => 3,
        'name' => 'Creatina Monohidrato Micronizada',
        'description' => 'Creatina micronizada para mejorar la fuerza, potencia y rendimiento deportivo.',
        'price' => 21.90,
        'category_id' => 3, // Deporte
        'offer_id' => 1,    // Black Friday
        'brand' => 'Sesanus Sport',
        'model' => 'Creatine Pro',
        'stock' => 75,
        'image' => 'creatine-pro.png',
    ],

    // 4. Alimentación Saludable
    4 => [
        'id' => 4,
        'name' => 'Proteína Vegetal Chocolate',
        'description' => 'Mezcla vegana de proteína de guisante y arroz con sabor chocolate natural.',
        'price' => 24.90,
        'category_id' => 4, // Alimentación Saludable
        'offer_id' => 2,    // Ofertas de Primavera
        'brand' => 'Sesanus Green',
        'model' => 'Vegan Protein',
        'stock' => 38,
        'image' => 'vegan-protein.png',
    ],

    // 5. Vitaminas y Minerales
    5 => [
        'id' => 5,
        'name' => 'Multivitamínico Complejo A-Z',
        'description' => 'Fórmula completa de vitaminas y minerales esenciales para mantener la energía y vitalidad.',
        'price' => 15.75,
        'category_id' => 5, // Vitaminas y Minerales
        'offer_id' => null, // Sin oferta
        'brand' => 'Sesanus',
        'model' => 'Vita A-Z',
        'stock' => 90,
        'image' => 'multivitaminico.png',
    ],

];
