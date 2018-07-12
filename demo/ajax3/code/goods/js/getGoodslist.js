// 1. 给页面上的input标签注册键盘按下事件 
$('.txt').keyup(function () {
    // 2. 获取input中输入的内容 key
    var key = $(this).val();
    key = key.trim();
    // 4. 获取页面上下拉列表对象 tips;
    var tips =  $('.tips');
    // 9. 设置if判断 当input的长度为0的时候不进行数据的提交;
    if (key) {

    // 10. 利用trim()方法清除文本前后的空格;
    // 3. 将获取到的数据发送到后台;
    $.get('getKeys.php', {"keyword":key, "_":Math.random()}, function (data) {
        
        // 11. 在for循环之前将tips中的内容清空;
        tips.empty();
        // 5. 利用for循环将关键字追加到tips中;
        for (var i = 0; i < data.length; i++) {
            var tag = $('<div></div>').html(data[i].key_name)
            .mouseenter(function () {
                $(this).css({"background":"#ccc","color":"red"})
            }).mouseleave(function () {
                $(this).css({"background":"","color":""})
            }).click(function () {
                $('.txt').val($(this).html());
                tips.hide();
            })
            tips.append(tag);
        }
        // 8.1 将tips设置显示;
        tips.show();
    }, 'json');
} else {
    //else中设置当tips为空的时候隐藏tips
    tips.hide();
}

})
