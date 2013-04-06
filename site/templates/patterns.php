<? if(!isset($_GET['ajax'])) { snippet('_header'); } ?>
        <style>
            .pattern {
                margin-top:4em;
            }
            details.primer {
                margin-top:2.5em;
                background-color:#e9e9e9;
                border-bottom:4px solid #e9e9e9;
                position:relative;
            }
            details.primer summary {
                font-size:1.5em;
                line-height:1;
                text-shadow:0 1px 0 #fff;
                background-color:#e9e9e9;
                border-radius:0.25em 0 0 0;
                padding:0.25em;
                overflow:hidden;
                position:absolute;
                right:0;
                top:-1.5em;
                }
                details.primer summary::-webkit-details-marker {
                    display:none;
                }
            details.primer section {
                padding:1.5%;
                overflow:hidden;
            }
            details.primer p.caption {
                margin-left:0;
                margin-bottom:0;
            }
            @media screen and (min-width:40em) {
                details.primer textarea {
                    width:58%;
                    float:left;
                }
                details.primer p.caption {
                    width:38%;
                    float:right;
                }
            }
        </style>

        <article>
            <header>
                <h1><?= smartypants($page->title()) ?></h1>
            </header>

            <?= kirbytext($page->text()) ?>

            <?
                $files = array();
                $patterns_dir = "assets/patterns/";
                $handle = opendir($patterns_dir);
                while (false !== ($file = readdir($handle))):
                    if(stristr($file,'.html')):
                        $files[] = $file;
                    endif;
                endwhile;
                rsort($files);
                foreach ($files as $file):
                    echo '<section class="pattern">';
                    include($patterns_dir.'/'.$file);
                    echo '<details class="primer">';
                    echo '<summary title="Show markup and usage">&#8226;&#8226;&#8226;</summary>';
                    echo '<section>';
                    echo '<textarea rows="10" cols="30" class="input code">'.htmlspecialchars(file_get_contents($patterns_dir.'/'.$file)).'</textarea>';
                    echo '<p class="caption"><strong>Usage:</strong> '.htmlspecialchars(@file_get_contents($patterns_dir.'/'.str_replace('.html','.txt',$file))).'</p>';
                    echo '</section>';
                    echo '</details><!--/.primer-->';
                    echo '</section><!--/.pattern-->';
                endforeach;
            ?>
        </article>
<? if(!isset($_GET['ajax'])) { snippet('_footer'); } ?>