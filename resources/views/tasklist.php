<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Strata by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="\assets\js\ie\._html5shiv.js"></script><![endif]-->
     <link rel="stylesheet" href="\assets\css\main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="\assets\css\._ie8.css" /><![endif]-->
</head>
<body id="top">

<!-- Header -->
<header id="header">
    <div class="inner">
        <a href="#" class="image avatar"><img src="\images\images.jfif" alt="" /></a>
        <h1><strong>OIC釣り部</strong><br/>会員番号：2C04SN
            </h1>
    </div>
</header>

<!-- Main -->
<div id="main">

    <section id="manual-slide07">
        <h2 class="h2-sample">釣りたい魚リスト</h2>
        <div id="manual-slider07">
            <input type="radio" name="manual-slider07" id="manual-slider07-1" checked="checked" value="ボタン">
            <input type="radio" name="manual-slider07" id="manual-slider07-2" value="ボタン">
            <input type="radio" name="manual-slider07" id="manual-slider07-3" value="ボタン">
            <div id="manual-slider07-wrap">
                <div id="manual-slider07-overflow">
                    <div class="inner">
                        <div class="slide">
                            <img src="\images\karei.jpg" alt="img">
                            <h3 class="h3-tit">カレイ</h3>
                            <div class="asdf">
                                <form action="/task" method="POST">
                                    <?= csrf_field() ?>
                                    <input type="text" name="fish_date1" placeholder="日付"><br>
                                    <input type="text" name="fish_place1" placeholder="場所">
                                    <input type="text" name="fish_size1" placeholder="サイズ">

                                    <div class="add-bottun">
                                        <input type="submit" value="追加">
                                    </div>
                                </form>
                                <form action="/tasksort" method="GET">
                                    <div class="sizesort">
                                        <input type="submit" value="サイズソート" >
                                    </div>

                                </form>
                                <form action="/tasklist" method="GET">
                                    <div class="sizesort">
                                        <input type="submit" value="リセットボタン" >
                                    </div>

                                </form>
                            </div>

                            <table class="type06">
                                <thead>

                                <tr>
                                    <th>日付</th>
                                    <th>場所</th>
                                    <th>サイズ</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($tasks as $task): ?>
                                <tr>
                                    <td><?=$task->date?></td>
                                    <td><?=$task->place?></td>
                                    <td><?=$task->size?>cm</td>
                                    <td><form action="/task/delete" method="POST">
                                            <?=csrf_field()?>
                                            <input type="hidden" name="id" value="<?=$task->id?>">
                                            <input type="submit" value="削除">
                                         </form>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="slide">
                            <img src="\images\tinu.jpg" alt="img">
                            <h3 class="h3-tit">チヌ</h3>
                            <div class="asdf">
                                <form action="/task2" method="POST">
                                    <?= csrf_field() ?>
                                    <input type="text" name="fish_date2" placeholder="日付"><br>
                                    <input type="text" name="fish_place2" placeholder="場所">
                                    <input type="text" name="fish_size2" placeholder="サイズ">
                                    <input type="submit" value="追加">
                                </form>
                                <form action="/tasksort2" method="GET">
                                    <div class="sizesort">
                                        <input type="submit" value="サイズソート" >
                                    </div>

                                </form>
                                <form action="/tasklist" method="GET">
                                    <div class="sizesort">
                                        <input type="submit" value="リセットボタン" >
                                    </div>

                                </form>
                            </div>

                            <table class="type06">
                                <thead>

                                <tr>
                                    <th>日付</th>
                                    <th>場所</th>
                                    <th>サイズ</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($tasks2 as $task2): ?>
                                    <tr>
                                        <td><?=$task2->date?></td>
                                        <td><?=$task2->place?></td>
                                        <td><?=$task2->size?>cm</td>
                                        <td><form action="/task2/delete" method="POST">
                                                <?=csrf_field()?>
                                                <input type="hidden" name="id" value="<?=$task->id?>">
                                                <input type="submit" value="削除">
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="slide">
                            <img src="\images\mahata.jpg" alt="img">
                            <h3 class="h3-tit">マハタ</h3>
                            <div class="asdf">
                                <form action="/task3" method="POST">
                                    <?= csrf_field() ?>
                                    <input type="text" name="fish_date3" placeholder="日付"><br>
                                    <input type="text" name="fish_place3" placeholder="場所">
                                    <input type="text" name="fish_size3" placeholder="サイズ">
                                    <input type="submit" value="追加">
                                </form>
                                <form action="/tasksort3" method="GET">
                                    <div class="sizesort">
                                        <input type="submit" value="サイズソート" >
                                    </div>

                                </form>
                                <form action="/tasklist" method="GET">
                                    <div class="sizesort">
                                        <input type="submit" value="リセットボタン" >
                                    </div>

                                </form>
                            </div>

                            <table class="type06">
                                <thead>

                                <tr>
                                    <th>日付</th>
                                    <th>場所</th>
                                    <th>サイズ</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($tasks3 as $task3): ?>
                                    <tr>
                                        <td><?=$task3->date?></td>
                                        <td><?=$task3->place?></td>
                                        <td><?=$task3->size?>cm</td>
                                        <td><form action="/task3/delete" method="POST">
                                                <?=csrf_field()?>
                                                <input type="hidden" name="id" value="<?=$task->id?>">
                                                <input type="submit" value="削除">
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- /.inner -->
                </div> <!-- /#manual-slider07-overflow -->
            </div> <!-- /#manual-slider07-wrap -->
            <div id="manual-slider07-prev">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                <label for="manual-slider07-1"></label>
                <label for="manual-slider07-2"></label>
                <label for="manual-slider07-3"></label>
            </div> <!-- /#manual-slider07-prev -->
            <div id="manual-slider07-next">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                <label for="manual-slider07-1"></label>
                <label for="manual-slider07-2"></label>
                <label for="manual-slider07-3"></label>
            </div> <!-- /#manual-slider07-next -->
            <div id="manual-slider07-active">
                <label for="manual-slider07-1"></label>
                <label for="manual-slider07-2"></label>
                <label for="manual-slider07-3"></label>
            </div> <!-- /#manual-slider07-active -->
        </div> <!-- /#manual-slider07 -->
    </section>

    <section id="manual-slide06">
        <h2 class="h2-sample">釣った魚リスト</h2>
        <div id="manual-slider06">
            <div id="manual-slider07-wrap">
                <div id="manual-slider07-overflow">
                    <div class="inner">
                        <div class="slide">
                            <img src="\images\tyouka1.jpg" alt="img">
                            <h3 class="h3-tit">2018/6/30</h3>
                            <div class="asdf">
                                <form action="/task4" method="POST">
                                    <?= csrf_field() ?>
                                    <input type="text" name="fish_name4" placeholder="名前"><br>
                                    <input type="text" name="fish_place4" placeholder="場所">
                                    <input type="text" name="fish_size4" placeholder="サイズ">
                                    <input type="submit" value="追加"><br>
                                </form>
                                <br>
                                <div class="asdf-seach">
                                    <form action="/tasklist" method="GET">
                                        <br><input type="text" name="searchkey" placeholder="名前検索">
                                        <br><input type="submit" value="検索"><input type="submit" value="リセット">
                                    </form>
                                </div>
                            </div>

                            <table class="type06">
                                <thead>

                                <tr>
                                    <th>名前</th>
                                    <th>場所</th>
                                    <th>サイズ</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($tasks4 as $task): ?>
                                    <tr>
                                        <td><?=$task->name?></td>
                                        <td><?=$task->place?></td>
                                        <td><?=$task->size?>cm</td>
                                        <td><form action="/task4/delete" method="POST">
                                                <?=csrf_field()?>
                                                <input type="hidden" name="id" value="<?=$task->id?>">
                                                <input type="submit" value="削除">
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- /.inner -->
                </div> <!-- /#manual-slider07-overflow -->
            </div> <!-- /#manual-slider07-wrap -->

            </div> <!-- /#manual-slider07-active -->
        </div> <!-- /#manual-slider07 -->
    </section>

</div><!-- /コンテンツ部分おわり -->

</div><!-- /#sample-list -->



</div>

<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
            <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; OIC_2C04SN</li>
    </div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.poptrox.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>