<?PHP
include ('./config.inc.php');
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 基础 -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="../sources/favicon.ico" type="image/x-icon">
    <!-- QQ标签识别 -->
    <meta itemprop="name" content="<?php echo $set["INFO"]["name"] ?>">
    <meta itemprop="image" content="<?php echo $icologo ?>">
    <meta name="description" itemprop="description" content="<?php echo $set["INFO"]["name"] ?>">
    <title><?php echo $set["INFO"]["name"] ?> — <?php echo $set["INFO"]["subname"] ?></title>
    <!-- CSS -->
    <link rel="stylesheet" href="./sources/css/mdui.min.css" integrity="sha384-cLRrMq39HOZdvE0j6yBojO4+1PrHfB7a9l5qLcmRm/fiWXYY+CndJPmyu5FV/9Tw" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./sources/css/style.css">
</head>
<body class="mdui-drawer-body-left mdui-theme-primary-<?php echo $set["THEME"]["color"] ?> mdui-theme-accent-<?php echo $set["THEME"]["subcolor"] ?> padding-top mdui-appbar-with-toolbar">
<!-- 顶部TAB -->
<header>
<div class="mdui-appbar mdui-appbar-fixed">
    <div class="mdui-toolbar mdui-color-theme mdui-shadow-2 mdui-appbar-inset">
        <a href="javascript:;" class="mdui-btn mdui-btn-icon mdui-ripple" mdui-drawer="{target: '#menu'}" mdui-tooltip="{content: '菜单'}"><i class="mdui-icon material-icons">menu</i></a>
        <a href="./home.php" class="mdui-typo-title"><?php echo $set["INFO"]["name"] ?></a>
        <p class="mdui-typo-title">快速访问</p>
        <div class="mdui-toolbar-spacer"></div>
        <a href="javascript:location.reload();" class="mdui-btn mdui-btn-icon mdui-ripple" mdui-tooltip="{content: '刷新'}"><i class="mdui-icon material-icons">refresh</i></a>
        <a href="javascript:;" class="mdui-btn mdui-btn-icon mdui-ripple"><i class="mdui-icon material-icons">more_vert</i></a>
    </div>
