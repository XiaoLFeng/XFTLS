<?php
include ('./config.inc.php');
//禁用错误报告
error_reporting(0);
$t=htmlspecialchars($_GET["t"]);
$q=htmlspecialchars($_POST["q"]);
if (empty($q)) {
} else {
  if ($t=="google"){
    echo'<script>window.location.href="//www.google.com.hk/search?hl=zh&q='.$q.'";</script>';;
  } elseif ($t=="bing") {
    echo'<script>window.location.href="//cn.bing.com/search?q='.$q.'";</script>';
  } else {
    //默认百度
    echo'<script>window.location.href="//www.baidu.com/s?ie=utf-8&word='.$q.'";</script>';
  }
};
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="Cache-Control" content="no-siteapp">
  <meta name="referrer" content="no-referrer" />
  <meta name="theme-color" content="#ffffff">
  <link rel="shortcut icon" href="<?PHP echo $set["INFO"]["ICON"] ?>"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="full-screen" content="yes"><!--UC强制全屏-->
  <meta name="browsermode" content="application"><!--UC应用模式-->
  <meta name="x5-fullscreen" content="true"><!--QQ强制全屏-->
  <meta name="x5-page-mode" content="app"><!--QQ应用模式-->
  <!-- QQ标签识别 -->
  <meta itemprop="name" content="<?php echo $set["INFO"]["name"] ?>">
  <meta name="description" itemprop="description" content="<?php echo $set["INFO"]["name"] ?>">
  <title><?php echo $set["INFO"]["name"] ?> — <?php echo $set["INFO"]["subname"] ?></title>
  <link href="style.css" rel="stylesheet">
  <link href="wea.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <script src="sou.js"></script>
  <script src="wea.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="./sources/css/mdui.min.css" integrity="sha384-cLRrMq39HOZdvE0j6yBojO4+1PrHfB7a9l5qLcmRm/fiWXYY+CndJPmyu5FV/9Tw" crossorigin="anonymous"/>
  <link rel="stylesheet" href="./sources/css/style.css">
</head>

<body class="mdui-theme-primary-<?php echo $set["THEME"]["color"] ?> mdui-theme-accent-<?php echo $set["THEME"]["subcolor"] ?> padding-top mdui-appbar-with-toolbar">
<!-- 顶部TAB -->
<header>
<div class="mdui-appbar mdui-appbar-fixed">
    <div class="mdui-toolbar mdui-color-theme mdui-shadow-2 mdui-appbar-inset">
        <a href="javascript:;" class="mdui-btn mdui-btn-icon mdui-ripple" mdui-drawer="{target: '#menu'}" mdui-tooltip="{content: '菜单'}"><i class="mdui-icon material-icons">menu</i></a>
        <a href="javascript:;" class="mdui-typo-title"><?php echo $set["INFO"]["name"] ?></a>
        <div class="mdui-toolbar-spacer"></div>
        <a href="javascript:location.reload();" class="mdui-btn mdui-btn-icon mdui-ripple" mdui-tooltip="{content: '刷新'}"><i class="mdui-icon material-icons">refresh</i></a>
        <a href="javascript:;" class="mdui-btn mdui-btn-icon mdui-ripple"><i class="mdui-icon material-icons">more_vert</i></a>
    </div>
</div>
</header>
<!-- 菜单 -->
<div class="mdui-drawer mdui-shadow-3 mdui-drawer-close" id="menu">
    <ul class="mdui-list" mdui-collapse="{accordion: true}">
        <a href="javascript:;">
            <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-<?php echo $set["THEME"]["subcolor"] ?>">home</i>
                <div class="mdui-list-item-content mdui-text-color-<?php echo $set["THEME"]["subcolor"] ?>">搜索主页</div>
            </li>
        </a>
        <a href="./access.php">
            <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons">dashboard</i>
                <div class="mdui-list-item-content">快速访问</div>
            </li>
        </a>
        <li class="mdui-collapse-item mdui-collapse-item-open">
            <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons">book</i>
            <div class="mdui-list-item-content">功能</div>
            <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
            </div>
            <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
            <a href="./NeteaseMusic/"><li class="mdui-list-item mdui-ripple">音乐下载[网易]</li></a>
            <a href=""><li class="mdui-list-item mdui-ripple">音乐下载[全局]</li></a>
            <li class="mdui-list-item mdui-ripple">音乐解锁</li>
            </ul>
        </li>
        <li class="mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons">ac_unit</i>
            <div class="mdui-list-item-content">待整理</div>
        </li>
    </ul>
