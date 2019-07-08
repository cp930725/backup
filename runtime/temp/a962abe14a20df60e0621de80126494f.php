<?php /*a:2:{s:67:"/www/wwwroot/amadubai.co/application/index/view/account/authen.html";i:1530331062;s:65:"/www/wwwroot/amadubai.co/application/index/view/common/world.html";i:1531315458;}*/ ?>
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
    </style>
    
</head>

<body>
<!-- content -->
<div class="page">
    <div class="page-main">
        <div class="header py-4">
            <div class="container">
                <div class="d-flex">
                    <a class="header-brand" href="/account.html"><img src="/static/image/logo.png" class="header-brand-img" alt="tabler logo"></a>
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="nav-item d-xs-flex icon-group">
                            <a data-toggle="modal" data-target="#modal-group" style="color: #c7a85e;">官方交流群</a>
                        </div>
                        <div class="nav-item d-xs-flex" style="display: none !important;">
                            <?php if(app('session')->get('platform') != 'app'): if(!(empty(app('config')->get('hello.appurl')) || ((app('config')->get('hello.appurl') instanceof \think\Collection || app('config')->get('hello.appurl') instanceof \think\Paginator ) && app('config')->get('hello.appurl')->isEmpty()))): if($platform == 'android'): ?>
                                    <a href="<?php echo htmlentities(app('config')->get('hello.appurl')); ?>" target="_blank" class="btn btn-sm btn-outline-primary btn-app-download">APP 下载</a>
                                <?php endif; else: ?>
                                <a href="javascript:;" class="btn btn-sm btn-outline-primary btn-app-download" data-toggle="tooltip" data-original-title="敬请期待">APP 下载</a>
                            <?php endif; endif; ?>
                        </div>
                        <div class="d-xs-flex icon-news">
                            <a class="nav-link icon" href="/news.html"><i class="fe fe-bell"></i></a>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                                <span class="avatar me-avatar" style="background-image: url(<?php echo avatar(app('session')->get('user.profile.avatar'), app('session')->get('user.profile.idcard')); ?>);"><span class="avatar-status bg-green"></span></span>
                                <span class="ml-2 d-none d-lg-block">
                                    <span class="text-default"><?php echo htmlentities(app('session')->get('user.profile.nickname')); ?></span>
                                    <small class="text-muted d-block mt-1"><?php echo htmlentities(app('config')->get('hello.level')[app('session')->get('user.account.type')]['name']); ?></small>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="/account/profile.html">
                                    <i class="dropdown-icon fe fe-user"></i> 个人资料
                                </a>
                                <a class="dropdown-item" href="/account/reset.html">
                                    <i class="dropdown-icon fe fe-lock"></i> 修改密码
                                </a>
                                <a class="dropdown-item" href="/account/authen.html">
                                    <i class="dropdown-icon fe fe-shield"></i> 实名认证
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/help.html">
                                    <i class="dropdown-icon fe fe-help-circle"></i> 帮助文档
                                </a>
                                <a class="dropdown-item" href="/signout.html">
                                    <i class="dropdown-icon fe fe-log-out"></i> 退出登录
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                        <span class="header-toggler-icon"></span>
                    </a> -->
                </div>
            </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
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
                                <a href="/account.html" class="nav-link<?php echo app('request')->path()=='account' || app('request')->path() == ''?' active' : ''; ?>">
                                    <span><i class="fe fe-home"></i></span>
                                    <span>首页</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/team.html" class="nav-link<?php echo app('request')->path()=='team'?' active' : ''; ?>">
                                    <span><i class="fe fe-users"></i></span>
                                    <span>团队</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.amadubai.com" class="nav-link<?php echo app('request')->path()=='market'?' active' : ''; ?>">
                                    <span><i class="fe fe-globe"></i></span>
                                    <span>市场</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/machine.html" class="nav-link<?php echo app('request')->path()=='machine'?' active' : ''; ?>">
                                    <span><i class="fe fe-cpu"></i></span>
                                    <span>引擎</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/store.html" class="nav-link<?php echo app('request')->path()=='store'?' active' : ''; ?>">
                                    <span><i class="fe fe-shopping-cart"></i></span>
                                    <span>商城</span>
                                </a>
                            </li>
                            <li hidden class="nav-item d-md-block d-lg-block">
                                <a href="/help.html" class="nav-link<?php echo app('request')->path()=='help'?' active' : ''; ?>">
                                    <span><i class="fe fe-help-circle"></i></span>
                                    <span>帮助</span>
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
                            <div class="custom-file">
                                <input type="file" accept="image/*" class="custom-file-input" name="front" />
                                <label class="custom-file-label">选择图片</label>
                            </div>
                        </div>
                        <?php endif; if(!(empty(app('config')->get('hello.authentication.certificate.back')) || ((app('config')->get('hello.authentication.certificate.back') instanceof \think\Collection || app('config')->get('hello.authentication.certificate.back') instanceof \think\Paginator ) && app('config')->get('hello.authentication.certificate.back')->isEmpty()))): ?>
                        <div class="form-group mt-3 mb-0">
                            <div class="form-label">身份证反面</div>
                            <div class="custom-file">
                                <input type="file" accept="image/*" class="custom-file-input" name="back" />
                                <label class="custom-file-label">选择图片</label>
                            </div>
                        </div>
                        <?php endif; if(!(empty(app('config')->get('hello.authentication.certificate.hold')) || ((app('config')->get('hello.authentication.certificate.hold') instanceof \think\Collection || app('config')->get('hello.authentication.certificate.hold') instanceof \think\Paginator ) && app('config')->get('hello.authentication.certificate.hold')->isEmpty()))): ?>
                        <div class="form-group mt-3 mb-0">
                            <div class="form-label">手持身份证</div>
                            <div class="custom-file">
                                <input type="file" accept="image/*" class="custom-file-input" name="hold" />
                                <label class="custom-file-label">选择图片</label>
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
                    Copyright © 2018 <a href="."><?php echo htmlentities(app('config')->get('hello.title')); ?></a>. All rights reserved.
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

</body>
</html>