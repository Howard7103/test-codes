$.ajaxSetup({
   headers:{
       'X-CSRF-TOKEN':$('meta[name = "csrf-token"]').attr('content')
   }
});


$(".post-audit").click(function(event){            //針對class標籤為 post-audit做綁定click事件
   target = $(event.target);                       //將被選中值取出
   let post_id = target.attr("post-id");           //得到被選中值的 post-id
   let status = target.attr("post-action-status"); //得到被選中值的 post-action-status

   $.ajax({
       url: "/admin/posts/" + post_id + "/status",
       method: "POST",
       data: {"status":status},
       dataType:"json",
       success:function(data){
           if(data.error != 0){
               alert(data.msg);
               return;
           }
           target.parent().parent().remove();
       }
   })

});

$(".resource-delete").click(function(event)     //當resource-delete標籤被點擊(click)時
{
    if(confirm("確定執行刪除操作嗎?") == false){     //用conform跳出提示訊息 (alert也行)
        return;                                  //如果選擇否,則返回
    }

    //如果選擇是
    let target = $(event.target);
    event.preventDefault();
    let url = $(target).attr("delete-url");          //取出要被刪除那筆資料的delete-url

    $.ajax({
        url: url,
        method: "POST",
        data: {"_method": "DELETE"},            //Delete在Http method裡面為delete方法 而不是post方法, 故加上 "_method" 和DELETE標籤 ,如此一來method和data就可以解讀成 resource裡面的delete方法
        data_type:"json",
        success: function(data){
            if(data.error != 0) {
                alert(data.msg);
                return;
            }

            window.location.reload();     //當前頁面更新
        }
    });
});
