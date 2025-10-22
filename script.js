//RADIO
Papa.parse("data/radio_femmes.csv", {
  header: true,
  download: true,
  complete: function(results) {
    const data = results.data;

    createGraphForYear(data, "1995", "radioChart1995");
    createGraphForYear(data, "2000", "radioChart2000");
    createGraphForYear(data, "2005", "radioChart2005");
    createGraphForYear(data, "2010", "radioChart2010");
    createGraphForYear(data, "2015", "radioChart2015");
    createGraphForYear(data, "2019", "radioChart2019");
  }
});

function createGraphForYear(data, year, canvasId) {
  const row = data.find(r => r.year === year);

  const colonnesExclure = ["Médiane", "Médiane privé", "Médiane public", "year"];
  const labels = Object.keys(row).filter(key => !colonnesExclure.includes(key));

  const values = labels.map(label => {
    const val = parseFloat(row[label]);
    return isNaN(val) ? 0 : parseFloat(val.toFixed(1));
  });

  const backgroundColors = ["#B1BAC7","#001C2F", "#2A4E62", "#FFF2DC", "#FFC9A3"];

  const ctx = document.getElementById(canvasId).getContext("2d");
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: labels,
      datasets: [{
        data: values,
        backgroundColor: backgroundColors
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: { beginAtZero: true, max: 100 }
      },
      plugins: {
        legend: { display: false },
        title: {
          display: true,
          text: `Taux d’expression des femmes à la radio (${year})`
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              return context.parsed.y === 0
                ? "Aucune donnée ou 0 %"
                : context.parsed.y.toFixed(1) + " %";
            }
          }
        }
      }
    }
  });
}
//RADIO

//TELE
Papa.parse("data/tv_femmes.csv", {
  header: true,
  download: true,
  complete: function(results) {
    const data = results.data;

    createGraphForYear(data, "2010", "tvChart2010");
    createGraphForYear(data, "2015", "tvChart2015");
    createGraphForYear(data, "2019", "tvChart2019");
  }
});

function createGraphForYear(data, year, canvasId) {
  const row = data.find(r => r.year === year);

  const colonnesAExclure = ["Médiane", "Médiane privé", "Médiane public", "year"];
  const labels = Object.keys(row).filter(key => !colonnesAExclure.includes(key));

  const values = labels.map(label => {
    const val = parseFloat(row[label]);
    return isNaN(val) ? 0 : parseFloat(val.toFixed(1));
  });

  const backgroundColors = ["#B1BAC7","#001C2F", "#2A4E62", "#FFF2DC", "#FFC9A3"];

  const ctx = document.getElementById(canvasId).getContext("2d");
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: labels,
      datasets: [{
        data: values,
        backgroundColor: backgroundColors
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: { beginAtZero: true, max: 100 }
      },
      plugins: {
        legend: { display: false },
        title: {
          display: true,
          text: `Taux d’expression des femmes à la télévision (${year})`
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              return context.parsed.y === 0
                ? "Aucune donnée ou 0 %"
                : context.parsed.y.toFixed(1) + " %";
            }
          }
        }
      }
    }
  });
}
//TELE

//TELE HOMME VS FEMME AJD
Papa.parse("data/parole_genre_femmes.csv", {
  header: true,
  download: true,
  complete: function(results) {
    createBarChart(results.data);
  }
});

function createBarChart(data) {
  const labels = data.map(row => row.genre);

  const womenValues = data.map(row => parseFloat(row.women_speech_duration_2020) || 0);
  const menValues = data.map(row => parseFloat(row.men_speech_duration_2020) || 0);

  const ctx = document.getElementById("barChartGender").getContext("2d");
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: labels,
      datasets: [
        {
          label: "Femmes",
          data: womenValues,
          backgroundColor: "#FFC9A3"
        },
        {
          label: "Hommes",
          data: menValues,
          backgroundColor: "#2A4E62"
        }
      ]
    },
    options: {
      responsive: true,
      plugins: {
        title: {
          display: true,
          text: "Temps de parole femmes et hommes par genre d'émission (2020)"
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          title: { display: true, text: "Durée (minutes) cumulée sur l'année 2020" }
        }
      }
    }
  });
}
//TELE HOMME VS FEMME AJD

