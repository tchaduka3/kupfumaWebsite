
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kupfuma</title>
<script src="https://kit.fontawesome.com/33ed7a9e8d.js" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="lg.png" type="image/x-icon">
    <link rel="icon" href="lg.png" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
  .mobile{
      font-weight: 700;
      font-size: 77px;
      color: white;
  }
  .mobile-header{
      color: white;
      font-weight: 900;
  }
  .hidden-mobile1 {
          display: none;
        }
 @media (max-width: 767px) {
     .mobile-header{
      color: white;
      font-weight: bold;
      font-size:24px;
  }
     .mobile{
         font-weight: bold;
         font-size: 20px;
         color: white;
     }
        .hidden-mobile {
          display: none;
        }
        .hidden-mobile1 {
          display: block;
        }
        h3 { 
	font-size: 10px;
   }
   .h11 { 
	font-size: 25px;
   }
      }
#overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,1);
  z-index: 2;
  cursor: pointer;
}

     
      .float2{
	position:fixed;
	width:auto;
	height:auto;
	bottom:10px;
	right:40px;
	
	color:#FFF;

	text-align:center;
  font-size:19px;
	
  z-index:100;
}
.sticky {
  position: fixed;
  top: 20;
  left:20;
  width: 100%;
}

    </style>
</head>
<body class="hold-transition layout-top-nav"  style="background-color:black;">
  <script>
    function on() {
      document.getElementById("overlay").style.display = "block";
    }
    
    function off() {
      document.getElementById("overlay").style.display = "none";
    }
    </script>
<div class="wrapper" style="background-color:black;">

  <!-- nAVbAR -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="1" style="background-image: url('images/gold.jpg');background-repeat: no-repeat;background-size: cover;">

    <!-- Content Header (Page header) -->
    <div class="content-header sticky2">
      <div class="container ">
   

        <div class="row mb-2">
          <div class="col-6">
            <h2 class="mobile-header"><img src="lg.png" height="10" width="26" class="img-fluid">&nbsp;&nbsp;Kupfuma</h2>
          </div><!-- /.col -->
          <div class="col-6">
            <i id="ico" class="fa fa-bars my-float2 float-right" style="font-size: 30;color: white;" aria-hidden="true" onclick="on()"></i>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div class="content">
  <div id="overlay" style="color:white;overflow-y: scroll;"><br><br>
    <div class="row mb-2">
      <div class="col-2"></div>
      <div class="col-4">
        <h2 style="color: white;font-weight: 900;"><img src="lg.png" height="16" width="32" class="img-fluid"><span class="hidden-mobile">&nbsp;&nbsp;Kupfuma</span></h2>
      </div><!-- /.col -->
      <div class="col-4">
        <i id="ico" class="fa fa-close my-float2 float-right" style="font-size: 30;color: white;" aria-hidden="true" onclick="off()"></i>
      </div><!-- /.col -->
      <div class="col-2"></div>
    </div>
<br>
    <div class="row">
        <div class="col-12 hidden-mobile1" style="border-bottom: 4px solid white;padding: 20px;"><center>
                 <span id="about1_1" style="font-weight:900;" onclick="showAbout_1()">
          About Us 
        </span>&nbsp;|&nbsp;

        <span id="partners1_1" onclick="showPartners_1()">
          Partners
        </span>&nbsp;|&nbsp;

        <span id="investors1_1" onclick="showInvestors_1()">
          Investors
        </span><br>

        <span id="students1_1" onclick="showStudents_1()">
          Students
        </span>&nbsp;|&nbsp;
        <span id="talent1_1" onclick="showTalent_1()">
          Talent
        </span>&nbsp;|&nbsp;
        <span id="advisors1_1" onclick="showAdvisors_1()">
          Advisors
        </span></center>
        </div>
        <div class="col-12 hidden-mobile1" style="padding: 20px;">
                  <div id="about_1">
            <p>We are a start-up focused on building big data for over 44million MSMEs spread across Africa, to help them make sharper business decisions on a daily basis in order to build wealth for the African continent and it’s citizens. 
