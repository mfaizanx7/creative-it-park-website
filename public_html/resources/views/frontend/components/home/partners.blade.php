{{-- <section class="mil-events mil-deep-bg mil-p-120-120 white">

    <div class="logo-grid">

        @foreach ($client as $item)

        <a href="{{$item->link}}" target="_blank" class="{{$item->id % 2 != 0 ? 'flex' : '' }}"><img
                src="{{ asset('assets/uploads/client/' . $item->image) }}" class="{{ $item->id % 2 == 0 ? 'big' : '' }}"
                alt="{{ $item->image }}">

        </a>

        @endforeach

    </div>

</section> --}}



{{-- <section class="mil-partners mil-deep-bg mil-p-120-120 white">

    <div class="logo-grid">

        <div class="col">

            <div><img src="{{ asset('assets/uploads/client/k.png')}}" alt="shopify"></div>

            <div><img src="{{ asset('assets/uploads/client/d.png')}}" class="" alt="VCard" style="margin-left: -1rem;">
            </div>

            <div><img src="{{ asset('assets/uploads/client/j.png')}}" class="" alt="Xero"></div>

        </div>

        <div class="col">

            <div><img src="{{ asset('assets/uploads/client/a.png')}}" class="" alt="Google Drive"></div>

            <div><img src="{{ asset('assets/uploads/client/l.png')}}" class="big" alt="Google"></div>

        </div>

        <div class="col">

            <div><img src="{{ asset('assets/uploads/client/i.png')}}" class="" alt="Xero"></div>

            <div><img src="{{ asset('assets/uploads/client/hubspot.png')}}" class="" alt="Xero"></div>

            <div><img src="{{ asset('assets/uploads/client/b.png')}}" class="" class="" alt="Flutterwave"
                    style="margin-left: -0.5rem;"></div>

        </div>

        <div class="col">

            <div><img src="{{ asset('assets/uploads/client/c.png')}}" class="" alt="Xero"></div>

            <div><img src="{{ asset('assets/uploads/client/f.png')}}" class="big" alt="Xero"></div>

            <div><img src="{{ asset('assets/uploads/client/mercadopago.png')}}" class="" alt="Xero"></div>

        </div>

    </div>

</section> --}}

{{-- <section class="mil-partners mil-deep-bg mil-p-120-120 white">

    <div class="logo-grid">

        <div class="logo-grid-col">

            <div class="logo-grid-col">

                <div class="logo-grid-row">

                    <div class="grid-end-justify"><img src="{{ asset('assets/uploads/client/k.png')}}" alt="shopify">
                    </div>

                    <div><img src="{{ asset('assets/uploads/client/d.png')}}" alt="VCard">

                    </div>

                </div>

                <div class="logo-grid-row">

                    <div class="grid-end-align"><img src="{{ asset('assets/uploads/client/a.png')}}" class=""
                            alt="Google Drive">

                    </div>

                    <div class="grid-big"><img src="{{ asset('assets/uploads/client/l.png')}}" class="big" alt="Google">
                    </div>

                </div>

            </div>

            <div class="logo-grid-row horizontal">

                <div><img src="{{ asset('assets/uploads/client/j.png')}}" class="" alt="Xero"></div>

            </div>

        </div>

        <div class="logo-grid-col">

            <div class="logo-grid-col">

                <div class="logo-grid-row">

                    <div class=""><img src="{{ asset('assets/uploads/client/i.png')}}" class="" alt="Google Drive">

                    </div>

                    <div><img src="{{ asset('assets/uploads/client/b.png')}}" class="big ml-2" alt="Google"></div>

                </div>

                <div class="logo-grid-row">

                    <div class="grid-end-align"><img src="{{ asset('assets/uploads/client/zapierlogo.png')}}"
                            alt="shopify"></div>

                    <div class="grid-end-align grid-end-justify"><img src="{{ asset('assets/uploads/client/c.png')}}"
                            class="mr-0-5" alt="shopify"></div>

                    <div class="grid-end-justify"><img src="{{ asset('assets/uploads/client/f.png')}}" class=""
                            alt="VCard">

                    </div>

                </div>

            </div>

            <div class="logo-grid-row horizontal horizontal2">

                <div><img src="{{ asset('assets/uploads/client/hubspot.png')}}" class="" alt="Xero"></div>

            </div>



        </div>

    </div>

</section> --}}



