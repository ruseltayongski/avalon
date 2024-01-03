<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <style>
      .wave-container-footer {
          position: relative;
          background: #011523;
          /* min-height: 2vh; */
          /* padding: 20px 50px; */
          display: flex;
          justify-content: center;
          align-items: center;
          flex-direction: column;
          margin-top:35%;
      }

      @media screen and (max-width: 430px) {
          .wave-container-footer {
            margin-bottom: 30px;
          }
      }
      
      .wave-footer {
          position: absolute;
          top: 0px;
          margin-top: -10px;
          left: 0;
          width: 100%;
          height: 100px;
          /* background: url("https://i.imgur.com/ZAts69f.png"); */
          background: url("{{ asset('images/wave_footer.png') }}");
          background-size: 1000px 100px;
      }
      
      .wave-footer#wave1 {
          z-index: 2;
          opacity: 1;
          bottom: 0;
          animation: animateWaves 6s linear infinite;
      }
      
      .wave-footer#wave2 {
          z-index: 1;
          opacity: 0.5;
          bottom: 10px;
          animation: animate 6s linear infinite !important;
      }
      
      .wave-footer#wave3 {
          z-index: 2;
          opacity: 0.2;
          bottom: 15px;
          animation: animateWaves 5s linear infinite;
      }
      
      .wave-footer#wave4 {
          z-index: 1;
          opacity: 0.7;
          bottom: 20px;
          animation: animate 5s linear infinite;
      }
      
      @keyframes animateWaves {
          0% {
            background-position-x: 1000px;
          }
          100% {
            background-positon-x: 0px;
          }
      }
      
      @keyframes animate {
          0% {
            background-position-x: -1000px;
          }
          100% {
            background-positon-x: 0px;
          }
      }
    </style>
</head>
<body>
	<div class="wave-container-footer">
    <div class="waves">
      <div class="wave-footer" id="wave1"></div>
      <div class="wave-footer" id="wave2"></div>
      <div class="wave-footer" id="wave3"></div>
      <div class="wave-footer" id="wave4"></div>
    </div>
  </div>
</body>
</html>
    