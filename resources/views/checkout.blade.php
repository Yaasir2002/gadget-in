<!DOCTYPE html>
<!-- saved from url=(0053)https://colorlib.com/etc/cf/ContactFrom_v4/index.html -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Pemesanan</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="/assets/favicon.ico">

    <link rel="stylesheet" type="text/css" href="/assets/Contact V4_files/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/Contact V4_files/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/Contact V4_files/animate.css">

    <link rel="stylesheet" type="text/css" href="/assets/Contact V4_files/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/Contact V4_files/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/Contact V4_files/select2.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/Contact V4_files/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="/assets/Contact V4_files/util.css">
    <link rel="stylesheet" type="text/css" href="/assets/Contact V4_files/main.css">

    <meta name="robots" content="noindex, follow">
    <script type="text/javascript" async="" src="/assets/Contact V4_files/analytics.js.download"
        nonce="55f6caea-ea3e-4728-9f0d-a620e9a4b459"></script>
    <script defer="" referrerpolicy="origin" src="/assets/Contact V4_files/s.js.download"></script>
    <script nonce="55f6caea-ea3e-4728-9f0d-a620e9a4b459">
        (function(w, d) {
            ! function(f, g, h, i) {
                f[h] = f[h] || {};
                f[h].executed = [];
                f.zaraz = {
                    deferred: [],
                    listeners: []
                };
                f.zaraz.q = [];
                f.zaraz._f = function(j) {
                    return function() {
                        var k = Array.prototype.slice.call(arguments);
                        f.zaraz.q.push({
                            m: j,
                            a: k
                        })
                    }
                };
                for (const l of ["track", "set", "debug"]) f.zaraz[l] = f.zaraz._f(l);
                f.zaraz.init = () => {
                    var m = g.getElementsByTagName(i)[0],
                        n = g.createElement(i),
                        o = g.getElementsByTagName("title")[0];
                    o && (f[h].t = g.getElementsByTagName("title")[0].text);
                    f[h].x = Math.random();
                    f[h].w = f.screen.width;
                    f[h].h = f.screen.height;
                    f[h].j = f.innerHeight;
                    f[h].e = f.innerWidth;
                    f[h].l = f.location.href;
                    f[h].r = g.referrer;
                    f[h].k = f.screen.colorDepth;
                    f[h].n = g.characterSet;
                    f[h].o = (new Date).getTimezoneOffset();
                    if (f.dataLayer)
                        for (const s of Object.entries(Object.entries(dataLayer).reduce(((t, u) => ({
                                ...t[1],
                                ...u[1]
                            })), {}))) zaraz.set(s[0], s[1], {
                            scope: "page"
                        });
                    f[h].q = [];
                    for (; f.zaraz.q.length;) {
                        const v = f.zaraz.q.shift();
                        f[h].q.push(v)
                    }
                    n.defer = !0;
                    for (const w of [localStorage, sessionStorage]) Object.keys(w || {}).filter((y => y.startsWith(
                        "_zaraz_"))).forEach((x => {
                        try {
                            f[h]["z_" + x.slice(7)] = JSON.parse(w.getItem(x))
                        } catch {
                            f[h]["z_" + x.slice(7)] = w.getItem(x)
                        }
                    }));
                    n.referrerPolicy = "origin";
                    n.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(f[h])));
                    m.parentNode.insertBefore(n, m)
                };
                ["complete", "interactive"].includes(g.readyState) ? zaraz.init() : f.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body>
    <div class="container-contact100">
        <div class="wrap-contact100">
            <form action="{{ route('checkout.store', $products->id) }}" method="post" class="contact100-form validate-form">
                <span class="contact100-form-title">
                    Checkout
                </span>

                @csrf
                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Kode</span>
                    @php $number = 1;  @endphp
                    <input class="input100" type="text" name="kode" value="PS{{ $number }}" readonly>
                    @php $number++ @endphp
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 input100-select">
                    <span class="label-input100">Nama</span>
                    <div>
                        <select class="selection-2 select2-hidden-accessible" name="customers_id" tabindex="-1"
                            aria-hidden="true">
                            <option>Choose Customers</option>
                            @foreach ($customer as $c)
                                <option value="{{ $c->id }}">{{ $c->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Tanggal</span>
                    <input class="input100" type="date" name="tgl">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Produk</span>
                    <input class="input100" type="text" name="products_id" value="{{$products->nama}}" readonly>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Jumlah</span>
                    <input class="input100" type="number" name="jumlah" placeholder="jumlah">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Message is required">
                    <span class="label-input100">Alamat
                        <textarea class="input100" name="keterangan" placeholder="Alamat"></textarea>
                        <span class="focus-input100"></span>
                </div>
                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn"">
                            <span>
                                Submit
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </div>
        </div>
    </div>
    </form>
    <div id="dropDownSelect1"></div>

    <script src="/assets/Contact V4_files/jquery-3.2.1.min.js.download"></script>

    <script src="/assets/Contact V4_files/animsition.min.js.download"></script>

    <script src="/assets/Contact V4_files/popper.js.download"></script>
    <script src="/assets/Contact V4_files/bootstrap.min.js.download"></script>

    <script src="/assets/Contact V4_files/select2.min.js.download"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>

    <script src="/assets/Contact V4_files/moment.min.js.download"></script>
    <script src="/assets/Contact V4_files/daterangepicker.js.download"></script>

    <script src="/assets/Contact V4_files/countdowntime.js.download"></script>

    <script src="/assets/Contact V4_files/main.js.download"></script>

    <script async="" src="/assets/Contact V4_files/js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer="" src="/assets/Contact V4_files/v52afc6f149f6479b8c77fa569edb01181681764108816"
        integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
        data-cf-beacon="{&quot;rayId&quot;:&quot;7e35cb8e4f153598&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2023.4.0&quot;,&quot;si&quot;:100}"
        crossorigin="anonymous"></script>


</body>

</html>
