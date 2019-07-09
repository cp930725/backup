<?php /*a:2:{s:67:"/www/wwwroot/aa.jdswzc.com/application/api/view/account/authen.html";i:1562662691;s:67:"/www/wwwroot/aa.jdswzc.com/application/api/view/common/default.html";i:1562662293;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="format-detection" content="telephone=no, email=no"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover, shrink-to-fit=no" />
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef" />
    <meta name="theme-color" content="#4188c9" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <link rel="icon" href="/favicon.ico?2" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico?2" />
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/assets/css/dashboard.css?3" />
    <link rel="stylesheet" href="/static/css/global.css?3" />
    <title>实名认证</title>
    <style>
        @media (max-width: 360px) {
            .icon-group {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
            .icon-news {
                display: none !important;
            }
        }
      a:hover{
      	text-decoration: none;
      }
    </style>
    
<style>
    .item {
        width: 190px;
        height: 50px;
        position: relative;
        margin: 20px;
    }
    .addImg {
        width: 190px;
        height: 50px;
        position: absolute;
        left: 0;
        top: 0;
        z-index: 2;
        cursor: pointer;
    }
    .preview,.preBlock{
        position: absolute;
        display: block;
        width: 190px;
        height: 50px;
        left: 0;
        top: 0;
    }
    .delete {
        width: 30px;
        position: absolute;
        right: -30px;
        top: -15px;
        cursor: pointer;
        display: none;
    }
    .preBlock img {
        display: block;
        width: 190px;
        height: 50px;
    }
    .upload_input {
        display: block;
        width: 0;
        height: 0;
        -webkit-opacity: 0.0;
        /* Netscape and Older than Firefox 0.9 */
        -moz-opacity: 0.0;
        /* Safari 1.x (pre WebKit!) 老式khtml内核的Safari浏览器*/
        -khtml-opacity: 0.0;
        /* IE9 + etc...modern browsers */
        opacity: .0;
        /* IE 4-9 */
        filter: alpha(opacity=0);
        /*This works in IE 8 & 9 too*/
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        /*IE4-IE9*/
        filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    }
</style>

</head>

<body>
<!-- content -->
<div class="page">
    <div class="page-main">
        <div class="header py-4">
            <div class="container">
                <div class="d-flex">
                    <img src="<?php echo htmlentities(app('config')->get('hello.logo')); ?>" class="header-brand-img" alt="tabler logo">
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="nav-item d-xs-flex" style="display: none !important;">
                            <?php if(app('session')->get('platform') != 'app'): if(!(empty(app('config')->get('hello.appurl')) || ((app('config')->get('hello.appurl') instanceof \think\Collection || app('config')->get('hello.appurl') instanceof \think\Paginator ) && app('config')->get('hello.appurl')->isEmpty()))): if($platform == 'android'): ?>
                            <a href="<?php echo htmlentities(app('config')->get('hello.appurl')); ?>" target="_blank" class="btn btn-sm btn-outline-primary btn-app-download">APP 下载</a>
                            <?php endif; else: ?>
                            <a href="javascript:;" class="btn btn-sm btn-outline-primary btn-app-download" data-toggle="tooltip" data-original-title="敬请期待">APP 下载</a>
                            <?php endif; endif; ?>
                        </div>
                        <div class="dropdown">
                            <a href="javascript:;" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                               <span class="avatar me-avatar" style="background-image: url(<?php echo avatar(app('session')->get('user.profile.avatar'), app('session')->get('user.profile.idcard')); ?>);"><span class="avatar-status bg-green"></span></span>
                                <span class="ml-2 d-none d-lg-block">
                                  	<?php if(!empty(app('session')->get('user'))): ?>
                                    <span class="text-default"><?php echo htmlentities(app('session')->get('user.profile.nickname')); ?></span>
                                    <small class="text-muted d-block mt-1"><?php echo htmlentities(app('config')->get('hello.level')[app('session')->get('user.account.type')]['name']); ?></small>
                                  	<?php endif; ?>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                        <span class="header-toggler-icon"></span>
                    </a> -->
                </div>
            </div>
        </div>
        <div class="color header collapse d-lg-flex p-0" id="headerMenuCollapse">
            <div class="container">
                <div class="row align-items-center">
                    <!-- <div class="col-lg-3 ml-auto header-search-div">
                        <form class="input-icon my-3 my-lg-0">
                            <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                            <div class="input-icon-addon">
                                <i class="fe fe-search"></i>
                            </div>
                        </form>
                    </div> -->
                    <div class="col-lg order-lg-first">
                        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                            <li class="nav-item">
                                <a href="/api" class="nav-link<?php echo app('request')->path()=='api' || app('request')->path() == ''?' active' : ''; ?>">
                                    <span><i class="fe fe-home"></i></span>
                                    <span>首页</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/market" class="nav-link<?php echo app('request')->path()=='market' || app('request')->path() == ''?' active' : ''; ?>">
                                    <span><i class="fe fe-globe"></i></span>
                                    <span>市场</span>
                                </a>
                            </li>
                          	<li class="nav-item">
                                <a href="/funding" class="nav-link<?php echo app('request')->path()=='funding' || app('request')->path() == ''?' active' : ''; ?>">
                                    <span><i class="fe fe-star"></i></span>
                                    <span>众筹</span>
                                </a>
                            </li>
                            <li class="nav-item d-md-block d-lg-block">
                                <a href="/account" class="nav-link<?php echo app('request')->path()=='account' || app('request')->path() == ''?' active' : ''; ?>">
                                    <span><i class="fe fe-user"></i></span>
                                    <span>我的</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="my-3 my-md-5">
            <div class="container container-padding">
                
