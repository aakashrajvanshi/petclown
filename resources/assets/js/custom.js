/* Write here your custom javascript codes */
(function(){
    $('form[data-remote]').on('submit', function(e){
        var form = $(this);
        var method = form.find('input[name="_method"]').val() || 'POST';
        var url = form.prop('action');
        $.ajax({
            type:method,
            url: url,
            data: form.serialize(),
            success: function(){
                alert('response submitted!');
            }
        });
        e.preventDefault();
    });

    $(document).on('click', '.pagination a', function(e){
        var myurl = $(this).attr('href');
        $.ajax(
            {
                url: myurl,
                type: "get",
                datatype: "html",
                success: function(data){
                    $('#pagedcomments').html(data).fadeIn('slow');
                }
            });
        e.preventDefault();
    });
    $(document).on('click','.like a', function(e){
        var myurl = $(this).attr('href');
        var arr = myurl.split("/");

        //get like or unlike
        var type = arr[1];
        //get commentid
        var commentid = arr[2];

        var likecount = document.getElementById("likecount-"+commentid).textContent;
        var temp = likecount.split(" ");
        var count = parseInt(temp[0]);


        var message = "";
        if(type=="like")
        {
            message = "<a href=\"/unlike/" + commentid + "\"><i class=\"expand-list rounded-x fa fa-heart icon-color-red\"></i></a>";
            count++;
        }
        else
        {
            message = "<a href=\"/like/" + commentid + "\"><i class=\"expand-list rounded-x fa fa-heart\"></i></a>";
            count--;
        }
        document.getElementById("comment-"+commentid).innerHTML = message;
        document.getElementById("likecount-"+commentid).innerHTML = count+" likes";
        $.ajax(
            {
                url: myurl,
                type: "get",
                datatype: "html",
                success: function(){
                    //document.getElementById("comment-"+commentid).innerHTML = message;
                    //document.getElementById("likecount-"+commentid).innerHTML = count+" likes";
                },
                error: function(res){
                    if(res.responseText=="Unauthorized.")
                    {
                        window.location.href = "http://petclown.com/auth/login";
                    }
                },
            });
        e.preventDefault();
    });

})();

$('div.alert').not('.alert-important').delay(2500).slideUp();

