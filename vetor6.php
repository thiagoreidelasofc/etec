<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor 6</title>
</head>
<body>
    <?php
    /*uso de vetor multidimensional (contem outro vetor (vetor associativo
    porque tem =>) dentro de um elemento) 
    */
    
    
    // criacao de vetor multidimensional, cada aluno tem nome, idade e curso
    $alunos = [
        [
            "nome" => "Maria",
            "idade" => 20,
            "curso" => "Engenharia"
        ],
        [
            "nome" => "João",
            "idade" => 22,
            "curso" => "Administração"
        ],
        [
            "nome" => "Ana",
            "idade" => 19,
            "curso" => "Direito"
        ]
    ];

    // Exibindo os dados
   foreach($alunos as $a){
    echo "nome: ".$a["nome"]. "<br>";
    echo "idade: ".$a["idade"]. "<br>";
    echo "curso: ".$a["curso"]. "<br>";
    echo "<hr>";
}
?>
    
</body>
</html>