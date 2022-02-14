<?php include('../views/layouts/contents-header.php'); ?>
<head>
    <title>アルファベット一覧学習</title>
</head>

    <div class="container text-center">
          <div class="d-flex justify-content-center">
              <div class="d-flex">
                  
            <table class="table table-bordered">
                <thead>
                <tr class="alphabet-title">
                    <th scope="col" colspan="13">
                    <h2 class="fs-3 fw-bold">アルファベットプログラム</h2>
                        <h3>アルファベット一覧学習</h3>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach($oneLines as $key => $oneLine) :?>
                        <th> 
                        <?php if($random +1 == $oneLine) : ?>
                                    <button type="button" onclick="seikai();" class="btn btn-outline-<?php echo $color ?> btn-lg fs-3" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/seikai.png width=200px> " ><?php echo $key ?></button>
                                    <?php else : ?>
                                        <button type="button"  onclick="bathu();" class="btn btn-outline-<?php echo $color ?> btn-lg fs-3" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/bathu.png width=200px> " ><?php echo $key ?></button>
                            </th>
                            <?php endif ?>
                        <?php endforeach ?>
                </tr>
                <?php foreach($twoLines as $key => $twoLine) :?>
                        <th> 
                        <?php if($random +1 == $twoLine) : ?>
                                    <button type="button" onclick="seikai();" class="btn btn-outline-<?php echo $color1 ?> btn-lg fs-3" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/seikai.png width=200px> " ><?php echo $key ?></button>
                                    <?php else : ?>
                                        <button type="button"  onclick="bathu();" class="btn btn-outline-<?php echo $color1 ?> btn-lg fs-3" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/bathu.png width=200px> " ><?php echo $key ?></button>
                        </th>
                        <?php endif ?>
                        <?php endforeach ?>
                </tr>
                </tr>


            </tbody>
            </table>
        </div>
    </div>
    <div>
        <p class="fs-4"><button class="fs-1 mt-3 py-3 px-3 text-light btn-lg btn btn-<?php echo $color ?> me-2"><?php echo $a[$random] ?></button>を探してクリックしてみよう！！</p>
    </div>
    <form action="" method="GET">
        <button class="btn btn-primary fs-3">次へ</button>
    </form>
        </div>

        <?php include('../views/layouts/contents-list.php'); ?>
        <?php include('../views/layouts/footer.php'); ?>
