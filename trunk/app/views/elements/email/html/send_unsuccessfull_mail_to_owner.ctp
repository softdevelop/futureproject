<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title>Project was not funded</title>

    </head>

    <table cellspacing="0">
        <tr>
            <td style="padding:10px 0 10px 5px;background-color: #000;">
                <a href="<?php echo WEBSITE_FRONT_URL; ?>">
                    <img alt="" src="<?php echo WEBSITE_IMG_URL; ?>front/logo.png">
                </a>
            </td>
        </tr>
        <tr >
            <td>
                <table class="content">
                    <tr class="pt10">
                        <td>Dear <?php echo ucfirst($backername); ?>,</td>
                    </tr>
                    <tr class="word-wrap pt10 pb10">
                        <td>
                           Unfortunately, your project (<?php echo ucfirst($projectname); ?>) did not reach its funding goal.
                        </td>
                    </tr>
                    <tr class="word-wrap pt10 pb10">
                        <td>
							<div>
								What you need to do now: <br/>
								-immediately send a survey to your backers so that you know how to get their rewards <br/>
								-send us your bank details so we can transfer on your bank account the money you have raised<br/><br/>
								Thank you, <br/>
								Boostbloom
							</div>
                        </td>
                    </tr>
                 
                </table>   
            </td>
        </tr>
        <tr>
            <td>
                <p class=MsoNormal align=center style='text-align:center'><span
                        style='font-size:9.5pt;font-family:"MyriadProRegular";color:#666666'>Copyrights
                        2014 <?php echo Configure::read('CONFIG_SITE_TITLE'); ?>.com All Rights Reserved.<o:p></o:p></span></p>
            </td>
        </tr>
    </table>
</html>