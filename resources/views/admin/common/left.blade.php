
<body>
    <!-- 顶部开始 -->
    <div class="container">
        <div class="logo"><a href="/admins/index.html">京城后台管理 V1.0</a></div>
        <div class="open-nav"><i class="iconfont">&#xe699;</i></div>
        <ul class="layui-nav right" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">admin</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <dd><a href="">个人信息</a></dd>
              <dd><a href="">切换帐号</a></dd>
              <dd><a href="/admins/login.html">退出</a></dd>
            </dl>
          </li>
          <li class="layui-nav-item"><a href="/">商城首页</a></li>
        </ul>
    </div>
    <!-- 顶部结束 -->
    <!-- 中部开始 -->
    <div class="wrapper">
        <!-- 左侧菜单开始 -->
        <div class="left-nav">
          <div id="side-nav">
            <ul id="nav">
                <li class="list" current>
                    <a href="/admin">
                        <i class="iconfont">&#xe761;</i>
                        欢迎页面
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                </li>
                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        用户管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/admin/users">
                                <i class="iconfont">&#xe6a7;</i>
                                用户列表
                            </a>
                        </li>
                        <li>
                            <a href="/admin/users/create">
                                <i class="iconfont">&#xe6a7;</i>
                                添加用户
                            </a>
                        </li>
                        <li>
                            <a href="/admin/users/delshow">
                                <i class="iconfont">&#xe6a7;</i>
                                回收站
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        分类管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/admins/category.html">
                                <i class="iconfont">&#xe6a7;</i>
                                分类列表
                            </a>
                        </li>
                        <li>
                            <a href="/admins/category.html">
                                <i class="iconfont">&#xe6a7;</i>
                                添加分类
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        商品管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="/admins/banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                商品列表
                            </a>
                        </li>
                         <li>
                            <a href="/admins/banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                商品添加
                            </a>
                        </li>
                        <li>
                            <a href="/admins/banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                商品修改
                            </a>
                        </li>
                        <li>
                            <a href="/admins/banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                商品回收站
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        库存管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="/admins/banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                商品库存
                            </a>
                        </li>
                         <li>
                            <a href="/admins/banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                添加库存
                            </a>
                        </li>
                        <li>
                            <a href="/admins/banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                修改库存
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        订单管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="/admins/banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                订单列表
                            </a>
                        </li>
                         <li>
                            <a href="/admins/banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                添加订单
                            </a>
                        </li>
                        <li>
                            <a href="/admins/banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                修改订单
                            </a>
                        </li>
                        <li>
                            <a href="/admins/banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                订单回收站
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        评论管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="/admins/echarts1.html">
                                <i class="iconfont">&#xe6a7;</i>
                                评论列表
                            </a>
                        </li>
                        <li>
                            <a href="/admins/echarts2.html">
                                <i class="iconfont">&#xe6a7;</i>
                                修改评论
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" > 
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        轮播管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="/admin/slids/show">
                                <i class="iconfont">&#xe6a7;</i>
                                轮播图效果
                            </a>
                        </li>
                        <li>
                            <a href="/admin/slids">
                                <i class="iconfont">&#xe6a7;</i>
                                轮播列表
                            </a>
                        </li>
                        <li>
                            <a href="/admin/slids/create">
                                <i class="iconfont">&#xe6a7;</i>
                                添加轮播图
                            </a>
                        </li>
                        <li>
                            <a href="/admin/slids/delshow">
                                <i class="iconfont">&#xe6a7;</i>
                                轮播图回收站
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        推荐商品管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="/admins/echarts1.html">
                                <i class="iconfont">&#xe6a7;</i>
                                推荐商品列表
                            </a>
                        </li>
                        <li>
                            <a href="/admins/echarts2.html">
                                <i class="iconfont">&#xe6a7;</i>
                                添加推荐商品
                            </a>
                        </li>
                        <li>
                            <a href="/admins/echarts2.html">
                                <i class="iconfont">&#xe6a7;</i>
                                修改推荐商品
                            </a>
                        </li>
                    </ul>
                </li>
                    <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        友情链接管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="/admin/links">
                                <i class="iconfont">&#xe6a7;</i>
                                友情链接列表
                            </a>
                        </li>
                        <li>
                            <a href="/admin/links/create">
                                <i class="iconfont">&#xe6a7;</i>
                                添加友情链接
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        系统设置
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="/admin/config">
                                <i class="iconfont">&#xe6a7;</i>
                                网站配置
                            </a>
                        </li>
                    </ul>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="/admin/config/config">
                                <i class="iconfont">&#xe6a7;</i>
                                服务器信息
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
          </div>
        </div>
        <!-- 左侧菜单结束 -->
        @section('content')
        
        
        @show