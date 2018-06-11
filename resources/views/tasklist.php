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

    <!-- One -->
    <!--
        <section id="one">
            <header class="major">
                <h2>Ipsum lorem dolor aliquam ante commodo<br />
                magna sed accumsan arcu neque.</h2>
            </header>
            <p>Accumsan orci faucibus id eu lorem semper. Eu ac iaculis ac nunc nisi lorem vulputate lorem neque cubilia ac in adipiscing in curae lobortis tortor primis integer massa adipiscing id nisi accumsan pellentesque commodo blandit enim arcu non at amet id arcu magna. Accumsan orci faucibus id eu lorem semper nunc nisi lorem vulputate lorem neque cubilia.</p>
            <ul class="actions">
                <li><a href="#" class="button">Learn More</a></li>
            </ul>
        </section>
    -->
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
                                    <input type="submit" value="追加">
                                </form>
                                <form action="/tasksort" method="GET">
                                    <div class="sizesort">
                                        <input type="submit" value="サイズソート" >
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

<!-- Two -->
<!--
    <section id="two">
        <h2>Recent Work</h2>
        <div class="row">
            <article class="6u 12u$(xsmall) work-item">
                <a href="images/fulls/01.jpg" class="image fit thumb"><img src="images/thumbs/01.jpg" alt="" /></a>
                <h3>Magna sed consequat tempus</h3>
                <p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
            </article>
            <article class="6u$ 12u$(xsmall) work-item">
                <a href="images/fulls/02.jpg" class="image fit thumb"><img src="images/thumbs/02.jpg" alt="" /></a>
                <h3>Ultricies lacinia interdum</h3>
                <p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
            </article>
            <article class="6u 12u$(xsmall) work-item">
                <a href="images/fulls/03.jpg" class="image fit thumb"><img src="images/thumbs/03.jpg" alt="" /></a>
                <h3>Tortor metus commodo</h3>
                <p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
            </article>
            <article class="6u$ 12u$(xsmall) work-item">
                <a href="images/fulls/04.jpg" class="image fit thumb"><img src="images/thumbs/04.jpg" alt="" /></a>
                <h3>Quam neque phasellus</h3>
                <p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
            </article>
            <article class="6u 12u$(xsmall) work-item">
                <a href="images/fulls/05.jpg" class="image fit thumb"><img src="images/thumbs/05.jpg" alt="" /></a>
                <h3>Nunc enim commodo aliquet</h3>
                <p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
            </article>
            <article class="6u$ 12u$(xsmall) work-item">
                <a href="images/fulls/06.jpg" class="image fit thumb"><img src="images/thumbs/06.jpg" alt="" /></a>
                <h3>Risus ornare lacinia</h3>
                <p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
            </article>
        </div>
        <ul class="actions">
            <li><a href="#" class="button">Full Portfolio</a></li>
        </ul>
    </section>
-->
<!-- Three -->
<!--
                <section id="three">
                    <h2>Get In Touch</h2>
                    <p>Accumsan pellentesque commodo blandit enim arcu non at amet id arcu magna. Accumsan orci faucibus id eu lorem semper nunc nisi lorem vulputate lorem neque lorem ipsum dolor.</p>
                    <div class="row">
                        <div class="8u 12u$(small)">
                            <form method="post" action="#">
                                <div class="row uniform 50%">
                                    <div class="6u 12u$(xsmall)"><input type="text" name="name" id="name" placeholder="Name" /></div>
                                    <div class="6u$ 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Email" /></div>
                                    <div class="12u$"><textarea name="message" id="message" placeholder="Message" rows="4"></textarea></div>
                                </div>
                            </form>
                            <ul class="actions">
                                <li><input type="submit" value="Send Message" /></li>
                            </ul>
                        </div>
                        <div class="4u$ 12u$(small)">
                            <ul class="labeled-icons">
                                <li>
                                    <h3 class="icon fa-home"><span class="label">Address</span></h3>
                                    1234 Somewhere Rd.<br />
                                    Nashville, TN 00000<br />
                                    United States
                                </li>
                                <li>
                                    <h3 class="icon fa-mobile"><span class="label">Phone</span></h3>
                                    000-000-0000
                                </li>
                                <li>
                                    <h3 class="icon fa-envelope-o"><span class="label">Email</span></h3>
                                    <a href="#">hello@untitled.tld</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
