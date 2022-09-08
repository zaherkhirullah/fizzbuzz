@foreach (range(1, 100) as $number)
    <div>
        <span>{{\App\Models\FuzzBuzz::get_fizz_buzz_or_number($number)}}</span>
    </div>
@endforeach