// 1. 给搜索框注册键盘抬起事件keyup
$('.txt').keyup(function () {
    // 2. 获取input中输入的内容key
    var key = $(this).val()
    //去除字符串前后的空格;
    key = key.trim();
    // 8. 设置if判断当input的length大于0的时候才进行ajax提交,
    // 4. 获取页面下拉菜单的元素节点tips;.
    var tips = $('.tips')
    if (key) {
    // 10. 在提交ajax之前 设置trim(), 清空文本的前后空格;
    // 3. 提交ajax请求将key拼接到请求中;
    $.get('getKeys.php',{"keyword":key,"_":Math.random()}, function (data) {
        // 循环开始之前首先清空input 
        tips.empty();
        for (var i = 0; i < data.length; i++) {
        // 5. 多条数据,利用for 循环创建div并存到tag变量中,
        var tag = $('<div></div>').html(data[i].key_name)
            .mouseenter(function () {
            // 6. 为div注册鼠标进入/离开事件, 实现高亮\文字变色/离开恢复.
            // 鼠标进入背景高亮文字变色  
            $(this).css({"background": "#ccc", "color": "red"})
            }).mouseleave(function () {
            // 鼠标离开 背景颜色 文字颜色恢复
            $(this).css({"background": "", "color": ""})
            }).click(function () {
            //最后为div添加点击事件 点击后将当前点击的div内容添加到input中,
            $('.txt').val($(this).html());
            //并在点击后设置div隐藏;
            tips.hide();
            })
        // 7. 将tag循环追加到tips中, 并将tips设置显示;
          tips.append(tag);  
        }
        tips.show();
        // else 设置其他的情况隐藏tips;
        // 9. 在循环之前添加 empty() 在每次循环开始之前首先将tips清空;
    }, 'json')
} else {
    tips.hide();
}
})

