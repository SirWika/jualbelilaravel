@extends('layouts.main')
@section('title', 'DASHBOARD')
@section('container')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="mb-sm-5 mb-3 d-flex flex-wrap align-items-center text-head">
            <h2 class="font-w600 mb-2 me-auto">Dashboard</h2>
            <div class="weather-btn mb-2">
                <span class="fs-22 font-w600 d-flex"><i class="fa fa-cloud me-3 ms-2"></i>21</span>
                <select class="form-control style-3 default-select">
                    <option>Medan, IDN</option>
                    <option>Jakarta, IDN</option>
                    <option>Surabaya, IDN</option>
                </select>
            </div>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger mb-2 rounded">LOGOUT</button>
            </form>
        </div>
        <div class="row">
            <div class="col-xl-9 col-xxl-8">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h4 class="mb-0 fs-20 text-black">Coin Holding</h4>
                    </div>
                    <div class="card-body">
                        <div class="bg-gradient-1 coin-holding flex-wrap">
                            <div class="mb-2 coin-bx">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <svg width="61" height="60" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M31.4825 0.00501883C14.9181 -0.294993 1.2643 12.893 0.964488 29.4562C0.664679 46.0194 13.8438 59.6949 30.3957 59.9949C46.9477 60.2949 60.6139 47.1069 60.9138 30.5312C61.2136 13.9681 48.0345 0.29253 31.4825 0.00501883ZM30.4957 54.3697C17.0667 54.1197 6.33606 42.9942 6.5859 29.5562C6.82325 16.1182 17.9412 5.38023 31.3701 5.61774C44.8115 5.86775 55.5297 16.9932 55.2923 30.4312C55.055 43.8693 43.9246 54.6072 30.4957 54.3697Z" fill="#627EEA"/>
                                            <path d="M31.3351 8.12284C19.2803 7.91034 9.29917 17.5482 9.08681 29.6112C8.86195 41.6617 18.4933 51.6496 30.5481 51.8746C42.6029 52.0871 52.5841 42.4492 52.7964 30.3987C53.0088 18.3358 43.3899 8.34785 31.3351 8.12284ZM30.9416 14.3581L37.8884 26.7598L31.5487 23.2297C31.1702 23.0197 30.7118 23.0197 30.3333 23.2297L23.9936 26.7598L30.9416 14.3581ZM30.9416 45.6381L23.9936 33.2364L30.3333 36.7665C30.5219 36.8715 30.7318 36.924 30.9404 36.924C31.149 36.924 31.3589 36.8715 31.5475 36.7665L37.8872 33.2364L30.9416 45.6381ZM30.9416 34.2426L23.3165 29.9975L30.9416 25.7523L38.5655 29.9975L30.9416 34.2426Z" fill="#627EEA"/>
                                        </svg>
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="coin-font font-w600 mb-0">Ethereum</h4>
                                        <p class="mb-0 op-6">ETH</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="coin-bx-one">
                                        <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="4.71106" height="34.5712" rx="2.35553" transform="matrix(-1 0 0 1 33.6851 0)" fill="#13B440"/>
                                            <rect width="4.71106" height="25.1427" rx="2.35553" transform="matrix(-1 0 0 1 24.2632 9.42847)" fill="#13B440"/>
                                            <rect width="4.71106" height="10.9999" rx="2.35553" transform="matrix(-1 0 0 1 14.8413 23.5713)" fill="#13B440"/>
                                            <rect width="5.31504" height="21.2746" rx="2.65752" transform="matrix(-1 0 0 1 6.02246 13.2966)" fill="#13B440"/>
                                        </svg>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="mb-0 text-primary coin-font-1">$667,224</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex align-items-center">
                                    <svg width="21" height="14" viewBox="0 0 21 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 13C1.91797 11.9157 4.89728 8.72772 6.5 7L12.5 10L19.5 1" stroke="#2BC155" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    <p class="mb-0 ms-2 text-success">45%</p>
                                    <p class="mb-0 ms-2 font-w400 text-black">This Week</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gradient-2 coin-holding mt-4 flex-wrap">
                            <div class="mb-2 coin-bx">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <svg width="61" height="60" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M31.4859 0.00501883C14.9215 -0.294993 1.26771 12.893 0.967906 29.4562C0.668097 46.0194 13.8472 59.6949 30.3991 59.9949C46.9511 60.2949 60.6174 47.1069 60.9172 30.5312C61.217 13.9681 48.0379 0.29253 31.4859 0.00501883ZM30.4991 54.3697C17.0701 54.1197 6.33948 42.9942 6.58932 29.5562C6.82667 16.1182 17.9446 5.38023 31.3735 5.61774C44.8149 5.86775 55.5331 16.9932 55.2958 30.4312C55.0584 43.8693 43.928 54.6072 30.4991 54.3697Z" fill="#345D9D"/>
                                            <path d="M31.3385 8.12284C19.2837 7.91034 9.30259 17.5482 9.09023 29.6112C8.86537 41.6617 18.4967 51.6496 30.5515 51.8746C42.6063 52.0871 52.5875 42.4492 52.7999 30.3987C53.0122 18.3358 43.3933 8.34785 31.3385 8.12284ZM40.3453 42.6992H20.458L22.8939 29.2112L20.0707 29.7987V27.4986L23.3186 26.8111L25.4298 15.2106H33.3622L31.5634 25.086L34.3366 24.4985V26.7986L31.1387 27.4611L29.2898 37.6615H41.8194L40.3453 42.6992Z" fill="#345D9D"/>
                                        </svg>
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="coin-font font-w600 mb-0">LiteCoin</h4>
                                        <p class="mb-0">LTC</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="coin-bx-one">
                                        <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="4.71106" height="34.5712" rx="2.35553" transform="matrix(-1 0 0 1 33.6851 0)" fill="#13B440"/>
                                            <rect width="4.71106" height="25.1427" rx="2.35553" transform="matrix(-1 0 0 1 24.2632 9.42847)" fill="#13B440"/>
                                            <rect width="4.71106" height="10.9999" rx="2.35553" transform="matrix(-1 0 0 1 14.8413 23.5713)" fill="#13B440"/>
                                            <rect width="5.31504" height="21.2746" rx="2.65752" transform="matrix(-1 0 0 1 6.02246 13.2966)" fill="#13B440"/>
                                        </svg>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="mb-0 text-primary coin-font-1">$168,331.09</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex align-items-center">
                                    <svg width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_d)">
                                        <path d="M5 4C5.91797 5.08433 8.89728 8.27228 10.5 10L16.5 7L23.5 16" stroke="#FF2E2E" stroke-width="2" stroke-linecap="round"/>
                                        </g>
                                        <defs>
                                        <filter id="filter0_d" x="0" y="0" width="28.5001" height="22.0001" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                        <feOffset dy="1"/>
                                        <feGaussianBlur stdDeviation="2"/>
                                        <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0.180392 0 0 0 0 0.180392 0 0 0 0.61 0"/>
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                                        </filter>
                                        </defs>
                                    </svg>

                                    <p class="mb-0 ms-2 text-danger">45%</p>
                                    <p class="mb-0 ms-2 font-w400 text-black">This Week</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gradient-3 coin-holding mt-4 flex-wrap">
                            <div class="mb-2 coin-bx">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <svg width="61" height="60" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M30.9426 0C14.385 0 0.962891 13.4312 0.962891 30C0.962891 46.5688 14.385 60 30.9426 60C47.5001 60 60.9222 46.5688 60.9222 30C60.9222 13.4312 47.5001 0 30.9426 0ZM30.9426 54.375C17.5104 54.375 6.58408 43.44 6.58408 30C6.58408 16.56 17.5104 5.625 30.9426 5.625C44.3747 5.625 55.301 16.5588 55.301 30C55.301 43.4412 44.3735 54.375 30.9426 54.375Z" fill="#F7931A"/>
                                            <path d="M32.4903 30.9737H28.5542V36.825H32.4903C33.2847 36.825 34.0217 36.5025 34.5389 35.9612C35.0798 35.4425 35.4021 34.7062 35.4021 33.8875C35.4033 32.2862 34.0904 30.9737 32.4903 30.9737Z" fill="#F7931A"/>
                                            <path d="M30.9426 8.12496C18.8882 8.12496 9.08239 17.9375 9.08239 30C9.08239 42.0625 18.8882 51.875 30.9426 51.875C42.9969 51.875 52.8027 42.0612 52.8027 30C52.8027 17.9387 42.9956 8.12496 30.9426 8.12496ZM35.3908 40.13H32.8125V44.185H30.1081V40.13H28.6229V44.185H25.906V40.13H21.1292V37.585H23.7649V22.335H21.1292V19.79H25.906V15.8162H28.6229V19.79H30.1081V15.8162H32.8125V19.79H35.161C36.4726 19.79 37.6817 20.3312 38.5449 21.195C39.4081 22.0587 39.949 23.2687 39.949 24.5812C39.949 27.15 37.9228 29.2462 35.3908 29.3612C38.36 29.3612 40.7547 31.78 40.7547 34.7512C40.7547 37.7112 38.3613 40.13 35.3908 40.13Z" fill="#F7931A"/>
                                            <path d="M34.2291 27.38C34.7013 26.9075 34.9886 26.2737 34.9886 25.56C34.9886 24.1437 33.8381 22.9912 32.4216 22.9912H28.5542V28.14H32.4216C33.1236 28.14 33.7682 27.84 34.2291 27.38Z" fill="#F7931A"/>
                                        </svg>
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="coin-font font-w600 mb-0">BitCoin</h4>
                                        <p class="mb-0">BTH</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="coin-bx-one">
                                        <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="4.71106" height="34.5712" rx="2.35553" transform="matrix(-1 0 0 1 33.6851 0)" fill="#13B440"/>
                                            <rect width="4.71106" height="25.1427" rx="2.35553" transform="matrix(-1 0 0 1 24.2632 9.42847)" fill="#13B440"/>
                                            <rect width="4.71106" height="10.9999" rx="2.35553" transform="matrix(-1 0 0 1 14.8413 23.5713)" fill="#13B440"/>
                                            <rect width="5.31504" height="21.2746" rx="2.65752" transform="matrix(-1 0 0 1 6.02246 13.2966)" fill="#13B440"/>
                                        </svg>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="mb-0 text-primary coin-font-1">$667,224</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex align-items-center">
                                    <svg width="21" height="14" viewBox="0 0 21 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 13C1.91797 11.9157 4.89728 8.72772 6.5 7L12.5 10L19.5 1" stroke="#2BC155" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    <p class="mb-0 ms-2 text-success">45%</p>
                                    <p class="mb-0 ms-2 font-w400 text-black">This Week</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gradient-4 coin-holding mt-4 flex-wrap">
                            <div class="mb-2 coin-bx">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <svg width="61" height="60" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M31.486 0.00501884C14.9215 -0.294993 1.26772 12.893 0.967906 29.4562C0.668097 46.0194 13.8472 59.695 30.3992 59.995C46.9511 60.295 60.6174 47.107 60.9172 30.5313C61.217 13.9681 48.0379 0.292531 31.486 0.00501884ZM30.4991 54.3698C17.0702 54.1197 6.33949 42.9943 6.58933 29.5562C6.82667 16.1182 17.9446 5.38024 31.3735 5.61775C44.815 5.86776 55.5332 16.9932 55.2958 30.4313C55.0585 43.8693 43.928 54.6073 30.4991 54.3698Z" fill="#FF6803"/>
                                            <path d="M31.3361 8.11785C19.2812 7.90534 9.3001 17.5432 9.08773 29.6062C9.01653 33.4014 9.9272 36.9903 11.5786 40.1354H18.4505V18.602C18.4505 17.2857 20.2381 16.867 20.819 18.0483L30.9426 38.5629L41.0661 18.0495C41.647 16.867 43.4346 17.2857 43.4346 18.602V40.1354H50.2852C51.8218 37.2128 52.7362 33.9127 52.7974 30.3938C53.0098 18.3308 43.3909 8.34286 31.3361 8.11785Z" fill="#FF6803"/>
                                            <path d="M40.9362 41.3855V23.9573L32.0619 41.9392C31.6421 42.793 30.2418 42.793 29.822 41.9392L20.9489 23.9573V41.3855C20.9489 42.0755 20.3905 42.6355 19.6997 42.6355H13.1402C17.0264 48.0995 23.3449 51.7346 30.5491 51.8696C38.0405 52.0022 44.7263 48.327 48.77 42.6355H42.1854C41.4946 42.6355 40.9362 42.0755 40.9362 41.3855Z" fill="#FF6803"/>
                                        </svg>
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="coin-font font-w600 mb-0">Monero</h4>
                                        <p class="mb-0 ">XMR</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="coin-bx-one">
                                        <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="4.71106" height="34.5712" rx="2.35553" transform="matrix(-1 0 0 1 33.6851 0)" fill="#13B440"/>
                                            <rect width="4.71106" height="25.1427" rx="2.35553" transform="matrix(-1 0 0 1 24.2632 9.42847)" fill="#13B440"/>
                                            <rect width="4.71106" height="10.9999" rx="2.35553" transform="matrix(-1 0 0 1 14.8413 23.5713)" fill="#13B440"/>
                                            <rect width="5.31504" height="21.2746" rx="2.65752" transform="matrix(-1 0 0 1 6.02246 13.2966)" fill="#13B440"/>
                                        </svg>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="mb-0 text-primary coin-font-1">$24,098</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex align-items-center">
                                    <svg width="21" height="14" viewBox="0 0 21 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 13C1.91797 11.9157 4.89728 8.72772 6.5 7L12.5 10L19.5 1" stroke="#2BC155" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    <p class="mb-0 ms-2 text-success">45%</p>
                                    <p class="mb-0 ms-2 font-w400 text-black">This Week</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-4">
                <div class="card">
                    <div class="card-header border-0">
                        <h4 class="mb-0 text-black fs-20">My Profile</h4>
                        <div class="dropdown custom-dropdown mb-0">
                            <div class="btn sharp tp-btn dark-btn" data-bs-toggle="dropdown">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#342E59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#342E59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#342E59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="my-profile">
                                <img src="{{ asset('storage/'.$staff->foto) }}" alt="" class="rounded-circle">
                                <a href="/editdatastaff/{{ $staff->id_staff }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            </div>
                            <h4 class="mt-3 font-w600 text-black mb-0 name-text">{{ $staff->nama }}</h4>
                            <span>{{ $staff->jabatan }}</span>
                            <p class="mb-0 mt-3 text-primary fs-16">{{ \Carbon\Carbon::parse($staff->tanggal_lahir)->format('d-m-Y') }}</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                        </div>
                        <ul class="portofolio-social">
                            <li><a href="javascript:void(0);"><i class="fa fa-phone"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header d-block d-sm-flex flex-wrap border-0">
                                <div class="mb-3">
                                    <h4 class="fs-20 text-black">Recent Trading Activities</h4>
                                    <p class="mb-0 fs-12">Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                                <div class="card-action card-tabs mb-3 style-1">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#monthly">
                                                Monthly
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#Weekly">
                                                Weekly
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#Today">
                                                Today
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body tab-content p-0">
                                <div class="tab-pane active show fade" id="monthly">
                                    <div class="table-responsive">
                                        <table class="table border-hover card-table  tbl-btn short-one tr-rounded ">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span>
                                                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="63" height="63" rx="31.5" fill="#13B440"/>
                                                                <path d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.1969 24.9234 26.1071 25.4862 26.6672C26.0489 27.2272 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7328 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z" fill="white" stroke="white"/>
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-black">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">+$5,553</span>
                                                    </td>
                                                    <td><a class="btn-link text-success float-end" href="javascript:void(0);">Completed</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>
                                                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="63" height="63" rx="31.5" fill="#F04444"/>
                                                                <path d="M37.2692 38.9907L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.8949M37.2692 38.9907L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.8949M37.2692 38.9907C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9626L32.8127 39.393M37.2692 38.9907L32.8127 39.393M32.3885 43.8949C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.8949C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z" fill="white" stroke="white"/>
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-black">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">+$5,553</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-light float-end" href="javascript:void(0);">Pending</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>
                                                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="63" height="63" rx="31.5" fill="#13B440"/>
                                                                <path d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.1969 24.9234 26.1071 25.4862 26.6672C26.0489 27.2272 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7328 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z" fill="white" stroke="white"/>
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">Wihtdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-black">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">-$912</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link  text-danger float-end" href="javascript:void(0);">Canceled</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    <span>
                                                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="63" height="63" rx="31.5" fill="#F04444"/>
                                                                <path d="M37.2692 38.9907L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.8949M37.2692 38.9907L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.8949M37.2692 38.9907C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9626L32.8127 39.393M37.2692 38.9907L32.8127 39.393M32.3885 43.8949C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.8949C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z" fill="white" stroke="white"/>
                                                            </svg>

                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-black">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">+$7,762</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-success float-end" href="javascript:void(0);">Completed</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>
                                                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="63" height="63" rx="31.5" fill="#13B440"/>
                                                                <path d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.1969 24.9234 26.1071 25.4862 26.6672C26.0489 27.2272 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7328 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z" fill="white" stroke="white"/>
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-black">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">+$5,553</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-success float-end" href="javascript:void(0);">Completed</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>
                                                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="63" height="63" rx="31.5" fill="#F04444"/>
                                                                <path d="M37.2692 38.9907L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.8949M37.2692 38.9907L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.8949M37.2692 38.9907C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9626L32.8127 39.393M37.2692 38.9907L32.8127 39.393M32.3885 43.8949C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.8949C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z" fill="white" stroke="white"/>
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-black">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">-$912</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-danger float-end" href="javascript:void(0);">Canceled</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Weekly">
                                    <div class="table-responsive">
                                        <table class="table shadow-hover card-table border-no tbl-btn short-one">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span>
                                                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="63" height="63" rx="31.5" fill="#13B440"/>
                                                                <path d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.1969 24.9234 26.1071 25.4862 26.6672C26.0489 27.2272 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7328 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z" fill="white" stroke="white"/>
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-black">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">+$5,553</span>
                                                    </td>
                                                    <td><a class="btn-link text-success float-end" href="javascript:void(0);">Completed</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>
                                                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="63" height="63" rx="31.5" fill="#F04444"/>
                                                                <path d="M37.2692 38.9907L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.8949M37.2692 38.9907L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.8949M37.2692 38.9907C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9626L32.8127 39.393M37.2692 38.9907L32.8127 39.393M32.3885 43.8949C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.8949C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z" fill="white" stroke="white"/>
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-black">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">+$5,553</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-light float-end" href="javascript:void(0);">Pending</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>
                                                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="63" height="63" rx="31.5" fill="#13B440"/>
                                                                <path d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.1969 24.9234 26.1071 25.4862 26.6672C26.0489 27.2272 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7328 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z" fill="white" stroke="white"/>
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">Wihtdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-black">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">-$912</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link  text-danger float-end" href="javascript:void(0);">Canceled</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    <span>
                                                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="63" height="63" rx="31.5" fill="#F04444"/>
                                                                <path d="M37.2692 38.9907L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.8949M37.2692 38.9907L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.8949M37.2692 38.9907C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9626L32.8127 39.393M37.2692 38.9907L32.8127 39.393M32.3885 43.8949C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.8949C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z" fill="white" stroke="white"/>
                                                            </svg>

                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-black">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">+$7,762</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-success float-end" href="javascript:void(0);">Completed</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>
                                                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="63" height="63" rx="31.5" fill="#13B440"/>
                                                                <path d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.1969 24.9234 26.1071 25.4862 26.6672C26.0489 27.2272 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7328 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z" fill="white" stroke="white"/>
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-black">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">+$5,553</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-success float-end" href="javascript:void(0);">Completed</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>
                                                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="63" height="63" rx="31.5" fill="#F04444"/>
                                                                <path d="M37.2692 38.9907L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.8949M37.2692 38.9907L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.8949M37.2692 38.9907C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9626L32.8127 39.393M37.2692 38.9907L32.8127 39.393M32.3885 43.8949C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.8949C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z" fill="white" stroke="white"/>
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-black">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">-$912</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-danger float-end" href="javascript:void(0);">Canceled</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Today">
                                    <div class="table-responsive">
                                        <table class="table shadow-hover card-table border-no tbl-btn short-one">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span>
                                                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="63" height="63" rx="31.5" fill="#13B440"/>
                                                                <path d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.1969 24.9234 26.1071 25.4862 26.6672C26.0489 27.2272 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7328 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z" fill="white" stroke="white"/>
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-black">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">+$5,553</span>
                                                    </td>
                                                    <td><a class="btn-link text-success float-end" href="javascript:void(0);">Completed</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>
                                                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="63" height="63" rx="31.5" fill="#F04444"/>
                                                                <path d="M37.2692 38.9907L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.8949M37.2692 38.9907L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.8949M37.2692 38.9907C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9626L32.8127 39.393M37.2692 38.9907L32.8127 39.393M32.3885 43.8949C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.8949C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z" fill="white" stroke="white"/>
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-black">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">+$5,553</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-light float-end" href="javascript:void(0);">Pending</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>
                                                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="63" height="63" rx="31.5" fill="#13B440"/>
                                                                <path d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.1969 24.9234 26.1071 25.4862 26.6672C26.0489 27.2272 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7328 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z" fill="white" stroke="white"/>
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">Wihtdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-black">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">-$912</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link  text-danger float-end" href="javascript:void(0);">Canceled</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    <span>
                                                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="63" height="63" rx="31.5" fill="#F04444"/>
                                                                <path d="M37.2692 38.9907L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.8949M37.2692 38.9907L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.8949M37.2692 38.9907C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9626L32.8127 39.393M37.2692 38.9907L32.8127 39.393M32.3885 43.8949C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.8949C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z" fill="white" stroke="white"/>
                                                            </svg>

                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-black">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">+$7,762</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-success float-end" href="javascript:void(0);">Completed</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>
                                                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="63" height="63" rx="31.5" fill="#13B440"/>
                                                                <path d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.1969 24.9234 26.1071 25.4862 26.6672C26.0489 27.2272 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7328 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z" fill="white" stroke="white"/>
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">Topup</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-black">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">+$5,553</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-success float-end" href="javascript:void(0);">Completed</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>
                                                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="63" height="63" rx="31.5" fill="#F04444"/>
                                                                <path d="M37.2692 38.9907L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.8949M37.2692 38.9907L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.8949M37.2692 38.9907C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9626L32.8127 39.393M37.2692 38.9907L32.8127 39.393M32.3885 43.8949C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.8949C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z" fill="white" stroke="white"/>
                                                            </svg>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">Withdraw</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-black">06:24:45 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-w600 text-black">-$912</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-link text-danger float-end" href="javascript:void(0);">Canceled</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header pb-0 border-0">
                                <h4 class="fs-20 text-black mb-0">Weekly Summary</h4>
                            </div>
                            <div class="card-body py-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <span class="d-flex align-items-center">
                                            <svg width="23" height="16" viewBox="0 0 23 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="22.2609" height="16" rx="8" fill="#13B440"/>
                                            </svg>
                                            <span class="mb-0 ms-3 fs-18 font-w500 text-black">30%</span>
                                            <span class="mb-0 ms-3">Succesfull Market</span>
                                        </span>
                                        <span class="d-flex align-items-center">
                                            <svg width="23" height="16" viewBox="0 0 23 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect y="3.05176e-05" width="22.2609" height="16" rx="8" fill="#FF9574"/>
                                            </svg>
                                            <span class="mb-0 ms-3 fs-18 font-w500 text-black">46%</span>
                                            <span class="mb-0 ms-3">Failed</span>
                                        </span>
                                        <span class="d-flex align-items-center">
                                            <svg width="23" height="16" viewBox="0 0 23 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="22.2609" height="16" rx="8" fill="#C4C4C4"/>
                                            </svg>
                                            <span class="mb-0 ms-3 fs-18 font-w500 text-black">10%</span>
                                            <span class="mb-0 ms-3">Waiting</span>
                                        </span>
                                    </div>
                                    <div id="WeeklysummaryChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-xxl-12 col-md-6">
                        <div class="card">
                            <div class="card-header pb-0 border-0">
                                <h4 class="mb-0 fs-20 text-black">Current Graph</h4>
                                <div class="dropdown custom-dropdown mb-0">
                                    <div class="btn sharp tp-btn dark-btn" data-bs-toggle="dropdown">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#342E59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#342E59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#342E59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-2">
                                <div id="CurrentGraph"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-12 col-md-6">
                        <div class="card">
                            <div class="card-header pb-0 border-0">
                                <h4 class="mb-0 fs-20 text-black">Current Graph</h4>
                                <div class="dropdown custom-dropdown mb-0">
                                    <div class="btn sharp tp-btn dark-btn" data-bs-toggle="dropdown">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#342E59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#342E59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#342E59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-2 text-center">
                                <div id="pieChart" class="d-inline-block"></div>
                                <div class="chart-items">
                                    <div class=" col-xl-12 col-sm-12">
                                        <div class="row text-black text-start fs-13 mt-4">
                                            <span class="mb-3 col-6">
                                                <svg class="me-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="19" height="19" rx="9.5" fill="#00ADA3"/>
                                                </svg>
                                                Ethereum
                                            </span>
                                            <span class="mb-3 col-6">
                                                <svg class="me-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="19" height="19" rx="9.5" fill="#374B96"/>
                                                </svg>
                                                Litecoin
                                            </span>
                                            <span class="mb-3 col-6">
                                                <svg class="me-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="19" height="19" rx="9.5" fill="#FF782C"/>
                                                </svg>
                                                Monero
                                            </span>
                                            <span class="mb-3 col-6">
                                                <svg class="me-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="19" height="19" rx="9.5" fill="#F7A62C"/>
                                                </svg>
                                                Bitcoin
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
