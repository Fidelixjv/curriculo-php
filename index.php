<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meu Currículo - João Vitor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php
            $nome = "João Vitor Fidelix";
            $profissao = "Desenvolvedor Web Júnior";
            $email = "joaovitorfidelix852@email.com";
            $telefone = "(88)99355-7425";
        ?>
        <img src="img.webp" alt="Foto de João Vitor" width="150">
        <h1><?php echo $nome; ?></h1>
        <p><?php echo $profissao; ?></p>
        <p>Email: <?php echo $email; ?> | Tel: <?php echo $telefone; ?></p>
    </header>

    <section id="experiencia">
        <h2>Experiências</h2>
        <?php
            $experiencias = [
                 "Estágio Técnico de Internet — Líder Link (Agosto/2022 à Novembro/2022)"
            ];

            foreach ($experiencias as $exp) {
                echo "<p>• $exp</p>";
            }
        ?>
    </section>

    <section id="cursos">
        <h2>Cursos e Formação</h2>
        <?php
            $cursos = [
                "Bacharelado em Sistemas de Informação - Universidade Federal do Ceará - Campus Cedro (2022 - Atual)",
                "Curso de HTML, CSS e JavaScript - Curso em Vídeo (2025)",
            ];

            foreach ($cursos as $curso) {
                echo "<p>• $curso</p>";
            }
        ?>
    </section>

    <section id="habilidades">
        <h2>Habilidades</h2>
        <?php
            $habilidades = [
                "HTML" => 9,
                "CSS" => 8,
                "PHP" => 7,
                "JavaScript" => 6
            ];

            foreach ($habilidades as $skill => $nota) {
                echo "<p>$skill: ";
                for ($i = 0; $i < $nota; $i++) {
                    echo "★";
                }
                echo "</p>";
            }
        ?>
    </section>

    <section id="hobbies">
        <h2>Hobbies</h2>
        <?php
            $hobbies = [
                "Jogar futebol" => 10,
                "Ler" => 8,
                "Programar" => 9
            ];

            foreach ($hobbies as $hobbie => $nota) {
                echo "<p>$hobbie: ";
                for ($i = 0; $i < $nota; $i++) {
                    echo "♥";
                }
                echo "</p>";
            }
        ?>
    </section>
</body>
</html>