</p><br>
<p>Our top KPI is the economic activities we impact on daily basis throughout Africa, we believe by 2030 we should be impacting at least $100billion worth of economic activities on the continent. 
</p><br>
<p>Our top priority is to multiply efforts of millions of MSMEs across their continent through big data analytics and data driven funding in order to triple Africa’s GDP to at least $10trillion by 2030.  
</p><br>
<p>We are bold about Africa, We are ambitious, We have the energy
</p><br>
<p>Get in touch <a href="mail://wealth@kupfuma.com">wealth@kupfuma.com</a>
</p>
          </div>

          <div id="partners_1" style="display: none;">
            <p>In order to increase our impact within the shortest possible time, we seek to create partnerships with various strategic partners such as development funds, banks, governments, corporates, university and other civil organisations within the society. 
</p><br>
            <p>i.e As a church you might feel, you need to train your congregates who are SME owners on how to prepare financials for their businesses and you have organised say 100 SME owners, we will be glad to chip in a help with that. 
            </p><br>
            <p>There are many ways we can create some strategics partnerships with different players, simply send us your proposal on how you think we can work together and we will get back to you. 
            </p><br>
            <p>If you feel there are any positive synergies we can explore, please don’t hesitate to contact us on <a href="mail://partners@kupfuma.com">partners@kupfuma.com</a>
            </p>
          </div>

          <div id="investors_1" style="display: none;">
            <p>To scale our efforts even faster, we are planning our investment journey as follows.</p><br> 

Pre-Seed: <br>
	&nbsp;&nbsp;&nbsp;1000+ Small businesses
	&nbsp;&nbsp;&nbsp;200+ B2B Online Stores
	&nbsp;&nbsp;&nbsp;50+ Advisors
	&nbsp;&nbsp;&nbsp;$1million+ Credit Lines
	&nbsp;&nbsp;&nbsp;$10million+ Economic Impact
 	<br><br>
Seed:<br>
&nbsp;&nbsp;&nbsp;10 000+ Small businesses
&nbsp;&nbsp;&nbsp;1 000+ B2B Online Stores
&nbsp;&nbsp;&nbsp;200+ Advisors
&nbsp;&nbsp;&nbsp;$10million+ Credit Lines
&nbsp;&nbsp;&nbsp;$100million+ Economic Impact
<br>
<p>This is all planned from 2023 up to late 2024. Currently we are aiming to close our Pre-Seed stage, expected minimum check of $25k for our Pre-Seed and deep knowledge of credit and debt from the key investors. 
</p><br>
<p>If this is of interest to you, kindly email us on <a href="mail://homerun@kupfuma.com">homerun@kupfuma.com</a> preferably from your company email so that we can easily get up to speed. 
</p>
          </div>

          <div id="students_1" style="display: none;">
            <p>It’s a mammoth task to triple Africa’s GDP to over $10trillion by 2030, there are a lot of key insights all the key stakeholders will need to understand how MSMEs will contribute to unlock Africa’s GDP to surpass the $10trillion mark.  We believe our education sector is vibrate and will give us some of the insights through intense and practical research activities during their Honours or Post Graduate studies. 
</p><br>
           <p> If you are a student at any African University, with a research topic focused on MSMEs within the continent we would love to contribute towards some of your cost to help you undertake a quality research which can be used by various key stakeholders interested in seeing Africa moving forward. 
            </p><br>
            <p>Simply email us the following 
            <ol>
            <li>Your research topic</li>
            <li>Cost structure for your research</li>
            <li>Your academic transcript</li> 
            <li>Your full details i.e Full Name, Address and reference </li></ol>
            </p><br>
            <p>to <a href="mail://future@kupfuma.com">future@kupfuma.com</a> , please note the selection process is highly competitive hence you need to put all your effort into the application. 
            </p>
          </div>
          
          <div id="talent_1" style="display: none;">
              <p>For us to disrupt the funding gap for SMEs across Africa and beyond, we need exceptional talent to build a DreamTeam that will take us there. Talent across all verticals is critical for our success to put smiles to millions of Micro, Small and Medium businesses out there, from that small corners shop in Chivhu, Zimbabwe to a food processing plant in Tunis, Tunisia.
</p><br>
<p> 

