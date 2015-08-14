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

    $('#collapseAvatar').hide();
    $('#avatarbtn').click(function(){
        $('#profilePic').toggle('slow');
        $('#collapseAvatar').toggle('slow');

    });
    $('#custombtn').click(function(){
        $('#profilePic').toggle('slow');
        $('#collapseAvatar').toggle('slow');
    });


    //Homepage Progressbar Carousel
    var percent = 0, bar = $('.transition-timer-carousel-progress-bar'), crsl = $('#myCarousel');
    function progressBarCarousel() {
        bar.css({width:percent+'%'});
        percent = percent +0.5;
        if (percent>100) {
            percent=0;
            crsl.carousel('next');
        }
    }
    var barInterval = setInterval(progressBarCarousel, 50);
    crsl.hover(
        function(){
            clearInterval(barInterval);
        },
        function(){
            barInterval = setInterval(progressBarCarousel, 50);
        })

});



