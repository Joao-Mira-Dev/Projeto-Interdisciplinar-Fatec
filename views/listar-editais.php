<?php
require_once("../classes/Editais.php");
$edital = new Editais();
$i = $edital->listar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apresentar Editais</title>
</head>
<style>
    <?= require_once('../css/style.css') ?>
</style>
<body>
    <?php require_once('header.html'); ?>
    <?php require_once('nav.html'); ?>
    <main>
        <?php foreach ($i as $ii): ?>
            <section>
                <details>
                    <summary>
                        Núemro do edital: N <?= $ii['numero'] ?> | Curso: <?= $ii['curso'] ?> | Disciplina: <?= $ii['disciplina']?>
                    </summary>
                    <p>
                        <?= $ii['requisitos'] ?>
                    </p>
                    <p>
                        Carga horária semanal: <?= $ii['cargaHorario'] ?> | Dia(s) da semana: <?= $ii['diaSemana'] ?>
                        Horário de aula: <?= $ii['horario'] ?> | Período de atuação: <?= $ii['periodo'] ?>
                    </p>
                    <p>
                        Tempo limite para inscrição: <?= $ii['prazo'] ?>
                    </p>
                    <a href="pdf.php?pdf=../pdf/pi.pdf" target="_blank">PDF</a>
                    <a href="candidatar.php">CANDIDATAR</a>
                </details>
            </section>
        <?php endforeach ?>
    </main>
</body>
</html>