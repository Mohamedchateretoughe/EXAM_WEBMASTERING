<?php if(is_admin()){echo WEB_ROOT."?controller=security&page=accueil.admin";} 
if(is_lecteur()){echo WEB_ROOT."?controller=security&page=accueil.lecteur";}
else{echo WEB_ROOT."?controller=security&page=accueil.redacteur";}?>