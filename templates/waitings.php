<?php
/**
 * ownCloud - ocDownloader
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the LICENSE file.
 *
 * @var array $_
 * @var IL10N $l
 *
 * @author Xavier Beurois <www.sgc-univ.net>
 * @copyright Xavier Beurois 2015
 */

use OCP\IL10N;

style ('ocdownloader', 'styles.min');
script ('ocdownloader', 'badger.min');
script ('ocdownloader', 'ocdownloader.min');
script ('ocdownloader', 'waitings');
?>
<div id="content">
    <div id="app-navigation">
        <?php print_unescaped ($this->inc ('part.navigation')); ?>
    </div>
    <div id="app-content">
        <div id="app-content-wrapper">
            <div id="controls">
                <div class="righttitle"><?php print ($l->t ('Waiting Downloads')); ?></div>
                <div style="float: right;"><p class="lead"><?php print ($l->t (' using <strong>%s</strong>', $_['WD'])); ?></p></div>
            </div>
            <div class="content-queue">
                <table id="Queue" border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th width="20%" data-rel="FILENAME"><?php print ($l->t ('FILENAME')); ?></th>
                            <th width="10%" data-rel="PROTO" class="border"><?php print ($l->t ('PROTOCOL')); ?></th>
                            <th width="60%" data-rel="MESSAGE" class="border"><?php print ($l->t ('INFORMATION')); ?></th>
                            <th width="10%" data-rel="ACTION"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-rel="LOADER">
                            <td colspan="6"><div class="icon-loading-small"></div><?php print ($l->t ('Loading')); ?> ...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="loadingtext loadingblock" style="display:none;"><?php print ($l->t ('Loading')); ?> ...</div>
        </div>
    </div>
</div>
