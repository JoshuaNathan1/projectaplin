@foreach ($agen as $a)
    <div class="col-md-4 col-xs-12">
        <div class="member-box">
            <p class="member-office">{{ $office['nama'] }}</p>
            <p class="member-name">{{ $a->user->full_name }}</p>
            <a href="https://eraindonesia.com/profile/23452" style="width:50%">
                <img class="profile-picture lazy loaded" src="{{ $a->user->profile_pic }}"
                    onerror="this.src='https://eraindonesia.com/images/person-default.png';" data-was-processed="true">
            </a>
            <p class="member-phone">{{ $a->user->hp }}</p>
            <p class="member-email">{{ $a->user->email }}</p>
            <p class="member-code">{{ $a['agen_id'] }}</p>
            <p class="member-listing">
                TOTAL LISTING : 0
            </p>

            <div class="member-btn">
                <a class="btn btn-block btn-primary" style="color:white" href="tel:0816603140">HUBUNGI&nbsp;&nbsp;<i
                        class="fas fa-phone" aria-hidden="true" style="transform: scaleX(-1)"></i></a>

                <a class="btn btn-block btn-primary" style="color:white" target="_blank"
                    href="https://wa.me/62816603140">WHATSAPP&nbsp;&nbsp;<i class="fab fa-whatsapp"
                        aria-hidden="true"></i></a>

                <a class="btn btn-block btn-primary" style="color:white"
                    href="https://eraindonesia.com/profile/23452">LISTING&nbsp;&nbsp;<i class="fas fa-eye"
                        aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@endforeach