We are currently hiring Junior Developers, <a style='color:white;font-weight:bold' href='https://firebasestorage.googleapis.com/v0/b/getfunds-9a984.appspot.com/o/Junior%20Developer%20%20-%20%20Kupfuma.pdf?alt=media&token=f95193c0-0928-41f1-b1e8-8a67cfb7e089' target="_BLANK">simply download</a> the job description to assess if you can meet our requirements and proceed to make your application. </p><br>
<p>#DreamTeam</p>
          </div>
          
          <div id="advisors_1" style="display: none;">
              <p>Advisors are a key back borne to our start-up, we currently work with over 50 business advisors throughout Africa, to provide much needed hands on advisory services to a number of Micro, Small and Medium Businesses within our reach.
                </p>
                <p>Your Key Roles<br>
                <ol type="I">
                <li>Training SMEs how to use our Kupfuma Application</li>
                <li>Preparing Financial Statements for our MSMEs</li>
                <li>Filing tax returns and other regulatory requirements for our MSMEs</li>
                <li>Performing Audit and Due Diligence</li>
                <li>Helping SMEs prepare their funding documents</li>
                </ol>
                </p>
                <p>
                Requirements<br>
                <ol>
                <li>A degree in accounting or any other business-related programs</li>
                <li>A registered company and bank account</li>
                <li>Own office, preferably in a major city within Africa</li>
                <li>Ability to attend monthly zoom meetings. </li></ol></p>
                <br><p>
                Our MSMEs pay you directly for the services offered. If you want to join our network of business advisors simply email us your CV on <a href="advisors@kupfuma.com">advisors@kupfuma.com</a> 
                </p>

          </div>
        </div>
      <div class="col-2"></div>
      <div class="col-3 hidden-mobile" style="border-right: 4px solid white;">
        <h3 id="about1" style="font-weight:900;" onclick="showAbout()">
          About Us
        </h3><br>

        <h3 id="partners1" onclick="showPartners()">
          Partners
        </h3><br>

        <h3 id="investors1" onclick="showInvestors()">
          Investors
        </h3><br>

        <h3 id="students1" onclick="showStudents()">
          Students
        </h3><br>
        <h3 id="talent1" onclick="showTalent()">
          Talent
        </h3><br>
        <h3 id="advisors1" onclick="showAdvisors()">
          Advisors
        </h3><br><br>
      </div>
      
      <div class="col-5 hidden-mobile">
          <div id="about">
            <p>We are a start-up focused on building big data for over 44million MSMEs spread across Africa, to help them make sharper business decisions on a daily basis in order to build wealth for the African continent and it’s citizens. 
</p><br>
<p>Our top KPI is the economic activities we impact on daily basis throughout Africa, we believe by 2030 we should be impacting at least $100billion worth of economic activities on the continent. 
</p><br>
<p>Our top priority is to multiply efforts of millions of MSMEs across their continent through big data analytics and data driven funding in order to triple Africa’s GDP to at least $10trillion by 2030.  
</p><br>
<p>We are bold about Africa, We are ambitious, We have the energy
</p><br>
<p>Get in touch <a href="mail://wealth@kupfuma.com">wealth@kupfuma.com</a>
</p>
          </div>

          <div id="partners" style="display: none;">
            <p>In order to increase our impact within the shortest possible time, we seek to create partnerships with various strategic partners such as development funds, banks, governments, corporates, university and other civil organisations within the society. 
</p><br>
            <p>i.e As a church you might feel, you need to train your congregates who are SME owners on how to prepare financials for their businesses and you have organised say 100 SME owners, we will be glad to chip in a help with that. 
            </p><br>
            <p>There are many ways we can create some strategics partnerships with different players, simply send us your proposal on how you think we can work together and we will get back to you. 
            </p><br>
            <p>If you feel there are any positive synergies we can explore, please don’t hesitate to contact us on <a href="mail://growth@kupfuma.com">growth@kupfuma.com</a>
            </p>
          </div>

          <div id="investors" style="display: none;">
            <p>To scale our efforts even faster,  we are planning our investment journey as follows.</p><br> 

Pre-Seed Deliverables: <br>
	&nbsp;&nbsp;&nbsp;- 1 000+ Small Businesses,
	&nbsp;&nbsp;&nbsp;200+ B2B Online Stores,
	&nbsp;&nbsp;&nbsp;50+ Advisors,
	&nbsp;&nbsp;&nbsp;$1million+ Credit Lines,
	&nbsp;&nbsp;&nbsp;$10million+ Economic Impact
 	<br><br>
