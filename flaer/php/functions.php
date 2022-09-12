<?php 

function clear($userEingabe, $encoding = 'UTF-8') {

return htmlspecialchars(
                       strip_tags(trim($userEingabe)),
                       ENT_QUOTES | ENT_HTML5,
                       $encoding
                    );

}
