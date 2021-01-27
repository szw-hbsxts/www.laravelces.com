<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台首页</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="{{URL::asset('/css/uikit.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('/admin/style/style.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('/admin/style/header.css')}}">

    <!-- UIkit JS -->
    <script src="{{URL::asset('/js/uikit.min.js')}}"></script>
    <script src="{{URL::asset('/js/uikit-icons.min.js')}}"></script>
    <script src="{{URL::asset('/admin/js/jquery-3.5.1.min.js')}}"></script>
</head>
<body>
    <header>
        <div class='center'>
            <nav class="uk-navbar-container" uk-navbar uk-grid>
                <div class="le_wid logo uk-navbar-left">
                    <a href="#"><img src="{{URL::asset('/admin/images/dclogo.gif')}}" alt="logo"></a>
                </div>
                <div class="uk-navbar-left">

                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="admin/index">主页</a></li>
                        <li><a href="#">查看站点</a></li>
                        <li><a href="#">清除缓存</a></li>
                        <li><a href="#">帮助</a></li>
                        <li><a href="#">图表参考</a></li>
                    </ul>

                </div>

                <div class="uk-navbar-right Sign_in_register">

                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="#">登入</a></li>
                        <li><a href="#">注册</a></li>
                    </ul>

                </div>

            </nav>
        </div>
    </header>
    <div class="main">
        <div class="center body_con" uk-grid>
            <div class="le_wid le_list uk-width-1-6">
                <div id="menu">
                    <ul class="top uk-list">
                        <li><a href="index.html"><i class="uk-icon" uk-icon="home"></i><span>管理首页</span></a></li>
                    </ul>
                    <ul class="uk-list">
                        <li><a href="system.html"><i class="uk-icon" uk-icon="settings"></i><span>系统设置</span></a></li>
                        <li><a href="nav.html"><i class="uk-icon" uk-icon="social"></i><span>自定义导航栏</span></a></li>
                        <li><a href="show.html"><i class="uk-icon" uk-icon="image"></i><span>首页幻灯广告</span></a></li>
                        <li><a href="page.html"><i class="uk-icon" uk-icon="file-text"></i><span>单页面管理</span></a></li>
                    </ul>
                    <ul class="uk-list">
                        <li><a href="product_category.html"><i class="uk-icon" uk-icon="menu"></i><span>商品分类</span></a></li>
                        <li><a href="product.html"><i class="uk-icon" uk-icon="list"></i><span>商品列表</span></a></li>
                    </ul>
                    <ul class="uk-list">
                        <li><a href="article_category.html"><i class="uk-icon" uk-icon="file-pdf"></i><span>文章分类</span></a></li>
                        <li><a href="article.html"><i class="uk-icon" uk-icon="album"></i><span>文章列表</span></a></li>
                    </ul>
                    <ul class="bot uk-list">
                        <li><a href="backup.html"><i class="uk-icon" uk-icon="database"></i><span>数据备份</span></a></li>
                        <li><a href="mobile.html"><i class="uk-icon" uk-icon="phone"></i><span>手机版</span></a></li>
                        <li><a href="theme.html"><i class="uk-icon" uk-icon="cog"></i><span>设置模板</span></a></li>
                        <li><a href="manager.html"><i class="uk-icon" uk-icon="server"></i><span>网站管理员</span></a></li>
                        <li><a href="manager.php?rec=manager_log"><i class="uk-icon" uk-icon="file-edit"></i><span>操作记录</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="uk-width-5-6 con_mag">
                <div class='title'>
                    <ul class="uk-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="uk-disabled"><a>Disabled Category</a></li>
                    </ul>
                </div>
                <div id="index" class="mainBox">   
                    <div id="douApi"></div>
                        <div class="indexBox">
                        <div class="boxTitle">单页面快速管理</div>
                        <ul class="ipage">                       
                            <a href="#">公司简介</a> 
                            <a href="#" class="child1">企业荣誉</a>  
                            <a href="#" class="child1">发展历程</a> 
                            <a href="#" class="child1">联系我们</a> 
                            <a href="#">人才招聘</a> 
                            <a href="#">营销网络</a> 
                            <div class="clear"></div>
                        </ul>
                    </div>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="indexBoxTwo">
                        <tbody><tr>
                        <td width="65%" valign="top" class="pr">
                        <div class="indexBox">
                        <div class="boxTitle">网站基本信息</div>
                        <ul>
                            <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
                            <tbody><tr>
                            <td width="120">单页面数：</td>
                            <td><strong>6</strong></td>
                            <td width="100">文章总数：</td>
                            <td><strong>10</strong></td>
                            </tr>
                            <tr>
                            <td>商品总数：</td>
                            <td><strong>15</strong></td>
                            <td>系统语言：</td>
                            <td><strong>zh_cn</strong></td>
                            </tr>
                            <tr>
                            <td>URL 重写：</td>
                            <td><strong>关闭<a href="system.php" class="cueRed ml">（点击开启）</a> 
                            </strong></td>
                            <td>编码：</td>
                            <td><strong>UTF-8</strong></td>
                            </tr>
                            <tr>
                            <td>站点地图：</td>
                            <td><strong>开启</strong></td>
                            <td>站点模板：</td>
                            <td><strong>default</strong></td>
                            </tr>
                            <tr>
                            <td>DouPHP版本：</td>
                            <td><strong>v1.3 Release 20160125</strong></td>
                            <td>安装日期：</td>
                            <td><strong>2016-02-25</strong></td>
                            </tr>
                            </tbody></table>
                        </ul>
                        </div>
                        </td>
                        <td valign="top" class="pl">
                        <div class="indexBox">
                        <div class="boxTitle">管理员  登录记录</div>
                        <ul>
                            <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
                            <tbody><tr>
                            <th width="45%">IP地址</th>
                            <th width="55%">操作时间</th>
                            </tr>
                                    <tr>
                            <td align="center">127.0.0.1</td>
                            <td align="center">2016-02-25 23:29:08</td>
                            </tr>
                                    <tr>
                            <td align="center">127.0.0.1</td>
                            <td align="center">2016-02-25 13:48:48</td>
                            </tr>
                                    <tr>
                            <td align="center">127.0.0.1</td>
                            <td align="center">2013-10-16 09:43:01</td>
                            </tr>
                                    <tr>
                            <td align="center">127.0.0.1</td>
                            <td align="center">2013-10-16 09:42:58</td>
                            </tr>
                                    </tbody></table>
                        </ul>
                        </div>
                        </td>
                        </tr>
                    </tbody></table>
                    <div class="indexBox">
                        <div class="boxTitle">服务器信息</div>
                        <ul class='cz_fwq'>
                            <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
                                <tbody>
                                    <tr>
                                        <td width="120" valign="top">PHP 版本：</td>
                                        <td valign="top">5.3.29 </td>
                                        <td width="100" valign="top">MySQL 版本：</td>
                                        <td valign="top">5.5.40</td>
                                        <td width="160" valign="top">服务器操作系统：</td>
                                        <td valign="top">WINNT(127.0.0.1)</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">文件上传限制：</td>
                                        <td valign="top">2M</td>
                                        <td valign="top">GD 库支持：</td>
                                        <td valign="top">是</td>
                                        <td valign="top">Web 服务器：</td>
                                        <td valign="top">Apache/2.4.10 (Win32) OpenSSL/0.9.8zb mod_fcgid/2.3.9</td>
                                    </tr>
                                </tbody>
                            </table>
                        </ul>
                    </div>
                    <div class="indexBox">
                        <div class="boxTitle">系统开发</div>
                        <ul class='cz_xtkf'>
                            <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
                                <tbody>
                                    <tr>
                                        <td width="120"> DouPHP官网： </td>
                                        <td><a href="#" target="_blank">http://www.douco.com</a></td>
                                    </tr>
                                    <tr>
                                        <td> 开发者社区： </td>
                                        <td><a href="#" target="_blank">http://bbs.douco.cn </a><em>（安装使用 模板交流 BUG反馈 意见建议）</em></td>
                                    </tr>
                                    <tr>
                                        <td> 贡献者： </td>
                                        <td>Wooyun.org, Pany, Tea</td>
                                    </tr>
                                    <tr>
                                        <td> 系统使用协议： </td>
                                        <td><a href="#" target="_blank">http://www.douco.com/license.html</a><em>（您可以免费使用DouPHP（不限商用），但必须保留相关版权信息。）</em></td>
                                    </tr>
                                </tbody>
                            </table>
                        </ul>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
</body>
</html>