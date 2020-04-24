{
    $(document).ready(function () {
        generate();
    });
    
    function generate() {
        $('#generate').click(function () {
            var score = getRandom(1, 5);
            alert(score);
            $("#score_lbl").html(score);
            $("#score").val(score);
        });
    }
    function getRandom(min, max) {
        return Math.floor(Math.random() * (max - min + 1) ) + min;
      }
    
}
