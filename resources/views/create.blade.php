<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/RSG.js') }}"></script>
        <title>Random Score Generator</title>
    </head>
    <form name="generate" action="{{ route('generate.store')}}" method="POST">
        @csrf
        <body>
            <div>
                RANDOM SCORE GENERATOR : <label id="score_lbl">0</label>
            </div>
            <div>
                <input type="button" value="generate" id="generate">
                <input type="submit" value="save">
                <input type="hidden" value="0" name="score" id="score">
            </div>
        </body>
    </form>
</html>