Seed Deliverables:<br>
&nbsp;&nbsp;&nbsp;- 10 000+ Small Businesses,
&nbsp;&nbsp;&nbsp;1 000+ B2B Online Stores,
&nbsp;&nbsp;&nbsp;200+ Advisors,
&nbsp;&nbsp;&nbsp;$10million+ Credit Lines,
&nbsp;&nbsp;&nbsp;$100million+ Economic Impact
</p><br>
<p>This is all planned from 2023 up to late 2024. Currently we are aiming to close our Pre-Seed stage, we expect a minimum check of $25k for our Pre-Seed and deep knowledge of credit and debt markets from our early stage investors per investor. 
</p><br>
<p>If this is of interest to you, kindly email us on <a href="mail://homerun@kupfuma.com">homerun@kupfuma.com</a> preferably from your company email so that we can easily get up to speed. 
</p>
          </div>

          <div id="students" style="display: none;">
            <p>It’s a mammoth task to triple Africa’s GDP to over $10trillion by 2030, there are a lot of key insights all the key stakeholders will need to understand how MSMEs will contribute to unlock Africa’s GDP to surpass the $10trillion mark.  We believe our education sector is vibrate and will give us some of the insights through intense and practical research activities during their Honours or Post Graduate studies. 
</p><br>
           <p> If you are a student at any African University, with a research topic focused on MSMEs within the continent we would love to contribute towards some of your cost to help you undertake a quality research which can be used by various key stakeholders interested in seeing Africa moving forward. 
            </p><br>
            <p>Simply email us the following 
            <ol>
            <li>Your research topic</li>
            <li>Cost structure for your research</li>
            <li>Your academic transcript</li> 
            <li>Your full details i.e Full Name, Address and reference </li></ol>
            </p><br>
            <p>to <a href="mail://future@kupfuma.com">future@kupfuma.com</a> , please note the selection process is highly competent hence you need to put all your effort into the application. 
            </p>
          </div>
          
          <div id="talent" style="display: none;">
              <p>For us to disrupt the funding gap for SMEs across Africa and beyond, we need exceptional talent to build a DreamTeam that will take us there. Talent across all verticals is critical for our success to put smiles to millions of Micro, Small and Medium businesses out there, from that small corners shop in Chivhu, Zimbabwe to a food processing plant in Tunis, Tunisia.
</p><br>
<p> 

We are currently hiring Junior Developers, <a style='color:white;font-weight:bold' href='https://firebasestorage.googleapis.com/v0/b/getfunds-9a984.appspot.com/o/Junior%20Developer%20%20-%20%20Kupfuma.pdf?alt=media&token=f95193c0-0928-41f1-b1e8-8a67cfb7e089' target="_BLANK">simply download</a> the job description to assess if you can meet our requirements and proceed to make your application. </p><br>
<p>#DreamTeam</p>
          </div>
          
          <div id="advisors" style="display: none;">
              <p>Advisors are a key back borne to our start-up, we currently work with over 50 business advisors throughout Africa, to provide much needed hands on advisory services to a number of Micro, Small and Medium Businesses within our reach.
                </p>
                <p>Your Key Roles<br>
                <ol type="I">
                <li>Training SMEs how to use our Kupfuma Application</li>
                <li>Preparing Financial Statements for our MSMEs</li>
                <li>Filing tax returns and other regulatory requirements for our MSMEs</li>
                <li>Performing Audit and Due Diligence</li>
                <li>Helping SMEs prepare their funding documents</li>
                </ol>
                </p>
                <p>
                Requirements<br>
                <ol>
                <li>A degree in accounting or any other business-related programs</li>
                <li>A registered company and bank account</li>
                <li>Own office, preferably in a major city within Africa</li>
                <li>Ability to attend monthly zoom meetings. </li></ol></p>
                <br><p>
                Our MSMEs pay you directly for the services offered. If you want to join our network of business advisors simply email us your CV on <a href="advisors@kupfuma.com">advisors@kupfuma.com</a> 
                </p>

          </div>
      </div>
      <div class="col-2"></div>
    </div>
  </div>
