

    <!-- Clients img -->
    @if($partenaires->count())
    <section class="light-gry-bg clients-img">
      <div class="container">
        <ul>
          @foreach($partenaires as $p)
          <li><img src="{{asset('storage/uploads/partenaires/'.$p->image_partenaire)}}" alt="" ></li>
          @endforeach
        </ul>
      </div>
    </section>
    @endif