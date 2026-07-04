<section class="mil-p-120-90">
    @php
    function toRoman($number) {
        $map = [
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1,
        ];
        $returnValue = '';
        while ($number > 0) {
            foreach ($map as $roman => $int) {
                if($number >= $int) {
                    $number -= $int;
                    $returnValue .= $roman;
                    break;
                }
            }
        }
        return $returnValue;
    }
    @endphp
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Discover Our Company</span>
                        <h2 class="mil-mb-30">Explore <span class="mil-accent">Cloud Security</span> Solutions</h2>
                        <p class="mil-mb-90" style="text-align: justify;">The constant evolution of threats and the race for more sophisticated tools to combat them means that security is changing rapidly.</p>
                    </div>
                </div>
                <div class="row">
                    @foreach ($cloud_security as $item)
                        
                    <div class="col-xl-4">

                        <div class="mil-hover-card mil-box-center mil-mb-30">
                            <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                            <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                <h3>{{ toRoman($loop->index + 1) }}</h3>
                            </div>
                            <h5 class="mil-mb-30">{{ $item->heading}}</h5>
                            <p style="text-align: justify;">{{ $item->description}}</p>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </section>