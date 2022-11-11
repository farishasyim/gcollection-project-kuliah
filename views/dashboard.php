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

<div class="container container-fluid my-4">
    <div class="row d-flex align-items-center">
        <div class="col-md-7">
            <h2 style="font-size: 50px;">APA ITU</h2>
            <h2 style="font-size: 50px;"><span style="font-size: 2em;color:#d51f27">G</span><span class="text-dark" style="font-size: 2em">C</span>OLLECTION</h2>

        </div>
        <div class="col-md-5">
            <h6>Kami adalah perusahaan <span class="font-weight-bold" style="color:#d51f27;">bermitra resmi</span> yang berfokus pada bidang gaming dan teknologi. Kami di sini menjual <span class="font-weight-bold" style="color:#d51f27;">console terbaru, handheld terbaru dan game-game fisik yang tentu saja resmi</span>, di sini kami tidak hanya menjual itu saja loh tapi kami juga menjual beberapa figure - figure dari beberapa game kesenangan kalian. <span class="font-weight-bold" style="color:#d51f27;">Happy Gaming!</span></h6>
        </div>
    </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#d51f27" fill-opacity="1" d="M0,160L26.7,144C53.3,128,107,96,160,96C213.3,96,267,128,320,165.3C373.3,203,427,245,480,224C533.3,203,587,117,640,117.3C693.3,117,747,203,800,218.7C853.3,235,907,181,960,170.7C1013.3,160,1067,192,1120,192C1173.3,192,1227,160,1280,154.7C1333.3,149,1387,171,1413,181.3L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
</svg>
<div class="p-5" style="background-color:#d51f27;margin-top: -10px;">
    <div class="container container-fluid text-left text-light">
        <h2><span class="text-dark" style="font-size: 50px;">"</span> <?= $quotes[rand(0, (count($quotes) - 1))] ?> <span class="text-dark" style="font-size: 50px;">"</span></h2>
        <small>- from a gamers</small>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#d51f27" fill-opacity="1" d="M0,96L26.7,101.3C53.3,107,107,117,160,149.3C213.3,181,267,235,320,261.3C373.3,288,427,288,480,261.3C533.3,235,587,181,640,170.7C693.3,160,747,192,800,197.3C853.3,203,907,181,960,192C1013.3,203,1067,245,1120,266.7C1173.3,288,1227,288,1280,282.7C1333.3,277,1387,267,1413,261.3L1440,256L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
</svg>

<div class="container container-fluid mb-5">
    <h2 class="mt-5" style="font-size: 50px;">PRODUK</h2>
    <h2 style="font-size: 50px;"><span style="font-size: 2em;color:#d51f27">G</span><span class="text-dark" style="font-size: 2em">C</span>OLLECTION</h2>
    <div class="d-flex flex-wrap justify-content-around align-items-center mt-5">
        <a class="text-dark" href="" style="text-decoration: none;">
            <div>
                <center>
                    <div style="width:15em;height:15em;" class="image d-flex align-items-center">
                        <img class="img-fluid" src="assets/images/ps4.png" alt="Card image cap">
                    </div>
                </center>
                <h2 class="mt-4 text-center">Console</h2>
            </div>
        </a>
        <a class="text-dark" href="" style="text-decoration: none;">
            <div>
                <div style="width:15em;height:15em;" class="image d-flex align-items-center">
                    <img class="img-fluid" src="assets/images/switch.png" alt="Card image cap">
                </div>
                <h2 class="mt-4 text-center">Handheld</h2>
            </div>
        </a>
        <a class="text-dark" href="" style="text-decoration: none;">
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