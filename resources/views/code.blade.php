@foreach (range(1, 100) as $number)
    <?php $value = \App\Models\FuzzBuzz::get_fizz_buzz_or_number($number);?>
    <div class="group-item">
        <span class="{{$value}}">{{$value}}</span>
    </div>
@endforeach