<form class="card mx-auto authen" method="post" style="max-width: 22rem;">
    <fieldset <?php echo $user['account']['authen']==1 || $user['account']['authen'] == 2 ? 'disabled'  :  ''; ?>>
        <div class="card-body">
            <div class="dimmer">
                <div class="loader"></div>
                <div class="dimmer-content">
                        <div class="card-title mb-4">
                            <div class="text-black mb-1">实名认证</div>
                            <div class="text-muted" style="font-size: .9rem;">请认真填写您的资料</div>
                        </div>
                        <?php if($user['account']['authen'] == '0'): if(!(empty($user['profile']['authen_reason']) || (($user['profile']['authen_reason'] instanceof \think\Collection || $user['profile']['authen_reason'] instanceof \think\Paginator ) && $user['profile']['authen_reason']->isEmpty()))): ?>
                            <div class="alert alert-danger" role="alert"><?php echo htmlentities($user['profile']['authen_reason']); ?></div>
                            <?php endif; endif; if($user['account']['authen'] == '1'): ?>
                            <div class="alert alert-success" role="alert">恭喜您、您已通过实名认证！</div>
                        <?php endif; if($user['account']['authen'] == '2'): ?>
                            <div class="alert alert-warning" role="alert">您的资料正在审核中，请耐心等待！</div>
                        <?php endif; if(!(empty($audit) || (($audit instanceof \think\Collection || $audit instanceof \think\Paginator ) && $audit->isEmpty()))): ?>
                            <div class="alert alert-warning" role="alert">您的账户尚未通过审核！</div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label class="form-label">个性昵称</label>
                            <input type="text" class="form-control" name="nickname" placeholder="个性昵称" value="<?php echo htmlentities($user['profile']['nickname']); ?>" maxlength="10" />
                        </div>
                        <!-- <div class="form-group">
                            <div class="form-label">我的头像</div>
                            <div class="custom-file">
                                <input type="file" accept="image/*" class="custom-file-input" name="avatar" />
                                <label class="custom-file-label">选择图片</label>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label class="form-label">真实姓名</label>
                            <input type="text" class="form-control" name="realname" placeholder="与身份证上一致" value="<?php echo htmlentities($user['profile']['realname']); ?>" />
                        </div>
                        <div class="form-group mb-0">
                            <label class="form-label">身份证号码</label>
                            <input type="text" class="form-control" name="idcard" placeholder="身份证号码" value="<?php echo htmlentities($user['profile']['idcard']); ?>" />
                        </div>
                        <?php if(!(empty(app('config')->get('hello.authentication.certificate.front')) || ((app('config')->get('hello.authentication.certificate.front') instanceof \think\Collection || app('config')->get('hello.authentication.certificate.front') instanceof \think\Paginator ) && app('config')->get('hello.authentication.certificate.front')->isEmpty()))): ?>
                        <div class="form-group mt-3 mb-0">
                            <div class="form-label">身份证正面</div>
                            <div class="item">
                                <img class="icon addImg" onclick="clickImg(this);" src="/static/image/addImg.png" />
                                <input name="front" accept="image/*" type="file" class="upload_input" onchange="change(this)"/>
                                <div class="preBlock">
                                    <img class="preview" alt="" name="pic" width="190" height="190" />
                                </div>
                                <img class="delete" onclick="deleteImg(this)" src="/static/image/delete.png"/>
                            </div>
                        </div>
                        <?php endif; if(!(empty(app('config')->get('hello.authentication.certificate.back')) || ((app('config')->get('hello.authentication.certificate.back') instanceof \think\Collection || app('config')->get('hello.authentication.certificate.back') instanceof \think\Paginator ) && app('config')->get('hello.authentication.certificate.back')->isEmpty()))): ?>
                        <div class="form-group mt-3 mb-0">
                            <div class="form-label">身份证反面</div>
                            <div class="item">
                                <img class="icon addImg" onclick="clickImg(this);" src="/static/image/addImg.png" />
                                <input name="back" accept="image/*" type="file" class="upload_input" onchange="change(this)"/>
                                <div class="preBlock">
                                    <img class="preview" alt="" name="pic" width="190" height="190" />
                                </div>
                                <img class="delete" onclick="deleteImg(this)" src="/static/image/delete.png"/>
                            </div>
                        </div>
                        <?php endif; if(!(empty(app('config')->get('hello.authentication.certificate.hold')) || ((app('config')->get('hello.authentication.certificate.hold') instanceof \think\Collection || app('config')->get('hello.authentication.certificate.hold') instanceof \think\Paginator ) && app('config')->get('hello.authentication.certificate.hold')->isEmpty()))): ?>
                        <div class="form-group mt-3 mb-0">
                            <div class="form-label">手持身份证</div>
                            <div class="item">
                                <img class="icon addImg" onclick="clickImg(this);" src="/static/image/addImg.png" />
                                <input name="hold" accept="image/*" type="file" class="upload_input" onchange="change(this)"/>
                                <div class="preBlock">
                                    <img class="preview" alt="" name="pic" width="190" height="190" />
                                </div>
                                <img class="delete" onclick="deleteImg(this)" src="/static/image/delete.png"/>
                            </div>
                        </div>
                        <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <?php if(!(empty($audit) || (($audit instanceof \think\Collection || $audit instanceof \think\Paginator ) && $audit->isEmpty()))): ?>
                <button type="button" class="btn btn-primary" disabled="true">提交认证</button>
            <?php else: ?>
                <button type="button" class="btn btn-primary">提交认证</button>
            <?php endif; ?>
        </div>
    </fieldset>
