<?php include('../views/layouts/contents-header.php'); ?>
<head>
    <title>数字一覧学習</title>
</head>

    <div class="container text-center">
          <div class="d-flex justify-content-center">
              <div class="d-flex">
                  
            <table class="table table-bordered">
                <thead>
                <tr class="number-title">
                    <th scope="col" colspan="13">
                    <h2 class="fs-3 fw-bold">数字プログラム</h2>
                        <h3>数字を探す学習（５０まで）</h3>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach($onelines as $key => $oneline) :?>
                        <th> 
                        <?php if($random -1 == $key) : ?>
                                    <button type="button" onclick="seikai();" class="btn btn-outline-primary btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/seikai.png width=200px> " ><?php echo $oneline ?></button>
                                    <?php else : ?>
                                        <button type="button"  onclick="bathu();" class="btn btn-outline-primary btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/bathu.png width=200px> " ><?php echo $oneline ?></button>
                            </th>
                            <?php endif ?>
                        <?php endforeach ?>
                </tr>
                <tr>
                    <?php foreach($twolines as $key => $twoline) :?>
                        <th> 
                        <?php if($random -1 == $key +10) : ?>
                                    <button type="button" onclick="seikai();" class="btn btn-outline-danger btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/seikai.png width=200px> " ><?php echo $twoline ?></button>
                                    <?php else : ?>
                                        <button type="button"  onclick="bathu();" class="btn btn-outline-danger btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/bathu.png width=200px> " ><?php echo $twoline ?></button>
                            </th>
                            <?php endif ?>
                        <?php endforeach ?>
                </tr>
                <tr>
                    <?php foreach($threelines as $key => $threeline) :?>
                        <th> 
                        <?php if($random -1 == $key + 20) : ?>
                                    <button type="button" onclick="seikai();" class="btn btn-outline-success btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/seikai.png width=200px> " ><?php echo $threeline ?></button>
                                    <?php else : ?>
                                        <button type="button"  onclick="bathu();" class="btn btn-outline-success btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/bathu.png width=200px> " ><?php echo $threeline ?></button>
                            </th>
                            <?php endif ?>
                        <?php endforeach ?>
                </tr>
                <tr>
                    <?php foreach($fourlines as $key => $fourline) :?>
                        <th> 
                        <?php if($random -1 == $key + 30) : ?>
                                    <button type="button" onclick="seikai();" class="btn btn-outline-info btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/seikai.png width=200px> " ><?php echo $fourline ?></button>
                                    <?php else : ?>
                                        <button type="button"  onclick="bathu();" class="btn btn-outline-info btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/bathu.png width=200px> " ><?php echo $fourline ?></button>
                            </th>
                            <?php endif ?>
                        <?php endforeach ?>
                </tr>
                <tr>
                    <?php foreach($fivelines as $key => $fiveline) :?>
                        <th> 
                        <?php if($random -1 == $key + 40) : ?>
                                    <button type="button" onclick="seikai();" class="btn btn-outline-warning btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/seikai.png width=200px> " ><?php echo $fiveline ?></button>
                                    <?php else : ?>
                                        <button type="button"  onclick="bathu();" class="btn btn-outline-warning btn-lg fs-5" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/bathu.png width=200px> " ><?php echo $fiveline ?></button>
                            </th>
                            <?php endif ?>
                        <?php endforeach ?>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
    <div>
    <p class="fs-4 mt-3"><button class=" btn btn-<?php echo $color ?> btn-lg fs-3 me-3"><?php echo $random ?></button>を探してクリックしてみよう！！</p>
    </div>
    <form action="" method="GET">
        <button class="btn btn-primary fs-3">次へ</button>
    </form>
        </div>

        <?php include('../views/layouts/contents-list.php'); ?>
        <?php include('../views/layouts/footer.php'); ?>
