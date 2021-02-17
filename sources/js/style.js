//函数
var $ = mdui.$;

// 等待网站加载完自动执行
window.onload = snackbar;
function snackbar() {
    mdui.snackbar({
        message: '<i class="mdui-icon material-icons">info_outline</i> 网站加载完毕',
        position: 'right-top'
    })
    console.log('加载完成');
};

// 右击菜单
window.oncontextmenu = function(e){
    e.preventDefault(); //阻止浏览器自带的右键菜单显示
    var menu = document.getElementById("click-menu");
    menu.style.display = "block"; //将自定义的“右键菜单”显示出来
    menu.style.left = e.clientX + "px";  //设置位置，跟随鼠标
    menu.style.top = e.clientY+"px"; 
}
window.onclick = function(e){ //点击窗口，右键菜单隐藏
    var menu = document.getElementById("click-menu");
    menu.style.display = "none";
}

// 复制
document.getElementById('copy').addEventListener('click', function () {
    mdui.snackbar({
        message: '<i class="mdui-icon material-icons">content_copy</i> 已复制',
        position: 'right-top'
    })
})

// 粘贴
document.getElementById('paste').addEventListener('click', function () {
    mdui.snackbar({
        message: '<i class="mdui-icon material-icons">content_paste</i> 已粘贴',
        position: 'right-top'
    })
})