<section class="mil-partners mil-deep-bg mil-p-120-120 white">
    <div class="clients">
        <h1 class="mil-text-center p-4">Our Clients</h1>
        <img src="{{ asset('assets/uploads/client/Clients CIP 2025-26-01.webp') }}" alt="" loading="lazy">
        <!--<div class="grid">
            <div class="column desktop">
                <img src="{{ asset('assets/uploads/client/client1.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client2.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client3.webp') }}" alt="">
            </div>

            <div class="column desktop content-justify">
                <span class="gridplaceholder placeholdercellupdesktop"></span>
                <img src="{{ asset('assets/uploads/client/client4.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client7.webp') }}" alt="">
                <span class="gridplaceholder placeholdercelldowndesktop"></span>
            </div>

            <div class="column desktop content-justify">
                {{-- <span class="gridplaceholder placeholdercellupdesktop"></span> --}}
                <img src="{{ asset('assets/uploads/client/client5.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client6.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client21.webp') }}" alt="">
                {{-- <span class="gridplaceholder placeholdercelldowndesktop"></span> --}}
            </div>

            <div class="column desktop content-justify">
                <span class="gridplaceholder placeholdercellupdesktop"></span>
                <img src="{{ asset('assets/uploads/client/client20.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client17.webp') }}" alt="">
                <span class="gridplaceholder placeholdercelldowndesktop"></span>
            </div>

            <div class="column desktop">
                <span class="gridplaceholder placeholdercellupdesktop"></span>
                <img src="{{ asset('assets/uploads/client/client15.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client16.webp') }}" alt="">
            </div>

            <div class="column desktop content-justify">
                <span class="gridplaceholder placeholdercellupdesktop"></span>
                <img src="{{ asset('assets/uploads/client/client11.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client22.webp') }}" alt="">
                <span class="gridplaceholder placeholdercelldowndesktop"></span>
            </div>

            <div class="column desktop content-justify">
                <img src="{{ asset('assets/uploads/client/client19.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client12.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client13.webp') }}" alt="">
            </div>

            <div class="column desktop content-justify">
                <span class="gridplaceholder placeholdercellupdesktop"></span>
                <img src="{{ asset('assets/uploads/client/client14.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client23.webp') }}" alt="">
                <span class="gridplaceholder placeholdercelldowndesktop"></span>
            </div>

            <div class="column desktop">
                <img src="{{ asset('assets/uploads/client/client10.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client8.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client18.webp') }}" alt="">
            </div>

            <div class="column mobile">
                <img src="{{ asset('assets/uploads/client/client1.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client2.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client3.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client4.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client5.webp') }}" alt="">
            </div>

            <div class="column mobile">
                <span class="gridplaceholder placeholder-mobile-small"></span>
                <img src="{{ asset('assets/uploads/client/client6.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client7.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client8.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client9.webp') }}" alt="">
                <span class="gridplaceholder placeholder-mobile-large"></span>
            </div>

            <div class="column mobile">
                <span class="gridplaceholder placeholder-mobile-large"></span>
                <img src="{{ asset('assets/uploads/client/client10.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client11.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client12.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client13.webp') }}" alt="">
                <span class="gridplaceholder placeholder-mobile-small"></span>
            </div>

            <div class="column mobile">
                <img src="{{ asset('assets/uploads/client/client14.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client15.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client16.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client17.webp') }}" alt="">
                <img src="{{ asset('assets/uploads/client/client18.webp') }}" alt="">
            </div>
        </div>-->
    </div>

    <style>
        .grid {
            display: grid;
            grid-template-columns: repeat(9, 1fr);
            /* 9 equal columns */
            gap: 15px;
            max-width: 1440px;
            padding-inline: 2rem;
        }

        .column {
            display: flex;
            flex-direction: column;
            gap: 10px;
            justify-content: center;
        }

        .content-justify {
            justify-content: space-between;
        }

        .column img {
            width: 100%;
            height: 150px;
            max-height: 150px;
            max-width: 150px;
            border-radius: 8px;
            object-fit: contain;
            box-shadow: 0px 0px 10.1px 0px #0000001A;
            border: 1px solid transparent;
            transition: transform 0.3s ease, border 0.3s ease;
            padding: 1.3rem;
        }

        .column img:hover,
        .gridplaceholder:hover {
            transform: scale(1.09);
            border: 1px solid #f57c00;
        }

        .gridplaceholder {
            background: linear-gradient(185.92deg, #FFFFFF 4.7%, rgb(153 153 153 / 23%) 212.57%);
            border-radius: 7.36px;
            transition: transform 0.3s ease, border 0.3s ease;
            box-shadow: 0px 3px 7.1px 0px #00000012;
            max-width: 150px;
        }

        .placeholdercellupdesktop,
        .placeholdercelldowndesktop {
            height: 65px;
        }

        .placeholdercellupdesktop {
            background: white;
        }

        /* Mobile layout */
        @media (max-width: 768px) {
            .grid {
                grid-template-columns: repeat(4, 1fr);
                padding-inline: 1rem;
                gap: 6px;
                /* 4 columns */
            }

            .column {
                justify-content: space-between;
                gap: 6px;
            }

            .column img {
                /* width: auto;
                max-width: 100px; */
                height: 22%;
                padding: 0.5rem;
            }

            .gridplaceholder {
                box-shadow: 0px 0px 10.1px 0px #0000001A;
            }

            .placeholder-mobile-small {
                height: 30px;
            }

            .placeholder-mobile-large {
                height: 58px;
            }

            .desktop {
                display: none;
            }

            .mobile {
                display: flex;
            }
        }

        @media (min-width: 768px) {
            .mobile {
                display: none;
            }

            .desktop {
                display: flex;
            }
        }
    </style>
</section>