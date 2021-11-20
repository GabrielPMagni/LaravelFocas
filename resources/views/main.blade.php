<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | Focas</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Lato', sans-serif;
            }

            .charts {
                width: 30vw;
                height: 30vh;
                display: flex;
                flex-direction: column;
                align-content: space-around;
                margin-left: auto;
                margin-right: auto;
            }
            .charts canvas {
                margin-bottom: 2vh;
            }
            .charts canvas:last-of-type {
                margin-bottom: 0;
            }
            .charts p.disclaimer {
                font-style: italic;
                font-size: 9pt;
            }
        </style>
    </head>
    <body>
        <h2>Tentativas de Bruno para derrotar Brainiac em Injustice 2 em ~45 minutos</h2>
        <div class="charts">
            <canvas id="resultados1_chart"></canvas>
            <p class="disclaimer">*: Cada um deste item corresponde ao falecimento de uma foca</p>

            <canvas id="resultados2_chart"></canvas>
        </div>
        @include('js_imports', ['requirements' => ['charts']])
    </body>
</html>