</div>
    <!-- Main content -->
    <div class="content">
 <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <center ><br><br>
        <h1 style="font-weight: 800;color: white;font-size: 105;margin-bottom: 0em;">
        
        <img src="lg.png" height="70" width="200" class="img-fluid"></h1><br><br>
        </center><br>
       
    </div>
    <div class="col-lg-3"></div>

    <div class="col-12">
        <!--<center>-->
        <!--    <span style="color: white;font-size: larger;">means building Wealth<br><br><br></span>-->
        <!--</center>-->
    </div>
 </div>

 <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <center>
            <p style="font-size: 19;color: white;">
                We are building wealth for millions of SMEs across Africa
            </p><br>
            <a href="#1"><i class="fa fa-sharp fa-solid fa-angle-up" style="font-size: 60;color: white;" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#2"><i class="fa fa-sharp fa-solid fa-angle-down" style="font-size: 60;color: white;" aria-hidden="true"></i></a>
           
            <br><br><br><br><br><br>
        </center>
    </div>
    <div class="col-lg-4"> <span class="float2 hidden-mobile" style="font-size: 15px;color: white;"><br><br><br><br><br>Kupfuma <i> means building wealth</i></span></div>
 </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- Section 2 start-->
 <div class="content-wrapper" id="2" style="background-image: url('images/lightson.jpg');background-repeat: no-repeat;background-size: cover;">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
   

        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" style="margin-top: 150;">
 <div class="row" style="margin-bottom: 170;">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <center >
        <p style="font-size:larger;color: white;margin-bottom: 0em;" class="float-left">Over 44 million Micro, Small to Medium business are contributing in excess of 50% to Africa’s $3trillion GPD, providing over 80% of the jobs on the continent, despite facing a $300billion funding gap. Our analytics help small businesses in Africa become profitable whilst our funding reward profitability by giving you more capital.  </p>
        </center><br>
  
    </div>
    <div class="col-lg-3"></div>

    <div class="col-12">
        <center>
            <!-- <span style="color: white;font-size: larger;">means building Wealth</span> -->
        </center>
    </div>
 </div>

 <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <center>
            <p style="font-size: 19;color: white;background-color: ;">
                We are multiplying their efforts to help triple Africa’s GDP
            </p><br>
            <a href="#1"><i class="fa fa-sharp fa-solid fa-angle-up" style="font-size: 60;color: white;" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#3"><i class="fa fa-sharp fa-solid fa-angle-down" style="font-size: 60;color: white;" aria-hidden="true"></i></a>
        </center>
    </div>
    <div class="col-lg-4"></div>
 </div>
    <!-- /.content -->
  </div>
<!-- Section 2 end -->
 

  <!-- Main Footer -->

</div>
<!-- ./wrapper -->
<!-- Section 3 start-->
 <div class="content-wrapper" id="3" style="background-image: url('images/atnight.jpg');background-repeat: no-repeat;background-size: cover;">

    <!-- Content Header (Page header) -->
   
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" style="margin-top: ;">
 <div class="row" style="margin-bottom: 114;">
    <div class="col-lg-3">
        <!--<img src="images/bigdata.jpg" height="200px" width="50px" class="img-fluid float-right">-->
        </div>
    <div class="col-lg-6">
        <center ><br>
            <h1 style="font-weight: 700;font-size: 77px;color: white;">Big Data</h1><br>
        <p style="font-size:larger;color: white;margin-bottom: 0em;" class="float-left">
        With Big Data comes the possibility of making sharper business decisions for the SMEs, becoming more efficient in capital allocation and importantly build their financials to build stock of their wealth
        </p>
        </center><br>
       
    </div>
    <div class="col-lg-3"></div>

    <div class="col-12">
        <center>
            <!-- <span style="color: white;font-size: larger;">means building Wealth</span> -->
        </center>
    </div>
 </div>

 <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <center>
            <p style="font-size: 19;color: white;background-color: ;">
                We are helping thousands of SMEs make sharper business decisions, everyday
            </p><br>
            <a href="#2"><i class="fa fa-sharp fa-solid fa-angle-up" style="font-size: 60;color: white;" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#4"><i class="fa fa-sharp fa-solid fa-angle-down" style="font-size: 60;color: white;" aria-hidden="true"></i></a>
        </center>
    </div>
    <div class="col-lg-4"></div>
 </div>
    <!-- /.content -->
  </div>
<!-- Section 3 end -->
 

  <!-- Main Footer -->

</div>

