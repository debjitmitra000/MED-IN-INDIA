function calculateHealth() {
  var heartRate = parseFloat(document.getElementById("heartRate").value);
  var systolic = parseFloat(document.getElementById("systolic").value);
  var diastolic = parseFloat(document.getElementById("diastolic").value);
  var hi = parseFloat(document.getElementById("hi").value);
  var we = parseFloat(document.getElementById("we").value);
  var bmi = (we / ((hi / 100) * (hi / 100))).toFixed(2);
  var heartRateCategory;
  var bloodPressureCategory;
  var bmiCategory;

  // Heart Rate Classification
  if (heartRate > 100) {
    heartRateCategory = "High";
  } else if (heartRate >= 60 && heartRate <= 100) {
    heartRateCategory = "Medium";
  } else if (heartRate >= 40 && heartRate < 60) {
    heartRateCategory = "Low";
  } else {
    heartRateCategory = "Invalid input";
  }

  // Blood Pressure Classification
  if (!isNaN(systolic) && !isNaN(diastolic)) {
    if (systolic < 90 || diastolic < 60) {
      bloodPressureCategory = "Low";
    } else if (systolic < 120 && diastolic < 80) {
      bloodPressureCategory = "Normal";
    } else if (systolic >= 120 && systolic <= 129 && diastolic < 80) {
      bloodPressureCategory = "Elevated";
    } else if (systolic >= 130 || diastolic >= 80) {
      bloodPressureCategory = "High";
    } else {
      bloodPressureCategory = "Invalid input";
    }
  } else {
    bloodPressureCategory = "Invalid input";
  }

  // BMI Classification
  if (bmi < 16) {
    bmiCategory = "Severe Thinness";
  } else if (bmi >= 16 && bmi < 17) {
    bmiCategory = "Moderate Thinness";
  } else if (bmi >= 17 && bmi < 18.5) {
    bmiCategory = "Mild Thinness";
  } else if (bmi >= 18.5 && bmi < 25) {
    bmiCategory = "Normal";
  } else if (bmi >= 25 && bmi < 30) {
    bmiCategory = "Overweight";
  } else if (bmi >= 30 && bmi < 35) {
    bmiCategory = "Obese Class I";
  } else if (bmi >= 35 && bmi < 40) {
    bmiCategory = "Obese Class II";
  } else if (bmi >= 40) {
    bmiCategory = "Obese Class III";
  } else {
    bmiCategory = "Invalid input";
  }

  // Save data to local storage
  var currentDate = new Date();
  var currentTime = currentDate.toLocaleTimeString();
  var healthData = {
    date: currentDate.toLocaleDateString(),
    time: currentTime,
    heartRate: heartRate,
    systolic: systolic,
    diastolic: diastolic,
    bmi: bmi,
    heartRateCategory: heartRateCategory,
    bloodPressureCategory: bloodPressureCategory,
    bmiCategory: bmiCategory,
  };

  var healthHistory = JSON.parse(localStorage.getItem("healthHistory")) || [];
  healthHistory.push(healthData);
  localStorage.setItem("healthHistory", JSON.stringify(healthHistory));

  // Displaying the result
  var result = `Heart Rate: ${heartRate}, Category: ${heartRateCategory}, Systolic: ${systolic}, Diastolic: ${diastolic}, Blood Pressure: ${bloodPressureCategory}, BMI: ${bmi}, Category: ${bmiCategory}`;
  document.getElementById("result").innerText = result;

  // Update health history table
  updateHistoryTable();
}

function updateHistoryTable() {
  var healthHistory = JSON.parse(localStorage.getItem("healthHistory")) || [];
  var historyBody = document.getElementById("historyBody");
  historyBody.innerHTML = "";
  // createColumnChart();
  for (var i = 0; i < healthHistory.length; i++) {
    var row = historyBody.insertRow(i);
    var cellDate = row.insertCell(0);
    var cellTime = row.insertCell(1);
    var cellHeartRate = row.insertCell(2);
    var cellSystolic = row.insertCell(3);
    var cellDiastolic = row.insertCell(4);
    var cellBMI = row.insertCell(5);

    cellDate.innerText = healthHistory[i].date;
    cellTime.innerText = healthHistory[i].time;
    cellHeartRate.innerText = healthHistory[i].heartRate;
    cellSystolic.innerText = healthHistory[i].systolic;
    cellDiastolic.innerText = healthHistory[i].diastolic;
    cellBMI.innerText = healthHistory[i].bmi;
  }
}

// Load data from local storage on page load
window.onload = function () {
  updateHistoryTable();
  createColumnChart();
};

// Function to create a column chart
function createColumnChart() {
  var healthHistory = JSON.parse(localStorage.getItem("healthHistory")) || [];
  var dates = [];
  var heartRates = [];
  var systolicPressures = [];
  var diastolicPressures = [];
  var bmiValues = [];

  // Extract data from health history
  for (var i = 0; i < healthHistory.length; i++) {
    dates.push(healthHistory[i].date);
    heartRates.push(healthHistory[i].heartRate);
    systolicPressures.push(healthHistory[i].systolic);
    diastolicPressures.push(healthHistory[i].diastolic);
    bmiValues.push(healthHistory[i].bmi);
  }

  var ctx = document.getElementById("healthChart").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: dates,
      datasets: [
        {
          label: "Heart Rate",
          data: heartRates,
          backgroundColor: "rgba(22, 160, 133, 0.5)",
          borderColor: "rgba(22, 160, 133, 1)",
          borderWidth: 1,
        },
        {
          label: "Systolic Pressure",
          data: systolicPressures,
          backgroundColor: "rgba(54, 162, 235, 0.2)",
          borderColor: "rgba(54, 162, 235, 1.5)",
          borderWidth: 1,
        },
        {
          label: "Diastolic Pressure",
          data: diastolicPressures,
          backgroundColor: "rgba(38, 50, 56, 0.2)",
          borderColor: "rgba(38, 50, 56, 0.7)",
          borderWidth: 1,
        },
        {
          label: "BMI",
          data: bmiValues,
          backgroundColor: "rgba(138, 208, 194, 0.5)",
          borderColor: "rgba(138, 208, 194, 2)",
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
}