//TELE H VS F POURCENT
Papa.parse("data/parole_genre_femmes.csv", {
  header: true,
  download: true,
  complete: function(results) {
    createDonutChart(results.data[0]);
  }
});

function createDonutChart(row) {
  const labels = ["Femmes", "Hommes"];
  const womenRate = ((parseFloat(row.women_expression_rate_2020) || 0) * 100).toFixed(2);
  const menRate = (100 - womenRate).toFixed(2);

  const values = [womenRate, menRate];

  const ctx = document.getElementById("donutChartGender").getContext("2d");
  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: labels,
      datasets: [{
        data: values,
        backgroundColor: ["#FFC9A3", "#2A4E62"],
        hoverOffset: 6
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { position: 'bottom' },
        title: { display: true, text: "Répartition temps de parole Femmes vs Hommes (2020)" },
        tooltip: {
          callbacks: {
            label: function(context) {
              return context.label + ": " + context.parsed + " %";
            }
          }
        }
      }
    }
  });
}
//TELE H VS F POURCENT

//CONCLU RADIO
Papa.parse("data/radio_femmes.csv", {
  header: true,
  download: true,
  complete: function(results) {
    createLineChart(results.data);
  }
});

function createLineChart(data) {

  const stations = ["Chérie FM", "France Culture", "France Info", "France Inter", "NRJ", "Nostalgie", "RFM", "RMC", "RTL", "Skyrock"];

  const years = ["1995", "2000", "2005", "2010", "2015", "2019"];

  const datasets = stations.map((station, i) => {
    const values = data.map(row => parseFloat(row[station]) || 0);
    return {
      label: station,
      data: values,
      borderColor: `hsl(${i * 30}, 70%, 50%)`,
      backgroundColor: `hsl(${i * 30}, 70%, 50%)`,
      fill: false,
      tension: 0.3
    };
  });

  const ctx = document.getElementById("lineChartRadio").getContext("2d");
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: years,
      datasets: datasets
    },
    options: {
      responsive: true,
      plugins: {
        title: {
          display: true,
          text: "Évolution du taux de parole des femmes à la radio (1995-2019)"
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              return context.dataset.label + ": " + context.parsed.y.toFixed(2) + " %";
            }
          }
        },
        legend: {
          position: "bottom"
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          max: 100,
          title: { display: true, text: "Pourcentage (%)" }
        },
        x: {
          title: { display: true, text: "Année" }
        }
      }
    }
  });
}
//CONCLU RADIO

//CONCLU TV
Papa.parse("data/tv_femmes.csv", {
  header: true,
  download: true,
  complete: function(results) {
    createLineChartTV(results.data);
  }
});

function createLineChartTV(data) {

  const stations = ["ARTE","BFM TV","Canal+","Canal+ Sport","D8/C8","France 2","France 3","I-Télé/CNews","L'Equipe 21","La chaîne Météo","M6","NRJ 12","Paris Première","TF1","W9"];

  const years = ["2010", "2015", "2019"];
  
  const datasets = stations.map((station, i) => {
    const values = data.map(row => parseFloat(row[station]) || 0);
    return {
      label: station,
      data: values,
      borderColor: `hsl(${i * 30}, 70%, 50%)`,
      backgroundColor: `hsl(${i * 30}, 70%, 50%)`,
      fill: false,
      tension: 0.3
    };
  });

  const ctx = document.getElementById("lineChartTV").getContext("2d");
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: years,
      datasets: datasets
    },
    options: {
      responsive: true,
      plugins: {
        title: {
          display: true,
          text: "Évolution du taux de parole des femmes à la télévision (2010-2019)"
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              return context.dataset.label + ": " + context.parsed.y.toFixed(2) + " %";
            }
          }
        },
        legend: {
          position: "bottom"
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          max: 100,
          title: { display: true, text: "Pourcentage (%)" }
        },
        x: {
          title: { display: true, text: "Année" }
        }
      }
    }
  });
}
//CONCLU TV

//ANIMATION FRISE











