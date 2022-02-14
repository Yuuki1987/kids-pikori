<?php include('../views/layouts/contents-header.php'); ?>
<head>
    <title>カタカナ一覧学習</title>
</head>

    <div class="container text-center">
          <div class="d-flex justify-content-center">
              <div class="d-flex">
                  
            <table class="table table-bordered">
                <thead>
                <tr class="katakana-title">
                    <th scope="col" colspan="12">
                    <h2 class="fs-3 fw-bold">カタカナプログラム</h2>
                        <h3>カタカナ一覧学習</h3>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach($oneLines as $key => $oneLine) :?>
                        <th> 
                            <?php if(!isset($random)) : ?>
                                <button name="hiragana"  class="btn btn-outline-primary btn-lg fs-5" value="<?php echo $oneLine?>"><?php echo $key ?></button>
                                <?php elseif($random == $oneLine) : ?>
                                    <button type="button" onclick="seikai();" class="btn btn-outline-primary btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/seikai.png width=200px> " ><?php echo $key ?></button>
                                    <?php else : ?>
                                        <button type="button"  onclick="bathu();" class="btn btn-outline-primary btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/bathu.png width=200px> " ><?php echo $key ?></button>
                                        
                                <?php endif ?>
                            </th>
                        <?php endforeach ?>
                </tr>
                <?php foreach($twoLines as $key => $twoLine) :?>
                        <th> 
                            <?php if($twoLine == ""):?>
                            
                            <?php elseif(!isset($random)): ?>        
                            <button class="btn btn-outline-success btn-lg fs-5" value="<?php echo $twoLine?>"><?php echo $key ?></button>
                            <?php elseif($random == $twoLine) : ?>
                                    <button type="button"  onclick="seikai();" class="btn btn-outline-success btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true"  value="<?php echo $twoLine?>" title="<img src=../img/seikai.png width=200px> " ><?php echo $key ?></button>
                                    <?php else : ?>
                                        <button type="button" onclick="bathu();" class="btn btn-outline-success btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true"  value="<?php echo $twoLine?>" title="<img src=../img/bathu.png width=200px> " ><?php echo $key ?></button>
                            <?php endif?>
                        </th>
                        <?php endforeach ?>
                </tr>
                </tr>
                <?php foreach($threeLines as $key => $threeLine) :?>
                        <th> 
                            <?php if($threeLine == ""):?>
                            
                                <?php elseif(!isset($random)): ?>        
                            <button class="btn btn-outline-danber btn-lg fs-5" value="<?php echo $threeLine?>"><?php echo $key ?></button>
                            <?php elseif($random == $threeLine) : ?>
                                    <button type="button"  onclick="seikai();" class="btn btn-outline-danger btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" value="<?php echo $threeLine?>"  title="<img src=../img/seikai.png width=200px> " ><?php echo $key ?></button>
                                    <?php else : ?>
                                        <button type="button" onclick="bathu();"  class="btn btn-outline-danger btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" value="<?php echo $threeLine?>"  title="<img src=../img/bathu.png width=200px> " ><?php echo $key ?></button>
                                <?php endif?>
                        </th>
                        <?php endforeach ?>
                </tr>
                </tr>
                <?php foreach($fourLines as $key => $fourLine) :?>
                        <th> 
                            <?php if($fourLine == ""):?>
                                <?php elseif(!isset($random)): ?>        
                            <button class="btn btn-outline-warning btn-lg fs-5" value="<?php echo $fourLine?>"><?php echo $key ?></button>
                            <?php elseif($random == $fourLine) : ?>
                                    <button type="button" onclick="seikai();" class="btn btn-outline-warning btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" value="<?php echo $fourLine?>"  title="<img src=../img/seikai.png width=200px> " ><?php echo $key ?></button>
                                    <?php else : ?>
                                        <button type="button" onclick="bathu();"  class="btn btn-outline-warning btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" value="<?php echo $fourLine?>"  title="<img src=../img/bathu.png width=200px> " ><?php echo $key ?></button>
                            
                                <?php endif?>
                        </th>
                        <?php endforeach ?>
                </tr>
                </tr>
                <?php foreach($fiveLines as $key => $fiveLine) :?>
                        <th> 
                            <?php if($fiveLine == ""):?>
                                <?php elseif(!isset($random)): ?>        
                            <button class="btn btn-outline-info btn-lg fs-5" value="<?php echo $fiveLine?>"><?php echo $key ?></button>
                            <?php elseif($random == $fiveLine) : ?>
                                    <button type="button"  onclick="seikai();" class="btn btn-outline-info btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" value="<?php echo $fiveLine?>"  title="<img src=../img/seikai.png width=200px> " ><?php echo $key ?></button>
                                    <?php else : ?>
                                        <button type="button" onclick="bathu();"  class="btn btn-outline-info btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" value="<?php echo $fiveLine?>"  title="<img src=../img/bathu.png width=200px> " ><?php echo $key ?></button>

                                <?php endif?>
                        </th>
                        <?php endforeach ?>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
    <div>
     <p class="fs-4"><button class="mt-3 btn btn-<?php echo $color ?> btn-lg fs-3 me-3"><?php echo $arr[$random] ?></button>を探してクリックしてみよう！！</p>
    </div>
    <form action="" method="GET">
        <button class="btn btn-primary fs-3">次へ</button>
    </form>
        </div>

        <?php include('../views/layouts/contents-list.php'); ?>
        <?php include('../views/layouts/footer.php'); ?>
