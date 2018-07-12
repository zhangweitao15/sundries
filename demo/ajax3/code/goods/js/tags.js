//注册鼠标悬停事件
var pan = $('.goodslist span').mouseenter(function () {
    // 获取单签标签中的文本
    var key = $(this).html()
    // 发送ajax请求
    // 通过$.post 向后端发送ajax请求;
    $.post('getGoodslist.php', {"keyword": key}, function (amg) {
            // 接收返回的结果
            // 通过模板引擎将结果显示在页面上
            // 1. 引入引擎库文件
            // 2. 设置样板并拼接 页面上需要的结构
            // 3. 调用模板引擎方法将样板和后台返回的数据融合
            var str = template('tpl', amg)
            // 4. 将融合好的数据添加到页面中
            $('.goodslist_wrap div')[0].append(str);
            console.log($('.goodslist_wrap  div')[0]);
            
    })
})