-->
<!-- Four -->
<!--
    <section id="four">
        <h2>Elements</h2>

        <section>
            <h4>Text</h4>
            <p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
            This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
            This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
            <hr />
            <header>
                <h4>Heading with a Subtitle</h4>
                <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
            </header>
            <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
            <header>
                <h5>Heading with a Subtitle</h5>
                <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
            </header>
            <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
            <hr />
            <h2>Heading Level 2</h2>
            <h3>Heading Level 3</h3>
            <h4>Heading Level 4</h4>
            <h5>Heading Level 5</h5>
            <h6>Heading Level 6</h6>
            <hr />
            <h5>Blockquote</h5>
            <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
            <h5>Preformatted</h5>
            <pre><code>i = 0;

while (!deck.isInOrder()) {
print 'Iteration ' + i;
deck.shuffle();
i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
        </section>

        <section>
            <h4>Lists</h4>
            <div class="row">
                <div class="6u 12u$(xsmall)">
                    <h5>Unordered</h5>
                    <ul>
                        <li>Dolor pulvinar etiam magna etiam.</li>
                        <li>Sagittis adipiscing lorem eleifend.</li>
                        <li>Felis enim feugiat dolore viverra.</li>
                    </ul>
                    <h5>Alternate</h5>
                    <ul class="alt">
                        <li>Dolor pulvinar etiam magna etiam.</li>
                        <li>Sagittis adipiscing lorem eleifend.</li>
                        <li>Felis enim feugiat dolore viverra.</li>
                    </ul>
                </div>
                <div class="6u$ 12u$(xsmall)">
                    <h5>Ordered</h5>
                    <ol>
                        <li>Dolor pulvinar etiam magna etiam.</li>
                        <li>Etiam vel felis at lorem sed viverra.</li>
                        <li>Felis enim feugiat dolore viverra.</li>
                        <li>Dolor pulvinar etiam magna etiam.</li>
                        <li>Etiam vel felis at lorem sed viverra.</li>
                        <li>Felis enim feugiat dolore viverra.</li>
                    </ol>
                    <h5>Icons</h5>
                    <ul class="icons">
                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                        <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                        <li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
                    </ul>
                </div>
            </div>
            <h5>Actions</h5>
            <ul class="actions">
                <li><a href="#" class="button special">Default</a></li>
                <li><a href="#" class="button">Default</a></li>
            </ul>
            <ul class="actions small">
                <li><a href="#" class="button special small">Small</a></li>
                <li><a href="#" class="button small">Small</a></li>
            </ul>
            <div class="row">
                <div class="6u 12u$(small)">
                    <ul class="actions vertical">
                        <li><a href="#" class="button special">Default</a></li>
                        <li><a href="#" class="button">Default</a></li>
                    </ul>
                </div>
                <div class="6u$ 12u$(small)">
                    <ul class="actions vertical small">
                        <li><a href="#" class="button special small">Small</a></li>
                        <li><a href="#" class="button small">Small</a></li>
                    </ul>
                </div>
                <div class="6u 12u$(small)">
                    <ul class="actions vertical">
                        <li><a href="#" class="button special fit">Default</a></li>
                        <li><a href="#" class="button fit">Default</a></li>
                    </ul>
                </div>
                <div class="6u$ 12u$(small)">
                    <ul class="actions vertical small">
                        <li><a href="#" class="button special small fit">Small</a></li>
                        <li><a href="#" class="button small fit">Small</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section>
            <h4>Table</h4>
            <h5>Default</h5>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Item One</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>29.99</td>
                        </tr>
                        <tr>
                            <td>Item Two</td>
                            <td>Vis ac commodo adipiscing arcu aliquet.</td>
                            <td>19.99</td>
                        </tr>
                        <tr>
                            <td>Item Three</td>
                            <td> Morbi faucibus arcu accumsan lorem.</td>
                            <td>29.99</td>
                        </tr>
                        <tr>
                            <td>Item Four</td>
                            <td>Vitae integer tempus condimentum.</td>
                            <td>19.99</td>
                        </tr>
                        <tr>
                            <td>Item Five</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>29.99</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td>100.00</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <h5>Alternate</h5>
            <div class="table-wrapper">
                <table class="alt">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Item One</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>29.99</td>
                        </tr>
                        <tr>
                            <td>Item Two</td>
                            <td>Vis ac commodo adipiscing arcu aliquet.</td>
                            <td>19.99</td>
                        </tr>
                        <tr>
                            <td>Item Three</td>
                            <td> Morbi faucibus arcu accumsan lorem.</td>
                            <td>29.99</td>
                        </tr>
                        <tr>
                            <td>Item Four</td>
                            <td>Vitae integer tempus condimentum.</td>
                            <td>19.99</td>
                        </tr>
                        <tr>
                            <td>Item Five</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>29.99</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td>100.00</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>

        <section>
            <h4>Buttons</h4>
            <ul class="actions">
                <li><a href="#" class="button special">Special</a></li>
                <li><a href="#" class="button">Default</a></li>
            </ul>
            <ul class="actions">
                <li><a href="#" class="button big">Big</a></li>
                <li><a href="#" class="button">Default</a></li>
                <li><a href="#" class="button small">Small</a></li>
            </ul>
            <ul class="actions fit">
                <li><a href="#" class="button special fit">Fit</a></li>
                <li><a href="#" class="button fit">Fit</a></li>
            </ul>
            <ul class="actions fit small">
                <li><a href="#" class="button special fit small">Fit + Small</a></li>
                <li><a href="#" class="button fit small">Fit + Small</a></li>
            </ul>
            <ul class="actions">
                <li><a href="#" class="button special icon fa-download">Icon</a></li>
                <li><a href="#" class="button icon fa-download">Icon</a></li>
            </ul>
            <ul class="actions">
                <li><span class="button special disabled">Special</span></li>
                <li><span class="button disabled">Default</span></li>
            </ul>
        </section>

        <section>
            <h4>Form</h4>
            <form method="post" action="#">
                <div class="row uniform 50%">
                    <div class="6u 12u$(xsmall)">
                        <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
                    </div>
                    <div class="6u$ 12u$(xsmall)">
                        <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
                    </div>
                    <div class="12u$">
                        <div class="select-wrapper">
                            <select name="demo-category" id="demo-category">
                                <option value="">- Category -</option>
                                <option value="1">Manufacturing</option>
                                <option value="1">Shipping</option>
                                <option value="1">Administration</option>
                                <option value="1">Human Resources</option>
                            </select>
                        </div>
                    </div>
                    <div class="4u 12u$(small)">
                        <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                        <label for="demo-priority-low">Low Priority</label>
                    </div>
                    <div class="4u 12u$(small)">
                        <input type="radio" id="demo-priority-normal" name="demo-priority">
                        <label for="demo-priority-normal">Normal Priority</label>
                    </div>
                    <div class="4u$ 12u(small)">
                        <input type="radio" id="demo-priority-high" name="demo-priority">
                        <label for="demo-priority-high">High Priority</label>
                    </div>
                    <div class="6u 12u$(small)">
                        <input type="checkbox" id="demo-copy" name="demo-copy">
                        <label for="demo-copy">Email me a copy of this message</label>
                    </div>
                    <div class="6u$ 12u$(small)">
                        <input type="checkbox" id="demo-human" name="demo-human" checked>
                        <label for="demo-human">I am a human and not a robot</label>
                    </div>
                    <div class="12u$">
                        <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                    </div>
                    <div class="12u$">
                        <ul class="actions">
                            <li><input type="submit" value="Send Message" class="special" /></li>
                            <li><input type="reset" value="Reset" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>

        <section>
            <h4>Image</h4>
            <h5>Fit</h5>
            <div class="box alt">
                <div class="row 50% uniform">
                    <div class="12u$"><span class="image fit"><img src="images/fulls/05.jpg" alt="" /></span></div>
                    <div class="4u"><span class="image fit"><img src="images/thumbs/01.jpg" alt="" /></span></div>
                    <div class="4u"><span class="image fit"><img src="images/thumbs/02.jpg" alt="" /></span></div>
                    <div class="4u$"><span class="image fit"><img src="images/thumbs/03.jpg" alt="" /></span></div>
                    <div class="4u"><span class="image fit"><img src="images/thumbs/04.jpg" alt="" /></span></div>
                    <div class="4u"><span class="image fit"><img src="images/thumbs/05.jpg" alt="" /></span></div>
                    <div class="4u$"><span class="image fit"><img src="images/thumbs/06.jpg" alt="" /></span></div>
                    <div class="4u"><span class="image fit"><img src="images/thumbs/03.jpg" alt="" /></span></div>
                    <div class="4u"><span class="image fit"><img src="images/thumbs/02.jpg" alt="" /></span></div>
                    <div class="4u$"><span class="image fit"><img src="images/thumbs/01.jpg" alt="" /></span></div>
                </div>
            </div>
            <h5>Left &amp; Right</h5>
            <p><span class="image left"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
            <p><span class="image right"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
        </section>

    </section>
-->

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