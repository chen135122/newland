//=====================初始化注册代码======================
$(function () {
    //初始化验证表单
    $("#regform").Validform({
        tiptype:3,
        callback:function(form){
            //AJAX提交表单
            $(form).ajaxSubmit({
                beforeSubmit: showRequest,
                success: showResponse,
                error: showError,
                url: $("#regform").attr("url"),
                type: "post",
                dataType: "json",
                timeout: 60000
            });
            return false;
        }
    });

    //表单提交前
    function showRequest(formData, jqForm, options) {
        $("#btnSubmit").val("正在提交...")
        $("#btnSubmit").prop("disabled", true);
    }
    //表单提交后
    function showResponse(data, textStatus) {
        if (data.status == 1) { //成功
            var d = dialog({content:data.msg}).show();
            setTimeout(function () {
                d.close().remove();
                location.href = data.url;
            }, 2000);
        } else { //失败
            dialog({title:'提示', content:data.msg, okValue:'确定', ok:function (){}}).showModal();
            $("#btnSubmit").val("再次提交");
            $("#btnSubmit").prop("disabled", false);
        }
    }
    //表单提交出错
    function showError(XMLHttpRequest, textStatus, errorThrown) {
        dialog({title:'提示', content:"状态：" + textStatus + "；出错提示：" + errorThrown, okValue:'确定', ok:function (){}}).showModal();
        $("#btnSubmit").val("再次提交");
        $("#btnSubmit").prop("disabled", false);
    }
});
/*表单AJAX提交封装(包含验证)
 ------------------------------------------------*/
function AjaxInitForm(formObj, btnObj, isDialog, urlObj, callback){
    var argNum = arguments.length; //参数个数
    $(formObj).Validform({
        tiptype:3,
        callback:function(form){
            //AJAX提交表单
            $(form).ajaxSubmit({
                beforeSubmit: formRequest,
                success: formResponse,
                error: formError,
                url: $(formObj).attr("url"),
                type: "post",
                dataType: "json",
                timeout: 60000
            });
            return false;
        }
    });

    //表单提交前
    function formRequest(formData, jqForm, options) {
        $(btnObj).prop("disabled", true);
        $(btnObj).val("提交中...");
    }

    //表单提交后
    function formResponse(data, textStatus) {
        if (data.status == 1) {
            $(btnObj).val("提交成功");
            //是否提示，默认不提示
            if(isDialog == 1){
                var d = dialog({content:data.msg}).show();
                setTimeout(function () {
                    d.close().remove();
                    if (argNum == 5) {
                        callback();
                    }else if(data.url){
                        location.href = data.url;
                    }else if($(urlObj).length > 0 && $(urlObj).val() != ""){
                        location.href = $(urlObj).val();
                    }else{
                        location.reload();
                    }
                }, 2000);
            }else{
                if (argNum == 5) {
                    callback();
                }else if(data.url){
                    location.href = data.url;
                }else if($(urlObj)){
                    location.href = $(urlObj).val();
                }else{
                    location.reload();
                }
            }
        } else {
            dialog({title:'提示', content:data.msg, okValue:'确定', ok:function (){}}).showModal();
            $(btnObj).prop("disabled", false);
            $(btnObj).val("再次提交");
        }
    }
    //表单提交出错
    function formError(XMLHttpRequest, textStatus, errorThrown) {
        dialog({title:'提示', content:'状态：'+textStatus+'；出错提示：'+errorThrown, okValue:'确定', ok:function (){}}).showModal();
        $(btnObj).prop("disabled", false);
        $(btnObj).val("再次提交");
    }
}

//=====================发送手机短信验证码=====================
var wait = 0; //计算变量
function sendSMS(btnObj, valObj, sendUrl,leib) {
   var  $nextsiblings=$(valObj).next();
    var content='';
    if(leib==0)
        content='手机号码';
    else
        content='用户名';
    if($(valObj).val() == ""){
        dialog({title:'提示', content:'对不起，请填写'+content+'后再获取！', okValue:'确定', ok:function (){}}).showModal();
        return false;
    }
    if($($nextsiblings).hasClass("Validform_loading")){
        dialog({title:'提示', content:'对不起，正在检测信息，请稍候获取验证码！', okValue:'确定', ok:function (){}}).showModal();
        return false;
    }
    if($(valObj).hasClass("Validform_error")){
        dialog({title:'提示', content:'对不起，请填写正确的'+content+'后再获取！', okValue:'确定', ok:function (){}}).showModal();
        return false;
    }

    //发送AJAX请求
    $.ajax({
        url: sendUrl,
        type: "POST",
        timeout: 60000,
        data: { "mobile": $(valObj).val() },
        dataType: "json",
        beforeSend: function(XMLHttpRequest) {
            $(btnObj).unbind("click").removeAttr("onclick"); //移除按钮事件
        },
        success: function (data, type) {
            if (data.status == 1) {
                wait = data.time * 60; //赋值时间
                time(); //调用计算器
                var d = dialog({content:data.msg}).show();
                setTimeout(function () {
                    d.close().remove();
                }, 2000);
            } else {
                $(btnObj).removeClass("gray").text("发送确认码");
                $(btnObj).bind("click", function(){
                    sendSMS(btnObj, valObj, sendUrl,leib); //重新绑定事件
                });
                dialog({title:'提示', content:data.msg, okValue:'确定', ok:function (){}}).showModal();
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
            $(btnObj).removeClass("gray").text("发送确认码");
            $(btnObj).bind("click", function(){
                sendSMS(btnObj, valObj, sendUrl,leib); //重新绑定事件
            });
            dialog({title:'提示', content:"状态：" + textStatus + "；出错提示：" + errorThrown, okValue:'确定', ok:function (){}}).showModal();
        }
    });
    //倒计时计算器
    function time(){
        if (wait == 0) {
            $(btnObj).removeClass("gray").text("发送确认码");
            $(btnObj).bind("click", function(){
                sendSMS(btnObj, valObj, sendUrl,leib); //重新绑定事件
            });
        }else{
            $(btnObj).addClass("gray").text("重新发送(" + wait + ")");
            wait--;
            setTimeout(function() {
                time(btnObj);
            },1000)
        }
    }
}