<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <div class="header">
        <h1>Hi Everyone, Welcome to My Website!</h1>
        <p>In this website, i'll tell you a little bit about myself. Let's get started!</p>
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nv nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">About Me</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nv nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Art Gallery</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nv nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">My Product</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            <section class="h-100 gradient-custom-2">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col col-lg-9 col-xl-7">
                            <div class="card">
                                <div class="rounded-top text-white d-flex flex-row"
                                    style="background-color: #000; height:200px;">
                                    <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                        <img src="img/foto.jpg" alt="Generic placeholder image"
                                            class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">
                                    </div>
                                    <div class="prof ms-3" style="margin-top: 130px;">
                                        <h5>Abdi Nurhuda</h5>
                                        <p>Bogor, Sentul City</p>
                                    </div>
                                </div>
                                <div class="txt p-4 text-black" style="background-color: #f8f9fa;">
                                    <div class="d-flex justify-content-end text-center py-1">
                                        <div>
                                            <p class="mb-1 h5">20</p>
                                            <p class="small mb-0">Age</p>
                                        </div>
                                        <div class="px-3">
                                            <p class="mb-1 h5">752</p>
                                            <p class="small mb-0">Artwork</p>
                                        </div>
                                        <div>
                                            <p class="mb-1 h5">100K</p>
                                            <p class="small mb-0">Followers</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="txt card-body p-4 text-black">
                                    <div class="mb-5">
                                        <p class="lead fw-normal mb-1">Hobbies</p>
                                        <div class="p-4" style="background-color: #f8f9fa;">
                                            <p class="font-italic mb-1">Drawing</p>
                                            <p class="font-italic mb-1">Graphic Design</p>
                                            <p class="font-italic mb-0">Sports</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <p class="lead fw-normal mb-0">Recent Artwork</p>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col mb-2">
                                            <img src="img/p2.jpg" alt="image 1" class="w-100 rounded-3">
                                        </div>
                                        <div class="col mb-2">
                                            <img src="img/4.4.jpg" alt="image 1" class="w-100 rounded-3">
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col">
                                            <img src="img/1.1.jpg" alt="image 1" class="w-100 rounded-3">
                                        </div>
                                        <div class="col">
                                            <img src="img/2.1.jpg" alt="image 1" class="w-100 rounded-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="about">
                <h2>Little bit about me</h2>
                <p>I'm just a normal human like you guys. I live in Bogor "The Rain City", well this city lived up to
                    his name, so for anyone live here "You gotta love the rain!". Originally i'm from Jakarta, but last
                    year i obligated to leave Jakarta and move to Bogor for my scholarship program. Being a scholarship
                    student is not easy actually, people always expect more from you. Well that can't be helped tho, but
                    i really hope they realize that i'm just like you, a normal human and nothing different. Luckyly, i
                    got new friends and classmates that help me a lot through this year, there's still several months to
                    go for this program to end. I wish i made a lot of good memories with them and can be remembered for
                    their lifetime.
                </p>
            </div>

            <div class="kartu">
                <div class="card" style="width: 25rem;">
                    <img src="img/BLI.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">BCA Learning Instute or you can also called BLI is an office for new
                            employee study and training. This place is also where i study tho.</p>
                    </div>
                </div>
                <div class="card" style="width: 25rem;">
                    <img src="img/BLI2.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">This is a ribbon that drawing "BCA", the bank company who owns this place.
                            This is one of the iconic place in BLI.</p>
                    </div>
                </div>
                <div class="card" style="width: 25rem;">
                    <img src="img/RTB.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">This is where i live, it is a dormitory called "Rumah Talenta BCA" or RTB
                            for short.</p>
                    </div>
                </div>
            </div>

            <h3>Meet my classmates!</h3>

            <div id="carouselExampleIndicators" class="carousel slide carousel-edit" data-bs-ride="true">
                <div class="carousel-indicators add">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/K2.JPG" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/K3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/K4.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
            <div class="tab-pane fade hov" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <figure>
                    <blockquote class="blockquote">
                        <p>Art is Universal, It's for everyone to consume but with it's own perception.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        Me in <cite title="Source Title">My book?</cite>
                    </figcaption>
                </figure>

                <!-- Gallery -->
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="img/1.1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                        <img src="img/5.2.jpg" class="w-100 shadow-1-strong rounded mb-4"
                            alt="Wintry Mountain Landscape" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="img/6.1.jpg" class="w-100 shadow-1-strong rounded mb-4"
                            alt="Mountains in the Clouds" />

                        <img src="img/Test.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="img/3.1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                        <img src="img/Totebag Purple.jpg" class="w-100 shadow-1-strong rounded mb-4"
                            alt="Yosemite National Park" />
                    </div>
                </div>
                <!-- Gallery -->


                <!-- Gallery -->
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="img/3.2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                        <img src="img/4.1.jpg" class="w-100 shadow-1-strong rounded mb-4"
                            alt="Wintry Mountain Landscape" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="img/Totebag Pink.jpg" class="w-100 shadow-1-strong rounded mb-4"
                            alt="Mountains in the Clouds" />

                        <img src="img/Binus4.png" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="img/7.png" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                        <img src="img/4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                    </div>
                </div>
                <!-- Gallery -->
            </div>
            <div class="tab-pane fade hov" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
            tabindex="0">
            <div class="lol">
            <p>League of Legend Champion</p>
            <div class="text-center">
                @foreach ($product as $prd)
                    @if ($prd['status'] == 'R')
                        <a href="/mantap/{{$prd['id']}}" style="text-decoration: none"><div class ="cham" style="border: silver solid 5px; background-image: url('Assets/{{$prd['nama']}}.jpg'); box-shadow: silver 5px 5px 35px">
                            <h2>{{ $prd['nama'] }}</h2>
                            <h3>Difficulty: {{ $prd['status'] }}</h3>
                            <h3>Champion Price:{{ $prd['price'] }}</h3>
                        </div></a>
                    @elseif ($prd['status'] == 'SR')
                    <a href="/mantap/{{$prd['id']}}" style="text-decoration: none"><div class ="cham"  style="border: gold solid 5px; background-image: url('Assets/{{$prd['nama']}}.jpg'); box-shadow: gold 5px 5px 35px">
                            <h2>{{ $prd['nama'] }}</h2>
                            <h3>Difficulty: {{ $prd['status'] }}</h3>
                            <h3>Champion Price: {{ $prd['price'] }}</h3>
                        </div></a>
                    @else
                    <a href="/mantap/{{$prd['id']}}" style="text-decoration: none"> <div class ="cham"  style="border: red solid 5px; background-image: url('Assets/{{$prd['nama']}}.jpg'); box-shadow: red 5px 5px 35px">
                            <h2>{{ $prd['nama'] }}</h2>
                            <h3>Difficulty: {{ $prd['status'] }}</h3>
                            <h3>Champion Price: {{ $prd['price'] }}</h3>
                        </div></a>
                    @endif
                @endforeach
            </div>
            </div>
            </div>
    </div>

        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </footer>

        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
