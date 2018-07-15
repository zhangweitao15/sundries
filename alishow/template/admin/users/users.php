<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>Users &laquo; Admin</title>
  <link rel="stylesheet" href="/template/assets/vendors/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="/template/assets/vendors/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="/template/assets/vendors/nprogress/nprogress.css">
  <link rel="stylesheet" href="/template/assets/css/admin.css">
  <script src="/template/assets/vendors/nprogress/nprogress.js"></script>
  <script src="/template/assets/vendors/layer/template-web.js"></script>

</head>
<body>
  <script>NProgress.start()</script>

  <div class="main">
    <nav class="navbar">
      <button class="btn btn-default navbar-btn fa fa-bars"></button>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.html"><i class="fa fa-user"></i>个人中心</a></li>
        <li><a href="login.html"><i class="fa fa-sign-out"></i>退出</a></li>
      </ul>
    </nav>
    <div class="container-fluid">
      <div class="page-title">
        <h1>用户</h1>
      </div>
      <!-- 有错误信息时展示 -->
      <!-- <div class="alert alert-danger">
        <strong>错误！</strong>发生XXX错误
      </div> -->
      <div class="row">
        <div class="col-md-8">
          <div class="page-action">
            <!-- show when multiple checked -->
            <a class="btn btn-danger btn-sm" href="javascript:;" style="display: none">批量删除</a>
          </div>
          <table class="table table-striped table-bordered table-hover">
            <thead>
               <tr>
                <th class="text-center" width="40"><input type="checkbox"></th>
                <th class="text-center" width="80">头像</th>
                <th>邮箱</th>
                <th>别名</th>
                <th>昵称</th>
                <th>状态</th>
                <th class="text-center" width="100">操作</th>
              </tr>
            </thead>
            <tbody id="tb">
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="aside">
      <?php include_once '../include/aside.php'?>
  </div>

        <script type="text/template" id="tpl">
              {{each list as v}}
                  <tr>
                    <td class="text-center"><input type="checkbox"></td>
                    <td class="text-center"><img class="avatar" src="/template/assets/img/default.png"></td>
                    <td>{{v.admin_email}}</td>
                    <td>{{v.admin_slug}}</td>
                    <td>{{v.admin_nickname}}</td>
                    <td>{{v.admin_state}}</td>
                    <td class="text-center">
                      <a href="post-add.php" class="btn btn-default btn-xs">编辑</a>
                      <a href="javascript:;" class="btn btn-danger btn-xs">删除</a>
                    </td>
                  </tr>
              {{/each}}
          </script>
  <script src="/template/assets/vendors/jquery/jquery.js"></script>
  <script src="/template/assets/vendors/bootstrap/js/bootstrap.js"></script>

  <script>NProgress.done()</script>
  <script>
    // 参数1 后端地址
    // 参数2 发送的文件
    // 参数3 回调函数
    // 参数4 设置后端的返回值
     $.post('getUserList.php', function (msg) {
       var json = {"list":msg};
       var str = template('tpl', json);
       $('#tb').html(str);
    }, 'json');
  </script>
</body>
</html>
