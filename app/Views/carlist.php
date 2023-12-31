<?php include 'partials/header.php'; ?>

<style>
    .py-30{
        padding-top: 30px;
        padding-bottom: 30px;
    }
    .bg2{
        background: rgb(255,28,28);
        background: linear-gradient(90deg, rgba(255,28,28,1) 63%, rgba(255,255,255,1) 100%);
    }
    .bgtb{
        background: rgb(255,255,255);
        background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(255,28,28,1) 43%);
    }
    .item{
        margin-left : 7px;
        margin-bottom : 5px;
        margin-right : 7px;
        background-color: #042940;
        color: #ffffff;
        font-size : 12px;
        padding : 5px 10px;
        border-radius : 5px;
    }
    .book-btn{
        background-color: rgba(255,28,28,.5) !important;
        color: #ffffff !important;
        font-size : 16px;
        padding : 7px 10px;
        border-radius : 5px;
    }
</style>
<section class="py-50 text-center bg2">
    <div class="container">
        <div class="row">
            <h2 class="text-white">Book a Car</h2>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row d-flex flex-wrap">
            <div class="col-lg-8 col-12 p-3 order-1 order-lg-0">
                <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <h6 class="mb-4">Prices For :</h6>
                    <div class="fromtodate d-flex flex-lg-row flex-column">
                        <h6 class=""><b>From :</b> <span class="text-danger">05-10-2023 02:00</span></h6>
                        <h6 class="ms-lg-4 ms-0"><b>To :</b> <span class="text-danger">05-10-2023 12:00</span></h6>
                        <h6 class="ms-lg-4 ms-0"><b>Total Hour :</b> <span class="text-danger">36</span></h6>
                    </div>
                    <div class="shadow-sm p-3 mb-2 bg-body-tertiary rounded d-flex flex-wrap align-items-center">
                        <div class="col-lg-3 col-12">
                            <img src="<?=base_url('assets/img/car1.png') ?>" alt="" class="w-100" style="max-height : 170px; object-fit: contain;">
                        </div>
                        <div class="col-lg-7 col-12">
                            <h3>Maruti Ertiga</h3>
                            <div class="d-flex flex-wrap mt-3">
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-users"></i>
                                    <p class="ms-2">5 seater</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gears"></i>
                                    <p class="ms-2">Menual</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-briefcase"></i>
                                    <p class="ms-2">2 Bag</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-person"></i>
                                    <p class="ms-2">18+ Age</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gas-pump"></i>
                                    <p class="ms-2">Level To Leve</p>   
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gauge"></i>
                                    <p class="ms-2">Unlimited KM</p>   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12 text-center">
                            <h3>₹ 1690/-</h3>
                            <button id="carview" data-view_id="100" class="carview btn btn-danger book-btn">Book Now</button>
                        </div>
                    </div>
                    <div class="shadow-sm p-3 mb-2 bg-body-tertiary rounded d-flex flex-wrap align-items-center">
                        <div class="col-lg-3 col-12">
                            <img src="<?=base_url('assets/img/car1.png') ?>" alt="" class="w-100" style="max-height : 170px; object-fit: contain;">
                        </div>
                        <div class="col-lg-7 col-12">
                            <h3>Maruti Ertiga</h3>
                            <div class="d-flex flex-wrap mt-3">
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-users"></i>
                                    <p class="ms-2">5 seater</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gears"></i>
                                    <p class="ms-2">Menual</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-briefcase"></i>
                                    <p class="ms-2">2 Bag</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-person"></i>
                                    <p class="ms-2">18+ Age</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gas-pump"></i>
                                    <p class="ms-2">Level To Leve</p>   
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gauge"></i>
                                    <p class="ms-2">Unlimited KM</p>   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12 text-center">
                            <h3>₹ 1690/-</h3>
                            <button id="carview" data-view_id="100" class="carview btn btn-danger book-btn">Book Now</button>
                        </div>
                    </div>
                    <div class="shadow-sm p-3 mb-2 bg-body-tertiary rounded d-flex flex-wrap align-items-center">
                        <div class="col-lg-3 col-12">
                            <img src="<?=base_url('assets/img/car1.png') ?>" alt="" class="w-100" style="max-height : 170px; object-fit: contain;">
                        </div>
                        <div class="col-lg-7 col-12">
                            <h3>Maruti Ertiga</h3>
                            <div class="d-flex flex-wrap mt-3">
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-users"></i>
                                    <p class="ms-2">5 seater</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gears"></i>
                                    <p class="ms-2">Menual</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-briefcase"></i>
                                    <p class="ms-2">2 Bag</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-person"></i>
                                    <p class="ms-2">18+ Age</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gas-pump"></i>
                                    <p class="ms-2">Level To Leve</p>   
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gauge"></i>
                                    <p class="ms-2">Unlimited KM</p>   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12 text-center">
                            <h3>₹ 1690/-</h3>
                            <button id="carview" data-view_id="100" class="carview btn btn-danger book-btn">Book Now</button>
                        </div>
                    </div>
                    <div class="shadow-sm p-3 mb-2 bg-body-tertiary rounded d-flex flex-wrap align-items-center">
                        <div class="col-lg-3 col-12">
                            <img src="<?=base_url('assets/img/car1.png') ?>" alt="" class="w-100" style="max-height : 170px; object-fit: contain;">
                        </div>
                        <div class="col-lg-7 col-12">
                            <h3>Maruti Ertiga</h3>
                            <div class="d-flex flex-wrap mt-3">
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-users"></i>
                                    <p class="ms-2">5 seater</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gears"></i>
                                    <p class="ms-2">Menual</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-briefcase"></i>
                                    <p class="ms-2">2 Bag</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-person"></i>
                                    <p class="ms-2">18+ Age</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gas-pump"></i>
                                    <p class="ms-2">Level To Leve</p>   
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gauge"></i>
                                    <p class="ms-2">Unlimited KM</p>   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12 text-center">
                            <h3>₹ 1690/-</h3>
                            <button id="carview" data-view_id="100" class="carview btn btn-danger book-btn">Book Now</button>
                        </div>
                    </div>
                    <div class="shadow-sm p-3 mb-2 bg-body-tertiary rounded d-flex flex-wrap align-items-center">
                        <div class="col-lg-3 col-12">
                            <img src="<?=base_url('assets/img/car1.png') ?>" alt="" class="w-100" style="max-height : 170px; object-fit: contain;">
                        </div>
                        <div class="col-lg-7 col-12">
                            <h3>Maruti Ertiga</h3>
                            <div class="d-flex flex-wrap mt-3">
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-users"></i>
                                    <p class="ms-2">5 seater</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gears"></i>
                                    <p class="ms-2">Menual</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-briefcase"></i>
                                    <p class="ms-2">2 Bag</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-person"></i>
                                    <p class="ms-2">18+ Age</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gas-pump"></i>
                                    <p class="ms-2">Level To Leve</p>   
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gauge"></i>
                                    <p class="ms-2">Unlimited KM</p>   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12 text-center">
                            <h3>₹ 1690/-</h3>
                            <button id="carview" data-view_id="100" class="carview btn btn-danger book-btn">Book Now</button>
                        </div>
                    </div>
                    <div class="shadow-sm p-3 mb-2 bg-body-tertiary rounded d-flex flex-wrap align-items-center">
                        <div class="col-lg-3 col-12">
                            <img src="<?=base_url('assets/img/car1.png') ?>" alt="" class="w-100" style="max-height : 170px; object-fit: contain;">
                        </div>
                        <div class="col-lg-7 col-12">
                            <h3>Maruti Ertiga</h3>
                            <div class="d-flex flex-wrap mt-3">
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-users"></i>
                                    <p class="ms-2">5 seater</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gears"></i>
                                    <p class="ms-2">Menual</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-briefcase"></i>
                                    <p class="ms-2">2 Bag</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-person"></i>
                                    <p class="ms-2">18+ Age</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gas-pump"></i>
                                    <p class="ms-2">Level To Leve</p>   
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gauge"></i>
                                    <p class="ms-2">Unlimited KM</p>   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12 text-center">
                            <h3>₹ 1690/-</h3>
                            <button id="carview" data-view_id="100" class="carview btn btn-danger book-btn">Book Now</button>
                        </div>
                    </div>
                    <div class="shadow-sm p-3 mb-2 bg-body-tertiary rounded d-flex flex-wrap align-items-center">
                        <div class="col-lg-3 col-12">
                            <img src="<?=base_url('assets/img/car1.png') ?>" alt="" class="w-100" style="max-height : 170px; object-fit: contain;">
                        </div>
                        <div class="col-lg-7 col-12">
                            <h3>Maruti Ertiga</h3>
                            <div class="d-flex flex-wrap mt-3">
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-users"></i>
                                    <p class="ms-2">5 seater</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gears"></i>
                                    <p class="ms-2">Menual</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-briefcase"></i>
                                    <p class="ms-2">2 Bag</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-person"></i>
                                    <p class="ms-2">18+ Age</p>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gas-pump"></i>
                                    <p class="ms-2">Level To Leve</p>   
                                </div>
                                <div class="item d-flex align-items-center">
                                    <i class="fa-solid fa-gauge"></i>
                                    <p class="ms-2">Unlimited KM</p>   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12 text-center">
                            <h3>₹ 1690/-</h3>
                            <button class="btn btn-danger book-btn">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 p-3 order-0 order-lg-1">
                <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <h6>Car Fillter</h6>
                    <div class="d-flex flex-wrap">
                        <div class="col-3 shadow-sm p-3 m-1 bg-body-tertiary rounded text-center align-items-center">
                            <img src="<?=base_url('assets/img/car (1).png') ?>" alt="" class="w-100" style="max-height : 100px; object-fit: contain;">
                            <span class="ms-auto">Premium SedanV</span>
                        </div>
                        <div class="col-3 shadow-sm p-3 m-1 bg-body-tertiary rounded text-center align-items-center">
                            <img src="<?=base_url('assets/img/suv.png') ?>" alt="" class="w-100" style="max-height : 100px; object-fit: contain;">
                            <span class="ms-auto">suv</span>
                        </div>
                        <div class="col-3 shadow-sm p-3 m-1 bg-body-tertiary rounded text-center align-items-center">
                            <img src="<?=base_url('assets/img/car.png') ?>" alt="" class="w-100" style="max-height : 100px; object-fit: contain;">
                            <span class="ms-auto">Compact Sedan</span>
                        </div>
                        <div class="col-3 shadow-sm p-3 m-1 bg-body-tertiary rounded text-center align-items-center">
                            <img src="<?=base_url('assets/img/suv.png') ?>" alt="" class="w-100" style="max-height : 100px; object-fit: contain;">
                            <span class="ms-auto">MUV</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>

<script>
    $(document).ready(function () {
        $('body').on('click','.carview',function () {
            var view_id = $(this).attr('data-view_id');
            console.log(view_id);
        });
    });
</script>