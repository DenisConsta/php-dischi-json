<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">

  <!-- Bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css'
    integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw=='
    crossorigin='anonymous' />
  <!-- VueJs -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <title>PHP disks</title>
  <!-- Axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
    integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <div id="app">
    <header>
      <!-- ? navbar -->
      <div class="navbar">
        <div class="container">
          <div class="logo">
            <img src="assets/images/logo.png" alt="Spotify logo">
          </div>
        </div>
      </div>

    </header>
    <main>
      <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">

          <div v-for="(disk, index) in disks" :key="index" class="col">
            <div class="my-card ">
              <div class="img-card">
                <img :src="disk.poster" alt="">
              </div>
              <div class="text-card text-light">
                <h3 class="title"> {{disk.title}}</h3>
                <h5 class="artist">{{disk.author}}</h5>
                <h4 class="year">{{disk.year}}</h4>
              </div>
            </div>
          </div>

        </div>
      </div>
    </main>
  </div>




</body>
<script src="./js/main.js"></script>

</html>