<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZALOGOWANO | Admin Panel</title>
    <style>
        body{
  margin: 0;
  padding: 0;
  font-family: montserrat;
  background: black;
}
.center{
    position: absolute;
    height: 60vh;
    width: 100vh;
    top: 50%;
    left: 50%;
    margin-top: -30vh; /* Połowa wysokości */
    margin-left: -50vh; /* Połowa szerokości */
    display: flex;
    justify-content: center;
    align-items: center;
}
.ring{
  position: absolute;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  animation: ring 2s linear infinite;
}
@keyframes ring {
  0%{
    transform: rotate(0deg);
    box-shadow: 1px 5px 2px #e65c00;
  }
  50%{
    transform: rotate(180deg);
    box-shadow: 1px 5px 2px #18b201;
  }
  100%{
    transform: rotate(360deg);
    box-shadow: 1px 5px 2px #0456c8;
  }
}
.ring:before{
  position: absolute;
  content: '';
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  border-radius: 50%;
  box-shadow: 0 0 5px rgba(255,255,255,.3);
}
span{
  color: #737373;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 1px;
  line-height: 200px;
  animation: text 3s ease-in-out infinite;
}
@keyframes text {
  50%{
    color: black;
  }
}
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');

header{
    display: flex;
    justify-content: center;
    justify-content: center;
    align-items: center;
    float: left;
}
.icon {
    height: 4rem;
    width: 4rem;
    margin: 10px;
}
*{
    margin: 0 auto;
    font-family: "Roboto", sans-serif;
    font-weight: 800;
    font-style: normal;
    color: rgb(255, 255, 255);
    background-color: rgb(0, 0, 0);
}
    </style>
</head>
    <body>

    <div class="center">
        <div class="ring"></div>
        <span>Ładowanie...</span>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = "index.php";
        }, 2000);
    </script>
   </body>
</html>