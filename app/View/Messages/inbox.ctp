<div class="messages inbox">
<h1>Inbox</h1>
<ul>
<?php
foreach($messages as $m){
if($m['Dest']['id']==$me['id'] ){
echo "<li>";

echo 'Conversation avec <strong>'.$m['Exp']['username'].'</strong>';

echo '----- ';

echo ' '.$this->Html->link("Voir la discussion" ,array('controller'=>'messages', 'action'=>'discussion',$m['Exp']['id']));

/*echo ' '.$this->Html->link($m['Message']['contenu'] ,array('controller'=>'messages', 'action'=>'discussion',$m['Exp']['id']));
//echo ' <i>'.$m['Message']['date'].'</i>';*/
echo "</li>";
}
/*elseif($m['Exp']['id']== $me['id']){
echo "<li>";

echo 'Conversation avec <strong>'.$m['Dest']['username'].'</strong>';

echo '----- ';

echo ' '.$this->Html->link($m['Message']['contenu'] ,array('controller'=>'messages', 'action'=>'discussion',$m['Dest']['id']));
echo ' <i>'.$m['Message']['date'].'</i>';
echo "</li>";
}*/
}
?>
</ul>
</div>