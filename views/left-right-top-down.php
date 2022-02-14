<?php include('../views/layouts/contents-header.php'); ?>
<head>
    <title>方向の学習</title>
</head>


<div class="container text-center">
    <div class="d-flex justify-content-center">
        <div class="d-flex">
            
            <table class="table table-borderless">
                <thead>
                    <tr class="direction-title">
                    <th scope="col" colspan="12"><h2 class="fs-3 fw-bold">順序と方向プログラム</h2>
                    <h3>上下左右</h3></th>
                    </tr>
            </thead>
            <tbody>

                <tr>
                    <?php foreach($oneLines as $key => $line) : ?>
                        <?php if($line ==""): ?>
                            <th></th>
                        <?php else: ?>
                        <th>
                            <?php if($random == $key) : ?>
                        <button type="button"  value="<?php echo $key ?>" onclick="seikai();" class="btn btn-outline-primary btn-lg " data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true"  title="<img src=../img/seikai.png width=200px> " >
                        <img src="<?php echo $line ?>" width="120px">
                    </button>
                    <?php else: ?>
                        <button type="button"  onclick="bathu();" class="btn btn-outline-primary btn-lg " data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/bathu.png width=200px> " >
                            <img src="<?php echo $line ?>" width="120px">
                        </button>
                        <?php endif ?>
                        </th>
                        <?php endif ?>
                        <?php endforeach ?>
                </tr>
                
                <tr>
                    <?php foreach($twoLines as $key => $line) : ?>
                        <th> 
                        <?php if($random == $key) : ?>
                        <button type="button"  value="<?php echo $key ?>" onclick="seikai();" class="btn btn-outline-primary btn-lg " data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true"  title="<img src=../img/seikai.png width=200px> " >
                        <img src="<?php echo $line ?>" width="100px" height ="100px">
                    </button>
                    <?php elseif($key == 0): ?>
                        <button class="btn btn-outline-primary btn-lg" value=<?php echo $key ?>>
                            <img src="<?php echo $line ?>" width="100px" height ="100px">
                    </button>
                    <?php else: ?>
                        <button type="button"  onclick="bathu();" class="btn btn-outline-primary btn-lg " data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/bathu.png width=200px> " >
                            <img src="<?php echo $line ?>" width="100px" height ="100px">
                        </button>
                        <?php endif ?>
                        </th>
                        <?php endforeach ?>
                    </tr>

                    <tr>
                        <?php foreach($threeLines as $key => $line) : ?>
                            <?php if($line ==""): ?>
                                <th></th>
                            <?php else: ?>
                            <th> 
                            <?php if($random == $key) : ?>
                        <button type="button"  value="<?php echo $key ?>" onclick="seikai();" class="btn btn-outline-primary btn-lg " data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true"  title="<img src=../img/seikai.png width=200px> " >
                        <img src="<?php echo $line ?>" width="120px">
                    </button>
                    <?php else: ?>
                        <button type="button"  onclick="bathu();" class="btn btn-outline-primary btn-lg " data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/bathu.png width=200px> " >
                            <img src="<?php echo $line ?>" width="120px">
                        </button>
                        <?php endif ?>
                            </th>
                            <?php endif ?>
                            <?php endforeach ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div>
    </div>
    <p class="fs-5"><img src="../img/direction/tree.png" width="75px" height="75px" class="me-3">の<?php echo $direction ?>は何（なに）がある？？</p>
    <form action="" method="GET">
        <button class="btn btn-outline-primary fs-3">次へ</button>
    </form>
        </div>



            <?php include('../views/layouts/contents-list.php'); ?>
            <?php include('../views/layouts/footer.php'); ?>


    







