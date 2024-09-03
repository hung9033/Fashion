<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<canvas id="myChart" width="400" height="200"></canvas>


<script>
    var dataFromPHP = <?php echo json_encode($data); ?>;
    
  // Tạo một mảng chứa tất cả các tháng từ tháng 1 đến tháng 12 của năm hiện tại
  var currentYear = new Date().getFullYear();
  var allMonths = [];
  for (var i = 1; i <= 12; i++) {
    allMonths.push(currentYear + '-' + (i < 10 ? '0' + i : '' + i));
  }

  // Điền vào dữ liệu cho tất cả các tháng
  var filledData = allMonths.map(month => {
    var existingData = dataFromPHP.find(item => item.thang === month);
    return existingData ? existingData : { thang: month, tong_doanh_thu: 0 };
  });

  // Dữ liệu biểu đồ
  var data = {
    labels: filledData.map(item => 'th'  + item.thang.split('-')[1] + ' , ' + item.thang.split('-')[0]),
    datasets: [{
      label: "Revenue in 2023",
      backgroundColor: "rgba(75,192,192,0.4)",
      borderColor: "rgba(75,192,192,1)",
      borderWidth: 1,
      hoverBackgroundColor: "rgba(75,192,192,0.6)", // Màu sắc khi di chuột qua
      hoverBorderColor: "rgba(75,192,192,1)", // Màu sắc khi di chuột qua
      data: filledData.map(item => item.tong_doanh_thu),
    }]
  };

  // Cấu hình biểu đồ
  var options = {
    scales: {
      y: {
        beginAtZero: true,
        ticks: {
          callback: function(value, index, values) {
            return '$' + value;
          },
          font: {
            size: 14, // Kích thước font
            color: 'black' // Màu sắc font
          }
        }
      }
    }
  };

  // Lấy thẻ canvas và vẽ biểu đồ
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
  });
</script>
