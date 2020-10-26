<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript" src="js/script.js"></script>

var selectEnd; //global variable
jQuery.fn.lockCursor = function() {
    return this.each(function() {
        var len = $(this).val().length * 2;
        this.setSelectionRange(len, len);        
    });
};

$('.text').focus(function(){
    $(this).lockCursor();
    selectEnd = $(this).val().length; //save original length of value
});

$('.text').keypress(function(){
    if($(this)[0].selectionStart < selectEnd){ //cursor position is lower then initial position
        $(this).lockCursor();
    }
});