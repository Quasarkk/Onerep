<template>
    <Line :data="chartData" :options="ChartOptions" class="bg-background_dark" />
</template>

<script>
import { Line } from 'vue-chartjs'
import { Chart as ChartJS, CategoryScale, LinearScale, PointElement, LineElement, Title, Tooltip, Legend } from 'chart.js'

ChartJS.register(CategoryScale, LinearScale, PointElement, LineElement, Title, Tooltip, Legend)

export default {
    name: 'LineChart',
    components: {
        Line
    },
    data() {
        return {
            chartData: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [
                    {
                        label: 'Data One',
                        backgroundColor: '#ffffff',
                        borderColor: '#ffffff',
                        data: [40, 39, 10, 40, 39, 80, 40],
                    },
                    {
                        label: 'Data Two',
                        backgroundColor: '#761aed',
                        borderColor: '#761aed',
                        data: [24, 49, 13, 44, 45, 75, 120]
                    },
                ]
            },
            ChartOptions: {
                maintainAspectRation: true,
                responsive: true,
                scales: {
                    xAxis: {
                        grid: {
                            color: 'white' // Couleur des lignes de grille de l'axe X
                        },
                        ticks: {
                            display: false
                        }
                    },
                    yAxis: {
                        grid: {
                            color: 'white' // Couleur des lignes de grille de l'axe Y
                        },
                        ticks: {
                            display: true,
                            beginAtZero: true,
                        }
                    }
                }
            }
        }
    },
}

// export const options = {
//   responsive: true,
//   maintainAspectRatio: true,
//   scales: {
//     xAxis: {
//       grid: {
//         color: 'red' // Couleur des lignes de grille de l'axe X
//       }
//     },
//     yAxis: {
//       grid: {
//         color: 'red' // Couleur des lignes de grille de l'axe Y
//       }
//     }
//   }
// }

</script>

<!-- <template>
    <Line :data="chartData" :options="chartOptions" class="bg-background_dark" />
</template>

<script>
import { Line } from 'vue-chartjs'
import { Chart as ChartJS, CategoryScale, LinearScale, PointElement, LineElement, Title, Tooltip, Legend } from 'chart.js'

ChartJS.register(CategoryScale, LinearScale, PointElement, LineElement, Title, Tooltip, Legend)

export default {
    name: 'LineChart',
    components: {
        Line
    },
    data() {
        return {
            chartData: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [
                    {
                        label: 'Data One',
                        backgroundColor: '#ffffff',
                        borderColor: '#ffffff',
                        data: [40, 39, 10, 40, 39, 80, 40],
                    },
                    {
                        label: 'Data Two',
                        backgroundColor: '#761aed',
                        borderColor: '#761aed',
                        data: [24, 49, 13, 44, 45, 75, 120]
                    },
                ]
            }
        }
    },
    computed: {
        chartOptions() {
            return {
                responsive: true,
                maintainAspectRatio: true,
                scales: {
                    // x :{
                    //     type:'linear'
                    // },
                    // y :{
                    //     type:'linear'
                    // },

                    xAxis: {
                        type:'linear',
                        grid: {
                            color: 'white'
                        }
                    },
                    yAxis: {
                        grid: {
                            color: 'white'
                        }
                    }
                }
            }
        }
    }
}
</script> -->


