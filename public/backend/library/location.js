(function($){
    "use strict";
    var HT={};

    HT.province=() => {
        $(document).on('change', '.province', function(){
            let _this=$(this);
            let province_id=_this.val();
            $.ajax({
                url: 'ajax/location/getLocation',
                type: 'GET',
                data: {
                    'province_id': province_id,
                },
                dataType: 'json',
                success: function(res){
                    $('.districts').html(res.html);
                },
                error: function(err){
                    console.log(err);
                }
            });
        });
    }
    $(document).ready(function(){
        HT.province();
    });
})(jQuery);
