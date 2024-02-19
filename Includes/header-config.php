<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Khanalukling</title>
        <link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.snow.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.js"></script>
        <script src="https://kit.fontawesome.com/833cbfbd69.js" crossorigin="anonymous"></script>
   
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
            html , body {
                font-family: "Prompt", sans-serif;
                margin: 0px;
            }
            header {
                height: 40px;
                width: 100%;
                background-color: seagreen;
                color: white;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding-inline: 10px;
            }
            header > .title-header {
                color: black;
                font-weight: bold;
            }
            header > .btn-bg-active {
                padding-inline-end: 20px;
            }
            header > .btn-bg-active > span {
                border-radius: 50%;
                width: 20px;
                height: 20px;
                background-color: blue;
            }
            #editor {
                height: 500px;
            }
            footer {
                text-align: center;
                padding-block: 20px;
            }
        </style>
    </head>
<body>
<header>
    <div class="title-header">Backend <span style="color: black;">Kha</span>nalukling</div>
    <div class="btn-bg-active">
        <i class="fa-solid fa-circle" id="btn-black" style="color:black"></i>
        <i class="fa-solid fa-circle" id="btn-white" style="color:white"></i>
    </div>
</header>
<script>
    const btnBlack = document.querySelector('#btn-black')

    btnBlack.addEventListener('click',()=>{
        document.querySelector('header').style.backgroundColor = 'black'
        btnBlack.style.border = '1px solid white'
        document.querySelector('header').style.color = 'white'
        
    })
</script>