<!-- Section 4 start-->
 <div class="content-wrapper" id="4" style="background-image: url('images/funding_gap.jpeg');background-repeat: no-repeat;background-size: cover;">

    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" style="margin-top: ;">
 <div class="row" style="margin-bottom: 85;">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <center >
        <p style="font-size:larger;color: white;margin-bottom: 0em;">
          With 44million SMEs facing a $300billion funding gap across Africa, we believe in the magic of big data to help in allocating capital efficiently across the continent.
        </p>
        <h1 style="font-weight: 800;font-size: 105px; color: white;">$300 <span style="font-size: 77px;">Billion</span></h1>
        <div class="row">
          <div class="col-4">
            <span style="font-weight: 800;font-size: 77px; color: white;" class="hidden-mobile"> Gap</span>
          </div>
          <div class="col-8">
            <p style="font-size:larger;color: white;" class="hidden-mobile"><br>
              We provide data driven and flexible revenue based funding for Micro, Small to Medium businesses across Africa. Get started today
            </p>
          </div>
        </div>
        </center>
       
    </div>
    <div class="col-lg-3"></div>

    
 </div>

 <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <center>
            <p style="font-size: 19;color: white;">
                How much funding do your need for your small business?            
            </p><br><a href="#3"><i class="fa fa-sharp fa-solid fa-angle-up" style="font-size: 60;color: white;" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="#5"><i class="fa fa-sharp fa-solid fa-angle-down" style="font-size: 60;color: white;" aria-hidden="true"></i></a>
        </center>
    </div>
    <div class="col-lg-4"></div>
 </div>
    <!-- /.content -->
  </div>
<!-- Section 3 end -->
  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->

  <!-- Main Footer -->

</div>

<!-- Section 5 start-->
 <div class="content-wrapper" id="5" style="background-image: url('images/atnight.jpg');background-repeat: no-repeat;background-size: cover;">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
   

        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" style="margin-top: ;">
 <div class="row" style="margin-bottom: 50;">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <br><br><br>
        
        <ul style="font-size:larger;color: white;margin-bottom: 0em;list-style-type: square;">
          <li>95%+ of SMEs on our platform have massively increased productivity</li>
          <li>50%+ of SMEs on our platform have doubled their revenue figures</li>
          <li>30%+ have moved from loss making position to profitability </li>
        </ul><center >
        <br><br><br>
        <h1 class="mobile">Transformation</h1>
        </center><br>
       
    </div>
    <div class="col-lg-3"></div>

    <div class="col-12">
        <center>
            <!-- <span style="color: white;font-size: larger;">means building Wealth</span> -->
        </center>
    </div>
 </div>

 <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <center>
            <p style="font-size: 19;color: white;background-color:;" >
                How can we transform your small business?
            </p><br>
            <a href="#4"><i class="fa fa-sharp fa-solid fa-angle-up" style="font-size: 60;color: white;" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#6"><i class="fa fa-sharp fa-solid fa-angle-down" style="font-size: 60;color: white;" aria-hidden="true"></i></a>
        </center>
    </div>
    <div class="col-lg-4"></div>
 </div>
    <!-- /.content -->
  </div>
<!-- Section 3 end -->
  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->

  <!-- Main Footer -->

</div>
<!-- Section 2 start-->
 <div class="content-wrapper" id="6" style="background-image: url('images/CapeTown.jpg');background-repeat: no-repeat;background-size: cover;">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
   

        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" style="margin-top: ;">
 <div class="row" style="margin-bottom: 140;">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <center ><br><br><br class="hidden-mobile"><br class="hidden-mobile">
    <h1 style="font-size: 77px;color: black;font-weight: 800;">
    Are you an SME?
    </h1>
    <button class="btn" style="background-color: black;color: white;text-align: left;">
      <div class="row">
        <div class="col-3"><i class="fa fa-brands fa-apple" style="font-size: 40px;"></i></div>
        <div class="col-9"><p>Download on the</p>
            <b>App Store</b></div>
      </div>
            
            </button>
            <br  class="hidden-mobile1">
            <br  class="hidden-mobile1">
            <span class="hidden-mobile1">
            &nbsp;&nbsp;&nbsp;&nbsp;</span>
            <button class="btn" style="background-color: black;color: white;text-align: left;">
              <div class="row">
        <div class="col-3"><i class="fa fa-brands fa-google-play" style="font-size: 40px; color: white;"></i></div>
        <div class="col-9"><p>Android App On</p>
            <b>Google play</b></div>
      </div>
            
            </button><br><br>
      <p style="font-size: 19;color: white;">
                Download our app to start building wealth in Africa
            </p>
            <a href="#5"><i class="fa fa-sharp fa-solid fa-angle-up" style="font-size: 60;color: white;" aria-hidden="true"></i></a>
      </center>
       
    </div>
    <div class="col-lg-3"></div>

 </div>

    <!-- /.content -->
  </div>
