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
    <body>
        <h1> HOME </h1>
        <div>
            <a href="{{ route('generate.create') }}">RANDOM SCORE GENERATOR</a>
        </div>
        Saved Scores:
        <input type="button" onclick="window.location='{{ route('getAll') }}';" value="get JSON">
        <table>
            <tr>
                <td>
                    Date Created:
                </td>
                <td>
                    Score: 
                </td>
            </tr>
        @if(isset($RSGindex))
            @foreach($RSGindex as $RSGindexrow)
                <tr>
                    <td>
                        [ {{date('Y-m-d',strtotime($RSGindexrow->created_at))}} ] 
                    </td>
                    <td>
                        <a href="{{ route('generate.show', $RSGindexrow->id) }}">[{{$RSGindexrow->score}}] </a>
                    </td>
                </tr>
                <div>
                </div>
            @endforeach
        @endif
        </table>
    </body>
</html>
