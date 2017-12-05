/**
 * 功能描述：多文件上传
 * TODO 此功能待完善，简单的实现了文件上传功能，上传文件格式的定义、最大上传数量，需要自己定义，以及上传成功后的业务逻辑处理
 * @author 时跃堂
 * @createDate 2017年11月28日
 */
var imgSrc = []; //图片路径
var imgFile = []; //文件流
var imgName = []; //图片名字
var maxCount = 1;//最大上传数量
var fileFormat = [];// 上传文件格式



//选择图片
function imgUpload(obj) {
	var oInput = '#' + obj.inputId;
	var imgBox = '#' + obj.imgBox;
	var btn = '#' + obj.buttonId;
	maxCount = obj.maxCount;
	fileFormat = obj.fileFormat;
	$(oInput).on("change", function() {
		// 检验图片格式 TODO
		
		
		
		var fileImg = $(oInput)[0];
		var fileList = fileImg.files;
		for(var i = 0; i < fileList.length; i++) {
			var imgSrcI = getObjectURL(fileList[i]);
			imgName.push(fileList[i].name);
			imgSrc.push(imgSrcI);
			imgFile.push(fileList[i]);
		}
		addNewContent(imgBox);
	})
	$(btn).on('click', function() {
		// 按照自己的业务逻辑进行判断
		
		
		//上传文件
        var fd = new FormData();
        for(var i = 0; i < imgFile.length; i++) {
			fd.append(obj.data,imgFile[i]);
		}
		submitPicture(obj.upUrl, fd);
	})
}
//图片展示
function addNewContent(obj) {
	$(imgBox).html("");
	for(var a = 0; a < imgSrc.length; a++) {
		var oldBox = $(obj).html();
		$(obj).html(oldBox + '<div class="imgContainer"><img title=' + imgName[a] + ' alt=' + imgName[a] + ' src=' + imgSrc[a] + ' onclick="imgDisplay(this)"><p onclick="removeImg(this,' + a + ')" class="imgDelete">删除</p></div>');
	}
}
//删除
function removeImg(obj, index) {
	imgSrc.splice(index, 1);
	imgFile.splice(index, 1);
	imgName.splice(index, 1);
	var boxId = "#" + $(obj).parent('.imgContainer').parent().attr("id");
	addNewContent(boxId);
}
//上传(将文件流数组传到后台)
function submitPicture(url,data) {
	if (url && data) {
		$.ajax({
			type : "post",
			url : url,
			data : data,
			dataType : 'JSON',
			cache : false,
			processData : false,
			contentType : false,
			async : false,
			success : function(res) {
                if(res['code'] === 'success'){
                    layer.msg(res['msg'],{icon: 6});
                    var data = res['data'];
                    console.log(res['data']);
                    var img_url = '';
                    for(var num=0;num<data.length;num++){
                        img_url += '<input type="hidden" name="pic[]" value="'+data[num]+'" />'
                    }
                    var html = '<div id="pic_list">'+img_url+'</div>';
                    $("form").append(html);
                }else{
                    layer.msg(res['msg'],{icon:5});
                }
			}
		});
	}
}
// 图片灯箱
function imgDisplay(obj) {
	var src = $(obj).attr("src");
	var imgHtml = '<div style="width: 100%;height: 100vh;overflow: auto;background: rgba(0,0,0,0.5);text-align: center;position: fixed;top: 0;left: 0;z-index: 1000;"><img src=' + src + ' style="margin-top: 100px;width: 70%;margin-bottom: 100px;"/><p style="font-size: 50px;position: fixed;top: 30px;right: 30px;color: white;cursor: pointer;" onclick="closePicture(this)">×</p></div>'
	$('body').append(imgHtml);
}
//关闭
function closePicture(obj) {
	$(obj).parent("div").remove();
}

//图片预览路径
function getObjectURL(file) {
	var url = null;
	if(window.createObjectURL != undefined) { // basic
		url = window.createObjectURL(file);
	} else if(window.URL != undefined) { // mozilla(firefox)
		url = window.URL.createObjectURL(file);
	} else if(window.webkitURL != undefined) { // webkit or chrome
		url = window.webkitURL.createObjectURL(file);
	}
	return url;
}