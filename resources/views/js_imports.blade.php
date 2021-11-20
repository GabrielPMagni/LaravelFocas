@if (in_array('charts', $requirements))
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('resultados1_chart').getContext('2d');
    const resultados1_chart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Derrotas com inimigo com mais da metade do HP*', 'Derrotas', 'Vitórias'],
        datasets: [{
            label: 'Equivalência de tentativas',
            data: [17, 31, 1],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        responsive: true
    }
});

    const data = {
    labels: ['1h', '2h', '3h', '4h', '5h', '6h', '7h', '8h', '9h', '10h', '11h', '12h', '13h', '14h', '15h', '16h', '17h', '18h', '19h', '20h', '21h', '22h', '23h', '24h', '24h', '25h', '26h', '27h', '28h', '29h', '30h', '31h', '32h', '33h', '34h', '35h', '36h', '37h', '38h', '39h', '40h', '41h', '42h', '43h', '44h', '45h', '46h', '47h', '48h'],
    datasets: [
        {
        label: 'Crescimento de falências de focas por hora',
        data: [17, 39, 61, 83, 105, 127, 149, 171, 193, 215, 237, 259, 281, 303, 325, 347, 369, 391, 413, 435, 457, 479, 501, 523, 545, 567, 589, 611, 633, 655, 677, 699, 721, 743, 765, 787, 809, 831, 853, 875, 897, 919, 941, 963, 985, 1007, 1029, 1051],
        borderColor: 'red',
        backgroundColor: 'red',
        },
        {
        label: 'Parcela de focas mortas por Cinomose',
        data: [2000],
        borderColor: 'blue',
        backgroundColor: 'blue',
        }
    ]
    };

    const ctx2 = document.getElementById('resultados2_chart').getContext('2d');
    const resultados2_chart = new Chart(ctx2, {
    type: 'line',
    data: data,
    options: {
    responsive: true,
    plugins: {
      title: {
        display: true,
        text: 'Crescimento de mortes de focas X Focas mortas por Cinomose segundo infoescola.com (estimativa)'
      }
    },
    scales: {
      y: {
        min: 10,
        max: 2000,
      }
    }
  }
});



</script>
@endif