

<script>


    function notification(title, msg , reload) {

        $.gritter.add({
            title: title,
            text: msg
        });

        if (typeof (reload) != 'undefined' && reload == true) {
            setTimeout(function(){
                location.reload();
            }, 500);
        }

        return false;
    }


    function isActive( param ){

        return true;
    }

</script>
