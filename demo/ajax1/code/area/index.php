<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    // 从chain表中读取所有需要是数据;
    //拼接SQL语句 获取表中fid=0 的数据
    $sql = "select * from china where pid=0";
    // 链接服务器
    $conn = mysqli_connect('localhost','root', 'root', 'stuby');
    // 设置字符集
    mysqli_query($conn, 'set names utf8');
    // 执行sql语句;
    $result_obj = mysqli_query($conn, $sql);
    ?>
    <!-- 通过异步的方式获取数据 -->
    <!-- 调用个体City 函数时,传入实参(选中的省的id) -->
    <!-- 注册改变事件 -->
 省:<select onchange="getCity(this.value, 'city')">
            <option>--请选择--</option>
        <!-- 处理返回结果(将结果转换为数组循环添加到option标签中) -->
        <?php while ($row = mysqli_fetch_assoc($result_obj)) { ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
        <?php } ?>
    </select>
市: <select id="city" onchange="getCity(this.value, 'area')">
            <option>--请选择--</option>
    </select>

区: <select id="area">
            <option>--请选择--</option>
    </select>
    <script src="../ajax.js"></script>
    <script>

        //注册注册改变事件的函数
        // 1. 将省的id作为参数传入
        function getCity(id, self_id) {
            // 创建异步对象
            var xhr = getXhr();
            
            //接收后端返回到数据
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                    //ajax请求成功 , 并接收到后端数据
                    //省向市填充数据时 顺便把区重置
                    if (self_id == 'city') {
                        // 将区重置为请选择
                        document.getElementById('area').innerHTML = '<option>--请选择--</option>'
                    }
                    // alert(xhr.responseText);
                    document.getElementById(self_id).innerHTML = xhr.responseText; 
                }  
            }
            //发送请求时, 将省id一起发送给后端
            xhr.open('get', 'getCity.php?id=' + id);
            xhr.send(null);
        }
        // 1. 将市的id作为参数传入
        // function getArea(id) {
        //     // 发送ajax请求
        //     var xhr = getXhr();
        //     //接收后端返回的数据
        //     xhr.onreadystatechange = function () {
        //         if (xhr.readyState == 4) {
        //             // alert(xhr.responseText);
        //             document.getElementById('area').innerHTML = xhr.responseText;

        //         }
        //     }
        //     // 发送请求时 将市id一起发送给后端
        //     xhr.open('get', 'getArea.php?id=' + id);
        //     xhr.send(null);
        // }

        
    </script>
</body>
</html>