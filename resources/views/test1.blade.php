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
  <svg viewBox="0 0 40 40" width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" 
  xmlns:xlink="http://www.w3.org/1999/xlink" 
  xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000">
  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
  <g id="SVGRepo_iconCarrier">  <defs> </defs> 
    <g id="Page-1" stroke="none" stroke-width="1" 
    fill="none" fill-rule="evenodd" sketch:type="MSPage"> 
    <g id="Icon-Set" sketch:type="MSLayerGroup" 
    transform="translate(-464.000000, -983.000000)" fill="#000000">
     <path d="M494,1011 C494,1012.1 493.104,1013 492,1013 L468,1013 C466.896,1013 466,1012.1 466,1011 L466,987 C466,
     985.896 466.896,985 468,985 L492,985 C493.104,985 494,
     985.896 494,987 L494,1011 L494,1011 Z M492,983 L468,
     983 C465.791,983 464,984.791 464,987 L464,1011 C464,
     1013.21 465.791,1015 468,1015 L492,1015 C494.209,1015 496,1013.21 496,
     1011 L496,987 C496,984.791 494.209,983 492,983 L492,983 Z M487.535,
     998.121 L481.879,992.465 C481.488,992.074 480.855,992.074 480.465,
     992.465 C480.074,992.854 480.074,993.488 480.465,993.879 L484.586,998 L474,
     998 C473.447,998 473,998.447 473,999 C473,999.552 473.447,1000 
     474,1000 L484.586,1000 L480.465,1004.12 C480.074,1004.51 480.074,
     1005.14 480.465,1005.54 C480.855,1005.93 481.488,1005.93 481.879,
     1005.54 L487.535,999.879 C487.775,999.639 487.85,999.311 487.795,
     999 C487.85,998.689 487.775,998.361 487.535,998.121 L487.535,998.121 Z" 
     id="arrow-right-square" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>


    <svg fill="#13C296" height="20" width="20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 491.52 491.52" xml:space="preserve">
      <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier"> <g> <g> <path d="M378.88,184.026v307.2h112.64v-307.2H378.88z M471.04,470.747h-71.68v-266.24h71.68V470.747z"></path> 
        </g> </g> <g> <g> <path d="M256,235.227v256h102.4v-256H256z M337.92,470.747h-61.44v-215.04h61.44V470.747z"></path> </g> </g> <g> <g> 
        <path d="M133.12,286.427v204.8h102.4v-204.8H133.12z M215.04,470.747L215.04,470.747H153.6v-163.84h61.44V470.747z"></path> </g> </g> <g> <g> 
        <path d="M0,347.867v143.36h112.64v-143.36H0z M92.16,470.747H20.48v-102.4h71.68V470.747z"></path> </g> </g> <g> <g> 
      <polygon points="336.975,0.293 330.095,19.581 404.601,46.146 56.565,229.831 66.125,247.942 411.508,65.658 385.95,137.341 405.24,144.223 443.07,38.122 ">
      </polygon> </g> </g> </g>
    </svg>
	

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
    