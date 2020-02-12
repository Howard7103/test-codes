$.ajaxSetup({                               //再所有header新增csrf-token
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});


$(".like-button").click(function(event)
{
    let target= $(event.target);                        //獲取當前的target
    let current_like = target.attr('like-value');       //獲取當前like-value值
    let user_id = target.attr("like-user");
    if (current_like == 1)
    {
        //取消關注
        $.ajax({
            url: "/user/" + user_id +　"/unfan",
            method: 'POST',
            datatype: "json",
            success: function(data)
            {
                if(data.error != 0){
                    alert(data.msg);
                    return;
                }
                target.attr("like-value",0);
                target.text("關注");
            }
        })
    }else{
        $.ajax({
            //關注
            url: "/user/" + user_id +　"/fan",
            method: 'POST',
            datatype: "json",
            success: function(data)
            {
                if(data.error != 0){
                    alert(data.msg);
                    return;
                }
                target.attr("like-value",1);
                target.text("取消關注");
            }
        })
    }
});