</div>
<!-- 右击菜单 -->
<div class="mdui-menu-cascade mdui-btn-raised" id="click-menu">
    <div class="mdui-menu-item">
        <a href="javascript:window.history.back();" class="mdui-ripple">
            <i class="mdui-menu-item-icon mdui-icon material-icons">arrow_back</i>
            返回上一页
            <span class="mdui-menu-item-helper">Alt+箭头左</span>
        </a>
        <a href="javascript:location.reload();" class="mdui-ripple">
            <i class="mdui-menu-item-icon mdui-icon material-icons">autorenew</i>
            刷新
            <span class="mdui-menu-item-helper">F5</span>
        </a>
    </div>
    <div class="mdui-container mdui-typo"><hr/></div>
    <div class="mdui-menu-item mdui-m-t-1">
        <a href="javascript:document.execCommand('Copy');" class="mdui-ripple" id="copy">
            <i class="mdui-menu-item-icon mdui-icon material-icons">content_copy</i>
            复制
            <span class="mdui-menu-item-helper">Ctrl+C</span>
        </a>
        <a href="javascript:document.execCommand('Paste');" class="mdui-ripple" id="paste">
            <i class="mdui-menu-item-icon mdui-icon material-icons">content_paste</i>
            粘贴
            <span class="mdui-menu-item-helper">Ctrl+V</span>
        </a>
    </div>
</div>
<!-- 正文 -->   
    <div id="content">
        <div class="con">
            <div class="shlogo" style="background: url(sources/icon/search-logo.png) no-repeat center/cover;"></div>
            <div class="sou">
                <form action="" method="post" target="_self">
                  <?php 
                    if (empty($t) or $t == "baidu") {
                        echo '<div class="lg" style="background: url(sources/icon/svg/baidu.svg) no-repeat center/cover;" onclick="window.location.href=\'?t=google\';"></div>';
                    } elseif ($t == "google") {
                        echo '<div class="lg" style="background: url(sources/icon/svg/g.svg) no-repeat center/cover;" onclick="window.location.href=\'?t=bing\';"></div>';
                    } elseif ($t == "bing") {
                        echo '<div class="lg" style="background: url(sources/icon/svg/Bing.svg) no-repeat center/cover;" onclick="window.location.href=\'?t=baidu\';"></div>';
                    } else {
                        echo '<a style="text-decoration:none;" href="?t=google" class="mdui-icon iconfont icon-baidu"></a>';
                    }
                  ?>
                    <!--input class="t" type="text" value="" name="t" hidden-->
                    <input class="wd" type="text" placeholder="请输入搜索内容" name="q" x-webkit-speech lang="zh-CN" autocomplete="off">
                    <button><svg class="icon" style=" width: 21px; height: 21px; opacity: 0.5;" aria-hidden="true"><use xlink:href="#icon-sousuo"></use></svg></button>
                </form>
                <div id="word"></div>
            </div>
        </div>
        <div class="foot" style="height: 40px;">
          <a href="https://www.xiaolfeng.cn/" style="color: #777;">博客</a> | 
          <a href="https://www.xiaolfeng.cn/" style="color: #777;">设计导航</a><br>
          © 2018-<?php echo date("Y") ?> by <a href="https://www.xiaolfeng.cn/">筱锋xiao_lfeng</a> . All rights reserved.</div>
        </div>
</body>
<script src="./sources/js/mdui.min.js" integrity="sha384-gCMZcshYKOGRX9r6wbDrvF+TcCCswSHFucUzUPwka+Gr+uHgjlYvkABr95TCOz3A" crossorigin="anonymous"></script>
<script src="./sources/js/style.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js" type="text/javascript"></script>
</html>