 <?php include "./header.php";?>

<div class="container">
       <div class="row">
            <div class="box">
                <div class="full-width-image">
                    <img src="bgimg.png" class="img-fluid" alt="Image">
                </div>
                <br>
                <div class="text">
                    <img src="main_logo_dark.png" alt="Logo" class="img-fluid">
                    <h1>Where Talent Gets Opportunities</h1>
                </div>
            </div>
       </div> 
    </div>

    <div class="container">
        <div class="row">
            <div class="about" id="about">
                <h2>WHAT ARE WE</h2>
                <br>
                <h4>We provide a platform for the students and job seekers</h4>
                <h4>to get placed into certified companies.</h4>
                <br>
                <h4>Either you can enroll as a College Student or</h4>
                <h4>an individual seeking for job.</h4>
            </div>
            
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="facts">
                <h2>SOME FACTS ABOUT US</h2>
            </div>
            <br>
            <div class="col-lg-3 mb-4 sm-6">
                <div class="card border border-dark">
                    <div class="card-body">
                        <h5 class="card-title">90+</h5>
                        <p class="card-text">
                            Our Users
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 sm-6">
                <div class="card border border-dark">
                    <div class="card-body">
                        <h5 class="card-title">3+</h5>
                        <p class="card-text">
                           Registered Institutions
                        </p>      
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 sm-6">
                <div class="card border border-dark">
                    <div class="card-body">
                        <h5 class="card-title">10+</h5>
                        <p class="card-text">
                           Registered Companies
                        </p>      
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 sm-6">
                <div class="card border border-dark">
                    <div class="card-body">
                        <h5 class="card-title">50+</h5>
                        <p class="card-text">
                           Placed Users
                        </p>      
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="stats" class="chart" style="display: flex;">
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
    
</div>
    <div class="container" style="font-family:Product Sans;font-size:14pt">
        <div class="row">
        <div class="facts">
            <h2 id="contact">CONTACT US</h2>
        </div>
        <br>
        <div class="col-lg-6 mb-4 sm-6">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label" style="font-family:Product Sans">Name</label>
                    <input type="text" class="form-control border border-dark" id="exampleInputName" aria-describedby="emailHelp">
                    <div id="nameHelp" class="form-text">Enter your Name</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label" style="font-family:Product Sans">Email</label>
                    <input type="email" class="form-control border border-dark" id="email">
                    <div id="emailHelp" class="form-text">Enter your Email</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label" style="font-family:Product Sans">Your Message</label>
                    <textarea row="5" class="form-control border border-dark" id="email"></textarea>
                    <div id="emailHelp" class="form-text">Enter Your Message</div>
                </div>
                <button type="submit" class="btn btn-outline-success" style="width:175px;">Send Message</button>
            </form>
        </div>
        <div class="col-lg-6 mb-4 sm-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.7308843684427!2d72.59273001449036!3d23.10694531896895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e83c959d4de6f%3A0x748d0828c02cf9fa!2sVishwakarma%20Government%20Engineering%20College!5e0!3m2!1sen!2sin!4v1625572632067!5m2!1sen!2sin" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        
        </div>
    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['VGEC', 'Hours per Day'],
          ['NIRMA',     11],
          ['DAIICT',      2],
          ['L.D',  2],
          ['DDIT', 2],
          ['SILVER OAK',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          pieHole: 0,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['facebook', 'Hours per Day'],
          ['amazon',     11],
          ['flipkart',      2],
          ['apple',  2],
          ['google', 2],
          ['netflix',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['javascript', 'Hours per Day'],
          ['PHP',     11],
          ['REACTJS',      2],
          ['NODEJS',  2],
          ['swift', 2],
          ['C++',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

<?php include "footer.php" ?>