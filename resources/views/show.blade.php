<!DOCTYPE html>
<html>
    <head>
        <title>Random Score Generator</title>
        <style>
            table, th, td {
            padding: 10px;
            border: 1px solid black; 
            border-collapse: collapse;
            }
        </style>
    </head>
    @if(isset($RSGshow))
        <h1>{{$RSGshow->score}}</h1>
    @endif
    <body>
        @if(isset($RSGshow))
        <div>
            Date Scored: {{$RSGshow->created_at}}
        </div>
        <div>
            Occurences on day created: {{$ctr}}
        </div>
        <div>
            Occurences per day:
        </div>
        @php 
        $dateGiven = date('Y-m-d',strtotime($RSGshow->created_at));
        @endphp
        <table>
            <tr>
                @for($x=-2;$x<4;$x++)
                <td>
                    @if($x == 0)
                    <b>
                    @endif
                    {{ date('l F d, Y', strtotime($dateGiven . "+" . $x . " day")) }}
                    
                    @if($x == 0)
                    </b>
                    @endif
                </td> 
                @endfor
            </tr>
            <tr>
                @for($x=-2;$x<4;$x++)
                <td>
                    @php 
                    $counter = 0;
                    @endphp
                    @foreach($RSGindex as $RSGindexrow)
                        @if(($RSGindexrow->score == $RSGshow->score)&&(date('Y-m-d',strtotime($RSGindexrow->created_at)) == date('Y-m-d',strtotime($RSGshow->created_at  . "+" . $x . " day"))))
                            @php 
                            $counter++;
                            @endphp
                        @endif
                    @endforeach
                    {{$counter}}
                </td> 
                @endfor
            </tr>
        </table>
        <input type="button" onclick="window.location='{{ route('getById', $RSGshow->id) }}';" value="get JSON">
        @endif
        <div>
            <input type="button" value="back" onclick="window.location='{{ route('generate.index') }}'">
        </div>
    </body>
</html>
