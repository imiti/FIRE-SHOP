<?php
//zend by 旺旺ecshop2012所有 禁止倒卖 一经发现停止任何服务
$content = "A Test overflow<br>A Test overflow<br>A Test overflow<br>\n<img src=\"./res/logo.gif\" alt=\"logo\" style=\"width: XXXmm\"><br>\nB Test overflow<br>B Test overflow<br>B Test overflow<br>\n<img src=\"./res/logo.gif\" alt=\"logo\" style=\"width: XXXmm\"><br>\nC Test overflow<br>C Test overflow<br>C Test overflow<br>";
echo "<style type=\"text/css\">\n<!--\ndiv.zone\n{\n    border: solid 2mm #66AACC;\n    border-radius: 3mm;\n    padding: 1mm;\n    background-color: #FFEEEE;\n    color: #440000;\n}\ndiv.zone_over\n{\n    width: 30mm;\n    height: 35mm;\n    overflow: hidden;\n}\n\n-->\n</style>\n<page style=\"font-size: 10pt\">\n    <span style=\"font-size: 16pt ; font-weight: bold\">Démonstration des images</span><br>\n    <br>\n    <b>Dans un tableau :</b><br>\n    <table style=\"width: 50%;border: solid 3px #5544DD\" align=\"center\">\n        <tr>\n            <td style=\"width: 30%; text-align: left; \">Text à gauche<br>avec retour à<br>la ligne</td>\n            <td style=\"width: 40%; text-align: center;\"><img src=\"./res/logo.gif\" alt=\"\" ><br><i>légende</i></td>\n            <td style=\"width: 30%; text-align: right; \">Texte à droite</td>\n        </tr>\n    </table>\n    <br>\n    Texte <span style=\"text-decoration: underline\">souligné</span>,\n    texte <span style=\"text-decoration: overline\">surligné</span>,\n    texte <span style=\"text-decoration: line-through\">barré</span>,\n    texte <span style=\"text-decoration: underline overline line-through\">avec les trois</span>.<br>\n    <br>\n    <b>Dans un texte :</b><br>\n    texte à la suite d'une image, <img src=\"./res/logo.gif\" alt=\"\" style=\"height: 10mm\">\n    texte à la suite d'une image, répétitif car besoin d'un retour à la ligne\n    texte à la suite d'une image, répétitif car besoin d'un retour à la ligne\n    texte à la suite d'une image, répétitif car besoin d'un retour à la ligne\n    texte à la suite d'une image, répétitif car besoin d'un retour à la ligne<br>\n    <br>\n    <br>\n    Test différentes tailles texte\n    <span style=\"font-size: 18pt;\">Test Size</span>\n    <span style=\"font-size: 16pt;\">Test Size</span>\n    <span style=\"font-size: 14pt;\">Test Size</span>\n    <span style=\"font-size: 12pt;\">Test Size</span>\n    Test différentes tailles texte, répétitif car besoin d'un retour à la ligne\n    Test différentes tailles texte, répétitif car besoin d'un retour à la ligne\n    Test différentes tailles texte, répétitif car besoin d'un retour à la ligne\n    Test différentes tailles texte, répétitif car besoin d'un retour à la ligne\n    <br>\n    <br>\n    <b>Exemple de couleur : </b><br>\n    <span style=\"color: RGB(255, 0, 0)\">Texte de couleur</span><br>\n    <span style=\"color: RGB(0., 1., 0.)\">Texte de couleur</span><br>\n    <span style=\"color: RGB(0, 0, 100%)\">Texte de couleur</span><br>\n    <span style=\"color: CMYK(255, 0, 0, 0)\">Texte de couleur</span><br>\n    <span style=\"color: CMYK(0., 1., 0., 0.)\">Texte de couleur</span><br>\n    <span style=\"color: CMYK(0, 0, 100%, 0)\">Texte de couleur</span><br>\n    <span style=\"color: CMYK(0, 0, 0, 255)\">Texte de couleur</span><br>\n    <br>\n    <table>\n        <tr style=\"vertical-align: top\">\n            <td>\n                <u>Exemple 0 :</u><br><br>\n                <div class=\"zone\" >";
echo str_replace('XXX', '40', $content);
echo "</div>\n                sans overflow\n            </td>\n            <td>\n                <u>Exemple 1 :</u><br><br>\n                <div class=\"zone zone_over\" style=\"text-align: left; vertical-align: top; \">";
echo str_replace('XXX', '40', $content);
echo "</div>\n                hidden left top\n            </td>\n            <td>\n                <u>Exemple 2 :</u><br><br>\n                <div class=\"zone zone_over\" style=\"text-align: center; vertical-align: middle;\">";
echo str_replace('XXX', '40', $content);
echo "</div>\n                hidden center middle\n            </td>\n            <td>\n                <u>Exemple 3 :</u><br><br>\n                <div class=\"zone zone_over\" style=\"text-align: right; vertical-align: bottom;\">";
echo str_replace('XXX', '40', $content);
echo "</div>\n                hidden right bottom\n            </td>\n        </tr>\n        <tr style=\"vertical-align: top\">\n            <td>\n                <u>Exemple 0 :</u><br><br>\n                <div class=\"zone\" >";
echo str_replace('XXX', '20', $content);
echo "</div>\n                sans overflow\n            </td>\n            <td>\n                <u>Exemple 1 :</u><br><br>\n                <div class=\"zone zone_over\" style=\"text-align: left; vertical-align: top; \">";
echo str_replace('XXX', '20', $content);
echo "</div>\n                hidden left top\n            </td>\n            <td>\n                <u>Exemple 2 :</u><br><br>\n                <div class=\"zone zone_over\" style=\"text-align: center; vertical-align: middle;\">";
echo str_replace('XXX', '20', $content);
echo "</div>\n                hidden center middle\n            </td>\n            <td>\n                <u>Exemple 3 :</u><br><br>\n                <div class=\"zone zone_over\" style=\"text-align: right; vertical-align: bottom;\">";
echo str_replace('XXX', '20', $content);
echo "</div>\n                hidden right bottom\n            </td>\n        </tr>\n    </table>\n</page>";

?>
