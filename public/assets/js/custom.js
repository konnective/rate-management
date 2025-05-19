//login js start
$(document).ready(function () {
  // Show Forgot Password form
  $("#showForgot").on("click", function (e) {
    e.preventDefault();
    $("#loginForm").removeClass("active");
    $("#forgotForm").addClass("active");
  });

  // Back to Login form
  $("#backToLogin").on("click", function (e) {
    e.preventDefault();
    $("#forgotForm").removeClass("active");
    $("#loginForm").addClass("active");
  });

  // Optional: handle reset form submit
  $("#resetForm").on("submit", function (e) {
    e.preventDefault();
    alert("Reset link sent!");
    $("#forgotForm").removeClass("active");
    $("#loginForm").addClass("active");
  });
});

//navbar sticky
$(window).on("scroll", function () {
  if ($(this).scrollTop() > 100) {
    $("#mainNavbar").addClass("sticky-nav");
    $("#filterBar").addClass("sticky-filter");
    $("#navPlaceholder").removeClass("d-none");
    $("#filterPlaceholder").removeClass("d-none");
  } else {
    $("#mainNavbar").removeClass("sticky-nav");
    $("#filterBar").removeClass("sticky-filter");
    $("#navPlaceholder").addClass("d-none");
    $("#filterPlaceholder").addClass("d-none");
  }
});

// Toggle active menu
$(".navbar-middle a").on("click", function (e) {
  e.preventDefault();
  $(".navbar-middle a").removeClass("active-link");
  $(this).addClass("active-link");
});
//chart js start
$(document).ready(function () {
  const $tooltip = $("#chart-tooltip");

  new Chart($("#myChart")[0].getContext("2d"), {
    type: "line",
    data: {
      labels: [
        "1 May",
        "2 May",
        "3 May",
        "4 May",
        "5 May",
        "6 May",
        "7 May",
        "8 May",
        "9 May",
      ],
      datasets: [
        {
          label: 'Line A',
          data: [7, 8, 8, 9, 9, 9, 10, 11, 14],
          borderColor: "#153F92",
          pointBackgroundColor: "#ffffff",
          pointBorderColor: "#153F92",
          pointBorderWidth: 2,
          pointRadius: 4,
          pointHoverRadius: 6,
          fill: false,
          tension: 0,
        },
        // {
        //   label: 'Line B',
        //   data: [14,11,9,6,8,7,6,5,4],
        //   borderColor: "#153F92",
        //   pointBackgroundColor: "#ffffff",
        //   pointBorderColor: "#153F92",
        //   pointBorderWidth: 2,
        //   pointRadius: 4,
        //   pointHoverRadius: 6,
        //   fill: false,
        //   tension: 0,
        // },
      ],
    },
    options: {
      interaction: {
        mode: "nearest",
        intersect: true,
      },
      plugins: {
        tooltip: {
          enabled: false,
          external: function (context) {
            const tooltipModel = context.tooltip;

            if (tooltipModel.opacity === 0) {
              $tooltip.hide();
              return;
            }

            const dataPoint = tooltipModel.dataPoints?.[0];
            const x = dataPoint.element.x;
            const y = dataPoint.element.y;

            $tooltip.css({
              display: "block",
              left: `${x}px`,
              top: `${y}px`, // lift above dot
            });

            const index = dataPoint.dataIndex;
            const label = context.chart.data.labels[index];
            const value = dataPoint.raw;

            $tooltip.find(".title").text(label);
            $tooltip.find(".price").eq(0).text(`$${value}`);
            $tooltip
              .find(".price")
              .eq(1)
              .text(`$${value + 5}`);
            $tooltip.find(".price").eq(2).text("4/25");
          },
        },
      },
      scales: {
        y: {
          min: 6,
          max: 16,
          ticks: {
            stepSize: 2,
          },
        },
        x: {
          ticks: {
            maxRotation: 0,
            minRotation: 0,
          },
        },
      },
    },
  });
});
