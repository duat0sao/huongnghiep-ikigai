
<?php
 $ketqua1 = $_GET['kq1'];
 $ketqua2 = $_GET['kq2'];
 $ketqua3 = $_GET['kq3'];
 $ketqua4 = $_GET['kq4'];
 $ketqua5 = $_GET['kq5'];
 $ketqua6 = $_GET['kq6'];


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>



    
    


    <div class="container">
    <canvas id="myChart">
    <script>
    let myChart = document.getElementById('myChart').getContext('2d');
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['R: Realistic', 'I: Investigative', 'A: Artstic', 'S: Social', 'E: Enterprising', 'C: Conventional'],
        datasets:[{
          label:'Tắt',
          data:[
            <?php echo $ketqua1;?>,
            <?php echo $ketqua2;?>,
            <?php echo $ketqua3;?>,
            <?php echo $ketqua4;?>,
            <?php echo $ketqua5;?>,
            <?php echo $ketqua6;?>
            
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(255, 99, 132, 0.6)'
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]
      },
      options:{
        title:{
          display:true,
          text:'Biểu điểm của bạn',
          fontSize:43
        },
        legend:{
          display:true,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
    </canvas>
    </div>
</body>
</html>
