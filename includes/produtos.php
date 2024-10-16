<?php

//content

$produtos = array(

    [
        'nome' => 'Sérum Hidratante Facial',
        'descricao' => 'O Sérum é uma combinação exclusiva de 3 tipos de ácidos hialurônicos, ingredientes com poderoso efeito hidratante que em conjunto agem em todas as camadas da pele.',
        'foto' => 'assets/hidratante-01.jpg',
        'preco' => 59.90
    ],

    [
        'nome' => 'Calming Creamy',
        'descricao' => 'O Calming Cream é um hidratante ultraleve de rápida absorção. Oferece alívio para a pele sensível ou sensibilizada por fatores externos.',
        'foto' => 'assets/hidratante-02.jpg',
        'preco' => 49.90
    ],
    [
        'nome' => 'Hidratante Corporal',
        'descricao' => 'Sua textura inovadora, leve e fresca de rápida absorção, facilita a aplicação diária do hidrante e aumenta a adesão ao tratamento.',
        'foto' => 'assets/hidratante-03.jpg',
        'preco' => 72.90
    ],

    [
        'nome' => 'Hidratante Calmante',
        'descricao' => 'Sensibio Defensive oferece ação antioxidante, calmante e fortalecedora da barreira de proteção para uma pele imediatamente acalmada.',
        'foto' => 'assets/hidratante-04.jpg',
        'preco' => 68.90
    ],

    [
        'nome' => 'Hidratante Atoderm Ultra',
        'descricao' => 'Atoderm Creme ULTRA traz uma nova geração hidratação corporal diária ultra sensorial e eficaz para normais, peles secas e muito secas.',
        'foto' => 'assets/hidratante-05.jpg',
        'preco' => 146.90
    ],

    [
        'nome' => 'Protetor Solar FPS 60',
        'descricao' => 'O Creamy Watery Lotion é um filtro solar aquoso de toque seco e rápida absorção, ideal para todos os tipos de pele, especialmente as oleosas.',
        'foto' => 'assets/protetor-01.jpg',
        'preco' => 59.90
    ],

    [
        'nome' => 'Protetor Solar FPS 70',
        'descricao' => 'Proteção solar de alta tecnologia com filtros UV que fortalece as defesas naturais da pele contra os danos da radiação solar.',
        'foto' => 'assets/protetor-02.jpg',
        'preco' => 68.39
    ],

    [
        'nome' => 'Protetor Solar FPS 50',
        'descricao' => 'Photoderm Nude Touch FPS 50+ é o 1º protetor solar 100% físico especialmente desenvolvido para peles oleosas.',
        'foto' => 'assets/protetor-03.jpg',
        'preco' => 62.90
    ],

    [
        'nome' => 'Gel de Limpeza',
        'descricao' => 'Gel limpador facial desenvolvido para peles normais e oleosas, inclusive as mais sensíveis.',
        'foto' => 'assets/sabonete-01.jpg',
        'preco' => 59.90
    ],

    [
        'nome' => 'Emulsão de limpeza',
        'descricao' => 'Emulsão de limpeza desenvolvida para peles normais a secas, inclusive as mais sensíveis.',
        'foto' => 'assets/sabonete-02.jpg',
        'preco' => 59.90
    ],

    [
        'nome' => 'Sensibio Gel Moussant',
        'descricao' => 'Graças aos seus ativos calmantes e hidratantes, Sensibio Gel Moussant ameniza rapidamente as irritações na pele.',
        'foto' => 'assets/sabonete-03.jpg',
        'preco' => 112.90
    ],

    [
        'nome' => 'Gel De Limpeza Antioleosidade',
        'descricao' => 'Limpa profundamente e purifica a pele, sem ressecar. Reduz a oleosidade e controla o brilho.',
        'foto' => 'assets/sabonete-04.jpg',
        'preco' => 139.90
    ],

);

for ($i = 0; $i < count ($produtos); $i++) {
    echo '<div class="product">';   
    echo '<img src="' . $produtos[$i]['foto'] . '" alt="' . $produtos[$i]['nome'] . '">';
    echo '<h2>' . $produtos[$i]['nome'] . '</h2>';  
    echo '<p>' . $produtos[$i]['descricao'] . '</p>';
    echo '<p>Preço: R$ ' . number_format($produtos[$i]['preco'], 2, ', ', '.') . '</p>'; 
    echo '</div>';
}
?>