</div>
</header>
<!-- 菜单 -->
<div class="mdui-drawer mdui-shadow-3" id="menu">
    <ul class="mdui-list" mdui-collapse="{accordion: true}">
        <a href="./home.php">
            <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons">home</i>
                <div class="mdui-list-item-content">搜索主页</div>
            </li>
        </a>
        <a href="javascript:;">
            <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-<?php echo $set["THEME"]["subcolor"] ?>">dashboard</i>
                <div class="mdui-list-item-content mdui-text-color-<?php echo $set["THEME"]["subcolor"] ?>">快速访问</div>
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
            <li class="mdui-list-item mdui-ripple">Location</li>
            <li class="mdui-list-item mdui-ripple">New vs Returning</li>
            </ul>
        </li>
        <li class="mdui-collapse-item">
            <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons">device_hub</i>
            <div class="mdui-list-item-content">Acquisition</div>
            <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
            </div>
            <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
            <li class="mdui-list-item mdui-ripple">Overview</li>
            <li class="mdui-list-item mdui-ripple">All Traffic</li>
            <li class="mdui-list-item mdui-ripple">Direct Traffic</li>
            <li class="mdui-list-item mdui-ripple">Search Overview</li>
            </ul>
        </li>
        <li class="mdui-collapse-item">
            <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons">touch_app</i>
            <div class="mdui-list-item-content">Behavior</div>
            <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
            </div>
            <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
            <li class="mdui-list-item mdui-ripple">Overview</li>
            <li class="mdui-list-item mdui-ripple">All Pages</li>
            <li class="mdui-list-item mdui-ripple">Landing Pages</li>
            <li class="mdui-list-item mdui-ripple">Exit Pages</li>
            </ul>
        </li>
        <li class="mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons">shopping_cart</i>
            <div class="mdui-list-item-content">Ecommerce</div>
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
<!-- 中间正文 -->
<div class="mdui-container mdui-m-t-5">
    <div class="mdui-typo mdui-m-t-5">
        <h2><strong>作者相关</strong></h2>
    </div>
    <div class="mdui-row-xs-6 mdui-m-t-2 mdui-m-l-5 mdui-m-r-5">
        <div class="mdui-col">
            <div class="mdui-chip">
                <a href="https://tools.x-lf.cn/">
                    <img class="mdui-chip-icon" src="./sources/icon/svg/baidu.svg"/>
                    <span class="mdui-chip-title mdui-text-color-black">筱锋搜索</span>
                </a>
            </div>
        </div>
        <div class="mdui-col">
            <div class="mdui-chip">
                <a href="https://www.xiaolfeng.cn/">
                    <img class="mdui-chip-icon" src="https://cdn.jsdelivr.net/gh/XiaoLFeng/Blog_Things@master/ico/logo_144.png"/>
                    <span class="mdui-chip-title mdui-text-color-black">凌中的锋雨</span>
                </a>
            </div>
        </div>
    </div>
    <div class="mdui-typo mdui-m-t-5">
        <h2><strong>视频媒体</strong></h2>
    </div>
    <div class="mdui-row-xs-6 mdui-m-t-2 mdui-m-l-5 mdui-m-r-5">
        <div class="mdui-col">
            <div class="mdui-chip">
                <a href="https://www.bilibili.com/">
                    <img class="mdui-chip-icon" src="./sources/icon/svg/bilibili-fill.svg"/>
                    <span class="mdui-chip-title mdui-text-color-black">哔哩哔哩</span>
                </a>
            </div>
        </div>
        <div class="mdui-col">
            <div class="mdui-chip">
                <a href="https://www.acfun.cn/">
                    <img class="mdui-chip-icon" src="./sources/icon/svg/acfun.svg"/>
                    <span class="mdui-chip-title mdui-text-color-black">AcFun</span>
                </a>
            </div>
        </div>
        <div class="mdui-col">
            <div class="mdui-chip">
                <a href="https://www.youku.com/">
                    <img class="mdui-chip-icon" src="./sources/icon/svg/youku.svg"/>
                    <span class="mdui-chip-title mdui-text-color-black">优酷Youku</span>
                </a>
            </div>
        </div>
    </div>
    <div class="mdui-typo mdui-m-t-5">
        <h2><strong>搜索引擎</strong></h2>
    </div>
    <div class="mdui-row-xs-6 mdui-m-t-2 mdui-m-l-5 mdui-m-r-5">
        <div class="mdui-col">
            <div class="mdui-chip">
                <a href="https://www.google.com/">
                    <img class="mdui-chip-icon" src="./sources/icon/svg/g.svg"/>
                    <span class="mdui-chip-title mdui-text-color-black">谷歌Google</span>
                </a>
            </div>
        </div>
        <div class="mdui-col">
            <div class="mdui-chip">
                <a href="https://cn.bing.com/">
                    <img class="mdui-chip-icon" src="./sources/icon/svg/bing.svg"/>
                    <span class="mdui-chip-title mdui-text-color-black">必应Bing</span>
                </a>
            </div>
        </div>
        <div class="mdui-col">
            <div class="mdui-chip">
                <a href="https://www.baidu.com/">
                    <img class="mdui-chip-icon" src="./sources/icon/svg/baidu.svg"/>
                    <span class="mdui-chip-title mdui-text-color-black">度娘Baidu</span>
                </a>
            </div>
        </div>
        <div class="mdui-col">
            <div class="mdui-chip">
                <a href="https://www.sogou.com/">
                    <img class="mdui-chip-icon" src="./sources/icon/svg/sogou.svg"/>
                    <span class="mdui-chip-title mdui-text-color-black">搜狗Sogou</span>
                </a>
            </div>
        </div>
        <div class="mdui-col">
            <div class="mdui-chip">
                <a href="https://hk.yahoo.com/">
                    <img class="mdui-chip-icon" src="./sources/icon/svg/yahu.svg"/>
                    <span class="mdui-chip-title mdui-text-color-black">雅虎Yahu</span>
                </a>
            </div>
        </div>
        <div class="mdui-col">
            <div class="mdui-chip">
                <a href="https://mijisou.com/">
                    <img class="mdui-chip-icon" src="./sources/icon/svg/miji.svg"/>
                    <span class="mdui-chip-title mdui-text-color-black">秘技MijiSou</span>
                </a>
            </div>
        </div>
        <div class="mdui-col">
            <div class="mdui-chip">
                <a href="https://www.naver.com/">
                    <img class="mdui-chip-icon" src="./sources/icon/svg/naver.svg"/>
                    <span class="mdui-chip-title mdui-text-color-black">NAVER</span>
                </a>
            </div>
        </div>
    </div>
    <div class="mdui-typo mdui-m-t-5">
        <h2><strong>各大网盘</strong></h2>
    </div>
    <div class="mdui-row-xs-6 mdui-m-t-2 mdui-m-l-5 mdui-m-r-5">
        <div class="mdui-col">
            <div class="mdui-chip">
                <a href="https://pan.baidu.com/">
                    <img class="mdui-chip-icon" src="./sources/icon/svg/baiduyun.svg"/>
                    <span class="mdui-chip-title mdui-text-color-black">度娘网盘</span>
                </a>
            </div>
        </div>
    </div>
</div>
</body>
<!-- JavaScript -->
<script src="./sources/js/mdui.min.js" integrity="sha384-gCMZcshYKOGRX9r6wbDrvF+TcCCswSHFucUzUPwka+Gr+uHgjlYvkABr95TCOz3A" crossorigin="anonymous"></script>
<script src="./sources/js/style.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js" type="text/javascript"></script>
</html>