<?PHP
include ('../config.inc.php');
?>
<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <script src="moment.js"></script>
        <script src="vue.min.js"></script>
        <link href="antd.min.css" rel="stylesheet">
        <script src="antd.min.js"></script>
        <script src="axios.min.js"></script>
        <title><?php echo $set["INFO"]["name"] ?> | <?php echo $set["INFO"]["subname"] ?></title>
        <!-- 导入MDUI CSS -->
        <link rel="stylesheet" href="../sources/css/mdui.min.css" integrity="sha384-cLRrMq39HOZdvE0j6yBojO4+1PrHfB7a9l5qLcmRm/fiWXYY+CndJPmyu5FV/9Tw" crossorigin="anonymous"/>
        <link rel="stylesheet" href="../sources/css/style.css">
    </head>
    <body class="mdui-drawer-body-left mdui-theme-primary-<?php echo $set["THEME"]["color"] ?> mdui-theme-accent-<?php echo $set["THEME"]["subcolor"] ?> padding-top mdui-appbar-with-toolbar">
    <!-- 顶部TAB -->
<header>
<div class="mdui-appbar mdui-appbar-fixed">
    <div class="mdui-toolbar mdui-color-theme mdui-shadow-2 mdui-appbar-inset">
        <a href="javascript:;" class="mdui-btn mdui-btn-icon mdui-ripple" mdui-drawer="{target: '#menu'}" mdui-tooltip="{content: '菜单'}"><i class="mdui-icon material-icons">menu</i></a>
        <a href="../home.php" class="mdui-typo-title"><?php echo $set["INFO"]["name"] ?></a>
        <p class="mdui-typo-title">网易云音乐下载</p>
        <div class="mdui-toolbar-spacer"></div>
        <a href="javascript:location.reload();" class="mdui-btn mdui-btn-icon mdui-ripple" mdui-tooltip="{content: '刷新'}"><i class="mdui-icon material-icons">refresh</i></a>
        <a href="javascript:;" class="mdui-btn mdui-btn-icon mdui-ripple"><i class="mdui-icon material-icons">more_vert</i></a>
    </div>
</div>
</header>
<!-- 菜单 -->
<div class="mdui-drawer mdui-shadow-3" id="menu">
    <ul class="mdui-list" mdui-collapse="{accordion: true}">
        <a href="../home.php">
            <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons">home</i>
                <div class="mdui-list-item-content">搜索主页</div>
            </li>
        </a>
        <a href="../access.php">
            <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons">dashboard</i>
                <div class="mdui-list-item-content">快速访问</div>
            </li>
        </a>
        <li class="mdui-collapse-item mdui-collapse-item-open">
            <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-<?php echo $set["THEME"]["subcolor"] ?>">book</i>
            <div class="mdui-list-item-content mdui-text-color-<?php echo $set["THEME"]["subcolor"] ?>">功能</div>
            <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
            </div>
            <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
            <a href="javascript:;"><li class="mdui-list-item mdui-ripple mdui-text-color-<?php echo $set["THEME"]["subcolor"] ?>">音乐下载[网易]</li></a>
            <li class="mdui-list-item mdui-ripple">Language</li>
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
<!-- 正片 -->
    <div id="view" style="padding: 40px 60px;" class="mdui-container">
        <h1 style="margin-top:100px;margin-bottom:0px">网易云音乐(DEMO)<em style="font-size: 1.5rem;font-style: normal;font-weight: 300;color: #999;margin-left: 5px;">音乐下载</em></h1>
        <br />
        <div style="margin:0 auto;text-align:center">
            <a-input-search placeholder="还不快点输入歌曲名字，我只支持网易云喵~" @search="onSearch" enterButton="Search" size="large" />
        </div>
        <div v-if="s_search" style="margin-top:30px">
            <a-spin :spinning="spinning">
                <a-card title="匹配歌曲">
            <a-card-grid style="width:25%;" v-for="(item,index) in items" @click="showModal(item.id)">
                <a-card-meta :title="item.name" :description="item.artists[0].name"></a-card-meta>
            </a-card-grid>
            </a-card>
            </a-spin>
        </div>       
        <a-modal title="歌曲详情" :visible="visible" @ok="handleOk" :confirmLoading="confirmLoading" @cancel="handleCancel" class="mdui-container">
            <a-spin :spinning="song_visible">
            <div style="text-align: center;" v-if="song_content">
                <img :src="song.album.picture" style="box-shadow: 0px 5px 20px 5px rgba(0, 0, 0, 0.11);margin-bottom: 35px;border-radius: 10px;border: 1px solid #eee;width: 300px;height: 300px;">
                <audio :src="song_src" controls="controls">
                    Your browser does not support the audio element.
                </audio>
                <h1 style="line-height: 1.3;font-weight: 600;color: #444;margin-bottom: 2px;margin-top: 10px;">{{ song.name }}</h1> 
                <p style="color: #999;font-weight: 300;margin: 0px;" v-for="art in song.artists">{{ art }}</p>
            </div>
            </a-spin>
        </a-modal>
        </div>
    </div> 
        <script>
            var index = new Vue({
                el:'#view',
                data(){
                    return {
                        items : null,
                        loading : true,
                        s_search : false,
                        spinning : false,
                        song : null,
                        visible : false,
                        confirmLoading : false,
                        song_visible : true,
                        song_content : false,
                        song_src : null
                    }
                },
                methods : {
                    onSearch : function(key){
                        if(key !== ''){
                            this.s_search = true;
                            this.spinning = true;
                            axios.get('https://v1.hitokoto.cn/nm/search/'+key.toString()+'?limit=32')
                            .then(response=>{
                                this.items = response.data.result.songs;
                                this.spinning = false;
                            })
                        }
                    },
                    showModal(id) {
                      this.visible = true;
                      axios.get('https://v1.hitokoto.cn/nm/summary/'+id)
                      .then(response=>{
                          this.song = response.data[id];
                          this.song_visible = false;
                          this.song_content = true;
                          this.song_src = 'https://v1.hitokoto.cn/nm/redirect/music/'+id;
                      });
                    },
                    handleOk(e) {
                        this.ModalText = '准备下载';
                        this.confirmLoading = true;
                        window.open(this.song_src,'_blank',"top=0,left=100,width=400,height=250").location;
                        this.visible = false;
                        this.confirmLoading = false;
                    },
                    handleCancel(e) {
                        this.visible = false;
                        this.song = null;
                        this.song_visible = true;
                        this.song_content = false;
                    }    
                }
            })
        </script>
    </body>
<!-- 导入MDUI JavaScript -->
<script src="../sources/js/mdui.min.js" integrity="sha384-gCMZcshYKOGRX9r6wbDrvF+TcCCswSHFucUzUPwka+Gr+uHgjlYvkABr95TCOz3A" crossorigin="anonymous"></script>
<script src="../sources/js/style.js" type="text/javascript"></script>
</html>
