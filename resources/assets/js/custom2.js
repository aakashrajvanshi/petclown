/**
 * Created by SuryaTeja on 7/20/2015.
 */

$(function(){
    $("#delete, #block").click(function(){
        var agree = confirm("Are you sure to you want to do this action?");
        if(agree==true) {
            return true;
        }
        else
        {
            return false;
        }
    });
});
