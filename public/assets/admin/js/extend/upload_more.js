/**
 * Created by pc on 2017/7/5.
 */
var handle = function () {
    var
        fileInput = document.getElementsByClassName('image-file');
        // info = document.getElementsByClassName('file-info'),
        // preview = document.getElementsByClassName('image-preview'),
        // img = document.getElementsByClassName('img');
    // 监听change事件:
    for(var i=0;i<fileInput.length;i++){
        fileInput[i].addEventListener('change', function (e) {
            // 清除背景图片:
            var that = $(this);
            var preview =that.parent().prev();
            var info =that.parent().next();
            var img =that.parent().children("img");
            preview.css("backgroundImage",'') ;
            // 检查文件是否选择:
            if (!that.val()) {
                info.innerHTML = '没有选择文件';
                return;
            }
            // 获取File引用:
            var file = that.get(0).files[0];

            // 获取File信息:
            info.innerHTML = '文件: ' + file.name + '<br>';
            if (file.type !== 'image/jpeg' && file.type !== 'image/png' && file.type !== 'image/gif') {
                alert('不是有效的图片文件!');
                return;
            }
            // 读取文件:
            var reader = new FileReader();
            reader.onload = function(e) {
                var
                    data = e.target.result; // 'data:image/jpeg;base64,/9j/4AAQSk...(base64编码)...'
                img.src = data;
            };
            // 以DataURL的形式读取文件:
            reader.readAsDataURL(file);
        });

    }
};

var upload_more = function () {
    "use strict";
    return {
        init: function () {
            handle()
        }
    }
}();
