<?php if(isset($ajax_load)){?>

    <!-- <div class="card">
        <div class="card-block p0">

            <?php
            $media = ""; 
            if(!empty($medias)){
                $media = $medias[0];
            }
            ?>

            <?php if((post("type") == "photo" || post("type") == "link" || post("type") == "video")){?>
            <div class="preview-instagram preview-instagram-photo">
                <div class="preview-header">
                    <div class="pull-left"><i class="ft-camera"></i></div>
                    <div class="instagram-logo"><img src="<?=BASE?>public/instagram/assets/img/instagram-logo.png"></div>
                    <div class="pull-right"><i class="icon-paper-plane"></i></div>
                </div>
                <div class="preview-content">
                    <div class="user-info">
                        <img class="img-circle" src="<?=BASE?>public/instagram/assets/img/avatar.png">
                        <span><?=lang('anonymous')?></span>
                    </div>

                    <div class="preview-image" style="<?=(post("type") != "video" && $media!="")?"background-image: url('{$media}');":""?>">
                        <?php if(post("type") == "video"){?>
                        <video src="<?=$media?>" playsinline="" autoplay="" muted="" loop=""></video>
                        <?php }?>
                    </div>

                    <div class="post-info">
                        <div class="info-active pull-left"> <?=lang('be_the_first_to_Like_this')?></div>
                        <div class="pull-right">1s</div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="caption-info pt0">
                        <?php if($caption != ""){?>
                            <?=$caption?>
                        <?php }else{?>
                        <div class="line-no-text"></div>
                        <div class="line-no-text"></div>
                        <div class="line-no-text w50"></div>
                        <?php }?>
                    </div>
                    <div class="preview-comment">
                        <?=lang("add_a_comment")?>…                                    
                        <div class="icon-3dot"></div>
                    </div>
                </div>
            </div>
            <?php }?>

            <?php if((post("type") == "photo" || post("type") == "link" || post("type") == "video")){?>
            <div class="preview-instagram preview-instagram-story hide" style="<?=(post("type") != "video" && $media!="")?"background-image: url('{$media}');":""?>">
                <?php if(post("type") == "video"){?>
                <video src="<?=$media?>" playsinline="" autoplay="" muted="" loop=""></video>
                <?php }?>
            </div>
            <?php }?>

            <?php if(post("type") == "photo" && count($medias) > 1){?>
            <div class="preview-instagram preview-instagram-carousel">
                <div class="preview-header">
                    <div class="pull-left"><i class="ft-camera"></i></div>
                    <div class="instagram-logo"><img src="<?=BASE?>public/instagram/assets/img/instagram-logo.png"></div>
                    <div class="pull-right"><i class="icon-paper-plane"></i></div>
                </div>
                <div class="preview-content">
                    <div class="user-info">
                        <img class="img-circle" src="<?=BASE?>public/instagram/assets/img/avatar.png">
                        <span><?=lang('anonymous')?></span>
                    </div>
                    <div class="preview-image">
                        <div id="preview-carousel" class="preview-carousel carousel slide">
                            
                            <ol class="carousel-indicators">
                                <?php foreach ($medias as $key => $media) {?>
                                <li data-target="#preview-carousel" data-slide-to="<?=$key?>" class="<?=$key==0?"active":""?>"></li>
                                <?php }?>
                            </ol>
                            <div class="carousel-inner">
                                <?php foreach ($medias as $key => $media) {?>
                                <div class="carousel-item item <?=$key==0?"active":""?>">
                                    <div class="image" style="background-image: url('<?=$media?>');"></div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="post-info">
                        <div class="info-active pull-left"> <?=lang('be_the_first_to_Like_this')?></div>
                        <div class="pull-right">1s</div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="caption-info pt0">
                        <?php if($caption != ""){?>
                            <?=$caption?>
                        <?php }else{?>
                        <div class="line-no-text"></div>
                        <div class="line-no-text"></div>
                        <div class="line-no-text w50"></div>
                        <?php }?>
                    </div>
                    <div class="preview-comment">
                        <?=lang("add_a_comment")?>… 
                        <div class="icon-3dot"></div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div> -->
<div class="instagram-app">
    <div class="card">
        <div class="card-block p0">
            <div class="preview-instagram preview-instagram-photo">
                <div class="preview-header">
                    <div class="pull-left"><i class="ft-camera"></i></div>
                    <div class="instagram-logo"><img src="<?=BASE?>public/instagram/assets/img/instagram-logo.png"></div>
                    <div class="pull-right"><i class="icon-paper-plane"></i></div>
                </div>
                <div class="preview-content">
                    <div class="user-info">
                        <img class="img-circle" src="<?=BASE?>public/instagram/assets/img/avatar.png">
                        <span><?=lang('anonymous')?></span>
                    </div>
                    <div class="preview-image">
                    </div>
                    <div class="post-info">
                        <div class="info-active pull-left"> <?=lang('be_the_first_to_Like_this')?></div>
                        <div class="pull-right">1s</div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="caption-info pt0">
                        <div class="line-no-text"></div>
                        <div class="line-no-text"></div>
                        <div class="line-no-text w50"></div>
                    </div>
                    <div class="preview-comment">
                        <?=lang("add_a_comment")?>…                                    
                        <div class="icon-3dot"></div>
                    </div>
                </div>
            </div>
            <div class="preview-instagram preview-instagram-story hide"></div>
            <div class="preview-instagram preview-instagram-carousel hide">
                <div class="preview-header">
                    <div class="pull-left"><i class="ft-camera"></i></div>
                    <div class="instagram-logo"><img src="<?=BASE?>public/instagram/assets/img/instagram-logo.png"></div>
                    <div class="pull-right"><i class="icon-paper-plane"></i></div>
                </div>
                <div class="preview-content">
                    <div class="user-info">
                        <img class="img-circle" src="<?=BASE?>public/instagram/assets/img/avatar.png">
                        <span><?=lang('anonymous')?></span>
                    </div>
                    <div class="preview-image">
                        <div id="preview-carousel" class="preview-carousel carousel slide"></div>
                    </div>
                    <div class="post-info">
                        <div class="info-active pull-left"> <?=lang('be_the_first_to_Like_this')?></div>
                        <div class="pull-right">1s</div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="caption-info pt0">
                        <div class="line-no-text"></div>
                        <div class="line-no-text"></div>
                        <div class="line-no-text w50"></div>
                    </div>
                    <div class="preview-comment">
                        <?=lang("add_a_comment")?>… 
                        <div class="icon-3dot"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php }else{?>
<div class="card">
    <div class="card-block p0">
        <div class="preview-instagram preview-instagram-photo">
            <div class="preview-header">
                <div class="pull-left"><i class="ft-camera"></i></div>
                <div class="instagram-logo"><img src="<?=BASE?>public/instagram/assets/img/instagram-logo.png"></div>
                <div class="pull-right"><i class="icon-paper-plane"></i></div>
            </div>
            <div class="preview-content">
                <div class="user-info">
                    <img class="img-circle" src="<?=BASE?>public/instagram/assets/img/avatar.png">
                    <span><?=lang('anonymous')?></span>
                </div>
                <div class="preview-image">
                </div>
                <div class="post-info">
                    <div class="info-active pull-left"> <?=lang('be_the_first_to_Like_this')?></div>
                    <div class="pull-right">1s</div>
                    <div class="clearfix"></div>
                </div>
                <div class="caption-info pt0">
                    <div class="line-no-text"></div>
                    <div class="line-no-text"></div>
                    <div class="line-no-text w50"></div>
                </div>
                <div class="preview-comment">
                    <?=lang("add_a_comment")?>…                                    
                    <div class="icon-3dot"></div>
                </div>
            </div>
        </div>
        <div class="preview-instagram preview-instagram-story hide"></div>
        <div class="preview-instagram preview-instagram-carousel hide">
            <div class="preview-header">
                <div class="pull-left"><i class="ft-camera"></i></div>
                <div class="instagram-logo"><img src="<?=BASE?>public/instagram/assets/img/instagram-logo.png"></div>
                <div class="pull-right"><i class="icon-paper-plane"></i></div>
            </div>
            <div class="preview-content">
                <div class="user-info">
                    <img class="img-circle" src="<?=BASE?>public/instagram/assets/img/avatar.png">
                    <span><?=lang('anonymous')?></span>
                </div>
                <div class="preview-image">
                    <div id="preview-carousel" class="preview-carousel carousel slide"></div>
                </div>
                <div class="post-info">
                    <div class="info-active pull-left"> <?=lang('be_the_first_to_Like_this')?></div>
                    <div class="pull-right">1s</div>
                    <div class="clearfix"></div>
                </div>
                <div class="caption-info pt0">
                    <div class="line-no-text"></div>
                    <div class="line-no-text"></div>
                    <div class="line-no-text w50"></div>
                </div>
                <div class="preview-comment">
                    <?=lang("add_a_comment")?>… 
                    <div class="icon-3dot"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>