</form>

            </div>
        </div>
    </div>
    <footer class="footer d-xs-none d-sm-none d-lg-block">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-auto ml-lg-auto">
                    <div class="row align-items-center"><?php echo htmlentities(date('Y-m-d g:i a',time())); ?></div>
                </div>
                <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                    Copyright © 2019 <a href="."><?php echo htmlentities(app('config')->get('hello.title')); ?></a>
                </div>
            </div>
        </div>
    </footer>
</div>
<div class="modal fade modal-group" id="modal-group" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">官方交流群</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo $group['content']; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">我知道了</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>

<script type="text/javascript" src="/static/js/authen.js?2"></script>
<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    //点击
    var clickImg = function(obj){
        $(obj).parent().find('.upload_input').click();
    }
    //删除
    var deleteImg = function(obj){
        $(obj).parent().find('input').val('');
        $(obj).parent().find('img.preview').attr("src","");
        //IE9以下
        $(obj).parent().find('img.preview').css("filter","");
        $(obj).hide();
        $(obj).parent().find('.addImg').show();
    }
    //选择图片
    function change(file) {
        //预览
        var pic = $(file).parent().find(".preview");
        //添加按钮
        var addImg = $(file).parent().find(".addImg");
        //删除按钮
        var deleteImg = $(file).parent().find(".delete");

        var ext=file.value.substring(file.value.lastIndexOf(".")+1).toLowerCase();

        // gif在IE浏览器暂时无法显示
        if(ext!='png'&&ext!='jpg'&&ext!='jpeg'){
            if (ext != '') {
                alert("图片的格式必须为png或者jpg或者jpeg格式！");
            }
            return;
        }
        //判断IE版本
        var isIE = navigator.userAgent.match(/MSIE/)!= null,
            isIE6 = navigator.userAgent.match(/MSIE 6.0/)!= null;
        isIE10 = navigator.userAgent.match(/MSIE 10.0/)!= null;
        if(isIE && !isIE10) {
            file.select();
            var reallocalpath = document.selection.createRange().text;
            // IE6浏览器设置img的src为本地路径可以直接显示图片
            if (isIE6) {
                pic.attr("src",reallocalpath);
            }else{
                // 非IE6版本的IE由于安全问题直接设置img的src无法显示本地图片，但是可以通过滤镜来实现
                pic.css("filter","progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale',src=\"" + reallocalpath + "\")");
                // 设置img的src为base64编码的透明图片 取消显示浏览器默认图片
                pic.attr('src','data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');
            }
            addImg.hide();
            deleteImg.show();
        }else {
            html5Reader(file,pic,addImg,deleteImg);
        }
    }
    //H5渲染
    function html5Reader(file,pic,addImg,deleteImg){
        var file = file.files[0];
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function(e){
            pic.attr("src",this.result);
        }
        addImg.hide();
        deleteImg.show();
    }
</script>

</body>
</html>