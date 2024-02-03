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
