<footer class="footer">
    <div class="footer-container">
        <a class="logo-footer" href="{{route('index')}}">
            <img src="{{ asset('images/logos/wotic.png') }}" alt="logo" width="120" height="120">
        </a>
        <div class="footer-columns">
            <div class="footer-column">
                <h3>Telusuri</h3>
                <ul>
                    <li><a href="{{route('destination.all')}}">Destinasi</a></li>
                    <li><a href="{{route('promo.index')}}">Promo</a></li>
                    <li><a href="{{route('event.fetch_all')}}">Event</a></li>
                    <li><a href="{{route('hotel.index')}}">Hotel</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Social Media</h3>
                <ul class="social-icons">
                    <li><a href="https://www.instagram.com/disparbudwonosobo/" target="_blank"><ion-icon name="logo-instagram"></ion-icon> disparbudwonosobo</a></li>
                    <li><a href="https://x.com/disparbud_WSB" target="_blank"><ion-icon name="logo-twitter"></ion-icon> disparbud_WSB</a></li>
                    <li><a href="https://www.facebook.com/disparbudwsbofficial/" target="_blank"><ion-icon name="logo-facebook"></ion-icon> disparbudwsbofficial</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100..1000&display=swap');

    .footer {
        background-color: #004e64;
        color: #fff;
        padding-top: 30px;
        padding-bottom: 20px;
        font-family: 'DM Sans', sans-serif;
        font-weight: 900;
    }
    .footer-container {
        display: flex;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        justify-content: space-around;
    }
    .footer-columns {
        display: flex;
        flex-direction: row;
        gap: 20px;
    }
    .footer-column {
        margin-left: 20px;
    }
    .footer h3 {
        font-size: 16px;
        margin-bottom: 15px;
    }
    .footer ul {
        font-weight: 900;
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .footer ul li {
        font-weight: 300;
        margin-bottom: 10px;
    }
    .footer ul li a {
        color: #fff;
        text-decoration: none;
    }
    .footer ul li a:hover {
        text-decoration: underline;
    }
    .social-icons ion-icon {
        vertical-align: middle;
        margin-right: 8px;
    }
    .logo-footer img {
        max-width: 100%;
        height: 100px;
    }
</style>
