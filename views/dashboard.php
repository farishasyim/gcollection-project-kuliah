<?php
$quotes = [
    "I'm the hero of a thousand stories. I'm a superhero, an assassin a soldier. I've slain dragons and traveled through portals. I am a spartan, a commander. A king. I've saved a thousand worlds and countless more lives. What am I? I'm a gamer.",
    "Games don't make you violent, lag does.",
    "I'm not a player. I'm a gamer. Players get chicks. I get achievements.",
    "Keep calm and game on.",
    "Eat. Sleep. Game. Repeat.",
    "I chose to be a gamer because nothing epic ever happens in real life.",
    "That moment when you finish a game and just don't know what to do with your life anymore.",
    "Tips on how to talk to someone while they're gaming: Don't.",
    "Education is important, but video games are importanter.",
    "If someone pauses their game just to text you back, marry them.",
    "I don't know how to play video games casually. I'm either not interested at all or I play 16 hours and forget to eat.",
    "I don't have birthdays. I level up!",
    "I have a dream. That one day, my mom will understand that online games cannot be paused.",
    "I'm a gamer. Not because I don't have a life. But because I choose to have many.",
    "I'm sorry for what I said, when I was playing video games.",
    "Keep calm and blame it on the lag.",
];
?>

<div class="p-5" style="background-color: #d51f27;">
    <div class="container container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-lg-5 col-xl-5">
                <h1 class="font-weight-bold text-dark"><span class="text-light" style="font-size: 2em">G</span><span class="text-dark" style="font-size: 2em">C</span>OLLECTION</h1>
                <h6 class="text-light"><span class="text-dark">Mitra Gaming Shop</span> kepercayaan anda, siap memenuhi seluruh kebutuhan gaming anda</h6>
            </div>
            <div class="col-lg-7 col-xl-7 d-none d-lg-block d-xl-block">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div style="height: 600px;width: auto;">
                                <img class="img-fluid" src="assets/images/carousel-1.png">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div style="height: 600px;width: auto;">
                                <img class="img-fluid" src="assets/images/carousel-2.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#D51F27" fill-opacity="1" d="M0,96L34.3,101.3C68.6,107,137,117,206,133.3C274.3,149,343,171,411,160C480,149,549,107,617,80C685.7,53,754,43,823,42.7C891.4,43,960,53,1029,90.7C1097.1,128,1166,192,1234,224C1302.9,256,1371,256,1406,256L1440,256L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
</svg>

<div class="container container-fluid pb-5">
    <div class="row d-flex align-items-center">
        <div class="col-md-7">
            <h1 style="font-size: 50px;">APA ITU</h1>
            <h1 style="font-size: 50px;"><span style="font-size: 2em;color:#d51f27">G</span><span class="text-dark" style="font-size: 2em">C</span>OLLECTION</h1>
        </div>
        <div class="col-md-5">
            <h6>Kami adalah perusahaan <span class="font-weight-bold" style="color:#d51f27;">bermitra resmi</span> yang berfokus pada bidang gaming dan teknologi. Kami di sini menjual <span class="font-weight-bold" style="color:#d51f27;">console terbaru, handheld terbaru dan game-game fisik yang tentu saja resmi</span>, di sini kami tidak hanya menjual itu saja loh tapi kami juga menjual beberapa figure - figure dari beberapa game kesenangan kalian. <span class="font-weight-bold" style="color:#d51f27;">Happy Gaming!</span></h6>
        </div>
    </div>
</div>
<div class="bg-dark w-100 mt-5 p-1">
</div>
<div class="p-5" style="background-color:#d51f27;">
    <div class="container container-fluid text-left text-light">
        <h2><span class="text-dark" style="font-size: 50px;">"</span> <?= $quotes[rand(0, (count($quotes) - 1))] ?> <span class="text-dark" style="font-size: 50px;">"</span></h2>
        <small>- from a gamers</small>
    </div>
</div>
<div class="bg-dark w-100 p-1">
</div>

<div class="container container-fluid mb-5 pt-5">
    <h2 class="mt-5" style="font-size: 50px;">PRODUK</h2>
    <h2 style="font-size: 50px;"><span style="font-size: 2em;color:#d51f27">G</span><span class="text-dark" style="font-size: 2em">C</span>OLLECTION</h2>
    <div class="d-flex flex-wrap justify-content-around align-items-center mt-5">
        <a class="text-dark" href="?page=products" style="text-decoration: none;">
            <div>
                <center>
                    <div style="width:15em;height:15em;" class="image d-flex align-items-center">
                        <img class="img-fluid" src="assets/images/ps4.png" alt="Card image cap">
                    </div>
                </center>
                <h2 class="mt-4 text-center">Console</h2>
            </div>
        </a>
        <a class="text-dark" href="?page=products" style="text-decoration: none;">
            <div>
                <div style="width:15em;height:15em;" class="image d-flex align-items-center">
                    <img class="img-fluid" src="assets/images/switch.png" alt="Card image cap">
                </div>
                <h2 class="mt-4 text-center">Handheld</h2>
            </div>
        </a>
        <a class="text-dark" href="?page=products" style="text-decoration: none;">
            <div>
                <center>
                    <div style="width:15em;height:15em;" class="image d-flex align-items-center">
                        <img class="img-fluid" src="assets/images/games.png" alt="Card image cap">
                    </div>
                </center>
                <h2 class="mt-4 text-center">Console / Handheld <br> Games</h2>
            </div>
        </a>
    </div>
</div>