<!-- Section 2 end -->


  <!-- Main Footer -->

</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Ekko Lightbox -->

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Filterizr-->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- Page specific script --><script src="plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>



<script  src="./script.js"></script>
<script>
        function showAbout(){
          document.getElementById('about').style.display="block";
          document.getElementById('partners').style.display="none";
          document.getElementById('investors').style.display="none";
          document.getElementById('students').style.display="none";
               document.getElementById('talent').style.display="none";
          document.getElementById('advisors').style.display="none";
          
           document.getElementById('about1').style.fontWeight="900";
          document.getElementById('partners1').style.fontWeight="normal";
          document.getElementById('investors1').style.fontWeight="normal";
          document.getElementById('students1').style.fontWeight="normal";
               document.getElementById('talent1').style.fontWeight="normal";
          document.getElementById('advisors1').style.fontWeight="normal";
        }
        function showPartners(){
          document.getElementById('about').style.display="none";
          document.getElementById('partners').style.display="block";
          document.getElementById('investors').style.display="none";
          document.getElementById('students').style.display="none";
               document.getElementById('talent').style.display="none";
          document.getElementById('advisors').style.display="none";
          
              document.getElementById('about1').style.fontWeight="normal";
          document.getElementById('partners1').style.fontWeight="900";
          document.getElementById('investors1').style.fontWeight="normal";
          document.getElementById('students1').style.fontWeight="normal";
               document.getElementById('talent1').style.fontWeight="normal";
          document.getElementById('advisors1').style.fontWeight="normal";
        }
        function showInvestors(){
          document.getElementById('about').style.display="none";
          document.getElementById('partners').style.display="none";
          document.getElementById('investors').style.display="block";
          document.getElementById('students').style.display="none";
               document.getElementById('talent').style.display="none";
          document.getElementById('advisors').style.display="none";
          
           document.getElementById('about1').style.fontWeight="normal";
          document.getElementById('partners1').style.fontWeight="normal";
          document.getElementById('investors1').style.fontWeight="900";
          document.getElementById('students1').style.fontWeight="normal";
               document.getElementById('talent1').style.fontWeight="normal";
          document.getElementById('advisors1').style.fontWeight="normal";
        }
        function showStudents(){
          document.getElementById('about').style.display="none";
          document.getElementById('partners').style.display="none";
          document.getElementById('investors').style.display="none";
          document.getElementById('students').style.display="block";
            document.getElementById('talent').style.display="none";
          document.getElementById('advisors').style.display="none";
          
                 document.getElementById('about1').style.fontWeight="normal";
          document.getElementById('partners1').style.fontWeight="normal";
          document.getElementById('investors1').style.fontWeight="normal";
          document.getElementById('students1').style.fontWeight="900";
               document.getElementById('talent1').style.fontWeight="normal";
          document.getElementById('advisors1').style.fontWeight="normal";
        }
        function showTalent(){
          document.getElementById('talent').style.display="block";
          document.getElementById('partners').style.display="none";
          document.getElementById('investors').style.display="none";
          document.getElementById('students').style.display="none";
          document.getElementById('about').style.display="none";
          document.getElementById('advisors').style.display="none";
                    
                 document.getElementById('about1').style.fontWeight="normal";
          document.getElementById('partners1').style.fontWeight="normal";
          document.getElementById('investors1').style.fontWeight="normal";
          document.getElementById('students1').style.fontWeight="normal";
               document.getElementById('talent1').style.fontWeight="900";
          document.getElementById('advisors1').style.fontWeight="normal";
        }
        function showAdvisors(){
          document.getElementById('about').style.display="none";
          document.getElementById('partners').style.display="none";
          document.getElementById('investors').style.display="none";
          document.getElementById('students').style.display="none";
          document.getElementById('advisors').style.display="block";
          document.getElementById('talent').style.display="none";
          
              document.getElementById('about1').style.fontWeight="normal";
          document.getElementById('partners1').style.fontWeight="normal";
          document.getElementById('investors1').style.fontWeight="normal";
          document.getElementById('students1').style.fontWeight="normal";
               document.getElementById('talent1').style.fontWeight="normal";
          document.getElementById('advisors1').style.fontWeight="900";
        }
      </script>
      <script>
        function showAbout_1(){
          document.getElementById('about_1').style.display="block";
          document.getElementById('partners_1').style.display="none";
          document.getElementById('investors_1').style.display="none";
          document.getElementById('students_1').style.display="none";
               document.getElementById('talent_1').style.display="none";
          document.getElementById('advisors_1').style.display="none";
          
           document.getElementById('about1_1').style.fontWeight="900";
          document.getElementById('partners1_1').style.fontWeight="normal";
          document.getElementById('investors1_1').style.fontWeight="normal";
          document.getElementById('students1_1').style.fontWeight="normal";
               document.getElementById('talent1_1').style.fontWeight="normal";
          document.getElementById('advisors1_1').style.fontWeight="normal";
        }
        function showPartners_1(){
          document.getElementById('about_1').style.display="none";
          document.getElementById('partners_1').style.display="block";
          document.getElementById('investors_1').style.display="none";
          document.getElementById('students_1').style.display="none";
               document.getElementById('talent_1').style.display="none";
          document.getElementById('advisors_1').style.display="none";
          
              document.getElementById('about1_1').style.fontWeight="normal";
          document.getElementById('partners1_1').style.fontWeight="900";
          document.getElementById('investors1_1').style.fontWeight="normal";
          document.getElementById('students1_1').style.fontWeight="normal";
               document.getElementById('talent1_1').style.fontWeight="normal";
          document.getElementById('advisors1_1').style.fontWeight="normal";
        }
        function showInvestors_1(){
          document.getElementById('about_1').style.display="none";
          document.getElementById('partners_1').style.display="none";
          document.getElementById('investors_1').style.display="block";
          document.getElementById('students_1').style.display="none";
               document.getElementById('talent_1').style.display="none";
          document.getElementById('advisors_1').style.display="none";
          
           document.getElementById('about1_1').style.fontWeight="normal";
          document.getElementById('partners1_1').style.fontWeight="normal";
          document.getElementById('investors1_1').style.fontWeight="900";
          document.getElementById('students1_1').style.fontWeight="normal";
               document.getElementById('talent1_1').style.fontWeight="normal";
          document.getElementById('advisors1_1').style.fontWeight="normal";
        }
        function showStudents_1(){
          document.getElementById('about_1').style.display="none";
          document.getElementById('partners_1').style.display="none";
          document.getElementById('investors_1').style.display="none";
          document.getElementById('students_1').style.display="block";
            document.getElementById('talent_1').style.display="none";
          document.getElementById('advisors_1').style.display="none";
          
                 document.getElementById('about1_1').style.fontWeight="normal";
          document.getElementById('partners1_1').style.fontWeight="normal";
          document.getElementById('investors1_1').style.fontWeight="normal";
          document.getElementById('students1_1').style.fontWeight="900";
               document.getElementById('talent1_1').style.fontWeight="normal";
          document.getElementById('advisors1_1').style.fontWeight="normal";
        }
        function showTalent_1(){
          document.getElementById('talent_1').style.display="block";
          document.getElementById('partners_1').style.display="none";
          document.getElementById('investors_1').style.display="none";
          document.getElementById('students_1').style.display="none";
          document.getElementById('about_1').style.display="none";
          document.getElementById('advisors_1').style.display="none";
                    
                 document.getElementById('about1_1').style.fontWeight="normal";
          document.getElementById('partners1_1').style.fontWeight="normal";
          document.getElementById('investors1_1').style.fontWeight="normal";
          document.getElementById('students1_1').style.fontWeight="normal";
               document.getElementById('talent1_1').style.fontWeight="900";
          document.getElementById('advisors1_1').style.fontWeight="normal";
        }
        function showAdvisors_1(){
          document.getElementById('about_1').style.display="none";
          document.getElementById('partners_1').style.display="none";
          document.getElementById('investors_1').style.display="none";
          document.getElementById('students_1').style.display="none";
          document.getElementById('advisors_1').style.display="block";
          document.getElementById('talent_1').style.display="none";
          
              document.getElementById('about1_1').style.fontWeight="normal";
          document.getElementById('partners1_1').style.fontWeight="normal";
          document.getElementById('investors1_1').style.fontWeight="normal";
          document.getElementById('students1_1').style.fontWeight="normal";
               document.getElementById('talent1_1').style.fontWeight="normal";
          document.getElementById('advisors1_1').style.fontWeight="900";
        }
      </script>
</body>
</html>
