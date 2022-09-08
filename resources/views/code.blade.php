@foreach (range(1, 100) as $number)
    <div>
        @if($number %3 ==0 and $number %5 ==0)
            <span>FizzBuzz</span>
        @elseif($number %3 ==0 )
            <span>Fizz</span>
        @elseif($number %5 ==0 )
            <span>Buzz</span>
        @else
            <span>{{$number}}</span>
        @endif
    </div>
@endforeach