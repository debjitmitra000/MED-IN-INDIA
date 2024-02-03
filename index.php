<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        overflow: hidden;
        width: 100%;
        height: 100vh;
        }

        #container {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
        }

        #image {
        position: absolute;
        top: 50px;
        left: 700px; /* Start position outside the viewport */
        transform: translate(150px, 50px);
        
        z-index: -111;
        }

        #text1 {
        position: absolute;
        top: -50px; /* Start position outside the viewport */
        left: 250px;
        transform: translateX(-50%);
        opacity: 0;
        font-size: 75px;
        font-weight:800;
        color: #16a085;
        text-shadow: 
                -0.5px -0.5px 0 #ffffff,  
                 0.5px -0.5px 0 #ffffff,
                -0.5px  0.5px 0 #ffffff,
                 0.5px  0.5px 0 #ffffff,
                -2px -2px 0 #16a085,  
                 2px -2px 0 #16a085,
                -2px  2px 0 #16a085,
                 2px  2px 0 #16a085;
        }
        #text2 {
        position: absolute;
        top: -50px; /* Start position outside the viewport */
        left: 360px;
        transform: translateX(-50%);
        opacity: 0;
        font-size: 75px;
        font-weight:800;
        color: #16a085;
        text-shadow: 
                -0.5px -0.5px 0 #ffffff,  
                 0.5px -0.5px 0 #ffffff,
                -0.5px  0.5px 0 #ffffff,
                 0.5px  0.5px 0 #ffffff,
                -2px -2px 0 #16a085,  
                 2px -2px 0 #16a085,
                -2px  2px 0 #16a085,
                 2px  2px 0 #16a085;
        }

        #text3 {
        position: absolute;
        top: -50px; /* Start position outside the viewport */
        left: 425px;
        transform: translateX(-50%);
        opacity: 0;
        font-size: 75px;
        font-weight:800;
        color: #16a085;
        text-shadow: 
                -0.5px -0.5px 0 #ffffff,  
                 0.5px -0.5px 0 #ffffff,
                -0.5px  0.5px 0 #ffffff,
                 0.5px  0.5px 0 #ffffff,
                -2px -2px 0 #16a085,  
                 2px -2px 0 #16a085,
                -2px  2px 0 #16a085,
                 2px  2px 0 #16a085;
        }
        #text4 {
        position: absolute;
        top: -50px; /* Start position outside the viewport */
        left: 490px;
        transform: translateX(-50%);
        opacity: 0;
        font-size: 75px;
        font-weight:800;
        color: #16a085;
        text-shadow: 
                -0.5px -0.5px 0 #ffffff,  
                 0.5px -0.5px 0 #ffffff,
                -0.5px  0.5px 0 #ffffff,
                 0.5px  0.5px 0 #ffffff,
                -2px -2px 0 #16a085,  
                 2px -2px 0 #16a085,
                -2px  2px 0 #16a085,
                 2px  2px 0 #16a085;
        }

        #text5 {
        position: absolute;
        top: -50px; /* Start position outside the viewport */
        left: 630px;
        transform: translateX(-50%);
        opacity: 0;
        font-size: 75px;
        font-weight:800;
        color: #16a085;
        text-shadow: 
                -0.5px -0.5px 0 #ffffff,  
                 0.5px -0.5px 0 #ffffff,
                -0.5px  0.5px 0 #ffffff,
                 0.5px  0.5px 0 #ffffff,
                -2px -2px 0 #16a085,  
                 2px -2px 0 #16a085,
                -2px  2px 0 #16a085,
                 2px  2px 0 #16a085;
        }

        #button {
        position: absolute;
        bottom: -50px; /* Start position outside the viewport */
        left: 315px;
        transform: translateX(-50%);
        opacity: 0;
        padding: 5px 20px;
	    font-size: 25px;
	    color: white;
	    background: #16a085;
	    border:none;
	    border-radius: 3px;
        margin: 15px 0px;
        box-shadow: 
                -1px -1px 0 #ffffff,  
                 1px -1px 0 #ffffff,
                -1px  1px 0 #ffffff,
                 1px  1px 0 #ffffff,
                -3px -3px 0 #16a085,  
                 3px -3px 0 #16a085,
                -3px  3px 0 #16a085,
                 3px  3px 0 #16a085;
        }

        p{
            width:640px;
            position: absolute;
            bottom: -240px; /* Start position outside the viewport */
            left: 160px;
            font-size: 38px;
            font-weight:350;
            color: #444444;
        }

    </style>
    </head>
    <body>
    <div id="container">
        <img id="image" src="image.gif" alt="Your Image">
        <h1 id="text1">MED</h1>
        <h1 id="text2">-</h1>
        <h1 id="text3">IN</h1>
        <h1 id="text4">-</h1>
        <h1 id="text5">INDIA</h1> 
        <p id="p">Empowering Healthcare Connections: Where Care Meets Convenience</p>
        <a href="applicationlayer/Doctorpatient.php"><button id="button">Start A Healthy Journey</button></a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script>
        gsap.from('#image', { duration: 0.8, x: -800 }); // Image animation
        gsap.to('#text1', { duration: 0.5, delay: 1, top: 120, opacity: 1 }); // Text animation
        gsap.to('#text2', { duration: 0.5, delay: 1.3, top: 115, opacity: 1 }); // Text animation
        gsap.to('#text3', { duration: 0.5, delay: 1.6, top: 120, opacity: 1 }); // Text animation
        gsap.to('#text4', { duration: 0.5, delay: 1.9, top: 115, opacity: 1 }); // Text animation
        gsap.to('#text5', { duration: 0.5, delay: 2.1, top: 120, opacity: 1 }); // Text animation
        gsap.to('#p', { duration: 0.5, delay: 2.5, top: 290, opacity: 1 }); // Text animation
        gsap.to('#button', { duration: 0.5, delay: 3, bottom: 170, opacity: 1 }); // Button animation
    </script>
</body>
</html>
