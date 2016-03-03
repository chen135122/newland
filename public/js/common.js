/**
 * Created by yin on 2016/3/2.
 */

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
function sendSMS(btnObj, valObj, sendUrl) {
    if($(valObj).val() == ""){
        dialog({title:'提示', content:'对不起，请填写手机号码后再获取！', okValue:'确定', ok:function (){}}).showModal();
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
                  //  sendSMS(btnObj, valObj, sendurl); //重新绑定事件
                });
                dialog({title:'提示', content:data.msg, okValue:'确定', ok:function (){}}).showModal();
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
            $(btnObj).removeClass("gray").text("发送确认码");
            $(btnObj).bind("click", function(){
                sendSMS(btnObj, valObj, sendurl); //重新绑定事件
            });
            dialog({title:'提示', content:"状态：" + textStatus + "；出错提示：" + errorThrown, okValue:'确定', ok:function (){}}).showModal();
        }
    });
    //倒计时计算器
    function time(){
        if (wait == 0) {
            $(btnObj).removeClass("gray").text("发送确认码");
            $(btnObj).bind("click", function(){
                sendSMS(btnObj, valObj, sendurl); //重新绑定事件
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